
<!doctype html>
<html>
<head>
<?php include "styles/publichead.php" ?>
</head>
<body>
	<div class="nctouch-home-nav fixed-Width">
  <ul>
    <li><a href="tmpl/product_first_categroy.html"><span><i></i></span>
      <p>分类</p>
      </a></li>
    <li><a href="tmpl/cart_list.html"><span><i></i></span>
      <p>购物车</p>
      </a></li>
    <li><a href="tmpl/member/member.html"><span><i></i></span>
      <p>我的商城</p>
      </a></li>
    <li><a href="tmpl/member/signin.html"><span><i></i></span>
      <p>每日签到</p>
     </a></li>
  </ul>
</div>
	<div class="mui-off-canvas-wrap mui-draggable" id='offCanvasShow'>
		<aside class="mui-off-canvas-right " id='offCanvasSide'>
	      <div class="mui-scroll-wrapper">
	        <div class="mui-scroll">
	        <div class="title" style="margin-bottom: 25px;">菜单栏</div>
						<ul class="mui-table-view mui-table-view-chevron mui-table-view-inverted">
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right">
									Item 1
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right">
									Item 2
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right">
									Item 3
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right">
									Item 4
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right">
									Item 5
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right">
								Item 6
							</a>
							</li>

						</ul>
	        </div>
	      </div>
	    </aside>
	<!-- 主页面标题 -->
	
	<div id="offCanvasContentScroll" class="mui-inner-wrap">
		<div class="mui-off-canvas-backdrop"></div>
		<header class="mui-bar mui-bar-nav">
			<h1 class="mui-title left-logo">logo</h1>
			<a id='offCanvasShow' href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
			<a class="mui-icon mui-action-menu mui-icon-plus mui-pull-right"></a>
			<a class="mui-icon mui-action-menu mui-icon-search mui-pull-right"></a>
		</header>
			<div  class="mui-content mui-scroll-wrapper">
			<div class="headerNav_list">
				<ul>
					<li><a>子列表</a></li>
					<li><a>子列表</a></li>
					<li><a>子列表</a></li>
					<li><a>子列表</a></li>
					<li><a>子列表</a></li>
					<li><a>子列表</a></li>
					<li><a>子列表</a></li>
					<li><a>子列表</a></li>
					<li><a>子列表</a></li>
				</ul>
			</div>
			<div class="adv_list" id="main-container1"></div>
			<div class="nctouch-home-layout" id="main-container2"></div>
			<div class="fix-block-r">
				<a href="javascript:void(0);" class="gotop-btn gotop hide" id="goTopBtn"><i></i></a>
			</div>
			<div class="mui-card">
				<ul class="mui-table-view"> 
			        <li class="mui-table-view-cell mui-collapse mui-active">
			            <a class="mui-navigate-right" href="#">面板1</a>
			            <div class="mui-collapse-content">
			                <p>面板1子内容</p>
			            </div>
			        </li>
			        <li class="mui-table-view-cell mui-collapse">
			            <a class="mui-navigate-right" href="#">面板</a>
			                <div class="mui-collapse-content">
			                <p>面板2子内容</p>
			            </div>
			        </li>
			        <li class="mui-table-view-cell mui-collapse">
			            <a class="mui-navigate-right" href="#">面板3</a>
			            <div class="mui-collapse-content">
			                <p>面板3子内容</p>
			            </div>
			        </li> 
			    </ul>
			</div>
		</div>
	</div>


</div>
<!--<div class="nctouch-home-top fixed-Width">

  <header id="header" class="transparent">
  	<div class="logo"></div>
    <div class="header-wrap">
      <a href="tmpl/search.html" class="header-inp"> <i class="icon"></i> <span class="search-input" id="keyword">请输入关键词</span> </a>
    </div>
    <div class="header-r"><a id="header-nav" href="tmpl/member/chat_list.html"><i class="message"></i>
      <p>消息</p>
      <sup></sup></a></div>
  </header>
  <div class="cohesive"></div>
  
</div>-->



<!--<footer id="footer" class="fixed-Width"></footer>-->
<script type="text/html" id="adv_list">
	<div class="mui-slider">
	  <div class="mui-slider-group mui-slider-loop">
	  	<% for (var i in item) { %>
				<div class="mui-slider-item">
					<a href="<%= item[i].url %>">
						<img src="<%= item[i].image %>" alt="">
					</a>
				</div>
			<% } %>
	  </div>
	</div>
</script> 
<script type="text/html" id="home1">
	<div class="nctouch-home-block">
	<% if (title) { %>
		<div class="tit-bar"><%= title %></div>
	<% } %>
		<div class="item-pic">
			<a href="<%= url %>">
				<img src="<%= image %>" alt="">
			</a>
		</div>
	</div>
