<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\label\LabelInPlace;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="container">
<div class="site-signup">
    <br><br><br><br><br>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="signup-form">
        <div class="col-lg-4">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?php $items = ['Supplier'=>'Supplier','Customer'=>'Customer'];?>
                <?= $form->field($model, 'type')->dropDownList($items,['prompt'=>'Select'])?>

                <?= $form->field($model, 'company') ?>

                <?= $form->field($model, 'address') ?>

                <?= $form->field($model, 'mobile') ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                 <?= $form->field($model, 'password')->passwordInput(['value'=>''])?>

                <?= $form->field($model, 'repeat_password')->passwordInput(['value'=>''])?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div><div class="col-lg-7">
        <div class="signup-image">
            <figure><img src="../../web/img/signup-image.jpg" alt="image"  /></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
        
         </div> </div>
     </div>
    </div>
</div> -->
<!-- </div> -->
<!--  <div class="main"> -->

        <!-- Sign up form -->



















  <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <br><br><br><br>
                        <h2 class="form-title">Sign up as Customer</h2>
                          <p>Please fill out the following fields to signup:</p>
                          <br><br>

                           <form >
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




                                <?= $form->field($model, 'address')->label('',['class'=>'zmdi zmdi-gps-dot']) ?>
                            <?= $form->field($model, 'username')->label('  ',['class'=>'zmdi zmdi-account material-icons-name']) ?>
                            <?= $form->field($model, 'password')->passwordInput(['value'=>''])->label('  ',['class'=>'zmdi zmdi-lock'])  ?>
                             <?= $form->field($model, 'repeat_password')->passwordInput(['value'=>''])->label('  ',['class'=>'zmdi zmdi-lock'])  ?>

                             <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

                             <?php ActiveForm::end(); 


                                ?>
                            </form>
<!-- 

                        <form method="POST" class="register-form" id="register-form">






                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form> -->
                    </div>
                    <div class="signup-image">
                        <br><br>
                        <br><br>
                        <figure><img src="../../web/img/signup-image.jpg" alt="sing up image"></figure>
                        <br><br>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
