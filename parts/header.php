<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container position-relative">
    <!-- Encabezado -->
    <div class="container  bg-light rounded-5 position-absolute mx-auto align-center">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <i class="bi bi-boxes"></i> <?php bloginfo('name'); ?>
            </a>
        </div>
        <?php
            wp_nav_menu(array(
                'theme_location' => 'main',
                'container_class' => 'col-md-6 text-md-center',
                'menu_class' => 'nav col-12 col-md-auto mb-2 justify-content-center mb-md-0',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'walker' => new Custom_Nav_Walker(),
            ));
            ?>

            <?php
            // Custom walker class to add custom classes to menu items
            class Custom_Nav_Walker extends Walker_Nav_Menu {
                function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
                    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

                    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
                    $classes[] = 'nav-item';

                    $args = (object) $args;

                    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
                    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

                    $id = apply_filters( 'nav_menu_item_id', '', $item, $args, $depth );
                    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

                    $output .= $indent . '<li' . $id . $class_names .'>';

                    $atts = array();
                    $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
                    $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
                    $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
                    $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

                    $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

                    $attributes = '';
                    foreach ( $atts as $attr => $value ) {
                        if ( ! empty( $value ) ) {
                            $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                            $attributes .= ' ' . $attr . '="' . $value . '"';
                        }
                    }

                    $item_output = $args->before;
                    $item_output .= '<a'. $attributes .' class="nav-link text-info px-2">';
                    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
                    $item_output .= '</a>';
                    $item_output .= $args->after;

                    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
                }
            }
        ?>

        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-info me-2">Login</button>
            <button type="button" class="btn btn-info text-white">Registrarse</button>
        </div>
    </header>
    </div>
    
</div>
