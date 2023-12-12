@extends('layouts.app')

@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #525252;
    }

    .contenido {
        margin: 50px auto;
        width: 80%;
        background-color: rgb(110, 110, 110);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #e4e4e4;
    }

    .form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 10px;
        color: #333;
    }

    input[type='text'] {
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type='submit'] {
        padding: 10px 20px;
        background-color: #d32f2f;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type='submit']:hover {
        background-color: #b71c1c;
    }
</style>

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
        <label>Nombre de funcion:</label>
        <input type="text" name="name_function"/>
        <label>Descripcion de funcion:</label>
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
