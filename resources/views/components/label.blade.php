@props(['value','asterisk' => false])


<label {{ $attributes->merge(['class' => 'font-semibold text-gray-600 py-2']) }}>
    {{ $value ?? $slot }} {!! $asterisk ? '<abbr class="text-red-800" title="required">*</abbr>':'' !!}
</label>
