<?php

$postlist = get_posts();

$post_size = count($postlist);

#var_dump($postlist);

foreach($postlist as $name => $value) {
    #want to substitute value=>author_id with '2'
    if ($value->post_author == '2') {
        echo "gotcha mothafucka";
    }
    #if (get_the_author_meta('display_name', 2) == "Dan ThaMan") {
     #    echo "omg found it!";
    #}
}

?>