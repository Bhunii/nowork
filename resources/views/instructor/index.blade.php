@extends('layouts.app',['title' => 'Instructors'])
@section('content')

<main class="contenido">
    <h3>List of Instructors</h3>
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
            <td>Profession</td>
            <td>Speciality</td>
        </tr>
        @forelse ($instructors as $instructor)
            <tr style="font-size: smaller">
                <td style="width: 130px"><a href="{{ route('instructor.edit', $instructor->id) }}">Update Info</a></td>
                <td style="width: 30px">{{ $instructor->id }}</td>
                <td style="width: 45px">{{ $instructor->user->id }}</td>
                <td style="width: 200px">{{ $instructor->user->name }}</td>
                <td style="width: 200px">{{ $instructor->user->last_name }}</td>
                <td style="width: 100px">{{ $instructor->user->doc_num }}</td>
                <td style="width: 110px">{{ $instructor->user->role->role_name }}</td>
                <td style="width: 110px">{{ $instructor->profession }}</td>
                <td style="width: 110px">{{ $instructor->speciality }}</td>
            </tr>
        @empty
            <tr>
                <td>Table empty</td>
            </tr>
        @endforelse
    </table>
</main>

@endsection
