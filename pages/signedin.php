<html>
<button class="RowButtons" title="Log out of your account." onclick='location.href="../others/logout.php"'>Log out</button>
<?php
    session_start();
    echo '<p style="position: absolute; top: -15; right: 0;">Welcome,'.$_SESSION['FN'].'</p>';
?>
</html>


