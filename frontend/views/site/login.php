<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;

// use yii\bootstrap\ActiveForm;
use kartik\form\ActiveForm;
use kartik\label\LabelInPlace;


$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="container">
<div class="site-login">
    <br><br><br><br><br><br><br>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div> -->
    




        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">




                <div class="signin-content">
                    <div class="signin-image">
                        <br><br>
                        <br><br>
                        <figure><img src="../../web/img/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <br><br><br><br>
                        <h2 class="form-title">Log In</h2>

                     <form>
                                <?php 

                                    $form = ActiveForm::begin([
                                        'id' => 'login-form-inline', 
                                        'type' => ActiveForm::TYPE_INLINE
                                        // 'tooltipStyleFeedback' => true, // shows tooltip styled validation error feedback
                                        // 'fieldConfig' => ['options' => ['class' => 'form-group mr-2']], // spacing field groups
                                        // 'formConfig' => ['showErrors' => true],
                                        // 'options' => ['style' => 'align-items: flex-start'] // set style for proper tooltips error display
                                    ]); 
                                ?>


                                    <?= $form->field($model, 'username')->label('  ',['class'=>'zmdi zmdi-account material-icons-name']) ?>
                                    <?= $form->field($model, 'password')->passwordInput()->label('  ',['class'=>'zmdi zmdi-lock'])  ?>
                                     <div class="col-lg-5">
                                    <?= $form->field($model, 'rememberMe')->checkbox()?> 
                                 
                                </div>
                                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary mr-1']) ?>
                                    <?= Html::resetButton('Reset', ['class' => 'btn btn-info mr-1']) ?> 
                               


                                <?php ActiveForm::end(); 


                                ?>
                </form> 

                     <!--    <form method="POST" class="register-form" id="login-form">

                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form> -->
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
