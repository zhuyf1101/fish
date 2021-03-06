<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>

<link href="{{ asset('home/AmazeUI-2.4.2/assets/css/amazeui.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('home/AmazeUI-2.4.2/assets/css/admin.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('home/basic/css/demo.css') }}" rel="stylesheet" type="text/css" />

{{-- 指定页面CSS --}}
@yield('specifiedCSS')
{{-- 指定页面JS --}}
@yield('specifiedJS')

</head>

<body>
<!--顶部导航条 -->
  <div class="am-container header">
    <ul class="message-l">
      <div class="topMessage">
        <div class="menu-hd">
          @if(!session('username'))
          <a href="{{ url('/login') }}" target="_top" class="h">亲，请登录</a>
          <a href="{{ url('/register') }}" target="_top">&nbsp;&nbsp;&nbsp;&nbsp;免费注册</a>
          @else
          <a href="{{ url('/person') }}" target="_top" class="h">Hi，{{ session('username') }}</a>
          <a href="{{ url('/logout') }}">&nbsp;&nbsp;注销</a>
          @endif
        </div>
      </div>
    </ul>
    <ul class="message-r">
      <div class="topMessage home">
        <div class="menu-hd">
          <a href="{{ url('/') }}" target="_top" class="h">商城首页</a>
        </div>
      </div>
      <div class="topMessage my-shangcheng">
        <div class="menu-hd MyShangcheng">
        @if(session()->has('userid'))
          <a href="{{ url('/person') }}" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a>
        @else
          <a href="{{ url('/login') }}" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a>
        @endif
        </div>
      </div>
      <div class="topMessage favorite">
        <div class="menu-hd">
        @if(session()->has('userid'))
          <a href="{{ url('/person/collect') }}" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a>
        @else
          <a href="{{ url('/login') }}" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a>
        @endif
        </div>
    </ul>
  </div>

<!--悬浮搜索框-->
  <div class="nav white">
    <div class="logo">
      <img src="{{ asset('home/images/logo.png') }}" />
    </div>
    <div class="logoBig">
      <li><img src="{{ asset('home/images/logobig.png') }}" /></li>
    </div>
    <div class="search-bar pr">
      <a name="index_none_header_sysc" href="#"></a>
      <form action="/search" method="post">
      {{ csrf_field() }}
        <input id="searchInput" name="keyword" type="text" placeholder="搜索" autocomplete="off">
        <input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
      </form>
    </div>
  </div>



{{-- 指定页面主体内容 --}}
@yield('content')

