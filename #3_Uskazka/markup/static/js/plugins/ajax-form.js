$(document).ready(function() {

  $('.js-ajax_form').on('submit', function() {
    var that = $(this),
        action = that.attr('action'),
        method = that.attr('method'),
        data = {};

    that.find('[name]').each(function(index, value) {
      var that = $(this),
          name = that.attr('name'),
          value = that.val();
      data[name] = value;
    });

    resetErrors();

    $.ajax({
      url: action,
      method: method,
      data: data,
      success: function(response) {
        if (response == 'sent') {
          console.log('Полетели!');
          window.location.href = "/thankyou.html";
        } else {
          var json = JSON.parse(response);
          console.log(json);
           $.each(json, function(key, value) {
            console.log(key + " => " + value);
            var errorMessage = '<span class="error">' + value + '</span>';
            that.find('input[name="' + key + '"]').addClass('inputTxtError').after(errorMessage);
           });
        }

      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log('Сервер вернул ошибку!');
        console.log(xhr.status); // пoкaжeм oтвeт сeрвeрa
        console.log(thrownError); // и тeкст oшибки
      }
    });

    return false;

  });

  function resetErrors() {
    $('form input').removeClass('inputTxtError');
    $('span.error').remove();
  }

});
