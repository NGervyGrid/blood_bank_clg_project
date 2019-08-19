<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blood Donation - Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                                        <li class="active">
                        <a href="dash.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Data Entry</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                       <ul>
                            <li><a href="datae.php">New Data Entry</a></li>
                            <li><a href="">Update Data</a></li>
                        </ul>
                    </li>
              
                    
                        
                    <h3 class="menu-title">Backup & Restore</h3>
                    <li class="menu-item-has-children dropdown">
                      <ul>
                            <li><a href="backup.php">Backup of the Data</a></li>
                            <li><a href="restore.php">Restore the Data</a></li>
                        </ul>
                    </li>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-bars"></i></a>
                    <div class="header-left">
                        <div class="dropdown for-message">
                          <div class="dropdown-menu" aria-labelledby="message">
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                               <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        	<form method="post" action="update.php">
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Blood Group Update</strong><small> Form</small></div>
                      <div class="card-body card-block">
                        <div class="form-group"><label for="name" class=" form-control-label">Name</label><input type="text" id="name" name="name" placeholder="Enter your name" class="form-control" required></div>
                        <div class="form-group"><label for="street" class=" form-control-label">Street</label><textarea id="street" name="street" placeholder="Enter street name" class="form-control" required>
                        </textarea>
                        </div>
                        <div class="row form-group">
                          <div class="col-8">
                            <div class="form-group"><label for="postal" class=" form-control-label">Date Of Birth</label><input type="text" id="dob" name="dob" placeholder="Your Date of Birth" class="form-control" required></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"></div>
                            <div class="col-12 col-md-9">
                            </div>
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="phone" class=" form-control-label">Phone No: </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="phone" name="phone" placeholder="Enter Your Phone Number" maxlength="10" class="form-control" required>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Mobile No: </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="mobile" name="mobile" placeholder="Enter Your Mobile Number" maxlength="10" class="form-control" required>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="mail" name="mail" placeholder="Enter Email" class="form-control" pattern=".+@gmail.com" required>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Your Blood Group</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="radio" class="form-check-label ">
                                    <input type="radio" id="radio1" name="radio" value="A" class="form-check-input">Group A
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio" class="form-check-label ">
                                    <input type="radio" id="radio2" name="radio" value="B" class="form-check-input">Group B
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio" class="form-check-label ">
                                    <input type="radio" id="radio3" name="radio" value="AB" class="form-check-input">Group AB
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio" class="form-check-label ">
                                    <input type="radio" id="radio4" name="radio" value="O" class="form-check-input">Group O
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio" class="form-check-label ">
                                    <input type="radio" id="radio5" name="radio" value="A-" class="form-check-input">Group A-Negative
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio" class="form-check-label ">
                                    <input type="radio" id="radio6" name="radio" value="B-" class="form-check-input">Group B-Negative
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio" class="form-check-label ">
                                    <input type="radio" id="radio7" name="radio" value="AB-" class="form-check-input">Group AB-Negative
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio" class="form-check-label ">
                                    <input type="radio" id="radio8" name="radio" value="O-" class="form-check-input">Group O-Negative
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                      <div class="card-footer">
                        <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Update
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
</form>
    <!-- Right Panel -->
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>