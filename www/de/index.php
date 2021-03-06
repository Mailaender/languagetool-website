<?php
$page = "de";
$title = "LanguageTool";
$title2 = "Stil- und Grammatikprüfung";
$lastmod = "2013-08-10 13:43:00 CET";
$enable_textcheck = 1;
$enable_fancybox = 1;
include("../../include/header.php");
?>

<p>LanguageTool ist eine <a href="http://de.wikipedia.org/wiki/Freie_Software" target="_blank">freie</a> Stil- und Grammatikprüfung, die neben Deutsch noch <a href="http://www.languagetool.org/languages/">mehr als 20 weitere Sprachen</a> unterstützt.
Sie können es hier ausprobieren:</p>

<?php
$checkSubmitButtonValue = "Text Prüfen";
$showLanguageBox = 0;
$checkDefaultLang = "de-DE";
$checkDefaultText = "Fügen Sie hier Ihren Text ein. oder nutzen Sie diesen Text als Beispiel für ein Paar Fehler ,die LanguageTool erkennen kann. ( Eine Rechtschreibprüfun findet findet übrigens auch statt. Nachdem wir die ABM-Maßnahme bemängelten, wurden die Problem sofort behoben. Ihm wurde Angst und bange, als er davon hörte.";
$checkLanguage['auto']  = 'automatisch erkennen';
$checkLanguage['en-US'] = 'Englisch';
$checkLanguage['ast']   = 'Asturisch';
$checkLanguage['be']    = 'Weißrussisch';
$checkLanguage['br']    = 'Bretonisch';
$checkLanguage['zh']    = 'Chinesisch';
$checkLanguage['da']    = 'Dänisch';
$checkLanguage['eo']    = 'Esperanto';
$checkLanguage['fr']    = 'Französisch';
$checkLanguage['gl']    = 'Galicisch';
$checkLanguage['de-DE'] = 'Deutsch';
$checkLanguage['es']    = 'Spanisch';
$checkLanguage['is']    = 'Isländisch';
$checkLanguage['it']    = 'Italienisch';
$checkLanguage['ca']    = 'Katalanisch';
$checkLanguage['km']    = 'Khmer';
$checkLanguage['lt']    = 'Litauisch';
$checkLanguage['ml']    = 'Malayalam';
$checkLanguage['nl']    = 'Niederländisch';
$checkLanguage['pl']    = 'Polnisch';
$checkLanguage['pt']    = 'Portugiesisch';
$checkLanguage['ro']    = 'Rumänisch';
$checkLanguage['ru']    = 'Russisch';
$checkLanguage['sk']    = 'Slowakisch';
$checkLanguage['sl']    = 'Slowenisch';
$checkLanguage['sv']    = 'Schwedisch';
$checkLanguage['tl']    = 'Tagalog';
$checkLanguage['uk']    = 'Ukrainisch';
include("../../include/checkform.php");
?>

<p>Sie können LanguageTool auch <a href="http://www.languagetool.org/webstart/web/LanguageTool.jnlp">per Java WebStart testen</a> oder herunterladen:</p>
        
<div class="downloadSection">
    <table width="100%">
      <tr>
        <td>
           <?php
           $downloadTitle = "LanguageTool herunterladen";
           $downloadLabel = "für LibreOffice/OpenOffice";
           include("../../include/download.php");
           ?>
        </td>
        <td>
           <?php
           $downloadTitleStandAlone = "LanguageTool herunterladen";
           $downloadLabelStandAlone = "als eigenständiges Programm";
           include("../../include/downloadStandAlone.php");
           ?>
        </td>
      </tr>
      <tr>
        <td><a href="#liboinstall">Installationsanleitung für LibreOffice/OpenOffice</a></td>
        <td><a href="#standalone">LanguageTool als Stand-Alone-Anwendung verwenden</a></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="middle">
          <?php
          $downloadTitleFx = "LanguageToolFx herunterladen";
          $downloadLabelFx = "Erweiterung für Firefox";
          $downloadUrlFx = "https://addons.mozilla.org/de/firefox/addon/languagetoolfx/";
          include("../../include/downloadFx.php");
          ?>
        </td>
      </tr>
    </table>
</div>

<h2>Funktionen</h2>

LanguageTool erkennt <a href="http://community.languagetool.org/rule/list?lang=de">mehr als 1700</a> Fehler in deutschsprachigen Texten:<br/><br/>

<small>(Zeigen Sie mit der Maus auf einen Fehler, um die dazugehörige Meldung anzuzeigen.)</small>

<a class="fancyboxImage" title="LanguageTool als Erweiterung in LibreOffice" href="images/screenshot.png"><img style="margin: 15px" align="right" src="images/screenshot_small.png" alt="Bilschirmfoto von LanguageTool in LibreOffice"/></a>

