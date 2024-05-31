<?php get_template_part( 'parts/header' ); ?>
</div>
<main class="py-5">
    <section class="container p-5 bg-white">
    <?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        
        the_title( '<h2>', '</h2>' ); 
        the_content();  
    endwhile;
else : 
    echo '<p>No hay contenido para mostrar.</p>';
endif; 
?>
    </section>
</main> 

<?php get_template_part( 'parts/footer' ); ?>

