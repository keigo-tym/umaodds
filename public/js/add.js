$(document).ready(function() {
    var formContainer = $('#form-container');
    var addButton = $('#add-field-button');
    var counter = 0;

    addButton.on('click', function() {
        var newRow = $('<tr>');
        newRow.append('<input type="hidden" name="race_id" value="' + raceId + '">');
        newRow.append('<td><input type="number" name="horses['+ counter +'][frame_number]" value=""></td>');
        newRow.append('<td><input type="number" name="horses['+ counter +'][horse_number]" value=""></td>');
        newRow.append('<td><input type="text" name="horses['+ counter +'][name]" value=""></td>');
        newRow.append('<td><select name="horses['+ counter +'][color]">' +
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

        counter++;
    });
});