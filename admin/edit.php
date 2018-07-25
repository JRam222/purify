

<?php

    include_once "conn.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $res = mysqli_query($mysqli,"SELECT * from events WHERE id=$id");
        $project = mysqli_fetch_array($res);
    }

    if(isset($_POST['newName'])){
        $newName = $_POST['newName'];
        $id = $_GET['id'];
        $newStartDate = $_POST['newStartDate'];
        $newEndDate = $_POST['newEndDate'];
        $newStartTime = $_POST['newStartTime'];
        $newEndTime = $_POST['newEndTime'];
        $newColor = $_POST['newColor'];
        $newURL = $_POST['newURL'];
        
        $sql = "UPDATE events SET name='$newName',startdate='$newStartDate',enddate='$newEndDate',starttime='$newStartTime',endtime='$newEndTime',color='$newColor',url='$newURL'  WHERE id='$id' ";
        $res = mysqli_query($mysqli, $sql) or die("could not update" .mysql_error());
        header("Location: index.php");
    }
    
    

?>

<form method="POST" action="edit.php?id=<?php echo $project[0]; ?>">
    Event Name:<input type="text" name="newName" value ="<?php echo $project[1]; ?>"/><br>
    Start Date:<input type="date" name="newStartDate"  value ="<?php echo $project[2]; ?>"/><br>
    End Date:<input type="date" name="newEndDate" value ="<?php echo $project[3]; ?>" /><br>
    Start Time:<input type="text" name="newStartTime" value ="<?php echo $project[4]; ?>"/><br>
    End Time:<input type="text" name="newEndTime" value ="<?php echo $project[5]; ?>"/><br>
    Color:<input type="text" name="newColor" value ="<?php echo $project[6]; ?>"/><br>
    URL:<input type="text" name="newURL" value ="<?php echo $project[7]; ?>"/><br>
    <input type="submit" value="Update"/>
</form>