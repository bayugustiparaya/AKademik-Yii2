<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1> Mahasiswa </h1>
<o1>
<?php foreach ($mhs as $mahasiswa): ?>
   <li>
        <?= Html::encode ("{$mahasiswa->nobp}({$mahasiswa->nama})"); ?>
        <?= $mahasiswa->nobp; ?>
   </li> 
<?php endforeach ?>
</o1>
  </tbody>
</table>
<?= LinkPager::widget (['pagination'=>$pagination]) ?>