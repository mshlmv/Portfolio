$(document).ready(function() {

  $('#order').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var heading = button.data('heading') // Extract info from data-* attributes
    var subtitle = button.data('subtitle')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text(heading)
    modal.find('.modal-subtitle').text(subtitle)
    // modal.find('.modal-body input').val(recipient)
  })
  $('#project').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var heading = button.data('heading')
    var subtitle = button.data('subtitle')
    var dimensions = button.data('dimensions')
    var square = button.data('square')
    var price = button.data('price')
    var picking = button.data('picking')
    var render = button.data('render')
    var scheme = button.data('scheme')
    var photo = button.data('photo')
    var render_thumb = button.data('render_thumb')
    var scheme_thumb = button.data('scheme_thumb')
    var photo_thumb = button.data('photo_thumb')
    var modal = $(this)
    modal.find('.modal-title').text(heading)
    modal.find('.modal-subtitle').text(subtitle)
    modal.find('.project__dimensions').text(dimensions)
    modal.find('.project__square').text(square)
    modal.find('.project__price').text(price)
    modal.find('.picking-text').html(picking)
    modal.find('.image-render img').attr('src', render)
    modal.find('.image-scheme img').attr('src', scheme)
    modal.find('.image-photo img').attr('src', photo)
    modal.find('.image-render_thumb img').attr('src', render_thumb)
    modal.find('.image-scheme_thumb img').attr('src', scheme_thumb)
    modal.find('.image-photo_thumb img').attr('src', photo_thumb)
  })

});
