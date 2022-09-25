
$(function() {
    $(document).on('click', '.btn-add', function(e) {
        e.preventDefault();
        var controlForm = $(this).closest('.fvrduplicate'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<i class="fa fa-minus" aria-hidden="true">-</i>');
    }).on('click', '.btn-remove', function(e) {
        $(this).closest('.entry').remove();
        return false;
    });

    $(document).on('click', '.btn-add', function(e) {
        e.preventDefault();
        var controlForm = $(this).closest('.services-duplicate'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<i class="fa fa-minus" aria-hidden="true">-</i>');
    }).on('click', '.btn-remove', function(e) {
        $(this).closest('.entry').remove();
        return false;
    });
});
