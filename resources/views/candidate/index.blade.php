@extends('layouts.app',['title' => 'Instructors'])
@section('content')

<main class="contenido">
    <h3>List of Candidates</h3>
    <style>
    .tabla_instructores td{
        border: 1px rgb(159, 159, 159) solid;
    }
    </style>
    <table class="tabla_instructores">
        <tr>
            <td>Config</td>
            <td>id</td>
            <td>id user</td>
            <td>Name</td>
            <td>Last name</td>
            <td>Document num</td>
            <td>Role name</td>
            <td>Admission Date</td>
            <td>Points</td>
        </tr>
        @forelse ($candidates as $candidate)
            <tr style="font-size: smaller">
                <td style="width: 130px"><a href="{{ route('candidate.edit', $candidate->id) }}">Update Info</a></td>
                <td style="width: 30px">{{ $candidate->id }}</td>
                <td style="width: 45px">{{ $candidate->user->id }}</td>
                <td style="width: 200px">{{ $candidate->user->name }}</td>
                <td style="width: 200px">{{ $candidate->user->last_name }}</td>
                <td style="width: 100px">{{ $candidate->user->doc_num }}</td>
                <td style="width: 110px">{{ $candidate->user->role->role_name }}</td>
                <td style="width: 110px">{{ $candidate->selection_status }}</td>
                <td style="width: 110px">{{ $candidate->points }}</td>
            </tr>
        @empty
            <tr>
                <td>Table empty</td>
            </tr>
        @endforelse
    </table>
</main>

@endsection
