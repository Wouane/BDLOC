<?php $this->layout('layout_bdloc_home', ['title' => 'Login !']) ?>

<?php $this->start('main_content') ?>


<?php 
echo "<div class='login'>" . $this->insert('user/login_insert',['username'=>'','error'=>'']) . "</div>";

echo "<div class='warning'>";
echo ($error);
echo "</div>";
?>
<?php $this->stop('main_content') ?>