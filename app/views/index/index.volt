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
            {% set i = 0 %}
            {% set j = 0 %}
		    {% for item in websiteData %}
                {% set i = i + 1 %}
                {% if i % 4 == 0 %}
                    {# 显示大图 #}
                    {% set j = j + 1 %}
                    {% if j % 2 == 1 %}
                        {# 照片 #}
                        {% set i = i + 1 %}
            <a class="box width2 height2" href="#"><span>Photos</span><img class="cover" src="/{{ sightData[j].images }}" /></a>
                    {% else %}
                        {# 大logo #}
            <a class="box height2" href="/index/re/{{ item.token }}" style="background: {{ colorData[i].color }};"><span>{{ item.note }}</span><img class="icon big" src="/{{ item.images }}" /></a>
                        {% continue %}
                    {% endif %}
                {% endif %}
                {# 小logo #}
            <a class="box" target='_blank' href="/index/re/{{ item.token }}" style="background: {{ colorData[i].color }};"><span>{{ item.note }}</span><img class="icon" src="/{{ item.images }}" /></a>
		    {% endfor %}
		</div>
	</div>
</div>
<!-- 代码 结束 -->
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.plugins.min.js"></script>
<script type="text/javascript" src="/js/metro.js"></script>
</body>
</html>