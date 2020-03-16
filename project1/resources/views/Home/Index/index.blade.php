<!DOCTYPE html>
<!--[if IE]>
<html lang="zh-CN" class="lt-ie10">
<![endif]-->
<!--[if !IE]><!-->
<html lang="zh-CN">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="format-detection" content="email=no">
<meta name="format-detection" content="telephone=no">
<meta name="applicable-device" content="pc">
<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="http://music.migu.cn"/>
<link rel="dns-prefetch" href="//cdnmusic.migu.cn"/>
<link rel="shortcut icon" href="//cdnmusic.migu.cn/favicon.ico" type="image/x-icon">
<meta name="renderer" content="webkit">
<title>咪咕音乐网_放肆听·趣玩乐</title>
<meta name="keywords" content="咪咕音乐,彩铃,移动彩铃,手机彩铃,中国移动,12530,mp3,高品质音乐,无损音乐,在线听歌,歌曲下载,振铃,歌曲,铃音,特级会员,电台,mv,演唱会直播,音乐网站,音乐播放器">
<meta name="description" content="咪咕音乐网是中国移动官方音乐门户，旨在提供音乐首发、高品质音乐试听、彩铃订购、歌曲下载、铃音管理、音乐电台、音乐视频等一站式音乐互动体验，好音乐尽在music.migu.cn！">
<link href="/b/css/global.css" rel="stylesheet">
<link href="/b/css/index.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="/b/js/respond.min.js"></script>
<script src="/b/js/html5.js"></script>
<![endif]-->
<script>
var MUSIC_CONFIG = {
APP_CDN_HOST: '//cdnmusic.migu.cn',
APP_HOST: 'http://music.migu.cn',
APP_BASE_PATH:'/v3',
APP_MUSIC_PATH:'/v3/music',
APP_VIDEO_PATH:'/v3/video',
APP_MY_PATH:'/v3/my',
APP_SEARCH_PATH:'/v3/search',
APP_API_PATH: '/v3/api',
APP_STATIC_PATH:'/v3/static',
SOURCE_ID: '220001',
CHANNEL_ID: '001002A',
MIGU_LOGIN_URL: 'https://passport.migu.cn/popup/login?sourceid=',
MIGU_LOGOUT_URL: 'https://passport.migu.cn/logout?sourceid=',
MIGU_ACCOUNT_SET: 'https://passport.migu.cn/portal/home/profile?sourceid=',
MIGU_ACCOUNT_REGISTER: 'https://passport.migu.cn/portal/user/register/msisdn',
MIGU_SDK_AUTHID: 'c3adb034f8a8446a822828b795a29349',
MIGU_SDK_NETID: 'b486900f41fc411187240dcb45fdbc8d',
APP_VERSION: '3.3.2',
IS_FROM_MIGU: ''
};
// 用于挂载全局变量
var MUSIC_GLOBAL = window.MUSIC_GLOBAL ? window.MUSIC_GLOBAL : {};
</script></head>
<body>
<!-- header -->
<div id="header">
<div class="header">
<div class="container">
<h1 class="logo">
<a href="http://music.migu.cn" title="咪咕音乐 music.migu.cn">
<img src="/b/picture/logo.png" alt="咪咕音乐 放厮听·趣玩乐">
</a>
</h1>
<div class="nav-main">
<ul class="nav-container">
<li class="nav-item on">
<a href="http://music.migu.cn">音乐</a>
</li>
<li class="nav-item">
<a href="/v3/video">现场</a>
</li>
<li class="nav-item" id="J-my">
<a href="javascript:;">我的</a>
</li>
</ul>
</div>
<div class="nav-less">
<div class="search smallinp">
<div class="ipt">
<input type="text" id="search_ipt" placeholder="搜索歌曲、歌手、MV">
<span class="btn-search"><i class="iconfont cf-nav-sousuo"></i></span>
</div>
<ul class="J_search_list">
<li class="hotList droplist">
<p class="searchItem hotlist_title"></p>
</li>
<li class="searchList">
<div class="searchtype_container">
</div>
</li>
</ul>
</div>
<ul class="nav-container">
<li class="nav-item vip-platinum">
<a class="nav-item-link" href="/v3/music/service/platinum" target="_blank"><i class="iconfont cf-nav-huiyuan"></i><span>白金会员</span></a>
</li>
<li class="nav-item">
<a class="nav-item-link" href="/v3/app" target="_blank"><i class="iconfont cf-nav-kehuduan"></i><span>客户端</span></a>
</li>
<!-- <li class="nav-item nav-diy">
<a class="nav-item-link" href="/v3/music/service/vrbt" target="_blank"><i class="iconfont cf-nav-cailing"></i><span>视频彩铃</span></a>
</li> -->
<li class="nav-item" id="J-user-info">
<a class="nav-item-link J_login" href="javascript:;"><i class="iconfont cf-nav-geren"></i><span>登录</span></a>
</li>
</ul>
</div>
</div>
</div>
<div class="sub-nav">
<div class="container">
<ul class="sub-nav-music active-menu" style="display:block;">
@if($data)
<li class="on">
<a href="http://music.migu.cn">首页</a>
</li>
@foreach($data as $v)
<li>
<a href="/v3/music/digital_album">{{$v->dl_name}}</a>
</li>
@endforeach
@endif
</ul>
<ul class="sub-nav-video" style="display:none;">
@if($data1)
<li>
<a href="/v3/video">首页</a>
</li>
@foreach($data1 as $v)
<li>
<a href="/v3/video/concert">{{$v->dl_name}}</a>
</li>
@endforeach
@endif
</ul>
</div>
</div>
</div><!-- background image -->
<div id="bg-main-img"></div>
<!-- banner -->
<div id="banner">
<div class="slideBox">
<div class="bd">
<ul>
@foreach($lunbo as $v)
<li>
<a href="{{$v->url}}" title="{{$v->title}}" target="_blank" vms-ad-id="">
<img src="{{$v->l_pic}}" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_1920x550.jpg'" alt="{{$v->l_pic}}" class="img-block lazy-img img-full">
</a>
</li>
@endforeach
</ul>
</div>
<div class="container">
<div id="nav">
<ul>
@foreach($lunbo as $v)
<li>
<a href="http://music.migu.cn/v3/music/album/1130168821" title="{{$v->title}}" target="_blank">{{$v->title}}</a>
</li>
@endforeach
</ul>
</div>
</div>
</div>
</div>
<!-- 推荐歌单 -->
<div id="songlist" class="section tablist">
<div class="container">
<div class="section-header">
<h2 class="title">推荐歌单</h2>
<ul class="tags">
<li class="active"><a href="javascript:;">推荐</a></li>
<li><a href="javascript:;">影视</a></li>
<li><a href="javascript:;">华语</a></li>
<li><a href="javascript:;">欧美</a></li>
<li><a href="javascript:;">日韩</a></li>
</ul>
<a class="more" href="/v3/music/playlist" target = "_blank">更多<i class="iconfont cf-gengduo"></i></a>
</div>
</div>
<div class="common-swiper-container">
<div class="container">
<div class="swiper-container" id="songlist-swiper">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/148171731" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/ec4c29f1-d7a1-436b-aaa0-27cdef057901.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="大牌新歌超强推荐" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="148171731"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/148171731" class="item-title" target = "_blank">大牌新歌超强推荐</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>2072.2W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="148171731"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"大牌新歌超强推荐","linkUrl":"/v3/music/playlist/148171731","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/ec4c29f1-d7a1-436b-aaa0-27cdef057901.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167468911" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/d29fc565-5ae2-4382-946c-14d2b8479322.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="怀旧金曲：细品粤语的韵味" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167468911"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167468911" class="item-title" target = "_blank">怀旧金曲：细品粤语的韵味</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>147.7W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167468911"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"怀旧金曲：细品粤语的韵味","linkUrl":"/v3/music/playlist/167468911","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/d29fc565-5ae2-4382-946c-14d2b8479322.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167501795" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/e2bcbda6-2fe6-4ce5-9cd0-fef50dc3a372.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="清新韩语，叫醒熟睡的耳朵" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167501795"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167501795" class="item-title" target = "_blank">清新韩语，叫醒熟睡的耳朵</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>125.8W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167501795"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"清新韩语，叫醒熟睡的耳朵","linkUrl":"/v3/music/playlist/167501795","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/e2bcbda6-2fe6-4ce5-9cd0-fef50dc3a372.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167571540" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/5f703d66-9026-4e1f-89d8-f5df826c06c3.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="细腻华语女声大赏" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167571540"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167571540" class="item-title" target = "_blank">细腻华语女声大赏</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>141.4W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167571540"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"细腻华语女声大赏","linkUrl":"/v3/music/playlist/167571540","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/5f703d66-9026-4e1f-89d8-f5df826c06c3.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167504656" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/b224adda-9e06-4e76-8eaa-1aeceb235ac2.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="Make A Dream|迪士尼动画原声集" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167504656"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167504656" class="item-title" target = "_blank">Make A Dream|迪士尼动画原声集</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>158.3W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167504656"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"Make A Dream|迪士尼动画原声集","linkUrl":"/v3/music/playlist/167504656","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/b224adda-9e06-4e76-8eaa-1aeceb235ac2.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167272383" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/1db9f608-d619-4026-9321-779fe2ca2c3e.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="清风吹叶|就是喜欢古装剧主题曲" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167272383"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167272383" class="item-title" target = "_blank">清风吹叶|就是喜欢古装剧主题曲</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>146.3W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167272383"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"清风吹叶|就是喜欢古装剧主题曲","linkUrl":"/v3/music/playlist/167272383","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/1db9f608-d619-4026-9321-779fe2ca2c3e.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167274332" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/a9d4b3b3-ba31-4887-975a-5d3ea3a0027d.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="勇敢爱！人山人海，别辜负了相遇" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167274332"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167274332" class="item-title" target = "_blank">勇敢爱！人山人海，别辜负了相遇</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>144.5W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167274332"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"勇敢爱！人山人海，别辜负了相遇","linkUrl":"/v3/music/playlist/167274332","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/a9d4b3b3-ba31-4887-975a-5d3ea3a0027d.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167233781" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/cdb2593b-ecc6-4664-83a5-b97ea4806ea1.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="一首经典，一直动心" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167233781"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167233781" class="item-title" target = "_blank">一首经典，一直动心</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>186.0W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167233781"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"一首经典，一直动心","linkUrl":"/v3/music/playlist/167233781","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/cdb2593b-ecc6-4664-83a5-b97ea4806ea1.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167228380" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/dba9e9cd-28c1-4893-81b3-bd93de43bae3.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="大龄文艺女青年之诗" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167228380"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167228380" class="item-title" target = "_blank">大龄文艺女青年之诗</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>164.5W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167228380"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"大龄文艺女青年之诗","linkUrl":"/v3/music/playlist/167228380","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/dba9e9cd-28c1-4893-81b3-bd93de43bae3.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167198593" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/ecdae142-e86b-4287-b9b1-7c36bbb409be.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="请赐我力量，助我荡平一切坎坷" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167198593"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167198593" class="item-title" target = "_blank">请赐我力量，助我荡平一切坎坷</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>183.5W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167198593"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"请赐我力量，助我荡平一切坎坷","linkUrl":"/v3/music/playlist/167198593","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/ecdae142-e86b-4287-b9b1-7c36bbb409be.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167191420" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/4f3d5c23-3957-4c22-ac1d-ab162caa176a.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="这些歌，原来都是披着旋律外衣的诗" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167191420"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167191420" class="item-title" target = "_blank">这些歌，原来都是披着旋律外衣的诗</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>174.4W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167191420"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"这些歌，原来都是披着旋律外衣的诗","linkUrl":"/v3/music/playlist/167191420","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/4f3d5c23-3957-4c22-ac1d-ab162caa176a.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167163940" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/0d45eac7-276c-4bb2-ac23-8f659e51859b.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="春日温暖你，莫文蔚陪你一起听" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167163940"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167163940" class="item-title" target = "_blank">春日温暖你，莫文蔚陪你一起听</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>212.8W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167163940"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"春日温暖你，莫文蔚陪你一起听","linkUrl":"/v3/music/playlist/167163940","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/0d45eac7-276c-4bb2-ac23-8f659e51859b.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167189144" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/0af53575-815f-4075-ab2c-3d597d964b1b.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="轻松一下，游戏必须带感！" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167189144"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167189144" class="item-title" target = "_blank">轻松一下，游戏必须带感！</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>175.3W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167189144"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"轻松一下，游戏必须带感！","linkUrl":"/v3/music/playlist/167189144","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/0af53575-815f-4075-ab2c-3d597d964b1b.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167195003" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/ed5e4f23-65e5-4d25-ba6f-86ce128b3055.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="永不言败，成功如影随形" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167195003"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167195003" class="item-title" target = "_blank">永不言败，成功如影随形</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>187.8W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167195003"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"永不言败，成功如影随形","linkUrl":"/v3/music/playlist/167195003","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/ed5e4f23-65e5-4d25-ba6f-86ce128b3055.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167198895" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/316d7fbf-ac52-4f81-8ca8-94e7942d0c1a.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="心跳加速~莫非这就是爱情？" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167198895"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167198895" class="item-title" target = "_blank">心跳加速~莫非这就是爱情？</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>157.4W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167198895"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"心跳加速~莫非这就是爱情？","linkUrl":"/v3/music/playlist/167198895","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/316d7fbf-ac52-4f81-8ca8-94e7942d0c1a.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/147652823" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/4bb1e5b2-4e1b-466f-b7de-790daeba14e7.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="惊蛰|春雷初始鸣，天气渐回暖" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="147652823"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/147652823" class="item-title" target = "_blank">惊蛰|春雷初始鸣，天气渐回暖</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>186.1W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="147652823"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"惊蛰|春雷初始鸣，天气渐回暖","linkUrl":"/v3/music/playlist/147652823","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/4bb1e5b2-4e1b-466f-b7de-790daeba14e7.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167189804" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/6f3d2623-b78f-46f7-ab55-b6cbc08c8d95.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="纯音|清风故里，悠扬如你" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167189804"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167189804" class="item-title" target = "_blank">纯音|清风故里，悠扬如你</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>133.2W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167189804"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"纯音|清风故里，悠扬如你","linkUrl":"/v3/music/playlist/167189804","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/6f3d2623-b78f-46f7-ab55-b6cbc08c8d95.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167105602" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/4c698335-263d-49fb-8587-62bd02de6a75.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="听一首民谣平复一下心情" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167105602"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167105602" class="item-title" target = "_blank">听一首民谣平复一下心情</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>188.7W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167105602"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"听一首民谣平复一下心情","linkUrl":"/v3/music/playlist/167105602","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/4c698335-263d-49fb-8587-62bd02de6a75.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/166986114" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/d081bee2-6302-4396-9972-a0f6448ba764.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="柔美嗓| 以星辰为景，与月亮为伴" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="166986114"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/166986114" class="item-title" target = "_blank">柔美嗓| 以星辰为景，与月亮为伴</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>133.8W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="166986114"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"柔美嗓| 以星辰为景，与月亮为伴","linkUrl":"/v3/music/playlist/166986114","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/d081bee2-6302-4396-9972-a0f6448ba764.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167156655" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/b56a60aa-2133-4c77-befb-384223dad440.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="且以深情共白头" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167156655"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167156655" class="item-title" target = "_blank">且以深情共白头</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>166.3W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167156655"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"且以深情共白头","linkUrl":"/v3/music/playlist/167156655","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/b56a60aa-2133-4c77-befb-384223dad440.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167158690" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/d716136e-2ea3-4eaa-bfd6-aaea21848703.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="《王者荣耀》新赛季上分必备BGM" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167158690"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167158690" class="item-title" target = "_blank">《王者荣耀》新赛季上分必备BGM</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>132.7W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167158690"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"《王者荣耀》新赛季上分必备BGM","linkUrl":"/v3/music/playlist/167158690","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/d716136e-2ea3-4eaa-bfd6-aaea21848703.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167151322" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/b9df1f20-e25d-492c-8d08-c02ebf57d24f.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="有趣的灵魂万里唯一" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167151322"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167151322" class="item-title" target = "_blank">有趣的灵魂万里唯一</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>158.1W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167151322"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"有趣的灵魂万里唯一","linkUrl":"/v3/music/playlist/167151322","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/b9df1f20-e25d-492c-8d08-c02ebf57d24f.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167158574" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/80732b84-8d6e-4b45-81a6-64c949a96d0c.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="生活的磨砺不过是提高自愈能力" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167158574"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167158574" class="item-title" target = "_blank">生活的磨砺不过是提高自愈能力</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>162.7W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167158574"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"生活的磨砺不过是提高自愈能力","linkUrl":"/v3/music/playlist/167158574","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/80732b84-8d6e-4b45-81a6-64c949a96d0c.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167158545" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/057d7523-81d3-4011-8b1f-e84898c2bce5.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="温暖女声，若山间一缕春风" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167158545"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167158545" class="item-title" target = "_blank">温暖女声，若山间一缕春风</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>171.5W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167158545"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"温暖女声，若山间一缕春风","linkUrl":"/v3/music/playlist/167158545","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/057d7523-81d3-4011-8b1f-e84898c2bce5.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167151002" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/ca5c212e-51a2-4ce9-939c-4153e48ab2c9.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="浅唱低吟只为午后的慵懒" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167151002"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167151002" class="item-title" target = "_blank">浅唱低吟只为午后的慵懒</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>102.3W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167151002"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"浅唱低吟只为午后的慵懒","linkUrl":"/v3/music/playlist/167151002","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/ca5c212e-51a2-4ce9-939c-4153e48ab2c9.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/166627202" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/38a90751-a7dc-460e-a260-fdf6689c928b.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="剪辑配乐精选—节奏类" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="166627202"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/166627202" class="item-title" target = "_blank">剪辑配乐精选—节奏类</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>97.7W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="166627202"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"剪辑配乐精选—节奏类","linkUrl":"/v3/music/playlist/166627202","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/38a90751-a7dc-460e-a260-fdf6689c928b.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167119599" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/444e91ea-10e6-405d-8123-f5da2207adbe.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="用音乐保持每天的嘴角上扬" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167119599"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167119599" class="item-title" target = "_blank">用音乐保持每天的嘴角上扬</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>148.6W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167119599"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"用音乐保持每天的嘴角上扬","linkUrl":"/v3/music/playlist/167119599","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/444e91ea-10e6-405d-8123-f5da2207adbe.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167117813" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/f443578c-32b5-4ad4-b5b7-b3bcdd1728d0.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="如果世间有天使，那一定是你" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167117813"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167117813" class="item-title" target = "_blank">如果世间有天使，那一定是你</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>128.8W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167117813"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"如果世间有天使，那一定是你","linkUrl":"/v3/music/playlist/167117813","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/f443578c-32b5-4ad4-b5b7-b3bcdd1728d0.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/167118995" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/0412b686-6cbc-47d6-831d-627635b7fcfa.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="总有一首歌，让你想起一个人" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="167118995"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/167118995" class="item-title" target = "_blank">总有一首歌，让你想起一个人</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>161.9W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="167118995"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"总有一首歌，让你想起一个人","linkUrl":"/v3/music/playlist/167118995","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/0412b686-6cbc-47d6-831d-627635b7fcfa.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/playlist/166979127" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b/http://d.musicapp.migu.cn/ugcdata/playListimg/9857c0c0-34e6-4ac5-a7a8-84f83a9a1809.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="听了心情会变好的欢快节奏" class="img-block lazy-img img-full">
</a>
<span class="playlist-play" data-id="166979127"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<a href="/v3/music/playlist/166979127" class="item-title" target = "_blank">听了心情会变好的欢快节奏</a>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>184.4W</p>
</div>
<div class="item-action">
<i class="iconfont cf-xihuan-big collect-playlist" data-playlistid="166979127"></i>
<i class="iconfont cf-fenxiang-big J-btn-share" data-shareType="2" data-share='{"type":"songlist","title":"听了心情会变好的欢快节奏","linkUrl":"/v3/music/playlist/166979127","imgUrl":"http://d.musicapp.migu.cn/ugcdata/playListimg/9857c0c0-34e6-4ac5-a7a8-84f83a9a1809.jpg","summary":"","singer":"","album":""}'></i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="slide-action slide-action-left">
<div class="arrow-button arrow-left"></div>
</div>
<div class="slide-action slide-action-right">
<div class="arrow-button arrow-right"></div>
</div>
</div>
<div class="container">
<div class="swiper-pagination" id="songlist-swiper-pagination"></div>
</div>
</div>
<script type="text/html" id="songlistData">
[{"groupName":"推荐","items":[{"id":"148171731","createUserId":"ee3e2a08-2fdb-4620-866e-84902017654a","title":"大牌新歌超强推荐","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/ec4c29f1-d7a1-436b-aaa0-27cdef057901.jpg","playTimes":20721606},{"id":"167468911","createUserId":"60754420-6d6c-49c5-8b79-cb6ea4486636","title":"怀旧金曲：细品粤语的韵味","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/d29fc565-5ae2-4382-946c-14d2b8479322.jpg","playTimes":1476639},{"id":"167501795","createUserId":"e6a416be-324f-4055-b024-ebac1d9b585b","title":"清新韩语，叫醒熟睡的耳朵","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/e2bcbda6-2fe6-4ce5-9cd0-fef50dc3a372.jpg","playTimes":1257649},{"id":"167571540","createUserId":"8d9c048b-a92a-4656-aef5-b310f92344a4","title":"细腻华语女声大赏","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/5f703d66-9026-4e1f-89d8-f5df826c06c3.jpg","playTimes":1414355},{"id":"167504656","createUserId":"3c437bcf-5304-4ae8-96dd-284903e580d0","title":"Make A Dream|迪士尼动画原声集","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/b224adda-9e06-4e76-8eaa-1aeceb235ac2.jpg","playTimes":1583317},{"id":"167272383","createUserId":"507d0a7f-aa88-4c68-9e35-e1056459a86f","title":"清风吹叶|就是喜欢古装剧主题曲","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/1db9f608-d619-4026-9321-779fe2ca2c3e.jpg","playTimes":1463011},{"id":"167274332","createUserId":"6fabe4fe-02ff-487b-a824-d55931cc2737","title":"勇敢爱！人山人海，别辜负了相遇","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/a9d4b3b3-ba31-4887-975a-5d3ea3a0027d.jpg","playTimes":1444983},{"id":"167233781","createUserId":"84304336-c081-4183-bd0a-9c3a102d3941","title":"一首经典，一直动心","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/cdb2593b-ecc6-4664-83a5-b97ea4806ea1.jpg","playTimes":1859546},{"id":"167228380","createUserId":"123326bd-256c-4708-91af-8c177881303a","title":"大龄文艺女青年之诗","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/dba9e9cd-28c1-4893-81b3-bd93de43bae3.jpg","playTimes":1644850},{"id":"167198593","createUserId":"832a730d-4854-4356-b3d0-f6872d9a3e7c","title":"请赐我力量，助我荡平一切坎坷","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/ecdae142-e86b-4287-b9b1-7c36bbb409be.jpg","playTimes":1834840},{"id":"167191420","createUserId":"eae1b33f-0774-454d-84d2-37afcb4e50b5","title":"这些歌，原来都是披着旋律外衣的诗","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/4f3d5c23-3957-4c22-ac1d-ab162caa176a.jpg","playTimes":1744128},{"id":"167163940","createUserId":"19950999","title":"春日温暖你，莫文蔚陪你一起听","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/0d45eac7-276c-4bb2-ac23-8f659e51859b.jpg","playTimes":2127915},{"id":"167189144","createUserId":"a21075f1-9ee9-4bd5-86fd-a0ced06932cd","title":"轻松一下，游戏必须带感！","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/0af53575-815f-4075-ab2c-3d597d964b1b.jpg","playTimes":1752691},{"id":"167195003","createUserId":"1d61c37e-b4df-4aec-8f73-baa577d1f2ab","title":"永不言败，成功如影随形","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/ed5e4f23-65e5-4d25-ba6f-86ce128b3055.jpg","playTimes":1877649},{"id":"167198895","createUserId":"66e7fc82-ffa2-4c2c-9f9c-1b05a5db07a4","title":"心跳加速~莫非这就是爱情？","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/316d7fbf-ac52-4f81-8ca8-94e7942d0c1a.jpg","playTimes":1574118},{"id":"147652823","createUserId":"7aa75577-93b8-465f-8548-8d46761e4515","title":"惊蛰|春雷初始鸣，天气渐回暖","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/4bb1e5b2-4e1b-466f-b7de-790daeba14e7.jpg","playTimes":1861236},{"id":"167189804","createUserId":"63088809-9b95-445c-a5a9-3202776499cf","title":"纯音|清风故里，悠扬如你","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/6f3d2623-b78f-46f7-ab55-b6cbc08c8d95.jpg","playTimes":1332092},{"id":"167105602","createUserId":"406294a6-56ce-4bd1-a7b6-046179e5517e","title":"听一首民谣平复一下心情","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/4c698335-263d-49fb-8587-62bd02de6a75.jpg","playTimes":1886899},{"id":"166986114","createUserId":"ee24bec9-76c5-4866-8d1a-84d37da9b899","title":"柔美嗓| 以星辰为景，与月亮为伴","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/d081bee2-6302-4396-9972-a0f6448ba764.jpg","playTimes":1337826},{"id":"167156655","createUserId":"724fe051-a6e4-4471-949a-22578597c50b","title":"且以深情共白头","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/b56a60aa-2133-4c77-befb-384223dad440.jpg","playTimes":1662782},{"id":"167158690","createUserId":"9751202f-4fb8-451e-90cc-5621898d72ef","title":"《王者荣耀》新赛季上分必备BGM","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/d716136e-2ea3-4eaa-bfd6-aaea21848703.jpg","playTimes":1326993},{"id":"167151322","createUserId":"6b3bf659-645a-43aa-98e7-f25d8522b8ed","title":"有趣的灵魂万里唯一","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/b9df1f20-e25d-492c-8d08-c02ebf57d24f.jpg","playTimes":1581051},{"id":"167158574","createUserId":"ee3e2a08-2fdb-4620-866e-84902017654a","title":"生活的磨砺不过是提高自愈能力","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/80732b84-8d6e-4b45-81a6-64c949a96d0c.jpg","playTimes":1626749},{"id":"167158545","createUserId":"d8658f98-e52a-4056-98c6-4ed1725680ca","title":"温暖女声，若山间一缕春风","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/057d7523-81d3-4011-8b1f-e84898c2bce5.jpg","playTimes":1715337},{"id":"167151002","createUserId":"2752d427-b5df-443d-bcd9-b1600cb059e3","title":"浅唱低吟只为午后的慵懒","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/ca5c212e-51a2-4ce9-939c-4153e48ab2c9.jpg","playTimes":1022812},{"id":"166627202","createUserId":"5f20bfde-953b-4280-9577-466899ec118e","title":"剪辑配乐精选—节奏类","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/38a90751-a7dc-460e-a260-fdf6689c928b.jpg","playTimes":976995},{"id":"167119599","createUserId":"c237584a-1f52-4e95-a2f0-82a654cc15c3","title":"用音乐保持每天的嘴角上扬","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/444e91ea-10e6-405d-8123-f5da2207adbe.jpg","playTimes":1486312},{"id":"167117813","createUserId":"676750ea-2cc5-40c2-9ebf-ac36998f32ac","title":"如果世间有天使，那一定是你","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/f443578c-32b5-4ad4-b5b7-b3bcdd1728d0.jpg","playTimes":1288176},{"id":"167118995","createUserId":"cd0797fb-35e4-4ecf-a057-a63699c5ab11","title":"总有一首歌，让你想起一个人","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/0412b686-6cbc-47d6-831d-627635b7fcfa.jpg","playTimes":1619094},{"id":"166979127","createUserId":"ae6d952b-7fbe-49af-85e0-10e40a03ad2c","title":"听了心情会变好的欢快节奏","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/9857c0c0-34e6-4ac5-a7a8-84f83a9a1809.jpg","playTimes":1844362}]},{"groupName":"影视","items":[{"id":"135784175","createUserId":"c59ee8d3-e2fb-48f7-b835-340f8505d7ee","title":"一部文艺电影，一首经典配乐","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/9f4ebcff-efc5-40ca-b6eb-eaa818d75ba0.jpg","playTimes":2222594},{"id":"146820394","createUserId":"75a21c44-595c-483d-8000-350723a39b9b","title":"【影视古风】听完这些，谁还不是一个古风仙子","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/55ec6eb0-328c-4cc4-b88b-8823e960adf0.jpg","playTimes":861711},{"id":"146857730","createUserId":"19d0c604-e0a1-40a0-ae8b-b7ca34cc661d","title":"岁月留声机，来自好莱坞老电影的经典之声","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/8801d479-d1e2-433e-a6d2-3e672b338ba4.jpg","playTimes":422431},{"id":"142011681","createUserId":"5c850d2f-ab82-4291-9423-1fa284c4da2d","title":"【音乐电影】以乐之名，声动光影","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/f62d3ac9-903d-48b9-a502-2ef72f2e817d.jpg","playTimes":570353},{"id":"142542024","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"韩国电影原声精选","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/193e48ec-cc93-44b7-99c9-95a3adb95b83.jpg","playTimes":317894},{"id":"141050638","createUserId":"888d86d0-8a60-4192-869b-a5a922c102af","title":"【OST】清风翻过小说，多少欢笑多少痛","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/756f9932-3544-4804-a495-30a8d1257f8a.jpg","playTimes":571733},{"id":"142262079","createUserId":"1604d5de-9b4f-440a-bc67-2fc68d72a0e4","title":"【OST】小说改编国产电视剧（古装篇）","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/4e508880-acf2-4814-80ce-e159dfb21031.jpg","playTimes":585768},{"id":"142558016","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"【OST】轻启年华的帧,绘一卷旧梦山河","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/86438146-30ec-4718-a77f-88dcdfa2a701.jpg","playTimes":558326},{"id":"142908566","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"恋恋影像册|怦然心动的恋语哼唱","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/4a652c27-c80d-4d27-87c8-0307207000ff.jpg","playTimes":539018},{"id":"143307328","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"从小说到电影,音乐中流淌旧时光","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/2253dc80-f859-487a-82de-01981342fc28.jpg","playTimes":569728},{"id":"142467652","createUserId":"25fca05f-84bc-4573-9803-0e8a3d70b91b","title":"韩剧OST|青春浪漫物语，爱你这件小事","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/f729cf34-4253-447f-b71e-a1efd38eaf0e.jpg","playTimes":556249},{"id":"137434280","createUserId":"001166fb-784d-45d1-bb28-0b7450f7f6ab","title":"「香港电影音乐」三十年涤荡不朽经典","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/67d8e8e0-e7a8-4d74-b9cb-dc1c36dd685f.jpg","playTimes":779716},{"id":"144225319","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"2018优质网络剧原声集","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/9e92d368-496f-4f44-aa28-414208baa78d.jpg","playTimes":606532},{"id":"144512942","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"[电影台词对白]念念有声，落落动听","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/6f911583-8040-4324-9eb1-47ef037d6616.jpg","playTimes":488724},{"id":"144775780","createUserId":"e5eca7dc-16a3-456c-b705-8563557362a9","title":"豆瓣2018年度电影榜单","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/c992bd66-d884-45d6-9996-f33f50f1bb50.jpg","playTimes":653313},{"id":"131704546","createUserId":"b9a656e9-1349-4655-82f0-6cdc06e06b15","title":"当配乐遗下吉他，画布忘掉了画","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/bf9b1c90-690b-4306-a39f-85b146ff0f52.jpg","playTimes":564493},{"id":"132329934","createUserId":"c14af2d7-7070-4833-8661-436b49502674","title":"『好听不腻』经典影视原声合集","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/e63ad109-3ccc-4495-bb9f-a090e10bb282.jpg","playTimes":577919},{"id":"134332746","createUserId":"cd113fed-8f5e-449a-a0f4-b86044e04911","title":"【影视】青春有笑亦有泪，高歌一曲聊敬岁月","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/69cc11c2-7274-436d-88eb-21626626435c.jpg","playTimes":46443},{"id":"137900642","createUserId":"cd113fed-8f5e-449a-a0f4-b86044e04911","title":"【影视剧原声】有你最爱的BGM","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/a6f50fd5-6f4b-42e0-8ded-8273a8fdb4b9.jpg","playTimes":334683},{"id":"141250794","createUserId":"98164f7a-c6ec-4cd8-9c05-a70105a4295c","title":"【影视红歌】一秒入戏重温追剧时光","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/4b36709e-2f3f-4424-97ef-d43f272a6c9f.jpg","playTimes":576673}]},{"groupName":"华语","items":[{"id":"146820694","createUserId":"75a21c44-595c-483d-8000-350723a39b9b","title":"如果思念有声音，恐怕你早已震耳欲聋","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/2f35ff9d-bb63-4efb-80cd-0dc49a236fca.jpg","playTimes":3230988},{"id":"135780086","createUserId":"f57eb16a-9df8-491a-a182-2a159c0f1e8b","title":"暖暖‖春风十里不如我遇见你","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/febd1293-47e9-439e-bbec-f429bda7f2aa.jpg","playTimes":319249},{"id":"135783840","createUserId":"2487efe1-ef51-472e-a4d7-821c5e0649ed","title":"【古风】余音袅袅，忧思难忘","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/74803af9-5cef-4e69-98cf-9a6b1727e513.jpg","playTimes":538477},{"id":"135777397","createUserId":"48697024-9f04-4451-a844-3b440edb5526","title":"彼此牵手的缘，轻轻地走远","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/a0c869ad-608b-4c30-9c86-0e9a2c7389f0.jpg","playTimes":373828},{"id":"135780884","createUserId":"0a89b1d2-a74a-408a-8dd4-3b40f14baf89","title":"枉自蹉跎流光 安静度余年","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/7317f9bb-5eba-4b95-bd3a-5598a03c0e92.jpg","playTimes":311747},{"id":"135775516","createUserId":"4c21e71d-31c0-429e-a547-f1e54963b6ab","title":"音乐心情：那些曾经让你触景生情的歌","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/17085537-e2ad-4044-9c24-d0c2689d1f82.jpg","playTimes":575287},{"id":"135779022","createUserId":"baee1bdf-d57b-401e-a198-606542642439","title":"华语七言情诗‖千言万语都是你","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/0795660e-7ed8-466d-9789-0d8058027c2a.jpg","playTimes":4801937},{"id":"135782815","createUserId":"a1ab5712-c98f-42fa-8df0-d2abc4490e53","title":"励志丨举头望阳光，让我们干了这碗鸡汤","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/8231ee86-49f1-4223-9838-551a1819cd0b.jpg","playTimes":289820},{"id":"135779333","createUserId":"4d29cc0e-5347-4c2a-9161-59c73b7e64dd","title":"岁月留声•当有一天流行成为经典","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/875bcdbb-ab36-42eb-ac64-008704aec277.jpg","playTimes":447231},{"id":"140940075","createUserId":"7c144d56-dc50-4392-a02e-f80337237f79","title":"任凭世间沧海桑田，也要捍卫心中的乌托邦","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/aae2e04b-4dcd-45e4-a3c6-48f7e0aa0611.jpg","playTimes":2775597},{"id":"121814483","createUserId":"0bde79dc-f9fa-4387-9a34-ae5654834b30","title":"【华语经典】重返乐坛黄金年代","image":"http://d.musicapp.migu.cn/ugcdata/playListimg//d5fa853d-2c44-4f0d-a32b-ebb67dd270f2.jpg","playTimes":1907993},{"id":"138635920","createUserId":"aba6f7e2-aa63-4c92-be07-522eb7910869","title":"『淡香潜入夏』清凉古风精选","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/db453776-eee6-4076-b212-5ecd61f3e2a7.jpg","playTimes":3568105},{"id":"132849109","createUserId":"ebc1f6f4-c0ea-4a11-98d5-cb24ebf79981","title":"Real难唱华语歌，KTV里惊艳全场","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/c0a0cf48-47d4-4ae4-ad50-809ed490f331.jpg","playTimes":556111},{"id":"139872098","createUserId":"cf418761-ec7c-4210-be71-16d0d540dfc0","title":"褪色的爱,曾经的海市蜃楼","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/1a397848-9ec0-4394-b124-83623ce3e75e.jpg","playTimes":1213832},{"id":"139822479","createUserId":"c5853f3b-ca87-4f4b-aeb8-5d2e34dd5169","title":"【民谣】你是无意穿堂风，偏偏引山洪","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/4ae0d2ee-68b9-40d1-bb5f-48f88ea7e504.jpg","playTimes":623725},{"id":"135783930","createUserId":"001166fb-784d-45d1-bb28-0b7450f7f6ab","title":"诗与歌的相遇，被唱出来的现代诗","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/6af1ea9e-d9ab-4139-b53b-d930a53c4f38.jpg","playTimes":1433472},{"id":"140847423","createUserId":"6bcc9508-d8f7-489f-8d44-125f3900c06b","title":"华语女声 那些故事听她们细细诉说","image":"http://zazhi.migu.cn/soe/uniaccess?code=MjJvWEM3R04wcFh4MDAwMFZvMDAwfDIwMzcxMDE4MDY1ODU3%7CB45B60DC6CE9733D01BEAEC7518C76C4B241AC6183CCB7A8EE0778DF2E55E68E","playTimes":104},{"id":"139676252","createUserId":"7c144d56-dc50-4392-a02e-f80337237f79","title":"周末赖床的节奏，柔情似水的R&B情歌","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/c0dab153-1837-44ec-a961-6f032847b57a.jpg","playTimes":566518},{"id":"135416714","createUserId":"f498142a-75be-41dc-97ed-796b13b376f8","title":"KTV救场之华语篇","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/e28e2667-9245-4403-9729-8305ef05c0a6.jpg","playTimes":450452},{"id":"139595948","createUserId":"221acca8-9179-4ba7-ac3f-2b0fdffed356","title":"墨色墨香的中国本色摇滚","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/e1179839-84d7-4d1d-b9c5-beb9a7840fc9.jpg","playTimes":595961}]},{"groupName":"欧美","items":[{"id":"145538156","createUserId":"f6919647-0a41-4cb5-bed6-842a57c588d3","title":"开口跪|一秒就爱上的欧美男嗓","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/326548bb-b21a-4204-afd9-03e9b58287ad.jpg","playTimes":220557},{"id":"139855813","createUserId":"adcf9e85-2090-440f-a68a-e0cf8c87d6c5","title":"欧美对唱|就让脉脉回音，随心而唱","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/7da1af17-7c5c-43af-83d5-954e0d70a80d.jpg","playTimes":343523},{"id":"141329106","createUserId":"a5eef483-1c8c-4e17-9d00-6ccaaf793f68","title":"【欧美女声】吸一口馥郁仙气，坠入云端","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/84d72c9b-31dc-446b-ba8a-adc001ad8ed6.jpg","playTimes":565384},{"id":"141329121","createUserId":"72da1cb4-c3fc-41c3-843f-ac8e231c4155","title":"「欧美」提琴前奏·四弦上的华丽咏叹","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/723f7a3b-73f2-4619-b0b3-377b16b02d69.jpg","playTimes":607866},{"id":"141360330","createUserId":"2344a133-8367-4f0d-9247-5bd9b9a72646","title":"『欧美抒情』徐徐道来的缱绻情思","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/1b29dab2-2c80-4c9e-aecc-0554f357c34a.jpg","playTimes":587532},{"id":"142531434","createUserId":"91a50d7a-9337-4af9-bc3f-b126456a36af","title":"特立独行的欧美另类女大咖","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/2ffb0f5f-cfd8-4c0d-9314-9b02e9ac4b1f.jpg","playTimes":291959},{"id":"142757371","createUserId":"91a50d7a-9337-4af9-bc3f-b126456a36af","title":"欧美优质流行女声，快来领走你的女票！","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/bda4da6c-6438-4d3f-8216-0205fc8c8da9.jpg","playTimes":310119},{"id":"142994239","createUserId":"91a50d7a-9337-4af9-bc3f-b126456a36af","title":"欧美音乐“念慈庵”|神秘又百搭的中国元素！","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/0f34a77c-590f-4971-9b48-45fa69201a6c.jpg","playTimes":385457},{"id":"143009304","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"欧美二人组|没有谁比你更合我的拍","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/0cd07e67-c02c-4708-8b9c-0f7519801a74.jpg","playTimes":403720},{"id":"143195615","createUserId":"f6919647-0a41-4cb5-bed6-842a57c588d3","title":"始于颜值，陷于才华的欧美小鲜肉","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/d9a5c066-deb5-4e39-b6ab-e5aae616ee3b.jpg","playTimes":765243},{"id":"143207182","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"独立摇滚|最诚挚的理想自由之声（欧美篇)","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/ed4303fb-7ac7-4cf8-abd0-bdcb96dc11bc.jpg","playTimes":307928},{"id":"143998653","createUserId":"e5eca7dc-16a3-456c-b705-8563557362a9","title":"论骚气，非欧美男声莫属","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/fc267c0e-52fd-4d8b-82b7-e83d564546ef.jpg","playTimes":363184},{"id":"144962759","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"『声控系』那些在你芳心纵火的欧美男声","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/21fecdce-43ca-4ece-8874-646f44295aa3.jpg","playTimes":526934},{"id":"145104498","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"『欧美翻唱』昔去落尘俗，愿言闻此曲","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/c5134276-6694-4570-93b1-ed433fa89528.jpg","playTimes":558377},{"id":"144023062","createUserId":"e5eca7dc-16a3-456c-b705-8563557362a9","title":"2018全球收入最高的音乐人，唱歌给你听","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/65b55bc4-9398-44ae-810f-c38ac5702d59.jpg","playTimes":601429},{"id":"143937836","createUserId":"91a50d7a-9337-4af9-bc3f-b126456a36af","title":"2018抖音上炒鸡好听的英文歌，拿走不谢","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/ded777be-1ee7-41ee-83ff-c900f74db3ea.jpg","playTimes":17687381},{"id":"145069631","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"回到1980s|一场复古迷幻的电音潮趴","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/3f39eeaf-9e04-48bf-8e11-eff21ed92d56.jpg","playTimes":379225},{"id":"145027426","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"【欧美男团】用音乐挥洒酣畅青春","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/233576f3-56ff-49f2-8632-1274cf4cf2e3.jpg","playTimes":369541},{"id":"141226302","createUserId":"cf418761-ec7c-4210-be71-16d0d540dfc0","title":"【欧美】钢琴伴奏下的清透之音","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/3a35fbb1-dff7-4cfa-b88d-4c6d682e873e.jpg","playTimes":575762},{"id":"140134111","createUserId":"b725337b-b532-4321-af04-286e8fa98678","title":"「无前奏」心动何须铺垫，撩你即是正义","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/09558a76-093e-4214-a1b9-f5624f7c341f.jpg","playTimes":543458}]},{"groupName":"日韩","items":[{"id":"141282237","createUserId":"ebf6331d-2ddb-411c-bf65-36b434819b05","title":"韩语童谣|天将破晓，你是初现的暖阳","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/8e4e024c-507e-46ac-b72b-0a91775cb297.jpg","playTimes":573154},{"id":"132623206","createUserId":"7d428135-f0b9-4428-a956-da0bba8b1add","title":"猫躲在阳光里，你走进春光里","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/499a1215-af41-435e-bc01-9325fc48ec6c.jpg","playTimes":547262},{"id":"131492692","createUserId":"bda68488-5456-4cc4-b83f-30c31daa857a","title":"愿无岁月可回首，且以深情共白头","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/82da9aaa-4b3e-4198-a302-b3aabe4ad1d0.jpg","playTimes":586347},{"id":"131805263","createUserId":"7de4c7ff-2f02-4575-9f8d-97642385db20","title":"春风十里，不如与你同坐温暖阳光里","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/8d8f1eed-b0b3-457b-b1bc-6c3a974a52ce.jpg","playTimes":590849},{"id":"135122770","createUserId":"82ae23f1-95e4-459b-873e-276979369fa2","title":"韩国男团|全世界的仰望，不及你一个回眸","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/e9186f81-edad-4f59-9c8c-f8ced32f8c08.jpg","playTimes":592728},{"id":"135374255","createUserId":"7d428135-f0b9-4428-a956-da0bba8b1add","title":"韩系女声|迟夏写长信，字字皆是君","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/371980d3-6bc0-439f-a9a0-27dad707ba4a.jpg","playTimes":581131},{"id":"135639899","createUserId":"14bd66de-a980-4b12-b0e0-60744b7172fa","title":"『韩语情歌对唱』我好像掉进了爱情海里","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/9420a2bb-0b9a-4c1f-a898-7b098188aa34.jpg","playTimes":621171},{"id":"139663027","createUserId":"aee8c4d1-d7e3-47ab-bdeb-d833abb6278a","title":"减肥动力丨韩国女团们的小蛮腰","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/4e3606ce-6e43-4020-80b6-be2471a6157c.jpg","playTimes":703724},{"id":"141085422","createUserId":"a83b08e0-b01a-4a6c-b152-329ff089fa94","title":"『韩语』想躺在你怀里，静听秋日私语","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/f117665f-1b15-4808-bf60-c5746e7d79c0.jpg","playTimes":1119470},{"id":"142467652","createUserId":"25fca05f-84bc-4573-9803-0e8a3d70b91b","title":"韩剧OST|青春浪漫物语，爱你这件小事","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/f729cf34-4253-447f-b71e-a1efd38eaf0e.jpg","playTimes":556249},{"id":"144070649","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"「韩」冬之吉他物语，似你踏雪而来","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/2b2dbc02-0d3d-4c80-a3be-d3971b7bf1f1.jpg","playTimes":579400},{"id":"138940682","createUserId":"63088809-9b95-445c-a5a9-3202776499cf","title":"夏の情事|你是我昨日青空中的一片云","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/80ac219c-3fa7-4541-b5be-dac60be85b39.jpg","playTimes":1014260},{"id":"132343667","createUserId":"00cccb49-ee8e-4894-8513-ab14aed921d5","title":"且以温柔吟唱，报予世事百味","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/7e206ef9-339b-4b9c-9bfe-6f4679c31179.jpg","playTimes":1495155},{"id":"134770609","createUserId":"67a69b68-41be-4bd4-b883-b764112598b1","title":"日系男声|如骄阳般热烈&如清泉般绵润","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/01234c8b-c0fd-4376-a467-4763f252eb5e.jpg","playTimes":1666947},{"id":"140955866","createUserId":"a7abccb1-4973-4751-a6ef-ebc590b83b89","title":"[日语/无前奏]先声夺人，与心动撞个满怀","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/09df66d3-00c6-45b7-a644-1d2e01f54042.jpg","playTimes":551920},{"id":"141867248","createUserId":"3efe157e-2981-43c3-947a-72939e20a3c7","title":"此生无悔入动漫，来世愿生二次元","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/7da5749c-d273-4c5b-985c-930c3c3025dc.jpg","playTimes":606900},{"id":"144252219","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"【日系摇滚】 拼凑的白日梦与撕裂的音符","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/3d811247-bad6-432d-a559-69ed22530a55.jpg","playTimes":336954},{"id":"144803563","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"SM Town家族|韩流天团梦幻工厂","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/edfdca16-96de-4363-9ffd-633bf9f30791.jpg","playTimes":429104},{"id":"144876149","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"你有一份年度日式音乐大礼包，请查收!","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/e6557c52-fc4e-45a3-8fcb-080353ace8f4.jpg","playTimes":373456},{"id":"144876089","createUserId":"5b1cc664-59b0-46b9-a5a1-92c2a039ea83","title":"你有一份年度韩式音乐大礼包，请查收!","image":"http://d.musicapp.migu.cn/ugcdata/playListimg/8e88476f-51d9-4fce-bebc-048495c994a8.jpg","playTimes":472547}]}]</script>
<!-- 新歌速递 -->
<div id="song" class="section tablist">
<div class="container">
<div class="section-header">
<h2 class="title">新歌速递</h2>
<ul class="tags">
<li class="active"><a href="javascript:;">华语</a></li>
<li><a href="javascript:;">欧美</a></li>
<li><a href="javascript:;">日韩</a></li>
</ul>
<div class="play-all"><i class="iconfont cf-bofangquanbu"></i>播放全部</div>
</div>
</div>
<div class="common-swiper-container">
<div class="container">
<div class="swiper-container" id="song-swiper">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/60057010510" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0310/0935/AS3222bee849281ede9cc955dedbe15bba.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="同舟共济" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="60057010510"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/60057010510" target="_blank">同舟共济</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000602501" target="_blank">彭家丽</a>
 / <a href="/v3/music/artist/1000604858" target="_blank">李娅莎</a>
 / <a href="/v3/music/artist/1004423472" target="_blank">汪晨蕊</a>
 / <a href="/v3/music/artist/702060" target="_blank">彭远扬</a>
 / <a href="/v3/music/artist/1115604041" target="_blank">李鑫一</a>
 / <a href="/v3/music/artist/13635" target="_blank">多亮</a>
 / <a href="/v3/music/artist/613" target="_blank">孙耀威</a>
 / <a href="/v3/music/artist/10253" target="_blank">郭静</a>
