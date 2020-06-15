<script>

document.addEventListener( 'wpcf7submit', function( event )){
    window.dataLayer.push({
        "event" : "formSubmit",
        "formId" : event.detail.contactFormId,
        "fields" : event.detail.inputs
    })
}

</script>