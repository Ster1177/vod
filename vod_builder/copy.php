<?php

    $dependencies = TRUE;
    $permissions = 0755;

    print_r ($_POST['usermsg']);

    print_r ($_POST['ads']);


function xcopy($source, $dest, $permissions)
{

    // Check for symlinks
    if (is_link($source)) {
        return symlink(readlink($source), $dest);
    }

    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $dest);
    }

    // Make destination directory
    if (!is_dir($dest)) {
        mkdir($dest, $permissions);
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== $entry = $dir->read()) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        xcopy("$source/$entry", "$dest/$entry", $permissions);
    }

    // Clean up
    $dir->close();
    return true;
}

function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));

        foreach ($files as $file)
        {
            Delete(realpath($path) . '/' . $file);
        }

        return rmdir($path);
    }

    else if (is_file($path) === true)
    {
        return unlink($path);
    }

    return false;
}
//Delete files
Delete('D:\xampp\htdocs\modularvod\application');
//Copy common

xcopy('D:\xampp\htdocs\codeign\application' , 'D:\xampp\htdocs\modularvod\application', $permissions);




//Premium requires user management
if( !isset($_POST['usermsg'])  && isset($_POST['premium']))  {
    echo "Premium module requires User Managent module\r\n";
    $dependencies = FALSE;
}


//Premium requires ads or encrypted video 
if(!isset($_POST['ads']) &&  !isset($_POST['encoded'])  && isset($_POST['premium'])) {
    echo "Premium requires Advertisement or Encoded Video modules\r\n";
    $dependencies = FALSE;
}

//Payment requires premium
if( isset($_POST['payment'])  && !isset($_POST['premium']))  {
    echo "Payment requires Premium\r\n";
    $dependencies = FALSE;
}

//Go back if dependencies Error
if($dependencies == FALSE) {
    echo "ERRRORRRRRR\r\n";
    exit();
}


//No User module
if (!isset($_POST['usermsg'])) {
    unlink('D:\xampp\htdocs\modularvod\application\controllers\login.php');
    unlink('D:\xampp\htdocs\modularvod\application\controllers\signup.php');
    unlink('D:\xampp\htdocs\modularvod\application\controllers\profile.php');
    unlink('D:\xampp\htdocs\modularvod\application\views\profile_view.php');
    unlink('D:\xampp\htdocs\modularvod\application\views\signup_view.php');
    unlink('D:\xampp\htdocs\modularvod\application\views\login_view.php');
    unlink('D:\xampp\htdocs\modularvod\application\views\includes\menu_usermg.php');
}

//No Encrypted video module
if (!isset($_POST['encoded'])) {
    unlink('D:\xampp\htdocs\modularvod\application\controllers\singleencoded.php');
    unlink('D:\xampp\htdocs\modularvod\application\views\singleencoded.php');
    unlink('D:\xampp\htdocs\modularvod\application\views\singleencoded_premium.php');
    unlink('D:\xampp\htdocs\modularvod\application\views\singleencoded_nopremium.php');
}

//No ads module
if (!isset($_POST['ads'])) {
    unlink('D:\xampp\htdocs\modularvod\application\views\includes\ads.php');
}

//No premium
if (!isset($_POST['premium'])) {
    unlink('D:\xampp\htdocs\modularvod\application\controllers\payment.php');
    unlink('D:\xampp\htdocs\modularvod\application\views\payment.php');
    unlink('D:\xampp\htdocs\modularvod\application\views\singleencoded_premium.php');
}

//No payment module

if (!isset($_POST['payment'])) {
    unlink('D:\xampp\htdocs\modularvod\application\controllers\payment.php');
    unlink('D:\xampp\htdocs\modularvod\application\views\payment.php');
}

?>
