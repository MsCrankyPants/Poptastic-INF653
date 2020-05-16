<?php
  ob_start();

  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');

  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);

	/*require_once('logic.php');

  	foreach(glob('classes.php') as $file) {
    require_once($file);
  	}  

  	function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
      include('classes.php');
    }
  }
  	spl_autoload_register('my_autoload');
*/

require_once('logic.php');
//require_once('database.php');
//require_once('query_functions.php');




    
?>