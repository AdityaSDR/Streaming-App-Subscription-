<?php
/**
 * User: Taranpreet Singh Ray
 * Date: 12-07-2021
 * Time: 13:34
 */
?>
<!-- Sidebar wrapper start -->
<nav class="sidebar-wrapper">

    <!-- Sidebar content start -->
    <div class="sidebar-tabs">

        <!-- Tabs nav start -->
        <div class="nav" role="tablist" aria-orientation="vertical">
            <a href="#" class="logo">
                <img src="<?= $app_logo ?>" alt="<?= $app_name ?>">
            </a>
            <a class="nav-link <?= ($_SERVER['SCRIPT_NAME'] == '/admin/index.php') ? 'active' : '' ?>" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">
                <i class="icon-home2"></i>
                <span class="nav-link-text">Dashboards</span>
            </a>
            <a class="nav-link" id="product-tab" data-bs-toggle="tab" href="#tab-casts" role="tab" aria-controls="tab-product" aria-selected="false">
                <i class="icon-people_outline"></i>
                <span class="nav-link-text">Casts</span>
            </a>
            <a class="nav-link" id="pages-tab" data-bs-toggle="tab" href="#tab-pages" role="tab" aria-controls="tab-pages" aria-selected="false">
                <i class="icon-book-open"></i>
                <span class="nav-link-text">Pages</span>
            </a>
            <a class="nav-link" id="forms-tab" data-bs-toggle="tab" href="#tab-forms" role="tab" aria-controls="tab-forms" aria-selected="false">
                <i class="icon-edit1"></i>
                <span class="nav-link-text">Forms</span>
            </a>
            <a class="nav-link" id="components-tab" data-bs-toggle="tab" href="#tab-components" role="tab" aria-controls="tab-components" aria-selected="false">
                <i class="icon-box"></i>
                <span class="nav-link-text">Components</span>
            </a>
            <a class="nav-link" id="graphs-tab" data-bs-toggle="tab" href="#tab-graphs" role="tab" aria-controls="tab-graphs" aria-selected="false">
                <i class="icon-pie-chart1"></i>
                <span class="nav-link-text">Graphs</span>
            </a>
            <a class="nav-link" id="authentication-tab" data-bs-toggle="tab" href="#tab-authentication" role="tab" aria-controls="tab-authentication" aria-selected="false">
                <i class="icon-unlock"></i>
                <span class="nav-link-text">Authentication</span>
            </a>
            <a class="nav-link settings <?= ($_SERVER['SCRIPT_NAME'] == '/admin/settings.php') ? 'active' : '' ?>" id="settings-tab" data-bs-toggle="tab" href="#tab-settings" role="tab" aria-controls="tab-authentication" aria-selected="false">
                <i class="icon-settings1"></i>
                <span class="nav-link-text">Settings</span>
            </a>
        </div>
        <!-- Tabs nav end -->

        <!-- Tabs content start -->
        <div class="tab-content">

            <!-- Chat tab -->
            <div class="tab-pane fade <?= ($_SERVER['SCRIPT_NAME'] == '/admin/index.php') ? 'show active' : '' ?>" id="tab-home" role="tabpanel" aria-labelledby="home-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Dashboards
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?= BASE_URL_ADMIN ?>" class="">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <a href="#" class="red">
                        <div class="bg-avatar"><?= $USER->get_new_signups() ?></div>
                        <h5>New Users</h5>
                    </a>
                    <a href="#" class="blue">
                        <div class="bg-avatar"><?= 0 ?></div>
                        <h5>New Subscriptions</h5>
                    </a>
                </div>
                <!-- Sidebar actions ends -->

            </div>

            <!-- Casts tab -->
            <div class="tab-pane fade" id="tab-casts" role="tabpanel" aria-labelledby="cast-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Casts
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">

                    </div>
                </div>
                <!-- Sidebar menu ends -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile">
                        <i class="icon-headphones"></i> 24/7 Support
                    </div>
                </div>
                <!-- Sidebar actions ends -->

            </div>

            <!-- Pages tab -->
            <div class="tab-pane fade" id="tab-pages" role="tabpanel" aria-labelledby="pages-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Pages
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">

                    </div>
                </div>
                <!-- Sidebar menu ends -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile green">
                        <i class="icon-pie-chart1"></i> 5GB Free Space
                    </div>
                </div>
                <!-- Sidebar actions ends -->

            </div>

            <!-- Forms tab -->
            <div class="tab-pane fade" id="tab-forms" role="tabpanel" aria-labelledby="forms-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Forms
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">

                    </div>
                </div>
                <!-- Sidebar menu ends -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile red">
                        <i class="icon-mail"></i> Inbox Full
                    </div>
                </div>
                <!-- Sidebar actions ends -->

            </div>

            <!-- Components tab -->
            <div class="tab-pane fade" id="tab-components" role="tabpanel" aria-labelledby="components-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Components
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">

                    </div>
                </div>
                <!-- Sidebar menu ends -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile yellow">
                        <i class="icon-arrow-down-circle"></i><a href="#">Download Reports</a>						</div>
                </div>
                <!-- Sidebar actions ends -->

            </div>

            <!-- Graphs tab -->
            <div class="tab-pane fade" id="tab-graphs" role="tabpanel" aria-labelledby="graphs-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Graphs &amp; Tables
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">

                    </div>
                </div>
                <!-- Sidebar menu ends -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile pink">
                        <i class="icon-align-right1"></i> RTL Support
                    </div>
                </div>
                <!-- Sidebar actions ends -->

            </div>

            <!-- Authentication tab -->
            <div class="tab-pane fade" id="tab-authentication" role="tabpanel" aria-labelledby="authentication-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Authentication
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">

                    </div>
                </div>
                <!-- Sidebar menu ends -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile blue">
                        <a href="pricing.html" class="btn btn-light m-auto">Upgrade Account</a>
                    </div>
                </div>
                <!-- Sidebar actions ends -->

            </div>

            <!-- Settings tab -->
            <div class="tab-pane fade <?= ($_SERVER['SCRIPT_NAME'] == '/admin/settings.php') ? 'show active' : '' ?>" id="tab-settings" role="tabpanel" aria-labelledby="settings-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    <?= $app_name ?> Settings
                </div>
                <!-- Tab content header end -->

                <!-- Settings start -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-settings">
                        <div class="accordion" id="settingsAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genInfo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genCollapse" aria-expanded="true" aria-controls="genCollapse">
                                        General Info
                                    </button>
                                </h2>
                                <div id="genCollapse" class="accordion-collapse collapse show" aria-labelledby="genInfo" data-bs-parent="#settingsAccordion">
                                    <div class="accordion-body">
                                        <div class="field-wrapper">
                                            <input type="text" value="<?= $USR['username'] ?>" />
                                            <div class="field-placeholder">Full Name</div>
                                        </div>

                                        <div class="field-wrapper">
                                            <input type="email" value="<?= $USR['email'] ?>" />
                                            <div class="field-placeholder">Email</div>
                                        </div>

                                        <div class="field-wrapper m-0">
                                            <button class="btn btn-primary stripes-btn">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="chngPwd">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chngPwdCollapse" aria-expanded="false" aria-controls="chngPwdCollapse">
                                        Change Password
                                    </button>
                                </h2>
                                <div id="chngPwdCollapse" class="accordion-collapse collapse" aria-labelledby="chngPwd" data-bs-parent="#settingsAccordion">
                                    <div class="accordion-body">
                                        <div class="field-wrapper">
                                            <input type="text" value="">
                                            <div class="field-placeholder">Current Password</div>
                                        </div>
                                        <div class="field-wrapper">
                                            <input type="password" value="">
                                            <div class="field-placeholder">New Password</div>
                                        </div>
                                        <div class="field-wrapper">
                                            <input type="password" value="">
                                            <div class="field-placeholder">Confirm Password</div>
                                        </div>
                                        <div class="field-wrapper m-0">
                                            <button class="btn btn-primary stripes-btn">Save</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Settings end -->

                <!-- Sidebar actions starts -->
                <div class="sidebar-actions">
                    <div class="support-tile blue">
                        <a href="<?= BASE_URL_ADMIN ?>settings.php" class="btn btn-light m-auto">Advance Settings</a>
                    </div>
                </div>
                <!-- Sidebar actions ends -->
            </div>

        </div>
        <!-- Tabs content end -->

    </div>
    <!-- Sidebar content end -->

