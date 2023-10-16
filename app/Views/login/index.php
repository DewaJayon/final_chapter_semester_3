<?= $this->extend('template/admin'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="column-12">
        <h1 align="center">Halaman Login UNHI Fashion</h1>
        <hr />
    </div>
</div>
<div class="column-6">
    <img src="../images/login.png" alt="" class="img-responsive">
</div>
<div class="column-6">
    <br />
    <br />
    <br />
    <h3>Isi form dibawah untuk Login:</h3>
    <form action="process/login.php" method="post">
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" s>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Login</button>
        </div>
    </form>
</div>

<div class="row"></div>

<?= $this->endSection(); ?>