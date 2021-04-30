/* 7. data-background */


    $(document).ready(function(){
        $("[data-background]").each(function () {
            $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
            }); 
      });




    //?query for the login modal

    $('#gf-btn').click(function(e){
        $('#loginModal').modal('hide')
        $('#paymentModal').modal('show');
        e.preventDefault();
      });
