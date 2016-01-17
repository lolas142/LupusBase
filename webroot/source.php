<?php 
/**
 * This is a Lupus pagecontroller.
 *
 */
// Include the essential config-file which also creates the $lupus variable with its defaults.
include(__DIR__.'/config.php'); 
 
// Add style for csource
$lupus['stylesheets'][] = 'css/source.css';
 
// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
 
// Do it and store it all in variables in the Lupus container.
$lupus['title'] = "Visa källkod";

$lupus['main'] = "
	<main class='content'>
		<h1>Visa källkod</h1>\n" 
		. $source->View() . "</main>";
 
 
// Finally, leave it all to the rendering phase of Lupus.
include(LUPUS_THEME_PATH);