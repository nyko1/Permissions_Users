<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    //
    public function index()
    {
        // récupération de toutes les données de la table permission trier par l'identifiant sauf celui
        //dont le nom est admin
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
        // récupératoion des données du formulaire avec validation de condition
       $validate = $request -> validate(['name'=>['required', 'min:3']]);
        //    Sauvégarde dans la table permission
       Permission::create($validate);

       return to_route('admin.permissions.index')-> with('message','New Permission Added.');
    }

    //Edit
    public function edit(Permission $permission)
    {
        // Ouvrir la page édit avec les données de la table permission
        return view('admin.permissions.edit', compact('permission'));
    }

    //Update
    public function update(Request $request, Permission $permission)
    {
        // récupératoion des données du formulaire avec validation de condition
        $validate = $request -> validate(['name'=>['required', 'min:3']]);
        // Mise à jour de la table permission
        $permission->update($validate);
 
        return to_route('admin.permissions.index')-> with('message','The Permissin Updated.');
    }

    //Delete
    public function destroy(Permission $permission)
    {
        // Suppression des données dans la table permission
        $permission->delete();

        return to_route('admin.permissions.index')-> with('message','The Permissin '.$permission->name.'  Deleted.');

    }
}
