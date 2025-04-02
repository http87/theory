@props(['active' => false])

@php
    $classActive = 'focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-500 hover:bg-indigo-500 text-base w-5 h-5 flex items-center justify-center font-medium text-white bg-red-400 rounded-full text-xs ';
@endphp

<span class="{{ $active ? $classActive : 'text-gray-500 text-xs' }}">{{ $slot }}</span>
