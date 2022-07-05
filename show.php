<?php $filename=$_GET['p']??'empty';?>
<style>
*{margin:0;padding:0;}
//body{background-color:rgb(31,30,31);}
</style>
<body>
<img id="pic" src="p/<?php echo $filename; ?>.png" onclick="refresh()" />
</body>
<script>
var $pic = document.getElementById('pic');

function refresh() {
    $pic.src = $pic.src.replace(/^(p\/\d+\.png).*$/, '$1')+'?_='+(new Date()*1000/1000);
}
</script>
