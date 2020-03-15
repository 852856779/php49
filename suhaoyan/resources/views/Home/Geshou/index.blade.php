<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="format-detection" content="email=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="applicable-device" content="pc">
  <meta http-equiv="x-dns-prefetch-control" content="on">
  <link rel="dns-prefetch" href="http://music.migu.cn" />
  <link rel="dns-prefetch" href="//cdnmusic.migu.cn" />
  <link rel="shortcut icon" href="//cdnmusic.migu.cn/favicon.ico" type="image/x-icon">
  <meta name="renderer" content="webkit">
  <title>音乐-歌手-咪咕音乐网_放肆听·趣玩乐</title>
  <meta name="keywords" content="咪咕音乐,彩铃,移动彩铃,手机彩铃,中国移动,12530,mp3,高品质音乐,无损音乐,在线听歌,歌曲下载,振铃,歌曲,铃音,特级会员,电台,mv,演唱会直播,音乐网站,音乐播放器">
  <meta name="description" content="咪咕音乐网是中国移动官方音乐门户，旨在提供音乐首发、高品质音乐试听、彩铃订购、歌曲下载、铃音管理、音乐电台、音乐视频等一站式音乐互动体验，好音乐尽在music.migu.cn！">
  <link href="/h/css/global_6.css" rel="stylesheet">
  <link href="/h/css/artist.list.css" rel="stylesheet">
    <script src="/h/js/jquery.min_6.js"></script>
  <script src="/h/js/manifest_6.js"></script>
  <script src="/h/js/vendor_6.js"></script>
  <script src="/h/js/common_6.js"></script>
  <script src="/h/js/musicplay_6.js"></script>
  <script src="/h/js/artist.list.js"></script>

</head>

