<?php



    print_r ($_POST['usermsg']);
    
   //if(isset($_POST['encoded'])) { print_r ($_POST['encoded']);} 

   print_r ($_POST['ads']);

  // if(isset($_POST['premium'])) { print_r ($_POST['premium']); } 

    $zipname = 'adcs.zip';
    $zip = new ZipArchive;
    $zip->open($zipname, ZipArchive::CREATE);


    foreach ($_POST['items'] as $file) {
      $zip->addFile($file);
    }
    $zip->close();


   header('Content-Type: application/zip');
    header("Content-Disposition: attachment; filename='adcs.zip'");
    header('Content-Length: ' . filesize($zipname));
    header("Location: adcs.zip"); 

    ?>