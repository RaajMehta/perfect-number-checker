$(function () {
    $('#checkResult').click(function () {
        var value = $('#input_value').val();
        $.post("perfect_number.php", {value: value}).done(function (data) {
            if (data === "Please enter number") {
                $('#result').css("color", "red").html(data);
            } else {
                $('#result').css("color", "green").html(data);
            }
        });
        $('#input_value').val('');
    });
});