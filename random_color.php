<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $boxes = [1,3,4,5,5,];
    foreach ($boxes as $box) {
        $random_color = substr(str_shuffle("0fe123456"), 0, 6);
        $box = "<div class='box' style='background-color: #".$random_color.";'><pclass='color'>#".$random_color."</div>";
        echo $box;
        echo '<script type="text/javascript>
        let randomHex = Math.floor(Math.random() * 0xffffff).toString(16);
        randomHex = `#${randomHex.padStart(6, "0")}`;
    
        </script>';
    }
    // foreach ($boxes as $box) {
    //     # code...
    //     $random_color = str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
    //     $box = "<div class='box' style='background-color: #".$random_color.";'><pclass='color'>#".$random_color."</div>";
    //     echo $box;
    //     echo '<script type="text/javascript>
    //     let randomHex = Math.floor(Math.random() * 0xffffff).toString(16);
    //     randomHex = `#${randomHex.padStart(6, "0")}`;

    //     </script>';
    // }
}
?>
<link rel="stylesheet" href="style.css">