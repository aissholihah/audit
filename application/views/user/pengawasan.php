

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- container-fluid buat ngisi konten disini yaaa -->
     <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Pengawasan</h1>
                        
                        <!-- <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Penilaian</button> -->
                        <div class="dropdown">
                            <button type="button" class="btn btn-sm btn-danger dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Action
                            <i class="fa fa-download"></i></button>
                            <span class="caret"></span>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li class="dropdown-item"><a  href="<?php echo base_url(). 'user/pengawasan/excel' ?>" > Excel</a></li>
                                <li class="dropdown-item"><a  href="<?php echo base_url(). 'user/pengawasan/pdf' ?>" > pdf</a></li>
                            </ul>
                        </div>
                        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="<?php echo base_url(). 'user/pengawasan/tambah_aksi' ?>" role="button"><i class="fa fa-plus"></i>Tambah Penilaian </a>                      

                    </div>

                    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Penilaian</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengawas</th>
                            <th>Unit</th>
                            <th>Tanggal Audit</th>
                            <th>Nama Grup</th>
                            <th>Download</th>
                            <th>History Unit</th>
                            
                            
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
        <h4 class="modal-title" id="exampleModalLabel">Tambah Admin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url(). 'user/pengawasan/tambah_aksi' ?>">
          
          
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
                    <h5 class="modal-title">Apakah Anda Yakin?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <a type="button" id="linkhapus" class="btn btn-primary" href="<?= base_url(); ?>user/penilaian/hapus/">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- end modal hapus -->




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
    document.getElementById('linkhapus').href= "<?php echo base_url('user/penilaian/hapus/'); ?>"+id;
}

function editrow(id){
    //alert(id);
    $("#modal-edit").modal();
    
    document.getElementById('id_pengawas').value=id;
    document.getElementById('nama_pengawas').value = document.getElementById(id).parentNode.parentNode.childNodes[1].innerHTML;
    document.getElementById('jabatan_pengawas').value = document.getElementById(id).parentNode.parentNode.childNodes[2].innerHTML;
    
    
   
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
            "url": "<?php echo base_url('user/pengawasan/ajax_list')?>",
            "rowId": 'id_pengawasan',
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



