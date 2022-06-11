<div class="container-fluid">
  <div class="card o-hidden border-0 shadow-lg my-5"> <!-- biar bagus kek kotak tabel -->
    <div class="card-body">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mt-5"> SUB ASPEK PENGGUNAAN ARSIP </h1>
      </div>
      <form class="user" method="POST" action="<?php echo base_url(). 'user/pengawasan/tambah_aksi' ?>">
        <div class="row py-5">
          <div class="col-lg-10 col-sm-1 card border border-left-warning shadow h-100 py-2 mx-5">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">                    
                  <p class="mb-0 font-weight-bold text-warning text-justify" style="font-size: 13px;">Jika Perguruan Tinggi Negeri tidak memiliki kebijakan Sistem Klasifikasi Keamanan dan Akses Arsip Dinamis,  berikan tanda √ dalam kolom disamping, dan seluruh pertanyaan di bawah dinyatakan  "Tidak/Belum".</p>
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
          <li>Ketersediaan Arsip Aktif
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
          <li>Sarana Peminjaman Arsip
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
            <ol class="daftar">
              <li class="py-2">Unit pengolah menggunakan Out Indicator untuk mengganti arsip yang sedang dipinjam
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
                      <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(Asas asal usul adalah asas yang dilakukan untuk menjaga arsip tetap terkelola dalam satu kesatuan pencipta arsip (provenance), tidak dicampur dengan arsip yang berasal dari pencipta arsip lain, sehingga arsip dapat melekat pada konteks penciptaannya).</p>
                    </div>
                  </div>
                </div>                  
              </li>
              <li class="py-2">Buku Peminjaman/Formulir Peminjaman
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
          <li class="py-2">Penyajian Arsip Aktif
            <ol class="daftar">
              <li class="py-2">Penyajian arsip aktif bagi kepentingan pengguna internal
                <ol class="daftar">
                  <li class="py-2">Unit Pengolah menyajikan arsip aktif untuk kepentingan pengguna internal
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
                    <ol class="a mt-1">
                      <div class="row">
                        <div class="col-lg-6">
                          <dd>a. Penentu Kebijakan</dd>
                        </div>
                        <div class="form-group col-lg-1 mx-3">                
                          <input type="checkbox" id="vehicle1" name="46-87" value="Penentu Kebijakan" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-6">
                          <dd>b. Pelaksana Kebijakan</dd>
                        </div>
                        <div class="form-group col-lg-1 mx-3">                
                          <input type="checkbox" id="vehicle1" name="46-88" value="Pelaksana Kebijakan" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-6">
                          <dd>c. Pengawas Internal </dd>
                        </div>
                        <div class="form-group col-lg-1 mx-3">                
                          <input type="checkbox" id="vehicle1" name="46-89" value="Pengawas Internal" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                        </div>
                      </div>
                    </ol>
                  </li>
                  <li class="py-2">Unit Pengolah menyajikan arsip aktif  untuk kepentingan pengguna internal berdasarkan sistem klasifikasi keamanan <br>dan akses arsip dinamis
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
              <li class="py-2">Penyajian arsip aktif bagi kepentingan pengguna eksternal
                <ol class="daftar">
                  <li class="py-2">Unit pengolah menyajikan arsip aktif untuk kepentingan pengguna eksternal
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
                    <ol class="a mt-1">
                      <div class="row">
                        <div class="col-lg-6">
                          <dd>a. Publik/Masyarakat</dd>
                        </div>
                        <div class="form-group col-lg-1 mx-3">                
                          <input type="checkbox" id="vehicle1" name="46-87" value="Publik/Masyarakat" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-6">
                          <dd>b. Pengawas Eksternal</dd>
                        </div>
                        <div class="form-group col-lg-1 mx-3">                
                          <input type="checkbox" id="vehicle1" name="46-88" value="Pengawas Eksternal" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-6">
                          <dd>c. Penegak Hukum </dd>
                        </div>
                        <div class="form-group col-lg-1 mx-3">                
                          <input type="checkbox" id="vehicle1" name="46-89" value="Penegak Hukum" onclick="disradio('disrad')" style="width: 20px; height:20px">               
                        </div>
                      </div>
                    </ol>


                  </li>
                  <li class="py-2">Unit Pengolah menyajikan arsip aktif  untuk kepentingan pengguna eksternal berdasarkan sistem klasifikasi keamanan <br>dan akses arsip dinamis
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
            </ol>
          </li>
        </ol>

      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
