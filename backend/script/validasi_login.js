$(document).ready(function () {
    $('#btn_log').click(function () {

        var user = $('#tx_user').val();
        var pass = $('#tx_pass').val();

        if (user == "" && pass == "") {
            alert('username dan password masih kosong');
            $('#tx_user').focus()
            return false;
        }
        else if (user == "") {
            alert('username masih kosong');
            $('#tx_user').focus()
            return false;
        }
        else if (pass == "") {
            alert('password masih kosong');
            $('#tx_pass').focus()
            return false;
        }
        else {
            return true;
        }
    });
});