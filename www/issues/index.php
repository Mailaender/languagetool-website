<?php
$page = "other";
$title = "LanguageTool";
$title2 = "Common Problems";
$lastmod = "2013-06-29 22:30:00 CET";
include("../../include/header.php");
?>

<h2 class="firstpara"><a name="commonproblems">Checklist in Case of Problems</a></h2>

<ul class="largelist">
<li>LibreOffice 3.5 and later comes with its own integrated grammar checker (LightProof) which disables LanguageTool for
    English and Russian.
    Use Options -> Language Settings -> Writing aids -> Edit... to disable LightProof and enable LanguageTool for the language
    you are working with to make LanguageTool work.</li>
<li>Did you restart LibreOffice/OpenOffice.org - including the QuickStarter - after installation of LanguageTool? This is required,
	even though there is no dialog saying so. (<a href="https://bugs.freedesktop.org/show_bug.cgi?id=46279">#46279</a>, <a href="http://issues.apache.org/ooo/show_bug.cgi?id=88692">#88692</a>)</li>
<li>Make sure <a href="http://www.java.com/en/download/manual.jsp">Java 6.0 or later from Oracle/Sun</a>
	is installed on your system. Java versions which are not from Oracle/Sun may not work.</li>
<li>Make sure this version of Java is selected in OpenOffice.org
	(under <em>Tools -&gt; Options -&gt; Java</em>).</li>
<li>If LanguageTool doesn't start and you see no error message, please
	check if the extension is enabled in the Extension manager
	(under <em>Tools -&gt; Extension Manager</em>).</li>
</ul>

<h2>Common problems with LibreOffice/OpenOffice.org integration</a></h2>

<ul class="largelist">

<li>If you get <strong>"Could not create Java implementation loader"</strong>, please work through
    <a href="http://www.zotero.org/support/word_processor_plugin_troubleshooting#could_not_create_java_implementation_loader">these suggestions</a>.
    <strong>Note: </strong> if you have this problem on 64-bit Windows,
    it may be caused by a 64-bit version of Java. LibreOffice and Apache OpenOffice are only built as 32-bit applications
    and will not work with a 64-bit Java. You need to use a <a href="http://www.java.com/en/download/faq/java_win64bit.xml#Java for 32-bit">32-bit build of Java for Windows</a>.
    (<a href="https://issues.apache.org/ooo/show_bug.cgi?id=118346">OOo bug #118346</a>)
    </li>
    
<li><strong>On Ubuntu</strong>, install the <tt>libreoffice-java-common</tt> or <tt>openoffice.org-java-common</tt> package.
    One problem solved by this is getting <a href="../images/class_not_found.png">a long error message with "NoClassDefFoundError"</a> during installation.
    See
	<a href="http://nancib.wordpress.com/2008/05/03/fixing-the-openofficeorg-grammar-glitch-in-ubuntu-hardy/">this blog posting</a>
	for details.</li>

<li><strong>On Ubuntu</strong>, if you get a message similar to <tt>Exception in thread "Thread-402" java.awt.HeadlessException</tt> in LibreOffice/OpenOffice,
	see <a href="http://stackoverflow.com/questions/5362512/unable-to-run-java-gui-programs-with-ubuntu/5362572#5362572">this stackoverflow answer</a>.
    Note that the message might not appear in a dialog but only on the command line, so you might want to start LibreOffice/OpenOffice from a terminal window.</li>

<li>If you get <strong>"This media-type is not supported: application/vnd.sun.star.package-bundle2.0.00"</strong> during installation, please consider
    <a href="http://user.services.openoffice.org/en/forum/viewtopic.php?p=58403#p58403">resetting your OpenOffice user profile</a>.</li>

<li><strong>Freeze on startup</strong>: for some people, LanguageTool freezes LibreOffice or OpenOffice.org on startup for seconds to minutes.
   This bug has been fixed in <strong>LibreOffice 3.5.4</strong> and <strong>Apache OpenOffice 3.4.1</strong> - all older versions are affected
   by this, so we strongly recommend to use at least these releases.
   If you cannot update, we recommend you use Java 6 for now,
   as the freeze is worse with Java 7. <a href="http://sourceforge.net/p/languagetool/bugs/66/">Bug report</a>.
</li>

<li>If you get <strong>Failed to load rules for language ... Caused by java.lang.ClassNotFoundException: Loading rules failed: Duplicate class definition</strong>:
    For some reason LanguageTool is installed twice as an extension in OpenOffice.org. You can try deleting the directories listed
    in the error message after making a backup. (The directories to be deleted have random names like "EE31.tmp_" or similar - exit OpenOffice.org
    before deleting anything).</li>
<li>The <strong>menu items in LibreOffice/OpenOffice.org get mixed up</strong> when both <a href="http://open.afterthedeadline.com/">After the Deadline</a>
	and LanguageTool are installed. <a href="http://www.oooforum.org/forum/viewtopic.phtml?t=122665#428635">The macro</a> mentioned here
	   might help you. This issue is tracked as <a href="http://openatd.trac.wordpress.org/ticket/215">ticket #215 at After the Deadline</a>.</li>

<li>If you are using an older version of LanguageTool and/or OpenOffice.org, these issues may affect you:
    <ul>
        <li>LanguageTool installation fails if the name of your user account contains
            special characters. The only workaround so far seems to be to use a different
            user account. (<a href="http://issues.apache.org/ooo/show_bug.cgi?id=95162">#95162</a>)</li>
        <li>If you get a message "Can not activate the factory for com.sun.star.help.HelpIndexer because java.lang.NoClassDefFoundError: org/apache/lucene/analysis/cjk/CJKAnalyzer":
            this was a bug In OpenOffice.org 3.1, it was fixed in version 3.2 (<a href="http://issues.apache.org/ooo/show_bug.cgi?id=98680">#98680</a>)</li>
        <li>If you get "Failed to load rules for language English" when opening the configuration dialog, try the latest version of LanguageTool, as this should be fixed in 1.3
            (problem occurred on openSUSE 11.3 with LanguageTool 1.2 pre-installed)
            <!-- 2011-03-18 --></li>
        <li>LanguageTool didn't work together with the <a href="http://extensions.services.openoffice.org/en/project/DeltaXMLODTCompare">DeltaXML
            ODT Compare</a> extension - use version 1.2.0 of DeltaXML ODT Compare, which fixes the problem.</li>
    </ul>
</li>

</ul>

<h2>Known Limitations</h2>

<ul>
    <li>Some errors are not detected: LanguageTool uses rules to detect errors, i.e. it will only complain about errors for which there 
        is a rule that detects it. Please consider learning <a href="../development/">how to write rules</a> and help make LanguageTool 
        better by contributing your rules.</li>
    <li>Some rules that work across sentences don't work in LibreOffice/OpenOffice.org. This also affects the rule that checks whether
        three sentences start with the same word.</li>
    <li>For some rules there are a lot of false alarms, i.e., LanguageTool complains about text which is actually correct</li>
    <li>LanguageTool doesn't work correctly with documents that contain revisions
        (<a href="https://bugs.freedesktop.org/show_bug.cgi?id=36540">LibreOffice #36540</a>, <a href="https://issues.apache.org/ooo/show_bug.cgi?id=92013">OOo #92013</a>)
    </li>
</ul>

<h2>Still need Help?</h2>

<p>If LanguageTool still doesn't work properly for you, please <?=show_link("post to the forum", "/forum", 0)?> describing the problem
and letting us know which version of LanguageTool, LibreOffice/OpenOffice.org and which operating system you are using.</p>

<?php
include("../../include/footer.php");
?>
