<!-- MAIN NAVIGATION -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <nav id="mainnav-container" class="mainnav">
            <div class="mainnav__inner">

                <!-- Navigation menu -->
                <div class="mainnav__top-content scrollable-content pb-5">

                    <!-- Profile Widget -->
                    <div class="mainnav__profile mt-3 d-flex3">

                        <div class="mt-2 d-mn-max"></div>

                        <!-- Profile picture  -->
                        <div class="mininav-toggle text-center py-2">
                            <img class="mainnav__avatar img-md rounded-circle border" src="{{asset('assets/img/profile-photos/1.png')}}" alt="Profile Picture">
                        </div>

                        <div class="mininav-content collapse d-mn-max">
                            <div class="d-grid">

                                <!-- User name and position -->
                                <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                                    <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                                        <h6 class="mb-0 me-3">Aaron Chavez</h6>
                                    </span>
                                    <small class="text-muted">Administrator</small>
                                </button>

                                <!-- Collapsed user menu -->
                                <div id="usernav" class="nav flex-column collapse">
                                    <a href="#" class="nav-link d-flex justify-content-between align-items-center">
                                        <span><i class="demo-pli-mail fs-5 me-2"></i><span class="ms-1">Messages</span></span>
                                        <span class="badge bg-danger rounded-pill">14</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-male fs-5 me-2"></i>
                                        <span class="ms-1">Profile</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-gear fs-5 me-2"></i>
                                        <span class="ms-1">Settings</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-computer-secure fs-5 me-2"></i>
                                        <span class="ms-1">Lock screen</span>
                                    </a>
                                    <a href="#" class="nav-link">
                                        <i class="demo-pli-unlock fs-5 me-2"></i>
                                        <span class="ms-1">Logout</span>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- End - Profile widget -->

                    <!-- Navigation Category -->
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Navigation</h6>
                        <ul class="mainnav__menu nav flex-column">

                            <!-- Link with submenu -->
                                <a href="/home" class="mininav-toggle nav-link"><i class="demo-pli-home fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Dashboard</span>
                                </a>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-split-vertical-2 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Layouts</span>
                                </a>

                                <!-- Layouts submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="layouts/minimal-navigation/index.html" class="nav-link">Mini Navigation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts/push-navigation/index.html" class="nav-link">Push Navigation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts/slide-navigation/index.html" class="nav-link">Slide Navigation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts/reveal-navigation/index.html" class="nav-link">Reveal Navigation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts/stuck-sidebar/index.html" class="nav-link">Stuck Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts/pinned-sidebar/index.html" class="nav-link">Pinned Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts/unite-sidebar/index.html" class="nav-link">Unite Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts/sticky-header/index.html" class="nav-link">Sticky Header</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts/sticky-navigation/index.html" class="nav-link">Sticky Navigation</a>
                                    </li>

                                </ul>
                                <!-- END : Layouts submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Regular menu link -->
                            <li class="nav-item">
                                <a href="widgets/index.html" class="nav-link mininav-toggle"><i class="demo-pli-gear fs-5 me-2"></i>

                                    <span class="nav-label mininav-content ms-1">Widgets</span>
                                </a>
                            </li>
                            <!-- END : Regular menu link -->

                        </ul>
                    </div>
                    <!-- END : Navigation Category -->

                    <!-- Components Category -->
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Components</h6>
                        <ul class="mainnav__menu nav flex-column">

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-boot-2 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Ui Elements</span>
                                </a>

                                <!-- Ui Elements submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="ui-elements/buttons/index.html" class="nav-link">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-elements/cards/index.html" class="nav-link">Cards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-elements/dropdowns/index.html" class="nav-link">Dropdowns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-elements/typography/index.html" class="nav-link">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-elements/list-group/index.html" class="nav-link">List Group</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-elements/progress/index.html" class="nav-link">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-elements/placeholders/index.html" class="nav-link d-flex align-items-center">Placeholders<span class="badge bg-danger ms-auto">NEW</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-elements/tabs-accordions/index.html" class="nav-link">Tabs &amp; Accordions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-elements/components/index.html" class="nav-link">Components</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-elements/tooltips-popovers/index.html" class="nav-link">Tooltips &amp; Popover</a>
                                    </li>

                                </ul>
                                <!-- END : Ui Elements submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-pen-5 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Forms</span>
                                </a>

                                <!-- Forms submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="forms/general/index.html" class="nav-link">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms/tags/index.html" class="nav-link">Tags</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms/date-time-picker/index.html" class="nav-link">Date Time Picker</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms/validation/index.html" class="nav-link">Validation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms/wizard/index.html" class="nav-link">Wizard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms/file-uploads/index.html" class="nav-link">File Uploads</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms/text-editor/index.html" class="nav-link">Text Editor</a>
                                    </li>

                                </ul>
                                <!-- END : Forms submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-receipt-4 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Tables</span>
                                </a>

                                <!-- Tables submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="/tables/static-tables/" class="nav-link">Static Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/tables/gridjs/" class="nav-link">Gridjs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/tables/tabulator/" class="nav-link">Tabulator</a>
                                    </li>

                                </ul>
                                <!-- END : Tables submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-bar-chart fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Charts</span>
                                </a>

                                <!-- Charts submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="charts/chart.js/index.html" class="nav-link">ChartJS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts/charts.css/index.html" class="nav-link">ChartsCSS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts/sparklines/index.html" class="nav-link">Sparklines</a>
                                    </li>

                                </ul>
                                <!-- END : Charts submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                            <!-- Link with submenu -->
                            <li class="nav-item has-sub">

                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-repair fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Miscellaneous</span>
                                </a>

                                <!-- Miscellaneous submenu list -->
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="miscellaneous/timeline/index.html" class="nav-link">Timeline</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="miscellaneous/loader.css/index.html" class="nav-link">Loader.CSS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="miscellaneous/spinkit/index.html" class="nav-link">Spinkit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="miscellaneous/clipboard/index.html" class="nav-link">Clipboard</a>
                                    </li>

                                </ul>
                                <!-- END : Miscellaneous submenu list -->

                            </li>
                            <!-- END : Link with submenu -->

                        </ul>
                    </div>
                    <!-- END : Components Category -->

                    <!-- Data User -->
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Others</h6>
                        <ul class="mainnav__menu nav flex-column">

                            <!-- Regular menu link -->
                            <li class="nav-item">
                                <a href="/data-user" class="nav-link mininav-toggle"><i class="demo-pli-gear fs-5 me-2"></i>
                                    <span class="nav-label mininav-content ms-1">Data User</span>
                                </a>
                            </li>
                            <!-- END : Regular menu link -->

                        </ul>
                    </div>
                    <!-- END : Data User -->

                    <!-- Widget -->
                    <div class="mainnav__profile">

                        <!-- Widget buttton form small navigation -->
                        <div class="mininav-toggle text-center py-2 d-mn-min">
                            <i class="demo-pli-monitor-2"></i>
                        </div>

                        <div class="d-mn-max mt-5"></div>

                        <!-- Widget content -->
                        <div class="mininav-content collapse d-mn-max">
                            <div class="d-grid px-3 mt-3">
                                <a href="/auth/login" class="btn btn-sm btn-success" style="background-color: #25476a">Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- End - Profile widget -->

                </div>
                <!-- End - Navigation menu -->

            </div>
        </nav>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - MAIN NAVIGATION -->