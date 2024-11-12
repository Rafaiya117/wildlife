<style>
.card {
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    box-sizing: border-box;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-right: 10px;
    background-color: #FFF;
}

.card:hover {
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header content-header_2" id="dash_head" style="text-align: center; font-size: 30px;">
        <h2 style="font-size: 30px;">
            <b class="btn-warning btn-lg banner-btn">মাংস, পুংজননাঙ্গ ও পাখির ঠোঁট</b>
        </h2>
        <br>
    </section>
    <!-- Main content -->
    <section class="container">
        <div class="row">
            <div class="col-md-12 mt-4">

                <div class="col-md-4" style="text-align:center">
                    <div class="card">
                        <div class="image" onclick="location.href='#meat'">
                            <img src="../dist/bodyparts1/47.png" height="100" />
                        </div>
                        <div class="card-inner">
                            <div class="header">
                                <h2><a href="#meat">Meat<br>মাংস</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-4" style="text-align:center">
                    <div class="card">
                        <div class="image" onclick="location.href='#penis'">
                            <img src="../dist/bodyparts1/48.png" height="100" />
                        </div>
                        <div class="card-inner">
                            <div class="header">
                                <h2><a href="#penis">Penis<br>পুংজননাঙ্গ</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-md-4" style="text-align:center">
                    <div class="card">
                        <div class="image" onclick="location.href='#bird_beak'">
                            <img src="../dist/bodyparts1/52.png" height="100" />
                        </div>
                        <div class="card-inner">
                            <div class="header">
                                <h2><a href="#bird_beak">Bill & Casque<br>পাখির  ঠোঁট</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>




        <a class="listinBtn pull-left" onclick="window.history.go(-1); return false;"
            style="cursor: pointer;"><?php echo trans("back", 'en'); ?>
            <?php echo trans("back", 'bn'); ?></a>


    </section>

    <!-- /.content -->
</div>