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
		<a href="http://www.graphicguestbook.com/roter-baum-de">Gästebuch</a> |
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

<h2>Das "Bündnis Dresden Nazifrei" äußert sich über Coloradio zu dem
Polizeieinsatz am 19.02.2011</h2>
<p>
<a href="http://coloradio.org/site/wp-content/files/nazifrei_nach_razzia.ogg">[hörbeitrag.ogg]</a>
</p>
<hr />


<h2>  Jugendhilfe-Newsletter des JugendInfoService Dresden, 25.02.2011  </h2>
<p>
"Der Jugendverein "Roter Baum" ist seit vielen Jahren als anerkannter Träger
der Jugendhilfe insbesondere in den Bereichen offene Kinder-und Jugendarbeit
sowie politische Jugendbildung tätig."
<a href="newsletter_juhi.pdf">[pdf]</a> 
</p>
<hr />
<h2> Pressemitteilung Arbeitsgruppe Jugendarbeit Jena, 23.02.2011 </h2>
<p>
"Hier wurden unbeteiligte Dritte seitens der Polizei
überfallen und mehrere Personen vorläufig festgenommen. Auch dieses
grundlose und martialische Vorgehen der Dresdner Polizei gegen eine
Jugendeinrichtung am 19.02. stellt aus unserer Sicht einen nicht
hinnehmbaren Skandal dar. Die AG Jugendarbeit Jena erklärt sich mit den
betroffenen Einrichtungen solidarisch. Wir fordern den Freistaat Sachsen und
die Stadt Dresden
auf, sich umgehend und nachhaltig für die Arbeitsfähigkeit der "Praxis"
sowie des "Roten Baum e.V." einzusetzen und deren Existenz langfristig zu
sichern."
<a href="pm_agja_jena.pdf">[pdf]</a>
</p>
<hr />

<h2>Morgenpost, 23.02.2011</h2>
<p>
"Dazu werden eine Partei und ein ihr nahestehender Verein kriminalisiert.
Das ist undemokratisch und kreuzgefährlich, solange die Beweise nicht
erdrückend sind. Ganz zu schweigen von dem möglichen Schadensersatz, für den
im Zweifel wir als Steuerzahler aufkommen müssen."
<a href="mopo_kom.pdf">[pdf]</a>
</p>
<hr />


<h2>Dresden-Fernsehen, 22.02.2011</h2>
<p>
"Im Vorfeld der Durchsuchungen waren sich Staatsanwaltschaft und Polizei auf Grund von Aufklärungsergebnissen darüber im Klaren, dass der Gebäudekomplex Großenhainer Straße 93 das Ziel der polizeilichen Maßnahmen war. Die Nennung der Großenhainer Straße 86a erfolgte irrtümlich und ist demnach ein zu vernachlässigender Formfehler, der nicht zur Rechtswidrigkeit des Einsatzes führt. Quelle: LKA Sachsen"
<a href="http://www.dresdeneins.tv/nachrichten/19_Februar__Bilanz-810.html">[onlinevideo]</a>
</p>
<hr />
<h2>Pressemitteilung der Staatsanwaltschaft Dresden, 22.02.2011</h2>
<p>
"Die Staatsanwaltschaft Dresden hat Vorwürfe zurückgewiesen, wonach ein Sondereinsatzkommando der Polizei bei einer Großrazzia das falsche Haus gestürmt haben soll. 
«Es ging
immer um das Gebäude an der Großenhainer Straße 93», sagte der Sprecher der Staatsanwaltschaft, Jan Hille, der Nachrichtenagentur dapd am Dienstag. Dies sei allen Einsatzkräften klar gewesen. Allerdings habe es einen Kommunikationsfehler gegeben, räumte Hille ein. Genannt worden sei den Beamten die «Großenhainer Straße 86 a». «Es wurde aber lediglich die Hausnummer verwechselt, nicht das Gebäude», erklärte der Sprecher."    
<a href="pm_sa.pdf">[pdf]</a>
</p>
<hr />
<h2>Sächsische Zeitung, 22.02.2011 </h2>
<p>
"Man habe den ganzen Komplex durchsuchen müssen, um Beweise zu sichern. Die Aktion habe sich nicht gegen die Linkspartei oder den Roten Baum als Verein gerichtet. Hille: "Das Verfahren läuft gegen unbekannt." Die Polizei bestätigte, dass bei der Razzia Türen gewaltsam geöffnet werden mussten. Der Schaden sei noch unklar."
<a href="sz_22_02.pdf">[pdf]</a> 
</p>

<hr />
<h2>Presseerklärung "Roter Baum" e.V., 21.02.2011</h2>

<p>
zu den Durchsuchungen im Jugendhaus des Jugendvereines "Roter Baum" e.V. am 19. Februar
</p>

