 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <section class="content-header_2" id="dash_head" style="text-align: center; font-size: 30px;">
         <h1 style="font-size: 30px;">
             <b class="btn-warning btn-lg banner-btn"><?php echo trans("access", 'en'); ?>
                 <!-- <br> -->
                 <?php echo trans("access", 'bn'); ?>
             </b>
         </h1>
     </section>
     <!-- Main content -->
     <section class="content">
         <!-- small box -->
         <div class="p-4 admin-margin">
             <div class="row">

                 <!-- small box -->

             </div>
             <!-- Small boxes (Stat box) -->
             <div class="container">
                 <div class="row display-flex">

                     <div class="col-md-6 col-lg-3" onclick="location.href='#wildlife_law'">

                         <div class="small-box dashboard-box1" id="sm-1">
                             <div class="inner">
                                 <h1>
                                 
                                     <?php echo trans("sm-1", 'en'); ?>
                                     <br>
                                     জাতীয় আইনসমূহে বন্যপ্রাণী সংরক্ষণ বিষয়ক ধারাসমূহ
                                     <?php //echo trans("sm-1", 'bn'); ?>
                                 </h1>
                             </div>
                             <div class="icon">
                                 <img src="../dist/img/scale.png" style="width:20%" />
                             </div>

                         </div>
                     </div>
                     <div class="col-md-6 col-lg-3" onclick="location.href='#act_schedule'">

                         <div class="small-box dashboard-box1" id="sm-1">
                             <div class="inner">
                                 <h1>Wildlife (Conservation and Security) Act, 2012 Schedules
                                     <br>
                                     বন্যপ্রাণী (সংরক্ষণ ও নিরাপত্তা) আইন, ২০১২ এর তফসিলসমূহ
                                 </h1>
                             </div>
                             <div class="icon">
                                 <img src="../dist/img/scale.png" style="width:20%" />
                             </div>

                         </div>
                     </div>
                     <div class="col-md-6 col-lg-3" onclick="location.href='#species'">
                         <!-- small box -->
                         <div class="small-box dashboard-box2" id="sm-2">
                             <div class="inner">
                                 <h1>
                                 Wildlife species ID
                                 <?php // echo trans("sm-2", 'en'); ?>
                                     <br>
                                     <?php echo trans("sm-2", 'bn'); ?>
                                     </h4>
                                     <h2></h2>
                             </div>
                             <div class="icon">
                                 <img src="../dist/img/whole_white.png" style="width:95%; margin-top:10%;" />
                                 <!-- <a><img src="../dist/img/white_bg.png" style="margin-right:20px;height:70px;width:220px;float:right"/></a> -->
                             </div>
                             <!--more button goes here-->
                         </div>
                     </div>
                     <!-- ./col -->

                     <div class="col-md-6 col-lg-3" onclick="location.href='#tradefor'">
                         <!-- small box -->
                         <div class="small-box dashboard-box4" id="sm-4">
                             <div class="inner">
                                 <h1>Commonly traded body parts and products ID
                                     <?php //echo trans("sm-4", 'en'); ?>
                                     <br>
                                     বন্যপ্রাণীর বাণিজ্যকৃত দেহাংশ/পণ্য/ট্রফি পরিচিতি
                                     <?php // echo trans("sm-4", 'bn'); ?>
                                 </h1>
                                 <h2></h2>
                             </div>
                             <div class="icon">
                                 <img src="../dist/img/part_bg.png" style="width:90%; margin-top:8%;" />
                             </div>
                             <!--more button goes here-->
                         </div>
                     </div>
                     <!--new tab--->
                     <div class="col-md-6 col-lg-3" onclick="location.href='#basic_law'">
                         <!-- small box -->
                         <div class="small-box dashboard-box4" id="sm-4">
                             <div class="inner">
                                 <h1>
                                 Main Laws 
                                     <br>
                                     মূল আইনসমূহ
                                     
                                 </h1>
                                 <h2></h2>
                             </div>
                             <div class="icon">
                                 <img src="../dist/img/scale.png" style="width:20%" />
                             </div>
                             <!--more button goes here-->
                         </div>
                     </div>
                     <!--new tab--->
                     <div class="col-md-6 col-lg-3" onclick="location.href='#hand_book'">
                         <!-- small box -->
                         <div class="small-box dashboard-box4" id="sm-4">
                             <div class="inner">
                                 <h1> Training Handbook 
                                     <br>
                                     প্রশিক্ষণ হ্যান্ডবুক
                                 </h1>
                                 <h2></h2>
                             </div>
                             <div class="icon">
                                 <!-- <img src="../dist/img/scale.png" style="width:20%"/> -->
                                 <i class="fas fa-book" style="width:20%"></i>
                             </div>
                             <!--more button goes here-->
                         </div>
                     </div>
                     <!--new tab--->
                     <div class="col-md-6 col-lg-3" onclick="location.href='#guide'">
                         <!-- small box -->
                         <div class="small-box dashboard-box4" id="sm-4">
                             <div class="inner">
                                 <h1>Species ID Guide
                                     <br>
                                     প্রজাতি সনাক্তকরণ গাইড
                                 </h1>
                                 <h2></h2>
                             </div>
                             <div class="icon">
                                 <!-- <img src="../dist/img/scale.png" style="width:20%"/> -->
                                 <i class="fas fa-search" style="width:20%"></i>
                             </div>
                             <!--more button goes here-->
                         </div>
                     </div>
                     <!--new--->
                     <div class="col-md-6 col-lg-3" onclick="location.href='#poster'">
                         <!-- small box -->
                         <div class="small-box dashboard-box4" id="sm-4">
                             <div class="inner">
                                 <h1>Poster
                                     <br>
                                     পোস্টার
                                 </h1>
                                 <h2></h2>
                             </div>
                             <div class="icon">
                                 <!-- <img src="../dist/img/scale.png" style="width:20%"/> -->
                                 <i class="fas fa-search" style="width:20%"></i>
                             </div>
                             <!--more button goes here-->
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 </div>
 </section>
 <!-- /.content -->
 </div>