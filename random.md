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

  #formm {
    display:grid;
    justify-content:center;
  }
  
</style>

<div>
  <h1 style="text-align:center;">Spin the wheel!</h1>
  <p style="text-align:center;">Sign up for our mailing list to spin the wheel and see what prize you get</p>
</div>

<iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>

<form method="POST" action="https://script.google.com/macros/s/AKfycbw_v98QgofnXhW3VfhGUm_LuaEmzQqVbqOatK8vjfYQx-IAMaabs1G1amnLCB0oa6lycg/exec" id="formm" target="dummyframe">
  <label for="em">Email:</label><br>
  <input type="email" id="em" name="Email" placeholder="me@fun.com" required>
  <br>
  <label for="nam">Name:</label><br>
  <input type="text" id="nam" name="Name" placeholder="John Doe" required>
  <br><br>
  <button type="submit">Send</button>
</form> 



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
}, 2000);
   setTimeout(function() {
   image.src = "{{site.baseurl}}/images/wheel.png";
}, 5000);
  });
</script>
