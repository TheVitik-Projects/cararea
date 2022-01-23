<?php
$token = "1784596480:AAFAtx9scFhZJK8TWWteA-ygW0FmIsmNrG4";
$admin ="608042378";
$data = [
            'text' => "Саша здоровенький будь!",
            'chat_id' => "$admin"
        ];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
?>