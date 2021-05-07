function initUploader() {
    var attachments = document.getElementById('attachments');
    var progress = document.getElementById('progress');
    var progressBar = document.getElementById('progressBar');
    var postId = document.querySelector('#postId');

    if (postId) postId = postId.value;
    if (!attachments) return;

    attachments.addEventListener('change', processFile, false);

    function processFile(e) {
        progress.style.display = 'flex';
        attachments.setAttribute('disabled', true);

        var file = attachments.files[0];
        if (!file) return;

        var size = file.size;
        var type = file.type.split('/')[0];
        var sliceSize = 500000;
        var start = 0;

        setTimeout(loop, 1);

        function loop() {
            var end = start + sliceSize;

            if (size - end < 0) {
                end = size;
            }

            var s = slice(file, start, end);
            var payload = {
                slice: s,
                start: start,
                end: end,
                isDone: false,
                filename: file.name,
            };

            send(Object.assign({}, payload, {
                onload: function () {
                    if (end < size) {
                        start += sliceSize;

                        var percent = ((100 * end) / size).toFixed(1);
                        progressBar.style.width = percent + '%';

                        setTimeout(loop, 1);
                    } else {
                        finish({filename: file.name, type: type})
                    }
                }
            }));
        }
    }

    function finish(payload) {
        attachments.removeAttribute('disabled');
        attachments.value = null;

        payload.postId = postId;
        payload.isDone = true;
        payload.onload = function (response) {
            response = JSON.parse(response);
            progress.style.display = 'none';
            progressBar.style.width = '0%';


            var html = '', container = null;

            html += '<div class="media-item">';
            if (payload.type == 'video') {
                container = document.querySelector('.videos');
                html += '<video controls src="/storage/' + response.path + '" class="img-fluid"></video>';
            } else {
                container = document.querySelector('.images');
                html += '<img src="/storage/' + response.path + '" class="img-fluid"/>';
            }

            html += '<a href="/zf-center/media/delete/' + response.id + '"><i class="fa fa-times"></i></a>';
            html += '<input type="hidden" name="attachmentIds[]" value="' + response.id + '">';
            html += '</div>';

            container.innerHTML += html;
        };

        send(payload);
    }

    function send(params) {
        var formdata = new FormData();
        var xhr = new XMLHttpRequest();

        xhr.open('POST', '/zf-admin/media/upload', true);

        formdata.append('start', params.start);
        formdata.append('end', params.end);
        formdata.append('file', params.slice);
        formdata.append('isDone', params.isDone);
        formdata.append('filename', params.filename);
        formdata.append('postId', params.postId);
        formdata.append('type', params.type);

        xhr.send(formdata);

        xhr.onload = function () {
            params.onload(xhr.responseText)
        }
    }

    function slice(file, start, end) {
        var slice = file.mozSlice ? file.mozSlice :
            file.webkitSlice ? file.webkitSlice :
                file.slice ? file.slice : 'error';

        if (slice == 'error') {
            alert("Can not upload files using this device + browser!");
            return window.location.reload();
        }

        return slice.bind(file)(start, end);
    }
}

function initEditor() {
    var editor = document.querySelector('#editor');
    if (!editor) return;

    var options = {
        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
    };

    ClassicEditor
        .create(editor, options)
        .catch(function (error) {
            console.error(error);
        });

    document.querySelector('[data-init="afterCkEditor"]').style.opacity = 1;
}

function init() {
    initUploader();
    initEditor();
}

init();
