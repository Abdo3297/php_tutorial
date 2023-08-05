<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    ?>

</body>

</html>



<?php
// to modify sessions
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // to change a session variable, just overwrite it
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);
    ?>

</body>

</html>



<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to remove sessions
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>