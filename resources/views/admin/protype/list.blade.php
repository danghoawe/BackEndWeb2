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
                        <h4 class="page-title">Basic Tables</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active">Basic Tables</li>
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
                            <h4 class="header-title mb-4">Basic example</h4>
                            <div class="table-responsive">
                                @if(session('notification'))
                                <div class="alert alert-primary">
                                    {{session('notification')}}
                                </div>
                                @endif
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Protype ID</th>
                                            <th>Name Protype</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($protype as $value)
                                        <tr>
                                            <th scope="row">{{$value->protype_id}}</th>
                                            <td>{{$value->nameProtype}}</td>

                                            <td>
                                                <a href="admin/protype/edit/{{$value->protype_id}}"
                                                    class="btn btn-success btn-mini">Edit</a>
                                                <a href="admin/protype/delete/{{$value->protype_id}}"
                                                    class="btn btn-danger btn-mini"
                                                    onclick="return confirm('Bạn muốn xóa item này ?');">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-pagination text-center">
                                    <nav>
                                        <ul class="pagination">
                                            {{$protype->links()}}
                                        </ul>
                                    </nav>
                                </div>
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