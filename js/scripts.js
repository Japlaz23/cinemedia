$(document).ready(function() {
  $('#modalDetalle').on('show.bs.modal', function (event) {
    var card = $(event.relatedTarget);
    var titulo = card.data('titulo');
    var descripcion = card.data('descripcion');
    var imagen = card.data('imagen');

    var modal = $(this);
    modal.find('.modal-title').text(titulo);
    modal.find('#modalDescripcion').text(descripcion);
    modal.find('#modalImagen').attr('src', imagen).attr('alt', titulo);
  });
});
