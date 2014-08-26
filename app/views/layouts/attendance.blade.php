<!DOCTYPE html>
<html lang="en">
<head>
    <title>ATTENDANCE</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css') }}  />
    <link rel="stylesheet" href={{ URL::asset('css/font-awesome.css') }} />
    <link rel="stylesheet" href={{ URL::asset('css/fullcalendar.css') }} />
    <link rel="stylesheet" href={{ URL::asset('css/jquery.jscrollpane.css') }} />
    <link rel="stylesheet" href={{ URL::asset('css/unicorn.css') }} />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body data-color="grey" class="flat">
<div id="wrapper">
<div id="header">
    <h1><a href="./index.html">Unicorn Admin</a></h1>
    <a id="menu-trigger" href="#"><i class="fa fa-bars"></i></a>
</div>

<div id="user-nav">
    <ul class="btn-group">
        <li class="btn" ><a title="" href="#"><i class="fa fa-user"></i> <span class="text">Profile</span></a></li>
        <li class="btn dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="fa fa-envelope"></i> <span class="text">Messages</span> <span class="label label-danger">5</span> <b class="caret"></b></a>
            <ul class="dropdown-menu messages-menu">
                <li class="title"><i class="fa fa-envelope-alt"></i>Messages<a class="title-btn" href="#" title="Write new message"><i class="fa fa-share"></i></a></li>
                <li class="message-item">
                    <a href="#">
                        <img alt="User Icon" src="img/demo/av1.jpg" />
                        <div class="message-content">
		                            	<span class="message-time">
			                                3 mins ago
			                            </span>
		                                <span class="message-sender">
		                                    Nunc Cenenatis
		                                </span>
		                                <span class="message">
		                                    Hi, can you meet me at the office tomorrow morning?
		                                </span>
                        </div>
                    </a>
                </li>
                <li class="message-item">
                    <a href="#">
                        <img alt="User Icon" src="img/demo/av1.jpg" />
                        <div class="message-content">
		                            	<span class="message-time">
			                                3 mins ago
			                            </span>
		                                <span class="message-sender">
		                                    Nunc Cenenatis
		                                </span>
		                                <span class="message">
		                                    Hi, can you meet me at the office tomorrow morning?
		                                </span>
                        </div>
                    </a>
                </li>
                <li class="message-item">
                    <a href="#">
                        <img alt="User Icon" src="img/demo/av1.jpg" />
                        <div class="message-content">
		                            	<span class="message-time">
			                                3 mins ago
			                            </span>
		                                <span class="message-sender">
		                                    Nunc Cenenatis
		                                </span>
		                                <span class="message">
		                                    Hi, can you meet me at the office tomorrow morning?
		                                </span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="btn"><a title="" href="#"><i class="fa fa-cog"></i> <span class="text">Settings</span></a></li>
        <li class="btn"><a title="" href="login.html"><i class="fa fa-share"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>

<div id="switcher">
    <div id="switcher-inner">
        <h3>Theme Options</h3>
        <h4>Colors</h4>
        <p id="color-style">
            <a data-color="orange" title="Orange" class="button-square orange-switcher" href="#"></a>
            <a data-color="turquoise" title="Turquoise" class="button-square turquoise-switcher" href="#"></a>
            <a data-color="blue" title="Blue" class="button-square blue-switcher" href="#"></a>
            <a data-color="green" title="Green" class="button-square green-switcher" href="#"></a>
            <a data-color="red" title="Red" class="button-square red-switcher" href="#"></a>
            <a data-color="purple" title="Purple" class="button-square purple-switcher" href="#"></a>
            <a href="#" data-color="grey" title="Grey" class="button-square grey-switcher"></a>
        </p>
        <!--
        <h4>Background Patterns</h4>
        <h5>for boxed version</h5>
        <p id="pattern-switch">
            <a data-pattern="pattern1" style="background-image:url('assets/img/patterns/pattern1.png');" class="button-square" href="#"></a>
            <a data-pattern="pattern2" style="background-image:url('assets/img/patterns/pattern2.png');" class="button-square" href="#"></a>
            <a data-pattern="pattern3" style="background-image:url('assets/img/patterns/pattern3.png');" class="button-square" href="#"></a>
            <a data-pattern="pattern4" style="background-image:url('assets/img/patterns/pattern4.png');" class="button-square" href="#"></a>
            <a data-pattern="pattern5" style="background-image:url('assets/img/patterns/pattern5.png');" class="button-square" href="#"></a>
            <a data-pattern="pattern6" style="background-image:url('assets/img/patterns/pattern6.png');" class="button-square" href="#"></a>
            <a data-pattern="pattern7" style="background-image:url('assets/img/patterns/pattern7.png');" class="button-square" href="#"></a>
            <a data-pattern="pattern8" style="background-image:url('assets/img/patterns/pattern8.png');" class="button-square" href="#"></a>
        </p>-->
        <h4 class="visible-lg">Layout Type</h4>
        <p id="layout-type">
            <a data-option="flat" class="button" href="#">Flat</a>
            <a data-option="old" class="button" href="#">Old</a>
        </p>
    </div>
    <div id="switcher-button">
        <i class="fa fa-cogs"></i>
    </div>
