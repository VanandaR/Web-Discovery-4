$(function() {
    // file upload
    altair_form_file_upload.init();

});


altair_form_file_upload = {
    init: function() {

        var progressbar = $("#file_upload-progressbar"),
            bar         = progressbar.find('.uk-progress-bar'),
            settings    = {
                action: '/', // Target url for the upload
                allow : '*.(jpg|jpeg|gif|png)', // File filter
                loadstart: function() {

                    var input=$("#file_upload-select");
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#preview_bukti_pembayaran').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                    bar.css("width", "0%").text("0%");
                    progressbar.removeClass("uk-hidden");
                },
                progress: function(percent) {
                    percent = Math.ceil(percent);
                    bar.css("width", percent+"%").text(percent+"%");
                },
                allcomplete: function(response,xhr) {

                    bar.css("width", "100%").text("100%");
                    setTimeout(function(){
                        progressbar.addClass("uk-hidden");

                    }, 250);
                    setTimeout(function() {

                        // function previewKonten(input) {
                        //
                        //     if (input.files && input.files[0]) {
                        //         var reader = new FileReader();
                        //         reader.onload = function (e) {
                        //             $('#preview_bukti_pembayaran').attr('src', e.target.result);
                        //         }
                        //         reader.readAsDataURL(input.files[0]);
                        //     }
                        // }
                        // $("#file_upload-select").change(function(){
                        //     previewKonten(this);
                        // });

                        UIkit.notify({
                            message: "Upload Completed",
                            pos: 'top-right'
                        });
                    },280);

                }
            };


        var select = UIkit.uploadSelect($("#file_upload-select"), settings),
            drop   = UIkit.uploadDrop($("#file_upload-drop"), settings);
    }

};