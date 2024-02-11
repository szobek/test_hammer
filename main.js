$(document).ready(function() {
    $("#btn-submit").click(function(e) {
      e.preventDefault();
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
                alert(`ok de hibás adat| name: ${res.errors.name}`);
            }else{
                alert(`${res.message}`)
            }
          
          
        },
        error: function(result) {
          alert('error');
        }
      });
    });
})