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
                        <h4 class="page-title">Form Validation</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Form Validation</li>
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
                            <h4 class="header-title mb-4">Add User</h4>
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                                </div>
                            @endif

                            @if(session('notification'))
                                <div class="alert alert-primary" >
                                    {{session('notification')}}
                                </div>
                            @endif
                            <form class="parsley-examples" action="admin/user/add" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />

                                <div class="form-group">
                                    <label for="userName">User Name<span class="text-danger">*</span></label>
                                    <input type="text" name="userName" parsley-trigger="change" required=""
                                        placeholder="Enter User Name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password<span class="text-danger">*</span></label>
                                    <input name="password" type="password" placeholder="Password" required=""
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="firstName">First Name<span class="text-danger">*</span></label>
                                    <input type="text" name="firstName" parsley-trigger="change" required=""
                                        placeholder="Enter First Name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="lastName">Last Name<span class="text-danger">*</span></label>
                                    <input type="text" name="lastName" parsley-trigger="change" required=""
                                        placeholder="Enter Last Name" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                    <input type="email" name="email" parsley-trigger="change" required=""
                                        placeholder="Enter email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="role">Role<span class="text-danger">*</span></label><br>
                                    <label class="radio-inline">
                                        <input name="role" value="0" checked="" type="radio"> User
                                    </label>
                                    <br>
                                    <label class="radio-inline">
                                        <input  name="role" value="1" type="radio"> Admin
                                    </label>                                   
                                </div>

                                <div class="form-group">
                                    <label for="birthDay">BirthDay<span class="text-danger">*</span></label>
                                    <input type="date" name="birthDay" parsley-trigger="change" required=""
                                        placeholder="Enter BirthDay" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address<span class="text-danger">*</span></label>
                                    <input type="text" name="address" parsley-trigger="change" required=""
                                        placeholder="Enter Address" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="CMND">CMND<span class="text-danger">*</span></label>
                                    <input type="text" name="CMND" parsley-trigger="change" required=""
                                        placeholder="Enter CMND" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="numberPhone">Number Phone<span class="text-danger">*</span></label>
                                    <input type="text" name="numberPhone" parsley-trigger="change" required=""
                                        placeholder="Enter Number Phone" class="form-control">
                                </div>



                                <div class="form-group text-right mb-0">
                                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect waves-light">
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