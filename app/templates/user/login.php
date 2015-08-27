<?php $this->layout('layout_bdloc_nomenu', ['title' => 'Login !']) ?>

<?php $this->start('main_content') ?>

<?php $this->insert('user/login_insert',['username'=>'','error'=>'']) ?>
<?php $this->stop('main_content') ?>