<?php
/*
Plugin Name: kk_video_integrator
Description: This allows user to integrate youtube video in posts.
Plugin URI: http://kaapi-kadai.com
Author: Thiyag
Version: 1.0
License: GPL2

kk_video_integrator is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with kk_video_integrator. If not, see {License URI}.
*/	


function kkvi_interagate_youtube($atts, $content = null){
	
	$default_atts = array("title" => "kk video", "id" => "", "width" => 400, "height" => 300);
	shortcode_atts($default_atts, $atts);
	if(!empty($atts["id"])){
		return '<iframe title="'.$atts["title"].'" width="'.$atts["width"].'" height="'.$atts["height"].'" src="http://youtube.com/embed/'.$atts["id"].'" frameborder="0" allowfullscreen></iframe>';
	}else{
		return '';	
	}
	
}

add_shortcode('youtube', 'kkvi_interagate_youtube');

//sample
// [youtube id="1SvyoC_0PRc" width="450" height="300" title="Test Video"]
?>

