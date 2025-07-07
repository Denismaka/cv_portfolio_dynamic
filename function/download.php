<?php
$filename = "Cv Dénis Maka.pdf";
$filepath = __DIR__ . "/../assets/cv/" . $filename;
if (file_exists($filepath)) {
    // Désactive la mise en cache
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    // Force le téléchargement
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . filesize($filepath));
    // Nettoie le buffer de sortie
    ob_clean();
    flush();
    readfile($filepath);
    exit;
} else {
    http_response_code(404);
    echo "<h2 style='color:red;text-align:center;margin-top:2em;'>Fichier introuvable.</h2>";
}
