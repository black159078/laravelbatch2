                      <!-- Start Navbar -->
        <div class="wrappers">
            <nav class="navbar navbar-expand-md navbar-light">
                <button type="button" class="navbar-toggler ms-auto mb-2" data-bs-toggle="collapse" data-bs-target="#nav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="nav">
                    <div class="container-fluid">

                        <div class="row">

                            <!-- start left side bar -->
                            <div class="col-lg-2 col-md-3 fixed-top vh-100 overflow-auto leftsidebars">
                                <ul class="navbar-nav flex-column mt-4">
                                        <li class="nav-item nav-categories">Main</li>

                                    <li class="nav-item nav-categories"><a href="javascript:void(0);" class="nav-link p-3 mb-2 text-white sidebarlinks currents"><i class="fas fa-file me-3"></i> Dashboard </a></li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#download"><i class="fas fa-download me-3"></i> Download<i class="fas fa-angle-left mores"></i></a>

                                        <ul id="download" class="collapse">
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Education</i></a></li>
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Software</i></a></li>
                                        </ul>

                                    </li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#form"><i class="fas fa-file me-3"></i> Form<i class="fas fa-angle-left mores"></i></a>

                                        <ul id="form" class="collapse">
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Att Form</i></a></li>
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Leave Form</i></a></li>
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Enrolls</i></a></li>
                                        </ul>

                                    </li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 text-white sidebarlinks"><i class="fas fa-file me-3"></i> Widgets </a></li>

                                    <li class="nav-item nav-categories">UI Features</li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#articles"><i class="fas fa-file me-3"></i> Articles<i class="fas fa-angle-left mores"></i></a>

                                        <ul id="articles" class="collapse">
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Post</i></a></li>
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Announcement</i></a></li>
                                        </ul>

                                    </li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#students"><i class="fas fa-file me-3"></i> Students<i class="fas fa-angle-left mores"></i></a>

                                        <ul id="students" class="collapse">
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Att Generators</i></a></li>
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">All Students</i></a></li>
                                        </ul>

                                    </li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 text-white sidebarlinks"><i class="fas fa-file me-3"></i> Popups</a></li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#apps"><i class="fas fa-file me-3"></i> Apps<i class="fas fa-angle-left mores"></i></a>

                                        <ul id="apps" class="collapse">
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Contacts</i></a></li>
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Todo</i></a></li>
                                        </ul>

                                    </li>

                                    <li class="nav-item nav-categories">Data Representation</li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#analysis"><i class="fas fa-file me-3"></i> Fixed Analysis<i class="fas fa-angle-left mores"></i></a>

                                        <ul id="analysis" class="collapse">
                                            <li><a href="{{route('days.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Days</i></a></li>
                                            <li><a href="{{route('categories.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Categories</i></a></li>
                                            <li><a href="{{route('genders.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Genders</i></a></li>
                                            <li><a href="{{route('paymenttypes.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Payment Types</i></a></li>
                                            <li><a href="{{route('stages.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Stages</i></a></li>
                                            <li><a href="{{route('statuses.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Statuses</i></a></li>
                                            <li><a href="{{route('tags.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Tags</i></a></li>
                                            <li><a href="{{route('types.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Types</i></a></li>
                                        </ul>

                                    </li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#addon"><i class="fas fa-file me-3"></i> Addon<i class="fas fa-angle-left mores"></i></a>

                                        <ul id="addon" class="collapse">
                                            <li><a href="{{route('religions.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Religions</i></a></li>
                                            <li><a href="{{route('roles.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Roles</i></a></li>
                                            <li><a href="{{route('warehouses.index')}}" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Warehouses</i></a></li>
                                        </ul>

                                    </li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 text-white sidebarlinks" data-bs-toggle="collapse" data-bs-target="#maps"><i class="fas fa-file me-3"></i> Maps<i class="fas fa-angle-left mores"></i></a>

                                        <ul id="maps" class="collapse">
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Google Map</i></a></li>
                                            <li><a href="javascript:void(0);" class="nav-link text-white sidebarlinks"><i class="fas fa-long-arrow-alt-right me-4">Vector Map</i></a></li>
                                        </ul>

                                    </li>

                                </ul>
                            </div> 
                            <!-- end left side bar -->

                            <!-- start top navbar -->
                            @include('layouts.adminnavbar')
                            <!-- end top navbar -->

                        </div>

                    </div>
                </div>
            </nav>
        </div>
        <!-- End Navbar -->                                        