<style>
#wheel {
  animation-name: rotation;
  animation-duration: 0s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(1080deg);
  }
}
</style>

<form action="/action_page.php" id="formm">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

<div>
  <h1 style="text-align:center;">Spin the wheel!</h1>
  <p style="text-align:center;">Click on the wheel to spin it and see what prize you get</p>
</div>

<div style="display:grid;justify-content:center;">
  <img src="{{site.baseurl}}/images/wheel.png" id="wheel">
</div>


<script>
    const image = document.getElementById('wheel');
    const form = document.getElementById('formm');
    form.addEventListener('submit', () => {
    image.style.animationDuration = "2s";
    var rando;
    rando = Math.floor(Math.random()*3);
    setTimeout(function() {
    if (rando == 0)
    {
      image.src = "{{site.baseurl}}/images/hat.png";
      image.style.animationDuration = "0s";
    } else if (rando == 1)
    {
      image.src = "{{site.baseurl}}/images/shirt.jpg";
      image.style.animationDuration = "0s";
    } else {
      image.src = "{{site.baseurl}}/images/bottle.jpg";
      image.style.animationDuration = "0s";
    }
}, 3000);
   setTimeout(function() {
   image.src = "{{site.baseurl}}/images/wheel.png";
}, 6000);
  });
</script>
