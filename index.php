<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Discuss Project PHP</title>
    <?php include("client/commonFiles.php"); ?>
</head>
<body>
    <?php
session_start();


include("client/header.php");

    // Page routing
    if (!isset($_SESSION['user']['username'])) {
        if (isset($_GET['signup'])) {
            include("client/signUp.php");
        } elseif (isset($_GET['login'])) {
            include("client/login.php");
        } else {
            include("client/questions.php"); // Default for guests
        }
    } else { // Logged in users
        if (isset($_GET['askQuestion'])) {
            include("client/askAquestion.php");
        } elseif (isset($_GET['q-id'])) {
            include("client/questions_details.php");
        } elseif (isset($_GET['c-id']) || isset($_GET['u-id']) || isset($_GET['latest'])) {
            include("client/questions.php");
        }
        elseif (isset($_GET['search'])) {
            $search_item = $_GET['search'];
            include("client/questions.php");
        } else {
            include("client/questions.php"); // Default page
        }
    }
    ?>
    <?php include "./client/footer.php"; ?>
</body>
</html>