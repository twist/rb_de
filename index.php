<?php
$global_dat = '.global.php';
while (!file_exists ($global_dat)) $global_dat = '../'.$global_dat;
require_once $global_dat; unset ($global_dat);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<title>Roter Baum e.V.</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>"/>
	<meta name="keywords" content="ferienlager dresden berlin sachsen sommerferien winterferien kinderferienlager kinderreisen jugendreisen jugendcamps ferien ostsee"/>
	<link rel="shortcut icon" href="/favicon.ico"/>
	<link rel="search" title="Roter Baum Suche" type="application/opensearchdescription+xml" href="opensearch.xml"/>
	<link rel="stylesheet" type="text/css" media="screen,projection" href="/style.css"/>
	<link rel="stylesheet" type="text/css" media="screen,projection" href="/Galerie.css"/>
	<!--[if lt IE 8]><link rel="stylesheet" type="text/css" media="screen,projection" href="/ie.css"/><![endif]-->
	<script src="/.js/main.js" type="text/javascript"></script>
	<script src="/.js/Galerie.js" type="text/javascript"></script>
	<script src="/.js/request.js" type="text/javascript"></script>
	<script src="/.js/ajform.js" type="text/javascript"></script>
</head>
<body>
<div id="header">
	<div id="navigation">
    <a href="http://wiki.roter-baum.de">Wiki</a> |
		<a href="http://www.graphicguestbook.com/roter-baum-de">G�stebuch</a> |
		<a href="http://www.facebook.com/pages/Roter-Baum-eV/360591047714"><img id="facebook" src="/img/facebook.png" alt="facebook"/></a> |
		<form method="get" action="/suche"><p>
			<input type="text" name="q"/><input type="submit" value="Suchen"/>
		</p></form>
	</div>
	<a href="/"><img id="logo" src="/img/logo.png" alt="Roter Baum e.V."/></a>
</div>
	
	<div id="menu">
<?php

foreach ($sparten_unter[0] as $id) {
	echo '<div><div>
	<h1><a href="/sparte.php?s='.$id.'">'.$sparten_db[$id]['titel'].'</a></h1>
	</div></div>';
}

?>
		<!--[if lte IE 6]><hr><![endif]-->
	</div>
	<div class="inhalt">
<?php

