<?php 
require_once('../../../private/initialize.php');

if (is_post_request()) {

  $page = [];
  $page['subject_id'] = $_POST['subject_id'] ?? '';
  $page['menu_name'] = $_POST['menu_name'] ?? '';
  $page['position'] = $_POST['position'] ?? '';
  $page['visible'] = $_POST['visible'] ?? '';
  $page['content'] = $_POST['content'] ?? '';

  insert_page($page);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/staff/pages/show.php?id=' . $new_id));
  
} else {
  redirect_to(url_for('/staff/pages/new.php'));
}


?>
