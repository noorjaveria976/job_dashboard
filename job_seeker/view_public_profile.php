<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>TEF - Admin Dashboard Template</title>
  <?php include('include/source.html'); ?>
  <style>
    a,
    li {
      text-decoration: none;
      color: black;
      list-style-type: none;
    }

    .fast {
      font-size: 20px;
      color: #6777ef;
    }

    .usercoverphoto img {
      display: block;
      width: 100%;
    }

    /* .profileban {
      display: block;
      width: 100%;
    } */

    .abtuser {
      /* background: #f1f5ff; */
      padding: 20px;
      border-radius: 15px;
      /* margin: 0 50px; */
      /* margin-bottom: 30px; */
      padding-bottom: 0px;
    }



    .uavatar img {
      display: block;
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 5px;

    }

    .loctext i {
      margin-right: 5px;
      width: 24px;
      color: #6777ef;
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
              <div class="col-md-8">
                <!-- coverphoto -->
                <div class="row usercoverphoto">
                  <div class="col-12 image">
                    <img src="./assets/img/cover pic.jpg" alt="Job Seeker" title="Job Seeker">

                  </div>
                </div>
                <!-- profile -->
                <div class="profileban border bg-white text-dark">
                  <div class="abtuser">
                    <div class="row d-flex">
                      <div class="col-lg-3 col-md-4">
                        <div class="uavatar"><img src="./assets/img/users/user-11.jpg" alt="Job Seeker" title="Job Seeker"></div>
                      </div>
                      <div class="col-lg-9 col-md-8">
                        <div class="title">
                          <h3><span class="text-dark">Job Seeker</span> <span style="font-size: 14px;">(Information Technology)</span></h3>
                          <div class="redyto text-success mb-2">
                            <span><i class="fas fa-laptop"></i> Ready for Hire</span>
                          </div>
                          <div class="desi"><i class="fa fa-map-marker" aria-hidden="true"></i> Bainbridge Island, Washington, United States of America</div>

                          <div class="membersinc"><i class="fa fa-history" aria-hidden="true"></i> Member Since, Sep 19, 2018</div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- download btn -->
                <div class="userlinkstp p-4 bg-light fs-5 fw-bold border" style="border-bottom-left-radius: 10px; border-bottom-right-radius:10px">
                  <a href="" class="btn btn-outline-primary py-2 px-4">
                    <i class="fa fa-download" aria-hidden="true"></i> Download CV
                  </a>
                </div>
                <!-- about -->
                <div class="card card-success mt-4">
                  <div class="card-header">
                    <h4>About Me</h4>
                  </div>
                  <div class="card-body">
                    Hello! I'm Javeria Noor, A Passionate UI/UX Designer and Frontend Developer eager to start my professional journey. With a span background in my field, I bring valuable experience, problem-solving skills, and a commitment to excellence. I’m looking for opportunities where I can make a meaningful impact.
                  </div>

                </div>
                <!-- skills -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h4>Skills</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Java</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-primary" data-width="70%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Web Design</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-warning" data-width="80%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Photoshop</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-green" data-width="48%"></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- experience  -->
                <div class="card card-danger p-4 text-dark">
                  <div class="card-header">
                    <h3>Experience </h3>
                  </div>
                  <div class="card-body">
                    <div class="expbox">
                      <h4 class="fs-5">UI UX Designer</h4>
                      <div class="excity fs-6"><i class="fas fa-map-marker-alt pe-3 fs-6"></i>Maltahohe - Namibia</div>
                      <div class="expcomp fs-6"><i class="fas fa-building pe-3 fs-6"></i>Amoka Int</div>
                      <div class="expcomp fs-6"><i class="fas fa-calendar-alt pe-3 fs-6"></i>From 13 Dec, 2009 - 07 Feb, 2012</div>

                    </div>
                  </div>

                </div>
                <!-- education  -->
                <div class="card card-warning p-4 text-dark">
                  <div class="card-header">
                    <h3>Education </h3>
                  </div>
                  <div class="card-body">
                    <div class="expbox">
                      <h4 class="fs-5">Matriculation/O-Level - Matric in Science</h4>
                      <div class="date fs-6">2005 - Palmerston North - New Zealand</div>
                      <div class="expcomp fs-6"><i class="fas fa-graduation-cap pe-3 fs-6"></i>Matric</div>
                      <div class="expcomp fs-6"><i class="fas fa-school pe-3 fs-6"></i>Govt School</div>
                      <div class="expcomp fs-6"><i class="fas fa-book pe-3 fs-6"></i>Biological Sciences, General Mathematics, Physics</div>
                    </div>
                  </div>

                </div>
                <!-- portfolio -->
                <div class="userdetailbox profileproject text-dark">
                  <h3>Portfolio</h3>
                  <div class="row mt-4">
                   <div class="col-12 col-md-6 col-lg-3">
                    <a href=""> <img src="./assets/img/jobs-portal-wzrm0-373.jpg" alt="" class="img-fluid"></a>
                   </div>
                   <div class="col-12 col-md-6 col-lg-3">
                  <a href="">   <img src="./assets/img/burger-point-fdri7-542.jpg" alt="" class="img-fluid"></a>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <!-- contact info -->
                <div class="card card-danger p-4">
                  <div class="card-header">
                    <h4>Contact Information</h4>
                  </div>
                  <div class="card-body">
                    <div class="jobdetail">

                      <div class="candidateinfo">
                        <div class="loctext mt-3"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+1234567890">+1234567890</a></div>
                        <div class="loctext mt-3"><i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:+1324564798">+1324564798</a></div>
                        <div class="loctext mt-3"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:seeker@jobsportal.com">seeker@jobsportal.com</a></div>
                        <div class="loctext mt-3"><i class="fa fa-map-marker" aria-hidden="true"></i> Dummy Street Address 123 USA</div>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- details -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3>Candidate Details</h3>
                  </div>
                  <div class="card-body p-1">
                    <div class="job-header p-0">
                      <div class="jobdetail">

                        <ul class="jbdetail row">
                          <li class="col-lg-6 col-md-6 col-6">
                            <div class="jbitlist">
                              <i class=" fas fa-check-circle fast"></i>
                              <!-- <span class="material-symbols-outlined">verified</span> -->
                              <div class="jbitdata mb-2">
                                <span class="d-block">Verified</span>
                                <strong>Yes</strong>
                              </div>
                            </div>
                          </li>
                          <li class="col-lg-6 col-md-6 col-6">
                            <div class="jbitlist mb-2">
                              <i class="fas fa-handshake fast"></i>
                              <!-- <span class="material-symbols-outlined">handshake</span> -->
                              <div class="jbitdata">
                                <span class="d-block">Ready for Hire</span>
                                <strong>Yes</strong>
                              </div>
                            </div>
                          </li>
                          <li class="col-lg-6 col-md-6 col-6">
                            <div class="jbitlist mb-2">
                              <i class="fas fa-birthday-cake fast"></i>
                              <!-- <span class="material-symbols-outlined fas fa-birthday-cake">cake</span> -->
                              <div class="jbitdata">
                                <span class="d-block">Age</span>
                                <strong>36 Years</strong>
                              </div>
                            </div>
                          </li>
                          <li class="col-lg-6 col-md-6 col-6">
                            <div class="jbitlist mb-2">
                              <span><i class="fas fa-user-circle fast"></i></span>
                              <!-- <span class="material-symbols-outlined">account_circle</span> -->
                              <div class="jbitdata">
                                <span class="d-block">Gender</span>
                                <strong>Male</strong>
                              </div>
                            </div>
                          </li>
                          <li class="col-lg-6 col-md-6 col-6">
                            <div class="jbitlist mb-2">
                              <i class="fas fa-book fast"></i>
                              <!-- <span class="material-symbols-outlined">content_paste</span> -->
                              <div class="jbitdata">
                                <span class="d-block">Marital Status</span>
                                <strong>Single</strong>
                              </div>
                            </div>
                          </li>
                          <li class="col-lg-6 col-md-6 col-6">
                            <div class="jbitlist mb-2">
                              <i class="fas fa-briefcase fast"></i>
                              <!-- <span class="material-symbols-outlined">business_center</span> -->
                              <div class="jbitdata">
                                <span class="d-block">Experience</span>
                                <strong>6 years</strong>
                              </div>
                            </div>
                          </li>
                          <li class="col-lg-6 col-md-6 col-6">
                            <div class="jbitlist mb-2">
                              <i class=" fas fa-code-branch fast"></i>
                              <!-- <span class="material-symbols-outlined">schema</span> -->
                              <div class="jbitdata">
                                <span class="d-block">Career Level</span>
                                <strong>Experienced Professional</strong>
                              </div>
                            </div>
                          </li>
                          <li class="col-lg-6 col-md-6 col-6">
                            <div class="jbitlist mb-2">
                              <i class="fas fa-map-marker-alt fast"></i>
                              <!-- <span class="material-symbols-outlined">location_on</span> -->
                              <div class="jbitdata">
                                <span class="d-block">Location</span>
                                <strong>Lodhran, Punjab, Pakistan.</strong>
                              </div>
                            </div>
                          </li>
                          <li class="col-lg-6 col-md-6 col-6">
                            <div class="jbitlist mb-2">
                              <i class="fas fa-donate fast"></i>
                              <!-- <span class="material-symbols-outlined">paid</span> -->
                              <div class="jbitdata">
                                <span class="d-block">Current Salary</span>
                                <strong>6000</strong>
                              </div>
                            </div>
                          </li>
                          <li class="col-lg-6 col-md-6 col-6">
                            <div class="jbitlist">
                              <i class="fas fa-hand-holding-usd fast"></i>
                              <!-- <span class="material-symbols-outlined">payments</span> -->
                              <div class="jbitdata">
                                <span class="d-block">Expected Salary</span>
                                <strong>10000</strong>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- language -->
                <div class="card card-success">
                  <div class="card-header">
                    <h4>Language</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">English</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-warning" data-width="70%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Urdu </div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-success" data-width="80%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Arabic</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-danger" data-width="48%"></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
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