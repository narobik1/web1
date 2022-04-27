<?php


if (isset($_POST['kuld'])) {


    $fajlok = $_FILES["fajlok"];
    for ($i = 0; $i < count($fajlok["name"]); $i++) {
        if ($fajlok['error'][$i] == 4)
            $uzenet[] = "Choose a file!";
        elseif ($fajlok['error'][$i] == 1 or $fajlok['error'][$i] == 2 or $fajlok['size'][$i] > $maxsize)
            $uzenet[] = " The file's size is too big: " . $fajlok['name'][$i];
        elseif (!in_array($fajlok['type'][0], $types))
            $uzenet[] = " Not supported file format: " . $fajlok['name'][$i];
        else {
            $hova = $dir . strtolower($fajlok['name'][$i]);
            if (file_exists($hova))
                $uzenet[] = " This file already exists: " . $fajlok['name'][$i];
            else {
                move_uploaded_file($fajlok['tmp_name'][$i], $hova);
                $uzenet[] = 'The files is uploaded :)' . $fajlok['name'][$i];
            }
        }
    }
}


$images = array();
$olvaso = opendir($dir);
$i = 0;
while (($fajl = readdir($olvaso)) !== false) {
    if (is_file($dir . $fajl)) {
        $vege = strtolower(substr($fajl, strlen($fajl) - 4));

        if (in_array($vege, $imgtypes)) {
            $images[$i] = $fajl;
            $i = $i + 1;
        }
    }
}
closedir($olvaso);





?>


<section id="gal" class="d-flex justify-content-center align-items-center flex-column">

    <div class="popup-gallery galbox container ">
        <h1 class="galcap text-center">Gallery</h1>
        <?php

        foreach (new DirectoryIterator('./uploaded') as $fileInfo) {
            if ($fileInfo->isDot())
                continue;
            $kepnevek[] = $fileInfo->getFilename();
        }


        echo '<div class="row text-center galrow">';
        for ($i = 1; $i <= count($kepnevek); $i++) {
            echo '<div class="col-md-6 col-lg-4  galim"><a href="./uploaded/' . $kepnevek[$i - 1] . '"><img class="img-fluid" src="./uploaded/' . $kepnevek[$i - 1] . '"></a></div>';
        }
        echo '</div> ';
        ?>


        <form class="mt-3" id="feltolt" action="#" method="post" enctype="multipart/form-data">
            <input type="hidden" name="max_file_size" value="11000000">
            <input class="form-control" type="file" name="fajlok[]" value="Select files" accept="image/png, image/jpeg" multiple required>
            <br>
            <input class="form-control" type="submit" name="kuld" value="Upload">
        </form>
        <?php
        if (!empty($uzenet)) {
            foreach ($uzenet as $u)
                echo "<h4 style='color:white;'>$u</h4><br>";
        } ?>
    </div>


</section>