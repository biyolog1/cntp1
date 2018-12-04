$(document).ready(function () {

    $(".sortable").sortable();

    $(".remove-btn").click(function () {
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

    $(".isActive").change(function () {

        var $data=$(this).prop("checked");
        var $data_url= $(this).data("url");
        if (typeof $data !=="undefined" && typeof $data_url !=="undefined"){
            $.post($data_url,{data: $data}, function (response) {});
        }
    })

    $(".sortable").on("sortupdate",function (event,ui) {

        var $data = $(this).sortable("serialize");
        var $data_url= $(this).data("url");
        $.post($data_url,{data : $data},function (response) {})
    })

    var uploadSection  = Dropzone.forElement("#dropzone");

    uploadSection.on("complete",function (file) {

        var $data_url = $("#dropzone").data("url");

       $.post($data_url,{},function (response) {

           $(".image_list_container").html(response);
           $('[data-switchery]').each(function(){
               var $this = $(this),
                   color = $this.attr('data-color') || '#188ae2',
                   jackColor = $this.attr('data-jackColor') || '#ffffff',
                   size = $this.attr('data-size') || 'default'

               new Switchery(this, {
                   color: color,
                   size: size,
                   jackColor: jackColor
               });
           });

       });
    })
})