<h3>cookie login</h3>

<?php 
    setcookie("userid", "", time()-3600);
    echo "<script>
        location.href = 'ex23_4_cookie_page.php';
    </script>";