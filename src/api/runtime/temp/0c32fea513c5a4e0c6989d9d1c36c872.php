<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\wamp64\www\nami\src\api\public/../application/pc\view\index\index.html";i:1499971255;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\header.html";i:1500245659;s:75:"D:\wamp64\www\nami\src\api\public/../application/pc\view\public\footer.html";i:1499862757;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>纳米商城 - 纳米6、红米Note 4X、纳米Max 2、纳米笔记本官方网站</title>
    <link rel="stylesheet" href="__PUBLIC__static/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__static/css/index.css">
    <link rel="stylesheet" href="__PUBLIC__static/css/hf.css">
    <script src="__PUBLIC__static/js/jquery.min.js"></script>
    <script src="__PUBLIC__static/js/bootstrap.min.js"></script>
</head>

<body>
    <!--头部-->

    <div class="header" id="header">
        <div class="nav">
            <div class="container">
                <div class="left">
                    <ul class="nav_left">
                        <li><a href="__PUBLIC__pc/index/index">纳米商城</li>
                        <li><a href="javascript:;">MIUI</li>
                        <li><a href="javascript:;">米聊</li>
                        <li><a href="javascript:;">游戏</li>
                        <li><a href="javascript:;">多看阅读</li>
                        <li><a href="javascript:;">云服务</li>
                        <li><a href="javascript:;">金融</li>
                        <li><a href="javascript:;">纳米商城移动版</li>
                        <li><a href="javascript:;">问题反馈</li>
                        <li><a href="javascript:;">Select Region</li>
                    </ul>
                </div>
           <?php
            if(empty($user_id)){
                echo 
                '<div class="right" id="sign-out">
                    <div class="left">
                    <!-- 登录之前显示 -->
                    <div class="left login">
                        <a href="__PUBLIC__pc/personal/login">登录</a>
                        <a href="__PUBLIC__pc/personal/register">注册</a>
                        <a href="javascript:;">消息通知</a>
                    </div>
                    </div>';
            }
           ?>
           
                    <div class="right">
                    <?php
                        if(empty($user_id)){
                            echo '<a href="">';
                        }else {
                            echo '<a href="__PUBLIC__pc/order/cart">';
                        }
                        
                    ?>
                        
                    <i class="iconfont">&#xe626;</i>购物车<span>(
                    <?php
                        if(empty($user_id)){
                            echo '0';
                        }else {
                            echo $cartNum;
                        }
                        
                    ?>
                    )</span>
                        </a>
                    </div>
                    <!-- 登录之后显示 -->
        
                    <?php
                        if($userData){
                            echo '<div class="right">
                            <ul class="customer">
                                <li class="customer_show">
                                    <a href="javascript:;">';
                            }
                        
                            if($userData){
                            echo $userData['username'];
                            }
                        
                        if($userData){
                            echo '</a>
                            </li>
                            <li><a href="javascript:;">消息通知</a></li>
                            <li><a href="__PUBLIC__pc/personal/home">我的订单</a></li>
                        </ul>
                        <!-- 登录后账户下拉信息框 -->
                        <ul class="customer_detail text_center">
                            <li><a href="__PUBLIC__pc/personal/home">个人中心</a></li>
                            <li><a href="javascript:;">评价晒单</a></li>
                            <li><a href="javascript:;">我的喜欢</a></li>
                            <li><a href="__PUBLIC__pc/personal/home">纳米账户</a></li>
                            <li><a href="__PUBLIC__pc/personal/login">退出登录</a></li>
                        </ul>
                    </div>';
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container product" id="title">
        <div class="left pro_img">
            <a href="__PUBLIC__pc/index/index">
                <img src="__PUBLIC__static/images/headfoot/logo.png">
                <img src="__PUBLIC__static/images/headfoot/yyymix.gif">
            </a>
        </div>
        <div class="left">
            <!-- 产品区域 -->
            <div class="pro_left">
                <ul>
                    <li><span class="text">纳米手机</span></li>
                    <li><span class="text">红米</span></li>
                    <li><span class="text">平板笔记本</span></li>
                    <li><span class="text">电视</span></li>
                    <li><span class="text">盒子影音</span></li>
                    <li><span class="text">路由器</span></li>
                    <li><span class="text">智能硬件</span></li>
                    <li><span class="text">服务</span></li>
                    <li><span class="text">社区</span></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <!-- 搜索区域 -->
            <div class="search">
                <form role="form">
                    <input type="search" class="search-text">
                    <input type="submit" value="&#xe601;" class="iconfont search-btn">
                    <!-- 搜索文本的遮罩div -->
                    <div class="search-text search_hot_text">
                        <a href="javascript:;">红米4X 699元起</a>
                        <a href="javascript:;">笔记本</a>
                    </div>
                    <div class="iconfont icon-sousuo_sousuo search-btn btn"></div>
                </form>
                <!-- 纳米热卖产品下拉div -->
                <div class="key_word">
                    <ul class="search_keyword">
                        <!-- <li>
                            <a href="javascript:;">
                                <span class="key_word_text">纳米6</span>
                                <span class="pro_piece right">约有7件</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="javascript:;">
                                <span class="key_word_text">纳米6</span>
                                <span class="pro_piece right">约有7件</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="key_word_text">纳米6</span>
                                <span class="pro_piece right">约有7件</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--  产品详细下拉框   -->
    <div class="container" id="login-nav">
    <div class="container pro_detailed" style="width: 100% !important;">
            <ul class="pro_detailed_ul">
            <!-- <li class="text_center">
                <span class="text_box">新品</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>"><img src="images/xm6_320.png" alt=""></a>
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>"><img src="images/xm6_320.png" alt=""></a>
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>"><img src="images/xm6_320.png" alt=""></a>
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>4)); ?>"><img src="images/xm6_320.png" alt=""></a>
                <p>红米4X</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>4)); ?>"><img src="images/xm6_320.png" alt=""></a>
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li>
            <li class="text_center">
                <span class="text_box">新品</span>
                <a href="<?php echo url('pc/details/detail',array('id'=>4)); ?>"><img src="images/xm6_320.png" alt=""></a>
                <p>纳米6</p>
                <span class="text_color">2499元起</span>
            </li> -->
            </ul>
    </div>
    </div>
    
    
    

    <!--主要轮播页面-->
    <div class="hero xm-container">
        <div class="hero-wrap">
            <!--轮播图片-->
            <ul class="hero-carousel">
                <li><a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>"><img src="__PUBLIC__static/images/index/lunbo1.jpg" alt=""></a></li>
                <li><a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>"><img src="__PUBLIC__static/images/index/lunbo2.jpg" alt=""></a></li>
                <li><a href="<?php echo url('pc/details/detail',array('id'=>3)); ?>"><img src="__PUBLIC__static/images/index/lunbo3.jpg" alt=""></a></li>
                <li><a href="<?php echo url('pc/details/detail',array('id'=>4)); ?>"><img src="__PUBLIC__static/images/index/lunbo4.jpg" alt=""></a></li>
                <li><a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>"><img src="__PUBLIC__static/images/index/lunbo5.jpg" alt=""></a></li>
                <li><a href="<?php echo url('pc/details/detail',array('id'=>6)); ?>"><img src="__PUBLIC__static/images/index/lunbo6.jpg" alt=""></a></li>
            </ul>
            <!--轮播控制器-->
            <div class="hero-controls">
                <div class="hero-controls-slider">
                    <div class="slider-item">
                        <a href="javascript:" class="slider-item-link s-active">1</a>
                    </div>
                    <div class="slider-item">
                        <a href="javascript:" class="slider-item-link">2</a>
                    </div>
                    <div class="slider-item">
                        <a href="javascript:" class="slider-item-link">3</a>
                    </div>
                    <div class="slider-item">
                        <a href="javascript:" class="slider-item-link">4</a>
                    </div>
                    <div class="slider-item">
                        <a href="javascript:" class="slider-item-link">5</a>
                    </div>
                    <div class="slider-item">
                        <a href="javascript:" class="slider-item-link">6</a>
                    </div>
                </div>
                <div class="hero-controls-direction">
                    <a class="hero-prev" href="javascript:"></a>
                    <a class="hero-next" href="javascript:"></a>
                </div>
            </div>
            <!--轮播左盒子列表-->
            <div class="hero-list">
                <ul class="hero-category-list">
                    <li class="category-item">
                        <a href="javascript:" class="category-item-title">手机 电话卡</a>
                        <!--<i class="iconfont icon-jiantouyou"></i>-->
                        <div class="hero-children  col-children-3">
                            
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">AS6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">NB2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">米QW6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">^S6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/7.jpg" class="thumb" alt="">
                                        <span class="text">Ne2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/6.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳60X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳A6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-1">
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/xm6_80.png" class="thumb" alt="">
                                        <span class="text">纳米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">Note2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>10)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/5.jpg" class="thumb" alt="">
                                        <span class="text">纳米A6</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="category-item">
                        <a href="javascript:" class="category-item-title">笔记本 平板</a>
                        <!--<i class="iconfont icon-jiantouyou"></i>-->
                        <div class="hero-children  col-children-3">
                            <ul class="hero-children-list children-list-col .children-list-col-1">
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/xm6_80.png" class="thumb" alt="">
                                        <span class="text">纳米6</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>10)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">Note2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/5.jpg" class="thumb" alt="">
                                        <span class="text">纳米A6</span>
                                    </a>
                                </li>
                            </ul>
                            
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">AS6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">NB2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">米QW6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">^S6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/7.jpg" class="thumb" alt="">
                                        <span class="text">Ne2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/6.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳60X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳A6</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="category-item">
                        <a href="javascript:" class="category-item-title">笔记本 平板</a>
                        <!--<i class="iconfont icon-jiantouyou"></i>-->
                        <div class="hero-children  col-children-3">
                            <ul class="hero-children-list children-list-col .children-list-col-1">
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">Note2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/xm6_80.png" class="thumb" alt="">
                                        <span class="text">纳米6</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>10)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/5.jpg" class="thumb" alt="">
                                        <span class="text">纳米A6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-1">
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/xm6_80.png" class="thumb" alt="">
                                        <span class="text">纳米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">Note2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>10)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/5.jpg" class="thumb" alt="">
                                        <span class="text">纳米A6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">AS6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">NB2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">米QW6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳6</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="category-item">
                        <a href="javascript:" class="category-item-title">手机 电话卡</a>
                        <!--<i class="iconfont icon-jiantouyou"></i>-->
                        <div class="hero-children  col-children-3">
                            <ul class="hero-children-list children-list-col .children-list-col-1">
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>10)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">Note2</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/xm6_80.png" class="thumb" alt="">
                                        <span class="text">纳米6</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/5.jpg" class="thumb" alt="">
                                        <span class="text">纳米A6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">^S6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/7.jpg" class="thumb" alt="">
                                        <span class="text">Ne2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/6.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳60X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳A6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">AS6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">NB2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">米QW6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳6</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    
                    <li class="category-item">
                        <a href="javascript:" class="category-item-title">移动电源 电池 插线板</a>
                        <!--<i class="iconfont icon-jiantouyou"></i>-->
                        <div class="hero-children  col-children-3">
                            <ul class="hero-children-list children-list-col .children-list-col-1">
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/xm6_80.png" class="thumb" alt="">
                                        <span class="text">纳米6</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>10)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">Note2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/5.jpg" class="thumb" alt="">
                                        <span class="text">纳米A6</span>
                                    </a>
                                </li>
                            </ul>
                            
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">AS6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">NB2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">米QW6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">^S6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/7.jpg" class="thumb" alt="">
                                        <span class="text">Ne2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/6.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳60X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳A6</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="category-item">
                        <a href="javascript:" class="category-item-title">耳机 音箱</a>
                        <!--<i class="iconfont icon-jiantouyou"></i>-->
                        <div class="hero-children  col-children-3">
                            <ul class="hero-children-list children-list-col .children-list-col-1">
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>10)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">Note2</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/xm6_80.png" class="thumb" alt="">
                                        <span class="text">纳米6</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/5.jpg" class="thumb" alt="">
                                        <span class="text">纳米A6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">^S6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/7.jpg" class="thumb" alt="">
                                        <span class="text">Ne2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/6.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳60X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳A6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">AS6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">NB2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">米QW6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳6</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="category-item">
                        <a href="javascript:" class="category-item-title">保护套 贴膜</a>
                        <!--<i class="iconfont icon-jiantouyou"></i>-->
                        <div class="hero-children  col-children-3">
                            <ul class="hero-children-list children-list-col .children-list-col-1">
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>10)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">Note2</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/xm6_80.png" class="thumb" alt="">
                                        <span class="text">纳米6</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/5.jpg" class="thumb" alt="">
                                        <span class="text">纳米A6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">AS6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">NB2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">米QW6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">^S6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/7.jpg" class="thumb" alt="">
                                        <span class="text">Ne2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/6.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳60X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳A6</span>
                                    </a>
                                </li>
                            </ul>
                            
                        </div>
                    </li>
                    <li class="category-item">
                        <a href="javascript:" class="category-item-title">线材 支架 存储卡</a>
                        <!--<i class="iconfont icon-jiantouyou"></i>-->
                        <div class="hero-children  col-children-3">
                            <ul class="hero-children-list children-list-col .children-list-col-1">
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>10)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">Note2</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/xm6_80.png" class="thumb" alt="">
                                        <span class="text">纳米6</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/5.jpg" class="thumb" alt="">
                                        <span class="text">纳米A6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">AS6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">NB2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">米QW6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">^S6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/7.jpg" class="thumb" alt="">
                                        <span class="text">Ne2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/6.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳60X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳A6</span>
                                    </a>
                                </li>
                            </ul>
                            
                        </div>
                    </li>
                    <li class="category-item">
                        <a href="javascript:" class="category-item-title">箱包 服饰 鞋 眼镜</a>
                        <!--<i class="iconfont icon-jiantouyou"></i>-->
                        <div class="hero-children  col-children-3">
                            <ul class="hero-children-list children-list-col .children-list-col-1">
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>10)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">Note2</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/xm6_80.png" class="thumb" alt="">
                                        <span class="text">纳米6</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/5.jpg" class="thumb" alt="">
                                        <span class="text">纳米A6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">AS6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">NB2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">米QW6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">^S6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/7.jpg" class="thumb" alt="">
                                        <span class="text">Ne2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/6.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳60X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳A6</span>
                                    </a>
                                </li>
                            </ul>
                            
                        </div>
                    </li>
                    <li class="category-item ">
                        <a href="javascript:" class="category-item-title">米兔 生活周边</a>
                        <!--<i class="iconfont icon-jiantouyou"></i>-->
                        <div class="hero-children  col-children-3">
                            <ul class="hero-children-list children-list-col .children-list-col-1">
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>10)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">Note2</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/xm6_80.png" class="thumb" alt="">
                                        <span class="text">纳米6</span>
                                    </a>
                                </li>
                                
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/5.jpg" class="thumb" alt="">
                                        <span class="text">纳米A6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">AS6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">NB2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/1.jpg" class="thumb" alt="">
                                        <span class="text">VR</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">米QW6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">纳6X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳6</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="hero-children-list children-list-col .children-list-col-2">
                               <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>14)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/3.jpg" class="thumb" alt="">
                                        <span class="text">^S6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/7.jpg" class="thumb" alt="">
                                        <span class="text">Ne2</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/4.png" class="thumb" alt="">
                                        <span class="text">VR眼镜</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>11)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/6.jpg" class="thumb" alt="">
                                        <span class="text">米6</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>12)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/2.jpg" class="thumb" alt="">
                                        <span class="text">纳60X</span>
                                    </a>
                                </li>
                                <li class="star-goods">
                                    <a href="<?php echo url('pc/details/detail',array('id'=>13)); ?>" class="link">
                                        <img src="__PUBLIC__static/images/index/hero-list/8.jpg" class="thumb" alt="">
                                        <span class="text">纳A6</span>
                                    </a>
                                </li>
                            </ul>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--轮播底部盒子-->
        <div class="hero-sub xm-row">
            <div class="span4">
                <ul class="hero-channel">
                    <li>
                        <a href=":url('pc/details/detail',array('id'=>8))">
                            <i class="iconfont icon-shouji"></i> 选购手机
                        </a>
                    </li>
                    <li>
                        <a href=":url('pc/details/detail',array('id'=>3))">
                            <i class="iconfont icon-gift"></i> 企业团购
                        </a>
                    </li>
                    <li>
                        <a href=":url('pc/details/detail',array('id'=>8))">
                            <i class="iconfont icon-1"></i> 一元活动
                        </a>
                    </li>
                    <li>
                        <a href="javascript:">
                            <i class="iconfont icon-banlisimqia"></i> 纳米移动
                        </a>
                    </li>
                    <li>
                        <a href="javascript:">
                            <i class="iconfont icon-yijiuhuanxin"></i> 以旧换新
                        </a>
                    </li>
                    <li>
                        <a href="javascript:">
                            <i class="iconfont icon-chongzhi"></i> 话费充值
                        </a>
                    </li>
                </ul>
            </div>
            <div class="span6">
                <ul class="hero-promo">
                    <li>                   
                        <a href="<?php echo url('pc/details/detail',array('id'=>1)); ?>" class="item-exposure"><img src="__PUBLIC__static/images/index/promo/xmad_14956125230756_SsjCW.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="<?php echo url('pc/details/detail',array('id'=>2)); ?>" class="item-exposure"><img src="__PUBLIC__static/images/index/promo/xmad_14918858892222_fpCmG.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="<?php echo url('pc/details/detail',array('id'=>5)); ?>" class="item-exposure"><img src="__PUBLIC__static/images/index/promo/xmad_14979522966537_xwKdP.jpg" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--明星单品盒子-->
        <div class="hero-star" id="star">
            <div class="star-head">
                <h2 class="t-h2">纳米明星单品</h2>
                <div class="more">
                    <div class="small-control">
                        <a href="javascript:" class="control control-prev control-none">
                            <</a>
                                <a href="javascript:" class="control control-next">></a>
                    </div>
                </div>
            </div>
            <div class="wrap-star-carousel">
                <div class="star-carousel">
                    <ul class="star-carousel-list">
                        <li class="rainbow-1 rb-1">
                            <a href=":url('pc/details/detail',array('id'=>14))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/xmnote2.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-2">
                            <a href=":url('pc/details/detail',array('id'=>8))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/1.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-3">
                            <a href=":url('pc/details/detail',array('id'=>10))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/2.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-4">
                            <a href=":url('pc/details/detail',array('id'=>11))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/3.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-5">
                            <a href=":url('pc/details/detail',array('id'=>1))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/4.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-1">
                            <a href=":url('pc/details/detail',array('id'=>14))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/1.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-2">
                            <a href=":url('pc/details/detail',array('id'=>8))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/5.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-3">
                            <a href=":url('pc/details/detail',array('id'=>10))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/xmnote2.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-4">
                            <a href=":url('pc/details/detail',array('id'=>11))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/3.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-5">
                            <a href=":url('pc/details/detail',array('id'=>1))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/xmnote2.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--首页内容页面-->
    <div class="home-main">
        <div class="xm-container">
            <!--家电-->
            <div class="home-brick" id="home-ele">
                <div class="brick-head">
                    <h2 class="brick-title">家电</h2>
                    <div class="brick-more">
                        <ul class="brick-more-list">
                            <li class="brick-active">热门</li>
                            <li>电视影音</li>
                            <li>电脑</li>
                            <li>家居</li>
                        </ul>
                    </div>
                </div>
                <div class="brick-content">
                    <div class="brick-span4">
                        <ul class="brick-span4-list">
                            <li class="brick-span4-item brick-span4-item-1">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/first.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="brick-span6">
                        <div class="brick-tab" id="home-ele-content">
                            <ul class="brick-tab-list tab-active">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/1.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/2.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/3.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/1.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/1.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/3.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视3A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--智能-->
            <div class="home-brick" id="home-smart">
                <div class="brick-head">
                    <h2 class="brick-title">智能</h2>
                    <div class="brick-more">
                        <ul class="brick-more-list">
                            <li class="brick-active">热门</li>
                            <li>出行</li>
                            <li>健康</li>
                            <li>酷玩</li>
                            <li>路由器</li>
                        </ul>
                    </div>
                </div>
                <div class="brick-content">
                    <div class="brick-span4">
                        <ul class="brick-span4-list">
                            <li class="brick-span4-item brick-span4-item-m">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/1.jpg" alt=""></a>
                            </li>
                            <li class="brick-span4-item brick-span4-item-m">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/2.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="brick-span6">
                        <div class="brick-tab">
                            <ul class="brick-tab-list tab-active">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/3.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米体脂枰</a></h3>
                                    <p class="desc">简约纤薄，隐藏式 LED 显示屏</p>
                                    <p class="price"> <span class="num">199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">高一的我，竟然这么胖，我逆袭了，但大学的我到毕业，慢...</span>
                                            <span class="author">来自于 李晓飞 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/1.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/2.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/3.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/4.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/1.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/2.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-s">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/4.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米VR眼镜</a></h3>
                                    <p class="price"> <span class="num">299</span>元 </p>
                                </li>
                                <li class="brick-tab-item brick-tab-item-s">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><i class="iconfont icon-youjiantou"></i></a>
                                    </div>
                                    <a href="javascript:" class="s-more">浏览更多 <small>热门</small></a>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/5.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/2.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/1.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/4.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/3.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/4.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/8.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/5.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--搭配-->
            <div class="home-brick" id="home-match">
                <div class="brick-head">
                    <h2 class="brick-title">搭配</h2>
                    <div class="brick-more">
                        <ul class="brick-more-list">
                            <li class="brick-active">热门</li>
                            <li>耳机音箱</li>
                            <li>电源</li>
                            <li>电池存储卡</li>
                        </ul>
                    </div>
                </div>
                <div class="brick-content">
                    <div class="brick-span4">
                        <ul class="brick-span4-list">
                            <li class="brick-span4-item brick-span4-item-m">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/1.jpg" alt=""></a>
                            </li>
                            <li class="brick-span4-item brick-span4-item-m">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/2.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="brick-span6">
                        <div class="brick-tab">
                            <ul class="brick-tab-list tab-active">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/3.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米体脂枰</a></h3>
                                    <p class="desc">简约纤薄，隐藏式 LED 显示屏</p>
                                    <p class="price"> <span class="num">199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">高一的我，竟然这么胖，我逆袭了，但大学的我到毕业，慢...</span>
                                            <span class="author">来自于 李晓飞 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-s">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/8.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米VR眼镜</a></h3>
                                    <p class="price"> <span class="num">299</span>元 </p>
                                </li>
                                <li class="brick-tab-item brick-tab-item-s">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><i class="iconfont icon-youjiantou"></i></a>
                                    </div>
                                    <a href="javascript:" class="s-more">浏览更多 <small>热门</small></a>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/9.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/10.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/11.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/10.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/13.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/11.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/16.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/15.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/7.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/9.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/5.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/zhineng/10.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/14.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--配件-->
            <div class="home-brick" id="home-accessories">
                <div class="brick-head">
                    <h2 class="brick-title">配件</h2>
                    <div class="brick-more">
                        <ul class="brick-more-list">
                            <li class="brick-active">热门</li>
                            <li>耳机音箱</li>
                            <li>电源</li>
                            <li>电池存储卡</li>
                        </ul>
                    </div>
                </div>
                <div class="brick-content">
                    <div class="brick-span4">
                        <ul class="brick-span4-list">
                            <li class="brick-span4-item brick-span4-item-m">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/1.jpg" alt=""></a>
                            </li>
                            <li class="brick-span4-item brick-span4-item-m">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/2.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="brick-span6">
                        <div class="brick-tab">
                            <ul class="brick-tab-list tab-active">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/3.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米体脂枰</a></h3>
                                    <p class="desc">简约纤薄，隐藏式 LED 显示屏</p>
                                    <p class="price"> <span class="num">199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">高一的我，竟然这么胖，我逆袭了，但大学的我到毕业，慢...</span>
                                            <span class="author">来自于 李晓飞 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/13.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-s">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/4.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米VR眼镜</a></h3>
                                    <p class="price"> <span class="num">299</span>元 </p>
                                </li>
                                <li class="brick-tab-item brick-tab-item-s">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><i class="iconfont icon-youjiantou"></i></a>
                                    </div>
                                    <a href="javascript:" class="s-more">浏览更多 <small>热门</small></a>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/13.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/9.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/10.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/11.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/11.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--周边-->
            <div class="home-brick" id="home-around">
                <div class="brick-head">
                    <h2 class="brick-title">周边</h2>
                    <div class="brick-more">
                        <ul class="brick-more-list">
                            <li class="brick-active">热门</li>
                            <li>耳机音箱</li>
                            <li>电源</li>
                            <li>电池存储卡</li>
                        </ul>
                    </div>
                </div>
                <div class="brick-content">
                    <div class="brick-span4">
                        <ul class="brick-span4-list">
                            <li class="brick-span4-item brick-span4-item-m">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/1.jpg" alt=""></a>
                            </li>
                            <li class="brick-span4-item brick-span4-item-m">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/2.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="brick-span6">
                        <div class="brick-tab">
                            <ul class="brick-tab-list tab-active">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/13.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/9.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/6.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/zhineng/10.jpg" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="brick-tab-list tab-hide">
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-tab-item brick-tab-item-m">
                                    <div class="brick-figure brick-figure-img">
                                        <a href="javascript:"><img src="__PUBLIC__static/images/index/brick/jiadian/xmtv_4a.png" alt=""></a>
                                    </div>
                                    <h3 class="brick-tab-item-title"><a href="javascript:">纳米电视4A 43英寸</a></h3>
                                    <p class="desc">2GB+8GB大存储，内置海量大片</p>
                                    <p class="price"> <span class="num">2099</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="javascript:">
                                            <span class="review">纳米电视终于开通了我们所在城市的购买权限。画质非常清...</span>
                                            <span class="author">来自于 华悦照相 的评价</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--推荐-->
            <div id="recommend" class="hero-star">
                <div class="star-head">
                    <h2 class="t-h2">为你推荐</h2>
                    <div class="more">
                        <a href="javascript:"></a>
                        <a href="javascript:"></a>
                    </div>
                </div>
                <div class="wrap-star-carousel">
                    <div class="star-carousel">
                        <ul class="star-carousel-list">
                        <li class="rainbow-1 rb-1">
                            <a href=":url('pc/details/detail',array('id'=>14))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/xmnote2.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-2">
                            <a href=":url('pc/details/detail',array('id'=>8))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/1.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-3">
                            <a href=":url('pc/details/detail',array('id'=>10))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/2.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-4">
                            <a href=":url('pc/details/detail',array('id'=>11))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/3.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-5">
                            <a href=":url('pc/details/detail',array('id'=>1))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/4.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-1">
                            <a href=":url('pc/details/detail',array('id'=>14))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/1.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-2">
                            <a href=":url('pc/details/detail',array('id'=>8))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/5.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-3">
                            <a href=":url('pc/details/detail',array('id'=>10))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/xmnote2.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-4">
                            <a href=":url('pc/details/detail',array('id'=>11))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/3.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        <li class="rainbow-1 rb-5">
                            <a href=":url('pc/details/detail',array('id'=>1))" class="rainbow-thumb">
                                <img src="__PUBLIC__static/images/index/star/xmnote2.png" alt="纳米Note2">
                            </a>
                            <h3><a href="javascript:">纳米 Note 2</a></h3>
                            <p class="p1">享受花呗分期6期免息</p>
                            <p class="p2">2799元起</p>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--热评-->
            <div class="home-review-box" id="comment">
                <div class="review-head">
                    <h2 class="review-title">热评产品</h2>
                </div>
                <div class="review-body">
                    <ul class="review-list">
                        <li class="review-item">
                            <div class="brick-figure-img">
                                <a href="javascript:" class="">
                                    <img src="__PUBLIC__static/images/index/reping/62d44838-f464-4c11-887c-9168645ae797.jpg" alt="">
                                </a>
                            </div>
                            <p class="review"><a href="javascript:">这箱子很好，外观漂亮，实用性强。很轻，有点软但不影响它的坚固。</a></p>
                            <p class="author">来自于 子书雁 的评价</p>
                            <div class="info">
                                <h3 class="info-title"><a href="javascript:">90分旅行箱 20寸</a></h3>
                                <span class="sep">|</span>
                                <p class="price"><span class="num">299</span>元</p>
                            </div>
                        </li>
                        <li class="review-item">
                            <div class="brick-figure-img">
                                <a href="javascript:" class="">
                                    <img src="__PUBLIC__static/images/index/reping/1.jpg" alt="">
                                </a>
                            </div>
                            <p class="review"><a href="javascript:">东西真心不错，用过最好用的插线板，做工外观没得挑剔，3个USB接口很实用，充电快，建议不包邮的应该在</a></p>
                            <p class="author">来自于 子书雁 的评价</p>
                            <div class="info">
                                <h3 class="info-title"><a href="javascript:">90分旅行箱 20寸</a></h3>
                                <span class="sep">|</span>
                                <p class="price"><span class="num">299</span>元</p>
                            </div>
                        </li>
                        <li class="review-item">
                            <div class="brick-figure-img">
                                <a href="javascript:" class="">
                                    <img src="__PUBLIC__static/images/index/reping/2.jpg" alt="">
                                </a>
                            </div>
                            <p class="review"><a href="javascript:">包装很让人感动，式样也很可爱，做出的饭全家人都爱吃，超爱五星！手机控制还是不太熟练，最主要是没有连接.</a></p>
                            <p class="author">来自于 子书雁 的评价</p>
                            <div class="info">
                                <h3 class="info-title"><a href="javascript:">90分旅行箱 20寸</a></h3>
                                <span class="sep">|</span>
                                <p class="price"><span class="num">299</span>元</p>
                            </div>
                        </li>
                        <li class="review-item">
                            <div class="brick-figure-img">
                                <a href="javascript:" class="">
                                    <img src="__PUBLIC__static/images/index/reping/62d44838-f464-4c11-887c-9168645ae797.jpg" alt="">
                                </a>
                            </div>
                            <p class="review"><a href="javascript:">这箱子很好，外观漂亮，实用性强。很轻，有点软但不影响它的坚固。</a></p>
                            <p class="author">来自于 子书雁 的评价</p>
                            <div class="info">
                                <h3 class="info-title"><a href="javascript:">90分旅行箱 20寸</a></h3>
                                <span class="sep">|</span>
                                <p class="price"><span class="num">299</span>元</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--内容-->
            <div class="home-content-box" id="content">
                <div class="content-head">
                    <h2 class="content-title">内容</h2>
                </div>
                <div class="content-body">
                    <ul class="content-list">
                        <li class="content-item">
                            <h2 class="content-item-title">图书</h2>
                            <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
                                <ul class="item-list" style="width: 888px; margin-left: 0; transition: margin-left 0.5s ease 0s;">
                                    <li>
                                        <h4 class="name"><a href="javascript:">哈利·波特与被诅咒的孩子</a></h4>
                                        <p class="desc"><a href="javascript:">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</a></p>
                                        <p class="price"><a href="javascript:">29.37元</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/1.png" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 class="name"><a href="javascript:">哈利·波特与被诅咒的孩子</a></h4>
                                        <p class="desc"><a href="javascript:">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</a></p>
                                        <p class="price"><a href="javascript:">29.37元</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/1.png" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 class="name"><a href="javascript:">哈利·波特与被诅咒的孩子</a></h4>
                                        <p class="desc"><a href="javascript:">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</a></p>
                                        <p class="price"><a href="javascript:">29.37元</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/1.png" alt=""></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="xm-pagers-wrapper">
                                <ul class="xm-pagers">
                                    <li class="pager pager-active">
                                        <span class="dot">1</span>
                                    </li>
                                    <li class="pager">
                                        <span class="dot">2</span>
                                    </li>
                                    <li class="pager">
                                        <span class="dot">3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="xm-controls xm-controls-block-small">
                                <a href="javascript:" class="control control-prev">
                                    <</a>
                                        <a href="javascript:" class="control control-next">></a>
                            </div>
                        </li>
                        <li class="content-item">
                            <h2 class="content-item-title">游戏</h2>
                            <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
                                <ul class="item-list" style="width: 888px; margin-left: 0; transition: margin-left 0.5s ease 0s;">
                                    <li>
                                        <h4 class="name"><a href="javascript:">米柚手游模拟器</a></h4>
                                        <p class="desc"><a href="javascript:">在电脑上玩遍小米所有手游</a></p>
                                        <p class="price"><a href="javascript:">免费</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/2.png" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 class="name"><a href="javascript:">哈利·波特与被诅咒的孩子</a></h4>
                                        <p class="desc"><a href="javascript:">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</a></p>
                                        <p class="price"><a href="javascript:">29.37元</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/1.png" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 class="name"><a href="javascript:">哈利·波特与被诅咒的孩子</a></h4>
                                        <p class="desc"><a href="javascript:">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</a></p>
                                        <p class="price"><a href="javascript:">29.37元</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/1.png" alt=""></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="xm-pagers-wrapper">
                                <ul class="xm-pagers">
                                    <li class="pager pager-active">
                                        <span class="dot">1</span>
                                    </li>
                                    <li class="pager">
                                        <span class="dot">2</span>
                                    </li>
                                    <li class="pager">
                                        <span class="dot">3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="xm-controls xm-controls-block-small">
                                <a href="javascript:" class="control control-prev">
                                    <</a>
                                        <a href="javascript:" class="control control-next">></a>
                            </div>
                        </li>
                        <li class="content-item">
                            <h2 class="content-item-title">MIUI</h2>
                            <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
                                <ul class="item-list" style="width: 888px; margin-left: 0; transition: margin-left 0.5s ease 0s;">
                                    <li>
                                        <h4 class="name"><a href="javascript:">夏日狂想</a></h4>
                                        <p class="desc"><a href="javascript:">官方主题新画风，原来你是这样的小</a></p>
                                        <p class="price"><a href="javascript:">29元</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/1.png" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 class="name"><a href="javascript:">哈利·波特与被诅咒的孩子</a></h4>
                                        <p class="desc"><a href="javascript:">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</a></p>
                                        <p class="price"><a href="javascript:">29.37元</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/1.png" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 class="name"><a href="javascript:">哈利·波特与被诅咒的孩子</a></h4>
                                        <p class="desc"><a href="javascript:">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</a></p>
                                        <p class="price"><a href="javascript:">29.37元</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/1.png" alt=""></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="xm-pagers-wrapper">
                                <ul class="xm-pagers">
                                    <li class="pager pager-active">
                                        <span class="dot">1</span>
                                    </li>
                                    <li class="pager">
                                        <span class="dot">2</span>
                                    </li>
                                    <li class="pager">
                                        <span class="dot">3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="xm-controls xm-controls-block-small">
                                <a href="javascript:" class="control control-prev">
                                    <</a>
                                        <a href="javascript:" class="control control-next">></a>
                            </div>
                        </li>
                        <li class="content-item">
                            <h2 class="content-item-title">图书</h2>
                            <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
                                <ul class="item-list" style="width: 888px; margin-left: 0; transition: margin-left 0.5s ease 0s;">
                                    <li>
                                        <h4 class="name"><a href="javascript:">哈利·波特与被诅咒的孩子</a></h4>
                                        <p class="desc"><a href="javascript:">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</a></p>
                                        <p class="price"><a href="javascript:">29.37元</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/2.png" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 class="name"><a href="javascript:">哈利·波特与被诅咒的孩子</a></h4>
                                        <p class="desc"><a href="javascript:">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</a></p>
                                        <p class="price"><a href="javascript:">29.37元</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/1.png" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 class="name"><a href="javascript:">哈利·波特与被诅咒的孩子</a></h4>
                                        <p class="desc"><a href="javascript:">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</a></p>
                                        <p class="price"><a href="javascript:">29.37元</a></p>
                                        <div class="brick-figure-img">
                                            <a href="javascript:"><img src="__PUBLIC__static/images/index/content/1.png" alt=""></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="xm-pagers-wrapper">
                                <ul class="xm-pagers">
                                    <li class="pager pager-active">
                                        <span class="dot">1</span>
                                    </li>
                                    <li class="pager">
                                        <span class="dot">2</span>
                                    </li>
                                    <li class="pager">
                                        <span class="dot">3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="xm-controls xm-controls-block-small">
                                <a href="javascript:" class="control control-prev">
                                    <</a>
                                        <a href="javascript:" class="control control-next">></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--视频-->
            <div class="home-video-box" id="video">
                <div class="video-head">
                    <h2 class="video-title">视频</h2>
                </div>
                <div class="video-body">
                    <ul class="video-list">
                        <li class="video-item ">
                            <div class="brick-figure-img">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/video/1.jpg" alt="听雷总讲述纳米7年工艺探索之路"></a>
                                <span class="play"><i class="iconfont icon-play"></i>></span>
                            </div>
                            <h3 class="title"><a href="javascript:">听雷总讲述纳米7年工艺探索之路</a></h3>
                            <p class="desc">纳米6，7年工艺探索的巅峰之作</p>
                        </li>
                        <li class="video-item ">
                            <div class="brick-figure-img">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/video/2.jpg" alt="听雷总讲述纳米7年工艺探索之路"></a>
                                <span class="play"><i class="iconfont icon-play"></i>></span>
                            </div>
                            <h3 class="title"><a href="javascript:">小米6外观设计视频</a></h3>
                            <p class="desc">震惊！小米6竟然如此之美</p>
                        </li>
                        <li class="video-item ">
                            <div class="brick-figure-img">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/video/1.jpg" alt="听雷总讲述纳米7年工艺探索之路"></a>
                                <span class="play"><i class="iconfont icon-play"></i>></span>
                            </div>
                            <h3 class="title"><a href="javascript:">听雷总讲述纳米7年工艺探索之路</a></h3>
                            <p class="desc">纳米6，7年工艺探索的巅峰之作</p>
                        </li>
                        <li class="video-item ">
                            <div class="brick-figure-img">
                                <a href="javascript:"><img src="__PUBLIC__static/images/index/video/3.jpg" alt="听雷总讲述纳米7年工艺探索之路"></a>
                                <span class="play"><i class="iconfont icon-play"></i>></span>
                            </div>
                            <h3 class="title"><a href="javascript:">4.9mm极超薄电视的诞生揭秘</a></h3>
                            <p class="desc">小米电视工程师讲述极致之作的背后故事</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--页尾-->
    <div class="footer">
    <div class="container">
        <div class="footer_title font16 text_center">
            <ul>
                <li>
                    <a href="javascript:;">
                        <i class="iconfont icon-editor2"></i>预约维修服务
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="iconfont icon-sevenday"></i>7天无理由退货
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="iconfont icon-15tian"></i>15天免费换货
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="iconfont icon-icon25"></i>满150元包邮
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="iconfont icon-dizhi"></i>预约维修服务
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer_list">
            <ul class="left font12">
                <li>
                    <h4 class="font14">帮助中心</h4>
                    <a href="javascript:;">账户管理</a>
                    <a href="javascript:;">购物指南</a>
                    <a href="javascript:;">订单操作</a>
                </li>
                <li>
                    <h4 class="font14">服务支持</h4>
                    <a href="javascript:;">售后政策</a>
                    <a href="javascript:;">自助服务</a>
                    <a href="javascript:;">相关下载</a>
                </li>
                <li>
                    <h4 class="font14">线下门店</h4>
                    <a href="javascript:;">纳米之家</a>
                    <a href="javascript:;">服务网点</a>
                    <a href="javascript:;">零售网点</a>
                </li>
                <li>
                    <h4 class="font14">关于纳米</h4>
                    <a href="javascript:;">了解纳米</a>
                    <a href="javascript:;">加入纳米</a>
                    <a href="javascript:;">联系我们</a>
                </li>
                <li>
                    <h4 class="font14">关注我们</h4>
                    <a href="javascript:;">新浪微博</a>
                    <a href="javascript:;">纳米部落</a>
                    <a href="javascript:;">官方微信</a>
                </li>
                <li>
                    <h4 class="font14">特色服务</h4>
                    <a href="javascript:;">F码通道</a>
                    <a href="javascript:;">礼物码</a>
                    <a href="javascript:;">防伪查询</a>
                </li>
            </ul>
            <div class="right text_center">
                <span class="text_color">400-100-5678<br></span>
                <p class="font12">周一至周日 8:00-18:00
                    <br>（仅收市话费）
                    <br>
                </p>
                <span class="text_box">
                        <i class="iconfont icon-duanxin"></i>
                        24小时在线客服
                    </span>
            </div>
        </div>
        <div class="footer_info">
            <div class="left footer_logo_img">
                <a href="javascript:;">
                    <img src="__PUBLIC__static/images/headfoot/logo-footer.png" alt="">
                </a>
            </div>
            <div class="left font12">
                <ul>
                    <li><a href="javascript:;">纳米商城</a></li>
                    <li><a href="javascript:;">MIUI</a></li>
                    <li><a href="javascript:;">米聊</a></li>
                    <li><a href="javascript:;">多看书城</a></li>
                    <li><a href="javascript:;">纳米路由器</a></li>
                    <li><a href="javascript:;">视频电话</a></li>
                    <li><a href="javascript:;">纳米天猫店</a></li>
                    <li><a href="javascript:;">纳米淘宝直营店</a></li>
                    <li><a href="javascript:;">纳米网盟</a></li>
                    <li><a href="javascript:;">纳米移动</a></li>
                    <li><a href="javascript:;">隐私政策</a></li>
                    <li><a href="javascript:;">Select Region</a></li>
                </ul>
                <br>
                <div class="font12">
                    <p>©mi.com 京ICP证110507号 京ICP备10046444号 京公网安备11010802020134号 京网文[2014]0059-0009号 </p>
                    <p>违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
                </div>
            </div>
            <div class="right footer_img_list">
                <img src="__PUBLIC__static/images/headfoot/truste.png" alt="">
                <img src="__PUBLIC__static/images/headfoot/v-logo-2.png" alt="">
                <img src="__PUBLIC__static/images/headfoot/v-logo-1.png" alt="">
                <img src="__PUBLIC__static/images/headfoot/site-weixin.png" alt="">
            </div>
        </div>
        <div class="footer_footer">
            <p>探索黑科技，纳米为发烧而生</p>
        </div>
    </div>
