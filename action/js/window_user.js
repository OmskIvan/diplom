let area = document.getElementById("area");
let auto = document.getElementById("auto");
let email_phone = document.getElementById("email_or_phone");
let code_ver = document.getElementById("code_verification");
let reg = document.getElementById("reg");

$(".but_close").on('click', function(){
    area.hidden = true;
})

user.onclick = function() 
{
   area.hidden = false;
   auto.hidden = false;
}
in_add_code.onclick = function()
{
    auto.hidden = true;
    email_phone.hidden = false;
}
$(document).ready(function(){
    $("#add_code").on('click', function(){
        let add_code = $('input[name="add_code"]').val();
        if(add_code)
        {
            $.ajax({
                method: "POST",
                url: "components/bd/registration.php",
                data: { email: add_code }
            })
            .done(function() {
                email_phone.hidden = true;
                code_ver.hidden = false;
            });
        }
    });
    $("#get_code").on('click', function(){
        let get_code = $('input[name="get_code"]').val();
        if(get_code)
        {
            $.ajax({
                method: "POST",
                url: "components/bd/registration.php",
                data: { code: get_code }
            })
            .done(function(bool) {
                
                if(bool)
                {
                    code_ver.hidden = true;
                    reg.hidden = false;
                }
                else
                {
                    code_ver.hidden = true;
                    email_phone.hidden = false;
                }
            });
        }
    })
    
    $('#form_reg').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
    
        $.ajax({
          method: "POST",
          url: 'components/bd/registration.php',
          data: formData,  
        }).done(function(bool) {
                area.hidden = true;
        });
    });
})
 