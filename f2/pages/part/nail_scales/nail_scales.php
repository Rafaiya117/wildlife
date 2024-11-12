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
            <b class="btn-warning btn-lg banner-btn">আঁইশ,নখ ও শিং</b>
        </h2>
        <br>
    </section>
    <!-- Main content -->
    <section class="container">
        <div class="row">
            <div class="col-md-12 mt-4">

                <div class="col-md-6" style="text-align:center">
                    <div class="card">
                        <div class="image" onclick="location.href='#scales'">
                            <img src="../dist/bodyparts1/24.png" height="100" />
                        </div>
                        <div class="card-inner">
                            <div class="header">
                                <h2><a href="#scales">Scales<br>আঁইশ</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-md-6" style="text-align:center">
                    <div class="card">
                        <div class="image" onclick="location.href='#teeth_nail'">
                            <img src="../dist/bodyparts1/30.png" height="100" />
                        </div>
                        <div class="card-inner">
                            <div class="header">
                                <h2><a href="#teeth_nail">Canine & Claw<br>দাঁত ও নখর</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-md-6" style="text-align:center">
                    <div class="card">
                        <div class="image" onclick="location.href='#ivory'">
                            <img src="../dist/bodyparts1/57.png" height="100" />
                        </div>
                        <div class="card-inner">
                            <div class="header">
                                <h2><a href="#ivory">Ivory<br>হাতির দাঁত</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-md-6" style="text-align:center">
                    <div class="card">
                        <div class="image" onclick="location.href='#horn'">
                            <img src="../dist/bodyparts1/68.png" height="100" />
                        </div>
                        <div class="card-inner">
                            <div class="header">
                                <h2><a href="#horn">Horns & Antlers<br>শিং</a></h2>

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