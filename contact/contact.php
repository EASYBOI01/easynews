<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <script data-ezscrex='false' data-cfasync='false'
      data-pagespeed-no-defer="">var __ez = __ez || {}; __ez.stms = Date.now(); __ez.evt = {}; __ez.script = {}; __ez.ck = __ez.ck || {}; __ez.template = {}; __ez.template.isOrig = true; __ez.queue = function () { var e = 0, i = 0, t = [], n = !1, s = [], r = [], o = !0, a = function (e, i, n, s, r, o, a) { var l = this; this.name = e, this.funcName = i, this.parameters = null === n ? null : n instanceof Array ? n : [n], this.isBlock = s, this.blockedBy = r, this.deleteWhenComplete = o, this.isError = !1, this.isComplete = !1, this.isInitialized = !1, this.proceedIfError = a, this.isTimeDelay = !1, this.process = function () { u("... func = " + e), l.isInitialized = !0, l.isComplete = !0, u("... func.apply: " + e); var i = l.funcName.split("."), n = null; i.length > 3 || (n = 3 === i.length ? window[i[0]][i[1]][i[2]] : 2 === i.length ? window[i[0]][i[1]] : window[l.funcName]), null != n && n.apply(null, this.parameters), !0 === l.deleteWhenComplete && delete t[e], !0 === l.isBlock && (u("----- F'D: " + l.name), f()) } }, l = function (e, i, t, n, s, r, o) { var a = this; this.name = e, this.path = i, this.async = s, this.defer = r, this.isBlock = t, this.blockedBy = n, this.isInitialized = !1, this.isError = !1, this.isComplete = !1, this.proceedIfError = o, this.isTimeDelay = !1, this.isPath = function (e) { return "/" === e[0] && "/" !== e[1] }, this.getSrc = function (e) { return void 0 !== window.__ezScriptHost && this.isPath(e) ? window.__ezScriptHost + e : e }, this.process = function () { a.isInitialized = !0, u("... file = " + e); var i = document.createElement("script"); i.src = this.getSrc(this.path), !0 === s ? i.async = !0 : !0 === r && (i.defer = !0), i.onerror = function () { u("----- ERR'D: " + a.name), a.isError = !0, !0 === a.isBlock && f() }, i.onreadystatechange = i.onload = function () { var e = i.readyState; u("----- F'D: " + a.name), e && !/loaded|complete/.test(e) || (a.isComplete = !0, !0 === a.isBlock && f()) }, document.getElementsByTagName("head")[0].appendChild(i) } }, c = function (e, i) { this.name = e, this.path = "", this.async = !1, this.defer = !1, this.isBlock = !1, this.blockedBy = [], this.isInitialized = !0, this.isError = !1, this.isComplete = i, this.proceedIfError = !1, this.isTimeDelay = !1, this.process = function () { } }; function d(e) { !0 !== h(e) && 0 != o && e.process() } function h(e) { if (!0 === e.isTimeDelay && !1 === n) return u(e.name + " blocked = TIME DELAY!"), !0; if (e.blockedBy instanceof Array) for (var i = 0; i < e.blockedBy.length; i++) { var s = e.blockedBy[i]; if (!1 === t.hasOwnProperty(s)) return u(e.name + " blocked = " + s), !0; if (!0 === e.proceedIfError && !0 === t[s].isError) return !1; if (!1 === t[s].isComplete) return u(e.name + " blocked = " + s), !0 } return !1 } function u(e) { var i = window.location.href, t = new RegExp("[?&]ezq=([^&#]*)", "i").exec(i); "1" === (t ? t[1] : null) && console.debug(e) } function f() { ++e > 200 || (u("let's go"), m(s), m(r)) } function m(e) { for (var i in e) if (!1 !== e.hasOwnProperty(i)) { var t = e[i]; !0 === t.isComplete || h(t) || !0 === t.isInitialized || !0 === t.isError ? !0 === t.isError ? u(t.name + ": error") : !0 === t.isComplete ? u(t.name + ": complete already") : !0 === t.isInitialized && u(t.name + ": initialized already") : t.process() } } return window.addEventListener("load", (function () { setTimeout((function () { n = !0, u("TDELAY -----"), f() }), 5e3) }), !1), { addFile: function (e, i, n, o, a, c, h, u) { var f = new l(e, i, n, o, a, c, h); !0 === u ? s[e] = f : r[e] = f, t[e] = f, d(f) }, addDelayFile: function (e, i) { var n = new l(e, i, !1, [], !1, !1, !0); n.isTimeDelay = !0, u(e + " ...  FILE! TDELAY"), r[e] = n, t[e] = n, d(n) }, addFunc: function (e, n, o, l, c, h, u, f, m) { !0 === h && (e = e + "_" + i++); var p = new a(e, n, o, l, c, u, f); !0 === m ? s[e] = p : r[e] = p, t[e] = p, d(p) }, addDelayFunc: function (e, i, n) { var s = new a(e, i, n, !1, [], !0, !0); s.isTimeDelay = !0, u(e + " ...  FUNCTION! TDELAY"), r[e] = s, t[e] = s, d(s) }, items: t, processAll: f, setallowLoad: function (e) { o = e }, markLoaded: function (e) { if (e && 0 !== e.length) { if (e in t) { var i = t[e]; !0 === i.isComplete ? u(i.name + " " + e + ": error loaded duplicate") : (i.isComplete = !0, i.isInitialized = !0) } else t[e] = new c(e, !0); u("markLoaded dummyfile: " + t[e].name) } }, logWhatsBlocked: function () { for (var e in t) !1 !== t.hasOwnProperty(e) && h(t[e]) } } }(); __ez.evt.add = function (e, t, n) { e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent ? e.attachEvent("on" + t, n) : e["on" + t] = n() }, __ez.evt.remove = function (e, t, n) { e.removeEventListener ? e.removeEventListener(t, n, !1) : e.detachEvent ? e.detachEvent("on" + t, n) : delete e["on" + t] }; __ez.script.add = function (e) { var t = document.createElement("script"); t.src = e, t.async = !0, t.type = "text/javascript", document.getElementsByTagName("head")[0].appendChild(t) }; __ez.dot = {}; !function () { var e; __ez.vep = (e = [], { Add: function (i, t) { __ez.dot.isDefined(i) && __ez.dot.isValid(t) && e.push({ type: "video", video_impression_id: i, domain_id: __ez.dot.getDID(), t_epoch: __ez.dot.getEpoch(0), data: __ez.dot.dataToStr(t) }) }, Fire: function () { if (void 0 === document.visibilityState || "prerender" !== document.visibilityState) { if (__ez.dot.isDefined(e) && e.length > 0) for (; e.length > 0;) { var i = 5; i > e.length && (i = e.length); var t = e.splice(0, i), o = __ez.dot.getURL("/detroitchicago/grapefruit.gif") + "?orig=" + (!0 === __ez.template.isOrig ? 1 : 0) + "&v=" + btoa(JSON.stringify(t)); __ez.dot.Fire(o) } e = [] } } }) }();</script>
   <script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer=""></script>
   <!-- basic -->

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- title -->
   <title>Contact Us</title>
   <!-- site icon -->
   <link rel="icon" href="../images/logoweb.png" type="image/png">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- site css -->
   <link rel="stylesheet" href="style.css">
   <!-- color css -->
   <link rel="stylesheet" href="css/color1.css">
   <!-- select bootstrap -->
   <link rel="stylesheet" href="css/bootstrap-select.css">
   <!-- menumaker css -->
   <link rel="stylesheet" href="css/menumaker.css">
   <!-- responsive css -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- slider link -->
   <link rel="stylesheet" type="text/css" href="css/main_slider.css">
   <!-- Owl Stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <script src="js/modernizr.custom.79639.js"></script>
   <!-- custom css -->
   <link rel="stylesheet" href="css/custom.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   <link rel='canonical' href='contact.html'>
   <script type="text/javascript">var ezouid = "1";</script>
   <!-- Removed by WebCopy --><!--<base href="https://html.design/demo/magzone/contact.html">--><!-- Removed by WebCopy -->
   <script type='text/javascript'>
      var ezoTemplate = 'old_site_noads';
      if (typeof ezouid == 'undefined') {
         var ezouid = 'none';
      }
      var ezoFormfactor = '1';
      var ezo_elements_to_check = Array();
   </script><!-- START EZHEAD -->
   <script data-ezscrex="false" type='text/javascript'>
      var soc_app_id = '0';
      var did = 317139;
      var ezdomain = 'html.design';
      var ezoicSearchable = 1;
   </script>
   <!--{jquery}-->
   <!-- END EZHEAD -->
   <script data-ezscrex="false" type="text/javascript"
      data-cfasync="false">var _ezaq = { "ad_cache_level": 0, "ad_lazyload_version": 0, "ad_load_version": 0, "city": "Lagos", "country": "NG", "days_since_last_visit": -1, "domain_id": 317139, "engaged_time_visit": 0, "ezcache_level": 2, "ezcache_skip_code": 0, "form_factor_id": 1, "framework_id": 1, "is_return_visitor": false, "is_sitespeed": 0, "last_page_load": "", "last_pageview_id": "", "lt_cache_level": 0, "metro_code": 0, "page_ad_positions": "", "page_view_count": 0, "page_view_id": "7edcd67c-a932-4955-4a16-3802f1d8a280", "position_selection_id": 0, "postal_code": "", "pv_event_count": 0, "response_size_orig": 22947, "response_time_orig": 3, "serverid": "18.196.243.47:28600", "state": "LA", "t_epoch": 1675233502, "template_id": 120, "time_on_site_visit": 0, "url": "https://html.design/demo/magzone/contact.html", "user_id": 0, "weather_precipitation": 0, "weather_summary": "", "weather_temperature": 0, "word_count": 181, "worst_bad_word_level": 0 }; var _ezExtraQueries = "&ez_orig=1";</script>
   <script data-ezscrex='false' data-pagespeed-no-defer="" data-cfasync='false'>
      function create_ezolpl(pvID, rv) {
         var d = new Date();
         d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
         var expires = "expires=" + d.toUTCString();
         __ez.ck.setByCat("ezux_lpl_317139=" + new Date().getTime() + "|" + pvID + "|" + rv + "; " + expires, 3);
      }
      function attach_ezolpl(pvID, rv) {
         if (document.readyState === "complete") {
            create_ezolpl(pvID, rv);
         }
         if (window.attachEvent) {
            window.attachEvent("onload", create_ezolpl, pvID, rv);
         } else {
            if (window.onload) {
               var curronload = window.onload;
               var newonload = function (evt) {
                  curronload(evt);
                  create_ezolpl(pvID, rv);
               };
               window.onload = newonload;
            } else {
               window.onload = create_ezolpl.bind(null, pvID, rv);
            }
         }
      }

      __ez.queue.addFunc("attach_ezolpl", "attach_ezolpl", ["7edcd67c-a932-4955-4a16-3802f1d8a280", "false"], false, ['/detroitchicago/boise.js'], true, false, false, false);
   </script>
   <script
      type="text/javascript">var _audins_dom = "html_design", _audins_did = 317139; __ez.queue.addFile('/detroitchicago/cmbv2.js', '/detroitchicago/cmbv2.js?gcb=195-0&cb=04-3y02-8y06-13y07-2y19-7y0b-6y0d-23y13-4y17-5y1e-4y23-3y31-4y5a-2&cmbcb=122&sj=x04x02x06x07x19x0bx0dx13x17x1ex23x31x5a', true, [], true, false, true, false);</script>
   <script type="text/javascript"
      defer="">__ez.queue.addFile('/detroitchicago/cmbdv2.js', '/detroitchicago/cmbdv2.js?gcb=195-0&cb=03-8y0c-6y18-5&cmbcb=122&sj=x03x0cx18', true, ['/detroitchicago/cmbv2.js'], true, false, true, false);</script>
