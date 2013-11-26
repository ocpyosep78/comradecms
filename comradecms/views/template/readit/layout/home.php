<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <?php $this->load->view($template . 'element/general/css'); ?>
    <?php $this->load->view($template . 'element/general/js'); ?>

  </head>
  <body>
    <!-- Add your site or application content here -->
    <div id="wrapper">
      <div id="hero" class="clearfix">
        <div id="global-social">
          <a class="global-facebook" href="#">
            <i class="icon-facebook"></i><span>facebook</span>
          </a>
          <a class="global-twitter" href="#">
            <i class="icon-twitter"></i><span>twitter</span>
          </a>
          <a class="global-googleplus" href="#">
            <i class="icon-google-plus"></i><span>google plus</span>
          </a>
          <a class="global-pinterest" href="#">
            <i class="icon-pinterest"></i><span>pinterest</span>
          </a>
        </div>
      </div>

      <header id="topbar">
        <div id="menus-wrapper" class="clearfix">
          <a id="logo" href="index-2.html"></a>
          <nav id="menu">
            <ul class="clearfix">
              <li class="first_list"><a href="index-2.html" class="main_menu_first main_current">home</a></li>
              <li class="first_list"><a href="elements.html" class="main_menu_first">elements</a></li>
              <li class="first_list"><a href="gallery.html" class="main_menu_first">gallery</a></li>
              <li class="first_list with_dropdown">
                <a href="blog.html" class="main_menu_first">blog</a>
                <ul>
                  <li class="second_list second_list_border"><a href="blog.html" class="main_menu_second">blog page</a></li>
                  <li class="second_list second_list_border"><a href="blog-cover.html" class="main_menu_second">cover blog page</a></li>
                  <li class="second_list second_list_border"><a href="blog-soundcloud.html" class="main_menu_second">soundcloud blog page</a></li>
                  <li class="second_list second_list_border"><a href="blog-soundcloud-cover.html" class="main_menu_second">cover soundcloud blog page</a></li>
                  <li class="second_list second_list_border"><a href="blog-audio.html" class="main_menu_second">audio blog page</a></li>
                  <li class="second_list second_list_border"><a href="blog-audio-cover.html" class="main_menu_second">cover audio blog page</a></li>
                  <li class="second_list"><a href="blog-video.html" class="main_menu_second">video blog page</a></li>
                </ul>
              </li>
              <li class="first_list"><a href="portfolio.html" class="main_menu_first">portfolio</a></li>
              <li class="first_list"><a href="contact.html" class="main_menu_first">contact us</a></li>
            </ul>
          </nav>
          <nav id="toolbar">
            <form method="get" id="searchform" action="#">
              <a href="#" id="search-button"><i class="icon-search"></i></a>
              <fieldset>
                <input type="text" name="s" id="s">
              </fieldset>
            </form>
            <a href="#" id="like-button" rel="ajax/like.php"><i class="icon-heart"></i></a>
            <a href="#" id="fullscreen-button"><i class="icon-fullscreen"></i></a>
          </nav>
        </div>
      </header>
      <div id="main">
        <div id="slicebox">
          <ul id="sb-slider" class="sb-slider">
            <li>
              <a href="http://www.flickr.com/photos/thomasclaveirole/8261304131/" target="_blank"><img src="images/slicebox/1.jpg" alt="image1"/></a>
              <div class="sb-description sb-description-light">
                <h3><span>Tourelle escamotable, fort de Domgermain, France, 2012</span></h3>
              </div>
            </li>
            <li>
              <a href="http://www.flickr.com/photos/thomasclaveirole/8262331072/" target="_blank"><img src="images/slicebox/2.jpg" alt="image2"/></a>
              <div class="sb-description sb-description-light">
                <h3><span>Entrée de paix, fort de Domgermain, France, 2012</span></h3>
              </div>
            </li>
            <li>
              <a href="http://www.flickr.com/photos/thomasclaveirole/8196073067/" target="_blank"><img src="images/slicebox/3.jpg" alt="image1"/></a>
              <div class="sb-description">
                <h3><span>Extérieur, ancien IUFM, Nancy, 2012</span></h3>
              </div>
            </li>
            <li>
              <a href="http://www.flickr.com/photos/thomasclaveirole/8136534508/" target="_blank"><img src="images/slicebox/4.jpg" alt="image1"/></a>
              <div class="sb-description">
                <h3><span>Graffiti par Roberu, ancien IUFM, Nancy, 2012</span></h3>
              </div>
            </li>
            <li>
              <a href="http://www.flickr.com/photos/thomasclaveirole/8136618754/" target="_blank"><img src="images/slicebox/5.jpg" alt="image1"/></a>
              <div class="sb-description sb-description-light">
                <h3><span>Salle repeinte par Code Couleur, ancien IUFM, Nancy, 2012</span></h3>
              </div>
            </li>
            <li>
              <a href="http://www.flickr.com/photos/thomasclaveirole/8136578344/" target="_blank"><img src="images/slicebox/6.jpg" alt="image1"/></a>
              <div class="sb-description sb-description-light">
                <h3><span>Salle avec des graffitis, ancien IUFM, Nancy, 2012</span></h3>
              </div>
            </li>
            <li>
              <a href="http://www.flickr.com/photos/thomasclaveirole/8139880476/" target="_blank"><img src="images/slicebox/7.jpg" alt="image1"/></a>
              <div class="sb-description sb-description-light">
                <h3><span>Graffitis en cours de réalisation par OnOff, ancien IUFM, Nancy, 2012</span></h3>
              </div>
            </li>
          </ul>

          <div id="nav-arrows" class="nav-arrows">
            <a href="#"><i class="icon-chevron-left"></i></a>
            <a href="#"><i class="icon-chevron-right"></i></a>
          </div>

        </div>

        <div id="home" class="group">
          <div id="timeline" class="col span_2_of_3">  
            <div class="timeline-item">
              <div class="timeline-author-date"><span>16/02/2013</span></div>
              <a href="blog.html" class="timeline-author-link">
                <img alt="avatar" src="images/avatars/avatar.png">
              </a>
              <a href="blog.html" class="timeline-item-link">
                <div class="timeline-item-content">
                  <div class="timeline-item-cover">
                    <img src="images/cover/paris.jpg" alt="paris">
                  </div>
                  <h2>Plongée dans le fantastique social</h2>
                  <p>Connaissez-vous l’homme-aquarium ? C’est un camelot du marché d’Aligre qui avale couramment cinq litres d’eau, puis cinq petites grenouilles, devant les yeux des badauds ébahis, avant de les recracher, flotte et rainettes bien vivantes, et de faire sa quête…</p>
                  <div class="timeline-item-meta"><span class="timeline-item-author">Félix Bayart</span>, <span class="timeline-item-comments-count">18 comments</span></div>
                </div>
              </a>
            </div>
            <div class="timeline-item">
              <div class="timeline-author-date"><span>16/02/2013</span></div>
              <a href="blog.html" class="timeline-author-link">
                <img alt="avatar" src="images/avatars/avatar.png">
              </a>
              <a href="blog.html" class="timeline-item-link">
                <div class="timeline-item-content">
                  <div class="timeline-item-cover">
                    <img src="images/cover/paris.jpg" alt="paris">
                  </div>
                  <h2>Plongée dans le fantastique social</h2>
                  <p>Connaissez-vous l’homme-aquarium ? C’est un camelot du marché d’Aligre qui avale couramment cinq litres d’eau, puis cinq petites grenouilles, devant les yeux des badauds ébahis, avant de les recracher, flotte et rainettes bien vivantes, et de faire sa quête…</p>
                  <div class="timeline-item-meta"><span class="timeline-item-author">Félix Bayart</span>, <span class="timeline-item-comments-count">18 comments</span></div>
                </div>
              </a>
            </div>
            <div class="timeline-item">
              <div class="timeline-author-date"><span>16/02/2013</span></div>
              <a href="blog.html" class="timeline-author-link">
                <img alt="avatar" src="images/avatars/avatar.png">
              </a>
              <a href="blog.html" class="timeline-item-link">
                <div class="timeline-item-content">
                  <div class="timeline-item-cover">
                    <img src="images/cover/paris.jpg" alt="paris">
                  </div>
                  <h2>Plongée dans le fantastique social</h2>
                  <p>Connaissez-vous l’homme-aquarium ? C’est un camelot du marché d’Aligre qui avale couramment cinq litres d’eau, puis cinq petites grenouilles, devant les yeux des badauds ébahis, avant de les recracher, flotte et rainettes bien vivantes, et de faire sa quête…</p>
                  <div class="timeline-item-meta"><span class="timeline-item-author">Félix Bayart</span>, <span class="timeline-item-comments-count">18 comments</span></div>
                </div>
              </a>
            </div>
            <div class="timeline-item">
              <div class="timeline-author-date"><span>16/02/2013</span></div>
              <a href="blog.html" class="timeline-author-link">
                <img alt="avatar" src="images/avatars/avatar.png">
              </a>
              <a href="blog.html" class="timeline-item-link">
                <div class="timeline-item-content">
                  <div class="timeline-item-cover">
                    <img src="images/cover/paris.jpg" alt="paris">
                  </div>
                  <h2>Plongée dans le fantastique social</h2>
                  <p>Connaissez-vous l’homme-aquarium ? C’est un camelot du marché d’Aligre qui avale couramment cinq litres d’eau, puis cinq petites grenouilles, devant les yeux des badauds ébahis, avant de les recracher, flotte et rainettes bien vivantes, et de faire sa quête…</p>
                  <div class="timeline-item-meta"><span class="timeline-item-author">Félix Bayart</span>, <span class="timeline-item-comments-count">18 comments</span></div>
                </div>
              </a>
            </div>
            <div class="timeline-item">
              <div class="timeline-author-date"><span>16/02/2013</span></div>
              <a href="blog.html" class="timeline-author-link">
                <img alt="avatar" src="images/avatars/avatar.png">
              </a>
              <a href="blog.html" class="timeline-item-link">
                <div class="timeline-item-content">
                  <div class="timeline-item-cover">
                    <img src="images/cover/paris.jpg" alt="paris">
                  </div>
                  <h2>Plongée dans le fantastique social</h2>
                  <p>Connaissez-vous l’homme-aquarium ? C’est un camelot du marché d’Aligre qui avale couramment cinq litres d’eau, puis cinq petites grenouilles, devant les yeux des badauds ébahis, avant de les recracher, flotte et rainettes bien vivantes, et de faire sa quête…</p>
                  <div class="timeline-item-meta"><span class="timeline-item-author">Félix Bayart</span>, <span class="timeline-item-comments-count">18 comments</span></div>
                </div>
              </a>
            </div>
          </div>
          <div id="sidebar" class="col span_1_of_3">
            <div class="widget widget_search">
              <h3 class="widget-title">Search Widget</h3>
              <form method="get" id="sidebar-searchform" action="#">
                <fieldset>
                  <input type="text" name="s" id="sidebar-s" placeholder="To search type and hit enter">
                </fieldset>
              </form>
            </div>
            <div class="widget widget-popular">
              <h3 class="widget-title">Popular Widget</h3>
              <div class="fancy-carousel">
                <ul class="widget-carousel">
                  <li>
                    <div class="overlay-thumb">
                      <img width="200" height="140" src="images/related/amigo.jpg" alt="amigo">
                      <a class="fancy-overlay" href="#">
                        <h5 class="overlay-title">Amigo Wallpaper by Artcore</h5>
                        <div class="overlay-icon">
                          <i class="icon-share-alt"></i>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="overlay-thumb">
                      <img width="200" height="140" src="images/related/cowboy.jpg" alt="cowboy">
                      <a class="fancy-overlay" href="#">
                        <h5 class="overlay-title">Cowboy Wallpaper by Artcore</h5>
                        <div class="overlay-icon">
                          <i class="icon-share-alt"></i>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="overlay-thumb">
                      <img width="200" height="140" src="images/related/fish.jpg" alt="fish">
                      <a class="fancy-overlay" href="#">
                        <h5 class="overlay-title">Fish Wallpaper by Artcore</h5>
                        <div class="overlay-icon">
                          <i class="icon-share-alt"></i>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="overlay-thumb">
                      <img width="200" height="140" src="images/related/goodmorning.jpg" alt="goodmorning">
                      <a class="fancy-overlay" href="#">
                        <h5 class="overlay-title">Good Morning Wallpaper by Artcore</h5>
                        <div class="overlay-icon">
                          <i class="icon-share-alt"></i>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="overlay-thumb">
                      <img width="200" height="140" src="images/related/ilovelife.jpg" alt="ilovelife">
                      <a class="fancy-overlay" href="#">
                        <h5 class="overlay-title">I Love Life Wallpaper by Artcore</h5>
                        <div class="overlay-icon">
                          <i class="icon-share-alt"></i>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="overlay-thumb">
                      <img width="200" height="140" src="images/related/monster.jpg" alt="monster">
                      <a class="fancy-overlay" href="#">
                        <h5 class="overlay-title">Monster Wallpaper by Artcore</h5>
                        <div class="overlay-icon">
                          <i class="icon-share-alt"></i>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="overlay-thumb">
                      <img width="200" height="140" src="images/related/onlymonsters.jpg" alt="onlymonsters">
                      <a class="fancy-overlay" href="#">
                        <h5 class="overlay-title">Only Monsters Eat Meats Wallpaper by Artcore</h5>
                        <div class="overlay-icon">
                          <i class="icon-share-alt"></i>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="overlay-thumb">
                      <img width="200" height="140" src="images/related/pirate.jpg" alt="pirate">
                      <a class="fancy-overlay" href="#">
                        <h5 class="overlay-title">Pirate Wallpaper by Artcore</h5>
                        <div class="overlay-icon">
                          <i class="icon-share-alt"></i>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="overlay-thumb">
                      <img width="200" height="140" src="images/related/rocknroll.jpg" alt="rocknroll">
                      <a class="fancy-overlay" href="#">
                        <h5 class="overlay-title">Rock'n Roll Wallpaper by Artcore</h5>
                        <div class="overlay-icon">
                          <i class="icon-share-alt"></i>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
                <div class="popular-nav">
                  <span class="prev-popular"><i class="icon-chevron-left"></i></span>
                  <span class="next-popular"><i class="icon-chevron-right"></i></span>
                </div>
              </div>
            </div>
            <div class="widget widget-video">
              <h3 class="widget-title">Video widget</h3>
              <div class="video-wrapper">
                <iframe src="http://player.vimeo.com/video/30272990" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
              </div>
            </div>
            <div class="widget widget-audio">
              <h3 class="widget-title">Audio widget</h3>
              <div class="audio-wrapper">
                <audio preload="auto" controls>
                  <source src="audio/BlueDucks_FourFlossFiveSix.mp3">
                  <source src="audio/BlueDucks_FourFlossFiveSix.ogg">
                  <source src="audio/BlueDucks_FourFlossFiveSix.wav">
                </audio>
              </div>
            </div>
            <div class="widget widget-soundcloud">
              <h3 class="widget-title">Soundcloud widget</h3>
              <div class="soundcloud-wrapper">
                <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F19888930&amp;color=ea4848&amp;auto_play=false&amp;show_artwork=true"></iframe>
              </div>
            </div>
            <div class="widget widget-social">
              <h3 class="widget-title">Social widget</h3>
              <ul class="social-buttons-list clearfix">
                <li><a class="social-button" href="#"><img src="img/social/500px.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/AddThis.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Behance.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Blogger.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Deliciou.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/DeviantART.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Digg.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Dopplr.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Dribbble.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Evernote.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Facebook.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Flickr.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Forrst.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/GitHub.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Google%2b.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Grooveshark.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Instagram.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Lastfm.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/LinkedIn.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Mail.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/MySpace.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Path.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Paypal.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Picasa.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Posterous.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Reddit.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/RSS.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/ShareThis.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Skype.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Soundcloud.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Spotify.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/StumbleUpon.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Tumblr.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Twitter.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Viddler.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Vimeo.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Virb.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Windows.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/WordPress.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/YouTube.png"></a></li>
                <li><a class="social-button" href="#"><img src="img/social/Zerply.png"></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div id="recent-work">
          <h2>Recent Work</h2>
          <ul id="portfolio-items" class="group">
            <li>
              <div class="overlay-thumb">
                <img width="200" height="140" src="images/related/amigo.jpg" alt="amigo">
                <a class="fancy-overlay" href="#">
                  <h5 class="overlay-title">Amigo Wallpaper by Artcore</h5>
                  <div class="overlay-icon">
                    <i class="icon-share-alt"></i>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="overlay-thumb">
                <img width="200" height="140" src="images/related/cowboy.jpg" alt="cowboy">
                <a class="fancy-overlay" href="#">
                  <h5 class="overlay-title">Cowboy Wallpaper by Artcore</h5>
                  <div class="overlay-icon">
                    <i class="icon-share-alt"></i>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="overlay-thumb">
                <img width="200" height="140" src="images/related/fish.jpg" alt="fish">
                <a class="fancy-overlay" href="#">
                  <h5 class="overlay-title">Fish Wallpaper by Artcore</h5>
                  <div class="overlay-icon">
                    <i class="icon-share-alt"></i>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="overlay-thumb">
                <img width="200" height="140" src="images/related/goodmorning.jpg" alt="goodmorning">
                <a class="fancy-overlay" href="#">
                  <h5 class="overlay-title">Good Morning Wallpaper by Artcore</h5>
                  <div class="overlay-icon">
                    <i class="icon-share-alt"></i>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="overlay-thumb">
                <img width="200" height="140" src="images/related/ilovelife.jpg" alt="ilovelife">
                <a class="fancy-overlay" href="#">
                  <h5 class="overlay-title">I Love Life Wallpaper by Artcore</h5>
                  <div class="overlay-icon">
                    <i class="icon-share-alt"></i>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="overlay-thumb">
                <img width="200" height="140" src="images/related/monster.jpg" alt="monster">
                <a class="fancy-overlay" href="#">
                  <h5 class="overlay-title">Monster Wallpaper by Artcore</h5>
                  <div class="overlay-icon">
                    <i class="icon-share-alt"></i>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="overlay-thumb">
                <img width="200" height="140" src="images/related/onlymonsters.jpg" alt="onlymonsters">
                <a class="fancy-overlay" href="#">
                  <h5 class="overlay-title">Only Monsters Eat Meats Wallpaper by Artcore</h5>
                  <div class="overlay-icon">
                    <i class="icon-share-alt"></i>
                  </div>
                </a>
              </div>
            </li>
            <li>
              <div class="overlay-thumb">
                <img width="200" height="140" src="images/related/pirate.jpg" alt="pirate">
                <a class="fancy-overlay" href="#">
                  <h5 class="overlay-title">Pirate Wallpaper by Artcore</h5>
                  <div class="overlay-icon">
                    <i class="icon-share-alt"></i>
                  </div>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <footer id="footer" class="clearfix">
        <div class="group">
          <div class="col span_1_of_3">
            <h2>Blabla</h2>
            <p>Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum.</p>
          </div>
          <div class="col span_1_of_3">
            <h2>Blabla</h2>
            <p>Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum.</p>
          </div>
          <div class="col span_1_of_3">
            <h2>Blabla</h2>
            <p>Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum.</p>
          </div>
        </div>
      </footer>
    </div>
    
  </body>
</html>
