<?php include '../php/check_user.php'; ?>
<!DOCTYPE html>
<html lang="th">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iKingdom</title>

    <!-- Bootstrap core CSS -->

    <script src="../jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../css/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/community.css">

    <!-- Custom styles for this template -->
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>

  <body class="community">
    
   <header  class="community">
        <div class="row">
        	<div class="col-4">
        		<div class="header" >
			      <div class="card" id="bg-header">
			      	<?php include '../php/connectdb.php';
			      		include '../php/select_userid.php';
			      	 ?>
				    <img  src="../myfile/<?php echo $objResult["user_picture"]; ?>" class="picture-profile" >
				    <div class="card-body">
				      <h5 class="card-title text-center"><?php echo $objResult["user_fname"]; ?>&nbsp&nbsp&nbsp<?php echo $objResult["user_lname"]; ?></h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				</div>
		  	</div>
		   	<div class="col-8" id="bg-header">
		      <div class="alert alert-light" role="alert">
		      	<div class="row">
				    <div class="col-sm">
				      <img src="picture/icon-shop.jpg" class="img-fluid" alt="Responsive image" id="iconshopping">
				    </div>
				    <div class="col-sm">
				      <img src="picture/icon-market.jpg" class="img-fluid" alt="Responsive image" id="iconshopping">
				    </div>
				    <div class="col-sm">
				      <img src="picture/icon-mall.jpg" class="img-fluid" alt="Responsive image" id="iconshopping">
				    </div>
				  </div><br>
				  <div class="row">
				    <div class="col-sm">
				      <img src="picture/icon-avenue.jpg" class="img-fluid" alt="Responsive image" id="iconshopping">
				    </div>
				    <div class="col-sm">
				      <img src="picture/icon-food.jpg" class="img-fluid" alt="Responsive image" id="iconshopping">
				    </div>
				    <div class="col-sm">
				      <img src="picture/icon-otop.jpg" class="img-fluid" alt="Responsive image" id="iconshopping">
				    </div>
				  </div><br>
				  <div class="row">
				    <div class="col-sm-4">
				      <img src="picture/icon-travel.jpg" class="img-fluid" alt="Responsive image" id="iconshopping">
				    </div>
				  </div>
		      </div>
		   	</div>
        </div>
    </header>
    

    <nav class="navbar navbar-expand-lg nav-bg sticky-top">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-white" href="#page-top"><h4><strong>iKingdom</strong></h4></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
	    </form>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <img src="picture/icon-cart.png" class="img-fluid navbar-icon" alt="Responsive image">
            </li>&nbsp&nbsp&nbsp&nbsp
            <li class="nav-item">
              <img src="picture/icon-megaphone.png" class="img-fluid navbar-icon" alt="Responsive image">
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger nav-color" href="#service">บริการ iKingdom</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link js-scroll-trigger nav-color" href="../php/logout.php">ออกจากระบบ</a>
            </li>
          </ul>
        </div>
      </div>   
    </nav>

    <div class="community">
	    <div class="container"><br>
		  <div class="row">
		    <div class="col-3">
			    <div class="alert alert-success sticky-left" role="alert">
					This is a success alert—check it out!
				</div>
		    </div>

		    <div class="col-9">
			    <div class="card text-center">
				  <div class="card-header">
				   	ชื่อร้าน
				  </div>
				  <div class="card-body">
				    <div class="row">
					    <div class="col">
					      <img src="..." class="rounded mx-auto d-block">
					    </div>
					    <div class="col">
					      สโลแกนที่บอกว่าจะช่วยประหยัดเงินเป็นสโลแกนที่ดึงคนมาซื้อ อยากยื่นเงินกันได้ง่ายๆโดยเฉพาะกับสินค้าที่มีแบรนด์อยู่แล้ว
ซึ่งเทคนิคนี้ตรงข้ามกับเทคนิคแรกเลย มาดูงานวิจัยกับร้านค้าสะดวกซื้อของดังๆของอเมริกาอย่าง “Walmart” มีงานวิจัยออกมาบอกว่าถ้าคนเห็นชื่อ Walmart พร้อมกับสโลแกน “ประหยัดเงิน” แต่คนซื้อของจาก  Walmart น้อยลง  แต่ถ้าลองใช้คู่กลับสโลแกน “จ่ายน้อย อยู่ง่าย” คนกลับซื้อของที่ Walmart  มากขึ้น
						<br><button type="button" class="btn btn-success">ร้านค้า</button>
					    </div>
					  </div>
				  </div>
				  <div class="card-footer text-muted">
				    2 days ago
				  </div>
				</div><br>
				<div class="card text-center">
				  <div class="card-header">
				   	ชื่อร้าน
				  </div>
				  <div class="card-body">
				    <div class="row">
					    <div class="col">
					      <img src="..." class="rounded mx-auto d-block">
					    </div>
					    <div class="col">
					      สโลแกนที่บอกว่าจะช่วยประหยัดเงินเป็นสโลแกนที่ดึงคนมาซื้อ อยากยื่นเงินกันได้ง่ายๆโดยเฉพาะกับสินค้าที่มีแบรนด์อยู่แล้ว
ซึ่งเทคนิคนี้ตรงข้ามกับเทคนิคแรกเลย มาดูงานวิจัยกับร้านค้าสะดวกซื้อของดังๆของอเมริกาอย่าง “Walmart” มีงานวิจัยออกมาบอกว่าถ้าคนเห็นชื่อ Walmart พร้อมกับสโลแกน “ประหยัดเงิน” แต่คนซื้อของจาก  Walmart น้อยลง  แต่ถ้าลองใช้คู่กลับสโลแกน “จ่ายน้อย อยู่ง่าย” คนกลับซื้อของที่ Walmart  มากขึ้น
						<br><button type="button" class="btn btn-success">ร้านค้า</button>
					    </div>
					  </div>
				  </div>
				  <div class="card-footer text-muted">
				    2 days ago
				  </div>
				</div><br>
				<div class="card text-center">
				  <div class="card-header">
				   	ชื่อร้าน
				  </div>
				  <div class="card-body">
				    <div class="row">
					    <div class="col">
					      <img src="..." class="rounded mx-auto d-block">
					    </div>
					    <div class="col">
					      สโลแกนที่บอกว่าจะช่วยประหยัดเงินเป็นสโลแกนที่ดึงคนมาซื้อ อยากยื่นเงินกันได้ง่ายๆโดยเฉพาะกับสินค้าที่มีแบรนด์อยู่แล้ว
ซึ่งเทคนิคนี้ตรงข้ามกับเทคนิคแรกเลย มาดูงานวิจัยกับร้านค้าสะดวกซื้อของดังๆของอเมริกาอย่าง “Walmart” มีงานวิจัยออกมาบอกว่าถ้าคนเห็นชื่อ Walmart พร้อมกับสโลแกน “ประหยัดเงิน” แต่คนซื้อของจาก  Walmart น้อยลง  แต่ถ้าลองใช้คู่กลับสโลแกน “จ่ายน้อย อยู่ง่าย” คนกลับซื้อของที่ Walmart  มากขึ้น
						<br><button type="button" class="btn btn-success">ร้านค้า</button>
					    </div>
					  </div>
				  </div>
				  <div class="card-footer text-muted">
				    2 days ago
				  </div>
				</div><br>
		    </div> 
		  </div>
	</div>

    <footer class="page-footer">
      <span class="d-block p-2" id="color-theme">
        d-block
      </span>
      <span class="d-block p-2 bg-white text-black">
        d-block
      </span>
    </footer>

    

  </body>

</html>
