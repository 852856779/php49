(window.webpackJsonp=window.webpackJsonp||[]).push([[42],{0:function(t,e,i){"use strict";var a=Object.prototype.hasOwnProperty;function n(t,e){return Array.isArray(t)?function(t,e){for(var i,a="",s="",o=Array.isArray(e),l=0;l<t.length;l++)(i=n(t[l]))&&(o&&e[l]&&(i=c(i)),a=a+s+i,s=" ");return a}(t,e):t&&"object"==typeof t?function(t){var e="",i="";for(var n in t)n&&t[n]&&a.call(t,n)&&(e=e+i+n,i=" ");return e}(t):t||""}function s(t){if(!t)return"";if("object"==typeof t){var e="";for(var i in t)a.call(t,i)&&(e=e+i+":"+t[i]+";");return e}return t+""}function o(t,e,i,a){if(!1===e||null==e||!e&&("class"===t||"style"===t))return"";if(!0===e)return" "+(a?t:t+'="'+t+'"');var n=typeof e;return"object"!==n&&"function"!==n||"function"!=typeof e.toJSON||(e=e.toJSON()),"string"==typeof e||(e=JSON.stringify(e),i||-1===e.indexOf('"'))?(i&&(e=c(e))," "+t+'="'+e+'"'):" "+t+"='"+e.replace(/'/g,"&#39;")+"'"}e.merge=function t(e,i){if(1===arguments.length){for(var a=e[0],n=1;n<e.length;n++)a=t(a,e[n]);return a}for(var o in i)if("class"===o){var l=e[o]||[];e[o]=(Array.isArray(l)?l:[l]).concat(i[o]||[])}else if("style"===o){var l=s(e[o]);l=l&&";"!==l[l.length-1]?l+";":l;var c=s(i[o]);c=c&&";"!==c[c.length-1]?c+";":c,e[o]=l+c}else e[o]=i[o];return e},e.classes=n,e.style=s,e.attr=o,e.attrs=function(t,e){var i="";for(var l in t)if(a.call(t,l)){var c=t[l];if("class"===l){c=n(c),i=o(l,c,!1,e)+i;continue}"style"===l&&(c=s(c)),i+=o(l,c,!1,e)}return i};var l=/["&<>]/;function c(t){var e=""+t,i=l.exec(e);if(!i)return t;var a,n,s,o="";for(a=i.index,n=0;a<e.length;a++){switch(e.charCodeAt(a)){case 34:s="&quot;";break;case 38:s="&amp;";break;case 60:s="&lt;";break;case 62:s="&gt;";break;default:continue}n!==a&&(o+=e.substring(n,a)),n=a+1,o+=s}return n!==a?o+e.substring(n,a):o}e.escape=c,e.rethrow=function t(e,a,n,s){if(!(e instanceof Error))throw e;if(!("undefined"==typeof window&&a||s))throw e.message+=" on line "+n,e;try{s=s||i(4).readFileSync(a,"utf8")}catch(i){t(e,null,n)}var o=3,l=s.split("\n"),c=Math.max(n-o,0),r=Math.min(l.length,n+o);var o=l.slice(c,r).map(function(t,e){var i=e+c+1;return(i==n?"  > ":"    ")+i+"| "+t}).join("\n");e.path=a;e.message=(a||"Pug")+":"+n+"\n"+o+"\n\n"+e.message;throw e}},1:function(t,e,i){var a;void 0===(a=function(){var n,s={},o=$("body"),l={},c=i(5),r={v:"1.0",index:0,Zindex:200,confirm:function(t){var e=$.extend({},t,{type:"confirm"});return r.open(e)},tip:function(t,e){var i={type:"tip",container:t,closeBtn:!1,isOverlay:!1,time:e||1500};return r.open(i)},loading:function(t){t=$.extend({closeBtn:!1,isLoding:!0,type:0,text:"拼命加载中...",showText:!1},t);return r.open(t)}},d=function(){this.defaults={container:null,isOverlay:!0,overlayClose:!1,closeBtn:!0,success:null,end:null}};d.prototype={getOptions:function(t){return $.extend({},this.defaults,t)},removeNode:function(t){t.remove()}};var u=new d,p=function(t){this.index=++r.index,this.Zindex=r.Zindex+this.index,this.creat()};return(p.pt=p.prototype).creat=function(){var t=this,e=t.index,i=t.Zindex,a=$('<div id="dialog_box'+e+'" class="dialog_box '+(s.class||"")+'"></div>');if(a.css({margin:0,padding:0,width:s.width||"auto",height:s.height||"auto","z-index":i,top:"50%",left:"50%",position:"fixed","background-color":s.isLoding?"transparent":"#fff",textAlign:s.isLoding?"center":"left"}),s.isLoding&&a.html(c(s)),s.title)a.append(function(t){var e;return function(){e=$('<div class="dialog-header"></div>');var i=$('<span class="dialog-title" title="'+s.title+'">'+s.title+"</span>"),a=$('<i class="dialog-close iconfont cf-guanbi" id="dialog_close'+t+'" title="关闭"></i>');return e.append(i).append(a),e}()}(e));else if(s.closeBtn){var l=$('<i class="dialog-close iconfont cf-diff-close cf-guanbi" id="dialog_close'+e+'" title="关闭"></i>');a.append(l)}if(s.isOverlay){var d=function(t,e){var i;return i=$('<div id="overlay'+t+'" class="overlay"></div>'),i.css({margin:0,padding:0,border:"none",width:"100%",height:"100%","z-index":e,background:"#000",opacity:"0.5",filter:"alpha(opacity=50)",position:"fixed",top:0,left:0}),i}(e,i);o.append(d)}if(o.append(a),t.dialogBox=a,"confirm"===s.type){t.yes=s.yes,t.cancel=s.cancel,n=$('<div class="confirm-layer"></div>');var u=$('<span class="btn-sure btn btn-primary">'+(s.yesText||"确定")+"</span>"),p=$('<span class="btn-cancel btn btn-gray">取消</span>');n.html('<div class="confirm-text">'+s.container+'</div><div class="operate-btn"></div>'),n.find(".operate-btn").append(u).append(p),u.click(function(){"function"==typeof t.yes&&t.yes()}),p.click(function(){"function"==typeof t.cancel&&t.cancel()})}else"tip"===s.type?(n=$('<div class="text-tip"></div>'),$("body").append('<div class="text-tip-overlay"></div>'),n.html(s.container),setTimeout(function(){$(".text-tip-overlay").remove(),r.close(e)},s.time)):n=$(s.container);return a.append(n),"tip"===s.type&&n.parent().css("background","transparent"),r.reset(e),a.find(".dialog-close").click(function(){r.close(e)}),s.overlayClose&&d.click(function(){r.close(e)}),"function"==typeof s.success&&s.success(t.index,t),a},r.close=function(t){if(!t)return $(".overlay").remove(),void $(".dialog_box").remove();var e=$("#overlay"+t);e&&u.removeNode(e),u.removeNode($("#dialog_box"+t)),"function"==typeof s.end&&s.end()},r.reset=function(t){var e=$("#dialog_box"+t),i=e.width(),a=e.height();e.css({"margin-top":-a/2,"margin-left":-i/2})},l.run=function(){r.open=function(t){(s=u.getOptions(t)).type;return(new p).index}},void 0===(a=function(){return l.run(),r}.call(e,i,e,t))||(t.exports=a),r}.call(e,i,e,t))||(t.exports=a)},133:function(t,e,i){var a;void 0===(a=function(){var t=i(134),e=1,a=i(36);i(34),i(26);var n,s,o,l,c={allCheck:$(".song-all-edit"),songCon:$(".song-outer-con"),itemClass:".billboard-item",itemEdit:".song-edit",activeClass:"on"};n=c.songCon,s=c.allCheck,o=c.itemEdit,l=c.itemClass,n.on("click",o,function(){$(this).parents(l).toggleClass("on"),p()}),s.on("click",function(){var t=n.find(l),e=!0;s.hasClass("on")&&(e=!1),t.each(function(){var t=$(this);e?t.addClass("on"):t.removeClass("on")}),p()});var r,d={boardSort:$(".board-sord"),selectAdd:$(".select-add")};function u(){return!1}function p(){var t=c.songCon,e=c.allCheck,i=c.itemClass,a=t.find(i),n=!0;a.each(function(){$(this).hasClass("on")||(n=!1)}),n&&a.length>0?e.addClass("on"):e.removeClass("on")}function f(t){switch(t){case"song":$(".song-outer-con .lazy-img").lazyload({data_attribute:"src",effect:"fadeIn"});break;case"mv":$(".video-billboard .lazy-img").lazyload({data_attribute:"src",effect:"fadeIn"});break;case"singer":$(".artist-billboard .lazy-img").lazyload({data_attribute:"src",effect:"fadeIn"});break;case"album":$(".album-billboard .lazy-img").lazyload({data_attribute:"src",effect:"fadeIn"});break;case"link":$(".music-billboard .lazy-img").lazyload({data_attribute:"src",effect:"fadeIn"})}}d.boardSort.on("click",".sord-main",function(){var t=$(this),e=t.siblings("ul"),i=t.parent();if(e.is(":animated"))return!1;i.hasClass("on")?(e.slideUp(u),i.removeClass("on")):(i.siblings(".sord-item").find("ul").slideUp(),i.siblings(".sord-item").removeClass("on"),i.addClass("on"),t.siblings("ul").slideDown(u))}),d.selectAdd.on("click",function(){$(this).siblings("ul").toggle()}),$(window).scroll(u),function(){$("#top_cover").lazyload({data_attribute:"src",effect:"fadeIn"}),$("#cover_bg").lazyload({data_attribute:"src",effect:"fadeIn"});var i=0,a=$(".top-content").data("type"),n=null;switch(a){case"song":i=Math.ceil(window.listData.songs.items.length/30),n=$("#js_songlist");break;case"mv":i=Math.ceil(window.listData.mvs.length/25),n=$(".video-billboard");break;case"singer":i=Math.ceil(window.listData.singers.length/100),n=$(".artist-billboard");break;case"album":i=Math.ceil(window.listData.albums.length/16),n=$(".album-billboard");break;case"link":i=Math.ceil(window.listData.ucLinks.length/20),n=$(".music-billboard")}i>0?"singer"!=a&&$(".top-panagition").html(t({total:i})).show():$(".empty-tips").show();var s=$(".rest-page .page-html"),o=$(".next-page"),l=$(".prev-page"),c=$(".top-panagition a");s.length>0&&n.html(s.eq(e-1).html());$(".top-loading").hide(),f(a),c.click(function(){var t=$(this);e=t.data("id"),t.hasClass("active")||r()}),$(".next-page").on("click",function(){e<i&&(e++,r())}),$(".prev-page").on("click",function(){e>1&&(e--,r())});var r=function(){c.eq(e-1).addClass("active").siblings().removeClass("active"),n.html(s.eq(e-1).html()),$(".top-loading").hide(),f(a),1==e?l.addClass("disabled"):l.removeClass("disabled"),e==i?o.addClass("disabled"):o.removeClass("disabled"),$("html,body").animate({scrollTop:140},200),p()}}(),r=$(".subscribe").data("subid"),a.searchSub($(".board-title"),r,!1),$(".subscribe").on("click",function(){a.isSubscribe($(this),r)})}.call(e,i,e,t))||(t.exports=a)},134:function(t,e,i){var a=i(0);t.exports=function(t){var e,i="",n=t||{};return function(t){if(1==t)i=i+'<span class="iconfont cf-previous-page prev-page disabled"></span><a class="active disabled" href="javascript:;" data-id="1">'+a.escape(null==(e=1)?"":e)+'</a><span class="iconfont cf-next-page next-page disabled"></span>';else{i+='<span class="iconfont cf-previous-page prev-page disabled"></span>';for(var n=1;n<=t;n++)i=1==n?i+'<a class="active" href="javascript:;"'+a.attr("data-id",n,!0,!0)+">"+a.escape(null==(e=n)?"":e)+"</a>":i+'<a href="javascript:;"'+a.attr("data-id",n,!0,!0)+">"+a.escape(null==(e=n)?"":e)+"</a>";i+='<span class="iconfont cf-next-page next-page"></span>'}}.call(this,"total"in n?n.total:"undefined"!=typeof total?total:void 0),i}},20:function(e,i){
/*! Copyright (c) 2011 Piotr Rochala (http://rocha.la)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version: 1.3.8
 *
 */
!function(e){e.fn.extend({slimScroll:function(i){var a=e.extend({width:"auto",height:"250px",size:"7px",color:"#000",position:"right",distance:"1px",start:"top",opacity:.4,alwaysVisible:!1,disableFadeOut:!1,railVisible:!1,railColor:"#333",railOpacity:.2,railDraggable:!0,railClass:"slimScrollRail",barClass:"slimScrollBar",wrapperClass:"slimScrollDiv",allowPageScroll:!1,wheelStep:20,touchScrollStep:200,borderRadius:"7px",railBorderRadius:"7px"},i);return this.each(function(){var n,s,o,l,c,r,d,u,p="<div></div>",f=30,h=!1,v=e(this);if(v.parent().hasClass(a.wrapperClass)){var g=v.scrollTop();if($=v.siblings("."+a.barClass),x=v.siblings("."+a.railClass),k(),e.isPlainObject(i)){if("height"in i&&"auto"==i.height){v.parent().css("height","auto"),v.css("height","auto");var m=v.parent().parent().height();v.parent().css("height",m),v.css("height",m)}else if("height"in i){var b=i.height;v.parent().css("height",b),v.css("height",b)}if("scrollTo"in i)g=parseInt(a.scrollTo);else if("scrollBy"in i)g+=parseInt(a.scrollBy);else if("destroy"in i)return $.remove(),x.remove(),void v.unwrap();P(g,!1,!0)}}else if(!(e.isPlainObject(i)&&"destroy"in i)){a.height="auto"==a.height?v.parent().height():a.height;var y=e(p).addClass(a.wrapperClass).css({position:"relative",overflow:"hidden",width:a.width,height:a.height});v.css({overflow:"hidden",width:a.width,height:a.height});var C,x=e(p).addClass(a.railClass).css({width:a.size,height:"100%",position:"absolute",top:0,display:a.alwaysVisible&&a.railVisible?"block":"none","border-radius":a.railBorderRadius,background:a.railColor,opacity:a.railOpacity,zIndex:90}),$=e(p).addClass(a.barClass).css({background:a.color,width:a.size,position:"absolute",top:0,opacity:a.opacity,display:a.alwaysVisible?"block":"none","border-radius":a.borderRadius,BorderRadius:a.borderRadius,MozBorderRadius:a.borderRadius,WebkitBorderRadius:a.borderRadius,zIndex:99}),w="right"==a.position?{right:a.distance}:{left:a.distance};x.css(w),$.css(w),v.wrap(y),v.parent().append($),v.parent().append(x),a.railDraggable&&$.bind("mousedown",function(i){var a=e(document);return o=!0,t=parseFloat($.css("top")),pageY=i.pageY,a.bind("mousemove.slimscroll",function(e){currTop=t+e.pageY-pageY,$.css("top",currTop),P(0,$.position().top,!1)}),a.bind("mouseup.slimscroll",function(t){o=!1,S(),a.unbind(".slimscroll")}),!1}).bind("selectstart.slimscroll",function(t){return t.stopPropagation(),t.preventDefault(),!1}),x.hover(function(){_()},function(){S()}),$.hover(function(){s=!0},function(){s=!1}),v.hover(function(){n=!0,_(),S()},function(){n=!1,S()}),v.bind("touchstart",function(t,e){t.originalEvent.touches.length&&(c=t.originalEvent.touches[0].pageY)}),v.bind("touchmove",function(t){(h||t.originalEvent.preventDefault(),t.originalEvent.touches.length)&&(P((c-t.originalEvent.touches[0].pageY)/a.touchScrollStep,!0),c=t.originalEvent.touches[0].pageY)}),k(),"bottom"===a.start?($.css({top:v.outerHeight()-$.outerHeight()}),P(0,!0)):"top"!==a.start&&(P(e(a.start).position().top,null,!0),a.alwaysVisible||$.hide()),C=this,window.addEventListener?(C.addEventListener("DOMMouseScroll",I,!1),C.addEventListener("mousewheel",I,!1)):document.attachEvent("onmousewheel",I)}function I(t){if(n){var i=0;(t=t||window.event).wheelDelta&&(i=-t.wheelDelta/120),t.detail&&(i=t.detail/3);var s=t.target||t.srcTarget||t.srcElement;e(s).closest("."+a.wrapperClass).is(v.parent())&&P(i,!0),t.preventDefault&&!h&&t.preventDefault(),h||(t.returnValue=!1)}}function P(t,e,i){h=!1;var n=t,s=v.outerHeight()-$.outerHeight();if(e&&(n=parseInt($.css("top"))+t*parseInt(a.wheelStep)/100*$.outerHeight(),n=Math.min(Math.max(n,0),s),n=t>0?Math.ceil(n):Math.floor(n),$.css({top:n+"px"})),n=(d=parseInt($.css("top"))/(v.outerHeight()-$.outerHeight()))*(v[0].scrollHeight-v.outerHeight()),i){var o=(n=t)/v[0].scrollHeight*v.outerHeight();o=Math.min(Math.max(o,0),s),$.css({top:o+"px"})}v.scrollTop(n),v.trigger("slimscrolling",~~n),_(),S()}function k(){r=Math.max(v.outerHeight()/v[0].scrollHeight*v.outerHeight(),f),$.css({height:r+"px"});var t=r==v.outerHeight()?"none":"block";$.css({display:t})}function _(){if(k(),clearTimeout(l),d==~~d){if(h=a.allowPageScroll,u!=d){var t=0==~~d?"top":"bottom";v.trigger("slimscroll",t)}}else h=!1;u=d,r>=v.outerHeight()?h=!0:($.stop(!0,!0).fadeIn("fast"),a.railVisible&&x.stop(!0,!0).fadeIn("fast"))}function S(){a.alwaysVisible||(l=setTimeout(function(){a.disableFadeOut&&n||s||o||($.fadeOut("slow"),x.fadeOut("slow"))},1e3))}}),this}}),e.fn.extend({slimscroll:e.fn.slimScroll})}(jQuery)},26:function(t,e,i){var a;void 0===(a=function(){var t=i(28),e=i(1),a=i(3);function n(i){if(a())var n=e.open({container:t(),closeBtn:!0,success:function(){$("#sl-name-input").focus(),$("#sl-name-input").on("keyup",function(){!function(t,e){var i=t.val().length;if(i>e){for(var a=[],n=t.val().split(""),s=0;s<e;s++)a.push(n[s]);t.val(a.join("")),t.siblings("em").text(e+"/"+e)}else t.siblings("em").text(i+"/"+e)}($(this),20)}),$(".add-sure").click(function(){$("#sl-name-input").val().trim()?function(t,i){$.ajax({url:MUSIC_CONFIG.APP_API_PATH+"/music/playlist/create",type:"post",data:{playListName:t}}).done(function(t){"000000"===t.returnCode?i(t.playListId):"000003"===t.returnCode?e.tip("创建同名歌单失败，换一个歌单名试试"):e.tip("创建歌单失败,请稍后再试！")})}($("#sl-name-input").val().trim(),function(t){if(e.close(n),"function"==typeof i)i(t);else var a=e.open({container:'<div class="sucess-text-tip">歌单创建成功,去“<a href="/v2/my#myCheckSonglist" class="migucolor" target="_blank">我的</a>”频道编辑你的歌单吧~<span class="sure-btn btn btn-primary">确&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;定</span></div>',closeBtn:!1,success:function(){$(".sure-btn").click(function(){e.close(a)})}})}):e.tip("内容不可为空，请输入您要创建的歌单名称~")}),$(".add-cancel").click(function(){e.close(n)})}})}return $(document).on("click",".add-playList",function(){n()}),n}.call(e,i,e,t))||(t.exports=a)},28:function(t,e,i){var a=i(0);t.exports=function(t){var e="";return e=e+'<div class="add-sl-container"><div class="sl-title">'+a.escape("创建新歌单")+'</div><div class="sl-name clearfix"><div class="sl-name-label">歌单名称</div><div class="sl-name-input"><input id="sl-name-input" type="text" placeholder="好的标题被搜到的几率更大哦"><em class="letter-sta">0/20</em></div></div><div class="sl-action"><span class="add-sure btn btn-primary">确定</span><span class="add-cancel btn btn-gray">取消</span></div></div>'}},3:function(t,e,i){var a;void 0===(a=function(){function t(t){return-1!=document.cookie.indexOf("migu_music_status")||(!1!==t&&document.getElementById("J_LoginBtn").click(),!1)}return window.MUSIC_GLOBAL.loginCheck=t,t}.call(e,i,e,t))||(t.exports=a)},34:function(t,e,i){var a;void 0===(a=function(){var t=i(3),e=i(1),a=i(35),n=i(26);function s(e,i){$(".to-player").on("click",function(){MUSIC_GLOBAL.musicPlay.getAudioSongs({copyrightIds:e.join(",")},!1)}),$(".to-playList").on("click",function(){o(i,$(this).data("id"),1)}),$(".to-newplaylist").on("click",function(){n(function(t){o(i,t,1)})}),$(".my-playlist").click(function(){t()})}function o(t,i,a){$.ajax({url:MUSIC_CONFIG.APP_API_PATH+"/music/playlist/opreateContent",type:"post",data:{musicId:t.join(","),playListId:i,oprType:a}}).done(function(t){$(".songlist-item").removeClass("active"),$(".items").removeClass("active"),$(".operate-menu").hide(),"000000"===t.returnCode?e.tip("添加成功"):e.tip("添加失败")}).fail(function(){e.tip("添加失败")})}i(20),$(document).on("click",".J-btn-add",function(){var i,n=$(this),o=$(window).width(),l=n.offset().left,c=n.offset().top,r=[],d=[];switch(n.data("actiontype")){case"btn":if(c=c+n.outerHeight()+15,$("#js_songlist .songlist-item.on").each(function(){r.push($(this).data("cid")),d.push($(this).data("id"))}),!r.length)return void e.tip("请先选择需要添加的歌曲");break;case"icon":c+=30,l-=65,r.push(n.parents(".songlist-item").data("cid")),d.push(n.parents(".songlist-item").data("id"))}if(l+130>o&&(l-=130),t(!1))i=function(t){$(".js-menu-box").remove(),$("body").append(a(t));var e=$(".js-menu-box");e.css({left:l,top:c}),e.show(),e.find("ul").slimScroll({height:"auto",alwaysVisible:!1,color:"#919190",opacity:.5,size:"4px"}),$(".songlist-item").removeClass("icon-show"),n.parents(".songlist-item").addClass("icon-show"),s(r,d)},t(!1)&&$.get(MUSIC_CONFIG.APP_API_PATH+"/music/playlist/getUserPlayList").then(function(t){"000000"===t.returnCode&&i(t)}).fail(function(){e.tip("获取用户歌单失败")});else{$(".js-menu-box").remove(),$("body").append(a());var u=$(".js-menu-box");u.css({left:l,top:c}),u.show(),$(".songlist-item").removeClass("icon-show"),n.parents(".songlist-item").addClass("icon-show"),s(r,d)}}),$(document).click(function(t){t.stopPropagation(),$(t.target).hasClass("J-btn-add")||$(t.target).parents().hasClass("J-btn-add")||($(".operate-menu").remove(),$(".songlist-item").removeClass("icon-show"))})}.call(e,i,e,t))||(t.exports=a)},35:function(t,e,i){var a=i(0);t.exports=function(t){var e,i="",n=t||{};return function(t){i=i+'<div class="operate-menu js-menu-box"><ul class="more-menu"><li class="operate-menu-link to-player">'+a.escape(null==(e="播放列表")?"":e)+"</li>",t?(function(){var n=t;if("number"==typeof n.length)for(var s=0,o=n.length;s<o;s++){var l=n[s];i=i+'<li class="operate-menu-link to-playList"'+a.attr("data-id",l.playListId,!0,!0)+">"+a.escape(null==(e=l.playListName)?"":e)+"</li>"}else for(var s in o=0,n)o++,l=n[s],i=i+'<li class="operate-menu-link to-playList"'+a.attr("data-id",l.playListId,!0,!0)+">"+a.escape(null==(e=l.playListName)?"":e)+"</li>"}.call(this),i+='<li class="operate-menu-link to-newplaylist"><i class="iconfont cf-tianjia-big"></i>添加到新歌单</li>'):i=i+'<li class="operate-menu-link my-playlist">'+a.escape(null==(e="我的歌单")?"":e)+"</li>",i+="</ul></div>"}.call(this,"items"in n?n.items:"undefined"!=typeof items?items:void 0),i}},36:function(t,e,i){var a;void 0===(a=function(){var t=i(3),e=i(1),a="系统繁忙，请稍后再试~~~";return{collectPlaylist:function(i,n,s){t(!0)&&$.ajax({type:"POST",url:MUSIC_CONFIG.APP_API_PATH+"/music/playlist/collect",data:{playlistId:s}}).then(function(t){"000000"==t.returnCode?(e.tip("歌单收藏成功"),n&&"1"==n&&i.removeClass("cf-xihuan-big").addClass("cf-xihuan-big-h isCollect")):e.tip(t.msg)},function(t){e.tip(a)})},isCollectPlaylist:function(e,i,a){t(!1)&&$.ajax({type:"GET",url:MUSIC_CONFIG.APP_API_PATH+"/music/playlist/is_collect",data:{playlistId:a}}).then(function(t){"000000"==t.returnCode&&i&&"1"==i&&(e.addClass("is-query"),t.collectStatus&&e.removeClass("cf-xihuan-big").addClass("cf-xihuan-big-h isCollect"))},function(t){})},cancelCollectPlaylist:function(i,n,s){t(!1)&&$.ajax({type:"POST",url:MUSIC_CONFIG.APP_API_PATH+"/music/playlist/cancel_collect",data:{playlistId:s}}).then(function(t){"000000"==t.returnCode?(e.tip("歌单取消收藏成功"),n&&"1"==n&&i.removeClass("cf-xihuan-big-h isCollect").addClass("cf-xihuan-big")):e.tip(t.msg)},function(t){e.tip(a)})},collectSong:function(i,n,s){t(!0)&&$.ajax({type:"POST",url:MUSIC_CONFIG.APP_API_PATH+"/music/song/collect",data:{copyrightId:s}}).then(function(t){if("000000"==t.returnCode)switch(e.tip("歌曲收藏成功"),n){case"1":i.removeClass("cf-xihuan").addClass("cf-xihuan-h isCollect");break;case"2":i.addClass("on");break;case"3":i.addClass("isCollect"),i.find("span").html("已收藏"),i.find("i").removeClass("cf-xihuan").addClass("cf-xihuan-h")}else e.tip(t.msg)},function(t){e.tip(a)})},isCollectSong:function(i,n,s){t(!1)&&$.ajax({type:"GET",url:MUSIC_CONFIG.APP_API_PATH+"/music/song/is_collect",data:{copyrightId:s}}).then(function(t){if("000000"==t.returnCode)switch(n){case"1":i.addClass("is-query"),t.items[0].in&&i.removeClass("cf-xihuan").addClass("cf-xihuan-h isCollect");break;case"2":t.items[0].in&&i.addClass("on");break;case"3":i.addClass("on"),t.items[0].in&&(i.addClass("isCollect"),i.find("span").html("已收藏"),i.find("i").removeClass("cf-xihuan").addClass("cf-xihuan-h"))}},function(t){e.tip(a)})},cancelCollectSong:function(i,n,s){t(!1)&&$.ajax({type:"POST",url:MUSIC_CONFIG.APP_API_PATH+"/music/song/cancel_collect",data:{copyrightId:s}}).then(function(t){if("000000"==t.returnCode)switch(e.tip("歌曲取消收藏成功"),n){case"1":i.removeClass("cf-xihuan-h isCollect").addClass("cf-xihuan");break;case"2":i.removeClass("on");break;case"3":i.removeClass("isCollect"),i.find("span").html("收藏"),i.find("i").removeClass("cf-xihuan-h").addClass("cf-xihuan")}else e.tip(t.msg)},function(t){e.tip(a)})},collectArtist:function(i,n,s){t(!0)&&$.ajax({type:"POST",url:MUSIC_CONFIG.APP_API_PATH+"/music/artist/follow",data:{artistId:s}}).then(function(t){if("000000"==t.returnCode)switch(e.tip("歌手关注成功"),n){case"1":default:i.addClass("active").html('<i class="iconfont cf-xihuan-h"></i>已关注')}else e.tip(t.msg)},function(t){e.tip(a)})},cancelCollectArtist:function(i,n,s){t(!0)&&$.ajax({type:"POST",url:MUSIC_CONFIG.APP_API_PATH+"/music/artist/cancel_follow",data:{artistId:s}}).then(function(t){if("000000"==t.returnCode)switch(e.tip("歌手取消关注成功"),n){case"1":default:i.removeClass("active").html('<i class="iconfont cf-xihuan"></i>关注歌手')}else e.tip(t.msg)},function(t){e.tip(a)})},isCollectArtist:function(i,n,s){t(!1)&&$.ajax({type:"GET",url:MUSIC_CONFIG.APP_API_PATH+"/music/artist/is_follow",data:{artistId:s}}).then(function(t){"000000"==t.returnCode&&t.data&&t.data.forEach(function(t,e){if(t.targetId==s&&parseInt(t.relationShip))switch(n){case"1":default:i.addClass("active").html('<i class="iconfont cf-xihuan-h"></i>已关注')}})},function(t){e.tip(a)})},searchSub:function(i,n,s){t(s)&&$.ajax({type:"GET",url:MUSIC_CONFIG.APP_API_PATH+"/music/rank/sch_subscribe",data:{rankId:n}}).then(function(t){if("000000"==t.returnCode){i.addClass("searchSub");for(var e=i.find(".subscribe-action"),a=0,n=e.length;a<n;a++){var s=e.eq(a),o=s.data("subid");$.each(t.items,function(t,e){if(e.rankId==o){var i=1==e.subscriptionStatus?"isSubscribe":"unSubscribe";1==e.subscriptionStatus&&s.html("已订阅"),s.addClass(i)}})}}},function(t){e.tip(a)})},isSubscribe:function(i,n){t(!0)&&$.ajax({type:"POST",url:MUSIC_CONFIG.APP_API_PATH+"/music/rank/is_subscribe",data:{rankId:n}}).then(function(t){e.tip(t.msg),"000000"==t.returnCode&&i.addClass("isSubscribe").removeClass("unSubscribe").html("已订阅")},function(t){e.tip(a)})}}}.call(e,i,e,t))||(t.exports=a)},4:function(t,e){},5:function(t,e,i){var a=i(0);t.exports=function(t){var e,i="",n=t||{};return function(t,n,s){switch(s){case 1:var o="upload";break;default:o="loading"}i=i+"<div"+a.attr("class",a.classes([o],[!0]),!1,!0)+' id="loading">',t&&(i=i+"<span>"+a.escape(null==(e=n)?"":e)+"</span>"),i+="</div>"}.call(this,"showText"in n?n.showText:"undefined"!=typeof showText?showText:void 0,"text"in n?n.text:"undefined"!=typeof text?text:void 0,"type"in n?n.type:"undefined"!=typeof type?type:void 0),i}}},[[133,0]]]);