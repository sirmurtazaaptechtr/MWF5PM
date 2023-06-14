<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Datatable CSS -->
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" />    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>My Car Showroom</title>
</head>

<body>
    <?php
    $showroom = array(
        array("Volvo", 2022, 20, 5),
        array("BMW", 2017, 10, 2),
        array("Saab", 2018, 50, 25),
        array("Land Rover", 2020, 25, 20)
    );
    $students = array(
        array("name" => "Areesha", "age" => 21, "gender" => "Female","email"=>"areeshasaud2020@gmail.com"),
        array("name" => "Yusra", "age" => 17, "gender" => "Female","email"=>"yusra550@gmail.com"),
        array("name" => "Ahmed", "age" => 22, "gender" => "Male","email"=>"ahmedays001@gmail.com"),
        array("name" => "Usama", "age" => 23, "gender" => "Male","email"=>"muhammadusama767@gmail.com")
    );
    ?>
    <h2>Showroom</h2>
    <table class="table table-hover" id="showroomTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Reg.(Year)</th>
                <th>Stock</th>
                <th>Sold</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($showroom as $cars) {
                echo "<tr>";
                foreach ($cars as $carinfo) {
                    echo "<td>$carinfo</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h2>All Students</h2>
    <table class="table table-hover" id="studentsTable">
        <thead>
            <tr>
                <?php
                foreach ($students[0] as $key => $value) {
                    echo "<th>" . strtoupper($key) . "</th>";
                }
                ?>                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($students as $student) {
                echo "<tr>";
                foreach ($student as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Datatable JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <!-- Main Script -->
    <script>
        $(document).ready( function () {
            // $('.table').DataTable();
            $('#showroomTable').DataTable();
            $('#studentsTable').DataTable();
        } );
    </script>
</body>

</html>