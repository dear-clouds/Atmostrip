<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Lato" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bin/materialize.min.js"></script>

  <script crossorigin src="https://unpkg.com/react@15/dist/react.min.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@15/dist/react-dom.min.js"></script>
</head>

<body>

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
          <li><a class="waves-effect waves-light btn secondary-color-bg"><span class="button-publish">Publier</span></a></li>
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

<header>


  <div class="carousel carousel-slider center" data-indicators="true">
    <!-- <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div> -->
    <div class="carousel-item red white-text" href="#one!" style="background: url('assets/img/bg-business-fish.jpg'); background-size: cover; background-position: top;">

        <div class="container">
          <div class="row">
     <div class="col s6"><img src="assets/img/business-fish-render.png" class="right responsive-img"></div>
     <div class="col s6"><div class="left-align" style="margin-top: 20%;">
       <h2>Business Fish</h2>
       <p class="grey-text">Par MadMouse</p>
     <p class="white-text synopsis-slider">Suivez les aventures de Mr. Fish, un stagiaire qui fait tout pour plaire à son patron qu'il ne peut plus blairer...</p>

     <a class="btn waves-light black white-text waves-effect">En lire plus</a>
     </div>
   </div>
   </div>
</div>

    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
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

<section id="apps" class="primary-color-bg hide-on-small-only">
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
   <div class="col s8"><h2>Nouvelles sorties</h2></div>
   <div class="col s4" id="switch-home">
     <ul class="tabs">
       <div class="comics"><li class="tab col s6"><a class="active"  href="#new-comics"><i class="fa fa-comment" aria-hidden="true"></i> Comics</a></li></div>
       <div class="romans"><li class="tab col s6"><a href="#new-romans"><i class="fa fa-book" aria-hidden="true"></i> Romans</a></li></div>
     </ul>
   </div>
   <div id="new-comics" class="col s12">

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

   <div id="new-romans" class="col s12">Test 2</div>
 </div>
    </div>
</section>

<div class="gap"></div>


<section id="by-genres">
    <div class="container">
<div class="row">
   <div class="col s8"><h2>Par genres ></h></h2></div>
   <div class="col s4" id="switch-home">
     <ul class="tabs">
       <div class="comics"><li class="tab col s6"><a class="active"  href="#genres-comics">Comics</a></li></div>
       <div class="romans"><li class="tab col s6"><a href="#genres-romans">Romans</a></li></div>
     </ul>
   </div>
   <div id="genres-comics" class="col s12">


     <!---------------------------------------- COMICS ACTION ---------------------------------------->
    <div class="clearfix"></div>
     <p><a class="btn waves-effect waves-light button-action" style="margin-left: 10px;">Action <i class="material-icons">chevron_right</i></a></p>

     <div class="col l4 s6 m6">
    <div class="card horizontal hoverable">
      <div class="card-image">
        <img src="assets/img/comic.jpg" style="width:130px !important;">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p class="title-release action">Kamikaze</p>
          <p class="author-release">TeamKamikaze</p>
          <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
          <button class="love-comic" id="clickme"><i class="material-icons">favorite_border</i></button>
        </div>
      </div>
    </div>
   </div>

   <div class="col l4 s6 m6">
  <div class="card horizontal hoverable">
    <div class="card-image">
      <img src="assets/img/comic.jpg" style="width:130px !important;">
    </div>
    <div class="card-stacked">
      <div class="card-content">
        <p class="title-release">Kamikaze</p>
        <p class="author-release">TeamKamikaze</p>
        <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
        <p class="love-comic"><i class="material-icons">favorite</i> 100</p>
      </div>
    </div>
  </div>
 </div>

 <div class="col l4 s6 m6">
<div class="card horizontal hoverable">
  <div class="card-image">
    <img src="assets/img/comic.jpg" style="width:130px !important;">
  </div>
  <div class="card-stacked">
    <div class="card-content">
      <p class="title-release">Kamikaze</p>
      <p class="author-release">TeamKamikaze</p>
      <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
      <p class="love-comic"><i class="material-icons">favorite</i> 100</p>
    </div>
  </div>
</div>
</div>


<!---------------------------------------- COMICS FANTASTIQUE ---------------------------------------->
<div class="clearfix"></div>
 <p><a class="btn waves-effect waves-light button-fantasy" style="margin-left: 10px;">Fantastique <i class="material-icons">chevron_right</i></a></p>

<div class="col l4 s6 m6">
<div class="card horizontal hoverable">
 <div class="card-image">
   <img src="assets/img/comic-6.jpg" style="width:130px !important;">
 </div>
 <div class="card-stacked">
   <div class="card-content">
     <p class="title-release">Adonis</p>
     <p class="author-release">Team Adonis</p>
     <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
     <p class="love-comic"><i class="material-icons">favorite</i> 100</p>
   </div>
 </div>
</div>
</div>

<div class="col l4 s6 m6">
<div class="card horizontal hoverable">
<div class="card-image">
 <img src="assets/img/comic-6.jpg" style="width:130px !important;">
</div>
<div class="card-stacked">
 <div class="card-content">
   <p class="title-release">Adonis</p>
   <p class="author-release">Team Adonis</p>
   <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
   <p class="love-comic"><i class="material-icons">favorite</i> 100</p>
 </div>
</div>
</div>
</div>

