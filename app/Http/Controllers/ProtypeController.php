<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Protype;
class ProtypeController extends Controller
{
    //
    public function getList(){
        $protype = Protype::all();
        return view('admin.protype.list',['protype'=>$protype]);
    }

    public function getEdit($protype_id){
        $protype = Protype::find($protype_id);
        return view('admin.protype.edit',['protype'=>$protype]);
    }

    public function postEdit(Request $request,$protype_id){
        $protype = Protype::find($protype_id);
        $this->validate($request,
        [
            'nameProtype' => 'required|min:3|max:100'

        ],
        [   
            'nameProtype.required' => 'Bạn chưa nhập Name Protype',
            'nameProtype.min' => 'Name Protype có độ dài từ 3 đến 100 ký tự',
            'nameProtype.max' => 'Name Protype có độ dài từ 3 đến 100 ký tự',
        ]);
        $protype->nameProtype = $request->nameProtype;
        $protype->save();
        return redirect('admin/protype/edit/'.$protype_id)->with('notification','Sửa thành công');
    }

    public function getAdd(){
        return view('admin.protype.add');
    }

    public function postAdd(Request $request){
        $this->validate($request,
        [
            'nameProtype' => 'required|min:3|max:100'

        ],
        [   
            'nameProtype.required' => 'Bạn chưa nhập Name Protype',
            
            'nameProtype.min' => 'Name Protype có độ dài từ 3 đến 100 ký tự',
            'nameProtype.max' => 'Name Protype có độ dài từ 3 đến 100 ký tự',
        ]);
        
        $protype = new Protype;
        $protype->nameProtype = $request->nameProtype;
        $protype->save();
        return redirect('admin/protype/add')->with('notification','Thêm thành công');
    }
    
    public function getDelete($protype_id){
        $protype = Protype::find($protype_id);
        $protype->delete();

        return redirect('admin/protype/list')->with('notification','Xóa thành công');
    }
}
