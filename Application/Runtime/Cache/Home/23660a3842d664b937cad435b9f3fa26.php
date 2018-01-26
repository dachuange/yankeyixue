<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-cn" class="scheme_original">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <title>救助中心</title>
        <link rel="icon" href="Public/Home/images/favicon.ico" />
          
		<script type="text/javascript" src="Public/Home/js/loading.js" ></script>

        <link rel="stylesheet" href="Public/Home/css/fontello/css/fontello.css" type="text/css" media="all" />

        <link rel="stylesheet" href="Public/Home/css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="Public/Home/css/core.animation.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="Public/Home/css/shortcodes.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="Public/Home/css/plugin.instagram-widget.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="Public/Home/css/skin.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="Public/Home/css/responsive.min.css" type="text/css" media="all" />

        <link rel="stylesheet" href="Public/Home/css/core.messages.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="Public/Home/js/vendor/magnific/magnific-popup.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="Public/Home/js/vendor/swiper/swiper.min.css" type="text/css" media="all" />

    </head>

    <body class="page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
        <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
        <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>
                <!-- Header -->
                <header class="top_panel_wrap top_panel_style_3 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
        <!--登录前  Top panel : Bar -->
        <div class="top_panel_top before">
            <div class="content_wrap clearfix">
                <div class="top_panel_top_contact_area">
                    请致电<a>400-6756-168</a>与我们联系
                </div>
                <div class="top_panel_top_user_area">
                    <ul id="menu_user" class="menu_user_nav">
                        <?php
 if($_SESSION['eye_uid']){ ?>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Userlogin/center');?>" class="popup_link"><i class="popup_login_link icon-user"></i>你好，<?php echo $_SESSION['eye_username'] ?></a>
                        </li>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Userlogin/logout');?>" class="popup_link"><i class="popup_login_link icon-user"></i>退出</a>
                        </li>
                        <?php }elseif($_SESSION['expert_id']){ ?>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Expert/center');?>" class="popup_link"><i class="popup_login_link icon-user"></i>你好，<?php echo $_SESSION['expert_username'] ?></a>
                        </li>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Userlogin/logout');?>" class="popup_link"><i class="popup_login_link icon-user"></i>退出</a>
                        </li>
                        <?php }elseif($_SESSION['company_id']){ ?>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Company/center');?>" class="popup_link"><i class="popup_login_link icon-user"></i>你好，<?php echo $_SESSION['company_name'] ?></a>
                        </li>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Userlogin/logout');?>" class="popup_link"><i class="popup_login_link icon-user"></i>退出</a>
                        </li>
                        <?php }else{ ?>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Userlogin/index');?>" class="popup_link"><i class="popup_login_link icon-user"></i>个人登录</a>
                        </li>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Expert/login');?>" class="popup_link"><i class="popup_login_link icon-user-add"></i>专家登录</a>
                        </li>
                        <li class="menu_user_login">
                            <a href="<?php echo U('Company/login');?>" class="popup_link"><i class="popup_login_link icon-users"></i>企业登录</a>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="top_panel_top_socials">
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social-qq">
                                    <span class="icon-qq"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social-weibo">
                                    <span class="icon-weibo"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="top_panel_top_search">
                        <div class="search_wrap search_style_regular search_state_closed">
                            <a href="#" class="social_icons social-help">
                                <span class="icon-help"></span>
                            </a>
                            <div class="search_results widget_area scheme_original">
                                <a class="search_results_close icon-cancel"></a>
                                <div class="search_results_content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /登录前  Top panel : Bar -->
        <!-- 菜单 Menu area -->
        <div class="top_panel_middle">
            <div class="content_wrap">
                <!-- Contact logo -->
                <div class="contact_logo">
                    <div class="logo">
                        <a href="index.html">
                            <img src="Public/Home/images/logo.png" class="logo_main" alt="">
                            <img src="Public/Home/images/logo.png" class="logo_fixed" alt="">
                        </a>
                    </div>
                </div>
                <!-- /Contact logo -->
                <!-- Main Menu -->
                <div class="menu_main_wrap">
                    <nav class="menu_main_nav_area">
                        <ul id="menu_main" class="menu_main_nav">
                            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                            <li><a href="<?php echo U('News/index');?>">新闻中心</a></li>
                            <li><a href="<?php echo U('Ophtha/index');?>">眼科医学</a></li>
                            <li><a href="<?php echo U('Expert/index');?>">眼科专家</a></li>
                            <li><a href="<?php echo U('History/index');?>">眼科历史</a></li>
                            <li><a href="<?php echo U('Company/index');?>">医疗企业</a></li>
                            <li><a href="<?php echo U('Rescue/index');?>">救助中心</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- /Main Menu -->
            </div>
        </div>
        <!-- /菜单 Menu area -->
    </div>
</header>
<!-- /Header -->
<!-- Header Mobile -->
<div class="header_mobile">
    <div class="content_wrap">
        <div class="menu_button icon-menu"></div>
        <div class="logo">
            <a href="index.html">
                <img src="Public/Home/images/logo.png" class="logo_main" alt="">
            </a>
        </div>
    </div>
    <div class="side_wrap">
        <div class="close">Close</div>
        <div class="panel_top">
            <nav class="menu_main_nav_area">
                <ul id="menu_main_mobile" class="menu_main_nav">
                    <li><a href="<?php echo U('Index/index');?>">首页</a></li>

                    <li><a href="<?php echo U('News/index');?>">新闻中心</a></li>
                    <li><a href="<?php echo U('Ophtha/index');?>">眼科医学</a></li>
                    <li><a href="<?php echo U('Expert/index');?>">眼科专家</a></li>
                    <li><a href="<?php echo U('History/index');?>">眼科历史</a></li>
                    <li><a href="<?php echo U('Company/index');?>">医疗企业</a></li>
                    <li><a href="<?php echo U('Rescue/index');?>">救助中心</a></li>
                </ul>
            </nav>
            <!-- Login -->
            <div class="login">
                <a href="login.html" class="popup_link popup_login_link icon-user">登录</a>
            </div>
            <div class="login">
                <a href="login_expert.html" class="popup_link popup_login_link icon-user">专家登录</a>
            </div>
            <div class="login">
                <a href="login_company.html" class="popup_link popup_login_link icon-user">企业登录</a>
            </div>
            <!-- /Login -->
        </div>
    </div>
    <div class="mask"></div>
</div>
                <!-- /Header Mobile -->
                <!-- Breadcrumbs -->
                <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
                    <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg4">
                        <div class="content_wrap">
                            <h1 class="page_title">救助中心</h1>
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="<?php echo U('Index/index');?>">首页</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">救助中心</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumbs -->
                <!-- Page Content Wrap -->
                <div class="page_content_wrap page_paddings_no">
                    <!-- Content -->
                    <div class="content">
                        <article class="post_item post_item_single page">
                            <section class="post_content">
                                <!-- Services section -->
                                <div class="tpl_bg_1">
                                    <div class="sc_services_wrap content_wrap padding_top_7_1429em padding_bottom_2_1429em">
                                        <div class="sc_services sc_services_style_services-5 sc_services_type_images sc_slider_pagination sc_slider_pagination_bottom sc_slider_nocontrols sc_slider_swiper swiper-slider-container width_100_per" data-interval="7711" data-slides-per-view="2" data-slides-space="40" data-slides-min-width="250">
                                            <div class="slides swiper-wrapper">
                                                <!-- Service item -->
                                                <div class="swiper-slide width_100_per" data-style="width:100%;">
                                                    <div class="sc_services_item_wrap">
                                                        <div class="sc_services_item sc_services_item_1 odd first">
                                                            <div class="sc_services_item_featured post_featured">
                                                                <div class="post_thumb" data-title="About Our Mission">
                                                                    <a class="hover_icon hover_icon_link" href="#">
                                                                        <img alt="" src="Public/Home/images/home3bk.jpg">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_title">
                                                                    <a href="#">尘肺知识预防宣传项目</a>
                                                                </h4>
                                                                <div class="sc_services_item_description">
                                                                    <p>尘肺知识预防宣传项目是“大爱清尘”基金下设用于宣传与预防尘肺病的专项。“大爱清尘”基金源自2011年6月15日由著名记者王克勤联合中华社会救助基金会共同发起的“大爱清尘•寻救中国尘肺病农民兄弟大行动”，</p>
                                                                    <a href="#" class="sc_services_item_readmore">查看更多
                                                                        <span class="icon-right-1"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Service item -->
                                                <!-- Service item -->
                                                <div class="swiper-slide width_100_per" data-style="width:100%;">
                                                    <div class="sc_services_item_wrap">
                                                        <div class="sc_services_item sc_services_item_2 even">
                                                            <div class="sc_services_item_featured post_featured">
                                                                <div class="post_thumb" data-title="What We Believe">
                                                                    <a class="hover_icon hover_icon_link" href="#">
                                                                        <img alt="about2.jpg" src="Public/Home/images/home3bk.jpg">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_title">
                                                                    <a href="#">MD关爱项目</a>
                                                                </h4>
                                                                <div class="sc_services_item_description">
                                                                    <p>012年5月8日上午，中国社会福利基金会“MD关爱项目”成立，中国社会福利基金会理事长刘光和、副秘书长兼项目管理三部主任高月玲和“MD关爱项目”发起人陈霞出席了签约仪式。</p>
                                                                    <a href="#" class="sc_services_item_readmore">查看更多
                                                                        <span class="icon-right-1"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Service item -->
                                                <!-- Service item -->
                                                <div class="swiper-slide width_100_per" data-style="width:100%;">
                                                    <div class="sc_services_item_wrap">
                                                        <div class="sc_services_item sc_services_item_3 odd">
                                                            <div class="sc_services_item_featured post_featured">
                                                                <div class="post_thumb" data-title="Who We Are">
                                                                    <a class="hover_icon hover_icon_link" href="#">
                                                                        <img alt="icon.jpg" src="Public/Home/images/home3bk.jpg">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_title">
                                                                    <a href="#">道德文化基金</a>
                                                                </h4>
                                                                <div class="sc_services_item_description">
                                                                   <p> 中国社会基金会道德文化基金（以下简称：道德文化基金)旨在积极探索道德文化进万家、积极推动创建道德文化校园、道德文化企业、道德文化区县、道德文化乡镇四个创建道德文化教育实践活动，树立倡道德文化，赞时代楷模，播道德种子，树道德榜样的新风尚，实现“让道德融入世界，让世界充满道德”奋斗的目标。</p>
                                                                   <a href="#" class="sc_services_item_readmore">查看更多
                                                                        <span class="icon-right-1"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Service item -->
                                            <div class="sc_slider_controls_wrap">
                                                <a class="sc_slider_prev" href="#"></a>
                                                <a class="sc_slider_next" href="#"></a>
                                            </div>
                                            <div class="sc_slider_pagination_wrap"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Services section -->
                                <!-- Greeting --
                                <div class="greeting_section_bg">
                                    <div class="content_wrap">
                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 padding_top_6em">
                                            <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                                <h1 class="sc_title sc_title_regular margin_top_null margin_bottom_0_5em">“营造公益氛围，发展公益事业，促进人与社会、人与自然的可持续发展。”</h1>
                                                  <div class="sc_section font_size_1_7143em line_height_1_3em font_weight_700">
                                                    <div class="sc_section_inner">
                                                        <p class="margin_bottom_null tpl_dark">Frederick Davidson</p>
                                                    </div>
                                                </div>
                                                <div class="sc_section margin_bottom_large font_weight_700">
                                                    <div class="sc_section_inner">
                                                        <p class="accent1 margin_bottom_small">中国医学基金会董事</p>
                                                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                            <div class="sc_socials_item">
                                                                <a href="#" target="_blank" class="social_icons social_tencent-weibo">
                                                                    <span class="icon-tencent-weibo"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="#" target="_blank" class="social_icons social_weibo">
                                                                    <span class="icon-weibo"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="#" target="_blank" class="social_icons social_qq">
                                                                    <span class="icon-qq"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column-1_2 sc_column_item sc_column_item_2 even"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Greeting section -->
                                <!-- General Info Section -->
                                <div class="general_info_section">
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3 margin_bottom_large">
                                        <div class="column-1_3 sc_column_item sc_column_item_1 odd first">
                                            <div class="gi_block">
                                                <h3 class="sc_title sc_title_regular tpl_light">我们的故事</h3>
                                                <p class="tpl_light">是 一个为广大基金会、公益组织和捐赠人提供免费在线捐赠服务的平台。我们相信，全世界的人们都想对社会有所贡献，在一定程度上回馈社会。我们希望通过一个友好、自由和有效的方式帮助您实现这个愿望。点击这里进行今天的</p>
                                                <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_4 sc_button_size_large margin_top_medium">查看更多</a>
                                            </div>
                                        </div><div class="column-1_3 sc_column_item sc_column_item_2 even">
                                             <div class="gi_block">
                                                <h3 class="sc_title sc_title_regular tpl_light">为什么选择我们做慈善?</h3>
                                                <p class="tpl_light">我们是一个专注于为广大基金会、公益组织、爱心企业和人士提供互联网公益众筹服务和公益合作咨询的第三方平台。我们是一个专注于为广大基金会、公益组织、爱心企业和人士提供互联网公益众筹服务和公益合作咨询的第三方平</p>
                                                <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_4 sc_button_size_large margin_top_medium">查看更多</a>
                                             </div>
                                        </div><div class="column-1_3 sc_column_item sc_column_item_3 last">
                                            <div class="gi_block">
                                                <h3 class="sc_title sc_title_regular tpl_light">我们的基金会</h3>
                                                <p class="tpl_light">项目业务范围包括：提供信息技术支持、传播公益文化和理念，开展与社会福利相关的工作。项目业务范围包括：提供信息技术支持、传播公益文化和理念，开展与社会福利相关的工作。项目业务范围包括：提供信息技术支持、传播公</p>
                                                <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_4 sc_button_size_large margin_top_medium">查看更多</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /General Info Section -->
                                <!-- Team section -->
                                <div class="sc_team_wrap scheme_original padding_top_2_5em padding_bottom_7_1429em">
                                    <div class="content_wrap">
                                        <div class="sc_team sc_team_style_team-1 sc_slider_nopagination sc_slider_nocontrols aligncenter width_100_per" data-interval="7176" data-slides-per-view="3" data-slides-min-width="250">
                                            <h6 class="sc_team_subtitle sc_item_subtitle">公益救助</h6>
                                            <h2 class="sc_team_title sc_item_title">有创意，有互动，有思想的公益救助活动。</h2>
                                            <div class="sc_team_descr sc_item_descr">2017在民政部注册成立，我们的宗旨是营造公益氛围，发展公益事业，促进人与社会、人与自然的可持续发展。</div>
                                            <div class="sc_columns columns_wrap">
                                                <?php if(is_array($Data)): foreach($Data as $key=>$vo): ?><!-- Team item -->
                                                <div class="column-3_10 column_padding_bottom">
                                                    <div class="sc_team_item sc_team_item_3 odd">
                                                        <div class="sc_team_item_avatar">
                                                            <a class="sc_team_item_avatar_link" href="<?php echo U('Rescue/deta', array('rescue_id' => $vo['rescue_id']));?>">
                                                                <img alt="" src="<?php echo ($vo["rescue_pic"]); ?>">
                                                            </a>
                                                        </div>
                                                        <div class="sc_team_item_info">
                                                            <h5 class="sc_team_item_title">
                                                                <a href="<?php echo U('Rescue/deta', array('rescue_id' => $vo['rescue_id']));?>"><?php echo ($vo["rescue_title"]); ?></a>
                                                            </h5>
                                                            <div class="post_info">
																<span class="post_info_item post_info_tags">发起者：
						                                            <a class="donation_category_link" href="news_center.html"><?php echo ($vo["rescue_source"]); ?></a>
						                                       </span> 
															</div>
                                                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                                <div class="sc_socials_cen">
                                                                	<div class="sc_socials_sz"><span><?php echo ($vo["rescue_offer"]); ?></span></div>
                                                                		<div class="sc_socials_wz">捐款金额（元）</div>
                                                                </div>
                                                                <div class="sc_socials_cen">
                                                                	<div class="sc_socials_sz"><span><?php echo ($vo["rescue_appeal"]); ?></span></div>
                                                                		<div class="sc_socials_wz">求助金额（元）</div>
                                                                </div>
                                                                <div class="sc_socials_cen">
                                                                	<div class="sc_socials_sz"><span><?php echo ($vo["rescue_rate"]); ?></span>%</div>
                                                                		<div class="sc_socials_wz">项目进度</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Team item --><?php endforeach; endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Team section -->
                                <!-- Call to action -->
                                <div class="tpl_call_to_action_bg">
                                    <div class="content_wrap">
                                        <div class="sc_call_to_action sc_call_to_action_style_1 sc_call_to_action_align_center sc_call_to_action_color_style_2 width_100_per">
                                            <div class="sc_call_to_action_info">
                                                <h2 class="sc_call_to_action_title sc_item_title">不要放弃时间！ 今天你献爱心了吗？</h2>
                                                <div class="sc_call_to_action_descr sc_item_descr"></div>
                                                <div class="sc_call_to_action_buttons sc_item_buttons">
                                                    <div class="sc_call_to_action_button sc_item_button">
                                                        <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_4 sc_button_size_large">在线救助</a>
                                                    </div>
                                                    <div class="sc_call_to_action_button sc_item_button">
                                                        <a href="#" class="sc_button sc_button_square sc_button_style_border sc_button_color_style_4 sc_button_size_large">公益咨询</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Call to action -->
                            </section>
                        </article>
                    </div>
                    <!-- /Content -->
                </div>
                <!-- /Page Content Wrap -->
                 <!-- Footer -->
                <footer class="footer_wrap widget_area scheme_original">
                    <div class="footer_wrap_inner widget_area_inner">
                        <div class="content_wrap">
                            <div class="columns_wrap">
                                <!-- Widget: Text -->
                                <aside class="column-1_4 widget widget_text">
                                    <h5 class="widget_title">关于我们</h5>
                                    <div class="textwidget">
                                        <p>我们是一群有爱心的慈善公益人，我们期待志同道合的爱心人士加入我们。</p>
                                        <p class="textwidget_info">
                                            <strong>邮箱: info#yoursite.com（#替换成@)</strong>
                                        </p>
                                        <p class="textwidget_info">
                                            <strong>地址:北京市海淀区清华科技园.<a href="map/beijing.htm">百度地图</a></strong>
                                        </p>
                                        <p class="textwidget_info">
                                            <strong>电话:400-6756-168</strong>
                                        </p>
                                    </div>
                                </aside><!-- /Widget: Text --><!-- Widget: Recent Posts --><aside class="column-1_4 widget widget_recent_posts">
                                <h5 class="widget_title">眼科古籍</h5>
                                <article class="post_item with_thumb first">
                                    <div class="post_thumb">
                                        <img alt="" src="Public/Home/images/op1.jpg">
                                    </div>
                                    <div class="post_content">
                                        <h6 class="post_title">
                                            <a href="#">全国现有事实孤儿至少61万人 救助困局亟待破解</a>
                                        </h6>
                                        <div class="post_info">
                                                <span class="post_info_item">
                                                    <a href="#" class="post_info_date">2017-11-25 星期六</a>
                                                </span>
                                        </div>
                                    </div>
                                </article>
                                <article class="post_item with_thumb">
                                    <div class="post_thumb">
                                        <img alt="" src="Public/Home/images/op1.jpg">
                                    </div>
                                    <div class="post_content">
                                        <h6 class="post_title">
                                            <a href="#">当虐童成为大概率事件，我们只能坐等下一次刷屏？</a>
                                        </h6>
                                        <div class="post_info">
                                                <span class="post_info_item">
                                                    <a href="#" class="post_info_date">2017-11-26 星期日</a>
                                                </span>
                                        </div>
                                    </div>
                                </article>
                            </aside><!-- /Widget: Recent Posts --><!-- Widget: Instagram --><aside class="column-1_4 widget null-instagram-feed">
                                <h5 class="widget_title">最新项目</h5>
                                <ul class="instagram-pics instagram-size-large">
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="Public/Home/images/op1.jpg" alt="" title="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="Public/Home/images/op1.jpg" alt="" title="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="Public/Home/images/op1.jpg" alt="" title="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="Public/Home/images/op1.jpg" alt="" title="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="Public/Home/images/op1.jpg" alt="" title="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="Public/Home/images/op1.jpg" alt="" title="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="Public/Home/images/op1.jpg" alt="" title="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <img src="Public/Home/images/op1.jpg" alt="" title="" />
                                        </a>
                                    </li>
                                </ul>
                            </aside><!-- /Widget: Instagram --><!-- Widget: Recent Comments --><aside class="column-1_4 widget widget_recent_comments">
                                <h5 class="widget_title">友情链接</h5>
                                <ul id="recentcomments">
                                    <li class="recentcomments"> 
                                        <a href="http://www.cmf.org.cn/" target="_blank">中国医学基金会</a>
                                    </li>
                                    <li class="recentcomments">
                                        <a href="http://zgykbwg.ahnmc.com/" target="_blank">中国眼科博物馆</a>
                                    </li>
                                    <li class="recentcomments">
                                        <a href="#" target="_blank">社会福利基金会</a>
                                    </li>
                                    <li class="recentcomments">
                                        <a href="http://alijijinhui.org/index.php" target="_blank">阿里巴巴公益基金</a>
                                    </li>
                                     <li class="recentcomments">
                                        <a href="#" target="_blank">腾讯公益</a>
                                    </li>
                                </ul>
                                <ul id="recentcomments">
                                    <li class="recentcomments"> 
                                        <a href="http://www.cmf.org.cn/" target="_blank">中国医学基金会</a>
                                    </li>
                                    <li class="recentcomments">
                                        <a href="http://zgykbwg.ahnmc.com/" target="_blank">中国眼科博物馆</a>
                                    </li>
                                    <li class="recentcomments">
                                        <a href="#" target="_blank">社会福利基金会</a>
                                    </li>
                                    <li class="recentcomments">
                                        <a href="#" target="_blank">阿里巴巴公益平台</a>
                                    </li>
                                     <li class="recentcomments">
                                        <a href="http://gongyi.qq.com/" target="_blank">腾讯公益</a>
                                    </li>
                                </ul>
                            </aside>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- /Footer -->
                <!-- Copyright -->
                <!-- Copyright -->
                <div class="copyright_wrap copyright_style_text scheme_original">
                    <div class="copyright_wrap_inner">
                        <div class="content_wrap">
                            <div class="copyright_text">Copyright &copy; 2017.Company name All rights reserved.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

        <script type="text/javascript" src="Public/Home/js/jquery/jquery.js"></script>

      	<script type="text/javascript" src="Public/Home/js/vendor/photostack/modernizr.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/main.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/packed.js"></script>

        <script type="text/javascript" src="Public/Home/js/vendor/essential-grid/js/lightbox.js"></script>
        <script type="text/javascript" src="Public/Home/js/vendor/essential-grid/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/vendor/essential-grid/js/jquery.themepunch.essential.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/essential-grid-homepage-1.js"></script>

        <script type="text/javascript" src="Public/Home/js/vendor/revslider/jquery.themepunch.revolution.min.js"></script>

        <script type="text/javascript" src="Public/Home/js/vendor/revslider/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/vendor/revslider/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/vendor/revslider/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/revslider-homepage-1.min.js"></script>

        <script type="text/javascript" src="Public/Home/js/superfish.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/core.utils.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/core.init.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/template.init.min.js"></script>

        <script type="text/javascript" src="Public/Home/js/shortcodes.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/core.messages.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/vendor/magnific/jquery.magnific-popup.min.js"></script>

        <script type="text/javascript" src="Public/Home/js/countdown/jquery.plugin.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/countdown/jquery.countdown.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/vendor/swiper/swiper.min.js"></script>
        <script type="text/javascript" src="Public/Home/js/vendor/isotope/dist/isotope.pkgd.min.js"></script>

    </body>

</html>