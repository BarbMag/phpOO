<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário e Classe Pessoa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha o formulário</h3>
        <form method="post">
            <div class="form-group">
                <label for="largura">Largura:</label>
                <input type="number" class="form-control" id="largura" name="largura" required>
            </div>
            <div class="form-group">
                <label for="altura">Altura:</label>
                <input type="number" class="form-control" id="altura" name="altura" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php 
        include 'Retangulo.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $largura = $_POST["largura"];
            $altura = $_POST["altura"];

            $retangulo = new Retangulo($largura, $altura);

            echo "<h3>Dados Enviados</h3>";
            echo "<p><strong>Largura:</strong>" .$retangulo->get_largura() . "</p>";
            echo "<p><strong>Altura:</strong>" .$retangulo->get_altura() . "</p>";
           
        }
        ?>
</div>
</body>
</html>