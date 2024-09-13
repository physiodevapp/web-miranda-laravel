@props([
    'disabled' => false,
    'type' => 'text', // Default to 'text' if not specified
    'options' => [], // Options for select fields
    'value' => null, // Default value to control pre-selected option
])

@if($type === 'select')
    <select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
        <option value="" disabled {{ old($attributes->get('name'), $value) === null ? 'selected' : '' }}>Select an option</option>
        @foreach($options as $optValue => $label)
            <option value="{{ $optValue }}" {{ old($attributes->get('name'), $value) == $optValue ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
@else
    <input type="{{ $type }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
@endif
