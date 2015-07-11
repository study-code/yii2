<script type="text/javascript" src="/lib/swfupload/swfupload.js"></script>
<script type="text/javascript">
    var swfu;

    window.onload = function () {
        swfu = new SWFUpload({
            upload_url : "/index.php?r=country/upload",
            flash_url : "/lib/swfupload/swfupload.swf",
            file_size_limit : "20 MB"
        });
    };
</script>