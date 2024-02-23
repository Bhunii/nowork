@extends('layouts.nav.recruiter',['title' => 'Crear Empresa'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/location.js') }}"></script>
@endsection

@section('style')
    <style>
        .contenido_form {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .form_update_company {
            display: flex;
            width: 80%;
            max-height: 601px;
            align-items: flex-start;
            background: none;
            border: none;
            padding: 11px 16px;
            overflow: hidden;
        }

        .input_style_general,
        .select_style_general {
            height: 39px;
        }

        .select_style_general {
            width: 100%;
        }

        .input_general_submit {
            margin: 0 75px;
        }

    </style>
@endsection

@section('content_profile')
    <main class="contenido_form">
        <form class="form form_update_company" style="overflow-y: auto;" method="post" action="{{ route('company.store') }}">
            @csrf
            <div>
                <label class="label_style_general">Name</label>
                <input
                    class="input_style_general"
                    name="name"
                    type="text"
                    value="{{ old('name') }}"
                    required
                >
                @error('name')
                    <small>$message</small>
                @enderror
            </div>
            <div>
                <label class="label_style_general">Nit</label>
                <input
                    class="input_style_general"
                    name="nit"
                    type="text"
                    value="{{ old('nit') }}"
                    required
                >
                @error('nit')
                    <small>$message</small>
                @enderror
            </div>
            <div>
                <label class="label_style_general">Company name</label>
                <input
                    class="input_style_general"
                    name="company_name"
                    type="text"
                    value="{{ old('company_name') }}"
                    required
                >
                @error('company_name')
                    <small>$message</small>
                @enderror
            </div>
            <div>
                <label class="label_style_general">Email</label>
                <input
                    class="input_style_general"
                    name="email"
                    type="email"
                    value=""
                    required
                >
                @error('email')
                    <small>$message</small>
                @enderror
            </div>
            <div>
                <label class="label_style_general">Nature of the company</label>
                <input
                    class="input_style_general"
                    name="nature"
                    type="text"
                    value="{{ old('nature') }}"
                    required
                >
                @error('nature')
                    <small>$message</small>
                @enderror
            </div>
            <div>
                <label class="label_style_general">Departament</label>
                <select class="select_style_general" name="id_departament" id="departamentSelect">
                    <option value="">Select an option</option>
                    @foreach ($departaments as $departament)
                        <option value="{{ $departament->id }}" data-municipalities='@json($departament->municipalities)'>{{ $departament->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="label_style_general">Municipality</label>
                <select class="select_style_general" name="id_municipality" id="municipalitySelect">
                    <option value="">Select an option</option>
                </select>
            </div>
            <div>
                <label class="label_style_general">Address</label>
                <input
                    class="input_style_general"
                    name="addres"
                    type="text"
                    value="{{ old('addres') }}"
                    required
                >
                @error('addres')
                    <small>$message</small>
                @enderror
            </div>
            <div>
                <label class="label_style_general">Phone</label>
                <input
                    class="input_style_general"
                    name="phone"
                    type="text"
                    value="{{ old('phone') }}"
                    required
                >
                @error('phone')
                    <small>$message</small>
                @enderror
            </div>
            <div>
                <input
                    class="input_general_submit"
                    type="submit"
                    value="Crear"
                >
            </div>
        </form>
    </main>
@endsection
