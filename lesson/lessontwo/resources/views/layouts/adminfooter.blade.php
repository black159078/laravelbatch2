<!-- Start Footer Section -->
<footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-9 ms-auto">
                        <div class="row border-top pt-3 mt-3">
                            <div class="col-md-6 text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item me-2">
                                        <a href="javascript:void(0);">Data Land Technology Co.,Ltd</a>
                                    </li>
                                    <li class="list-inline-item me-2">
                                        <a href="javascript:void(0);">About</a>
                                    </li>
                                    <li class="list-inline-item me-2">
                                        <a href="javascript:void(0);">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 text-center">
                                <p>&copy; <span id="getyear">2000</span> Copyright. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Section -->

        <!-- Start right Navbar -->
        <div class="right-panels">
            <h6>Custom your template</h6>
            <p class="small">Hifi!! here you can change your theme</p>
            <hr />
            <div class="themecolors">
                <a href="javascript:void(0);"><i class="fas fa-square text-primary shadow fa-lg"></i></a>
                <a href="javascript:void(0);"><i class="fas fa-square text-secondary shadow fa-lg"></i></a>
                <a href="javascript:void(0);"><i class="fas fa-square text-info shadow fa-lg"></i></a>
                <a href="javascript:void(0);"><i class="fas fa-square text-success shadow fa-lg"></i></a>
                <a href="javascript:void(0);"><i class="fas fa-square text-warning shadow fa-lg"></i></a>
                <a href="javascript:void(0);"><i class="fas fa-square text-danger shadow fa-lg"></i></a>
                <a href="javascript:void(0);"><i class="fas fa-square text-muted shadow fa-lg"></i></a>
                <a href="javascript:void(0);"><i class="fas fa-square text-white shadow fa-lg"></i></a>
                <a href="javascript:void(0);"><i class="fas fa-square text-dark shadow fa-lg"></i></a>
                <a href="javascript:void(0);"><i class="fas fa-square text-light shadow fa-lg"></i></a>
            </div>
        </div>
        <!-- End right Navbar -->


        <!-- Start Modal Area -->

            <!-- Start  -->
            <!-- End -->

        <!-- End Modal Area -->
        


        
        <!-- bootstrap css1 js1 -->
        <script src="./assets/libs/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <!-- jquery js1 -->
        <script src="./assets/libs/jquery/jquery-3.7.1.min.js" type="text/javascript"></script>
        <!-- jquery ui css1 js1 -->
        <script src="{{asset('assets/libs/jquery-ui-1.13.2/jquery-ui.min.js')}}" type="text/javascript"></script>
        <!-- google chart js1 -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- chartjs js1 -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- Raphael must be included before justgage -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/justgage/1.2.9/justgage.min.js"></script>
        <!-- lightbox css1 js1 -->
        <script src="./assets/libs/lightbox2-2.11.4/dist/js/lightbox.min.js" type="text/javascript"></script>
        <!-- custom js -->
        <script src="{{asset('assets/dist/js/app.js')}}" type="text/javascript"></script>
        <!-- extra js -->
        @yield('scripts')
    </body>
</html>