
    <?php
    $headers = "From: system.WV@Jugend-Forscht";
    $headers .="Content-type: text/html\r\n";
    $headers .= "Reply-To: system.wv.jugendForscht@gmail.com";
    echo "hi";
    echo mail("system.wv.jugendForscht@gmail.com", "Titel", "<h1>HI</h1>", $headers);
    ?>