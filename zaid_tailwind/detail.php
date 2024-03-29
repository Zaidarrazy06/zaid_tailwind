<?php

include_once('models/Student.php');

$id = $_GET['id'];
$student = Student::show($id);
?>

<?php include('layouts/top.php') ?>
<?php include('layouts/header.php') ?>

<!-- content -->
<div class="flex bg-slate-300 rounded-xl p-3 m-3">
    <div class="basis-1/5">
        <p class="font-bold">Nama</p>
        <p class="font-bold">NIS</p>
    </div>
    <div class="basis-4/5">
        <p><?= $student['nama'] ?></p>
        <p><?= $student['nis'] ?></p>
    </div>
</div>
<div class="grid gap-2">
    <a href="index.php" class="bg-blue-500 p-3 rounded-xl text-white m-3 text-center">Kembali</a>
</div>

<?php include('layouts/footer.php') ?>
<?php include('layouts/bottom.php') ?>