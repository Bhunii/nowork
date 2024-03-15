<div>
    <label for="occupationSelect">Occupation</label>
    <select wire:model="selectedOccupation" wire:change="updatedSelectedOccupation($event.target.value)" class="select_style_general" name="id_occupation" id="occupationSelect">
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
                    <input type="checkbox" wire:model="functions.{{ $loop->index }}.selected">
                    <label>
                        <span>Code: {{ $function->code }}</span> - <span>{{ $function->description }}</span>
                    </label>
                </div>
            @endforeach
        </div>
    </fieldset>
</div>

