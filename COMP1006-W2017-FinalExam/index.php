<?php
/**
 * STUDENT NAME = Ramandeep Kaur
 *  STUDENT NUMBER : 200353584
 *  AUTHOR NAME : Ramandeep Kaur
 *  WEBSITE purpose : FinalExam
 * FileName = index.PHP
 *  Description :  index.php page is the home page
 *
 *
 */

if(!isset($_GET["pageId"])) {
    $title = "Home";
    //$templateString = 'Views/dashboard.php';
    $templateString = 'Views/content/home.php';
}
else {
    switch($_GET["pageId"]) {
        case "About":
            $title = "About";
            $templateString = 'Views/content/about.php';
            break;
        case "Contact":
            $title = "Contact";
            $templateString = 'Views/content/contact.php';
            break;
        case "Login":
            $title = "Login";
            $templateString = 'Views/users/login.php';
            break;
        case "Logout":
            include_once("Controllers/users.php");
            Logout();
            $title = "Home";
            $templateString = 'Views/dashboard.php';
            break;
        case "Register":
            $title = "Register";
            $templateString = 'Views/users/register.php';
            break;
        case "Dashboard":
            $title = "Dashboard";
            $templateString = 'Views/games/dashboard.php';
            break;
        case "GamesList":
            $title = "Games";
            $templateString = 'Views/games/list.php';
            break;
        case "GameDetails";
            if($_GET["gameID"]==0) {
                $title = "Add Game";
            }
            else {
                $title = "Edit Game";
            }
            $templateString = 'Views/games/details.php';
            break;
        case "GameUpdate":
            $title = "Update Game";
            $templateString = 'Views/games/update.php';
            break;
        case "GameDelete":
            $title = "Delete Game";
            $templateString = 'Views/games/delete.php';
            break;
        default:
            $title = "404";
            $templateString = "Views/errors/404.php";
            break;
    }
}
?>

<?php include_once('Views/partials/header.php'); ?>

<?php include_once ('Views/partials/navbar.php'); ?>

<?php require($templateString); ?> <!-- Content -->

<!-- INCLUDE YOUR FOOTERTOOLBAR HERE -->
<?php include_once ('Views/partials/footertoolbar.php'); ?>

<?php include_once ('Views/partials/footer.php'); ?>


