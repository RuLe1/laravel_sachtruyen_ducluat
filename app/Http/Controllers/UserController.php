<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Role::create(['name' => 'admin2']);
        // Permission::create(['name' => 'publish genre']);
        // $role = Role::find(4);
        // $permission = Permission::find(14);
        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);
        // $role->revokePermissionTo($permission);
        // auth()->user()->assignRole('admin');
        // $user = User::find(2);
        // $user->syncPermissions('add articles');
        // $user = User::find(1);
        // $user->assignRole('writer');
        // if($user->hasExactRoles(['admin','publisher'])){
        //     echo 'có';
        // }else{
        //     echo'ko';
        // }
        // echo auth()->user()->id;
        $user = User::with('roles','permissions')->get();
        return view('admincp.user.index',compact('user'));
    }
    public function impersonate($id,User $user){
        $user = User::find($id);
        if($user){
            Session::put('impersonate',$user->id);
        }
        return redirect('/home');
    }
    public function phanvaitro($id){
        $user = User::find($id);
        
        $role = Role::orderBy('id','DESC')->get();
        $all_column_roles = $user->roles->first();

        $permission = Permission::orderBy('id','DESC')->get();

        return view('admincp.user.phanvaitro',compact('user','role','all_column_roles','permission'));
    }
    public function phanquyen($id){
        $user = User::find($id);
        
        $name_roles = $user->roles->first()->name;

        $permission = Permission::orderBy('id','DESC')->get();
        //lấy quyền đã cấp rồi
        $get_permission_via_role = $user->getPermissionsViaRoles();
        return view('admincp.user.phanquyen',compact('user','name_roles','permission','get_permission_via_role'));
    }
    public function insert_roles(Request $request,$id){
        $data = $request->all();
        $user = User::find($id);
        $user->syncRoles($data['role']);

        $role_id = $user->roles->first()->id;

        return redirect()->back()->with('status','Thêm vai trò cho user thành công');
    }
    public function insert_permission(Request $request,$id){
        $data = $request->all();
        $user = User::find($id);

        $role_id = $user->roles->first()->id;
        //cap quyen
        $role = Role::find($role_id);
        $role -> syncPermissions($data['permission']);
       
        return redirect()->back()->with('status','Thêm quyền cho user thành công');
    }
    public function insert_bot_permission(Request $request){
        $data = $request->all();
        $permission = new Permission();
        $permission->name = $data['permission'];
        $permission->save();
        return redirect()->back()->with('status','Thêm quyền thành công');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);

        $user->save();
        return redirect()->back()->with('status','Thêm user thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
