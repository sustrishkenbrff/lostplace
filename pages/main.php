<?php
$config = [
    'site_name' => 'LostPlace',
    'site_subname' => 'Главная',
    'server_ip' => 'lostplace.fun',
    'discord_invite' => 'https://discord.gg/lostplace',
    'wiki_link'  => 'https://wiki.lostplace.fun/',
    'map_url' => 'https://map.lostplace.fun/',
    'minecraft_version' => '1.21.7'
];

require_once 'components/head.php';
require_once 'components/navigation.php';
require_once 'components/hero.php';
require_once 'components/features.php';
require_once 'components/info_blocks.php';
require_once 'components/footer.php';
?>

<!DOCTYPE html>
<html lang="ru">
<?php renderHead($config); ?>
<body>
<div class="container">
    <?php renderNavigation($config); ?>

    <?php renderHero($config); ?>
    <?php renderFeatures(); ?>
    <?php renderInfoBlocks(); ?>
    <?php renderFooter($config); ?>
</div>

<script>
    $('.indexM').addClass('active');
    setTimeout("$('.loading-splash > img').addClass('active')", 1000);

    var typed = new Typed('.typed', {
        strings: ['ванильный', 'приватный', 'бесплатный', 'дружелюбный', 'стабильный'],
        typeSpeed: 70,
        shuffle: false,
        startDelay: 1000,
        backSpeed: 50,
        loop: true,
    });

    $(function () {
        $(".owl-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            loop: true,
            margin: 16,
            nav: false,
            dots: false,
            checkVisible: false,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });
    });

    $.ajax({
        url: "https://api.mcstatus.io/v2/status/java/lostplace.fun",
        method: 'GET',
        success: function (data) {
            if (data['online']) {
                $('.serverOnline').html('<p>Онлайн <span class="playersOnline">' + data['players'].online + '</span> с <span class="playersMax">' + data['players'].max + '</span></p>')
            } else {
                $('.serverOnline').html('<p>Сервер не работает</p>');
            }
        },
        error: function () {
            $('.serverOnline').html('<p>Ошибка</p>');
        }
    });

    document.querySelector('.ip').addEventListener('click', function() {
        const textToCopy = '<?php echo $config['server_ip']; ?>';
        navigator.clipboard.writeText(textToCopy).then(() => {
            const notification = document.querySelector('.notification');
            notification.style.display = 'block';
            setTimeout(() => {
                notification.style.display = 'none';
            }, 2000);
        }).catch(err => {
            console.error('Не удалось скопировать текст: ', err);
        });
    });

    $(document).ready(function () {
        $('.bu').on('click', function () {
            $('.modal').addClass('active');
        });

        $('.close').on('click', function () {
            $('.modal').removeClass('active');
        });

        $(document).on('click', function (e) {
            if ($(e.target).is('.modal') && !$(e.target).closest('.window').length) {
                $('.modal').removeClass('active');
            }
        });

    });

    applyParallax(document.querySelector('.parallax-container'));
</script>
</body>
</html>