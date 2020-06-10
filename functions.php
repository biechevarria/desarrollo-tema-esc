<!-----ACTIVACION DE IMAGEN DESTACADA O THUMNAILS ----->
<?php
add_theme_support( 'post-thumbnails' ); 

//-------------tAMAÑOS DE IMAGEN DESTACADA------------->
the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('mediano');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('mediano alargado');    // Medium Large resolution (default 768px x 0px max)
the_post_thumbnail('larga');           // Large resolution (default 1024px x 1024px max)
the_post_thumbnail('Tamaño original');            // Original image resolution (unmodified)

//TAMAÑOS DE IMAGEN DESTACADA PERSONALIZADOS
add_theme_support( 'esc-featured-image', 2000, 1200, true );
add_theme_support( 'esc-thumbnail-avatar', 100, 100, true );

//----------HABILITAR MENUS DINAMICOS------------->

register_nav_menus( array(
    'top' => __('Top Menu', 'esc'),
    'footer' => __('Footer Menu', 'esc'),

) );

/*---------------AGREGAR CLASES AL MENU PRINCIPAL------------------*/
/*function esc_menu_classes($classes, $item, $args){
    if($args ->theme_location == 'top'){
        $classes[] = 'ml-auto';
    }
    return $classes;
}
add_filter( 'nav_menu_css-class','esc_menu_classes', 1, 3 );*/

/* 
    *Difinicion de Custom post type 
    *Registro de posty types https://codex.wordpress.org/Function_Reference/register_post_type
    *Iconos: https://developer.wordpress.org/resource/dashicons/#menu
*/



function esc_post_type(){
    register_post_type('esc_slider',
    array (
            'labels' => array(
                'name' =>__('Carousel'),
                'singular_name' =>__('Item'),
                'add_new' =>__('Nuevo item'),
                'add_new_item' =>__('Añadir nuevo item'),
                'edit_item' =>__('Editar item'),
                'featured_image' =>__('Imagen del slide')

            ),
            'public' => true,
            'exclude_from_search' => true,
            'has_archive' => false,
            'show_in_navs_menu' => false,
            'menu_icon' => 'dashicons-slides',
            //'rewrite' => array('slug' => 'carousel'),
            'supports' => array('title', 'editor', 'thumbnail')    
    )
        );
}

add_action( 'init', 'esc_post_type' );

/*---------------DESACTIVACION DE GOOTENBERG-----------------*/
add_filter('use_block_editor_for_post_type', '__return_false', 100);
