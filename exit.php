<?php 
session_start();
// Unset all of the session variables.
session_unset();// Finally, destroy the session.    
session_destroy();

// Include URL for Login page to login again.
header("Location: index.php");
exit;
?>