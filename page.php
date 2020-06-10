<?php
// Fichero destinado a mostrar páginas

get_header();
?>

    <div class="row">
        <div class="col-md-12">

            <?php
                //Start the loop.
                while ( have_posts() ) : the_post();
            ?>

                <article <?php post_class(); ?>>

                <div class="entry-header">
                    <?php the_title( '<h1 class="titulo-principal text-center">', '</h1>' ); ?>
                </div>

                <div class="page-content">
                    <?php the_content(); ?>
                </div>

                </article>

            <?php
                //End loop
                endwhile;
            ?>

        </div>
    </div>

<?php get_footer(); ?>