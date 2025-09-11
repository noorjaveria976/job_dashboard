<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'include/config.php'; // DB connection
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>TEF - Admin Dashboard Template</title>
    <!-- jQuery sabse pehle -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php include('include/source.html'); ?>
    <style>
        .table.no-space-between tr {
            border-spacing: 0 !important;
        }

        .table.no-space-between td {
            padding: 0px !important;
            /* Adjust padding if needed */
        }

        .table.no-space-between {
            border-collapse: collapse !important;
            /* Removes gaps between rows */
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
                        <!-- add content here -->
                        <div class="formpanel">
                            <h3>Build Your Resume</h3>
                            <!-- Personal Information -->
                            <!-- cv -->
                            <div class="card">
                                <div class="card-header">
                                    <h4>Attached CV</h4>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="card-body">

                                    <?php


                                    // User ka ID session se le lo (example)
                                    $user_id = $_SESSION['user_id'];

                                    // Query to fetch CVs
                                    $query = mysqli_query($conn, "SELECT * FROM cvs WHERE user_id = '$user_id' ORDER BY created_at DESC");
                                    ?>

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th><strong>CV Title</strong></th>
                                                <th><strong>Default CV</strong></th>
                                                <th><strong>Date</strong></th>
                                                <th><strong>Action</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (mysqli_num_rows($query) > 0) {
                                                while ($row = mysqli_fetch_assoc($query)) {
                                                    $cv_id = $row['id'];
                                                    $cv_title = $row['title'];
                                                    $cv_file = $row['cv_file'];
                                                    $is_default = $row['is_default'];
                                                    $created_at = $row['created_at'];
                                            ?>
                                                    <tr id="cv_<?php echo $cv_id; ?>">
                                                        <td><?php echo htmlspecialchars($cv_title); ?></td>
                                                        <td>
                                                            <?php if ($is_default == 1) { ?>
                                                                <span class="text text-dark">Default</span>
                                                            <?php } else { ?>
                                                                <span class="text text-muted">-</span>
                                                            <?php } ?>
                                                        </td>
                                                        <td><span class="text text-dark"><?php echo $created_at; ?></span></td>
                                                        <td>
                                                            <a href="uploads/cvs/<?php echo $cv_file; ?>" download="<?php echo $cv_title; ?>" title="<?php echo $cv_title; ?>">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                            <a href="javascript:;" onclick="console.log('CV ID:', <?php echo $cv_id; ?>); editCv(<?php echo $cv_id; ?>);" class="text text-dark ms-2">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>




                                                            <a href="delete_cv.php?id=<?php echo $row['id']; ?>"
                                                                class="text text-danger ms-2"
                                                                onclick="return confirm('Delete this CV?');">
                                                                <i class="fas fa-times"></i>
                                                            </a>

                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            } else {
                                                echo '<tr><td colspan="4" class="text-center">No CV Uploaded Yet</td></tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                            <!-- Projects -->
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 onclick="showProjects();">Projects</h4>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#projectModal">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class="card-body">
                                    <div id="projects_div">
                                        <table class="table">
                                            <tbody class="d-flex flex-wrap">
                                                <?php
                                                include 'include/config.php'; // Database connection

                                                $query = mysqli_query($conn, "SELECT * FROM projects ORDER BY created_at DESC");
                                                if (mysqli_num_rows($query) > 0) {
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                                        $id = $row['id'];
                                                        $name = htmlspecialchars($row['name']);
                                                        $image = !empty($row['image']) ? $row['image'] : 'default.png';
                                                        $date_start = !empty($row['date_start']) ? date('d M, Y', strtotime($row['date_start'])) : '';
                                                        $date_end = !empty($row['date_end']) ? date('d M, Y', strtotime($row['date_end'])) : '';
                                                        $description = htmlspecialchars($row['description']);
                                                ?>

                                                        <tr class="d-flex flex-column border rounded p-2 m-2" style="width:220px;">
                                                            <td class="mb-2 text-center">
                                                                <img src="<?php echo $image; ?>"
                                                                    alt="<?php echo $name; ?>"
                                                                    title="<?php echo $name; ?>"
                                                                    style="max-width:120px;">
                                                            </td>
                                                            <td>
                                                                <strong><?php echo $name; ?></strong><br>
                                                                <small><?php echo $date_start . ($date_end ? ' - ' . $date_end : ''); ?></small><br>
                                                                <?php echo $description; ?>
                                                            </td>
                                                            <td class="pt-5">
                                                                <a class="text-info" href="javascript:void(0);" onclick="showProfileProjectEditModal(<?php echo $id; ?>);">Edit</a> |
                                                                <a class="text-danger" href="javascript:void(0);" onclick="delete_profile_project(<?php echo $id; ?>);">Delete</a>
                                                            </td>
                                                        </tr>

                                                <?php
                                                    }
                                                } else {
                                                    echo "<tr><td>No projects found.</td></tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- experience -->
                            <div class="card">
                                <div class="card-header">
                                    <h4>Experience</h4>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#experienceModal">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class="card-body">
                                    <?php
                                    $user_id = $_SESSION['user_id'];

                                    $sql = "
            SELECT id, title, company, country_id, state_id, city_id, date_start, date_end, is_currently_working, description
            FROM job_seeker_experiences
            WHERE user_id = '$user_id'
            ORDER BY id DESC
        ";

                                    $query = mysqli_query($conn, $sql);

                                    if (!$query) {
                                        die("SQL Error: " . mysqli_error($conn));
                                    }

                                    if (mysqli_num_rows($query) > 0) {
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            $exp_id = $row['id'];
                                            $title = htmlspecialchars($row['title']);
                                            $company = htmlspecialchars($row['company']);
                                            $city = htmlspecialchars($row['city_id']);   // abhi id hi aayegi
                                            $country = htmlspecialchars($row['country_id']); // abhi id hi aayegi
                                            $date_start = !empty($row['date_start']) ? date('d M, Y', strtotime($row['date_start'])) : '';
                                            $date_end = ($row['is_currently_working'] == 1) ? 'Present' : (!empty($row['date_end']) ? date('d M, Y', strtotime($row['date_end'])) : '');
                                            $description = nl2br(htmlspecialchars($row['description']));
                                    ?>

                                            <div class="expbox" id="experience_<?php echo $exp_id; ?>">
                                                <div class="d-flex">
                                                    <h4><?php echo $title; ?></h4>
                                                    <div class="cvnewbxedit ms-auto">
                                                        <a href="javascript:void(0);" onclick="showProfileExperienceEditModal(<?php echo $exp_id; ?>, <?php echo $row['city_id']; ?>, <?php echo $row['country_id']; ?>);" class="text text-dark">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" onclick="delete_profile_experience(<?php echo $exp_id; ?>);" class="text text-danger ms-2">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="excity"><i class="fas fa-map-marker-alt"></i> <?php echo "$city - $country"; ?></div>
                                                <div class="expcomp"><i class="fas fa-building"></i> <?php echo $company; ?></div>
                                                <div class="expcomp"><i class="fas fa-calendar-alt"></i> From <?php echo $date_start; ?> - <?php echo $date_end; ?></div>
                                                <p><?php echo $description; ?></p>
                                            </div>

                                    <?php
                                        }
                                    } else {
                                        echo '<div class="text-center">No Experience Added Yet</div>';
                                    }
                                    ?>
                                </div>
                            </div>


                            <!-- education -->
                            <div class="card">
                                <div class="card-header">
                                    <h4 onclick="showEducation();">Education</h4>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#educationModal"><i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <?php
                                    $user_id = $_SESSION['user_id'];

                                    $sql = "SELECT id, user_id, degree_level_id, degree_type_id, degree_title, major_subjects, country_id, state_id, city_id, institution, date_completion, degree_result, result_type_id, created_at 
                                    FROM job_seeker_education 
                                    WHERE user_id = '$user_id' 
                                    ORDER BY id DESC";

                                    $query = mysqli_query($conn, $sql);

                                    // Debug agar query fail ho
                                    if (!$query) {
                                        die("SQL Error in Education Section: " . mysqli_error($conn) . " | Query: " . $sql);
                                    }
                                    ?>


                                    <div class="" id="education_div">
                                        <ul class="educationList">
                                            <?php while ($row = mysqli_fetch_assoc($query)): ?>
                                                <li>
                                                    <span class="exdot"></span>
                                                    <div class="expbox" id="education_<?php echo $row['id']; ?>">
                                                        <div class="d-flex">
                                                            <h4>
                                                                <?php echo htmlspecialchars($row['degree_level_id']); ?> -
                                                                <?php echo htmlspecialchars($row['degree_title']); ?>
                                                            </h4>
                                                            <div class="cvnewbxedit ms-auto">
                                                                <a href="javascript:void(0);" onclick="showProfileEducationEditModal(<?php echo $row['id']; ?>);" class="text text-dark">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                                <a href="delete_education_sql.php?id=<?php echo $row['id']; ?>"
                                                                    onclick="return confirm('Delete this Education?');"
                                                                    class="text text-danger ms-2">
                                                                    <i class="fas fa-times"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="date"><?php echo $row['date_completion']; ?> - <?php echo $row['city_id']; ?> - <?php echo $row['country_id']; ?></div>
                                                        <div class="expcomp"><i class="fas fa-graduation-cap"></i> <?php echo $row['degree_type_id']; ?></div>
                                                        <div class="expcomp"><i class="fas fa-map-marker-alt"></i> <?php echo $row['city_id']; ?> - <?php echo $row['country_id']; ?></div>
                                                        <div class="expcomp"><i class="fas fa-school"></i> <?php echo $row['institution']; ?></div>
                                                    </div>

                                                </li>
                                            <?php endwhile; ?>

                                        </ul>
                                    </div>


                                </div>

                            </div>

                            <!-- skills....... -->
                            <div class="card">
                                <div class="card-header">
                                    <h4 onclick="showSkills();">Skills</h4>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#skillModal"><i class="fas fa-plus"></i>
                                    </button>

                                </div>
                                <div class="card-body">
                                    <div class="" id="skill_div">
                                        <div class="col-mid-12">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr id="skill_53">
                                                        <td><strong class="text">Adobe Photoshop</strong></td>
                                                        <td><span class="text">14 Years</span></td>
                                                        <td align="right"><a href="javascript:;" onclick="showProfileSkillEditModal(53);" class="text text-dark"><i class="fas fa-pencil-alt"></i></a> <a href="javascript:;" onclick="delete_profile_skill(53);" class="text text-danger ms-2"><i class="fas fa-times"></i></a></td>
                                                    </tr>
                                                    <tr id="skill_54">
                                                        <td><strong class="text">Adobe Illustrator</strong></td>
                                                        <td><span class="text">9 years</span></td>
                                                        <td align="right"><a href="javascript:;" onclick="showProfileSkillEditModal(54);" class="text text-dark"><i class="fas fa-pencil-alt"></i></a> <a href="javascript:;" onclick="delete_profile_skill(54);" class="text text-danger ms-2"><i class="fas fa-times"></i></a></td>
                                                    </tr>
                                                    <tr id="skill_55">
                                                        <td><strong class="text">HTML</strong></td>
                                                        <td><span class="text">14 Years</span></td>
                                                        <td align="right"><a href="javascript:;" onclick="showProfileSkillEditModal(55);" class="text text-dark"><i class="fas fa-pencil-alt"></i></a> <a href="javascript:;" onclick="delete_profile_skill(55);" class="text text-danger ms-2"><i class="fas fa-times"></i></a></td>
                                                    </tr>
                                                    <tr id="skill_56">
                                                        <td><strong class="text">CSS</strong></td>
                                                        <td><span class="text">13 Years</span></td>
                                                        <td align="right"><a href="javascript:;" onclick="showProfileSkillEditModal(56);" class="text text-dark"><i class="fas fa-pencil-alt"></i></a> <a href="javascript:;" onclick="delete_profile_skill(56);" class="text text-danger ms-2"><i class="fas fa-times"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- languages -->
                            <div class="card">
                                <div class="card-header">
                                    <h4 onclick="showLanguages();">Languages</h4>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#languageModal"><i class="fas fa-plus"></i>
                                    </button>

                                </div>
                                <div class="card-body">
                                    <div class="" id="language_div">
                                        <div class="col-mid-12">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr id="language_34">
                                                        <td><strong>Urdu</strong></td>
                                                        <td><span>Expert</span></td>
                                                        <td align="right"><a href="javascript:;" onclick="showProfileLanguageEditModal(34);" class="text text-dark"><i class="fas fa-pencil-alt"></i></a> <a href="javascript:;" onclick="delete_profile_language(34);" class="text text-danger ms-2"><i class="fas fa-times"></i></a></td>
                                                    </tr>
                                                    <tr id="language_35">
                                                        <td><strong>English</strong></td>
                                                        <td><span>Expert</span></td>
                                                        <td align="right"><a href="javascript:;" onclick="showProfileLanguageEditModal(35);" class="text text-dark"><i class="fas fa-pencil-alt"></i></a> <a href="javascript:;" onclick="delete_profile_language(35);" class="text text-danger ms-2"><i class="fas fa-times"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <!-- <div class="modal" id="add_language_modal" tabindex="-1" aria-labelledby="addlangModalLabel" aria-hidden="true" role="dialog"></div> -->



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

    <!-- modal for add cv -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="formModal">Add CV</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="save_cv.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-body">
                            <input type="hidden" name="cv_id" id="cv_id">


                            <div class="formrow pb-3" id="div_title">
                                <input class="form-control" id="title" placeholder="CV title" name="title" type="text" required>
                            </div>

                            <div class="formrow pb-3" id="div_cv_file">
                                <input name="cv_file" id="cv_file" type="file" required>
                            </div>

                            <div class="formrow" id="div_is_default">
                                <label for="is_default" class="bold">Is default?</label>
                                <div class="radio-list">
                                    <label class="radio-inline">
                                        <input id="default" name="is_default" type="radio" value="1"> Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input id="not_default" name="is_default" type="radio" value="0" checked> No
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary w-100 fw-bold fs-6">Save Changes <i class="fas fa-arrow-circle-right"></i></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- modal for add projects -->
    <!-- Project Modal -->

    <!-- Project Modal -->
    <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form class="form" id="add_edit_profile_project" method="POST" action="save_project.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="projectModalLabel">Add / Edit Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" name="project_id" id="project_id">


                        <!-- Project Name -->
                        <div class="formrow pb-3">
                            <input class="form-control p-3" id="name" placeholder="Project Name" name="name" type="text" required>
                        </div>

                        <!-- Project Image -->
                        <div class="formrow pb-3">
                            <div class="uploadphotobx border border-dashed p-3 text-center rounded cursor-pointer" id="uploadBox">
                                <i class="fa fa-upload fa-2x mb-2"></i>
                                <div id="uploadText">Click here to upload Project Image</div>
                                <img id="previewImage" src="" alt="Preview" style="display:none; max-width:100%; margin-top:10px; border-radius:10px;" />
                            </div>
                            <input type="file" name="image" id="imageInput" style="display:none;" accept="image/*">
                        </div>

                        <!-- Project URL -->
                        <div class="formrow pb-3">
                            <input class="form-control p-3" id="url" placeholder="Project URL" name="url" type="text">
                        </div>

                        <!-- Start Date -->
                        <div class="formrow pb-3">
                            <input class="form-control p-3 datepicker" id="date_start" placeholder="Project Start Date" name="date_start" type="date">
                        </div>

                        <!-- End Date -->
                        <div class="formrow pb-3">
                            <input class="form-control p-3 datepicker" id="date_end" placeholder="Project End Date" name="date_end" type="date">
                        </div>

                        <!-- Ongoing Project -->
                        <div class="formrow pb-3">
                            <label class="bold">Is Currently Ongoing?</label>
                            <div class="radio-list">
                                <label class="me-3"><input type="radio" name="is_on_going" value="1"> Yes</label>
                                <label><input type="radio" name="is_on_going" value="0" checked> No</label>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="formrow pb-3">
                            <textarea name="description" class="form-control" id="description" placeholder="Project description"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JS for Image Upload Preview -->
    <!-- <script>
  const uploadBox = document.getElementById('uploadBox');
  const imageInput = document.getElementById('imageInput');
  const previewImage = document.getElementById('previewImage');
  const uploadText = document.getElementById('uploadText');

  uploadBox.addEventListener('click', () => {
    imageInput.click();
  });

  imageInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        previewImage.src = e.target.result;
        previewImage.style.display = 'block';
        uploadText.style.display = 'none';
      };
      reader.readAsDataURL(file);
    }
  });
