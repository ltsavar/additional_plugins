<?php # $Id$

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

// Probe for a language include with constants. Still include defines later on, if some constants were missing
$probelang = dirname(__FILE__) . '/' . $serendipity['charset'] . 'lang_' . $serendipity['lang'] . '.inc.php';
if (file_exists($probelang)) {
    include $probelang;
}

include dirname(__FILE__) . '/lang_en.inc.php';

class serendipity_event_dejure extends serendipity_event
{
    function introspect(&$propbag) {
        global $serendipity;

        $propbag->add('name',        DEJURE_TITLE);
        $propbag->add('description', DEJURE_DESCRIPTION);
        $propbag->add('author',      'Garvin Hicking, dejure.org');
        $propbag->add('version',     '1.2');
        $propbag->add('stackable',   false);
        $propbag->add('groups',      array('FRONTEND_EXTERNAL_SERVICES'));

        $propbag->add('event_hooks',
            array(
                'frontend_display'                => true,
                'genpage'                         => true,
                'frontend_footer'                 => true
            )
        );

        $propbag->add('requirements',
            array(
                'serendipity' => '0.8',
                'smarty'      => '2.6.7',
                'php'         => '4.1.0'
            )
        );

        $propbag->add('configuration',
            array(
                'mail',
                'newsletter',
                'target',
                'css',
                'linkstyle'
            )
        );
    }

    function introspect_config_item($name, &$propbag) {
        global $serendipity;

        switch ($name) {
            case 'mail':
                $propbag->add('type',           'string');
                $propbag->add('name',           DEJURE_MAIL);
                $propbag->add('description',    DEJURE_MAIL_DESC);
                $propbag->add('default',        $serendipity['serendipityEmail']);
                break;

            case 'newsletter':
                $propbag->add('type',           'boolean');
                $propbag->add('name',           DEJURE_NEWSLETTER);
                $propbag->add('description',    DEJURE_NEWSLETTER_DESC);
                $propbag->add('default',        true);
                break;

            case 'target':
                $propbag->add('type',           'string');
                $propbag->add('name',           DEJURE_TARGET);
                $propbag->add('description',    DEJURE_TARGET_DESC);
                $propbag->add('default',        '');
                break;

            case 'css':
                $propbag->add('type',           'string');
                $propbag->add('name',           DEJURE_CSS);
                $propbag->add('description',    DEJURE_CSS_DESC);
                $propbag->add('default',        '');
                break;

            case 'linkstyle':
                $propbag->add('type',           'radio');
                $propbag->add('name',           DEJURE_LINKSTYLE);
                $propbag->add('description',    DEJURE_LINKSTYLE_DESC);
                $propbag->add('radio',          array(
                                                    'value' => array('schmal', 'weit'),
                                                    'desc'  => array(DEJURE_LINKSTYLE_SHORT, DEJURE_LINKSTYLE_WIDE)
                                                ));
                $propbag->add('default',        'schmal');
                $propbag->add('radio_per_row',  1);
                break;

            default:
                return false;
        }

        return true;
    }

    function setupDB() {
        global $serendipity;

        $built = $this->get_config('db_built', null);
        if (empty($built)) {
            serendipity_db_schema_import("CREATE TABLE {$serendipity['dbPrefix']}dejure (
                    ckey varchar(32),
                    cache text,
                    last_update int(10) {UNSIGNED}
                    )");
            serendipity_db_schema_import('CREATE UNIQUE INDEX dejure_cacheidx ON {PREFIX}dejure (ckey)');
        }
    }

    function generate_content(&$title) {
        $title = DEJURE_TITLE;
    }

    function install() {
        $this->setupDB();
    }

