<?php include("conexao/conexao.php") ?>

<?php 
include("conexao/conexao.php");

$sql = "SELECT id, descricao, gols FROM times";
$result = $conn->query($sql);

$times = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $times[] = $row;
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <div class="row mt-5 content-table animate_animated">
            <div class="card card-default w-100 m-2">
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover table-sm dt-responsive nowrap display" style="width: 100%;" id="">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Time</th>
                                <th>Gols</th>

                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php foreach ($times as $time) : ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($time['id']); ?></td>
                                    <td><?php echo htmlspecialchars($time['descricao']); ?></td>
                                    <td><?php echo htmlspecialchars($time['gols']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </main>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>