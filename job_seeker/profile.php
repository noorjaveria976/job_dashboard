<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>TEF - Admin Dashboard Template</title>
  <?php include('include/source.html'); ?>
  <style>
    .usercvimg {
      border: 2px solid #fff;
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto;
      margin-top: 20px;
      background: #fff;
      background-image: url(./assets/img/users/user-11.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
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
            <div class="card">
              <div class="card-header">
                <h4>Print Resume</h4>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills" id="myTab3" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                      aria-controls="home" aria-selected="true">Profile 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                      aria-controls="profile" aria-selected="false">Profile 2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                      aria-controls="contact" aria-selected="false">Profile 3</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent2">
                  <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                    <!-- first temp -->
                    <div class="col-md-9 col-sm-8">

                      <!-- 
                      <div class="downloadbtn text-end mb-3">
                        <button type="button" onclick="downloadPDF()" class="btn btn-primary"><i class="fas fa-download"></i> Download CV</button>
                      </div> -->



                      <div class="" id="printableArea">
                        <table width="800" align="center" style="margin:0 auto;">
                          <tbody>
                            <tr>
                              <td width="300" bgcolor="#1e5395" style="font-family:Arial, Helvetica, sans-serif; color: #fff;">
                                <table width="270" align="center" style="margin:0 auto;">
                                  <tbody>
                                    <tr>
                                      <td width="270">
                                        <div class="usercvimg">
                                          <!-- <img src="./assets/img/users/user-11.jpg" alt="Job Seeker" title="Job Seeker"> -->
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <h2 style="color: #fff;margin-bottom: 5px;font-size:20px; padding:10px 0; border-bottom: 1px solid rgba(255,255,255,0.3);">Contact Details</h2>


                                        <div style="color: #fff; font-size: 16px; margin-top: 0; display: inline-block; color: #fff; padding: 10px; text-align: center; border-radius: 40px; font-weight: 700;"><i class="fa fa-phone" aria-hidden="true"></i> +1234567890</div>

                                        <div style="color: #fff; font-size: 16px; margin-top: 0; display: inline-block; color: #fff; padding: 10px; text-align: center; border-radius: 40px; font-weight: 700;"><i class="fas fa-mobile-alt"></i> +1324564798</div>


                                        <div style="color: #fff; font-size: 16px; margin-top: 10px; padding-left: 10px;"><i class="fas fa-envelope" aria-hidden="true"></i> seeker@jobsportal.com</div>



                                        <p style="color: #fff; font-size: 14px; margin-top: 10px; padding-left: 10px;"><i class="fas fa-globe"></i> Bainbridge Island, Washington, United States of America</p>

                                        <p style="color: #fff; font-size: 14px; margin-top: 10px; padding-left: 10px; padding-bottom:20px; border-bottom: 1px solid rgba(255,255,255,0.3);"><i class="fas fa-map-marker-alt"></i> Dummy Street Address 123 USA</p>


                                        <div style="color: #fff; font-size: 30px; text-align: center; text-transform: uppercase; border: 1px solid #fff; padding: 10px; font-weight: bold; margin-top: 20px;">6 years</div>
                                        <p style="color: #fff; font-size: 16px; text-align: center; margin-top: 5px; letter-spacing: 3px; margin-bottom: 0; text-transform: uppercase;">Of experience</p>

                                      </td>
                                    </tr>

                                    <tr>
                                      <td height="20">&nbsp;</td>
                                    </tr>

                                    <tr>
                                      <td>
                                        <h2 style="color: #fff;margin-bottom: 5px;font-size:20px; padding:10px 0; border-bottom: 1px solid rgba(255,255,255,0.3);">Personal Details</h2>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td>
                                        salary_currency
                                        <table width="270" align="center" style="font-size: 14px;">
                                          <tbody>
                                            <tr>
                                              <td width="120" style="padding: 10px 0;"><strong>D.O.B</strong></td>
                                              <td style="padding: 10px 0;">9th of June 1989
                                              </td>
                                            </tr>
                                            <tr>
                                              <td width="120" style="padding: 10px 0;"><strong>Age</strong></td>
                                              <td style="padding: 10px 0;">36 Years</td>
                                            </tr>
                                            <tr>
                                              <td style="padding: 10px 0;"><strong>Gender</strong></td>
                                              <td style="padding: 10px 0;">Male</td>
                                            </tr>
                                            <tr>
                                              <td style="padding: 10px 0;"><strong>Marital Status</strong></td>
                                              <td style="padding: 10px 0;">Single</td>
                                            </tr>
                                            <tr>
                                              <td style="padding: 10px 0;"><strong>Functional Area</strong></td>
                                              <td style="padding: 10px 0;">Information Technology </td>
                                            </tr>
                                            <tr>
                                              <td style="padding: 10px 0;"><strong>Industry</strong></td>
                                              <td style="padding: 10px 0;">Advertising/PR </td>
                                            </tr>
                                            <tr>
                                              <td style="padding: 10px 0;"><strong>Career Level</strong></td>
                                              <td style="padding: 10px 0;">Experienced Professional</td>
                                            </tr>
                                            <tr>
                                              <td style="padding: 10px 0;"><strong>Current Salary</strong></td>
                                              <td style="padding: 10px 0;">6,000 </td>
                                            </tr>
                                            <tr>
                                              <td style="padding: 10px 0;"><strong>Expected Salary</strong></td>
                                              <td style="padding: 10px 0;">10,000 </td>
                                            </tr>
                                            <tr>
                                              <td style="padding: 10px 0;"><strong>Nationality</strong> </td>
                                              <td style="padding: 10px 0;">Americans</td>
                                            </tr>

                                            <tr>
                                              <td style="padding: 7px 0;"></td>
                                              <td style="padding: 7px 0;"></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td height="30">
                                        <h2 style="color: #fff;margin-bottom:15px;font-size:20px; padding:10px 0; border-bottom: 1px solid rgba(255,255,255,0.3);">Key Skills</h2>

                                        <div id="skill_div">
                                          <ul class="profileskills">
                                            <li id="skill_53">
                                              <div class="skillbox">Adobe Photoshop
                                                <span class="text text-success">14 Years</span>
                                              </div>
                                            </li>
                                            <li id="skill_54">
                                              <div class="skillbox">Adobe Illustrator
                                                <span class="text text-success">9 years</span>
                                              </div>
                                            </li>
                                            <li id="skill_55">
                                              <div class="skillbox">HTML
                                                <span class="text text-success">14 Years</span>
                                              </div>
                                            </li>
                                            <li id="skill_56">
                                              <div class="skillbox">CSS
                                                <span class="text text-success">13 Years</span>
                                              </div>
                                            </li>
                                          </ul>
                                        </div>
                                      </td>
                                    </tr>



                                    <tr>
                                      <td>
                                        <div style="color: #fff000; font-size: 16px; text-align: center; margin-top: 10px; font-style: italic; font-weight: bold; border-top: 1px solid rgba(255,255,255,0.3); padding-top: 20px;">

                                          Immediate Available For Work
                                        </div>



                                      </td>
                                    </tr>
                                    <tr>
                                      <td height="30">&nbsp;</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                              <td width="500" valign="top" style="font-family:Arial, Helvetica, sans-serif; vertical-align: top;">


                                <table width="500" align="center" style="font-size: 14px; margin:0 auto;">
                                  <tbody>
                                    <tr>
                                      <td bgcolor="#0981c5" style="background:#0981c5;">
                                        <h2 style="color: #fff;margin-bottom: 5px;text-align: center;font-size: 32px; padding:30px 0;">Job Seeker</h2>
                                      </td>
                                    </tr>


                                    <tr>
                                      <td style="padding-left:20px; padding-right:15px;">
                                        <h2 style="font-size: 22px; color: #000; border-bottom: 2px solid #000; margin-top: 0; padding-top:15px;"><span style="display:inline-block;color:#44546c; padding:10px 0">Objective</span></h2>
                                        <p style="font-size: 16px; line-height: 22px; color: #555;">Hello! I'm Sharjeel, A Passionate UI/UX Designer and Frontend Developer with a strong technical background. I bring innovation and attention to detail to create visually stunning, user-centric designs. Proactive and disciplined, I excel in ensuring maximum accessibility and elevating customer experiences throughout the development process. Let's redefine digital interactions together.</p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td height="20">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td style="padding-left:20px; padding-right:15px;">
                                        <h2 style="font-size: 22px; color: #000; border-bottom: 2px solid #000; margin-top: 0;">
                                          <span style="display:inline-block; color:#44546c; padding:10px 0">Experience</span>
                                        </h2>
                                        <div class="" id="experience_div">
                                          <ul class="experienceList">
                                            <li><span class="exdot"></span>
                                              <div class="expbox">
                                                <h4>UI UX Designer</h4>
                                                <div class="excity"><i class="fas fa-map-marker-alt"></i>Maltahohe - Namibia</div>
                                                <div class="expcomp"><i class="fas fa-building"></i>Amoka Int</div>
                                                <div class="expcomp"><i class="fas fa-calendar-alt"></i>From 13 Dec, 2009 - 07 Feb, 2012</div>
                                                <p>This is just for testing experience details</p>
                                              </div>
                                            </li>
                                          </ul>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td height="20">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td style="padding-left:20px; padding-right:15px;">
                                        <h2 style="font-size: 22px; color: #000; border-bottom: 2px solid #000; margin-top: 0;">
                                          <span style="display:inline-block; color:#44546c; padding:10px 0">Education</span>
                                        </h2>
                                        <div class="" id="education_div">
                                          <ul class="educationList">
                                            <li><span class="exdot"></span>
                                              <div class="expbox">
                                                <h4>Matriculation/O-Level - Matric in Science</h4>
                                                <div class="date">2005 - Palmerston North - New Zealand</div>
                                                <div class="expcomp"><i class="fas fa-graduation-cap"></i>Matric</div>
                                                <div class="expcomp"><i class="fas fa-school"></i>Govt School</div>
                                                <div class="expcomp"><i class="fas fa-book"></i>Biological Sciences, General Mathematics, Physics</div>
                                              </div>
                                            </li>
                                          </ul>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td height="20">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td style="padding-left:20px; padding-right:15px;">
                                        <h2 style="font-size: 22px; color: #000; border-bottom: 2px solid #000; margin-top: 0;">
                                          <span style="display:inline-block; color:#44546c; padding:10px 0">Languages</span>
                                        </h2>
                                        <div id="language_div">
                                          <div class="profilelang">
                                            <div class="langbox" id="language_34">
                                              <h5>Urdu</h5>
                                              <p>Expert</p>
                                            </div>
                                            <div class="langbox" id="language_35">
                                              <h5>English</h5>
                                              <p>Expert</p>
                                            </div>
                                            <div class="langbox" id="language_36">
                                              <h5>Arabic</h5>
                                              <p>Intermediate</p>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                    </tr>
                                  </tbody>
                                </table>





                              </td>
                            </tr>
                          </tbody>
                        </table>

                      </div>

                      <div class="text-center mt-5 mb-5">


                        <div class="downloadbtn">
                          <button type="button" onclick="downloadPDF()" class="btn btn-primary"><i class="fas fa-download"></i> Download CV</button>
                        </div>

                      </div>
                    </div>

                    <!-- first temp end -->

                  </div>
                  <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                    <!-- second temp -->
                    <div class="row mt-sm-4">
                      <div class="col-12 col-md-12 col-lg-4">
                        <div class="card author-box">
                          <div class="card-body">
                            <div class="author-box-center">
                              <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle author-box-picture">
                              <div class="clearfix"></div>
                              <div class="author-box-name">
                                <a href="#">Sarah Smith</a>
                              </div>
                              <div class="author-box-job">Web Developer</div>
                            </div>
                            <div class="text-center">
                              <div class="author-box-description">
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias
                                  minus quod dignissimos.
                                </p>
                              </div>
                              <div class="mb-2 mt-3">
                                <div class="text-small font-weight-bold">Follow Hasan On</div>
                              </div>
                              <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                <i class="fab fa-facebook-f"></i>
                              </a>
                              <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                                <i class="fab fa-twitter"></i>
                              </a>
                              <a href="#" class="btn btn-social-icon mr-1 btn-github">
                                <i class="fab fa-github"></i>
                              </a>
                              <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                                <i class="fab fa-instagram"></i>
                              </a>
                              <div class="w-100 d-sm-none"></div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header">
                            <h4>Personal Details</h4>
                          </div>
                          <div class="card-body">
                            <div class="py-4">
                              <p class="clearfix">
                                <span class="float-left">
                                  Birthday
                                </span>
                                <span class="float-right text-muted">
                                  30-05-1998
                                </span>
                              </p>
                              <p class="clearfix">
                                <span class="float-left">
                                  Phone
                                </span>
                                <span class="float-right text-muted">
                                  (0123)123456789
                                </span>
                              </p>
                              <p class="clearfix">
                                <span class="float-left">
                                  Mail
                                </span>
                                <span class="float-right text-muted">
                                  test@example.com
                                </span>
                              </p>
                              <p class="clearfix">
                                <span class="float-left">
                                  Facebook
                                </span>
                                <span class="float-right text-muted">
                                  <a href="#">John Deo</a>
                                </span>
                              </p>
                              <p class="clearfix">
                                <span class="float-left">
                                  Twitter
                                </span>
                                <span class="float-right text-muted">
                                  <a href="#">@johndeo</a>
                                </span>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="card">
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
                      </div>
                      <div class="col-12 col-md-12 col-lg-8">
                        <div class="card">
                          <div class="padding-20">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                                  aria-selected="true">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                                  aria-selected="false">Setting</a>
                              </li>
                            </ul>
                            <div class="tab-content tab-bordered" id="myTab3Content">
                              <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                                <div class="row">
                                  <div class="col-md-3 col-6 b-r">
                                    <strong>Full Name</strong>
                                    <br>
                                    <p class="text-muted">Emily Smith</p>
                                  </div>
                                  <div class="col-md-3 col-6 b-r">
                                    <strong>Mobile</strong>
                                    <br>
                                    <p class="text-muted">(123) 456 7890</p>
                                  </div>
                                  <div class="col-md-3 col-6 b-r">
                                    <strong>Email</strong>
                                    <br>
                                    <p class="text-muted">johndeo@example.com</p>
                                  </div>
                                  <div class="col-md-3 col-6">
                                    <strong>Location</strong>
                                    <br>
                                    <p class="text-muted">India</p>
                                  </div>
                                </div>
                                <p class="m-t-30">Completed my graduation in Arts from the well known and
                                  renowned institution
                                  of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was
                                  affiliated
                                  to M.S. University. I ranker in University exams from the same
                                  university
                                  from 1996-01.</p>
                                <p>Worked as Professor and Head of the department at Sarda Collage, Rajkot,
                                  Gujarat
                                  from 2003-2015 </p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                  industry. Lorem
                                  Ipsum has been the industry's standard dummy text ever since the 1500s,
                                  when
                                  an unknown printer took a galley of type and scrambled it to make a
                                  type
                                  specimen book. It has survived not only five centuries, but also the
                                  leap
                                  into electronic typesetting, remaining essentially unchanged.</p>
                                <div class="section-title">Education</div>
                                <ul>
                                  <li>B.A.,Gujarat University, Ahmedabad,India.</li>
                                  <li>M.A.,Gujarat University, Ahmedabad, India.</li>
                                  <li>P.H.D., Shaurashtra University, Rajkot</li>
                                </ul>
                                <div class="section-title">Experience</div>
                                <ul>
                                  <li>One year experience as Jr. Professor from April-2009 to march-2010
                                    at B.
                                    J. Arts College, Ahmedabad.</li>
                                  <li>Three year experience as Jr. Professor at V.S. Arts &amp; Commerse
                                    Collage
                                    from April - 2008 to April - 2011.</li>
                                  <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                  </li>
                                  <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                  </li>
                                  <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                  </li>
                                  <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                  </li>
                                </ul>
                              </div>
                              <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                                <form method="post" class="needs-validation">
                                  <div class="card-header">
                                    <h4>Edit Profile</h4>
                                  </div>
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="form-group col-md-6 col-12">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" value="John">
                                        <div class="invalid-feedback">
                                          Please fill in the first name
                                        </div>
                                      </div>
                                      <div class="form-group col-md-6 col-12">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" value="Deo">
                                        <div class="invalid-feedback">
                                          Please fill in the last name
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="form-group col-md-7 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="test@example.com">
                                        <div class="invalid-feedback">
                                          Please fill in the email
                                        </div>
                                      </div>
                                      <div class="form-group col-md-5 col-12">
                                        <label>Phone</label>
                                        <input type="tel" class="form-control" value="">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="form-group col-12">
                                        <label>Bio</label>
                                        <textarea
                                          class="form-control summernote-simple">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias minus quod dignissimos.</textarea>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="form-group mb-0 col-12">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                                          <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                                          <div class="text-muted form-text">
                                            You will get new information about products, offers and promotions
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- second temp end -->
                  </div>
                  <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                    Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa,
                    gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem interdum
                    molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor.
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