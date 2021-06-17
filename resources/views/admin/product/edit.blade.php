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
                        <h4 class="page-title">Edit Product</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Edit Product</li>
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
                            <h4 class="header-title mb-4">Edit Product</h4>
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
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                            @endif
                            <form class="parsley-examples" action="admin/product/edit/{{$product->product_id}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <div class="form-group">
                                    <label for="nameProduct">Name Product<span class="text-danger">*</span></label>
                                    <input type="text" name="nameProduct" parsley-trigger="change" required=""
                                        placeholder="Enter Name Product" class="form-control" value="{{$product->nameProduct}}">
                                </div>

                                <div class="form-group">
                                    <label for="protype_id">Amount<span class="text-danger">*</span></label>
                                    <input type="text" name="amount" parsley-trigger="change" required=""
                                        placeholder="Enter Amount" class="form-control" value="{{$product->amount}}">
                                </div>
                                <div class="form-group">

                                    <label class="control-label">Choose a manufacture:</label>
                                    <select class="form-control" name="Manufacture" id="cate">
                                        @foreach($manufacture as $value)
                                        <option @if($value->manu_id == $product->idManufacture)
                                        {{"selected"}}
                                        @endif
                                         value="{{$value->manu_id}}">{{$value->nameManufacture}}</option>
                                        @endforeach
                                    </select> 

                                </div>
                                <div class="form-group">
                                    <label class="control-label">Choose a protype:</label>
                                    <select class="form-control" name="Protype" id="subcate">
                                        @foreach($protype as $value)
                                        <option 
                                        @if($value->protype_id == $product->idProtype)
                                        {{"selected"}}
                                        @endif
                                        value="{{$value->protype_id}}">{{$value->nameProtype}}</option>
                                        @endforeach
                                    </select> 

                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose an image :</label>
                                    <img width="200" src="img/{{$product->image}}"/>
                                    <input type="file" name="image" class="form-control" >

                                </div>
                                <div class="form-group">
                                    <label for="price">Price<span class="text-danger">*</span></label>
                                    <input type="text" name="price" parsley-trigger="change" required=""
                                        placeholder="Enter Price" class="form-control" value="{{$product->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description<span class="text-danger">*</span></label>
                                    <textarea type="text" name="description" parsley-trigger="change" required=""
                                        placeholder="Enter Description" rows="4" class="form-control">{{$product->description}}</textarea>
                                </div>
                                <div class="control-group">
                                    <label for="feature">Feature<span class="text-danger">*</span></label>
                                    <input type="number" name="feature" min="0" max="1" parsley-trigger="change"
                                        required="" placeholder="Enter Feature" class="form-control" value="{{$product->feature}}">
                                </div>

                                <div class="form-group text-right mb-0">
                                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect waves-light" onclick="window.location='{{ URL::previous() }}'">
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