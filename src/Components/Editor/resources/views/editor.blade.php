@props(['on'])
<div
    {{ $attributes->merge(['class' => 'w-full']) }}
    wire:ignore
    x-data="editor(@entangle('content'))"
    x-init="initQuill"
>
    <div 
        x-ref="editor" 
        id="{{ $id }}" 
        class="bg-white border border-gray-300  shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300"
        style="min-height: 200px"
        ></div>
</div>

@pushOnce('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endPushOnce

@pushOnce('scripts')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="{{ asset('vendor/j-editor/editor.js') }}"></script>
@endPushOnce
