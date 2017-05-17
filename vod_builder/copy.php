
<?php include 'header.php';?>


<?php

    error_reporting(0);
    $dependencies = TRUE;
    $permissions = 0755;

    //print_r ($_POST['usermsg']);

    //print_r ($_POST['ads']);


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


//Premium requires user management
if( !isset($_POST['usermsg'])  && isset($_POST['premium']))  {
    echo '<div class="alert alert-danger">
                <strong>Warning!</strong>"Premium module requires User Managent module".
          </div>';
    $dependencies = FALSE;
}


//Premium requires ads or encrypted video 
if(!isset($_POST['ads']) &&  !isset($_POST['encoded'])  && isset($_POST['premium'])) {

    echo '<div class="alert alert-danger">
                <strong>Warning!</strong>"Premium requires Advertisement or Encoded Video modules".
          </div>';
    $dependencies = FALSE;
}

//Payment requires premium
if( isset($_POST['payment'])  && !isset($_POST['premium']))  {
     echo '<div class="alert alert-danger">
                <strong>Warning!</strong>"Payment requires Premium".
          </div>';
    $dependencies = FALSE;
}

//Go back if dependencies Error
if($dependencies == FALSE) {
    //echo "ERRRORRRRRR\r\n";
    echo '<a href="index.php" class="btn btn-primary">Back</a>';
    exit();
}

//Copy common
xcopy('D:\xampp\htdocs\codeign\application' , 'D:\xampp\htdocs\modularvod\application', $permissions);


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

echo '<div class="alert alert-success">
                <strong>Success!</strong>"Open your solution".
          </div>';
          echo '<a href="index.php" class="btn btn-primary">Back</a>';

?>


<?php include 'footer.php';?>
