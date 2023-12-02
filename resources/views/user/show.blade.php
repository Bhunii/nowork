@extends('layouts.app',['title' => 'Show User'])

@section('content')
<style></style>
<h4>List of User</h4>
        <table class="tabla">
            
            <thead>
                <tr>
                    <td>Name</td>
                    <td>doc type</td>
                    <td>doc num</td>
                    <td>phone</td>
                    <td>email</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->doc_type}}</td>
                    <td>{{$user->doc_num}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('user.index')}}">Back</a>
@endsection