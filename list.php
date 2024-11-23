<?php

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "project");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into all_services table
$sql = "INSERT INTO `all services` (s_no, service_name, price, description)
VALUES 
(1, 'AC Repair', 500, 'Repair and maintenance of air conditioners'),
(2, 'Plumbing', 300, 'Installation and repair of pipes, fixtures, and appliances'),
(3, 'Electrical', 400, 'Installation and repair of electrical systems, including wiring and circuits'),
(4, 'Carpentry', 600, 'Construction and repair of wooden structures, including furniture and cabinets'),
(5, 'Painting', 800, 'Application of paint and coatings to surfaces, including walls, ceilings, and trim')";

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} else {
    echo "Data inserted successfully!";
}

mysqli_close($conn);

?>
