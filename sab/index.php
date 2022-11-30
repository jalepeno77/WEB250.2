<?php require_once('private/initialize.php'); ?>

<?php 
$birds = Bird::find_all(); 
$page_title = 'Birds'; 
include(SHARED_PATH . '/public_header.php'); 

?>


<h1>Bird List</h1>


  	<table border="1">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
        <?php 
        if($session->is_logged_in()) {
        echo "<th>&nbsp;</th>";
        echo "<th>&nbsp;</th>";
        echo "<th>&nbsp;</th>";
      } ?>
      </tr>

      <?php foreach($birds as $bird) { ?>
        <tr>
          <td><?php echo h($bird->id); ?></td>
          <td><?php echo h($bird->common_name); ?></td>
          <td><?php echo h($bird->habitat); ?></td>
          <td><?php echo h($bird->food); ?></td>
          <td><?php echo h($bird->conservation()); ?></td>
          <td><?php echo h($bird->backyard_tips); ?></td>

          <?php if($session->is_logged_in()) {
            echo '<td><a class ="action" href="' . url_for('/birds/show.php?id=' . h(u($bird->id))) . '">View</a></td>';
            echo '<td><a class ="action" href="' . url_for('/birds/edit.php?id=' . h(u($bird->id))) . '">Edit</a></td>';
            echo '<td><a class ="action" href="' . url_for('/birds/delete.php?id=' . h(u($bird->id))) . '">Delete</a></td>';
          } ?>
    	  </tr>
      <?php } ?>
  	</table>

<?php include(SHARED_PATH . '/user_footer.php'); ?>
