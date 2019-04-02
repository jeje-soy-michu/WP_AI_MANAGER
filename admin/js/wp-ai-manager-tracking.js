
function update_form() {
  const state = !jQuery('#gtm-active').is(':checked')
  jQuery('.enable-gtm').prop( "disabled", state )
}

jQuery('document').ready(() => {
  update_form()
  jQuery('#gtm-active').click(() => update_form())
});
