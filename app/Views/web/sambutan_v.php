<?php $this->extend('tamplate/sidebar');  ?>
<?php $this->section('contentMain');  ?>
<script>

</script>
<h1 class="warna">sambutan Kepala sekolah</h1>
<hr>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">sambutan Kepala sekolah</li>
</ol>

<div class="isi mx-4 mx-md-0">
    <div class="foto float-start me-4 img-thumbnail" style="width: 350px;">
        <img src="assets/other/<?= $sambut['cover']; ?>" class="w-100 rounded" alt="">
        <h5 class="mt-2 w-100 text-center"><?= $sambut['nama']; ?></h5>
    </div>
    <p><?= $sambut['isi']; ?></p>
</div>

<?php $this->endSection();  ?>