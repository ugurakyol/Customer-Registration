
<body>
	<header role="banner"> 
		<div id="cd-logo"><a href="#0"><img src="img/cd-logo.svg" alt="Logo"></a> The Power of Engineering </div>

		<nav class="main-nav">
			<ul>
				<!-- ссылки на вызов форм -->
				<li><a class="cd-signin" href="#0">Login</a></li>
				<li><a class="cd-signup" href="#0">Sign up</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="cd-intro">
		<h1></h1>
		<div class="cd-nugget-info">
		@if(count($errors)>0)
@foreach($errors->all() as $error)
{{$error}}
<br/>
@endforeach
@endif
		</div>
	</div>

	<div class="cd-user-modal"> <!-- все формы на фоне затемнения-->
		<div class="cd-user-modal-container"> <!-- основной контейнер -->
			<ul class="cd-switcher">
				<li><a href="#0">Login</a></li>
				<li><a href="#0">Sign up</a></li>
			</ul>

			<div id="cd-login"> <!-- форма входа -->
				<form class="cd-form" method = "post" action ="{{route('login')}}" >
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email"  name = "email" type="email" placeholder="E-mail">
						<span class="cd-error-message">There is error!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text" name = "password"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">There is error!</span>
					</p>


					<p class="fieldset">
						<button type="submit" class="full-width" type="submit" value="Log in">Log in </button>
					</p>
					{{csrf_field()}}

				</form>
				
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- форма регистрации -->
				<form class="cd-form" action = "{{route('postRegistration')}}" method="POST">
					<p class="fieldset">
		

						<label class="image-replace cd-username" for="signup-username"  >User Name</label>
						<input class="full-width has-padding has-border" id="signup-username" name ="name" type="text" placeholder="Write user name">
						<span class="cd-error-message">There is error!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-usersurname">User Surname</label>
						<input class="full-width has-padding has-border" id="signup-usersurname"  name = "surname" type="text" placeholder="Write user surname">
						<span class="cd-error-message">There is error!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-sex" >User Sex</label>
						<input class="full-width has-padding has-border" id="signup-sex" name = "sex" type="text" placeholder="Write user sex">
						<span class="cd-error-message">There is error!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-yearofbirth" >User Year of Birth</label>
						<input class="full-width has-padding has-border" id="signup-yearofbirth" name = "yearOfBirth" type="date" min="1910-01-01" placeholder="Write user year of birth">
						<span class="cd-error-message">There is error!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-address" >User Address</label>
						<input class="full-width has-padding has-border" id="signup-address" name = "address" type="text" placeholder="Write user address">
						<span class="cd-error-message">There is error!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-phonenumber" >User Phone Number</label>
						<input class="full-width has-padding has-border" id="signup-phonenumber" name = "phoneNumber" type="text" placeholder="Write user phone number">
						<span class="cd-error-message">There is error!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email"  name = "email" type="text" placeholder="E-mail">
						<span class="cd-error-message">There is error!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password" >Password</label>
						<input class="full-width has-padding has-border" id="signup-password" name = "password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">There is error!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password" >Confirm Password</label>
						<input class="full-width has-padding has-border" id="signup-password" name = "confirmPassword" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">There is error!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree with <a href="#0">Agreement</a></label>
					</p>

					<p class="fieldset">
						<button type="submit" class="full-width has-padding" type="submit"  value="Create Account">Create Account</button>
					</p>
				{{csrf_field()}}
				
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->