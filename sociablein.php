<?php
/*
Plugin Name: Indian Sociable
Plugin URI: http://nspeaks.com/671/indian-sociable-wordpress-plugin-released/
Description: Adds Indian Sites to <a href="http://yoast.com/wordpress/sociable/">Sociable</a> Plugin.
Version: 0.3
Author: Navjot Singh
Author URI: http://nspeaks.com/
*/

function insociable_sites( $known_sites) {
	$inpath = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/images/';
	$known_sites['BestofIndya'] = array(
    'favicon' => $inpath.'bestofindya.png',
    'url' => 'http://www.bestofindya.com/news/submit.php?url=PERMALINK',
  );
	$known_sites['BharatBoom'] = array(
    'favicon' => $inpath.'bharatboom.png',
    'url' => 'http://www.bharatboom.com/submit.php?url=PERMALINK',
  );
	$known_sites['Humsurfer'] = array(
    'favicon' => $inpath.'humsurfer.png',
    'url' => 'http://www.humsurfer.com/post?link=PERMALINK&title=TITLE',
  );
	$known_sites['IndiaBol'] = array(
    'favicon' => $inpath.'indiabol.png',
    'url' => 'http://www.indiabol.in/submit.php?url=PERMALINK',
  );
	$known_sites['IndianBytes'] = array(
    'favicon' => $inpath.'indianbytes.png',
    'url' => 'http://www.indianbytes.com/submit.php?url=PERMALINK',
  );
	$known_sites['IndianTags'] = array(
    'favicon' => $inpath.'indiantags.png',
    'url' => 'http://www.indiantags.com/submit.php?url=PERMALINK',
  );
	$known_sites['IndiaSphere'] = array(
    'favicon' => $inpath.'indiasphere.png',
    'url' => 'http://www.indiantags.com/submit?url=PERMALINK&title=TITLE',
  );
	$known_sites['Newzly'] = array(
    'favicon' => $inpath.'newzly.png',
    'url' => 'http://www.newzly.com/submit.php?url=PERMALINK',
  );
	$known_sites['oneview'] = array(
    'favicon' => $inpath.'oneview.png',
    'url' => 'http://www.oneview.in/quickadd/neu/addBookmark.jsf?URL=PERMALINK&title=TITLE',
  );
	$known_sites['PagalPundit'] = array(
    'favicon' => $inpath.'pagalpundit.png',
    'url' => 'http://www.pagalpandit.com/submit.php?url=PERMALINK',
  );
	$known_sites['Rambhai'] = array(
    'favicon' => $inpath.'rambhai.png',
    'url' => 'http://www.rambhai.com/submit?url=PERMALINK&title=TITLE',
  );
	$known_sites['Spotonce'] = array(
    'favicon' => $inpath.'spotonce.png',
    'url' => 'http://www.spotonce.com/submit.php?url=PERMALINK',
  );
	$known_sites['Yeawo'] = array(
    'favicon' => $inpath.'yeawo.png',
    'url' => 'http://www.yeawo.com/submit?url=PERMALINK&title=TITLE',
  );
  return $known_sites;
}
add_filter('sociable_known_sites','insociable_sites');
?>