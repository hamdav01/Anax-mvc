<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Use for styling the menu
    'class' => 'navbar',
 
    // Here comes the menu strcture
    'items' => [

        // This is a menu item
        'home'  => [
            'text'  => 'Home',   
            'url'   => '',  
            'title' => 'Home'
        ],
 
        // This is a menu item
        'test'  => [
            'text'  => 'Redovisning',   
            'url'   => 'redovisning',   
            'title' => 'Some title 2',
        ],
 
        // This is a menu item
        'about' => [
            'text'  =>'Källkod', 
            'url'   =>'source',  
            'title' => 'Some title 3'
        ],
    ],
 
    // Callback tracing the current selected menu item base on scriptname
    'callback' => function($url) {
        if ($url == $this->di->get('request')->getRoute()) {
            return true;
        }
    },

    // Callback to create the urls
    'create_url' => function($url) {
        return $this->di->get('url')->create($url);
    },
];
