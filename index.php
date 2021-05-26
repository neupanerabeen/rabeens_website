
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Rabeens Technologies</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<link rel="stylesheet" href="static/css/style.css"/>
	<!-- <link rel="stylesheet" href="static/css/style.css"/> -->
</head>
<body>
	<div id="topBar">
		<div class = "container-fluid">
			<div class = "row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

					<a href="">
						<span class="fa fa-map-marker">
						</span>
						<span>
							Kathmandu
						</span>
					</a>


					<a href="tel:+9779841497332">
						<span class="fa fa-phone">
						</span>
						<span>
							9841497332
						</span>
					</a>
					<a href="mailto:info@rabeens.com">
						<span class="fa fa-envelope-open">
						</span>
						<span>
							info@rabeens.com
						</span>
					</a>


				</div>
			</div>
		</div>
	</div>

	<div id="header">
		<div class="container-fluid">

			<div class = "row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					<span
						id="brand"
					>
						<div
							id="brand-logo-wrapper"
						>
						<img 
							src = "static/images/rabeens-logo.png" 
							id="brand-logo" 
							alt = "RABEENS"
						/>
						</div>
					</span>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
					<div class="container-fluid">
						<div class = "row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div id="navBar">
									<span										
										onclick="return toggleNavBarEventHandler()"  
										class="toggleNavBar d-md-none">
										<span class="fa fa-bars">
										</span>
									</span>

									<span class="d-none d-md-block">
										About US
									</span>
									<span class="d-none d-md-block">
										Contact US
									</span>
									<span class="d-none d-md-block">
										Services
									</span>
