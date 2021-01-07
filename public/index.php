<?php
require_once __DIR__ . '/../vendor/autoload.php';

define('FILE', file_get_contents(__DIR__ . '../../data.json'));

$file = json_decode(FILE);

$currentPage = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/projects.css">
    <link rel="stylesheet" href="./css/courses.css">

    <title>Eduardo</title>
</head>

<body>
    <aside>
        <div>
            <img src="<?= $file->avatar ?>" alt="avatar" width="350">

            <div class="info">
                <p>NOME</p>
                <p><?= $file->name ?></p>
    
                <p>IDADE</p>
                <p><?= (new DateTime())->diff(new DateTime($file->birthday))->y ?> anos</p>

                <p>LOCALIDADE</p>
                <p><?= $file->location ?></p>
    
                <p>CELULAR (<?= $file->primaryPhoneOperator ?>)</p>
                <p><?= $file->primaryPhone ?></p>
    
                <p>CELULAR (<?= $file->secundaryPhoneOperator ?>)</p>
                <p><?= $file->secundaryPhone ?></p>
    
                <p>EMAIL</p>
                <a href="mailto:<?= $file->email ?>">
                    <?= $file->email ?>
                </a>
            </div>
        </div>
    
        <div>
            <?php if (file_exists('cv.pdf')) { ?>
                <a href="cv.pdf" class="downloadCV" download>Download CV</a>
            <?php } ?>
    
            <div class="social">
                <a href="<?= $file->urlLinkedin ?>" target="_blank" class="fab fa-linkedin linkedin"></a>
                <a href="<?= $file->urlGithub ?>" target="_blank" class="fab fa-github github"></a>
                <a href="https://api.whatsapp.com/send?phone=55<?= $file->whatsapp ?>" target="_blank" class="fab fa-whatsapp whatsapp"></a>
            </div>
        </div>
    </aside>

    <main>
        <nav>
            <a href="/" <?= $currentPage == '/' || $currentPage == '/home' ? 'class="selected"' : '' ?>>HOME</a>
            <a href="/projects" <?= $currentPage == '/projects' ? 'class="selected"' : '' ?>>PROJETOS</a>
            <a href="/courses" <?= $currentPage == '/courses' ? 'class="selected"' : '' ?>>CURSOS</a>
        </nav>

        <article>
            <?php
            switch ($currentPage) {
                case '/home':
                    include './pages/home.php';
                    break;

                case '/projects':
                    include './pages/projects.php';
                    break;

                case '/courses':
                    include './pages/courses.php';
                    break;

                default:
                    include './pages/home.php';
            }
            ?>
        </article>
    </main>
</body>

</html>