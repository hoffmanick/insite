<style>
#wheel {
  animation: rotation 2s infinite linear;
}

@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}
</style>

<div>
  <img src="{{site.baseurl}}/images/wheele.jpg" id="wheel">
</div>


<script>
 // const image = document.getElementById('wheel');
 // 
</script>

<script>
    const image = document.getElementById('wheel');

    image.addEventListener('click', () => {
    var rando;
    rando = Math.floor(Math.random()*3);
    if (rando == 0)
    {
      image.src = "{{site.baseurl}}/images/hat.png";
    } else if (rando == 1)
    {
      image.src = "{{site.baseurl}}/images/shirt.jpg";
    } else {
      image.src = "{{site.baseurl}}/images/bottle.jpg";
    }
   setTimeout(function() {
   image.src = "{{site.baseurl}}/images/wheele.jpg";
}, 3000);
  });
</script>
