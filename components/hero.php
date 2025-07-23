<?php
function renderHero($config) {
    $server_ip = $config['server_ip'];

    echo "
    <section class='main banner'>
        <div class='textBlock max-width'>
            <h1>LP — <span class='accent typed'></span><br>майнкрафт сервер</h1>
            <h3>Окунись в мир Контента, <br>Творчества и новых идей!</h3>
            <div class='serverOnline'></div>
            <a target='_blank' class='button halloween-wrapper buy ip'>IP: {$server_ip}</a>
            <div class='notification'>Айпи скопировано!</div>
        </div>
        <div class='imageBlock max-width'>
            <img class='lazy halloween-wrapper' src='/assets/images/Banner.png' alt='players'>
        </div>
    </section>";
}
