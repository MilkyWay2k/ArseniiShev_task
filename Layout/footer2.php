</div>
</div>
</div>
</div>

  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col columns">
          <ul class="navbar-nav l">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="color: #001F23">
                  Tasks
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="ex1.php">Exercise 1</a></li>
                <li><a class="dropdown-item" href="ex2.php">Exercise 2</a>
              </li>
              <li><a class="dropdown-item" href="variable.php">Exercise 3</a>
              </li>
              <li><a class="dropdown-item" href="controlflow.php">Exercise 4</a>
              </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active footer-link" aria-current="page" href="aboutus.php">About&nbsp;Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active footer-link" aria-current="page" href="contactus.php">Contact&nbsp;Us</a>
            </li>
          </ul>
          <div class="media">
            <a href="#">
              <img src="images/Icons/Instagram.png" alt="ig" width="30" height="30">
            </a>
            <a href="#">
              <img src="images/Icons/Facebook.png" alt="fb" width="30" height="30">
            </a>
            <a href="#">
              <img src="images/Icons/Twitter.png" alt="tw" width="30" height="30">
            </a>
          </div>
        </div>
        <div class="col columns">
          <div class="PM">
            <h2>Payment methods</h2>
            <img src="images/Icons/PaymentMethods.png" alt="payment">
          </div>
        </div>
        <div class="col columns">
          <a name="contacts" id="contacts">
            <h2>Contact with us</h2>
          </a><br>
          <div class="textcols">
            <div class="textcols one">
              <p>Skate&nbsp;Shop&nbsp;store<br>Funnytie&nbsp;33,<br>13100 Hämeenlinna.<br>Webstore&nbsp;24/7</p>
            </div>
            <div class="textcols two">
              <p><a href="tel:+358405555555">040&nbsp;555&nbsp;5555</a><br>
                <a href="mailto:shop@skate-shop.fi">shop@skate-shop.fi</a><br>VAT&nbsp;id:&nbsp;FI32008000
              </p>
            </div>
          </div>
        </div>
        <div class="col cloumns">
          <h2>Customer Benefits</h2><br>
          <ul>
            <li class="benefits">30-day return</li>
            <li class="benefits">Free shipping on orders over 100€</li>
            <li class="benefits">Fast shipping</li>
            <li class="benefits">SSL Secure Shopping</li>
          </ul>
        </div>
      </div>
    </div>
    <!--Bottom footer-->
    <div class="footer-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="d-flex justify-content-center">
            <div class="col-md-12 text-center">
              <?php
              echo "&copy; 2023 Skate Shop<br>";
              $file = $_SERVER["SCRIPT_NAME"];
              $break = Explode('/', $file);
              $pfile = $break[count($break) - 1];
              echo "This page was last modified on " . date("F d Y H:i:s", filemtime($pfile));
              ?>
            </div>
          </div>
        </div>
      </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>