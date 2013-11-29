<?php

include("config.php");

$isaImage   = file_get_contents(__DIR__."/incl/pauline_image.html");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Lite om mig</h1>

<figure class="right top">
{$isaImage}
</figure>

<p>
Jag heter Isa Jansson, är 22 år gammal och bor i Stockholm sedan 4 år tillbaka. 
När jag inte sitter framför datorn så tränar jag, fikar eller är ute och går med hunden.  
Hunden heter Pauline och hon ligger och myser i mitt knä hela dagarna när jag sitter och pysslar med dessa kurser. 
Förutom att programmera använder jag datorn till att redigera bilder i Photoshop. 
Jag kan dock fastna med det i all evighet då det är fantastiskt roligt och jag har tusentals bilder på min dator att jobba med. 
</p>
<p>
Jag fick upp ögonen för webbprogrammering när jag valde en inriktning mot medieteknik i mitt dåvarande program på Södertörns högskola. 
Under den tiden blev jag introducerad till HTML och CSS och även WordPress.
Vi lärde oss även en del om Photoshop, InDesign och Illustrator och så hade vi en kort kurs i typografi och en i visuell kommunikation. 
Jag skulle vilja påstå att jag fick en relativt bred grund att stå på. 
Detta kurspaket läser jag för att jag vill kunna arbeta som webbutvecklare i framtiden och dessa kurser känns aktuella och relevanta för att nå mitt mål. 
</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 