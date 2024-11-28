
<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="dashboard/" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/img/logo.png" alt="" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/img/logo.png" alt="" height="40">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="dashboard/" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/img/logo.png" alt="" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/img/logo.png" alt="" height="40"><h3 style="color:white; font-size:16px;">SNOWFALL</h3>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">

                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>



                            <li class="nav-item">
                                <a class="nav-link menu-link" href="dashboard/">
                                    <i class="mdi mdi-speedometer"></i> <span data-key="t-widgets">Dashboard</span>
                                </a>
                            </li>

                            



                            <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects">
                                <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Project</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarProjects">
                                <ul class="nav nav-sm flex-column">
                                   
                                    <li class="nav-item">
                                        <a href="project/list/" class="nav-link" data-key="t-api-key">Project List</a>
                                        <a href="equipment/" class="nav-link" data-key="t-api-key">Add Equipments</a>
                                        <a href="project/new-project/" class="nav-link" data-key="t-api-key">New Project</a>
                                    </li>


                                </ul>
                            </div>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarStaff" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarStaff">
                                <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Staff</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarStaff">
                                <ul class="nav nav-sm flex-column">
                                   
                                    <li class="nav-item">
                                        <a href="setup/staff/" class="nav-link" data-key="t-api-key">Staff</a>
                                        <a href="setup/role/" class="nav-link" data-key="t-api-key">Role</a>
                                    </li>

                                    
                                </ul>
                            </div>
                        </li>






                         <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarSetup" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSetup">
                                <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Setup</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarSetup">
                                <ul class="nav nav-sm flex-column">
                                   
                                    <li class="nav-item">
                                        <a href="setup/project/" class="nav-link" data-key="t-api-key">Project</a>
                                        <a href="setup/equipment/" class="nav-link" data-key="t-api-key">Equipment</a>
                                        <a href="setup/staff/" class="nav-link" data-key="t-api-key">Staff</a>
                                        <a href="setup/role/" class="nav-link" data-key="t-api-key">Role</a>
                                    </li>

                                    
                                </ul>
                            </div>
                        </li>





                           










                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>