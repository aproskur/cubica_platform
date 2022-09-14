@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:text-white dark:bg-bgr-dark dark:focus:border-yellow-100 focus:ring focus:ring-yellow-100 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
