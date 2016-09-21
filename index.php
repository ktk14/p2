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
        <?php echo $psw; ?>
    </p>
    <form method="POST" action="index.php">
        <p class="options">
            <label for="numwords"># of Words (4-9)</label>
            <input type="text" maxlength=1 name="numwords" id="numwords" />
            <br />
            <input type="checkbox" name="addnum" id="addnum" />
            <label for="addnum">Add a number</label>
            <br />
            <input type="checkbox" name="addsymbol" id="addsymbol" />
            <label for="addsymbol">Add a symbol/special character</label>
        </p>
        <br />
        <input type="submit" class="btn" value="Another" />

        <?php if(isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif ?>
    </form>
    <br />
    <div id="mini">
        <p>
            <a href="http://xkcd.com/936/" target="_blank">xkcd password strength</a> is the comic that provided the inspiration for this password generator.
        </p>
        <img class="img" src="/images/molly.jpg" alt="Molly, my dog" title="My security dog, Molly">
    </div>

</body>
</html>
