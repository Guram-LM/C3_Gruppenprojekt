 <!-- foooter ავტორი ნუცა გოგინაშვილი -->
 <section class="info_section ">
      <div class="container">

        <div class="info_top">
          <div class="info_logo">
            <a href="">
              <img src="images/logo.png" alt="">
            </a>
          </div>
          <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $email = $_POST['email'];
          saveEmail($email);
          redirectToThankYou();
          }
          ?>
          <div class="info_form">
        <form action="madloba.php" method="POST">
            <input type="email" name="email" placeholder="Your email" required>
            <button type="submit">
                Subscribe
            </button>
        </form>
      </div>

        </div>
        <div class="info_bottom layout_padding2">
          <div class="row info_main_row">

            <div class="col-md-6 col-lg-3">
              <h5>
                Address
              </h5>
              <div class="info_contact">
    
                  <?php
                  echo generateContactInfo($contactInfo);
                  ?>
              </div>
              <div class="social_box">
                  <?php
                  echo generateSocialLinks($socialLinks);
                  ?>

              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="info_links">
                <h5>
                  Useful link
                </h5>
                <div class="info_links_menu">
                    <?php
                    echo generateMenuLinks($menuLinks);
                    ?>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="info_post">
                  <?php
                  echo generateLatestPosts($latestPosts);
                  ?>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">

                  <?php
                  echo generateLatestPosts($newsPosts);
                  ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end info_section -->

    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

     <!-- foooter ავტორი ნუცა გოგინაშვილი -->