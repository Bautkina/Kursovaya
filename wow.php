<?php
require_once 'bd.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    $search = $_POST['search'];
    $sql = "select * from open_date_sound_2016 where Location like '%".$search."%'";
    $result = mysqli_query($link, $sql);


    $output = '<table>
                <tr>
                    <td>Category ID</td>
                    <td>Category Name</td>
                </tr>';

    while($row = mysqli_fetch_assoc($result)){
        echo '<a href="#" class="list">'.$row['Location'].'</a>';
        $output='<tr>';
        $output='<td>'.$row['Location'].'</td>';
    }
    $output='</tr>';
    $output='</table>';
    echo $output;
}

?> 
<?php
require_once 'bd.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Search = $_POST['search'];
    $sql = "select * from open_date_sound_2016 where Location like '%".$Search."%'";
    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
            echo '<a href="#" class="list">'.$row['Location'].'</a>';
        }
    }
    else{
        echo '<p>Record Not Found</p>';
    }
}