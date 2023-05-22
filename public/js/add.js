$(document).ready(function() {
    var formContainer = $('#form-container');
    var addButton = $('#add-field-button');
    var counter = 0;

    addButton.on('click', function() {
        var newRow = $('<tr>');
        newRow.append('<input type="hidden" name="race_id" value="' + raceId + '">');
        newRow.append('<td><input type="number" name="horses['+ counter +'][frame_number]" id="frame_number_'+ counter +'" value=""></td>');
        newRow.append('<td><input type="number" name="horses['+ counter +'][horse_number]" value=""></td>');
        newRow.append('<td><input type="text" name="horses['+ counter +'][name]" value=""></td>');
        newRow.append('<td><select name="horses['+ counter +'][color]" id="color'+ counter +'">' +
            '<option value="">-----</option>' +
            '<option value="white">White</option>' +
            '<option value="black">Black</option>' +
            '<option value="red">Red</option>' +
            '<option value="blue">Blue</option>' +
            '<option value="yellow">Yellow</option>' +
            '<option value="green">Green</option>' +
            '<option value="orange">Orange</option>' +
            '<option value="pink">Pink</option>' +
            '</select></td>');

        formContainer.append(newRow);

        var frameNumberInput = $('#frame_number_' + counter);
        var colorSelect = $('#color' + counter);

        frameNumberInput.on('input', function() {

            var frameNumber = parseInt($(this).val());
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
        counter++;
    });
});