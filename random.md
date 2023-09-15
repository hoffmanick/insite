<div>
  <img src="{{site.baseurl}}/images/wheele.jpg" id="wheel" onclick="regen()">
</div>


<script>
  function getRandomInt(max) {
    return Math.floor(Math.random()*max);
  }
</script>

<script>
  function regen()  {
  const image = document.getElementById('wheel');

  image.addEventListener('click', () => {
    var rando;
    rando = getRandomInt(3);
    if (rando = 0)
    {
      image.src = "{{site.baseurl}}/images/hat.png";
    }
    if (rando = 1)
    {
      image.src = "{{site.baseurl}}/images/shirt.jpg";
    }
    if (rando = 2)
    {
      image.src = "{{site.baseurl}}/images/bottle.jpg";
    }
  });
  }
</script>
