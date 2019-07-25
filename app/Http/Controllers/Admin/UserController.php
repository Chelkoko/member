<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
class UserController extends Controller
{
    public function index(){
    	$users=User::all();
    	return view('admin.users.index',compact('users'));
    }
    public function edit($id){
    	$user =User::whereId($id)->firstOrFail();
    	$roles = Role::all();
    	$selectedRoles = $user->roles()->pluck('name')->toArray();
    	return view('admin.users.edit',compact('user','roles','selectedRoles'));
    }
    public function update(Request $request,$id){
    	$user = User::whereId($id)->firstOrFail();
    	$user->syncRoles($request->get('role'));
    	return redirect(action('admin\UserController@edit',$id))->with('status','Successfully update');
    }
}
