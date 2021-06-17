<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Manufacture;
use App\Protype;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    //
    public function getList(){
        $product = Product::paginate(6);
        return view('admin.product.list',['product'=>$product]);
    }

    public function getItem(){
        $product = Product::all();
        return view('product.pages.shoppage',['product'=>$product]);
    }


    public function getAdd(){
        $product = Product::all();
        $manufacture = Manufacture::all();
        $protype = Protype::all();
        
        return view('admin.product.add',compact('product','manufacture','protype'));
        
    }
    public function postAdd(Request $request){
        $this->validate($request,
        [
            'nameProduct' => 'required|min:3|max:100',
            'amount' => 'required|min:1|max:5',
            'Manufacture' =>'required',
            'Protype' =>'required',
            'price'  => 'required|min:4|max:100',
            'description'  => 'required|min:3|max:1000',
            'image' => 'required|image|mimes:jpg,jpg,png,gif'
        ],
        [   
            'nameProduct.required' => 'Bạn chưa nhập Name Protype',          
            'nameProduct.min' => 'Name Protype có độ dài từ 3 đến 100 ký tự',
            'nameProduct.max' => 'Name Protype có độ dài từ 3 đến 100 ký tự',

            'amount.required' => 'Bạn chưa nhập Amount',          
            'amount.min' => 'Amount có độ dài từ 1 đến 5 ký tự',
            'amount.max' => 'Amount có độ dài từ 1 đến 5 ký tự',

            'Manufacture.required' => 'Bạn chưa chọn Manufacture', 

            'Protype.required' => 'Bạn chưa chọn Protype', 

            'price.required' => 'Bạn chưa nhập Price',          
            'price.min' => 'Price có độ dài từ 4 đến 100 ký tự',
            'price.max' => 'Price có độ dài từ 4 đến 100 ký tự',

            'description.required' => 'Bạn chưa nhập Description',          
            'description.min' => 'Description có độ dài từ 3 đến 1000 ký tự',
            'description.max' => 'Description có độ dài từ 3 đến 1000 ký tự',
         
        ]);

        $product = new Product;
        $product->nameProduct = $request->nameProduct;
        $product->amount = $request->amount;
        $product->idManufacture = $request->Manufacture;
        $product->idProtype = $request->Protype;
        $product->price = $request->price;
        $product->description = $request->description;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $tenImage = Str::random(3). "_".$name;
            $file->move("img",$tenImage);
            $product->image = $tenImage;
        }
        else{ 
            $product->image = "";
        }

        $product->feature = $request->feature;
        $product->save();
        return redirect('admin/product/add')->with('notification','Thêm thành công');
    }

    public function getEdit($product_id){
        $product = Product::find($product_id);
        $manufacture = Manufacture::all();
        $protype = Protype::all();
        return view('admin.product.edit',compact('product','manufacture','protype'));
    }

    public function postEdit(Request $request, $product_id){
        $product = Product::find($product_id);
        //Dieu kien input
        $this->validate($request,
        [
            'nameProduct' => 'required|min:3|max:100',
            'amount' => 'required|min:1|max:5',
            //'Manufacture' =>'required',
            //'Protype' =>'required',
            'price'  => 'required|min:4|max:100',
            'description'  => 'required|min:3|max:1000',
            'image' => 'image|mimes:jpg,jpg,png,gif'
        ],
        [   
            'nameProduct.required' => 'Bạn chưa nhập Name Protype',          
            'nameProduct.min' => 'Name Protype có độ dài từ 3 đến 100 ký tự',
            'nameProduct.max' => 'Name Protype có độ dài từ 3 đến 100 ký tự',

            'amount.required' => 'Bạn chưa nhập Amount',          
            'amount.min' => 'Amount có độ dài từ 1 đến 5 ký tự',
            'amount.max' => 'Amount có độ dài từ 1 đến 5 ký tự',

            //'Manufacture.required' => 'Bạn chưa chọn Manufacture', 

            //'Protype.required' => 'Bạn chưa chọn Protype', 

            'price.required' => 'Bạn chưa nhập Price',          
            'price.min' => 'Price có độ dài từ 4 đến 100 ký tự',
            'price.max' => 'Price có độ dài từ 4 đến 100 ký tự',

            'description.required' => 'Bạn chưa nhập Description',          
            'description.min' => 'Description có độ dài từ 3 đến 1000 ký tự',
            'description.max' => 'Description có độ dài từ 3 đến 1000 ký tự',
         
        ]);
        $product->nameProduct = $request->nameProduct;
        $product->amount = $request->amount;
        $product->idManufacture = $request->Manufacture;
        $product->idProtype = $request->Protype;
        $product->price = $request->price;
        $product->description = $request->description;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $tenImage = Str::random(3). "_".$name;
            $file->move("img",$tenImage);
            if($product->image){
                unlink("img/".$product->image);
            }
            else{
              
            }
            $product->image = $tenImage;
        }
        $product->feature = $request->feature;

        echo($product);

        $product->save();
        return redirect('admin/product/list')->with('notification','Sửa thành công');
        
    }

    public function getDelete($product_id){
        $product = Product::find($product_id);
        $product->delete();
        return redirect('admin/product/list')->with('notifitcation','Xóa thành công');
    }
}