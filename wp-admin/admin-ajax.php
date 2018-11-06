<?php 
    $action = (string)filter_input(INPUT_POST, 'action');
    if($action === 'hg_mailchimp_register') {
        echo 'Sikeres feliratkozás';
    } else if(!empty($_POST["category"])) {
        $fileName = "content" . implode('_', $_POST["category"]) . ".html";

        $myfile = fopen(__DIR__ . '/' . $fileName, "r") or die("Unable to open file!");
        echo fread($myfile,filesize($fileName));
        fclose($myfile);

    }
?>