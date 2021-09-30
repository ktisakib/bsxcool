<?php 
$title = 'Home';
require_once "includes/Header.php";  
 ?>

 
    <h1 class='text-center'>Register For IT Confernce</h1>
    <form action='welcome.php' method='get' >
  <div class="mb-3">
    <label for="firstName" class="form-label">First Name</label>
    <input name='firstName'  type="text" class="form-control" id="firstName" >
    
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label">Last Name</label>
    <input name='lastName'  type="text" class="form-control" id="lastName" >
    
  </div>
  <div class="mb-3">
    <label for="dob" class="form-label">Date of Birth</label>
    <input name='dob'  type="date" class="form-control" id="dob" >
    
  </div>
  <div class="mb-3">
    <label for="speciality" class="form-label">Speciality</label>
    <select class="form-select" aria-label="speciality" name='speciality' id='speciality'>
  <option selected>Select Your Experties</option>
  <option value="1Software Developer">Software Developer</option>
  <option value="Database Admin">Database Admin </option>
  <option value="Web Adminstrator">Web Adminstrator</option>
  <option value="Other">Other</option>
</select>
    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input name='email'  type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="phoneNumber" class="form-label">Phone Number</label>
    <input name='phoneNumber'  type="text" class="form-control" id="phoneNumber" aria-describedby="phoneHelp">
    <div id="phoneHelp" class="form-text">We'll never share your Phone Number with anyone else.</div>
  </div>
  <div class="mb-3 form-check">
    <input name='checkbox'  type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button name='submit'  type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require_once "includes/Footer.php";  
 ?>