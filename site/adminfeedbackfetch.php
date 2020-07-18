<?php 

    include 'dbtest.php';


    extract($_POST);

    if (isset($_POST['readrecord'])) {

        $data = '<table class = "table table-bordered table-striped">
            
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Feed</th>
                    <th>Submited Time</th>
                    <th>Delete Action</th>
                </tr>';

                $display = "SELECT * FROM feedback";
                $result = mysqli_query($con,$display);
          $dat = mysqli_num_rows($result);

                if ($dat > 0) {

                    $number = 1;
                    while($row = mysqli_fetch_array($result)){

                        $data .='<tr>
                            <td>'.$number.'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['username'].'</td>
                            <td>'.$row['feed'].'</td>
                            <td>'.$row['datestamp'].'</td>
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
        $deletequery = "DELETE FROM payment WHERE Sl_no = '$userid'";
        mysqli_query($con,$deletequery);
    }
?>
