@extends('layouts.app',['title' => 'Registered Users'])
@section('content')
<main class="contenido">
    <h3>List of Users</h3>
    <style>
    .tabla td{
        border: 1px rgb(159, 159, 159) solid;
    }
    </style>
    <table class="tabla">
        <tr>
            <td>id_recruiter</td>
            <td>name</td>
            <td>nit</td>
            <td>company_name</td>
            <td>email</td>
            <td>nature</td>
            <td>id_departement</td>
            <td>id_municipality</td>
            <td>addres</td>
            <td>phone</td>
        </tr>
        @forelse ($companies as $company)
        <tbody>
            <tr>
                <td>{{$companies->recruiters->id_recruiter}}</td>
                <td>{{$companies->name}}</td>
                <td>{{$companies->nit}}</td>
                <td>{{$companies->company_name}}</td>
                <td>{{$companies->email}}</td>
                <td>{{$companies->nature}}</td>
                <td>{{$companies->departaments->id_departament}}</td>
                <td>{{$companies->municipalities->id_municipality}}</td>
                <td>{{$companies->addres}}</td>
                <td>{{$companies->phone}}</td>
                <td><a href="{{route('company.show', $company->id)}}" class="edit">DETAILS</a><a href="{{ route('company.edit', $company->id)}}" class="edit">EDIT</a>|
                    <form method="POST" action="{{route('company.destroy', $company->id)}}">
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
    <br>
    <h4><a href="{{ route('company.create') }}">REGISTER A NEW COMPANY</a></h4>
</main>
@endsection
