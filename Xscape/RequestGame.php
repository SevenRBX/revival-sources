<?php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "localhost:213/game" . $_GET['id']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
?>
