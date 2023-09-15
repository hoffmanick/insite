<div>
  <img src="{{site.baseurl}}/images/wheele.jpg" id="wheel" onclick="regen()">
</div>


<script>
  function getRandomInt(max) {
    return Math.floor(Math.random()*max);
  }
</script>

<script>
  const image = document.getElementById('wheel');

  image.addEventListener('click', () => {
    var rando;
    rando = Math.floor(Math.random()*3);
    if (rando = 0)
    {
      image.src = "{{site.baseurl}}/images/hat.png";
    } else if (rando = 1)
    {
      image.src = "{{site.baseurl}}/images/shirt.jpg";
    } else {
      image.src = "{{site.baseurl}}/images/bottle.jpg";
    }
  });
</script>
