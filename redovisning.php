<?php

include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisningar";
$data['meta_description'] = "En sida för att visa upp alla redovisningar i kursen phpmvc";
$data['main'] = <<<EOD
<h1>Redovisningar</h1>

<h3>Kursmoment 1</h3>
<p>
Jag använder editorn Sublime Text 2, FTP-servern Filezilla, lokala servern Wamp och Chorme är min 
standard-webbläsare. Detta kursmoment gick bra. Jag började med att friska upp minnet om hur git 
och github fungerar och gjorde en test-repo. Sedan gick jag vidare med själva uppgiften och kollade 
lite på hur mos hade gjort och använde mig av det vi gjorde i föregående kurs för att bygga upp 
temat och sidorna. Jag gjorde en enkel style som bygger på mos för att spara in lite tid då jag 
redan i början på denna kurs ligger efter. Det enda problem jag stötte på under detta moment var 
att jag glömt att kommentera bort några rader i .htaccess som gjorde att webbplatsen inte hittades 
när jag laddat upp den på studentservern.
</p>
<p>
Jag tycker att detta ramverk är helt fantastiskt både för att andra kan ta tills sig och lära 
sig mer om vad som fungerar bäst och för att alla har tillgång till det och på ett enkelt sätt kan 
bygga stabila webbplatser. Det är svårt att avgöra vad som var extra intressant med html5 boilerplate, 
det är ju så mycket i kodväg som jag aldrig varit i kontakt med tidigare.
</p>
<p>
När jag gjorde min me-sida utgick jag som sagt utifrån mos exempel och den webb-template jag skapat i 
tidigare kurs. Jag ansåg att det var en bra och flexibel lösning som dessutom gick snabbt att utföra då 
jag hade en stor del av koden sedan tidigare. 
</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 