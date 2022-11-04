@extends('layouts.app-admin-layouts')

@section('title')
    Users
@endsection


@section('contenu')
    <!--  BEGIN CONTENT AREA  -->

    <div class="row layout-top-spacing">
        <div class="col-lg-8 container container-table">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Edit User</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4">
                        <form method="POST" action="{{route('admin.users.update', $user->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name" aria-describedby="UserName" placeholder="Name">
                              <small id="RoleName" class="form-text text-muted">Enter the user name.</small>
                                @error('name')
                                    <span class="alert-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email" aria-describedby="UserEmail" placeholder="User Email">
                                <small id="email" class="form-text text-muted">Enter the user email.</small>
                                  @error('email')
                                      <span class="alert-danger">{{$message}}</span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                <label for="role">Role</label>
                                <select name="role_id" name="role" class="form-control col-lg-4" id="UserRole">
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}" @selected($user->hasRole($role->name))>{{$role->name}}</option>
                                    @endforeach
                                </select>

                              <small id="UserRole" class="form-text text-muted">Select User Role.</small>
                            </div>
                            <a href="{{route('admin.users.index')}}" class="btn btn-warning">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
@endsection
        

    

 