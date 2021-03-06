#!/bin/bash
# LanguageTool nightly diff tests on Wikipedia data
# dnaber, 2013-03-24

date=`date +%Y%m%d`
jarFile="languagetool-wikipedia.jar"
corpusDir="/home/languagetool/regression-test/static-regression-data"
maxDocs="1000"
targetDir="/home/languagetool/languagetool.org/languagetool-website/www/regression-tests"
jarUrl="http://www.languagetool.org/download/snapshots/LanguageTool-wikipedia-${date}-snapshot.zip"

export LANG="de_DE.UTF-8"
export JAVA_HOME="/home/languagetool/jdk1.7.0_07"
export PATH="/home/languagetool/jdk1.7.0_07/bin:$PATH"

rm LanguageTool-wikipedia-*-snapshot.zip
wget $jarUrl
unzip -o LanguageTool-wikipedia-${date}-snapshot.zip
cd LanguageTool-wikipedia*/

mkdir $targetDir/$date
displayDate=`date +"%Y-%m-%d %H:%M"`
oldDisplayDate=`cat old-date`
echo $displayDate >old-date
globalResultFile="result_${date}.html"
rm $globalResultFile

echo "<html>" >>$globalResultFile
overviewTitle="LanguageTool Nightly Diff Overview $displayDate"
echo "<head><title>$overviewTitle</title></head>"  >>$globalResultFile
echo "<body>" >>$globalResultFile
echo "<h1>$overviewTitle</h1>" >>$globalResultFile
echo "<p>This page lists the results of our automatic nightly testing against a fixed Wikipedia corpus with $maxDocs articles per language.</p>" >>$globalResultFile
echo "<p>Changes $oldDisplayDate to $displayDate<br/>" >>$globalResultFile
languageToolVersion=`java -jar $jarFile version`
echo "Version: $languageToolVersion</p>" >>$globalResultFile

# as this uses a lot of resources, we only check the languages in active development:
for lang in en de fr ru br ca pl it
do
  echo "============== $lang =============="
  wikiFile="$corpusDir/$lang/${lang}wiki-[0-9]*-pages-articles.xml"
  mv result_${lang}.new result_${lang}.old
  ls -l $wikiFile
  commandOptions="-jar $jarFile check-dump - - $lang $wikiFile - $maxDocs 0"
  echo "Command options: ${commandOptions}"
  java $commandOptions | sed -e 's/[0-9]\+.) //' >result_${lang}.new
  diff -u result_${lang}.old result_${lang}.new >result_${lang}.diff
  diffSize=$(stat -c%s "result_${lang}.diff")
  resultFile="result_${lang}_${date}.html"
  rm $resultFile
  vim result_${lang}.diff -c TOhtml -c ":saveas $resultFile" -c ":q" -c ":q"
  sed -i -e 's/background-color: #ffffff;/background-color: #000000;/g' $resultFile
  mv $resultFile $targetDir/$date
  echo "Result saved to $targetDir/$date/$resultFile"
  echo "Diff size: $diffSize"
  if [ "$diffSize" = "0" ]; then
    echo "Not changed: $lang<br/>" >>$globalResultFile
  else
    echo "<a href='$date/$resultFile'>Changed: $lang</a><br/>" >>$globalResultFile
  fi
done

displayDateEnd=`date +"%Y-%m-%d %H:%M"`
echo "<p>Total runtime: $displayDate to $displayDateEnd</p>" >>$globalResultFile

echo "</body>" >>$globalResultFile
echo "</html>" >>$globalResultFile
mv $globalResultFile $targetDir
echo "Overview saved to $targetDir/$globalResultFile"
rm -r LanguageTool-wikipedia*/

### send mail:
mailFromPart1=dnaber
mailFromPart2=users.sourceforge.net
mailToPart1=languagetool-commits
mailToPart2=lists.sourceforge.net
lynx --dump $targetDir/$globalResultFile | sed -e 's#file://localhost/home/languagetool/languagetool.org/languagetool-website/www/#http://languagetool.org/#' | mail -aFrom:${mailFromPart1}@${mailFromPart2} -s "LanguageTool nightly diff test" ${mailToPart1}@${mailToPart2}
echo "Mail sent to ${mailToPart1}@${mailToPart2}"
