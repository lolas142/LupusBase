<?php 
/**
 * This is a Lupus pagecontroller.
 *
 */
// Include the essential config-file which also creates the $lupus variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Lupus container.
$lupus['title'] = "Om mig";
 
$lupus['main'] = <<<EOD
	<main class="content">
		<article>
            <h1>Om mig</h1>

		<p class="infoTextMe">

			Jag heter Elias Tångring och härstammar ifrån Västerås. Jag är 18 år och är intresserad av utveckling. 
			<br> 
			Jag flyttade hit med mina två vänner Jonathan och Fabian för att börja studera på BTH. 
			Jag är både taggad och smått orolig för hur det ska gå att bo utan föräldrar och snabb hjälp när något går fel. 
			det är ett väldigt stort beslut att flytta och dessutom nu när jag flyttar så väldigt långt. 

			<br><br>

			Hemma i Västerås har jag en syster, Linn, hon är två år yngre än mig och är inte alls intreserad av teknik. 
			Hon pluggar på ett naturgymnasie, med inriktning hästar. Jag har också en bror i Västerås, han heter Lucas och är 7 år. 
			Lucas är inte heller så intresserad av teknik. Lucas tycker att sport är roligare än att hålla på med datorer. 
			<br>
			I Västerås bor också mina föräldrar, min mormor, och min farmor. Mamma och pappa jobbar och tar hand om Lucas, 
			och för tillfället också Ture. Ture är inte deras barn, men han bor hemma hos oss då vår familj är en så kallad jour familj. 
			Vi kan bli frågade ibland om vi kan ta hand om ett barn som inte längre kan bo hos sin mamma eller pappa av olika själ. 
			Ture är en jätte trevlig och go liten kille, dock har han en del att lära. Han har ju helt andra uppfattningar av saker än vad jag, min syster och Lucas har. 
			Eftersom mormor och farmor bor i Västerås så träffar vi dem ofta. 
			Mormor bor inte längre än 50 meter ifrån lägenheten som vi bor i så hon får snart spel på oss, så ofta som vi är där. 

		<br><br>

			Jag började intressera mig för datorer när jag gick i sjuan eller åttan, så jag var 13 år. Det var just i åttan jag fick "min" första dator.
			Jag säger "min" eftersom jag hade den inte helt för mig själv. Jag var tvungen att dela med mig till min syster och mina föräldrar. 
			Men den tiden jag då var vi datorn det hann man göra mycket på. Jag lärde mig massor medan jag satt där och klickade. 
			Något som jag var väldigt fascinerad av var hur mamma kunde skriva utan att titta på tangentbordet. Jag tyckte därför att det var väldigt kul att lära mig var 
			alla dessa knappar var och hur man klickade på dem så snabbt. 
			<br>
			Då kan man ju fråga sig om jag lärde mig något. Nej, det gjorde jag då inte. Än idag undrar jag hur hon skriver så otroligt snabbt på tangentbordet. 
			Även fast jag idag vet var nästan alla knappar är och kan skrvia utan att sitta och konstant glo på tangentbordet så går det ändå inte lika snabbt som för henne.

			<br><br>

			På min fritid gillar jag att koppla av och slappna av. Jag tycker också om att hålla på med design, dock är jag inte speciellt bra på det.
			Jag gillar också att spela spel med mina vänner, att fiska och att så klart vara med vänner "IRL". 
			Jag föredrar "FPS" spel, och jag antar att majoriteten som läsen, om inte alla, vet vad det är så jag skippar att förklara det. 

		</p>
 
    </article>
	</main>
EOD;
 
 
// Finally, leave it all to the rendering phase of Lupus.
include(LUPUS_THEME_PATH);