<div class="container mt-4" id="serverInfoBlock">
<table class="table">
            <thead>
                <tr>
                  
                    <th scope="col">Название сервера</th>
                    <th scope="col">Игроки онлайн</th>
                    <th scope="col">IP адрес</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Действия</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Предположим, у вас есть массив данных $servers с информацией о серверах
                $servers = array(
                    array('id' => 1, 'name' => 'Disfulverse', 'players' => '0/128', 'ip' => '192.168.1.1', 'status' => 'Offline'),
                    // Добавьте дополнительные сервера, если необходимо
                );

                foreach ($servers as $server) {
                    echo '<tr>';
          
                    echo '<td style="font-weight: bold" scope="row">' . $server['name'] . '</td>';
                    echo '<td>' . $server['players'] . '</td>';
                    echo '<td>' . $server['ip'] . '</td>';
                    echo '<td style = "color: red;">' . $server['status'] . '</td>';
                    echo '<td><a href="connect.php?id=' . $server['id'] . '" class="btn btn-primary">Подключиться</a></td>';
                
                    echo '</tr>';
                
                }
                ?>
            </tbody>
        </table>
    </div>
        </div>