<?php
    require_once 'db.php';

    $result = mysqli_query($link, 'SELECT * FROM images WHERE 1 ORDER BY viewed DESC');

    while($row = mysqli_fetch_assoc($result)) {

        echo '<a href = "showimages.php?image_id='.$row['id'].'">';
        echo '<img width = "150px" height = "150px" src = "'.$row['image_path'].'">';
        echo '</a>';
    }

    mysqli_close($link);
?>