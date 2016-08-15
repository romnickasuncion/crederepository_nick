<?php
echo $this->Html->meta('icon');
/*echo $this->Html->css('bootstrap.min');*/
/*echo $this->Html->css('mediarch');*/
?>

<div id="iloginfrmwrap">
	<div id="iloginhdr">Mypage</div>
	<div class="profile">
<?php if ($error_list):?>
	<?php foreach ($error_list as $error):?>
	<div class="error" align="center"><?php echo h($error);?></div>
	<?php endforeach;?>
	<br />
<?php endif;?>
</div>
<?php echo $this->Form->create('CompanyUser', array('class'=>'form-horizontal', 'id'=>'iloginfrm', 'url' => array('controller' => 'CompanyLogins', 'action' => 'index'), 'inputDefaults' => array('label' => false, 'div' => false, 'error' => false))); ?>
<input type="hidden" name="auth_key" value="<?php echo h($auth_key);?>" />
<div class="control-group">
	<label class="control-label" for="inputEmail">ID:</label>
	<div class="controls">
		<?php echo $this->Form->input('LOGIN_NAME', array('type' => 'text', 'value' => $login_rec['login_id'], 'autocomplete' => 'off', 'id' => 'LOGIN_NAME', 'placeholder'=>'ID',  'class'=>'input-medium')); ?>
	</div>
</div>
<div class="control-group">
	<label class="control-label" for="inputPassword">パスワード:</label>
	<div class="controls">
		<?php echo $this->Form->input('LOGIN_PASSWORD', array('type' => 'password', 'value' => $login_rec['login_pw'], 'autocomplete' => 'off', 'id' => 'LOGIN_PASSWORD', 'placeholder'=>'パスワード', 'class'=>'input-medium')); ?>
	</div>
</div>
<div class="control-group alignC">
	<div class="controls">
		<?php echo $this->Form->submit('ログイン', array('class'=>'btn btn-primary','alt' => 'idosearch')); ?>
	</div>
</div>
<div class="control-group alignC">
	<div class="controls">
		<input class="btn btn-primary" onclick="window.location.href='<?php echo $this->Html->url("/CompanyLogins/edit_password",false);?>'" type = "button" value ="パスワード再発行">
	</div>
	<br>
	<font size="1">
		※パスワードを忘れた方はこちらから再発行手続きをしてください。
	</font>
</div>
<?php echo $this->Form->input('click_btn', array('type'=>'hidden','value'=>'login'));?>
<?php echo $this->Form->end(); ?>

</div>
