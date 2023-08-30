<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
  <title>Data Acara &mdash; WeO</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('acara')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Acara</h1>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-header">
            <h4>Buat Acara Pernikahan</h4>
        </div>
        <div class="card-body col-md-6">
          <form action="<?=site_url('acara')?>" method="post" autocomplete="off">
          <?= csrf_field()?>
          <div class="form-group">
              <label for="">Nama Acara <span style="color: red">*</span></label>
              <input type="text" name="name_weo" class="form-control" required autofocus>
            </div>
            <div class="form-group">
              <label for="">Tanggal Acara <span style="color: red">*</span></label>
              <input type="date" name="date_weo" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="">Info</label>
              <textarea name="info_weo" class="form-control"></textarea>
            </div>
            <div>
              <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane">SAVE</i></button>
              <button type="reset" class="btn btn-danger">RESET</button>
            </div>
          </form>
        </div>

      </div>
    </div>

  </section>
<?= $this->endSection() ?>