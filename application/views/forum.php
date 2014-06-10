<script language="JavaScript">
<!--
function autoResize(id){
    var newheight;
    //var newwidth;

    if(document.getElementById){
        newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
        //newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
    }

    document.getElementById(id).height= (newheight) + "px";
    //document.getElementById(id).width= (newwidth) + "px";
}
//-->
</script>


<div class="row-fluid profile">
<iframe class="span12" id="iframe1" src="<?php echo base_url('forum'); ?>" marginheight="0" height="300px;" frameborder="0" border="0" cellspacing="0" onLoad="autoResize('iframe1');" ></iframe>
</div>


<!--<IFRAME SRC="usagelogs/default.aspx" width="100%" height="200px" id="iframe1" marginheight="0" frameborder="0" onLoad="autoResize('iframe1');"></iframe>-->