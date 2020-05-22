<div class="wrapper">
  <!-- Sidebar Holder -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <center> 
        <img src="<?php echo base_url(); ?>img/img_user/<?php echo $this->session->userdata('gmb_user'); ?>" alt="Foto_Profil" class="rounded-circle coba mb-2" width="50%">
        <br>
        <span><?php echo $this->session->userdata('nanma_lengkap'); ?></span> 
        <hr>
      </center>
    </div>

    <ul class="list-unstyled components">
      <li>
        <a href="<?php echo base_url('admin/dasboard'); ?>"><i class="fas fa-tachometer-alt pr-2"></i> Dasboard</a>
      </li>
        
      <li>
        <a href="<?php echo base_url('admin/user'); ?>"><i class="far fa-user pr-3"></i>User</a>
      </li>
       <li>
        <a href="<?php echo base_url('admin/transaksi'); ?>"><i class="far fa-credit-card pr-3"></i>Transaksi</a>
      </li> 
      <li>
        <a href="<?php echo base_url('admin/paket_reguler'); ?>"><i class="far fa-bookmark pr-3"></i>Paket Reguler</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/paket_booster'); ?>"><i class="fas fa-bookmark pr-3"></i>Paket Booster</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/bab_booster'); ?>"><i class="far fa-folder-open pr-3"></i>Bab Booster</a>
      </li>
      <li>
        <a href="<?php echo base_url('admin/soal'); ?>"><i class="far fa-edit pr-3"></i>Soal</a>
      </li>

      <li>
        <a href="<?php echo base_url('admin/jawaban'); ?>"><i class="far fa-file-archive pr-3"></i>Jawaban</a>
      </li>

      <li>
        <a href="<?php echo base_url('admin/ambil_soal'); ?>"><i class="far fa-file-alt pr-3"></i>Ambil Soal</a>
      </li>
       
      <li>
        <a href="<?php echo base_url('login/logout'); ?>"><i class="fas fa-sign-out-alt pr-3"></i> Logout</a>
      </li>
    </ul>
  </nav>