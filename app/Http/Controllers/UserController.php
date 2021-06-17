<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller
{
    //
    public function getList(){
        $user = User::paginate(5);  
        return view('admin.user.list',['user'=>$user]);
    }

    public function getAdd(){
        return view('admin.user.add');
    }

    public function postAdd(Request $request){
        $this->validate($request,
        [
            'userName' => 'min:3',
            'password' => 'min:6|max:32',
            'firstName' => 'min:2',
            'lastName' => 'min:2',
            'firstName' => 'min:2',
            'email' => 'email',
            'numberPhone' => 'min:10|max:13',
            'CMND' => 'min:9|max:12'
        ],
        [
            'userName.min' => 'UserName tối thiểu 3 ký tự trở lên',
             
            'password.min' => 'Password phải có ít nhất 6 ký tự và nhiều nhất là 32 ký tự',
            'password.max' => 'Password phải có ít nhất 6 ký tự và nhiều nhất là 32 ký tự',

            'firstName.min' => 'FirstName tối thiểu 2 ký tự trở lên',

            'lastName.min' => 'LastName tối thiểu 2 ký tự trở lên',

            'email.email'  => 'Bạn chưa định dạng đúng email',

            'numberPhone.min' => 'NumberPhone phải có ít nhất 10 số và nhiều nhất là 13 số',
            'numberPhone.max' => 'NumberPhone phải có ít nhất 10 số và nhiều nhất là 13 số',

            'CMND.min' => 'CMND phải có ít nhất 9 số và nhiều nhất là 12 số',
            'CMND.max' => 'CMND phải có ít nhất 9 số và nhiều nhất là 12 số',

        ]);
        
        $user = new User;
        $user->username = $request->userName;
        $user->password = bcrypt($request->password);
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->birthDay = $request->birthDay;
        $user->address = $request->address;
        $user->CMND = $request->CMND;
        $user->numberPhone = $request->numberPhone;
        $user->save();

        return redirect('admin/user/add')->with('notification','Thêm thành công');
    }

    public function getEdit($id){
        $user = User::find($id);
        return view('admin.user.edit',['user'=>$user]);
    }

    public function postEdit(Request $request,$id){
        $user = User::find($id);
        $this->validate($request,
        [
            'userName' => 'min:3',
            'password' => 'min:6|max:100',
            'firstName' => 'min:2',
            'lastName' => 'min:2',
            'firstName' => 'min:2',
            'email' => 'email',
            'numberPhone' => 'min:10|max:13',
            'CMND' => 'min:9|max:12'
        ],
        [
            'userName.min' => 'UserName tối thiểu 3 ký tự trở lên',
             
            'password.min' => 'Password phải có ít nhất 6 ký tự và nhiều nhất là 100 ký tự',
            'password.max' => 'Password phải có ít nhất 6 ký tự và nhiều nhất là 100 ký tự',

            'firstName.min' => 'FirstName tối thiểu 2 ký tự trở lên',

            'lastName.min' => 'LastName tối thiểu 2 ký tự trở lên',

            'email.email'  => 'Bạn chưa định dạng đúng email',

            'numberPhone.min' => 'NumberPhone phải có ít nhất 10 số và nhiều nhất là 13 số',
            'numberPhone.max' => 'NumberPhone phải có ít nhất 10 số và nhiều nhất là 13 số',

            'CMND.min' => 'CMND phải có ít nhất 9 số và nhiều nhất là 12 số',
            'CMND.max' => 'CMND phải có ít nhất 9 số và nhiều nhất là 12 số',

        ]);
        
        $user->username = $request->userName;
        $user->password = bcrypt($request->password);
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->birthDay = $request->birthDay;
        $user->address = $request->address;
        $user->CMND = $request->CMND;
        $user->numberPhone = $request->numberPhone;
        $user->save();

        return redirect('admin/user/list')->with('notification','Sửa thành công');
    }

    public function getDelete($id){
        $user = User::find($id);
        $user->delete();

        return redirect('admin/user/list')->with('notification','Xóa thành công');
    }

    public function getLoginAdmin(){
        return view('admin.login');
    }

    public function postLoginAdmin(Request $request){
        $this->validate($request,
        [
            'username' => 'required',
            'password' => 'min:6|max:32',
        ],
        [
            'username.required' => 'Bạn chưa nhập User Name',
            'password.min' => 'Password phải có ít nhất 6 ký tự và nhiều nhất là 32 ký tự',
            'password.max' => 'Password phải có ít nhất 6 ký tự và nhiều nhất là 32 ký tự',
        ]);
        $login = ['username' => $request->username, 'password' => $request->password];
        if(Auth::attempt($login)){
            return redirect('admin/product/list');
        }
        else{
            return redirect('admin/login')->with('notification','Tài khoản hoặc mật khẩu sai');
        }
    }
    
    public function getLogoutAdmin(){
        Auth::logout();
        return redirect('admin/login')->with('notification','Đăng xuất thành công');
    }
}