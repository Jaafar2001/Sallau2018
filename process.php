<?php 
    require_once('config.php');
;?>
<?php 
if(isset($_POST)){
    $firstname      = $_POST['firstname'];
    $lastname       = $_POST['lastname'];
    $email          = $_POST['email'];
    $phonenumber    = $_POST['phonenumber'];
    $address        = $_POST['address'];
    $state          = $_POST['state'];
    $lga            = $_POST['lga'];
    $password       = sha1($_POST['password']);

    $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, address, state, lga, password ) VALUES (?,?,?,?,?,
    ?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $address, $state, $lga, $password]);   
    if($result){
        echo 'successfully saved';
    }else{
        echo 'there were errors in the data';
    }
}else{
    echo 'No data';
}
   


;?>