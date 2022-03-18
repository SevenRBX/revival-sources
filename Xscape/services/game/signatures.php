<?php
class sign {

function get_signature($script)
{
    $signature = "";
    openssl_sign($script, $signature, file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/services/game/PrivateKey.pem"), OPENSSL_ALGO_SHA1);
    return base64_encode($signature);
}

}
?>