		<!--------- footer --------->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="footer-col-1">
						<h3>Download Our App</h3>
						<p>Download App for Android and ios mobile phone</p>
						<div class="app-logo">
							<img src="assets/images/playstore.png" alt="Snow" width="50px" height="110px">
							<img src="assets/images/app_store.png" alt="Snow" width="50px" height="110px">
						</div>
					</div>
					<div class="footer-col-2">
						<img src="assets/images/Logo (4).jpeg" alt="Snow">
						<p>Our Purpose is To Sustainably Make the Pleasure and Benefits of Wine Accessible to the World</p>
					</div>
					<div class="footer-col-3">
						<h3>Useful Links</h3>
						<ul>
							<li>Coupons</li>
							<li>Blog Post</li>
							<li>Return Policy</li>
							<li>Join Affiliate</li>
						</ul>
					</div>
					<div class="footer-col-4">
						<h3>Follow us</h3>
						<ul>
							<li>Facebook</li>
							<li>Twitter</li>
							<li>Instagram</li>
							<li>Youtube</li>
						</ul>
					</div>
				</div>
				<hr>
				<p class="copyright">Copyright 2024 - Mary Rose</p>
			</div>
		</div>
	
    <!----------js for toggle menu----------->
    <script>
    	var MenuItems = document.getElementById("MenuItems");

    	MenuItems.style.maxHeight = "0px";

    	function menutoggle(){
    		if(MenuItems.style.maxHeight == "0px")
    		{
    			MenuItems.style.maxHeight = "200px"
    			document.getElementById("nav-exit").style.visibility = "";
    		}
    		else
    		{
    		    MenuItems.style.maxHeight = "0px"
    		    document.getElementById("nav-exit").style.visibility = "collapse";	
    		}
    	}
    </script>
  </body>
</html>