<?php
    require "header.php";
?>

<h1 class="w3-xxxlarge w3-text-orchid"><b>Your health and wealth..</b></h1>
<hr style="width:50px;border:5px solid orchid" class="w3-round">

<!-- Photo grid (modal) -->

<div class="w3-row-padding">
  <div class="w3-half">
      <img id="pics" src="img/yoga11.jpeg" style="width:100%" onclick="onClick(this)" alt="yoga mat">
      <img id="pics" src="img/yoga99.jpeg" style="width:100%" onclick="onClick(this)" alt="yoga mat">
      <img id="pics" src="img/yoga33.jpeg" style="width:100%" onclick="onClick(this)" alt="lotus pose">
  </div>

  <div class="w3-half">
      <img id="pics" src="img/yoga44.jpeg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img id="pics" src="img/yoga55.jpeg" style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
      <img id="pics" src="img/yoga66.jpeg" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">
  </div>
</div>

<!-- Modal for full size images on click-->

<div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
          <img id="img01" class="w3-image">
          <p id="caption"></p>
      </div>
</div>

<!-- About iYoga-->

  <div class="w3-container" id="iyoga" style="margin-top:75px">
    
    <h1 class="w3-xxxlarge w3-text-orchid"><b>About iYoga</b></h1>
    <hr style="width:50px;border:5px solid orchid" class="w3-round">
    <p> Welcome to iYoga Studio, a place where you can relax, enjoy every moment of yoga session or meditation,  
        place for your physical and spiritual wealth and health. </p>
    <p> Welcome dear yogini to our iYoga Studio. We are welcoming you to enjoy some really nice time at our studio, 
        we can offer some great relaxation packages, including yoga retreats and meditation sessions and trainings. 
        Here at iYoga you can learn about our yoga instructors, you can contact our studio for more information
        about the lessons and promotions we have through our Contact page.
        You can register on our website and get access to some extra content through our Register?login page. 
        We hope to see you soon in out lovely studio.
    </p>
  </div>

<!-- End page content -->

</div>
</body>
</main>

<?php
    require "footer.php";
?>