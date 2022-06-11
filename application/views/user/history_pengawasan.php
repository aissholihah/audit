<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">History Pengawasan Unit</h1>                  

  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">      
      <h6 class="m-0 font-weight-bold text-primary">Table Pengawasan <?php echo $title; ?></h6>
      
    </div>
    <div class="card-body">
      <div class="table-responsive">
  <table  class=" table table-striped table-bordered" style="width:100%">
    <tr bgcolor="#FFFFFF">
      <td align="center">No</td>
      <td align="center">Nama Unit</td>
      <td align="center">Tanggal Audit </td>
      <td align="center">Pengawas </td>
      <td align="center">Form  </td>
      <td align="center">Nilai  </td>
      <td align="center">Download  </td>


    </tr>
    <?php
    $no=1;
    foreach($history as $hs) :?>

      <tr>
       <td align="right"><?php echo $no++ ?></td>
       <td><?php echo $hs->nama_unit ?></td>
       <td><?php echo $hs->tanggal_audit ?></td>
       <td><?php echo $hs->nama_pengawas ?></td>
       <td><?php echo $hs->nama_form ?></td>
       <td>
         <?php if ($hs->id_form == "1"){ ?>
          <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="<?php echo base_url(). 'user/pengawasan/hitung_skor/'.$hs->id_pengawasan ?>" role="button">Lihat Nilai </a>
          <?php }else{ ?>
              <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="<?php echo base_url(). 'user/pengawasan/skor_up/'.$hs->id_pengawasan ?>" role="button">Lihat Nilai </a>
              <?php }?>

       </td>
    <?php endforeach ?>
    <td><a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="<?php echo base_url(). 'user/pengawasan/excel/'.$hs->id_pengawasan ?>" role="button">Excel </a></td>
 </tr>
</table>
</div>
</div>
</div>
</div> <!-- end container fluid -->