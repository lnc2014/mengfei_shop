<?php
/** 
* @author      lnc2014
* @date 2015-4-24 下午4:44:24 
*/ 
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <title>梦飞商城-满足你所需要的-后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
    <!-- The styles -->
    <link id="bs-css" href="<?php echo $this->adminPath?>/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="<?php echo $this->adminPath?>/css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo $this->adminPath?>/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo $this->adminPath?>/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/css/animate.min.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/css/bootstrap-cerulean.min.css' rel='stylesheet'>
    <link href='<?php echo $this->adminPath?>/css/bootstrap.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo $this->adminPath?>/bower_components/jquery/jquery.min.js"></script>
 
    <link rel="shortcut icon" href="<?php echo $this->adminPath?>/img/favicon.ico">
</head>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Charisma</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">管理员</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">个人信息</a></li>
                    <li class="divider"></li>
                    <li><a href="#">注销登录</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i>访问前台</a></li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query" type="text">
                    </form>
                </li>
                <li><button class="btn btn-success" style="margin-top: 4px;">搜索</button></li>
            </ul>

        </div>
    </div>
<div class="ch-container">
    <div class="row">
        <!-- 左边的菜单控制，由于菜单的个数不是很多，暂时可以先写死，可以以数组的形式 -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">导航菜单</li>
                        <li><a class="ajax-link" href="/"><i class="glyphicon glyphicon-home"></i><span>主面板</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo $this->createUrl('goods');?>"><i class="glyphicon glyphicon-eye-open"></i><span>商品管理</span></a>
                        </li>
                        <li><a class="ajax-link" href="form.html"><i
                                    class="glyphicon glyphicon-edit"></i><span> Forms</span></a></li>
                        <li><a class="ajax-link" href="chart.html"><i class="glyphicon glyphicon-list-alt"></i><span> Charts</span></a>
                        </li>
                        <li><a class="ajax-link" href="typography.html"><i class="glyphicon glyphicon-font"></i><span> Typography</span></a>
                        </li>
                        <li><a class="ajax-link" href="gallery.html"><i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a>
                        </li>
                        <li class="nav-header hidden-md">Sample Section</li>
                        <li><a class="ajax-link" href="table.html"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Tables</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accordion Menu</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Child Menu 1</a></li>
                                <li><a href="#">Child Menu 2</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="calendar.html"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a>
                        </li>
                        <li><a class="ajax-link" href="grid.html"><i
                                    class="glyphicon glyphicon-th"></i><span> Grid</span></a></li>
                        <li><a href="tour.html"><i class="glyphicon glyphicon-globe"></i><span> Tour</span></a></li>
                        <li><a class="ajax-link" href="icon.html"><i
                                    class="glyphicon glyphicon-star"></i><span> Icons</span></a></li>
                        <li><a href="error.html"><i class="glyphicon glyphicon-ban-circle"></i><span> Error Page</span></a>
                        </li>
                        <li><a href="login.html"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a>
                        </li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>    
<body>
<?php echo $content;   ?>
<!-- external javascript -->

<script src="<?php echo $this->adminPath?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- library for cookie management -->
<script src="<?php echo $this->adminPath?>/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo $this->adminPath?>/bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo $this->adminPath?>/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo $this->adminPath?>/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo $this->adminPath?>/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo $this->adminPath?>/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo $this->adminPath?>/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo $this->adminPath?>/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo $this->adminPath?>/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo $this->adminPath?>/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo $this->adminPath?>/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo $this->adminPath?>/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo $this->adminPath?>/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo $this->adminPath?>/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo $this->adminPath?>/js/charisma.js"></script>
</body>
</html>
