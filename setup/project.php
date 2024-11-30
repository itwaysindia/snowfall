<?php 
 require_once('../includes/config/config.php');
 include("../layout/header.php");
 include("../layout/topbar.php");
 include("../layout/sidebar.php");

 ?>

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Project Setup</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Setup</a></li>
                            <li class="breadcrumb-item active">Project</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    

                    <div class="accordion accordion-flush filter-accordion">

                        <div class="card-body border-bottom">
                            <div>
                                <p class="text-muted text-uppercase fs-12 fw-medium mb-2">Project</p>
                                <ul class="list-unstyled mb-0 filter-list">
                                    <li>
                                        <a href="<?= $itways->uri(); ?>?page=category" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Category</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Zone</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">5</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Group</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Status</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">5</span>
                                            </div>
                                        </a>
                                    </li>
                              
                                  
                                </ul>
                            </div>
                        </div>

                       
                        
                      
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-9 col-lg-8">
                <div>
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row g-4">
                                <div class="col-sm-auto">
                                    <div>
                                        <a href="#" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Product</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                       
                        <!-- end card header -->
                       
                         <?php 
                         $page = $itways->getStr('page');
                         if($page=='category'){  ?>
                            
                        <div class="card-body">
                        <div class="table-responsive-sm">

                                       
                                    
                        <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0 flex-grow-1">Base Example</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="table-gridjs"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>



                         </div>
                        </div>
                        <?php } ?>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->





<?php include("../layout/footer.php"); ?>
    <!-- gridjs js -->
    <script src="assets/libs/gridjs/gridjs.umd.js"></script>
    <!-- gridjs init -->
    <!-- <script src="assets/js/pages/gridjs.init.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/gridjs"></script>
<script>
    // Initialize Grid.js
    new gridjs.Grid({
    columns: ['ID', 'Name', 'Email'], // Add your table columns here
    server: {
        url: 'setup/ajax/ajax-project.php',
        then: data => 
            data.data.map(item => [item.id, item.name, item.email]), // Map each row of data
        params: {
            limit: 10, // Items per page (can be dynamic)
            page: 1, // Initial page
            sort: 'id', // Sorting field (can be dynamic)
            order: 'asc', // Sort order (asc/desc)
        }
    },
    pagination: {
        limit: 10, // Items per page
        next: true, // Show next page button
        previous: true, // Show previous page button
    },
    sort: true, // Enable sorting
}).render(document.getElementById("table-gridjs"));

</script>
