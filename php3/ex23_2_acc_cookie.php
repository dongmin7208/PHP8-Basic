<?php
    if(isset($_COOKIE["username"])){
        echo $_COOKIE["username"]."ようこそ.";
    }
    else {
        echo "COOKIEが存在しません。";
    }