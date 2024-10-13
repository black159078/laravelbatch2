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

        <!-- start breadcrumb -->
        <!-- end breadcrumb -->

        @yield('content')


    </section>
    <!-- Page wrapper -->

</div>



<!-- end reactjs or vuejs -->
@include('layouts.adminfooter')