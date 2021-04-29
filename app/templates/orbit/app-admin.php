<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?php echo APP_NAME?></title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="<?php echo _vendor('orbit/images/favicon.ico')?>">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="<?php echo _vendor('orbit/plugins/switchery/switchery.min.css')?>" rel="stylesheet">
    <link href="<?php echo _vendor('orbit/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo _vendor('orbit/css/icons.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo _vendor('orbit/css/flag-icon.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo _vendor('orbit/css/style.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo _public('css/global_custom.css')?>" rel="stylesheet" type="text/css">


    <!-- DataTables css -->
    <link href="<?php echo _vendor('orbit/plugins/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo _vendor('orbit/plugins/datatables/buttons.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Responsive Datatable css -->
    <link href="<?php echo _vendor('orbit/plugins/datatables/responsive.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- End css -->

    <?php produce('headers')?>
</head>
<body class="vertical-layout">
    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close">
                <img src="<?php echo _vendor('orbit/images/svg-icon/close.svg')?>" class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-settings-sidebar-body">
            <div class="custom-mode-setting">
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Payment Reminders</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Stock Updates</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Open for New Products</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Enable SMS</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Show Map</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">e-Statement</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked /></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8"><h6 class="mb-0">Monthly Report</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked /></div>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <a href="catalog.php" class="logo logo-large"><img src="<?php echo _vendor('orbit/uploads/logo_regular.png')?>" class="img-fluid" alt="logo"></a>
                    <a href="catalog.php" class="logo logo-small"><img src="<?php echo _vendor('orbit/uploads/logo_regular.png')?>" class="img-fluid" alt="logo"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <?php loadSidebar()?>

                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="<?php echo _vendor('orbit/images/logo.svg')?>" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="<?php echo _vendor('orbit/images/svg-icon/horizontal.svg')?>" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="<?php echo _vendor('orbit/images/svg-icon/verticle.svg')?>" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="<?php echo _vendor('orbit/images/svg-icon/collapse.svg')?>" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="<?php echo _vendor('orbit/images/svg-icon/close.svg')?>" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="notifybar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo _vendor('orbit/images/svg-icon/notifications.svg')?>" class="img-fluid" alt="notifications">
                                            <span class="live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                                <div class="notification-dropdown-title">
                                                    <h4>Notifications</h4>                            
                                                </div>
                                                <ul class="list-unstyled">                                                    
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-primary-inverse"><i class="feather icon-dollar-sign"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">$135 received</h5>
                                                            <p><span class="timing">Today, 10:45 AM</span></p>                            
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-success-inverse"><i class="feather icon-file"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Project X prototype approved</h5>
                                                            <p><span class="timing">Yesterday, 01:40 PM</span></p>                            
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-danger-inverse"><i class="feather icon-eye"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">John requested to view wireframe</h5>
                                                            <p><span class="timing">3 Sep 2019, 05:22 PM</span></p>                            
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-warning-inverse"><i class="feather icon-package"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Sports shoes are out of stock</h5>
                                                            <p><span class="timing">15 Sep 2019, 02:55 PM</span></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li> 
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo _vendor('orbit/images/users/profile.svg')?>" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                      <h5>John Doe</h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="media dropdown-item">
                                                            <a href="#" class="profile-icon"><img src="assets/images/svg-icon/user.svg" class="img-fluid" alt="user">My Profile</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <a href="#" class="profile-icon"><img src="assets/images/svg-icon/email.svg" class="img-fluid" alt="email">Email</a>
                                                        </li>                                                        
                                                        <li class="media dropdown-item">
                                                            <a href="#" class="profile-icon"><img src="assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div> 
                <!-- End row -->
            </div>
            <!-- End Topbar -->
            <!-- Start Contentbar --> 
            <?php produce('breadcrum')?>
               
            <div class="contentbar">

                <?php produce('content')?>
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2020 <?php echo APP_NAME?> - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="100240705180203"
  theme_color="#13cf13"
  logged_in_greeting="You like it? send us a message and we will set up the application for you!"
  logged_out_greeting="You like it? send us a message and we will set up the application for you!">
      </div>
    <!-- Start js -->        
    <script src="<?php echo _vendor('orbit/js/jquery.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/js/popper.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/js/bootstrap.min.js')?>/"></script>
    <script src="<?php echo _vendor('orbit/js/jquery.slimscroll.js')?>"></script>
    <script src="<?php echo _vendor('orbit/js/vertical-menu.js')?>"></script>
    
    <script src="<?php echo _vendor('orbit/js/modernizr.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/js/detect.js')?>"></script>
    
    <!-- Switchery js -->
    <script src="<?php echo _vendor('orbit/plugins/switchery/switchery.min.js')?>"></script>


    <script src="<?php echo _vendor('orbit/plugins/datatables/jquery.dataTables.min.js')?>a"></script>
    <script src="<?php echo _vendor('orbit/plugins/datatables/dataTables.bootstrap4.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/plugins/datatables/dataTables.buttons.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/plugins/datatables/buttons.bootstrap4.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/plugins/datatables/jszip.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/plugins/datatables/pdfmake.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/plugins/datatables/vfs_fonts.js')?>"></script>
    <script src="<?php echo _vendor('orbit/plugins/datatables/buttons.html5.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/plugins/datatables/buttons.print.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/plugins/datatables/buttons.colVis.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/plugins/datatables/dataTables.responsive.min.js')?>"></script>
    <script src="<?php echo _vendor('orbit/plugins/datatables/responsive.bootstrap4.min.js')?>"></script>

        <!-- Core js -->
    <script src="<?php echo _vendor('orbit/js/core.js')?>"></script>
    <!-- End js -->

    <script type="text/javascript" defer>
        $(document).ready( function () {
            $('.myTable').DataTable();
        } );
    </script>
    <?php produce('scripts')?>
</body>
</html>