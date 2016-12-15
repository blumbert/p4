$('.hidden-form').submit(function() {
    return confirm("Are you sure you want to remove this shoe from your collection?");
});

// hide company and model fields when a user selects an existing shoe on the create page
$(function() {
    if ($('#f_existingShoeId').val() != 0)
        $('.form-toggle').hide();
    else
        $('.form-toggle').show();
});

$('#f_existingShoeId').change(function() {
    if ($(this).val() != 0)
        $('.form-toggle').hide();
    else
        $('.form-toggle').show();
});
