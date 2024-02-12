$(document).ready(function() {
    $("#btn-submit").click(function(e) {
      e.preventDefault();
      $("#alerts").show()
      $.ajax({
        type: "POST",
        url: "control.php",
        data: {
            name:document.querySelector("#name").value,//"testuser"
            email:document.querySelector("#email").value//"testemail@email.hu"
        },
        success: function(result) {
            const res = JSON.parse(result)
            if(!res.success){
              const alertText = '<div class="alert alert-success alert-dismissible fade show" role="alert" id="successalert">   <p id="msgs"></p>              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>'
              $("#alertdiv").append(alertText)
              const msg=`ok de hibás adat| name: ${res.errors.name}`
              $('#msgs').text(msg)
            }else{
              const alertText = '<div class="alert alert-success alert-dismissible fade show" role="alert" id="successalert">   <p id="msgs"></p>              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>'
              $("#alertdiv").text(alertText)
              const msg =`${res.message}`
              $('#msgs').append(msg)
            }
          
          
        },
        error: function(result) {
          const alertText ='<div class="alert alert-danger alert-dismissible fade show" role="alert" id="dangeralert">          <p id="msgd"></p>          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        </div>'
          $("#alertdiv").append(alertText)
          $("#msgd").text("error")
        }
      });
    });

    $(".btn-close").click(()=>{
      $("#alerts").hide()
    })
})