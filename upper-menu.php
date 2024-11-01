<?php 

/*
Plugin Name: Upper Menu for Twenty Eleven
Plugin URI: http://wordpress.org/extend/plugins/upper-menu-for-twenty-eleven/
Description: Moves the default Twenty Eleven menu to the top of the page.
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BDUEBSM9QRPDU
Version: 0.1
Author: Rafael Poveda - RaveN
Author URI: http://mecus.es/author/raven/
License: GPL2
*/

/*  
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


add_action('wp_head', 'mecus_upper_menu');
 
function mecus_upper_menu() {
?>
<link rel="stylesheet" href="<?php echo plugins_url( 'upper-menu.css' , __FILE__ ); ?>" type="text/css" media="screen, projection" />
<?php
}

