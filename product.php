<?php
  $page = 'product';
  include('header.php');
?>

<div class="index-banner parallax-container" style = "min-height:50%;">
  <div class="parallax"><img src="img/product_banner.jpg" alt="Product Page Banner"></div>
  <div class="section">
    <div class="container">
      <div class = "row text-block">
      <h1 class="header center white-text head-ft product_banner">Future Tech</h1>
      <p class="contact-ft white-text product_banner">Information Technology</p>
      <!-- <center><a href = "contact.php"><button class = "btn btn-large blue lighten-1">Contact</button></a></center>  -->
      <br><br>
    </div>
    </div>
  </div>
</div>

<!-- Product Info Section -->
<br/>
<div class="container">
  <p class="flow-text">
    We have every products from our dealers. If you want something, just check our dealers' sites and see what they sell. Most of them are already in store but just in case, please contact us and we can get them for you.
  </p>
  <!-- 1st row for tablet and pc -->
  <div class="row valign-wrapper hide-on-small-only">
    <div class="col s12 m3 l3">
        <img class="responsive-img valign" src="img/zyxel_logo.png" alt="zyxel logo">
    </div>
    <div class="col s12 m9 l9">
      <h4>ZyXEL</h4>
      <p align="justify">
        For more than 20 years ZyXEL has remained one of the world’s leading suppliers of networking products for various deployment requirements. It’s the first choice of many tier-one service providers, connecting more than 400,000 small- and medium-sized businesses, and upwards of 70 million end users around the globe.
      </p>
      <a href="http://www.zyxel.com/products_services/product_overview.shtml" target="_blank">
        <button class="btn light-blue accent-2">Check Out ZyXEL Products</button>
      </a>
    </div>
  </div>
  <!-- end of first row for tablet and pc-->

  <!-- 1st row copy for mobile -->
  <div class="row hide-on-med-and-up">
    <div class="col s12 m3 l3 center-align">
      <img class="responsive-img" src="img/zyxel_logo.png" alt="zyxel logo">
    </div>
    <div class="col s12 m9 l9">
      <h4>ZyXEL</h4>
      <p align="justify">
        For more than 20 years ZyXEL has remained one of the world’s leading suppliers of networking products for various deployment requirements. It’s the first choice of many tier-one service providers, connecting more than 400,000 small- and medium-sized businesses, and upwards of 70 million end users around the globe.
      </p>
      <a href="http://www.zyxel.com/products_services/product_overview.shtml" target="_blank">
        <button class="btn light-blue accent-2">ZyXEL Products</button>
      </a>
    </div>
  </div>
  <!-- end of 1st row copy for mobile -->

  <!-- 2nd row for tablet and pc -->
  <div class="row valign-wrapper hide-on-small-only">
    <div class="col s12 m9 l9 ">
      <h4>Interlink</h4>
      <p align="justify">
        Interlink Communication (Thailand) Public Company Limited is a Thailand-based company engaged in the distribution and installation of network and cabling system for computers and telecommunications. The Company operates in two principal businesses, including distribution business, involving import and distribution of computers and telecommunication cables, local area network (LAN) cables, fiber optics, telephone cables, closed circuit television (CCTV) coaxial cables, media converters, tools and testers, and engineering business, involving the design, construction and installation of fiber optic systems, submarine cabling systems and underground cabling systems. The Company distributes its products under the brand names of Link, AMP, Interlink, 19 Germany Export Rack and 19 The Best Quality Rack.
      </p>
      <a href="http://www.interlink.co.th/index.php?option=com_content&view=frontpage&Itemid=1&lang=th" target="_blank">
        <button class="btn light-blue accent-2">Check Out Interlink Products</button>
      </a>
    </div>
    <div class="col s12 m3 l3">
      <img class="responsive-img valign" src="img/interlink_logo.png" alt="interlink logo"/>
    </div>
  </div>
  <!-- end of 2nd row for tablet and pc -->

  <!-- 2nd row copy for mobile -->
  <div class="row hide-on-med-and-up">
    <div class="col s12 m3 l3">
      <img class="responsive-img" src="img/interlink_logo.png" alt="interlink logo"/>
    </div>
    <div class="col s12 m9 l9 ">
      <h4>Interlink</h4>
      <p align="justify">
        Interlink Communication (Thailand) Public Company Limited is a Thailand-based company engaged in the distribution and installation of network and cabling system for computers and telecommunications. The Company operates in two principal businesses, including distribution business, involving import and distribution of computers and telecommunication cables, local area network (LAN) cables, fiber optics, telephone cables, closed circuit television (CCTV) coaxial cables, media converters, tools and testers, and engineering business, involving the design, construction and installation of fiber optic systems, submarine cabling systems and underground cabling systems. The Company distributes its products under the brand names of Link, AMP, Interlink, 19 Germany Export Rack and 19 The Best Quality Rack.
      </p>
      <a href="http://www.interlink.co.th/index.php?option=com_content&view=frontpage&Itemid=1&lang=th" target="_blank">
        <button class="btn light-blue accent-2">Interlink Products</button>
      </a>
    </div>
  </div>
  <!-- end of 2nd row copy for mobile -->

</div>
<!-- End Product Info Section -->

<?php include('footer.php'); ?>