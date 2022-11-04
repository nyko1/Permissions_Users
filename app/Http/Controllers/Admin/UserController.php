<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //Page d'accueil index
    public function index(
    )
    {
        //récupère tous les utilisateurs sauf lui qui connecté comme admin
        $users = User::all()->except(Auth::id());

        return view('admin.users.index', compact('users'));
    }
    
    //Modifier un utilisateur
    public function edit(User $user)
    {
        //récupère tous les roles
        $roles = Role::all();
        return view('admin.users.edit', compact('user','roles'));//Ouvrir la page edit avec les données user et roles
    }

    //Mise à jour
    public function update(UserUpdateRequest $request, User $user) //Utilisation de la nouvelle requette UserUpdateRequest
    {
    
        // Mise à jour des données dans la base de données
        $user ->update($request -> validated());
        
        return to_route('admin.users.index')-> with('message','User update.');
    }

    //Suppression
    public function destroy(User $user)
    {
        // Suppression des données dans la table user
        $user->delete();

        return to_route('admin.users.index')-> with('message','The User '.$user->name.' Deleted.');

    }
}
