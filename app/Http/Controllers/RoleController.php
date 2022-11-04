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
        // Récupère les données de la table role role trier en ordre croissant des identifiants
        $roles = Role::whereNotIn('name',['admin'])->orderBy('id')->get();

        // Ouvrir la page index avec les données roles
        return view('admin.roles.index', compact('roles'));
    }

    
    public function create()
    {
        // Ouvrir la page creation
        return view('admin.roles.create');
    }

        //Sauvegarder
    public function store(Request $request)
    {
        // récupératoion des données du formulaire avec validation de condition
       $validate = $request -> validate(['name'=>['required', 'min:3']]);
    //    Sauvégarde dans la table role
       Role::create($validate);

       return to_route('admin.roles.index')-> with('message','New Role Added.');
    }

    public function edit(Role $role)
    {
        // Récupère toutes les données de la table permission
        $permissions = Permission::all();

        // Ouvrir la page édit avec les données des tables role et permission
        return view('admin.roles.edit', compact('role','permissions'));
    }

    //Mise à jour
    public function update(Request $request, Role $role)
    {
        // récupératoion des données du formulaire avec validation de condition
       $validate = $request -> validate(['name'=>['required', 'min:3']]);
    // Mise à jour de la table role
       $role->update($validate);

       return to_route('admin.roles.index')-> with('message','The Role Updated.');
    }

    //Suppression
    public function destroy(Role $role)
    {
         // Suppression des données dans la table role
        $role->delete();

        return to_route('admin.roles.index')-> with('message','The Role '.$role->name.' Deleted.');

    }

    public function assignPermission(Request $request, Role $role)
    {
        // Assigner des permissions dans la table permission_role
        $role ->permissions()->sync($request->permissions);
        return back()-> with('message','Permission Added.');;
    }
}
