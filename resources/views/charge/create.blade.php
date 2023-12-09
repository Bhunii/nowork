@extends('layouts.app')

@section("content")

<form method="POST" action="{{route('charge.store')}}">
    @csrf
    
    
    <label> id_denomination</label>
    <input type="text" name="id_denomination"/>

    <label> id_function</label>
    <input type="text" name="id_function"/>

    <label> payment_method</label>
    <input type="text" name="payment_method"/>

    <label> salary</label>
    <input type="text" name="salary"/>

    <label> type_contract</label>
    <input type="text" name="type_contract"/>


    <input type="submit" value="Crear"/>

</form>
@endsection
