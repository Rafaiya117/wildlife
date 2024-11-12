<div class="content-wrapper" style="min-height: 901px;">
  <div class="card-body">
    <section class="container">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="innerPage-box">
              <div>
                <a href="#input-sample-collection" class="listinBtn pull-left"> <label id="pre">
                  <?php echo trans("pre", 'en'); ?>
                  <?php echo trans("pre", 'bn'); ?>
                </label></a>
                <a class="listinBtn disposal_next" id="disposal_next">
                  <b><?php echo trans("next", 'en'); ?>
                      <?php echo trans("next", 'bn'); ?></b>
                </a>
                <a id="" class="listinBtn disposal_skip"><b>Skip এড়িয়ে যান</b></a>
              </div>
              <div class="topnav">
                       <a class="navbar" href="#input-disposal-information">12/13</a>
              </div>
              <h3 class="innerPage-head" id="dis-info">
                Wildlife/Plant Speciments Disposal Information
                <br>
                বন্যপ্রাণী/উদ্ভিদ এর নমুনা নিষ্পত্তিকরণের তথ্য  
              </h3>
              <?php

              echo '<table id="tbl_disposal_list" class="table table-bordered inner-textfield" style="text-align:center">';
              echo '<thead><tr>';
              echo '<td>ক্রমিক নং  #</td>';
              echo '<td>নিষ্পত্তিকরণ প্রক্রিয়া</td>';
              echo '<td>প্রজাতি/ট্রফি পণ্যসমূহের নাম</td>';
              echo '<td>নিষ্পত্তিকরণের স্থান</td>';
              echo '<td>নিষ্পত্তিকরণের তারিখ</td>';
              echo '<td>নিষ্পত্তিকারী কর্মকর্তার নাম</td>';

              echo '<tbody ><tr>';
              echo '<td>sl</td>';
              echo '<td>mode</td>';
              echo '<td>species</td>';
              echo '<td>place</td>';
              echo '<td>date</td>';
              echo '<td>incharge</td>';
              echo '</tr>';
              echo '</tbody></table>';
              ?>
              <br>
             <div class="card">
              <div class="card-body">
                  <table class="table table-bordered inner-textfield"> 
                    <tr>
                      <tr>
                          <th><?php echo trans("sl", 'en'); ?>
                            <br>
                            <?php echo trans("sl", 'bn'); ?>
                            <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                          </th>
                          <td><input type="text" class="form-control inner-textfield" id="sl" name="sl" value=""  data-key="disposal.sl"/></td>
                      </tr>
                      <tr>
                          <th>Disposal orderer's name 
                            <br>
                            নিষ্পত্তি হুকুম দাতার নাম
                            <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                          </th>
                          <td><input type="text" class="form-control inner-textfield" id="orderers_name" name="orderers_name" value=""  data-key="disposal.orderers_name"/></td>
                      </tr>
                      <tr>
                          <th>Disposal orderer's designation & workstation 
                            <br>
                            নিষ্পত্তি হুকুম দাতার পদবি ও কর্মস্থল
                            <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                          </th>
                          <td><input type="text" class="form-control inner-textfield" id="orderers_designation" name="orderers_designation" value=""  data-key="disposal.orderers_designation"/></td>
                      </tr>
                      <tr>
                        <th><?php echo trans("mode", 'en'); ?>
                            <br>
                            <?php echo trans("mode", 'bn'); ?>
                            <span></span></th>
                          <td><select  id="mode" class="form-control inner-textfield  ui-autocomplete-input" name="mode" value="" autocomplete="off"  data-key="disposal.mode"></select></td>
                      </tr>
                      <tr>
                        <th>Species<br>প্রজাতি</th>
                          <td><select  id="name" class="form-control inner-textfield  ui-autocomplete-input" name="name" value="" autocomplete="off"  data-key="disposal.name"></select></td>
                      </tr>
                      <tr>
                        <th>Item type<br>আইটেমের ধরণ<span></span></th>
                          <td><input type="text" class="form-control inner-textfield" id=""  name="" value=""  data-key="disposal.body_part" style="text-transform:capitalize;"/></td>
                      </tr>
                      <tr>
                        <th>Place of disposal<br><?php echo trans("pl-dis", 'bn'); ?><span></span></th>
                          <td><input type="text" class="form-control inner-textfield" id="place"  name="place" value=""  data-key="disposal.place" style="text-transform:capitalize;"/></td>
                      </tr>
                      <tr>
                        <th>Date of disposal
                          <br><?php echo trans("disposal-date", 'bn'); ?></th>
                            <td> <input type="date" class="form-control inner-textfield" id="date"  name="date" value=""  data-key="disposal.date"/></td>
                      </tr>
                      <tr>
                        <th>Disposing officer's name<br><?php echo trans("incharge", 'bn'); ?></th>
                          <td> <input type="text" class="form-control inner-textfield" id="incharge"  name="incharge" value=""  data-key="disposal.incharge" style="text-transform:capitalize;"/></td>
                      </tr>
                      <tr>
                        <th>Disposing officer's designation<br>নিষ্পত্তিকারী কর্মকর্তার পদবি</th>
                          <td> <input type="text" class="form-control inner-textfield" id="incharge_designation"  name="incharge_designation" value=""  data-key="disposal.incharge_designation" style="text-transform:capitalize;"/></td>
                      </tr>
                      <tr>
                        <th>Disposing officer's workstation<br>নিষ্পত্তিকারী কর্মকর্তার কর্মস্থল</th>
                          <td> <input type="text" class="form-control inner-textfield" id="incharge_workstation"  name="incharge_workstation" value=""  data-key="disposal.incharge_workstation" style="text-transform:capitalize;"/></td>
                      </tr>
                    </tr>
                  </form> 
                </table>
              <div>
                <a id="idi_addmore" class="listinBtn"><label id="addm">
                  <?php echo trans("addm", 'en'); ?>
                    <?php echo trans("addm", 'bn'); ?></label>
                </a>
              </div>
            </div>
            <div>
                <a href="#input-sample-collection" class="listinBtn pull-left"> <label id="pre">
                  <?php echo trans("pre", 'en'); ?>
                  <?php echo trans("pre", 'bn'); ?>
                </label></a>
                <a class="listinBtn disposal_next" id="disposal_next">
                  <b><?php echo trans("next", 'en'); ?>
                      <?php echo trans("next", 'bn'); ?></b>
                </a>
                <a id="" class="listinBtn disposal_skip"><b>Skip এড়িয়ে যান</b></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="control-sidebar-bg"></div>