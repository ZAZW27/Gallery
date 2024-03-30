let modalToggle = false;
let loading = false;
// for when one of the image is clicked then it will show the container that will pop up
$(document).off('click', '#gallery-image').on('click', '#gallery-image', function () {
    modalToggle = !modalToggle
    loading = !loading

    loadingScreenAnimation();
    toggleImageModal();
})

// Toggle modal function
function toggleImageModal() {
    if (modalToggle) {
        $('#current-image').removeClass('hidden');
        setTimeout(() => {
            $('#current-image').removeClass('opacity-0 pointer-events-none hidden');
        }, 1);
    }
    else {
        $('#current-image').addClass('opacity-0 pointer-events-none');
        setTimeout(() => {
            $('#current-image').addClass('hidden');
        }, 200);
    }
    $('#loading-screen').addClass('hidden opacity-0');
}

// LOADING SCREEN FUNCTION
function loadingScreenAnimation() {
    if (loading) {
        $('#loading-screen').removeClass('hidden opacity-0')
    }
}

// to remove the pop up image from the screen
$('#current-image').click(function (e) {
    if (!$(e.target).closest('#current-image-container').length) {
        modalToggle = !modalToggle
        loading = !loading

        toggleImageModal()
    }
});