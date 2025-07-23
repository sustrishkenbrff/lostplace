<?php
function renderInfoBlocks() {
    echo "
    <h1 class='info-block-title' id='about'>Особенности</h1>
    
    <div class='info-block mobile-invert loading'>
        <div class='first'>
            <img src='/assets/images/tex.png' alt='image'>
        </div>
        <div class='second'>
            <h2>EmoteCraft</h2>
<p>У нас работает <span class='accent'>EmoteCraft</span> — система эмоций, позволяющая <span class='accent'>оживить</span> персонажа с помощью анимаций!  
<br/>Вы можете танцевать, махать рукой, сидеть, спать и даже устраивать целые сценки — всё это делает игру <span class='accent'>намного живее</span> и веселее!</p>

        </div>
    </div>

    <div class='info-block loading'>
        <div class='first'>
            <h2>PlasmoVoice</h2>
 <p><span class='accent'>PlasmoVoice</span> — голосовой чат прямо в Minecraft, без сторонних программ!  
А с аддоном <span class='accent'>музыки</span> вы можете использовать музыкальные пластинки как настоящие <span class='accent'>радиостанции</span> — включайте треки, и все рядом услышат вашу музыку!</p>

        </div>
        <div class='second'>
            <img src='/assets/images/dont.png' alt='image'>
        </div>
    </div>
    
    <div class='info-block mobile-invert loading'>
        <div class='first'>
            <img src='/assets/images/stolb.webp' alt='image'>
        </div>
        <div class='second'>
            <h2>Стенды</h2>
            <p>Кстати, у нас есть <span class='accent'> редактор</span> Армор-стендов, с помощью которого можно создавать <span class='accent'>невероятные</span> вещи!
<br/>На рендере один из тысячи примеров как его можно использовать.</p>
        </div>
    </div>";
}
?>