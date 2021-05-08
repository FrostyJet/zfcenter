function initModals() {
    if (window.location.hash) {
        var hash = window.location.hash;
        console.log(hash);

        var modal = document.querySelector(hash);
        if (modal && modal.classList.contains('modal')) {
            var myModal = new bootstrap.Modal(modal, {
                keyboard: false
            });

            myModal.show();
        }
    }

}


function init() {
    initModals();
}

init();