</nav>
<!-- Sidebar wrapper end -->

<!-- *************
    ************ Main container start *************
************* -->
<div class="main-container">

    <!-- Page header starts -->
    <div class="page-header">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

                <!-- Search container start -->
                <div class="search-container">

                    <!-- Toggle sidebar start -->
                    <div class="toggle-sidebar" id="toggle-sidebar">
                        <i class="icon-menu"></i>
                    </div>
                    <!-- Toggle sidebar end -->

                    <!-- Search input group start -->
                    <div class="ui fluid category search">
                        <div class="ui icon input">
                            <input class="prompt" type="text" placeholder="Search">
                            <i class="search icon icon-search1"></i>
                        </div>
                        <div class="results"></div>
                    </div>
                    <!-- Search input group end -->

                </div>
                <!-- Search container end -->

            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

                <!-- Header actions start -->
                <ul class="header-actions">

                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<span class="avatar">
											<img src="<?= $USR['avatar'] ?>" alt="User Avatar">
											<span class="status busy"></span>
										</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                            <div class="header-profile-actions">
                                <a href="<?= BASE_URL_ADMIN ?>profile.php"><i class="icon-user1"></i>Profile</a>
                                <a href="<?= BASE_URL_ADMIN ?>settings.php"><i class="icon-settings1"></i>Settings</a>
                                <a href="<?= BASE_URL_ADMIN ?>?logout"><i class="icon-log-out1"></i>Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Header actions end -->

            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Page header ends -->


