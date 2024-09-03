<?php
session_start();

$servername = "localhost";
$username = "srikrishnaDeveloper";
$password = "leads@123";
$database = "srikrishnaDeveloper";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$correct_username = "skd";
$correct_password = "skd@123";

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Handle login
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $correct_username && $_POST['password'] == $correct_password) {
        $_SESSION['loggedin'] = true;
    } else {
        $login_error = "Invalid username or password.";
    }
}

// Check if logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LEADS Dashboard</title>
        <link href="img/pearl-logo.png" rel="icon"/>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }
            .container {
                max-width: 1000px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }
            .logout-form {
                 background-color: #fff;
                display: flex;
                justify-content: space-between;
                align-items: center;
                max-width: 13%;
                margin: 10px auto 17px auto;
                padding: 19px;
                /* background-color: #f2f2f2; */
                border-radius: 5px;
                margin-left: 2rem;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .logout-form input[type="submit"] {
                padding: 10px 20px;
                background-color: #006F6F;
                color: #fff;
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }
            .logout-form input[type="submit"]:hover {
                background-color: #012101;
            }
            form {
                display: flex;
                justify-content: space-between;
                align-items: center;
                max-width: 100%;
                margin: 0 auto 20px auto;
                padding: 20px;
                background-color: #f2f2f2;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            form label {
                margin-right: 10px;
                font-weight: bold;
            }
            form input[type="date"] {
                margin-right: 10px;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }
            form input[type="submit"] {
                padding: 10px;
                background-color: #012101;
                color: #fff;
                border: none;
                border-radius: 3px;
                cursor: pointer;
                margin-left: 10px;
            }
            form input[type="submit"]:hover {
                background-color: #006F6F;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th, td {
                padding: 12px;
                text-align: left;
                border: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
                color: #333;
            }
            tr:hover {
                background-color: #f9f9f9;
            }
            .button {
                padding: 12px 24px;
                background-color: #022602;
                border: 1px solid #33553d;
                border-radius: 3px;
                color: #fff;
                cursor: pointer;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <h1>Welcome to LEADS Dashboard</h1>
        <form class="logout-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <input type="hidden" name="logout" value="true">
            <input type="submit" value="Logout">
        </form>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <label for="startfilter">From:</label>
            <input type="date" id="startfilter" name="startfilter" required>
            <label for="endfilter">To:</label>
            <input type="date" id="endfilter" name="endfilter" required>
            <input type="submit" value="Filter">
        </form>

        <?php
        if (isset($_GET['startfilter']) && !empty($_GET['startfilter']) && isset($_GET['endfilter']) && !empty($_GET['endfilter'])) {
            $start_date = date('Y-m-d', strtotime($_GET['startfilter']));
            $end_date = date('Y-m-d', strtotime($_GET['endfilter']));
            echo "<p>Start Date: $start_date</p>";
            echo "<p>End Date: $end_date</p>";
        }
        ?>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (isset($_GET['startfilter']) && !empty($_GET['startfilter']) && isset($_GET['endfilter']) && !empty($_GET['endfilter'])) {
                $start_date = date('Y-m-d', strtotime($_GET['startfilter']));
                $end_date = date('Y-m-d', strtotime($_GET['endfilter']));
                $sql = "SELECT id, Name, Email, Mobile, Date FROM `pearl_leads` WHERE Date BETWEEN '$start_date' AND '$end_date'";
            } else {
                $sql = "SELECT id, Name, Email, Mobile, Date FROM `pearl_leads`";
            }
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['Mobile'] . "</td>";
                    echo "<td>" . $row['Date'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found</td></tr>";
            }
            ?>
            </tbody>
        </table>
        <button class="button" id="btnExport" onclick="downloadPDF();">Download</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
    <script>
        async function downloadPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            // Add title to PDF
            doc.text("Leads Data", 14, 16);

            // Add table to PDF
            doc.autoTable({
                html: 'table',
                startY: 22,
                styles: {
                    fontSize: 10,
                    lineColor: [0, 0, 0],
                    lineWidth: 0.1
                }
            });

            // Save the PDF
            doc.save('leads-data.pdf');
        }
    </script>
    </body>
    </html>
    <?php
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            .lead-access {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f4f4f4;
            }
            .lead-access-container {
                background: white;
                padding: 2rem;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                width: 300px;
                text-align: center;
            }
            .access-logo img {
                width: 100%;
                margin-bottom: 20px;
            }
            .lead-access h2 {
                margin-bottom: 1rem;
            }
            .lead-access label {
                display: block;
                margin: 0.5rem 0 0.25rem;
                text-align: left;
            }
            .lead-access input[type="text"],
            .lead-access input[type="password"] {
                width: 100%;
                padding: 0.5rem;
                margin-bottom: 1rem;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            .lead-access input[type="submit"] {
                color: #fff;
                padding: 0.5rem 4rem;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 20px;
                background-color: #122223;
            }
        </style>
    </head>
    <body>
    <section class="lead-access">
        <div class="lead-access-container">
            <div class="access-logo">
                <img src="./img/SKD_Google Ads.svg" alt="Logo">
            </div>
            <?php if (isset($login_error)) echo "<p style='color:red;'>$login_error</p>"; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Login">
            </form>
        </div>
    </section>
    </body>
    </html>
    <?php
}
?>
