
<?php echo doctype(); ?>

<html class="" lang="en">
<head>
    <?php
//meta tags
echo meta(array('name' => 'theme-color', 'content' => '#4fb6b5'));
echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
echo meta(array('name' => 'robots', 'content' => 'no-cache'));
echo meta(array('name' => 'viewport', 'content' => 'initial-scale=1.1'));

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

 <!-- Page title -->
    <title><?php echo isset($htitle) ? $htitle : 'Finance Trust Bank - Uganda'; ?></title>


    <link rel="shortcut icon" href="assets/favicons/favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" />

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
         <!-- gallery css -->
  <!-- Font Awesome CSS -->
    <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">


      <link rel="stylesheet" href="assets/css/responsiveslides.css">

<script type="text/javascript" src="assets/js/jquery_v3.0.0.js" ></script>
<script type="text/javascript" src="assets/js/responsiveslides.min.js"></script>
<script type="text/javascript" src="assets/js/financetrust.js" ></script>
<script type="text/javascript" src="assets/js/financetrust_js.js" ></script>


 <script>
        // Give $ back to prototype.js; create new alias to jQuery.
        var $jq = jQuery.noConflict();
    // You can also use "$(window).load(function() {"
    $jq(function () {

      // Slideshow 1
      $jq("#slider1").responsiveSlides({
        maxwidth: 1140,
        speed: 800
      });

    });
  </script>

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128472351-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-128472351-1');
  </script>


</head>

 <?php if ($this->uri->segment(1) == '') {?>
  <body class="background-clouds" onload="demoNoticeDefault();">
      <?php } else {?>
<body class="background-clouds">
      <?php }?>

  <div id="nav-wrapper" class="background-white color-black">
        <nav id="mainMenu" class="navbar navbar-fixed-top" role="navigation">
        <div class="container" style="margin:0; padding:0; width: 100%">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar background-lead"></span>
              <span class="icon-bar background-lead"></span>
              <span class="icon-bar background-lead"></span>
            </button>
             <a href="?/" class="hidden-xs hidden-sm">
             <img src="assets/images/logo.png" alt="FTB Logo" class="site-logo"></a>
          </div>


          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">

      <div class="container ">

    <ul class="social navbar-right hidden-xs hidden-sm" style="padding-right: 17px; padding-top: 7px;">
      <li class="facebook">
      <a target="_blank" href="https://www.facebook.com/FinanceTrustBankUg/">
      <i class="fa fa-facebook"></i></a></li>

      <li class="twitter circle">
      <a target="_blank" href="https://twitter.com/financetrust">
      <i class="fa fa-twitter "></i> </a></li>

      <li class="youtube">
      <a target="_blank" href="https://www.youtube.com/channel/UCHcZ8Vm5hDN5Hv-gKDpmXyg">
      <i class="fa fa-youtube"></i> </a></li>

       <li>

    <form name="searchBox" class="form-inline" role="form" method="POST" action="?/search">
    <div class="input-group">
      <input class="search-control" name="search_term" type="text" placeholder="Search...">
              </div>
                    </form>
                  </li>

                </ul>
              </li>
                  </ul>

                  <br><br><br>

       <ul class="list-inline navbar-right header-links text-muted hidden-xs hidden-sm ">
        <li>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 51.413 51.413" xml:space="preserve" width="15px" height="15px">
<g>
  <g>
    <path d="M25.989,12.274c8.663,0.085,14.09-0.454,14.823,9.148h10.564c0-14.875-12.973-16.88-25.662-16.88    c-12.69,0-25.662,2.005-25.662,16.88h10.482C11.345,11.637,17.398,12.19,25.989,12.274z" fill="#84838a"/>
    <path d="M5.291,26.204c2.573,0,4.714,0.154,5.19-2.377c0.064-0.344,0.101-0.734,0.101-1.185H10.46H0    C0,26.407,2.369,26.204,5.291,26.204z" fill="#84838a"/>
    <path d="M40.88,22.642h-0.099c0,0.454,0.039,0.845,0.112,1.185c0.502,2.334,2.64,2.189,5.204,2.189    c2.936,0,5.316,0.193,5.316-3.374H40.88z" fill="#84838a"/>
    <path d="M35.719,20.078v-1.496c0-0.669-0.771-0.711-1.723-0.711h-1.555c-0.951,0-1.722,0.042-1.722,0.711    v1.289v1h-11v-1v-1.289c0-0.669-0.771-0.711-1.722-0.711h-1.556c-0.951,0-1.722,0.042-1.722,0.711v1.496v1.306    C12.213,23.988,4.013,35.073,3.715,36.415l0.004,8.955c0,0.827,0.673,1.5,1.5,1.5h40c0.827,0,1.5-0.673,1.5-1.5v-9    c-0.295-1.303-8.493-12.383-11-14.987V20.078z M19.177,37.62c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458    s1.458,0.652,1.458,1.458S19.982,37.62,19.177,37.62z M19.177,32.62c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458    s1.458,0.652,1.458,1.458S19.982,32.62,19.177,32.62z M19.177,27.621c-0.805,0-1.458-0.652-1.458-1.458    c0-0.805,0.653-1.458,1.458-1.458s1.458,0.653,1.458,1.458C20.635,26.969,19.982,27.621,19.177,27.621z M25.177,37.62    c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458c0.806,0,1.458,0.652,1.458,1.458S25.983,37.62,25.177,37.62z     M25.177,32.62c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458c0.806,0,1.458,0.652,1.458,1.458    S25.983,32.62,25.177,32.62z M25.177,27.621c-0.805,0-1.458-0.652-1.458-1.458c0-0.805,0.653-1.458,1.458-1.458    c0.806,0,1.458,0.653,1.458,1.458C26.635,26.969,25.983,27.621,25.177,27.621z M31.177,37.62c-0.806,0-1.458-0.652-1.458-1.458    s0.652-1.458,1.458-1.458s1.458,0.652,1.458,1.458S31.983,37.62,31.177,37.62z M31.177,32.62c-0.806,0-1.458-0.652-1.458-1.458    s0.652-1.458,1.458-1.458s1.458,0.652,1.458,1.458S31.983,32.62,31.177,32.62z M31.177,27.621c-0.806,0-1.458-0.652-1.458-1.458    c0-0.805,0.652-1.458,1.458-1.458s1.458,0.653,1.458,1.458C32.635,26.969,31.983,27.621,31.177,27.621z" fill="#84838a"/>
  </g>
