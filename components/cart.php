<style>
    .app {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  justify-content: center;
}

.card {
  position: relative;
  width: 100%;
  max-width: 260px;
  height: 200px;
  margin: auto;
  overflow: hidden;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

@media (min-width: 640px) {
  .card {
    max-width: 300px;
    height: 240px;
  }
}

@media (min-width: 1024px) {
  .card {
    max-width: 340px;
    height: 268px;
  }
}

.card-front,
.card-content {
  position: absolute;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  transition: top 0.5s ease;
  padding: 1rem;
}

.card-front {
  top: 0;
  background-color: #fff;
}

.card-content {
  top: 100%;
  background-color: #0a2473;
  color: white;
  transition: top 0.4s ease;
  text-align: center;
}

.card:hover .card-front {
  top: -100%;
}

.card:hover .card-content {
  top: 0;
}

.card-icon {
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
  color: blue;
}

.hover-icon {
  position: absolute;
  opacity: 0.3;
  z-index: 3;
}

@media (min-width: 640px) {
  .card-icon {
    font-size: 2rem;
  }

  .hover-icon svg {
    width: 80px;
    height: 80px;
  }
}

@media (min-width: 1024px) {
  .card-icon {
    font-size: 2.5rem;
  }

  .hover-icon svg {
    width: 96px;
    height: 96px;
  }
}




</style> 
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
