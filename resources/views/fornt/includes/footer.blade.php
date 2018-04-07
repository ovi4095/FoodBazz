<div class="content" style="margin-top: 100px;">
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="images/logo/icon.png" style="width: 50px; margin: 0px; padding: 0px;">
                    @foreach($homepages as $hmpg)
                        <h2 class="logo"><a href="#">{{$hmpg->home_title}} </a></h2>
                    @endforeach
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="main.html">Home</a></li>
                        <li><a href="registration.html">Sign up</a></li>

                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Contact</h5>
                    <ul>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#"> Google+</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2017 Copyright Students of DIU </p>
        </div>
    </footer>
</div>
