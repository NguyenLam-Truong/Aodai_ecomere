<?php include_once '../../inc/header_page.php'; ?>   
  <section id="main" class="login entire_width">
    <div class="container_12">      
       <div id="content">
		<div class="grid_12">
			<h1 class="page_title">Login or Create an Account</h1>
		</div><!-- .grid_12 -->
		
		<div class="grid_6 new_customers">
			<h2>New Customers</h2>
			<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
			<div class="clear"></div>
			<a href="?act=register"><button class="account">Create An Account</button></a>
            </div><!-- .grid_6 -->
		
		<div class="grid_6">
			<?php
			if(isset($erro)) {
				echo $erro;
			}
			
			?>
			<form class="registed" method="post" action="?act=login">
				<h2>Registed Customers</h2>
							
				<p>If you have an account with us, please log in.</p>
							
				<div class="email">
					<strong>Email Adress:</strong><sup class="surely">*</sup><br/>
					<input type="email" name="email_login" class="" value="" />
				</div><!-- .email -->
							
				<div class="password">
					<strong>Password:</strong><sup class="surely">*</sup><br/>
					<input type="text" name="password_login" class="" value="" />
					<a class="forgot" href="#">Forgot Your Password?</a>
				</div><!-- .password -->
				
				<div class="remember">
					<input class="niceCheck" type="checkbox" name="Remember_password" />
					<span class="rem">Remember password</span>
				</div><!-- .remember -->
				
				<div class="submit">										
					<input type="submit" name="login" value="Login" />
					<sup class="surely">*</sup><span>Required Field</span>
				</div><!-- .submit -->
			</form><!-- .registed -->
                </div><!-- .grid_6 -->
       </div><!-- #content -->
       
      <div class="clear"></div>
    </div><!-- .container_12 -->
  </section><!-- #main -->
  
  <div class="clear"></div>
<?php include_once '../../inc/footer_page.php'; ?> 
</body>
</html>