

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- container-fluid buat ngisi konten disini yaaa -->
     <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Unit</h1>
                        
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Unit</button>
                    </div>
                    <?php echo $this->session->userdata('username')?>
                    
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">halaman admin DataTables Example</h6>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">

                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Unit</th>
                            <th>Grup</th>
                            <th>Jenis Form</th>
                            <th>Alamat</th>
                            <th>Penaggung Jawab</th>
                            <th>Hapus</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>

                    </table>
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Unit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url(). 'admin/unit/tambah_aksi' ?>">
          <div class="form-group">
            <label>Nama Unit </label>
            <input type="text"  name="nama_unit" class="form-control" required>
          </div>
          <div class="form-group">
          <label>Grup Pengawas</label>
          <select class="form-select" aria-label="Default select example" name="id_grup_pengawas">
            <?php foreach ($gruppengawas as $galbum) :
              echo "<option value='".$galbum->id_grup_pengawas."'>".$galbum->nama_grup."</option>";
            
            endforeach ?>
          </select>      
          </div>

          
          <div class="form-group">
            <label>Form </label>
            <select class="form-select" aria-label="Default select example" name="id_form">
            <?php foreach ($form as $f) :
              echo "<option value='".$f->id_form."'>".$f->nama_form."</option>";
            
            endforeach ?>
          </select> 
          </div>
          <div class="form-group">
                    <label>Alamat Unit </label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Penanggung Jawab </label>
                    <input type="text"  name="nama_pj" class="form-control" required>
                </div>


          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
          
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<!-- modal hapus -->

    <div class="modal fade" id="modal-hapus"  role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">  
                    <h5 class="modal-title-hapus">Apakah Anda Yakin?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <a type="button" id="linkhapus" class="btn btn-primary" href="<?= base_url(); ?>admin/unit/hapus/">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- end modal hapus -->

<!-- Modal Edit -->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo validation_errors(); ?>
                <?php echo form_open_multipart('admin/unit/update'); ?>
                <form id="formData">
                    <div class="row">
                        <input type="text" id="id_unit" name="id_unit" value="">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Nama Unit </label>
                                <input type="text" id="nama_unit" name="nama_unit" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label>Grup Pengawas</label>
                              <select class="form-select" id="id_grup_pengawas" aria-label="Default select example" name="id_grup_pengawas" value="">
                                <?php foreach ($gruppengawas as $galbum) :
                                  echo "<option value='".$galbum->id_grup_pengawas."'>".$galbum->nama_grup."</option>";

                              endforeach ?>
                          </select>      
                      </div>
                      <div class="form-group">
                        <label>Form </label>
                        <select class="form-select" id="id_form" aria-label="Default select example" name="id_form">
                            <?php foreach ($form as $f) :
                              echo "<option value='".$f->id_form."'>".$f->nama_form."</option>";

                          endforeach ?>
                      </select> 
                  </div>
                  <div class="form-group">
                    <label>Alamat Unit </label>
                    <input type="text" id="alamat" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Penanggung Jawab </label>
                    <input type="text" id="nama_pj" name="nama_pj" class="form-control" required>
                </div>

                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary" id="btnSave">Submit</button>

                    <button type="reset" class="btn btn-danger">Clear</button>
                </div>
            </div>
        </div>
    </form>
    <?php echo form_close() ?>
</div>
</div>
</div>
</div>
<!-- End Modal edit-->


<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; UPT KEARSIPAN 2022</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div> 
<!-- End of Content Wrapper  -->



<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script> -->

<!-- <script>
    ini dari deva
    const dataTableSearch = new simpleDatatables.DataTable("#example", {
      searchable: true,
      fixedHeight: true
    });
</script> -->



<script>

function hapusrow(id){
    //alert(id);
    $("#modal-hapus").modal();
    document.getElementById('linkhapus').href= "<?php echo base_url('admin/unit/hapus/'); ?>"+id;
}

function editrow(id){
    //alert(id);
    $("#modal-edit").modal();
    var elem=document.getElementById(id).parentNode.parentNode;
    document.getElementById('id_unit').value=id;
    document.getElementById('nama_unit').value = elem.childNodes[1].innerHTML;
    document.getElementById('alamat').value = elem.childNodes[4].innerHTML;
    document.getElementById('nama_pj').value = elem.childNodes[5].innerHTML;
      
    //document.getElementById('id_grup_pengawas').value = document.getElementById(id).parentNode.parentNode.childNodes[2].innerHTML;
    //document.getElementById('id_form').value = document.getElementById(id).parentNode.parentNode.childNodes[3].innerHTML;
    var list_gp=document.getElementById('id_grup_pengawas');
    var opt_gp=list_gp.getElementsByTagName('option');
    for(var i=0; i < opt_gp.length; i++){
        console.log(opt_gp[i].text);
        if(opt_gp[i].text == elem.childNodes[2].innerHTML) {
          opt_gp[i].selected=true;
          break;
        }
      }

    var list_f = document.getElementById('id_form'); 
    var opt_f = list_f.getElementsByTagName('option'); 
    for(var i=0; i < opt_f.length; i++){
        console.log(opt_gp[i].text);
        if(opt_f[i].text == elem.childNodes[3].innerHTML) {
          opt_f[i].selected=true;
          break;
        }
      }

   
    //document.getElementById('file_url').value = document.getElementById(id).parentNode.parentNode.childNodes[9].innerHTML;
    //document.getElementById('linkedit').href= document.getElementById('linkedit').href+id;

}



    
var table;

$(document).ready(function() {

    //datatables
    table = $('table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('admin/unit/ajax_list')?>",
            "rowId": 'id_unit',
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": true, //set not orderable
        },
        ],

    });

});







</script>