</p>
</div>
<p class="song-time">04:30</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="60057010510"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"同舟共济","linkUrl":"/v3/music/song/60057010510","imgUrl":"//cdnmusic.migu.cn/picture/2020/0310/0935/AS3222bee849281ede9cc955dedbe15bba.jpg","summary":"","singer":"彭家丽，李娅莎，汪晨蕊，彭远扬，李鑫一，多亮，孙耀威，郭静","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="60057010510"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63793703904" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0309/2335/AS62ec0a3b1de4c7448dd5c6fd7653fd23.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="不让你再(电视剧《跟鲨鱼接吻》插曲)" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63793703904"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63793703904" target="_blank">不让你再(电视剧《跟鲨鱼接吻》插曲)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1004038616" target="_blank">文慧如</a>
</p>
</div>
<p class="song-time">04:07</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63793703904"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"不让你再(电视剧《跟鲨鱼接吻》插曲)","linkUrl":"/v3/music/song/63793703904","imgUrl":"//cdnmusic.migu.cn/picture/2020/0309/2335/AS62ec0a3b1de4c7448dd5c6fd7653fd23.jpg","summary":"","singer":"文慧如","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63793703904"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63273403083" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0307/1914/AS873e1d71efd350ac1953417f956f6553.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="冬日" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63273403083"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63273403083" target="_blank">冬日</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1002738890" target="_blank">鞠婧祎</a>
</p>
</div>
<p class="song-time">03:53</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63273403083"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"冬日","linkUrl":"/v3/music/song/63273403083","imgUrl":"//cdnmusic.migu.cn/picture/2020/0307/1914/AS873e1d71efd350ac1953417f956f6553.jpg","summary":"","singer":"鞠婧祎","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63273403083"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63793703903" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0302/2335/AS644a700bb04d64a247f9546a6c2eb832.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="同行(新加坡电视剧《爱...没有距离》主题曲)" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63793703903"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63793703903" target="_blank">同行(新加坡电视剧《爱...没有距离》主题曲)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1004038616" target="_blank">文慧如</a>
</p>
</div>
<p class="song-time">03:25</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63793703903"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"同行(新加坡电视剧《爱...没有距离》主题曲)","linkUrl":"/v3/music/song/63793703903","imgUrl":"//cdnmusic.migu.cn/picture/2020/0302/2335/AS644a700bb04d64a247f9546a6c2eb832.jpg","summary":"","singer":"文慧如","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63793703903"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63288600155" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0310/1407/ASe04a04572263e9faaa59693e56bb70d8.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="够爱" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63288600155"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63288600155" target="_blank">够爱</a>
</p>
<p class="singer">
<a href="/v3/music/artist/14470" target="_blank">胜屿</a>
</p>
</div>
<p class="song-time">02:55</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63288600155"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"够爱","linkUrl":"/v3/music/song/63288600155","imgUrl":"//cdnmusic.migu.cn/picture/2020/0310/1407/ASe04a04572263e9faaa59693e56bb70d8.jpg","summary":"","singer":"胜屿","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63288600155"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63388708799" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0309/0921/ASc00138bb37d46fb0a91d2898c06df69c.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="如影(电视剧《无心法师3》插曲)" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63388708799"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63388708799" target="_blank">如影(电视剧《无心法师3》插曲)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/5576" target="_blank">黄龄</a>
</p>
</div>
<p class="song-time">04:07</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63388708799"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"如影(电视剧《无心法师3》插曲)","linkUrl":"/v3/music/song/63388708799","imgUrl":"//cdnmusic.migu.cn/picture/2020/0309/0921/ASc00138bb37d46fb0a91d2898c06df69c.jpg","summary":"","singer":"黄龄","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63388708799"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/6005752C6J8" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/2335/AS65c7af00a4aeb1d88e966c5f5c36bf8f.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="我们没有爱错" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="6005752C6J8"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/6005752C6J8" target="_blank">我们没有爱错</a>
</p>
<p class="singer">
<a href="/v3/music/artist/22150" target="_blank">潘嘉丽</a>
</p>
</div>
<p class="song-time">05:05</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="6005752C6J8"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"我们没有爱错","linkUrl":"/v3/music/song/6005752C6J8","imgUrl":"//cdnmusic.migu.cn/picture/2020/0305/2335/AS65c7af00a4aeb1d88e966c5f5c36bf8f.jpg","summary":"","singer":"潘嘉丽","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="6005752C6J8"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63261202866" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0306/1449/AS418deac4c9b04759a539eefd31cabf93.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="春天怀疑(from 王小苗诗集《邪恶的纯真》pp. 92-95.)" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63261202866"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63261202866" target="_blank">春天怀疑(from 王小苗诗集《邪恶的纯真》pp. 92-95.)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1104711258" target="_blank">房东的猫</a>
</p>
</div>
<p class="song-time">03:35</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63261202866"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"春天怀疑(from 王小苗诗集《邪恶的纯真》pp. 92-95.)","linkUrl":"/v3/music/song/63261202866","imgUrl":"//cdnmusic.migu.cn/picture/2020/0306/1449/AS418deac4c9b04759a539eefd31cabf93.jpg","summary":"","singer":"房东的猫","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63261202866"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/69537700416" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0302/1642/ASe05a920141a37cde3d8c608d8cf1b789.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="你的回忆里是否还有我(Dj版)" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69537700416"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69537700416" target="_blank">你的回忆里是否还有我(Dj版)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/13754" target="_blank">笑天</a>
</p>
</div>
<p class="song-time">04:20</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69537700416"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"你的回忆里是否还有我(Dj版)","linkUrl":"/v3/music/song/69537700416","imgUrl":"//cdnmusic.migu.cn/picture/2020/0302/1642/ASe05a920141a37cde3d8c608d8cf1b789.jpg","summary":"","singer":"笑天","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="69537700416"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/69926100658" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/1842/ASd1f11fe324bcccec65a4af9e1314ccbe.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="役之战" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69926100658"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69926100658" target="_blank">役之战</a>
</p>
<p class="singer">
<a href="/v3/music/artist/16215" target="_blank">丁于</a>
</p>
</div>
<p class="song-time">03:54</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69926100658"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"役之战","linkUrl":"/v3/music/song/69926100658","imgUrl":"//cdnmusic.migu.cn/picture/2020/0305/1842/ASd1f11fe324bcccec65a4af9e1314ccbe.jpg","summary":"","singer":"丁于","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="69926100658"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/60057010500" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/2335/AS98648dcc5110f61c76759b7904903390.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="一切都会过去" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="60057010500"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/60057010500" target="_blank">一切都会过去</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1111426473" target="_blank">龙千里</a>
 / <a href="/v3/music/artist/1115497719" target="_blank">张宸赫</a>
 / <a href="/v3/music/artist/1130067225" target="_blank">人民动听</a>
 / <a href="/v3/music/artist/1130167136" target="_blank">董奕成</a>
 / <a href="/v3/music/artist/1130167133" target="_blank">时尚</a>
 / <a href="/v3/music/artist/1130167134" target="_blank">沈忞维</a>
 / <a href="/v3/music/artist/1130167135" target="_blank">陈彦羽</a>
 / <a href="/v3/music/artist/1130167132" target="_blank">贺艺</a>
