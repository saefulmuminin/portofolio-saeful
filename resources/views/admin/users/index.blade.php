@extends('layouts.admin')

@section('title', 'Users')

@section('app')
    <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            <div class="row gx-4 mb-2">
                @foreach ($users as $user)
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            @if ($user->avatar)
                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="profile_image"
                                    class="w-100 border-radius-lg shadow-sm">
                            @else
                                <span class="mt-1 text-sm leading-5 text-gray-900">No avatar uploaded</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ $user->name }}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{ $user->profesi }}
                            </p>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{ $user->email }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item bg-gradient-faded-primary">
                                    <a class="nav-link mb-0 px-0 py-1" href="{{ route('admin.users.edit', $user->id) }}">
                                        <i class="material-icons text-lg position-relative">edit</i>
                                        <span class="ms-1">Edit</span>
                                    </a>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
