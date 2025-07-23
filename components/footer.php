<?php
function renderFooter($config) {
    $site_name = $config['site_name'];
    $year = date('Y');

    echo "
    <footer class='footer'>
        <div class='copyright'>
            <img src='/assets/images/logo.png' alt='logo'>
            Copyright © {$site_name} {$year}. All rights reserved.
            The server {$site_name} is not affiliated with Mojang Studios.
        </div>
    </footer>";
}
?>