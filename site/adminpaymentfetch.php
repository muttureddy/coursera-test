<?php 

    include 'dbtest.php';


    extract($_POST);

    if (isset($_POST['readrecord'])) {

    	$data = '<table class = "table tabel-bordered table-striped">
    		
    			<tr>
    				<th>ID</th>
                    <th>Username</th>
    				<th>Email</th>
    				<th>Card Type</th>
                    <th>Card Name</th>
    				<th>Card No.</th>
                    <th>Exp Month</th>
                    <th>Exp Year</th>
                    <th>CVV No</th>
                    <th>Address</th>
                    <th>Room No</th>
                    <th>Amount</th>
    				<th>Delete Action</th>
    			</tr>';

    			$display = "SELECT * FROM payment";
    			$result = mysqli_query($con,$display);
          $dat = mysqli_num_rows($result);

    			if ($dat > 0) {

    				$number = 1;
    				while($row = mysqli_fetch_array($result)){

    					$data .='<tr>
    						<td>'.$number.'</td>
    						<td>'.$row['uname'].'</td>
    						<td>'.$row['email'].'</td>
    						<td>'.$row['card_type'].'</td>
    						<td>'.$row['card_name'].'</td>
    						<td>'.$row['card_no'].'</td>
                            <td>'.$row['month'].'</td>
                            <td>'.$row['year'].'</td>
                            <td>'.$row['cvv'].'</td>
                            <td>'.$row['address'].'</td>
                            <td>'.$row['room_no'].'</td>
                            <td>'.$row['amount'].'</td>
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