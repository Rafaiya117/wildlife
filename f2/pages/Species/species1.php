<style>
  .card {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  box-sizing: border-box;
  margin-top:10px;
  margin-bottom:10px;
  margin-left:20px;
  margin-right:10px;
  background-color:#FFF;
}

.card:hover {
  box-shadow: 0 5px 5px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" id="dash_head" style="text-align: center; font-size: 30px;">
    <h2 style="font-size: 30px;">
      <b>Species<br>প্রজাতি পরিচিতি</b>
    </h2>
  </section>
  <!-- Main content -->
  <section class="container">

    <div class="row">
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#mammal'">
          <img src="../dist/species/Tiger.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 25px;" class="card-inner"><a href="#mammal">Mammals <br>স্তন্যপায়ী </a></h2>
      </div>
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#aves'">
          <img src="../dist/species/birds.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 30px;"><a href="#aves">Birds <br>পাখি</a></h2>
      </div>
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#reptiles'">
          <img src="../dist/species/snak.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 25px;"><a href="#reptiles">Reptiles<br> সরীসৃপ</a></h2>
      </div>
      
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#amphibia'">
          <img src="../dist/species/Amphibia.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 25px;"><a href="#amphibia">Amphibia <br> উভচর</a></h2>
      </div>
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#fishes'">
          <img src="../dist/species/Fish.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 25px;"><a href="#fishes">Fishes<br> মৎস (হাঙ্গর ও শাপলাপাতা) </a></h2>
      </div>
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#crustacea'">
          <img src="../dist/species/Crustacea.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 25px;"><a href="#crustacea">Crustacea (Crabs & Lobster)<br> কাঁকড়া এবং লবস্টার</a></h2>
      </div>
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#beetles'">
          <img src="../dist/species/beetles.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 25px;"><a href="#beetles">Insects (Beetles)<br> পোকামাকড় (বিটলস)</a></h2>
      </div>
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#butterfly'">
          <img src="../dist/species/Insects.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 25px;"><a href="#butterfly">Insects (Butterflies and Moths) <br>পোকামাকড় (প্রজাপতি এবং মথ)</a></h2>
      </div>
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#shell'">
          <img src="../dist/species/Mollusc.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 25px;"><a href="#shell">Molluscs <br>শামুক ও ঝিনুক </a></h2>
      </div>
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#coral_sp'">
          <img src="../dist/species/Coral.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 25px;"><a href="#coral_sp">Corals<br> প্রবাল</a></h2>
      </div>
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#sb_plants'">
          <img src="../dist/species/Protected plants.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 25px;"><a href="#sb_plants">Protected Plants <br>রক্ষিত উদ্ভিদ</a></h2>
      </div>
      <div class="col-md-3 card" style="text-align:center;" onclick="location.href='#orch'">
          <img src="../dist/species/Orchid.svg" height="100" width="100">
          <br>
          <h2 style="font-size: 25px;"><a href="#orch">Orchids <br>অর্কিড</a></h2>
      </div>
</div>

  
   <a class="listinBtn" onclick="window.history.go(-1); return false;" style="cursor: pointer;">  <?php echo trans("back", 'en'); ?>
   <?php echo trans("back", 'bn'); ?></a>
  

  </section>

  <!-- /.content -->
</div>