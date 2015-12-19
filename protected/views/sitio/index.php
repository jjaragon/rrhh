<div class="row">

    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Ingreso a editar Hoja de vida</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">

        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Por favor ingrese su Usuario y Clave
            </div>
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
            <fieldset>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                    <?php echo $form->textField($model, 'correo_electronico', array('class' => 'form-control', 'placeholder' => $model->getAttributeLabel('correo_electronico'))); ?>
                </div>

                <?php echo $form->error($model, 'correo_electronico', array('class' => 'has-error')); ?>

                <div class="clearfix"></div>
                <br/>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                    <?php echo $form->passwordField($model, 'passwd', array('class' => 'form-control', 'placeholder' => $model->getAttributeLabel('passwd'))); ?>
                </div>
                <?php echo $form->error($model, 'passwd', array('class' => 'has-error')); ?>
                <div class="clearfix"></div>
                <br/>
                <?php foreach (Yii::app()->user->getFlashes() as $key => $message) : ?>
                    <div class="<?= $key ?>"><?= $message ?></div>
                <?php endforeach; ?>
            </fieldset>
            <br/>
            <div class="row">
                <div class="center col-md-3">
                    <?php echo CHtml::submitButton('Ingresar', array('class' => 'btn btn-primary')); ?>
                </div>
                <div class="center col-md-4">
                    <?php echo CHtml::link('Deseo registrarme', CController::createUrl('Hojadevida/index'),array('class' => 'btn btn-default')); ?>
                </div>
                <div class="center col-md-3">
                    <?php echo CHtml::link('Olvidé mi contraseña',CController::createUrl('Hojadevida/index'), array('class' => 'btn btn-danger')); ?>
                </div>
            </div>

            <?php $this->endWidget(); ?>

        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->