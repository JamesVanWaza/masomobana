<?php include_once 'html5req.php';?>
  
<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="vertical medium-horizontal menu dropdown menu" data-dropdown-menu>
      <li class="menu-text">Masomobana</li>
      <li class="has-submenu">
        <a href="javascript.php">Javascript</a>
        <ul class="submenu menu vertical" data-submenu>
          <li>
            <a href="javascript2.php">JS 2</a>
          </li>
          <li>
            <a href="javascript3.php">JS 3</a>
          </li>
          <li>
            <a href="javascript4.php">JS 4</a>
          </li>
          <li>
            <a href="javascript5.php">JS 5</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="git.php">GIT</a>
      </li>
      <li>
        <a href="php.php">PHP</a>
      </li>
      <li>
        <a href="mysql.php">MySQL</a>
      </li>
      <li>
        <a href="jquery.php">jQuery</a>
      </li>
      <li>
        <a href="tables.php">Tables</a>
      </li>
      <li>
        <a href="wordpress.php">Wordpress</a>
      </li>
      <li>
        <a href="terminal.php">Terminal</a>
      </li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li>
        <button type="button" class="button" onclick="signOut">
          <a href="#"></a>Sign Out </button>
      </li>
    </ul>
  </div>
</div>

<div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="responsive-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Site Title</li>
      <li class="has-submenu">
        <a href="#0">One</a>
        <ul class="submenu menu vertical" data-submenu>
          <li>
            <a href="#0">One</a>
          </li>
          <li>
            <a href="#0">Two</a>
          </li>
          <li>
            <a href="#0">Three</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#0">Two</a>
      </li>
      <li>
        <a href="#0">Three</a>
      </li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li>
        <input type="search" placeholder="Search">
      </li>
      <li>
        <button type="button" class="button">Search</button>
      </li>
    </ul>
  </div>
</div>