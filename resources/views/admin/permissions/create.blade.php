@extends('layouts.app-admin-layouts')

@section('title')
    Permission
@endsection


@section('contenu')
    <!--  BEGIN CONTENT AREA  -->

    <div class="row layout-top-spacing">
        <div class="col-lg-8 container container-table">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-8 col-md-8 col-sm-12 col-8">
                            <h4>Create Permissions</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4">
                        <form method="POST" action="{{route('admin.permissions.store')}}">
                            @csrf
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control" id="name" aria-describedby="PermissionName" placeholder="Name">
                              <small id="PermissionName" class="form-text text-muted">Enter the permission name.</small>
                            @error('name')
                                <span class="alert-danger">{{$message}}</span>
                             @enderror
                            </div>
                            <a href="{{route('admin.permissions.index')}}" class="btn btn-warning">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
        

    

 