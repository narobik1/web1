<section id="gal" class="container-fluid d-flex justify-content-center align-items-center flex-column">

    <div id="about" style="background-color: rgba(0, 0, 0, 0.699); border-radius:15px; min-height:80vh;" class="p-5">
    <?php
    
    $hiba=0;
    if (isset($_POST['kuld'])) {
        $kimenet = "Subject: ";
        if (!isset($_POST['subject']) || strlen($_POST['subject']) > 30) {
            
            $kimenet .= "<span> Error: Missing or incorrect message length</span>";
            $hiba=$hiba+1;
        }
        else{
            $kimenet.="<br> {$_POST['subject']}";
        }
        $kimenet .= "<br>";
		$kimenet .= "Message: ";
		if(!isset($_POST['message']) ||  strlen($_POST['message']) < 10 || strlen($_POST['message']) > 255 )
		{
			$kimenet.= "<span >Error: Missing or incorrect message length</span>";
            $hiba=$hiba+1;
		}
        else{
            $kimenet.="<br> {$_POST['message']}";
        }
        $kimenet .= "<br>";
        echo "<h2>{$kimenet}</h2>";
    }
    ?>
    </div>
</section>