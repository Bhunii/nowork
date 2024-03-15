<div>
    <label for="occupationSelect">Occupation</label>
    <select wire:model="selectedOccupation" class="select_style_general" name="id_occupation" id="occupationSelect">
        <option value="">Select an occupation</option>
        @foreach ($occupations as $occupation)
            <option value="{{ $occupation->code_occupation }}">{{ $occupation->name }}</option>
        @endforeach
    </select>
</div>

<div id="functionsContainer">
    <fieldset>
        <legend>Functions</legend>
        <div id="functionsCheckboxList">
            @foreach ($functions as $function)
                <div>
                    <span>Description: {{ $function->description }}</span>
                </div>
            @endforeach
        </div>
    </fieldset>
</div>

