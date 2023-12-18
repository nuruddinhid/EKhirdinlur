<?php

function generateDownloadLink($filename, $folder)
{
    if (!empty($filename)) {
        echo '<a href="../berkas/' . $folder . '/' . $filename . '" download>Unduh '. '</a>';
    } else {
        echo 'Belum diupload';
    }
}
?>
