document.addEventListener('alpine:init', () => {
    Alpine.data('editor', (content) => ({
        content: content,
        quill: null,

        initQuill() {
            const options = {
                theme: 'snow',
                placeholder: this.$wire.placeholder,
                readOnly: this.$wire.readonly,
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

            this.quill = new Quill(this.$refs.editor, options);
            this.quill.root.innerHTML = this.content;

            this.quill.on('text-change', () => {
                this.content = this.quill.root.innerHTML;
                this.$wire.updateContent(this.content);
            });
        }
    }));
});