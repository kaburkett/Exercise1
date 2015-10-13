<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kyle Burkett: Exercise 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- add datatable plugin for sorting and such -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
  <!-- add jQuery -->
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <!-- js used to manipulate the data -->
  <script src="data_manipulation.js"></script>
</head>
<body>
	
<div class="wrap"> 
<h1 align="center">Christmas Bonus Calculator</h1>
<p align="center">Enter an employee's name and their salary. I will calculate the bonus and keep track for you. All for free.</p> <br><br>
</div>

<!-- table for recording entries -->
<div class="row">
	<div class="col-md-3"><!--quick spacer :)--></div>
	<div class="col-md-6">
		<div class="table-responsive">
			<!-- load table data with php -->
				<?php
					require_once('db_connect.php');
					  $sql = "SELECT * FROM example1";
					  $result = mysql_query($sql)or die(mysql_error());	
					  if(isset($_REQUEST['delete']))
						{
						$sql_s =" DELETE FROM `example1` WHERE id='".$_REQUEST['id']."' " ;
						$result_s = mysql_query($sql_s)or die(mysql_error());
						if($result_s == true)
						{
						header("Refresh:0");
						}
						else
						{
						echo '<script language="javascript">alert("Error in deletion")</script>';
						}
						}
					  echo "<table class='table table-striped table-bordered' id='populate_table'>";
					  echo "<thead><td>Employee Name</td><td>Employee Salary</td><td>Employee Bonus</td><td>Delete Employee</td></thead><tbody>";				 
					  while($row = mysql_fetch_array($result)){
					  					 
					  $name     = $row['name'];
					  $salary   = $row['salary'];
					  $bonus    = $row['bonus'];
					  $id       = $row['id'];
					  
					// populate table with queried data
					echo "<tr><td>".$name."</td><td>".$salary."</td><td>".$bonus."</td>"."<td><form method='post'><input type='submit' class='btn btn-default' name='delete' value='Delete'><input type='hidden' name='id' value='".$row['id']."'></form></td></tr>";
					 
					} 
					echo"</tbody></table>"
				?>
			<span id="result"></span>
		</div>
	</div>
</div>

<div class="container">
<div class="col-md-5"><!--quick spacer :)--></div>	
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">Enter New Employee</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img src="wordmark-print.png" class="img-responsive" alt="Clemson!" align="center">
        </div>
        <div class="modal-body">
          <p>
          	<form name="GetData" action="" method="post">
			  <div class="form-group">
			    <label for="employee_name">Enter An Employee's Name:</label>
			    <input type="text" class="form-control" id="employee_name" name="employee_name" placeholder="Sally Jenkins" />
			    <label for="employee_salary">Enter Their Yearly Salary:</label>
			    <input type="number" class="form-control" id="employee_salary" name="employee_salary" placeholder="100000" />
			  </div>
			  <button class="btn btn-default" id="new_entry">Submit</button>
			</form>      		
  		</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<div class="row">
	<div class="col-md-3" "col-xs-3">
		
	</div>
</div>


</body>
</html>