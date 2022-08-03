<h3>cookie login</h3>

<?php 
    setcookie("userid", "don123",time()+24*60*60*30);
    echo "<script>
    location.href = 'ex23_4_cookie_page.php';
    </script>";