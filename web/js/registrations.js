var regTypeSelector = '[name="Registrations[type]"]'
function checkRegistrationType() {
    var type = $(regTypeSelector)
    var is_employer = $('[name="Registrations[is_employer]"]').closest('div')
    var company_name = $('[name="Registrations[company_name]"]').closest('div')
    if (type.val() == 'user') {
        is_employer.show()
        company_name.hide()
    }
    else if (type.val() == 'company') {
        is_employer.hide()
        company_name.show()
    }
}
$(document).ready(function() {
    checkRegistrationType()
});
$(regTypeSelector).on('change', checkRegistrationType)