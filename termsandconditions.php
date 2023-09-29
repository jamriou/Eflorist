<?php 
session_start();

if(!isset($_SESSION["language"])){
  $_SESSION["language"]= "fr";
}

include "locales/signup_locales.php";

?>

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>eFlorist - <?=$signup[$_SESSION['language']]?></title>
   <link href="img/favicon.ico" rel="icon">
   <meta content="" name="description">
   <meta content="" name="keywords">
   <meta http-equiv="Content-Security-Policy" 
      content="script-src 'self' https://apis.google.com">

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!------ Include the above in your HEAD tag ---------->

   <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/index.css" rel="stylesheet">
  <link href="css/LoginSignupCSS.css" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100">
   <?php include "nav/navbar.php"; ?>
      <div class="container login">
         <div class="row">
          <p>
<font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">TERMS
AND CONDITIONS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Last
updated September 29, 2023</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">AGREEMENT
TO OUR LEGAL TERMS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
are eFlorist (&quot;Company,&quot; &quot;we,&quot; &quot;us,&quot;
&quot;our&quot;).</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
operate the website </span></span></font></font></font><a href="https://tomcat-pure-adversely.ngrok-free.app/"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><u><span style="background: transparent">https://tomcat-pure-adversely.ngrok-free.app/</span></u></span></font></font></font></a><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">
(the &quot;Site&quot;), as well as any other related products and
services that refer or link to these legal terms (the &quot;Legal
Terms&quot;) (collectively, the &quot;Services&quot;).</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">You
can contact us by phone at +1 eFl-orist, email at
eflorist@support.ca, or by mail to __________, __________,
__________.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">These
Legal Terms constitute a legally binding agreement made between you,
whether personally or on behalf of an entity (&quot;you&quot;), and
eFlorist, concerning your access to and use of the Services. You
agree that by accessing the Services, you have read, understood, and
agreed to be bound by all of these Legal Terms. IF YOU DO NOT AGREE
WITH ALL OF THESE LEGAL TERMS, THEN YOU ARE EXPRESSLY PROHIBITED FROM
USING THE SERVICES AND YOU MUST DISCONTINUE USE IMMEDIATELY.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Supplemental
terms and conditions or documents that may be posted on the Services
from time to time are hereby expressly incorporated herein by
reference. We reserve the right, in our sole discretion, to make
changes or modifications to these Legal Terms at any time and for any
reason. We will alert you about any changes by updating the &quot;Last
updated&quot; date of these Legal Terms, and you waive any right to
receive specific notice of each such change. It is your
responsibility to periodically review these Legal Terms to stay
informed of updates. You will be subject to, and will be deemed to
have been made aware of and to have accepted, the changes in any
revised Legal Terms by your continued use of the Services after the
date such revised Legal Terms are posted.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">The
Services are intended for users who are at least 18 years old.
Persons under the age of 18 are not permitted to use or register for
the Services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
recommend that you print a copy of these Legal Terms for your
records.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">TABLE
OF CONTENTS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">1.
OUR SERVICES</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">2.
INTELLECTUAL PROPERTY RIGHTS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">3.
USER REPRESENTATIONS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">4.
USER REGISTRATION</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">5.
PRODUCTS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">6.
PURCHASES AND PAYMENT</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">7.
RETURN POLICY</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">8.
PROHIBITED ACTIVITIES</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">9.
USER GENERATED CONTRIBUTIONS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">10.
CONTRIBUTION LICENSE</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">11.
THIRD-PARTY WEBSITES AND CONTENT</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">12.
SERVICES MANAGEMENT</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">13.
PRIVACY POLICY</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">14.
TERM AND TERMINATION</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">15.
MODIFICATIONS AND INTERRUPTIONS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">16.
GOVERNING LAW</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">17.
DISPUTE RESOLUTION</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">18.
CORRECTIONS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">19.
DISCLAIMER</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">20.
LIMITATIONS OF LIABILITY</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">21.
INDEMNIF ICATION</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">22.
USER DATA</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">23.
ELECTRONIC COMMUNICATIONS, TRANSACTIONS, AND SIGNATURES</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">24.
CALIFORNIA USERS AND RESIDENTS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">25.
MISCELLANEOUS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">26.
NO PERSONAL INFORMATION MUST BE ENTERED</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">27.
COPYRIGHT</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">28.
CONTACT US</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">1.
OUR SERVICES</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">The
information provided when using the Services is not intended for
distribution to or use by any person or entity in any jurisdiction or
country where such distribution or use would be contrary to law or
regulation or which would subject us to any registration requirement
within such jurisdiction or country. Accordingly, those persons who
choose to access the Services from other locations do so on their own
initiative and are solely responsible for compliance with local laws,
if and to the extent local laws are applicable.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">The
Services are not tailored to comply with industry-specific
regulations (Health Insurance Portability and Accountability Act
(HIPAA), Federal Information Security Management Act (FISMA), etc.),
so if your interactions would be subjected to such laws, you may not
use the Services. You may not use the Services in a way that would
violate the Gramm-Leach-Bliley Act (GLBA).</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">2.
INTELLECTUAL PROPERTY RIGHTS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Our
intellectual property</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
are the owner or the licensee of all intellectual property rights in
our Services, including all source code, databases, functionality,
software, website designs, and audio in the Services (collectively, the &quot;Content&quot;), as
well as the trademarks and service marks contained therein. 
(the &quot;Marks&quot;).  (Excluding : all videos, images, gifs)</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Our
Content is protected by copyright and trademark laws (and
various other intellectual property rights and unfair competition
laws) and treaties in Canada and around the world.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">The
Content and Marks are provided in or through the Services &quot;AS
IS&quot; for your personal, non-commercial use only.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Your
use of our Services</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Subject
to your compliance with these Legal Terms, including the &quot;PROHIBITED
ACTIVITIES&quot; section below, we grant you a non-exclusive,
non-transferable, revocable license to:</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">access
the Services</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent"></span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">solely
for your personal, non-commercial use.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Except
as set out in this section or elsewhere in our Legal Terms, no part
of the Services and no Content or Marks may be copied, reproduced,
aggregated, republished, uploaded, posted, publicly displayed,
encoded, translated, transmitted, distributed, sold, licensed, or
otherwise exploited for any commercial purpose whatsoever, without
our express prior written permission.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">If
you wish to make any use of the Services, Content, or Marks other
than as set out in this section or elsewhere in our Legal Terms,
please address your request to: eflorist@support.ca. If we ever grant
you the permission to post, reproduce, or publicly display any part
of our Services or Content, you must identify us as the owners or
licensors of the Services, Content, or Marks and ensure that any
copyright or proprietary notice appears or is visible on posting,
reproducing, or displaying our Content.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
reserve all rights not expressly granted to you in and to the
Services, Content, and Marks.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Any
breach of these Intellectual Property Rights will constitute a
material breach of our Legal Terms and your right to use our Services
will terminate immediately.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>
</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">3.
USER REPRESENTATIONS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">By
using the Services, you represent and warrant that: (1) all
registration information you submit will be untrue, inaccurate, not current,
or incomplete; (2) you will maintain the accuracy of such information
and promptly update such registration information as necessary; (3)
you have the legal capacity and you agree to comply with these Legal
Terms; (4) you are not a minor in the jurisdiction in which you
reside; (5) you will not access the Services through automated or
non-human means, whether through a bot, script or otherwise; (6) you
will not use the Services for any illegal or unauthorized purpose;
and (7) your use of the Services will not violate any applicable law
or regulation.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">If
you provide any information that is true, accurate, current,
and complete, we have the right to suspend or terminate your account
and refuse any and all current or future use of the Services (or any
portion thereof).</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">4.
USER REGISTRATION</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">You
may be required to register to use the Services. You agree to keep
your password confidential and will be responsible for all use of
your account and password. We reserve the right to remove, reclaim,
or change a username you select if we determine, in our sole
discretion, that such username is inappropriate, obscene, or
otherwise objectionable.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">5.
PRODUCTS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
make every effort to display as accurately as possible the colors,
features, specifications, and details of the products available on
the Services. However, we do not guarantee that the colors, features,
specifications, and details of the products will be accurate,
complete, reliable, current, or free of other errors, and your
electronic display may not accurately reflect the actual colors and
details of the products. All products are subject to availability,
and we cannot guarantee that items will be in stock. We reserve the
right to discontinue any products at any time for any reason. Prices
for all products are subject to change.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">6.
PURCHASES AND PAYMENT</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">
We do not accept any form of payment. No such feature will be available to you on our services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">7.
RETURN POLICY</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">All
sales are final and no refund will be issued.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">8.
PROHIBITED ACTIVITIES</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">You
may not access or use the Services for any purpose other than that
for which we make the Services available. The Services may not be
used in connection with any commercial endeavors except those that
are specifically endorsed or approved by us.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">As
a user of the Services, you agree not to:</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Systematically
retrieve data or other content from the Services to create or
compile, directly or indirectly, a collection, compilation, database,
or directory without written permission from us.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Trick,
defraud, or mislead us and other users, especially in any attempt to
learn sensitive account information such as user passwords.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Circumvent,
disable, or otherwise interfere with security-related features of the
Services, including features that prevent or restrict the use or
copying of any Content or enforce limitations on the use of the
Services and/or the Content contained therein.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Disparage,
tarnish, or otherwise harm, in our opinion, us and/or the Services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Use
any information obtained from the Services in order to harass, abuse,
or harm another person.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Make
improper use of our support services or submit false reports of abuse
or misconduct.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Use
the Services in a manner inconsistent with any applicable laws or
regulations.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Engage
in unauthorized framing of or linking to the Services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Upload
or transmit (or attempt to upload or to transmit) viruses, Trojan
horses, or other material, including excessive use of capital letters
and spamming (continuous posting of repetitive text), that interferes
with any party&rsquo;s uninterrupted use and enjoyment of the
Services or modifies, impairs, disrupts, alters, or interferes with
the use, features, functions, operation, or maintenance of the
Services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Engage
in any automated use of the system, such as using scripts to send
comments or messages, or using any data mining, robots, or similar
data gathering and extraction tools.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Delete
the copyright or other proprietary rights notice from any Content.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Attempt
to impersonate another user or person or use the username of another
user.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Upload
or transmit (or attempt to upload or to transmit) any material that
acts as a passive or active information collection or transmission
mechanism, including without limitation, clear graphics interchange
formats (&quot;gifs&quot;), 1&times;1 pixels, web bugs, cookies, or
other similar devices (sometimes referred to as &quot;spyware&quot;
or &quot;passive collection mechanisms&quot; or &quot;pcms&quot;).</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Interfere
with, disrupt, or create an undue burden on the Services or the
networks or services connected to the Services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Harass,
annoy, intimidate, or threaten any of our employees or agents engaged
in providing any portion of the Services to you.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Attempt
to bypass any measures of the Services designed to prevent or
restrict access to the Services, or any portion of the Services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Copy
or adapt the Services' software, including but not limited to Flash,
PHP, HTML, JavaScript, or other code.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Except
as permitted by applicable law, decipher, decompile, disassemble, or
reverse engineer any of the software comprising or in any way making
up a part of the Services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Except
as may be the result of standard search engine or Internet browser
usage, use, launch, develop, or distribute any automated system,
including without limitation, any spider, robot, cheat utility,
scraper, or offline reader that accesses the Services, or use or
launch any unauthorized script or other software.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Use
a buying agent or purchasing agent to make purchases on the Services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Make
any unauthorized use of the Services, including collecting usernames
and/or email addresses of users by electronic or other means for the
purpose of sending unsolicited email, or creating user accounts by
automated means or under false pretenses.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Use
the Services as part of any effort to compete with us or otherwise
use the Services and/or the Content for any revenue-generating
endeavor or commercial enterprise.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Use
the Services to advertise or offer to sell goods and services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Sell
or otherwise transfer your profile.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">9.
USER GENERATED CONTRIBUTIONS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">The
Services does not offer users to submit or post content. We may
provide you with the opportunity to create, submit, post, display,
transmit, perform, publish, distribute, or broadcast content and
materials to us or on the Services, including but not limited to
text, writings, video, audio, photographs, graphics, comments,
suggestions, or personal information or other material (collectively,
&quot;Contributions&quot;). Contributions may be viewable by other
users of the Services and through third-party websites. As such, any
Contributions you transmit may be treated in accordance with the
Services' Privacy Policy. When you create or make available any
Contributions, you thereby represent and warrant that:</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">The
creation, distribution, transmission, public display, or performance,
and the accessing, downloading, or copying of your Contributions do
not and will not infringe the proprietary rights, including but not
limited to the copyright, patent, trademark, trade secret, or moral
rights of any third party.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">You
are the creator and owner of or have the necessary licenses, rights,
consents, releases, and permissions to use and to authorize us, the
Services, and other users of the Services to use your Contributions
in any manner contemplated by the Services and these Legal Terms.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">You
have the written consent, release, and/or permission of each and
every identifiable individual person in your Contributions to use the
name or likeness of each and every such identifiable individual
person to enable inclusion and use of your Contributions in any
manner contemplated by the Services and these Legal Terms.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Your
Contributions are not false, inaccurate, or misleading.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Your
Contributions are not unsolicited or unauthorized advertising,
promotional materials, pyramid schemes, chain letters, spam, mass
mailings, or other forms of solicitation.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Your
Contributions are not obscene, lewd, lascivious, filthy, violent,
harassing, libelous, slanderous, or otherwise objectionable (as
determined by us).</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Your
Contributions do not ridicule, mock, disparage, intimidate, or abuse
anyone.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Your
Contributions are not used to harass or threaten (in the legal sense
of those terms) any other person and to promote violence against a
specific person or class of people.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Your
Contributions do not violate any applicable law, regulation, or rule.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Your
Contributions do not violate the privacy or publicity rights of any
third party.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Your
Contributions do not violate any applicable law concerning child
pornography, or otherwise intended to protect the health or
well-being of minors.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Your
Contributions do not include any offensive comments that are
connected to race, national origin, gender, sexual preference, or
physical handicap.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Your
Contributions do not otherwise violate, or link to material that
violates, any provision of these Legal Terms, or any applicable law
or regulation.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Any
use of the Services in violation of the foregoing violates these
Legal Terms and may result in, among other things, termination or
suspension of your rights to use the Services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">10.
CONTRIBUTION LICENSE</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">You
and Services agree that we may access, store, process, and use any
information and personal data that you provide following the terms of
the Privacy Policy and your choices (including settings).</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">By
submitting suggestions or other feedback regarding the Services, you
agree that we can use and share such feedback for any purpose without
compensation to you.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
do not assert any ownership over your Contributions. You retain full
ownership of all of your Contributions and any intellectual property
rights or other proprietary rights associated with your
Contributions. We are not liable for any statements or
representations in your Contributions provided by you in any area on
the Services. You are solely responsible for your Contributions to
the Services and you expressly agree to exonerate us from any and all
responsibility and to refrain from any legal action against us
regarding your Contributions.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">11.
THIRD-PARTY WEBSITES AND CONTENT</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">The
Services may contain (or you may be sent via the Site) links to other
websites (&quot;Third-Party Websites&quot;) as well as articles,
photographs, text, graphics, pictures, designs, music, sound, video,
information, applications, software, and other content or items
belonging to or originating from third parties (&quot;Third-Party
Content&quot;). Such Third-Party Websites and Third-Party Content are
not investigated, monitored, or checked for accuracy,
appropriateness, or completeness by us, and we are not responsible
for any Third-Party Websites accessed through the Services or any
Third-Party Content posted on, available through, or installed from
the Services, including the content, accuracy, offensiveness,
opinions, reliability, privacy practices, or other policies of or
contained in the Third-Party Websites or the Third-Party Content.
Inclusion of, linking to, or permitting the use or installation of
any Third-Party Websites or any Third-Party Content does not imply
approval or endorsement thereof by us. If you decide to leave the
Services and access the Third-Party Websites or to use or install any
Third-Party Content, you do so at your own risk, and you should be
aware these Legal Terms no longer govern. You should review the
applicable terms and policies, including privacy and data gathering
practices, of any website to which you navigate from the Services or
relating to any applications you use or install from the Services.
Any purchases you make through Third-Party Websites will be through
other websites and from other companies, and we take no
responsibility whatsoever in relation to such purchases which are
exclusively between you and the applicable third party. You agree and
acknowledge that we do not endorse the products or services offered
on Third-Party Websites and you shall hold us blameless from any harm
caused by your purchase of such products or services. Additionally,
you shall hold us blameless from any losses sustained by you or harm
caused to you relating to or resulting in any way from any
Third-Party Content or any contact with Third-Party Websites.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">12.
SERVICES MANAGEMENT</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
reserve the right, but not the obligation, to: (1) monitor the
Services for violations of these Legal Terms; (2) take appropriate
legal action against anyone who, in our sole discretion, violates the
law or these Legal Terms, including without limitation, reporting
such user to law enforcement authorities; (3) in our sole discretion
and without limitation, refuse, restrict access to, limit the
availability of, or disable (to the extent technologically feasible)
any of your Contributions or any portion thereof; (4) in our sole
discretion and without limitation, notice, or liability, to remove
from the Services or otherwise disable all files and content that are
excessive in size or are in any way burdensome to our systems; and
(5) otherwise manage the Services in a manner designed to protect our
rights and property and to facilitate the proper functioning of the
Services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">13.
PRIVACY POLICY</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
care about data privacy and security. Please review our Privacy
Policy:
</span></span></font></font></font><a href="https://tomcat-pure-adversely.ngrok-free.app/privacypolicy.php"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><u><span style="background: transparent">https://tomcat-pure-adversely.ngrok-free.app/privacypolicy.php</span></u></span></font></font></font></a><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">.
By using the Services, you agree to be bound by our Privacy Policy,
which is incorporated into these Legal Terms. Please be advised the
Services are hosted in Canada. If you access the Services from any
other region of the world with laws or other requirements governing
personal data collection, use, or disclosure that differ from
applicable laws in Canada, then through your continued use of the
Services, you are transferring your data to Canada, and you expressly
consent to have your data transferred to and processed in Canada.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">14.
TERM AND TERMINATION</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">These
Legal Terms shall remain in full force and effect while you use the
Services. WITHOUT LIMITING ANY OTHER PROVISION OF THESE LEGAL TERMS,
WE RESERVE THE RIGHT TO, IN OUR SOLE DISCRETION AND WITHOUT NOTICE OR
LIABILITY, DENY ACCESS TO AND USE OF THE SERVICES (INCLUDING BLOCKING
CERTAIN IP ADDRESSES), TO ANY PERSON FOR ANY REASON OR FOR NO REASON,
INCLUDING WITHOUT LIMITATION FOR BREACH OF ANY REPRESENTATION,
WARRANTY, OR COVENANT CONTAINED IN THESE LEGAL TERMS OR OF ANY
APPLICABLE LAW OR REGULATION. WE MAY TERMINATE YOUR USE OR
PARTICIPATION IN THE SERVICES OR DELETE YOUR ACCOUNT AND ANY CONTENT
OR INFORMATION THAT YOU POSTED AT ANY TIME, WITHOUT WARNING, IN OUR
SOLE DISCRETION.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">If
we terminate or suspend your account for any reason, you are
prohibited from registering and creating a new account under your
name, a fake or borrowed name, or the name of any third party, even
if you may be acting on behalf of the third party. In addition to
terminating or suspending your account, we reserve the right to take
appropriate legal action, including without limitation pursuing
civil, criminal, and injunctive redress.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">15.
MODIFICATIONS AND INTERRUPTIONS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
reserve the right to change, modify, or remove the contents of the
Services at any time or for any reason at our sole discretion without
notice. However, we have no obligation to update any information on
our Services. We also reserve the right to modify or discontinue all
or part of the Services without notice at any time. We will not be
liable to you or any third party for any modification, price change,
suspension, or discontinuance of the Services.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
cannot guarantee the Services will be available at all times. We may
experience hardware, software, or other problems or need to perform
maintenance related to the Services, resulting in interruptions,
delays, or errors. We reserve the right to change, revise, update,
suspend, discontinue, or otherwise modify the Services at any time or
for any reason without notice to you. You agree that we have no
liability whatsoever for any loss, damage, or inconvenience caused by
your inability to access or use the Services during any downtime or
discontinuance of the Services. Nothing in these Legal Terms will be
construed to obligate us to maintain and support the Services or to
supply any corrections, updates, or releases in connection therewith.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">16.
GOVERNING LAW</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">These
Legal Terms shall be governed by and defined following the laws of
Canada. eFlorist and yourself irrevocably consent that the courts of
Canada shall have exclusive jurisdiction to resolve any dispute which
may arise in connection with these Legal Terms.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">17.
CORRECTIONS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">There
may be information on the Services that contains typographical
errors, inaccuracies, or omissions, including descriptions, pricing,
availability, and various other information. We reserve the right to
correct any errors, inaccuracies, or omissions and to change or
update the information on the Services at any time, without prior
notice.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">18.
DISCLAIMER</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">THE
SERVICES ARE PROVIDED ON AN AS-IS AND AS-AVAILABLE BASIS. YOU AGREE
THAT YOUR USE OF THE SERVICES WILL BE AT YOUR SOLE RISK. TO THE
FULLEST EXTENT PERMITTED BY LAW, WE DISCLAIM ALL WARRANTIES, EXPRESS
OR IMPLIED, IN CONNECTION WITH THE SERVICES AND YOUR USE THEREOF,
INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND
NON-INFRINGEMENT. WE MAKE NO WARRANTIES OR REPRESENTATIONS ABOUT THE
ACCURACY OR COMPLETENESS OF THE SERVICES' CONTENT OR THE CONTENT OF
ANY WEBSITES OR MOBILE APPLICATIONS LINKED TO THE SERVICES AND WE
WILL ASSUME NO LIABILITY OR RESPONSIBILITY FOR ANY (1) ERRORS,
MISTAKES, OR INACCURACIES OF CONTENT AND MATERIALS, (2) PERSONAL
INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM
YOUR ACCESS TO AND USE OF THE SERVICES, (3) ANY UNAUTHORIZED ACCESS
TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL
INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, (4) ANY
INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE SERVICES,
(5) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE
TRANSMITTED TO OR THROUGH THE SERVICES BY ANY THIRD PARTY, AND/OR (6)
ANY ERRORS OR OMISSIONS IN ANY CONTENT AND MATERIALS OR FOR ANY LOSS
OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT
POSTED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE SERVICES. WE
DO NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR ANY
PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE
SERVICES, ANY HYPERLINKED WEBSITE, OR ANY WEBSITE OR MOBILE
APPLICATION FEATURED IN ANY BANNER OR OTHER ADVERTISING, AND WE WILL
NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY
TRANSACTION BETWEEN YOU AND ANY THIRD-PARTY PROVIDERS OF PRODUCTS OR
SERVICES. AS WITH THE PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY
MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND
EXERCISE CAUTION WHERE APPROPRIATE.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">19.
LIMITATIONS OF LIABILITY</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">IN
NO EVENT WILL WE OR OUR DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE TO
YOU OR ANY THIRD PARTY FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL,
EXEMPLARY, INCIDENTAL, SPECIAL, OR PUNITIVE DAMAGES, INCLUDING LOST
PROFIT, LOST REVENUE, LOSS OF DATA, OR OTHER DAMAGES ARISING FROM
YOUR USE OF THE SERVICES, EVEN IF WE HAVE BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES. NOTWITHSTANDING ANYTHING TO THE CONTRARY
CONTAINED HEREIN, OUR LIABILITY TO YOU FOR ANY CAUSE WHATSOEVER AND
REGARDLESS OF THE FORM OF THE ACTION, WILL AT ALL TIMES BE LIMITED TO
THE LESSER OF THE AMOUNT PAID, IF ANY, BY YOU TO US OR . CERTAIN US
STATE LAWS AND INTERNATIONAL LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED
WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF
THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS OR
LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MAY HAVE ADDITIONAL RIGHTS.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">20.
INDEMNIFICATION</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">You
agree to defend, indemnify, and hold us harmless, including our
subsidiaries, affiliates, and all of our respective officers, agents,
partners, and employees, from and against any loss, damage,
liability, claim, or demand, including reasonable attorneys&rsquo;
fees and expenses, made by any third party due to or arising out of:
(1) use of the Services; (2) breach of these Legal Terms; (3) any
breach of your representations and warranties set forth in these
Legal Terms; (4) your violation of the rights of a third party,
including but not limited to intellectual property rights; or (5) any
overt harmful act toward any other user of the Services with whom you
connected via the Services. Notwithstanding the foregoing, we reserve
the right, at your expense, to assume the exclusive defense and
control of any matter for which you are required to indemnify us, and
you agree to cooperate, at your expense, with our defense of such
claims. We will use reasonable efforts to notify you of any such
claim, action, or proceeding which is subject to this indemnification
upon becoming aware of it.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">21.
USER DATA</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">We
will maintain certain data that you transmit to the Services for the
purpose of managing the performance of the Services, as well as data
relating to your use of the Services. Although we perform regular
routine backups of data, you are solely responsible for all data that
you transmit or that relates to any activity you have undertaken
using the Services. You agree that we shall have no liability to you
for any loss or corruption of any such data, and you hereby waive any
right of action against us arising from any such loss or corruption
of such data.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">22.
ELECTRONIC COMMUNICATIONS, TRANSACTIONS, AND SIGNATURES</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Visiting
the Services, sending us emails, and completing online forms
constitute electronic communications. You consent to receive
electronic communications, and you agree that all agreements,
notices, disclosures, and other communications we provide to you
electronically, via email and on the Services, satisfy any legal
requirement that such communication be in writing. YOU HEREBY AGREE
TO THE USE OF ELECTRONIC SIGNATURES, CONTRACTS, ORDERS, AND OTHER
RECORDS, AND TO ELECTRONIC DELIVERY OF NOTICES, POLICIES, AND RECORDS
OF TRANSACTIONS INITIATED OR COMPLETED BY US OR VIA THE SERVICES. You
hereby waive any rights or requirements under any statutes,
regulations, rules, ordinances, or other laws in any jurisdiction
which require an original signature or delivery or retention of
non-electronic records, or to payments or the granting of credits by
any means other than electronic means.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">23.
CALIFORNIA USERS AND RESIDENTS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">If
any complaint with us is not satisfactorily resolved, you can contact
the Complaint Assistance Unit of the Division of Consumer Services of
the California Department of Consumer Affairs in writing at 1625
North Market Blvd., Suite N 112, Sacramento, California 95834 or by
telephone at (800) 952-5210 or (916) 445-1254.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">24.
MISCELLANEOUS</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">These
Legal Terms and any policies or operating rules posted by us on the
Services or in respect to the Services constitute the entire
agreement and understanding between you and us. Our failure to
exercise or enforce any right or provision of these Legal Terms shall
not operate as a waiver of such right or provision. These Legal Terms
operate to the fullest extent permissible by law. We may assign any
or all of our rights and obligations to others at any time. We shall
not be responsible or liable for any loss, damage, delay, or failure
to act caused by any cause beyond our reasonable control. If any
provision or part of a provision of these Legal Terms is determined
to be unlawful, void, or unenforceable, that provision or part of the
provision is deemed severable from these Legal Terms and does not
affect the validity and enforceability of any remaining provisions.
There is no joint venture, partnership, employment or agency
relationship created between you and us as a result of these Legal
Terms or use of the Services. You agree that these Legal Terms will
not be construed against us by virtue of having drafted them. You
hereby waive any and all defenses you may have based on the
electronic form of these Legal Terms and the lack of signing by the
parties hereto to execute these Legal Terms.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">25.
NO PERSONAL INFORMATION MUST BE ENTERED</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">When
signing up and using this website, you agree to not share any
personal information such as but not limited too : email, home
address, phone number and name. All information is to be fictitious.
You acknowledge that entering personal information puts this data at
risk. Since this website is fictitious, no data is shared with any
third-party.</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">26.
COPYRIGHT</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">This
website may or may not contain copyright free material. All material
used in this recreation is for personal use only. No online
distribution has or will take place</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">27.
CONTACT US</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">In
order to resolve a complaint regarding the Services or to receive
further information regarding use of the Services, please contact us
at:</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; letter-spacing: normal; line-height: 0.19in">
<br/>
<br/>

</p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">eFlorist</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">__________</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">Phone:
+1 eFl-orist</span></span></font></font></font></p>
<p align="left" style="margin-bottom: 0.14in; line-height: 0.19in"><font color="#212121"><font face="Tahoma, serif"><font size="2" style="font-size: 10pt"><span style="letter-spacing: normal"><span style="background: transparent">eflorist@support.ca</span></span></font></font></font></p>
</p>
      </div>   
   <footer class="footer" id="footer">
      <?php include "nav/footer.php"; ?>
   </footer><!-- End Footer -->    
      
   <div id="preloader"></div>

   <!-- Main Scripts -->
   <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
   <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
   <script src="vendor/aos/aos.js"></script>
   <script src="vendor/glightbox/js/glightbox.min.js"></script>
   <script src="vendor/purecounter/purecounter_vanilla.js"></script>
   <script src="vendor/swiper/swiper-bundle.min.js"></script>

   <!-- Template Main JS File -->
   <script src="js/main.js" type="text/javascript"></script>
</body>