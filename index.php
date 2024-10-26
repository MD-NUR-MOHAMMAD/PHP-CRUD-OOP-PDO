<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD with PHP OOP & PDO</title>
    <link rel="stylesheet" href="inc/bootstrap.min.css" />
    <script src="inc/bootstrap.bundle.min.js"></script>
    <script src="inc/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="card text-center">
            <h1>CRUD with PHP OOP & PDO</h1>
            <h2>Student List</h2>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Student data <a class="float-end" href="addstudent.php">Add Student Data</a></h2>
            </div>
            <table class="table table-striped">
                <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Nurmohammad</td>
                    <td>nur@gmail.com</td>
                    <td>01677772333</td>
                    <td>
                        <a href="editstudent.php?id=1">Edit</a> ||
                        <a href="deletestudent.php?id=1" onclick="return confirm('Are you sure to Delete?')">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Asif</td>
                    <td>asif@gmail.com</td>
                    <td>01677772233</td>
                    <td>
                        <a href="editstudent.php?id=2">Edit</a> ||
                        <a href="deletestudent.php?id=2" onclick="return confirm('Are you sure to Delete?')">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Rana</td>
                    <td>rana@gmail.com</td>
                    <td>01677772331</td>
                    <td>
                        <a href="editstudent.php?id=3">Edit</a> ||
                        <a href="deletestudent.php?id=3" onclick="return confirm('Are you sure to Delete?')">Delete</a>
                    </td>
                </tr>

            </table>
        </div>
        <div class="card">
            <div class="card-body">
                <h3>Website: https://coders24x7.com/
                    <span class="float-end">Link Us: www.facebook.com/........</span>
                </h3>
            </div>
        </div>

    </div>
</body>

</html>