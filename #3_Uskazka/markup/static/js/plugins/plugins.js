$('.security-guarantee a').popover({
  animation: false,
  content: 'Мы не публикуем и не распространяем Ваши персональные данные третьим лицам',
  placement: 'bottom',
  trigger: 'hover'
})

jQuery(function($){
  $('input[name="tel"]').mask("+7 (999) 999-99-99");
});
