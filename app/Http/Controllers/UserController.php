<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequestsStore;
use App\Http\Requests\UserRequestsUpdate;

class UserController extends Controller
{
     /**
    * UserList
    * @author : Khanh - 2019/07/14
    * @param  : null
    * @return : view
    * @access : public
    * @see 
    */
    public function index()
    {
        $users = User::all();
        return view('user.listUser',compact('users'));
    }
     /**
    * Create User
    * @author : Khanh - 2019/07/14
    * @param  : null
    * @return : view
    * @access : public
    * @see 
    */
    public function create()
    {
        return view('user.addUser');
    }
     /**
    * Create User
    * @author : Khanh - 2019/07/14
    * @param  : null
    * @return : route
    * @access : public
    * @see 
    */
    public function store(UserRequestsStore $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);      
        $admin = User::create($data);
        return redirect()->route('user.list')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
    }
     /**
    * Edit User
    * @author : Khanh - 2019/07/14
    * @param  : null
    * @return : view
    * @access : public
    * @see 
    */
    public function edit($id)
    {
        $data = User::find($id);
        return view('user.editUser',compact('data'));
    }
    /**
    * Edit User
    * @author : Khanh - 2019/07/14
    * @param  : null
    * @return : route
    * @access : public
    * @see 
    */
    public function update(UserRequestsUpdate $request,$id)
    {
        $data = User::find($id);
        $update = $request->all();
        $data->update($update);
        return redirect()->route('user.list')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã sửa thành công']);   
    }
    /**
    * Delete User
    * @author : Khanh - 2019/07/14
    * @param  : null
    * @return : route
    * @access : public
    * @see 
    */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('user.list')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa thành công']);
    }
}
