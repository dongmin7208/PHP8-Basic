<h3>cookie login</h3>

<?php 
    session_start();
    if(isset($_SESSION["username"]))
        unset ($_SESSION["username"]);
    else
        echo "session delete";