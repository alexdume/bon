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
    <?= $this->Form->create($user) ?>
    <div class="form row">
        <div class="col-md-12 label">
            <label for="firstName">First Name</label>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12">    
        <?php echo $this->Form->input('firstName',
            array(
                'label' => false,
                'type' => 'text',
            )
        );
        ?>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12 label">
             <label for="lastName">Last Name</label>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12">
            <?php echo $this->Form->control('lastName',
            array(
                'label' => false,
                'type' => 'text',
            )
        );
        ?>
        </div>
    </div>
     <div class="form row">
        <div class="col-md-12 label">
             <label for="username">Username</label>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12">
            <?php echo $this->Form->control('username',
            array(
                'label' => false,
                'type' => 'text',
            )
        );
        ?>
        </div>
    </div>
    <div class="form row">
         <div class="col-md-12 label">
             <label for="email">Email</label>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12">
            <?php echo $this->Form->control('email',
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
            <?php echo $this->Form->control('password',
            array(
                'label' => false,
                'type' => 'password',
            )
        );
        ?>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12 label">
             <label for="city">City</label>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12">
            <?php echo $this->Form->control('city',
            array(
                'label' => false,
                'type' => 'text',
            )
        );
        ?>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12 label">
             <label for="address">Address</label>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12">
            <?php echo $this->Form->control('address',
            array(
                'label' => false,
                'type' => 'textarea',
            )
        );
        ?>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12 label">
             <label for="country">Country</label>
        </div>
    </div>
    <div class="form row">
        <div class="col-md-12">
            <?php echo $this->Form->control('country',
            array(
                'label' => false,
                'type' => 'text',
            )
        );
        ?>
        </div>
    </div>
    <div class="form row" align="center">
        <div class="col-md-12">
            <?php echo $this->Form->input('Register',
            array(
                'label' => false,
                'type' => 'submit',
            )
        );
        ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
