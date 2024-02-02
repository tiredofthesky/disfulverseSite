<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GitHub Commits</title>
    <!-- Подключение стилей Bootstrap (опционально) -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Дополнительные стили могут быть добавлены здесь */
    </style>
</head>

<body>

<div class="container mt-4">
    <h2>Последние коммиты на GitHub</h2>
    <div id="commits-container"></div>
</div>

<!-- Подключение скриптов -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Подключение скрипта Bootstrap (опционально) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    // Замените 'username' и 'repository' на свои значения
    const username = 'username';
    const repository = 'repository';
    const apiUrl = `https://api.github.com/repos/${username}/${repository}/commits`;

    // Функция для загрузки и отображения коммитов
    function loadCommits() {
        $.get(apiUrl)
            .done(function (data) {
                displayCommits(data);
            })
            .fail(function (error) {
                console.error('Failed to load commits:', error);
            });
    }

    // Функция для отображения коммитов на странице
    function displayCommits(commits) {
        const commitsContainer = $('#commits-container');

        if (commits.length === 0) {
            commitsContainer.html('<p>No commits found.</p>');
            return;
        }

        const list = $('<ul class="list-group"></ul>');

        commits.forEach(commit => {
            const listItem = $(`
                    <li class="list-group-item">
                        <strong>${commit.commit.author.name}</strong>: ${commit.commit.message}
                    </li>
                `);
            list.append(listItem);
        });

        commitsContainer.html(list);
    }

    // Вызываем функцию загрузки коммитов при загрузке страницы
    $(document).ready(function () {
        loadCommits();
    });
</script>

</body>

</html>
