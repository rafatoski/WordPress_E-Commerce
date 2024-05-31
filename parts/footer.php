
<!-- Pie de Página -->
<section class="footer p-5 rounded-5 m-1 color-white">
  <div class="container">
    <footer class="py-3 my-4">
    <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => '',
            'menu_class' => 'nav justify-content-center border-bottom pb-3 mb-3',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker' => new Custom_Footer_Nav_Walker(),
        ));
    ?>

    <?php
        // Custom walker class for footer menu
        class Custom_Footer_Nav_Walker extends Walker_Nav_Menu {
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


        <p class="text-center text-secondary">© <?php echo date( 'Y' ); ?> <?php bloginfo('name'); ?> </p>
    </footer>
  </div>
</section>

<?php wp_footer(); ?>
</body>
</html>