</script> 
<script type="text/html" id="home2">
	<div class="nctouch-home-block">
	<% if (title) { %>
		<div class="tit-bar"><%= title %></div>
	<% } %>
		<ul class="item-pic-l1-r2">
			<li>
				<a href="<%= square_url %>"><img src="<%= square_image %>" alt=""></a>
			</li>
			<li>
				<a href="<%= rectangle1_url %>"><img src="<%= rectangle1_image %>" alt=""></a>
			</li>
			<li>
				<a href="<%= rectangle2_url %>"><img src="<%= rectangle2_image %>" alt=""></a>
			</li>
		</ul>
	</div>
</script> 
<script type="text/html" id="home3">
	<div class="nctouch-home-block">
	<% if (title) { %>
		<div class="tit-bar"><%= title %></div>
	<% } %>
		<ul class="item-pic-list">
		<% for (var i in item) { %>
			<li>
				<a href="<%= item[i].url %>"><img src="<%= item[i].image %>" alt=""></a>
			</li>
		<% } %>
		</ul>
	</div>
</script> 
<script type="text/html" id="home4">
	<div class="nctouch-home-block">
	<% if (title) { %>
		<div class="tit-bar"><%= title %></div>
	<% } %>
		<ul class="item-pic-l2-r1">
			<li>
				<a href="<%= rectangle1_url %>"><img src="<%= rectangle1_image %>" alt=""></a>
			</li>
			<li>
				<a href="<%= rectangle2_url %>"><img src="<%= rectangle2_image %>" alt=""></a>
			</li>
			<li>
				<a href="<%= square_url %>"><img src="<%= square_image %>" alt=""></a>
			</li>
		</ul>
	</div>
</script> 
<script type="text/html" id="goods">
	<div class="nctouch-home-block item-goods">
	<% if (title) { %>
		<div class="tit-bar"><%= title %></div>
	<% } %>
		<ul class="goods-list">
		<% for (var i in item) { %>
			<li>
				<a href="tmpl/product_detail.html?goods_id=<%= item[i].goods_id %>">
					<div class="goods-pic"><img src="<%= item[i].goods_image %>" alt=""></div>
					<dl class="goods-info">
						<dt class="goods-name"><%= item[i].goods_name %></dt>
						<dd class="goods-price">￥<em><%= item[i].goods_promotion_price %></em></dd>
					</dl>
				</a>
			</li>
		<% } %>
		</ul>
	</div>
</script>
<script type="text/html" id="goods1">
	<div class="nctouch-home-block item-goods">
	<% if (title) { %>
		<div class="tit-bar"><%= title %></div>
	<% } %>
		<ul class="goods-list">
		<% for (var i in item) { %>
			<li>
			<i><div>打折</div></i>
			<a href="tmpl/product_detail.html?goods_id=<%= item[i].goods_id %>">
			<div class="goods-pic"><img src="<%= item[i].goods_image %>" alt=""></div>
					<dl class="goods-info">
						<dt class="goods-name"><%= item[i].goods_name %></dt>
						<dd class="goods-price">￥<em><%= item[i].goods_promotion_price %></em><i class="list-price">￥<%= item[i].goods_price %></i></dd>
					</dl>
			</a>
				</li>
			
		<% } %>
		</ul>
	</div>
</script>
<script type="text/html" id="goods2">
	<div class="nctouch-home-block item-goods">
	<% if (title) { %>
		<div class="tit-bar"><%= title %></div>
	<% } %>
		<ul class="goods-list">
		<% for (var i in item) { %>
			<li>
			<i><div>抢购</div></i>
			<a href="tmpl/product_detail.html?goods_id=<%= item[i].goods_id %>">
			<div class="goods-pic"><img src="<%= item[i].goods_image %>" alt=""></div>
					<dl class="goods-info">
						<dt class="goods-name"><%= item[i].goods_name %></dt>
						<dd class="goods-price">￥<em><%= item[i].goods_promotion_price %></em><i class="list-price">￥<%= item[i].goods_price %></i></dd>
					</dl>
			</a>
				</li>
			
		<% } %>
		</ul>
	</div>
</script> 


<?php include "styles/publicjs.php" ?>
<script>
//	addToHomescreen({
//		message:'如要把应用程式加至主屏幕,请点击%icon, 然后<strong>加至主屏幕</strong>'
//	});
	$(function(){
		setTimeout(function(){
			mui('#offCanvasContentScroll').scroll();
			mui.init({
						swipeBack:true //启用右滑关闭功能
					});
			var gallery = mui('.mui-slider');
			
			gallery.slider({
			  interval:5000//自动轮播周期，若为0则不自动播放，默认为0；
			});
			mui.init({
				swipeBack: true,
			});
			document.getElementById('offCanvasShow').addEventListener('tap', function() {
				 mui('.mui-off-canvas-wrap').offCanvas('show');
			});
		},1500)
		
	})
</script>

</body>
</html>
