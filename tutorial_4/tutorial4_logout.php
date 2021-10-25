<?php
if(isset($_SESSION['username'])) {
    session_destroy();
    echo "<script>location.href=tutorial4.php</script>";
}
else{
    echo "<script>location.href=tutorial4.php</script>";
}
?>