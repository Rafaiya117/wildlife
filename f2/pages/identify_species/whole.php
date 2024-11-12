<div class="content-wrapper" style="min-height: 901px;">
    <section class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <h3 class="innerPage-head" id="ques">
                            <?php echo trans("ques", 'en'); ?>
                            <br>
                            <?php echo trans("ques", 'bn'); ?>
                        </h3>
                        <!---------------PART--------->
                        <div id="alertMessage">
                        </div>
                        <form role="form" id="form_section1" class="form-horizontal" method="POST" action="#input-rescue-information" enctype="multipart/form-data">
                            <div class="form-group col-md-12">
                                <label class="inner-label" id="in-lab1">
                                    <?php echo trans("in-lab1", 'en'); ?>
                                    <br>
                                    <?php echo trans("in-lab1", 'bn'); ?>
                                </label>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="optradio" required="" id="input-part" class="part" value="Part"><label id="pBangla">
                                                <?php echo trans("pBangla", 'en'); ?>

                                                <?php echo trans("pBangla", 'bn'); ?>

                                            </label>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="optradio" required="" id="input-whole" class="whole" value="Whole"><label id="hBangla">
                                                <?php echo trans("hBangla", 'en'); ?>

                                                <?php echo trans("hBangla", 'bn'); ?>

                                            </label>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-col" id="part">
                                <div class="form-group col-md-12 commonPart" id="skin">
                                    <label class="inner-label" id="part">
                                        <?php echo trans("part", 'en'); ?>
                                        <br>
                                        <?php echo trans("part", 'bn'); ?>
                                    </label>
                                    <div class="form-gruop col-md-12" name="SpeciecSelect" id="SpeciecSelect">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input class="SpeciecSelect" value="Skin_Fur" type="radio" name="optradio" required />
                                                    <p>চামরা ও লোম/পশম</p>
                                                    <span class="checkmark"></span>
                                                    <a><img src="../dist/img/Tiger_skin.png" style="height: 50px; width: 50px;"></a>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input class="SpeciecSelect" value="Scales" type="radio" name="optradio" required />
                                                    <p>আইশ,নখর ও শিং</p>
                                                    <spna class="checkmark"></spna>
                                                    <a><img src="../dist/img/Tiger_claw.png" style="height: 50px; width: 50px;"></a>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input class="SpeciecSelect" value="Quills" type="radio" name="optradio" required />
                                                    <p>মাংস জনাঙ্গ ও পাখির ঠোঁট</p>
                                                    <span class="checkmark"></span>
                                                    <a><img src="../dist/img/Meat_icon.png" style="height: 50px; width: 50px;"></a>

                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input class="SpeciecSelect" value="Miscellaneous" type="radio" name="optradio" required />
                                                    <p>হাঙ্গর ও শাপলা পাতা জাতের মাছের পাখনা</p>
                                                    <span class="checkmark"></span>
                                                    <a><img src="../dist/img/Pangolin_scale.png" style="height: 50px; width: 50px;"></a>

                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input class="SpeciecSelect" value="Tusk_Teeth" type="radio" name="optradio" required />
                                                    <p>হাঙ্গর ও শাপলা পাতা জাতের মাছের বাণিজ্যকৃত অন্যান্য পণ্য</p>
                                                    <span class="checkmark"></span>
                                                    <a><img src="../dist/img/Mobula_gill_plate.png" style="height: 50px; width: 50px;"></a>

                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input class="SpeciecSelect" value="Sea_Shells" type="radio" name="optradio" required />
                                                    <p>অন্যান্য সামুদ্রিক বন্যপ্রাণী</p>
                                                    <span class="checkmark"></span>
                                                    <a><img src="../dist/img/seahorse.jpg" alt="Species Image" style="height:80px;width:120px;"></a>

                                                </label>
                                            </div>

                                            <!-- <option value="Sea_Shells"><label id="sea">
                                                <?php echo trans("sea", 'en'); ?>

                                                <?php echo trans("sea", 'bn'); ?>
                                            </label></option>
                                        <option value="bones"><label id="bone">
                                                <?php echo trans("bone", 'en'); ?>

                                                <?php echo trans("bone", 'bn'); ?>
                                            </label></option> -->
                                            <!-- <div class="col-md-2">
                                        <label class="radioBtnHolder">
                                        <input value="Miscellaneous" type="radio" name="optradio" required/>
                                                <?php echo trans("mis", 'en'); ?>

                                                <?php echo trans("mis", 'bn'); ?>
                                                <span class="checkmark"></span>
                                        </label>
                                     </div> -->

                                        </div>

                                    </div>

                                </div>
                                <!--****************************** Fur/skin/hair *******************************************-->
                                <div class="form-group col-md-12 commonPart furSkinHairVal" id="mammalReptile">
                                    <label class="inner-label" id="mammalrreptile">
                                        <?php echo trans("mammalrreptile", 'en'); ?>
                                        <br>
                                        <?php echo trans("mammalrreptile", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="mammal_reptile" id="" class="mammal_reptile" value="Mammal_Fur"><label id="mfh">
                                                    <?php echo trans("mfh", 'en'); ?>

                                                    <?php echo trans("mfh", 'bn'); ?>
                                                </label>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="mammal_reptile" id="" class="mammal_reptile" value="Reptile_Skin_Product"><label id="rs">
                                                    <?php echo trans("rs", 'en'); ?>

                                                    <?php echo trans("rs", 'bn'); ?>
                                                </label>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 commonPart furSkinHairVal" id="skinBagPurse">
                                    <label class="inner-label" id="skIn">
                                        <?php echo trans("skIn", 'en'); ?>
                                        <br>
                                        <?php echo trans("skIn", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="skin" id="" class="skin" value="Snakeskin_Purse"><label id="sn">
                                                    <?php echo trans("sn", 'en'); ?>

                                                    <?php echo trans("sn", 'bn'); ?>
                                                </label>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="skin" id="" class="skin" value="Crocodile_Skin_Bag"><label id="cr">
                                                    <?php echo trans("cr", 'en'); ?>

                                                    <?php echo trans("cr", 'bn'); ?>
                                                </label>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 commonPart furSkinHairVal" id="snakeSkin">
                                    <label class="inner-label" id="skIn">
                                        <?php echo trans("skIn", 'en'); ?>
                                        <br>
                                        <?php echo trans("skIn", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value=" Dhaman or Rat Snake">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Indian Cobras ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value=" Pythons">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Common Sand Boa ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value=" Russel's viper">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Colubridae (Typical snakes, water snakes, whipsnakes) ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="King cobra ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Burmese Python ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value=" Indian rock Python">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Spectacled Cobra ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Boas ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Cobras; Kraits, and Coral Snakes ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value=" Fresh water and sea snakes">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Viper ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Monocled Cobra ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 commonPart furSkinHairVal" id="crocodilesSkin">
                                    <label class="inner-label" id="skIn">
                                        <?php echo trans("skIn", 'en'); ?>
                                        <br>
                                        <?php echo trans("skIn", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="crocodilesInput" class="crocodilesInput" value="Crocodiles (Mugger and Saltwater Crocodile) ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>

                                    </div>
                                </div>

                                <div class="form-group col-md-12 commonPart furSkinHairVal" id="head">
                                    <label class="inner-label" id="headd1">
                                        <?php echo trans("headd1", 'en'); ?>
                                        <br>
                                        <?php echo trans("headd1", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="head_tail" id="input-part" class="head_tail" value="Greater or equal to 2m"><label id="bm">
                                                    <?php echo trans("bm", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("bm", 'bn'); ?>
                                                </label>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="head_tail" id="input-whole" class="head_tail" value="less than 2m"><label id="lm">
                                                    <?php echo trans("lm", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("lm", 'bn'); ?>
                                                </label>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 commonPart furSkinHairVal" id="tiger">
                                    <label class="inner-label" id="tIger">
                                        <?php echo trans("tIger", 'en'); ?>
                                        <br>
                                        <?php echo trans("tIger", 'bn'); ?>
                                    </label>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value=" Tiger">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Snow leopard ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value=" Tibetan Antelope Or Chiru (Shahtoosh shawl)">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Binturong or Bearcat ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Indian wild Ass ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Kashmir Stag or Hangul ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value=" Nayan or great Tibetan sheep">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value=" Wild yak">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value=" Weasels (Siberian, Yellow-bellied & mountain weasel)">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value=" ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value=" Leopard or Panther">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Clouded Leopard ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value=" Cheetah">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Indian wolf ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Tibetan wolf ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>
                                    <div class="form-group col-md-3" style="min-height:142px;">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select" value=" Bear">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>

                                    </div>

                                </div>
                                <div class="form-group col-md-12 commonPart furSkinHairVal" id="Bear">
                                    <label class="inner-label">Please Select</label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="BaerInpur" class="form-control BaerInpur" value="Himalayan Brown Bear ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="BaerInpur" class="form-control BaerInpur" value="Sloth bear ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="BaerInpur" class="form-control BaerInpur" value="Himalayan black bear ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="BaerInpur" class="form-control BaerInpur" value="Malay or Sun Bear ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>

                                    </div>
                                </div>


                                <div class="form-group col-md-12 commonPart furSkinHairVal" id="cat">
                                    <label class="inner-label" id="tIger">
                                        <?php echo trans("tIger", 'en'); ?>
                                        <br>
                                        <?php echo trans("tIger", 'bn'); ?>
                                    </label>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Caracal ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Clawless otter ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Desert cat ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Ermine or weasel ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value=" Fishing cat">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Golden Cat ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Giant squirrel ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value=" Leopard cat">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Lynx ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Malabar Civet ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value=" Marbled cat">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Ratel or Honey Badger ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Spotted linsang ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Lesser or Red Panda ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value=" Otters">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Mongooses (All species of genus Herpestes) ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Wild dog or dhole ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Common fox ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Giant squirrels ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Marmots (Himalayan, and long-tailed marmot) ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Martens (Beech, yellow-throated & Nilgiri marten) ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value=" Pole cats (marbled polecat & European polecat)">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value=" Red fox">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Hares (Black naped, Common Indian, Desert, Himalayan mouse hare) ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="species_cat" class="form-control species_cat" value="Hispid Hare ">
                                            <img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;">
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <!--****************************** SCALES QUILLS OPTION *******************************************-->

                                <div class="form-group col-md-12 commonPart scalsVal" id="country">

                                    <!--<label class="inner-label">Identify the type of Porcupine</label>-->
                                    <div class="form-row">
                                        <div id="">
                                            <!-- <label class="inner-label" id="scAle">
                                                <?php echo trans("scAle", 'en'); ?>
                                                <br>
                                                <?php echo trans("scAle", 'bn'); ?>
                                            </label> -->
                                        </div>

                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="ScalesCountry" class="form-control country" value="Pangolin">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                            </label>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="ScalesCountry" class="form-control country" value="Chinese pangolin">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                            </label>

                                        </div>

                                    </div>
                                </div>

                                <div class="form-group col-md-12 commonPart quillVal" id="quills">
                                    <!--<label class="inner-label">Identify the type of Porcupine</label>-->
                                    <div class="form-row">
                                        <div id="">
                                            <!-- <label class="inner-label" id="quiLls">
                                                <?php echo trans("quiLls", 'en'); ?>
                                                <br>
                                                <?php echo trans("quiLls", 'bn'); ?>
                                            </label> -->
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="QuillsCountry" class="form-control country" value=" Himalayan crestless porcupine">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="QuillsCountry" class="form-control country" value="Indian porcupine">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="QuillsCountry" class="form-control country" value="Bengal Porcupine">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                    </div>
                                </div>

                                <!--Antler Horn-->
                                <!-- <div class="form-group col-md-12 commonPart anterHornVal" id="antler_selection">
                                    <label class="inner-label" id="antlerselection">
                                        <?php echo trans("antlerselection", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlerselection", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="antler_horn_fld" id="antler_id" class="antler_horn_cl" value="Antler"><label id="an">
                                                    <?php echo trans("an", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("an", 'bn'); ?>
                                                </label>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="antler_horn_fld" id="horn_id" class="antler_horn_cl" value="Horn"><label id="ho">
                                                    <?php echo trans("ho", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("ho", 'bn'); ?>
                                                </label>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="form-group col-md-12 commonPart anterHornVal" id="antler_size">
                                    <label class="inner-label" id="antlersize">

                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="antler_size" class="form-control inner-textfield" value="Swamp Deer">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="antler_size" class="form-control inner-textfield" value="Sambar">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="antler_size" class="form-control inner-textfield" value="Chital or Spotted deer">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="antler_size" class="form-control inner-textfield" value="Bharal">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="antler_size" class="form-control inner-textfield" value="Kashmir Stag or Hangul">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="antler_size" class="form-control inner-textfield" value="Brow-antlered Deer or Thamin">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="antler_size" class="form-control inner-textfield" value="Barking Deer or Muntjak">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                </div>

                                <div class="form-group col-md-12 commonPart anterHornVal" id="horn_size">
                                    <label class="inner-label" id="antlersize">

                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>

                                    </label>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="horn_size" class="form-control inner-textfield" id="horn_size" value="Blackbuck">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="horn_size" class="form-control inner-textfield" value="Chinkara or Indian gazelle">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="horn_size" class="form-control inner-textfield" value="Serow">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="horn_size" class="form-control inner-textfield" value="Rhinoceros">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="horn_size" class="form-control inner-textfield" value="Gaur or Indian Bison">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="horn_size" class="form-control inner-textfield" value="Himalayan ibex">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="horn_size" class="form-control inner-textfield" value="Markhor or screw-horned goat">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="horn_size" class="form-control inner-textfield" value="Nayan or great Tibetan sheep">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="horn_size" class="form-control inner-textfield" value="Urial or Shapu">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="horn_size" class="form-control inner-textfield" value="Wild yak ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="horn_size" class="form-control inner-textfield" value="Four-Horned Antelope or Chousingha">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                </div>
                                <div class="form-group col-md-12 commonPart teethVal" id="sample_seized">
                                    <label class="inner-label" id="sampleseized">
                                        <?php echo trans("sampleseized", 'en'); ?>
                                        <br>
                                        <?php echo trans("sampleseized", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="species_tusk_fld" class="teethInput" value="Indian Elephant">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="species_tusk_fld" class="teethInput" value="Wild pig">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="species_tusk_fld" class="teethInput" value="Big Cats">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="species_tusk_fld" class="teethInput" value="Bear">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group col-md-12 teethVal" id="teethBigCat">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="teethBigCat" class="form-control inner-textfield" value="Tiger">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="teethBigCat" class="form-control inner-textfield" value="Snow leopard">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="teethBigCat" class="form-control inner-textfield" value="Clouded Leopard">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="teethBigCat" class="form-control inner-textfield" value="Leopard or Panther">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 commonPart teethVal" id="teethBeer">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="teethBeerDrop" class="form-control inner-textfield" value="Sloth bear">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="teethBeerDrop" class="form-control inner-textfield" value="Malay or Sun Bear">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="teethBeerDrop" class="form-control inner-textfield" value="Himalayan black bear">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="teethBeerDrop" class="form-control inner-textfield" value="Himalayan Brown Bear">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <!--<div class="form-group col-md-12 commonPart teethVal" id="species_tusk">
<label class="inner-label">Identify the species whose tusk has been seized.</label>
</div>-->

                                <div class="form-group col-md-12 commonPart teethVal" id="species_canine">
                                    <label class="inner-label" id="species_canine">
                                        <?php echo trans("species_canine", 'en'); ?>
                                        <br>
                                        <?php echo trans("species_canine", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="species_canine_fld" id="species_canine_id" class="species_canine_cl" value=" ">
                                                Cats
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="species_canine_fld" id="species_canine_id" class="species_canine_cl" value=" ">Bear
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12 commonPart teethVal" id="cat_canine">
                                    <!-- <label class="inner-label">Identify the seized species sample</label>-->
                                    <select class="form-control inner-textfield" name="cat_canine">
                                        <option value="">Please Select</option>
                                        <option value="Tiger">Tiger</option>
                                        <option value="Snow leopard">Snow leopard</option>
                                        <option value="Clouded Leopard">Clouded Leopard</option>
                                        <option value="Indian Lion">Indian Lion</option>
                                        <option value="Leopard or Panther">Leopard or Panther</option>

                                    </select>
                                </div>

                                <div class="form-group col-md-12 commonPart clawsVal" id="bear_canine">
                                    <!-- <label class="inner-label">Identify the seized species sample</label>-->
                                    <select class="form-control inner-textfield" name="bear_canine">
                                        <option value="">Please Select</option>
                                        <option value="H_Black_bear">H. Black bear</option>
                                        <option value="sloth_bear">Sloth bear</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 commonPart clawsVal" id="clawsoption">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="claws_cat_fld" class="claws_fld" value="Big Cats">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="claws_cat_fld" class="claws_fld" value="Bear">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 commonPart clawsVal" id="claws_cat">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="claws_cat" class="form-control clawsVal" value="Tiger">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="claws_cat" class="form-control clawsVal" value="Snow leopard">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="claws_cat" class="form-control clawsVal" value="Clouded Leopard">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="claws_cat" class="form-control clawsVal" value="Indian Lion">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="claws_cat" class="form-control clawsVal" value="Leopard or Panther">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 commonPart clawsVal" id="claws_bear">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="claws_bear" class="form-control inner-textfield" value="Sloth bear">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="claws_bear" class="form-control inner-textfield" value="Himalayan black bear">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="claws_bear" class="form-control inner-textfield" value="Himalayan Brown Bear">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 commonPart seaShellsVal" id="sea_shells">
                                    <label class="inner-label" id="seashells">
                                        <?php echo trans("seashells", 'en'); ?>
                                        <br>
                                        <?php echo trans("seashells", 'bn'); ?>
                                    </label>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Giant Clam">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">species5</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Horse Hoof's Clam">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">species5</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Fluted Giant clam">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">species5</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Chambered nautilus">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">species5</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Trumpet Shell">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">species5</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Turban shell">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">species5</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Glory of India">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">species5</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value=" ">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">Helmet</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Vexillate volute shell">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">species5</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Window pane oyster">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">species5</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Garlic shell">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">species5</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Conch">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label" style="height:25px;">species5</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 commonPart seaShellsVal" id="conch">
                                    <label class="inner-label" id="conCh">
                                        <?php echo trans("conCh", 'en'); ?>
                                        <br>
                                        <?php echo trans("conCh", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="conch" class="form-control country" value="Chiragra spider conch">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="conch" class="form-control country" value="Pigeon conch">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="conch" class="form-control country" value="Horse conch">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="conch" class="form-control country" value="Scorpio conch">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 commonPart seaShellsVal" id="ClamsSelect">
                                    <label class="inner-label" id="ClamsSelect">
                                        <?php echo trans("ClamsSelect", 'en'); ?>
                                        <br>
                                        <?php echo trans("ClamsSelect", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="dropClams" class="dropClams" value="Giant_clam">Giant clam
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="dropClams" class="dropClams" value="Horse’s_hoof">Horse’s hoof
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="dropClams" class="dropClams" value="Fluted_giant_clam">Fluted giant clam
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12 commonPart seaShellsVal" id="ChamberedNautilus">
                                    <label class="inner-label" id="ChamberedNautilus">
                                        <?php echo trans("ChamberedNautilus", 'en'); ?>
                                        <br>
                                        <?php echo trans("ChamberedNautilus", 'bn'); ?>
                                    </label>
                                    <div class="form-row">


                                        <div class="form-group col-md-4">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="Chambered" class="dropClams" value="Chambered nautilus">Chambered Nautilus
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 commonPart" id="bonesDiv">
                                    <label class="inner-label" id="bonesdiv">
                                        <?php echo trans("bonesdiv", 'en'); ?>
                                        <br>
                                        <?php echo trans("bonesdiv", 'bn'); ?>
                                    </label>

                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="bones" class="form-control bones_radio" value="Tiger">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="bones" class="form-control bones_radio" value=" Snow leopard">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="bones" class="form-control bones_radio" value="Indian Lion">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="bones" class="form-control bones_radio" value="Leopard or Panther">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="bones" class="form-control bones_radio" value="Clouded Leopard">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                </div>


                                <div class="form-group col-md-12 miscellaneousVal commonPart" id="miscellaneoussize">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>

                                    <div class="form-group col-md-4">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Hatha jodi">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Musk Pod">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Gall bladder">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Siyar singhi">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Shark Fin">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Ray gill rakers">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Carapace key chain">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Venom">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Feather">
                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                            <p class="img_label">species1</p>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                </div>
                                <div class="form-group col-md-12 miscellaneousVal commonPart" id="HathaJodi">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Hatha Jodi">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Spiny Tailed Lizard or Sanda">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Barred, Oval or Yellow Monitor Lizard">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Agra Monitor Lizard or Desert Monitor">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Large Bengal Monitor Lizard">
                                                <a data-fancybox href="g"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Monitor Lizard (Varanus species excluding yellow monitor lizard)">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>

                                    </div>
                                </div>
                                <div class="form-group col-md-12 miscellaneousVal commonPart" id="Muskpod">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="MuskpodInput" class="HathaJodiInput" value="Musk deer">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>

                                    </div>
                                </div>
                                <div class="form-group col-md-12 miscellaneousVal commonPart" id="gallBladder">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="gallBladderInput" class="gallBladderInput" value="Malay or Sun Bear">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="gallBladderInput" class="gallBladderInput" value="Himalayan black bear">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="gallBladderInput" class="gallBladderInput" value="Himalayan Brown Bear">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>

                                    </div>
                                </div>

                                <div class="form-group col-md-12 miscellaneousVal commonPart" id="siyarSinghi">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="siyarSinghiInput" class="siyarSinghiInput" value="Jackal">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>


                                    </div>
                                </div>
                                <div class="form-group col-md-12 miscellaneousVal commonPart" id="sharkFin">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value="Sharks">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value="Whale Shark">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value="Narrow sawfish ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value=" Ganges Shark">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value="Green sawfish ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value="Giant guitarfish">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>


                                    </div>
                                </div>

                                <div class="form-group col-md-12 miscellaneousVal commonPart" id="rayGillRakers">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="porcupineRayInput" class="porcupineRayInput" value="Porcupine ray">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>

                                        </div>


                                    </div>
                                </div>

                                <div class="form-group col-md-12 miscellaneousVal commonPart" id="carapacekeyChain">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="CarapaceInput" class="oliveRidleyInput" value="Green sea turtle">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="CarapaceInput" class="oliveRidleyInput" value="Hawksbill Turtle">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="CarapaceInput" class="oliveRidleyInput" value="Loggerhead turtle">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="CarapaceInput" class="oliveRidleyInput" value="Oliveback loggerhead turtle">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="CarapaceInput" class="oliveRidleyInput" value="Three-keeled Turtle">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group col-md-12 miscellaneousVal commonPart" id="venomdiv">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="venomInput" class="oliveRidleyInput" value="Russel's viper">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="venomInput" class="oliveRidleyInput" value="Indian Cobras">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="venomInput" class="oliveRidleyInput" value="King cobra">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="venomInput" class="oliveRidleyInput" value="Cobras; Kraits, and Coral Snakes">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="venomInput" class="oliveRidleyInput" value="Fresh water and sea snakes">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="venomInput" class="oliveRidleyInput" value="Viper">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="venomInput" class="oliveRidleyInput" value="Monocled Cobra ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">species1</p>
                                                <span class="checkmark"></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group col-md-12 miscellaneousVal commonPart" id="FeatherDiv">
                                    <label class="inner-label" id="antlersize">
                                        <?php echo trans("antlersize", 'en'); ?>
                                        <br>
                                        <?php echo trans("antlersize", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="featherInput" class="oliveRidleyInput" value=" ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">Peafowl</p>
                                                <span class="checkmark"></span>
                                        </div>
                                        <div class="form-group col-md-3" style="min-height:142px;">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="featherInput" class="oliveRidleyInput" value=" ">
                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                <p class="img_label">Grey jungle fowl</p>
                                                <span class="checkmark"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!********************************PART END****************************************>
                                <!*******************************WHOLE START**************************************>

                                    <div id=" whole">
                                        <div class="form-group col-md-12 commonWhole" id="wholeSelectDrop">
                                            <label class="inner-label" id="part">
                                                <?php echo trans("part", 'en'); ?>
                                                <br>
                                                <?php echo trans("part", 'bn'); ?>
                                            </label>
                                            <div class="form-group col-md-12" name="wholeSelect" id="wholeSelect">
                                                <div class="form-group">
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input value="mammals" type="radio" name="optradio" class="wholeSelect" required />
                                                            <p>Mammals স্তন্যপায়ী প্রাণী</p>
                                                            <spna class="checkmark"></spna>
                                                            <a><img src="../dist/img/greentiger.jpg" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input value="birds" type="radio" name="optradio" class="wholeSelect" required />
                                                            <p>Birds পাখি</p>
                                                            <spna class="checkmark"></spna>
                                                            <a><img src="../dist/img/bird.jpg" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input value="fft" type="radio" name="optradio" class="wholeSelect" required />
                                                            <p>Turtles and tortoises কচ্ছপ এবং কাছিম</p>
                                                            <spna class="checkmark"></spna>
                                                            <a><img src="../dist/img/tortorile.jpg" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>
                                                    <!-- <option value="amphibians">Amphibians উভচর</option> -->
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input value="lizard" type="radio" name="optradio" class="wholeSelect" required />
                                                            <p>Snakes,Lizards & frog সাপ,টিকটিকি এবং ব্যাঙ</p>
                                                            <spna class="checkmark"></spna>
                                                            <a><img src="../dist/img/lizard.jpg" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>
                                                    <!-- <option value="snakes"> </option> -->
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input value="marine" type="radio" name="optradio" class="wholeSelect" required />
                                                            <p>হাঙ্গর ও শাপলা জাতের মাছ</p>
                                                            <spna class="checkmark"></spna>
                                                            <a><img src="../dist/img/shaplafish.jpg" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!******************************amphibians START************************************************************************************************************>
                                            <div class="form-group col-md-12 commonWhole amphibianVal" id="amphibiansSelect">
                                                <label class="inner-label" id="antlersize">
                                                    <?php echo trans("antlersize", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("antlersize", 'bn'); ?>
                                                </label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="Amphibiansradio" class="form-control country" value=" ">
                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!******************************amphibians end************************************************************************************************************>
                                                <!******************************BIRDS START************************************************************************************************************>
                                                    <div class="form-group col-md-12 commonWhole birdVal" id="wlpaSize">
                                                        <label class="inner-label" id="wlpasize">
                                                            <?php echo trans("wlpasize", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("wlpasize", 'bn'); ?>
                                                        </label>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Duck">Duck
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Parakeet">Parakeet
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Raptor">Raptor
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Hornbill">Hornbill
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Waterbird">Waterbird
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Woodpecker">Woodpecker
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Owl">Owl
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Fowl">Fowl
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Kingfisher">Kingfisher
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Shoreird">Shoreird
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Forest bird">Forest bird
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Dove & Pigeon">Dove & Pigeon
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 commonWhole birdVal" id="wlpaDuck">
                                                        <label class="inner-label" id="antlersize">
                                                            <?php echo trans("antlersize", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("antlersize", 'bn'); ?>
                                                        </label>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Black Francolin">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value=" Babblers">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Barbets ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Chloropsis or Leafbird ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Flowerpeckers ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Flycatchers">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Larks ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Minivets ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Orioles ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Pittas ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Rollers or Blue jays ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Sunbirds ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="Thrushes ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value=" Tits">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio" value="White-eyes ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 commonWhole birdVal" id="wlpaParakeet">
                                                        <label class="inner-label" id="antlersize">
                                                            <?php echo trans("antlersize", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("antlersize", 'bn'); ?>
                                                        </label>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Hill Myna ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species1</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Parakeets ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species1</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Bulbuls ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Falcons (except Falco peregrinus, F. biarmicus, F.chicuera) ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Nicobar pigeon ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Tragopan Pheasants(Western tragopan, Blyth's Tragopan, Satyr tragopan, Temminck's tragopan) ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Lord Derby’s parakeet ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Bustard-Quails ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Jays ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Quails ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Trogons ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Waxbills ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaParakeetSelect" id="wlpaParakeetSelect" class="form-control inner-textfield" value="Bazas (Jerdon's Baza & Black Baza) ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>


                                                    </div>
                                                    <div class="form-group col-md-12 commonWhole birdVal" id="wlpaRaptor">
                                                        <label class="inner-label" id="antlersize">
                                                            <?php echo trans("antlersize", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("antlersize", 'bn'); ?>
                                                        </label>
                                                        <div class="form-row">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Barnowls ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species2</p>
                                                                        <span class="checkmark"></span>

                                                                </div>
                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Great Indian hornbill ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species2</p>
                                                                        <span class="checkmark"></span>

                                                                </div>
                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Large Falcons ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species2</p>
                                                                        <span class="checkmark"></span>

                                                                </div>
                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Siberian white crane ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species2</p>
                                                                        <span class="checkmark"></span>

                                                                </div>
                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Owls ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species2</p>
                                                                        <span class="checkmark"></span>

                                                                </div>
                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Comb duck ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species2</p>
                                                                        <span class="checkmark"></span>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group col-md-12 commonWhole birdVal" id="birdsCustom">
                                                        <label class="inner-label" id="wlpasize">
                                                            <?php echo trans("wlpasize", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("wlpasize", 'bn'); ?>
                                                        </label>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdsCustomRadio" id="" class="birdsCustomRadio" value="Small">Small(ছোট)
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdsCustomRadio" id="" class="birdsCustomRadio" value="Medium">Medium(মধ্যম)
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdsCustomRadio" id="" class="birdsCustomRadio" value="Large">Large(বড়)
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="form-group col-md-12 commonWhole birdVal" id="birdsSmallSelect">
                                                        <label class="inner-label" id="antlersize">
                                                            <?php echo trans("antlersize", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("antlersize", 'bn'); ?>
                                                        </label>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="birdsSmall" id="birdsSmall" class="form-control inner-textfield" value=" Rosella">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="birdsSmall" id="birdsSmall" class="form-control inner-textfield" value="Rainbow Lorikeet ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="birdsSmall" id="birdsSmall" class="form-control inner-textfield" value="Sun Conure ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="birdsSmall" id="birdsSmall" class="form-control inner-textfield" value="Pygmy falcon ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="birdsSmall" id="birdsSmall" class="form-control inner-textfield" value="Javan Sparrow ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="form-group col-md-12 commonWhole birdVal" id="birdsMediumSelect">
                                                        <label class="inner-label" id="antlersize">
                                                            <?php echo trans("antlersize", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("antlersize", 'bn'); ?>
                                                        </label>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdsMediumSelect" class="birdsMediumSelect" value="Bird of Paradise ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species2</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdsMediumSelect" class="birdsMediumSelect" value="Grey Parrot ">
                                                                    <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                                    <p class="img_label">species2</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdsMediumSelect" class="birdsMediumSelect" value="Hyacinth Macaw ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species2</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="form-group col-md-12 commonWhole birdVal" id="birdsLargeSelect">
                                                        <label class="inner-label" id="antlersize">
                                                            <?php echo trans("antlersize", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("antlersize", 'bn'); ?>
                                                        </label>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="birdsLarge" id="birdsLarge" class="form-control inner-textfield" value="Scarlet Macaw ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="birdsLarge" id="birdsLarge" class="form-control inner-textfield" value="Blue-and-yellow Macaw ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="birdsLarge" id="birdsLarge" class="form-control inner-textfield" value="Sulphur crested Cockatoo ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="birdsLarge" id="birdsLarge" class="form-control inner-textfield" value="Large Falcons ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="birdsLarge" id="birdsLarge" class="form-control inner-textfield" value="African Grey Parrot ">
                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">species2</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 commonWhole birdVal" id="birdslivemeatradio">
                                                        <label class="inner-label" id="antlersize">
                                                            <?php echo trans("antlersize", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("antlersize", 'bn'); ?>
                                                        </label>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Kalij Pheasant ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species2</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Junglefowl ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Partridges ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Great Indian hornbill ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Cheer pheasant ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Hornibills (Rusty-cheeked, rufous-necked & Wreathed Hornbill) ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Hume’s bar-backed pheasant ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Lammergeier or Bearded vulture ">
                                                                    <img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;">
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value=" Monal Pheasants (Himalayan Monal & Sclater's Monal)">
                                                                    <img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;">
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Nicobar pigeon ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" vvalue="Scalater’s Monal ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value=" Tragopan Pheasants(Western tragopan, Blyth's Tragopan, Satyr tragopan, Temminck's tragopan)">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="White-eared pheasant ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Brown-headed gull ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value=" Bustards">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Bustard-Quails ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Comb duck ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value=" Grebes">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Jacanas ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Megapodes ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Quails ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Sandgrouses ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Vultures ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Black-necked crane">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Blood pheasants ">
                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species3</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!**********************************BIRDS END*************************************************************>

                                                        <!**********************************FTT START*************************************************************>

                                                            <div class="form-group col-md-12 commonWhole inputWholeSelect fftVal">
                                                                <label class="inner-label" id="tortoise">
                                                                    <?php echo trans("tortoise", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("tortoise", 'bn'); ?>
                                                                </label>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="fftInput" id="" class="fftInput" value="Live"><label id="li">
                                                                                <?php echo trans("li", 'en'); ?>

                                                                                <?php echo trans("li", 'bn'); ?>
                                                                            </label>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="fftInput" id="" class="fftInput" value="Meat_eggs"><label id="car">
                                                                                <?php echo trans("car", 'en'); ?>

                                                                                <?php echo trans("car", 'bn'); ?>
                                                                            </label>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12 commonWhole fftVal" id="liveInput">
                                                                <label class="inner-label" id="liveinput">
                                                                    <?php echo trans("liveinput", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("liveinput", 'bn'); ?>
                                                                </label>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="liveInput" id="" class="liveInput" value="Wlpa"><label id="wl">
                                                                                <?php echo trans("wl", 'en'); ?>

                                                                                <?php echo trans("wl", 'bn'); ?>
                                                                            </label>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="liveInput" id="" class="liveInput" value="Customs"><label id="ca">
                                                                                <?php echo trans("ca", 'en'); ?>

                                                                                <?php echo trans("ca", 'bn'); ?>
                                                                            </label>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12 commonWhole fftVal" id="wlpaSelectDiv">
                                                                <label class="inner-label" id="wlpaselectDiv"> <?php echo trans("wlpaselectDiv", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("wlpaselectDiv", 'bn'); ?></label>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value=" Eastern Hill Terrapin">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label" style="height:140px;"></p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Indian Tent Turtle ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label" style="height:140px;"></p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Sail Terrapin ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label" style="height:140px;"></p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value=" Spotted black terrapin">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label" style="height:140px;"></p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Terrapin ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label" style="height:140px;"></p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Tortoises (All tortoises, Family: Testudinidae) and Turtles (Family: Tryonichidae) which are not in other schedules. ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label" style="height:140px;"></p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Kerala Forest Terrapin ">
                                                                        <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                                        <p class="img_label" style="height:140px;"></p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                            <!------START--Customs----------->
                                                            <div class="form-group col-md-12 commonWhole fftVal" id="customDiv">
                                                                <label class="inner-label" id="wlpaselectDiv">
                                                                    <?php echo trans("wlpaselectDiv", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("wlpaselectDiv", 'bn'); ?>
                                                                </label>

                                                                <div class="form-group col-md-3" style="height:140px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Radiated Tortoise ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species3</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3" style="height:140px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="African Spurred Tortoise ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species3</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3" style="height:140px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Common snapping turtle ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species3</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3" style="height:140px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Red eared slider ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species3</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3" style="height:140px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Brown Roofed Turtle ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species3</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3" style="height:140px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Crowned river turtle ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species3</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3" style="height:140px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Three Striped Roofed Turtle ">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species3</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <!------END---Customs---------->
                                                            <!------START--Meat/eggs----------->
                                                            <div class="form-group col-md-12 commonWhole fftVal" id="meatEggsDiv">
                                                                <label class="inner-label" id="wlpaselectDiv">
                                                                    <?php echo trans("wlpaselectDiv", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("wlpaselectDiv", 'bn'); ?>
                                                                </label>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Eastern Hill Terrapin">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species4</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Ganges Soft-shelled Turtle">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species4</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Peacock-marked soft-shelled turtle">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species4</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Indian Soft-shelled Turtle">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species4</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Tortoises (All tortoises, Family: Testudinidae) and Turtles (Family: Tryonichidae) which are not in other schedules.">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">Tortoises (All tortoises, Family: Testudinidae) and Turtles (Family: Tryonichidae) which are not in other schedules.</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Audithia Turtle">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">Audithia Turtle</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Leathery turtle">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">Leathery turtle</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Three-keeled Turtle3">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species4</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Green sea turtle">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species4</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Hawksbill Turtle">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species4</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Loggerhead turtle">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species4</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Oliveback loggerhead turtle">
                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">species4</p>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <!------END---Meat/eggs---------->
                                                            <!**********************************END FTT Whole*************************************************************>

                                                                <!------START--Marine----------->
                                                                <div class="form-group col-md-12 commonWhole marineval" id="marineDiv">
                                                                    <label class="inner-label" id="marinediv">
                                                                        <?php echo trans("marinediv", 'en'); ?>
                                                                        <br>
                                                                        <?php echo trans("marinediv", 'bn'); ?>
                                                                    </label>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Sea Horse">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Sea Fan">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Sponges">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Sea Cucumber">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Glory of India">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Sharks">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Bull Mouth Helmet">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Arthritic spider conch">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5f193ffc39f02_18_arthriticus_01Harpago_.jpg" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Chiragra spider conch">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Orange Spider Conch">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Top shell/Trochus shell">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Millipede spider conch">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Map cowrie shell">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Great green turban shell">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Lamacina cowrie shell">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Mole cowrie shell">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Whale Shark">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Narrow sawfish">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Ganges Shark">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Ganges stingray">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Green sawfish">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Giant guitarfish">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Giant Clam">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Coral">
                                                                            <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">species4</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                                <div class="form-group col-md-12 commonWhole marineval" id="marineCorla">
                                                                    <label class="inner-label" id="antlersize">
                                                                        <?php echo trans("antlersize", 'en'); ?>
                                                                        <br>
                                                                        <?php echo trans("antlersize", 'bn'); ?>

                                                                    </label>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="marineCorlaRadio" class="marineCorlaRadio" value="Reef Building Corals">
                                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">species4</p>
                                                                                <span class="checkmark"></span>
                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="marineCorlaRadio" class="marineCorlaRadio" value="Black corals">
                                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">species4</p>
                                                                                <span class="checkmark"></span>
                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="marineCorlaRadio" class="marineCorlaRadio" value="Organ Pipe Corals">
                                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">species4</p>
                                                                                <span class="checkmark"></span>
                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="marineCorlaRadio" class="marineCorlaRadio" value="Fire Corals">
                                                                                <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">species4</p>
                                                                                <span class="checkmark"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!------END---Marines---------->
                                                                <!**********************************STSRT LIZARD Whole*************************************************************>
                                                                    <!------START--Lizard----------->
                                                                    <div class="form-group col-md-12 commonWhole lizardVal" id="lizardDiv">
                                                                        <label class="inner-label" id="lizarddiv">
                                                                            <?php echo trans("lizarddiv", 'en'); ?>
                                                                            <br>
                                                                            <?php echo trans("lizarddiv", 'bn'); ?>
                                                                        </label>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="lizardSelect" id="" class="lizardSelect" value="Live"><label id="li">
                                                                                        <?php echo trans("li", 'en'); ?>

                                                                                        <?php echo trans("li", 'bn'); ?>
                                                                                    </label>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="lizardSelect" id="" class="lizardSelect" value="Meat"><label id="car">
                                                                                        <?php echo trans("car", 'en'); ?>

                                                                                        <?php echo trans("car", 'bn'); ?>
                                                                                    </label>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-12  commonWhole lizardVal" id="lizardInput">
                                                                        <label class="inner-label" id="birdselect">
                                                                            <?php echo trans("birdselect", 'en'); ?>
                                                                            <br>
                                                                            <?php echo trans("birdselect", 'bn'); ?>
                                                                        </label>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="lizardradio" id="" class="lizardradio" value="Custom"><label id="ca">
                                                                                        <?php echo trans("ca", 'en'); ?>

                                                                                        <?php echo trans("ca", 'bn'); ?>
                                                                                    </label>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="lizardradio" id="" class="lizardradio" value="Wlpa"><label id="wl">
                                                                                        <?php echo trans("wl", 'en'); ?>

                                                                                        <?php echo trans("wl", 'bn'); ?>
                                                                                    </label>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-12 commonWhole lizardVal" id="customInput">
                                                                        <label class="inner-label" id="antlersize">
                                                                            <?php echo trans("antlersize", 'en'); ?>
                                                                            <br>
                                                                            <?php echo trans("antlersize", 'bn'); ?>

                                                                        </label>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Iguana" class="Iguana" value="Common Green Iguana">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Iguana" class="Iguana" value="Hispaniolan Rhinoceros Iguana">
                                                                                    <img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;">
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-12 commonWhole lizardVal" id="wlpaInput">
                                                                        <label class="inner-label" id="antlersize">
                                                                            <?php echo trans("antlersize", 'en'); ?>
                                                                            <br>
                                                                            <?php echo trans("antlersize", 'bn'); ?>
                                                                        </label>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="wlpaInput" class="wlpaInput" value="Gharial">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="wlpaInput" class="wlpaInput" value="Golden Gecko">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="wlpaInput" class="wlpaInput" value="Tokay Gecko">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="wlpaInput" class="wlpaInput" value="Tokay Gecko">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="wlpaInput" class="wlpaInput" value="Himalayan newt or salamander">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="wlpaInput" class="wlpaInput" value="Monitor Lizard (Varanus species excluding yellow monitor lizard)">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-12 commonWhole lizardVal" id="maetInputDiv">
                                                                        <label class="inner-label" id="antlersize">
                                                                            <?php echo trans("antlersize", 'en'); ?>
                                                                            <br>
                                                                            <?php echo trans("antlersize", 'bn'); ?>
                                                                        </label>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="maetInput" class="maetInput" value="Spiny Tailed Lizard or Sanda">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="maetInput" class="maetInput" value="Barred, Oval or Yellow Monitor Lizard">
                                                                                    <a data-fancybox href="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5dc0f9cbcbc10_Barred, Oval or Yellow Monitor_Anirban Chaudhuri.jpg"><img src="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5dc0f9cbcbc10_Barred, Oval or Yellow Monitor_Anirban Chaudhuri.jpg" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="maetInput" class="maetInput" value="Monitor Lizard (Varanus species excluding yellow monitor lizard)">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="maetInput" class="maetInput" value="Large Bengal Monitor Lizard">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="maetInput" class="maetInput" value="Water lizard">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!------END---Lizard---------->
                                                                    <!**********************************END LIZARD Whole*************************************************************>
                                                                        <!-----------MAMMALS START---------------->
                                                                        <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsSelect">
                                                                            <label class="inner-label" id="mammalselect">
                                                                                <?php echo trans("mammalselect", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("mammalselect", 'bn'); ?>
                                                                            </label>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalRadio" id="" class="mammalRadio" value="Live"><label id="li">
                                                                                            <?php echo trans("li", 'en'); ?>

                                                                                            <?php echo trans("li", 'bn'); ?>
                                                                                        </label>
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalRadio" id="" class="mammalRadio" value="Meat"><label id="car">
                                                                                            <?php echo trans("car", 'en'); ?>

                                                                                            <?php echo trans("car", 'bn'); ?>
                                                                                        </label>
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsLive">
                                                                            <label class="inner-label" id="livenput">
                                                                                <?php echo trans("liveinput", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("liveinput", 'bn'); ?>
                                                                            </label>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveRadio" id="" class="mammalsLiveRadio" value="Wlpa"><label id="wl">
                                                                                            <?php echo trans("wl", 'en'); ?>

                                                                                            <?php echo trans("wl", 'bn'); ?>
                                                                                        </label>
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveRadio" id="" class="mammalsLiveRadio" value="Customs"><label id="ca">
                                                                                            <?php echo trans("ca", 'en'); ?>

                                                                                            <?php echo trans("ca", 'bn'); ?>
                                                                                        </label>
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsMeat">
                                                                            <label class="inner-label" id="wlpaselectDiv">
                                                                                <?php echo trans("wlpaselectDiv", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("wlpaselectDiv", 'bn'); ?>
                                                                            </label>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Civets (all species of Viverridae except Malabar civet)">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Crab-eating Macaque">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Gangetic dolphin">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Capped Langur">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Catecean spp. (whales, dolphins, and porpoises)">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Dugong (or Sea cow)">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">)</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Hoolock gibbon">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Leaf monkey">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Lion tailed macaque">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Rhesus Macaque">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Assamese macaque">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Cetatean species">
                                                                                        <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Sperm whale">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Andaman Wild pig">
                                                                                        <img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;">
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Golden Langur">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Binturong or Bearcat">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Caracal">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">Caracal</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Indian Elephant">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Little Indian porpoise">
                                                                                        <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Nilgiri langur">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Rusty spotted cat">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Tiger">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Indian Lion">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" id="" class="mammalsMeatRadio" value="Ungulates">
                                                                                        Ungulates
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-group col-md-3">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsMeatRadio" id="" class="mammalsMeatRadio" value="Small_Mammals">
                                                                                        Small Mammals
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsLiveCustom">
                                                                            <label class="inner-label" id="antlersize">
                                                                                <?php echo trans("antlersize", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("antlersize", 'bn'); ?>
                                                                            </label>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Indian Lion">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Capuchin monkey">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Spider monkey">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Vervet Monkey">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Black-and-White Ruffed Lemur">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Ring-tailed Lemur">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Common Marmoset">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="African Pygmy Hedgehog">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Squirrel Monkey">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12 commonWhole mammalVal" id="UngulatesSelect">
                                                                            <label class="inner-label">
                                                                                Identify the species seized.
                                                                            </label>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Gaur or Indian Bison">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Serow">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Barking Deer or Muntjak">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Nilgai">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Sambar">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Chital or Spotted deer">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Wild pig">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Himalayan ibex">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Himalayan tahr">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Indian wild Ass">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Kashmir Stag or Hangul">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Markhor or screw-horned goat">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Nilgiri Tahr">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Nayan or great Tibetan sheep">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Tibetan gazelle">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Urial or Shapu">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Wild buffalo" <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">Wild buffalo</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Wild yak">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Blackbuck">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Brow-antlered Deer or Thamin">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Chinkara or Indian gazelle">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Mouse deer">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Swamp Deer">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Four-Horned Antelope or Chousingha">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Bharal">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12 commonWhole mammalVal" id="Small_MammalsSelect">
                                                                            <label class="inner-label">
                                                                                <?php echo trans("inner-label", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("inner-label", 'bn'); ?>
                                                                            </label>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Hispid Hare">
                                                                                    <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Hares (Black naped, Common Indian, Desert, Himalayan mouse hare)">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Indian porcupine">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Malabar Civet">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Pygmy hog">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Ratel or Honey Badger">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Bengal Porcupine">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Himalayan crestless porcupine">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Pangolin">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Chinese pangolin">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Giant squirrels">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Marmots (Himalayan, and long-tailed marmot)">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Martens (Beech, yellow-throated & Nilgiri marten)">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label class="radioBtnHolder">
                                                                                    <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Giant squirrel">
                                                                                    <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                    <p class="img_label">species4</p>
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsLiveWlpa">
                                                                            <label class="inner-label" id="antlersize">
                                                                                <?php echo trans("antlersize", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("antlersize", 'bn'); ?>
                                                                            </label>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Indian Lion">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Slow Loris">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Malay or Sun Bear">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Bonnet Macaque">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Rhesus Macaque">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Crab-eating Macaque">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Ermine or weasel">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Binturong or Bearcat">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Capped Langur">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Giant squirrel">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Leaf monkey">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Lion tailed macaque">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Pygmy hog">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Assamese macaque">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Ferret badgers (Chinese & Burmese ferret badgers)">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Pig-tailed macaque">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Marmots (Himalayan, and long-tailed marmot)">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Hedgehog">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Caracal">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Cheetah">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Golden Langur">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Hoolock gibbon">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Pallas’s Cat">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">t</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Tiger">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-----------MAMMALS END---------------->
                                                                        <!-----------SNAKES START---------------->
                                                                        <div class="form-group col-md-12 commonWhole snakeVal" id="snakeLiveMeatSelect">
                                                                            <label class="inner-label" id="snakeliveMeatSelect">
                                                                                <?php echo trans("snakeliveMeatSelect", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("snakeliveMeatSelect", 'bn'); ?>
                                                                            </label>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakeLiveMeatRadio" id="" class="snakeLiveMeatRadio" value="live"><label id="li">
                                                                                            <?php echo trans("li", 'en'); ?>

                                                                                            <?php echo trans("li", 'bn'); ?>
                                                                                        </label>
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakeLiveMeatRadio" id="" class="snakeLiveMeatRadio" value="meat"><label id="car">
                                                                                            <?php echo trans("car", 'en'); ?>

                                                                                            <?php echo trans("car", 'bn'); ?>
                                                                                        </label>
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group col-md-12 commonWhole snakeVal" id="snakesSelect">
                                                                            <label class="inner-label" id="liveinput">
                                                                                <?php echo trans("liveinput", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("liveinput", 'bn'); ?>
                                                                            </label>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesradio" id="" class="snakesradio" value="Wlpa"><label id="wl">
                                                                                            <?php echo trans("wl", 'en'); ?>

                                                                                            <?php echo trans("wl", 'bn'); ?>
                                                                                        </label>
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesradio" id="" class="snakesradio" value="Customs"><label id="ca">
                                                                                            <?php echo trans("ca", 'en'); ?>

                                                                                            <?php echo trans("ca", 'bn'); ?>
                                                                                        </label>
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group col-md-12 commonWhole snakeVal" id="snakesCustom">
                                                                            <label class="inner-label" id="antlersize">
                                                                                <?php echo trans("antlersize", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("antlersize", 'bn'); ?>
                                                                            </label>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesCustomradio" class="snakesCustomradio" value="Russel's viper">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12 commonWhole snakeVal" id="snakesLiveWlpa">
                                                                            <label class="inner-label" id="antlersize">
                                                                                <?php echo trans("antlersize", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("antlersize", 'bn'); ?>
                                                                            </label>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Dhaman or Rat Snake">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Indian Cobras">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Russel's viper">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Common Sand Boa">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Pythons">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Colubridae (Typical snakes, water snakes, whipsnakes)">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="King cobra">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Burmese Python">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Indian rock Python">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Spectacled Cobra">
                                                                                        <a data-fancybox href=" https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Boas">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Egg eating snake">
                                                                                        <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Cobras; Kraits, and Coral Snakes">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Viper">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Monocled Cobra">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Red Sand Boa">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12 commonWhole snakeVal" id="snakeMeatSelect">
                                                                            <label class="inner-label" id="wlpaselectDiv">
                                                                                <?php echo trans("wlpaselectDiv", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("wlpaselectDiv", 'bn'); ?>
                                                                            </label>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakeMeatRadio" class="snakeMeatRadio" value="Pythons">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakeMeatRadio" class="snakeMeatRadio" value="Burmese Python">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                                    <label class="radioBtnHolder">
                                                                                        <input type="radio" name="snakeMeatRadio" class="snakeMeatRadio" value="Indian rock Python">
                                                                                        <a data-fancybox href="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0"><img src="https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                        <p class="img_label">species4</p>
                                                                                        <span class="checkmark"></span>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12 commonWhole snakeVal" id="ColubridaeSelect">
                                                                            <label class="inner-label" id="wlpaselectDiv">
                                                                                <?php echo trans("wlpaselectDiv", 'en'); ?>
                                                                                <br>
                                                                                <?php echo trans("wlpaselectDiv", 'bn'); ?>
                                                                            </label>
                                                                            <select class="form-control inner-textfield Colubridae" name="Colubridae" id="Colubridae">
                                                                                <option>Please Select</option>
                                                                                <option value="Bronzeback">Bronzeback</option>
                                                                                <option value="Tree_Snake">Tree Snake</option>
                                                                                <option value="Ornamental_flying_snake">Ornamental flying snake</option>
                                                                                <option value="Vine_snake">Vine Snake</option>
                                                                            </select>
                                                                        </div>

                                                                        <!-----------SNAKES END---------------->
                                    </div>

                                    <!*****************************WHOLE END**********************************************>
                                        <a class="listinBtn" id="no-identify-species-next">
                                            <?php echo trans("next", 'en'); ?>

                                            <?php echo trans("next", 'bn'); ?>

                                            <!-- <input type="submit" class="listinBtn" value="Next" title="Next" name="submit" > -->
                                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>

</form>
</div>
</div>
</section>
</div>

</div>
<div class="control-sidebar-bg"></div>
</div>