</script> -->


    <!-- <script>
        var uploadBox = document.getElementById('uploadBox');
        var imageInput = document.getElementById('imageInput');
        var previewImage = document.getElementById('previewImage');
        var uploadText = document.getElementById('uploadText');

        uploadBox.addEventListener('click', () => imageInput.click());
        imageInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                    uploadText.style.display = 'none';
                };
                reader.readAsDataURL(file);
            }
        });
    </script> -->


    <!-- JS for Image Upload Preview -->
    <script>
        const uploadBox = document.getElementById('uploadBox');
        const imageInput = document.getElementById('imageInput');
        const previewImage = document.getElementById('previewImage');
        const uploadText = document.getElementById('uploadText');

        uploadBox.addEventListener('click', () => {
            imageInput.click();
        });

        imageInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                    uploadText.style.display = 'none';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>



    <!-- modal for add experience -->
    <div class="modal fade" id="experienceModal" tabindex="-1" role="dialog" aria-labelledby="formModal2"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Experience</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form" id="add_edit_profile_experience" method="POST" action="save_experience_sql.php">
                    <!-- <input type="hidden" name="_token" value="6yWsZRaRmexsWsKMZhvrp1XB4w6hgjC2GUPscb02" autocomplete="off"> -->

                    <div class="modal-body">
                        <div class="form-body">
                            <input type="hidden" name="experience_id" id="experience_id">

                            <div class="formrow" id="div_title">
                                <input class="form-control" id="title" placeholder="Experience Title" name="title" type="text" value="">
                                <span class="help-block title-error"></span>
                            </div>

                            <div class="formrow" id="div_company">
                                <input class="form-control" id="company" placeholder="Company" name="company" type="text" value="">
                                <span class="help-block company-error"></span>
                            </div>

                            <div class="formrow" id="div_country_id">
                                <select class="form-control" id="experience_country" name="country">
                                    <option value="">Select Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>

                                </select>
                                <span class="help-block country_id-error"></span>
                            </div>

                            <div class="formrow" id="div_state_id">
                                <span id="default_state_experience_dd"><select id="experience_state_id" class="form-control" name="state">
                                        <option value="">Select State</option>
                                        <option value="Alabama">Alabama</option>
                                        <option value="Alaska">Alaska</option>

                                    </select></span>
                                <span class="help-block state_id-error"></span>
                            </div>

                            <div class="formrow" id="div_city_id">
                                <span id="default_city_experience_dd">
                                    <select class="form-control" id="city_id" name="city">
                                        <option value="" selected="selected">Select City</option>
                                        <option value="Arizona">Arizona</option>
                                        <option value="Arkansas">Arkansas</option>
                                        <option value="Byram">Byram</option>
                                        <option value="California">California</option>
                                        <option value="Cokato">Cokato</option>
                                        <option value="Colorado">Colorado</option>
                                    </select>
                                </span>
                                <span class="help-block city_id-error"></span>
                            </div>

                            <div class="formrow" id="div_date_start">
                                <input class="form-control" autocomplete="off" id="date_start" placeholder="Experience Start Date" name="date_start" type="date" value="">
                                <span class="help-block date_start-error"></span>
                            </div>

                            <div class="formrow" id="div_is_currently_working">
                                <label for="is_currently_working" class="bold">Currently Working?</label>
                                <div class="radio-list">
                                    <label class="radio-inline"><input id="currently_working" name="is_currently_working" type="radio" value="1"> Yes </label>
                                    <label class="radio-inline"><input id="not_currently_working" name="is_currently_working" type="radio" value="0" checked="&quot;checked&quot;"> No </label>
                                </div>
                                <span class="help-block is_currently_working-error"></span>
                            </div>


                            <div class="formrow" id="div_date_end">
                                <!-- <input type="date" class="form-control"> -->
                                <input class="form-control" autocomplete="off" id="date_end" placeholder="Experience End Date" name="date_end" type="date" value="">
                                <span class="help-block date_end-error"></span>
                            </div>




                            <div class="formrow" id="div_description">
                                <textarea name="description" class="form-control" id="description" placeholder="Experience description"></textarea>
                                <span class="help-block description-error"></span>
                            </div>
                        </div>
                    </div>




                    <script>
                        $('input[name="is_currently_working"]').on('change', function() {
                            var isWorking = $(this).val();
                            if (isWorking == "1") {
                                $('#div_date_end').hide();
                            } else {
                                $('#div_date_end').show();
                            }
                        });

                        // Call on load
                        var isWorkingInit = $('input[name="is_currently_working"]:checked').val();
                        if (isWorkingInit == "1") {
                            $('#div_date_end').hide();
                        } else {
                            $('#div_date_end').show();
                        }
                    </script>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-large btn-primary" onclick="submitProfileExperienceForm();">Save Changes <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal for add education -->
    <div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="formModal3"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form class="form" id="add_edit_profile_education" method="POST" action="education_insert_sql.php">


                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Education</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="formrow" id="div_degree_level_id">
                                <select class="form-control" id="degree_level_id" name="degree_level_id">
                                    <option value="" selected="selected">Select Degree Level</option>
                                    <option value="Non-Matriculation">Non-Matriculation</option>
                                    <option value="Matriculation/O-Level">Matriculation/O-Level</option>
                                    <option value="Intermediate/A-Level">Intermediate/A-Level</option>
                                    <option value="Bachelors">Bachelors</option>

                                </select>
                                <span class="help-block degree_level_id-error"></span>
                            </div>


                            <div class="formrow" id="div_degree_type_id">
                                <span id="degree_types_dd">
                                    <select class="form-control" id="degree_type_id" name="degree_type_id">
                                        <option value="" selected="selected">Select Degree Type</option>
                                        <option value="Science">Science</option>
                                        <option value="Arts">Arts</option>
                                        <option value="Computer">Computer</option>
                                    </select>
                                </span>
                                <span class="help-block degree_type_id-error"></span>
                            </div>

                            <div class="formrow" id="div_degree_title">
                                <input class="form-control" id="degree_title" placeholder="Degree Title" name="degree_title" type="text" value="">
                                <span class="help-block degree_title-error"></span>
                            </div>

                            <!-- <div class="formrow" id="div_major_subjects">
                                <select class="form-control select2-multiple select2-hidden-accessible" id="major_subjects" multiple="" name="major_subjects[]" tabindex="-1" aria-hidden="true">
                                    <option value="Abnormal Psychology">Abnormal Psychology</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Accounting &amp; Finance">Accounting &amp; Finance</option>
                                    <option value="Acting and Performance">Acting and Performance</option>
                                    <option value="Addressing problems of learning through technology and pedagogy">Addressing problems of learning through technology and pedagogy</option>
                                    <option value="Administrative Law and Accountability">Administrative Law and Accountability</option>

                                </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 766.667px;"></span><span class="selection"></span><span class="select2-selection select2-selection--multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0">
                                    <ul class="select2-selection__rendered list-style-none">
                                        <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" placeholder="Select Major Subjects" style="width: 765.333px;"></li>
                                    </ul>
                                </span>
                                </span><span class="dropdown-wrapper" aria-hidden="true"></span>
                                <span class="help-block major_subjects-error"></span>
                            </div> -->

                            <div class="formrow" id="div_country_id">
                                <select class="form-control" id="education_country_id" name="country_id">
                                    <option value="">Select Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>

                                </select>
                                <span class="help-block country_id-error"></span>
                            </div>

                            <div class="formrow" id="div_state_id">
                                <span id="default_state_education_dd">
                                    <select id="education_state_id" class="form-control" name="state_id">
                                        <option value="">Select State</option>
                                        <option value="Alabama">Alabama</option>
                                        <option value="Alaska">Alaska</option>
                                        <option value="Arizona">Arizona</option>
                                        <option value="Arkansas">Arkansas</option>

                                    </select></span>
                                <span class="help-block state_id-error"></span>
                            </div>

                            <div class="formrow" id="div_city_id">
                                <span id="default_city_education_dd">
                                    <select class="form-control" id="city_id" name="city_id">
                                        <option value="" selected="selected">Select City</option>
                                        <option value="Lodhran">Lodhran</option>
                                        <option value="BWP">BWP</option>
                                        <option value="Multan">Multan</option>
                                        <option value="Lahore">Lahore</option>
                                    </select>
                                </span>
                                <span class="help-block city_id-error"></span>
                            </div>

                            <div class="formrow" id="div_institution">
                                <input class="form-control" id="institution" placeholder="Institution" name="institution" type="text" value="">
                                <span class="help-block institution-error"></span>
                            </div>


                            <div class="formrow" id="div_date_completion">
                                <select class="form-control" id="date_completion" name="date_completion">
                                    <option value="" selected="selected">Select Year</option>
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>

                                </select>
                                <span class="help-block date_completion-error"></span>
                            </div>


                            <div class="formrow" id="div_degree_result">
                                <input class="form-control" id="degree_result" placeholder="Degree Result" name="degree_result" type="text" value="">
                                <span class="help-block degree_result-error"></span>
                            </div>



                            <div class="formrow" id="div_result_type_id">
                                <select class="form-control" id="result_type_id" name="result_type_id">
                                    <option value="" selected="selected">Select Result Type</option>
                                    <option value="GPA">GPA</option>
                                    <option value="Grade">Grade</option>
                                    <option value="Percentage">Percentage</option>
                                </select>
                                <span class="help-block result_type_id-error"></span>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-large btn-primary">
                            Save Changes <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal for add skills -->
    <div class="modal fade" id="skillModal" tabindex="-1" role="dialog" aria-labelledby="formModal4"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form class="form" id="add_edit_profile_skill" method="POST" action=""><input type="hidden" name="_token" value="rtLt9mvNx5J5gDNmrhcdV1ZSVZoZegEtQK253C5E" autocomplete="off">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Skill</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="formrow mb-3" id="div_job_skill_id">
                                <select class="form-control" id="job_skill" name="job_skill">
                                    <option value="" selected="selected">Select skill</option>
                                    <option value="Active listening">Active listening</option>
                                    <option value="Adaptability skills">Adaptability skills</option>
                                    <option value="Adobe Illustrator">Adobe Illustrator</option>
                                    <option value="Adobe Photoshop">Adobe Photoshop</option>
                                    <option value="Agile decision-making">Agile decision-making</option>
                                    <option value="Agility">Agility</option>

                                </select> <span class="help-block job_skill_id-error"></span>
                            </div>
                            <div class="formrow" id="div_job_experience_id">
                                <select class="form-control" id="job_experience" name="job_experience">
                                    <option value="" selected="selected">Select experience</option>
                                    <option value="Fresh">Fresh</option>
                                    <option value="Less Than 1 Year">Less Than 1 Year</option>
                                    <option value="1 Year">1 Year</option>
                                    <option value="2 years">2 years</option>
                                    <option value="3 years">3 years</option>
                                    <option value="4 years">4 years</option>
                                    <option value="5 years">5 years</option>
                                    <option value="6 years">6 years</option>

                                </select> <span class="help-block job_experience_id-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary w-100 fs-6 fw-bold" onclick="submitProfileSkillForm();">Save Changes <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <!-- modal for add language -->
    <div class="modal fade" id="languageModal" tabindex="-1" role="dialog" aria-labelledby="formModal4"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form class="form" id="add_edit_profile_skill" method="POST" action=""><input type="hidden" name="_token" value="rtLt9mvNx5J5gDNmrhcdV1ZSVZoZegEtQK253C5E" autocomplete="off">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Language</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="formrow mb-3" id="div_language_id">
                                <select class="form-control" id="language" name="language">
                                    <option value="" selected="selected">Select language</option>
                                    <option value="Abkhazian">Abkhazian</option>
                                    <option value="Afar">Afar</option>
                                    <option value="Afrikaans">Afrikaans</option>
                                    <option value="Akan">Akan</option>
                                    <option value="Albanian">Albanian</option>

                                </select> <span class="help-block language_id-error"></span>
                            </div>
                            <div class="formrow" id="div_language_level_id">
                                <select class="form-control" id="language_level" name="language_level">
                                    <option value="" selected="selected">Select Language Level</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Beginner">Beginner</option>
                                    <option value="Expert">Expert</option>
                                </select> <span class="help-block language_level_id-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary w-100 fs-6 fw-bold" onclick="submitProfileSkillForm();">Save Changes <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>





    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>

    <!-- edit script for cv -->
    <script>
        function editCv(cvId) {
            console.log("CV ID:", cvId);
            $.ajax({
                url: "get_cv.php",
                type: "GET",
                data: {
                    id: cvId
                },
                success: function(response) {
                    const data = JSON.parse(response);
                    if (data.success) {
                        $('#title').val(data.cv.title);
                        $('#cv_id').val(data.cv.id);
                        $('input[name="is_default"][value="' + data.cv.is_default + '"]').prop('checked', true);
                        $('#exampleModal').modal('show');
                    } else {
                        alert('CV not found!');
                    }
                }
            });
        }
    </script>
    <!-- AJAX for project -->
    <script>
        // Fetch all projects and display
        function fetchProjects() {
            $.get('fetch_projects.php', function(data) {
                const projects = JSON.parse(data);
                let html = '';
                projects.forEach(proj => {
                    html += `
            <tr class="d-flex flex-column">
                <td style="width:150px;" class="mb-3">
                    <img src="uploads/projects/${proj.image || 'default.png'}" style="max-width:120px;">
                </td>
                <td class="mt-3">
                    <strong>${proj.name}</strong><br>
                    <small>${proj.date_start} - ${proj.date_end}</small><br>
                    ${proj.description}
                </td>
                <td style="width:120px;">
                    <a href="javascript:void(0);" onclick="editProject(${proj.id})">Edit</a> |
                    <a href="javascript:void(0);" class="text-danger" onclick="deleteProject(${proj.id})">Delete</a>
                </td>
            </tr>`;
                });
                $('#projects_div table tbody').html(html);
            });
        }

        // Edit project → fill modal
        function editProject(id) {
            $.get('fetch_projects.php', function(data) {
                const projects = JSON.parse(data);
                const project = projects.find(p => p.id == id);
                if (project) {
                    $('#project_id').val(project.id);
                    $('#name').val(project.name);
                    $('#url').val(project.url);
                    $('#date_start').val(project.date_start);
                    $('#date_end').val(project.date_end);
                    $('#description').val(project.description);

                    if (project.image) {
                        previewImage.src = 'uploads/projects/' + project.image;
                        previewImage.style.display = 'block';
                        uploadText.style.display = 'none';
                    } else {
                        previewImage.style.display = 'none';
                        uploadText.style.display = 'block';
                    }

                    $('#projectModal').modal('show');
                } else {
                    alert('Project not found!');
                }
            });
        }

        // Delete project
        function deleteProject(id) {
            if (confirm('Delete this project?')) {
                $.post('delete_project.php', {
                    id: id
                }, function(resp) {
                    fetchProjects();
                });
            }
        }

        // Submit add/edit form
        function submitProjectForm() {
            const formData = new FormData($('#projectForm')[0]);
            $.ajax({
                url: 'save_project.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    let res = JSON.parse(response);
                    if (res.success) {
                        // ✅ Alert ab sirf yahan chalega
                        alert(res.message);
                        $("#projectModal").modal("hide");
                        fetchProjects(); // list refresh karega
                    } else {
                        alert("Error: " + res.message);
                    }
                    $('#projectModal').modal('hide');
                    $('#projectForm')[0].reset();
                    previewImage.style.display = 'none';
                    uploadText.style.display = 'block';
                    fetchProjects();
                }
            });
        }

        // On page load
        $(document).ready(function() {
            fetchProjects();
        });
    </script>

    <!-- AJAX for experience -->
    <script>
        // Fetch Experiences
       function fetchExperiences() {
    $.get('fetch_experiences_sql.php', function(data) {
        let experiences = [];

        try {
            experiences = JSON.parse(data);
        } catch (e) {
            console.error("JSON parse error:", e, data);
            return;
        }

        let html = '';

        if (Array.isArray(experiences) && experiences.length > 0) {
            experiences.forEach(exp => {
                const endDate = (exp.is_currently_working == 1) 
                    ? "Present" 
                    : (exp.date_end && exp.date_end !== "0000-00-00" ? exp.date_end : "N/A");

                html += `
                    <div class="experience-item mb-3 p-3 border rounded">
                        <h5 class="mb-1">${exp.title || ''}</h5>
                        <p class="mb-1"><strong>${exp.company || ''}</strong></p>
                        <p class="mb-1">${exp.country || ''}, ${exp.state || ''}, ${exp.city || ''}</p>
                        <p class="mb-1">From ${exp.date_start || 'N/A'} - ${endDate}</p>
                        <p class="mb-0">${exp.description || ''}</p>
                    </div>
                `;
            });
        } else {
            html = "<p>No experiences found.</p>";
        }

        $('#experienceList').html(html);
    });
}





        // Edit experience
        function editExperience(expId) {
            console.log("Experience ID:", expId);
            $.ajax({
                url: "get_experience_sql.php",
                type: "GET",
                data: {
                    id: expId
                },
                success: function(response) {
                    const data = JSON.parse(response);
                    if (data.success) {
                        // fill values
                        $('#experience_id').val(data.experience.id);
                        $('#title').val(data.experience.title);
                        $('#company').val(data.experience.company);
                        $('#experience_country_id').val(data.experience.country_id);
                        $('#experience_state_id').val(data.experience.state_id);
                        $('#city_id').val(data.experience.city_id);


                        $('#date_start').val(data.experience.date_start);
                        $('#date_end').val(data.experience.date_end);
                        $('input[name="is_currently_working"][value="' + data.experience.is_currently_working + '"]').prop('checked', true);
                        $('#description').val(data.experience.description);

                        // Show/Hide end date row according to radio
                        if (data.experience.is_currently_working == 1) {
                            $('#div_date_end').hide();
                        } else {
                            $('#div_date_end').show();
                        }

                        // Show modal
                        const modalEl = document.getElementById('experienceModal');
                        const modal = new bootstrap.Modal(modalEl);
                        modal.show();
                    } else {
                        alert('Experience not found!');
                    }
                }
            });
        }

        // Delete experience
        function delete_profile_experience(id) {
            if (confirm("Are you sure you want to delete this experience?")) {
                $.post("delete_experience_sql.php", {
                    id: id
                }, function(response) {
                    let res = JSON.parse(response);
                    if (res.success) {
                        alert(res.message);
                        location.reload();
                    } else {
                        alert("Delete failed: " + res.message);
                    }
                });
            }
        }


        // Submit form (Add/Edit)
        $('#add_edit_profile_experience').on('submit', function(e) {
            e.preventDefault();

            // Country, State, City ke selected text nikaalo
            const countryText = $('#country_id option:selected').text();
            const stateText = $('#state_id option:selected').text();
            const cityText = $('#city_id option:selected').text();

            // Agar blank hai (user ne "Select" wala option choose kiya hai) to empty string
            const countryFinal = ($('#country').val() === "") ? "" : countryText;
            const stateFinal = ($('#state').val() === "") ? "" : stateText;
            const cityFinal = ($('#city').val() === "") ? "" : cityText;

            // Hidden inputs banakar form me inject karo
            $('<input>').attr({
                type: 'hidden',
                name: 'country',
                value: countryFinal
            }).appendTo('#add_edit_profile_experience');
            $('<input>').attr({
                type: 'hidden',
                name: 'state',
                value: stateFinal
            }).appendTo('#add_edit_profile_experience');
            $('<input>').attr({
                type: 'hidden',
                name: 'city',
                value: cityFinal
            }).appendTo('#add_edit_profile_experience');

            // Ab AJAX call karo
            $.post('save_experience_sql.php', $(this).serialize(), function(response) {
                try {
                    const res = JSON.parse(response);
                    if (res.success) {
                        alert("Experience Saved Successfully!");
                        fetchExperiences(); // List refresh

                        // Modal close
                        let modalEl = document.getElementById('experienceModal');
                        let modal = bootstrap.Modal.getInstance(modalEl);
                        if (!modal) modal = new bootstrap.Modal(modalEl);
                        modal.hide();

                        // Reset form
                        $('#add_edit_profile_experience')[0].reset();
                    } else {
                        console.error("SQL Error:", res.error);
                        console.error("Query:", res.query);
                        alert("Error: " + res.message);
                    }
                } catch (err) {
                    console.error("Invalid JSON Response:", response);
                }
            });
        });

        // On page load
        $(document).ready(function() {
            fetchExperiences();

            // Init datepickers
            // $('.datepicker').datepicker({
            //     format: "yyyy-mm-dd",
            //     autoclose: true,
            //     todayHighlight: true
            // });
        });
    </script>
    <!-- Script for education -->
    <script>
        document.getElementById("add_edit_profile_education").addEventListener("submit", function(e) {
            // Degree Level
            let degreeLevel = document.getElementById("degree_level_id");
            degreeLevel.value = degreeLevel.options[degreeLevel.selectedIndex].text;

            // Degree Type
            let degreeType = document.getElementById("degree_type_id");
            degreeType.value = degreeType.options[degreeType.selectedIndex].text;

            // Country
            let country = document.getElementById("education_country_id");
            country.value = country.options[country.selectedIndex].text;

            // State
            let state = document.getElementById("education_state_id");
            state.value = state.options[state.selectedIndex].text;

            // City
            let city = document.getElementById("city_id");
            city.value = city.options[city.selectedIndex].text;

            // Result Type
            let resultType = document.getElementById("result_type_id");
            resultType.value = resultType.options[resultType.selectedIndex].text;
        });
    </script>


