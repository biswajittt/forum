<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" />
<a id="popuplink" href="#inline" style="display:none;"></a>
<div id="inline" style="display:none;text-align:center;">
    <h3 style="margin-top:20px;">Welcome to Forum</h3>
    <p>Click on this button ' <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
        </svg> ' for Login or Registration</p>
    <p><a href="javascript:;" onclick="jQuery.fancybox.close();" style="background-color:#333;padding:5px 10px;color:#fff;border-radius:5px;text-decoration:none;">Close</a></p>
</div>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.js"></script>
<script>
    jQuery(document).ready(function() {
        function openFancybox() {
            setTimeout(function() {
                jQuery('#popuplink').trigger('click');
            }, 500);
        };

        var visited = jQuery.cookie('visited');
        if (visited == 'yes') {

        } else {
            openFancybox();
        }
        jQuery.cookie('visited', 'yes', {
            expires: 365
        });
        jQuery("#popuplink").fancybox({
            modal: true,
            maxWidth: 400,
            overlay: {
                closeClick: true
            }
        });
    });
</script>