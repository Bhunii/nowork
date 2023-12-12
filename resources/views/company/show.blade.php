@extends('layouts.app')

@section('content')
<style></style>
<h4>List of companies</h4>
        <table class="tabla">
            <thead>
                <tr>
                    <td>Id _recruiter</td>
                    <td>Name</td>
                    <td>Nit</td>
                    <td>Company name</td>
                    <td>Email</td>
                    <td>Nature</td>
                    <td>Id departament</td>
                    <td>Id municipality</td>
                    <td>addres</td>
                    <td>phone</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$recruiters->id_recruiter}}</td>
                    <td>{{$companies->name}}</td>
                    <td>{{$companies->nit}}</td>
                    <td>{{$companies->company_name}}</td>
                    <td>{{$companies->email}}</td>
                    <td>{{$companies->nature}}</td>
                    <td>{{$departaments->id_departament}}</td>
                    <td>{{$municipalities->id_municipality}}</td>
                    <td>{{$companies->addres}}</td>
                    <td>{{$companies->phone}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('company.index')}}">Back</a>
@endsection
