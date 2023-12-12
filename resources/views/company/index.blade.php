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
        <h2>LIST OF COMPANIES</h2>
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
                    <td>{{$company->recruiter->name}}</td>
                    <td>{{$company->name}}</td>
                    <td>{{$company->nit}}</td>
                    <td>{{$company->company_name}}</td>
                    <td>{{$company->email}}</td>
                    <td>{{$company->nature}}</td>
                    <td>{{$company->departament->name}}</td>
                    <td>{{$company->municipality->name}}</td>
                    <td>{{$company->addres}}</td>
                    <td>{{$company->phone}}</td>
                    
                </tr>
            @empty
                <tr>
                    <td colspan="2">There is no system</td>
                </tr>
            </tbody>
        @endforelse
        <a href="{{route('company.create')}}" id="create">Create new company</a>
        </table>
    </div>
</body>
</html>
@endsection


