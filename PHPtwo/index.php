<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talents - Encontre seu próximo emprego</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php">Talents</a>
            </div>

            <ul>
                <li><a href="#">Vagas</a></li>
                <li><a href="#">Empresas</a></li>
                <li><a href="#">Candidatos</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="container">
                <h2>Vagas em Destaques</h2>
                <div class="job-grid">
                    <?php
                    $sql = "SELECT id, titulo, empresa, localizacao FROM vagas";
                    $resultado = $conn->query($sql);

                    if ($resultado->num_rows > 0) {
                        echo '<div class="job-card">';
                        echo '<h3>' . $linha["titulo"] . '</h3>';
                        echo '<p class="company">' . $linha["empresa"] . '</p>';
                        echo '<p class="location">' . $linha["localizacao"] . '</p>';
                        echo '<a href="detalhes_vaga.php?id=' . $linha["id"] . '"class="apply-button">Ver Vaga</a>';
                        echo '</div>';
                    } else {
                        echo "<p>Nenhuma vaga encontrada no momento.</p>";
                    }
                    ?>
                </div>
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