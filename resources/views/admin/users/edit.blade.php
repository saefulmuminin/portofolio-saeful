@extends('layouts.admin')

@section('title', 'Edit User')

@section('app')
    <div class="container mx-auto py-6 sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold leading-tight text-gray-900">Edit User</h2>
                <div class="mt-4">
                    @if ($errors->any())
                        <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3 mb-3" role="alert">
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

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Name</label>
                                <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email address</label>
                                <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="profesi" class="block text-sm font-medium leading-5 text-gray-700">Profesi</label>
                                <input id="profesi" type="text" name="profesi" value="{{ old('profesi', $user->profesi) }}" autocomplete="profesi" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="avatar" class="block text-sm font-medium leading-5 text-gray-700">Avatar</label>
                                <input id="avatar" type="file" name="avatar" accept="image/*" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="negara" class="block text-sm font-medium leading-5 text-gray-700">Negara</label>
                                <input id="negara" type="text" name="negara" value="{{ old('negara', $user->negara) }}" autocomplete="negara" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="password" class="block text-sm font-medium leading-5 text-gray-700">Password</label>
                                <input id="password" type="password" name="password" autocomplete="new-password" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700">Confirm Password</label>
                                <input id="password_confirmation" type="password" name="password_confirmation" autocomplete="new-password" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            </div>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-md active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo">
                                Update User
                            </button>
                            <a href="{{ route('admin.users.index') }}" class="ml-4 px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 bg-white border border-gray-300 rounded-md active:bg-gray-100 hover:bg-gray-200 focus:outline-none focus:shadow-outline-gray">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
