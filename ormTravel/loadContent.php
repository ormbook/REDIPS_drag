<?php
    //$url = 'http://www.anothersite.com';
$url=$_REQUEST['id'];       

?>
<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo $url;?>"></iframe>
</div>

