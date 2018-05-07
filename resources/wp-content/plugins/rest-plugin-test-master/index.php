<?php
defined('ABSPATH') or die("Direct access not allowed");

$apiConfig = array(
  'root' => get_site_url(),
  'urlPrefix' => rest_get_url_prefix(),
  'nonce' => wp_create_nonce('wp_rest')
);
?>

<div id="app"></div>

<script>
    var API_Config = <?php echo json_encode($apiConfig); ?>
    
</script>

<?php
wp_enqueue_script('rest_plugin_script', plugins_url('public/bundle.js', __FILE__));
 
/*
<script type="text/javascript">
 <!-- 
var $ = jQuery; 
$(document).ready(function(){ 
    //console.log('jquery...'); 
    
    //console.log('API_Config:');
     //console.log(API_Config);
}); 
 
// -->
</script>
*/
 // print_r($woocommerce->get('products/tags/34', ['_jsonp' => 'tagDetails']));  