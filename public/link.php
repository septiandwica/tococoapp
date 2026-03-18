<?php

/**
 * Laravel cPanel Storage Link Workaround
 * 
 * SCRIPT INI DIGUNAKAN UNTUK MEMBUAT SYMLINK ANTARA STORAGE DAN PUBLIC
 * KARENA DI CPANEL SERINGKALI TIDAK ADA AKSES TERMINAL UNTUK:
 * php artisan storage:link
 */

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/../storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';

if (file_exists($linkFolder)) {
    echo "Folder storage sudah ada. Menghapus untuk reset...<br>";
    if (is_link($linkFolder)) {
        unlink($linkFolder);
    }
}

if (symlink($targetFolder, $linkFolder)) {
    echo "<b>Sukses!</b> Symlink folder storage berhasil dibuat.<br>";
    echo "Target: $targetFolder <br>";
    echo "Link: $linkFolder";
} else {
    echo "<b>Gagal!</b> Terjadi kesalahan saat membuat symlink.";
}
