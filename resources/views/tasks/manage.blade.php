@extends('layouts.app')

@section('content')
    <!-- [ Layout content ] Start -->
    <div class="layout-content">

        <!-- [ content ] Start -->
        <div class="container-fluid flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Task</a></li>
                    <li class="breadcrumb-item active">{{$headerName}}</li>
                </ol>
            </div>
            @if(session('success'))
                <div class="alert alert-dark-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{session('success')}}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{session('error')}}
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(count($tasks)>0)
                    @php
                        $count=1;
                    @endphp
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$task->name}}</td>
                            <td>{{$task->description}}</td>
                            <td>{{$task->status}}</td>
                            <td>{{$task->dueDate}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dark">Manage</button>
                                    <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown"></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        </div>
        <!-- [ content ] End -->

        <!-- [ Layout footer ] Start -->
        <nav class="layout-footer footer bg-white">
            <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                <div class="pt-3">
                        <span class="footer-text font-weight-semibold">&copy; {{date('Y')}}
                            <a href="https://bervinitsolutions.com" class="footer-link" target="_blank">Bervin IT Solutions</a></span>
                </div>
                <div>
                    <a href="javascript:" class="footer-link pt-3">About Us</a>
                    <a href="javascript:" class="footer-link pt-3 ml-4">Help</a>
                    <a href="javascript:" class="footer-link pt-3 ml-4">Contact</a>
                    <a href="javascript:" class="footer-link pt-3 ml-4 d-none">Terms &amp; Conditions</a>
                </div>
            </div>
        </nav>
        <!-- [ Layout footer ] End -->
    </div>
    <!-- [ Layout content ] Start -->
    </div>
@endsection
