<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Manufacture;
class ManufactureController extends Controller
{
    //
    public function getList(){
        $manufacture = Manufacture::all();
        return view('admin.manufacture.list',['manufacture'=>$manufacture]);
    }

    public function getEdit(){
        return view('admin.manufacture.edit');
    }

    public function getAdd(){
        return view('admin.manufacture.add');
    }
}
