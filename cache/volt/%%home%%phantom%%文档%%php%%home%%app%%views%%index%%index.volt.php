<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Win8风格Metro界面</title>
<link href="/css/metro.css" rel="stylesheet" type="text/css" />
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
            <?php $i = 0; ?>
            <?php $j = 0; ?>
		    <?php foreach ($websiteData as $item) { ?>
                <?php $i = $i + 1; ?>
                <?php if ($i % 4 == 0) { ?>
                    
                    <?php $j = $j + 1; ?>
                    <?php if ($j % 2 == 1) { ?>
                        
                        <?php $i = $i + 1; ?>
            <a class="box width2 height2" href="#"><span>Photos</span><img class="cover" src="/<?php echo $sightData[$j]->images; ?>" /></a>
                    <?php } else { ?>
                        
            <a class="box height2" href="/index/re/<?php echo $item->token; ?>" style="background: <?php echo $colorData[$i]->color; ?>;"><span><?php echo $item->note; ?></span><img class="icon big" src="/<?php echo $item->images; ?>" /></a>
                        <?php continue; ?>
                    <?php } ?>
                <?php } ?>
                
            <a class="box" target='_blank' href="/index/re/<?php echo $item->token; ?>" style="background: <?php echo $colorData[$i]->color; ?>;"><span><?php echo $item->note; ?></span><img class="icon" src="/<?php echo $item->images; ?>" /></a>
		    <?php } ?>
		</div>
	</div>
</div>
<!-- 代码 结束 -->
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.plugins.min.js"></script>
<script type="text/javascript" src="/js/metro.js"></script>
</body>
</html>