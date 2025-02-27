<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST["content"] ?? "";

    // Dosyaya yazma işlemi
    $file = "dosya.txt";
    if (file_put_contents($file, $content) !== false) {
        echo "Dosya başarıyla güncellendi!";
    } else {
        echo "Dosya kaydedilirken bir hata oluştu.";
    }
}
?>
