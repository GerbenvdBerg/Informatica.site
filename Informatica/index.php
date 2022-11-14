<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>	
</head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://inloggen.somtoday.nl/login?0" target="_blank">Navbar/Somtoday</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li  class="nav-item">
          <a class="nav-link" href="https://maken.wikiwijs.nl/96699/Enigma__Informatica_hv456#!page-3025155" target=”_blank”>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target=”_blank”>Suprise</a>
        </li>
        <div class="dropdown">
	        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
		        Dropdown 
	       </button>
	        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
		        <li><a class="dropdown-item" href="https://www.wikipedia.org/" target="_blank">Wikipedia</a></li>
		        <li><a class="dropdown-item" href="https://www.wikipedia.org/" target="_blank">Another action</a></li>
		        <li><a class="dropdown-item" href="https://pcpartpicker.com/" target="_blank">Pcpartpicker</a></li>
	       </ul>
	      </div>
      </ul>
    </div>
  </div>
</nav>

<!-- creates employees thingie-->
<div class="container-fluid my-class">
  <br>
  <br>
  <div class="container"> 
    <h1>All about Employees</h1>
    <p>Hier een lijst van de employees.<br> Je kunt hier ook een nieuwe employee toevoegen.</p>
    <button type="button" class="btn btn-primary btn-lg"  onclick="clickedButton()">Learn More &Gt;</button>
    <br>
    <br>
    <br>
  </div>
</div>
<br>
<!-- creates table-->
    <h1>List of employees</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Department name</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "informaticahavo";

            // Create connection
            $connection = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($connection->connect_error) {
                die("connection failed: " . $connection->connect_error);
            }
            // read selected rows from database table
            $sql = "SELECT employee_id, first_name, last_name, department_name
            FROM employees LEFT JOIN departments ON employees.department_id = departments.department_id;";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }

            // read data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["department_name"] . "</td>
                <td>" . $row["first_name"] . "</td>
                <td>" . $row["last_name"] . "</td>
            </tr>";
            }
            ?>
        </tbody>
    </table>
  <!--add new employee area-->
<h3>Create new employee:</h3>
<table class="table table-bordered">
  <form action="includes/create.php" method="post">
    <thead class="table-dark">
      <tr>
        <!-- more columns here--> 
        <th>First name</th>
        <th>Last name</th>
        <th>Department name</th>
        <!-- more columns above -->
      </tr>
    </thead>
      <!-- more rows --> 
      <td><input type="text" name="first_name"/></td>
      <td><input type="text" name="last_name"/></td>
      <td><select name="department">
            <option value="">None</option>
            <option value="110">Accounting</option>
            <option value="10">Administration</option>
            <option value="90">Executive</option>
            <option value="60">IT</option>
            <option value="20">Marketing</option>
            <option value="80">Sales</option>
            <option value="50">Shipping</option>
      </select><br/></td>
      <!-- more rows above -->
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Creëer nieuwe employee"/></td>      
      </tr>
  </form>
</table>

<br><br><br>
<!-- window to draw -->
<svg width="300" height="300">
  <!-- red background -->
  <rect width="300" height="300" style="fill:rgb(255, 0, 0)" />
  
  <!-- black circle -->
  <circle cx="150" cy="150" r="150" fill="red" stroke="black" stroke-width="2" />

  <!-- yellow outline circle -->
  <defs>
    <radialGradient id="grad1" cx="50%" cy="50%" r="45%" fx="50%" fy="50%">
      <stop offset="90%" style="stop-color:rgb(255, 255, 0);stop-opacity:1" />
      <stop offset="100%" style="stop-color:rgb(255, 255, 0);stop-opacity:0" />
    </radialGradient>
  </defs>
  <circle cx="150" cy="150" r="55" fill="url(#grad1)"/>

  <!-- blue gradiant inner cirle -->
  <defs>
    <radialGradient id="grad2"  cx="50%" cy="50%" r="45%" fx="50%" fy="50%">
      <stop offset="75%" style="stop-color:rgb(0, 0, 255);stop-opacity:1" />
      <stop offset="100%" style="stop-color:rgb(255, 255, 255);stop-opacity:0" />
    </radialGradient>
  </defs>
  <circle cx="150" cy="150" r="50" fill="url(#grad2)"/>
  
  <!-- "Hello Blue Sun text" -->
  <text x="62" y="100" style="font-size:30px;font-style:normal;font-weight:normal;fill:red;fill-opacity:1;stroke:#000000;stroke-width:1px">Hello Blue Sun</text>

  <!-- tilted lines -->
  <line x1="0" y1="0" x2="300" y2="300" style="stroke:rgb(0, 0, 0);stroke-width:2" />
  <line x1="0" y1="300" x2="300" y2="0" style="stroke:rgb(0, 0, 0);stroke-width:2" />
</svg>  

</body>
</html>