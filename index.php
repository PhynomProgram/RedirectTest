<!--

Task: Develop virtual server to host this site. Otherwise, there is no way to view this page.
Set: 9/7/2025
Due: 9/8/2025

-->

<?php
$title = 'Redirecting after a Form Submission';

// Conditional statement that determines redict
if ( isset($_POST['submitButton'])) {
    header("Location: thanks.html");
    exit();
} else {
    displayForm();
}
function displayForm() {
global $title;
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="">
        <title><?php echo $title; ?></title>
        <style>
            label, input {
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <header>
            <h1><?php echo $title; ?></h1>
        </header>
        <main>
            <form action="form_handler_redirect.php" method="POST">
                <div style="width: 30em;">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" value=""><br>
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" value=""><br>
                    <div style="clear: both;">
                        <input type="submit" name="submitButton" id="submitButton" value="Send Details">
                    </div>
                </div>
            </form>
        </main>
        <footer>
            &copy; 2025 Rashad Jackson
        </footer>
    </body>
</html>
<?php
}
?>