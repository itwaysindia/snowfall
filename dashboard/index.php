 <?php 
 require_once('../includes/config/config.php');
 include("../layout/header.php");
 include("../layout/topbar.php");
 include("../layout/sidebar.php");

 ?>

            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Snowfall</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
<?php 
$itways->message();


$cctv = array(
    'active' => '979',
    'inactive' => '54',
    'boq' => '1033'
);
$dfmd = array(
    'active' => '131',
    'inactive' => '1',
    'boq' => '132'
);
$hhmd = array(
    'active' => '220',
    'inactive' => '10',
    'boq' => '230'
);
$xbs = array(
    'active' => '23',
    'inactive' => '0',
    'boq' => '23'
);
$dg = array(
    'active' => '22',
    'inactive' => '1',
    'boq' => '23'
);
$ac = array(
    'active' => '43',
    'inactive' => '5',
    'boq' => '48'
);
$ups = array(
    'active' => '33',
    'inactive' => '0',
    'boq' => '33'
);
$server = array(
    'active' => '53',
    'inactive' => '0',
    'boq' => '53'
);
$extra = array(
    'active' => '23',
    'inactive' => '0',
    'boq' => '23'
);


$cctvP = ($cctv['active'] / $cctv['boq']) * 100; 
$dfmdP = ($dfmd['active'] / $dfmd['boq']) * 100; 
$hhmdP = ($hhmd['active'] / $hhmd['boq']) * 100; 
$xbsP = ($xbs['active'] / $xbs['boq']) * 100; 
$dgP = ($dg['active'] / $dg['boq']) * 100; 
$acP = ($ac['active'] / $ac['boq']) * 100; 
$upsP = ($ups['active'] / $ups['boq']) * 100;
$serverP = ($server['active'] / $server['boq']) * 100;
$extraP = ($extra['active'] / $extra['boq']) * 100;  
?>


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex flex-column h-100">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-4">
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-info)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-top">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> CCTV</p>
                                                            <!-- <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="<?= $cctv['active']; ?>">0</span></h4> -->
                                                            
                                                            
                                                            <div class="row mt-2">
                                                            <div class="col-4 bg-body-tertiary">
                                                                BOQ <h5><?= $cctv['boq']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-success">
                                                                Active <h5><?= $cctv['active']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-danger" style="color:white;">
                                                                In-Active <h5 style="color:white;"><?= $cctv['inactive']; ?></h5>
                                                            </div>
                                                            </div>


                                                        </div>
                                                        
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!--end col-->


                                        <div class="col-xl-4 col-md-4">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-info)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> DFMD</p>
                                                            <!-- <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="<?= $dfmd['active']; ?>">0</span></h4> -->

                                                            <div class="row mt-2">
                                                            <div class="col-4 bg-body-tertiary">
                                                                BOQ <h5><?= $dfmd['boq']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-success">
                                                                Active <h5><?= $dfmd['active']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-danger" style="color:white;">
                                                                In-Active <h5 style="color:white;"><?= $dfmd['inactive']; ?></h5>
                                                            </div>
                                                            </div>



                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="apply_jobs" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                                            <div id="apply_jobs_value" style="display:none;"><?= round($dfmdP); ?></div>

                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-xl-4 col-md-4">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-info)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">HHMD</p>
                                                            <!-- <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="<?= $hhmd['active']; ?>">0</span></h4> -->

                                                            <div class="row mt-2">
                                                            <div class="col-4 bg-body-tertiary">
                                                                BOQ <h5><?= $hhmd['boq']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-success">
                                                                Active <h5><?= $hhmd['active']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-danger" style="color:white;">
                                                                In-Active <h5 style="color:white;"><?= $hhmd['inactive']; ?></h5>
                                                            </div>
                                                            </div>


                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="new_jobs_chart" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                                            <div id="new_jobs_chart_value" style="display:none;"><?= round($dfmdP); ?></div>

                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-xl-4 col-md-4">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-info)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> X-Baggage Scanner</p>
                                                            <!-- <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="<?= $xbs['active']; ?>">0</span></h4> -->

                                                            <div class="row mt-2">
                                                            <div class="col-4 bg-body-tertiary">
                                                                BOQ <h5><?= $xbs['boq']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-success">
                                                                Active <h5><?= $xbs['active']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-danger" style="color:white;">
                                                                In-Active <h5 style="color:white;"><?= $xbs['inactive']; ?></h5>
                                                            </div>
                                                            </div>

                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="interview_chart" data-colors='["--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                                            <div id="interview_chart_value" style="display:none;"><?= round($xbsP); ?></div>

                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-xl-4 col-md-4">
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-info)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> DG Set</p>
                                                            <!-- <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="<?= $dg['active']; ?>">0</span></h4> -->

                                                            <div class="row mt-2">
                                                            <div class="col-4 bg-body-tertiary">
                                                                BOQ <h5><?= $dg['boq']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-success">
                                                                Active <h5><?= $dg['active']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-danger" style="color:white;">
                                                                In-Active <h5 style="color:white;"><?= $dg['inactive']; ?></h5>
                                                            </div>
                                                            </div>

                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="hired_chart" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                                            <div id="interview_chart_value" style="display:none;"><?= round($dgP); ?></div>

                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!--end col-->

                                        <div class="col-xl-4 col-md-4">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-info)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Air Conditioner</p>
                                                            <!-- <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="<?= $ac['active']; ?>">0</span></h4> -->

                                                            <div class="row mt-2">
                                                            <div class="col-4 bg-body-tertiary">
                                                                BOQ <h5><?= $ac['boq']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-success">
                                                                Active <h5><?= $ac['active']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-danger" style="color:white;">
                                                                In-Active <h5 style="color:white;"><?= $ac['inactive']; ?></h5>
                                                            </div>
                                                            </div>



                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="rejected_chart" data-colors='["--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                                            <div id="interview_chart_value" style="display:none;"><?= round($acP); ?></div>

                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->

                                        <div class="col-xl-4 col-md-4">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-info)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">UPS</p>
                                                            <!-- <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="<?= $ups['active']; ?>">0</span></h4> -->

                                                            <div class="row mt-2">
                                                            <div class="col-4 bg-body-tertiary">
                                                                BOQ <h5><?= $ups['boq']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-success">
                                                                Active <h5><?= $ups['active']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-danger" style="color:white;">
                                                                In-Active <h5 style="color:white;"><?= $ups['inactive']; ?></h5>
                                                            </div>
                                                            </div>

                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="rejected_chart2" data-colors='["--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                                            <div id="interview_chart_value" style="display:none;"><?= round($upsP); ?></div>

                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->



                                        <div class="col-xl-4 col-md-4">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-info)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Server</p>
                                                            <!-- <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="<?= $server['active']; ?>">0</span></h4> -->

                                                            <div class="row mt-2">
                                                            <div class="col-4 bg-body-tertiary">
                                                                BOQ <h5><?= $server['boq']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-success">
                                                                Active <h5><?= $server['active']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-danger" style="color:white;">
                                                                In-Active <h5 style="color:white;"><?= $server['inactive']; ?></h5>
                                                            </div>
                                                            </div>

                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="rejected_chart3" data-colors='["--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                                            <div id="interview_chart_value" style="display:none;"><?= round($serverP); ?></div>

                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->



                                        
                                        <div class="col-xl-4 col-md-4">
                                            <!-- card -->
                                            <div class="card card-animate overflow-hidden">
                                                <div class="position-absolute start-0" style="z-index: 0;">
                                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                                        <style>
                                                            .s0 {
                                                                opacity: .05;
                                                                fill: var(--vz-info)
                                                            }
                                                        </style>
                                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                                    </svg>
                                                </div>
                                                <div class="card-body" style="z-index:1 ;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Extra</p>
                                                            <!-- <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="<?= $extra['active']; ?>">0</span></h4> -->

                                                            <div class="row mt-2">
                                                            <div class="col-4 bg-body-tertiary">
                                                                BOQ <h5><?= $extra['boq']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-success">
                                                                Active <h5><?= $extra['active']; ?></h5>
                                                            </div>
                                                            <div class="col-4 bg-danger" style="color:white;">
                                                                In-Active <h5 style="color:white;"><?= $extra['inactive']; ?></h5>
                                                            </div>
                                                            </div>

                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div id="rejected_chart3" data-colors='["--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                                            <div id="interview_chart_value" style="display:none;"><?= round($extraP); ?></div>

                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->




                                    </div><!--end row-->
                                </div>
                            </div><!--end col-->



                            
                            
                        </div><!--end row-->
                        
                        <div class="row">
                            <div class="col-xxl-8">
                               

                            <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Locations</h4>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-soft-primary btn-sm">
                                                Export Report
                                            </button>
                                        </div>
                                    </div><!-- end card header -->
                            
                                    <!-- card body -->
                                    <div class="card-body">
                            
                                        <!-- <div id="sales-by-locations" data-colors='["--vz-light", "--vz-success", "--vz-primary"]' style="height: 269px" dir="ltr"></div> -->
                            
                                        <div class="px-2 py-2 mt-4">
                                            <p class="mb-1">Gorakhpur <span class="float-end">75%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                                            </div>
                            
                                            <p class="mt-3 mb-1">Deoria <span class="float-end">47%</span>
                                            </p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="47"></div>
                                            </div>
                            
                                            <p class="mt-3 mb-1">Kushinagar <span class="float-end">85%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 85%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82"></div>
                                            </div>
                                          
                                            <p class="mt-3 mb-1">Maharajganj <span class="float-end">62%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 62%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82"></div>
                                            </div>
                                            <p class="mt-3 mb-1">Basti <span class="float-end">78%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 78%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82"></div>
                                            </div>
                                            <p class="mt-3 mb-1">Sidharthnagar <span class="float-end">72%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 72%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82"></div>
                                            </div>
                                            <p class="mt-3 mb-1">Bahraich <span class="float-end">80%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 80%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82"></div>
                                            </div>
                                            <p class="mt-3 mb-1">Gonda <span class="float-end">92%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 92%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82"></div>
                                            </div>
                                            
                                            

                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>


                            </div><!-- end col -->
                            <div class="col-xxl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <h6 class="card-title mb-0 flex-grow-1">Popular Operators</h6>
                                            <div class="flex-shrink-0">
                                                <a href="apps-job-candidate-lists.html" class="link-primary">View All <i class="ri-arrow-right-line"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-lg-6">
                                            <div class="card-body border-end">
                                                <div class="search-box">
                                                    <input type="text" class="form-control bg-light border-light" autocomplete="off" id="searchList" placeholder="Search candidate...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                                <div data-simplebar style="max-height: 190px" class="px-3 mx-n3">
                                                    <ul class="list-unstyled mb-0 pt-2" id="candidate-list">
                                                        <li>
                                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xs">
                                                                        <img src="assets/images/users/avatar-8.jpg" alt="" class="img-fluid rounded-circle candidate-img">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Raj </span> <span class="text-muted fw-normal">@raj</span></h5>
                                                                    <div class="d-none candidate-position">Operator</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                
                                                        <li>
                                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xs">
                                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="img-fluid rounded-circle candidate-img">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Himanshu</span> <span class="text-muted fw-normal">@himashu</span></h5>
                                                                    <div class="d-none candidate-position">Operator</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xs">
                                                                        <img src="assets/images/users/avatar-9.jpg" alt="" class="img-fluid rounded-circle candidate-img">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Satendra</span> <span class="text-muted fw-normal">@satendra</span></h5>
                                                                    <div class="d-none candidate-position">Operator</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xs">
                                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="img-fluid rounded-circle candidate-img">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Dinesh</span> <span class="text-muted fw-normal">@dinesh</span></h5>
                                                                    <div class="d-none candidate-position">Operator</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xs">
                                                                        <img src="assets/images/users/avatar-9.jpg" alt="" class="img-fluid rounded-circle candidate-img">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Suresh</span> <span class="text-muted fw-normal">@suresh</span></h5>
                                                                    <div class="d-none candidate-position">Operator</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <div class="avatar-xs">
                                                                        <img src="assets/images/users/avatar-8.jpg" alt="" class="img-fluid rounded-circle candidate-img">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Ajay</span> <span class="text-muted fw-normal">@operator</span></h5>
                                                                    <div class="d-none candidate-position">Operator</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card-body text-center">
                                                <div class="avatar-md mb-3 mx-auto">
                                                    <img src="assets/images/users/avatar-8.jpg" alt="" id="candidate-img" class="img-thumbnail rounded-circle shadow-none">
                                                </div>
                                
                                                <h5 id="candidate-name" class="mb-0">Ajay</h5>
                                                <p id="candidate-position" class="text-muted">Operator</p>
                                
                                                <div class="d-flex gap-2 justify-content-center mb-3">
                                                    <button type="button" class="btn avatar-xs p-0 shadow-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Google">
                                                        <span class="avatar-title rounded-circle bg-light text-body">
                                                            <i class="ri-google-line"></i>
                                                        </span>
                                                    </button>
                                
                                                    <button type="button" class="btn avatar-xs p-0 shadow-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                                        <span class="avatar-title rounded-circle bg-light text-body">
                                                            <i class="ri-linkedin-line"></i>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn avatar-xs p-0 shadow-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Dribbble">
                                                        <span class="avatar-title rounded-circle bg-light text-body">
                                                            <i class="ri-dribbble-fill"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                
                                                <div>
                                                    <button type="button" class="btn btn-success custom-toggle w-100" data-bs-toggle="button" aria-pressed="false">
                                                        <span class="icon"><i class="fa fa-eye"></i> View</span>
                                                        <!-- <span class="icon-off"><i class="ri-user-unfollow-line align-bottom me-1"></i> Unfollow</span> -->
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                                <div class="card overflow-hidden shadow-none">
                                    <div class="card-body bg-danger-subtle">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-danger bg-opacity-10 text-danger rounded-circle fs-17">
                                                        <i class="ri-gift-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-16">Invite your friends to SnowFall</h6>
                                                <p class="text-muted mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally.</p>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-end">
                                            <a href="#!" class="btn btn-danger">Invite Friends</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                       
                           
                            <div class="col-xxl-4">
                                <!-- card -->
                                
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div> <!-- end row-->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


               <?php include("../layout/footer.php"); ?>
