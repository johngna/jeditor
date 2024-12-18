<div
    wire:ignore
    x-data="editor(@entangle('content'))"
    x-init="initQuill"
    {{ $attributes->merge(['class' => 'w-full']) }}
>
    <div x-ref="editor" id="{{ $id }}" class="bg-white"></div>
</div>

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush