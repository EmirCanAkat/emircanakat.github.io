<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $isim = $_POST["text"];
    $email = $_POST["email"];
    $not = $_POST["radio"];
    $sehir = $_POST["checkbox"];
    $konu = $_POST["subject"];
    $cinsiyet = $_POST["gender"];

    // E-posta oluştur
    $to = "emircanakat9@gmail.com";
    $subject = "İletişim Formu - Yeni Mesaj";
    $body = "İsim: $isim\n";
    $body .= "E-posta: $email\n";
   
    $body .= "Şehir: $sehir\n";
    $body .= "Cinsiyet: $cinsiyet\n";
    $body .= "Konu: $konu\n";
    $body .= "Mesaj: $not\n";
  
    // E-posta başlıklarını ayarla
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // E-postayı gönder
    if (mail($to, $subject, $body, $headers)) {
        // İşlem tamamlandıktan sonra yönlendirme veya başka bir işlem yapılabilir
        // Örneğin, teşekkür sayfasına yönlendirme
        header("Location: contact.html");
        exit();
    } else {
        echo "E-posta gönderme işlemi başarısız oldu.";
    }
}
?>
