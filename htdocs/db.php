<?

// Create (connect to) SQLite database in file
$con = new PDO('sqlite:/employee.db');
// Set errormode to exceptions
$con->setAttribute(PDO::ATTR_ERRMODE, 
                        PDO::ERRMODE_EXCEPTION);

if (!$con) {
  throw new Exception('Error connecting to database - ' . $con->lastErrorMsg());
}

$resultset = $con->query("select * from employees");
foreach($resultset as $row) {
  echo $row['id'] . ' - ' . $row['name'] . "<br>";
  echo "\n";
}

?>