<!-- 尾部 -->
      <div class="footer">
        <div class="footer-hd">
          <p>
            </b> <a href="#">商城首页</a> <b>|</b> <a href="#">支付宝</a> <b>|</b> <a href="#">物流</a>
          </p>
        </div>
        <div class="footer-bd">
          <p>
            <a href="#">关于</a> <a href="#">合作伙伴</a> <a href="#">联系我们</a> <a href="#">网站地图</a> <em>© 2015-2025
              lamp184无名团队 版权所有.
            </em>
          </p>
        </div>
      </div>


    </div>
  </div>
  <!--引导 -->
  <div class="navCir">
    <li class="active"><a href="home.html"><i class="am-icon-home "></i>首页</a></li>
    <li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
    <li><a href="shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>
    <li><a href="person/index.html"><i class="am-icon-user"></i>我的</a></li>
  </div>


  <!--菜单 -->
  <div class=tip>
    <div id="sidebar">
      <div id="wrap">
        <div id="prof" class="item ">
          <a href="# "> <span class="setting "></span>
          </a>
          <div class="ibar_login_box status_login ">
            <div class="avatar_box ">
              <p class="avatar_imgbox ">
                <img src="{{ asset('home/images/no-img_mid_.jpg') }}" />
              </p>
              <ul class="user_info ">
                <li>用户名sl1903</li>
                <li>级&nbsp;别普通会员</li>
              </ul>
            </div>
            <div class="login_btnbox ">
              <a href="# " class="login_order ">我的订单</a> <a href="# " class="login_favorite ">我的收藏</a>
            </div>
            <i class="icon_arrow_white "></i>
          </div>

        </div>
        <div id="shopCart " class="item ">
          <a href="# "> <span class="message "></span>
          </a>
          <p>购物车</p>
          <p class="cart_num ">0</p>
        </div>
        <div id="asset " class="item ">
          <a href="# "> <span class="view "></span>
          </a>
          <div class="mp_tooltip ">
            我的资产 <i class="icon_arrow_right_black "></i>
          </div>
        </div>

        <div id="foot " class="item ">
          <a href="# "> <span class="zuji "></span>
          </a>
          <div class="mp_tooltip ">
            我的足迹 <i class="icon_arrow_right_black "></i>
          </div>
        </div>

        <div id="brand " class="item ">
          <a href="#"> <span class="wdsc "><img src="{{ asset('home/images/wdsc.png') }}" /></span>
          </a>
          <div class="mp_tooltip ">
            我的收藏 <i class="icon_arrow_right_black "></i>
          </div>
        </div>

        <div id="broadcast " class="item ">
          <a href="# "> <span class="chongzhi "><img src="{{ asset('home/images/chongzhi.png') }}" /></span>
          </a>
          <div class="mp_tooltip ">
            我要充值 <i class="icon_arrow_right_black "></i>
          </div>
        </div>

        <div class="quick_toggle ">
          <li class="qtitem "><a href="# "><span class="kfzx "></span></a>
            <div class="mp_tooltip ">
              客服中心<i class="icon_arrow_right_black "></i>
            </div></li>
          <!--二维码 -->
          <li class="qtitem "><a href="#none "><span class="mpbtn_qrcode "></span></a>
            <div class="mp_qrcode " style="display: none;">
              <img src="{{ asset('home/images/weixin_code_145.png') }}" /><i class="icon_arrow_white "></i>
            </div></li>
          <li class="qtitem "><a href="#top " class="return_top "><span class="top "></span></a></li>
        </div>

        <!--回到顶部 -->
        <div id="quick_links_pop " class="quick_links_pop hide "></div>

      </div>

    </div>
    <div id="prof-content " class="nav-content ">
      <div class="nav-con-close ">
        <i class="am-icon-angle-right am-icon-fw "></i>
      </div>
      <div>我</div>
    </div>
    <div id="shopCart-content " class="nav-content ">
      <div class="nav-con-close ">
        <i class="am-icon-angle-right am-icon-fw "></i>
      </div>
      <div>购物车</div>
    </div>
    <div id="asset-content " class="nav-content ">
      <div class="nav-con-close ">
        <i class="am-icon-angle-right am-icon-fw "></i>
      </div>
      <div>资产</div>

      <div class="ia-head-list ">
        <a href="# " target="_blank " class="pl ">
          <div class="num ">0</div>
          <div class="text ">优惠券</div>
        </a> <a href="# " target="_blank " class="pl ">
          <div class="num ">0</div>
          <div class="text ">红包</div>
        </a> <a href="# " target="_blank " class="pl money ">
          <div class="num ">￥0</div>
          <div class="text ">余额</div>
        </a>
      </div>

    </div>
    <div id="foot-content " class="nav-content ">
      <div class="nav-con-close ">
        <i class="am-icon-angle-right am-icon-fw "></i>
      </div>
      <div>足迹</div>
    </div>
    <div id="brand-content " class="nav-content ">
      <div class="nav-con-close ">
        <i class="am-icon-angle-right am-icon-fw "></i>
      </div>
      <div>收藏</div>
    </div>
    <div id="broadcast-content " class="nav-content ">
      <div class="nav-con-close ">
        <i class="am-icon-angle-right am-icon-fw "></i>
      </div>
      <div>充值</div>
    </div>
  </div>


  {{-- 页面指定尾部JS --}}
  @yield('specifiedInnerJS')
</body>

</html>