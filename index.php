<?php
/*
	Plugin Name: Rating Plugin
	Description: 
   	Plugin URI: http://abdellahaithadji.com
	Author: Abdellah Ait hadji
	Author URI: http://abdellahaithadji.com
	License: GPL2
	Version: 1.0.1
*/

/*  Copyright 2015 Abdellah Ait hadji (email : abdel@abdellahaithadji.com)

    This program is free software; you can redistribute it and/or modify.
  
*/

add_action("init", "votes_init");
add_action('init', 'scripts');


function votes_init(){
 

		$labels = array(
			
			"name" => "Vote",
			"singular_name" => "Vote",
			"add_new" => "Ajouter un Vote",
			"add_new_item" => "Ajouter un nouveau vote",
			"edit_item" => "Editer un Vote",
			"new_item" => "Nouveau Vote",
			"view_item" => "Voir le Vote",
			"search_items" => "Rechercher un Vote",
			"not_found" => "Aucun Vote",
			"not_found_in_trash" => "Aucun Vote dans la corbeille",
			"parent_item_colon" => "",
			"menu_name" => "Votes",	

		);       
                register_post_type("vote", array(
                    "public" => true,
                    "publicly_queryable" => false,
                    "labels" => $labels,
                    "menu_position" => 7,
                    "capability_type" => "post",
                    "supports" => array("item", "thumbnail",)
                ));

}

function votes_metaboxes(){
      
	add_meta_box("votes", "valeur", "votes_metabox", "vote", "normal", "high");
}

function votes_metabox($object){

	wp_nonce_field("votes", "votes_nonce");
	?>
	


	<?php

}

function scripts() {
  	
	  wp_enqueue_script('twentysixty', plugins_url('js/rating.js', __FILE__));
	  wp_enqueue_style('twentysixty', plugins_url('css/rating.css', __FILE__));
         

}




