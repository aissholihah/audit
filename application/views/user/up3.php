<div class="container-fluid">
  <div class="card o-hidden border-0 shadow-lg my-5"> <!-- biar bagus kek kotak tabel -->
    <div class="card-body">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mt-5"> SUB ASPEK PEMELIHARAAN ARSIP </h1>
      </div>
      <form class="user" method="POST" action="<?php echo base_url(). 'user/pengawasan/tambah_aksi' ?>">
        <ol class="daftar">
          <li class="py-2">Pemberkasan Arsip Aktif
            <div class="row mt-3">
              <div class="col-lg-10 col-sm-1 card border border-left-warning shadow h-100 py-2 mx-5">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">                    
                      <p class="mb-0 font-weight-bold text-warning text-justify" style="font-size: 13px;">Jika Pemerintah Daerah belum menetapkan Klasifikasi Arsip di lingkungannya, berikan tanda √ pada kolom checklist di samping ini, dan seluruh pertanyaan di bawah dinyatakan "Tidak/Belum".</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-1">
                  <input type="checkbox" id="vehicle1" name="45-405" value="Bike" style="width: 30px; height:30px" onclick="disall('no2')">               
                </div>
              </div>
            </div>

            <ol class="daftar">
              <li class="py-2">Unit pengolah melaksanakan pemberkasan arsip aktif
                <div class="yatidak">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                  </div>
                </div>
                <div class="col-lg-9 card border-left-info shadow h-100 ">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika unit pengolah tidak melaksanakan pemberkasan arsip aktif, maka seluruh pertanyaan pada poin 1.2., 1.3., 1.4., 1.5., dan 1.6. di bawah ini harus dinyatakan "Tidak".</p>
                    </div>
                  </div>
                </div>     
              </li>
              <li class="py-2">Unit Pengolah melaksanakan pemberkasan arsip aktif terhadap arsip yang dibuat dan diterima
                <div class="yatidak">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                  </div>
                </div>
                <div class="col-lg-9 card border-left-info shadow h-100 ">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika pemberkasan arsip aktif hanya dilakukan terhadap arsip yang dibuat saja atau hanya terhadap arsip yang diterima saja, maka pertanyaan pada angka 1.2. di atas harus dinyatakan "Tidak", dan berikan tanda √ pada kolom dibawah ini sesuai kondisi faktual.</p>
                    </div>
                  </div>
                </div>
                <ol class="a mt-2">
                  <div class="row">
                    <div class="col-lg-6">
                      <dd>- Hanya dilakukan terhadap arsip yang dibuat</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">               
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <dd>- Hanya dilakukan terhadap arsip yang diterima</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                    </div>
                  </div>
                </ol> 
              </li>
              <li class="py-2">Unit Pengolah melaksanakan pemberkasan arsip aktif sesuai klasifikasi arsip 
                <div class="yatidak">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                  </div>
                </div>  
              </li>
              <li class="py-2">Unit pengolah menyusun daftar arsip aktif
                <div class="yatidak">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                  </div>
                </div>
                <div class="col-lg-9 card border-left-info shadow h-100 ">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika unit pengolah tidak menyusun daftar arsip aktif, maka seluruh pertanyaan pada angka 1.5. dan 1.6. di bawah ini harus dinyatakan "Tidak".</p>
                    </div>
                  </div>
                </div>  
              </li>

              
              <li class="py-2">Daftar arsip aktif disusun oleh Unit Pengolah telah memuat seluruh informasi pada daftar arsip aktif sesuai ketentuan <br>peraturan perundang-undangan.
                <div class="yatidak">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                  </div>
                </div>
                <div class="col-lg-9 card border-left-info shadow h-100 ">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Berikan tanda √ pada kolom di bawah ini sesuai kondisi faktual pada daftar arsip aktif yang telah disusun, jika seluruh kolom di bawah ini dinyatakan 'Ada" maka pertanyaan poin 1.5 di atas harus dinyatakan "Ya", namun jika terdapat kolom di bawah ini yang dinyatakan "Tidak Ada/Kosong" maka pertanyaan poin 1.5. di atas harus dinyatakan "Tidak".</p>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <p class="col-lg-6">Daftar berkas:</p>
                  <label class="col-lg-1 form-check-label mx-4" for="inlineRadio2">ADA</label>
                </div>
                <ol class="a mt-1">
                  <div class="row">
                    <div class="col-lg-6">
                      <dd>a. unit pengolah</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="unit pengolah" style="width: 20px; height:20px">               
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <dd>b. nomor berkas</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="nomor berkas" style="width: 20px; height:20px">               
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <dd>c. kode klasifikasi</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="kode klasifikasi" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <dd>d. uraian informasi berkas</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="uraian informasi berkas" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <dd>e. kurun waktu</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="kurun waktu" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <dd>f. jumlah</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="jumlah" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <dd>g. keterangan</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="keterangan" style="width: 20px; height:20px">               
                    </div>
                  </div>
                </ol>

                <hr>
                <div class="row">
                  <p class="col-lg-6">Daftar isi berkas:</p>
                  <label class="col-lg-1 form-check-label mx-4" for="inlineRadio2">ADA</label>
                </div>
                <ol class="a mt-1">
                  <div class="row">
                    <div class="col-lg-6">
                      <dd>a. nomor berkas</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="unit pengolah" style="width: 20px; height:20px">               
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <dd>b. nomor item arsip</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="nomor berkas" style="width: 20px; height:20px">               
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <dd>c. kode klasifikasi</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="kode klasifikasi" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <dd>d. uraian informasi arsip</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="uraian informasi berkas" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <dd>e. tanggal</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="tanggal" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <dd>f. jumlah</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="jumlah" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <dd>g. keterangan</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" value="keterangan" style="width: 20px; height:20px">               
                    </div>
                  </div>
                </ol>
                <li>Unit Pengolah menyampaian daftar arsip aktifnya kepada Unit Kearsipan paling lama 6 (enam) bulan setelah <br>pelaksanaan kegiatan
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>             
                </li>
              </ol>

            </li>


          </li>
          <li class="py-2">Penyimpanan Arsip Aktif
            <ol class="daftar">
              <li class="py-2">Unit pengolah melaksanakan penyimpanan arsip
                <div class="yatidak">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                  </div>
                </div>
              </li>
              <li class="py-2">Seluruh arsip yang disimpan oleh unit pengolah telah terdaftar ke dalam daftar arsip aktif
                <div class="yatidak">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                  </div>
                </div>
                <div class="col-lg-9 card border-left-info shadow h-100 ">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika terdapat arsip yang telah disimpan namun belum terdaftar di dalam daftar arsip aktif, maka pertanyaan poin 2.2 di atas harus dinyatakan "Tidak".</p>
                    </div>
                  </div>
                </div>  
              </li>
              <li class="py-2">Arsip yang disimpan oleh unit pengolah tidak melewati retensi arsip aktif sesuai Jadwal Retensi Arsip (JRA)
                <div class="yatidak">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                  </div>
                </div>
              </li>
              <li class="py-2">Arsip aktif disimpan menggunakan sarana penyimpanan arsip yang sesuai
                <div class="yatidak">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                  </div>
                </div>
                <br>
                <div class="row mt-3">
                  <div class="col-lg-6">
                    <p>Isikan persentase jumlah arsip aktif yang disimpan menggunakan sarana penyimpanan yang sesuai</p>
                  </div>
                  <div class="form-check-inline col-lg-1 mx-5">                
                    <input type="text" id="vehicle1" name=" 47-158" style="width: 30px; height:30px">
                    <label class="form-check-label" for="inlineRadio2"> %</label>               
                  </div>
                </div>   
              </li>
            </ol>

          </li>
          <li class="py-2">Alih Media Arsip Aktif
            <div class="row">
              <div class="col-lg-11">
                <p>Unit Kearsipan melaksanakan alih media arsip inaktif.</p>
              </div>
              <div class="form-group col-lg-1 ">                
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">               
              </div>
            </div>
            <div class="col-lg-9 card border-left-info shadow h-100 ">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika Unit Pengolah melaksanakan alih media arsip aktif, maka berikan tanda √ pada kolom di atas dan berikan tanda √ pada poin informasi di bawah ini sesuai kondisi faktual. Namun, jika Unit Pengolah tidak melaksanakan alih media arsip aktif maka kosongkan dan jangan memberikan tanda apapun pada seluruh kolom informasi yang terkait dengan sub aspek alih media pada formulir ini. </p>
                </div>
              </div>
            </div>
            <ol class="daftar">
              <div class="row">
                <div class="col-lg-11">
                  <li class="py-2">Arsip aktif yang dialihmediakan tetap disimpan oleh Unit Pengolah.</li>
                </div>
                <div class="form-group col-lg-1 ">                
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">               
                </div>
              </div>
              <div class="row">
                <div class="col-lg-11">
                  <li class="py-2">Alih media arsip aktif diautentikasi oleh pimpinan di lingkungan pencipta arsip dengan memberikan tanda tertentu <br>yang dilekatkan, terasosiasi atau terkait dengan arsip hasil alih media.</li>
                </div>
                <div class="form-group col-lg-1 ">                
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">               
                </div>
              </div>
              <div class="row">
                <div class="col-lg-11">
                  <li class="py-2">Pelaksanaan alih media arsip aktif disertai dengan pembuatan berita acara alih media arsip.</li>
                </div>
                <div class="form-group col-lg-1 ">                
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">               
                </div>
              </div>
              <div class="row">
                <div class="col-lg-11">
                  <li class="py-2">Berita acara alih media arsip aktif telah disusun sesuai ketentuan peraturan perundang-undangan.
                  </li>
                </div>
                <div class="form-group col-lg-1 ">                
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">               
                </div>

                <div class="col-lg-9 card border-left-info shadow h-100 mt-3 ">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">'Berikan tanda √ pada kolom informasi di bawah ini sesuai kondisi faktual pada berita acara alih media arsip aktif yang telah disusun, jika seluruh kolom di bawah ini dinyatakan "Ada" maka kolom informasi pada poin 3.4 harus dinyatakan "Ya" dan berikan tanda √, namun jika terdapat kolom di bawah ini yang dinyatakan "Tidak Ada/Kosong" maka jangan memberikan tanda apapun di dalam kolom/kosongkan informasi pada poin 3.4.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">Berita acara alih media arsip aktif memuat informasi:</div>
                <ol class="a mt-3">
                  <div class="row">
                    <div class="col-lg-8">
                      <dd>a. waktu pelaksanaan</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-8">
                      <dd>b. tempat pelaksanaan</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-8">
                      <dd>c. jenis media</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <dd>d. jumlah arsip</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <dd>e. keterangan proses alih media yang dilakukan</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <dd>f. pelaksana</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <dd>g. penandatangan oleh pimpinan unit pengolah.</dd>
                    </div>
                    <div class="form-group col-lg-1 mx-3">                
                      <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                    </div>
                  </div>
                </ol>

              </div>

              <div class="row">
                <div class="col-lg-11">
                  <li class="py-2">Pelaksanaan alih media arsip aktif disertai dengan pembuatan daftar arsip aktif yang dialihmediakan.</li>
                </div>
                <div class="form-group col-lg-1 ">                
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">               
                </div>
              </div>

            </li>
            <div class="row">
              <div class="col-lg-11">
                <li class="py-2">Daftar arsip aktif yang dialihmediakan telah disusun sesuai ketentuan peraturan perundang-undangan.</li>
              </div>
              <div class="form-group col-lg-1 ">                
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">               
              </div>

              <div class="col-lg-9 card border-left-info shadow h-100 mt-3 ">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Berikan tanda √ pada kolom informasi di bawah ini sesuai kondisi faktual pada daftar arsip aktif  yang dialihmediakan yang telah disusun, jika seluruh kolom di bawah ini dinyatakan "Ada" maka kolom informasi pada poin 3.6 harus dinyatakan "Ya" dan berikan tanda √, namun jika terdapat kolom di bawah ini yang dinyatakan "Tidak Ada/Kosong" maka jangan memberikan tanda apapun di dalam kolom/kosongkan informasi pada poin 3.6 di atas.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">Daftar arsip aktif yang dialihmediakan memuat informasi:</div>
              <ol class="a mt-3">
                <div class="row">
                  <div class="col-lg-8">
                    <dd>a. unit pengolah</dd>
                  </div>
                  <div class="form-group col-lg-1 mx-3">                
                    <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-8">
                    <dd>b. nomor urut</dd>
                  </div>
                  <div class="form-group col-lg-1 mx-3">                
                    <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-8">
                    <dd>c. jenis arsip</dd>
                  </div>
                  <div class="form-group col-lg-1 mx-3">                
                    <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <dd>d. jumlah arsip</dd>
                  </div>
                  <div class="form-group col-lg-1 mx-3">                
                    <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <dd>e. kurun waktu</dd>
                  </div>
                  <div class="form-group col-lg-1 mx-3">                
                    <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <dd>f.  Keterangan</dd>
                  </div>
                  <div class="form-group col-lg-1 mx-3">                
                    <input type="checkbox" id="vehicle1" name="vehicle1" style="width: 20px; height:20px">               
                  </div>
                </div>
              </ol>

            </div>
          </ol>
        </li>
        <li class="py-2">Pemeliharaan Arsip Vital
          <ol class="daftar">
            <li class="py-2">Unit pengolah menyimpan arsip vital          

              <div class="yatidak">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-lg-9 card border-left-info shadow h-100 mr-5 ">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Seluruh pernyataan di bawah ini berlaku ketika Pemerintah Daerah telah menyusun Program Arsip Vital (pendataan/identifikasi arsip vital, perlindungan dan pengamanan arsip vital, penyelamatan dan pemulihan arsip vital)  atau telah memiliki Pedoman Pengelolaan Arsip Vital. Jika TIDAK ADA PROGRAM ARSIP VITAL ATAU PEDOMAN PENGELOLAAN ARSIP VITAL yang ditetapkan oleh pimpinan Pemerintah Daerah maka BERIKAN TANDA √  PADA KOLOM CHECKLIST/KOTAK DI SAMPING INI ! Dan seluruh pertanyaan di bawah harus dinyatakan "Tidak".</p>
                    </div>
                  </div>
                </div>  
                <div class="form-group">
                  <div class="col-lg-1">
                    <input type="checkbox" id="vehicle1" name="45-405" value="Bike" style="width: 30px; height:30px" onclick="disall('no2')">               
                  </div>
                </div>
              </div>

            </li>
            <li class="py-2">Identifikasi Arsip Vital
              <div class="row py-5">
                <div class="col-lg-9 card border-left-info shadow h-100 mr-5 ">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Apabila berdasarkan hasil identifikasi program arsip vital, tidak terdapat arsip vital yang tercipta pada unit pengolah maka berikan tanda Cheklist  √ pada kotak di samping. </p>
                    </div>
                  </div>
                </div>  
                <div class="form-group">
                  <div class="col-lg-1">
                    <input type="checkbox" id="vehicle1" name="45-405" value="Bike" style="width: 30px; height:30px" onclick="disall('no2')">               
                  </div>
                </div>
              </div>

              <ol class="daftar mt-3">
                <li class="py-2">Melaksanakan kegiatan identifikasi arsip dengan pembuatan daftar arsip vital
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>

                  <div class="col-lg-9 card border-left-info shadow h-100 ">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika pemberkasan arsip aktif hanya dilakukan terhadap arsip yang dibuat saja atau hanya terhadap arsip yang diterima saja, maka pertanyaan pada angka 1.2. di atas harus dinyatakan "Tidak", dan berikan tanda √ pada kolom dibawah ini sesuai kondisi faktual.</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="py-2">Penyusunan daftar arsip vital memenuhi ketentuan peraturan perundang-undangan:
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>

                  <div class="col-lg-9 card border-left-info shadow h-100 ">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(berikan tanda √ pada kolom checklist di bawah ini, sesuai komponen pada daftar arsip vital yang telah disusun, jika komponen di bawah ini tidak terpenuhi seluruhnya maka Poin 4.2.2 di atas harus dinyatakan "Tidak").</p>
                      </div>
                    </div>
                  </div>
                  <ol class="a mt-1">
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>1) Nomor </dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="46-87" value="pencipta arsip" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>2) Jenis arsip</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="46-88" value="unit pengolah" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>3) Unit kerja</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="46-89" value="nomor arsip" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>4) Kurun waktu </dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="46-90" value="kode klasifikasi" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>5) Media</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="46-91" value="uraian informasi arsip" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>6) Jumlah</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="46-92" value="kurun waktu" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>7) Jangka simpan</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="46-93" value="jumlah" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>8) Metode perlindungan</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="46-94" value="keterangan" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                      </div>
                    </div>

                  </ol>
                </li>
              </ol>

            </li>
            <li class="py-2">Pelindungan dan Pengamanan Dokumen/Arsip Vital Negara
              <ol class="daftar">
                <li class="py-2">Metode pelindungan arsip vital
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>
                  <ul class="mt-2">
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Duplikasi dan Pemencaran (dispersal)</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Peralatan khusus (Vaulting)</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">

                      </div>
                    </div>
                  </ul>
                </li>
                <li class="py-2">Pengamanan fisik
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>
                  <ul class="mt-2">
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Pengaturan akses</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Pengaturan ruang simpan</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Penggunaan sistem alarm</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Struktur bangunan</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">

                      </div>
                    </div>
                  </ul>
                </li>
                <li class="py-2">Pengamanan informasi arsip
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>
                  <ul class="mt-2">
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Kartu identifikasi individu pengguna arsip</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Mengatur akses petugas kearsipan</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Menyusun prosedur tetap</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Memberi kode rahasia kepada arsip </dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">                                     
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Kontrol akses</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">                                     
                      </div>
                    </div>
                  </ul>
                </li>
                <li class="py-2">Lokasi penyimpanan arsip vital
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>
                  <ul class="mt-2">
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Penyimpanan on site</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Penyimpanan off site</dd>
                      </div>
                      <div class="form-group col-lg-3 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1"  style="width: 20px; height:20px">

                      </div>
                    </div>
                  </ul>
                </li>
                <p>URUNGGG BODOAMATTTInformasi tambahan (Bagian di bawah ini diisi apabila pernah terjadi bencana</p>
                <ol>
                  <dd class="py-2">A Penyelamatan pasca musibah
                    <div class="yatidak">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                      </div>
                      <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                      </div>
                    </div>
                    <ol>
                      <dd class="py-2">1 Evakuasi arsip vital
                        <div class="yatidak">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                          </div>
                          <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                          </div>
                        </div>
                      </dd>
                      <dd class="py-2">2 Identifikasi jenis arsip yang mengalamai kerusakan
                        <div class="yatidak">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                          </div>
                          <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                          </div>
                        </div>
                      </dd>
                      <dd class="py-2">3 Recovery
                        <div class="yatidak">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                          </div>
                          <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                          </div>
                        </div>
                        <ol>
                          <dd class="py-2">a. Ruang penyimpanan
                            <div class="yatidak">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                              </div>
                              <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                              </div>
                            </div>
                          </dd>
                          <dd class="py-2">b. Fisik arsip
                            <div class="yatidak">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="46-117" id="inlineRadio1" value="Ya">
                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                              </div>
                              <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="46-117" id="inlineRadio2" value="Tidak">
                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                              </div>
                            </div>
                          </dd>
                        </ol>
                      </dd>
                    </ol>
                  </dd>
                  <dd class="py-2">B</dd>
                  <dd class="py-2">C</dd>
                  <dd class="py-2">D</dd>
                </ol>
              </ol>

            </li>
          </ol>
        </li>
        <li class="py-2">Pemberkasan dan Pelaporan Arsip Terjaga</li>
      </ol>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>









