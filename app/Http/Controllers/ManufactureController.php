<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Manufacture;
class ManufactureController extends Controller
{
    //
    public function getList(){
        $manufacture = Manufacture::paginate(5);
        return view('admin.manufacture.list',['manufacture'=>$manufacture]);
    }

    public function getEdit($manu_id){
        $manufacture = Manufacture::find($manu_id);
        return view('admin.manufacture.edit',['manufacture'=>$manufacture]);
    }

    public function postEdit(Request $request,$manu_id){
        $manufacture = Manufacture::find($manu_id);
        $this->validate($request,
        [
            'nameManufacture' => 'required|min:3|max:100'
        ],
        [   
            'namePronameManufacturetype.required' => 'Bạn chưa nhập Name Manufacture',
            'nameManufacture.min' => 'Name Manufacture có độ dài từ 3 đến 100 ký tự',
            'nameManufacture.max' => 'Name Manufacture có độ dài từ 3 đến 100 ký tự',
        ]);
        $manufacture->nameManufacture = $request->nameManufacture;
        $manufacture->save();
        return redirect('admin/manufacture/list')->with('notification','Sửa thành công');
    }


    public function getAdd(){
        return view('admin.manufacture.add');
    }

    public function postAdd(Request $request){
        $this->validate($request,
        [
            'nameManufacture' => 'required|min:3|max:100'

        ],
        [   
            'nameManufacture.required' => 'Bạn chưa nhập Name Manufacture',
            'nameManufacture.min' => 'Name Manufacture có độ dài từ 3 đến 100 ký tự',
            'nameManufacture.max' => 'Name Manufacture có độ dài từ 3 đến 100 ký tự',
        ]);
        
        $manufacture = new Manufacture;
        $manufacture->nameManufacture = $request->nameManufacture;
        $manufacture->save();
        return redirect('admin/manufacture/add')->with('notification','Thêm thành công');
    }
    
    public function getDelete($manu_id){
        $manuid = Manufacture::where('manu_id',$manu_id)->count();
        
        $manufacture = Manufacture::find($manu_id);
        $manufacture->delete();

        return redirect('admin/manufacture/list')->with('notification','Xóa thành công');
    }
}
