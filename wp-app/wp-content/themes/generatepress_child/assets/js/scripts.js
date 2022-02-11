
jQuery('document').load(function(){
jQuery("#myIFrame").on("load", function () {
    console.log('insied');
    let head = jQuery("#myIFrame").contents().find("head");
    let css = '<style> .container.loaded {    background: red;    box - shadow: none;    margin - top: 0;} .hs-form__field__label {    font - weight: 500;    line - height: 20px;    margin - bottom: 4px;    color: red;}</style>';
    jQuery(head).append(css);
});

});