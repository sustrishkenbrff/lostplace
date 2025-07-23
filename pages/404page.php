<?php
$config = [
    'site_name' => 'LostPlace',
    'site_subname' => '404',
    'server_ip' => 'lostplace.fun',
    'discord_invite' => 'https://discord.gg/lostplace',
    'wiki_link'  => 'https://wiki.lostplace.fun/',
    'map_url' => 'https://map.lostplace.fun/',
    'minecraft_version' => '1.21.7'
];

require_once 'components/head.php';
require_once 'components/navigation.php';
?>
<!DOCTYPE html>
<html lang="ru">
<?php renderHead($config); ?>
<body>
<?php renderNavigation($config); ?>


        <div class="content-center">
            <img src="/assets/images/404.png" alt="404">
            <h1>Ой... Кажется, страница не найдена</h1>
            <a href="/" class="btn">На главную</a>
        </div>
    </div>


</body>
</html>