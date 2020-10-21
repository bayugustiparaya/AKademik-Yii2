<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1> Mahasiswa </h1>
<!-- Yang lama , yang diajarin bapak-->
<!-- <o1> -->
<!-- <?php foreach ($mhs as $mahasiswa): ?> -->
   <!-- <li> -->
        <!-- <?= Html::encode ("{$mahasiswa->nobp}({$mahasiswa->nama})"); ?> -->
        <!-- <?= $mahasiswa->nobp; ?> -->
   <!-- </li>  -->
<!-- <?php endforeach ?> -->
<!-- </o1> -->

<!-- Tabel Bootstrap -->
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">No Bp</th>
      <th scope="col">Nama</th>
      <th scope="col">No Hp</th>
    </tr>
  </thead>
  <tbody>
<?php 
$no=1;
foreach ($mhs as $mahasiswa): ?>
    <tr>
      <th scope="row"><?= $no; ?></th>
      <td><?= Html::encode ("{$mahasiswa->nobp}"); ?></td>
      <td><?= Html::encode ("{$mahasiswa->nama}"); ?></td>
      <td><?= Html::encode ("{$mahasiswa->nohp}"); ?></td>
    </tr>
<?php
$no++;
endforeach; ?>
  </tbody>
</table>
<?= LinkPager::widget (['pagination'=>$pagination]) ?>