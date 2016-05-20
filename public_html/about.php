<!DOCTYPE html>
<html lang="en">
  <?php include "php/meta.php";?>  
  <body>
  	<?php include "header.php";?>
    <section id="container" class="center fit">
        </article>
        <article class="main center fit" id="overview">
          <h1 class="center offset">Who We are and What We Believe</h1>
          <img class="offset icon center" src="graphics/icons/bible_icon.png" width="700" height="700" alt="Overview" title="Overview"/>
          <span class="offset center fit"><hr class="hr1 center"><?php include "content/about/overview.html";?></span>
        </article> 
        <article class="main center fit" id="mission">
          <h1 class="center offset">Mission</h1>
          <img class="offset icon center" src="graphics/icons/mission_icon.png" width="97" height="106" alt="Mission" title="Mission"/>
          <span class="offset center fit"><hr class="hr1 center"><?php include "content/about/mission.html";?></span>
        </article>
        <article class="flex-wrapper fit" >
          <span class="flex" id="vision">
              <img class="flex icon" src="graphics/icons/vision_icon.png" alt="Vision" title="Vision">
              <h2 class="flex fit">VISION</h2>
              <span class="flex center fit"><?php include "content/about/vision.html";?></span>
          </span>
          <span class="flex" id="experience">
              <img class="flex icon" src="graphics/icons/experience_icon.png" alt="Experience" title="Experience">
              <h2 class="flex fit">EXPERIENCE</h2>
              <span class="flex center fit"><?php include "content/about/experience.html";?></span>
          </span>
          <span class="flex" id="leadership">
              <img class="flex icon" src="graphics/icons/leadership_icon.png" alt="Leadership" title="Leadership">
              <h2 class="flex fit">LEADERSHIP</h2>
              <span class="flex center fit"><?php include "content/about/leadership.html";?></span>
          </span>
        </article>
        <article class="main center fit" id="core-values">
          <h1 class="center offset">Core Values</h1>
          <img class="offset icon center" src="graphics/icons/mission_icon.png" width="700" height="700" alt="Core Values" title="Core Values"/>
          <span class="offset center fit"><hr class="hr1 center"><?php include "content/about/core_values.html";?></span>
        </article>
        <article class="main center fit" id="goals">
          <h1 class="center offset">Goals</h1>
          <img class="offset icon center" src="graphics/icons/mission_icon.png" width="700" height="700" alt="Goals" title="Goals"/>
          <span class="offset center fit"><hr class="hr1 center"><?php include "content/about/goals.html";?></span>
        </article>
    </section>
    <?php include "footer.php";?>
  </body>
</html>