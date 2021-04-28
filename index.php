<?php
    $badWord = strtolower($_GET['badword']);
    $text = strtolower("Ma la smetti di rompermi i maroni?");

    $text = str_replace($badWord, "***", $text);

   echo "lunghezza stringa " . strlen($text) . "<br>" . $text;