$(document).ready(function () {
    // ketika tombol simpan di klik 
    $('#btn_save').click(function () {

        // init variabel
        var tny = $('#txt_tny').val();
        var a = $('#txt_a').val();
        var b = $('#txt_b').val();
        var c = $('#txt_c').val();
        var d = $('#txt_d').val();
        var e = $('#txt_e').val();
        var knc = $('#txt_knc').val();
        var aktf = $('#txt_aktf').val();

        // validasi control
        if (tny == "") {
            alert('Pertanyaan sebagai soal masih kosong');
            $('#txt_tny').focus()
            return false;
        }
        else if (a == "") {
            alert('pilihan (a) masih kosong');
            $('#txt_a').focus()
            return false;
        }
        else if (b == "") {
            blert('pilihan (b) masih kosong');
            $('#txt_a').focus()
            return false;
        }
        else if (c == "") {
            alert('pilihan (c) masih kosong');
            $('#txt_a').focus()
            return false;
        }
        else if (d == "") {
            alert('pilihan (d) masih kosong');
            $('#txt_a').focus()
            return false;
        }
        else if (e == "") {
            alert('pilihan (e) masih kosong');
            $('#txt_a').focus()
            return false;
        }
        else if (knc == "") {
            alert('kunci jawaban masih kosong');
            $('#txt_knc').focus()
            return false;
        }
        else {
            return true;
        }
    });
});