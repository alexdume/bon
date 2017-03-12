<?php echo $this->Html->css(['register', 'bootstrap.min', 'font-awesome.min', 'style', 'responsive']); ?>
<?php echo $this->element('branding_area'); ?>
<?php echo $this->element('menu'); ?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Registration</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->
<div class="form-style">
    <?= $this->Form->create() ?>
    <div class="form row">
        <div class="col-md-12 label">
            <label for="email">Email</label>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12">    
        <?php echo $this->Form->input('email',
            array(
                'label' => false,
                'type' => 'email',
            )
        );
        ?>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12 label">
            <label for="password">Password</label>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12">    
        <?php echo $this->Form->input('password',
            array(
                'label' => false,
                'type' => 'password',
            )
        );
        ?>
        </div>
    </div>
     <div class="form row" align="center">
        <div class="col-md-12">
            <?php echo $this->Form->input('Login',
            array(
                'label' => false,
                'type' => 'submit',
            )
        );
        ?>
        </div>
    </div>
</div>
<?= $this->Form->end(); ?>
