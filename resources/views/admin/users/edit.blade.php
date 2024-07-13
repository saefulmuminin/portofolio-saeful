@extends('layouts.admin')

@section('title', 'Edit User')

@section('app')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="mb-0">Edit User</h5>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="profesi" class="form-label">Profesi</label>
                                <input id="profesi" type="text" name="profesi" value="{{ old('profesi', $user->profesi) }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="avatar" class="form-label">Avatar</label>
                                <input id="avatar" type="file" name="avatar" accept="image/*" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="negara" class="form-label">Negara</label>
                                <input id="negara" type="text" name="negara" value="{{ old('negara', $user->negara) }}" class="form-control">
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary">Update User</button>
                                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
