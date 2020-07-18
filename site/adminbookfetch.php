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
    				<th>Nationality</th>
    				<th>Phone No.</th>
                    <th>RoomType</th>
                    <th>No.of People</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Status</th>
                    <th>No_days</th>
    				<th>Delete Action</th>
    			</tr>';

    			$display = "SELECT * FROM roomb";
    			$result = mysqli_query($con,$display);
          $dat = mysqli_num_rows($result);

    			if ($dat > 0) {

    				$number = 1;
    				while($row = mysqli_fetch_array($result)){

    					$data .='<tr>
    						<td>'.$number.'</td>
    						<td>'.$row['Fname'].'</td>
    						<td>'.$row['Lname'].'</td>
    						<td>'.$row['Email'].'</td>
    						<td>'.$row['Username'].'</td>
    						<td>'.$row['National'].'</td>
                            <td>'.$row['Phone'].'</td>
                            <td>'.$row['TRoom'].'</td>
                            <td>'.$row['People'].'</td>
                            <td>'.$row['cin'].'</td>
                            <td>'.$row['cout'].'</td>
                            <td>'.$row['status'].'</td>
                            <td>'.$row['No_days'].'</td>
    						<td><button onclick = "Deleteuser('.$row['Sl_no'].')" class = "btn btn-danger">Delete</button></td>
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
        $deletequery = "DELETE FROM roomb WHERE Sl_no = '$userid'";
        mysqli_query($con,$deletequery);
    }
?>