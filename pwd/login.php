
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
    <?php endif;?>


    <strong>user & pass login</strong>
    <table border="1">
        <tr>
            <td>username</td>
            <td>password</td>
        </tr>
        <tr>
            <td>dosen</td>
            <td>dosen</td>
        </tr>
        <tr>
            <td>mhs</td>
            <td>mhs</td>
        </tr>
        <tr>
            <td>tu</td>
            <td>tu</td>
        </tr>
    </table>

    <br>

    <form action="check-login.php" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value="LOGIN" />
    </form>
