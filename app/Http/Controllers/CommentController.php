<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use Auth;
class CommentController extends Controller
{
    public function postComment ($product_id,Request $request){
        $idProduct = $id;
        $comment = new Comment;
        $comment->comment_id = $idProduct;
        $comment->id = Auth::user()->id;
        $comment->comment = $request->comment;
        dd($comment);
        //return redirect("SingleProduct/".$id)->with('notification','Comment thành công');
        
    }
}