$modul = LibVar::import ($_REQUEST['modul']);
if ($modul && strpos ($modul, '.') === false && is_file ('.module/'.$modul.'.php')) {
	$param = array();
	include '.module/'.$modul.'.php';
} else { ?>
		<h1 id="begruessung">Guten Tach!</h1>

<h1 align="right">Meldungen zum 19. Februar 2011</h1>
<hr />

<h2>OB-Stellvertreter Dirk Hilbert lehnt Antrag zu „Roter Baum" ab, DNN 04.03.2011</h2>
<p>
Die CDU-Fraktion ist am Donnerstag im Rat an OB-Stellvertreter Dirk Hilbert (FDP) mit ihrem Eilantrag gescheitert, 240.000 Euro Fördergelder für den „Roten Baum" unter Vorbehalt zu stellen. Der Erlass eines solchen Bescheides sei Geschäft der Verwaltung. Jeder Bescheid stehe unter einem Widerrufsrecht, sagte Hilbert. 

Weil Räume auf der Großenhainer Straße 93, die auch vom „Roten Baum" genutzt werden, im Zusammenhang mit dem 19. Februar durchsucht worden waren, wollte die CDU die Ermittlungen abwarten. Die Staatsanwaltschaft habe mitgeteilt, dass gegen den „Roten Baum" nicht ermittelt werde, so Linke-Chef André Schollbach. <a title="Ob Hilbert lehnt Antrag der CDU ab" href="http://www.dnn-online.de/dresden/citynews/fdp-abgeordneter-dirk-hilbert-lehnt-antrag-zu-roter-baum/r-citynews-a-22024.html" target="_blank">[Weblink]</a>

</p>
<hr />
<h2>Solidarit�tserkl�rung des Arbeitskreises Kritische Soziale Arbeit
Dresden, 01.03.2011</h2>
<p>
"Der Arbeitskreis Kritische Soziale Arbeit Dresden erkl�rt sich
gegen�ber dem B�ndnis "Dresden Nazifrei!", dem Jugendverein "Roter
Baum e.V.", dem Wohnprojekt "Praxis" und allen von unverh�ltnism��igen
polizeilichen Ma�nahmen betroffenen B�rger und B�rgerinnen
solidarisch." <a href="http://www.aks-dresden.org/solidaritaetserklaerung-des-arbeitskreises-kritische-soziale-arbeit-dresden-aks-dresden-bezueglich-der-vorfaelle-am-1922011/#c313">[Weblink]</a>
</p>
<hr />
<h2>Das "B�ndnis Dresden Nazifrei" �u�ert sich �ber Coloradio, 28.02.2011 </h2>
<p>
Interview bei <a href="http://www.coloradio.org">Coloradio</a> mit einem Vertreter des B�ndnis "Dresden Nazifrei" zum 19.02.2011
<a href="http://coloradio.org/site/wp-content/files/nazifrei_nach_razzia.ogg">[H�rbeitrag.ogg]</a>
</p>
<hr />


<h2>  Jugendhilfe-Newsletter des JugendInfoService Dresden, 25.02.2011  </h2>
<p>
"Der Jugendverein "Roter Baum" ist seit vielen Jahren als anerkannter Tr�ger
der Jugendhilfe insbesondere in den Bereichen offene Kinder-und Jugendarbeit
sowie politische Jugendbildung t�tig."
<a href="newsletter_juhi.pdf">[Pdf]</a> 
</p>
<hr />
<h2> Pressemitteilung Arbeitsgruppe Jugendarbeit Jena, 23.02.2011 </h2>
<p>
"Hier wurden unbeteiligte Dritte seitens der Polizei
�berfallen und mehrere Personen vorl�ufig festgenommen. Auch dieses
grundlose und martialische Vorgehen der Dresdner Polizei gegen eine
Jugendeinrichtung am 19.02. stellt aus unserer Sicht einen nicht
hinnehmbaren Skandal dar. Die AG Jugendarbeit Jena erkl�rt sich mit den
betroffenen Einrichtungen solidarisch. Wir fordern den Freistaat Sachsen und
die Stadt Dresden
auf, sich umgehend und nachhaltig f�r die Arbeitsf�higkeit der "Praxis"
sowie des "Roten Baum e.V." einzusetzen und deren Existenz langfristig zu
sichern."
<a href="pm_agja_jena.pdf">[Pdf]</a>
</p>
<hr />

<h2>Morgenpost, 23.02.2011</h2>
<p>
"Dazu werden eine Partei und ein ihr nahestehender Verein kriminalisiert.
Das ist undemokratisch und kreuzgef�hrlich, solange die Beweise nicht
erdr�ckend sind. Ganz zu schweigen von dem m�glichen Schadensersatz, f�r den
im Zweifel wir als Steuerzahler aufkommen m�ssen."
<a href="mopo_kom.pdf">[Pdf]</a>
</p>
<hr />


<h2>Dresden-Fernsehen, 22.02.2011</h2>
<p>
"Im Vorfeld der Durchsuchungen waren sich Staatsanwaltschaft und Polizei auf Grund von Aufkl�rungsergebnissen dar�ber im Klaren, dass der Geb�udekomplex Gro�enhainer Stra�e 93 das Ziel der polizeilichen Ma�nahmen war. Die Nennung der Gro�enhainer Stra�e 86a erfolgte irrt�mlich und ist demnach ein zu vernachl�ssigender Formfehler, der nicht zur Rechtswidrigkeit des Einsatzes f�hrt. Quelle: LKA Sachsen"
<a href="http://www.dresdeneins.tv/nachrichten/19_Februar__Bilanz-810.html">[Onlinevideo]</a>
</p>
<hr />
<h2>Pressemitteilung der Staatsanwaltschaft Dresden, 22.02.2011</h2>
<p>
"Die Staatsanwaltschaft Dresden hat Vorw�rfe zur�ckgewiesen, wonach ein Sondereinsatzkommando der Polizei bei einer Gro�razzia das falsche Haus gest�rmt haben soll. 
�Es ging
immer um das Geb�ude an der Gro�enhainer Stra�e 93�, sagte der Sprecher der Staatsanwaltschaft, Jan Hille, der Nachrichtenagentur dapd am Dienstag. Dies sei allen Einsatzkr�ften klar gewesen. Allerdings habe es einen Kommunikationsfehler gegeben, r�umte Hille ein. Genannt worden sei den Beamten die �Gro�enhainer Stra�e 86 a�. �Es wurde aber lediglich die Hausnummer verwechselt, nicht das Geb�ude�, erkl�rte der Sprecher."    
<a href="pm_sa.pdf">[Pdf]</a>
</p>
<hr />
<h2>S�chsische Zeitung, 22.02.2011 </h2>
<p>
"Man habe den ganzen Komplex durchsuchen m�ssen, um Beweise zu sichern. Die Aktion habe sich nicht gegen die Linkspartei oder den Roten Baum als Verein gerichtet. Hille: "Das Verfahren l�uft gegen unbekannt." Die Polizei best�tigte, dass bei der Razzia T�ren gewaltsam ge�ffnet werden mussten. Der Schaden sei noch unklar."
<a href="sz_22_02.pdf">[Pdf]</a> 
</p>

<hr />
<h2>Presseerkl�rung "Roter Baum" e.V., 21.02.2011</h2>

<p>
zu den Durchsuchungen im Jugendhaus des Jugendvereines "Roter Baum" e.V. am 19. Februar
</p>

<p>
Am Abend des 19. Februar st�rmte ein Sondereinsatzkommando der Polizei maskiert und in
voller Kampfausr�stung das "Haus der Begegnung" in Dresden und das Jugendhaus des
Jugendvereines "Roter Baum" e.V.. Dabei wurden s�mtliche T�ren des Hauses zerst�rt und die
Einrichtung verw�stet, obwohl alle Schl�ssel zu den T�ren vor Ort waren und das SEK dar�ber
auch ausdr�cklich informiert wurde. Mehrere Personen wurden durch das �u�erst aggressive
und v�llig unverh�ltnism��ige Vorgehen des Sondereinsatzkommandos verletzt. Anschlie�end
mussten sie sich nackt durchsuchen lassen, wurden mehrere Stunden gefesselt festgehalten,
dann schlie�lich in Gewahrsam genommen und erkennungsdienstlich behandelt.
</p>

<p>
Wir vermuten, dass die Durchsuchung im Zusammenhang mit dem "B�ndnis Dresden Nazifrei"
steht, welches den breiten gesellschaftlichen Protest gegen den Neonaziaufmarsch in Dresden
unterst�tzt und R�ume im "Haus der Begegnung" genutzt hat. In der Presse erkl�rte ein
Sprecher der Staatsanwaltschaft aber, dass gegen unseren Verein ermittelt wird.
</p>

<p>
Dazu stellen wir fest:
</p>

<p>
Der Jugendverein "Roter Baum" e.V. hat den Aufruf des "B�ndnis Dresden Nazifrei" zum
friedlichen Protest unterst�tzt, welcher von einer Vielzahl von Politikern, K�nstlern und
Initiativen getragen wird und dem sich 20 000 Menschen angeschlossen haben. Das
Jugendhaus wurde von jungen Sanit�tern genutzt, welche die Demonstrationen am 13. und
19.02.2011 begleitet haben, um eventuellen Verletzten unparteiisch und ehrenamtlich zu helfen.
</p>

<p>
Bis jetzt wurde seitens der Staatsanwaltschaft uns gegen�ber nichts erkl�rt. Uns sind weder die
Vorw�rfe bekannt, noch dass Ermittlungen gegen unseren Verein laufen. "Wir gehen deswegen
davon aus, dass das gesamte Verfahren gegenstandlos ist und fordern von der
Staatsanwaltschaft eine Erkl�rung f�r ihr Vorgehen und eine �ffentliche Richtigstellung", so
Martin Krappmann, 1. Vorsitzender des Jugendvereins "Roter Baum" e.V.. Wir protestieren
ausdr�cklich gegen das Vorgehen der Staatsanwaltschaft und der Polizei und fordern eine
vollst�ndige Aufkl�rung und Entschuldigung bei den Opfern und unserem Verein, dem durch die
�ffentliche Verleumdung erheblicher Schaden entstehen k�nnte.
</p>

<p>
Wir distanzieren uns ausdr�cklich von allen Ausschreitungen gegen�ber Polizeibeamten.
Gewalt lehnen wir ab, sie stellt einen Widerspruch zu den Werten unseres Vereines dar.
</p>

<p>
Wir werden in den n�chsten Tagen versuchen, unsere Arbeitsf�higkeit wieder herzustellen,
notwendige Reparaturen durchzuf�hren und unsere seit Jahren gute und bew�hrte Jugendarbeit
fortzusetzen. Daf�r brauchen wir die Unterst�tzung und Solidarit�t aller Menschen, die sich
gegen die Naziaufm�rsche gestellt haben. Vielen Dank.
</p>

<p>
Spendenkonto: Jugendverein "Roter Baum" e.V.
Bank f�r Sozialwirtschaft, BLZ 850 205 00, KontoNummer 3 577 200
</p>

<p>
Kontakt:
Jugendverein "Roter Baum" Dresden e.V., <br /> 
www.roter-baum.de, info@roter-baum.de <br />
Martin Krappmann, 1. Vorsitzender und Anne Gieland, 2. Vorsitzende, Anja Stephan, Gesch�ftsf�hrerin, Tel: 0351-8582720
<a href="pm_rb.pdf">[Pdf]</a>
</p>

		<!--ul>
			<li><a>Es ist wieder soweit &mdash; der Sommer ist in Sichtweite und wir wollen mit euch wegfahren.</a></li>
			<li><a>Ob an die Ostsee oder den Balaton, baden kann man fast �berall.</a></li>
			<li><a>Man muss sich nur entscheiden k�nnen zwischen R�gen, Steilk�ste oder plattem ungarischem Strand.</a></li>
		</ul>
		
		<hr/>
		
		<p>
			Ferienlager <img src="img/li.gif" alt="&gt;"/> <a href="sparte.php?s=">ab Dresden</a> | <a href="sparte.php?s=">ab Berlin</a>
		</p-->
<?php } ?>
	</div>
</body>
</html>
