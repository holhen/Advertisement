@extends("layouts.app")

@section("content")
    <p>There are the following users in the database currently:</p>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
@endsection
