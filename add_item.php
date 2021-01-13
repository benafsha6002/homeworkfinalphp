<?php
    include("include/connecation.php");
    include("include/header.php");
	$name="";
	$idate="";
	$price="";
	$emp="";
	if(isset($_POST['subbtn'])){
		
		if(!empty($_POST['idate'])){
			$idate=$_POST['idate'];
		}
		if(!empty($_POST['name'])){
			$name=$_POST['name'];
		}
		
		if(!empty($_POST['price'])){
			$price=$_POST['price'];
		}
		if(!empty($_POST['employee'])){
			$emp=$_POST['employee'];
		}
		$insertsql ="INSERT INTO item VALUE(Null,'$name',$price,'$idate',$emp)";
		if(!empty($name)&&!empty($idate)&&!empty($price)){
		 if(mysqli_query($c,$insertsql)){
			 echo "data is saved successfully.";
		 }else{
			 echo "record is not saved due to some problems!!!";
		 }
		}else{
			echo"no price is be empthy  .";
		}
	}
		
		$sql="SELECT em_id, em_name from employee";
		$r=mysqli_query($c,$sql);
		

	  
	 
?>
		<div class="row" id="menu">
	        <div class="col-md-4">
			  <ul class="nav nav-pills" style="margin-left:100px">
				  <li role="presentation" style="margin-left:100px" class="active"><a href="index.php">برگشت به صفحه قبل</a></li>
				</ul>
			</div>
	    </div>
		<br/>
		<div class="row" id="content">
	          <div class="row">
	    <div class="col-md-8 col-md-offset-2" dir="rtl">
           <h2 class="title">اضافه کردن جنس نو</h2>
		   <br/>
		     <form class="form-horizontal" action="" method="post">
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="name" name="name" placeholder="نام ">
					</div>
					<label for="name" class="col-sm-2 control-label">نام </label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="price" name="price" placeholder="قیمت جنس ">
					</div>
					<label for="name" class="col-sm-2 control-label">قیمت جنس</label>
				  </div>
				  
				    
				  <div class="form-group">
					<div class="col-sm-10">
					 <select name="employee" id="employee" class="form-control">
					   <?php
					     if(isset($r)){
							 while($row=mysqli_fetch_row($r)){
								 echo "<option value='".$row[0]."'>".$row[1]."</option>";
							 }
						 }
					   ?>
					 </select>
					</div>
					<label for="name" class="col-sm-2 control-label">  کارمند مربوطه</label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="idate" name="idate" placeholder="تاریخ تولید">
					</div>
					<label for="name" class="col-sm-2 control-label">تاریخ تولید</label>
				  </div>
				
				 
				  <div class="form-group">
				  <div class="col-md-2">
					  <button type="submit" name="subbtn" class="btn btn-danger btn-block"> اضافه کردن ریکورد</button>
					</div>
				  <div class="col-md-10"> </div>
					
				  </div>
				</form>
				   
				  
			</div>
	    </div>
	
	
</div>
	
	
	
	
	
	
	
	
	
	



