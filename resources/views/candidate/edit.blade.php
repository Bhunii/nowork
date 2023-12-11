@extends('layouts.nav.candidate',['title' => 'Update Data'])

@section('js')
    <script src="{{ asset('js/location.js') }}"></script>
@endsection

@section('style')
    <style>
        .contenido_form{
            width: 100%;
            padding: 11px;
        }

        .form_edit_curriculum{
            width: 80%;
            max-height: 650px;
            background: none;
            border: none;
            gap: 21px;
        }

        .form_edit_curriculum::-webkit-scrollbar {
            width: 8px;
            height: 5px;
        }
        .input_style_general, .select_style_general{
            background-color: d3d3d3;
            height: 39px;
        }
        .input_general_submit{
            margin: 0 50px;
        }

    </style>
@endsection

@section('content_profile')
<section class="contenido_form">
    <form class="form form_edit_curriculum" style="overflow-y: auto;" method="post" action="{{ route('candidate.update') }}">
        @csrf
        @METHOD('PUT')
        <div>
            <label>Document Type</label>
            <select class="select_style_general" name="doc_type" disabled>
                <option value="">Select an option</option>
                <option value="CC">citizenship card</option>
                <option value="TI">identity card</option>
            </select>
        </div>
        <div>
            <label>Document Number</label>
            <input
            class="input_style_general"
            name="doc_num"
            type="text"
            value="{{ auth()->user()->doc_num }}"
            disabled>
            @error('doc_num')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Name</label>
            <input
            class="input_style_general"
            name="name"
            type="text"
            value="{{ auth()->user()->name }}"
            disabled>
            @error('name')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Last Name</label>
            <input
            class="input_style_general"
            name="last_name"
            type="text"
            value="{{ auth()->user()->last_name }}"
            disabled>
            @error('last_name')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Phone</label>
            <input
            class="input_style_general"
            name="phone"
            type="text"
            value="{{ auth()->user()->phone }}"
            >
            @error('phone')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>User name</label>
            <input
            class="input_style_general"
            name="user_name"
            type="text"
            value="{{ auth()->user()->user_name }}"
            >
            @error('user_name')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Email</label>
            <input
            class="input_style_general"
            name="email"
            type="text"
            value="{{ auth()->user()->email }}"
            >@error('email')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Genre</label>
            <select class="select_style_general" name="genre" disabled>
                <option value="">Select an option</option>
                <option value="M">male</option>
                <option value="F">female</option>
            </select>
        </div>
        <div>
            <label>Departament</label>
            <select class="select_style_general" name="id_departament" id="departamentSelect">
                <option value="">Select an option</option>
                @foreach ($departaments as $departament)
                    <option value="{{ $departament->id }}" data-municipalities='@json($departament->municipalities)'>{{ $departament->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Municipality</label>
            <select class="select_style_general" name="id_municipality" id="municipalitySelect">
                <option value="">Select an option</option>
            </select>
        </div>
        <div>
            <label>Addres</label>
            <input
            class="input_style_general"
            name="addres"
            type="text"
            value="{{ auth()->user()->candidate->addres}}"
            >
        </div>
        <input
        class="input_general_submit"
        type="submit"
        value="enviar"
        >
    </form>
</section>


@endsection
