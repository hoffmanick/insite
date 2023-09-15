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

<div>
  <img src="{{site.baseurl}}/images/wheel.png" id="wheel">
</div>


<script>
 // const image = document.getElementById('wheel');
 // 
</script>

<script>
    const image = document.getElementById('wheel');

    image.addEventListener('click', () => {
    image.style.animationDuration = "3s";
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
