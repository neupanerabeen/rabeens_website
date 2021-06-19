<div class="container-fluid">
	<div class = "row box shadeBox" id="contactBox">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
			<!-- <div>
				<a href="https://rabeens.wordpress.com/2020/11/28/project-planning/" target="new" class="">
					Project Planning
				</a>

			</div>
			<div>
				Youtube Channel
			</div>
			<div>
				<a href="" target="new" class="">
					Blogs
				</a>
			</div> -->

		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
			<div class="title">
				<!--Reach out to us!-->
			</div>

			<div id="contact_form">
				<div class="form-group">
					<label for = "name_txt">Name</label>
					<input class="form-control" type="text" id="name_txt" placeholder = "Name"/>
				</div>

				<div class="form-group">
					<label for = "email_txt">Email</label>
					<input class="form-control" type="email" id="email_txt" placeholder = "Email"/>
					<small id="emailHelp" class="form-text">
						We'll never share your email with anyone else!
					</small>
				</div>

				<div class="form-group">
					<label for = "service_option">Service</label>
					<select 
						id="service_option"
						class="form-control"
					>
						<option value="Data Science">Data Science</option>
						<option value="Product Development">Product Development</option>
						<option value="Rabeens ERP">Rabeens ERP</option>
						<option value="BBSYS">BBSYS</option>
						<option value="Consulting">Consulting</option>
						<option value="Consulting">Training</option>
						<option value="Consulting">Other</option>
					</select>
				</div>


			<div class="form-group">
				<label for = "msg_txt">Message</label>
				<textarea
				class="form-control"
				id="msg_txt"
				></textarea>
			</div>


			<div class="form-group">
				<!-- <label for = "email_txt">Email</label> -->
				<input class="btn btn-primary" type="submit" id="submit_btn" value="Submit" onclick = "return send_mail(this)"/>
			</div>

		</div>
	</div>
	</div>

<!-- 	<div class = "row" id="subfooterBox">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">

			<h3>
				Articles
			</h3>
			<div>
				<a href="https://rabeens.wordpress.com/2020/11/28/project-planning/" target="new" class="">
					Project Planning
				</a>

			</div>
			<div>
				Youtube Channel
			</div>
			<div>
				<a href="" target="new" class="">
					Blogs
				</a>
			</div>


		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
			<div>
				<span class="fa fa-facebook">
				</span>

			</div>
		</div>

	</div> -->

	<div class = "row" id="footerBox">
	<!-- 				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
				RABEENS Technologies, 2020
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
				<div>
					<span class="fa fa-facebook">
					</span>
					<span class="fa fa-linkedin">
					</span>
				</div>
			</div>
		</div> -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<span class="fa fa-facebook"></span>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			RABEENS Technologies, 2020
		</div>
	</div>
</div>
</div>
	<script src = "static/js/sendMail.js"></script>
	<script src = "static/js/sticky_header.js" ></script>
	<script src = "static/js/scroll_welcomeCard.js" ></script>
	
</body>
</html>