</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

</html>




<!-- first -->
<option value="5">Andorra</option>
<option value="6">Angola</option>
<option value="7">Anguilla</option>
<option value="8">Antarctica</option>
<option value="9">Antigua And Barbuda</option>
<option value="10">Argentina</option>
<option value="11">Armenia</option>
<option value="12">Aruba</option>
<option value="13">Australia</option>
<option value="14">Austria</option>
<option value="15">Azerbaijan</option>
<option value="16">Bahamas The</option>
<option value="17">Bahrain</option>
<option value="18">Bangladesh</option>
<option value="19">Barbados</option>
<option value="20">Belarus</option>
<option value="21">Belgium</option>
<option value="22">Belize</option>
<option value="23">Benin</option>
<option value="24">Bermuda</option>
<option value="25">Bhutan</option>
<option value="26">Bolivia</option>
<option value="27">Bosnia and Herzegovina</option>
<option value="28">Botswana</option>
<option value="29">Bouvet Island</option>
<option value="30">Brazil</option>
<option value="31">British Indian Ocean Territory</option>
<option value="32">Brunei</option>
<option value="33">Bulgaria</option>
<option value="34">Burkina Faso</option>
<option value="35">Burundi</option>
<option value="36">Cambodia</option>
<option value="37">Cameroon</option>
<option value="38">Canada</option>
<option value="39">Cape Verde</option>
<option value="40">Cayman Islands</option>
<option value="41">Central African Republic</option>
<option value="42">Chad</option>
<option value="43">Chile</option>
<option value="44">China</option>
<option value="45">Christmas Island</option>
<option value="46">Cocos (Keeling) Islands</option>
<option value="47">Colombia</option>
<option value="48">Comoros</option>
<option value="49">Republic Of The Congo</option>
<option value="50">Democratic Republic Of The Congo</option>
<option value="51">Cook Islands</option>
<option value="52">Costa Rica</option>
<option value="53">Cote D'Ivoire (Ivory Coast)</option>
<option value="54">Croatia (Hrvatska)</option>
<option value="55">Cuba</option>
<option value="56">Cyprus</option>
<option value="57">Czech Republic</option>
<option value="58">Denmark</option>
<option value="59">Djibouti</option>
<option value="60">Dominica</option>
<option value="61">Dominican Republic</option>
<option value="62">East Timor</option>
<option value="63">Ecuador</option>
<option value="64">Egypt</option>
<option value="65">El Salvador</option>
<option value="66">Equatorial Guinea</option>
<option value="67">Eritrea</option>
<option value="68">Estonia</option>
<option value="69">Ethiopia</option>
<option value="70">External Territories of Australia</option>
<option value="71">Falkland Islands</option>
<option value="72">Faroe Islands</option>
<option value="73">Fiji Islands</option>
<option value="74">Finland</option>
<option value="75">France</option>
<option value="76">French Guiana</option>
<option value="77">French Polynesia</option>
<option value="78">French Southern Territories</option>
<option value="79">Gabon</option>
<option value="80">Gambia The</option>
<option value="81">Georgia</option>
<option value="82">Germany</option>
<option value="83">Ghana</option>
<option value="84">Gibraltar</option>
<option value="85">Greece</option>
<option value="86">Greenland</option>
<option value="87">Grenada</option>
<option value="88">Guadeloupe</option>
<option value="89">Guam</option>
<option value="90">Guatemala</option>
<option value="91">Guernsey and Alderney</option>
<option value="92">Guinea</option>
<option value="93">Guinea-Bissau</option>
<option value="94">Guyana</option>
<option value="95">Haiti</option>
<option value="96">Heard and McDonald Islands</option>
<option value="97">Honduras</option>
<option value="98">Hong Kong S.A.R.</option>
<option value="99">Hungary</option>
<option value="100">Iceland</option>
<option value="101">India</option>
<option value="102">Indonesia</option>
<option value="103">Iran</option>
<option value="104">Iraq</option>
<option value="105">Ireland</option>
<option value="106">Israel</option>
<option value="107">Italy</option>
<option value="108">Jamaica</option>
<option value="109">Japan</option>
<option value="110">Jersey</option>
<option value="111">Jordan</option>
<option value="112">Kazakhstan</option>
<option value="113">Kenya</option>
<option value="114">Kiribati</option>
<option value="115">Korea North</option>
<option value="116">Korea South</option>
<option value="117">Kuwait</option>
<option value="118">Kyrgyzstan</option>
<option value="119">Laos</option>
<option value="120">Latvia</option>
<option value="121">Lebanon</option>
<option value="122">Lesotho</option>
<option value="123">Liberia</option>
<option value="124">Libya</option>
<option value="125">Liechtenstein</option>
<option value="126">Lithuania</option>
<option value="127">Luxembourg</option>
<option value="128">Macau S.A.R.</option>
<option value="129">Macedonia</option>
<option value="130">Madagascar</option>
<option value="131">Malawi</option>
<option value="132">Malaysia</option>
<option value="133">Maldives</option>
<option value="134">Mali</option>
<option value="135">Malta</option>
<option value="136">Man (Isle of)</option>
<option value="137">Marshall Islands</option>
<option value="138">Martinique</option>
<option value="139">Mauritania</option>
<option value="140">Mauritius</option>
<option value="141">Mayotte</option>
<option value="142">Mexico</option>
<option value="143">Micronesia</option>
<option value="144">Moldova</option>
<option value="145">Monaco</option>
<option value="146">Mongolia</option>
<option value="147">Montserrat</option>
<option value="148">Morocco</option>
<option value="149">Mozambique</option>
<option value="150">Myanmar</option>
<option value="151">Namibia</option>
<option value="152">Nauru</option>
<option value="153">Nepal</option>
<option value="154">Netherlands Antilles</option>
<option value="155">Netherlands The</option>
<option value="156">New Caledonia</option>
<option value="157">New Zealand</option>
<option value="158">Nicaragua</option>
<option value="159">Niger</option>
<option value="160">Nigeria</option>
<option value="161">Niue</option>
<option value="162">Norfolk Island</option>
<option value="163">Northern Mariana Islands</option>
<option value="164">Norway</option>
<option value="165">Oman</option>
<option value="166">Pakistan</option>
<option value="167">Palau</option>
<option value="168">Palestinian Territory Occupied</option>
<option value="169">Panama</option>
<option value="170">Papua new Guinea</option>
<option value="171">Paraguay</option>
<option value="172">Peru</option>
<option value="173">Philippines</option>
<option value="174">Pitcairn Island</option>
<option value="175">Poland</option>
<option value="176">Portugal</option>
<option value="177">Puerto Rico</option>
<option value="178">Qatar</option>
<option value="179">Reunion</option>
<option value="180">Romania</option>
<option value="181">Russia</option>
<option value="182">Rwanda</option>
<option value="183">Saint Helena</option>
<option value="184">Saint Kitts And Nevis</option>
<option value="185">Saint Lucia</option>
<option value="186">Saint Pierre and Miquelon</option>
<option value="187">Saint Vincent And The Grenadines</option>
<option value="188">Samoa</option>
<option value="189">San Marino</option>
<option value="190">Sao Tome and Principe</option>
<option value="191">Saudi Arabia</option>
<option value="192">Senegal</option>
<option value="193">Serbia</option>
<option value="194">Seychelles</option>
<option value="195">Sierra Leone</option>
<option value="196">Singapore</option>
<option value="197">Slovakia</option>
<option value="198">Slovenia</option>
<option value="199">Smaller Territories of the UK</option>
<option value="200">Solomon Islands</option>
<option value="201">Somalia</option>
<option value="202">South Africa</option>
<option value="203">South Georgia</option>
<option value="204">South Sudan</option>
<option value="205">Spain</option>
<option value="206">Sri Lanka</option>
<option value="207">Sudan</option>
<option value="208">Suriname</option>
<option value="209">Svalbard And Jan Mayen Islands</option>
<option value="210">Swaziland</option>
<option value="211">Sweden</option>
<option value="212">Switzerland</option>
<option value="213">Syria</option>
<option value="214">Taiwan</option>
<option value="215">Tajikistan</option>
<option value="216">Tanzania</option>
<option value="217">Thailand</option>
<option value="218">Togo</option>
<option value="219">Tokelau</option>
<option value="220">Tonga</option>
<option value="221">Trinidad And Tobago</option>
<option value="222">Tunisia</option>
<option value="223">Turkey</option>
<option value="224">Turkmenistan</option>
<option value="225">Turks And Caicos Islands</option>
<option value="226">Tuvalu</option>
<option value="227">Uganda</option>
<option value="228">Ukraine</option>
<option value="229">United Arab Emirates</option>
<option value="230">United Kingdom</option>
<option value="231" selected="selected">United States of America</option>
<option value="232">United States Minor Outlying Islands</option>
<option value="233">Uruguay</option>
<option value="234">Uzbekistan</option>
<option value="235">Vanuatu</option>
<option value="236">Vatican City State (Holy See)</option>
<option value="237">Venezuela</option>
<option value="238">Vietnam</option>
<option value="239">Virgin Islands (British)</option>
<option value="240">Virgin Islands (US)</option>
<option value="241">Wallis And Futuna Islands</option>
<option value="242">Western Sahara</option>
<option value="243">Yemen</option>
<option value="244">Yugoslavia</option>
<option value="245">Zambia</option>
<option value="246">Zimbabwe</option>
<option value="990"></option>


