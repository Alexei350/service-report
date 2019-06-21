function demoUpload(imagem) {
    var $uploadCrop;

    function readFile(input) {
         if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#btn_upload').addClass('ready');
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $uploadCrop = $('#preview_usuario').croppie({
        viewport: 
        {
            width: 250,
            height: 250,
            type: 'circle'
        },
        enableExif: true
    });

    $uploadCrop.croppie('bind', {
        url: '/img/usuarios/img_user_' + imagem + '.png'
    });

    $('#upload').on('change', function () { readFile(this); });

    $('.upload-result').on('click', function (ev) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'original'
        }).then(function (resp) {
            $('#imagebase64').val(resp);
            $.post('files/imagem.php',{imagem: 'teste'},function(data){
                alert(data)
            })
        });
    });
}