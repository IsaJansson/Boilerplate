<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);

// definera sökväg
if(!defined('__DIR__')) {
  define('__DIR__', dirname(__FILE__));
}

// kursmoment 
$data['navkmom'] = array(
  'kmom01'   => array('text'=>'kmom01',  'url'=>"../../kmom01/index.php"),
  'kmom02'	=> array('text'=>'kmom02', 'url'=>false)
);

// navigationsmenyn
$data['navbar'] = array(
  'index'         => array('text'=>'Me',  'url'=>'index.php'),
  'redovisning'   => array('text'=>'Redovisning',  'url'=>'redovisning.php'),
  'Oden' 		  => array('text'=>'Oden', 'url'=>'../oden/index.php'),
  'viewsource'    => array('text'=>'Källkod', 'url'=>'viewsource.php'),
);