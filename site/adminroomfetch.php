<?php 

    include 'dbtest.php';


    extract($_POST);

    if (isset($_POST['readrecord'])) {

        $data = '<table class = "table tabel-bordered table-striped">
            
                <tr>
                    <th>ID</th>
                    <th>Roomtype</th>
                    <th>RoomNumber</th>
                    <th>Rent</th>
                    <th>Delete Action </th>
                    
                </tr>';

                $display = "SELECT * FROM rooms";
                $result = mysqli_query($con,$display);
          $dat = mysqli_num_rows($result);

                if ($dat > 0) {

                    $number = 1;
                    while($row = mysqli_fetch_array($result)){

                        $data .='<tr>
                            <td>'.$number.'</td>
                            <td>'.$row['roomtype'].'</td>
                            <td>'.$row['room_no'].'</td>
                            <td>'.$row['fees'].'</td>
                            <td><button onclick = "Deleteuser('.$row['sl_no'].')" class = "btn btn-danger">Delete</button></td>
                            </tr>';
                            $number++;
                    }

                }
          $data .= '</<table>';
          echo $data;
    }





    ///delete user record


    if (isset($_POST['deleteid'])) {
        $userid = $_POST['deleteid'];
        $deletequery = "DELETE FROM rooms WHERE sl_no = '$userid'";
        mysqli_query($con,$deletequery);
    }
?>