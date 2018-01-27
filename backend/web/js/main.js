$(document).ready(function () {
    checkForColor();
});

function checkForColor() {
    if($('#prod-prop-type-dropdown').val() == 1) {
        $('#colPick').ColorPicker({
            flat: true,
            onSubmit: function (hsb, hex, rgb) {
                $('#colorpickerField').val(hex);
            },
        });
    }
}