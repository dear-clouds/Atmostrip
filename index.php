<?php include('header.php'); ?>

<header>
  <div class="navbar-fixed">
    <nav role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo hide-on-med-and-down"><img src="assets/img/logo.png"></a>

        <ul class="left hide-on-med-and-down">
          <li><a href="#">Comics</a></li>
          <li><a href="#">Romans</a></li>
          <li><a href="#">Genres</a></li>
        </ul>

        <ul class="right hide-on-med-and-down">
          <li><a class="waves-effect waves-light btn secondary-color-bg button-publish"><span>Publier</span></a></li>
          <li><a href="#"><i class="material-icons">search</i></a></li>
          <li><a href="#"><i class="material-icons">favorite_border</i></a></li>
          <li><a href="#"><i class="material-icons">notifications</i></a></li>
          <li><a href="#" data-activates="slide-out" class="ava-sidebar"><i class="material-icons">person</i></a></li>
        </ul>



        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>

  <div class="carousel carousel-slider center" data-indicators="true">
    <!-- <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div> -->
    <div class="carousel-item red white-text" href="#one!" style="background: url('assets/img/bg-red-king.jpg'); background-size: cover; background-position: top; height: 500px;">

        <div class="container">
          <div class="row">
     <div class="col s6"><img src="assets/img/red-king-render.png" class="center responsive-img render-home"></div>
     <div class="col s6"><div class="left-align" style="margin-top: 30%;">
       <h2>The Red King</h2>
       <p class="author">Par Heylenne</p>
     <p class="white-text synopsis-slider">Un ado perturbé voit sa vie basculer après que d'étranges créatures se soient introduites chez lui...</p>

     <a class="btn waves-light black white-text waves-effect">En lire plus</a>
     </div>
   </div>
   </div>
</div>
    </div>


    <div class="carousel-item red white-text" href="#two!" style="background: url('assets/img/bg-business-fish.jpg'); background-size: cover; background-position: top;">

        <div class="container">
          <div class="row">
     <div class="col s6"><img src="assets/img/business-fish-render.png" class="right responsive-img"></div>
     <div class="col s6"><div class="left-align" style="margin-top: 30%;">
       <h2>Business Fish</h2>
       <p class="author">Par MadMouse</p>
     <p class="white-text synopsis-slider">Suivez les aventures de Mr. Fish, un stagiaire qui fait tout pour plaire à son patron qu'il ne peut plus blairer...</p>

     <a class="btn waves-light black white-text waves-effect">En lire plus</a>
     </div>
   </div>
   </div>
</div>
    </div>



    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>

</header>

<section id="apps" class="primary-color-bg hide-on-med-and-down">
    <div class="container">
     <img src="assets/img/google-store.png" style="margin-top: 27px; margin-right: 20px;"> <img src="assets/img/apple-store.png" style="margin-top: 30px;">
     <!-- <img src="assets/img/mascottes-app.png" class="right responsive-img" style="width: 280px; position: absolute; top: 455px; right: 20%;"> -->
     <img src="assets/img/phone-mockup.png" class="responsive-img" style="position: absolute; bottom: -19px; right: 400px;">
     <img src="assets/img/mascottes-app.png" class="responsive-img" style="position: absolute; bottom: -19px; right: 0; width: 400px;">

    </div>
</section>

<ul id="slide-out" class="side-nav">
   <li><div class="user-view">
     <div class="background">
       <img src="assets/img/bg-sidebar.jpg">
     </div>
     <a href="#!user"><img class="circle" src="assets/img/madmouse-profil.png"></a>
     <a href="#!name"><span class="white-text name">John Doe</span></a>
     <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
   </div></li>
   <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
   <li><a href="#!">Second Link</a></li>
   <li><div class="divider"></div></li>
   <li><a class="subheader">Subheader</a></li>
   <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
 </ul>


<section id="new-releases">
    <div class="container">
<div class="row">
   <div class="col s8"><h2>Dernières sorties</h2></div>
   <div class="col s4" id="switch-home">
     <ul class="tabs">
       <div class="comics"><li class="tab col s6"><a class="active"  href="#new-comics"><i class="fa fa-comment" aria-hidden="true"></i> Comics</a></li></div>
       <div class="romans"><li class="tab col s6"><a href="#new-romans"><i class="fa fa-book" aria-hidden="true"></i> Romans</a></li></div>
     </ul>
   </div>
   <div id="new-comics" class="col s12">


<?php include('new-comics.php'); ?>


   </div>

   <div id="new-romans" class="col s12">Test 2</div>
 </div>
    </div>
