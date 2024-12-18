# JEditor

Editor de texto rico (WYSIWYG) para Laravel Livewire usando Quill.

## Requisitos

- PHP 8.1 ou superior
- Laravel 10.x
- Livewire 3.x
- Alpine.js
- Tailwind CSS

## Instalação

```bash
composer require johngna/jeditor
```

## Publicar Assets (Opcional)
```bash
php artisan vendor:publish --tag="j-components-assets"

php artisan vendor:publish --tag="j-components-config"

```

## Uso Básico

```bash
<j-editor 
    wire:model="content" 
    placeholder="Digite seu texto aqui..."
/>
```

## Exemplos

```bash
<j-editor wire:model="content" />


<j-editor 
    wire:model="content"
    placeholder="Escreva sua história..."
/>


<j-editor 
    wire:model="content"
    :readonly="true"
/>
```

Licença MIT