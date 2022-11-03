@extends('layouts.app-admin-layouts')

@section('title')
    Roles
@endsection


@section('contenu')
    <!--  BEGIN CONTENT AREA  -->

    <div class="row layout-top-spacing">
        <div class="col-lg-8 container container-table">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Create Roles</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4">
                        <form method="POST" action="{{route('admin.roles.store')}}">
                            @csrf
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control" id="name" aria-describedby="RoleName" placeholder="Name">
                              <small id="RoleName" class="form-text text-muted">Enter the role name.</small>
                            @error('name')
                                <span class="alert-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <a href="{{route('admin.roles.index')}}" class="btn btn-warning">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
        

    

 