<!-- second -->
<option value="3921">Arizona</option>
<option value="3922">Arkansas</option>
<option value="3923">Byram</option>
<option value="3924">California</option>
<option value="3925">Cokato</option>
<option value="3926">Colorado</option>
<option value="3927">Connecticut</option>
<option value="3928">Delaware</option>
<option value="3929">District of Columbia</option>
<option value="3930">Florida</option>
<option value="3931">Georgia</option>
<option value="3932">Hawaii</option>
<option value="3933">Idaho</option>
<option value="3934">Illinois</option>
<option value="3935">Indiana</option>
<option value="3936">Iowa</option>
<option value="3937">Kansas</option>
<option value="3938">Kentucky</option>
<option value="3939">Louisiana</option>
<option value="3940">Lowa</option>
<option value="3941">Maine</option>
<option value="3942">Maryland</option>
<option value="3943">Massachusetts</option>
<option value="3944">Medfield</option>
<option value="3945">Michigan</option>
<option value="3946">Minnesota</option>
<option value="3947">Mississippi</option>
<option value="3948">Missouri</option>
<option value="3949">Montana</option>
<option value="3950">Nebraska</option>
<option value="3951">Nevada</option>
<option value="3952">New Hampshire</option>
<option value="3953">New Jersey</option>
<option value="3954">New Jersy</option>
<option value="3955">New Mexico</option>
<option value="3956">New York</option>
<option value="3957">North Carolina</option>
<option value="3958">North Dakota</option>
<option value="3959">Ohio</option>
<option value="3960">Oklahoma</option>
<option value="3961">Ontario</option>
<option value="3962">Oregon</option>
<option value="3963">Pennsylvania</option>
<option value="3964">Ramey</option>
<option value="3965">Rhode Island</option>
<option value="3966">South Carolina</option>
<option value="3967">South Dakota</option>
<option value="3968">Sublimity</option>
<option value="3969">Tennessee</option>
<option value="3970">Texas</option>
<option value="3971">Trimble</option>
<option value="3972">Utah</option>
<option value="3973">Vermont</option>
<option value="3974">Virginia</option>
<option value="3975">Washington</option>
<option value="3976">West Virginia</option>
<option value="3977">Wisconsin</option>
<option value="3978">Wyoming</option>


// ✅ Delete Experience
<!-- function delete_profile_experience(id) { if (confirm("Are you sure you want to delete this experience?")) { $.post("delete_experience_sql.php", { id: id }, function(response) { let res = JSON.parse(response); if (res.success) { alert(res.message); location.reload(); } else { alert("Delete failed: " + res.message); } }); } }

    