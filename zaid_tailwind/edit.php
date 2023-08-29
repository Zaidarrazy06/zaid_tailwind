<?php
include_once('models/Student.php');

$student = Student::show($_GET['id']);

if(isset($_POST['submit'])) {
    $response = Student::update([
        $id => $_POST['id'],
        $name => $_POST['name'],
        $nis => $_POST['nis'],
    ]);

    setcookie('message', $response, time() + 10);

    header("Location: index.php");
}
 ?>

<?php include('layouts/footer.php') ?>
<?php include('layouts/bottom.php') ?>

<!-- content -->
<div class="bg-slate-300 rounded-xl p-3">
    <div class="text-xl mb-2">Form Input Siswa</div>
    <form action="" method="POST">
        <input type="hidden" name="submit" value="<?= $student['id'] ?>">
    </form>
</div>



<?php include('layouts/footer.php') ?>
<?php include('layouts/bottom.php') ?>