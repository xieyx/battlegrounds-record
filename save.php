<?php
$filename = $_POST['fileName'] ?? '';
if (empty($filename) || $filename === 'empty') {
    return;
}

file_put_contents('/share/p/'.$filename.'.png', base64_decode(str_replace('data:image/png;base64,', '', $_POST['fileData'])));
