@extends('layouts.app-admin-layouts')

@section('title')
    Users
@endsection

{{$count =1}}
@section('contenu')
    <!--  BEGIN CONTENT AREA  -->

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Users list</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4">
                        <table id="style-3" class="table style-3  table-hover">
                            <thead>
                                <tr>
                                    <th class="checkbox-column text-center"> Record Id </th>
                                    <th class="">Name</th>
                                    <th class="checkbox-column text-center">Role</th>
                                    <th class="checkbox-column text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($users as $user)
                                    
                                    <tr>
                                        <td class="text-center"> {{$count}} </td>
                                        <td>{{$user -> name}}</td>
                                        <td class="checkbox-column text-center">
                                            <span class="shadow-none badge badge-primary">{{$user -> role -> name}}</span>
                                        </td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="{{route('admin.users.edit', $user ->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                <li><div class="">
                                                    <form method="POST" 
                                                        action="{{route('admin.users.destroy',$user->id)}}"
                                                        onclick="return confirm('Are you sure ?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href=""
                                                                onclick="event.preventDefault();
                                                                this.closest('form').submit();" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                            </a>
                                                    </form>
                                                </div></li>
                                            </ul>
                                        </td>
                                    </tr> 
                                    {{$count+=1}}
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
        

    

 