</div>

    
</body>
<script src="__PUBLIC__static/js/index.js"></script>
<script>
$(function(){
    
})
$(function() {
    var $navLi = $(".pro_left li"),
        $li_detail = $(".pro_detailed");
    var $search_text = $(".search-text.search_hot_text"),
        $search_btn = $(".search-btn.btn");
    var $input_text = $("input[type='search']"),
        $input_btn = $("input[type='submit']");
    var $search_keyword = $(".key_word"),
        $customer_show = $(".customer_show"),
        $customer_detail = $(".customer_detail");


    function Product_detailed(data, search_data) {
        this.data = data;
        this.search_data = search_data;
        this.doms = {
            pro_detailed: $(".pro_detailed"),
            pro_ul: $(".pro_detailed_ul"),
            search_input: $("input[type='search']"),
            search_hotText: $(".search_keyword")
        };
    }
    Product_detailed.prototype = {
        // 获取product数据
        getData_pro: function(index) {
            var str = '';
            this.doms.pro_ul.html("");
            var products = this.data[index];
            if (!products) {
                return;
            }
            for (var i = 0; i < products.length; i++) {
                //console.log(products[i]);
                str += this.creat_proLi(products[i]);
            }
            this.doms.pro_ul.append(str);

        },
        // 获取search的数据
        getData_hotText: function() {
            var str = '';
            for (var i = 0; i < this.search_data.length; i++) {
                str += this.creat_search_keyword_li(i);
            }
            this.doms.search_hotText.append(str);
        },
        // 创建product_li
        creat_proLi: function(obj) {
            var str_product = '<li class="text_center">' +
                '<span class="text_box">' + obj.pro_new + '</span>' +
                '<img src="' + obj.pro_img + '" alt="">' +
                '<p>' + obj.pro_name + '</p>' +
                '<span class="text_color">' + obj.pro_price + '</span>' +
                '</li>';
            return str_product;
        },
        // 创建search_keyword_li
        creat_search_keyword_li: function(index) {
            this.doms.search_hotText.html("");
            var str_keyword = '<li>' +
                '<a href="javascript:;">' +
                '<span class="key_word_text">' + this.search_data[index].keyword_text + '</span>' +
                '<span class="pro_piece right">' + this.search_data[index].product_piece + '</span>' +
                '</a>' +
                '</li>';
            return str_keyword;
        }
    };
    //search的数据
    var data = [{
        keyword_text: "纳米6",
        product_piece: "约有7件"
    }, {
        keyword_text: "纳米5s Plus",
        product_piece: "约有6件"
    }, {
        keyword_text: "纳米MIX",
        product_piece: "约有1件"
    }, {
        keyword_text: "手环",
        product_piece: "约有6件"
    }, {
        keyword_text: "纳米Note 4x",
        product_piece: "约有7件"
    }, {
        keyword_text: "路由器",
        product_piece: "约有14件"
    }];
    // product的数据
    var data1 = [
        [{
            pro_new: "新品",
            pro_img: "__PUBLIC__static/images/headfoot/xm6_320.png",
            pro_name: "纳米6",
            pro_price: "2499元起"
        }, {
            pro_new: "新品",
            pro_img: "__PUBLIC__static/images/headfoot/xm6_320.png",
            pro_name: "纳米6",
            pro_price: "2499元起"
        }, {
            pro_new: "新品",
            pro_img: "__PUBLIC__static/images/headfoot/xm6_320.png",
            pro_name: "纳米6",
            pro_price: "2499元起"
        }],
        [{
            pro_new: "新品",
            pro_img: "__PUBLIC__static/images/headfoot/hm4a320.png",
            pro_name: "纳米6",
            pro_price: "2499元起"
        }, {
            pro_new: "新品",
            pro_img: "__PUBLIC__static/images/headfoot/hm4a320.png",
            pro_name: "纳米6",
            pro_price: "2499元起"
        }]
    ]

    var p = new Product_detailed(data1, data);

    // 搜索栏位
    $search_text.on("click", function() {
        $(this).hide();
        $search_btn.hide();
        $input_text.focus().addClass('box_border');
        $input_btn.addClass('box_border');
        $search_keyword.show().addClass('box_border border_top_none');
        p.getData_hotText();
        $input_text.blur(function() {
            $search_keyword.hide().removeClass('box_border border_top_none');
            $input_btn.removeClass('box_border');
            $search_btn.show();
            $search_text.show();
            $(this).removeClass('box_border');
        })
    });

    function hover_event(obj) {
        obj.hover(function() {
            $(this).stop().slideDown(300);
        }, function() {
            $(this).stop().slideUp(300);
        });
    }
    // 鼠标经过时，出现产品详细列表
    $navLi.hover(function() {
        var index = $navLi.index(this);
        p.getData_pro(index);
        $li_detail.stop().slideDown(300);
    }, function() {
        $li_detail.stop().slideUp(300);
    });
    // 鼠标在详细列表的盒子移动不隐藏
    hover_event($li_detail);

    // 用户信息下拉框显示
    $customer_show.hover(function() {
        $customer_detail.stop().slideDown(300);
        $(this).css({
            background: 'white',
        });;
    }, function() {
        $customer_detail.stop().slideUp(300);
        $(this).css({
            background: '#333',
        });;
    });
    // 鼠标在详细列表的盒子移动不隐藏
    hover_event($customer_detail);

});
</script>

</html>
