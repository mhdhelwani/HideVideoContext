(function ($) {
    $.fn.hidevideocontextfn = function () {
        $(".mejs-container").contextmenu(function () {
            return false;
        });
        $("#ilMepPreviewContent").load(function () {$("#ilMepPreviewContent").contents().find(".mejs-container").contextmenu(function () {return false;});});
    };
})(jQuery);