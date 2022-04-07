<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class AclManagementController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        // return $permissions;
        return view('backEnd.prerequisites.ACL_Management.index',compact('permissions'));
    }
    public function store(Request $request)
    {
        
        Permission::create([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);       
        toast('Permission Added Successfully','success');
        return redirect()->back();
       
    }
    // public function edit($id){
    //     $permissions=Permission::find($id);
    //     return view('backEnd.prerequisites.ACL_Management.edit',compact('permissions'));
    // }
    // public function update(Request $request, $id){
    //     Permission::find($id)->update($request->all());
    //     toast('Permission Update successfully','success');
    //     return redirect()->route('acl-management.index');
    // }
}
