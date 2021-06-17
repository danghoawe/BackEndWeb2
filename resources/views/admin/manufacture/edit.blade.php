@extends('admin.layouts.index')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Manufacture</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Edit Manufacture</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Edit Manufacture</h4>
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                                </div>
                            @endif

                            @if(session('notification'))
                                <div class="alert alert-primary">
                                    {{session('notification')}}
                                </div>
                            @endif
                            <form class="parsley-examples" action="admin/manufacture/edit/{{$manufacture->manu_id}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <div class="form-group">
                                    <label for="manu_id">Manufacture ID<span class="text-danger">*</span></label>
                                    <input type="text" name="manu_id" parsley-trigger="change" required="" placeholder="Enter Manufacture ID"
                                        class="form-control" value="{{$manufacture->manu_id}}">
                                </div>

                                <div class="form-group">
                                    <label for="nameManufacture">Name Manufacture<span class="text-danger">*</span></label>
                                    <input type="text" name="nameManufacture" parsley-trigger="change" required=""
                                        placeholder="Enter Name Manufacture" class="form-control" value="{{$manufacture->nameManufacture}}">
                                </div>

                                
                                

                                <div class="form-group text-right mb-0">
                                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect waves-light" 
                                        onclick="window.location='{{ URL::previous() }}'">
                                        Cancel
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->


                <!-- end col -->
            </div>
            <!-- end row -->


            <!-- end row -->

        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->



    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    2015 - 2020 &copy; Velonic theme by <a href="">Coderthemes</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

@endsection