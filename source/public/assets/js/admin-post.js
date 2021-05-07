(function() {

    var f = document.getElementById('f');

    if (f.files.length)
        processFile();

    f.addEventListener('change', processFile, false);


    function processFile(e) {
        var file = f.files[0];
        var size = file.size;
        var sliceSize = 500000;
        var start = 0;

        setTimeout(loop, 1);

        function loop() {
            var end = start + sliceSize;

            if (size - end < 0) {
                end = size;
            }

            var s = slice(file, start, end);

            send(s, start, end).onload = function() {
                if (end < size) {
                    start += sliceSize;
                    setTimeout(loop, 1);
                }
            };


        }
    }


    function send(piece, start, end) {
        var formdata = new FormData();
        var xhr = new XMLHttpRequest();

        xhr.open('POST', '/zf-admin/media', true);

        formdata.append('start', start);
        formdata.append('end', end);
        formdata.append('file', piece);

        xhr.send(formdata);

        return xhr;
    }

    /**
     * Formalize file.slice
     */

    function slice(file, start, end) {
        var slice = file.mozSlice ? file.mozSlice :
            file.webkitSlice ? file.webkitSlice :
            file.slice ? file.slice : noop;

        return slice.bind(file)(start, end);
    }

    function noop() {

    }

})();

function initUploader() {
    var postId = document.querySelector('#postId').value;

    FilePond.setOptions({
        acceptedFileTypes: ['video/mp4', 'video/x-m4v', 'video/*'],
        chunkUploads: true,
        chunkForce: true,
        maxFiles: 3,
        maxChunkSize: 500000,
        server: {
            process: {
                url: '/zf-admin/media?id=' + postId,
            },
            patch: {
                //url: '/zf-admin/media/patch/?id=' + postId + '&patch=',
                url: '/zf-admin/media/patch/',
                method: 'POST',
            }
        },
    });

    var inputElement = document.querySelector('#videos');
    var pond = FilePond.create(inputElement);
}

function init() {
    //initUploader();
}

init();