<?php
    namespace agroup;
    class user{
        function loadUser(){
            return "첫번째 클래스의 메소드";
        }
    }



    namespace bgroup;

    class user{
        function loadUser(){
            return "두번 째 클래스의 메소드";
        }
    }

  use \agroup\user as au;
  use \bgroup\user as bu;

  $au = new au;
  $bu = new bu;

  echo $au->loadUser();
  echo "<br>";
  echo $bu->loadUser();
//   echo \agroup\loadUser();

  //use사용하여 축약형으로 사용가능.