<!-- 									<span  id= "toggleNavBarMini" class="d-md-none">
										<span class="fa fa-times">
										</span>
									</span> -->

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="body">
		<div class="container-fluid">

			<div class = "row d-none d-md-block">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div  id="sliderBox">

						<div id="rabeensCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#rabeensCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#rabeensCarousel" data-slide-to="1"></li>
								<li data-target="#rabeensCarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="" src="static/images/front_image.png" alt="Product Development">
									<!--<div class="carousel-caption d-none d-md-block">-->
										<!-- <h5>Product Development</h5> -->
									<!--	<p>Lets build something cool!</p>-->
									<!--</div>-->
								</div>
								<div class="carousel-item">
									<img class="" src="static/images/front_image.png" alt="Product Development">
									<!--<div class="carousel-caption d-none d-md-block">-->
										<!-- <h5>Product Development</h5> -->
									<!--	<p>Lets build something cool!</p>-->
									<!--</div>-->
								</div>
								<div class="carousel-item">
									<img class="" src="static/images/front_image.png" alt="Product Development">
									<!--<div class="carousel-caption d-none d-md-block">-->
										<!-- <h5>Product Development</h5> -->
									<!--	<p>Lets build something cool!</p>-->
									<!--</div>-->
								</div>

							</div>
							<a class="carousel-control-prev" href="#rabeensCarousel" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#rabeensCarousel" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>

					 
				</div>
			</div>

			<div class = "row box shadeBox" id="servicesBox">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<div class="container-fluid">
						<div class = "row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">

								<div class="card border-light mb-3 serviceCard" style="">
									<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
									<span class="fa fa-cubes serviceIcon">
									</span>
									<div class="card-body">
										<h2 class="card-title serviceTitle">
											Product Development
										</h2>
										<p class="card-text serviceDescription">
											Your business needs competitive solutions that we can provide with our expertise, transparent process and contemporary approach to actualize your vision into a product
										</p>
										<p class="card-text serviceDescription">
											<ul class="serviceList">
												<li>Webapp Development</li>
												<li>Mobile app development</li>
												<li>Website Development</li>
											</ul>
										</p>
										<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">

								<div class="card border-light mb-3 serviceCard" >
									<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
									<span class="fa fa-lightbulb serviceIcon">
									</span>
									<div class="card-body">
										<h2 class="card-title serviceTitle">
											Data Science
										</h2>
										<p class="card-text  serviceDescription">
											Your data, of any form, can accelerate your business growth if you extract insights from it. We love to play with data of any volume, variety, velocity and veracity

										</p>
										<p class="card-text  serviceDescription">
											<ul class="serviceList">
												<li>Data Engineering</li>
												<li>Data Visualization</li>
												<li>ML Operationalization</li>
											</ul>
										</p>
										<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
								<div class="card border-light mb-3 serviceCard" style="">
									<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
									<span class="fa fa-coffee serviceIcon">
									</span>
									<div class="card-body">
										<h2 class="card-title serviceTitle">
											Consulting
										</h2>
										<p class="card-text  serviceDescription">
											Our wide range of expertise can help you solve your business needs. We provide consulting services on:
										</p>
										<p class="card-text  serviceDescription">
											<ul class="serviceList">
												<li>Big Data</li>
												<li>Cloud Computing</li>
												<li>Network and Infrastructure Setup</li>
												<li>Linux Server Administration</li>
											</ul>
											and more ...
										</p>
										<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>

			<div class = "row box" id="assetsBox">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<h3 class="title">Our Products</h3>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<div class="container-fluid">
						<div class = "row">
							<!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">-->

							<!--	<div class="card border-light mb-3 serviceCard" style="">-->
							<!--		 <img class="card-img-top" src="static/images/bbsys_256xlogo.png" alt="Card image cap"> -->
									<!--<span class="fa fa-cubes serviceIcon">-->
									<!--</span>-->
							<!--		<div class="card-body">-->
							<!--			<h2 class="card-title serviceTitle">-->
							<!--				BBSYS-->
							<!--			</h2>-->
							<!--			<p class="card-text serviceDescription">-->
							<!--				Student Information System-->
							<!--			</p>-->
							<!--			<p class="card-text serviceDescription">-->
							<!--				<ul class="serviceList">-->
							<!--					<a href="http://www.bbsys.rabeens.com" target="new">BBSYS</a>-->
							<!--				</ul>-->
							<!--			</p>-->
										<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
							<!--		</div>-->
							<!--	</div>-->
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
    							<div class="card border-light mb-3">
    							    <div class="pt-1 pb-1 pl-1 pr-1">
                                      <img class="card-img-top" src="static/images/bbsys_256xlogo.png" alt="BBSYS"/>
                                    </div>
                                      <div class="card-body">
                                        <h5 class="card-title">BBSYS</h5>
                                        <p class="card-text serviceDescription">Centralized and consolidated web-application to capture student's demographics, grades, scheduling, attendance, billing, discipline & food service modules for school management. Multi-facet application for parents, students, teachers and school administrators.</p>
                                        <a class='btn btn-primary' href="http://www.bbsys.rabeens.com" target="new">BBSYS</a>
                                      </div>
                                </div>
    						</div>
						
							
							
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
        							<div class="card border-light mb-3 " >
        							    <div class="pt-2 pb-2 pl-1 pr-1">
                                          <img class="card-img-top" src="static/images/DQENGINE.png" alt="DQEngine">
                                        </div>
                                          <div class="card-body">
                                            <h5 class="card-title">DQENGINE</h5>
                                            <p class="card-text serviceDescription">Tool to run sanity check on the data at large scale.</p>
                                            <a class='btn btn-primary' href="" target="new">DQENGINE</a>
                                          </div>
                                    </div>
        						</div>
						
						
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
        							<div class="card border-light mb-3" >
        							    <div class="pt-2 pb-2 pl-1 pr-1">
                                          <img class="card-img-top" src="static/images/purvaj.png" alt="Rabeens ERP">
                                        </div>
                                          <div class="card-body">
                                            <h5 class="card-title">Rabeens ERP</h5>
                                            <p class="card-text serviceDescription">
                                            	Suite of application modules bundled to digitize the operations of a trading or manufacturing company featuring purchase, sales, inventory, POS, accounting, CRM and more.
                                            </p>
                                            <!--<a class='btn btn-primary' href="" target="new">Rabeens ERP</a>-->
                                          </div>
                                    </div>
        						</div>
						</div>
					</div>
				</div>
			</div>

			<div class = "row box shadeBox" id="contactBox">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
					<div
						class="contactBoxDetails"
					>
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
	<div class="modal" id="contact_modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Thanks</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p id="contact_msg_body">Thanks for contacting us. We will get back to you.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    

    
	    
	</div>
	<script src = "static/js/sticky_header.js" ></script>
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

</body>
</html>