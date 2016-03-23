<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @我自己修改
 */
/* 
Template Name: knuthdai首页 
*/  
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>找回自信---回归自然</title>
<link href="css/zxmk.css" rel="stylesheet" type="text/css"/>
<script src="js/core.js" type="text/javascript"></script>
<script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>

</head>
<body>
<div class="top-nav">
  <div class="w1000 clearfix">
    <div class="topLogo"><a href="http://www.knuthdai.cn"><img src="images/xx-logo.jpg"  alt="logo"/></a></div>
    <div class="topLogin"> <a href="http://www.knuthdai.cn/wp-login.php">登陆</a>┊<a href="http://www.knuthdai.cn/wp-signup.php">注册</a> </div>
  </div>
</div>
<div class="index-con" style="z-index: 0">
  <ul>
    <li class="in-kct in-course"> <a href="http://www.knuthdai.cn/?post_type=product" title="商品">
      <div class="in-block"> <i class="bigger"></i> <span class="ch show" style="display: block;">商品</span> <i class="in-none"></i> <span class="in-text" style="display: none;">
        <p><em>真便宜</em>&nbsp;&nbsp;品质保障 </p>
       
        </span> </div>
      </a> </li>
    <li class="in-kct in-quest"> <a href="http://www.knuthdai.cn/?p=new" title="文章">
      <div class="in-block"> <i class=""></i> <span class="ch" style="display: inline;">文章</span> <i class="in-none"></i> <span class="in-text" style="display: none; width: 280px; left: 30px">
        <p><em>多碗</em>心灵鸡汤、<em>若干</em>篇感悟</p>
        <p>让你与我的距离<em>更贴近</em>！</p>
        </span> </div>
      </a> </li>
    <li class="in-jbk in-plan"> <a href="#" title="每日感悟">
      <div class="in-block"> <i style="display: block;"></i> <span style="display: inline;">每日感悟</span> <i class="in-none toLeft1" style="display: none;"></i> <span class="in-text" style="display: none;">
        <p>完备的规划是指引</p>
        <p>我们取得成功的前提</p>
        </span> </div>
      </a> </li>
    <li class="in-jbk in-report"> <a href="http://www.knuthdai.cn/wp-admin/" title="站点管理">
      <div class="in-block"> <i style="display: block;"></i> <span style="display: inline;">站点管理</span> <i class="in-none toLeft2" style="display: none;"></i> <span class="in-text" style="display: none;">
        <p>装饰房间</p>
        <p>有权限才能做主啊！</p>
        </span> </div>
      </a> </li>
    <li class="in-zxl in-forma"> <a href="#" title="调查研究">
      <div class="in-block"> <i style="display: block;"></i> <span style="display: inline;">调查研究</span> <i class="in-none toLeft0 toLeft4" style="display: none;"></i> <span class="in-text" style="display: none;">
        <p>更简洁、更简单、更强大、更专业</p>
     
        </span> </div>
      </a> </li>
    <li class="in-zxl in-means"> <a href="http://www.knuthdai.cn/?page_id=16" title="资料">
      <div class="in-block"> <i></i> <span>资料</span> <i class="in-none"></i> <span class="in-text">
        <p>各种资料、常用软件</p>
        <p>应有尽有</p>
        </span> </div>
      </a> </li>
    <li class="in-jbk in-client"> <a href="#" target="_blank" title="微信">
      <div class="in-block"> <i></i> <span>微信</span> <i class="in-none"></i> <span class="in-text">
        <p>关注我</p>
        <p>让我们沟通交流更简单</p>
        </span> </div>
      </a> </li>
  </ul>
</div>
<script>
    seajs.use('jquery',function($) {
        $(function () {
             //
            $(".index-con .in-kct").hover(function() {
                $(this).find('i:first').addClass('smaller').removeClass('bigger')
                $(this).find('span:first').fadeOut('')
                $(this).find('.in-text').show('fast').addClass('show')
                $(this).find('.ch').removeClass('')
            }, function() {
                $(this).find('i:first').removeClass('smaller').addClass('bigger')
                $(this).find('span:first').fadeIn('')
                $(this).find('.in-text').hide('').removeClass('fast')
                $(this).find('.ch').addClass('show')
            })
            $(".index-con .in-jbk").hover(function() {
                $(this).find('i:first').addClass('hide')
                $(this).find('span:first').hide('')
                $(this).find('.in-text').show('').addClass('show')
                var num = $(this).index('.in-jbk') + 1;
                $(this).find('.in-none').show('').addClass('toLeft' + num).removeClass('toRight' + num)
                $(this).find('.ch1').removeClass('show')
            }, function() {
                $(this).find('i:first').addClass('hide')
                $(this).find('span:first').fadeIn('')
                $(this).find('.in-text').hide('').removeClass('show')
                var num = $(this).index('.in-jbk') + 1;
                $(this).find('.in-none').show().addClass('toRight' + num).removeClass('toLeft' + num)
                $(this).find('.ch1').addClass('show')
            })
            $(".index-con .in-zxl").hover(function() {
                $(this).find('i:first').addClass('hide')
                $(this).find('span:first').hide('')
                $(this).find('.in-text').show().addClass('show')
                var nums = $(this).index('.in-zxl') + 1;
                $(this).find('.in-none').show().addClass('toLeft4').removeClass('toRight4')
                $(this).find('.ch2').removeClass('show')
            }, function() {
                $(this).find('i:first').addClass('hide')
                $(this).find('span:first').fadeIn('fast')
                $(this).find('.in-text').hide().removeClass('show')
                $(this).find('.in-none').show().addClass('toRight4').removeClass('toLeft4')
                $(this).find('.ch2').addClass('show')
            });
        });
    })
</script>
<div style="text-align:center;">
<p>Copyright，备案号<a href="http://www.knuthdai.cn/" target="_blank">找回自信</a></p>
</div>
</body>
</html>