</p>
</div>
<p class="song-time">04:40</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="60057010500"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"一切都会过去","linkUrl":"/v3/music/song/60057010500","imgUrl":"//cdnmusic.migu.cn/picture/2020/0305/2335/AS98648dcc5110f61c76759b7904903390.jpg","summary":"","singer":"龙千里，张宸赫，人民动听，董奕成，时尚，沈忞维，陈彦羽，贺艺","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="60057010500"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/69933900025" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/1928/ASf2b74f6dcf1aca2c7c45bc734a758bfb.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="让我快乐" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69933900025"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69933900025" target="_blank">让我快乐</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1110091187" target="_blank">杨和苏</a>
</p>
</div>
<p class="song-time">04:20</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69933900025"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"让我快乐","linkUrl":"/v3/music/song/69933900025","imgUrl":"//cdnmusic.migu.cn/picture/2020/0305/1928/ASf2b74f6dcf1aca2c7c45bc734a758bfb.jpg","summary":"","singer":"杨和苏","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="69933900025"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63273403082" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0308/1021/AS04357b02e2e02d18abb4a69c06b36f9b.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="反方向" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63273403082"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63273403082" target="_blank">反方向</a>
</p>
<p class="singer">
<a href="/v3/music/artist/305" target="_blank">光良</a>
</p>
</div>
<p class="song-time">04:36</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63273403082"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"反方向","linkUrl":"/v3/music/song/63273403082","imgUrl":"//cdnmusic.migu.cn/picture/2020/0308/1021/AS04357b02e2e02d18abb4a69c06b36f9b.jpg","summary":"","singer":"光良","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63273403082"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/60068308716" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/1256/AS32e00e95f5b9beb3577488f5e81268b1.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="最可敬的人" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="60068308716"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/60068308716" target="_blank">最可敬的人</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1129638694" target="_blank">谭萌</a>
 / <a href="/v3/music/artist/1000125920" target="_blank">操奕恒</a>
</p>
</div>
<p class="song-time">04:22</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="60068308716"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"最可敬的人","linkUrl":"/v3/music/song/60068308716","imgUrl":"//cdnmusic.migu.cn/picture/2020/0305/1256/AS32e00e95f5b9beb3577488f5e81268b1.jpg","summary":"","singer":"谭萌，操奕恒","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="60068308716"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/69918600416" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0304/2335/AS664186d7d3e42f2e9529387badecda28.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="不忘相思" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69918600416"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69918600416" target="_blank">不忘相思</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1130160672" target="_blank">凯霖</a>
</p>
</div>
<p class="song-time">03:56</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69918600416"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"不忘相思","linkUrl":"/v3/music/song/69918600416","imgUrl":"//cdnmusic.migu.cn/picture/2020/0304/2335/AS664186d7d3e42f2e9529387badecda28.jpg","summary":"","singer":"凯霖","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="69918600416"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/6008460GRV9" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0308/1021/ASf9582c3b82e99036847d14b01e8f6ddc.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="最好的告白" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="6008460GRV9"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/6008460GRV9" target="_blank">最好的告白</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000014836" target="_blank">曹寅</a>
</p>
</div>
<p class="song-time">04:27</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="6008460GRV9"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"最好的告白","linkUrl":"/v3/music/song/6008460GRV9","imgUrl":"//cdnmusic.migu.cn/picture/2020/0308/1021/ASf9582c3b82e99036847d14b01e8f6ddc.jpg","summary":"","singer":"曹寅","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="6008460GRV9"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/6005752C588" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/1928/AS48f495cb11f591b9ba880fd2084699e5.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="双鱼" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="6005752C588"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/6005752C588" target="_blank">双鱼</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000129490" target="_blank">唐汉霄</a>
</p>
</div>
<p class="song-time">04:00</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="6005752C588"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"双鱼","linkUrl":"/v3/music/song/6005752C588","imgUrl":"//cdnmusic.migu.cn/picture/2020/0305/1928/AS48f495cb11f591b9ba880fd2084699e5.jpg","summary":"","singer":"唐汉霄","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="6005752C588"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/69911701388" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0217/1642/AS9db8c00f2fb795d244b250dd4d3f29d1.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="那些没有说出口的话（电视剧《完美关系》情感主题曲）" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69911701388"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69911701388" target="_blank">那些没有说出口的话（电视剧《完美关系》情感主题曲）</a>
</p>
<p class="singer">
<a href="/v3/music/artist/338" target="_blank">容祖儿</a>
</p>
</div>
<p class="song-time">03:28</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69911701388"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"那些没有说出口的话（电视剧《完美关系》情感主题曲）","linkUrl":"/v3/music/song/69911701388","imgUrl":"//cdnmusic.migu.cn/picture/2020/0217/1642/AS9db8c00f2fb795d244b250dd4d3f29d1.jpg","summary":"","singer":"容祖儿","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="69911701388"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/60083615225" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0302/2335/ASe1451e9518997190c1162d1df8940c9f.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="Be Me" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="60083615225"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/60083615225" target="_blank">Be Me</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1001474939" target="_blank">李玉玺</a>
</p>
</div>
<p class="song-time">02:37</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="60083615225"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"Be Me","linkUrl":"/v3/music/song/60083615225","imgUrl":"//cdnmusic.migu.cn/picture/2020/0302/2335/ASe1451e9518997190c1162d1df8940c9f.jpg","summary":"","singer":"李玉玺","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="60083615225"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/60083615224" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0308/1021/AS433a35d726dadb0a7b1214520a18dbee.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="你" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="60083615224"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/60083615224" target="_blank">你</a>
</p>
<p class="singer">
<a href="/v3/music/artist/975342" target="_blank">毕书尽</a>
</p>
</div>
<p class="song-time">03:31</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="60083615224"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"你","linkUrl":"/v3/music/song/60083615224","imgUrl":"//cdnmusic.migu.cn/picture/2020/0308/1021/AS433a35d726dadb0a7b1214520a18dbee.jpg","summary":"","singer":"毕书尽","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="60083615224"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/6005973LYRA" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0302/2335/AS1872050625600642ce7228b6dc7cffdd.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="一样美丽 (同心版)" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="6005973LYRA"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/6005973LYRA" target="_blank">一样美丽 (同心版)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1002043053" target="_blank">周兴哲</a>
 / <a href="/v3/music/artist/5680" target="_blank">陈柏宇</a>
 / <a href="/v3/music/artist/1002173074" target="_blank">Fatin</a>
 / <a href="/v3/music/artist/1002499278" target="_blank">Sezairi</a>
 / <a href="/v3/music/artist/1002589977" target="_blank">陈明憙Jocelyn</a>
 / <a href="/v3/music/artist/1088588" target="_blank">林奕匡</a>
 / <a href="/v3/music/artist/1104835040" target="_blank">Ben&amp;Ben</a>
 / <a href="/v3/music/artist/1106877936" target="_blank">NYK</a>
 / <a href="/v3/music/artist/1106934191" target="_blank">黄妍</a>
 / <a href="/v3/music/artist/1108298647" target="_blank">Benjamin Kheng</a>
 / <a href="/v3/music/artist/1110157883" target="_blank">E.viewz</a>
 / <a href="/v3/music/artist/1130159397" target="_blank">Narelle</a>
 / <a href="/v3/music/artist/1130159398" target="_blank">Hà Lê</a>
 / <a href="/v3/music/artist/1130159399" target="_blank">Wafa Bahiyya Haneesa</a>
 / <a href="/v3/music/artist/1002043535" target="_blank">郑心慈</a>
</p>
</div>
<p class="song-time">04:40</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="6005973LYRA"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"一样美丽 (同心版)","linkUrl":"/v3/music/song/6005973LYRA","imgUrl":"//cdnmusic.migu.cn/picture/2020/0302/2335/AS1872050625600642ce7228b6dc7cffdd.jpg","summary":"","singer":"周兴哲，陈柏宇，Fatin，Sezairi，陈明憙Jocelyn，林奕匡，Ben&amp;Ben，NYK，黄妍，Benjamin Kheng，E.viewz，Narelle，Hà Lê，Wafa Bahiyya Haneesa，郑心慈","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="6005973LYRA"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/69929500133" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0303/1656/ASa1b5e21dbc097a38269d0ac4eb7e00cf.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="囚鸟" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69929500133"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69929500133" target="_blank">囚鸟</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1123425380" target="_blank">小阿七</a>
</p>
</div>
<p class="song-time">04:31</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69929500133"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"囚鸟","linkUrl":"/v3/music/song/69929500133","imgUrl":"//cdnmusic.migu.cn/picture/2020/0303/1656/ASa1b5e21dbc097a38269d0ac4eb7e00cf.jpg","summary":"","singer":"小阿七","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="69929500133"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/69537700413" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0302/1614/ASe41193323f0ec1804d78c8347d1672b5.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="往事别回头" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69537700413"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69537700413" target="_blank">往事别回头</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000044974" target="_blank">金久哲</a>
</p>
</div>
<p class="song-time">03:52</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69537700413"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"往事别回头","linkUrl":"/v3/music/song/69537700413","imgUrl":"//cdnmusic.migu.cn/picture/2020/0302/1614/ASe41193323f0ec1804d78c8347d1672b5.jpg","summary":"","singer":"金久哲","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="69537700413"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/69933900023" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0302/1614/AS3f82da0871af563e8f862218e277ab99.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="无名的你" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69933900023"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69933900023" target="_blank">无名的你</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000697370" target="_blank">于小彤</a>
 / <a href="/v3/music/artist/707" target="_blank">弦子</a>
 / <a href="/v3/music/artist/1002644360" target="_blank">陆思恒</a>
 / <a href="/v3/music/artist/1106616778" target="_blank">苏诗丁</a>
 / <a href="/v3/music/artist/1106734617" target="_blank">戴景耀</a>
 / <a href="/v3/music/artist/1108576445" target="_blank">钟祺</a>
 / <a href="/v3/music/artist/1110299924" target="_blank">陈意涵Estelle</a>
 / <a href="/v3/music/artist/1111017464" target="_blank">费启鸣</a>
 / <a href="/v3/music/artist/1115079766" target="_blank">赵品霖</a>
 / <a href="/v3/music/artist/1115126435" target="_blank">强东玥</a>
 / <a href="/v3/music/artist/1115496835" target="_blank">高嘉朗</a>
 / <a href="/v3/music/artist/1115553592" target="_blank">王晨艺</a>
 / <a href="/v3/music/artist/1115604041" target="_blank">李鑫一</a>
 / <a href="/v3/music/artist/1115604042" target="_blank">吴季峰</a>
 / <a href="/v3/music/artist/1125245522" target="_blank">高瀚宇</a>
 / <a href="/v3/music/artist/5206" target="_blank">张远</a>
 / <a href="/v3/music/artist/1002640801" target="_blank">彭楚粤</a>
</p>
</div>
<p class="song-time">04:09</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69933900023"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"无名的你","linkUrl":"/v3/music/song/69933900023","imgUrl":"//cdnmusic.migu.cn/picture/2020/0302/1614/AS3f82da0871af563e8f862218e277ab99.jpg","summary":"","singer":"于小彤，弦子，陆思恒，苏诗丁，戴景耀，钟祺，陈意涵Estelle，费启鸣，赵品霖，强东玥，高嘉朗，王晨艺，李鑫一，吴季峰，高瀚宇，张远，彭楚粤","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="69933900023"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/60071702557" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0302/1942/ASfd9bcd2ce6c41f372b1cda42d1c3f67b.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="情非得已" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="60071702557"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/60071702557" target="_blank">情非得已</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1106646794" target="_blank">曾惜</a>
</p>
</div>
<p class="song-time">03:54</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="60071702557"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"情非得已","linkUrl":"/v3/music/song/60071702557","imgUrl":"//cdnmusic.migu.cn/picture/2020/0302/1942/ASfd9bcd2ce6c41f372b1cda42d1c3f67b.jpg","summary":"","singer":"曾惜","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="60071702557"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/69917704300" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0302/1942/AS75674314ba2548a6200370ba5bc2a3db.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="眠冬" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69917704300"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69917704300" target="_blank">眠冬</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1112497367" target="_blank">黄明昊Justin</a>
 / <a href="/v3/music/artist/1002146864" target="_blank">满舒克</a>
</p>
</div>
<p class="song-time">03:36</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69917704300"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"眠冬","linkUrl":"/v3/music/song/69917704300","imgUrl":"//cdnmusic.migu.cn/picture/2020/0302/1942/AS75674314ba2548a6200370ba5bc2a3db.jpg","summary":"","singer":"黄明昊Justin，满舒克","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="69917704300"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/69905303434" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0228/2235/AS1b35883aeb7ac8dcaffb538866998522.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="情深深雨濛濛" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69905303434"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69905303434" target="_blank">情深深雨濛濛</a>
</p>
<p class="singer">
<a href="/v3/music/artist/359" target="_blank">苏有朋</a>
 / <a href="/v3/music/artist/1001621050" target="_blank">王琳</a>
 / <a href="/v3/music/artist/1002176869" target="_blank">寇振海</a>
 / <a href="/v3/music/artist/1130147378" target="_blank">徐幸</a>
 / <a href="/v3/music/artist/276" target="_blank">古巨基</a>
</p>
</div>
<p class="song-time">03:16</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69905303434"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"情深深雨濛濛","linkUrl":"/v3/music/song/69905303434","imgUrl":"//cdnmusic.migu.cn/picture/2020/0228/2235/AS1b35883aeb7ac8dcaffb538866998522.jpg","summary":"","singer":"苏有朋，王琳，寇振海，徐幸，古巨基","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="69905303434"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63274311730" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0226/1621/AS68af76b83ab35d135088c5f7ed2e6e8b.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="不枉年少" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63274311730"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63274311730" target="_blank">不枉年少</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000008196" target="_blank">孙子涵</a>
</p>
</div>
<p class="song-time">02:52</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63274311730"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"不枉年少","linkUrl":"/v3/music/song/63274311730","imgUrl":"//cdnmusic.migu.cn/picture/2020/0226/1621/AS68af76b83ab35d135088c5f7ed2e6e8b.jpg","summary":"","singer":"孙子涵","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63274311730"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63388708797" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0301/2335/AS872febc2ca78df1d94faf9b0202bc362.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="无心(电视剧《无心法师3》同名推广曲)" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63388708797"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63388708797" target="_blank">无心(电视剧《无心法师3》同名推广曲)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1108108136" target="_blank">沈以诚</a>
</p>
</div>
<p class="song-time">04:28</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63388708797"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"无心(电视剧《无心法师3》同名推广曲)","linkUrl":"/v3/music/song/63388708797","imgUrl":"//cdnmusic.migu.cn/picture/2020/0301/2335/AS872febc2ca78df1d94faf9b0202bc362.jpg","summary":"","singer":"沈以诚","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63388708797"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63273403081" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0301/2335/ASf9b0386d9236d091d7c93890b116862f.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="外面的世界" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63273403081"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63273403081" target="_blank">外面的世界</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1125409913" target="_blank">NYA奈亚</a>
</p>
</div>
<p class="song-time">03:48</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63273403081"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"外面的世界","linkUrl":"/v3/music/song/63273403081","imgUrl":"//cdnmusic.migu.cn/picture/2020/0301/2335/ASf9b0386d9236d091d7c93890b116862f.jpg","summary":"","singer":"NYA奈亚","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63273403081"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/6008460GKFV" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0304/0928/AS47c979549e8118efd58b57a442f790de.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="我知道我可以" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="6008460GKFV"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/6008460GKFV" target="_blank">我知道我可以</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1130151530" target="_blank">少年红星群星</a>
</p>
</div>
<p class="song-time">03:55</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="6008460GKFV"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"我知道我可以","linkUrl":"/v3/music/song/6008460GKFV","imgUrl":"//cdnmusic.migu.cn/picture/2020/0304/0928/AS47c979549e8118efd58b57a442f790de.jpg","summary":"","singer":"少年红星群星","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="6008460GKFV"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/64380800535" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0302/1421/ASebdf208bb8b6cff8c55678ab6fefc488.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="长城如是歌" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="64380800535"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/64380800535" target="_blank">长城如是歌</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1001210308" target="_blank">王晓天</a>
</p>
</div>
<p class="song-time">05:08</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="64380800535"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"长城如是歌","linkUrl":"/v3/music/song/64380800535","imgUrl":"//cdnmusic.migu.cn/picture/2020/0302/1421/ASebdf208bb8b6cff8c55678ab6fefc488.jpg","summary":"","singer":"王晓天","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="64380800535"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63274311729" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0301/0928/AS66897e5cc807ee0a1862f43196a3034d.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="Let You Know" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63274311729"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63274311729" target="_blank">Let You Know</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1130066527" target="_blank">阿斑</a>
</p>
</div>
<p class="song-time">02:39</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63274311729"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"Let You Know","linkUrl":"/v3/music/song/63274311729","imgUrl":"//cdnmusic.migu.cn/picture/2020/0301/0928/AS66897e5cc807ee0a1862f43196a3034d.jpg","summary":"","singer":"阿斑","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63274311729"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/63388708795" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0228/2356/AS65c4385e4b5506e126e493baa1fa7810.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="半夏夜(网剧《医妃难囚3》插曲)" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63388708795"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63388708795" target="_blank">半夏夜(网剧《医妃难囚3》插曲)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1130143244" target="_blank">高阳</a>
 / <a href="/v3/music/artist/1130143137" target="_blank">陆怡璇</a>
