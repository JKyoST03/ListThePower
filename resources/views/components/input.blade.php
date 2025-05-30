@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-[#EDEDEC] border-gray-950 focus:border-indigo-500 focus:ring-red-500 rounded-md shadow-sm bg-stone-700 placeholder:text-gray-400']) !!}>