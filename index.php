<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Disfulverse</title>
    <!-- Подключение стилей Bootstrap -->
    <link rel="stylesheet" href="./style/main.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>
<style>

    body {

        margin: 0;
        padding: 0;

    }
</style>

<body>

    <!-- Блок container для "Форума" -->
    <div class="container mt-4">
        <h1 class="mt-4 mb-4" style="font-weight: bold;">Disfulverse 🌌</h1>

        <!-- Навигационное меню -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="showForum"><i class="fa fa-home" aria-hidden="true"></i> <b> Главная </b> <span class="sr-only">(текущая)</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-book"></i> Статьи
                        </a>
                        <div class="dropdown-menu dropdown-menu-center" style="margin-left: 7%;" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" id="showRules">Правила</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Механики</a>


                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="showServerInfo"> <i class="fa fa-server" aria-hidden="true"></i> Информация о серверах</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="showContacts"> <i class="fa fa-address-book" aria-hidden="true"></i> Контакты</a>
                    </li>

            </div>
        </nav>

        <!-- Контент страницы "Форум" -->
        <?php include('./pages/forum.php'); ?>
        <!-- Блок container для "Правил" -->
        <?php include('./pages/rules.php'); ?>

        <!-- Блок container для "Информации о сервере" -->
        <?php include('./pages/serverInfo.php'); ?>

        <!-- Блок container для "Контактов" -->
        <?php include('./pages/contacts.php'); ?>
    </div>

    <!-- Подключение скриптов Bootstrap и jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>