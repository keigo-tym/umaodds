$(document).ready(function() {
    $('#frame_number').on('input', function() {
        var frameNumber = parseInt($(this).val());
        var colorSelect = $('#color');

        var color = '';

        if (frameNumber === 1) {
            color = 'white';
        } else if (frameNumber === 2) {
            color = 'black';
        } else if (frameNumber === 3) {
            color = 'red';
        } else if (frameNumber === 4) {
            color = 'blue';
        } else if (frameNumber === 5) {
            color = 'yellow';
        } else if (frameNumber === 6) {
            color = 'green';
        } else if (frameNumber === 7) {
            color = 'orange';
        } else if (frameNumber === 8) {
            color = 'pink';
        }

        colorSelect.val(color);
    });
});