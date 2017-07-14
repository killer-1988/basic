<?php
use yii\helpers\Html;
use yii\grid\GridView;
?>
<h1>Notatki</h1>
<ul>
    <?php foreach ($notebook as $note): ?>
        <li>
            <?= Html::encode("{$note->title} - {$note->body}") ?>. Data utworzenia:
            <?= Html::encode("{$note->date}") ?>
        </li>
    <?php endforeach; ?>
</ul>
<p>
    <?= Html::a('Utwórz nową notatkę!', ['create', 'notebook' => $notebook], ['class' => 'btn btn-primary']) ?>
</p>