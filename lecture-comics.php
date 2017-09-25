<?php include('header.php'); ?>

<div class="navbar-fixed" style="background: black !important;">
  <nav role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo hide-on-med-and-down"><img src="assets/img/logo.png"></a>

      <ul class="left hide-on-med-and-down">
        The Red King > Le commencement
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn"><i class="material-icons">keyboard_arrow_left</i></a></li>
        <li>#01</li>
        <li><a class="waves-effect waves-light btn"><i class="material-icons">keyboard_arrow_right</i></a></li>
        <li><div class="switch"><i class="material-icons">lightbulb_outline</i></div></li>
        <li><audio autoplay="autoplay" controls="controls"><source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" /></audio></li>
      </ul>

    </div>
  </nav>
</div>

<div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">insert_chart</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">format_quote</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">publish</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>


<section id="planche-comics" class="center-align" style="padding-top: 100px;">



    <img src="assets/comics/the-red-king-chapter-1.jpg" class="lightsoff">
</section>


<footer>
    <div class="container">


<img src="assets/img/logo-bw.png" style="vertical-align: middle; margin-right: 30px;">

    <a href="#"><span class="socicon-facebook"></span></a>

    <a href="#"><span class="socicon-instagram"></span></a>

    <a href="#"><span class="socicon-twitter"></span></a>

    <a href="#"><span class="socicon-pinterest"></span></a>

    <a href="#"><span class="socicon-youtube"></span></a>

<p><a href="#">AIDE</a> <a href="#">CONTACT</a> <a href="#">PUBLIER</a> <a href="#">COMICS</a> <a href="#">ROMANS</a></p>
<p>© 2017 Atmostrip. Made by Bensafidine Walid.</p>

    </div>
</footer>




  <script>
     $('.carousel.carousel-slider').carousel({fullWidth: true});
  //    setInterval(function() {
  //   $('.carousel').carousel('next');
  // }, 5000); // every 2 seconds

     // Initialize collapse button
     $('.ava-sidebar').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,
      }
    );

    $(document).ready(function(){
     $('.parallax').parallax();
   });
  </script>

  <script>
  var options = [
    {selector: '#by-genres', offset: 400, callback: function(el) { Materialize.card($(el)); } }
  ];

  Materialize.scrollFire(options);
  </script>

<script>
$(document).ready(function(){
 var scroll_start = 0;
 var startchange = $('nav');
 var offset = startchange.offset();
 $(document).scroll(function() {
    scroll_start = $(this).scrollTop();
    if(scroll_start > offset.top) {
        $('nav').css('background', '#000');
     } else {
        $('nav').css('background', '#000');
     }
 });
});


$(window).scroll(
    {
        previousTop: 0
    },
    function () {
    var currentTop = $(window).scrollTop();
    if (currentTop < this.previousTop) {
        $(".navbar-fixed").show();
    } else {
        $(".navbar-fixed").hide();
    }
    this.previousTop = currentTop;
});
</script>


<script src="assets/js/jquery.allofthelights.js"></script>

<script>
$(document).ready(function() {
  $('.lightsoff').allofthelights();
});
</script>

</body>
</html>
