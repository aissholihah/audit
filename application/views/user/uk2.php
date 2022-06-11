<div class="container-fluid">
  <div class="card o-hidden border-0 shadow-lg my-5"> <!-- biar bagus kek kotak tabel -->
    <div class="card-body">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mt-5"> SUB ASPEK PENGGUNAAN ARSIP</h1>
      </div>
      <form class="user" method="POST" action="<?php echo base_url(). 'user/pengawasan/tambah_aksi' ?>">

       <div class="row py-5">
        <div class="col-lg-10 col-sm-1 card border border-left-warning shadow h-100 py-2 mx-5">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">                    
                <p class="mb-0 font-weight-bold text-warning text-justify" style="font-size: 13px;">"Jika Perguruan Tinggi Negeri tidak memiliki kebijakan tata naskah dinas/pengurusan naskah dinas, maka berikan tanda √ pada kolom checklist/kotak di samping ini!
                Dan seluruh pertanyaan di bawah ini dinyatakanan ""Tidak/Belum""."</p>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-1">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 30px; height:30px">               
          </div>
        </div>
      </div>

      <ol class="daftar">
        <li class="py-2">Ketersediaan Arsip Inaktif
          <div class="yatidak">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Ya</label>
            </div>
            <div class="form-check form-check-inline ">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Tidak</label>
            </div>
          </div>
        </li>
        <li class="py-2">Ketersediaan Prosedur Penggunaan Arsip Inaktif
          <div class="yatidak">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Ya</label>
            </div>
            <div class="form-check form-check-inline ">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Tidak</label>
            </div>
          </div>
        </li>
        <li class="py-2">Sarana Peminjaman Arsip
          <ol class="daftar">
            <li class="py-2">Unit kearsipan menggunakan Out Indicator untuk mengganti arsip yang sedang dipinjam
              <div class="yatidak">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                </div>
              </div>
              <div class="col-lg-9 card border-left-info shadow h-100 ">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">((Out Indicator yang dimaksud pada poin 3.1 dapat berupa Out Sheet, Out Guide, Out Boks, atau sarana yang sejenis).</p>
                  </div>
                </div>
              </div>


              
            </li>
            <li class="py-2">
              Buku Peminjaman/Formulir Peminjaman
              <div class="yatidak">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                </div>
              </div>
            </li>
          </ol>

        </li>
        <li class="py-2">Penyajian Arsip Inaktif
          <ol class="daftar">
            <li>Penyajian arsip inaktif bagi kepentingan pengguna internal 

              <ol class="daftar">
                <li class="py-2">Unit Kearsipan menyajikan arsip inaktif untuk kepentingan pengguna internal
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>

                  <ol class="a mt-2">
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Penentu Kebijakan</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Pelaksana Kebijakan</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Pengawas Internal</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                      </div>
                    </div>
                  </ol>

                </li>
                <li>Unit Kearsipan menyajikan arsip inaktif untuk kepentingan pengguna internal berdasarkan sistem klasifikasi keamanan <br>dan akses arsip dinamis
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>


                </li>
              </ol>
            </li>
            
            <li class="py-2">Penyajian arsip inaktif bagi kepentingan pengguna eksternal
              <ol class="daftar">
                <li class="py-2">Unit Kearsipan menyajikan arsip inaktif untuk kepentingan pengguna eksternal
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>       



                  <ol class="a mt-2">
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Publik/ Masyarakat</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Pengawas Eksternal</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Penegak Hukum</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                      </div>
                    </div>
                  </ol>
                </li>
                <li class="py-2">Unit Kearsipan menyajikan arsip inaktif untuk kepentingan pengguna eksternal berdasarkan sistem klasifikasi keamanan <br>dan akses arsip dinamis
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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



</div>




<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>