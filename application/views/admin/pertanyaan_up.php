<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- container-fluid buat ngisi konten disini yaaa -->
     <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pertanyaan</h1>


            </div>
            <a href="javascript:;" onclick="tambah()" class="d-none d-sm-inline-block btn  btn-primary shadow-sm">Tambah Data</a>
          </div>
            
            <nav aria-label="breadcrumb">
              <ol id="bread" class="breadcrumb"></ol>
            </nav>
            
            <table id="tabel-siswa" class="display" style="width:100%">
              <thead>
                <tr>
                  <!-- <a href="javascript:;" onclick="tambah()" class="btn btn-primary mb-3" > --><th>No</th>
                  <th >ID</th>
                  <th >Kode Pertanyaan </th>
                  <th >Pertanyaan</th>
                  <th >status jawaban</th>
                  <th >Cell  ya </th>
                  <th >Cell tidak </th>
                  <th >Form </th>
                  <th >Aspek </th>
                  <th >Name</th>
                  
                  <th >Edit</th>
                  <th >Hapus</th>
                </tr>
              <!-- </a> -->
              </thead>
            </table>
          </div>
        </div>

        <!-- MODAL -->
        <div class="modal" id="modal-siswa" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="form-siswa" method="POST">
                  <div class="form-group">
                    <label for="kode_pertanyaan">Kode Pertanyaan</label>
                    <input type="hidden" id="id_pertanyaan" name="id_pertanyaan" >
                    <input type="text" class="form-control" id="kode_pertanyaan" name="kode_pertanyaan" required>
                  </div>
                  <input type="hidden" id="id_form" name="id_form" value="2" >
                  <!-- <div class="form-group">
                    <label for="id_form">Form</label>

                    <select class="form-select" aria-label="Default select example" id="id_form" name="id_form" required>
                      <option selected disabled>Pilih Form</option>
                      <?php foreach ($grupform as $gf) :
                        echo "<option value='".$gf->id_form."'> ".$gf->nama_form." </option>";

                      endforeach ?>
                    </select>
                  </div> -->

                  <div class="form-group">
                    <label for="id_aspek">Sub Aspek</label>
                    <select class="form-select" aria-label="Default select example" id="id_aspek" name="id_aspek" required>

                      <?php foreach ($grupaspek as $gf) :
                        echo "<option value='".$gf->id_aspek."'> ".$gf->nama_aspek." </option>";

                      endforeach ?>

                    </select>
                  </div>

                   <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>             
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" required>
                  </div>
                  <div class="form-group">
                    <label for="celly">Cell Ya</label>             
                    <input type="text" class="form-control" id="cell_y" name="cell_y" required>
                  </div>
                  <div class="form-group">
                    <label for="cellt">Cell Tidak</label>             
                    <input type="text" class="form-control" id="cell_t" name="cell_t" required>
                  </div>
                  <div class="form-group">
                    <!-- <label for="tahun">ID Parent</label>              -->
                    <input type="hidden" class="form-control" id="id_parent" name="ID_parent" required>
                  </div>

                  <div class="form-group">
                    <input type="radio" id="sub" name="sub" value="1" checked>
                    <label for="sub">sub</label>
                    <input type="radio" id="bukan_sub" name="sub" value="0">
                    <label for="bukan_sub"> bukan sub</label><br>
                  </div>

                  <div class="form-group">
                    <input type="radio" id="perlu_jawaban" name="jawaban" value="prlu_jwb" checked>
                    <label for="perlu_jawaban">perlu jawaban</label>
                    <input type="radio" id="tidak_perlu_jawaban" name="jawaban" value="tidak_prlu_jwb">
                    <label for="tidak_perlu_jawaban"> tidak perlu jawaban</label><br>
                  </div>

                  <div class="form-group row">
                    <div>
                    <input type="radio" id="jwb_checkbox" name="jenis_jawaban" value="1" checked>
                    <label for="jwb_checkbox">jawaban chekbox</label></div>
                   <div><input type="radio" id="jwb_int" name="jenis_jawaban" value="0">
                    <label for="jwb_int">jawaban int</label><br></div>
                    <div><input type="radio" id="jwb_kosong" name="jenis_jawaban" value="2">
                    <label for="jwb_kosong">jawaban kosong</label><br></div>
                  </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn-proses" onclick="proses()">Save changes</button>
              </div>
            </div>
          </div>
        </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> INI TAK COMMENTS DARI LINE 122-->
  <!-- My Script -->
  <!-- <script>
    document.addEventListener("DOMContentLoaded", () =>{
      const rows = document.querySelectorAll ("tr[data-href]");
      
      rows.forEach(row => {
        row.addEventListener("click", () => {
          window.location.href = row.dataset.href;
        });
      });

    });
  </script> -->
  <!-- <script>
    $('input:radio[name=folder][value='+response.goldarah+']')[0].checked = true;
  </script> -->
  <script>
    let status; // Menampung status "tambah, edit dan hapus"
    let url; // Menampung url untuk save dan update
    let form_siswa = 'form-siswa';

    $(document).ready(function() {
      tampil_siswa();
      perubahan_form();
    });

    function perubahan_form() {
      // body...
      $('#id_form').change(function(){
        var form = $(this).val();

        $.ajax({
          url:'<?= base_url('admin/pertanyaan_up/getFormAspek'); ?>',
          method: 'post',
          data: {
            id_form: form
          },
          dataType: 'json',
          success: function(response) {
            // console.log(response);
            $('#id_aspek').find('option').remove();
            //$('#id_aspek').append('<option selected disabled">Pilih Aspek</option>');
            $.each(response, function(index, aspek){
              $('#id_aspek').append('<option value="'+aspek['id_aspek']+'">'+aspek['nama_aspek']+'</option>');
            })
          }
        })
      })
    }

    // Fungsi untuk menampilkan data siswa
    function tampil_siswa(parent=0,nama="Home",back="false") {
      $('#tabel-siswa').DataTable({
        processing: true,
        serverSide: true,
        bDestroy: true,
        responsive: true,
        ajax: {
          url: "<?= base_url('admin/pertanyaan_up/get_siswa'); ?>",
          type: "POST",
          data: {'parentid':parent},
          // oh  ini ngirim data yang 
          // tampil_siswa ini kenapa ngga GET, karena kita mau ngirim data dengan name parentid dengan valuenya parent. 
        },
        columnDefs: [{
            targets: [0, -1, -2],
            orderable: false,
          },
          {
            width: "1%",
            targets: [0, -1, -2],//kolomnya
          },
        ],
      });
      document.getElementById('id_parent').value=parent; // biar inputan yang id nya = 'id_parent' bernilai=isi'parent'. isi dari 'parent' adalah id_pertanyaan(liat di model).
      // berarti itu buat nampilin data yang setiap id_pertanyaan dengan nilai parent_id nya sama. 
      //ngatur breadcrum, kalo ngga nge klik <button>kembali</button>, yang tampil dibawah. 
      if(back=="false"){
      var li = document.createElement("LI"); //bikin elemen li di breadcrumb
      li.classList.add("breadcrumb-item"); // pas klik <button>buka</button>, bakal auto nambah path nya
      //var a = document.createElement("a");
      //a.href="javascript:tampil_siswa("+parent+")";
      var textnode = document.createTextNode(nama); 
      //a.appendChild(textnode);
      li.appendChild(textnode);
      document.getElementById("bread").appendChild(li);
      }else if(back=="proses"){
          //tidak ngapa ngapain
      }else{
        var select = document.getElementById("bread");
        select.removeChild(select.lastChild);
      }
    }

    // Check berdasarkan status yang aktif dan set button dan url
    function check_status() {
      switch (status) {
        case 'tambah':
          $('#btn-proses').text('Save Changes');

          url = "<?= base_url('index.php/admin/pertanyaan_up/save_siswa'); ?>";
          break;
        case 'edit':
          $('#btn-proses').text('Update Changes');
          url = "<?= base_url('index.php/admin/pertanyaan_up/update_siswa'); ?>";
          break;
        case 'hapus':
          url = "<?= base_url('index.php/admin/pertanyaan_up/delete_siswa'); ?>";
          break;
        case 'notif' :
        $('#btn-proses').text('Save Changes');
          url = "<?= base_url('index.php/admin/pertanyaan_up/save_siswa'); ?>";
          break;
      }
    }
    // Clear form
    function clear_form() {
      $('#' + form_siswa)[0].reset();
    }
    // Fungsi untuk menampilkan modal tambah data
    function tambah(id=0) {

      status = 'tambah';
      
      $('#modal-siswa').modal('show')
        .find('.modal-title').text('Tambah Data');
        clear_form();
    }

    function getaspek(id_form, id_aspek) {
      // body...
        $.ajax({
          url:'<?= base_url('admin/pertanyaan_up/getFormAspek'); ?>',
          method: 'post',
          data: {
            id_form: id_form
          },
          dataType: 'json',
          success: function(response) {
            
            //$('#id_aspek').find('option').not(':first').remove();
            $('#id_aspek').find('option').remove();


            $.each(response, function(index, aspek){
              // console.log(aspek['id_aspek']);
              if (aspek['id_aspek'] == id_aspek) {
                selek = "selected"
              }else{
                selek = ""
              }
              $('#id_aspek').append('<option value="'+aspek['id_aspek']+'" '+selek+'>'+aspek['nama_aspek']+'</option>');
            })
          }
        })
    }

    // Fungsi untuk menampilkan modal edit data
    function edit(id_pertanyaan) {
      status = 'edit';
      $('#modal-siswa').modal('show')
        .find('.modal-title').text('Edit Data');
      clear_form();
      $.ajax({
        url: "<?= base_url('index.php/admin/pertanyaan_up/edit_siswa'); ?>",
        type: "GET",
        dataType: "JSON",
        data: {
          id_pertanyaan: id_pertanyaan
        },
        success: function(x) {
          if (x.status == true) {
            // $('#id inputan').val(x.data.nama field table);
            $('#id_pertanyaan').val(x.data.id_pertanyaan);
            $('#kode_pertanyaan').val(x.data.kode_pertanyaan);
            $('#id_form').val(x.data.id_form);
            $('#id_aspek').val(x.data.id_aspek);
            $('#pertanyaan').val(x.data.pertanyaan);
            $('#cell_y').val(x.data.cell_y);
            $('#cell_t').val(x.data.cell_t);
            // getaspek(x.data.id_form, x.data.id_aspek);
            if(x.data.sub=='1'){
              // kalau foldernya nilainya 1(1=folder. liaten value di inputan folder ) maka yg dicentang.
              // bedanya x.data vs x.status?
              document.getElementById('sub').checked=true;
            }else{
              document.getElementById('bukan_sub').checked=true;
            }

            if(x.data.jawaban=='prlu_jwb'){
              // kalau foldernya nilainya 1(1=folder. liaten value di inputan folder ) maka yg dicentang.
              // bedanya x.data vs x.status?
              document.getElementById('perlu_jawaban').checked=true;
            }else{
              document.getElementById('tidak_perlu_jawaban').checked=true;
            }
            if(x.data.jenis_jawaban=='1'){
              // kalau foldernya nilainya 1(1=folder. liaten value di inputan folder ) maka yg dicentang.
              // bedanya x.data vs x.status?
              document.getElementById('jwb_checkbox').checked=true;
            } else if(x.data.jenis_jawaban=='0'){
              document.getElementById('jwb_int').checked=true;
            }
            else
            {
              document.getElementById('jwb_kosong').checked=true;
            }
            // $('input:radio[name=folder][value='+response.folder+']')[0].checked = true;
            // $('#folder').val();
            $('#id_parent').val(x.data.parent_id); 
            // $('#folder').val(x.data.bukan_folder);
          }
        }
      });
    }

    // Fungsi untuk proses simpan dan update data siswa
    function proses() {
      check_status();
      parent=document.getElementById("id_parent").value; // ngeset biar inputan yang id nya = id_parent bernilai dengan isinya parent(id_pertanyaan si parent.
      // posisi=parent;
      $.ajax({
        url: url,
        type: "POST",
        dataType: "JSON",
        data: $('#' + form_siswa).serialize(),
        success: function(x) {
          if (x.status == true) {
            $('#modal-siswa').modal('hide');
            $('#notifikasi').html('');
            $('#notifikasi').append(`<div class="alert alert-success" id="notif" role="alert">
              ${x.message}
            </div>`);
            // if(mencet tombolnya di posisi dalam folder dia sendiri.carane ngerti deen nde  ){jangan tambahkan breadcrumb}
            /*if (parent==true ) {
              //jangan tampilin breadcrumb
              $('#bread').empty().append(originalChildren);
              tampil_siswa(parent);
              
            }*/
            tampil_siswa(parent, "Home", "proses");
            $("#notif").fadeTo(2000, 500).slideUp(500, function() {
              $("#notif").slideUp(500);
            });
          }
        }
      });
      clear_form();
    }

    // Fungsi untuk proses hapus data siswa
    function hapus(id_pertanyaan) {
      if (confirm('Yakin ?')) {
        status = 'hapus';

        check_status();

        $.ajax({
          url: url,
          type: "POST",
          dataType: "JSON",
          data: {
            id_pertanyaan: id_pertanyaan
          },
          success: function(x) {
            if (x.status == true) {
              $('#notifikasi').html('');
              $('#notifikasi').append(`<div class="alert alert-success" id="notif" role="alert">
                ${x.message}
              </div>`);
              tampil_siswa();
              $("#notif").fadeTo(2000, 500).slideUp(500, function() {
                $("#notif").slideUp(500);
              });
            }
          }
        });
      }
    }

    // fungsi untuk ke folder aka tabel baru
    
    function myFunction() {
      var row = document.getElementById("notif");
      row.deleteCell(0);
    }

    $(document).ready(function() {
    var table = $('#tabel-siswa').DataTable();
     
    $('#tabel-siswa tbody').on('click', 'tr', function() {
      //masukin id parent ke input yg id nnya = parent id
      // viewnya belum nampilin parent id, dari cntrl di set biar bisa nampilin parent id tanpa ditampilin ke tabel ?????
       // berartii nge sortir data kek artikel(?) tapi dia ngambil parent_id nya,, 
      // cntrlr nya nampilsin parent id tapi ngga ditampilin di view/tabelnya. 

      //var data = table.row( this ).data();
      //  alert( 'You clicked on '+data[0]+'\'s row' );
      //tampil_siswa()
    });
} );
  </script>
  <script>
    function goBack() {
        window.history.go(-1)

    }
</script>
<script>
  $(window).bind("popstate", function () {
  $.getScript(location.href);
});
</script>
<script>
  function success(response) {
    alert("Hi");

    $("option", $("#q_subject")).remove();
    var option = "<option>Subject1</option>"; 
    option += "<option value=1234>Subject2</option>"; 
    $("#q_subject").append(option); 
    $.ajax({
    url: "<?= base_url('admin/pertanyaan_up/get_siswa'); ?>",
    type: 'POST',
    dataType: 'json',
    data: {
       id: id
    },
    async: true,
    cache: false,
    success: function(response) {
       localStorage.setItem("response", response);
       success(response);
    }
 });
  window.onpopstate = function(e) {
  var res = localStorage.getItem('response');
  success(res);
}
}
</script>
</section>
</div>
