@props(['status'])

@if ($status)
<div {{ $attributes->merge(['class' => 'text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500']) }}>
    {{ $status }}
</div>
@endif