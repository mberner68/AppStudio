<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/AppStudio/main_files/index.php">Application Studio Dashboard</a></div>
  <ul class="nav navbar-top-links navbar-right">
                 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/AppStudio/profile/view_profiles.php?SA=<?php echo $SA?>&user=<?php echo $user?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
<div class="navbar-default sidebar" role="navigation">
<div class="sidebar-nav navbar-collapse">
<ul class="nav" id="side-menu">
<li class="sidebar-search">
<div class="input-group custom-search-form">
<input type="text" class="form-control" placeholder="Search...">
<span class="input-group-btn">
<button class="btn btn-default" type="button">
<i class="fa fa-search"></i>
</button>
</span>
</div>
<!-- /input-group -->
</li>
<li>
<a href="/AppStudio/main_files/index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
</li>
<li>
<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Profile<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
<li>
<li><a href="/AppStudio/profile/index.php">Dashboard</a></li>
</ul>
<!-- /.nav-second-level -->
</li>

<li>
<a href="#"><i class="fa fa-table fa-fw"></i> Web Content Gallery<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">

<li>
<a href="/AppStudio/websliders/index.php">Web Slider</a>
<ul style="list-style-type: none">

<li> 
<a href="/AppStudio/websliders/sliders_kfa.php">KFA Sliders</a>
</li>

<li>
<a href="/AppStudio/websliders/slider_aafa.php">AAFA Slider</a>

</li>
<li>
<a href="/AppStudio/websliders/sliders_research.php?Group=All">Research KFA Sliders</a>
</li></ul></li>
<li><a href="/AppStudio/websliders/index.php">Add New Slider</a>
<ul style="list-style-type: none">
<li>
<a href="/AppStudio/websliders/add_slider_form_AAFA.php">AAFA</a>
</li>
<li>
<a href="/AppStudio/websliders/add_slider_form_KFA.php">KFA</a>
</li>
</ul>
</li>
 
</ul>
<ul class="nav nav-second-level">
<li>
<a href="/AppStudio/pdftracker/index.php">Pdf Tracker</a>
<ul style="list-style-type: none">
<li>
<a href="/AppStudio/pdftracker/add_pdf.php">Add PDF</a>
</li>
<li>
<a href="/AppStudio/pdftracker/pdf_list.php">View PDF List</a>
</li></ul></li>
</ul>
</li>
<li>
<a href="#"><i class="fa fa-files-o fa-fw"></i> Log Out<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
<li>
<a href="login.html">Login Page</a>
</li>
</ul>
<!-- /.nav-second-level -->
</li>
</ul>
</div>
<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
