<?php

/* Collection of Walker Classes */

	/*
		wp_nav_menu()

		<div class="menu-container">
			<ul> // start_lvl()

				<li><a><span> // start_el()

					</a></span></li> // end_el()

				</ul> // end_lvl()
			</div>
		*/

class Walker_Nav_Side extends Walker_Nav_Menu {
	var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );



	function start_lvl( &$output, $depth = 0, $args = array() ) {

	  	$indent 			= str_repeat("\t", $depth);
	  	$submenu 			= ($depth > 0 ) ? ' collapse sub-menu' : '';
	  	$output 			.= "\n$indent<ul id=\"expand\" class=\"collapse\"$submenu depth_$depth>\n ";
	}



	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {


		$indent 		= ($depth) ? str_repeat("\t",$depth) : '';
		$icon 			= ($args->walker->has_children) ? "<a data-toggle=\"collapse\" href=\"#expand\"><i class=\"fa fa-plus-square-o\"></i></a> " : '';
		$li_attributes	= '';
		$class_names	= $value = '';


		// Add classes to items
		$classes 		= empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[]		= ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[]		= 'menu-item-' . $item->ID;

		// If submenu has children add collapse class
		if( $depth && $args->walker->has_children){
			$classes[] 	= 'collapse sub-menu-second';
		}
	  $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
	  $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

	  $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
	  $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

	  $output .= $indent . '<li' . $id . $value . $class_names .'>';

	  $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	  $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	  $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	  $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

	  $item_output = $args->before;
	  $item_output .= $icon . '<a'. $attributes .'><span>';
	  $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
	  $item_output .= '</span></a>';

	  $item_output .= $args->after;

	  $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	function end_el( &$output, $item, $depth = 0, $args = array() ) {
	  $output .= "</li>\n";
	}

	function end_lvl( &$output, $depth = 0, $args = array() ) {
	  $indent = str_repeat("\t", $depth);
	  $output .= "$indent</ul>\n";
	}
}
