<?php $this->load->view('layout/header'); ?>
<div class="main-wrapper">
	<div class="header-wapper">
		<div class="header">
			<div id="header-banner" class="wrapper-one">
				<div class="head-left">
					<a class="header-logo" href="<?php echo site_url();?>" title="礼物说"></a>
					<form class="searchbox" onsubmit="return false;">
				        <input type="text" id="search-input" placeholder="搜索礼物、攻略" />
				        <label for="search-input">搜索</label>
				        <i></i>
			        </form>
				</div>
				<div class="head-right">
					<div id="btn-login" class="btn-login">登录 / 注册</div>
					<!--  
					<div class="user-container">
						<div class="user-info">
							<i class="user-avatar" style="background: url(http://img03.liwushuo.com/image/170616/ob0s3nwn7.jpg-w180);background-size: cover;-ms-behavior: url(htc/backgroundsize.min.htc);behavior: url(htc/backgroundsize.min.htc);"></i>
							<p class="user-name">◆κiζs瀧☂</p>
						</div>
					</div>
					-->	
				</div>
			</div>
			<div id="header-nav">
				<nav class="wrapper-one">
					<ul class="top-nav-link">
						<li class="nav-top-bar"><a id="ntba-home" class="active" href="/">首页</a></li>
						<!--  
						<li class="nav-top-bar"><a class="ntba people" href="/posts?tab=people&amp;target_id=34">赠送对象</a>
							<ul class="menu-panel">
								<li><a href="/posts?tab=people&amp;target_id=34">自己</a></li>
								<li><a href="/posts?tab=people&amp;target_id=9">男票</a></li>
								<li><a href="/posts?tab=people&amp;target_id=10">女盆友</a></li>
								<li><a href="/posts?tab=people&amp;target_id=5">闺蜜们</a></li>
								<li><a href="/posts?tab=people&amp;target_id=26">基友</a></li>
								<li><a href="/posts?tab=people&amp;target_id=6">爸爸妈妈</a></li>
								<li><a href="/posts?tab=people&amp;target_id=24">小盆友</a></li>
								<li><a href="/posts?tab=people&amp;target_id=17">同事</a></li>
							</ul>
						</li>
						<li class="nav-top-bar"><a class="ntba occasion" href="/posts?tab=occasion&amp;scene_id=39">赠送场合</a>
							<ul class="menu-panel">
								<li><a href="/posts?tab=occasion&amp;scene_id=39">新年</a></li>
								<li><a href="/posts?tab=occasion&amp;scene_id=30">生日</a></li>
								<li><a href="/posts?tab=occasion&amp;scene_id=31">纪念日</a></li>
								<li><a href="/posts?tab=occasion&amp;scene_id=33">结婚</a></li>
								<li><a href="/posts?tab=occasion&amp;scene_id=36">感谢</a></li>
								<li><a href="/posts?tab=occasion&amp;scene_id=32">情人节</a></li>
								<li><a href="/posts?tab=occasion&amp;scene_id=35">乔迁</a></li>
								<li><a href="/posts?tab=occasion&amp;scene_id=40">圣诞节</a></li>
							</ul>
						</li>
						<li class="nav-top-bar"><a class="ntba hobbies" href="/posts?tab=hobbies&amp;personality_id=2">Ta的个性</a>
							<ul class="menu-panel">
								<li><a href="/posts?tab=hobbies&amp;personality_id=2">美物</a></li>
								<li><a href="/posts?tab=hobbies&amp;personality_id=3">手工</a></li>
								<li><a href="/posts?tab=hobbies&amp;personality_id=27">吃货</a></li>
								<li><a href="/posts?tab=hobbies&amp;personality_id=11">萌萌哒</a></li>
								<li><a href="/posts?tab=hobbies&amp;personality_id=29">动漫迷</a></li>
								<li><a href="/posts?tab=hobbies&amp;personality_id=14">小清新</a></li>
								<li><a href="/posts?tab=hobbies&amp;personality_id=28">科技范</a></li>
							</ul>
						</li>
						<li class="nav-top-bar ntbd"><a id="ntba-download" href="/app">下载手机版</a></li>
						-->
					</ul>
					<form class="nav-searchbox" style="display: none;" onsubmit="return false;">
						<input id="search-input" placeholder="搜索礼物、攻略" type="text">
						<label for="search-input"><i></i></label>
					</form>
				</nav>
			</div>
		</div>
	</div>
	<div class="header-margin-fix"></div>
	<div class="banner-wrapper">
		<!--  
		<div class="wrapper" style="margin-top: -70px;">
			 <h1 class="logo"><a href="javascript:;">礼物说 - 礼物和全球好货指南</a></h1>
			 <div class="download">
			 	<a class="btn-iphone" href="http://tietie.la/j/lws_ios">iPhone 版下载</a>
			 	<div class="android-download">
			 		<div class="btn-android">Android 版下载</div>
			 		<div class="android-download-list">
			 			<a class="adl-item btn-91" href="http://bcs.apk.r1.91.com/data/upload/apkres/2015/1_7/9/com.liwushuo.gifttalk_093902.apk?p=android&f_name=%u793C%u7269%u8BF4&f_version=&icon=&channelid=&f_identify=com.liwushuo.gifttalk_093902.apk" name="礼物说" onclick="return Key.Open(this, 'android');" SoftIcon="" title="通过91助手下载"><i></i><p>百度极速安装</p></a>
			            <a class="adl-item btn-360" href="zhushou360://type=apk&name=礼物说&url=http://tietie.la/j/lws_android"><i></i><p> 360 一键安装</p></a>
			            <a class="adl-item btn-wandoujia" href="http://tietie.la/j/lws_android" onclick="return wdapi_apkdl(this);"><i></i><p>豌豆荚安装</p></a>
			            <a class="adl-item btn-pc" href="http://tietie.la/j/lws_android"><i></i><p>本地下载安装</p></a>
			 		</div>
			 	</div>
			 </div>
			 
			 <div class="social">
		         <p class="weibo">
		         	<i class="icon-weibo"></i><span>新浪微博：<a target="_blank" href="http://weibo.com/u/5100805544">@礼物说</a></span>
		         </p>
	         </div>
	        
	         <div class="slideshow">
		         <ul>
			         <li><img src="lw/pc/images/01_1871a63.png"></li>
			         <li><img src="lw/pc/images/slide/02_d63bbc8.png"></li>
			         <li><img src="lw/pc/images/slide/03_70f52ae.png"></li>
			         <li><img src="lw/pc/images/slide/04_d48b04d.png"></li>
			         <li><img src="lw/pc/images/05_23c3230.png"></li>
		         </ul>
	         </div>
	         <div class="gallery"></div>
		</div>
		 -->
	</div>
	<div class="wrapper recommend-wrapper" id="display-container">
		<h3>攻略精选</h3>
		<ul class="reco-list" id="reco-list">
			<li class="post-item">
				<a href="javascript:;" class="pitem">
					<div class="pitem-cover" style="background: url(lw/pc/images/yw91bpu53.jpg-w720.jpg);background-size:cover;background-position:50% 50%;border-radius: 6px 6px 0 0;"></div>
					<div class="new-flag flag-1048322"></div>
					<div class="pitem-title">美腿计划：如何让蚊虫远离你，在这美丽的夏季？</div>
					<div class="pitem-content">太阳远离赤道，向着北回归线一点点靠近。悄悄地，轻轻地，夏天终是来了。小的时候最喜欢的季节就是夏天，因为夏天有凉凉的...</div>
					<ul class="pitem-info">
						<li class="info-item"><i class="info-icon icon-like" data-id="1048300"></i><span>8437</span></li>
						<li class="info-item"><i class="info-icon icon-comment"></i><span>6</span></li>
						<li class="info-item"><i class="info-icon icon-share"></i><span>161</span></li>
					</ul>
				</a>
			</li>
			<li class="post-item">
				<a href="javascript:;" class="pitem">
					<div class="pitem-cover" style="background: url(lw/pc/images/buos2v7r2.jpg-w720.jpg);background-size:cover;background-position:50% 50%;border-radius: 6px 6px 0 0;"></div>
					<div class="pitem-title">有哪些小众又不失设计感的品牌手表？</div>
					<div class="pitem-content">手表，为你见证分分秒秒！手表的作用也不仅仅是看时间，随着时间流逝，手表带给大家的是知性的魅力，身份的象征，成熟的感...</div>
					<ul class="pitem-info">
						<li class="info-item"><i class="info-icon icon-like" data-id="1048318"></i><span>9319</span></li>
						<li class="info-item"><i class="info-icon icon-comment"></i><span>6</span></li>
						<li class="info-item"><i class="info-icon icon-share"></i><span>406</span></li>
					</ul>
				</a>
			</li>
			<li class="post-item">
				<a href="javascript:;" class="pitem">
					<div class="pitem-cover" style="background: url(lw/pc/images/65nm51i6r.jpg-w720.jpg);background-size:cover;background-position:50% 50%;border-radius: 6px 6px 0 0;"></div>
					<div class="pitem-title">总有一本笔记本里写满了你所怀念的青春</div>
					<div class="pitem-content">又是一年毕业季，不管是刚从书山题海中解放的高三党，即将走出校园踏进职场的大学毕业生，还是每日朝九晚五的上班族，在这...</div>
					<ul class="pitem-info">
						<li class="info-item"><i class="info-icon icon-like" data-id="1048319"></i><span>5685</span></li>
						<li class="info-item"><i class="info-icon icon-comment"></i><span>4</span></li>
						<li class="info-item"><i class="info-icon icon-share"></i><span>72</span></li>
					</ul>
				</a>
			</li>
			<li class="post-item">
				<a href="javascript:;" class="pitem">
					<div class="pitem-cover" style="background: url(lw/pc/images/tt87cg3tp.jpg-w720.jpg);background-size:cover;background-position:50% 50%;border-radius: 6px 6px 0 0;"></div>
					<div class="pitem-title">你是如何与奇葩室友相处的？</div>
					<div class="pitem-content">从小学到初中，从初中到高中，再从高中到大学，你至少有一个阶段是留校的。特别是大学，大半年都在学校里。而在学校，待的...</div>
					<ul class="pitem-info">
						<li class="info-item"><i class="info-icon icon-like" data-id="1048317"></i><span>7189</span></li>
						<li class="info-item"><i class="info-icon icon-comment"></i><span>19</span></li>
						<li class="info-item"><i class="info-icon icon-share"></i><span>748</span></li>
					</ul>
				</a>
			</li>
			<li class="post-item">
				<a href="javascript:;" class="pitem">
					<div class="pitem-cover" style="background: url(lw/pc/images/59yv4u9ho.jpg-w720.jpg);background-size:cover;background-position:50% 50%;border-radius: 6px 6px 0 0;"></div>
					<div class="pitem-title">这年头不拎个菜篮子出门，都不好意思说自己时尚</div>
					<div class="pitem-content">今年夏天最流行的单品是菜篮子？说出来你可能不信。那不如先看看这些时尚大佬们的实力演绎：</div>
					<ul class="pitem-info">
						<li class="info-item"><i class="info-icon icon-like" data-id="1048311"></i><span>2452</span></li>
						<li class="info-item"><i class="info-icon icon-comment"></i><span>7</span></li>
						<li class="info-item"><i class="info-icon icon-share"></i><span>256</span></li>
					</ul>
				</a>
			</li>
			<li class="post-item">
				<a href="javascript:;" class="pitem">
				<div class="pitem-cover" style="background: url(lw/pc/images/jqx73r1nx.jpg-w720.jpg);background-size:cover;background-position:50% 50%;border-radius: 6px 6px 0 0;"></div>
				<div class="pitem-title">想让底妆起死回生，你需要这些定妆喷雾</div>
				<div class="pitem-content">夏天到了，因为气温的升高，分分钟担心自己辛苦化好的妆容在瞬间被花掉。这个时候只需要一瓶喷雾就能轻松搞定。其实，定妆...</div>
					<ul class="pitem-info">
						<li class="info-item"><i class="info-icon icon-like" data-id="1048285"></i><span>7899</span></li>
						<li class="info-item"><i class="info-icon icon-comment"></i><span>1</span></li>
						<li class="info-item"><i class="info-icon icon-share"></i><span>347</span></li>
					</ul>
				</a>
			</li>
		</ul>
		<div class="loading load-tip" id="loading" style="display: none">正在加载中……</div>
		<div class="load-tip" id="next" style="display: none">
			<a href="javascript:;">点击加载更多</a>
		</div>
		<div class="back-top"></div>
		<div class="download-qr load-end" style="display: none">
		    <h3>查看更多攻略，请扫描二维码下载礼物说</h3>
		    <p>支持 iOS 和 Android</p>
		    <img src="" alt="" />
	    </div> 
	</div>
	<div class="wrapper recommend-wrapper" id="search-container" style="display: none">
      	<h3>搜索结果</h3>
      	<ul class="reco-list" id="search-list"></ul>
      	<div class="blank-holder search-blank" style="margin-bottom: 160px;">
		        <i></i>
		        <p>没有搜到任何攻略哦~</p>
	      	</div>
    	</div>
		<div id="related-search" class="wrapper">
			<div>热门搜索</div>
			<table cellpadding="0">
				<tr>
					<td>
						<a class="related-search" href="http://www.miaocw.com" target="_blank">
					            妙处网
					    </a>
					</td>
				</tr>
			</table>
		</div>
		<div class="footer">
			<p class="copyright">
				<span style="font-family:Arial;">&copy; </span>2016 - 2017 lw.miaocw.com　　　ICP经营性许可证：浙ICP备16035696号
				<br/>
				<a href="javascript:;">首页</a> |
			    <a href="javascript:;">商务合作</a> |
			    <a href="javascript:;">关于我们</a> |
				<span style="vertical-align: middle;">&nbsp;&nbsp;电话：15900626594</span>
			</p>
	   </div>
</div>
<?php $this->load->view('layout/footer'); ?>