</head>

<body id="inner_page" class="contact">
   <!-- loader -->
   <!-- <div class="bg_load">
      <img class="loader_animation" src="images/loader/loader.png" alt="#">
   </div> -->
   <!-- end loader -->
   <!-- header -->
   <header>
    
      <div class="headtop">
         <div class="container-fluid">
            <div class="row">
               
               <div class="col-md-12">
                  <div class="newsection float-left">
                     <div class="newinfo">
                        <h3>CONTACT US</h3>
                     </div>
                     <!-- news slider -->
                     <div id="newsslider" class="carousel vert slide" data-ride="carousel" data-interval="900">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <p>Contact Us For Latest Information</p>
                           </div>
                          
                        </div>
                     </div>
                     <div id="ticker-roll" class="ticker">
                        <ul>
                        </ul>
                     </div>
                  </div>
                  <div class="socialicon float-right">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="headermiddle">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="logo">
                        <a href="index.html"><img class="img-responsive" src="images/logo/logo1.png" alt="#"></a>
                     </div>
                     <div class="banner">
                        <img src="images/layout_img/banner_head-.png" alt="#">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="headerbottom">
         <div class="container">
            <div class="row">
               <div class="col-xl-8">
                  <div class="full">
                     <div class="main_menu">
                        <div id="cssmenu">
                           <ul>
                              <li class="home"><a href="../"><i class="fa fa-home" aria-hidden="true"></i>
                                    Home</a></li>
                                    
                              <!-- <li><a href="technology.html">Technology</a></li>
                              <li>
                                 <a href="entertainment.html">Entertainment</a>
                                 <ul>
                                    <li><a href="health.html">Health</a></li>
                                    <li><a href="lifestyle.html">Lifestyle</a></li>
                                    <li><a href="sports.html">Sports</a></li>
                                    <li><a href="travel.html">Travel</a></li>
                                    <li><a href="education.html">Education</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="#">Pages</a>
                                 <ul>
                                    <li><a href="articles.html">Articles</a></li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                    <li><a href="error-404.html">404 Page Not Found</a></li>
                                    <li><a href="blog_detail.html">Blog Details</a></li>
                                 </ul>
                              </li>
                              <li><a href="news_events.html">News &amp; Events</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li class="active"><a href="contact.html">Contact Us</a></li>
                           </ul> -->
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="searchform">
                     <div class="column">
                        <div id="sb-search" class="sb-search">
                           <form action="index.html">
                              <input class="sb-search-input" placeholder="Search Your News" type="text" value=""
                                 name="search" id="search">
                              <button><i class="fa fa-search" aria-hidden="true"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header -->
   <!-- section -->
   <section class="inner_page_banner">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="full inner_page_info">
                  <h3 class="page_title">Contact us</h3>
                  <ul class="breadcrumb">
                     <li><a href="../">Home</a></li>
                     <li>/</li>
                     <li>Contact us</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end section -->
   <!-- section -->
   <!-- <div class="section">
      <div class="container-fluid">
         <div class="row">
            <div class="full">
               <div class="map_section">
                  <div id="map"></div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!-- end section -->
   <!-- section -->
   <section class="layout_2_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <div class="full">
                  <div class="row contact_information">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                        <div class="information_bottom text_align_center">
                           <div class="icon_bottom">
                              <i class="fa fa-road" aria-hidden="true"></i>
                           </div>
                           <div class="info_cont">
                              <h4>1st Floor Baby's world Opp. wema Bank,Akure, Ondo State</h4>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                        <div class="information_bottom text_align_center">
                           <div class="icon_bottom">
                              <i class="fa fa-user" aria-hidden="true"></i>
                           </div>
                           <div class="info_cont">
                              <h4>07069469469</h4>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                        <div class="information_bottom text_align_center">
                           <div class="icon_bottom">
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                           </div>
                           <div class="info_cont">
                              <h4><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="e692839592a6818b878f8ac885898b">ogunleyeisrael01@gmail.com</a></h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="full">
                  <div class="side_blog">
                     <h3>GET IN TOUCH</h3>
                  </div>
               </div>
               <div class="full">
                  <div class="form_section">
                     <form class="form_contant" action="index.html">
                        <fieldset>
                           <div class="row">
                              <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <input class="field_custom" placeholder="Your name" type="text" required="">
                              </div>
                              <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <input class="field_custom" placeholder="Email adress" type="email" required="">
                              </div>
                              <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <input class="field_custom" placeholder="Subject" type="text" required="">
                              </div>
                              <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <input class="field_custom" placeholder="Phone number" type="text" required="">
                              </div>
                              <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <textarea class="field_custom" placeholder="Messager"></textarea>
                              </div>
                              <div class="field col-md-12">
                                 <div class="center"><button class="btn blue">SUBMIT NOW</button></div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end section -->
   <!-- section -->
   <section class="news_latter">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="signup">
                  <h4 class="left_cont">Sign-up for our Newsletter</h4>
                  <form action="index.html">
                     <fieldset>
                        <div class="field">
                           <input type="text" placeholder="Email Address" required="">
                           <button>Submit</button>
                        </div>
                     </fieldset>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end section -->
   <!-- footer -->
   <footer>
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-lg-3">
               <div class="footer_inner_blog">
                  <div class="footer_heading">
                     <h3><i class="fa fa-info-circle"></i> Get in Touch</h3>
                  </div>
                  <div class="footer_info">
                     <div class="footer_logo">
                        <a href="index.html"><img src="images/logo/logo1.png" alt="#"></a>
                     </div>
                     <p><strong>Address:</strong><br>1st Floor Baby's world Opp. wema Bank,Akure, Ondo State</p>
                  </div>
               </div>
            </div>
            <!-- <div class="col-md-6 col-lg-2">
               <div class="footer_inner_blog">
                  <div class="footer_heading">
                     <h3>Menu</h3>
                  </div>
                  <div class="footer_info footer_menu">
                     <ul>
                        <li><a href="technology.html"><span>&gt;</span> Technology</a></li>
                        <li><a href="testimonial.html"><span>&gt;</span> Testimonials</a></li>
                        <li><a href="news_events.html"><span>&gt;</span> News &amp; Events</a></li>
                        <li><a href="entertainment.html"><span>&gt;</span> Entertainment</a></li>
                        <li><a href="contact.html"><span>&gt;</span> Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            </div> -->
            <!-- <div class="col-md-6 col-lg-4">
               <div class="footer_inner_blog">
                  <div class="footer_heading">
                     <h3><i class="fa fa-twitter"></i> Latest Tweets</h3>
                  </div> -->
                  <!-- <div class="footer_info tweets">
                     <div class="tweet-blog">
                        <i class="fa fa-twitter"></i>
                        <div class="tweet-cont">If you use this site regularly and would like to help keep the site on
                           the Internet<br><a href="#">Sed ut perspiciatis unde omnis iste natus..</a></div>
                     </div>
                     <div class="tweet-blog">
                        <i class="fa fa-twitter"></i>
                        <div class="tweet-cont">If you use this site regularly and would like to help keep the site on
                           the Internet<br><a href="#">Sed ut perspiciatis unde omnis iste natus..</a></div>
                     </div>
                  </div>
               </div>
            </div> -->
            <div class="col-md-6 col-lg-3">
               <div class="footer_inner_blog">
                  <div class="footer_heading">
                     <h3><i class="fa fa-envelope-o"></i> Contact</h3>
                  </div>
                  <div class="footer_info">
                     <ul>
                        <li>
                           <span class="left_icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                           <span><a href="tel:0987654321">07069469469</a><br><a href="tel:0123456789">09129594652</a></span>
                        </li>
                        <li>
                           <span class="left_icon"><i class="fa fa-envelope-o"></i></span>
                           <span><a href="/cdn-cgi/l/email-protection#1276777f7d52757f737b7e3c717d7f"><span
                                    class="__cf_email__"
                                    data-cfemail="a8cccdc5c7e8cfc5c9c1c486cbc7c5">ogunleyeisrael01@gmail.com</span></a><br>
                                    <!-- <a
                                 href="/cdn-cgi/l/email-protection#84e0e1e9ebc4e3e9e5ede8aae7ebe9"><span
                                    class="__cf_email__"
                                    data-cfemail="0b6f6e66644b6c666a626725686466">[email&#160;protected]</span></a></span> -->
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="footer_bottom">
                  <p>Designed and developed by <a href="https://www.wetindey.xyz/myportfolio">easyweb</a></p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- jQuery (necessary for Bootstrap's JavaScript) -->
   <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!-- wow animation -->
   <script src="js/animate.js"></script>
   <!-- select country -->
   <script src="js/bootstrap-select.js"></script>
   <!-- owl carousel -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- menumaker -->
   <script src="js/menumaker.js"></script>
   <!-- slider file -->
   <script src="js/slider.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
   <!-- map -->
   <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
         var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: { lat: 40.645037, lng: -73.880224 },
            styles: [
               {
                  elementType: 'geometry',
                  stylers: [{ color: '#fefefe' }]
               },
               {
                  elementType: 'labels.icon',
                  stylers: [{ visibility: 'off' }]
               },
               {
                  elementType: 'labels.text.fill',
                  stylers: [{ color: '#616161' }]
               },
               {
                  elementType: 'labels.text.stroke',
                  stylers: [{ color: '#f5f5f5' }]
               },
               {
                  featureType: 'administrative.land_parcel',
                  elementType: 'labels.text.fill',
                  stylers: [{ color: '#bdbdbd' }]
               },
               {
                  featureType: 'poi',
                  elementType: 'geometry',
                  stylers: [{ color: '#eeeeee' }]
               },
               {
                  featureType: 'poi',
                  elementType: 'labels.text.fill',
                  stylers: [{ color: '#757575' }]
               },
               {
                  featureType: 'poi.park',
                  elementType: 'geometry',
                  stylers: [{ color: '#e5e5e5' }]
               },
               {
                  featureType: 'poi.park',
                  elementType: 'labels.text.fill',
                  stylers: [{ color: '#9e9e9e' }]
               },
               {
                  featureType: 'road',
                  elementType: 'geometry',
                  stylers: [{ color: '#eee' }]
               },
               {
                  featureType: 'road.arterial',
                  elementType: 'labels.text.fill',
                  stylers: [{ color: '#3d3523' }]
               },
               {
                  featureType: 'road.highway',
                  elementType: 'geometry',
                  stylers: [{ color: '#eee' }]
               },
               {
                  featureType: 'road.highway',
                  elementType: 'labels.text.fill',
                  stylers: [{ color: '#616161' }]
               },
               {
                  featureType: 'road.local',
                  elementType: 'labels.text.fill',
                  stylers: [{ color: '#9e9e9e' }]
               },
               {
                  featureType: 'transit.line',
                  elementType: 'geometry',
                  stylers: [{ color: '#e5e5e5' }]
               },
               {
                  featureType: 'transit.station',
                  elementType: 'geometry',
                  stylers: [{ color: '#000' }]
               },
               {
                  featureType: 'water',
                  elementType: 'geometry',
                  stylers: [{ color: '#c8d7d4' }]
               },
               {
                  featureType: 'water',
                  elementType: 'labels.text.fill',
                  stylers: [{ color: '#b1a481' }]
               }
            ]
         });

         var image = 'images/layout_img/marker.png';
         var beachMarker = new google.maps.Marker({
            position: { lat: 40.645037, lng: -73.880224 },
            map: map,
            icon: image
         });
      }
   </script>
   <script src="../../maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&amp;callback=initMap"></script>

   <script type='text/javascript' style='display:none;' async="">
   </script>

   <script type="text/javascript" data-cfasync="false"></script>
</body>

</html>