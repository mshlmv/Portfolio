(function($) {

  var $feedback = $(".js-feedback");
  var $input = $(".feedback-form .input-group__field");
  var $inputTel = $(".feedback-form input[type='tel']");

  function submitForm() {
    var name = $(".feedback-form input[name='uName']").val();
    var phone = $(".feedback-form input[name='uPhone']").val();
    var btn = $(".feedback-form button[type='submit']");

    $.ajax({
      type: "POST",
      url: "//formspree.io/mail@fiximit.ru",
      data: "name=" + name + "&phone=" + phone,
      dataType: "json",
      beforeSend: function() {
        console.log("Sent process...");
      },
      success: function() {
        console.log("succes!");
        window.location.href = "thankyou.html";
      },
      error: function() {
        console.log("unsucces!");
      }
    });
  }

  $(document).ready(function() {

    $input.focus(function() {
      $(this).parent().addClass("is-touched");
    });
    $input.blur(function() {
      $(this).parent().removeClass("is-touched");
    });

    $input.change(function() {
      if ($(this).val().length === 0) {
        $(this).parent().addClass("is-empty");
      } else {
        $(this).parent().addClass("is-changed");
      }
    });

    $inputTel.mask("+7 (000) 000-00-00");
    $feedback.validate({
      errorClass: "is-error",
      validClass: "is-success",
      errorElement: "span",

      rules: {
        uName: {
          required: true,
          minlength: 3
        },
        uPhone: {
          required: true,
          minlength: 18
        }
      },
      messages: {
        uName: {
          required: "",
          minlength: "Не меньше 3 символов"
        },
        uPhone: {
          required: "",
          minlength: "Не меньше 10 символов"
        }
      },

      highlight: function(element, errorClass, validClass) {
        $(element).parent().addClass(errorClass).removeClass(validClass);
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).parent().removeClass(errorClass).addClass(validClass);
      },

      submitHandler: function() {
        submitForm();
      }

    });

  });

})(jQuery);
