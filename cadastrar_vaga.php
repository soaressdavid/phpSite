<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Vaga - Talents</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <nav>
            <div class="logo">
                <a href="index.php">Talents</a>
            </div>
            <ul>
                <li><a href="index.php">Vagas</a></li>
                <li><a href="#">Empresas</a></li>
                <li><a href="#">Candidatos</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="form-section">
            <div class="container">
                <h2>Cadastrar Nova Vaga</h2>

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $titulo = $_POST["titulo"];
                        $empresa = $_POST["empresa"];
                        $localizacao = $_POST["localizacao"];

                        $sql = "INSERT INTO vagas (titulo, empresa, localizacao) VALUES ('$titulo', '$empresa', '$localizacao')";

                        if ($conn->query($sql) === TRUE) {
                            echo "<p class='success-message'>Vaga cadastrada com sucesso!</p>";
                        } else {
                            echo "<p class='error-message'>Erro ao cadastrar vaga: " . $conexao->error . "</p>";
                        }
                    }
                ?>
                
                <form action="cadastrar_vaga.php" method="POST">
                    <div class="form-group">
                        <label for="titulo">Título da Vaga:</label>
                        <input type="text" id="titulo" name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="empresa">Empresa:</label>
                        <input type="text" id="empresa" name="empresa" required>
                    </div>
                    <div class="form-group">
                        <label for="localizacao">Localização:</label>
                        <input type="text" id="localizacao" name="localizacao" required>
                    </div>
                    <button type="submit">Cadastrar Vaga</button>
                </form>

            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Talents RH. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>