<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    //
    public function index()
    {
        $permissions = Permission::whereNotIn('name',['admin'])->orderBy('id')->get();

        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    //Sauvegarder
    public function store(Request $request)
    {
       $validate = $request -> validate(['name'=>['required', 'min:3']]);
       Permission::create($validate);

       return to_route('admin.permissions.index')-> with('message','New Permission Added.');
    }

    //Edit
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    //Update
    public function update(Request $request, Permission $permission)
    {
        $validate = $request -> validate(['name'=>['required', 'min:3']]);
        $permission->update($validate);
 
        return to_route('admin.permissions.index')-> with('message','The Permissin Updated.');
    }

    //Delete
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return to_route('admin.permissions.index')-> with('message','The Permissin '.$permission->name.'  Deleted.');

    }
}
