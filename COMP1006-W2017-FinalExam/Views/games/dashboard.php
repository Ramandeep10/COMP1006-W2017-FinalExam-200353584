<?php
/**
 * STUDENT NAME = Ramandeep Kaur
 *  STUDENT NUMBER : 200353584
 *  AUTHOR NAME : Ramandeep Kaur
 *  WEBSITE purpose : FinalExam
 * FileName = dashboard.PHP
 *  Description :  dashboard.php page  displays the dashboard i.e. list of items
 *
 *
 */
    include_once('Controllers/users.php');
    CheckIfAuthenticated();
?>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>Dashboard</h1>

            <ul>
                <?php if(isset($_SESSION["is_logged_in"])) : ?>
                <li><a href="index.php"><i class="fa fa-gamepad fa-lg" ></i> Games List</a></li>
                <li><a class="btn btn-primary" href="index.php?pageId=GameDetails&gameID=0"></li>
                <li>Add New Game</li>
                <?php endif ?>

            </ul>


        </div>
    </div>
</div>