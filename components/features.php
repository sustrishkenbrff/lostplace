<?php
function renderFeatures() {
    $features = [
        [
            'icon' => 'favorite',
            'title' => 'фича',
            'description' => 'бла бла бла'
        ],
        [
            'icon' => 'flash_on',
            'title' => 'фича',
            'description' => 'бла бла бла'
        ],
        [
            'icon' => 'local_florist',
            'title' => 'фича',
            'description' => 'бла бла бла'
        ],
        [
            'icon' => 'key_vertical',
            'title' => 'фича',
            'description' => 'бла бла бла'
        ],
        [
            'icon' => 'credit_score',
            'title' => 'фича',
            'description' => 'бла бла бла'
        ],
        [
            'icon' => 'fast_forward',
            'title' => 'фича',
            'description' => 'бла бла бла'
        ]
    ];

    echo "<div class='cards simple'>";

    foreach ($features as $feature) {
        echo "
        <div class='card'>
            <div class='cardIcon'>
                <span class='material-symbols-rounded' translate='no'>{$feature['icon']}</span>
            </div>
            <div class='cardContent'>
                <h3>{$feature['title']}</h3>
                <p>{$feature['description']}</p>
            </div>
        </div>";
    }

    echo "</div>";

    echo "
    <div class='pop-up'>
        <img src='#' alt='image'>
    </div>";
}
?>