<div class="col l4 s6 m6">
<div class="card horizontal hoverable">
<div class="card-image">
<img src="assets/img/comic-6.jpg" style="width:130px !important;">
</div>
<div class="card-stacked">
<div class="card-content">
  <p class="title-release">Adonis</p>
  <p class="author-release">Team Adonis</p>
 <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
 <p class="love-comic"><i class="material-icons">favorite</i> 100</p>
</div>
</div>
</div>
</div>


<!---------------------------------------- COMICS COMEDIE ---------------------------------------->
<div class="clearfix"></div>
 <p><a class="btn waves-effect waves-light button-comedy" style="margin-left: 10px;">Comédie <i class="material-icons">chevron_right</i></a></p>

<div class="col l4 s6 m6">
<div class="card horizontal hoverable">
 <div class="card-image">
   <img src="assets/img/comic-4.jpg" style="width:130px !important;">
 </div>
 <div class="card-stacked">
   <div class="card-content">
     <p class="title-release">Movie Cat</p>
     <p class="author-release">James Chapman</p>
     <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
     <p class="love-comic"><i class="material-icons">favorite</i> 100</p>
   </div>
 </div>
</div>
</div>

<div class="col l4 s6 m6">
<div class="card horizontal hoverable">
<div class="card-image">
 <img src="assets/img/comic-4.jpg" style="width:130px !important;">
</div>
<div class="card-stacked">
 <div class="card-content">
   <p class="title-release">Movie Cat</p>
   <p class="author-release">James Chapman</p>
   <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
   <p class="love-comic"><i class="material-icons">favorite</i> 100</p>
 </div>
</div>
</div>
</div>

<div class="col l4 s6 m6">
<div class="card horizontal hoverable">
<div class="card-image">
<img src="assets/img/comic-4.jpg" style="width:130px !important;">
</div>
<div class="card-stacked">
<div class="card-content">
  <p class="title-release">Movie Cat</p>
  <p class="author-release">James Chapman</p>
 <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
 <p class="love-comic"><i class="material-icons">favorite</i> 100</p>
</div>
</div>
</div>
</div>

<!---------------------------------------- COMICS DRAME ---------------------------------------->
<div class="clearfix"></div>
 <p><a class="btn waves-effect waves-light button-drama" style="margin-left: 10px;">Drame <i class="material-icons">chevron_right</i></a></p>

<div class="col l4 s6 m6">
<div class="card horizontal hoverable">
 <div class="card-image">
   <img src="assets/img/comic-3.jpg" style="width:130px !important;">
 </div>
 <div class="card-stacked">
   <div class="card-content">
     <p class="title-release">TRY.AGAIN</p>
     <p class="author-release">v-0-3</p>
     <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
     <p class="love-comic"><i class="material-icons">favorite</i> 100</p>
   </div>
 </div>
</div>
</div>

<div class="col l4 s6 m6">
<div class="card horizontal hoverable">
<div class="card-image">
 <img src="assets/img/comic-3.jpg" style="width:130px !important;">
</div>
<div class="card-stacked">
 <div class="card-content">
   <p class="title-release">TRY.AGAIN</p>
   <p class="author-release">v-0-3</p>
   <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
   <p class="love-comic"><i class="material-icons">favorite</i> 100</p>
 </div>
</div>
</div>
</div>

<div class="col l4 s6 m6">
<div class="card horizontal hoverable">
<div class="card-image">
<img src="assets/img/comic-3.jpg" style="width:130px !important;">
</div>
<div class="card-stacked">
<div class="card-content">
  <p class="title-release">TRY.AGAIN</p>
  <p class="author-release">v-0-3</p>
 <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
 <p class="love-comic"><i class="material-icons">favorite</i> 100</p>
</div>
</div>
</div>
</div>

 </div>

   <div id="genres-romans" class="col s12">Test 2</div>
 </div>
    </div>
</section>

<section>
    <div class="parallax-container">
     <div class="parallax"><img src="assets/img/bg-sidebar.jpg"></div>
     <div class="container">
       <h2 class="white-text">Tu veux publier une histoire ?</h2>
       <p class="white-text" style="max-width: 600px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

       <p><a class="btn waves-effect waves-light black white-text">En savoir plus</a></p>
     </div>
   </div>
</section>

<div class="gap"></div>

<section id="tops">
    <div class="container">
<div class="row">
   <div class="col s8"><h2>Les tops ></h2></div>
   <div class="col s4" id="switch-home">
     <ul class="tabs">
       <div class="comics"><li class="tab col s6"><a class="active"  href="#top-comics">Comics</a></li></div>
       <div class="romans"><li class="tab col s6"><a href="#top-romans" class="romans">Romans</a></li></div>
     </ul>
   </div>
   <div id="top-comics" class="col s12">

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="clearfix"></div>

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

         <div class="col l2 s6 m6">
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

   <div id="top-romans" class="col s12">Test 2</div>
 </div>
    </div>
</section>







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
        $('nav').css('background', '#df3469');
     } else {
        $('nav').css('background', 'linear-gradient(180deg,rgba(6,6,22,.5),rgba(6,6,22,0))');
     }
 });


var $toastContent = $('<span>Ajouté aux favoris !</span>').add($('<button class="btn-flat toast-action">Annuler</button>'));;
 var button = document.getElementById('clickme'),
   count = 0;
 button.onclick = function() {
   count += 1;
   button.innerHTML = "<div class=\"primary-color\"><i class=\"material-icons\">favorite</i> " + count + "</div>";
   Materialize.toast($toastContent, 4000);
 };

});

</script>
</body>
</html>
