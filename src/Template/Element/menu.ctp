     <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                        <?php echo $this->Html->link(
                            'Home',
                            ['controller' => 'Pages', 'action' => 'home']
                        );
                        ?>
                        </li>
                        <li>
                        <?php echo $this->Html->link(
                            'Shop',
                            ['controller' => 'Shop', 'action' => 'index']
                        );
                        ?>
                        </li>
                        <li><a href="single-product">Single product</a></li>
                        <li>
                        <?php echo $this->Html->link(
                            'Cart',
                            ['controller' => 'Cart', 'action' => 'index']
                        );
                        ?>
                        </li>
                        <li><a href="checkout">Checkout</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Others</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->