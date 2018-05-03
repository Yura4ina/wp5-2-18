<?php
add_action('init', 'register_match');
function register_match(){
    register_post_type('Matches', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'match', // основное название для типа записи
            'singular_name'      => 'Match', // название для одной записи этого типа
            'add_new'            => 'Add match', // для добавления новой записи
            'add_new_item'       => 'Add new match', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit match', // для редактирования типа записи
            'new_item'           => 'Match title', // текст новой записи
            'view_item'          => 'View match', // для просмотра записи этого типа.
            'search_items'       => 'Search match', // для поиска по этим типам записи
            'not_found'          => 'Match not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Match not found on trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Matches', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-exerpt-view',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}
add_action('init', 'register_ticket');
function register_ticket(){
    register_post_type('Tickets', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'ticket', // основное название для типа записи
            'singular_name'      => 'Ticket', // название для одной записи этого типа
            'add_new'            => 'Add ticket', // для добавления новой записи
            'add_new_item'       => 'Add new ticket', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit ticket', // для редактирования типа записи
            'new_item'           => 'Ticket title', // текст новой записи
            'view_item'          => 'View ticket', // для просмотра записи этого типа.
            'search_items'       => 'Search ticket', // для поиска по этим типам записи
            'not_found'          => 'Ticket not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Ticket not found on trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Tickets', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-tickets-alt',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}
add_action('init', 'register_stadion');
function register_stadion(){
    register_post_type('Stadion', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'stadion', // основное название для типа записи
            'singular_name'      => 'Stadion', // название для одной записи этого типа
            'add_new'            => 'Add stadion', // для добавления новой записи
            'add_new_item'       => 'Add new stadion', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Edit stadion', // для редактирования типа записи
            'new_item'           => 'Stadion title', // текст новой записи
            'view_item'          => 'View stadion', // для просмотра записи этого типа.
            'search_items'       => 'Search stadion', // для поиска по этим типам записи
            'not_found'          => 'Stadion not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Stadion not found on trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Stadions', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-grid-view',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}