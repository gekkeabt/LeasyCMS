<div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Leasy CMS</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#">Admin Panel</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="page/new_page.php">Create Page</a></li>
                  <li><a href="page/pages_edit.php">Edit Page</a></li>
                  <li><a href="page/pages_remove.php">Remove Page</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Functions <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="function/edit_name.php">Change Sitename</a></li>
                  <li><a href="function/edit_sidebar.php">Change Sidebar</a></li>
                  <li><a href="function/edit_footer.php">Change Footer</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="../" target="_blank">View Your Site</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><?php echo $_SESSION["username"]; ?></b> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="logout.php" class="alert-danger">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>