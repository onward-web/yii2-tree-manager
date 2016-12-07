<?php
/** @var \yii\web\View $this */
/** @var integer $language_id */
/** @var \DevGroup\Multilingual\models\Language $language */
/** @var \app\models\PageTranslation $model */
/** @var string $attributePrefix */
/** @var \yii\widgets\ActiveForm $form */
use yii\helpers\Url;
$imperaviParams = [
    'settings' => [
        'minHeight' => 200,
        'plugins' => [
            'table',
            'fontsize',
            'fontfamily',
            'fontcolor',
            'video',
            'imagemanager',
            'clips',
            'fullscreen',
            'filemanager',
        ],
        'pastePlainText' => true,
        'buttonSource' => true,
        'replaceStyles' => [],
        'replaceTags' => [],
        'deniedTags' => [],
        'removeEmpty' => [],
        'imageUpload' => Url::to(['/admin/image-upload']),
        'imageManagerJson' => Url::to(['/admin/images-get']),
        'fileUpload' => Url::to(['/admin/file-upload']),
        'fileManagerJson' => Url::to(['/admin/files-get']),
    ],
];
?>
<?= $form->field($model, $attributePrefix.'name') ?>
<?=
$form->field($model, $attributePrefix.'is_published')
    ->widget(kartik\widgets\SwitchInput::className())
    ->hint(Yii::t('app', 'Unpublished posts translations are not be displayed in listings till they become published.'))
?>

<div class="row">    
    <div class="col-md-12">
        <?=
        $form->field($model, $attributePrefix.'content')
            ->widget(
                \vova07\imperavi\Widget::className(),
                $imperaviParams
            )
        ?>
    </div>
    
    <div class="col-md-12">
        <?=
            $form->field($modelPath, $attributePrefix.'path');           
        ?>
    </div>
    
    
    
    <div class="col-md-12">
        <?= $form->field($model, $attributePrefix.'h1') ?>
    </div>
    
    <div class="col-md-12">
        <?= $form->field($model, $attributePrefix.'meta_title') ?>
              
    </div>
    <div class="col-md-12">
        <?= $form->field($model, $attributePrefix.'meta_keywords') ?>
    </div>
    
    <div class="col-md-12">
        <?= $form->field($model, $attributePrefix.'meta_description') ?>
    </div>
     
   
</div>