</section>

<div class="gap"></div>


<section id="by-genres">
    <div class="container">
<div class="row">
   <div class="col s8"><h2>Top par genres ></h></h2></div>
   <div class="col s4" id="switch-home">
     <ul class="tabs">
       <div class="comics"><li class="tab col s6"><a class="active"  href="#genres-comics"><i class="fa fa-comment" aria-hidden="true"></i> </i>Comics</a></li></div>
       <div class="romans"><li class="tab col s6"><a href="#genres-romans"><i class="fa fa-book" aria-hidden="true"></i> Romans</a></li></div>
     </ul>
   </div>
   <div id="genres-comics" class="col s12">

<?php include('genres-comics.php'); ?>


 </div>

   <div id="genres-romans" class="col s12">Test 2</div>
 </div>
    </div>
</section>


<div class="gap"></div>

<section id="random">
    <div class="parallax-container">
     <div class="parallax"><img src="assets/img/bg-random.jpg"></div>
     <div class="container">
       <h2>Aléatoire <i class="material-icons">refresh</i></h2>

             <div class="row">
               <div class="col l2 s6 m4">
                 <div class="card hoverable">
                   <div class="card-image">
                     <img src="assets/img/comic.jpg">

                     <a class="btn-floating halfway-fab waves-effect waves-light secondary-color-bg hide-on-small-only"><i class="material-icons">favorite</i></a>
                   </div>
                   <div class="card-content">
                     <p class="title-release">Kamikaze</p>
                     <p class="author-release">TeamKamikaze</p>
                       <div class="chip chip-action">Action</div>
                   </div>
                 </div>
               </div>

               <div class="col l2 s6 m4">
                 <div class="card hoverable">
                   <div class="card-image">
                     <img src="assets/img/comic-2.jpg">

                     <a class="btn-floating halfway-fab waves-effect waves-light secondary-color-bg hide-on-small-only"><i class="material-icons">favorite</i></a>
                   </div>
                   <div class="card-content">
                     <p class="title-release">The Inheritors</p>
                     <p class="author-release">Jandruff</p>
                       <div class="chip chip-sciencefiction">Science-Fiction</div>
                   </div>
                 </div>
               </div>

               <div class="col l2 s6 m4">
                 <div class="card hoverable">
                   <div class="card-image">
                     <img src="assets/img/comic-3.jpg">

                     <a class="btn-floating halfway-fab waves-effect waves-light secondary-color-bg hide-on-small-only"><i class="material-icons">favorite</i></a>
                   </div>
                   <div class="card-content">
                     <p class="title-release">TRY.AGAIN</p>
                     <p class="author-release">v-0-3</p>
                       <div class="chip chip-drama">Drame</div>
                   </div>
                 </div>
               </div>

               <div class="col l2 s6 m4">
                 <div class="card hoverable">
                   <div class="card-image">
                     <img src="assets/img/comic-4.jpg">

                     <a class="btn-floating halfway-fab waves-effect waves-light secondary-color-bg hide-on-small-only"><i class="material-icons">favorite</i></a>
                   </div>
                   <div class="card-content">
                     <p class="title-release">Movie Cat</p>
                     <p class="author-release">James Chapman</p>
                       <div class="chip chip-comedy">Comédie</div>
                   </div>
                 </div>
               </div>

               <div class="col l2 s6 m4">
                 <div class="card hoverable">
                   <div class="card-image">
                     <img src="assets/img/comic-5.jpg">

                     <a class="btn-floating halfway-fab waves-effect waves-light secondary-color-bg hide-on-small-only"><i class="material-icons">favorite</i></a>
                   </div>
                   <div class="card-content">
                     <p class="title-release">Franken's Village</p>
                     <p class="author-release">Cheolbum</p>
                       <div class="chip chip-horror">Horreur</div> <div class="chip chip-romance">Romance</div>
                   </div>
                 </div>
               </div>

               <div class="col l2 s6 m4">
                 <div class="card hoverable">
                   <div class="card-image">
                     <img src="assets/img/comic-6.jpg">

                     <a class="btn-floating halfway-fab waves-effect waves-light secondary-color-bg hide-on-small-only"><i class="material-icons">favorite</i></a>
                   </div>
                   <div class="card-content">
                     <p class="title-release">Adonis</p>
                     <p class="author-release">Team Adonis</p>
                       <div class="chip chip-fantasy">Fantastique</div>
                   </div>
                 </div>
               </div>
             </div>

     </div>
   </div>
</section>
