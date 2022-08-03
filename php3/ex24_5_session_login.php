<h3>session login</h3>

<?php
session_start();
$_SESSION["userid"] = "don123";
$_SESSION["username"] = "donmin";
 echo"<script>
 location.href = 'session_page.php';
 </script>
?>";