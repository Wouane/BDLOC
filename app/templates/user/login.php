<?php $this->layout('layout_bdloc_home', ['title' => 'Login !']) ?>

<?php $this->start('main_content') ?>

<div class="page-login"><?php $this->insert('user/login_insert',['username'=>'','error'=>'']) ?></div>
<?php 
echo "<div class='warning'>";
echo ($error);
echo "</div>";
?>
<?php $this->stop('main_content') ?>