<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Form Ubah Soal</h1>
    
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="<?php echo base_url(); ?>admin/paket_booster/edit_bab/<?php echo $bab_booster[0]->id_bab_booster ?>">
        <button class="btn btn-sm btn-outline-success">Kembali</button></a>
        
      </div>

    </div>
    <?php
    echo validation_errors('<div class="alert alert-danger">', '</div>');
    echo form_open_multipart(site_url('admin/paket_booster/edit_soal/'.$edit->id_soal)) ?>

    <div class="row my-4">
   
      <div class="col-md-8">   

        <div class="card">
          <div class="card-header">
            <h6>Tambah Soal Baru</h6>    
          </div>
          <div class="card-body">

            <div class="form-group">
              <label>Pertanyaan :</label>
              <input type="text" class="form-control" value="<?php echo $edit->pertanyaan ?>" name="pertanyaan" required>
            </div> 
            <div class="form-group">
              <label>Kode Soal :</label>
                <input type="text" class="form-control" value="<?php echo $edit->kode_soal ?>"  name="kode_soal" required readonly>           
            </div>                
            <div class="form-group">
              <label>Kunci Soal :</label>
              <select class="custom-select form-control" name="kunci_soal">
                  <option value="A" <?php if ($edit->kunci_soal=='A'){echo "selected";} ?>>A</option>
                  <option value="B" <?php if ($edit->kunci_soal=='B'){echo "selected";} ?>>B</option>
                  <option value="C" <?php if ($edit->kunci_soal=='C'){echo "selected";} ?>>C</option>
                  <option value="D" <?php if ($edit->kunci_soal=='D'){echo "selected";} ?>>D</option>
                  <option value="E" <?php if ($edit->kunci_soal=='E'){echo "selected";} ?>>E</option>
                </select>
            </div>            
            <div class="form-group">
              <label>Pembahasan Soal :</label>
              <textarea name="pembahasan_soal" id="editor"><?php echo $edit->pembahasan_soal ?> </textarea>
            </div>
                       
          </div>
        </div>

      </div>

      <div class="col-md-4">

        <!-- Goals -->
        <div class="card">
          <div class="card-header">
            <h6>Jawaban Soal</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label>Jawaban A :</label>
              <input type="text" class="form-control" value="<?php echo $edit->jawaban_a ?>"  name="jawaban_a" required>
            </div>
            <div class="form-group">
              <label>Jawaban B :</label>
              <input type="text" class="form-control" value="<?php echo $edit->jawaban_b ?>"  name="jawaban_b" required>
            </div>
            <div class="form-group">
              <label>Jawaban C :</label>
              <input type="text" class="form-control" value="<?php echo $edit->jawaban_c ?>"  name="jawaban_c" required>
            </div>
            <div class="form-group">
              <label>Jawban D :</label>
              <input type="text" class="form-control" value="<?php echo $edit->jawaban_d ?>"  name="jawaban_d" required>
            </div>  
            <div class="form-group">
              <label>Jawban E :</label>
              <input type="text" class="form-control" value="<?php echo $edit->jawaban_e ?>"  name="jawaban_e" required>
            </div>  

            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

      </div>
      
    </div>

  <?php echo form_close(); ?>
</main>
