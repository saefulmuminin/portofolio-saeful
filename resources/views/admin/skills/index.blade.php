@extends('layouts.admin')

@section('title', 'Hero Sliders')

@section('app')

<div class="container">
    <h1>Skills</h1>
    <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">Add Skill</a>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Percentage</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($skills as $skill)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $skill->name }}</td>
            <td>{{ $skill->percentage }}%</td>
            <td>
                <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('admin.skills.edit', $skill->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
