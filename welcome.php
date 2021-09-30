<?php 
$title = 'Home';
require_once "includes/Header.php";  
 ?>
<div class='container px-5 py-5 d-grid gap-3'>
    <h1 class='text-center text-success' >Registration Successful</h1>
    <h2 class="text-center text-success">See You In The Conference</h2>
    <div class="card container d-flex justify-content-center p-3 " style="width: 25rem;">
    <div class='w-50 m-auto px-3' id='print'>
        <img src="images/dax-logo.svg" height='100%'  width='100%'/>
        </div>
            <div class="card-body text-center">
                <h5 class="card-title text-capitalize"><?php echo $_GET['firstName'] . ' ' .$_GET['lastName'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $_GET['speciality'];?></h6>
                <p class="card-text">
                    Date Of Birth :
                    <?php 
                echo $_GET['dob']; 
                        ?>
                </p>
                <p class="card-text">
                    Email :
                    <?php 
                echo $_GET['email']; 
                        ?>
                </p>
                <p class="card-text">
                    Contact :
                    <?php 
                echo $_GET['phoneNumber']; 
                        ?>
                </p>
                <h4>Powered By</h4>
                <h3>Basic's School</h3>
            </div>
    </div>
    <a href="#" onclick="window.print()" class='container text-center btn btn-success w-50'>Print</a>
</div>




<?php require_once "includes/Footer.php";  
 ?>