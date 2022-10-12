var current_fs, next_fs, previous_fs; //fieldsets
let data_amount = sessionStorage. getItem('donate_amount');
console.log(data_amount);
$('#data_amount').html(data_amount);
$('#data_amount_val').val(sessionStorage. getItem('donate_amount'));
if (data_amount) {
  $('.first_amount').hide();
} else {
  $('.second_amount').hide();
}
$(document).on("click touch", ".payment_continue", function () {
  var currency = $("#currency").val();

  if (!currency) {
    $("#currency_error").html("Pls select prefered currency");
  } else {
    $("#currency_error").html("");
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    //show the next fieldset
    
    next_fs.show();
    current_fs.hide();
  }
});

$(document).on("click touch", ".first", function () {
  var email = $("#email").val();
  var phone = $("#phone").val();
  var firstname = $("#firstname").val();
  var lastname = $("#lastname").val();
  var fullname = $("#fullname");
  var email_sum = $("#email_sum");
  var phone_sum = $("#phone_sum");
  var f_sum = $("#f_sum");

  const validRegex =
    /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (email == "") {
    $("#email_error").html("Email is required");
  } else if (!email.match(validRegex)) {
    $("#email_error").html("Enter a valid email");
  } else if (firstname == "") {
    $("#firstname_error").html("First name is required");
  } else if (lastname == "") {
    $("#lastname_error").html("Last name is required");
  } else {
    $("#email_error").html("");
    $("#phone_error").html("");
    $("#firstname_error").html("");
    $("#lastname_error").html("");
    fullname.html(firstname + " " + lastname);
    email_sum.html(email);
    phone_sum.html(phone);
    f_sum.html(firstname);

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    //show the next fieldset
    next_fs.show();
    current_fs.hide();
  }
});
$(document).on("click touch", ".second", function () {
  var address = $("#address").val();

  if (!address) {
    $("#address_error").html("Address is required");
  } else {
    $("#address_error").html("");
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    //show the next fieldset
    var ad = document.getElementById("address").value;
    var holder = document.getElementById("ad_holder");
    holder.innerHTML = ad;
    next_fs.show();
    current_fs.hide();
  }
});
$(document).on("click touch", ".third", function () {
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  //show the next fieldset

  next_fs.show();
  current_fs.hide();
});

$(document).on("click touch", ".previous-payment", function () {
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  //de-activate current step on progressbar
  $("#progressbar li")
    .eq($("fieldset").index(current_fs))
    .removeClass("active");
  //show the previous fieldset
  previous_fs.show();
  //hide the current fieldset with style
  current_fs.hide();
});

$(document).on("click touch", ".previous-first", function () {
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  //de-activate current step on progressbar
  $("#progressbar li")
    .eq($("fieldset").index(current_fs))
    .removeClass("active");
  //show the previous fieldset
  previous_fs.show();
  //hide the current fieldset with style
  current_fs.hide();
});

$(document).on("click touch", ".previous-second", function () {
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  //de-activate current step on progressbar
  $("#progressbar li")
    .eq($("fieldset").index(current_fs))
    .removeClass("active");
  //show the previous fieldset
  previous_fs.show();
  //hide the current fieldset with style
  current_fs.hide();
});
$(document).on("click touch", ".previous-third", function () {
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  //de-activate current step on progressbar
  $("#progressbar li")
    .eq($("fieldset").index(current_fs))
    .removeClass("active");
  //show the previous fieldset
  previous_fs.show();
  //hide the current fieldset with style
  current_fs.hide();
});

$(document).on("click touch", "#pay_btn", function (e) {
  e.preventDefault();
  var firstname = $("#firstname").val();
  var phone = $("#phone").val();
  var email = $("#email").val();
  var lastname = $("#lastname").val();
  var address = $("#address").val();
  var currency = $("#currency").val();
  let data_amount = sessionStorage. getItem('donate_amount');
  if (data_amount) {
    var amount = $("#data_amount_val").val();
  } else {
    var amount = $("#amount").val();
  }

  if (!amount) {
    $("#amount_error").html("Amount is required");
  } else {
    var request = $.ajax({
      url: "pay.php",
      type: "POST",
      data: {
        email: email,
        firstname: firstname,
        lastname: lastname,
        phone: phone,
        address: address,
        amount: amount,
        currency: currency,
      },
      dataType: "html",
    });

    request.done(function (msg) {
      window.location = msg;
    });

    request.fail(function (jqXHR, textStatus) {
      alert("Request failed: " + textStatus);
    });
  }
});
