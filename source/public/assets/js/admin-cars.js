function initEditor() {
    var editor = document.querySelector('#editor');
    if (!editor) return;

    var options = {
        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
    };

    ClassicEditor
        .create(editor, options)
        .catch(function(error) {
            console.error(error);
        });

    document.querySelector('[data-init="afterCkEditor"]').style.opacity = 1;
}

function init() {
    initEditor();
}

init();