</div>

<div id="sidebar">
    <div id="search">
        <input type="text" placeholder="Search here..."/><button type="submit" class="tip-right" title="Search"><i class="fa fa-search"></i></button>
    </div>
    <ul>
        <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="submenu">
            <a href="#"><i class="fa fa-flask"></i> <span>UI Lab</span> <i class="arrow fa fa-chevron-right"></i></a>
            <ul>
                <li><a href="interface.html">Interface Elements</a></li>
                <li><a href="jquery-ui.html">jQuery UI</a></li>
                <li><a href="buttons.html">Buttons &amp; icons</a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="#"><i class="fa fa-th-list"></i> <span>Form elements</span> <i class="arrow fa fa-chevron-right"></i></a>
            <ul>
                <li><a href="form-common.html">Common elements</a></li>
                <li><a href="form-validation.html">Validation</a></li>
                <li><a href="form-wizard.html">Wizard</a></li>
            </ul>
        </li>
        <li><a href="tables.html"><i class="fa fa-th"></i> <span>Tables</span></a></li>
        <li><a href="grid.html"><i class="fa fa-th-list"></i> <span>Grid Layout</span></a></li>
        <li class="submenu">
            <a href="#"><i class="fa fa-file"></i> <span>Sample pages</span> <i class="arrow fa fa-chevron-right"></i></a>
            <ul>
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="chat.html">Support chat</a></li>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="messages.html">Messages</a></li>
            </ul>
        </li>
        <li>
            <a href="charts.html"><i class="fa fa-signal"></i> <span>Charts &amp; graphs</span></a>
        </li>
        <li>
            <a href="widgets.html"><i class="fa fa-inbox"></i> <span>Widgets</span></a>
        </li>
    </ul>

</div>

<div id="content">
    <div id="content-header" class="mini">
        @yield('main')
    </div>
</div>

<footer class="row">
    <div id="footer" class="col-xs-12">
        Copyright &copy; Gorzon Solutions, 2014 <br/>
        <a href="https://gorzonsolutions.com">www.gorzonsolutions.com</a>
    </div>
</footer>

<script src={{ URL::asset('js/excanvas.min.js') }} ></script>
<script src={{ URL::asset('js/jquery.min.js') }}></script>
<script src={{ URL::asset('js/jquery-ui.custom.js') }}></script>
<script src={{ URL::asset('js/bootstrap.min.js') }}></script>
<script src={{ URL::asset('js/jquery.flot.min.js') }}></script>
<script src={{ URL::asset('js/jquery.flot.resize.min.js') }}></script>
<script src={{ URL::asset('js/jquery.sparkline.min.js') }}></script>
<script src={{ URL::asset('js/fullcalendar.min.js') }}></script>

<script src={{ URL::asset('js/jquery.nicescroll.min.js') }}></script>
<script src={{ URL::asset('js/unicorn.js') }}></script>
<script src={{ URL::asset('js/unicorn.dashboard.js') }}></script>
</body>
</html>
