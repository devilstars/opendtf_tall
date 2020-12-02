<div>
    <label class="block mb-2 text-sm font-bold text-gray-700" for="{{ $id }}">
        {{ $label ?? '' }}
    </label>
    <input
        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('email') mb-3 border-red-500 @enderror"
        wire:model.lazy="{{ $model }}"
        id="{{ $id }}"
        type="{{ $type ?? 'text' }}"
        placeholder="{{ $placeholder ?? '' }}"
        {{ $required ?? '' }} {{ $autofocus ?? '' }}>
        @error($model)
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
</div>
