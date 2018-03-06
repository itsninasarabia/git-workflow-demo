<?php
    include('functions.php');
    $db = new DB($_SERVER['REMOTE_ADDR'], $_ENV["MYSQL_DATABASE"], $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASSWORD"]);
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="stylesheet" href="assets/css/foundation.css">
        <link rel="stylesheet" href="assets/css/app.css">
    </head>
    <body>
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                    <h1>User Profile</h1>
                </div>
            </div>

            <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                    <div class="callout">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

        </div>

        <script src="assets/js/vendor/jquery.js"></script>
        <script src="assets/js/vendor/what-input.js"></script>
        <script src="assets/js/vendor/foundation.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>
