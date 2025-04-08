<?php
function renderCard($icon, $heading, $content, $hoverIcon = '') {
    echo '
    <div class="card">
        <div class="card-front">
            <div class="card-icon">' . $icon. '</div>
            <h3 class="font-bold text-lg text-black">' . htmlspecialchars($heading) . '</h3>
        </div>
        <div class="card-content">
            <div class="card-icon hover-icon">' . htmlspecialchars($hoverIcon) . '</div>
            <h3 class="text-xl font-bold z-10">' . htmlspecialchars($heading) . '</h3>
            <p class="text-sm z-10">' . htmlspecialchars($content) . '</p>
        </div>
    </div>';
}
?>
