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
            <li><a  id="active-nav" href="">Student Register</a></li>
            <li><a href="./registrationFacultyhtml.php">Faculty Register</a></li>
            <li><a href="./aboutus.php">About Us</a></li>
            <li><a id="" href="./practiceonlinecode.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="outer-main-block">
  <div class="main-block">
    <div class="left-part">
      <i class="fas fa-graduation-cap"></i>
      <h1>Please Insert All Students Details</h1>
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
        <input class="fname" type="text" name="Full name" placeholder="Full name">
        <input type="email" name="Email" placeholder="Email">
        <input type="text" name="Enrollment number" placeholder="Enrollment number">
        <input type="text" name="Phone number" placeholder="Phone number">
        <select>
          <option value="Branch" selected>Branch</option>
          <option value="computer science engeneering">computer science engeneering</option>
          <option value="civil engeneering">civil engeneering</option>
          <option value="Mechenical engeneering">Mechenical engeneering</option>
        </select>
        <select>
          <option value="Year" selected>Year</option>
          <option value="I year">I year</option>
          <option value="II year">II year</option>
          <option value="III year">III year</option>
          <option value="IV year">IV year</option>
        </select>
        <input type="password" name="name" placeholder="Password">
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
