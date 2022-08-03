<h3>session login</h3>

<?php
session_start();
if(isset($_SESSION["userId"])) {
    unset($_SESSION["userid"]);
}
if(isset($_SESSION["username"])){
    unset($_SESSION["username"]);
}

echo "<script>
    location.href = 'ex24_4_session_page.php';
</script>";