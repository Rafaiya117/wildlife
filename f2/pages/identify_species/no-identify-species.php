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
                        <form role="form" id="form_section1" class="form-horizontal" method="POST" action="#input-rescue-information" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group col-md-12" id="edit_species">
                                        <label class="inner-label" id="in-lab1">
                                            <?php echo trans("in-lab1", 'en'); ?>
                                            <br>
                                            <?php echo trans("in-lab1", 'bn'); ?>
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="optradio1" required="" id="input-part" class="part" value="Part"><label id="pBangla">
                                                        <?php echo trans("pBangla", 'en'); ?>

                                                        <?php echo trans("pBangla", 'bn'); ?>

                                                    </label>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="optradio2" required="" id="input-whole" class="whole" value="Whole"><label id="hBangla">
                                                        <?php echo trans("hBangla", 'en'); ?>

                                                        <?php echo trans("hBangla", 'bn'); ?>

                                                    </label>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="part">
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
                                                            <p>চামড়া ও লোম/পশম</p>
                                                            <span class="checkmark"></span>
                                                            <a><img src="../dist/img/Tiger_skin.png" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input class="SpeciecSelect" value="Scales" type="radio" name="optradio" required />
                                                            <p>আঁইশ, নখর ও শিং</p>
                                                            <spna class="checkmark"></spna>
                                                            <a><img src="../dist/img/Tiger_claw.png" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input class="SpeciecSelect" value="Quills" type="radio" name="optradio" required />
                                                            <p>মাংস, জননাঙ্গ ও পাখির ঠোঁট</p>
                                                            <span class="checkmark"></span>
                                                            <a><img src="../dist/img/Meat_icon.png" style="height: 50px; width: 50px;"></a>

                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input class="SpeciecSelect" value="Miscellaneous" type="radio" name="optradio" required />
                                                            <p>হাঙ্গর ও শাপলাপাতা জাতের মাছের পাখনা</p>
                                                            <span class="checkmark"></span>
                                                            <a><img src="../dist/images/shark_fin.png" style="height: 50px; width: 50px;"></a>

                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input class="SpeciecSelect" value="Tusk_Teeth" type="radio" name="optradio" required />
                                                            <p>হাঙ্গর ও শাপলাপাতা জাতের মাছের বাণিজ্যকৃত অন্যান্য পণ্য</p>
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
                                            <?php global $sSpecies_snake_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_snake_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="snakeSkinInput" class="snakeSkinInput fspecies" value="<?php echo $sSpecies_snake_data[$i]['id']; ?>"><?php echo ($sSpecies_snake_data[$i]['english_name']); ?><br><?php echo ($sSpecies_snake_data[$i]['bangla_name']); ?><br>

                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_snake_data[$i]['id']); ?>.webp"><img id="image" src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_snake_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>

                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 commonPart furSkinHairVal" id="crocodilesSkin">
                                            <label class="inner-label" id="skIn">
                                                <?php echo trans("skIn", 'en'); ?>
                                                <br>
                                                <?php echo trans("skIn", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_crocodile_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_crocodile_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="crocodilesInput" class="crocodilesInput fspecies" id="id" value="<?php echo ($sSpecies_crocodile_data[$i]['id']); ?>"><?php echo ($sSpecies_crocodile_data[$i]['english_name']); ?><br><?php echo ($sSpecies_crocodile_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_crocodile_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_crocodile_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
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
                                            <?php global $sSpecies_Large_mammal_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_Large_mammal_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="species_tiger" class="form-control species_tiger_select fspecies" id="id" value="<?php echo ($sSpecies_Large_mammal_data[$i]['id']); ?>"><?php echo ($sSpecies_Large_mammal_data[$i]['english_name']); ?><br><?php echo ($sSpecies_Large_mammal_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Large_mammal_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Large_mammal_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-12 commonPart furSkinHairVal" id="cat">
                                        <label class="inner-label" id="tIger">
                                            <?php echo trans("tIger", 'en'); ?>
                                            <br>
                                            <?php echo trans("tIger", 'bn'); ?>
                                        </label>
                                        <?php global $sSpecies_Small_mammal_data; ?>
                                        <div class="form-row">
                                            <?php
                                            for ($i = 0, $ilen = sizeof($sSpecies_Small_mammal_data); $i < $ilen; $i++) {
                                            ?>
                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="species_tiger" class="form-control species_tiger_select fspecies" id="id" value="<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>"><?php echo ($sSpecies_Small_mammal_data[$i]['english_name']); ?><br><?php echo ($sSpecies_Small_mammal_data[$i]['bangla_name']); ?><br>
                                                        <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">species1</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <!--****************************** SCALES QUILLS OPTION *******************************************-->

                                    <div class="form-group col-md-12 commonPart scalsVal" id="country">

                                        <label class="inner-label">What type of part have you found?</label>
                                        <?php global $sSpecies_Small_mammal_data; ?>
                                        <div class="form-row">
                                            <?php
                                            for ($i = 0, $ilen = sizeof($sSpecies_Small_mammal_data); $i < $ilen; $i++) {
                                            ?>
                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="ScalesCountry" class="form-control country fspecies" id="id" value="<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>"><?php echo ($sSpecies_Small_mammal_data[$i]['english_name']); ?><br><?php echo ($sSpecies_Small_mammal_data[$i]['bangla_name']); ?><br>
                                                        <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">species1</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 commonPart quillVal" id="quills">
                                        <label class="inner-label">Identify the type</label>
                                        <?php global $sSpecies_Small_mammal_data; ?>
                                        <div class="form-row">
                                            <?php
                                            for ($i = 0, $ilen = sizeof($sSpecies_Small_mammal_data); $i < $ilen; $i++) {
                                            ?>
                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="ScalesCountry" class="form-control country fspecies" id="id" value="<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>"><?php echo ($sSpecies_Small_mammal_data[$i]['english_name']); ?><br><?php echo ($sSpecies_Small_mammal_data[$i]['bangla_name']); ?><br>
                                                        <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">species1</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 commonPart teethVal" id="sample_seized">
                                        <label class="inner-label" id="sampleseized">
                                            <?php echo trans("sampleseized", 'en'); ?>
                                            <br>
                                            <?php echo trans("sampleseized", 'bn'); ?>
                                        </label>
                                        <?php global $sSpecies_ray_data; ?>
                                        <div class="form-row">
                                            <?php
                                            for ($i = 0, $ilen = sizeof($sSpecies_ray_data); $i < $ilen; $i++) {
                                            ?>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="species_tusk_fld" class="teethInput fspecies" id="id" value="<?php echo ($sSpecies_ray_data[$i]['id']); ?>"><?php echo ($sSpecies_ray_data[$i]['english_name']); ?><br><?php echo ($sSpecies_ray_data[$i]['bangla_name']); ?><br>
                                                        <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_ray_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_ray_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">species1</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 commonPart seaShellsVal" id="sea_shells">
                                        <label class="inner-label" id="seashells">
                                            <?php echo trans("seashells", 'en'); ?>
                                            <br>
                                            <?php echo trans("seashells", 'bn'); ?>
                                        </label>
                                        <?php global $sSpecies_shell_data; ?>
                                        <div class="form-row">
                                            <?php
                                            for ($i = 0, $ilen = sizeof($sSpecies_shell_data); $i < $ilen; $i++) {
                                            ?>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select fspecies" id="id" value="<?php echo ($sSpecies_shell_data[$i]['id']); ?>"><?php echo ($sSpecies_shell_data[$i]['english_name']); ?><br><?php echo ($sSpecies_shell_data[$i]['bangla_name']); ?><br>
                                                        <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_shell_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_shell_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label" style="height:25px;">species5</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 miscellaneousVal commonPart" id="miscellaneoussize">
                                        <label class="inner-label" id="antlersize">
                                            <?php echo trans("antlersize", 'en'); ?>
                                            <br>
                                            <?php echo trans("antlersize", 'bn'); ?>
                                        </label>
                                        <?php global $sSpecies_SharkRay_data; ?>
                                        <div class="form-row">
                                            <?php
                                            for ($i = 0, $ilen = sizeof($sSpecies_SharkRay_data); $i < $ilen; $i++) {
                                            ?>
                                                <div class="form-group col-md-4">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop fspecies" id="id" value="<?php echo ($sSpecies_SharkRay_data[$i]['id']); ?>"><?php echo ($sSpecies_SharkRay_data[$i]['english_name']); ?><br><?php echo ($sSpecies_SharkRay_data[$i]['bangla_name']); ?><br>
                                                        <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_SharkRay_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_SharkRay_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">species1</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div id="whole">
                                        <div class="form-group col-md-12 commonWhole" id="wholeSelectDrop">
                                            <label class="inner-label" id="wholeSelectDrop">
                                                <!-- <?php echo trans("wholeselectDrop", 'en'); ?>
                                                <br>
                                                <?php echo trans("wholeselectDrop", 'bn'); ?> -->
                                            </label>
                                            <div class="form-group col-md-12" name="wholeSelect" id="wholeSelect">
                                                <label class="inner-label">What type of animal have you found?<br>আপনি কি ধরণের প্রাণী খুঁজে পেয়েছেন?</label>
                                                <div class="form-group">
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input value="mammals" type="radio" name="optradio" class="wholeSelect" required />
                                                            <p>Mammals<br> স্তন্যপায়ী প্রাণী</p>
                                                            <spna class="checkmark"></spna>
                                                            <a><img src="../dist/img/Tiger_icon.svg" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input value="birds" type="radio" name="optradio" class="wholeSelect" required />
                                                            <p>Birds <br> পাখি</p>
                                                            <spna class="checkmark"></spna>
                                                            <a><img src="../dist/img/Bird_icon.svg" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input value="fft" type="radio" name="optradio" class="wholeSelect" required />
                                                            <p>Turtles and tortoises <br> কচ্ছপ এবং কাছিম</p>
                                                            <spna class="checkmark"></spna>
                                                            <a><img src="../dist/img/Tortoise_icon.svg" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input value="amphibians" type="radio" name="optradio" class="wholeSelect" required />
                                                            <p>Snakes,Lizards & frog <br> সাপ, টিকটিকি এবং ব্যাঙ</p>
                                                            <spna class="checkmark"></spna>
                                                            <a><img src="../dist/img/Gecko_icon.svg" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input value="marine" type="radio" name="optradio" class="wholeSelect" required />
                                                            <p>Sharks and rays species of fish <br> হাঙ্গর ও শাপলাপাতা জাতের মাছ</p>
                                                            <spna class="checkmark"></spna>
                                                            <a><img src="../dist/img/Shark_icon.svg" style="height: 50px; width: 50px;"></a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--mammal start-->
                                        <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsSelect">
                                            <label class="inner-label" id="mammalselect">
                                                <?php echo trans("mammalselect", 'en'); ?>
                                                <br>
                                                <?php echo trans("mammalselect", 'bn'); ?>
                                            </label>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="mammalRadio" id="" class="mammalRadio" value="Large"><label id="li">
                                                                Large Mammal
                                                            </label>
                                                            <span class="checkmark"></span></label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="mammalRadio" id="" class="mammalRadio" value="Meat"><label id="car">
                                                                Small Mammal
                                                            </label>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsLive">
                                            <label class="inner-label" id="livenput">
                                                <?php echo trans("wlpaselectDiv", 'en'); ?>
                                                <br>
                                                <?php echo trans("wlpaselectDiv", 'bn'); ?>
                                            </label>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <?php global $sSpecies_Large_mammal_data; ?>
                                                    <div class="form-row">
                                                        <?php
                                                        for ($i = 0, $ilen = sizeof($sSpecies_Large_mammal_data); $i < $ilen; $i++) {
                                                        ?>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio fspecies" id="id" value="<?php echo ($sSpecies_Large_mammal_data[$i]['id']); ?>"><?php echo ($sSpecies_Large_mammal_data[$i]['english_name']); ?><br><?php echo ($sSpecies_Large_mammal_data[$i]['bangla_name']); ?><br>
                                                                    <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Large_mammal_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Large_mammal_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species4</p>
                                                                    <span class="checkmark"></span>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsMeat">
                                            <label class="inner-label" id="wlpaselectDiv">
                                                <?php echo trans("wlpaselectDiv", 'en'); ?><br>
                                                <?php echo trans("wlpaselectDiv", 'bn'); ?>
                                            </label>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <?php global $sSpecies_Small_mammal_data; ?>
                                                    <div class="form-row">
                                                        <?php
                                                        for ($i = 0, $ilen = sizeof($sSpecies_Small_mammal_data); $i < $ilen; $i++) {
                                                        ?>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio fspecies" id="id" value="<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>"><?php echo ($sSpecies_Small_mammal_data[$i]['english_name']); ?><br><?php echo ($sSpecies_Small_mammal_data[$i]['bangla_name']); ?><br>
                                                                    <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_Small_mammal_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">species4</p>
                                                                    <span class="checkmark"></span>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--bird start--->
                                        <div class="form-group col-md-12 commonWhole birdVal" id="wlpaSize">
                                            <label class="inner-label" id="wlpasize">
                                            Choose the group <br> গ্রুপ নির্বাচন করুন
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
                                                        <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Shorebird">Shorebird
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Forest_bird">Forest Bird
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Dove&Pegion">Dove & Pegion
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
                                            <?php global $sSpecies_duck_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_duck_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">

                                                        <label class="radioBtnHolder">

                                                            <input type="radio" name="wlpaDuckRadio" class="wlpaDuckRadio  fspecies" id="id" value="<?php echo ($sSpecies_duck_data[$i]['id']); ?>"><?php echo ($sSpecies_duck_data[$i]['english_name']); ?><br><?php echo ($sSpecies_duck_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_duck_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_duck_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- duck End-->
                                        <!-- parakeet start -->
                                        <div class="form-group col-md-12 commonWhole birdVal" id="Parakeetdiv">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_parakeet_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_parakeet_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="parakeetdivbtn" class="parakeetdivbtn  fspecies" id="id" value="<?php echo ($sSpecies_parakeet_data[$i]['id']); ?>"><?php echo ($sSpecies_parakeet_data[$i]['english_name']); ?><br><?php echo ($sSpecies_parakeet_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_parakeet_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_parakeet_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- parakeet end -->
                                        <!-- raptor start -->
                                        <div class="form-group col-md-12 commonWhole birdVal" id="Raptordiv">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_raptor_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_raptor_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">

                                                            <input type="radio" name="RaptordivRadio" class="RaptordivRadio fspecies" id="id" value="<?php echo ($sSpecies_raptor_data[$i]['id']); ?>"><?php echo ($sSpecies_raptor_data[$i]['english_name']); ?><br><?php echo ($sSpecies_raptor_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_raptor_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_raptor_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- raptor end -->
                                        <!-- Hornbill start-->

                                        <div class="form-group col-md-12 commonWhole birdVal" id="hornbilldiv">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_hornbill_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_hornbill_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="hornbilldivRadio" class="hornbilldivRadio fspecies" id="id" value="<?php echo ($sSpecies_hornbill_data[$i]['id']); ?>"><?php echo ($sSpecies_hornbill_data[$i]['english_name']); ?><br><?php echo ($sSpecies_hornbill_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_hornbill_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_hornbill_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <!-- Hornbill end-->
                                        <!-- waterbird start -->

                                        <div class="form-group col-md-12 commonWhole birdVal" id="waterbirdselect">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_waterbird_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_waterbird_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">

                                                            <input type="radio" name="waterbirdselectdiv" class="waterbirdselectdiv fspecies" id="id" value="<?php echo ($sSpecies_waterbird_data[$i]['id']); ?>"><?php echo ($sSpecies_waterbird_data[$i]['english_name']); ?><br><?php echo ($sSpecies_waterbird_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_waterbird_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_waterbird_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- waterbird end -->
                                        <!-- woodpecker start -->
                                        <div class="form-group col-md-12 commonWhole birdVal" id="woodpeckerholder">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_woodpecker_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_woodpecker_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="woodpeckerholderbtn" class="woodpeckerholderbtn fspecies" value="<?php echo ($sSpecies_woodpecker_data[$i]['id']); ?>"><?php echo ($sSpecies_woodpecker_data[$i]['english_name']); ?><br><?php echo ($sSpecies_woodpecker_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_woodpecker_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_woodpecker_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- woodpecker end -->
                                        <!-- owl start -->
                                        <div class="form-group col-md-12 commonWhole birdVal" id="owlholder">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_owl_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_owl_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">

                                                            <input type="radio" name="owlholderbtn" class="owlholderbtn fspecies" id="id" value="<?php echo ($sSpecies_owl_data[$i]['id']); ?>"><?php echo ($sSpecies_owl_data[$i]['english_name']); ?><br><?php echo ($sSpecies_owl_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_owl_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_owl_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- owl end -->
                                        <!-- fowl start -->
                                        <div class="form-group col-md-12 commonWhole birdVal" id="foundFowl">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_fowl_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_fowl_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">

                                                            <input type="radio" name="foundFowlbtn" class="foundFowlbtn fspecies" id="id" value="<?php echo ($sSpecies_fowl_data[$i]['id']); ?>"><?php echo ($sSpecies_fowl_data[$i]['english_name']); ?><br><?php echo ($sSpecies_fowl_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_fowl_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_fowl_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- fowl end -->
                                        <!-- kingfisher start -->
                                        <div class="form-group col-md-12 commonWhole birdVal" id="findKingfisher">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_kingfisher_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_kingfisher_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">

                                                            <input type="radio" name="findKingfisherRadio" class="findKingfisherRadio fspecies" id="id" value="<?php echo ($sSpecies_kingfisher_data[$i]['id']); ?>"><?php echo ($sSpecies_kingfisher_data[$i]['english_name']); ?><br><?php echo ($sSpecies_kingfisher_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_kingfisher_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_kingfisher_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- kingfisher end -->
                                        <!-- shorebird start -->
                                        <div class="form-group col-md-12 commonWhole birdVal" id="shorebirdslct">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_shorebird_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_shorebird_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">

                                                            <input type="radio" name="shorebirdslctbutton" class="shorebirdslctbutton fspecies" id="id" value="<?php echo ($sSpecies_shorebird_data[$i]['id']); ?>"><?php echo ($sSpecies_shorebird_data[$i]['english_name']); ?><br><?php echo ($sSpecies_shorebird_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_shorebird_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_shorebird_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- shorebird end -->
                                        <!-- forestbird start -->
                                        <div class="form-group col-md-12 commonWhole birdVal" id="forestbirdselect">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_forestbird_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_forestbird_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">

                                                            <input type="radio" name="forestbirdselecthold" class="forestbirdselecthold fspecies" id="id" value="<?php echo ($sSpecies_forestbird_data[$i]['id']); ?>"><?php echo ($sSpecies_forestbird_data[$i]['english_name']); ?><br><?php echo ($sSpecies_forestbird_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_forestbird_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_forestbird_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- forestbird end -->
                                        <!-- dove/pigeon start -->
                                        <div class="form-group col-md-12 commonWhole birdVal" id="dove_pigeon">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_dovePigeon_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_dovePigeon_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">

                                                            <input type="radio" name="dove_pigeonbtn" class="dove_pigeonbtn fspecies" id="id" value="<?php echo ($sSpecies_dovePigeon_data[$i]['id']); ?>"><?php echo ($sSpecies_dovePigeon_data[$i]['english_name']); ?><br><?php echo ($sSpecies_dovePigeon_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_dovePigeon_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_dovePigeon_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">species1</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- dove/pigeon end -->
                                    </div>
                                </div>
                                <!**********************************BIRDS END*************************************************************>
                                    <!******************************amphibians /lizard/frog START************************************************************************************************************>
                                        <div class="form-group col-md-12 commonWhole amphibianVal" id="amphibiansSelect">
                                            <label class="inner-label" id="antlersize">
                                                <?php echo trans("antlersize", 'en'); ?>
                                                <br>
                                                <?php echo trans("antlersize", 'bn'); ?>
                                            </label>
                                            <?php global $sSpecies_lizard_data; ?>
                                            <div class="form-row">
                                                <?php
                                                for ($i = 0, $ilen = sizeof($sSpecies_lizard_data); $i < $ilen; $i++) {
                                                ?>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="Amphibiansradio" class="form-control country fspecies" id="id" value="<?php echo ($sSpecies_lizard_data[$i]['id']); ?>"><?php echo ($sSpecies_lizard_data[$i]['english_name']); ?><br><?php echo ($sSpecies_lizard_data[$i]['bangla_name']); ?><br>
                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_lizard_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_lizard_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">3</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <div class="form-group col-md-12">
                                                    <?php global $sSpecies_snake_data; ?>
                                                    <div class="form-row">
                                                        <?php
                                                        for ($i = 0, $ilen = sizeof($sSpecies_snake_data); $i < $ilen; $i++) {
                                                        ?>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="Amphibiansradio" class="form-control country fspecies" id="id" value="<?php echo ($sSpecies_snake_data[$i]['id']); ?>"><?php echo ($sSpecies_snake_data[$i]['english_name']); ?><br><?php echo ($sSpecies_snake_data[$i]['bangla_name']); ?><br>
                                                                    <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_snake_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_snake_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">2</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <?php global $sSpecies_crocodile_data; ?>
                                                    <div class="form-group">
                                                        <?php
                                                        for ($i = 0, $ilen = sizeof($sSpecies_crocodile_data); $i < $ilen; $i++) {
                                                        ?>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="Amphibiansradio" class="form-control country fspecies" id="id" value="<?php echo ($sSpecies_crocodile_data[$i]['id']); ?>"><?php echo ($sSpecies_crocodile_data[$i]['english_name']); ?><br><?php echo ($sSpecies_crocodile_data[$i]['bangla_name']); ?><br>
                                                                    <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_crocodile_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_crocodile_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">1</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <?php global $sSpecies_f_data; ?>
                                                    <div class="form-group">
                                                        <?php
                                                        for ($i = 0, $ilen = sizeof($sSpecies_f_data); $i < $ilen; $i++) {
                                                        ?>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="Amphibiansradio" class="form-control country fspecies" id="id" value="<?php echo ($sSpecies_f_data[$i]['id']); ?>"><?php echo ($sSpecies_f_data[$i]['english_name']); ?><br><?php echo ($sSpecies_f_data[$i]['bangla_name']); ?><br>
                                                                    <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_f_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_f_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">4</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <?php global $sSpecies_toad_data; ?>
                                                    <div class="form-group">
                                                        <?php
                                                        for ($i = 0, $ilen = sizeof($sSpecies_toad_data); $i < $ilen; $i++) {
                                                        ?>
                                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="Amphibiansradio" class="form-control country fspecies" id="id" value="<?php echo ($sSpecies_toad_data[$i]['id']); ?>"><?php echo ($sSpecies_toad_data[$i]['english_name']); ?><br><?php echo ($sSpecies_toad_data[$i]['bangla_name']); ?><br>
                                                                    <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_toad_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_toad_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">5</p>
                                                                    <span class="checkmark"></span>

                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!******************************amphibians /lizar/frog end************************************************************************************************************>
                                            <!**********************************FTT START*************************************************************>

                                                <div class="form-group col-md-12 commonWhole fftVal" id="wlpaSelectDiv">
                                                    <label class="inner-label" id="wlpaselectDiv">
                                                        <?php echo trans("wlpaselectDiv", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("wlpaselectDiv", 'bn'); ?></label>
                                                    <?php global $sSpecies_tortoise_data; ?>
                                                    <div class="form-row">
                                                        <div class="col-md-12">
                                                            <div class="form-row">
                                                                <?php
                                                                for ($i = 0, $ilen = sizeof($sSpecies_tortoise_data); $i < $ilen; $i++) {
                                                                ?>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select fspecies" id="id" value="<?php echo ($sSpecies_tortoise_data[$i]['id']); ?>"><?php echo ($sSpecies_tortoise_data[$i]['english_name']); ?><br><?php echo ($sSpecies_tortoise_data[$i]['bangla_name']); ?><br>
                                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_tortoise_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_tortoise_data[$i]['id']); ?>.webp" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label" style="height:140px;"></p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                            <!-- -------- -->
                                                            <?php global $sSpecies_fresh_turtle_data; ?>
                                                            <div class="form-row">
                                                                <?php
                                                                for ($i = 0, $ilen = sizeof($sSpecies_fresh_turtle_data); $i < $ilen; $i++) {
                                                                ?>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select fspecies" id="id" value="<?php echo ($sSpecies_fresh_turtle_data[$i]['id']); ?>"><?php echo ($sSpecies_fresh_turtle_data[$i]['english_name']); ?><br><?php echo ($sSpecies_fresh_turtle_data[$i]['bangla_name']); ?><br>
                                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_fresh_turtle_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_fresh_turtle_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label" style="height:140px;"></p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                            <!-- -------- -->
                                                            <?php global $sSpecies_sea_turtle_data; ?>
                                                            <div class="form-row">
                                                                <?php
                                                                for ($i = 0, $ilen = sizeof($sSpecies_sea_turtle_data); $i < $ilen; $i++) {
                                                                ?>
                                                                    <div class="form-group col-md-4" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select fspecies" id="id" value="<?php echo ($sSpecies_sea_turtle_data[$i]['id']); ?>"><?php echo ($sSpecies_sea_turtle_data[$i]['english_name']); ?><br><?php echo ($sSpecies_sea_turtle_data[$i]['bangla_name']); ?><br>
                                                                            <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_sea_turtle_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_sea_turtle_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label" style="height:140px;"></p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!**********************************END FTT Whole*************************************************************>
                                                    <!------START--Marine----------->
                                                    <div class="form-group col-md-12 commonWhole marineval" id="marineDiv">
                                                        <label class="inner-label" id="marinediv">
                                                            <?php echo trans("marinediv", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("marinediv", 'bn'); ?>
                                                        </label>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <?php global $sSpecies_ray_data; ?>
                                                                <div class="form-row">
                                                                    <?php
                                                                    for ($i = 0, $ilen = sizeof($sSpecies_ray_data); $i < $ilen; $i++) {
                                                                    ?>
                                                                        <div class="form-group col-md-3">

                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect fspecies" id="id" value="<?php echo ($sSpecies_ray_data[$i]['id']); ?>"><?php echo ($sSpecies_ray_data[$i]['english_name']); ?><br><?php echo ($sSpecies_ray_data[$i]['bangla_name']); ?><br>
                                                                                <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_ray_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_ray_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">species4</p>
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <?php global $sSpecies_SharkRay_data; ?>
                                                                <div class="form-row">
                                                                    <?php
                                                                    for ($i = 0, $ilen = sizeof($sSpecies_SharkRay_data); $i < $ilen; $i++) {
                                                                    ?>
                                                                        <div class="form-group col-md-3">

                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect fspecies" id="id" value="<?php echo ($sSpecies_SharkRay_data[$i]['id']); ?>"><?php echo ($sSpecies_SharkRay_data[$i]['english_name']); ?><br><?php echo ($sSpecies_SharkRay_data[$i]['bangla_name']); ?><br>
                                                                                <a data-fancybox href="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_SharkRay_data[$i]['id']); ?>.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_SharkRay_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">species4</p>
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <?php global $sSpecies_fish_data; ?>
                                                                <div class="form-row">
                                                                    <?php
                                                                    for ($i = 0, $ilen = sizeof($sSpecies_fish_data); $i < $ilen; $i++) {
                                                                    ?>
                                                                        <div class="form-group col-md-3">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect fspecies" id="id" value="<?php echo ($sSpecies_fish_data[$i]['id']); ?>"><?php echo ($sSpecies_fish_data[$i]['english_name']); ?><br><?php echo ($sSpecies_fish_data[$i]['bangla_name']); ?><br>
                                                                                <a data-fancybox href="https://wcs.softlh.com/species-image/2.webp"><img src="https://wcs.softlh.com/species-image/<?php echo ($sSpecies_fish_data[$i]['id']); ?>.webp" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">species4</p>
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                            </div>
                            <!------END---Marines---------->
                            <a href="#modal3" class="listinBtn pull-left"><label id="pre">
                                    <?php echo trans("pre", 'en'); ?>
                                    <?php echo trans("pre", 'bn'); ?>
                                </label></a>

                            <a id="identify-species-next" class="listinBtn"><label id="next">
                                   <b><?php echo trans("next", 'en'); ?>
                                   <?php echo trans("next", 'bn'); ?></b>
                                </label>
                            </a>

                            <!---->
                    </div>
                </div>
                </form>

            </div>
        </div>
</div>
</div>
</section>

</div>
<div class="control-sidebar-bg"></div>
</div>
<!-- https://th.bing.com/th/id/R.5a301696bed7afa9929bc326a40861ce?rik=M2QM6xPVxiMFxA&pid=ImgRaw&r=0 -->