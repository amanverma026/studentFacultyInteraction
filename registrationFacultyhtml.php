<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SFI-Study Makes Easy</title>
  <link rel="stylesheet" href="./regitsrationstuedntcss.css">
  <link rel="stylesheet" href="practiceonlinecodecss.css">
  <link rel="stylesheet" href="aboutUs.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
    </style>
</head>

<body>
  <nav class="bg-aboutus">
    <div class="menu">
        <div class="logo">
            <a class="logi" href="practiceonlinecode.html" style=" font-family: 'Kaushan Script', cursive;">SFI</a>
        </div>
        <ul>
            <li><a href="./adminInterfacehtml.php">Home</a></li>
            <li><a  id="" href="./registrationStudenthtml.php">Student Register</a></li>
            <li><a  id="active-fr"href="">Faculty Register</a></li>
            <!-- <li><a href="./aboutus.php">About Us</a></li> -->
            <li><a id="" href="./practiceonlinecode.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="outer-main-block">
  <div class="main-block">
    <div class="left-part">
      <i class="fas fa-graduation-cap"></i>
      <h1>Please Insert All Faculty Details</h1>
      <!-- <p>W3docs provides free learning materials for programming languages like HTML, CSS, Java Script, PHP etc.</p> --> 
      <!-- <div class="btn-group">
        <a class="btn-item" href="https://www.w3docs.com/learn-html.html">Learn HTML</a>
        <a class="btn-item" href="https://www.w3docs.com/quiz/#">Select Quiz</a>
      </div> -->
    </div>
    <form action="/" class="right-reg">
      <div class="title">
        <i class="fas fa-pencil-alt"></i> 
        <h2>Register here</h2>
      </div>
      <div class="info">
        <input class="fname" type="text" name="FacultyName" placeholder="Name">
        <input type="email" name="FacultyEmail" placeholder="Email">
        <input type="text" name="FacultyId" placeholder="Username">
        <input type="text" name="FacultyPhoneNumber" placeholder="Phone number">
        <select>
          <option value="Branch" selected>Branch</option>
          <option value="computer science engeneering">computer science engeneering</option>
          <option value="civil engeneering">civil engeneering</option>
          <option value="Mechenical engeneering">Mechenical engeneering</option>
        </select>
        <select>
          <option value="Subject" selected>Subject</option>
          <option value="DatabaseManagementSystem">Database Management System</option>
          <option value="OperatingSystem">Operating System</option>
          <option value="DataStructure">Data Structure</option>
          <option value="SoftwareEngeneering">Software Engeneering</option>
          <option value="FluidMechanics">Fluid Mechanics</option>
          <option value="TheoryOfMechanics">Theory Of Mechanics</option>
          <option value="StrengthOfMaterials">Strength Of Materials</option>
          <option value="BasicSurveying">Basic Surveying</option>
        </select>
        <input type="password" name="FacultyPassword" placeholder="Password">
      </div>
      <div class="checkbox">
        <input type="checkbox" name="checkbox"><span>I read & agree to the <a href="">All terms & conditions</a></span>
      </div>
      <button type="submit" href="/">Submit</button>
    </form>
  </div>
</div>
  
</body>
</html>
