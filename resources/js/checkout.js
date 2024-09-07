import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import axios from 'axios';
import $ from "jquery";
import toastr from "toastr";
import "toastr/build/toastr.min.css";

document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#tanggal-masuk", {
        dateFormat: "Y-m-d",
    });

    flatpickr("#tanggal-keluar", {
        dateFormat: "Y-m-d",
    });
});

$('#booking-form').on('submit', function(event) {
    event.preventDefault();

    const apiUrlV1 = $('input[name="api_url_v1"]').val();
    var formData = {
        user_email: $('input[name="user_email"]').val(),
        room_type_id: $('input[name="room_type_id"]').val(),
        start_date: $('input[name="start_date"]').val(),
        end_date: $('input[name="end_date"]').val(),
        amount: $('input[name="amount"]').val(),
        name: $('input[name="name"]').val(),
        phone: $('input[name="phone"]').val(),
        side: "client"
    };
    console.log(apiUrlV1);

    axios.post(`${apiUrlV1}booking/generateToken`, formData)
    .then(data => {
        if (data) {
            console.log('DATA:', data);
            console.log('Snap token:', data.data.snap_token); 
            snap.pay(data.data.snap_token, {
                onSuccess: function(result) {
                    console.log('Payment success:', result);
                    window.location.href = '/historyTransaction';
                },
                onPending: function(result) {
                    window.location.href = '/historyTransaction';
                },
                onError: function(result) {
                    console.log('Payment error:', result);
                    window.location.href = '/historyTransaction';
                },
                onClose: function() { 
                    window.location.href = '/historyTransaction';    
                }
            });
        }
        else {
            // Error Fetch data tidak ada
            toastr.options = {
                "positionClass": "toast-top-center",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "3000",
                "debug": false,
                "newestOnTop": false,
            };
            toastr.error(`Booking Tidak Ditemukan`);
            console.error('Fetch berhasil tapi data tidak ada / snap token tidak ada');
        }
    })
    // Error Fetch 
    .catch(error => {
        console.error('Error Fetch:', error);
        if (error.response.status === 403) {
            toastr.options = {
                "positionClass": "toast-top-center",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "3000",
                "debug": false,
                "newestOnTop": false,
            };
            toastr.error('Akses ditolak. Lakukan Verifikasi Email di Profil.');
        }else{
            toastr.options = {
                "positionClass": "toast-top-center",
                "preventDuplicates": true,
                "progressBar": true,
                "timeOut": "3000",
                "debug": false,
                "newestOnTop": false,
            };
            toastr.error(`${error}`);

        }
        
    });
    
});