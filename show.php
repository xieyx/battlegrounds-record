<?php $filename=$_GET['p']??'empty';?>
<style>*{margin:0;padding:0;}</style>
    <img id="pic" src="p/<?php echo $filename; ?>.png" onclick="refresh()" />
<div id="closeBtn" onclick="hide()" style="position: absolute; top: 0; display: none;cursor: pointer; width: 20px; height: 20px; text-align: center; line-height: 20px; background-color: #FFFFFF; color: #333;">x</div>
<script>
var $pic = document.getElementById('pic');

function refresh() {
    $pic.src = $pic.src.replace(/^(p\/\d+\.png).*$/, '$1')+'?_='+(new Date()*1000/1000);
}
</script>