<body>
  <!-- header -->
  <div id="header">
    <div class="header">
      <div class="container">
        <h1 class="logo">
          <a href="/h/http://music.migu.cn" title="咪咕音乐 music.migu.cn">
            <img src="/h/picture/logo_5.png" alt="咪咕音乐 放厮听·趣玩乐"></a>
        </h1>
        <div class="nav-main">
          <ul class="nav-container">
            <li class="nav-item on">
              <a href="http://music.migu.cn">音乐</a></li>
            <li class="nav-item">
              <a href="/v3/video">现场</a></li>
            <li class="nav-item" id="J-my">
              <a href="javascript:;">我的</a></li>
          </ul>
        </div>
        <div class="nav-less">
          <div class="search smallinp">
            <div class="ipt">
              <input type="text" id="search_ipt" placeholder="搜索歌曲、歌手、MV">
              <span class="btn-search">
                <i class="iconfont cf-nav-sousuo"></i>
              </span>
            </div>
            <ul class="J_search_list">
              <li class="hotList droplist">
                <p class="searchItem hotlist_title"></p>
              </li>
              <li class="searchList">
                <div class="searchtype_container"></div>
              </li>
            </ul>
          </div>
          <ul class="nav-container">
            <li class="nav-item vip-platinum">
              <a class="nav-item-link" href="/v3/music/service/platinum" target="_blank">
                <i class="iconfont cf-nav-huiyuan"></i>
                <span>白金会员</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item-link" href="/v3/app" target="_blank">
                <i class="iconfont cf-nav-kehuduan"></i>
                <span>客户端</span></a>
            </li>
            <!-- <li class="nav-item nav-diy">
            <a class="nav-item-link" href="/v3/music/service/vrbt" target="_blank"><i class="iconfont cf-nav-cailing"></i><span>视频彩铃</span></a></li> -->
            <li class="nav-item" id="J-user-info">
              <a class="nav-item-link J_login" href="javascript:;">
                <i class="iconfont cf-nav-geren"></i>
                <span>登录</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="sub-nav">
      <div class="container">
        <ul class="sub-nav-music active-menu" style="display:block;">
          <li>
            <a href="http://music.migu.cn">首页</a></li>
          <li>
            <a href="/v3/music/digital_album">数字专辑</a></li>
          <li>
            <a href="/v3/music/playlist">歌单</a></li>
          <li>
            <a href="/v3/music/album">专辑</a></li>
          <li>
            <a href="/v3/music/top">榜单</a></li>
          <li class="on">
            <a href="/v3/music/artist">歌手</a></li>
          <li>
            <a href="/v3/music/crbt">彩铃</a></li>
          <li>
            <a href="/v3/music/topic">咪咕出品</a></li>
          <li>
            <a target="_blank" href="https://i.migu.cn">凡响·原创</a></li>
        </ul>
        <ul class="sub-nav-video" style="display:none;">
          <li>
            <a href="/v3/video">首页</a></li>
          <li>
            <a href="/v3/video/concert">演唱会</a></li>
          <li>
            <a href="/v3/video/make">独家放送</a></li>
          <li>
            <a href="/v3/video/mv">MV</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- artist-list-page -->
  <div class="artist-list-page">
    <div class="container">
      <div id="J_Filters" class="filters">
        <div class="filter language">
          <span class="active J_Tag lan" data-tag="tagId" data-value="0">华语</span>
          <span class=" J_Tag lan" data-tag="tagId" data-value="1">欧美</span>
          <span class=" J_Tag lan" data-tag="tagId" data-value="2">日韩</span></div>
        <div class="filter gender">
          <span class="active J_Tag s_sex" data-tag="type" data-value="0">男</span>
          <span class=" J_Tag s_sex" data-tag="type" data-value="1">女</span>
          <span class=" J_Tag s_sex" data-tag="type" data-value="2">组合</span></div>
        <div class="filter initial">
          <span class="active J_Tag let" data-tag="firstLetter" data-value="1">热门</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="A">A</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="B">B</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="C">C</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="D">D</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="E">E</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="F">F</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="G">G</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="H">H</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="I">I</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="J">J</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="K">K</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="L">L</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="M">M</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="N">N</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="O">O</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="P">P</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="Q">Q</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="R">R</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="S">S</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="T">T</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="U">U</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="V">V</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="W">W</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="X">X</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="Y">Y</span>
          <span class=" J_Tag let" data-tag="firstLetter" data-value="Z">Z</span></div>
      </div>

      <div id="ajaxgeshou">
      <div id="J_ArtistList" class="artist-list">
        @foreach ($data as $v)
        <div class="thumbnail">
          <a class="thumb-link" href="/geshou/{{$v->id}}" target="_blank">
            <img class="thumb-img lazy-image" src="/{{$v->s_pic}}" alt="{{$v->s_name}}">
            <span>{{$v->s_name}}</span></a>
        </div>
       @endforeach
    </div>
      </div>
      <style>.views-pagination { margin: 2.14286% 0; text-align: center; } .views-pagination>* { display: inline-block; width: 44px; height: 44px; margin: 0 .6em; line-height: 44px; text-align: center; } .views-pagination i { font-style: normal; } .views-pagination .pagination-prev, .views-pagination .pagination-next { color: #333; font-weight: bold; } .views-pagination .pagination-prev:hover, .views-pagination .pagination-next:hover { color: #e91e63; } .views-pagination .pagination-prev.disabled, .views-pagination .pagination-next.disabled { color: #ccc; } .views-pagination .pagination-item { color: #333; border-radius: 50%; } .views-pagination .pagination-item:hover, .views-pagination .pagination-item.current { background-color: #e91e63; color: #fff; } .views-pagination .pagination-ellipsis { color: #999; }</style>
      <div class="views-pagination">
        @foreach ($p as $v)
          <button class="pagination-item">{{$v}}</button>
        @endforeach
        <span class="pagination-prev disabled">
          <i>
            <</i>
        </span>
        <span class="pagination-item current">1</span>
        <span class="pagination-next disabled">
          <i>></i>
        </span>
      </div>
    </div>
  </div>

    <script>
      var lan = $(".lan");
      var s_sex = $(".s_sex");
      var let = $(".let");
      var language;
      var sex;
      var letter;
      $(lan).click(function(){
        $(lan).removeClass("active");
        $(this).addClass("active");
        language = $(this).attr("data-value");

      })

      $(s_sex).click(function(){
        $(s_sex).removeClass("active");
        $(this).addClass("active");
        sex = $(this).attr("data-value");
        // console.log(language);
      })

      $(let).click(function(){
        $(let).removeClass("active");
        $(this).addClass("active");
        letter = $(this).attr("data-value");

      })
      $(".J_Tag").click(function(){
        // console.log(language)
        $.get("/geshou",{language:language,sex:sex,letter:letter},function(data){
          // console.log(data);
          $("#ajaxgeshou").html(data);
        })
      })
     /* var language = $(this).attr("data-value");
        $.get("/geshou",{language:language},function(){
          
        }) */ 

    </script>
  <!-- /artist-list-page -->
  <!-- footer -->
  <div id="footer">
    <div class="footer-info">
      <div class="container">
        <div class="footer-swap footer-item">
          <div class="migu-family migu-info">
            <p class="migu-title">咪咕音乐家族</p>
            <ul>
              <li>
                <a href="http://ivr.migu.cn/" target="_blank">IVR</a></li>
              <li>
                <a href="http://211.137.107.18:8888/page/cm/login.jsp" target="_blank">企业彩铃</a></li>
              <!-- <li><a href="http://ising.migu.cn/" target="_blank">咪咕爱唱（TV版）</a></li> -->
              <li>
                <a href="https://zgyd.diyring.cc/web/webhome/index" target="_blank">个性彩铃</a></li>
            </ul>
          </div>
          <div class="migu-contact migu-info">
            <p class="migu-title">联系我们</p>
            <ul>
              <li>
                <a href="http://music.migu.cn/v2/common/cooperation">业务合作</a></li>
              <li>
                <a href="http://open.migu.cn/" target="_blank">开放平台</a></li>
              <li>
                <a href="javascript:;" class="J-go-kf">常见问题</a></li>
              <li>
                <a href="http://music.migu.cn/v2/common/musicianCooperation" target="_blank">咪咕音乐人合作</a></li>
              <!-- <li><a href="https://i.migu.cn" target="_blank">咪咕音乐人合作</a></li> -->
              <li>
                <a href="http://music.migu.cn/v2/common/contactus">联系我们</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-focus footer-item">
          <p class="migu-title">关注我们</p>
          <div class="focus-way">
            <a href="https://www.weibo.com/10658830" class="focus-sina" target="_blank"></a>
            <a href="javascript:;" class="focus-wx">
              <img src="/h/picture/migu_gzh_5.png" alt="咪咕视频客户端下载二维码" class="img-block img-full"></a>
          </div>
        </div>
        <div class="footer-qrcode footer-item">
          <p class="migu-title">咪咕客户端</p>
          <ul>
            <li class="qrcode-a">
              <img src="/h/picture/ecode_5.png" alt="咪咕音乐客户端下载二维码" class="img-block img-full">
              <p>咪咕音乐</p>
            </li>
            <li>
              <img src="/h/picture/miguvideo_ewm_5.jpg" alt="咪咕视频客户端下载二维码" class="img-block img-full">
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
              <a href="https://passport.migu.cn/portal/privacy/protocol?sourceid=220001" target="_blank">隐私权政策</a></li>
          </ul>
        </div>
        <div class="c-auth">
          <ul>
            <li>蜀ICP备15012512号-1</li>
            <li>川网文[2012]0762-026</li>
            <li>网络视听许可证0112648号</li>
            <li>增值业务许可证A2.B1.B2-20100001</li></ul>
        </div>
        <div class="c-info">Copyright &copy; 2005 - 2020 咪咕音乐有限公司</div></div>
    </div>
  </div>
  <div id="offset-action" style="right: 0px; bottom: 55px; opacity: 1;">
    <a href="javascript:;" id="scroll-top" title="回到顶部">
      <i class="iconfont cf-shang"></i>
    </a>
    <a title="客服" class="action-botton action-service J-go-kf" href="javascript:;">
      <b>
      </b>
    </a>
    <a href="javascript:;" title="打开播放器" class="action-botton open-player">
      <b>
      </b>
    </a>
  </div>
  <a href="javascript:;" id="J_LoginBtn" style="display: none;"></a>

  <script>(function() {
      var s = document.createElement("script");
      s.async = true;
      s.src = "//cdnmusic.migu.cn/v2/zt/common/js/mg_sdc_load.js";
      var s2 = document.getElementsByTagName("script")[0];
      s2.parentNode.insertBefore(s, s2);
    } ());</script>
</body>

</html>