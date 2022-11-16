<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/admins/index.php'));
}
$id = $_GET['id'];
$admin = Admin::find_by_id($id);
if($admin or $user == false) {
  redirect_to(url_for('/staff/admins/index.php'));
}

if(is_post_request()) {

  // Delete admin
  $result = $admin->delete();
  $_SESSION['message'] = 'The admin was deleted successfully.';
  redirect_to(url_for('/staff/admins/index.php'));

} else {
  $result = $user->delete();
  $_SESSION['message'] = 'The user was deleted successfully.';
  redirect_to(url_for('/staff/admins/index.php'));
}

?>

<?php $page_title = 'Delete Admin and Users'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/admins/index.php'); ?>">&laquo; Back to List</a>

  <div class="admin or user delete">
    <h1>Delete Admin or User</h1>
    <p>Are you sure you want to delete this admin?</p>
    <p class="item"><?php echo h($admin->full_name()); ?></p>

    <form action="<?php echo url_for('/staff/admins/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Admin or user" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
