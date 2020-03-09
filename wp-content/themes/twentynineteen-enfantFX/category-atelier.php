<?php

get_header();


get_template_part('partials/content/','hero-banner');

?>


    <main class="main-content">

<?php
//start the loop
$args=array(
    'category_name' => 'atelier',
    'posts_per_page'=> 10,
    'orderby'=>'post_name',
    'order'=>'asc'
);
$query1= new WP_Query($args);
$inc=0;
if($query1->have_posts()){
    echo '<section>
        <h2>nos ateliers</h2>
        <ul>';
    while ($query1->have_posts()):
        $inc+=1;
        $query1->the_post();
        echo '<li class="titreAtelier">'.$inc." ".get_the_title()."<span style='color:red;'>___".get_post_field('post_name')."</span><span style='color:blue';>___".get_the_author_meta( 'display_name', $post->post_author )  .'</span></li>';

    endwhile;
    wp_reset_query();

    echo ' </ul>
            </section>';
}


?>