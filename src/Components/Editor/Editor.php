<?php

namespace Johngna\JEditor\Components\Editor;

use Livewire\Component;
use Livewire\Attributes\Modelable;

class Editor extends Component
{
    #[Modelable]
    public string $content = '';
    
    public string $placeholder;
    public bool $readonly;
    public string $id;

    public function mount(
        string $content = '',
        string $placeholder = 'Digite seu texto aqui...',
        bool $readonly = false
    ) {
        $this->content = $content;
        $this->placeholder = $placeholder;
        $this->readonly = $readonly;
        $this->id = 'editor-' . uniqid();
    }

    public function updateContent($content)
    {
        $this->content = $content;
    }

    public function render()
    {
        return view('j-editor::editor');
    }
}
