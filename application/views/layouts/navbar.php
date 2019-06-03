<!--header-bottom-->
<div id="sticker" class="header-bottom">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-sm-2">
        <div class="logo">
          <a href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo"></a>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="mainmenu text-center">
          <nav>
            <ul>
              <li><a href="index.html">Home</a>
                <ul class="submenu">
                  <li><a href="index.html">Home Version 1</a></li>
                  <li><a href="index-2.html">Home Version 2</a></li>
                  <li><a href="index-3.html">Home Version 3</a></li>
                  <li><a href="index-4.html">Home Version 4</a></li>
                  <li><a href="index-5.html">Home Version 5</a></li>
                </ul>
              </li>
              <li><a href="#">Pages</a>
                <ul class="submenu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="coming-soon.html">Coming Soon</a></li>
                  <li><a href="<?php echo base_url('Error_404'); ?>">Error 404</a></li>
                </ul>
              </li>
              <li><a href="#">Services</a>
                <ul class="submenu">
                  <li><a href="service-1.html">Service 1</a></li>
                  <li><a href="service-2.html">Service 2</a></li>
                  <li><a href="service-3.html">Service 3</a></li>
                </ul>
              </li>
              <li><a href="#">Gallery</a>
                <ul class="submenu">
                  <li><a href="gallery.html">Gallery</a></li>
                  <li><a href="gallery-details.html">Gallery Details</a></li>
                </ul>
              </li>
              <li><a href="#">Blog</a>
                <ul class="submenu">
                  <li><a href="blog-1.html">Blog One</a></li>
                  <li><a href="blog-2.html">Blog Two</a></li>
                  <li><a href="blog-3.html">Blog Three</a></li>
                  <li><a href="blog-4.html">Blog Four</a></li>
                  <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
              </li>
              <li><a href="#">Shop</a>
                <ul class="mega-menu">
                  <li class="megamenu-single">
                    <span class="mega-menu-title">Shop Page</span>
                    <ul>
                      <li><a href="shop.html">Shop Sidebar</a></li>
                      <li><a href="shop-full-width.html">Shop Fullwidth</a></li>
                      <li><a href="shop-filter.html">Shop Filter</a></li>
                      <li><a href="<?php echo base_url('Product_detail'); ?>">Product Details</a></li>
                    </ul>
                  </li>
                  <li class="megamenu-single">
                    <span class="mega-menu-title">Featured</span>
                    <ul>
                      <li><a href="shopping-cart.html">Shopping Cart</a></li>
                      <li><a href="checkout.html">Check Out</a></li>
                      <li><a href="order-complete.html">Complete</a></li>
                    </ul>
                  </li>
                  <li class="megamenu-single">
                    <img src="<?php echo base_url(); ?>assets/images/ad/3.jpg" alt="" />
                  </li>
                </ul>
              </li>
              <li><a href="<?php echo base_url('Contact'); ?>">Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="search-and-cart">
          <!--search-box-->
          <div class="search search-box">
            <i class="fa fa-search searching-icon"></i>
            <div class="search-place">
              <input type="text" placeholder="Search" />
            </div>
          </div>
          <!--shopping-cart-->
          <div class="cart-link">
            <a href="javascript:void(0);">
              <i class="fa fa-shopping-cart"></i>
              <span>2</span>
            </a>
            <ul class="list-none cart-dropdown">
              <li>
                <div class="mini-cart-thumb">
                  <a href="#"><img src="<?php echo base_url() ?>assets/images/cart/1.jpg" alt="" /></a>
                </div>
                <div class="mini-cart-heading">
                  <h5><a href="#">Aloe vera - herbal</a></h5>
                  <span>2 x $140.00</span>
                </div>
                <div class="mini-cart-remove">
                  <button><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </div>
              </li>
              <li>
                <div class="mini-cart-thumb">
                  <a href="#"><img src="<?php echo base_url(); ?>assets/images/cart/2.jpg" alt="" /></a>
                </div>
                <div class="mini-cart-heading">
                  <h5><a href="#">Haworthia Wide Zebra</a></h5>
                  <span>1 x $100.00</span>
                </div>
                <div class="mini-cart-remove">
                  <button><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </div>
              </li>
              <li>
                <div class="mini-cart-thumb">
                  <a href="#"><img src="<?php echo base_url(); ?>assets/images/cart/3.jpg" alt="" /></a>
                </div>
                <div class="mini-cart-heading">
                  <h5><a href="#">Echeveria Succulent</a></h5>
                  <span>1 x $100.00</span>
                </div>
                <div class="mini-cart-remove">
                  <button><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </div>
              </li>
              <li>
                <div class="mini-cart-total">
                  <h5>Total: $280.00</h5>
                </div>
                <div class="mini-cart-checkout">
                  <a href="checkout.html">Checkout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</header>
