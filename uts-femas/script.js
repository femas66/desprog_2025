$(document).ready(function() {

    $('.container').hide().fadeIn(1000);

    $('#tombolKirim').hover(
        function() {
            $(this).css('background-color', '#0056b3');
        },
        function() {
            $(this).css('background-color', '#007bff');
        }
    );

    $('#formPemesanan').on('submit', function(event) {
        event.preventDefault();

        let isValid = true;

        const nama = $('#nama').val().trim();
        if (nama === '') {
            isValid = false;
            $('#nama').next('.error-message').text('Nama tidak boleh kosong.').slideDown();
        } else {
            $('#nama').next('.error-message').slideUp();
        }

        const email = $('#email').val().trim();
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (email === '') {
            isValid = false;
            $('#email').next('.error-message').text('Email tidak boleh kosong.').slideDown();
        } else if (!emailPattern.test(email)) {
            isValid = false;
            $('#email').next('.error-message').text('Format email tidak valid.').slideDown();
        } else {
            $('#email').next('.error-message').slideUp();
        }

        const acara = $('#acara').val();
        if (acara === '') {
            isValid = false;
            $('#acara').next('.error-message').text('Silakan pilih acara.').slideDown();
        } else {
            $('#acara').next('.error-message').slideUp();
        }
        

        const jumlah = $('#jumlah').val();
        if (jumlah === '' || parseInt(jumlah) < 1) {
            isValid = false;
            $('#jumlah').next('.error-message').text('Jumlah tiket minimal 1.').slideDown();
        } else {
            $('#jumlah').next('.error-message').slideUp();
        }

        if (isValid) {
            $(this).slideUp(500, function() {

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#hasil-ajax').html(response).hide().fadeIn(1000);
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat mengirim data.');
                        $('#formPemesanan').slideDown();
                    }
                });
            });
        }
    });
});