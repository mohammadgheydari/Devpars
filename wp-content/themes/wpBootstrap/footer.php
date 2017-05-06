        <footer class="myFooter">
            <div class="container">
                <div class="row">
                       
                    <div class="col-sm-3">
                        <h5>Get started</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Sign up</a></li>
                            <li><a href="#">Downloads</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5>About us</h5>
                        <ul>
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5>Support</h5>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Help desk</a></li>
                            <li><a href="#">Forums</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 info">
                        <h5>Information</h5>
                        <p> Lorem ipsum dolor amet, consectetur adipiscing elit. Etiam consectetur aliquet aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                    </div>
                </div>
            </div>
            <div class="second-bar">
                <div class="container">
                 
                        
                    <h2 class="logo">&copy; <?php echo Date('Y'); ?> - <a href="#"> <?php bloginfo('name'); ?> </a></h2>
                    <div class="social-icons">
                        <a href="#" class="youtube"><i class="ion-social-youtube"></i></a>
                        <a href="#" class="instagram"><i class="ion-social-instagram"></i></a>
                        <a href="#" class="twitter"><i class="ion-social-twitter"></i></a>
                        <a href="#" class="facebook"><i class="ion-social-facebook"></i></a>
                        <a href="#" class="google"><i class="ion-social-googleplus"></i></a>
                    </div>
                </div>
            </div>
            
        </footer>
    </div>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
</body>
</html>