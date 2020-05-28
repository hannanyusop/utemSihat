<?php
if(isset($_POST['gen'])){
    $hash_pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
}
?>
<p>Paste this hashed password into table users column password (TEMP)</p>
<p>This page for generate hash password : by hannan</p>
<form method="post">
    <input type="text" name="password" value="<?= (isset($_POST['gen']))? $_POST['password'] : '' ?>" required>
    <input type="submit" name="gen" value="GENERATE HASH">
</form>
<?php
if(isset($hash_pass)){
    echo "YOUR HASHED PASSWORD : <b style='color:blue'>".$hash_pass;
}
?>
