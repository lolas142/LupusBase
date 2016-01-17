<?php 
/**
 * This is a Lupus pagecontroller.
 *
 */
// Include the essential config-file which also creates the $lupus variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Lupus container.
$lupus['title'] = "Mina redovisningar";
 
$lupus['main'] = <<<EOD
	<main class="content">
    <article>
        <header>
            <h1>Mina redovisningar</h1>
        </header>
            <h3>Kmom01</h3>
                <h4>Vilken utvecklingsmiljö använder du?</h4>
                <p>Jag använder Sublime Text 2 där jag skriver min kod då jag sedan innan använt detta och är vad med det, 
                som webbserver använder jag WAMP då också för att jag är van med detta sedan tidigare.
                Mitt operativ är Windows 7.</p>
                
                <h4>Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”, var något nytt eller kan du det?</h4>
                <p>Jag läste inte guiden, då jag kände mig säker i det jag gjorde för tillfället. Jag vänder mig dit senare om jag stöter på problem. 
                Dock så hämtade jag dump funktionen därifrån</p>
                
                <h4>Vad döpte du din webbmall Anax till?</h4>
                <p>Jag döpte min webbmall till lupus. Det vart ett sådant namn då jag inte kunde komma på något annat bra. 
                Jag gick in på google translate och översatte lite olika djur till latin till jag hittade något som jag tyckte passade.</p>
                
                <h4>Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller något du hoppade över?</h4>
                <p>Jag tyckte att Anax strukturen var helt okej. Det känns som att det kommer bli mycket lättare att hitta det man jobbar med så att man kan ta en sak i taget.</p>
                
                <h4>Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?</h4>
                <p>Det gick utan problem att inkludera source.php. Jag valde att göra det som en modul till Lupus, ja. </p>

                <h4>Gjorde du extrauppgiften med GitHub?</h4>
                <p>Nej, jag gjorde inte denna extra uppgift. Dock tror jag att jag kommer sätta mig ner och fixa det vid ett senare tillfälle.</p>

            <h3>Kmom02</h3>
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>

            <h3>Kmom03</h3>
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>

            <h3>Kmom04</h3>
            	<h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>

            <h3>Kmom05</h3>
            	<h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>

            <h3>Kmom06</h3>
            	<h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>

            <h3>Kmom10</h3>
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
                
                <h4></h4>
                <p></p>
    </article>
</main>
EOD;
 
 
// Finally, leave it all to the rendering phase of Lupus.
include(LUPUS_THEME_PATH);