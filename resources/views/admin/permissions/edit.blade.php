@extends('layouts.app-admin-layouts')

@section('title')
    Permission
@endsection


@section('contenu')
    <!--  BEGIN CONTENT AREA  -->

    <div class="row layout-top-spacing">
        <div class="container container-table col-lg-8">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-8 col-md-8 col-sm-12 col-8">
                            <h4>Edit Permissions</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4">
                        <form method="POST" action="{{route('admin.permissions.update', $permission->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" value="{{$permission->name}}" class="form-control" id="name" aria-describedby="PermissionName" placeholder="Name">
                              <small id="PermissionName" class="form-text text-muted">Enter the permission name.</small>
                            @error('name')
                                <span class="alert-danger">{{$message}}</span>
                             @enderror
                            </div>
                            <a href="{{route('admin.permissions.index')}}" class="btn btn-warning">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
        

    

 