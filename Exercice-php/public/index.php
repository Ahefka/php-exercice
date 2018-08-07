<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/asset/css/bootstrap.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Products</h1>

    <?php
        $tab = [
            [$_GET["Name"], $_GET["Description"], $_GET["Stock"], $_GET["Price"]],
        ];
        $number = 1;

        echo '<table class="table">';
        echo '<thead>
            <tr>
            <th scope="col-2">Id</th>
            <th scope="col-3">Name</th>
            <th scope="col-3">Description</th>
            <th scope="col-2">Stock</th>
            <th scope="col-2">Price €</th>
            </tr>';
        foreach ($tab as $row) {
            echo '<tr>';
            echo '<th>' .$number. '</th>';
            foreach ($row as $value) {
                echo '<td>' .$value. '</td>';
            }
            echo '</tr>';
            $number = $number + 1;
        };
        echo '</thead>';
        echo '</table>';
    ?>

    <form>
        <div class="form-row">
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-3">
                <input type="text" class="form-control" name="Name" placeholder="Name">
            </div>
            <div class="col-3">
                <input type="text" class="form-control" name="Description" placeholder="Description">
            </div>
            <div class="col-2">
            <input type="text" class="custom-select" list="Stock" name="Stock" placeholder="Stock">
                <datalist id="Stock">     
                    <option>1</option>
                    <option>5</option>
                    <option>10</option>
                    <option>50</option>
                </datalist>
            </div>
            <div class="col-2">
                <input type="text" class="custom-select" list="Price" name="Price" placeholder="Price">
                <datalist id="Price">
                    <option>10.00</option>
                    <option>20.00</option>
                    <option>50.00</option>
                    <option>100.00</option>
                </datalist>
            </div>
        </div>
    </form>


    <script src="asset/js/jquery-3.js"></script>
    <script src="asset/js/popper.js"></script>
    <script src="asset/js/bootstrap.js"></script>
</body>
</html>