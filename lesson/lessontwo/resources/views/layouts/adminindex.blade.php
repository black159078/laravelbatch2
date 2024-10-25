@include('layouts.adminheader')
<!-- start reactjs or vuejs -->
<div id="app">

    <!-- Start Site Setting -->
    <div id="sitesettings" class="sitesettings">
        <div class="sitesettings-item">
            <a href="javascript:void(0);" id="sitetoggle" class="sitetoggle">
                <i class="fas fa-cog ani-rotates"></i>
            </a>
        </div>  
    </div>
    <!-- End Site Setting -->

    <!-- Start Leftsidebar -->
    @include('layouts.adminleftsidebar')
    <!-- Start Leftsidebar -->

    <!-- Page wrapper -->
    <section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-9 pt-md-5 mt-md-3 ms-auto">
                    <!-- start inner content area -->
                        <div class="row">
                            <!-- start breadcrumb -->
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Previous</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Current</a></li>
                                </ol>
                            </nav>
                            <!-- end breadcrumb -->

                            @yield('content')
                        </div>

                    <!-- end inner content area -->

                </div>
            </div>
        </div>


    </section>
    <!-- Page wrapper -->

</div>



<!-- end reactjs or vuejs -->
@include('layouts.adminfooter')