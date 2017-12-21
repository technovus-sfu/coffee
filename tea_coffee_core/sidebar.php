<?
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.0
 */

if ( ! is_active_sidebar( 'sidebar1' ) ) {
	return;
}
?>

<sidebar>
  <? dynamic_sidebar('sidebar1') ?>
</sidebar>