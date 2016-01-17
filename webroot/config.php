<?php
/**
 * Config-file for Lupus. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Lupus paths.
 *
 */
define('LUPUS_INSTALL_PATH', __DIR__ . '/..');
define('LUPUS_THEME_PATH', LUPUS_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(LUPUS_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Lupus variable.
 *
 */
$lupus = array();
 
 
/**
 * Site wide settings.
 *
 */
$lupus['lang']         = 'sv';
$lupus['title_append'] = ' | Lupus en webbtemplate';

$lupus['header'] = <<<EOD
	<header class="site-header">
    	<img src="img/logo.png" class="mclogo" alt="Mclogo" />
    	<span class="site-title">Lupus template</span>
    	<span class="site-slogan">"Du är så duktig" - Mamma</span>
    </header>
    <nav class="navbar">
    	<a class="" href="index.php">Hem</a>
    	<a class="" href="report.php">Redovisning</a>
        <a class="" href="source.php">Källkod</a>
    </nav>
EOD;

$lupus['footer'] = <<<EOD
	<footer class="site-footer">
		<span class="validator">Copyright &copy; Elias Tångring | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span>
	</footer>
EOD;


/**
 * Theme related settings.
 *
 */
//$lupus['stylesheet'] = 'css/style.css';
$lupus['stylesheets'] = array('css/style.css');
$lupus['favicon']    = 'img/favicon.png';


/**
 * Settings for JavaScript.
 *
 */
$lupus['modernizr'] = 'js/modernizr.js';
$lupus['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$lupus['jquery'] = null; // To disable jQuery


/**
 * Google analytics.
 *
 */
$lupus['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics