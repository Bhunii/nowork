<form class="form_edit_curriculum" method="post" action="{{ route('curriculum.update') }}">
    @csrf
    @method('PUT')
    <div>
        <input
        name="occupational_profile"
        type="text"
        value="{{ old('occupational_profile', auth()->user()->candidate->curriculum->occupational_profile) }}"
        >
        @error('occupational_profile')
            <small>$message</small>
        @enderror
    </div>
    <input type="submit" value="Actualizar">
</form>
