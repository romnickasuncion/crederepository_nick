<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
//URL
$url = "http://www.crede.co.jp";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo $this->Html->charset(); ?>
	<title>企業マイページ｜アパレル業界の求人、転職ならクリーデンス</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('common');
		echo $this->Html->css('mypage');
	?>
	<?php
		echo $this->Html->script('check');
		echo $this->Html->script('smartRollover');
	?>
	
</head>

<body id="mypage">

<div id="wrap">
	<div id= "wrapper">
		
		<div id="header">
		
			<div id="ci">
				<p><a href="https://www.crede.co.jp/"><img src="/client/mypage/webroot/img/logo.gif" alt="CREDENCE" height="80" width="80"></a></p>
                        	<p class="sitedescript"><br>ファッション・アパレル業界の求人、転職ならクリーデンス</p>
									
			</div>
		</div><!-- /header -->


		

		
		<div id="areaMypage">
			<hr class="hrFooter">
			<h1 class="hdg01"><img src="/client/mypage/webroot/img/human.png" height="40" width="30"> &nbsp;企業マイページ</h1>
			<div class="bgimage">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
			</div>
		</div><!-- /areaMypage -->
		
			<div class="pagetop">
			<a href="#"><img src="/client/mypage/webroot/img/pagetop.png" height="50" width="50"></a>
			<hr class="hrFooter" size="1">
		<div id="footer">
			<div class="footerci">
			
				<ul>
					<a href="http://www.crede.co.jp/rule/mypage.pdf" target="_blank">クリーデンスマイページに関する規約</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;© Intelligence,Ltd. All Rights Reserved.<br>
					<li class="copyright"></li>
				</ul>
			</div>
		</div><!-- /footer -->
	</div><!-- /wrapper -->
</div><!-- /wrap -->
</body>
</html>