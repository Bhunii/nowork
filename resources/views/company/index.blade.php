@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="{{route('candidate.create')}}" id="create">Create new company</a>
        <h2>LIST OF COMPANIES</h2>
        <table class="tabla">

            <thead>
                <tr>
                    <th>Candidate's name</th>
                    <th>User ID</th>
                    <th>Selection status</th>
                    <th>Score</th>
                    <th>Update</th>
                </tr>
            </thead>
            @forelse($candidates as $candidate)
            <tbody>
                <tr>
                    <td>{{$candidate->user->name}}</td>
                    <td>{{$candidate->user_id}}</td>
                    <td>{{$candidate->selection_status}}</td>
                    <td>{{$candidate->points}}</td>
                    <td><a href="{{route('candidate.show', $candidate->id)}}" class="edit">DETAILS</a>|<a href="{{ route('candidate.edit', $candidate->id)}}" class="edit">EDIT</a>|
                        <form method="POST" action="{{route('candidate.destroy', $candidate->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE" class="edit"/>
                            </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">There is no system</td>
                </tr></tbody>
            @endforelse
        </table>
    </div>
</body>
</html>
@endsection
