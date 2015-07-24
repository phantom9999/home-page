--插入颜色
insert into color (color) values
('#6b6b6b'),
('#43b51f'),
('#00aeef'),
('#f58d00'),
('#640f6c'),
('#d32c2c'),
('#3c5b9b'),
('#ffc808'),
('#00a9ec'),
('#4c5e51'),
('#f874a4');

select count(*) from color;

-- 网站信息插入

insert into website (note, href, token, images) values
('知乎', 'http://www.zhihu.com/', '知乎', 'images/default.png'),
('quora', 'https://www.quora.com/', 'quora', 'images/default.png'),
('stackoverflow', 'http://stackoverflow.com/', 'stackoverflow', 'images/default.png'),
('developerworks', 'http://www.ibm.com/developerworks/cn/', 'developerworks', 'images/default.png'),
('豆瓣', 'http://www.douban.com/', '豆瓣', 'images/default.png'),
('csdn', 'http://www.csdn.net/', 'csdn', 'images/default.png'),
('博客园', 'http://www.cnblogs.com/', '博客园', 'images/default.png'),
('36氪', 'http://36kr.com/', '36氪', 'images/default.png'),
('果壳', 'http://www.guokr.com/', '果壳', 'images/default.png'),
('统计之都', 'http://cos.name/cn/', '统计之都', 'images/default.png'),
('kaggle', 'https://www.kaggle.com/', 'kaggle', 'images/default.png'),
('谷歌','https://www.google.com/', '谷歌', 'images/default.png'),
('谷歌邮箱','https://mail.google.com/', '谷歌邮箱', 'images/default.png'),
('谷歌学术','https://scholar.google.com/', '谷歌学术', 'images/default.png'),
('中国知网','http://www.cnki.net/', '中国知网', 'images/default.png'),
('github','https://github.com/', 'github', 'images/default.png'),
('bitbucket','https://bitbucket.org/', 'bitbucket', 'images/default.png'),
('sourceforge','http://sourceforge.net/', 'sourceforge', 'images/default.png'),
('开源中国','http://www.oschina.net/', '开源中国', 'images/default.png'),
('open-open','http://www.open-open.com/', 'open-open', 'images/default.png'),
('脚本之家','http://www.jb51.net/', '脚本之家', 'images/default.png'),
('谷歌code','https://code.google.com/', '谷歌code', 'images/default.png'),
('百度网盘','http://pan.baidu.com/', '百度网盘', 'images/default.png'),
('dropbox','https://www.dropbox.com/', 'dropbox', 'images/default.png'),
('onedrive','https://onedrive.live.com/', 'onedrive', 'images/default.png'),
('网易云音乐','http://music.163.com/', '网易云音乐', 'images/default.png'),
('网易云笔记','http://note.youdao.com/', '网易云笔记', 'images/default.png'),
('腾讯邮箱','https://mail.qq.com/cgi-bin/loginpage', '腾讯邮箱', 'images/default.png'),
('outlook','https://login.live.com/', 'outlook', 'images/default.png'),
('网易云课堂','http://study.163.com/', '网易云课堂', 'images/default.png'),
('网易公开课','http://open.163.com/', '网易公开课', 'images/default.png'),
('coursera','https://www.coursera.org/', 'coursera', 'images/default.png'),
('必应搜索','https://cn.bing.com/', '必应搜索', 'images/default.png'),
('百度搜索','https://www.baidu.com/', '百度搜索', 'images/default.png'),
('python2文档','https://docs.python.org/2/', 'python2文档', 'images/default.png'),
('python3文档','https://docs.python.org/3/', 'python3文档', 'images/default.png'),
('numpy文档','http://docs.scipy.org/doc/numpy/reference/', 'numpy文档', 'images/default.png'),
('scipy文档','http://docs.scipy.org/doc/scipy/reference/', 'scipy文档', 'images/default.png'),
('sklearn文档','http://scikit-learn.org/stable/documentation.html', 'sklearn文档', 'images/default.png'),
('pandas文档','http://pandas.pydata.org/pandas-docs/stable/', 'pandas文档', 'images/default.png'),
('matplotlib文档','http://matplotlib.org/', 'matplotlib文档', 'images/default.png'),
('ipython文档','http://ipython.org/documentation.html', 'ipython文档', 'images/default.png'),
('sympy文档','http://docs.sympy.org/latest/index.html', 'sympy文档', 'images/default.png'),
('xx桌面','http://desktop.docshouse.cn/', 'xx桌面', 'images/default.png'),
('xx博客','http://blog.docshouse.cn/', 'xx博客', 'images/default.png'),
('xx小说','http://novel.docshouse.cn/', 'xx小说', 'images/default.png');


delete from sight;
insert into sight (images) values
  ('images/gallery.jpg'),
  ('images/LagosPortugal.jpg'),
  ('images/MoonDayMontage.jpg'),
  ('images/SSGreatBritainBow.jpg'),
  ('images/WhaleSounds.jpg')
;


update website set vote = abs(random()) % 100;