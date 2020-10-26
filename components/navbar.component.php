<?php

?>

<div class="navbar" id="navbar">

  <div class="hamburger" id="hamburger" onclick="onClickMenu()">
    <div id="bar1" class="hamburger-bar"></div>
    <div id="bar2" class="hamburger-bar"></div>
    <div id="bar3" class="hamburger-bar"></div>
  </div>

  <ul class="menu" id="menu">
      <li> <a href=""> Home </a> </li>
      <li class="account" onclick="accountMenu()"> Account </li>
      <ul class="account-inner-menu" id="account-inner-menu" style="display: none">
        <li> <a href="components/register.php"> Sigup </a> </li>
        <li> <a href="components/login.php"> Login </a> </li>
        <li> <a href=""> Chage password </a> </li>
      </ul>
      <li> <a href=""> Categories </a> </li>
      <li> <a href=""> About </a> </li>
      <li> <a href=""> Help </a> </li>
      <li> <a href=""> Contact </a> </li>
    </ul>

</div>

<div class="menu-bg" id="menu-bg"></div>