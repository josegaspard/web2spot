<?php
  require('inc/opciones.php');
  require('inc/customizer.php');
  require('inc/widgets.php');
  require('inc/login.php');
  require('inc/menus.php');
  require('inc/formats.php');
  require('inc/libraries.php');
  require('lib/helpers.php');
  require('inc/etc.php');
  
add_filter( 'wpcf7_validate_text*', 'custom_text_validation_filter', 50, 2 );

function custom_text_validation_filter( $result, $tag ) {
if ( 'first-name' == $tag->name ) {
// Si el campo se llena con números, saldrá una alerta
$your_name = isset( $_POST['first-name'] ) ? trim( $_POST['first-name'] ) : '';

if (preg_match('/[0-9]/', $your_name)) {
$result->invalidate( $tag, "El campo contiene números, por favor sólo usar letras para este campo." );

}
}

if ( 'last-name' == $tag->name ) {
// Si el campo se llena con números, saldrá una alerta
$your_lastname = isset( $_POST['last-name'] ) ? trim( $_POST['last-name'] ) : '';

if (preg_match('/[0-9]/', $your_lastname)) {
$result->invalidate( $tag, "El campo contiene números, por favor sólo usar letras para este campo." );

}
}

return $result;
}
  
  ?>
