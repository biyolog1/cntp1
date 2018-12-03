$(document).ready(function () {

    $(".remove-btn").click(function (e) {
       var  $data_url=$(this).data("url");
        swal({
            title: 'Emin misiniz?',
            text: "Dikkat Bu işlemi geri alamazsınız!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, Siliyorum!',
            cancelButtonText: 'Hayır, Vazgeçtim!'
        }).then(function(result) {
            if (result.value) {

                    window.location.href=$data_url;
                swal(
                    'Silindi!',
                    'Veri başarılı şekilde silindi.',
                    'success'
                )

            }
        });
    })
})