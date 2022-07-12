<?php
function menus(){
	register_nav_menus(array(
  'menu_principal' =>__('Menu Principal','Page')
  ));
  register_nav_menus(array(
    'footer' =>__('Links de Footer','Page')
  ));
  register_nav_menus(array(
    'redes' =>__('Redes Sociales','Page')
  ));
  register_nav_menus(array(
    'legal' =>__('Legal','Page')
  ));
}
add_action( 'init', 'menus' );
?>