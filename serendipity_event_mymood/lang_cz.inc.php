<?php # $Id: lang_cz.inc.php,v 1.2 2007/12/03 11:30:04 garvinhicking Exp $

/**
 *  @version $Revision: 1.2 $
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2007/11/30
 */

@define('PLUGIN_MYMOOD_TITLE',                  'Moje n�lada');
@define('PLUGIN_MYMOOD_DESC',                   'Umo��uje v�m p�id�vat va�� moment�ln� n�ladu nebo n�lady k p��spv�k�m.');
@define('PLUGIN_MYMOOD_MOOD_MISSINGDATA',       'Chyb� u�ivatelsk� vstup');
@define('PLUGIN_MYMOOD_MOOD_LIST',              'Toto je seznam p��stupn�ch n�lad.');
@define('PLUGIN_MYMOOD_MOOD_NAME',              'Jm�no n�lady');
@define('PLUGIN_MYMOOD_MOOD_IMG',               'Obr�zek n�lady.  (Relativn� adresa vzheldem k z�kladn�mu adres��i serendipity nebo pln� absolutn� URL adresa)');
@define('PLUGIN_MYMOOD_MOOD_ASCII',             'Textov� repreznetace smajl�ka n�lady');
@define('PLUGIN_MYMOOD_MOOD_DELETE',            'Samzat');
@define('PLUGIN_MYMOOD_CONFIRM_RESET_BUTTON',   'Obnovit p�vodn� n�lady');
@define('PLUGIN_MYMOOD_CONFIRM_RESET',          'Opravdu chcete obnovit p�vodn� n�lady? Tento p��kaz sma�e v�echny Va�e nastaven� n�lady a nastav� m�sto nich p�ednastaven�.  \n\nVAROV�N�: Smaz�n� V�mi nastaven�ch n�lad m��e v�st k zobrazov�n� �patn�ch n�lad u star�ch p��sp�vk�!');

@define('PLUGIN_MYMOOD_INTRO',                  'Intro');
@define('PLUGIN_MYMOOD_INTRO_DESC',             'Intro je text, kter� uvozuje seznam Va�� n�lady. Nap��klad "Moje n�lada:"');
@define('PLUGIN_MYMOOD_OUTRO',                  'Outro');
@define('PLUGIN_MYMOOD_OUTRO_DESC',             'Podobn� jako intro text');
@define('PLUGIN_MYMOOD_TODAY_I_FEEL',           'Moje n�lada:');
@define('PLUGIN_MYMOOD_PLACE_FIELD',            'Um�st�t bl�zko');
@define('PLUGIN_MYMOOD_PLACE_FIELD_DESC',       'Pobl�� kter� ��sti p��sp�vku se m� n�lada zobrazit?');
@define('PLUGIN_MYMOOD_PLACE_FIELD_BODY',       'T�lo p��sp�veku');
@define('PLUGIN_MYMOOD_PLACE_FIELD_AUTHOR',     'Autor');
@define('PLUGIN_MYMOOD_PLACE_FIELD_TITLE',      'Nadpis');
@define('PLUGIN_MYMOOD_PLACE_FIELD_FOOTER',     'Z�hlav�');
@define('PLUGIN_MYMOOD_PLACE_BEFORE',           'Um�stit p�ed');
@define('PLUGIN_MYMOOD_PLACE_BEFORE_DESC',      'Um�stit n�ladu p�ed vybran� pole? Pokud je vybr�no NE, um�st� se za pole.');
@define('PLUGIN_MYMOOD_DISPLAY_FORMAT',         'Form�t zobrazen�');
@define('PLUGIN_MYMOOD_DISPLAY_FORMAT_DESC',    'Form�t zobrazen� n�lady. M��ete ou��t pole {name}, {img} a {ascii} v jak�mkoliv po�ad� a mno�stv� k zobrazen� n�lad podle Va�ich p��n�. Toto nebude m�t vliv na um�st�n� n�lady v nadpisu. M��ete zad�vat i hteml. (Standardn�: {img} {name})');
@define('PLUGIN_MYMOOD_MORE_NEW_MOODS',         'Dal�� nov� n�lady');
@define('PLUGIN_MYMOOD_NEW_MOOD',               'Nov� n�lada (n�zev)');
@define('PLUGIN_MYMOOD_NEW_ASCII',              'Text - smajl�k');
@define('PLUGIN_MYMOOD_NEW_IMAGE',              'Obr�zek (cesta)');

