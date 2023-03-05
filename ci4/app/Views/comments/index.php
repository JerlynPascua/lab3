<head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-tale-seo-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>

<body>
  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>+63 912 345 6789</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>jppascua@student.apc.edu.ph</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>Asia Pacific College - Magallanes, Makati</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="https://www.facebook.com/cumsyy" target="_blank"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/in/jerlyn-camille-pascua-3ab4b818b/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/lab3/ci4/public/home/" class="logo">
                        <img src="assets/images/logo.png" alt="" style="max-width: 112px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="/lab3/ci4/public/home/" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="/lab3/ci4/public/home/#services">My Information</a></li>
                      <li class="scroll-to-section"><a href="/lab3/ci4/public/home/#projects">Projects</a></li>
                      <li class="has-sub">
                          <a href="javascript:void(0)">Pages</a>
                          <ul class="sub-menu">
                              <li><a href="/lab3/ci4/public/about/">Playlist</a></li>
                              <li><a href="/lab3/ci4/public/resources">More</a></li>
                          </ul>
                      </li>
                      <li class="scroll-to-section"><a href="/lab3/ci4/public/home/#infos">Infos</a></li>
                      <li class="scroll-to-section"><a href="/lab3/ci4/public/home/#contact">Contact</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <div class="col-lg-4">
                <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.1900774536175!2d121.01912631582154!3d14.531117582669072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c93018658925%3A0x6de8e16ad051b59e!2sAsia%20Pacific%20College!5e0!3m2!1sen!2sph!4v1672363232448!5m2!1sen!2sph" width="100%" height="670px" frameborder="0" style="border:0; border-radius: 23px;" allowfullscreen=""></iframe>
				</div>
              </div>
              <div class="col-lg-8">
			  
			  			
            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>
 
                <form id="contact-form" action="/~jppascua/lab3/ci4/public/comments" method="post">
				<?= csrf_field() ?>
				
			  
                <form id="contact-form" action="" method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2><em>Comments</em> &amp;  <span>Suggestions</span></h2>
                      </div>
                    </div>
					
					  
						<?= session()->getFlashdata('error') ?>
						<?= validation_list_errors() ?>
					
                   <div class="col-lg-6">
                      <fieldset>
                        <input type="input" name="name" placeholder="Your Name" value="<?= set_value('name') ?>" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="input" name="surname" placeholder="Your Surname" value="<?= set_value('surname') ?>" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="email" name="email" placeholder="Your Email" value="<?= set_value('email') ?>" required>                      
						</fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="subject" placeholder="Your Subject" value="<?= set_value('subject') ?>" required>   
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea style="resize: none;" name="message" rows="6" placeholder="Your Message"><?= set_value('message') ?></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
						
                      </fieldset>
                    </div>
                  </div>
                </form>
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4><a href="#">123-4567</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4><a href="#">jppascua@student.apc.edu.ph</a></h4>
                        <h4><a href="#">camseey@gmail.com</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4><a href="#">Makati, Magallanes - Asia Pacific College</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


 <div class="contact-us section" id="contact">
 
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
			<div class="section-heading">
               <h2><em>Comments</em> &amp;  <span>Suggestions</span></h2>
			   <img src="assets/images/divider2.png" alt="" style="max-height: 60px;">
            </div>
			
			<br></br>
			<br></br>
			<br></br>
			  <?php if (! empty($comments) && is_array($comments)): ?>

                        <?php foreach ($comments as $comment): ?>
 
                            <div class="portfolio-box">
                                <h3><?= esc($comment['name']) ?> <?= esc($comment['surname']) ?></h3>
                                <h5><em><?= esc($comment['email']) ?></em></h5><br>
								<p><em>Comments : </em></p>
                                <p><?= esc($comment['subject']) ?></p>
								<p><?= esc($comment['message']) ?></p><br>
                              <img src="assets/images/divider.png" alt="">
                        
                            </div>
                            <br>

                        <?php endforeach ?>

                        <?php else: ?>

                        <h3>No Comments</h3>

                        <p>Nothing to see here yet.</p>

                        <?php endif ?>
			 
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>