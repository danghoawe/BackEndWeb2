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
                        <h4 class="page-title">List Product</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Product</a></li>
                                <li class="breadcrumb-item active">List Product</li>
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
                            <h4 class="header-title mb-4">Product</h4>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name Product</th>
                                            <th>Amount</th>
                                            <th>Manufacture</th>
                                            <th>Protype</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Feature</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product as $value)
                                        <tr>
                                            <th >{{$value->product_id}}</th>
                                            <td>{{$value->nameProduct}}</td>
                                            <td>{{$value->amount}}</td>
                                            <td>{{$value->idManufacture}}</td>
                                            <td>{{$value->idProtype}}</td>
                                            <td>{{number_format( $value->price)}}</td>
                                            <td>{{substr($value->description,0,200)}}...</td>
                                            <td><img width="200" src="img/{{$value->image}}"/> </td>
                                            <td>{{$value->feature}}</td>
                                            <td>
                                                <a href="#"class="btn btn-success btn-mini">Edit</a>
                                                <a href="#"class="btn btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <!--- end row -->



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