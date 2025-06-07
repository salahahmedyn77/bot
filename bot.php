<?php

//ضع هنا توكن البوت الخاص بك الذي حصلت عليه من BotFather
$botToken = "8090822485:AAGoPjvxwd3Zx1_K8P3Fzpe4r156A4-Wgog";
$apiUrl = "https://api.telegram.org/bot" . $botToken;

//----- لا تعدل أي شيء بعد هذا السطر -----//

// استقبال البيانات المرسلة من تليجرام
$update = file_get_contents("php://input");
$update = json_decode($update, TRUE);

// التأكد من وجود رسالة نصية
if (isset($update["message"]["text"])) {
    
    // الحصول على معلومات الرسالة
    $chatId = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];

    // التحقق إذا كانت الرسالة هي "صلاح"
    if ($message == "صلاح") {
        // نص الرد
        $responseText = "هلا وغلا";

        // إرسال الرد
        file_get_contents($apiUrl . "/sendMessage?chat_id=" . $chatId . "&text=" . urlencode($responseText));
    }
}

?>
