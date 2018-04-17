<?php require_once('../../../private/initialize.php'); ?>
<?php

   $id = $_GET['id'] ?? '1';
   
  $subject = find_subject_by_id($id);   
   
?>

<?php $page_title = 'Show Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>


<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">
    <div class="attributes">
      <dl>
        <dt>Menu Name</dt>
        <dd><?php echo h($subject['menu_name']); ?></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd><?php echo h($subject['position']); ?></dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd><?php echo h($subject['visible']); ?></dd>
      </dl>
    </div>    
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>