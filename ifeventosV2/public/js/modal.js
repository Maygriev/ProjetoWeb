$(document).ready(function () {
    $('#modalmotivo').on('show.bs.modal', function (event) {
        var button = $("#reprovar")
        button = $(event.relatedTarget)
        recipient = button.data('idproposta')
        var modal = $(this)
        modal.find('.modal-body input[name="idproposta"]').val(recipient)
    })
})
