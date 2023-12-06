@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/form.css')}}">
<h1>Formulario de creacion de ocupacion</h1>
<main class="contenido">
    <form class="form" method="POST" action="{{ route('occupation.store')}}">

        @csrf

        <label>Codigo de ocupacion:</label>
        <input type="text" name="code_occupation"/>
        <label>Nombre:</label>
        <input type="text" name="name_occupation"/>
        <label>Descripcion:</label>
        <input type="text" name="description_occupation"/>


        <h2>Funciones</h2>
        <label>Codigo de funcion:</label>
        <input type="text" name="code_function"/>
        <label>Nombre de habilidad:</label>
        <input type="text" name="name_function"/>
        <label>Descripcion de habilidad:</label>
        <input type="text" name="description_function"/>


        <h2>Denominaciones</h2>
        <label>Codigo de denominacion:</label>
        <input type="text" name="code_denomination"/>
        <label>Descripcion de denominacion:</label>
        <input type="text" name="description_denomination"/>

        
        <h2>Ocupaciones Relacionadas</h2>
        <label>Codigo de ocupacion relacionada=opcional:</label>
        <input type="text" name="code_occupation_relation"/>


        <h2>Habilidades</h2>
        <label>Codigo de habilidad:</label>
        <input type="text" name="code_skill"/>
        <label>Nombre de habilidad:</label>
        <input type="text" name="name_skill"/>
        <label>Descripcion de habilidad:</label>
        <input type="text" name="description_skill"/>

        
        <h2>Conocimientos</h2>
        <label>Codigo de conocimiento:</label>
        <input type="text" name="code_knowledge"/>
        <label>Nombre de conocimiento:</label>
        <input type="text" name="name_knowledge"/>
        <label>Descripcion de conocimiento:</label>
        <input type="text" name="description_knowledge"/>

        <input type="submit" value="Crear" class="create" />
    </form>
</main>
@endsection
