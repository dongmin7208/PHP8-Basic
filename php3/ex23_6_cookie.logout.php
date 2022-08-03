<h3>cookie login</h3>

<?php 
    if(!isset($_COOKIE["username"]))
        echo "<a href='ex23_5_cookie_login.php'>Login</a>";
        else
            echo"<a href='ex23_6_cookie_logout.php'>Logout</a>";
    