jQuery(document).ready(function($) {
  var faqTrigger = $(".faq__question");

  //show faq content clicking on faqTrigger
  faqTrigger.on("click", function(event) {
    event.preventDefault();
    $(this).toggleClass("faq__question--minus", "faq__question--plus");
    $(this).next(".faq__answer").slideToggle(200);
  });
});
