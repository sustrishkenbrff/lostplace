<?php
function renderHead($config) {
    $site_name = $config['site_name'];
    $site_subname = $config['site_subname'];
    $description = "{$site_name} - ванильный Minecraft без модов и приватов [{$config['minecraft_version']}]. Заходи прямо сейчас на {$config['server_ip']}";
    $url = "http://www.{$config['server_ip']}";

    echo "
    <head>
        <meta charset='utf-8'>
        <title>{$site_name} | {$site_subname}</title>
        <meta name='description' content='{$description}'>
        <meta property='og:type' content='website'>
        <meta property='og:site_name' content='lostplace'>
        <meta property='og:title' content='{$site_name} | {$site_subname}'>
        <meta property='og:description' content='{$description}'>
        <meta property='og:url' content='{$url}'>
        <meta property='og:canonical' content='https://www.{$config['server_ip']}'>
        <meta property='og:locale' content='ru_RU'>
        
        <script type='application/ld+json'>
        {
            \"@context\": \"https://schema.org\",
            \"@type\": \"WebSite\",
            \"name\": \"lostplace\",
            \"url\": \"{$url}\",
            \"description\": \"{$description}\",
            \"alternateName\": \"лост плейс\",
            \"keywords\": \"лостплейс, lost place, lostplace, LP, лостплейс майнкрафт, лост плей, Сервер lostplace, lostplace сервер, сервер lost place, lost place сервер, дискорд lostplace, ванила\",
            \"image\": \"{$url}/img/woman.png\",
            \"inLanguage\": \"ru\"
        }
        </script>

        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='icon' type='image/png' sizes='32x32' href='/assets/images/logo.png'>
        <link rel='icon' type='image/png' sizes='16x16' href='/assets/images/logo.png'>
        <link rel='shortcut icon' href='favicon3.ico'>
        <meta name='msapplication-TileColor' content='#2d89ef'>
        <meta name='theme-color' content='#ffffff'>

        <!-- Стилі -->
        <link rel='stylesheet' href='/css/halloween.css'>
        <link rel='stylesheet' href='css/main.css'>
        <link rel='stylesheet' href='css/owl.carousel.min.css'>
        <link rel='stylesheet' href='css/owl.theme.default.min.css'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20,700,1,0'>

        <!-- JavaScript -->
        <script src='/js/halloween.js'></script>
        <script src='js/jquery-3.7.1.min.js'></script>
        <script src='js/main.js'></script>
        <script src='js/typed.min.js'></script>
        <script src='js/owl.carousel.min.js'></script>
        <script src='js/shop.js'></script>
        <script async='' src='js/tag.js'></script>

        <style>
            .notification {
                display: none;
                background-color: #4CAF50;
                color: white;
                padding: 10px;
                position: fixed;
                top: 20px;
                right: 20px;
                border-radius: 5px;
            }
        </style>
    </head>";
}
?>