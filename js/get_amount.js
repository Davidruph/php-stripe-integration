$(document).ready(function () {
  $(".data_amount").each(function () {
    $(this).on("click", function () {
         var amount = $(this).data('amount');
         console.log(amount);
         sessionStorage. setItem('donate_amount', amount);
         $(this).removeClass( 'btn-outline-dark');
         $(this).addClass( 'btn-dark');
    });
  });

  $(".input_amount").each(function () {
    $(this).change(function() {
         var inputamount = $(this).val();
         console.log(inputamount);
        sessionStorage.setItem('donate_amount', inputamount);
    });
  });
});
