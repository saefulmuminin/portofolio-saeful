<!-- resources/views/admin/messages/index.blade.php -->
@extends('layouts.admin')

@section('title', 'Messages')

@section('app')
<div class="container">
    <h1>Messages</h1>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
        @foreach ($messages as $message)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $message->name }}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->subject }}</td>
            <td>{{ $message->message }}</td>
            <td>{{ $message->created_at->format('d M Y H:i') }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
