<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <?php include('include/source.html'); ?>
    <style>
        li a {
            text-decoration: none;
            color: black;
            list-style-type: none;
        }

        .jobcompany .company-logo {
            display: block;
            flex-shrink: 0;
        }

        .jobcompany .company-logo img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            object-fit: contain;
            border: 2px solid #ffffff;
        }
    </style>
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <!-- topbar start -->
            <?php include('include/topbar.php'); ?>
            <!-- topbar end -->
            <!-- sidebar start -->
            <?php include('include/sidebar.html'); ?>
            <!-- sidebar end -->
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <h3>Favourite Jobs</h3>
                            <li class="col-lg-6 col-md-6">
                                <div class="card card-success">
                                    <div class="card-body">
                                        <div class="jobint mt-0 mb-4 text-dark">

                                            <div class="d-flex">
                                                <div class="fticon"><i class="fas fa-briefcase bg-secondary p-2 border  rounded-pill me-3"></i> Full Time/Permanent</div>
                                            </div>
                                            <h4 class="fs-5"><a href="" title="UI UX Designer Required">UI UX Designer Requi...</a>
                                            </h4>

                                            <div class="salary mb-2">Salary: <strong>$2500 - $3000/Monthly</strong></div>

                                            <strong><i class="fas fa-map-marker-alt"></i> Fairbanks</strong>
                                            <div class="jobcompany d-flex bg-secondary mt-3 justify-content-between align-items-center py-2 px-3 border rounded">
                                                <div class="ftjobcomp">
                                                    <span>Mar 07, 2025</span>
                                                    <a href="" title="Multimedia Design">Multimedia Design</a>
                                                </div>
                                                <a href="" class="company-logo" title="Multimedia Design"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/multimedia-design-1614272292-782.jpg" alt="Multimedia Design" title="Multimedia Design"> </a>
                                            </div>

                                            <a href="" class="btn btn-danger mt-3"><i class="fas fa-times"></i> Remove</a>


                                        </div>
                                    </div>
                                </div>
                            </li>
 <li class="col-lg-6 col-md-6">
                                <div class="card card-success">
                                    <div class="card-body">
                                        <div class="jobint mt-0 mb-4 text-dark">

                                            <div class="d-flex">
                                                <div class="fticon"><i class="fas fa-briefcase bg-secondary p-2 border  rounded-pill me-3"></i> Full Time/Permanent</div>
                                            </div>
                                            <h4 class="fs-5"><a href="" title="UI UX Designer Required">UI UX Designer Requi...</a>
                                            </h4>

                                            <div class="salary mb-2">Salary: <strong>$2500 - $3000/Monthly</strong></div>

                                            <strong><i class="fas fa-map-marker-alt"></i> Fairbanks</strong>
                                            <div class="jobcompany d-flex bg-secondary mt-3 justify-content-between align-items-center py-2 px-3 border rounded">
                                                <div class="ftjobcomp">
                                                    <span>Mar 07, 2025</span>
                                                    <a href="" title="Multimedia Design">Multimedia Design</a>
                                                </div>
                                                <a href="" class="company-logo" title="Multimedia Design"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/multimedia-design-1614272292-782.jpg" alt="Multimedia Design" title="Multimedia Design"> </a>
                                            </div>

                                            <a href="" class="btn btn-danger mt-3"><i class="fas fa-times"></i> Remove</a>


                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                </section>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <?php include('include/footer.html'); ?>
            <!-- footer end -->
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

</html>