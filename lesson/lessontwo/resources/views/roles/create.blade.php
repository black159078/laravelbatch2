@extends('layouts.adminindex')

@section('content')
    <!-- Start Content Area -->
        <div class="container-fluid">
            <div class="col-md-12">
                <form action="{{route('roles.store')}}" method="POST">

                    {{ csrf_field() }}
                    <!-- @csrf -->


                    <div class="row align-items-end">

                        <div class="col-md-3 form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control form-control-sm rounded-0"/>
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control form-control-sm rounded-0" placeholder="Enter Religion Name" />
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="status_id">Status</label>
                            <select name="status_id" id="status_id" class="form-control form-control-sm rounded-0">
                                @foreach($statuses as $status)
                                    <option value="{{$status['id']}}">{{$status['name']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3 form-group">
                            <button type="reset" class="btn btn-secondary btn-sm rounded-0">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>
                        </div>

                    </div>
                </form>
            </div>

            <hr/>

            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-2 mb-2">
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm rounded-0">Bulk Delete</a>
                    </div>

                    <div class="col-md-10">
                        <form action="" method="">


                            <div class="row justify-content-end">

                                <div class="col-md-2 col-sm-6 mb-2">
                                    <div class="input-group">
                                        <input type="text" name="filtername" id="filtername" class="form-control form-control-sm rounded-0" placeholder="Search..." />
                                        <button type="submit" id="search-btn" class="btn btn-secondary btn-sm"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    <!-- End Content Area -->
@endsection


@section('css')

@endsection


@section('scripts')
    <script type="text/javascript">

        $(document).ready(function(){
            
        });



    </script>
@endsection



        

        

