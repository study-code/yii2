<span id="element_id"></span>
<script type="text/javascript" src="/lib/swfupload/swfupload.js"></script>
<script type="text/javascript">
    var swfu;

    window.onload = function () {
        swfu = new SWFUpload({
            upload_url : "/index.php?r=country/upload",
            flash_url : "/lib/swfupload/swfupload.swf",
            file_size_limit : "20 MB",
            button_placeholder_id : "element_id",
            button_image_url : "http://www.swfupload.org/button_sprite.png",
            button_width : 61,
            button_height : 22,
            button_text : "点击",
            button_text_style : ".redText { color: #FF0000; }",
            button_text_left_padding : 3,
            button_text_top_padding : 2,
        });
    };
</script>