<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <ul id="menu">
    <li><a href="<?php echo url_for('/bird.php'); ?>">View Our Birds</a></li>
  </ul>
    
</div>

<?php $bird_image = 'tufted_titmouse.jpeg'; ?>

<?php include(SHARED_PATH . '/public_footer.php'); ?>