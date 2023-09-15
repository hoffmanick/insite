<div>
 <button onclick="regen()">
  <img src="{{site.baseurl}}/images/wheele.jpg" id="wheel">
 </button>
</div>


<script>
  function getRandomInt(max) {
    return Math.floor(Math.random()*max);
  }
</script>

<script>
  function regen() {
    const image = document.getElementById('wheel');

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
}, 20000);
  }
</script>
