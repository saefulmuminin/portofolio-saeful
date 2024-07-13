@extends('layouts.admin')

@section('title', 'Edit Hero Slider')

@section('app')

<div class="container">
    <h1>Edit Skill</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.skills.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $skill->name }}" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="percentage">Percentage:</label>
            <input type="number" name="percentage" value="{{ $skill->percentage }}" class="form-control" placeholder="Percentage">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection


