<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page
?> <!-- taken from error reporting section of dwa15-fall2016-notes by Susan Buck -->
<!DOCTYPE html>
<html>
<head>
    <title>Katie Kujala's P2</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/p2.css" />
    <?php require "p2logic.php"; ?>
</head>
<body>
    <h1>Katie Kujala's xkcd Style Password Generator</h1>
    <p class="password">
        <!--<?php echo $psw; ?>-->
    </p>
    <form method="POST" action="index.php">
        <p class="options">

            <input maxlength=1 type="text" name="numwords" id="numwords" value="" />
            <label for="numwords">Number of Words (max 9)</label>
            <br />
            <input type="checkbox" name="number" id="number" />
            <label for="number">Add a number</label>
            <br />
            <input type="checkbox" name="symbol" id="symbol" />
            <label for="symbol">Add a symbol/special character</label>
        </p>
        <br />

        <input type="submit" class="btn" value="Another" />

        <?php if(isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif ?>
    </form>
    <br />
    <p id="mini">
        <a href="http://xkcd.com/936/" target="_blank">xkcd password strength</a>
        <a href="http://xkcd.com/936/" target="_blank">
            <img class="img" src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd style passwords">
        </a>
        <br>
    </p>

</body>
</html>
