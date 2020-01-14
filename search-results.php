<?php
include_once "inc/functions.php";
include_once "inc/header.php";
include_once "inc/footer.php";
include_once "inc/search.php";

$search_term = filter_var(trim($_POST['search']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$search_results = search_for_term($search_term);
$search_count = count($search_results);
?>

<!DOCTYPE html>
<html lang="en">
<?php print_head('Search Results', false); ?>
<body>
<?php print_header(); ?>

<main>
    <h1>Search Results</h1>
    <?php
    if ($search_count == 0) {
        echo "<p>Sorry, but there were no matches for \"" . $search_term . "\".</p>";
    } else {
        echo "<p>Your search for \"" . $search_term . "\" produced " . $search_count . " result(s).</p>";
        echo "<ul>";
        foreach ($search_results as $result) {
            echo "<li><a href=\"" . $result[CONTENT_LINK] . "\">" . $result[CONTENT_TITLE] . "</a></li>";
        }
        echo "</ul>";
    }
    ?>
</main>
<?php print_footer(); ?>
</body>
</html>
