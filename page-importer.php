<?php 
define('base_dir',get_template_directory().'/shopify_importer/');

require(base_dir.'importer_functions.php');
require(base_dir.'config.php');
require(base_dir.'json_gen.php');
require(base_dir.'importer.php');

base_setup();
$start = timer(); 

$json_gen = new shopify_json();
new product_importer();
 
  
 

$total_time = round((timer() - $start), 4);
text('Page generated in '.$total_time.' seconds.');
saveLOG();
?>
