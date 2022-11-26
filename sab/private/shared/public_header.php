<!doctype html>

<html lang="en">
  <head>
    <title>SABirds <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" /> -->
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo url_for('index.php'); ?>">
          Southern Appalachian Birds
        </a>
      </h1>
    </header>

    <navigation>
      <ul>
        <?php if($session->is_logged_in()) { ?>
        <li>User: <?php echo $session->username; ?></li>
        <li><a href="<?php echo url_for('/user/index.php'); ?>">Menu</a></li>
        <li><a href="<?php echo url_for('/logout.php'); ?>">Logout</a></li>
        <?php } ?>
      </ul>
    </navigation>

    <p>Welcome to the Southern Appalachian Bird site.</p>
  
    <navigation>

        <?php 
        if($session->is_logged_in()) {
        echo "<a href='logout.php'>Logout</a>";
        } else {
          echo "<a href='login.php'>Login</a>";
        }

        ?>

    </navigation>
