<?php
/**
 * Plugin Name: Core Functionality
 * Description: This plugin manages theme independent functionality, and should <strong>NOT BE DELETED</strong> unless you know what you are doing.
 * Author: Secret Stache Media
 * Author URI: http://www.secretstache.com
 * Version: 1.0
 */


class CoreFunctionality{
    function __construct(){
        /** Define plugin constants */
        add_action( 'plugins_loaded', array( &$this,'constants'), 1 );

        /** Include plugin files */
        add_action( 'plugins_loaded', array( &$this,'includes' ), 2 );

        /** Register custom post types */
        //add_action( 'init', array( &$this,'register_post_types' ), 3 );

        /** Register taxonomies */
        //add_action( 'init', array( &$this,'register_taxonomies' ), 4 );

    }

    /**
     *
     */
    function constants(){
        /* Set constant path to the core functionality plugin directory. */
        define( 'CORE_PLUGIN_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

        /* Set constant path to the members plugin URL. */
        define( 'CORE_PLUGIN_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );
    }

    /**
     *
     */
    function includes(){
        /** Load custom post types */
        require_once CORE_PLUGIN_DIR . 'includes/post-types.php';

        /** Load custom taxonomies */
        require_once CORE_PLUGIN_DIR . 'includes/taxonomies.php';

    }

    /**
     *
     */
    function register_post_types(){
        /** Register the custom psot types */
        add_action( 'init', 'register_cpt_REPLACE_ME' );
        add_action( 'init', 'register_cpt_REPLACE_ME' );

    }

    /**
     *
     */
    function register_taxonomies(){
        add_action( 'init', 'register_tax_REPLACE_ME' );
    }

}



new CoreFunctionality();