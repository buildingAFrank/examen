<?php

// below text excerpt operations taken from https://developer.wordpress.org/reference/functions/get_the_excerpt/#comment-3320
$excerpt = get_the_excerpt();
$excerpt = substr($excerpt, 0, 25);
$result = substr($excerpt, 0, strrpos($excerpt, ' '));



echo'

    <li class="titreAtelier">'.$inc.get_the_title().'</li>

';
