<?php
/**
 * Bootstrapping functions, essential and needed for Lupus to work together with some common helpers. 
 *
 */

/**
 * Dump funktion
 *
 */
function dump($array) {
  echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}
// anropa funktionen så här
//dump($_SERVER);
 
/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "lupus: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');
 
 
/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = LUPUS_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');