<?php

/* 
 Permet d'adapter la requête principale avant qu'elle
 ne s'exécute.
- La liste de conférences pourra s'afficher entièrement sur un page
- Elle sera triée selon la date des conférences
- En ordre ascendant
 */
function extraire_evenements( $query ) {
    if (! is_front_page() && $query->is_category('evenement'))
    {
       $query->set( 'posts_per_page', -1 );
       $query->set( 'orderby', 'date' );
       $query->set( 'order', 'asc' );
    }
 }
 add_action( 'pre_get_posts', 'extraire_evenements' );

?>