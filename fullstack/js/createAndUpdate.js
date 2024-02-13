$(document).ready(function (e) {
  tinymce.init({
    selector: 'textarea',  // change this value according to your HTML
    a_plugin_option: true,
    a_configuration_option: 400
  });

  $('#imageUploadForm').on('submit', (function (e) {
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),
      data: formData,
      processData: false,
    contentType: false,
      success: function (data) {
        if(data!="FILE_TYPE_ERROR"){
          $("#imgurl").val(`newsimg/${data}`)
          $("#newimgurl").attr('srcset',`newsimg/${data}`)

        }
      },
      error: function (data) {
        console.log("error");
        console.log(data);
      }
    });
  }));

});