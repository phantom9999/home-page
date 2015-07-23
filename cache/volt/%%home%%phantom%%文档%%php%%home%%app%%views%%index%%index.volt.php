<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Win8风格Metro界面</title>
<link href="css/metro.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- 代码 开始 -->
<div class="metro-layout horizontal">
	<div class="header">
		<!--<h1>Win8风格Metro界面横向滚动导航代码</h1>-->
		<div class="controls">
			<span class="down" title="Scroll down"></span>
			<span class="up" title="Scroll up"></span>
			<span class="next" title="向右滚动"></span>
			<span class="prev" title="向左滚动"></span>
			<span class="toggle-view" title="切换滚动方式"></span>
		</div>
	</div>

	<div class="content clearfix">
		<div class="items">
		    <?php foreach ($data as $item) { ?>
		        <a class="box
		        <?php if ($item->style == 'cover') { ?>
                    width2 height2
                <?php } else { ?>
                    <?php if ($item->style == 'big') { ?>
                        height2
                    <?php } ?>
                <?php } ?>

		        " href="<?php echo $item->href; ?>">
		            <span><?php echo $item->span; ?></span>
		            <img class="
		            <?php if ($item->style == 'cover') { ?>
		                cover
		            <?php } else { ?>
		                <?php if ($item->style == 'big') { ?>
		                    icon big
		                <?php } else { ?>
		                    icon
		                <?php } ?>
		            <?php } ?>
		            " src="<?php echo $item->images; ?>" />
		        </a>
		    <?php } ?>

		    <!--
			<a class="box" href="#"><span>Mail</span><img class="icon" src="images/mail.png" /></a>
			<a class="box" href="#" style="background: #6b6b6b;"><span>Settings</span><img class="icon" src="images/settings.png" /></a>
			<a class="box" href="#" style="background: #43b51f;"><span>Make a call</span><img class="icon" src="images/phone.png" /></a>
			<a class="box width2 height2" href="#"><span>Photos</span><img class="cover" src="images/gallery.jpg" /></a>
			<a class="box" href="#" style="background: #00aeef;"><span>Music</span><img class="icon" src="images/music.png" /></a>
			<a class="box" href="#" style="background: #f58d00;"><span>Firefox</span><img class="icon" src="images/firefox.png" /></a>
			<a class="box" href="#" style="background: #640f6c;"><span>Yahoo</span><img class="icon" src="images/yahoo.png" /></a>
			<a class="box height2" href="#" style="background: #d32c2c;"><span>GMail</span><img class="icon big" src="images/gmail.png" /></a>
			<a class="box" href="#" style="background: #3c5b9b;"><span>Facebook</span><img class="icon" src="images/facebook.png" /></a>
			<a class="box" href="#" style="background: #ffc808;"><span>Winamp</span><img class="icon" src="images/winamp.png" /></a>
			<a class="box" href="#" style="background: #00a9ec;"><span>Tasks</span><img class="icon" src="images/tasks.png" /></a>
			<a class="box height2" href="#" style="background: #4c5e51;"><span>DeviantART</span><img class="icon big" src="images/deviantart.png" /></a>
			<a class="box" href="#" style="background: #f874a4;"><span>Dribbble</span><img class="icon" src="images/dribbble.png" /></a>


            <a class="box" href="#"><span>Mail</span><img class="icon" src="images/mail.png" /></a>
			<a class="box" href="#" style="background: #6b6b6b;"><span>Settings</span><img class="icon" src="images/settings.png" /></a>
			<a class="box" href="#" style="background: #43b51f;"><span>Make a call</span><img class="icon" src="images/phone.png" /></a>
			<a class="box width2 height2" href="#"><span>Photos</span><img class="cover" src="images/gallery.jpg" /></a>
			<a class="box" href="#" style="background: #00aeef;"><span>Music</span><img class="icon" src="images/music.png" /></a>
			<a class="box" href="#" style="background: #f58d00;"><span>Firefox</span><img class="icon" src="images/firefox.png" /></a>
			<a class="box" href="#" style="background: #640f6c;"><span>Yahoo</span><img class="icon" src="images/yahoo.png" /></a>
			<a class="box height2" href="#" style="background: #d32c2c;"><span>GMail</span><img class="icon big" src="images/gmail.png" /></a>
			<a class="box" href="#" style="background: #3c5b9b;"><span>Facebook</span><img class="icon" src="images/facebook.png" /></a>
			<a class="box" href="#" style="background: #ffc808;"><span>Winamp</span><img class="icon" src="images/winamp.png" /></a>
			<a class="box" href="#" style="background: #00a9ec;"><span>Tasks</span><img class="icon" src="images/tasks.png" /></a>
			<a class="box height2" href="#" style="background: #4c5e51;"><span>DeviantART</span><img class="icon big" src="images/deviantart.png" /></a>
			<a class="box" href="#" style="background: #f874a4;"><span>Dribbble</span><img class="icon" src="images/dribbble.png" /></a>
            
			<a class="box" href="#"><span>Mail</span><img class="icon" src="images/mail.png" /></a>
			<a class="box" href="#" style="background: #6b6b6b;"><span>Settings</span><img class="icon" src="images/settings.png" /></a>
			<a class="box" href="#" style="background: #43b51f;"><span>Make a call</span><img class="icon" src="images/phone.png" /></a>
			<a class="box width2 height2" href="#"><span>Photos</span><img class="cover" src="images/gallery.jpg" /></a>
			<a class="box" href="#" style="background: #00aeef;"><span>Music</span><img class="icon" src="images/music.png" /></a>
			<a class="box" href="#" style="background: #f58d00;"><span>Firefox</span><img class="icon" src="images/firefox.png" /></a>
			<a class="box" href="#" style="background: #640f6c;"><span>Yahoo</span><img class="icon" src="images/yahoo.png" /></a>
			<a class="box height2" href="#" style="background: #d32c2c;"><span>GMail</span><img class="icon big" src="images/gmail.png" /></a>
			<a class="box" href="#" style="background: #3c5b9b;"><span>Facebook</span><img class="icon" src="images/facebook.png" /></a>
			<a class="box" href="#" style="background: #ffc808;"><span>Winamp</span><img class="icon" src="images/winamp.png" /></a>
			<a class="box" href="#" style="background: #00a9ec;"><span>Tasks</span><img class="icon" src="images/tasks.png" /></a>
			<a class="box height2" href="#" style="background: #4c5e51;"><span>DeviantART</span><img class="icon big" src="images/deviantart.png" /></a>
			<a class="box" href="#" style="background: #f874a4;"><span>Dribbble</span><img class="icon" src="images/dribbble.png" /></a>   -->
		</div>
	</div>
</div>
<!-- 代码 结束 -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.plugins.min.js"></script>
<script type="text/javascript" src="js/metro.js"></script>
</body>
</html>