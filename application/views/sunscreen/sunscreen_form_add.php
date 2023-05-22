<section class="content-header">
  <h1>Data Sunscreen
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Halaman Utama</a></li>
    <li class="active">Data Sunscreen</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambah Data Sunscreen</h3>
            <div class="pull-right">
                <a href="<?=site_url('sunscreen')?>" class="btn btn-warning btn-flat">Kembali</a>
            </div>
        </div>
        <div class="box-body">
          <div class="row">
              <div class="col-md-4 col-md-offset-4">
                  <?php // echo validation_errors();?>
                  <form action="" method="post">
                      <div class="form-group <?=form_error('nameProduct') ? 'has-error' : null?>">
                          <label>Nama Produk *</label>
                          <input type="text" name="nameProduct" value="<?=set_value('nameProduct')?>" class="form-control">
                          <?=form_error('nameProduct')?>
                      </div>
                      <div class="form-group <?=form_error('price') ? 'has-error' : null?>">
                          <label>Harga Produk *</label>
                          <input type="text" name="price" value="<?=set_value('price')?>" class="form-control">
                          <?=form_error('price')?>
                      </div>
                      <div class="form-group <?=form_error('spf') ? 'has-error' : null?>">
                          <label>SPF *</label>
                          <input type="text" name="spf" value="<?=set_value('spf')?>" class="form-control">
                          <?=form_error('spf')?>
                      </div>
                      <div class="form-group <?=form_error('rating') ? 'has-error' : null?>">
                          <label>Rating Produk *</label>
                          <input type="text" name="rating" value="<?=set_value('rating')?>" class="form-control">
                          <?=form_error('rating')?>
                      </div>
                      <div class="form-group">
                          <label>Cocok Untuk Jenis Kulit *</label>
                          <select name="jenisKulit" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="Laki-laki" <?=set_value('jenisKulit') == 'Laki-laki' ? "selected" : null?>>Laki-laki</option>
                                <option value="Perempuan" <?=set_value('jenisKulit') == 'Perempuan' ? "selected" : null?>>Perempuan</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Asal Brand *</label>
                          <select name="asalBrand" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="Laki-laki" <?=set_value('asalBrand') == 'Laki-laki' ? "selected" : null?>>Laki-laki</option>
                                <option value="Perempuan" <?=set_value('asalBrand') == 'Perempuan' ? "selected" : null?>>Perempuan</option>
                          </select>
                      </div>
                      <div class="form-group <?=form_error('link') ? 'has-error' : null?>">
                          <label>Link Gambar *</label>
                          <input type="text" name="link" value="<?=set_value('link')?>" class="form-control">
                          <?=form_error('link')?>
                      </div>
                      <div class="form-group <?=form_error('nameCompany') ? 'has-error' : null?>">
                          <label>Nama Perusahaan *</label>
                          <input type="text" name="nameCompany" value="<?=set_value('nameCompany')?>" class="form-control">
                          <?=form_error('nameCompany')?>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                          <button type="reset" class="btn btn-danger btn-flat">Hapus</button>
                      </div>
                  </form>

              </div>
          </div>
        </div>
    </div>
</section>