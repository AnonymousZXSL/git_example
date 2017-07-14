<?php
    $id = $_SESSION['userID'];
    $myMessages = $DataBase -> query("SELECT `send`, `time` FROM message WHERE `userID` = $id");
    while($myM = mysqli_fetch_array($myMessages)){
        echo "<p>" . "<span>". $myM['send'] .  "</span>" . " / " . $myM['time'] . "</p><hr>";
    }
?>
</div>
<div class="sendInboxDiv">
<?php
$inboxMessages = $DataBase -> query("SELECT `inbox`, `time` FROM messageinbox WHERE `userID`=$id");
while($myInb = mysqli_fetch_array($inboxMessages)){
    echo "<p>" . $myInb['inbox'] . " / " . $myInb['time'] . "</p><hr>";
}
?>

asdsadsd
asdsadsd
asdsadsd
3333333333asdasdasd
asdasd
sadasdasd 
333333
