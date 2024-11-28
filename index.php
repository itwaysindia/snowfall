<?php 
require_once('includes/config/config.php');
?>
<center>
<br />
<br />
<br />
<br />
<a href="auth/">Login</a> | <a href="dashboard/">Dashboard</a>
</center>
<?php


// Start session to manage user login
ob_start();
@session_start();


?>
