@extends('layouts.admin')

@section('title', 'User Details')

@section('app')
    <div class="container mx-auto py-6 sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold leading-tight text-gray-900">User Details</h2>
                <div class="mt-4">
                    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Name</label>
                                    <p id="name" class="mt-1 text-sm leading-5 text-gray-900">{{ $user->name }}</p>
                                </div>
        
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email address</label>
                                    <p id="email" class="mt-1 text-sm leading-5 text-gray-900">{{ $user->email }}</p>
                                </div>
        
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="profesi" class="block text-sm font-medium leading-5 text-gray-700">Profesi</label>
                                    <p id="profesi" class="mt-1 text-sm leading-5 text-gray-900">{{ $user->profesi }}</p>
                                </div>
        
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="avatar" class="block text-sm font-medium leading-5 text-gray-700">Avatar</label>
                                    @if ($user->avatar)
                                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="mt-1 h-20 w-20 rounded-full inline-block">
                                    @else
                                        <span class="mt-1 text-sm leading-5 text-gray-900">No avatar uploaded</span>
                                    @endif
                                </div>
        
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="negara" class="block text-sm font-medium leading-5 text-gray-700">Negara</label>
                                    <p id="negara" class="mt-1 text-sm leading-5 text-gray-900">{{ $user->negara }}</p>
                                </div>
                            </div>
        
                            <div class="mt-6">
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-md active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo">
                                    Edit User
                                </a>
                                <a href="{{ route('admin.users.index') }}" class="ml-4 px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 bg-white border border-gray-300 rounded-md active:bg-gray-100 hover:bg-gray-200 focus:outline-none focus:shadow-outline-gray">
                                    Back to List
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
