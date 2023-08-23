<?php 
    require('../Controllers/Ckelas.php');
    require('../Libraries/csrf.php');
    session_start();
    $kelas = new Ckelas();


    if(isset($_POST['update'])){
        if (CSRF::check($_POST['csrf_token'], 'form_csrf')){
         echo $kelas->UpdateKelas($_POST['oldName'],($_POST['newName']));
        }
        else{
            echo "Invalid or missing CSRF token.";
        }
    }
?>
<br>
<br>
    <form action="" method="post">
        <input type="hidden" name="csrf_token" value="<?php echo CSRF::generate('form_csrf'); ?>">
            <table>
                <tr>
                    <td>Nama Kelas lama</td><td>:</td>
                    <td><input type="text" name="oldName"></td>
                </tr>
                <tr>
                    <td>Nama Kelas baru</td><td>:</td>
                    <td><input type="text" name="newName"></td>
                </tr>
                <tr>
                    <td colspan="3" align="right">
                        <input type="submit" name="update" value="update">
                    </td>
                </tr>
            </table>
    </form>

    
       
