<?php
if (have_posts()) {
    echo "<p>Posts found</p>";
}
?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_title('<h2>', '</h2>');
        the_content();
    }
} else {
    echo "<p>No posts found.</p>";
}
?>

<?php
if (is_front_page()) {
    echo "<h1>Front Page</h1>";
} elseif (is_page()) {
    echo "<h1>Page</h1>";
} elseif (is_single()) {
    echo "<h1>Post</h1>";
}
?>
