document.addEventListener('alpine:init', () => {
    Alpine.data('editor', (modelValue) => ({
        content: modelValue,
        quill: null,

        initQuill() {
            // Configurações do editor
            const options = {
                theme: 'snow',
                placeholder: this.$wire.placeholder || 'Digite seu texto aqui...',
                readOnly: this.$wire.readonly || false,
                modules: {
                    toolbar: [
                        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                        ['bold', 'italic', 'underline', 'strike'],
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        ['link', 'image', 'code-block'],
                        ['clean']
                    ]
                }
            };

            // Inicialização do Quill
            this.quill = new Quill(this.$refs.editor, options);
            
            // Define o conteúdo inicial
            if (this.content) {
                this.quill.root.innerHTML = this.content;
            }

            // Listener para mudanças no editor
            this.quill.on('text-change', () => {
                const content = this.quill.root.innerHTML;
                this.$wire.$set('content', content);
            });

            // Listener para mudanças no modelo
            this.$watch('content', (value) => {
                if (value !== this.quill.root.innerHTML) {
                    this.quill.root.innerHTML = value;
                }
            });
        }
    }));
});
