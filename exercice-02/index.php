<?php 
/**
 * @package List_Url
 * @version 1.0.0
 */
/*
Plugin Name: List Url
Plugin URI: http://wordpress.org/plugins/list_url/
Description: Affiche une liste d'url (facebook, instagram, linkedin et github).
Author: Geo
Version: 1.0.0
Author URI: 
*/

function display_networks($attr){
    $array = shortcode_atts(
        array(
            'facebook' => 'https://facebook.com',
            'instagram' => 'https://instagram.com',
            'linkedin' => 'https://linkedin.com',
            'github' => 'https://github.com'
        ), $attr
    );

    $output = '
    <ul>
        <li>Facebook: <a href="'.$array['facebook'].'">'.$array['facebook'].'</a></li>
        <li>Instagram.com: <a href="'.$array['instagram'].'">'.$array['instagram'].'</a></li>
        <li>Linkedin: <a href="'.$array['linkedin'].'">'.$array['linkedin'].'</a></li>
        <li>Github: <a href="'.$array['github'].'">'.$array['github'].'</a></li>
    </ul>';

    return $output;
}


add_shortcode('show_social_network', 'display_networks');

?>