<p>
Am Abend des 19. Februar stürmte ein Sondereinsatzkommando der Polizei maskiert und in
voller Kampfausrüstung das "Haus der Begegnung" in Dresden und das Jugendhaus des
Jugendvereines "Roter Baum" e.V.. Dabei wurden sämtliche Türen des Hauses zerstört und die
Einrichtung verwüstet, obwohl alle Schlüssel zu den Türen vor Ort waren und das SEK darüber
auch ausdrücklich informiert wurde. Mehrere Personen wurden durch das äußerst aggressive
und völlig unverhältnismäßige Vorgehen des Sondereinsatzkommandos verletzt. Anschließend
mussten sie sich nackt durchsuchen lassen, wurden mehrere Stunden gefesselt festgehalten,
dann schließlich in Gewahrsam genommen und erkennungsdienstlich behandelt.
</p>

<p>
Wir vermuten, dass die Durchsuchung im Zusammenhang mit dem "Bündnis Dresden Nazifrei"
steht, welches den breiten gesellschaftlichen Protest gegen den Neonaziaufmarsch in Dresden
unterstützt und Räume im "Haus der Begegnung" genutzt hat. In der Presse erklärte ein
Sprecher der Staatsanwaltschaft aber, dass gegen unseren Verein ermittelt wird.
</p>

<p>
Dazu stellen wir fest:
</p>

<p>
Der Jugendverein "Roter Baum" e.V. hat den Aufruf des "Bündnis Dresden Nazifrei" zum
friedlichen Protest unterstützt, welcher von einer Vielzahl von Politikern, Künstlern und
Initiativen getragen wird und dem sich 20 000 Menschen angeschlossen haben. Das
Jugendhaus wurde von jungen Sanitätern genutzt, welche die Demonstrationen am 13. und
19.02.2011 begleitet haben, um eventuellen Verletzten unparteiisch und ehrenamtlich zu helfen.
</p>

<p>
Bis jetzt wurde seitens der Staatsanwaltschaft uns gegenüber nichts erklärt. Uns sind weder die
Vorwürfe bekannt, noch dass Ermittlungen gegen unseren Verein laufen. "Wir gehen deswegen
davon aus, dass das gesamte Verfahren gegenstandlos ist und fordern von der
Staatsanwaltschaft eine Erklärung für ihr Vorgehen und eine öffentliche Richtigstellung", so
Martin Krappmann, 1. Vorsitzender des Jugendvereins "Roter Baum" e.V.. Wir protestieren
ausdrücklich gegen das Vorgehen der Staatsanwaltschaft und der Polizei und fordern eine
vollständige Aufklärung und Entschuldigung bei den Opfern und unserem Verein, dem durch die
öffentliche Verleumdung erheblicher Schaden entstehen könnte.
</p>

<p>
Wir distanzieren uns ausdrücklich von allen Ausschreitungen gegenüber Polizeibeamten.
Gewalt lehnen wir ab, sie stellt einen Widerspruch zu den Werten unseres Vereines dar.
</p>

<p>
Wir werden in den nächsten Tagen versuchen, unsere Arbeitsfähigkeit wieder herzustellen,
notwendige Reparaturen durchzuführen und unsere seit Jahren gute und bewährte Jugendarbeit
fortzusetzen. Dafür brauchen wir die Unterstützung und Solidarität aller Menschen, die sich
gegen die Naziaufmärsche gestellt haben. Vielen Dank.
</p>

<p>
Spendenkonto: Jugendverein "Roter Baum" e.V.
Bank für Sozialwirtschaft, BLZ 850 205 00, KontoNummer 3 577 200
</p>

<p>
Kontakt:
Jugendverein "Roter Baum" Dresden e.V., <br /> 
www.roter-baum.de, info@roter-baum.de <br />
Martin Krappmann, 1. Vorsitzender und Anne Gieland, 2. Vorsitzende, Anja Stephan, Geschäftsführerin, Tel: 0351-8582720
<a href="pm_rb.pdf">[pdf]</a>
</p>

		<!--ul>
			<li><a>Es ist wieder soweit &mdash; der Sommer ist in Sichtweite und wir wollen mit euch wegfahren.</a></li>
			<li><a>Ob an die Ostsee oder den Balaton, baden kann man fast überall.</a></li>
			<li><a>Man muss sich nur entscheiden können zwischen Rügen, Steilküste oder plattem ungarischem Strand.</a></li>
		</ul>
		
		<hr/>
		
		<p>
			Ferienlager <img src="img/li.gif" alt="&gt;"/> <a href="sparte.php?s=">ab Dresden</a> | <a href="sparte.php?s=">ab Berlin</a>
		</p-->
<?php } ?>
	</div>
</body>
</html>
