<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $isim = $_POST["name"];
    $email = $_POST["email"];
    $sehir = $_POST["sehir"];
    $cinsiyet = $_POST["gender"];
    $cinsiyet = $_POST["myCheckbox"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["message"];

    // E-posta oluştur
    $to = "emircanakat9@gmail.com";
    $subject = "İletişim Formu - Yeni Mesaj";
    $body = "İsim: $isim\n";
    $body .= "E-posta: $email\n";
   
    $body .= "Şehir: $sehir\n";
    $body .= "Cinsiyet: $cinsiyet\n";
    $body .= "Mesaj: $mesaj\n";
  
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
