<style>
html, body { min-height: 100%; }
#wheel {
  animation-name: rotation;
  animation-duration: 0s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

  #textbox {
    display: none;
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

  section {
    background-color: palegoldenrod;
  }
  
</style>
<div style="display:grid;grid-template-columns:auto auto;">
<div id="colleft" style="display:grid;align-content:center;">
<div style="padding-top:10px;">
  <h1 style="text-align:center;">Spin the wheel!</h1>
  <p style="text-align:center;">Sign up for our mailing list to spin the wheel and see what prize you get</p>
</div>

<iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>

<form method="POST" action="https://script.google.com/macros/s/AKfycbw_v98QgofnXhW3VfhGUm_LuaEmzQqVbqOatK8vjfYQx-IAMaabs1G1amnLCB0oa6lycg/exec" id="formm" target="dummyframe" autocomplete="off">
  <label for="em">Email:</label>
  <input type="email" id="em" name="Email" placeholder="me@fun.com" required>
  <br>
  <label for="nam">Name:</label>
  <input type="text" id="nam" name="Name" placeholder="John Doe" required>
  <br>
  <button type="submit">Send</button>
</form> 
<br>
</div>
<div id="colright">
<div style="display:grid;justify-content:center;">
  <img src="{{site.baseurl}}/images/wheel.png" id="wheel" style="height:460px;margin-top:20px;">
  <div id="textbox"><p id="text">blank</p></p></div>
</div>
</div>
</div>
<script>
    const image = document.getElementById('wheel');
    const form = document.getElementById('formm');
    const text = document.getElementById('text');
    const textbox = document.getElementById('textbox');
    form.addEventListener('submit', () => {
    image.style.animationDuration = "2s";
    var rando;
    rando = Math.floor(Math.random()*17);
    setTimeout(function() {
    if (rando == 0)
    {
      image.src = "{{site.baseurl}}/images/notepad2.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A notepad!";
      textbox.style.display="block";
    } else if (rando == 1)
    {
      image.src = "{{site.baseurl}}/images/lanyard.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A lanyard!";
      textbox.style.display="block";
    } 
    else if (rando == 2)
    {
      image.src = "{{site.baseurl}}/images/sticker2.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A sticker!";
      textbox.style.display="block";
    } 
    else if (rando == 3)
    {
      image.src = "{{site.baseurl}}/images/notebook.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A notebook!";
      textbox.style.display="block";
    } 
    else if (rando == 4)
    {
      image.src = "{{site.baseurl}}/images/waterbottle.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A water bottle!";
      textbox.style.display="block";
    } 
    else if (rando == 5)
    {
      image.src = "{{site.baseurl}}/images/straw.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A straw!";
      textbox.style.display="block";
    } 
    else if (rando == 6)
    {
      image.src = "{{site.baseurl}}/images/bar.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A Kind Bar!";
      textbox.style.display="block";
    } 
    else if (rando == 7)
    {
      image.src = "{{site.baseurl}}/images/lanyard.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A lanyard!";
      textbox.style.display="block";
    } 
    else if (rando == 8)
    {
      image.src = "{{site.baseurl}}/images/sticker2.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A sticker!";
      textbox.style.display="block";
    } 
    else if (rando == 9)
    {
      image.src = "{{site.baseurl}}/images/notepad2.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A notepad!";
      textbox.style.display="block";
    } 
    else if (rando == 10)
    {
      image.src = "{{site.baseurl}}/images/straw.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A straw!";
      textbox.style.display="block";
    } 
    else if (rando == 11)
    {
      image.src = "{{site.baseurl}}/images/bar.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A Kind bar!";
      textbox.style.display="block";
    } 
    else if (rando == 12)
    {
      image.src = "{{site.baseurl}}/images/notebook.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A notebook!";
      textbox.style.display="block";
    } 
    else if (rando == 13)
    {
      image.src = "{{site.baseurl}}/images/straw.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A straw!";
      textbox.style.display="block";
    } 
    else if (rando == 14)
    {
      image.src = "{{site.baseurl}}/images/sticker2.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A sticker!";
      textbox.style.display="block";
    } 
    else if (rando == 15)
    {
      image.src = "{{site.baseurl}}/images/notepad2.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A notepad!";
      textbox.style.display="block";
    } 
    else if (rando == 16)
    {
      image.src = "{{site.baseurl}}/images/lanyard.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A lanyard!";
      textbox.style.display="block";
    } 
    else {
      image.src = "{{site.baseurl}}/images/notebook.png";
      image.style.animationDuration = "0s";
      text.innerHTML = "A notebook!";
      textbox.style.display="block";
    }
}, 2000);
   setTimeout(function() {
   image.src = "{{site.baseurl}}/images/wheel.png";
   document.getElementById("em").value = "";
   document.getElementById("nam").value = "";
   document.getElementById("textbox").style.display = "none";
     
}, 5000);
  });
</script>
