<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;


class RoleController extends Controller
{
    //
    public function index()
    {
        $roles = Role::whereNotIn('name',['admin'])->orderBy('id')->get();

        return view('admin.roles.index', compact('roles'));
    }

    
    public function create()
    {
        return view('admin.roles.create');
    }

        //Sauvegarder
    public function store(Request $request)
    {
       $validate = $request -> validate(['name'=>['required', 'min:3']]);
       Role::create($validate);

       return to_route('admin.roles.index')-> with('message','New Role Added.');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();

        return view('admin.roles.edit', compact('role','permissions'));
    }

    //Mise ç jour
    public function update(Request $request, Role $role)
    {
       $validate = $request -> validate(['name'=>['required', 'min:3']]);
       $role->update($validate);

       return to_route('admin.roles.index')-> with('message','The Role Updated.');
    }

    //Suppression
    public function destroy(Role $role)
    {
        $role->delete();

        return to_route('admin.roles.index')-> with('message','The Role '.$role->name.' Deleted.');

    }

    public function assignPermission(Request $request, Role $role)
    {
        $role ->permissions()->sync($request->permissions);
        return back()-> with('message','Permission Added.');;
    }
}
