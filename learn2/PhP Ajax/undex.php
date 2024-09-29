<!DOCTYPE html>
<html>

<head>
    <title>Ajax Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody id="table">
   

        </tbody>
    </table>

    <form action="">
        <input type="text" id="name">
        <input type="submit" name="sumbit-btn" id="btn ">
    </form>
    <button id="load" value="load data">Refresh</button>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#load').on('click', function(e) {
            $.ajax({
                url: "ajax-load.php",
                type: "POST",
                success: function(data) {
                    $('#table').html(data);
                }
            })
        })
    })
</script>

</html>