<div class="container-fluid">
	<div class = "row box shadeBox" id="contactBox">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
			<div class="contactBoxDetails">
				<p>
					Kathmandu, Nepal
				</p>
				<p>
					+977-9841497332
				</p>
				<p>
					For any enquiry:
					<a href="mailto:info@rabeens.com">info@rabeens.com
					</a>
				</p>

			</div>
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
					<small id="emailHelp" class="form-text text-muted">
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
				<input class="btn btn-primary" type="submit" id="submit_btn" value="Submit" onclick = "return send_mail()"/>
			</div>

		</div>
	</div>
	</div>

	<div class = "row" id="subfooterBox">
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

	</div>

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
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			RABEENS Technologies, 2020
		</div>
	</div>
</div>
</div>
<script>
	    function send_mail(){
	            let data =new FormData()
                data.append("name", document.getElementById("name_txt").value)
                data.append("email", document.getElementById("email_txt").value)
                data.append("service", document.getElementById("service_option").value)
                data.append("message", document.getElementById("msg_txt").value)
                fetch("http://rabeens.com/mail.php", {
                    method: 'POST',
                    body: data,
                    mode: 'no-cors',
                })
                .then(res=>res.json())
                .then(res=>{
                    let title = "Thanks"
                    if(res.status !== 200){
                        title = "Error"
                    }
                    $("#contact_modal .modal-title").text(title)
                    $("#contact_modal #contact_msg_body").text(res["msg"])
                    $("#contact_modal").modal("show")
                })
                .catch(err=>{
                    console.log("Some error occured while sending mail!")
                    console.log(err)
                });

	           return false;
	    }
	</script>
	<script src = "static/js/sticky_header.js" ></script>
	
</body>
</html>