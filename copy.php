<?php

copyfiles($_POST['url'], $_POST['title']);


function copyfiles($from, $to) {

    $buffer_size = 1000000; 
    $ret = 0;
    
    $_SESSION[$to] = $ret;
    $fin = fopen($from, "rb");
    $fout = fopen('upload/'.$_POST['title'], "w");
    while(!feof($fin)) {
        session_start();
        sleep(1);
        $cont += fwrite($fout, fread($fin, $buffer_size));
         
         $ret = $cont;

        $_SESSION[$to] = $ret;
        session_write_close();
    }
    fclose($fin);
    fclose($fout);
    session_start();
    unset($_SESSION[$to]); //completed copy

}


function copyfiless($filename, $filesize) {
    echo json_encode('copying ' . $filename);
}


?>

