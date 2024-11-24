 <html>
<head>
<?php
include "navigationBarAdmin.php";
session_start();
$u = $_SESSION['sun'];
?>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel=stylesheet type = text/css href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>



 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

  <script type="text/javascript">
  $(document).ready(function () {
$('#myTable123').DataTable();
$('.dataTables_length').addClass('bs-select');
});

  </script>
</head>
<body>

<div>


				<div class="container">
				    <div class=row>
				        <div class="col-sm-12">
  <h2 class = text-center style = "color : blue">View All Books</h2>



</div>
    
</div>
</div>
<?php
include "dbconfigure.php" ;


$query = "select * from book";
$rs = my_select($query);

echo "<div class = container>";
 
echo "<div class = row>";
echo "<div class = col-sm-12>";
echo "<div class='table-responsive'>";
echo "<table class='table table-hover table-sm' style = 'overflow: scroll' id=myTable123>";
echo "<thead style = 'background-color : yellow ; color : red' >";
echo "<tr>";
echo "<th>BookName</th>";
echo "<th>Author</th>";
echo "<th>Category</th>";
echo "<th>Language</th>";
echo "<th>Image</th>";
echo "<th>PurchaseDate</th>";
echo "<th>BookCondition</th>";
echo "<th>Quantity</th>";
echo "<th>Price</th>";
echo "<th>Description</th>";
echo "<th>SellerName</th>";


echo "<th>Delete</th>";
//echo "<th>Edit</th>";
echo "</tr>";
echo "</thead>";

echo '<tbody id="myTable">';
while($column=mysqli_fetch_array($rs))
{
echo "<tr class='table-success'>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo '<td><img src="'.$column['bookimage'].'" width="100" height="100"></td>';
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "<td>$column[9]</td>";
echo "<td>$column[10]</td>";
echo "<td>$column[12]</td>";

																					
echo '<td><a href="deleteBook.php?id='.$column['bookid'].'">
													<i class="fa fa-remove"></i>
													</a></td>';
																								
/*echo '<td><a class="btn btn-xs btn-danger" href="updateProduct.php?id='.$column['bookid'].'">
													<i class="far fa-edit"></i>
													</a></td>';*/
																										
													
												
													
												
echo "</tr>";

}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";






?>



<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



</div>
<!--<?php  //include "bottom.php "?>-->
</body>
</html>