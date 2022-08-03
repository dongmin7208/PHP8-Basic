<h3>cookie login</h3>

<?php 
    session_start();
    if(isset($_SESSION["username"]))
        echo $_SESSION["username"]."ようこそ.";
    else
        echo "username sessionは存在しません。";