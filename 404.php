<?php get_header(); ?>
       
    <div id="content" class="col-full">
    	
    	<?php woo_main_before(); ?>
    
		<section id="main" class="col-left">
                                                                                
            <div class="page">
				
				<header>
                	<h1><?php _e( 'Error 404 - Pàgina no encontrada!', 'woothemes' ); ?></h1>
                </header>
                <section class="entry">
                	<p><?php _e( 'La página que intenta llegar no existe, o se ha movido. Por favor, use los menús o el cuadro de búsqueda para encontrar lo que busca.', 'woothemes' ); ?></p>
                </section>

            </div><!-- /.post -->
                                                
        </section><!-- /#main -->
        
        <?php woo_main_after(); ?>

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>
