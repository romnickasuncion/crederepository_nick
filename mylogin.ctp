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
	<title>ログイン画面</title>
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
	<div id="wrapper">
		
		<div id="header">
			<div id="ci">
				<p><img src="/user/mypage/img/logo.gif" alt="CREDENCE" height="54" width="56"></p>
				<p class="sitedescript">アパレル求人・転職ならクリーデンス。経験を生かした転職をサポートします。<br>大手・デザイナーズ・外資系企業の豊富な求人や、転職に役立つサービスが満載。</p>
			</div><!-- /ci -->
		</div><!-- /header -->


		


		<div id="areaMypage">
			<h1 class="hdg01">ログイン画面</h1>
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div><!-- /areaMypage -->

			<div class="pagetop"><a href="http://www.crede.co.jp/rule/mypage.pdf" target="_brank">規約</a></div>

		<div id="footer">
			<div class="footerci">
				<ul>
					<li class="copyright">Copyright （C） CREDENCE,Ltd. All Rights Reserved.</li>
				</ul>
			</div>
		</div><!-- /footer -->
	</div><!-- /wrapper -->
</div><!-- /wrap -->

</body>
</html>