<ul>
    <li>Grammatik
        <ul>
            <li><span class="errorMarker" title="Möglicherweise fehlende grammatische Übereinstimmung zwischen Artikel und Nomen bezüglich Genus">Der Haus</span> ist groß.</li>
            <li>Ich bin <span class="errorMarker" title="Die Präposition 'wegen' erfordert i.d.R. den Genitiv.">wegen diesem</span> Stau zu spät gekommen.</li>
        </ul>
    </li>
    <li>Groß-/Kleinschreibung
        <ul>
            <li>Die <span class="errorMarker" title="Meinten Sie 'Französische' Revolution (1789–1799)? Zu mehrteiligen Namen gehörende Adjektive werden großgeschrieben.">französische</span> Revolution war ein wichtiges historisches Ereignis.</li>
            <li><span class="errorMarker" title="Dieser Satz fängt nicht mit einem großgeschriebenen Wort an">überprüfen</span> der Großschreibung am Satzanfang.</li>
        </ul>
    </li>
    <li>Zusammen-/Getrenntschreibung
        <ul>
            <li>Er hat <span class="errorMarker" title="'dieselbe' wird zusammengeschrieben.">die selbe</span> Frage gestellt.</li>
        </ul>
    </li>
    <li>Zeichensetzung
        <ul>
            <li>Ich fragte sie<span class="errorMarker" title="Nur hinter einem Komma steht ein Leerzeichen, aber nicht davor."> ,</span> ob sie kommen möchte.</li>
            <li>Ich lerne <span class="errorMarker" title="Ein mit der Subjunktion 'weil' eingeleiteter Nebensatz wird i.d.R. mit (mindestens) einem Komma vom Hauptsatz abgetrennt.">weil</span> ich gute Noten haben will.</li>
        </ul>
    </li>
    <li>Mögliche Tippfehler
        <ul>
            <li>Er verzieht keine <span class="errorMarker" title="Meinten Sie 'Miene'? (Mine = unterirdischer Gang, Sprengkörper, Kugelschreibermine)">Mine</span>.</li>
            <li>Ich werde dir eine <span class="errorMarker" title="Meinten Sie 'E-Mail' (elektronische Post) statt 'Email' (Schmelzüberzug)?">Email</span> schicken.</li>
            <li>Geht es<span class="errorMarker" title="Möglicher Tippfehler: mehr als ein Leerzeichen hintereinander">&nbsp;&nbsp;</span>dir gut?</li>
        </ul>
    </li>
    <li>Umgangssprache
        <ul>
            <li>Es wird eine höhere <span class="errorMarker" title="Meinten Sie 'elektrische Spannung'? 'Volt-Zahl' ist eine umgangssprachliche Ausdrucksweise.">Volt-Zahl</span> benötigt.</li>
        </ul>
    </li>
    <li>Redundanz
        <ul>
            <li>Können Sie mir die <span class="errorMarker" title="'ISBN' steht für 'International Standard Book Number' – ersetzen durch ISBN?">ISBN-Nummer</span> sagen?</li>
        </ul>
    </li>
    <li>u.v.m.</li>
</ul>

Außerdem weist LanguageTool in fremdsprachigen Texten auf <a href="http://de.wikipedia.org/wiki/Falscher_Freund" target="_blank">falsche Freunde</a> hin.<br/><br/>


<h2 id="liboinstall">LanguageTool in LibreOffice/OpenOffice nutzen</h2>
LanguageTool steht als sogenannte Extension (Erweiterung) für die <a href="http://de.wikipedia.org/wiki/Freie_Software" target="_blank">freien</a> Office-Pakete <a href="http://de.libreoffice.org/" target="_blank">LibreOffice</a> und <a href="http://de.openoffice.org/" target="_blank">Apache OpenOffice</a> zur Verfügung. Um LanguageTool in dem Office-Paket zu nutzen, folgen Sie einfach folgenden Schritten:

<ol>
    <li>Falls Java nicht auf Ihrem Computer installiert ist, laden Sie es sich <a href="http://www.java.com/de/download/manual.jsp" target="_blank">hier kostenlos herunter</a> und installieren Sie es. Ubuntu-Nutzer installieren bitte das Paket <a href="apt:libreoffice-java-common">libreoffice-java-common</a>.</li>
    <li>Laden Sie sich die aktuelle Version von LanguageTool herunter. (Der Downloadbutton befindet sich oben auf dieser Seite.)</li>
    <li>Öffnen Sie LibreOffice bzw. OpenOffice.org und wählen Sie im Menü <i>Extras</i> den Punkt <i>Extension Manager</i>.</li>
    <li>Klicken Sie nun auf <i>Hinzufügen&hellip;</i>, wählen Sie die in Schritt 2 heruntergeladene Datei aus und klicken Sie auf <i>Öffnen</i>.</li>
    <li>Starten Sie nach der Installation LibreOffice bzw. OpenOffice.org neu.</li>
</ol>

Sofern die automatische Rechtschreibprüfung aktiviert ist, werden die von LanguageTool gefundenen Probleme im Text blau markiert. Die Einstellungen von LanguageTool können Sie über <i>Extras &rarr; LanguageTool &rarr; Konfiguration&hellip;</i> ändern.

<h2 id="standalone">LanguageTool als eigenständiges Programm benutzen</h2>

<ol>
    <li>Entpacken Sie die heruntergeladene zip-Datei (z.&nbsp;B. durch Rechtsklick &rarr; Entpacken &rarr; Hier o.&nbsp;ä.).</li>
    <li>Führen Sie die Datei languagetool-standalone.jar mit Java aus (i.&nbsp;d.&nbsp;R. durch Doppelklick möglich).</li>
</ol>

<p>
<?=show_link("weitere Verwendungsmöglichkeiten", "../usage/", 0)?>
</p>

<p>
In <a target="_blank" href="http://www.freiesmagazin.de/mobil/freiesMagazin-2012-08-bilder.html#12_08_languagetool1">freiesMagazin 08/2012</a> ist ein ausführlicher Artikel, in dem die Verwendungsmöglichkeiten und die Funktionsweise von LanguageTool beschrieben werden, erschienen.
</p>

<h2>Spezielle Varianten</h2>

<p>LanguageTool unterstützt jetzt auch <a href="leichte-sprache/">eine Prüfung auf Leichte Sprache</a>.</p>

<p></p>

<h2>Kontakt</h2>
<!-- TODO: direkter Kontakt? -->

<p>Fragen beantworten wir im <a href="../forum">Forum</a>, wo Sie auch gerne Einträge auf Deutsch hinterlassen können. Dort ist es auch möglich, Fehlalarme von LanguageTool zu melden oder neue Regeln vorzuschlagen.</p>


<?php
include("../../include/footer.php");
?>
