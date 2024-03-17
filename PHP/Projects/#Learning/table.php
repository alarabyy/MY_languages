<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <?php
        $names_age = [
            "hamo" => [10, 20, 30, 40],
            "ahmed" => [10, 20, 30, 40],
            "ali" => [10, 20, 30, 40],
            "mahmod" => [10, 20, 30, 40],
            "mazen" => [10, 20, 30, 40],
            "mazen2" => [10, 20, 30, 40],
        ]
        ?>

        <div class="container">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">jun</th>
                        <th scope="col">fep</th>
                        <th scope="col">mar</th>
                        <th scope="col">apri</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($names_age as $key => $value) {
                        echo "<tr> <td> $key </td>";

                        foreach ($value as  $value2) {
                            echo "<td> $value2 </td>";
                        }
                        echo "</tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>