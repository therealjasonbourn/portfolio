<?php

$downloads_list = ["JasonBourn_CV_2.pdf"];

if (isset($_GET['file'])) {
    if(in_array($_GET['file'], $downloads_list)){
        $file = 'files/' . basename($_GET['file']); // Add security checks
        if (file_exists($file)) {
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            readfile($file);
            exit;
        }
    }
    else {
        ?>
        <script>
            alert("Error, file not found.");
        </script>
        <?php
        header("Location: /index.php");
    }
}
?>