@extends('layouts.app',['title' => 'Recruiters'])
@section('content')

<main class="contenido">
    <h3>List of Recruiters</h3>
    <style>
    .tabla_reclutadores td{
        border: 1px rgb(159, 159, 159) solid;
    }
    </style>
    <table class="tabla_reclutadores">
        <tr>
            <td>Config</td>
            <td>id</td>
            <td>id user</td>
            <td>Name</td>
            <td>Last name</td>
            <td>Document num</td>
            <td>Role name</td>
            <td>Admission Date</td>
        </tr>
        @forelse ($recruiters as $recruiter)
            <tr style="font-size: smaller">
                <td style="width: 130px"><a href="{{ route('recruiter.edit', $recruiter->id) }}">Update Info</a></td>
                <td style="width: 30px">{{ $recruiter->id }}</td>
                <td style="width: 45px">{{ $recruiter->user->id }}</td>
                <td style="width: 200px">{{ $recruiter->user->name }}</td>
                <td style="width: 200px">{{ $recruiter->user->last_name }}</td>
                <td style="width: 100px">{{ $recruiter->user->doc_num }}</td>
                <td style="width: 110px">{{ $recruiter->user->role->role_name }}</td>
                <td style="width: 110px">{{ $recruiter->admission_date }}</td>
            </tr>
        @empty
            <tr>
                <td>Table empty</td>
            </tr>
        @endforelse
    </table>
</main>

@endsection
