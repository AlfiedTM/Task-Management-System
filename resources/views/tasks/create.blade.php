@extends('layouts.app')

@section('content')
    <!-- [ Layout content ] Start -->
    <div class="layout-content">

        <!-- [ content ] Start -->
        <div class="container-fluid flex-grow-1 container-p-y">
{{--            <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>--}}
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Tasks</a></li>
                    <li class="breadcrumb-item active">Create</li>
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

            <div class="card mb-4">
                <h6 class="card-header text-center">Create New Task</h6>
                <div class="card-body">
                    <form method="POST" class="mb-5" action="{{ route('task.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          name="description" value="{{ old('description') }}" required
                                          autocomplete="description" autofocus>

                                </textarea>
                                {{--                                <input id="description" type="" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>--}}

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Due Date') }}</label>

                            <div class="col-md-6">
                                <input id="dueDate" type="datetime-local"
                                       class="form-control @error('dueDate') is-invalid @enderror" name="dueDate"
                                       value="{{ old('dueDate') }}" required autocomplete="dueDate" autofocus>

                                @error('dueDate')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Task') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{--            @endsection--}}

        </div>
        <!-- [ content ] End -->

        <!-- [ Layout footer ] Start -->
        <nav class="layout-footer footer bg-white">
            <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                <div class="pt-3">
                        <span class="footer-text font-weight-semibold">&copy;
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
