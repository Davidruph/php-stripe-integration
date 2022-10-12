$(document).on("click touch", "#subscribe", function (e) {
  e.preventDefault();
  var email = $("#email").val();
  const validRegex =
    /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (!email) {
    swal("Oops!", "Pls enter your email", "error");
  } else if (!email.match(validRegex)) {
    swal("Oops!", "Pls enter a valid email", "error");
  } else {
    var request = $.ajax({
      url: "subscribe.php",
      type: "POST",
      data: { email: email },
      dataType: "html",
    });

    request.done(function (msg) {
      if (msg == "Saved") {
        swal("", "Thank you for subscribing", "success");
      }
    });

    request.fail(function (jqXHR, textStatus) {
      alert("Request failed: " + textStatus);
    });
  }
});
