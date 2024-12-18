<?php

return [
    'editor' => [
        // Configurações padrão do Quill Editor
        'toolbar' => [
            ['header' => [1, 2, 3, 4, 5, 6, false]],
            ['bold', 'italic', 'underline', 'strike'],
            ['list' => 'ordered', 'list' => 'bullet'],
            ['link', 'image', 'code-block'],
            ['clean']
        ],
        
        // Tema padrão
        'theme' => 'snow',
        
        // Assets
        'css' => [
            'https://cdn.quilljs.com/1.3.6/quill.snow.css'
        ],
        'js' => [
            'https://cdn.quilljs.com/1.3.6/quill.js'
        ],
        
        // Configurações de upload (se implementado)
        'upload' => [
            'disk' => 'public',
            'path' => 'editor-images',
            'max_size' => 5120 // em KB
        ]
    ]
];