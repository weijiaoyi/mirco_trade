<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"/www/wwwroot/huatong.com/application/index/view/order/hold.html";i:1508742824;s:57:"/www/wwwroot/huatong.com/application/index/view/head.html";i:1508807576;}*/ ?>
<html style="font-size: 120px;">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
<!-- 是否启用全屏模式 -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- 全屏时状态颜色设置 -->
<meta name="apple-mobile-web-status-bar-style" content="white">
<!-- 禁用电话号码自动识别 -->
<meta name="format-detection" content="telephone=no">
<!--禁止读取本地缓存模板-->
<meta http-equiv="Pragma" contect="no-cache">
<!-- iPhone 启动图标 -->
<link rel="apple-touch-icon" href="img/logo.png">
<!-- Android 启动图标 -->
<link rel="shortcut icon" href="img/logo.png">
<!-- 添加 favicon icon -->
<link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
 <title><?php echo !empty($conf['web_name'])?$conf['web_name']:'微交易'; ?></title> 
<script type="text/javascript">
window.onload=function(){
//设置适配rem
var change_rem = ((window.screen.width > 450) ? 450 : window.screen.width)/375*100;
document.getElementsByTagName("html")[0].style.fontSize=change_rem+"px";
window.onresize = function(){
change_rem = ((window.screen.width > 450) ? 450 : window.screen.width)/375*100;
document.getElementsByTagName("html")[0].style.fontSize=change_rem+"px";
}
}
</script>

<link href="__HOME__/css/ionic.css" rel="stylesheet">
<link href="__HOME__/css/style.css" rel="stylesheet">
<!-- <script src="__HOME__/js/jquery-3.2.1.min.js"></script> -->
<script src="__HOME__/js/jquery-1.9.1.min.js"></script>
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<style>
.ionic_toast {
  z-index: 9999;
}

.toast_section {
  color: #FFF;
  cursor: default;
  font-size: 1em;
  display: none;
  border-radius: 5px;
  opacity: 1;
  padding: 10px 30px 10px 10px;
  margin: 10px;
  position: fixed;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 9999;
  background-color: rgba(0, 0, 0, 0.75);
}

.ionic_toast_top {
  top: 10px;
}

.ionic_toast_middle {
  top: 40%;
}

.ionic_toast_bottom {
  bottom: 10px;
}

.ionic_toast_close {
  border-radius: 2px;
  color: #CCCCCC;
  cursor: pointer;
  display: none;
  position: absolute;
  right: 4px;
  top: 4px;
  width: 20px;
  height: 20px;
}

.toast_close_icon {
  position: relative;
  top: 1px;
}

.ionic_toast_sticky .ionic_toast_close {
  display: block;
}

.ionic_toast_close:active {

}</style>


<script src="__HOME__/js/lk/order.js"></script>

<!-- <script type="text/javascript" src="__HOME__/js/lk/echarts-all-3.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/ecStat.min.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/dataTool.min.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/china.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/world.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/api"></script>
<script type="text/javascript" src="__HOME__/js/lk/getscript"></script>
<script type="text/javascript" src="__HOME__/js/lk/bmap.min.js"></script> -->
<!-- 弹框插件 -->
<script src="/static/layer/layer.js"></script>
<!-- 公共函数 -->
<script src="/static/public/js/function.js"></script>
<script src="/static/public/js/base64.js"></script>
<script type="text/javascript">
  var Base64 = new Base64();

  
</script>
</head>


<body ng-app="starter" ng-controller="AppCtrl" class="grade-a platform-browser platform-ios platform-ios9 platform-ios9_1 platform-ready">
<ion-nav-bar class="bar-stable headerbar nav-bar-container" nav-bar-transition="ios" nav-bar-direction="swap" nav-swipe="">

	<div class="nav-bar-block" nav-bar="active">
		<ion-header-bar class="bar-stable headerbar bar bar-header" align-title="center"><div class="title title-center header-item jiaoyilishi" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); left: 15px; right: 15px;"></div>
		</ion-header-bar>
	</div>
</ion-nav-bar>

<ion-nav-view class="view-container" nav-view-transition="ios" nav-view-direction="none" nav-swipe=""><ion-tabs class="tabs-icon-top navbar pane tabs-bottom tabs-standard" abstract="true" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px);">

<div class="tab-nav tabs">

<a href="<?php echo Url('/index/index/index/token/'.$token); ?>"  class="iconfont icon--6 tabnone tab-item " style=""><span class="tab-title ng-binding hangqing" ></span></a>
<a href="<?php echo url('/index/order/hold/token/'.$token); ?>" class="iconfont icon--7 tabnone tab-item tab-item-active" style=""><span class="tab-title ng-binding jiaoyijilu" ></span></a>
<a href="<?php echo url('/index/user/index/token/'.$token); ?>"  class="iconfont icon--8 tabnone tab-item" style=""><span class="tab-title ng-binding" >个人账户</span></a>


</div>
<ion-nav-view name="tab-qoute" class="view-container tab-content" nav-view="cached" nav-view-transition="ios" nav-view-direction="none" nav-swipe="">
    </ion-nav-view><ion-nav-view name="tab-history" class="view-container tab-content" nav-view="active" nav-view-transition="ios" nav-view-direction="swap" nav-swipe=""><ion-view view-title="" hide-nav-bar="false" class="pane" state="tab.history" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px);">
    <ion-nav-buttons side="right" class="hide"></ion-nav-buttons>
    <ion-content class="trade_history scroll-content ionic-scroll scroll-content-false  has-header has-tabs" scroll="false">
        <header>
            <article class="left-table" onclick="change_category(0)"  class="active" style="">
            	<p class="chicangmingxi">
            		
            	</p>
            </article>
            <article class="right-table"  onclick="change_category(1)"  >
            	<p class="lishimingxi">
            		
            	</p>
            </article>
        </header>

        <div class="trade_history_list slider" style="visibility: visible;overflow:scroll"><div class="slider-slides" ng-transclude="" >
            <ion-slide class="slider-slide slider-left" data-index="0" style="width: 100%px; left: 0px; transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);">
            	<ul>
            		
                        


                        

            	</ul>
            </ion-slide>
            <ion-slide class="slider-slide slider-right" data-index="1" style=" left: 0px; top: -100%;transition-duration: 0ms; transform: translate(414px, 0px) translateZ(0px);">
                <ul class="uls">



                </ul>
                
            </ion-slide>
        </div>
                
                <div class="modal-backdrop ng-hide"><div class="modal-backdrop-bg"></div><div class="modal-wrapper" ng-transclude=""><ion-modal-view class="order-modal modal slide-in-up ng-enter active ng-enter-active">
    <ion-header-bar class="order-modal-header bar bar-header">
        <h1 class="title lishimingxi" style="left: 54px; right: 54px;"></h1>
        <div class="close" ng-click="close_order_modal.hide()">
            <i class="icon ion-ios-close-empty"></i>
        </div>
    </ion-header-bar>
    <ion-content class="order-modal-content scroll-content ionic-scroll  has-header"><div class="scroll" style="transform: translate3d(0px, 0px, 0px) scale(1);">
        <ul class="list">
            <li class="item item-input">
                <span class="input-label" aria-label="商品" id="_label-0">商品</span>
                <span class="input-content ng-binding ptitle"></span>
            </li>
            <li class="item item-input">
                <span class="input-label" aria-label="成交价" id="_label-2">成交价</span>
                <span class="input-content ng-binding buyprice"></span>
            </li>
            <li class="item item-input">
                <span class="input-label" aria-label="结算价" id="_label-3">结算价</span>
                <span class="input-content ng-binding sellprice"></span>
            </li>
            <li class="item item-input">
                <span class="input-label" aria-label="手续费" id="_label-4">手续费</span>
                <span class="input-content ng-binding"><?php echo $conf['web_poundage']; ?></span>
            </li>
            <li class="item item-input">
                <span class="input-label" aria-label="盈亏" id="_label-5">盈亏</span>
                <span class="input-content ng-binding rise ploss" style="">
                    0.00
                </span>
            </li>
            <li class="item item-input">
                <span class="input-label" aria-label="成交时间" id="_label-6">成交时间</span>
                <span class="input-content ng-binding buytime"></span>
            </li>
            <li class="item item-input">
                <span class="input-label" aria-label="结算时间" id="_label-7">结算时间</span>
                <span class="input-content ng-binding selltime"></span>
            </li>
        </ul>
    </div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 0px, 0px) scaleY(1); height: 0px; transform-origin: center bottom 0px;"></div></div></ion-content>
    <div class="button-bar">
        <a class="button button-dark" onclick="close_order_modal()">关闭</a>
    </div>

    <script>

var charturl = '<?php echo url("getchart"); ?>';
$.get(charturl,function(_res){
    var res = jQuery.parseJSON(Base64.decode(_res)); 
    $.each(res,function(k,v){
        $('.'+k).html(v);
    })
})
</script>
</ion-modal-view></div></div>

        </div>
    </ion-content>
</ion-view></ion-nav-view></ion-tabs></ion-nav-view>
<script src="__HOME__/js/lk/hold.js"></script>
<script type="text/javascript">
  change_category(0)
</script>



<div class="backdrop"></div><div class="ionic_toast"><div class="toast_section" ng-class="ionicToast.toastClass" ng-style="ionicToast.toastStyle" ng-click="hideToast()" style="display: none; opacity: 0;"><span class="ionic_toast_close"><i class="ion-android-close toast_close_icon"></i></span><span ng-bind-html="ionicToast.toastMessage" class="ng-binding"></span></div></div></body></html>