    function cleanup() {
        global $serendipity;

        // Purge DB cache
        serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}dejure");
    }

    function cache_cleanup() {
        global $serendipity;

        // Purge DB cache
        serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}dejure WHERE last_update < " . (time()-86400*4));
    }


    function djo_vernetzen_ueber_dejure_org($ausgangstext, $parameter = array()) {
    	// Mögliche Parameter: Anbieterkennung / Dokumentkennung / target / class / AktenzeichenIgnorieren / zeitlimit_in_sekunden

    	$uebergabe = "Originaltext=".urlencode($ausgangstext);
    	foreach ($parameter as $option => $wert) {
    		if ($option == "zeitlimit_in_sekunden") {
    			$zeitlimit_in_sekunden = $wert;
    		} else {
    			$uebergabe .= "&" . urlencode($option) . "=" . urlencode($wert);
    		}
    	}

    	if (!isset($zeitlimit_in_sekunden)) {
    		$zeitlimit_in_sekunden = 2;
    	}

    	$header = "POST http://rechtsnetz.dejure.org/dienste/vernetzung/vernetzen HTTP/1.0\r\n";
    	$header .= "Content-type: application/x-www-form-urlencoded\r\n";
    	$header .= "Content-length: " . strlen($uebergabe) . "\r\n\r\n";

    	$fp = fsockopen("rechtsnetz.dejure.org", 80, $errno, $errstr, 12);

    	if ($fp === false) { // Verbindung gescheitert
    		return false;
    	} else {
    		socket_set_timeout($fp, $zeitlimit_in_sekunden, 0); // Socket nach $zeitlimit_in_sekunden Sekunden auf jeden Fall wieder frei geben
    		socket_set_blocking($fp, true);
    		fputs($fp, $header.$uebergabe);
    		$timeOutSock = false;
    		$eofSock = false;
    		$rueckgabe="";
    		while (!$eofSock && !$timeOutSock) {
    			$rueckgabe.= fgets($fp, 1024); //
    			$stSock = socket_get_status($fp);
    			$eofSock = $stSock["eof"];
    			$timeOutSock = $stSock["timed_out"];
    		}
    		fclose($fp);
    		if (!preg_match("/^(.*?)\r?\n\r?\n\r?\n?(.*)/s",$rueckgabe, $rueckgabeARR)) {
    			return false; // Zeitüberschreitung oder Verbindungsproblem
    		} else if (strpos($rueckgabeARR[1],"200 OK")===false) {
    			return false; // sonstiges Serverproblem
    		} else {
    			$rueckgabe = $rueckgabeARR[2];
    			if (strlen($rueckgabe) < strlen($ausgangstext)) {
    				return false;
    			}

    			return $rueckgabe;
    		}
    	}
    }

    function djo_zwischenspeicherung() {
        global $serendipity;

    	if (is_array($this->djo_vernetzung_in_cache_schreiben)) {
    		foreach ($this->djo_vernetzung_in_cache_schreiben as $vernetzung) {
    			$schluessel = md5($vernetzung[0]);
			if ($vernetzung[0] == $vernetzung[1]) {
				$text = "<!-- idem -->";
			} else {
				$text = $vernetzung[1];
			}
    			serendipity_db_Query("DELETE FROM {$serendipity['dbPrefix']}dejure WHERE ckey = '" . $schluessel . "'");
    			serendipity_db_Query("INSERT INTO {$serendipity['dbPrefix']}dejure (ckey, cache, last_update) VALUES ('" . $schluessel . "', '" . serendipity_db_escape_string($text) . "', " . time() . ")");
    		}
    	}
    }

    function djo_vernetzen_ueber_cache(&$ausgangstext) {
        global $serendipity;

    	$schluessel = md5($ausgangstext);
    	$rueckgabe = serendipity_db_query("SELECT cache FROM {$serendipity['dbPrefix']}dejure WHERE ckey = '" . $schluessel . "'", true, 'assoc');
    	if (!empty($rueckgabe['cache']) && $rueckgabe['cache'] == "<!-- idem -->") {
		return $ausgangstext;
    	} else {
        	return $rueckgabe['cache'];
    	}

    }

    function djo_vernetzen(&$text) {
    	global $serendipity;

    	if (!preg_match("/§|&sect;|Art\.|\/[0-9][0-9](?![0-9\/])|[0-9][0-9], /", $text) || preg_match("/<!--ohnedjo-->/", $text)) {
    		return false;
    	}

    	$ergebnis = $this->djo_vernetzen_ueber_cache($text);
    	if (empty($ergebnis)) {
    		$ergebnis = $this->djo_vernetzen_ueber_dejure_org(
    		    $text,
    		    array(
    		        'Anbieterkennung' => urlencode($this->get_config('mail') . '|' . $serendipity['blogTitle']),
    		        'format'          => $this->get_config('linkstyle'),
    		        'target'          => $this->get_config('target'),
    		        'class'           => $this->get_config('css'),
    		        'newsletter'      => serendipity_db_bool($this->get_config('newsletter')) ? 'ja' : 'nein'
    		    )
    		);

            $ergebnis = $this->integritaetskontrolle($text, $ergebnis);

            if ($ergebnis) {
    		    $this->djo_vernetzung_in_cache_schreiben[] = array($text, $ergebnis);
    		}
    	}

        if ($ergebnis !== false) {
    	    $text = $ergebnis;
    	}

    	return true;
    }

	function integritaetskontrolle($ausgangstext, $neuertext) {
		if (preg_replace("/<a href=\"http:\/\/dejure.org\/[^>]*>([^<]*)<\/a>/i", "\\1", $ausgangstext) == preg_replace("/<a href=\"http:\/\/dejure.org\/[^>]*>([^<]*)<\/a>/i", "\\1", $neuertext)) {
			return $neuertext;
		} else {
			return $ausgangstext;
		}
	}

    function event_hook($event, &$bag, &$eventData, $addData = null) {
        global $serendipity;

        $hooks = &$bag->get('event_hooks');

        if (isset($hooks[$event])) {
            switch ($event) {
                case 'genpage':
                    if (date("G") < 6 && rand(0,50) < 1) {
                        $this->cache_cleanup();
                    }

                    break;

                case 'frontend_display':
                    if ($addData['from'] == 'functions_entries:printEntries') {
                        $this->djo_vernetzen($eventData['body']);
                        $this->djo_vernetzen($eventData['extended']);
                    } elseif ($eventData['comment'] != '') {
                        $this->djo_vernetzen($eventData['comment']);
                    }

                    break;

                case 'frontend_footer':
                    $this->djo_zwischenspeicherung();
                    break;

                default:
                    return false;
            }

            return true;
        }
        return false;
    }
}