</p>
</div>
<p class="song-time">03:16</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63388708795"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"半夏夜(网剧《医妃难囚3》插曲)","linkUrl":"/v3/music/song/63388708795","imgUrl":"//cdnmusic.migu.cn/picture/2020/0228/2356/AS65c4385e4b5506e126e493baa1fa7810.jpg","summary":"","singer":"高阳，陆怡璇","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="63388708795"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/69911701387" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0217/1642/AS9db8c00f2fb795d244b250dd4d3f29d1.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="透明的存在（电视剧《完美关系》插曲）" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69911701387"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69911701387" target="_blank">透明的存在（电视剧《完美关系》插曲）</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000131604" target="_blank">许靖韵</a>
</p>
</div>
<p class="song-time">04:20</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69911701387"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"透明的存在（电视剧《完美关系》插曲）","linkUrl":"/v3/music/song/69911701387","imgUrl":"//cdnmusic.migu.cn/picture/2020/0217/1642/AS9db8c00f2fb795d244b250dd4d3f29d1.jpg","summary":"","singer":"许靖韵","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="69911701387"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/song/6005973LY2H" class="img-box" target="_blank">
<img src="/b/picture/img_default_100x100.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0227/1500/ASe53bf77344eed199f9f71fdc1cce0b56.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_100x100.jpg'" alt="抱歉" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="6005973LY2H"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/6005973LY2H" target="_blank">抱歉</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1110317557" target="_blank">文兆杰</a>
</p>
</div>
<p class="song-time">04:12</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="6005973LY2H"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"抱歉","linkUrl":"/v3/music/song/6005973LY2H","imgUrl":"//cdnmusic.migu.cn/picture/2020/0227/1500/ASe53bf77344eed199f9f71fdc1cce0b56.jpg","summary":"","singer":"文兆杰","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;"
data-type="crbt"
data-id="6005973LY2H"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="slide-action slide-action-left">
<div class="arrow-button arrow-left"></div>
</div>
<div class="slide-action slide-action-right">
<div class="arrow-button arrow-right"></div>
</div>
</div>
<div class="container">
<div class="swiper-pagination" id="song-swiper-pagination"></div>
</div>
</div>
<script type="text/html" id="songData">
[{"groupName":"华语","items":[{"songId":"1130173236","songName":"同舟共济","albumsPicUrl":null,"copyrightId":"60057010510","image":"//cdnmusic.migu.cn/picture/2020/0310/0935/AS3222bee849281ede9cc955dedbe15bba.jpg","duration":"00:04:30","playCount":null,"albumId":"1130173235","albumName":"同舟共济","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000602501","singerName":"彭家丽","image":null},{"singerId":"1000604858","singerName":"李娅莎","image":null},{"singerId":"1004423472","singerName":"汪晨蕊","image":null},{"singerId":"702060","singerName":"彭远扬","image":null},{"singerId":"1115604041","singerName":"李鑫一","image":null},{"singerId":"13635","singerName":"多亮","image":null},{"singerId":"613","singerName":"孙耀威","image":null},{"singerId":"10253","singerName":"郭静","image":null}]},{"songId":"1130172697","songName":"不让你再(电视剧《跟鲨鱼接吻》插曲)","albumsPicUrl":null,"copyrightId":"63793703904","image":"//cdnmusic.migu.cn/picture/2020/0309/2335/AS62ec0a3b1de4c7448dd5c6fd7653fd23.jpg","duration":"00:04:07","playCount":null,"albumId":"1130172696","albumName":"不让你再","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1004038616","singerName":"文慧如","image":null}]},{"songId":"1130170825","songName":"冬日","albumsPicUrl":null,"copyrightId":"63273403083","image":"//cdnmusic.migu.cn/picture/2020/0307/1914/AS873e1d71efd350ac1953417f956f6553.jpg","duration":"00:03:53","playCount":null,"albumId":"1130170824","albumName":"冬日","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002738890","singerName":"鞠婧祎","image":null}]},{"songId":"1130145665","songName":"同行(新加坡电视剧《爱...没有距离》主题曲)","albumsPicUrl":null,"copyrightId":"63793703903","image":"//cdnmusic.migu.cn/picture/2020/0302/2335/AS644a700bb04d64a247f9546a6c2eb832.jpg","duration":"00:03:25","playCount":null,"albumId":"1130145664","albumName":"同行","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1004038616","singerName":"文慧如","image":null}]},{"songId":"1130163036","songName":"够爱","albumsPicUrl":null,"copyrightId":"63288600155","image":"//cdnmusic.migu.cn/picture/2020/0310/1407/ASe04a04572263e9faaa59693e56bb70d8.jpg","duration":"00:02:55","playCount":null,"albumId":"1130163035","albumName":"够爱","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"14470","singerName":"胜屿","image":null}]},{"songId":"1130169565","songName":"如影(电视剧《无心法师3》插曲)","albumsPicUrl":null,"copyrightId":"63388708799","image":"//cdnmusic.migu.cn/picture/2020/0309/0921/ASc00138bb37d46fb0a91d2898c06df69c.jpg","duration":"00:04:07","playCount":null,"albumId":"1130169564","albumName":"如影","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"5576","singerName":"黄龄","image":null}]},{"songId":"1130160660","songName":"我们没有爱错","albumsPicUrl":null,"copyrightId":"6005752C6J8","image":"//cdnmusic.migu.cn/picture/2020/0305/2335/AS65c7af00a4aeb1d88e966c5f5c36bf8f.jpg","duration":"00:05:05","playCount":null,"albumId":"1130160659","albumName":"我们没有爱错","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"22150","singerName":"潘嘉丽","image":null}]},{"songId":"1130168165","songName":"春天怀疑(from 王小苗诗集《邪恶的纯真》pp. 92-95.)","albumsPicUrl":null,"copyrightId":"63261202866","image":"//cdnmusic.migu.cn/picture/2020/0306/1449/AS418deac4c9b04759a539eefd31cabf93.jpg","duration":"00:03:35","playCount":null,"albumId":"1130167888","albumName":"邪恶的纯真","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1104711258","singerName":"房东的猫","image":null}]},{"songId":"1130159406","songName":"你的回忆里是否还有我(Dj版)","albumsPicUrl":null,"copyrightId":"69537700416","image":"//cdnmusic.migu.cn/picture/2020/0302/1642/ASe05a920141a37cde3d8c608d8cf1b789.jpg","duration":"00:04:20","playCount":null,"albumId":"1130159401","albumName":"你的回忆里是否还有我","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"13754","singerName":"笑天","image":null}]},{"songId":"1130160482","songName":"役之战","albumsPicUrl":null,"copyrightId":"69926100658","image":"//cdnmusic.migu.cn/picture/2020/0305/1842/ASd1f11fe324bcccec65a4af9e1314ccbe.jpg","duration":"00:03:54","playCount":null,"albumId":"1130166722","albumName":"役之战","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"16215","singerName":"丁于","image":null}]},{"songId":"1130167138","songName":"一切都会过去","albumsPicUrl":null,"copyrightId":"60057010500","image":"//cdnmusic.migu.cn/picture/2020/0305/2335/AS98648dcc5110f61c76759b7904903390.jpg","duration":"00:04:40","playCount":null,"albumId":"1130167137","albumName":"一切都会过去","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1111426473","singerName":"龙千里","image":null},{"singerId":"1115497719","singerName":"张宸赫","image":null},{"singerId":"1130067225","singerName":"人民动听","image":null},{"singerId":"1130167136","singerName":"董奕成","image":null},{"singerId":"1130167133","singerName":"时尚","image":null},{"singerId":"1130167134","singerName":"沈忞维","image":null},{"singerId":"1130167135","singerName":"陈彦羽","image":null},{"singerId":"1130167132","singerName":"贺艺","image":null}]},{"songId":"1130163893","songName":"让我快乐","albumsPicUrl":null,"copyrightId":"69933900025","image":"//cdnmusic.migu.cn/picture/2020/0305/1928/ASf2b74f6dcf1aca2c7c45bc734a758bfb.jpg","duration":"00:04:20","playCount":null,"albumId":"1130163891","albumName":"让我快乐","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1110091187","singerName":"杨和苏","image":null}]},{"songId":"1130166102","songName":"反方向","albumsPicUrl":null,"copyrightId":"63273403082","image":"//cdnmusic.migu.cn/picture/2020/0308/1021/AS04357b02e2e02d18abb4a69c06b36f9b.jpg","duration":"00:04:36","playCount":null,"albumId":"1130166101","albumName":"反方向","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"305","singerName":"光良","image":null}]},{"songId":"1130160834","songName":"最可敬的人","albumsPicUrl":null,"copyrightId":"60068308716","image":"//cdnmusic.migu.cn/picture/2020/0305/1256/AS32e00e95f5b9beb3577488f5e81268b1.jpg","duration":"00:04:22","playCount":null,"albumId":"1130160827","albumName":"最可敬的人","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1129638694","singerName":"谭萌","image":null},{"singerId":"1000125920","singerName":"操奕恒","image":null}]},{"songId":"1130160680","songName":"不忘相思","albumsPicUrl":null,"copyrightId":"69918600416","image":"//cdnmusic.migu.cn/picture/2020/0304/2335/AS664186d7d3e42f2e9529387badecda28.jpg","duration":"00:03:56","playCount":null,"albumId":"1130160678","albumName":"不忘相思","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1130160672","singerName":"凯霖","image":null}]},{"songId":"1130164478","songName":"最好的告白","albumsPicUrl":null,"copyrightId":"6008460GRV9","image":"//cdnmusic.migu.cn/picture/2020/0308/1021/ASf9582c3b82e99036847d14b01e8f6ddc.jpg","duration":"00:04:27","playCount":null,"albumId":"1130164477","albumName":"最好的告白","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000014836","singerName":"曹寅","image":null}]},{"songId":"1130142384","songName":"双鱼","albumsPicUrl":null,"copyrightId":"6005752C588","image":"//cdnmusic.migu.cn/picture/2020/0305/1928/AS48f495cb11f591b9ba880fd2084699e5.jpg","duration":"00:04:00","playCount":null,"albumId":"1130142383","albumName":"双鱼","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000129490","singerName":"唐汉霄","image":null}]},{"songId":"1130101295","songName":"那些没有说出口的话（电视剧《完美关系》情感主题曲）","albumsPicUrl":null,"copyrightId":"69911701388","image":"//cdnmusic.migu.cn/picture/2020/0217/1642/AS9db8c00f2fb795d244b250dd4d3f29d1.jpg","duration":"00:03:28","playCount":null,"albumId":"1130101294","albumName":"《完美关系》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"338","singerName":"容祖儿","image":null}]},{"songId":"1130155677","songName":"Be Me","albumsPicUrl":null,"copyrightId":"60083615225","image":"//cdnmusic.migu.cn/picture/2020/0302/2335/ASe1451e9518997190c1162d1df8940c9f.jpg","duration":"00:02:37","playCount":null,"albumId":"1130155676","albumName":"Be Me","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001474939","singerName":"李玉玺","image":null}]},{"songId":"1130155679","songName":"你","albumsPicUrl":null,"copyrightId":"60083615224","image":"//cdnmusic.migu.cn/picture/2020/0308/1021/AS433a35d726dadb0a7b1214520a18dbee.jpg","duration":"00:03:31","playCount":null,"albumId":"1130155678","albumName":"你","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"975342","singerName":"毕书尽","image":null}]},{"songId":"1130159386","songName":"一样美丽 (同心版)","albumsPicUrl":null,"copyrightId":"6005973LYRA","image":"//cdnmusic.migu.cn/picture/2020/0302/2335/AS1872050625600642ce7228b6dc7cffdd.jpg","duration":"00:04:40","playCount":null,"albumId":"1130159385","albumName":"一样美丽 (同心版)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002043053","singerName":"周兴哲","image":null},{"singerId":"5680","singerName":"陈柏宇","image":null},{"singerId":"1002173074","singerName":"Fatin","image":null},{"singerId":"1002499278","singerName":"Sezairi","image":null},{"singerId":"1002589977","singerName":"陈明憙Jocelyn","image":null},{"singerId":"1088588","singerName":"林奕匡","image":null},{"singerId":"1104835040","singerName":"Ben&Ben","image":null},{"singerId":"1106877936","singerName":"NYK","image":null},{"singerId":"1106934191","singerName":"黄妍","image":null},{"singerId":"1108298647","singerName":"Benjamin Kheng","image":null},{"singerId":"1110157883","singerName":"E.viewz","image":null},{"singerId":"1130159397","singerName":"Narelle","image":null},{"singerId":"1130159398","singerName":"Hà Lê","image":null},{"singerId":"1130159399","singerName":"Wafa Bahiyya Haneesa","image":null},{"singerId":"1002043535","singerName":"郑心慈","image":null}]},{"songId":"1130152540","songName":"囚鸟","albumsPicUrl":null,"copyrightId":"69929500133","image":"//cdnmusic.migu.cn/picture/2020/0303/1656/ASa1b5e21dbc097a38269d0ac4eb7e00cf.jpg","duration":"00:04:31","playCount":null,"albumId":"1130159995","albumName":"囚鸟","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1123425380","singerName":"小阿七","image":null}]},{"songId":"1130159405","songName":"往事别回头","albumsPicUrl":null,"copyrightId":"69537700413","image":"//cdnmusic.migu.cn/picture/2020/0302/1614/ASe41193323f0ec1804d78c8347d1672b5.jpg","duration":"00:03:52","playCount":null,"albumId":"1130159403","albumName":"往事别回头","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000044974","singerName":"金久哲","image":null}]},{"songId":"1130159441","songName":"无名的你","albumsPicUrl":null,"copyrightId":"69933900023","image":"//cdnmusic.migu.cn/picture/2020/0302/1614/AS3f82da0871af563e8f862218e277ab99.jpg","duration":"00:04:09","playCount":null,"albumId":"1130159439","albumName":"无名的你","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000697370","singerName":"于小彤","image":null},{"singerId":"707","singerName":"弦子","image":null},{"singerId":"1002644360","singerName":"陆思恒","image":null},{"singerId":"1106616778","singerName":"苏诗丁","image":null},{"singerId":"1106734617","singerName":"戴景耀","image":null},{"singerId":"1108576445","singerName":"钟祺","image":null},{"singerId":"1110299924","singerName":"陈意涵Estelle","image":null},{"singerId":"1111017464","singerName":"费启鸣","image":null},{"singerId":"1115079766","singerName":"赵品霖","image":null},{"singerId":"1115126435","singerName":"强东玥","image":null},{"singerId":"1115496835","singerName":"高嘉朗","image":null},{"singerId":"1115553592","singerName":"王晨艺","image":null},{"singerId":"1115604041","singerName":"李鑫一","image":null},{"singerId":"1115604042","singerName":"吴季峰","image":null},{"singerId":"1125245522","singerName":"高瀚宇","image":null},{"singerId":"5206","singerName":"张远","image":null},{"singerId":"1002640801","singerName":"彭楚粤","image":null}]},{"songId":"1130155690","songName":"情非得已","albumsPicUrl":null,"copyrightId":"60071702557","image":"//cdnmusic.migu.cn/picture/2020/0302/1942/ASfd9bcd2ce6c41f372b1cda42d1c3f67b.jpg","duration":"00:03:54","playCount":null,"albumId":"1130155689","albumName":"情非得已","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106646794","singerName":"曾惜","image":null}]},{"songId":"1130152773","songName":"眠冬","albumsPicUrl":null,"copyrightId":"69917704300","image":"//cdnmusic.migu.cn/picture/2020/0302/1942/AS75674314ba2548a6200370ba5bc2a3db.jpg","duration":"00:03:36","playCount":null,"albumId":"1130159366","albumName":"眠冬","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1112497367","singerName":"黄明昊Justin","image":null},{"singerId":"1002146864","singerName":"满舒克","image":null}]},{"songId":"1130147379","songName":"情深深雨濛濛","albumsPicUrl":null,"copyrightId":"69905303434","image":"//cdnmusic.migu.cn/picture/2020/0228/2235/AS1b35883aeb7ac8dcaffb538866998522.jpg","duration":"00:03:16","playCount":null,"albumId":"1130147377","albumName":"王牌对王牌第五季第二期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"359","singerName":"苏有朋","image":null},{"singerId":"1001621050","singerName":"王琳","image":null},{"singerId":"1002176869","singerName":"寇振海","image":null},{"singerId":"1130147378","singerName":"徐幸","image":null},{"singerId":"276","singerName":"古巨基","image":null}]},{"songId":"1130142709","songName":"不枉年少","albumsPicUrl":null,"copyrightId":"63274311730","image":"//cdnmusic.migu.cn/picture/2020/0226/1621/AS68af76b83ab35d135088c5f7ed2e6e8b.jpg","duration":"00:02:52","playCount":null,"albumId":"1130053324","albumName":"不枉年少","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000008196","singerName":"孙子涵","image":null}]},{"songId":"1130155684","songName":"无心(电视剧《无心法师3》同名推广曲)","albumsPicUrl":null,"copyrightId":"63388708797","image":"//cdnmusic.migu.cn/picture/2020/0301/2335/AS872febc2ca78df1d94faf9b0202bc362.jpg","duration":"00:04:28","playCount":null,"albumId":"1130155682","albumName":"无心","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1108108136","singerName":"沈以诚","image":null}]},{"songId":"1130155681","songName":"外面的世界","albumsPicUrl":null,"copyrightId":"63273403081","image":"//cdnmusic.migu.cn/picture/2020/0301/2335/ASf9b0386d9236d091d7c93890b116862f.jpg","duration":"00:03:48","playCount":null,"albumId":"1130155680","albumName":"外面的世界","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1125409913","singerName":"NYA奈亚","image":null}]},{"songId":"1130151532","songName":"我知道我可以","albumsPicUrl":null,"copyrightId":"6008460GKFV","image":"//cdnmusic.migu.cn/picture/2020/0304/0928/AS47c979549e8118efd58b57a442f790de.jpg","duration":"00:03:55","playCount":null,"albumId":"1130151531","albumName":"少年红星1号","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1130151530","singerName":"少年红星群星","image":null}]},{"songId":"1130155675","songName":"长城如是歌","albumsPicUrl":null,"copyrightId":"64380800535","image":"//cdnmusic.migu.cn/picture/2020/0302/1421/ASebdf208bb8b6cff8c55678ab6fefc488.jpg","duration":"00:05:08","playCount":null,"albumId":"1130151469","albumName":"长城如是歌","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001210308","singerName":"王晓天","image":null}]},{"songId":"1130140772","songName":"Let You Know","albumsPicUrl":null,"copyrightId":"63274311729","image":"//cdnmusic.migu.cn/picture/2020/0301/0928/AS66897e5cc807ee0a1862f43196a3034d.jpg","duration":"00:02:39","playCount":null,"albumId":"1130067017","albumName":"人生中遇到的美景","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1130066527","singerName":"阿斑","image":null}]},{"songId":"1130143140","songName":"半夏夜(网剧《医妃难囚3》插曲)","albumsPicUrl":null,"copyrightId":"63388708795","image":"//cdnmusic.migu.cn/picture/2020/0228/2356/AS65c4385e4b5506e126e493baa1fa7810.jpg","duration":"00:03:16","playCount":null,"albumId":"1130151134","albumName":"《医妃难囚3》网络剧原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1130143244","singerName":"高阳","image":null},{"singerId":"1130143137","singerName":"陆怡璇","image":null}]},{"songId":"1130101297","songName":"透明的存在（电视剧《完美关系》插曲）","albumsPicUrl":null,"copyrightId":"69911701387","image":"//cdnmusic.migu.cn/picture/2020/0217/1642/AS9db8c00f2fb795d244b250dd4d3f29d1.jpg","duration":"00:04:20","playCount":null,"albumId":"1130101294","albumName":"《完美关系》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000131604","singerName":"许靖韵","image":null}]},{"songId":"1130122664","songName":"抱歉","albumsPicUrl":null,"copyrightId":"6005973LY2H","image":"//cdnmusic.migu.cn/picture/2020/0227/1500/ASe53bf77344eed199f9f71fdc1cce0b56.jpg","duration":"00:04:12","playCount":null,"albumId":"1130122663","albumName":"抱歉","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1110317557","singerName":"文兆杰","image":null}]}]},{"groupName":"欧美","items":[{"songId":"1130166746","songName":"Never Worn White","albumsPicUrl":null,"copyrightId":"6005662LX8J","image":"//cdnmusic.migu.cn/picture/2020/0305/1842/AS39b540dd5e8f9aadb831dc0a091e86bd.jpg","duration":"00:03:45","playCount":null,"albumId":"1130166745","albumName":"Never Worn White","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"62541","singerName":"Katy Perry","image":null}]},{"songId":"1130167030","songName":"SUGAR (Remix) [feat. Dua Lipa]","albumsPicUrl":null,"copyrightId":"6005973LZLH","image":"//cdnmusic.migu.cn/picture/2020/0305/2335/ASccbdebce99a6895cbadb8e181f804ecf.jpg","duration":"00:03:42","playCount":null,"albumId":"1130167029","albumName":"SUGAR (Remix) [feat. Dua Lipa]","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1108717784","singerName":"Brockhampton","image":null},{"singerId":"1002295332","singerName":"Dua Lipa","image":null}]},{"songId":"1130167032","songName":"Today and Tomorrow (From Disney's Stargirl)","albumsPicUrl":null,"copyrightId":"6005973LZ9E","image":"//cdnmusic.migu.cn/picture/2020/0305/2335/ASc9f251404cc3dc5ba3dc34b5ba089476.jpg","duration":"00:04:28","playCount":null,"albumId":"1130167031","albumName":"Today and Tomorrow (From Disney's Stargirl)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1004676065","singerName":"Grace Vanderwaal","image":null}]},{"songId":"1130140448","songName":"The Other Side","albumsPicUrl":null,"copyrightId":"6005973LYJ8","image":"//cdnmusic.migu.cn/picture/2020/0227/1821/AS59dcc7ebb622658676775b48c0a256b3.jpg","duration":"00:03:08","playCount":null,"albumId":"1130140447","albumName":"The Other Side","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002632867","singerName":"SZA","image":null},{"singerId":"35272","singerName":"Justin Timberlake","image":null}]},{"songId":"1115814962","songName":"Never Seen The Rain","albumsPicUrl":null,"copyrightId":"6005751X5MH","image":"//cdnmusic.migu.cn/picture/2019/0812/0914/ASc887b6b78645426cba27c1c2e6cd50aa.jpg","duration":"00:03:20","playCount":"41","albumId":"1115814960","albumName":"Never Seen The Rain","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1115814957","singerName":"Tones and I","image":null}]},{"songId":"1130104609","songName":"The Man(Live From Paris)","albumsPicUrl":null,"copyrightId":"6005662LHS9","image":"//cdnmusic.migu.cn/picture/2020/0228/1135/AS7109eb80252cdd36e5ccd1c98c623eb9.jpg","duration":"00:03:39","playCount":null,"albumId":"1130104608","albumName":"The Man(Live From Paris)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"288906","singerName":"Taylor Swift","image":null}]},{"songId":"1130067269","songName":"To Die For","albumsPicUrl":null,"copyrightId":"6005662LF3R","image":"//cdnmusic.migu.cn/picture/2020/0217/1549/AS85f0054830e2c7afe56afef0d16f43a1.jpg","duration":"00:03:13","playCount":null,"albumId":"1130067268","albumName":"To Die For","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001212524","singerName":"Sam Smith","image":null}]},{"songId":"1130067385","songName":"Selfish","albumsPicUrl":null,"copyrightId":"6005973LWSU","image":"//cdnmusic.migu.cn/picture/2020/0214/1528/AS645c36a51754df8292a9703d39e52f03.jpg","duration":"00:03:43","playCount":null,"albumId":"1130067384","albumName":"Selfish","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002460843","singerName":"Madison Beer","image":null}]},{"songId":"1130067137","songName":"No Time To Die(电影《007：无暇赴死》主题曲)","albumsPicUrl":null,"copyrightId":"6005662LD54","image":"//cdnmusic.migu.cn/picture/2020/0216/1135/ASfba2dfdaf12f029efcb2a1f9f7e12ca6.jpg","duration":"00:04:02","playCount":null,"albumId":"1130067200","albumName":"No Time To Die","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1004671982","singerName":"Billie Eilish","image":null}]},{"songId":"1130050702","songName":"Ohio","albumsPicUrl":null,"copyrightId":"6005973LVQM","image":"//cdnmusic.migu.cn/picture/2020/0213/2336/ASc04952473f9ae251d6e181f97b2a1c24.jpg","duration":"00:04:53","playCount":null,"albumId":"1115608492","albumName":"Cheap Queen","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1109331873","singerName":"King Princess","image":null}]},{"songId":"1129990756","songName":"Know Your Worth","albumsPicUrl":null,"copyrightId":"6005973LV3B","image":"//cdnmusic.migu.cn/picture/2020/0205/0114/AS150c9e1963772b82abfce8a33be397c7.jpg","duration":"00:03:01","playCount":null,"albumId":"1129990755","albumName":"Know Your Worth","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000235725","singerName":"Disclosure","image":null},{"singerId":"1004472452","singerName":"Khalid","image":null}]},{"songId":"1129993959","songName":"Long Road Drive","albumsPicUrl":null,"copyrightId":"69908709269","image":"//cdnmusic.migu.cn/picture/2020/0303/1828/ASf0dbbdf4e86912d8e08529adc74eb3a9.jpg","duration":"00:05:15","playCount":null,"albumId":"1129993958","albumName":"Long Road Drive","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001859097","singerName":"LANCE","image":null}]},{"songId":"1129936232","songName":"Physical","albumsPicUrl":null,"copyrightId":"6005752BVXV","image":"//cdnmusic.migu.cn/picture/2020/0131/1656/AScfbdd92babc790eb3834a2d722765202.jpg","duration":"00:03:13","playCount":null,"albumId":"1129936231","albumName":"Physical","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002295332","singerName":"Dua Lipa","image":null}]},{"songId":"1129758004","songName":"Blue Birds","albumsPicUrl":null,"copyrightId":"69916801395","image":"//cdnmusic.migu.cn/picture/2020/0123/2335/AS11f7ba03cf07cf69eb595d6f7dcd6337.jpg","duration":"00:03:09","playCount":null,"albumId":"1129758003","albumName":"Blue Birds","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1110244817","singerName":"纪仪羚","image":null}]},{"songId":"1129640829","songName":"Stay Calm","albumsPicUrl":null,"copyrightId":"69918301349","image":"//cdnmusic.migu.cn/picture/2020/0109/1035/ASb9325d9152c143bc9e9f5c01896779a9.jpg","duration":"00:03:35","playCount":"12","albumId":"1129640828","albumName":"Stay Calm","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002179876","singerName":"刘逸云 Amber Liu","image":null}]},{"songId":"1128505822","songName":"Alone, Pt. II","albumsPicUrl":null,"copyrightId":"6005973LNFX","image":"//cdnmusic.migu.cn/picture/2019/1227/1156/ASaaaff06bf3b74f22a74aa15a9fb63e04.jpg","duration":"00:02:59","playCount":"467","albumId":"1128505820","albumName":"Alone, Pt. II","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002638961","singerName":"Alan Walker","image":null},{"singerId":"1106878017","singerName":"Ava Max","image":null}]},{"songId":"1126313798","songName":"Memory (电影《猫》插曲)","albumsPicUrl":null,"copyrightId":"6005662JEB3","image":"//cdnmusic.migu.cn/picture/2019/1223/1656/AS503c565ab7fb49e8a9f582961e98c5a3.jpg","duration":"00:04:24","playCount":"117","albumId":"1125833307","albumName":"Memory","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"128203","singerName":"Jennifer Hudson","image":null}]},{"songId":"1125481488","songName":"Billboard","albumsPicUrl":null,"copyrightId":"6005662J8ZC","image":"//cdnmusic.migu.cn/picture/2019/1219/1128/AScaf45d24216a44a5bcc28b034c48a792.jpg","duration":"00:02:52","playCount":"184","albumId":"1125481487","albumName":"Billboard","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002942148","singerName":"陈梓童","image":null},{"singerId":"1002702551","singerName":"Jonas Blue","image":null}]},{"songId":"1125454998","songName":"Adore You","albumsPicUrl":null,"copyrightId":"6005971K06U","image":"//cdnmusic.migu.cn/picture/2019/1206/1942/ASc6ac199c0380487495cbad7cef9db2a6.jpg","duration":"00:03:27","playCount":"1135","albumId":"1125489268","albumName":"Fine Line","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001067736","singerName":"Harry Styles","image":null}]},{"songId":"1125454895","songName":"Christmas Tree Farm","albumsPicUrl":null,"copyrightId":"6005662J7ZZ","image":"//cdnmusic.migu.cn/picture/2019/1220/2042/AS1f4867c04e724ead8a5725a99f275ad9.jpg","duration":"00:03:48","playCount":"11053","albumId":"1125454894","albumName":"Christmas Tree Farm","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"288906","singerName":"Taylor Swift","image":null}]},{"songId":"1125451169","songName":"First Man","albumsPicUrl":null,"copyrightId":"6005971K002","image":"//cdnmusic.migu.cn/picture/2019/1213/0856/AS64f5dac302ca415c936eeb6510dd32ee.jpg","duration":"00:03:48","playCount":"289","albumId":"1125451167","albumName":"Romance (Explicit)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002637157","singerName":"Camila Cabello","image":null}]},{"songId":"1125280736","songName":"A Hand For Mrs. Claus","albumsPicUrl":null,"copyrightId":"6005662J39E","image":"//cdnmusic.migu.cn/picture/2020/0226/1428/AS19635165a99d57c7c6ca7010aea2d61e.jpg","duration":"00:02:29","playCount":"189","albumId":"1125415221","albumName":"A Hand For Mrs. Claus","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"52735","singerName":"Idina Menzel","image":null},{"singerId":"1000237276","singerName":"Ariana Grande","image":null}]},{"songId":"1125395200","songName":"Safe Zone","albumsPicUrl":null,"copyrightId":"6005971JX8R","image":"//cdnmusic.migu.cn/picture/2019/1127/0914/AS5f959fe0744b4b639bf8997d74ad9d60.jpg","duration":"00:02:35","playCount":"430","albumId":"1125395199","albumName":"Safe Zone","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1118557993","singerName":"Lonr.","image":null}]},{"songId":"1125307059","songName":"DAZZLE","albumsPicUrl":null,"copyrightId":"69918301290","image":"//cdnmusic.migu.cn/picture/2019/1210/0907/ASae2cdf8d19164c789b6b7492d5aeae5a.jpg","duration":"00:03:14","playCount":"108","albumId":"1125405355","albumName":"马戏团","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1125309279","singerName":"Yellow","image":null}]},{"songId":"1125380349","songName":"Beautiful Ghosts(电影《猫》主题曲)","albumsPicUrl":null,"copyrightId":"6005662HT0G","image":"//cdnmusic.migu.cn/picture/2019/1230/1043/ASa59683c5e99e4944b22f24b4962f547b.jpg","duration":"00:04:21","playCount":"13563","albumId":"1126313561","albumName":"《猫》电影原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"288906","singerName":"Taylor Swift","image":null}]},{"songId":"1125383794","songName":"Watermelon Sugar","albumsPicUrl":null,"copyrightId":"6005971JVW9","image":"//cdnmusic.migu.cn/picture/2019/1121/1014/AS61b26c2e34cf4b6f8a5c922afc8e48b3.jpg","duration":"00:02:54","playCount":"2736","albumId":"1125489268","albumName":"Fine Line","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001067736","singerName":"Harry Styles","image":null}]},{"songId":"1125375896","songName":"Lover (Remix)","albumsPicUrl":null,"copyrightId":"6005662HSFK","image":"//cdnmusic.migu.cn/picture/2019/1120/0842/AS17c0f123befb4ca59ca502c092113099.jpg","duration":"00:03:41","playCount":"19415","albumId":"1125375895","albumName":"Lover(Remix)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"288906","singerName":"Taylor Swift","image":null},{"singerId":"1001855806","singerName":"Shawn Mendes","image":null}]},{"songId":"1118752189","songName":"The Last Time","albumsPicUrl":null,"copyrightId":"6005971JTBN","image":"//cdnmusic.migu.cn/picture/2019/1108/1335/AS4edee4636a2c41c28eba243b67cfe77f.jpg","duration":"00:03:16","playCount":"2892","albumId":"1118752186","albumName":"The Last Time","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"127878","singerName":"The Script","image":null}]},{"songId":"1125370198","songName":"HERE (For Christmas)","albumsPicUrl":null,"copyrightId":"6005751XU7X","image":"//cdnmusic.migu.cn/picture/2019/1113/1735/AS68566d3646cf4047a0712ee84aad80de.jpg","duration":"00:04:00","playCount":"291","albumId":"1125370194","albumName":"HERE (For Christmas)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002539819","singerName":"Lukas Graham","image":null}]},{"songId":"1125362851","songName":"Million Ways","albumsPicUrl":null,"copyrightId":"6005662HPN1","image":"//cdnmusic.migu.cn/picture/2019/1113/1735/ASf61ed603cc5e40fd953d985f18270720.jpg","duration":"00:02:49","playCount":"180","albumId":"1125362850","albumName":"Million Ways","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106774598","singerName":"HRVY","image":null}]},{"songId":"1125362924","songName":"Tabú","albumsPicUrl":null,"copyrightId":"6005751XTE5","image":"//cdnmusic.migu.cn/picture/2020/0131/1228/AS1f9ad1b72dd1c56e9bd01a7ed164fbc3.jpg","duration":"00:02:59","playCount":"57","albumId":"1129933729","albumName":"Tabú EP","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106878017","singerName":"Ava Max","image":null},{"singerId":"1001526421","singerName":"Pablo Alboran","image":null}]},{"songId":"1125359716","songName":"Workin' On It","albumsPicUrl":null,"copyrightId":"6005971JSHY","image":"//cdnmusic.migu.cn/picture/2020/0131/1107/ASdd33c295397ad988534401d15846b643.jpg","duration":"00:03:01","playCount":"754","albumId":"1129936276","albumName":"TREAT MYSELF(Explicit)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1003030863","singerName":"Lennon Stella","image":null},{"singerId":"1002370589","singerName":"Sasha Sloan","image":null},{"singerId":"1001557065","singerName":"Meghan Trainor","image":null}]},{"songId":"1125346598","songName":"Everyday Life (Clean)","albumsPicUrl":null,"copyrightId":"6005751XT2B","image":"//cdnmusic.migu.cn/picture/2019/1128/0900/AS901e00e2b4be4d3895d6a2deb4f64354.jpg","duration":"00:04:18","playCount":"5056","albumId":"1125397815","albumName":"Everyday Life (Clean)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"290851","singerName":"Coldplay","image":null}]},{"songId":"1118558487","songName":"Don't Call Me Angel (Charlie's Angels)(电影《霹雳娇娃》主题曲)","albumsPicUrl":null,"copyrightId":"6005662HKQG","image":"//cdnmusic.migu.cn/picture/2019/1108/1756/ASb5bae1cf7b4045dea7049939f1694c71.jpg","duration":"00:03:10","playCount":"4826","albumId":"1125342641","albumName":"《霹雳娇娃》电影原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"121495","singerName":"Miley Cyrus","image":null},{"singerId":"1086531","singerName":"Lana Del Rey","image":null},{"singerId":"1000237276","singerName":"Ariana Grande","image":null}]},{"songId":"1125340061","songName":"Used To Love","albumsPicUrl":null,"copyrightId":"6005971JSD5","image":"//cdnmusic.migu.cn/picture/2020/0221/1807/AS55b014a0d5570ee16574d1d61d31b705.jpg","duration":"00:03:56","playCount":"799","albumId":"1125340059","albumName":"Used To Love","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001064196","singerName":"Martin Garrix","image":null},{"singerId":"1004529680","singerName":"Dean Lewis","image":null}]},{"songId":"1125342570","songName":"I Feel Love","albumsPicUrl":null,"copyrightId":"6005662HKTC","image":"//cdnmusic.migu.cn/picture/2019/1219/1121/AScb2771038b064ebbbeaf4fa05b214185.jpg","duration":"00:04:14","playCount":"2474","albumId":"1125342569","albumName":"I Feel Love","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001212524","singerName":"Sam Smith","image":null}]}]},{"groupName":"日韩","items":[{"songId":"1129640784","songName":"素晴らしき嘘(电视剧《不知道就好的事》主题曲)","albumsPicUrl":null,"copyrightId":"60070101819","image":"//cdnmusic.migu.cn/picture/2020/0115/0856/AS95a5058dcbc68cc333a23bc71accca94.jpg","duration":"00:03:41","playCount":"39","albumId":"1129640783","albumName":"素晴らしき嘘","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000130530","singerName":"Flumpool","image":null}]},{"songId":"1129640786","songName":"ネバーマインド(动漫《鸭子的天空》片头曲)","albumsPicUrl":null,"copyrightId":"60070101818","image":"//cdnmusic.migu.cn/picture/2020/0115/0856/AS95a5058dcbc68cc333a23bc71accca94.jpg","duration":"00:03:49","playCount":"183","albumId":"1129640785","albumName":"ネバーマインド","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000130530","singerName":"Flumpool","image":null}]},{"songId":"1129639896","songName":"Possible(电视剧《传奇王子2：贵族诞生》主题曲)","albumsPicUrl":null,"copyrightId":"69931134651","image":"//cdnmusic.migu.cn/picture/2020/0114/1449/AS0dc098c1e2baa732436f0cae8b69efd9.jpg","duration":"00:04:43","playCount":"11","albumId":"1129639894","albumName":"Possible","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106619929","singerName":"片寄涼太","image":null}]},{"songId":"1115776023","songName":"DO ME","albumsPicUrl":null,"copyrightId":"69931133025","image":"//cdnmusic.migu.cn/picture/2019/1122/1714/ASb2facf82646a4022a3d88dd1a817a90f.jpg","duration":"00:03:22","playCount":"134","albumId":"1125375050","albumName":"re(CORD)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1077","singerName":"倖田來未","image":null}]},{"songId":"1125299303","songName":"GET NAKED","albumsPicUrl":null,"copyrightId":"69931133674","image":"//cdnmusic.migu.cn/picture/2019/1114/0007/ASa398bdd402804980a100afdaffeb31b6.jpg","duration":"00:03:20","playCount":"179","albumId":"1125375050","albumName":"re(CORD)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1077","singerName":"倖田來未","image":null}]},{"songId":"1125363544","songName":"Same Here","albumsPicUrl":null,"copyrightId":"69908708523","image":"//cdnmusic.migu.cn/picture/2020/0114/2242/AS284139d4221e685eee10eb614b06cd75.jpg","duration":"00:03:20","playCount":"166","albumId":"1125363543","albumName":"Same Here","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1125363542","singerName":"慎惠仁","image":null}]},{"songId":"1125345677","songName":"浪漫と算盤 (LDN ver.)","albumsPicUrl":null,"copyrightId":"6005662HKV3","image":"//cdnmusic.migu.cn/picture/2019/1120/0842/AS13c35805cdd64fc594daf9be7b90acb4.jpg","duration":"00:04:26","playCount":"3155","albumId":"1125375764","albumName":"ニュートンの林檎 ～初めてのベスト盤～","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000008502","singerName":"椎名林檎","image":null},{"singerId":"1530","singerName":"宇多田ヒカル","image":null}]},{"songId":"1115848570","songName":"Home","albumsPicUrl":null,"copyrightId":"64381227693","image":"//cdnmusic.migu.cn/picture/2019/1031/0448/AS4ea31939bb554246a38848f2ff084a48.jpg","duration":"00:04:31","playCount":"284","albumId":"1115848593","albumName":"Home","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001847524","singerName":"ruvin","image":null},{"singerId":"1115848569","singerName":"文珽逅","image":null}]},{"songId":"1115837278","songName":"Hush","albumsPicUrl":null,"copyrightId":"63890704508","image":"//cdnmusic.migu.cn/picture/2019/1111/1756/ASda4f2514f9fd40a6a263cb11e6906fe3.jpg","duration":"00:02:44","playCount":"554","albumId":"1115837334","albumName":"HUSH","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1108917271","singerName":"EVERGLOW","image":null}]},{"songId":"1115807714","songName":"海が导く梦","albumsPicUrl":null,"copyrightId":"63273402870","image":"//cdnmusic.migu.cn/picture/2019/0807/1121/AS8a087652624a4bdc9c76286816c52f35.jpg","duration":"00:04:07","playCount":"364","albumId":"1115807707","albumName":"愛者~Kanasha~","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"68999","singerName":"中孝介","image":null}]},{"songId":"1115800066","songName":"Promise","albumsPicUrl":null,"copyrightId":"6005971J7ZS","image":"//cdnmusic.migu.cn/picture/2019/1031/0444/AS8156a76b91444c4faac80b578af05a01.jpg","duration":"00:03:39","playCount":"483","albumId":"1115800065","albumName":"Promise","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001572735","singerName":"P.O","image":null},{"singerId":"1002255111","singerName":"宋旻浩","image":null}]},{"songId":"1115797872","songName":"月色ホライズン (chill out ver.)","albumsPicUrl":null,"copyrightId":"6005662FCKD","image":"//cdnmusic.migu.cn/picture/2019/0807/1614/AS0733cc40773744fe985c83dc0581e8cb.jpg","duration":"00:03:58","playCount":"142","albumId":"1115797865","albumName":"月色ホライズン(chill out ver.)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002672313","singerName":"[Alexandros]","image":null}]},{"songId":"1115778355","songName":"Color","albumsPicUrl":null,"copyrightId":"6005971J6CT","image":"//cdnmusic.migu.cn/picture/2019/1031/0443/ASce47cc0942c841d09c44439a27979f1d.jpg","duration":"00:02:56","playCount":"411","albumId":"1115785068","albumName":"color on me","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1115785061","singerName":"姜丹尼尔","image":null}]},{"songId":"1115722843","songName":"Lights","albumsPicUrl":null,"copyrightId":"6005662EV5R","image":"//cdnmusic.migu.cn/picture/2019/0703/1642/ASb836ff2b5a3b4c03a068f4d32ee8a4c2.jpg","duration":"00:04:52","playCount":"1661","albumId":"1115722840","albumName":"Lights / Boy With Luv","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000350210","singerName":"防弹少年团","image":null}]},{"songId":"1115703503","songName":"Call","albumsPicUrl":null,"copyrightId":"6005751WN9R","image":"//cdnmusic.migu.cn/picture/2019/1031/0439/ASb9201195dd65448381f1f040cc0dc1c7.jpg","duration":"00:02:59","playCount":"181","albumId":"1115773630","albumName":"Never Grow Up","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1107703376","singerName":"ちゃんみな","image":null}]},{"songId":"1115540015","songName":"에덴","albumsPicUrl":null,"copyrightId":"63273402801","image":"//cdnmusic.migu.cn/picture/2019/0524/1142/AS7d3736ab3ecf4843bf8595297d063d95.jpg","duration":"00:03:46","playCount":"138","albumId":"1115540009","albumName":"RE:IZ","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1115369151","singerName":"IZ","image":null}]},{"songId":"1115353305","songName":"バナノヒ～BANAの日～","albumsPicUrl":null,"copyrightId":"6005661VAXB","image":"//cdnmusic.migu.cn/picture/2019/0930/1208/ASfc7f897b9cd54a678ec78463c08235b2.jpg","duration":"00:03:45","playCount":"434","albumId":"1115353304","albumName":"バナノヒ～BANAの日～","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000018710","singerName":"B1A4","image":null}]},{"songId":"1115288429","songName":"Moon","albumsPicUrl":null,"copyrightId":"63890704463","image":"//cdnmusic.migu.cn/picture/2019/0318/2235/AS48ed2fb9d6bc447692893ac7c7b61430.jpg","duration":"00:03:14","playCount":"873","albumId":"1115288426","albumName":"ARRIVAL OF EVERGLOW","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1108917271","singerName":"EVERGLOW","image":null}]},{"songId":"1114910286","songName":"エンド","albumsPicUrl":null,"copyrightId":"60076262809","image":"//cdnmusic.migu.cn/picture/2020/0102/1928/ASae28f92a50994778b755f5db3c0985b6.jpg","duration":"00:04:57","playCount":"348","albumId":"1114910281","albumName":"虚構集","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1108808848","singerName":"Reol","image":null}]},{"songId":"1113475014","songName":"I Love You","albumsPicUrl":null,"copyrightId":"6005971FPZL","image":"//cdnmusic.migu.cn/picture/2018/1122/0928/AS9405bdc7fcfb4a0da489787f325116f8.jpg","duration":"00:03:14","playCount":"1188","albumId":"1113475013","albumName":"I Love You","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000288190","singerName":"EXID","image":null}]},{"songId":"1112602424","songName":"Waste It On Me","albumsPicUrl":null,"copyrightId":"6005970YDGG","image":"//cdnmusic.migu.cn/picture/2019/1031/0350/AS1dcce0aed42f447ba6a19c9c384913eb.jpg","duration":"00:03:12","playCount":"1463","albumId":"1112602422","albumName":"Waste It On Me","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000425583","singerName":"Steve Aoki","image":null},{"singerId":"1000350210","singerName":"防弹少年团","image":null}]},{"songId":"1111916274","songName":"BLACK SWAN","albumsPicUrl":null,"copyrightId":"6005661CATL","image":"//cdnmusic.migu.cn/picture/2019/1106/1935/AS8e72ad7d76f5476397b1f68fa37a6020.jpg","duration":"00:03:26","playCount":"515","albumId":"1115841197","albumName":"Phenomenon","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002217989","singerName":"Monsta X","image":null}]},{"songId":"1108720963","songName":"Offset","albumsPicUrl":null,"copyrightId":"63682647527","image":"//cdnmusic.migu.cn/picture/2019/1106/2007/AS9b59c80ecf7c4c1c922ac9464cb2859f.jpg","duration":"00:01:09","playCount":"429","albumId":"1108720951","albumName":"Offset","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1104941201","singerName":"金请夏","image":null}]},{"songId":"1111014459","songName":"Soulmate","albumsPicUrl":null,"copyrightId":"6005979Z01R","image":"//cdnmusic.migu.cn/picture/2019/1031/0346/ASf860662f2e91487c9352e6f3a02c5551.jpg","duration":"00:03:39","playCount":"4206","albumId":"1111014458","albumName":"Soulmate","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000331596","singerName":"IU","image":null},{"singerId":"1002041776","singerName":"Zico","image":null}]},{"songId":"1109814730","songName":"これから (从今以后)","albumsPicUrl":null,"copyrightId":"6005660Y0XR","image":"//cdnmusic.migu.cn/picture/2019/0930/1221/AS09d82aa45beb485e9d19c7d1df674e82.jpg","duration":"00:05:14","playCount":"710","albumId":"1109814726","albumName":"これから","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002682100","singerName":"平原绫香","image":null}]},{"songId":"1109450400","songName":"Dreams Come True","albumsPicUrl":null,"copyrightId":"63890704381","image":"//cdnmusic.migu.cn/picture/2018/0410/0849/AS040a59f66a1945c3b36d837567fd46a0.jpg","duration":"00:03:45","playCount":"1957","albumId":"1109450377","albumName":"Dream your dream","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002741863","singerName":"宇宙少女","image":null}]},{"songId":"1107696570","songName":"你的季节","albumsPicUrl":null,"copyrightId":"63682640301","image":"//cdnmusic.migu.cn/picture/2019/1106/1921/AS745305e471424b45ad1579229792daf9.jpg","duration":"00:04:18","playCount":"163","albumId":"1107853735","albumName":"Life","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000287848","singerName":"郑东河","image":null}]},{"songId":"1108721521","songName":"Delusion (Duet With 李孝利)","albumsPicUrl":null,"copyrightId":"6991290CJLX","image":"//cdnmusic.migu.cn/picture/2018/0410/0849/AS255d0e2db9254ad9aa8fd4e0c009b73e.jpg","duration":"00:03:26","playCount":"75","albumId":"1109903162","albumName":"The Cloud Dream of the Nine","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1373","singerName":"李孝利","image":null},{"singerId":"33745","singerName":"严正花","image":null}]},{"songId":"1109918582","songName":"阵雨","albumsPicUrl":null,"copyrightId":"63682654805","image":"//cdnmusic.migu.cn/picture/2019/1031/0328/AS7502504cb96440a3975bfd68ebf126d3.jpg","duration":"00:03:25","playCount":"837","albumId":"1109918592","albumName":"阵雨","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000704439","singerName":"龙俊亨","image":null},{"singerId":"1000287925","singerName":"10cm","image":null}]},{"songId":"1110333501","songName":"Feeling","albumsPicUrl":null,"copyrightId":"6005661AGPW","image":"//cdnmusic.migu.cn/picture/2019/1031/0336/AS1806425303d84a9a9279e990e8fa6dba.jpg","duration":"00:03:22","playCount":"611","albumId":"1110333500","albumName":"A la carte","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1087842","singerName":"赤西仁","image":null}]},{"songId":"1108716562","songName":"주인공 (Heroine)","albumsPicUrl":null,"copyrightId":"63682655370","image":"//cdnmusic.migu.cn/picture/2018/0710/2335/AS6a65ba118e8c45898331cba574da9806.jpg","duration":"00:03:15","playCount":"2002","albumId":"1108720806","albumName":"Heroine","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000290292","singerName":"宣美","image":null}]},{"songId":"1108704737","songName":"不会被抓","albumsPicUrl":null,"copyrightId":"63682646853","image":"//cdnmusic.migu.cn/picture/2018/0409/0849/AS35917fd1edda4c5bada611e78c6dd01f.jpg","duration":"00:03:44","playCount":"183","albumId":"1108730454","albumName":"不会被抓","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106887850","singerName":"Halo","image":null}]},{"songId":"1110226162","songName":"I Want You Back(电影《君主！先发制人！》主题曲)","albumsPicUrl":null,"copyrightId":"6005751DUVR","image":"//cdnmusic.migu.cn/picture/2019/0611/1759/AS71e7638c762f4f61af4023b9e19cabcc.jpg","duration":"00:03:23","playCount":"583","albumId":"1110226156","albumName":"I Want You Back","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"395525","singerName":"TWICE","image":null}]},{"songId":"1109012912","songName":"눈사람","albumsPicUrl":null,"copyrightId":"63682650130","image":"//cdnmusic.migu.cn/picture/2018/0628/1256/AS535a1124038541b88e64dfb9e152ca6b.jpg","duration":"00:03:56","playCount":"926","albumId":"1109392677","albumName":"还有春天","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002147676","singerName":"郑承焕","image":null}]},{"songId":"1108354130","songName":"冬夜のマジック (冬夜的魔法)","albumsPicUrl":null,"copyrightId":"6005751BR12","image":"//cdnmusic.migu.cn/picture/2019/1106/2021/AS0351ce46d236494f827f197f432521b6.jpg","duration":"00:04:16","playCount":"956","albumId":"1108354129","albumName":"冬夜のマジック","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000648666","singerName":"Indigo La End","image":null}]}]}]</script>
<!-- 新碟上架 -->
<div id="album" class="section">
<div class="container">
<div class="section-header">
<h2 class="title">新碟上架</h2>
<a class="more" href="/v3/music/album" target = "_blank">更多<i class="iconfont cf-gengduo"></i></a>
</div>
</div>
<div class="common-swiper-container">
<div class="container">
<div class="swiper-container" id="album-swiper">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130173765" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0310/1428/AS4195f441f94c7387f6a3ef926d62afa5.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="永恒有约" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130173765"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130173765" target = "_blank">永恒有约</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1127996250" target="_blank">天韵合唱团</a>
<span class="update-time">2020-03-10</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130169570" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0306/2221/AS228c06c05d264b6452ece68a30cd6329.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="王牌对王牌第五季第三期" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130169570"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130169570" target = "_blank">王牌对王牌第五季第三期</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1105020388" target="_blank">群星</a>
<span class="update-time">2020-03-06</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130169610" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="歌手·当打之年第五期" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130169610"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130169610" target = "_blank">歌手·当打之年第五期</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1130052785" target="_blank">歌手</a>
<span class="update-time">2020-03-06</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130167005" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0308/2328/ASfe6dcd7408b110a4304c74785eb86763.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="面面" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130167005"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130167005" target = "_blank">面面</a>
</p>
<p class="singer">
<a href="/v3/music/artist/561" target="_blank">苏慧伦</a>
<span class="update-time">2020-03-09</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130168297" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0306/1521/AS1de095ba1d9be83f11e4aa26afe1f5ca.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="轩辕剑伍 一剑凌云山海情" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130168297"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130168297" target = "_blank">轩辕剑伍 一剑凌云山海情</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000609534" target="_blank">轩辕剑</a>
<span class="update-time">2020-03-06</span>
</p>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130055164" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/0935/AS5de5fdac53c6bbee905b41856ee1ea31.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="其后" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130055164"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130055164" target = "_blank">其后</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1110317557" target="_blank">文兆杰</a>
<span class="update-time">2020-03-05</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130162250" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0304/1535/ASeab5d697a1d3bdbba18b19a411987471.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="信心是一种看见" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130162250"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130162250" target = "_blank">信心是一种看见</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1127996250" target="_blank">天韵合唱团</a>
<span class="update-time">2020-03-04</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130161437" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0308/1021/AS5b20fa3a516e55fb1bfed7e6df7a5d6c.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="《两世欢》电视原声" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130161437"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130161437" target = "_blank">《两世欢》电视原声</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1105020388" target="_blank">群星</a>
<span class="update-time">2020-03-04</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130153093" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0229/2142/ASeb88e71b4e09829a2399499e39c681b5.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="天赐的声音精编公益版" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130153093"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130153093" target = "_blank">天赐的声音精编公益版</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1105020388" target="_blank">群星</a>
<span class="update-time">2020-02-29</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130147377" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0228/2235/AS1b35883aeb7ac8dcaffb538866998522.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="王牌对王牌第五季第二期" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130147377"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130147377" target = "_blank">王牌对王牌第五季第二期</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1105020388" target="_blank">群星</a>
<span class="update-time">2020-02-28</span>
</p>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130151134" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0228/2356/AS65c4385e4b5506e126e493baa1fa7810.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="《医妃难囚3》网络剧原声" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130151134"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130151134" target = "_blank">《医妃难囚3》网络剧原声</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1105020388" target="_blank">群星</a>
<span class="update-time">2020-02-29</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130145652" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0228/0935/AS0739fad5dc63b9b1dd53833c12653a49.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="儿歌也疯狂NO.01" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130145652"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130145652" target = "_blank">儿歌也疯狂NO.01</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1125392115" target="_blank">Y星人</a>
<span class="update-time">2020-02-28</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130059036" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0301/1028/AS0ba4adec51b43ce465c84c31fc92cc4c.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="我们就这样吧" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130059036"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130059036" target = "_blank">我们就这样吧</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1115722916" target="_blank">休思</a>
<span class="update-time">2020-02-27</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130140153" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0225/2335/AS8eea22bfe6f5e5caf7c3042b3f380eb7.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="《我在北京等你》电视原声" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130140153"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130140153" target = "_blank">《我在北京等你》电视原声</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1105020388" target="_blank">群星</a>
<span class="update-time">2020-02-26</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130129098" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0222/2314/ASb4eac2501b928812c4995c89f8512e6a.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="《大唐女法医》电视原声" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130129098"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130129098" target = "_blank">《大唐女法医》电视原声</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1105020388" target="_blank">群星</a>
<span class="update-time">2020-02-23</span>
</p>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130127094" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0221/2242/ASfd006591460c3dc03aaec8a08ad05dc4.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="歌手·当打之年第三期" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130127094"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130127094" target = "_blank">歌手·当打之年第三期</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1130052785" target="_blank">歌手</a>
<span class="update-time">2020-02-21</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130129373" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0222/2200/AS0446ee5084a44fbb038e7ae93c992127.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="天赐的声音第二期" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130129373"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130129373" target = "_blank">天赐的声音第二期</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1105020388" target="_blank">群星</a>
<span class="update-time">2020-02-22</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130127780" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0224/1756/AS6501ea3c09629df45456e78982b92876.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="Advantage" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130127780"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130127780" target = "_blank">Advantage</a>
</p>
<p class="singer">
<a href="/v3/music/artist/489636" target="_blank">Mauro Picotto</a>
 / <a href="/v3/music/artist/1125235718" target="_blank">MOOLS</a>
<span class="update-time">2020-02-21</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130123151" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0302/1828/AS711a287a553f58c6abc7c01b334fc414.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="Ordinary Man(Explicit)" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130123151"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130123151" target = "_blank">Ordinary Man(Explicit)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/31562" target="_blank">Ozzy Osbourne</a>
<span class="update-time">2020-02-21</span>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130122797" class="img-box" target = "_blank">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0220/2335/ASaa5b0580808d0491221832516b326dac.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="轩辕剑外传 云之遥" class="img-block lazy-img img-full">
</a>
<i class="album-cover"></i>
<span class="album-play" data-id="1130122797"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="album-name">
<a href="/v3/music/album/1130122797" target = "_blank">轩辕剑外传 云之遥</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000609534" target="_blank">轩辕剑</a>
<span class="update-time">2020-02-21</span>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="slide-action slide-action-left">
<div class="arrow-button arrow-left"></div>
</div>
<div class="slide-action slide-action-right">
<div class="arrow-button arrow-right"></div>
</div>
</div>
<div class="container">
<div class="swiper-pagination" id="album-swiper-pagination"></div>
</div>
</div>
<!-- 咪咕出品 -->
<div id="make" class="section tablist">
<div class="container">
<div class="section-header">
<h2 class="title">咪咕出品</h2>
<ul class="tags">
<li class="active"><a href="javascript:;">咪咕最IN乐</a></li>
<li><a href="javascript:;">乐访</a></li>
<li><a href="javascript:;">音人而异</a></li>
</ul>
<a class="more" href="/v3/music/topic" target = "_blank">更多<i class="iconfont cf-gengduo"></i></a>
</div>
</div>
<div class="common-swiper-container">
<div class="container make-swiper carousel-container">
<ul>
<li>
<div class="carousel-mask"></div>
<a href="http://music.migu.cn/v2/music/topic/8A2B447C16349A17E0530988190A2F64" target = "_blank">
<img src="/b/picture/img_default_800x320.jpg" data-src="/b///cdnmusic.migu.cn/tycms_picture/19/05/151/190531183745664_750x292_4078.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_800x320.jpg'" alt="阅城记：那些别具一格的书香城市" title="阅城记：那些别具一格的书香城市" class="img-block lazy-img img-full">
</a>
</li>
<li>
<div class="carousel-mask"></div>
<a href="http://music.migu.cn/v2/music/topic/83C8B23BEB10E17BE0530988190A6A06" target = "_blank">
<img src="/b/picture/img_default_800x320.jpg" data-src="/b///cdnmusic.migu.cn/tycms_picture/19/03/70/190311095840439_750x292_8712.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_800x320.jpg'" alt="长大后我就成了你" title="长大后我就成了你" class="img-block lazy-img img-full">
</a>
</li>
<li>
<div class="carousel-mask"></div>
<a href="http://music.migu.cn/v2/music/topic/824AC8E88EE1B29CE0530988190A41D8" target = "_blank">
<img src="/b/picture/img_default_800x320.jpg" data-src="/b///cdnmusic.migu.cn/tycms_picture/19/02/51/190220102845516_700x280_4576.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_800x320.jpg'" alt="您的好友中戏小鲜肉已上线，速速来嗑" title="您的好友中戏小鲜肉已上线，速速来嗑" class="img-block lazy-img img-full">
</a>
</li>
<li>
<div class="carousel-mask"></div>
<a href="http://music.migu.cn/v2/music/topic/807CF76C12797077E0530988190A1041" target = "_blank">
<img src="/b/picture/img_default_800x320.jpg" data-src="/b///cdnmusic.migu.cn/tycms_picture/19/01/31/190131143438146_700x280_2255.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_800x320.jpg'" alt="白蛇" title="白蛇" class="img-block lazy-img img-full">
</a>
</li>
<li>
<div class="carousel-mask"></div>
<a href="http://music.migu.cn/v2/music/topic/80A4F63794ABD57FE0530988190AD191" target = "_blank">
<img src="/b/picture/img_default_800x320.jpg" data-src="/b///cdnmusic.migu.cn/tycms_picture/19/01/30/190130150724370_700x280_1006.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_800x320.jpg'" alt="四个春天" title="四个春天" class="img-block lazy-img img-full">
</a>
</li>
</ul>
</div>
<div class="slide-action slide-action-left">
<div class="arrow-button arrow-left"></div>
</div>
<div class="slide-action slide-action-right">
<div class="arrow-button arrow-right"></div>
</div>
</div>
<div class="container">
<div class="swiper-pagination" id="make-swiper-pagination"></div>
</div>
</div>
<script type="text/html" id="migumakeData">
[{"groupName":"咪咕最IN乐","items":[{"title":"阅城记：那些别具一格的书香城市","info":"阅城记：那些别具一格的书香城市","image":"//cdnmusic.migu.cn/tycms_picture/19/05/151/190531183745664_750x292_4078.jpg","url":"http://music.migu.cn/v2/music/topic/8A2B447C16349A17E0530988190A2F64"},{"title":"长大后我就成了你","info":"长大后我就成了你","image":"//cdnmusic.migu.cn/tycms_picture/19/03/70/190311095840439_750x292_8712.jpg","url":"http://music.migu.cn/v2/music/topic/83C8B23BEB10E17BE0530988190A6A06"},{"title":"您的好友中戏小鲜肉已上线，速速来嗑","info":"您的好友中戏小鲜肉已上线，速速来嗑","image":"//cdnmusic.migu.cn/tycms_picture/19/02/51/190220102845516_700x280_4576.jpg","url":"http://music.migu.cn/v2/music/topic/824AC8E88EE1B29CE0530988190A41D8"},{"title":"白蛇","info":"白蛇：缘起","image":"//cdnmusic.migu.cn/tycms_picture/19/01/31/190131143438146_700x280_2255.jpg","url":"http://music.migu.cn/v2/music/topic/807CF76C12797077E0530988190A1041"},{"title":"四个春天","info":"四个春天","image":"//cdnmusic.migu.cn/tycms_picture/19/01/30/190130150724370_700x280_1006.jpg","url":"http://music.migu.cn/v2/music/topic/80A4F63794ABD57FE0530988190AD191"}]},{"groupName":"乐访","items":[{"title":"黄妍：女生的悄悄话，她唱给你听","info":"黄妍：女生的悄悄话，她唱给你听","image":"//cdnmusic.migu.cn/tycms_picture/19/09/261/190918140952457_710x296_4251.jpg","url":"http://music.migu.cn/v3/video/mv/699174Y0819"},{"title":"宝藏男孩Alec Benjamin，入坑不晚！","info":"宝藏男孩Alec Benjamin，入坑不晚！","image":"//cdnmusic.migu.cn/tycms_picture/19/09/259/190916111106233_710x296_5923.jpg","url":"http://music.migu.cn/v3/video/mv/699174Y0815"},{"title":"黄龄：自在人生，“醉”是洒脱","info":"黄龄：自在人生，“醉”是洒脱","image":"//cdnmusic.migu.cn/tycms_picture/19/08/233/190821135814951_710x296_1783.jpg","url":"http://music.migu.cn/v2/music/topic/9025E96F14A7459AE0530988190A1A16"},{"title":"听一曲刘珂矣，守一方宁静与欢喜","info":"听一曲刘珂矣，守一方宁静与欢喜","image":"//cdnmusic.migu.cn/tycms_picture/19/08/228/190816134949884_710x296_5938.jpg","url":"http://music.migu.cn/v2/music/topic/8FE8052178453BAEE0530988190A9253"},{"title":"冯提莫：撕下标签，音乐绝不设限","info":"冯提莫：撕下标签，音乐绝不设限","image":"//cdnmusic.migu.cn/tycms_picture/19/08/225/190813091418276_710x296_4519.jpg","url":"http://music.migu.cn/v2/music/topic/8F5CAC8CD23E710FE0530988190A354B"}]},{"groupName":"音人而异","items":[{"title":"致王源：源为梦想，不只说说","info":"致王源：源为梦想，不只说说","image":"//cdnmusic.migu.cn/tycms_picture/19/03/63/190304135020522_750x292_132.jpg","url":"http://music.migu.cn/v2/music/topic/833D494F694E33AEE0530988190A2177"},{"title":"郭顶|“水星”王子的落地之约","info":"郭顶|“水星”王子的落地之约","image":"//cdnmusic.migu.cn/tycms_picture/19/01/21/190121100454282_700x280_670.jpg","url":"http://music.migu.cn/v2/music/topic/7FF33CAAE10D7EA4E0530988190A51DE"},{"title":"精致戳爷帅气驾临！Everybody自由飞舞吧！","info":"精致戳爷帅气驾临！Everybody自由飞舞吧！","image":"//cdnmusic.migu.cn/tycms_picture/18/12/353/181219170227472_710x276_2169.jpg","url":"http://music.migu.cn/v2/music/topic/7D5AFAE8A2E479F5E0530988190AF19A"},{"title":"少女心收割机萌德，Lost In Your Song","info":"少女心收割机萌德，Lost In Your Song","image":"//cdnmusic.migu.cn/tycms_picture/18/12/344/181210152757569_700x280_3326.jpg","url":"http://music.migu.cn/v2/music/topic/7CA66A78278E7FC8E0530988190AC221"},{"title":"从摇滚到佛系，舞台上的live之王，光影背后的百变男孩","info":"舞台上的live之王，光影背后的百变男孩","image":"//cdnmusic.migu.cn/tycms_picture/18/11/309/181105162546633_750x292_7400.jpg","url":"http://music.migu.cn/v2/music/topic/79E637BE2F68F660E0530988190AC119"}]}]</script>
<script>
var songlists = JSON.parse(document.getElementById('songlistData').innerHTML);
var songs = JSON.parse(document.getElementById('songData').innerHTML);
var migumake = JSON.parse(document.getElementById('migumakeData').innerHTML);
</script>
<!-- 排行榜 -->
<div id="billboard" class="section">
<div class="container">
<div class="section-header">
<h2 class="title">排行榜</h2>
<a class="more" href="/v3/music/top/migumusic" target = "_blank">更多<i class="iconfont cf-gengduo"></i></a>
</div>
</div>
<div class="container">
<div class="item-container" data-rankids="23846947,23846713,23846889">
<div class="thumb-container thumb-1">
<div class="item item1">
<div class="thumb-header">
<div class="thumb-title" style="background-image: url('images/191121163818219_116x54_1287.png')"></div>
<a href="javascript:;" class="subscribe-action" data-subid="23846947"><span>+</span>订阅</a>
<a href="javascript:;" class="thumb-playAll"><img class="cf-bofangquanbu" src="/b/picture/btn-play-white.png"></a>
</div>
<div class="thumb-item">
<div class="thumb">
<div class="item-num">1</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/69905303457" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg" alt="我们(歌手当打之年)" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69905303457"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69905303457" target = "_blank">我们(歌手当打之年)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1001060006" target = "_blank">华晨宇</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69905303457"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"我们(歌手当打之年)","linkUrl":"/v3/music/song/69905303457","imgUrl":"//cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","summary":"","singer":"华晨宇","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="69905303457"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">2</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/69905303458" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg" alt="言不由衷(歌手当打之年)" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69905303458"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69905303458" target = "_blank">言不由衷(歌手当打之年)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/290049" target = "_blank">徐佳莹</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69905303458"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"言不由衷(歌手当打之年)","linkUrl":"/v3/music/song/69905303458","imgUrl":"//cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","summary":"","singer":"徐佳莹","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="69905303458"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">3</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/69905303453" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg" alt="不透气的房间(歌手当打之年)" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69905303453"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69905303453" target = "_blank">不透气的房间(歌手当打之年)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1115211517" target = "_blank">秦凡淇</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69905303453"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"不透气的房间(歌手当打之年)","linkUrl":"/v3/music/song/69905303453","imgUrl":"//cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","summary":"","singer":"秦凡淇","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="69905303453"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">4</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/69905303144" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0221/2242/ASfd006591460c3dc03aaec8a08ad05dc4.jpg" alt="多想在平庸的生活拥抱你(歌手当打之年)" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69905303144"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69905303144" target = "_blank">多想在平庸的生活拥抱你(歌手当打之年)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1111322641" target = "_blank">隔壁老樊</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69905303144"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"多想在平庸的生活拥抱你(歌手当打之年)","linkUrl":"/v3/music/song/69905303144","imgUrl":"//cdnmusic.migu.cn/picture/2020/0221/2242/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","summary":"","singer":"隔壁老樊","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="69905303144"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">5</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/60057010500" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/2335/AS98648dcc5110f61c76759b7904903390.jpg" alt="一切都会过去" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="60057010500"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/60057010500" target = "_blank">一切都会过去</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1111426473" target = "_blank">龙千里</a>
 / <a href="/v3/music/artist/1115497719" target = "_blank">张宸赫</a>
 / <a href="/v3/music/artist/1130167136" target = "_blank">董奕成</a>
 / <a href="/v3/music/artist/1130167132" target = "_blank">贺艺</a>
 / <a href="/v3/music/artist/1130167133" target = "_blank">时尚</a>
 / <a href="/v3/music/artist/1130167134" target = "_blank">沈忞维</a>
 / <a href="/v3/music/artist/1130167135" target = "_blank">陈彦羽</a>
 / <a href="/v3/music/artist/1130067225" target = "_blank">人民动听</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="60057010500"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"一切都会过去","linkUrl":"/v3/music/song/60057010500","imgUrl":"//cdnmusic.migu.cn/picture/2020/0305/2335/AS98648dcc5110f61c76759b7904903390.jpg","summary":"","singer":"龙千里，张宸赫，董奕成，贺艺，时尚，沈忞维，陈彦羽，人民动听","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="60057010500"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="thumb-container thumb-2">
<div class="item item2">
<div class="thumb-header">
<div class="thumb-title" style="background-image: url('images/19112116374416_113x52_107.png')"></div>
<a href="javascript:;" class="subscribe-action" data-subid="23846713"><span>+</span>订阅</a>
<a href="javascript:;" class="thumb-playAll"><img class="cf-bofangquanbu" src="/b/picture/btn-play-white.png"></a>
</div>
<div class="thumb-item">
<div class="thumb">
<div class="item-num">1</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/6005662LHS9" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0228/1135/AS7109eb80252cdd36e5ccd1c98c623eb9.jpg" alt="The Man(Live From Paris)" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="6005662LHS9"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/6005662LHS9" target = "_blank">The Man(Live From Paris)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/288906" target = "_blank">Taylor Swift</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="6005662LHS9"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"The Man(Live From Paris)","linkUrl":"/v3/music/song/6005662LHS9","imgUrl":"//cdnmusic.migu.cn/picture/2020/0228/1135/AS7109eb80252cdd36e5ccd1c98c623eb9.jpg","summary":"","singer":"Taylor Swift","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="6005662LHS9"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">2</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/6005752BVXV" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0131/1656/AScfbdd92babc790eb3834a2d722765202.jpg" alt="Physical" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="6005752BVXV"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/6005752BVXV" target = "_blank">Physical</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1002295332" target = "_blank">Dua Lipa</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="6005752BVXV"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"Physical","linkUrl":"/v3/music/song/6005752BVXV","imgUrl":"//cdnmusic.migu.cn/picture/2020/0131/1656/AScfbdd92babc790eb3834a2d722765202.jpg","summary":"","singer":"Dua Lipa","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="6005752BVXV"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">3</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/6005662JXUB" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0131/2107/AS11dd12aa462eee47effcbdef4d1112f4.jpg" alt="Only The Young(Featured in Miss Americana)" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="6005662JXUB"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/6005662JXUB" target = "_blank">Only The Young(Featured in Miss Americana)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/288906" target = "_blank">Taylor Swift</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="6005662JXUB"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"Only The Young(Featured in Miss Americana)","linkUrl":"/v3/music/song/6005662JXUB","imgUrl":"//cdnmusic.migu.cn/picture/2020/0131/2107/AS11dd12aa462eee47effcbdef4d1112f4.jpg","summary":"","singer":"Taylor Swift","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="6005662JXUB"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">4</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/6005973LNFX" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2019/1227/1156/ASaaaff06bf3b74f22a74aa15a9fb63e04.jpg" alt="Alone, Pt. II" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="6005973LNFX"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/6005973LNFX" target = "_blank">Alone, Pt. II</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1002638961" target = "_blank">Alan Walker</a>
 / <a href="/v3/music/artist/1106878017" target = "_blank">Ava Max</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>467</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="6005973LNFX"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"Alone, Pt. II","linkUrl":"/v3/music/song/6005973LNFX","imgUrl":"//cdnmusic.migu.cn/picture/2019/1227/1156/ASaaaff06bf3b74f22a74aa15a9fb63e04.jpg","summary":"","singer":"Alan Walker，Ava Max","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="6005973LNFX"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">5</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/6005662J7ZZ" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2019/1220/2042/AS1f4867c04e724ead8a5725a99f275ad9.jpg" alt="Christmas Tree Farm" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="6005662J7ZZ"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/6005662J7ZZ" target = "_blank">Christmas Tree Farm</a>
</p>
<p class="singer">
<a href="/v3/music/artist/288906" target = "_blank">Taylor Swift</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>1.1W</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="6005662J7ZZ"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"Christmas Tree Farm","linkUrl":"/v3/music/song/6005662J7ZZ","imgUrl":"//cdnmusic.migu.cn/picture/2019/1220/2042/AS1f4867c04e724ead8a5725a99f275ad9.jpg","summary":"","singer":"Taylor Swift","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="6005662J7ZZ"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="thumb-container thumb-3">
<div class="item item3">
<div class="thumb-header">
<div class="thumb-title" style="background-image: url('images/191121163714391_114x53_6505.png')"></div>
<a href="javascript:;" class="subscribe-action" data-subid="23846889"><span>+</span>订阅</a>
<a href="javascript:;" class="thumb-playAll"><img class="cf-bofangquanbu" src="/b/picture/btn-play-white.png"></a>
</div>
<div class="thumb-item">
<div class="thumb">
<div class="item-num">1</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/69906400824" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0225/0949/AS632bcb098242118df5d9514f57e7a065.jpg" alt="终于(电视剧《两世欢》片头主题曲)" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69906400824"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69906400824" target = "_blank">终于(电视剧《两世欢》片头主题曲)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1106607998" target = "_blank">双笙</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69906400824"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"终于(电视剧《两世欢》片头主题曲)","linkUrl":"/v3/music/song/69906400824","imgUrl":"//cdnmusic.migu.cn/picture/2020/0225/0949/AS632bcb098242118df5d9514f57e7a065.jpg","summary":"","singer":"双笙","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="69906400824"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">2</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/69906400821" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0224/1521/AS0753926d178e413ce92960dd40a09b69.jpg" alt="知晚(电视剧《两世欢》插曲)" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69906400821"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69906400821" target = "_blank">知晚(电视剧《两世欢》插曲)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1106617115" target = "_blank">叶炫清</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69906400821"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"知晚(电视剧《两世欢》插曲)","linkUrl":"/v3/music/song/69906400821","imgUrl":"//cdnmusic.migu.cn/picture/2020/0224/1521/AS0753926d178e413ce92960dd40a09b69.jpg","summary":"","singer":"叶炫清","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="69906400821"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">3</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/63372901682" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0219/1042/ASc54607bfbd9aee48839193b86445d292.jpg" alt="心欲止水(电视剧《三生三世枕上书》插曲)" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63372901682"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63372901682" target = "_blank">心欲止水(电视剧《三生三世枕上书》插曲)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1002043559" target = "_blank">张碧晨</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63372901682"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"心欲止水(电视剧《三生三世枕上书》插曲)","linkUrl":"/v3/music/song/63372901682","imgUrl":"//cdnmusic.migu.cn/picture/2020/0219/1042/ASc54607bfbd9aee48839193b86445d292.jpg","summary":"","singer":"张碧晨","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="63372901682"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">4</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/69911701370" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0202/1149/AS67297f2d89efeb3f54ba81bf0fd5112a.jpg" alt="心光(电视剧《下一站是幸福》主题曲)" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="69911701370"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/69911701370" target = "_blank">心光(电视剧《下一站是幸福》主题曲)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000002548" target = "_blank">胡夏</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>0</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="69911701370"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"心光(电视剧《下一站是幸福》主题曲)","linkUrl":"/v3/music/song/69911701370","imgUrl":"//cdnmusic.migu.cn/picture/2020/0202/1149/AS67297f2d89efeb3f54ba81bf0fd5112a.jpg","summary":"","singer":"胡夏","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="69911701370"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
<div class="thumb">
<div class="item-num">5</div>
<div class="item-box">
<div class="item-box-img">
<a href="/v3/music/song/63681001098" class="img-box" target = "_blank">
<img src="/b/picture/img_default_56x56.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0114/1814/AS9484c020ea2d6c79690bdffc4480854e.jpg" alt="拆心 (电视剧《绝代双骄》片尾曲)" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_56x56.jpg'" class="img-block lazy-img img-full">
</a>
<span class="song-play" data-cid="63681001098"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/song/63681001098" target = "_blank">拆心 (电视剧《绝代双骄》片尾曲)</a>
</p>
<p class="singer">
<a href="/v3/music/artist/127751" target = "_blank">刘惜君</a>
</p>
</div>
<p class="item-playCnt"><i class="iconfont cf-bofangliang"></i>49</p>
<div class="item-action">
<a href="javascript:;"><i class="iconfont cf-xihuan collect-song" data-cpid="63681001098"></i></a>
<a href="javascript:;"><i class="iconfont cf-fenxiang J-btn-share" data-shareType="2" data-share='{"type":"song","title":"拆心 (电视剧《绝代双骄》片尾曲)","linkUrl":"/v3/music/song/63681001098","imgUrl":"//cdnmusic.migu.cn/picture/2020/0114/1814/AS9484c020ea2d6c79690bdffc4480854e.jpg","summary":"","singer":"刘惜君","album":""}'></i></a>
<a
class="J_OrderLink"
href="javascript:;" target="_blank"
data-type="crbt"
data-id="63681001098"
><i class="iconfont cf-cailing"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
var ranksData = [{"title":"音乐榜","icon":"//cdnmusic.migu.cn/tycms_picture/19/11/325/191121163818219_116x54_1287.png","image":null,"url":null,"items":[{"songId":"1130169636","songName":"我们(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303457","image":"//cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:05:50","playCount":"0","albumId":"1130169610","albumName":"歌手·当打之年第五期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001060006","singerName":"华晨宇","image":null}]},{"songId":"1130169635","songName":"言不由衷(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303458","image":"//cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:04:36","playCount":"0","albumId":"1130169610","albumName":"歌手·当打之年第五期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"290049","singerName":"徐佳莹","image":null}]},{"songId":"1130169640","songName":"不透气的房间(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303453","image":"//cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:03:39","playCount":"0","albumId":"1130169610","albumName":"歌手·当打之年第五期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1115211517","singerName":"秦凡淇","image":null}]},{"songId":"1130127137","songName":"多想在平庸的生活拥抱你(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303144","image":"//cdnmusic.migu.cn/picture/2020/0221/2242/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:04:59","playCount":"0","albumId":"1130127094","albumName":"歌手·当打之年第三期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1111322641","singerName":"隔壁老樊","image":null}]},{"songId":"1130167138","songName":"一切都会过去","albumsPicUrl":null,"copyrightId":"60057010500","image":"//cdnmusic.migu.cn/picture/2020/0305/2335/AS98648dcc5110f61c76759b7904903390.jpg","duration":"00:04:40","playCount":"0","albumId":"1130167137","albumName":"一切都会过去","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1111426473","singerName":"龙千里","image":null},{"singerId":"1115497719","singerName":"张宸赫","image":null},{"singerId":"1130167136","singerName":"董奕成","image":null},{"singerId":"1130167132","singerName":"贺艺","image":null},{"singerId":"1130167133","singerName":"时尚","image":null},{"singerId":"1130167134","singerName":"沈忞维","image":null},{"singerId":"1130167135","singerName":"陈彦羽","image":null},{"singerId":"1130067225","singerName":"人民动听","image":null}]},{"songId":"1130126780","songName":"终于(电视剧《两世欢》片头主题曲)","albumsPicUrl":null,"copyrightId":"69906400824","image":"//cdnmusic.migu.cn/picture/2020/0225/0949/AS632bcb098242118df5d9514f57e7a065.jpg","duration":"00:03:38","playCount":"0","albumId":"1130161437","albumName":"《两世欢》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106607998","singerName":"双笙","image":null}]},{"songId":"1130155690","songName":"情非得已","albumsPicUrl":null,"copyrightId":"60071702557","image":"//cdnmusic.migu.cn/picture/2020/0302/1942/ASfd9bcd2ce6c41f372b1cda42d1c3f67b.jpg","duration":"00:03:54","playCount":"0","albumId":"1130155689","albumName":"情非得已","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106646794","singerName":"曾惜","image":null}]},{"songId":"1130169589","songName":"少年英雄小哪吒+我管你","albumsPicUrl":null,"copyrightId":"69905303449","image":"//cdnmusic.migu.cn/picture/2020/0306/2221/AS228c06c05d264b6452ece68a30cd6329.jpg","duration":"00:02:56","playCount":"0","albumId":"1130169570","albumName":"王牌对王牌第五季第三期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001060006","singerName":"华晨宇","image":null}]},{"songId":"1130143247","songName":"情人鹤顶红(正式版)","albumsPicUrl":null,"copyrightId":"69929500130","image":"//cdnmusic.migu.cn/picture/2020/0302/1942/AS8b4f049ac5b436b55613ba186ecd2c20.jpg","duration":"00:02:55","playCount":"0","albumId":"1130143246","albumName":"情人鹤顶红（正式版）","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1115775610","singerName":"小阿枫","image":null}]},{"songId":"1130067277","songName":"知晚(电视剧《两世欢》插曲)","albumsPicUrl":null,"copyrightId":"69906400821","image":"//cdnmusic.migu.cn/picture/2020/0224/1521/AS0753926d178e413ce92960dd40a09b69.jpg","duration":"00:03:19","playCount":"0","albumId":"1130067276","albumName":"知晚","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106617115","singerName":"叶炫清","image":null}]},{"songId":"1130169565","songName":"如影(电视剧《无心法师3》插曲)","albumsPicUrl":null,"copyrightId":"63388708799","image":"//cdnmusic.migu.cn/picture/2020/0309/0921/ASc00138bb37d46fb0a91d2898c06df69c.jpg","duration":"00:04:07","playCount":"0","albumId":"1130169564","albumName":"如影","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"5576","singerName":"黄龄","image":null}]},{"songId":"1130145665","songName":"同行(新加坡电视剧《爱...没有距离》主题曲)","albumsPicUrl":null,"copyrightId":"63793703903","image":"//cdnmusic.migu.cn/picture/2020/0302/2335/AS644a700bb04d64a247f9546a6c2eb832.jpg","duration":"00:03:25","playCount":"0","albumId":"1130145664","albumName":"同行","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1004038616","singerName":"文慧如","image":null}]},{"songId":"1130068964","songName":"斗牛(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303129","image":"//cdnmusic.migu.cn/picture/2020/0214/2214/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:06:22","playCount":"0","albumId":"1130068958","albumName":"歌手·当打之年第二期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001060006","singerName":"华晨宇","image":null}]},{"songId":"1130152675","songName":"决不回头 (天赐的声音)","albumsPicUrl":null,"copyrightId":"69905303446","image":"//cdnmusic.migu.cn/picture/2020/0229/2142/ASeb88e71b4e09829a2399499e39c681b5.jpg","duration":"00:04:46","playCount":"0","albumId":"1130153093","albumName":"天赐的声音精编公益版","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000006341","singerName":"胡彦斌","image":null}]},{"songId":"1130170825","songName":"冬日","albumsPicUrl":null,"copyrightId":"63273403083","image":"//cdnmusic.migu.cn/picture/2020/0307/1914/AS873e1d71efd350ac1953417f956f6553.jpg","duration":"00:03:53","playCount":"0","albumId":"1130170824","albumName":"冬日","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002738890","singerName":"鞠婧祎","image":null}]},{"songId":"1130068965","songName":"愿得一心人(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303128","image":"//cdnmusic.migu.cn/picture/2020/0214/2214/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:05:18","playCount":"0","albumId":"1130068958","albumName":"歌手·当打之年第二期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002043527","singerName":"周深","image":null}]},{"songId":"1130151556","songName":"打开(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303439","image":"//cdnmusic.migu.cn/picture/2020/0228/2214/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:05:32","playCount":"0","albumId":"1130151105","albumName":"歌手·当打之年第四期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002257211","singerName":"黄霄雲","image":null}]},{"songId":"1130164481","songName":"追","albumsPicUrl":null,"copyrightId":"63267800803","image":"//cdnmusic.migu.cn/picture/2020/0308/1021/AS5f5486816805abb45bcfc75ed6cd259c.jpg","duration":"00:04:55","playCount":"0","albumId":"1130164479","albumName":"追","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"454","singerName":"韩磊","image":null},{"singerId":"1000000841","singerName":"谭维维","image":null}]},{"songId":"1130163036","songName":"够爱","albumsPicUrl":null,"copyrightId":"63288600155","image":"//cdnmusic.migu.cn/picture/2020/0310/1407/ASe04a04572263e9faaa59693e56bb70d8.jpg","duration":"00:02:55","playCount":"0","albumId":"1130163035","albumName":"够爱","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"14470","singerName":"胜屿","image":null}]},{"songId":"1130142564","songName":"如果爱忘了","albumsPicUrl":null,"copyrightId":"6008460GKFG","image":"//cdnmusic.migu.cn/picture/2020/0302/1943/ASb38bfc20ede5d787e21d9990d682fff5.jpg","duration":"00:03:13","playCount":"0","albumId":"1130142682","albumName":"如果爱忘了","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1115510704","singerName":"Yusee","image":null}]},{"songId":"1130127139","songName":"太阳(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303142","image":"//cdnmusic.migu.cn/picture/2020/0221/2242/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:04:02","playCount":"0","albumId":"1130127094","albumName":"歌手·当打之年第三期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"31975","singerName":"萧敬腾","image":null}]},{"songId":"1130089943","songName":"想自由 (天赐的声音)","albumsPicUrl":null,"copyrightId":"69905303132","image":"//cdnmusic.migu.cn/picture/2020/0218/1514/ASf46ae30c0719c10a75e73e9faedd9944.jpg","duration":"00:03:50","playCount":"0","albumId":"1130089936","albumName":"天赐的声音第一期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"980012","singerName":"汪苏泷","image":null},{"singerId":"19237","singerName":"炎亚纶","image":null}]},{"songId":"1130013623","songName":"安和","albumsPicUrl":null,"copyrightId":"60070101820","image":"//cdnmusic.migu.cn/picture/2020/0308/2328/ASfe6dcd7408b110a4304c74785eb86763.jpg","duration":"00:04:14","playCount":"0","albumId":"1130167005","albumName":"面面","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"561","singerName":"苏慧伦","image":null}]},{"songId":"1130155679","songName":"你","albumsPicUrl":null,"copyrightId":"60083615224","image":"//cdnmusic.migu.cn/picture/2020/0308/1021/AS433a35d726dadb0a7b1214520a18dbee.jpg","duration":"00:03:31","playCount":"0","albumId":"1130155678","albumName":"你","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"975342","singerName":"毕书尽","image":null}]},{"songId":"1130147381","songName":"爱情大魔咒","albumsPicUrl":null,"copyrightId":"69905303432","image":"//cdnmusic.migu.cn/picture/2020/0228/2235/AS1b35883aeb7ac8dcaffb538866998522.jpg","duration":"00:02:08","playCount":"0","albumId":"1130147377","albumName":"王牌对王牌第五季第二期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"464","singerName":"赵薇","image":null},{"singerId":"1001060006","singerName":"华晨宇","image":null}]},{"songId":"1130169643","songName":"Monsters(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303451","image":"//cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:04:06","playCount":"0","albumId":"1130169610","albumName":"歌手·当打之年第五期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002043527","singerName":"周深","image":null}]},{"songId":"1130167820","songName":"无辜","albumsPicUrl":null,"copyrightId":"69929500142","image":"//cdnmusic.migu.cn/picture/2020/0306/1756/AS4d4f1599088d6f9a9526b4639233f057.jpg","duration":"00:03:44","playCount":"0","albumId":"1130167819","albumName":"无辜","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1757","singerName":"欢子","image":null}]},{"songId":"1130142384","songName":"双鱼","albumsPicUrl":null,"copyrightId":"6005752C6SH","image":"//cdnmusic.migu.cn/picture/2020/0305/1928/AS48f495cb11f591b9ba880fd2084699e5.jpg","duration":"00:04:00","playCount":"0","albumId":"1130142383","albumName":"双鱼","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000129490","singerName":"唐汉霄","image":null}]},{"songId":"1130166746","songName":"Never Worn White","albumsPicUrl":null,"copyrightId":"6005662LX8J","image":"//cdnmusic.migu.cn/picture/2020/0305/1842/AS39b540dd5e8f9aadb831dc0a091e86bd.jpg","duration":"00:03:45","playCount":"0","albumId":"1130166745","albumName":"Never Worn White","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"62541","singerName":"Katy Perry","image":null}]},{"songId":"1130169642","songName":"连名带姓(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303452","image":"//cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:04:55","playCount":"0","albumId":"1130169610","albumName":"歌手·当打之年第五期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002257211","singerName":"黄霄雲","image":null}]},{"songId":"1130161433","songName":"感谢有你(歌曲版)","albumsPicUrl":null,"copyrightId":"60057010489","image":"//cdnmusic.migu.cn/picture/2020/0305/1400/AS1d3784dbf0a8a186adbb5ac8df1f9086.jpg","duration":"00:05:39","playCount":"0","albumId":"1130161334","albumName":"感谢有你","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1082510","singerName":"徐方","image":null}]},{"songId":"1130170821","songName":"给女孩（单曲）","albumsPicUrl":null,"copyrightId":"60057010504","image":"//cdnmusic.migu.cn/picture/2020/0309/1735/AS5198b74b1acadfbe25f3220bd1725c85.jpg","duration":"00:03:27","playCount":"0","albumId":"1130170819","albumName":"给女孩（单曲）","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"320","singerName":"李宇春","image":null}]},{"songId":"1130169639","songName":"凄美地(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303454","image":"//cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:04:25","playCount":"0","albumId":"1130169610","albumName":"歌手·当打之年第五期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000006399","singerName":"袁娅维","image":null}]},{"songId":"1130059335","songName":"呼吸的歌","albumsPicUrl":null,"copyrightId":"60076263319","image":"//cdnmusic.migu.cn/picture/2020/0304/1856/AS884747553b8cc690beccb941009b3938.jpg","duration":"00:04:33","playCount":"0","albumId":"1130059334","albumName":"呼吸的歌","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000000926","singerName":"严艺丹","image":null}]},{"songId":"1130068969","songName":"不亏不欠(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303125","image":"//cdnmusic.migu.cn/picture/2020/0214/2214/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:04:25","playCount":"0","albumId":"1130068958","albumName":"歌手·当打之年第二期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000006399","singerName":"袁娅维","image":null}]},{"songId":"1130152540","songName":"囚鸟","albumsPicUrl":null,"copyrightId":"69929500133","image":"//cdnmusic.migu.cn/picture/2020/0303/1656/ASa1b5e21dbc097a38269d0ac4eb7e00cf.jpg","duration":"00:04:31","playCount":"0","albumId":"1130159995","albumName":"囚鸟","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1123425380","singerName":"小阿七","image":null}]},{"songId":"1130151759","songName":"有一种思念叫永远(Dj何鹏版)","albumsPicUrl":null,"copyrightId":"63879705598","image":"//cdnmusic.migu.cn/picture/2020/0302/1942/ASf3e50e8f9fd1c347746b3bcc22275cb9.jpg","duration":"00:04:52","playCount":"0","albumId":"1130151757","albumName":"有一种思念叫永远","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"323890","singerName":"晨熙","image":null}]},{"songId":"1130054446","songName":"心暖心等于世界","albumsPicUrl":null,"copyrightId":"6005860LYV0","image":"//cdnmusic.migu.cn/picture/2020/0302/1942/ASa61df281fb2bebed94e2c49451a554b5.jpg","duration":"00:05:04","playCount":"0","albumId":"1130054445","albumName":"心暖心等于世界","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1105020388","singerName":"群星","image":null}]},{"songId":"1130161439","songName":"不悔(电视剧《两世欢》插曲)","albumsPicUrl":null,"copyrightId":"69906400841","image":"//cdnmusic.migu.cn/picture/2020/0308/1021/AS5b20fa3a516e55fb1bfed7e6df7a5d6c.jpg","duration":"00:04:14","playCount":"0","albumId":"1130161437","albumName":"《两世欢》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002610488","singerName":"张思帆","image":null}]},{"songId":"1130101301","songName":"时光成语花落地（电视剧《完美关系》片尾曲）","albumsPicUrl":null,"copyrightId":"69911701385","image":"//cdnmusic.migu.cn/picture/2020/0217/1642/AS9db8c00f2fb795d244b250dd4d3f29d1.jpg","duration":"00:04:42","playCount":"0","albumId":"1130101294","albumName":"《完美关系》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000127732","singerName":"宁桓宇","image":null}]},{"songId":"1130169644","songName":"好的 晚安(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303450","image":"//cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:04:18","playCount":"0","albumId":"1130169610","albumName":"歌手·当打之年第五期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"31975","singerName":"萧敬腾","image":null}]},{"songId":"1130151576","songName":"感谢每一个你","albumsPicUrl":null,"copyrightId":"60057010473","image":"//cdnmusic.migu.cn/picture/2020/0302/1942/AS900b667f34a15369666c81c5932d3f64.jpg","duration":"00:04:27","playCount":"0","albumId":"1130151575","albumName":"感谢每一个你","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1105020388","singerName":"群星","image":null}]},{"songId":"1130167013","songName":"真面目(电视剧《跟鲨鱼接吻》插曲)","albumsPicUrl":null,"copyrightId":"60070101831","image":"//cdnmusic.migu.cn/picture/2020/0308/2328/ASfe6dcd7408b110a4304c74785eb86763.jpg","duration":"00:04:04","playCount":"0","albumId":"1130167005","albumName":"面面","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"561","singerName":"苏慧伦","image":null}]},{"songId":"1130151554","songName":"无问(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303441","image":"//cdnmusic.migu.cn/picture/2020/0228/2214/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:05:15","playCount":"0","albumId":"1130151105","albumName":"歌手·当打之年第四期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002043527","singerName":"周深","image":null}]},{"songId":"1130159056","songName":"平凡的爱","albumsPicUrl":null,"copyrightId":"69908709647","image":"//cdnmusic.migu.cn/picture/2020/0303/1656/AS33c6625921affc65ec2356c1f00ccf24.jpg","duration":"00:03:59","playCount":"0","albumId":"1130159055","albumName":"平凡的爱","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1108541596","singerName":"黄宇哲","image":null}]},{"songId":"1130155684","songName":"无心(电视剧《无心法师3》同名推广曲)","albumsPicUrl":null,"copyrightId":"63388708797","image":"//cdnmusic.migu.cn/picture/2020/0301/2335/AS872febc2ca78df1d94faf9b0202bc362.jpg","duration":"00:04:28","playCount":"0","albumId":"1130155682","albumName":"无心","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1108108136","singerName":"沈以诚","image":null}]},{"songId":"1130169638","songName":"Power To Forgive + Looking For Trouble(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303455","image":"//cdnmusic.migu.cn/picture/2020/0306/2128/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:04:20","playCount":"0","albumId":"1130169610","albumName":"歌手·当打之年第五期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000002549","singerName":"吉克隽逸","image":null}]},{"songId":"1130142437","songName":"等我回家","albumsPicUrl":null,"copyrightId":"69919400581","image":"//cdnmusic.migu.cn/picture/2020/0226/1421/AS7dd8df5a9249c2d44a590e319157ba92.jpg","duration":"00:04:28","playCount":"0","albumId":"1130142748","albumName":"等我回家","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"391","singerName":"郭峰","image":null}]},{"songId":"1130151555","songName":"荒野魂斗罗(歌手当打之年)","albumsPicUrl":null,"copyrightId":"69905303440","image":"//cdnmusic.migu.cn/picture/2020/0228/2214/ASfd006591460c3dc03aaec8a08ad05dc4.jpg","duration":"00:05:10","playCount":"0","albumId":"1130151105","albumName":"歌手·当打之年第四期","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001060006","singerName":"华晨宇","image":null}]},{"songId":"1130170115","songName":"光的摩斯密码(电视剧《你好检察官》插曲)","albumsPicUrl":null,"copyrightId":"6008460J2DP","image":"//cdnmusic.migu.cn/picture/2020/0308/0935/AS174f3bebe8bde2e370f1b0e99dc901b7.jpg","duration":"00:04:30","playCount":"0","albumId":"1130170114","albumName":"光的摩斯密码","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"127751","singerName":"刘惜君","image":null}]}],"id":"23846947"},{"title":"欧美榜","icon":"//cdnmusic.migu.cn/tycms_picture/19/11/325/19112116374416_113x52_107.png","image":null,"url":null,"items":[{"songId":"1130104609","songName":"The Man(Live From Paris)","albumsPicUrl":null,"copyrightId":"6005662LHS9","image":"//cdnmusic.migu.cn/picture/2020/0228/1135/AS7109eb80252cdd36e5ccd1c98c623eb9.jpg","duration":"00:03:39","playCount":"0","albumId":"1130104608","albumName":"The Man(Live From Paris)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"288906","singerName":"Taylor Swift","image":null}]},{"songId":"1129936232","songName":"Physical","albumsPicUrl":null,"copyrightId":"6005752BVXV","image":"//cdnmusic.migu.cn/picture/2020/0131/1656/AScfbdd92babc790eb3834a2d722765202.jpg","duration":"00:03:13","playCount":"0","albumId":"1129936231","albumName":"Physical","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002295332","singerName":"Dua Lipa","image":null}]},{"songId":"1129972229","songName":"Only The Young(Featured in Miss Americana)","albumsPicUrl":null,"copyrightId":"6005662JXUB","image":"//cdnmusic.migu.cn/picture/2020/0131/2107/AS11dd12aa462eee47effcbdef4d1112f4.jpg","duration":"00:02:37","playCount":"0","albumId":"1129972228","albumName":"Only The Young(Featured in Miss Americana)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"288906","singerName":"Taylor Swift","image":null}]},{"songId":"1128505822","songName":"Alone, Pt. II","albumsPicUrl":null,"copyrightId":"6005973LNFX","image":"//cdnmusic.migu.cn/picture/2019/1227/1156/ASaaaff06bf3b74f22a74aa15a9fb63e04.jpg","duration":"00:02:59","playCount":"467","albumId":"1128505820","albumName":"Alone, Pt. II","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002638961","singerName":"Alan Walker","image":null},{"singerId":"1106878017","singerName":"Ava Max","image":null}]},{"songId":"1125454895","songName":"Christmas Tree Farm","albumsPicUrl":null,"copyrightId":"6005662J7ZZ","image":"//cdnmusic.migu.cn/picture/2019/1220/2042/AS1f4867c04e724ead8a5725a99f275ad9.jpg","duration":"00:03:48","playCount":"11053","albumId":"1125454894","albumName":"Christmas Tree Farm","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"288906","singerName":"Taylor Swift","image":null}]},{"songId":"1125455529","songName":"The Box(Explicit)","albumsPicUrl":null,"copyrightId":"6005751Y3SP","image":"//cdnmusic.migu.cn/picture/2019/1218/1714/AS3e2c271e283a4a84b42abffb27bbda2b.jpg","duration":"00:03:16","playCount":"99","albumId":"1125455488","albumName":"Please Excuse Me For Being Antisocial","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1111001392","singerName":"Roddy Ricch","image":null}]},{"songId":"1129111077","songName":"Memories (Cut Copy Remix)","albumsPicUrl":null,"copyrightId":"6005662JDX2","image":"//cdnmusic.migu.cn/picture/2020/0221/1807/ASdbf37b7d687b2281b22610abbb254a58.jpg","duration":"00:06:55","playCount":"23","albumId":"1129111076","albumName":"Memories (Cut Copy Remix)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"51249","singerName":"Maroon 5","image":null}]},{"songId":"1130140448","songName":"The Other Side","albumsPicUrl":null,"copyrightId":"6005973LYJ8","image":"//cdnmusic.migu.cn/picture/2020/0227/1821/AS59dcc7ebb622658676775b48c0a256b3.jpg","duration":"00:03:08","playCount":"0","albumId":"1130140447","albumName":"The Other Side","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002632867","singerName":"SZA","image":null},{"singerId":"35272","singerName":"Justin Timberlake","image":null}]},{"songId":"1129659643","songName":"You should be sad (Clean)","albumsPicUrl":null,"copyrightId":"6005662JR9Z","image":"//cdnmusic.migu.cn/picture/2020/0119/0937/ASc3848320405a86cd7e3034e107e08a25.jpg","duration":"00:03:25","playCount":"39","albumId":"1129702300","albumName":"Manic (Clean)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001990955","singerName":"Halsey","image":null}]},{"songId":"1125454998","songName":"Adore You","albumsPicUrl":null,"copyrightId":"6005972NM8L","image":"//cdnmusic.migu.cn/picture/2019/1206/1942/ASc6ac199c0380487495cbad7cef9db2a6.jpg","duration":"00:03:27","playCount":"1135","albumId":"1125454997","albumName":"Adore You","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001067736","singerName":"Harry Styles","image":null}]},{"songId":"1125453858","songName":"Ghost (Joe Stone Remix)","albumsPicUrl":null,"copyrightId":"6005971K028","image":"//cdnmusic.migu.cn/picture/2019/1213/0856/ASa224710302234ad9b9bb299287a0e8ed.jpg","duration":"00:02:37","playCount":"12","albumId":"1125453773","albumName":"Ghost (Remixes)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002638961","singerName":"Alan Walker","image":null},{"singerId":"1107107587","singerName":"Au/Ra","image":null}]},{"songId":"1129702299","songName":"What A Man Gotta Do","albumsPicUrl":null,"copyrightId":"6005662JSP6","image":"//cdnmusic.migu.cn/picture/2020/0117/2328/ASc30b86d365b871ace6046d3c4cbb6d57.jpg","duration":"00:03:00","playCount":"0","albumId":"1129702298","albumName":"What A Man Gotta Do","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"121494","singerName":"Jonas Brothers","image":null}]},{"songId":"1129655985","songName":"Rare","albumsPicUrl":null,"copyrightId":"6005662JN46","image":"//cdnmusic.migu.cn/picture/2020/0207/1935/ASf96f4394277fdd775737594face0a7ec.jpg","duration":"00:03:40","playCount":"59","albumId":"1129655974","albumName":"Rare (Clean)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"121523","singerName":"Selena Gomez","image":null}]},{"songId":"1129990756","songName":"Know Your Worth","albumsPicUrl":null,"copyrightId":"6005973LV3B","image":"//cdnmusic.migu.cn/picture/2020/0205/0114/AS150c9e1963772b82abfce8a33be397c7.jpg","duration":"00:03:01","playCount":"0","albumId":"1129990755","albumName":"Know Your Worth","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000235725","singerName":"Disclosure","image":null},{"singerId":"1004472452","singerName":"Khalid","image":null}]},{"songId":"1125451176","songName":"My Oh My","albumsPicUrl":null,"copyrightId":"6005971JZZS","image":"//cdnmusic.migu.cn/picture/2019/1213/0856/AS64f5dac302ca415c936eeb6510dd32ee.jpg","duration":"00:02:50","playCount":"438","albumId":"1125451167","albumName":"Romance (Explicit)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002637157","singerName":"Camila Cabello","image":null},{"singerId":"1110190152","singerName":"DaBaby","image":null}]},{"songId":"1130122762","songName":"After Hours","albumsPicUrl":null,"copyrightId":"6005662LKUV","image":"//cdnmusic.migu.cn/picture/2020/0219/1807/AS51a379743d086162b64412bb15e3e815.jpg","duration":"00:06:02","playCount":"0","albumId":"1130122761","albumName":"After Hours","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000315005","singerName":"The Weeknd","image":null}]},{"songId":"1130103511","songName":"Oh My God","albumsPicUrl":null,"copyrightId":"6005752C0G8","image":"//cdnmusic.migu.cn/picture/2020/0227/1500/AS0e0a7d9a02f7021a7712800be9979a96.jpg","duration":"00:03:07","playCount":"0","albumId":"1130103510","albumName":"Oh My God","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002501778","singerName":"Alec Benjamin","image":null}]},{"songId":"1130053225","songName":"Yikes (Clean)","albumsPicUrl":null,"copyrightId":"6005662L8QW","image":"//cdnmusic.migu.cn/picture/2020/0218/2235/ASc806addc17e61cd32bfe4c6cea69414b.jpg","duration":"00:02:36","playCount":"0","albumId":"1130053221","albumName":"Yikes (Clean)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"992070","singerName":"Nicki Minaj","image":null}]},{"songId":"1130052570","songName":"Believe","albumsPicUrl":null,"copyrightId":"6005752BYSQ","image":"//cdnmusic.migu.cn/picture/2020/0218/1614/AS909296d4fcb67588951b1a8c9f9add45.jpg","duration":"00:03:31","playCount":"0","albumId":"1130052568","albumName":"Believe (feat. Justin Timberlake)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000425686","singerName":"Meek Mill","image":null},{"singerId":"35272","singerName":"Justin Timberlake","image":null}]},{"songId":"1129715943","songName":"Demons","albumsPicUrl":null,"copyrightId":"6005752BE7A","image":"//cdnmusic.migu.cn/picture/2020/0227/1500/ASd380b7a468df79f75a132e9150156ecd.jpg","duration":"00:02:45","playCount":"0","albumId":"1129715942","albumName":"Demons","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002501778","singerName":"Alec Benjamin","image":null}]},{"songId":"1130012239","songName":"Birthday","albumsPicUrl":null,"copyrightId":"6005752BYT7","image":"//cdnmusic.migu.cn/picture/2020/0309/1207/AS7efa0124a3c18813fa75c11e9fb12074.jpg","duration":"00:03:01","playCount":"0","albumId":"1130012238","albumName":"Birthday","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000025932","singerName":"Anne-Marie","image":null}]},{"songId":"1129651060","songName":"Underdog","albumsPicUrl":null,"copyrightId":"6005973LPY8","image":"//cdnmusic.migu.cn/picture/2020/0116/0938/AS7e4737397cf2228d226cfc1cf7413f7d.jpg","duration":"00:03:28","playCount":"2","albumId":"1129651059","albumName":"Underdog","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"30000","singerName":"Alicia Keys","image":null}]},{"songId":"1130052773","songName":"Let's Be Friends","albumsPicUrl":null,"copyrightId":"6005662L8P0","image":"//cdnmusic.migu.cn/picture/2020/0228/1735/AS682ed668429e1609e0bb9aea7c589a37.jpg","duration":"00:03:10","playCount":"0","albumId":"1130052772","albumName":"Let's Be Friends","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"410718","singerName":"Carly Rae Jepsen","image":null}]},{"songId":"1130124119","songName":"Your Love (Déjà Vu)","albumsPicUrl":null,"copyrightId":"6005662LKYZ","image":"//cdnmusic.migu.cn/picture/2020/0221/1114/ASbab7cc4c0635d5d35db74b1a4d4d094a.jpg","duration":"00:03:54","playCount":"0","albumId":"1130124118","albumName":"Your Love (Déjà Vu)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002555871","singerName":"Glass Animals","image":null}]},{"songId":"1130123539","songName":"How To Love","albumsPicUrl":null,"copyrightId":"6005752C3E9","image":"//cdnmusic.migu.cn/picture/2020/0228/1556/AS70d2f37283fca41df8294013d585c7bf.jpg","duration":"00:03:21","playCount":"0","albumId":"1130123537","albumName":"How To Love","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000051452","singerName":"Gray","image":null},{"singerId":"1002738143","singerName":"Ally","image":null}]},{"songId":"1130067385","songName":"Selfish","albumsPicUrl":null,"copyrightId":"6005973LWSU","image":"//cdnmusic.migu.cn/picture/2020/0214/1528/AS645c36a51754df8292a9703d39e52f03.jpg","duration":"00:03:43","playCount":"0","albumId":"1130067384","albumName":"Selfish","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002460843","singerName":"Madison Beer","image":null}]},{"songId":"1129656640","songName":"Sum 2 Prove (Clean)","albumsPicUrl":null,"copyrightId":"6005662JQ3Q","image":"//cdnmusic.migu.cn/picture/2020/0207/1935/ASd482aaabece7c9a529b08fa4b57e0dc0.jpg","duration":"00:03:27","playCount":"0","albumId":"1129656639","albumName":"Sum 2 Prove (Clean)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106901343","singerName":"Lil Baby","image":null}]},{"songId":"1130138574","songName":"Here And Now","albumsPicUrl":null,"copyrightId":"6005752C4GP","image":"//cdnmusic.migu.cn/picture/2020/0224/2142/AS544e1fb9212f702333f1e3c489193362.jpg","duration":"00:02:51","playCount":"0","albumId":"1130138573","albumName":"Here And Now","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"31199","singerName":"Kenny Chesney","image":null}]},{"songId":"1129982642","songName":"Lonely","albumsPicUrl":null,"copyrightId":"6005752BUKV","image":"//cdnmusic.migu.cn/picture/2020/0306/1756/AS5b6a7fc39dcf5a98680cb7c5c172e507.jpg","duration":"00:03:11","playCount":"0","albumId":"1129982639","albumName":"Lonely","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1112360523","singerName":"Joel Corry","image":null}]},{"songId":"1130054601","songName":"Hard To Forget","albumsPicUrl":null,"copyrightId":"6005662L6VF","image":"//cdnmusic.migu.cn/picture/2020/0211/1156/AS0ca298dbd574ab889e822f1a96878eb5.jpg","duration":"00:03:24","playCount":"0","albumId":"1130054754","albumName":"Hard To Forget","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001939695","singerName":"Sam Hunt","image":null}]},{"songId":"1129654349","songName":"Ordinary Man","albumsPicUrl":null,"copyrightId":"6005973LY1H","image":"//cdnmusic.migu.cn/picture/2020/0113/1456/AS6654e9a0312473923b63ef71474e6f79.jpg","duration":"00:05:01","playCount":"7","albumId":"1129654348","albumName":"Ordinary Man","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"31562","singerName":"Ozzy Osbourne","image":null},{"singerId":"4774","singerName":"Elton John","image":null}]},{"songId":"1127806282","songName":"7 rings(live)(Explicit)","albumsPicUrl":null,"copyrightId":"6005662JGZM","image":"//cdnmusic.migu.cn/picture/2019/1224/1749/AS4d60e47347874a5a980d6f0554baeeda.jpg","duration":"00:03:46","playCount":"3","albumId":"1127806243","albumName":"k bye for now(swt live)(Explicit)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000237276","singerName":"Ariana Grande","image":null}]},{"songId":"1130054023","songName":"No Judgement","albumsPicUrl":null,"copyrightId":"6005662L8R3","image":"//cdnmusic.migu.cn/picture/2020/0221/1535/AS89618c151cbc431b2a0a2d8088fd75a3.jpg","duration":"00:02:56","playCount":"0","albumId":"1130054022","albumName":"No Judgement","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001067737","singerName":"Niall Horan","image":null}]},{"songId":"1129698309","songName":"Ei8ht Mile(Explicit)","albumsPicUrl":null,"copyrightId":"6005973LR5C","image":"//cdnmusic.migu.cn/picture/2020/0221/1514/AS5e7601dce68adb25aa6716096beef6fa.jpg","duration":"00:02:56","playCount":"0","albumId":"1129711936","albumName":"Ei8ht Mile","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1110303796","singerName":"DigDat","image":null},{"singerId":"1113101689","singerName":"Aitch","image":null}]},{"songId":"1130143826","songName":"Take Me Home","albumsPicUrl":null,"copyrightId":"6005973LY9K","image":"//cdnmusic.migu.cn/picture/2020/0226/2335/AS602ba4a3648bd472f363a0e49c1f581f.jpg","duration":"00:03:21","playCount":"0","albumId":"1130143814","albumName":"Restless Road - EP","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002963371","singerName":"Kane Brown","image":null},{"singerId":"1130143812","singerName":"Restless Road","image":null}]},{"songId":"1130067465","songName":"HAPPY WITHOUT ME","albumsPicUrl":null,"copyrightId":"6005973LX0E","image":"//cdnmusic.migu.cn/picture/2020/0218/1721/AS3774388041a1bc499cd63b1cb7b57ac1.jpg","duration":"00:02:58","playCount":"0","albumId":"1130111415","albumName":"ALL ABOUT LUV (Extended Version)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002217989","singerName":"Monsta X","image":null}]},{"songId":"1130067459","songName":"BESIDE U","albumsPicUrl":null,"copyrightId":"6005973LX0N","image":"//cdnmusic.migu.cn/picture/2020/0218/1721/AS3774388041a1bc499cd63b1cb7b57ac1.jpg","duration":"00:03:08","playCount":"0","albumId":"1130111415","albumName":"ALL ABOUT LUV (Extended Version)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002217989","singerName":"Monsta X","image":null},{"singerId":"469794","singerName":"Pitbull","image":null}]},{"songId":"1130136803","songName":"I Don't Care","albumsPicUrl":null,"copyrightId":"6005752BJYZ","image":"//cdnmusic.migu.cn/picture/2020/0304/0928/ASa5a7e033791753db891bb27593c7940a.jpg","duration":"00:03:40","playCount":"0","albumId":"1129758566","albumName":"2020 GRAMMY® Nominees","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001059221","singerName":"Ed Sheeran","image":null},{"singerId":"953362","singerName":"Justin Bieber","image":null}]},{"songId":"1130067261","songName":"The Power of Love II","albumsPicUrl":null,"copyrightId":"6005973LX3F","image":"//cdnmusic.migu.cn/picture/2020/0221/1807/AS6b65b00d62ce9f01bfd6874b5c28aad5.jpg","duration":"00:03:19","playCount":"0","albumId":"1130067260","albumName":"Love Regenerator 2","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1129864968","singerName":"Love Regenerator","image":null},{"singerId":"35721","singerName":"Calvin Harris","image":null}]},{"songId":"1130058464","songName":"Copy Cat","albumsPicUrl":null,"copyrightId":"6005752BZUL","image":"//cdnmusic.migu.cn/picture/2020/0302/1942/AS04ba3acfebd6451b1a62f82b9fcf9411.jpg","duration":"00:03:52","playCount":"0","albumId":"1130058463","albumName":"Copy Cat","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001223332","singerName":"Melanie Martinez","image":null},{"singerId":"1106461240","singerName":"Tierra Whack","image":null}]},{"songId":"1129870497","songName":"Forever Yours (Avicii Tribute)","albumsPicUrl":null,"copyrightId":"6005662JVC9","image":"//cdnmusic.migu.cn/picture/2020/0221/1807/AS8dd5a09558910852a5467d643a181675.jpg","duration":"00:03:13","playCount":"0","albumId":"1129870513","albumName":"Forever Yours (Avicii Tribute)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000235723","singerName":"Avicii","image":null},{"singerId":"1002197713","singerName":"Kygo","image":null},{"singerId":"1104936747","singerName":"Sandro Cavazza","image":null}]},{"songId":"1129733895","songName":"Wine, Beer, Whiskey","albumsPicUrl":null,"copyrightId":"6005662JRD6","image":"//cdnmusic.migu.cn/picture/2020/0118/2307/AS692bd1f3c44983b26b8025279f463f66.jpg","duration":"00:03:16","playCount":"0","albumId":"1129659947","albumName":"Nightfall","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001752639","singerName":"Little Big Town","image":null}]},{"songId":"1130126103","songName":"This is Us","albumsPicUrl":null,"copyrightId":"6005973LX9J","image":"//cdnmusic.migu.cn/picture/2020/0302/1942/AS5a180f9d27741c6bd5634b33102b2940.jpg","duration":"00:03:25","playCount":"0","albumId":"1130126099","albumName":"This is Us","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1004664709","singerName":"Noah Cyrus","image":null},{"singerId":"1112370294","singerName":"Jimmie Allen","image":null}]},{"songId":"1130054599","songName":"No Shame","albumsPicUrl":null,"copyrightId":"6005662L6KY","image":"//cdnmusic.migu.cn/picture/2020/0211/1707/AS0afdce9735efa1eeb266d887b52e60a9.jpg","duration":"00:03:10","playCount":"0","albumId":"1130054795","albumName":"No Shame","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001573491","singerName":"5 Seconds Of Summer","image":null}]},{"songId":"1130116410","songName":"Used To Love (Acoustic Version)","albumsPicUrl":null,"copyrightId":"6005973LX1U","image":"//cdnmusic.migu.cn/picture/2020/0221/1807/AS0e194caf198af99b613ceba545a9180f.jpg","duration":"00:03:31","playCount":"0","albumId":"1130126806","albumName":"Used To Love (Acoustic Version)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001064196","singerName":"Martin Garrix","image":null},{"singerId":"1004529680","singerName":"Dean Lewis","image":null}]},{"songId":"1129698104","songName":"Still Learning","albumsPicUrl":null,"copyrightId":"6005662JRAB","image":"//cdnmusic.migu.cn/picture/2020/0225/1114/AS5ee90c9bdd1a3636b6da0d0642f840a0.jpg","duration":"00:03:31","playCount":"0","albumId":"1129698102","albumName":"Manic (Explicit)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001990955","singerName":"Halsey","image":null}]},{"songId":"1129655986","songName":"Dance Again","albumsPicUrl":null,"copyrightId":"6005662JN5K","image":"//cdnmusic.migu.cn/picture/2020/0207/1935/AS861f96b4a2c2836298f277818936df18.jpg","duration":"00:02:50","playCount":"16","albumId":"1129667784","albumName":"Rare (Explicit)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"121523","singerName":"Selena Gomez","image":null}]},{"songId":"1129655984","songName":"Ring","albumsPicUrl":null,"copyrightId":"6005662JN5Q","image":"//cdnmusic.migu.cn/picture/2020/0207/1935/AS861f96b4a2c2836298f277818936df18.jpg","duration":"00:02:28","playCount":"9","albumId":"1129655974","albumName":"Rare (Clean)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"121523","singerName":"Selena Gomez","image":null}]},{"songId":"1129655983","songName":"People You Know","albumsPicUrl":null,"copyrightId":"6005662JN41","image":"//cdnmusic.migu.cn/picture/2020/0207/1935/ASf96f4394277fdd775737594face0a7ec.jpg","duration":"00:03:14","playCount":"9","albumId":"1129655974","albumName":"Rare (Clean)","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"121523","singerName":"Selena Gomez","image":null}]},{"songId":"1126313779","songName":"Macavity (电影《猫》插曲)","albumsPicUrl":null,"copyrightId":"6005662JEBD","image":"//cdnmusic.migu.cn/picture/2019/1230/1043/ASa59683c5e99e4944b22f24b4962f547b.jpg","duration":"00:05:11","playCount":"158","albumId":"1126313561","albumName":"《猫》电影原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"288906","singerName":"Taylor Swift","image":null}]}],"id":"23846713"},{"title":"影视榜","icon":"//cdnmusic.migu.cn/tycms_picture/19/11/325/191121163714391_114x53_6505.png","image":null,"url":null,"items":[{"songId":"1130126780","songName":"终于(电视剧《两世欢》片头主题曲)","albumsPicUrl":null,"copyrightId":"69906400824","image":"//cdnmusic.migu.cn/picture/2020/0225/0949/AS632bcb098242118df5d9514f57e7a065.jpg","duration":"00:03:38","playCount":"0","albumId":"1130161437","albumName":"《两世欢》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106607998","singerName":"双笙","image":null}]},{"songId":"1130067277","songName":"知晚(电视剧《两世欢》插曲)","albumsPicUrl":null,"copyrightId":"69906400821","image":"//cdnmusic.migu.cn/picture/2020/0224/1521/AS0753926d178e413ce92960dd40a09b69.jpg","duration":"00:03:19","playCount":"0","albumId":"1130067276","albumName":"知晚","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106617115","singerName":"叶炫清","image":null}]},{"songId":"1129797040","songName":"心欲止水(电视剧《三生三世枕上书》插曲)","albumsPicUrl":null,"copyrightId":"63372901682","image":"//cdnmusic.migu.cn/picture/2020/0219/1042/ASc54607bfbd9aee48839193b86445d292.jpg","duration":"00:04:32","playCount":"0","albumId":"1130100204","albumName":"《三生三世枕上书》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002043559","singerName":"张碧晨","image":null}]},{"songId":"1129805463","songName":"心光(电视剧《下一站是幸福》主题曲)","albumsPicUrl":null,"copyrightId":"69911701370","image":"//cdnmusic.migu.cn/picture/2020/0202/1149/AS67297f2d89efeb3f54ba81bf0fd5112a.jpg","duration":"00:03:52","playCount":"0","albumId":"1129805460","albumName":"《下一站是幸福》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000002548","singerName":"胡夏","image":null}]},{"songId":"1129666511","songName":"拆心 (电视剧《绝代双骄》片尾曲)","albumsPicUrl":null,"copyrightId":"63681001098","image":"//cdnmusic.migu.cn/picture/2020/0114/1814/AS9484c020ea2d6c79690bdffc4480854e.jpg","duration":"00:04:26","playCount":"49","albumId":"1129666508","albumName":"拆心","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"127751","singerName":"刘惜君","image":null}]},{"songId":"1129665918","songName":"今夏 (电视剧《锦衣之下》插曲)","albumsPicUrl":null,"copyrightId":"6005752BE4F","image":"//cdnmusic.migu.cn/picture/2020/0206/1835/AS189b9c1781847ab64be6315d23b589c3.jpg","duration":"00:04:01","playCount":"80","albumId":"1129665916","albumName":"今夏","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002203118","singerName":"谭松韵","image":null}]},{"songId":"1129666510","songName":"双骄 (电视剧《绝代双骄》片头曲)","albumsPicUrl":null,"copyrightId":"63681001096","image":"//cdnmusic.migu.cn/picture/2020/0114/2200/AS3534d1d2a0d9d61def13b388fe789b58.jpg","duration":"00:04:23","playCount":"1","albumId":"1129666506","albumName":"双骄","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000003456","singerName":"金志文","image":null}]},{"songId":"1128016003","songName":"现在的我(电视剧《精英律师》插曲)","albumsPicUrl":null,"copyrightId":"69907000736","image":"//cdnmusic.migu.cn/picture/2020/0220/1428/AS8954084e66fe4de0e97e175ef3f61efd.jpg","duration":"00:03:36","playCount":"1526","albumId":"1130123066","albumName":"《精英律师》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000002549","singerName":"吉克隽逸","image":null}]},{"songId":"1130137123","songName":"还盼相见（电视剧《新世界》柳如丝人物主题曲）","albumsPicUrl":null,"copyrightId":"6005752C544","image":"//cdnmusic.migu.cn/picture/2020/0306/1635/AS023acea4aaf0c584c3c0daaf94d04cf7.jpg","duration":"00:04:54","playCount":"0","albumId":"1130137120","albumName":"还盼相见","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1130137223","singerName":"李纯","image":null}]},{"songId":"1130101301","songName":"时光成语花落地（电视剧《完美关系》片尾曲）","albumsPicUrl":null,"copyrightId":"69911701385","image":"//cdnmusic.migu.cn/picture/2020/0217/1642/AS9db8c00f2fb795d244b250dd4d3f29d1.jpg","duration":"00:04:42","playCount":"0","albumId":"1130101294","albumName":"《完美关系》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000127732","singerName":"宁桓宇","image":null}]},{"songId":"1129661269","songName":"爱不老(电视剧《爱情公寓5》特邀片尾曲)","albumsPicUrl":null,"copyrightId":"63372901678","image":"//cdnmusic.migu.cn/picture/2020/0120/2149/AS38e54dcfffa7e28ec904ca7eab7cd4ab.jpg","duration":"00:03:56","playCount":"1","albumId":"1129661267","albumName":"爱不老-罗震环2020全新个人EP","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"942932","singerName":"罗震环","image":null}]},{"songId":"1130067310","songName":"渴望遇见(电视剧《谁都渴望遇见你》主题曲)","albumsPicUrl":null,"copyrightId":"69535601118","image":"//cdnmusic.migu.cn/picture/2020/0225/1214/AS54515444f30960bad270f23eaea10767.jpg","duration":"00:05:06","playCount":"0","albumId":"1130067309","albumName":"渴望遇见","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002043527","singerName":"周深","image":null}]},{"songId":"1125370821","songName":"一天(电视剧《想见你》插曲)","albumsPicUrl":null,"copyrightId":"63480216500","image":"//cdnmusic.migu.cn/picture/2019/1211/0942/AS0f8d910ad8384e539b4790480a822dd9.jpg","duration":"00:04:08","playCount":"640","albumId":"1125370820","albumName":"一天","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"366872","singerName":"黄宣","image":null}]},{"songId":"1125451082","songName":"咏春 (电影《叶问4》主题曲)","albumsPicUrl":null,"copyrightId":"69932400035","image":"//cdnmusic.migu.cn/picture/2019/1210/0907/ASe2e0c78904b649cc922574f68fe90dc3.jpg","duration":"00:04:11","playCount":"4889","albumId":"1125451080","albumName":"咏春","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"320","singerName":"李宇春","image":null}]},{"songId":"1125477723","songName":"背光(电影《被光抓走的人》主题曲)","albumsPicUrl":null,"copyrightId":"69934900009","image":"//cdnmusic.migu.cn/picture/2019/1217/2156/AS2102ee9c68824eeabb248a6ed0ae318e.jpg","duration":"00:04:48","playCount":"2775","albumId":"1125481511","albumName":"《被光抓走的人》电影原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"31013","singerName":"杨宗纬","image":null}]},{"songId":"1129661254","songName":"无法阻挡(网剧《非黑即白》片尾曲)","albumsPicUrl":null,"copyrightId":"63388708739","image":"//cdnmusic.migu.cn/picture/2020/0113/2335/AS570a193ed707f539653dedb1506cb51f.jpg","duration":"00:03:58","playCount":"13","albumId":"1129661252","albumName":"无法阻挡","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"6240","singerName":"杨培安","image":null}]},{"songId":"1129716303","songName":"叹 (电视剧《锦衣之下》插曲)","albumsPicUrl":null,"copyrightId":"6005752BK25","image":"//cdnmusic.migu.cn/picture/2020/0122/1021/AS1ef7448371883393f2a67abfd64101a3.jpg","duration":"00:03:49","playCount":"0","albumId":"1129716295","albumName":"叹","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106674051","singerName":"赵天宇","image":null},{"singerId":"1104885677","singerName":"叶青","image":null}]},{"songId":"1127804737","songName":"酷你吉娃(电影《唐人街探案3》主题曲)","albumsPicUrl":null,"copyrightId":"69906400760","image":"//cdnmusic.migu.cn/picture/2019/1224/1514/AS2b2fb030df414f5e99e4ffe54232a31e.jpg","duration":"00:03:20","playCount":"863","albumId":"1127810200","albumName":"酷你吉娃","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1114025581","singerName":"南征北战NZBZ","image":null}]},{"songId":"1129640784","songName":"素晴らしき嘘(电视剧《不知道就好的事》主题曲)","albumsPicUrl":null,"copyrightId":"60070101819","image":"//cdnmusic.migu.cn/picture/2020/0115/0856/AS95a5058dcbc68cc333a23bc71accca94.jpg","duration":"00:03:41","playCount":"39","albumId":"1129640783","albumName":"素晴らしき嘘","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000130530","singerName":"Flumpool","image":null}]},{"songId":"1129648223","songName":"回不去(电视剧《边境线之冷焰》插曲)","albumsPicUrl":null,"copyrightId":"69921700784","image":"//cdnmusic.migu.cn/picture/2020/0113/1007/AS23144becd00f76dc1a480da489908cc3.jpg","duration":"00:04:09","playCount":"59","albumId":"1129656698","albumName":"《边境线之冷焰》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"6511","singerName":"孙露","image":null}]},{"songId":"1126358477","songName":"宠爱(电影《宠爱》同名主题曲)","albumsPicUrl":null,"copyrightId":"69934900010","image":"//cdnmusic.migu.cn/picture/2020/0206/1835/AS2841db1a38e15493a4b680554de788b6.jpg","duration":"00:03:49","playCount":"632","albumId":"1126358476","albumName":"宠爱","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1002222635","singerName":"檀健次","image":null},{"singerId":"1106613096","singerName":"郭麒麟","image":null},{"singerId":"1106620990","singerName":"张子枫","image":null},{"singerId":"1110071790","singerName":"李兰迪","image":null},{"singerId":"1245","singerName":"钟汉良","image":null},{"singerId":"13511","singerName":"杨子姗","image":null},{"singerId":"28186","singerName":"吴磊","image":null},{"singerId":"35454","singerName":"陈伟霆","image":null},{"singerId":"973781","singerName":"阚清子","image":null},{"singerId":"1115100626","singerName":"钟楚曦","image":null}]},{"songId":"1125433949","songName":"再也不要(电视剧《美味满阁》片尾曲)","albumsPicUrl":null,"copyrightId":"63480216507","image":"//cdnmusic.migu.cn/picture/2019/1219/1156/ASc419cad129384991b9d45967b40b6da8.jpg","duration":"00:03:34","playCount":"41","albumId":"1125433946","albumName":"过","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000031451","singerName":"陈零九","image":null},{"singerId":"395020","singerName":"韦礼安","image":null}]},{"songId":"1126092864","songName":"当代诗人(电视剧《精英律师》片头曲)","albumsPicUrl":null,"copyrightId":"69907000733","image":"//cdnmusic.migu.cn/picture/2020/0220/1428/AS8954084e66fe4de0e97e175ef3f61efd.jpg","duration":"00:04:20","playCount":"707","albumId":"1130123066","albumName":"《精英律师》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000937062","singerName":"阿云嘎","image":null}]},{"songId":"3826392","songName":"谁伴我闯荡 (电影《BEYOND日记之莫欺少年穷》插曲)","albumsPicUrl":null,"copyrightId":"6005662LKVD","image":"//cdnmusic.migu.cn/picture/2019/1114/1914/AS03698bb5257a4efb831bfbfbef9b682e.jpg","duration":"00:04:15","playCount":"6595","albumId":"1000688245","albumName":"Recognition","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1574","singerName":"Beyond","image":null}]},{"songId":"1125454454","songName":"梦之路 (电影《只有芸知道》主题曲)","albumsPicUrl":null,"copyrightId":"69906400742","image":"//cdnmusic.migu.cn/picture/2019/1206/2300/ASbc0e552bdbd14f76a8b8af4b111911b1.jpg","duration":"00:03:10","playCount":"242","albumId":"1125454453","albumName":"梦之路","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"335","singerName":"杨坤","image":null}]},{"songId":"1130101297","songName":"透明的存在（电视剧《完美关系》插曲）","albumsPicUrl":null,"copyrightId":"69911701387","image":"//cdnmusic.migu.cn/picture/2020/0217/1642/AS9db8c00f2fb795d244b250dd4d3f29d1.jpg","duration":"00:04:20","playCount":"0","albumId":"1130101294","albumName":"《完美关系》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000131604","singerName":"许靖韵","image":null}]},{"songId":"1130101295","songName":"那些没有说出口的话（电视剧《完美关系》情感主题曲）","albumsPicUrl":null,"copyrightId":"69911701388","image":"//cdnmusic.migu.cn/picture/2020/0217/1642/AS9db8c00f2fb795d244b250dd4d3f29d1.jpg","duration":"00:03:28","playCount":"0","albumId":"1130101294","albumName":"《完美关系》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"338","singerName":"容祖儿","image":null}]},{"songId":"1129641610","songName":"爱过(电视剧《还没爱够》主题曲)","albumsPicUrl":null,"copyrightId":"69535601089","image":"//cdnmusic.migu.cn/picture/2020/0114/1449/ASd975c3fcd324b4d799db5b3e2048ea60.jpg","duration":"00:04:28","playCount":"54","albumId":"1129647900","albumName":"《还没爱够》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"127324","singerName":"樊凡","image":null}]},{"songId":"1129647905","songName":"燃烧(电视剧《还没爱够》片尾曲)","albumsPicUrl":null,"copyrightId":"69535601100","image":"//cdnmusic.migu.cn/picture/2020/0114/1449/ASd975c3fcd324b4d799db5b3e2048ea60.jpg","duration":"00:04:42","playCount":"5","albumId":"1129647900","albumName":"《还没爱够》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"127324","singerName":"樊凡","image":null}]},{"songId":"1125564508","songName":"漂(电视剧《梦在海这边》主题曲)","albumsPicUrl":null,"copyrightId":"63388708686","image":"//cdnmusic.migu.cn/picture/2019/1216/2128/AS55eb278be43841e19661bde029e02fa1.jpg","duration":"00:03:50","playCount":"1235","albumId":"1125564505","albumName":"漂","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000132154","singerName":"阿肆","image":null}]},{"songId":"1129662791","songName":"我一直都在这里(电影《熊出没·狂野大陆》主题曲)","albumsPicUrl":null,"copyrightId":"69906400774","image":"//cdnmusic.migu.cn/picture/2020/0114/1428/ASfc54f5752be529a636719bac6c1d4c09.jpg","duration":"00:03:46","playCount":"90","albumId":"1129662790","albumName":"我一直都在这里","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"290049","singerName":"徐佳莹","image":null}]},{"songId":"1129671695","songName":"你的情歌(电影《你的情歌》主题曲)","albumsPicUrl":null,"copyrightId":"63793703872","image":"//cdnmusic.migu.cn/picture/2020/0120/1009/AS57037df69bb8129a27c94f3c279e66ba.jpg","duration":"00:04:43","playCount":"0","albumId":"1129758235","albumName":"《你的情歌》电影原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"10556","singerName":"Tank","image":null}]},{"songId":"1129665964","songName":"莞尔（网剧《萌医甜妻》主题曲）","albumsPicUrl":null,"copyrightId":"63793703865","image":"//cdnmusic.migu.cn/picture/2020/0114/2342/ASde72101be6e4cc1345f9058aa561f9b8.jpg","duration":"00:04:13","playCount":"31","albumId":"1129665963","albumName":"莞尔","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000000616","singerName":"郁可唯","image":null}]},{"songId":"1129755212","songName":"若我仍少年 (网络剧《蓬莱间》“河豚毒”单元主题曲)","albumsPicUrl":null,"copyrightId":"6005752BKDC","image":"//cdnmusic.migu.cn/picture/2020/0123/1042/AS3304fa44cc7e4d0146a5c73162921c9e.jpg","duration":"00:04:01","playCount":"0","albumId":"1129994647","albumName":"《蓬莱间》网剧原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1003216006","singerName":"简弘亦","image":null}]},{"songId":"1129670403","songName":"像风(电视剧《将夜2》插曲)","albumsPicUrl":null,"copyrightId":"69929400065","image":"//cdnmusic.migu.cn/picture/2020/0116/2335/ASc7b43ca5e23f28d958b2d59a0f030d08.jpg","duration":"00:03:40","playCount":"0","albumId":"1129670402","albumName":"像风","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"10253","singerName":"郭静","image":null}]},{"songId":"1129662160","songName":"我想你了(电影《抵达之谜》主题曲)","albumsPicUrl":null,"copyrightId":"69924700321","image":"//cdnmusic.migu.cn/picture/2020/0113/2335/AS1e36faa15203ff9933b0f61e638f61df.jpg","duration":"00:04:16","playCount":"475","albumId":"1129662157","albumName":"我想你了","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000003456","singerName":"金志文","image":null}]},{"songId":"1129379152","songName":"正义之狮(电视剧《你好检察官》主题曲)","albumsPicUrl":null,"copyrightId":"6008460GK9N","image":"//cdnmusic.migu.cn/picture/2020/0107/1721/AS8d69a12600f14c10af9dd974b1fb6603.jpg","duration":"00:03:10","playCount":"479","albumId":"1129379151","albumName":"正义之狮","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"31975","singerName":"萧敬腾","image":null}]},{"songId":"1125499111","songName":"我是如此相信 (电影《天火》主题曲)","albumsPicUrl":null,"copyrightId":"60054704118","image":"//cdnmusic.migu.cn/picture/2019/1219/1128/ASbc3e8e5653dc4207919ce3423eae5593.jpg","duration":"00:04:26","playCount":"126679","albumId":"1125499110","albumName":"我是如此相信","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"112","singerName":"周杰伦","image":null}]},{"songId":"1125473953","songName":"冬天里的一把火 (电影《天火》推广曲)","albumsPicUrl":null,"copyrightId":"69934900008","image":"//cdnmusic.migu.cn/picture/2019/1209/1528/AS2096ce6af9254f7bb1f01fbb29646914.jpg","duration":"00:03:40","playCount":"1481","albumId":"1125473952","albumName":"冬天里的一把火","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1110074819","singerName":"王菊","image":null}]},{"songId":"1129668862","songName":"给妈咪(电影《囧妈》宣传主题曲)","albumsPicUrl":null,"copyrightId":"69924700324","image":"//cdnmusic.migu.cn/picture/2020/0115/2335/AS5cb40fefc18ffee1384b3e77ab2f45b6.jpg","duration":"00:04:24","playCount":"131","albumId":"1129668860","albumName":"给妈咪","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1004674393","singerName":"王一博","image":null}]},{"songId":"1128335409","songName":"明明 (电视剧《拜托请你爱我》插曲)","albumsPicUrl":null,"copyrightId":"69911701362","image":"//cdnmusic.migu.cn/picture/2019/1230/1015/ASd9fa93b0076b4371b4de548e9bc02926.jpg","duration":"00:04:54","playCount":"227","albumId":"1128335407","albumName":"《拜托请你爱我》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1001453417","singerName":"张恋歌","image":null}]},{"songId":"1127752158","songName":"挽救 (电视剧《拜托请你爱我》片尾曲)","albumsPicUrl":null,"copyrightId":"69911701361","image":"//cdnmusic.migu.cn/picture/2019/1230/1015/ASd9fa93b0076b4371b4de548e9bc02926.jpg","duration":"00:04:14","playCount":"52","albumId":"1128335407","albumName":"《拜托请你爱我》电视原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000127732","singerName":"宁桓宇","image":null}]},{"songId":"1130138592","songName":"等归燕 (网络剧《医妃难囚3》插曲)","albumsPicUrl":null,"copyrightId":"63388708779","image":"//cdnmusic.migu.cn/picture/2020/0228/2356/AS65c4385e4b5506e126e493baa1fa7810.jpg","duration":"00:04:19","playCount":"0","albumId":"1130151134","albumName":"《医妃难囚3》网络剧原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000077224","singerName":"鲁士郎","image":null}]},{"songId":"1129667179","songName":"借我一生(电视剧《将夜2》插曲)","albumsPicUrl":null,"copyrightId":"69929400063","image":"//cdnmusic.migu.cn/picture/2020/0115/1356/AS426a0657e8c6a6aac1b03eef7c41b666.jpg","duration":"00:04:16","playCount":"2","albumId":"1129667178","albumName":"借我一生","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"965089","singerName":"张芸京","image":null}]},{"songId":"1129668361","songName":"手绘的美好 (网络剧《蓬莱间》甜蜜版主题曲)","albumsPicUrl":null,"copyrightId":"6005752BE74","image":"//cdnmusic.migu.cn/picture/2020/0120/1009/AS2af1f0c4895c60cd9d753e75a582c1db.jpg","duration":"00:03:32","playCount":"0","albumId":"1129994647","albumName":"《蓬莱间》网剧原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000972204","singerName":"银临","image":null}]},{"songId":"1128496740","songName":"狂浪(电影《紧急救援》宣传曲)","albumsPicUrl":null,"copyrightId":"69934500070","image":"//cdnmusic.migu.cn/picture/2019/1227/1100/AS6e209871048d43cebb4d4e07757abdaf.jpg","duration":"00:03:04","playCount":"283","albumId":"1128496738","albumName":"狂浪","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106909316","singerName":"王彦霖","image":null},{"singerId":"1108538564","singerName":"徐洋","image":null},{"singerId":"1111328312","singerName":"李岷城","image":null},{"singerId":"1115639197","singerName":"王雨甜","image":null},{"singerId":"318973","singerName":"陈家乐","image":null},{"singerId":"6638","singerName":"彭于晏","image":null},{"singerId":"1110123331","singerName":"辛芷蕾","image":null}]},{"songId":"1125477597","songName":"亡羊 (电影《误杀》主题曲)","albumsPicUrl":null,"copyrightId":"6005751Y4XT","image":"//cdnmusic.migu.cn/picture/2019/1212/1735/ASe0a925fdaf4344c7b8c424a7c9fe2696.jpg","duration":"00:04:22","playCount":"3208","albumId":"1125477596","albumName":"亡羊","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"31975","singerName":"萧敬腾","image":null}]},{"songId":"1130124195","songName":"洛缘诀(网剧《医妃难囚3》片尾曲)","albumsPicUrl":null,"copyrightId":"63388708773","image":"//cdnmusic.migu.cn/picture/2020/0225/1215/AS77b2f084cc970bc4d1965dae7b1d8be4.jpg","duration":"00:04:17","playCount":"0","albumId":"1130124194","albumName":"洛缘诀","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000006413","singerName":"李行亮","image":null}]},{"songId":"1130055181","songName":"好着迷(《奈何BOSS要娶我2》网络剧插曲)","albumsPicUrl":null,"copyrightId":"63253802711","image":"//cdnmusic.migu.cn/picture/2020/0213/1456/AS0066c1207fc7504de7df110a600ebf62.jpg","duration":"00:03:40","playCount":"0","albumId":"1130055182","albumName":"《奈何BOSS要娶我2》网络剧原声","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1000037657","singerName":"王瑞淇","image":null}]},{"songId":"1129639896","songName":"Possible(电视剧《传奇王子2：贵族诞生》主题曲)","albumsPicUrl":null,"copyrightId":"69931134651","image":"//cdnmusic.migu.cn/picture/2020/0114/1449/AS0dc098c1e2baa732436f0cae8b69efd9.jpg","duration":"00:04:43","playCount":"11","albumId":"1129639894","albumName":"Possible","mvCopyrightId":null,"mvId":null,"singerStr":null,"singers":[{"singerId":"1106619929","singerName":"片寄涼太","image":null}]}],"id":"23846889"}]</script>
<!-- 音乐人 -->
<div id="musician" class="section">
<div class="container">
<div class="section-header">
<h2 class="title">音乐人</h2>
<a class="more" href="https://i.migu.cn" target = "_blank">更多<i class="iconfont cf-gengduo"></i></a>
</div>
</div>
<div class="common-swiper-container">
<div class="container">
<div class="swiper-container" id="musician-swiper">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130169692" target="_blank" class="img-box">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0306/2221/AS9cfcdabb50eb827ba89fde5d769de02c.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="惊蛰" class="img-block lazy-img img-full">
</a>
<span class="album-play" data-id="1130169692"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/album/1130169692" target = "_blank">惊蛰</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1115079207" target = "_blank">Sand</a>
 / <a href="/v3/music/artist/1114912177" target = "_blank">W-buster</a>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130173778" target="_blank" class="img-box">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0309/2335/AS67237d965e26075b5f8ea95f7a28deff.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="星河" class="img-block lazy-img img-full">
</a>
<span class="album-play" data-id="1130173778"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/album/1130173778" target = "_blank">星河</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1130173777" target = "_blank">Jinny嘉音</a>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130173478" target="_blank" class="img-box">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0310/0935/AS24555b0dfe7e49fe028a228d48b18fc0.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="在一起" class="img-block lazy-img img-full">
</a>
<span class="album-play" data-id="1130173478"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/album/1130173478" target = "_blank">在一起</a>
</p>
<p class="singer">
<a href="/v3/music/artist/320363" target = "_blank">再循环乐队</a>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130166981" target="_blank" class="img-box">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/1842/AScc215035706c4f6ef3141bfab318be0e.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="Incantation" class="img-block lazy-img img-full">
</a>
<span class="album-play" data-id="1130166981"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/album/1130166981" target = "_blank">Incantation</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1130166980" target = "_blank">T5UMUT5UMU</a>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130166450" target="_blank" class="img-box">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/2335/ASc3a1ee70156d3dd8732f1150d44d74fd.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="AM" class="img-block lazy-img img-full">
</a>
<span class="album-play" data-id="1130166450"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/album/1130166450" target = "_blank">AM</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000000542" target = "_blank">李霄云</a>
</p>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130160676" target="_blank" class="img-box">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/2335/AS5f2faf5f57f9a7634e7cbaf86d86b30d.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="在心上建一座星球" class="img-block lazy-img img-full">
</a>
<span class="album-play" data-id="1130160676"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/album/1130160676" target = "_blank">在心上建一座星球</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1130160671" target = "_blank">李佳劼</a>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130168452" target="_blank" class="img-box">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/2335/ASa4b23fa2706b073c193ef42fff007aa4.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="眨眼睛" class="img-block lazy-img img-full">
</a>
<span class="album-play" data-id="1130168452"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/album/1130168452" target = "_blank">眨眼睛</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1002134846" target = "_blank">刘轩蓁</a>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130164475" target="_blank" class="img-box">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0305/0935/AS148fa3d1621cd7391db64486f7a8c5c8.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="逃跑的伤疤" class="img-block lazy-img img-full">
</a>
<span class="album-play" data-id="1130164475"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/album/1130164475" target = "_blank">逃跑的伤疤</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1108752464" target = "_blank">杜婧荧</a>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130145213" target="_blank" class="img-box">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0302/2335/AS5d95af9f6fbddbff5f54480077a00b94.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="且坐吃茶" class="img-block lazy-img img-full">
</a>
<span class="album-play" data-id="1130145213"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/album/1130145213" target = "_blank">且坐吃茶</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1125435074" target = "_blank">袁依琳</a>
</p>
</div>
</div>
</div>
<div class="swiper-slide-item">
<div class="thumb">
<div class="item-box">
<a href="/v3/music/album/1130145218" target="_blank" class="img-box">
<img src="/b/picture/img_default_240x240.jpg" data-src="/b///cdnmusic.migu.cn/picture/2020/0303/2335/ASaab8949705805587e0c906d3b76aa072.jpg" onerror="this.src='/b///cdnmusic.migu.cn/v3/img/common/default/img_default_240x240.jpg'" alt="摆渡车上的人" class="img-block lazy-img img-full">
</a>
<span class="album-play" data-id="1130145218"><img class="cf-play" src="/b/picture/btn-play.png"></span>
</div>
<div class="item-info">
<p class="song-name">
<a href="/v3/music/album/1130145218" target = "_blank">摆渡车上的人</a>
</p>
<p class="singer">
<a href="/v3/music/artist/1000022427" target = "_blank">郑冰冰</a>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="slide-action slide-action-left">
<div class="arrow-button arrow-left"></div>
</div>
<div class="slide-action slide-action-right">
<div class="arrow-button arrow-right"></div>
</div>
</div>
<div class="container">
<div class="swiper-pagination" id="musician-swiper-pagination"></div>
</div>
</div>
<!-- footer -->
<div id="footer">
<div class="footer-info">
<div class="container">
<div class="footer-swap footer-item">
<div class="migu-family migu-info">
<p class="migu-title">咪咕音乐家族</p>
<ul>
<li><a href="http://ivr.migu.cn/" target="_blank">IVR</a></li>
<li><a href="http://211.137.107.18:8888/page/cm/login.jsp" target="_blank">企业彩铃</a></li>
<!-- <li><a href="http://ising.migu.cn/" target="_blank">咪咕爱唱（TV版）</a></li> -->
<li><a href="https://zgyd.diyring.cc/web/webhome/index" target="_blank">个性彩铃</a></li>
</ul>
</div>
<div class="migu-contact migu-info">
<p class="migu-title">联系我们</p>
<ul>
<li><a href="http://music.migu.cn/v2/common/cooperation">业务合作</a></li>
<li><a href="http://open.migu.cn/" target="_blank">开放平台</a></li>
<li><a href="javascript:;" class="J-go-kf">常见问题</a></li>
<li><a href="http://music.migu.cn/v2/common/musicianCooperation" target="_blank">咪咕音乐人合作</a></li>
<!-- <li><a href="https://i.migu.cn" target="_blank">咪咕音乐人合作</a></li> -->
<li><a href="http://music.migu.cn/v2/common/contactus">联系我们</a></li>
</ul>
</div>
</div>
<div class="footer-focus footer-item">
<p class="migu-title">关注我们</p>
<div class="focus-way">
<a href="https://www.weibo.com/10658830" class="focus-sina" target="_blank"></a>
<a href="javascript:;" class="focus-wx">
<img src="/b/picture/migu_gzh.png" alt="咪咕视频客户端下载二维码" class="img-block img-full">
</a>
</div>
</div>
<div class="footer-qrcode footer-item">
<p class="migu-title">咪咕客户端</p>
<ul>
<li class="qrcode-a">
<img src="/b/picture/ecode.png" alt="咪咕音乐客户端下载二维码"
class="img-block img-full">
<p>咪咕音乐</p>
</li>
<li>
<img src="/b/picture/miguvideo_ewm.jpg" alt="咪咕视频客户端下载二维码" class="img-block img-full">
<p>咪咕视频</p>
</li>
</ul>
</div>
</div>
</div>
<div class="copyright">
<div class="container">
<div class="c-link">
<ul>
<li>
<a href="/v3/api/user/sso?redirectType=PC_MIGU&amp;redirectUrl=http://www.migu.cn/index.html" target="_blank">咪咕文化</a>
<span class="split-line"></span>
</li>
<li>
<a href="/v2/common/profile" target="_blank">咪咕音乐简介</a>
<span class="split-line"></span>
</li>
<li>
<a href="/v2/common/copyright" target="_blank">版权声明</a>
<span class="split-line"></span>
</li>
<li>
<a href="/v2/common/news" target="_blank">新闻动态</a>
<span class="split-line"></span>
</li>
<li>
<a href="/v2/common/link" target="_blank">友情链接</a>
<span class="split-line"></span>
</li>
<li>
<a href="/v2/common/map" target="_blank">网站地图</a>
<span class="split-line"></span>
</li>
<li>
<a href="https://passport.migu.cn/portal/protocol?sourceid=220001" target="_blank">服务协议</a>
<span class="split-line"></span>
</li>
<li>
<a href="https://passport.migu.cn/portal/privacy/protocol?sourceid=220001" target="_blank">隐私权政策</a>
</li>
</ul>
</div>
<div class="c-auth">
<ul>
<li>蜀ICP备15012512号-1</li>
<li>川网文[2012]0762-026</li>
<li>网络视听许可证0112648号</li>
<li>增值业务许可证A2.B1.B2-20100001</li>
</ul>
</div>
<div class="c-info">Copyright &copy; 2005 - 2020 咪咕音乐有限公司</div>
</div>
</div>
</div>
<div id="offset-action" style="right: 0px; bottom: 55px; opacity: 1;">
<a href="javascript:;" id="scroll-top" title="回到顶部">
<i class="iconfont cf-shang"></i>
</a>
<a title="客服" class="action-botton action-service J-go-kf" href="javascript:;">
<b></b>
</a>
<a href="javascript:;" title="打开播放器" class="action-botton open-player">
<b></b>
</a>
</div>
<a href="javascript:;" id="J_LoginBtn" style="display: none;"></a><script src="/b/js/jquery.min.js"></script>
<script src="/b/js/manifest.js"></script>
<script src="/b/js/vendor.js"></script>
<script src="/b/js/common.js"></script>
<script src="/b/js/musicplay.js"></script>
<script src="/b/js/vms.js"></script>
<script src="/b/js/index.js"></script>
<script>
(function(){
var s=document.createElement("script"); s.async=true; s.src="/b///cdnmusic.migu.cn/v2/zt/common/js/mg_sdc_load.js";
var s2=document.getElementsByTagName("script")[0]; s2.parentNode.insertBefore(s,s2);
}());
</script></body>
</html>