



<table  class="table table-striped table-bordered" style="width:100%">

<tr bgcolor="#FFFFFF">
<td align="center">No</td>
<td align="center">Aspek</td>
<td align="center">Nilai Standar</td> 
<!-- <td align="center">Parent ID</td> -->
<td align="center">Jumlah Skor</td>
 <td align="center">Nilai</td>
<td align="center">Bobot</td> 
<td align="center">Nilai Akhir</td>
</tr>

<?php
$no1=1;
$totalan=0;
$NAKHIR=0;
foreach($aspek as $as): ?>
  <?php 
  // ngitung nilai standar
  // $ns0= $subaspek[0]['nilai_standar'];
  // $ns1= $subaspek[1]['nilai_standar'];
  // $ns2= $subaspek[2]['nilai_standar'];
  // $ns3= $subaspek[3]['nilai_standar'];
  // $sum_ns42= $ns0+$ns1+$ns2+$ns3;

  // $ns4= $subaspek[4]['nilai_standar'];
  // $ns5= $subaspek[5]['nilai_standar'];
  // $sum_ns43= $ns4+$ns5;

  // //ngitung jumlah skor
  // $js0= $subaspek[0]['total'];
  // $js1= $subaspek[1]['total'];
  // $js2= $subaspek[2]['total'];
  // $js3= $subaspek[3]['total'];
  // $sum_js42= $js0+$js1+$js2+$js3;

  // $js4= $subaspek[4]['total'];
  // $js5= $subaspek[5]['total'];
  // $sum_js43= $js4+$js5;

  //nilai
  // $nilai42= ceil($sum_ns42/$sum_js42*100);
  // $nilai43= ceil($sum_ns43/$sum_js43*100);
  $nstandar=0;
  $jumlah_skor=0;
  

  foreach($subaspek as $sum) :
    if ($sum['parent_id'] ==$as->id_aspek):
      $nstandar=$nstandar+$sum['nilai_standar'];
      $jumlah_skor = $jumlah_skor+$sum['total'];
      $nilai = ceil($jumlah_skor/$nstandar*100);
      $NA = $nilai*$sum['bobot']/100;
    endif;
  endforeach;
      $NAKHIR=$NAKHIR+$NA;
  ?>
  <tr class="table-info tab">
    <td align="center"><?php echo $no1; ?></td>
    <td><?php echo $as->nama_aspek; ?></td>
    <!-- nilai standar -->
    <td><?php echo $nstandar;?></td>
      <!-- jumlah skor -->
      <td><?php echo $jumlah_skor;?></td>
      

      <!-- nilai  -->
    <td><?php echo $nilai;?></td>
    <td><?php echo $sum['bobot'] ?></td>
    <!-- NILAI AKHIR -->
    <td><?php 
        echo $NA;
      ?>      
      </td>
    <?php
      $no=1;
      foreach($subaspek as $dfn) :?>
        <?php if ($dfn['parent_id'] ==$as->id_aspek): 
          $nilai=ceil($dfn['total']/$dfn['nilai_standar']*100);
          $akhir=$nilai*$dfn['bobot']/100;
          $totalan=$totalan+$akhir;
          ?>                
          <tr>
           <td align="right"><?php echo $no1.".".$no++ ?></td>
           <td><?php echo $dfn['nama_aspek'] ?></td>
           <td><?php echo $dfn['nilai_standar']?></td>
           <td><?php echo $dfn['total']; ?></td> 
           <td><?php echo $nilai; ?></td>
           <td><?php echo $dfn['bobot']?></td>
           <td><?php echo $akhir; ?></td> 

        </tr>      
         
       <?php endif ?>
<?php endforeach ?>
  </tr>

<?php $no1++; endforeach ?>
<tr class="table-info">
  <td scope=row>TOTAL</td>

  <td colspan="4" align="right"></td>
  <td colspan="2" align="center"><?php echo $NAKHIR; ?></td>
</tr>




<!-- <tr bgcolor="#FFFFFF">
<td>Total</td>
</tr> -->

</table>
