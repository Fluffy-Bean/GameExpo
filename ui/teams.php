<!--
<div>
  <img src="images/filler2.png" alt="" loading="lazy">
  <span></span>
  <div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>
-->
<div>
  <img src="images/teams/RSLogo.svg" alt="Red Scorpion logo" loading="lazy">
  <span></span>
  <div>
    <p>Again is an innovative game made towards gamers from all ends. Speedrunners and achievers, to casual gamers admiring works and the environment. With: high quality, custom made, assets; fast, fun gameplay and many ways to finish. You are surely going to have a fun time playing! Made by Leon, Bartek, Michal and Nathan.</p>
  </div>
</div>
<div>
  <img src="images/teams/Spooked_Mouse.svg" alt="Spooked Mouse logo" loading="lazy">
  <span></span>
  <div>
    <p>Mugunghwa is a game loosely set in South Korea about a lover who has been watching you from the shadows. They leave you gifts in hope that you'll one day seek them out so you can be together forever... Made by Wren</p>
  </div>
</div>
<div>
  <img src="images/teams/rainforestRunner.png" alt="Rainforrest Runner logo" loading="lazy">
  <span></span>
  <div>
    <p>Game: Rainforest Runner</p>
    <p>Team: Bradley, William, Munir and Sophie</p>
    <p>About: Rainforest Runner is an endless runner game where you will have to dodge the dangers of the Brazilian rainforest. If you survive, you're awarded with a chest full of treasure and rewards for completing the level. Good luck! You'll need it.</p>
  </div>
</div>
<div>
  <?php
    $images = glob("../images/gallery/*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
    foreach ($images as $i) { echo "<img src='gallery/". basename($i) ."'>"; };
  ?>
</div>
