<?php

$form = $this->beginWidget('CActiveForm', array(
    'enableClientValidation' => true,
    'htmlOptions' => array(
        'id' => "form-autenticar",
        'class' => "form-horizontal",
        'role' => 'form',
    ),
    'errorMessageCssClass' => 'has-error',
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnChange' => true,
        'errorCssClass' => 'has-error',
        'successCssClass' => 'has-success',
    //'inputContainer' => '.form-group',
    ))
);
?>

<div class="row">
    <div class="col-md-3">
        correo
    </div>
</div>
<?php $this->endWidget(); ?>


