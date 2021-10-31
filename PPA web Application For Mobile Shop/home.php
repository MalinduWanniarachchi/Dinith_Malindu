<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
   
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Welcome To MOON-SHA</h1>
         <p>#1 Mobile Shop in Sri Lanka</p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
