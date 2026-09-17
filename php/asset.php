<?php

/**
 * Restituisce il percorso di un file statico con l'aggiunta di un parametro di
 * versione basato sulla data di ultima modifica del file.
 *
 * Serve a forzare i browser (e le cache di Altervista) a riscaricare l'immagine
 * ogni volta che viene ricaricata via SFTP, invece di mostrare la vecchia
 * versione - o niente - agli utenti che hanno gia' visitato il sito.
 */
function asset(string $path): string
{
    $file = __DIR__ . "/../" . ltrim($path, "/");

    if (is_file($file))
        return $path . "?v=" . filemtime($file);

    return $path;
}
