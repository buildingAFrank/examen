<?php

$progHeure=get_post_field('post_name');
$progHeure=substr($progHeure, strrpos($progHeure,'-')+1);
$gridCol=get_the_author_meta( 'ID', $post->post_author )-1;
$gridRow=$progHeure-7;


echo "<div class=\"atelier\" style='grid-column: ".$gridCol."/span 1;grid-row:".$gridRow."/ span 2;'>
            
            <div class=\"atelier-info\">
                <h5>".get_the_title()."</h5>
                <p class=\"atelier-heure\">".get_post_field('post_name')."</p>
                <p class='atelier-author'>".get_the_author_meta( 'display_name', $post->post_author )."</p>
            </div>
        </div>";