</g></svg>&nbsp; +256(0) 414 341 275&nbsp; |</li>

        <li><i class="fa fa-map-marker pr-5 pl-10"></i>
            <a href="?/about/branch-network.ftb">&nbsp; ATMs & Branches</a> &nbsp; |</li>

          <li><i class="fa fa-desktop pr-5 pl-10"></i>
     <a href="https://online.financetrust.co.ug/" target="_blank">&nbsp;  Internet / Online Banking  &nbsp; |</a>
      </li>


                      <li><i class="fa fa-bank pr-5 pl-10"></i>
           <a href="?/valueaddedservices/trust-mobile.ftb">&nbsp;  Mobile Banking</a>
            </li>



                <li><i class="fa fa-ticket pr-5 pl-10"></i>
     <a href="?/siteNews.ftb">&nbsp;  News & Events</a>
      </li>

                  </ul>

        </div>

      <ul class="background-finance-trust-blue nav navbar-nav navbar-left color-white" style="margin:0; padding:0; padding-left: 15%; width: 100%">
              <li class="menu-item "><a href="?/">
                <i class="fa fa-home fa-2x"></i></a></li>

                <li class="menu-item "><a href="?/about/about.ftb">About Us</a></li>

<?php
foreach ($nav_items as $tem => $nav_content) {
	?>
              <li style="vertical-align: middle;" class="dropdown">
              <a href="?/deposit-products.ftb" class="dropdown-toggle" data-toggle="dropdown"><?php echo $nav_content[0]; ?><b class="caret"></b></a>
               <ul class="dropdown-menu">
                 <?php
  if($tem != 'valueaddedservices'){
    foreach ($nav_content[1] as $rows) {?>
          <li>
              <a href="?/<?php echo $rows->parent_slug; ?>/<?php echo $rows->parent_mum_slug; ?>.ftb"><?php echo $rows->title; ?></a></li>
                    <?php
  }}else{
    foreach ($nav_content[1] as $rows) {
      ?>
                    <li>
              <a href="?/<?php echo $rows->parent_slug; ?>/<?php echo $rows->child_slug; ?>.ftb"><?php echo $rows->title; ?></a></li>
                    <?php }?>
  <?php }?>

        </ul>
              </li>

<?php }?>
            <li><a href="?/careers.ftb">Job Listings</a></li>


              <li style="vertical-align: middle;" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<b class="caret"></b></a>
               <ul class="dropdown-menu">
                <li><a href="?/csr.ftb">Corporate Social Responsibility (CSR)</a></li>
                <li><a href="?/gallery.ftb">Corporate Events</a></li>


               </ul>
             </li>

             <li><a href="?/contact.ftb">Contact Us</a></li>

              </ul>
            </li>

                          </ul>
                </div><!-- /.navbar-collapse -->

        </div>

      </nav>
          <!-- end nav wrapper -->
</div>
<br>
<!-- Breadcrumbs - START -->
    <div class="breadcrumbs-container">
      <div class="container ">
 <div class="wrap background-gray-light">

 <table border="0" style="width: 100%" cellpadding="0" cellspacing="0">
   <tr>
   <td >
      &nbsp;
   </td>
   <td align="center" width="25%">

<?php
// $query = $this->db->query("SELECT * FROM careers order by id DESC");
// $rowsj = $query->row();

//   $today = date('Y-m-d');
// $date_added = $rowsj->date_added;
//  $deadline = $rowsj->deadline;

//  if (($today >= $date_added) && ($today <= $deadline)){ ?>
   <span id="blinkText"><font ><b>
   <a href="?/careers" style="text-decoration: none; color: #FF061B">New Job Offer Available!! </a></b></font></span>

   <?php //}else{

//  } ?>

   </td>

  </tr>
 </table>
              </div>
      </div>
    </div>
    <!-- Breadcrumbs - END -->
