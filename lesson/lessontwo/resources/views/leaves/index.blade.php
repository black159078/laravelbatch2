@extends('layouts.adminindex')

@section('content')
    <!-- Start Content Area -->
        <div class="container-fluid">
            <div class="col-md-12">
                <a href="{{route('leaves.create')}}" class="btn btn-primary btn-sm rounded-0">Create</a>
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

            <div class="col-md-12">
                <table id="mytable" class="table table-sm table-hover border">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" name="selectalls" id="selectalls" class="form-check-input selectalls" />
                            </th>
                            <th>No</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>By</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leaves as $idx=>$leave)
                            <tr>
                                <td>
                                    <input type="checkbox" name="singlechecks" id="singlechecks" class="form-check-input singlechecks" />
                                </td>
                                <td>{{++$idx}}</td>
                                <td><a href="{{route('leaves.show',$leave->id)}}">{{$leave->name}}</a></td>
                                <td>{{$leave->stage->name}}</td>
                                <td>{{$leave->user['name']}}</td>
                                <td>{{$leave->created_at->format('d M Y')}}</td>
                                <td>{{$leave->updated_at->format('d M Y')}}</td>
                                <td>
                                    <a href="{{route('leaves.edit',$leave->id)}}" class="text-info"><i class="fas fa-pen"></i></a>
                                    <a href="javascript:void(0);" class="text-danger ms-2 delete-btn" data-idx="{{$idx}}"><i class="fas fa-trash-alt"></i></a>
                                    <form id="formdelete-{{$idx}}" action="{{route('leaves.destroy',$leave->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    <!-- End Content Area -->
@endsection


@section('css')

@endsection


@section('scripts')
    <script type="text/javascript">

        $(document).ready(function(){
            $('.delete-btn').click(function(){
                getidx = $(this).data('idx');
                // console.log(getidx);

                if(confirm(`Are you sure! you want to delete ${getidx}`)){
                    $('#formdelete-'+getidx).submit();
                    return true;
                }else{
                    return false;
                }

            });

            $('#selectalls').click(function(){
                $('.singlechecks').prop('checked',$(this).prop('checked'));
            });
        });

        



    </script>
@endsection



        

        

