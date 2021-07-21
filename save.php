<?php

file_put_contents('p/'.$_POST['fileName'].'.png', base64_decode(str_replace('data:image/png;base64,', '', $_POST['fileData'])));
