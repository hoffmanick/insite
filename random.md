<div>
 <button onclick="regen()">
  <img src="{{site.baseurl}}/images/wheele.jpg" id="wheel">
 </button>
</div>


<script>
 // const image = document.getElementById('wheel');
 // 
</script>

<script>
    const image = document.getElementById('wheel');
    image.animate({
    rotation: 90,
    duration: 1000
    });
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
