<form action="{{ route('functions.store') }}" method="post">
    @csrf
    <input type="hidden" name="code_occupation" value="{{ $occupation->code }}">
    <label for="code">Code</label>
    <input type="text" name="code" required>
    <label for="description">Description</label>
    <textarea name="description" required></textarea>
    <button type="submit">Crear</button>
</form>
