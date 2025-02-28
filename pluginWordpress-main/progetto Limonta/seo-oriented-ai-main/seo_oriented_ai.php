<?php
/*
Plugin Name: SEO-Oriented AI
Version: 1.0
Description: Plugin for optimizing page content, using AI, following SEO guidelines.
Authors:  Andrea Disanti, Nicolò Moretto, Abderrahman El Mellalou
Author URI: http://sito.com
*/

// Set error display settings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function refresh_page() {
    ?>
    <html>
    <head>
        <title>SEO-Oriented AI | Plugin WordPress</title>
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- Include Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Include JavaScript -->
        <script type="text/javascript" src="../script/seo_oriented_ai.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="my-4">SEO-Oriented AI</h1>

            <div id="container">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_title('<h2>', '</h2>');
                        the_content();
                    }
                }
                ?>
            </div>
        </div>
        <!-- Include Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>
    <?php
}

refresh_page();