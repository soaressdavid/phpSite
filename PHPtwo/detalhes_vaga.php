<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Detalhes da Vaga - Talents</title>
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
        <section class="job-detail">
            <div class="container">
                <?php
                if(isset($_GET['id'])) {
                    $id_vaga = $_GET['id'];

                    $sql = "SELECT titulo, empresa, localizacao FROM vagas WHERE id = $id_vaga";
                    $resultado = $conn->query($sql);

                    if ($resultado->num_rows > 0) {
                        $vaga = $resultado->fetch_assoc();

                        echo '<h2>' . $vaga["titulo"] . '</h2>';
                        echo '<p> class="company">' . $vaga["empresa"] . '</p>';
                        echo '<p class="location">' . $vaga["localizacao"] . '</p>';
                        echo '<a href="#" class="apply-button">Candidatar-se';
                    } else {
                        echo "<p>Vaga não encontrada.</p>";
                    }
                } else {
                    echo "<p>ID da vaga não especificado.</p>";
                }

                $conn->close();
                ?>
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