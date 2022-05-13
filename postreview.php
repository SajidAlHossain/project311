<?php
	include "include/header.php";
?>
<?php
		
		
		include "lib/database.php";
		 include "config/config.php";
		   include "helper/formate.php";
		
?>
<?php
		$db=new Database();
		$fm = new Formate();
?>
<div class="mainsection">
    <div class="container" style="background:#f1f1f1;">
	<div class="row">
	<div class="col-sm-12" style=" margin-top:20px;margin-bottom:20px;">
	<div class="card " style="">
   
	<div class="card-body col-sm-6" style="margin:0 auto;">
	<h3>Write your review here</h3>
	<?php
		if(isset($_POST['submit'])){
			
			
	              $First_Name = mysqli_real_escape_string($db->link, $_POST['First_Name']);
		      $Last_Name = mysqli_real_escape_string($db->link, $_POST['Last_Name']);
                      $Product_Id = mysqli_real_escape_string($db->link, $_POST['Product_Id']);
					  $User_Name = mysqli_real_escape_string($db->link, $_POST['User_Name']);
		      $Review = mysqli_real_escape_string($db->link, $_POST['Review']);
		      
		     
	

		  
			   $query= "INSERT INTO review (First_Name,Last_Name,User_Name,Product_Id,Sell_Post,Delivery_Field,Review) Values('$First_Name', '$Last_Name','$User_Name','$Product_Id', '$sell', '$Delivery','$Review')";
				$create = $db->insertreview($query);
				
		   
		  
		   
		   }
		
		
		?>
    <form  action="postreview.php" method="post">
				
                                                                <div class="col-md-6">
								<div class="form-label-group">
								 <label >Product_Id</label>
								  <input type="text" name="Product_Id"  class="form-control" placeholder="Product_Id" >
								 
								</div>
							  </div>
							  <div class="form-group">
			<label>User Name</label><br>
				<input name="User_Name" type="text" class="form-control" placeholder="Write your username" autofocus="autofocus" required="">
			</div>
							
					
				
				<div class="form-group">
						<label>Write your review here</label>
				<textarea name="Review"  class="form-control" required=""> </textarea>
			</div>						  
				
						
			
				
			
			<button type="submit" name="submit" class="btn btn-primary mb-2 ">Submit</button>
               </form>
	
	
				</div>
			</div>
		</div>
	</div>
	
	</div>
	
</div>

  
</div>
  
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Developed by <a href="https://www.facebook.com/Sams.Nasif" target="_blank">NasifSams</a></p>

</footer>
<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Thanks for visiting</h1>
</div>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

</script>
</nav>
</body>
</html>

</div>
</body>
</html>