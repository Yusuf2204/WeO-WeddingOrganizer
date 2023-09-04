<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
  <title>Data Acara &mdash; WeO</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <section class="section">
    <div class="section-header">
      <h1>Acara Pernikahan</h1>
      <div class="section-header-button">
        <a href="<?=site_url('acara/add')?>" class="btn btn-primary">Tambah Baru</a>
      </div>
    </div>

    <?php if(session()->getFlashdata('success')) : ?>
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dimiss="alert">X</button>
          <b>SUCCESS !</b>
          <?=session()->getFlashdata('success')?>
        </div>
      </div>
    <?php endif;?>

    <?php if(session()->getFlashdata('error')) : ?>
      <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dimiss="alert">X</button>
          <b>ERROR !</b>
          <?=session()->getFlashdata('error')?>
        </div>
      </div>
    <?php endif;?>

    <div class="section-body">
      <div class="card">
        <div class="card-header">
            <h4>List Acara Pernikahan</h4>
        </div>

        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped table-md">
              <tbody>
                <tr>
                <th>#</th>
                <th>Nama Acara</th>
                <th>Tanggal Acara</th>
                <th>Info</th>
                <th>Action</th>
                </tr>
                <?php foreach ($weo as $key => $value) : ?>
                <tr>
                <td><?=$key+1?></td>
                <td><?=$value->name_weo?></td>
                <td><?=date('d/m/Y', strtotime($value->date_weo))?></td>
                <td><?=$value->info_weo?></td>
                <td class="text-center" style="width: 15%">
                  <a href="<?=site_url('acara/edit/'.$value->id_weo)?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt"></i></a>
                  <form action="<?=site_url('acara/'.$value->id_weo)?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Menghapus Data?')">
                  <?= csrf_field()?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button href="" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                  </button>
                  </form>
                </td>
                </tr>
                <?php endforeach; ?>
                <tr>
              </tbody>
            </table>
          </div>
        </div>

          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>

      </div>
    </div>

  </section>
<?= $this->endSection() ?>