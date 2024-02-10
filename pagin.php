<?php
$servername = "localhost";
$username = "vgzdjiof_appanage";
$password = "Appanage@1234567";
$dbname = "vgzdjiof_appanage";
$conn = mysqli_connect($servername, $username, $password, $dbname);

?>
<?php
	//include_once("db_connect.php");

	//$showRecordPerPage3 = $showRecordPerPage2;
	$showRecordPerPage3 = 2;
	if(isset($_GET['page']) && !empty($_GET['page'])){
		$currentPage = $_GET['page'];
	}else{
		$currentPage = 1;
	}
	$startFrom = ($currentPage * $showRecordPerPage3) - $showRecordPerPage3;
	$totalEmpSQL = "SELECT * FROM register where CompanyCategory = 'Furniture'";
	$allEmpResult = mysqli_query($conn, $totalEmpSQL);
	$totalEmployee = mysqli_num_rows($allEmpResult);
	$lastPage = ceil($totalEmployee/$showRecordPerPage3);
	$firstPage = 1;
	$nextPage = $currentPage + 1;
	$previousPage = $currentPage - 1;
	$empSQL = "SELECT Sno,CompanyName, CompanyCategory 
	FROM `register` where CompanyCategory='Furniture' LIMIT $startFrom, $showRecordPerPage3";
	$empResult = mysqli_query($conn, $empSQL);		
	?>	
	<table class="table ">
	<thead> 
		<tr> 
			<th>EmpID</th> 
			<th>Name</th> 
			<th>Category</th>
		</tr> 
	</thead> 
	<tbody> 
		<?php 
		while($emp = mysqli_fetch_assoc($empResult)){
		?>
			<tr> 
				<th scope="row"><?php echo $emp['Sno']; ?></th> 
				<td><?php echo $emp['CompanyName']; ?></td> 
				<td><?php echo $emp['CompanyCategory']; ?></td> 
			</tr> 
		<?php } ?>
	</tbody> 
	</table>
	<nav aria-label="Page navigation">
	  <ul class="pagination">
	  <?php if($currentPage != $firstPage) { ?>
		<li class="page-item">
		  <a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
			<span aria-hidden="true">First</span>			
		  </a>
		</li>
		<?php } ?>
		<?php if($currentPage >= 2) { ?>
			<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
		<?php } ?>
		<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
		<?php if($currentPage != $lastPage) { ?>
			<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
			<li class="page-item">
			  <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
				<span aria-hidden="true">Last</span>
			  </a>
			</li>
		<?php } ?>
	  </ul>
	</nav>