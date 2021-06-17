<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Protype;
use App\Comment;
use Auth;
use DB;
class ControllerHello extends Controller
{
    
    public function show($id='home')
    {       $protype = Protype::all();
            $phone = Product::where([['idProtype', '=', 1],['feature', '=', 1]])->get();
            $headphone = Product::where([['idProtype', '=', 2],['feature', '=', 1]])->get();
            $speaker = Product::where([['idProtype', '=', 5],['feature', '=', 1]])->get();
            $laptop = Product::where([['idProtype', '=', 6],['feature', '=', 1]])->get();
            $product = Product::paginate(8);
            $showPhone = Product::where([['idProtype','=',1]])->paginate(8);
            $showHeadPhone = Product::where([['idProtype','=',2]])->paginate(8);
            $showBatteryBackup = Product::where([['idProtype','=',3]])->paginate(8);
            $showBatteryPhone = Product::where([['idProtype','=',4]])->paginate(8);
            $showSpeaker = Product::where([['idProtype','=',5]])->paginate(8);
            $showLapTop = Product::where([['idProtype','=',6]])->paginate(8);
            return view('product.pages.'.$id,compact('protype','product','phone','headphone','speaker','laptop','showPhone','showHeadPhone','showBatteryBackup','showBatteryPhone',
            'showSpeaker','showLapTop'));
    }
    
    public function SingleProduct($id=5)
    {
        $products = DB::table('products')->where('product_id',$id)->first();
        $protype = Protype::all();
        return view('product.pages.SingleProduct',['products'=> $products,'protype'=>$protype]);
    }

    public function postComment ($product_id,Request $request){
        $idProduct = $product_id;
        $product = Product::find($product_id);
        $comment = new Comment;
        $comment->product_id = $idProduct;
        $comment->id = Auth::user()->id;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect("SingleProduct/".$product_id)->with('notification','Comment thành công');
        
    }



}