@define('PLUGIN_MYMOOD_ACCOMPLISHED'    , 'dokonal�      ');
@define('PLUGIN_MYMOOD_AGGRAVATED'      , 'p�it�uj�c�   ');
@define('PLUGIN_MYMOOD_AMUSED'          , 'pobaven�      ');
@define('PLUGIN_MYMOOD_ANGRY'           , 'zu�iv�        ');
@define('PLUGIN_MYMOOD_ANNOYED'         , 'rozmrzel�     ');
@define('PLUGIN_MYMOOD_ANXIOUS'         , '�zkostliv�    ');
@define('PLUGIN_MYMOOD_APATHETIC'       , 'otup�l�       '); 
@define('PLUGIN_MYMOOD_ARTISTIC'        , 'm�zou pol�ben�'); 
@define('PLUGIN_MYMOOD_AWAKE'           , 'bd�c�         '); 
@define('PLUGIN_MYMOOD_BITCHY'          , 'hanebn�       '); 
@define('PLUGIN_MYMOOD_BLAH'            , 'kecy          '); 
@define('PLUGIN_MYMOOD_BLANK'           , 'pr�zdno       '); 
@define('PLUGIN_MYMOOD_BORED'           , 'znud�n�       '); 
@define('PLUGIN_MYMOOD_BOUNCY'          , '�iv�          '); 
@define('PLUGIN_MYMOOD_BUSY'            , 'zanepr�zdn�n� '); 
@define('PLUGIN_MYMOOD_CALM'            , 'tich�         '); 
@define('PLUGIN_MYMOOD_CHEERFUL'        , 'vesel�        '); 
@define('PLUGIN_MYMOOD_CHIPPER'         , 'nastrouhan�   '); 
@define('PLUGIN_MYMOOD_COLD'            , 'chladn�       ');
@define('PLUGIN_MYMOOD_COMPLACENT'      , 'uspokojen�    ');
@define('PLUGIN_MYMOOD_CONFUSED'        , 'zmaten�       ');
@define('PLUGIN_MYMOOD_CONTEMPLATIVE'   , 'zahlouban�    ');
@define('PLUGIN_MYMOOD_CONTENT'         , 'spokojen�     ');
@define('PLUGIN_MYMOOD_CRANKY'          , 'potrhl�       ');
@define('PLUGIN_MYMOOD_CRAPPY'          , 'posran�       ');
@define('PLUGIN_MYMOOD_CRAZY'           , 'bl�zniv�      ');
@define('PLUGIN_MYMOOD_CREATIVE'        , 'n�padit�      ');
@define('PLUGIN_MYMOOD_CRUSHED'         , 'zdrcen�       ');
@define('PLUGIN_MYMOOD_CURIOUS'         , 'zv�dav�       ');
@define('PLUGIN_MYMOOD_CYNICAL'         , 'cynick�       ');
@define('PLUGIN_MYMOOD_DEPRESSED'       , 'depka         ');
@define('PLUGIN_MYMOOD_DETERMINED'      , 'odhodlan�     ');
@define('PLUGIN_MYMOOD_DEVIOUS'         , 'odoln�        ');
@define('PLUGIN_MYMOOD_DIRTY'           , '�pinav�       ');
@define('PLUGIN_MYMOOD_DISAPPOINTED'    , 'znechucen�    ');
@define('PLUGIN_MYMOOD_DISCONTENT'      , 'nespokojen�   ');
@define('PLUGIN_MYMOOD_DISTRESSED'      , 'zoufal�       ');
@define('PLUGIN_MYMOOD_DITZY'           , '��len�        ');
@define('PLUGIN_MYMOOD_DORKY'           , 'vyma�t�n�     ');
@define('PLUGIN_MYMOOD_DRAINED'         , 'vy�erpan�     ');
@define('PLUGIN_MYMOOD_DRUNK'           , 'opil�         ');
@define('PLUGIN_MYMOOD_ECSTATIC'        , 'nad�en�       ');
@define('PLUGIN_MYMOOD_EMBARRASSED'     , 'rozpa�it�     ');
@define('PLUGIN_MYMOOD_ENERGETIC'       , 'r�zn�         ');
@define('PLUGIN_MYMOOD_ENRAGED'         , 'vztelk�       ');
@define('PLUGIN_MYMOOD_ENTHRALLED'      , 'fascinovan�   ');
@define('PLUGIN_MYMOOD_ENVIOUS'         , 'z�vistiv�     ');
@define('PLUGIN_MYMOOD_EXANIMATE'       , 'bezduch�      ');
@define('PLUGIN_MYMOOD_EXCITED'         , 'vzru�en�      ');
@define('PLUGIN_MYMOOD_EXHAUSTED'       , 'u�tvan�       ');
@define('PLUGIN_MYMOOD_FLIRTY'          , 'flirtuj�c�    ');
@define('PLUGIN_MYMOOD_FRUSTRATED'      , 'frustrovan�   ');
@define('PLUGIN_MYMOOD_FULL'            , 'napln�n�      ');
@define('PLUGIN_MYMOOD_GEEKY'           , 'klaunsk�      ');
@define('PLUGIN_MYMOOD_GIDDY'           , 'spla�en�      ');
@define('PLUGIN_MYMOOD_GIGGLY'          , 'hih��m se     ');
@define('PLUGIN_MYMOOD_GLOOMY'          , 'sklesl�       ');
@define('PLUGIN_MYMOOD_GOOD'            , 'dobr�         ');
@define('PLUGIN_MYMOOD_GRATEFUL'        , 'p��jemn�      ');
@define('PLUGIN_MYMOOD_GROGGY'          , 'grogy         ');
@define('PLUGIN_MYMOOD_GRUMPY'          , 'mrzut�        ');
@define('PLUGIN_MYMOOD_GUILTY'          , 'provinil�     ');
@define('PLUGIN_MYMOOD_HAPPY'           , '��astn�       ');
@define('PLUGIN_MYMOOD_HIGH'            , 'vysok�        ');
@define('PLUGIN_MYMOOD_HOPEFUL'         , 'slibn�        ');
@define('PLUGIN_MYMOOD_HORNY'           , 'nadr�en�      ');
@define('PLUGIN_MYMOOD_HOT'             , '�hav�         ');
@define('PLUGIN_MYMOOD_HUNGRY'          , 'hladov�       ');
@define('PLUGIN_MYMOOD_HYPER'           , 'hyper         ');
@define('PLUGIN_MYMOOD_IMPRESSED'       , 'ohromen�      ');
@define('PLUGIN_MYMOOD_INDESCRIBABLE'   , 'nepopsateln�  ');
@define('PLUGIN_MYMOOD_INDIFFERENT'     , 'neutr�ln�     ');
@define('PLUGIN_MYMOOD_INFURIATED'      , 'rozvzteklen�  ');
@define('PLUGIN_MYMOOD_INTIMIDATED'     , 'vystra�en�    ');
@define('PLUGIN_MYMOOD_IRATE'           , 'rozzloben�    ');
@define('PLUGIN_MYMOOD_IRRITATED'       , 'podr�d�n�    ');
@define('PLUGIN_MYMOOD_JEALOUS'         , '��rliv�       ');
@define('PLUGIN_MYMOOD_JUBILANT'        , 'v�t�zoslavn�  ');
@define('PLUGIN_MYMOOD_LAZY'            , 'l�n�          ');
@define('PLUGIN_MYMOOD_LETHARGIC'       , 'letargie      ');
@define('PLUGIN_MYMOOD_LISTLESS'        , 'mdl�          ');
@define('PLUGIN_MYMOOD_LONELY'          , 'osam�l�       ');
@define('PLUGIN_MYMOOD_LOVED'           , 'milovan�      ');
@define('PLUGIN_MYMOOD_MELANCHOLY'      , 'z�dum�iv�     ');
@define('PLUGIN_MYMOOD_MELLOW'          , 'zral�         ');
@define('PLUGIN_MYMOOD_MISCHIEVOUS'     , 'uli�nick�     ');
@define('PLUGIN_MYMOOD_MOODY'           , 'n�ladov�      ');
@define('PLUGIN_MYMOOD_MOROSE'          , 'nevrl�        ');
@define('PLUGIN_MYMOOD_NAUGHTY'         , 'sprost�       ');
@define('PLUGIN_MYMOOD_NAUSEATED'       , 'hnusn�        ');
@define('PLUGIN_MYMOOD_NERDY'           , 'blb�          ');
@define('PLUGIN_MYMOOD_NERVOUS'         , 'nerv�zn�      ');
@define('PLUGIN_MYMOOD_NOSTALGIC'       , 'nostalgick�   ');
@define('PLUGIN_MYMOOD_NUMB'            , 'prok�ehl�     ');
@define('PLUGIN_MYMOOD_OKAY'            , 'oukej         ');
@define('PLUGIN_MYMOOD_OPTIMISTIC'      , 'optimistick�  ');
@define('PLUGIN_MYMOOD_PEACEFUL'        , 'poklidn�      ');
@define('PLUGIN_MYMOOD_PENSIVE'         , 'zamy�len�     ');
@define('PLUGIN_MYMOOD_PESSIMISTIC'     , 'pesimistick�  ');
@define('PLUGIN_MYMOOD_PISSED_OFF'      , 'obt�ovan�    ');
@define('PLUGIN_MYMOOD_PLEASED'         , 'pot�en�      ');
@define('PLUGIN_MYMOOD_PREDATORY'       , 'krut�         ');
@define('PLUGIN_MYMOOD_PRETTY'          , 'kr�sn�        ');
@define('PLUGIN_MYMOOD_PRODUCTIVE'      , 'v�konn�       ');
@define('PLUGIN_MYMOOD_QUIXOTIC'        , 'donkichotsk�  ');
@define('PLUGIN_MYMOOD_RECUMBENT'       , 'odpo��vaj�c�  ');
@define('PLUGIN_MYMOOD_REFRESHED'       , 'ob�erstven�   ');
@define('PLUGIN_MYMOOD_REJECTED'        , 'odm�tnut�     ');
@define('PLUGIN_MYMOOD_REJUVENATED'     , 'omlazen�      ');
@define('PLUGIN_MYMOOD_RELAXED'         , 'odpo�at�      ');
@define('PLUGIN_MYMOOD_RELIEVED'        , 'uvoln�n�      ');
@define('PLUGIN_MYMOOD_RESTLESS'        , 'neklidn�      ');
@define('PLUGIN_MYMOOD_RUSHED'          , 'uhnan�        ');
@define('PLUGIN_MYMOOD_SAD'             , 'smutn�        ');
@define('PLUGIN_MYMOOD_SATISFIED'       , 'spokojen�     ');
@define('PLUGIN_MYMOOD_SCARED'          , 'vylekan�      ');
@define('PLUGIN_MYMOOD_SHOCKED'         , '�okovan�      ');
@define('PLUGIN_MYMOOD_SICK'            , 'nemocn�       ');
@define('PLUGIN_MYMOOD_SILLY'           , 'bl�zniv�      ');
@define('PLUGIN_MYMOOD_SLEEPY'          , 'ospal�        ');
@define('PLUGIN_MYMOOD_SORE'            , 'bol�stka      ');
@define('PLUGIN_MYMOOD_STRESSED'        , 'p�et��en�     ');
@define('PLUGIN_MYMOOD_SURPRISED'       , 'p�ekvapen�    ');
@define('PLUGIN_MYMOOD_SYMPATHETIC'     , 'ch�pav�       ');
@define('PLUGIN_MYMOOD_THANKFUL'        , 'vd��n�        ');
@define('PLUGIN_MYMOOD_THIRSTY'         , '��zniv�       ');
@define('PLUGIN_MYMOOD_THOUGHTFUL'      , 'pe�liv�       ');
@define('PLUGIN_MYMOOD_TIRED'           , 'unaven�       ');
@define('PLUGIN_MYMOOD_TOUCHED'         , 'ura�en�       ');
@define('PLUGIN_MYMOOD_UNCOMFORTABLE'   , 'nepohodln�    ');
@define('PLUGIN_MYMOOD_WEIRD'           , 'tajupln�      ');
@define('PLUGIN_MYMOOD_WORKING'         , 'pracuj�c�     ');
@define('PLUGIN_MYMOOD_WORRIED'         , 'ustaran�      ');

?>