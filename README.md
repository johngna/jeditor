# JEditor

Editor de texto (WYSIWYG) para Laravel Livewire usando Quill.

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

## Republicar Assets (Opcional)
```bash
php artisan vendor:publish --tag="j-editor-assets" --force

php artisan vendor:publish --tag="j-editor-config" --force

```

## Uso Básico

```bash
    <livewire:j-editor
    wire:model="content"
    placeholder="Digite seu texto aqui..."
    />
```

## Exemplos

```bash
<livewire:j-editor wire:model="content" />


<livewire:j-editor
    wire:model="content"
    placeholder="Escreva sua história..."
/>


<livewire:j-editor 
    wire:model="content"
    :readonly="true"
/>
```

Licença MIT