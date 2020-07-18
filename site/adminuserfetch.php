<?php 

    include 'dbtest.php';


    extract($_POST);

    if (isset($_POST['readrecord'])) {

    	$data = '<table class = "table tabel-bordered table-striped">
    		
    			<tr>
    				<th>ID</th>
    				<th>Firstname</th>
    				<th>Lastname</th>
    				<th>Email</th>
    				<th>Username</th>
    				<th>Password</th>
    				<th>Last Login</th>
    				<th>Delete Action</th>
    			</tr>';
// <th>Edit Action</th>
    			$display = "SELECT * FROM login";
    			$result = mysqli_query($con,$display);
          $dat = mysqli_num_rows($result);

    			if ($dat > 0) {

    				$number = 1;
    				while($row = mysqli_fetch_array($result)){

    					$data .='<tr>
    						<td>'.$number.'</td>
    						<td>'.$row['Firstname'].'</td>
    						<td>'.$row['Lastname'].'</td>
    						<td>'.$row['Email'].'</td>
    						<td>'.$row['Username'].'</td>
    						<td>'.$row['Password'].'</td>
                            <td>'.$row['Logintime'].'</td>
    						
    						<td><button onclick = "Deleteuser('.$row['Sl_no'].')" class = "btn btn-danger">Delete</button></td>
    						</tr>';
    						$number++;
    				}

    			}
          $data .= '</<table>';
          echo $data;
    }
/*
<td><button onclick = "Getuserdetails('.$row['Sl_no'].')" class = "btn btn-warning">Edit</button></td>*/



    ///delete user record


    if (isset($_POST['deleteid'])) {
        $userid = $_POST['deleteid'];
        $deletequery = "DELETE FROM login WHERE Sl_no = '$userid'";
        mysqli_query($con,$deletequery);
    }

//get userid for update

        if (isset($_POST['id']) && isset($_POST['id']) != "") {

            $user_id = $_POST['id'];
            $query = "SELECT FROM login where Sl_no = 1";
            $result = mysqli_query($con,$query);
            if (!$result = mysqli_query($con,$query)) {
                exit(mysqli_error());
            }
            $response = array();

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $response =$row;
                }

            }else{
                $response['status'] = 200;
                $responce['message'] = "Invaild Request!!";
            }
            echo json_encode($response);
        }else{
            $response['status'] =200;
            $response['message'] = "Invalid Request!";
        }


?>



   






























































<?php 

// include('dbtest.php');
// echo "string";

// $query = "select * from login";

// $resul = mysqli_query($con,$query);

// $data = array();
// while ($row = mysqli_fetch_assoc($resul)) {
// 	$data[] =$row;
// 	# code...
// }


// echo json_encode($data);

// // echo "<script>console.log(JSON.prase($data))</script>";
 ?>
