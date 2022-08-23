<?php include_once '../../inc/header_page.php'; ?>   
  <section id="main" class="login entire_width">
    <div class="container_12">      
       <div id="content">
		<div class="grid_12">
			<h1 class="page_title">Register Account</h1>
		</div><!-- .grid_12 -->	
		<div class="grid_6 new_customers">
			<h2>Hello new Customer !</h2>
			<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
			<div class="clear"></div>
			<a href="?act=register"><button class="account">Login now !</button></a>
            </div><!-- .grid_6 -->
		<div class="grid_6">
			<form class="registed" action="?act=register_account" method="POST" enctype="multipart/form-data">
				<h2>Registed Customers</h2>	
				<div class="email">
					<strong>Email Adress:</strong><sup class="surely">*</sup><br/>
					<input type="email" name="email_user" class="" value="" />
					<small></small>
				</div><!-- .email -->
							
				<div class="password">
					<strong>Password:</strong><sup class="surely">*</sup><br/>
					<input type="text" name="password_user" class="" value="" />
					<small></small>
				</div><!-- .password -->
				<div class="password">
					<strong>Re-enter Password:</strong><sup class="surely">*</sup><br/>
					<input type="text" name="re_password_user" class="" value="" />
					<small></small>
				</div><!-- .password -->
				<div class="email">
					<strong>Address:</strong><sup class="surely">*</sup><br/>
					<input type="text" name="address_user" class="" value="" />
					<small><?php if(!empty($erro)){echo  $erro;} ?></small>
				</div><!-- .email -->
							
				<div class="password">
					<strong>Avatar:</strong><sup class="surely">*</sup><br/>
					<input type="file" name="avatar_user" class="" value="" />
					<small></small>
				</div><!-- .password -->
				<div class="email">
					<strong>Phone:</strong><sup class="surely">*</sup><br/>
					<input type="text" name="phone_user" class="" value="" />
					<small></small>
				</div><!-- .email -->
							
				<div class="password">
					<strong>Username:</strong><sup class="surely">*</sup><br/>
					<input type="text" name="username_user" class="" value="" />
					
					<small></small>
				</div><!-- .password -->
				<div class="email">
					<strong>Name:</strong><sup class="surely">*</sup><br/>
					<input type="text" name="name_user" class="" value="" />
					<small></small>
				</div><!-- .email -->
				<div class="submit">										
					<input type="submit" name="insert_account" value="REGISTER" />
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