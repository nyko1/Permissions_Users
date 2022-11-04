<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from designreset.com/cork/ltr/demo14/table_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 10:36:30 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>Posts</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.ico') }}"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
        <link href="{{ asset('backend/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
        <link href="{{ asset ('backend/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{ asset ('backend/assets/css/forms/theme-checkbox-radio.css') }}">
        <link href="{{ asset('backend/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL CUSTOM STYLES -->
    </head>
    

<body class="sidebar-noneoverflow">
        
<!--  BEGIN NAVBAR  -->
 <div class="header-container">
    <header class="header navbar navbar-expand-sm">

        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

        <div class="nav-logo align-self-center">
            <a class="navbar-brand" href="{{ url('/') }}"><img alt="logo" src="{{asset('backend/assets/img/logo.svg')}}"> <span class="navbar-brand-name">Nykotech</span></a>
        </div>

        {{-- <ul class="navbar-item flex-row mr-auto">
            <li class="nav-item align-self-center search-animated">
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                    </div>
                </form>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </li>
        </ul> --}}

    </header>
</div>
<!--  END NAVBAR  -->
@if (Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
@endif
<div class="row layout-top-spacing">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Posts</h4>
                    </div>
                </div>
            </div>
        <div id="content" class="widget-content widget-content-area">
            <div class="layout-px-spacing">
                    <div class="table-responsive">
                        <table class="table table-bordered  mb-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    {{-- <th class="text-center">Status</th> --}}
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->body }}</td>
                                        {{-- <td class="text-center"><span class="badge badge-success">Approved</span></td> --}}
                                        <td class="text-center">
                                            
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span> ... </span>
                                                </a>
                        
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    @can('create', App\Models\Post::class)
                                                        <a class="dropdown-item" href="{{ route('posts.create') }}">Add</a>
                                                    @endcan
                                                    @can('update', App\Models\Post::class)
                                                        <a class="dropdown-item" href="{{ route('posts.edit',$post ->id) }}">Edit</a>
                                                    @endcan
                                                    @can('delete', App\Models\Post::class)
                                                        <a class="dropdown-item" href="{{ route('posts.destroy',$post ->id) }}">Delete</a>
                                                    @endcan
                                                </div>
                                            </div>
                        
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    

                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2022 <a target="_blank" href="https://designreset.com/">Nykotech</a>, All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{ asset('backend/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('backend/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('backend/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        
        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="{{ asset('backend/plugins/highlight/highlight.pack.js') }}"></script>
        <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
        <script src="{{ asset('backend/assets/js/scrollspyNav.js') }}"></script>
        <script>
            checkall('todoAll', 'todochkbox');
            $('[data-toggle="tooltip"]').tooltip()
        </script>
        <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    </body>

<!-- Mirrored from designreset.com/cork/ltr/demo14/table_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 10:36:32 GMT -->
</html>  




