<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css">

</head>

<body>
    <?php
    include 'database.php';
    ?>

    <div class="container">
        <h1>CRUD APP</h1>

        <!-- Form Container -->
        <div class="form-container">
            <form id="crudtable" action="index.php" method="post">
                <input type="text" id="name" name="name" placeholder="Name">
                <input type="email" id="email" name="email" placeholder="Email">
                <button type="submit">Add / Update</button>
            </form>
        </div>

        <!-- Table to Display Records -->
        <table id="crud-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                // Fetch data from database
                $sql2 = "SELECT * FROM details";
                $result2 = mysqli_query($conn, $sql2);

                while ($record = mysqli_fetch_assoc($result2)) {
                    echo "<tr>
                        <td>" . $record['name'] . "</td>
                        <td>" . $record['email'] . "</td>
                        <td class='actions'>
                            <button class='edit' data-name='" . $record['name'] . "' data-email='" . $record['email'] . "' data-id='" . $record['sno'] . "'>Edit</button>
                            <button class='delete' data-id='" . $record['sno'] . "'>Delete</button>
                        </td>
                    </tr>";
                }
                if (isset($_GET['delete'])) {
                    $sno = $_GET['delete'];
                    $delete = true;
                    $sql = "DELETE FROM `details` WHERE `sno` = $sno";
                    $result = mysqli_query($conn, $sql);
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Edit Record</h2>
            <form id="modalForm" class="modal-form" method="post">
                <input type="hidden" id="recordId" name="recordId">
                <label for="modalName">Name:</label>
                <input type="text" id="modalNameInput" name="name" placeholder="Enter name">
                <label for="modalEmail">Email:</label>
                <input type="email" id="modalEmailInput" name="email" placeholder="Enter email">
                <button type="button" id="saveChanges">Save Changes</button>
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
    <script src="./script.js"></script>
    
</body>

</html>