<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SI PAJAK - DESA MEJAYAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php url('admin'); ?>">BERANDA</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="<?php url('admin-master', ['table' => 'kasun']); ?>">DATA KASUN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php url('admin-master', ['table' => 'penduduk']); ?>">DATA PENDUDUK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php url('admin-master', ['table' => 'wilayah']); ?>">DATA WILAYAH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php url('admin-master', ['table' => 'pajak']); ?>">DATA PAJAK</a>
      </li>            
    </ul>   
    <a class="btn btn-danger pull-right" href="<?php url('logout'); ?>">LOGOUT</a>
  </div>
</nav>