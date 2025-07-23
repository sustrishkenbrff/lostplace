<?php

$donations = include 'components/donations.php';
$config = [
    'site_name' => 'LostPlace',
    'site_subname' => 'Магазин',
    'server_ip' => 'lostplace.fun',
    'discord_invite' => 'https://discord.gg/lostplace',
    'wiki_link'  => 'https://wiki.lostplace.fun/',
    'map_url' => 'https://map.lostplace.fun/',
    'minecraft_version' => '1.21.7'
];
function renderDonationBlock($donation) {
    $hasDetails = !empty($donation['description_detailed']);

    echo '<div class="info-block card small">';
    echo '<div class="first">';
    echo '<img class="small" src="' . htmlspecialchars($donation['image']) . '" alt="image">';
    echo '</div>';
    echo '<div class="second">';
    echo '<h2>' . htmlspecialchars($donation['title']) . '</h2>';

    if ($donation['description_main'] || $hasDetails) {
        echo '<div class="more">';

        if ($donation['description_main']) {
            echo '<p class="moreinfo-main">' . $donation['description_main'] . '</p>';
        }

        if ($hasDetails) {
            echo '<div class="moreinfo-content">';
            foreach ($donation['description_detailed'] as $detail) {
                if ($detail === '') {
                    echo '<br>';
                } else {
                    echo $detail . '<br>';
                }
            }
            echo '</div>';
            echo '<p class="moreinfo">';
            echo 'Подробнее <span class="material-symbols-rounded">keyboard_arrow_down</span>';
            echo '</p>';
        }

        echo '</div>';
    }

    echo '<button class="button buy" data-id="' . htmlspecialchars($donation['id']) . '" data-price="' . htmlspecialchars($donation['price']) . '" onclick="openModal(this)">';
    echo 'Поддержать';
    echo '</button>';
    echo '<span>' . htmlspecialchars($donation['price']) . '</span>';
    echo '</div>';
    echo '</div>';
}

require_once 'components/head.php';
require_once 'components/navigation.php';
require_once 'components/footer.php';


?>

<!DOCTYPE html>
<html>

<?php renderHead($config); ?>


<body>
<div class="container">
    <?php renderNavigation($config); ?>



    <script>
        $('.shopM').addClass('active');
        setTimeout("$('.loading-splash > img').addClass('active')", 1000);
    </script>

    <section class="main banner padd">
        <div class="textBlock max-width">
            <h1>Магазин — это<br><span class="accent typed">большая</span> поддержка сервера</h1>
            <h3>Покупая донат, вы напрямую поддерживаете проект - у нас появляются средства на рекламу и уменьшаются расходы на хостинг</h3>
        </div>
        <div class="imageBlock max-width">
            <img class="max-height" src="/assets/images/dont2.png" alt="players">
        </div>
    </section>

    <?php
    foreach ($donations as $donation) {
        renderDonationBlock($donation);
    }
    ?>

    <div class="modal">
        <div class="window">
            <div class="title">
                <h1 class="name">Подтверждение</h1>
                <span class="close material-symbols-rounded">close</span>
            </div>
            <div class="content">
                <div class="">
                    <div class="position-center">
                        <img src="" alt="" width="200">
                    </div>
                    <div class="position-center">
                        <form id="loginForm" action="/register" method="POST" class="buySCHPlus">
                            <input type="hidden" name="donation_id" id="donation_id">
                            <input type="text" name="nickname" required placeholder="Ваш никнейм">
                            <div class="durations">
                                <div class="radio-button">
                                    <input id="duration-1" type="radio" name="duration" value="1">
                                    <label for="duration-1">Цена ・ <span class="onePrice donationPrice"></span></label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="position-right">
                <a class="btn payment" href="/tex">Поддержать</a>
            </div>
        </div>
    </div>

    <?php renderFooter($config); ?>

</div>
<script>
    function openModal(button) {
        const donationId = button.getAttribute('data-id');
        const donationPrice = button.getAttribute('data-price');

        document.getElementById('donation_id').value = donationId;

        document.querySelectorAll('.donationPrice').forEach(el => {
            el.textContent = donationPrice;
        });

        document.querySelector('.modal').classList.add('active');
    }
    document.getElementById('duration-1').checked = true;
    document.querySelector('.modal .close').addEventListener('click', () => {
        document.querySelector('.modal').classList.remove('active');
    });
</script>


</body>

</html>