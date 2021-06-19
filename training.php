	<?php 
		require 'includes/header.php';
		// require 'includes/topbar.php';
		require 'includes/menuBar.php';
	?>


	<?php 
		$training_programs = array(
			array(
				"title" => "Python",
				"description" => "Python is a multi-paradigm, dynamic, interpreted, high-level, general purpose programming language. Python has gained popularity due to its Python  This training is intended ",
				"content"=>array(
					"<ul>
						<li>Introduction To Python 
						<ul>
							<li>Installation and Working with Python 
							<li>Understanding Python variables 
							<li>Python basic Operators 
							<li>Understanding python blocks 
						</ul>

						<li>Python Data Types 
						<ul>
							<li>Declaring and using Numeric data types: int, float, complex 
							<li>Using string data type and string operations 
							<li>Defining list and list slicing 
							<li>Use of Tuple data type 
						</ul>

						<li>Python Program Flow Control
						<ul>
							<li>Conditional blocks using if, else and elif 
							<li>Simple for loops in python 
							<li>For loop using ranges, string, list and dictionaries 
							<li>Use of while loops in python 
							<li>Loop manipulation using pass, continue, break and else 
							<li>Programming using Python conditional and loops block 
						</ul>

						<li>Python Functions, Modules And Packages 
						<ul>
							<li>Organizing python codes using functions 
							<li>Organizing python projects into modules 
							<li>Importing own module as well as external modules 
							<li>Understanding Packages 
							<li>Powerful Lamda function in python 
							<li>Programming using functions, modules and external packages 
						</ul>

						<li>Python String, List And Dictionary Manipulations 
						<ul>
							<li>Building blocks of python programs 
							<li>Understanding string in build methods 
							<li>List manipulation using in build methods 
							<li>Dictionary manipulation 
							<li>Programming using string, list and dictionary in build functions
						</ul>

						<li>Python File Operation
						<ul>
							<li>Reading config files in python 
							<li>Writing log files in python 
							<li>Understanding read functions, read(), readline() and readlines() Understanding write functions, write() and writelines() Manipulating file pointer using seek 
							<li>Programming using file operations 
						</ul>

						<li>Python Object Oriented Programming  
						<ul>
							<li>Concept of class, object and instances
							<li>Constructor, class attributes and destructors 
							<li>Real time use of class in live projects 
							<li>Inheritance , overlapping and overloading operators Adding and retrieving dynamic attributes of classes Programming using Oops support 
						</ul>

						<li>Python Regular Expression 
						<ul>
							<li>Powerful pattern matching and searching 
							<li>Power of pattern searching using regex in python Real time parsing of networking or system data using regex Password, email, url validation using regular expression Pattern finding programs using regular expression 
						</ul>

						<li>Python Exception Handling 
						<ul>
							<li>Avoiding code break using exception handling 
							<li>Safe guarding file operation using exception handling Handling and helping developer with error code 
							<li>Programming using Exception handling 
						</ul>

						<li>Python Database Interaction 
						<ul>
							<li>SQL Database connection using python 
							<li>Creating and searching tables 
							<li>Reading and storing config information on database Programming using database connections 
						</ul>

						<li>Python Multithreading 
						<ul>
							<li>Understanding threads
							<li>Forking threads 
							<li>Synchronizing the threads 
							<li>Programming using multithreading 
						</ul>
						<li>Project Work (flask framework)
						</ul>"
				)
			),

			array(
				"title" => "Computer Networking Bootcamp",
				"description" => "This bootcamp is intended for undergrad students of ME/CS/IT or similar background with basic understanding of Computer Network terminologies. Bootcamp will expand to 2 days, one session a day. Each session will be of tentatively 3 hours, hence total bootcamp time will be of 6 hours.",
				"content"=>array(
					"<ul>
						<li>Networking Concepts
						<ul>
							<li>Server/Client
							<li>Point to Point (P2P)
						</ul>
						<li>TCP/IP models and OSI models
						<ul>
							<li>Layers of TCP/IP
						</ul>
						<li>Physical devices and its uses
						<ul>
							<li>Router, 
							<li>Switch, 
							<li>Hub, 
							<li>RJ45, 
							<li>RJ11, 
							<li>Keystone and communication jack, 
							<li>Crimper, 
							<li>Other networking tools
						</ul>

						<li>Cables, Routers, switch and firewall
						<ul>
							<li>Configuration of router
							<li>Configuration of firewall devices.
						</ul>

						<li>Short demo
						<ul>
							<li>Layer 1
							<li>Layer 2
							<li>Layer 3
						</ul>

						<li>Wireless and its types
						<ul>
							<li>Presentation on 2.4Ghz and 5Ghz
							<li>Explanation of station and AP bridge.
						</ul>

						<li> IP addresses, types and uses
						<ul>
							<li>IPV4
							<li>IPV6
							<li>Subnet mask.
						</ul>

						<li>Simple routing concepts
						<ul>
							<li>Static routing protocol
							<li>Dynamic routing protocol
						</ul>

						<li>LAN, VLAN AND VPN concept.
						<ul>
							<li>Introduction
							<li>Demo on VLAN
							<li>Demo on VPN using Mikrotik firewall.
							<li>Live demo of VPN, VLAN of a Multipurpose.
						</ul>
					</ul>"
				)
			),

			array(
				"title" => "Big Data Seminar",
				"description" => "This bootcamp is intended for undergrad students of ME/CS/IT or similar background with basic understanding of databases. Seminar is of 4 hours.",
				"content"=>array(
					"<ul>
						<li>Big Data Introduction
						<ul>
							<li>Growth of data
							<li>Types of data
							<li>3Vs
							<li>Storage, processing and analysis
							<li>Batch and streaming analysis
							<li>Olap vs oltp
							<li>Vertical vs horizontal scaling
							<li>Distributed systems
							<li>High availability and replication
							<li>Popular tools for big data
						</ul>

						<li>Types of databases
						<ul>
							<li>Relational database
							<li>NoSql
							<li>Graph databases
							<li>Key-value store
							<li>Document based databases
							<li>Column Oriented 
						</ul>

						<li>Kafka
						<ul>
							<li>Introduction
							<li>Pub-sub architecture
							<li>Producer, consumer, Topics, partitions
						</ul>

						<li>Hadoop ecosystem
						<ul>
							<li>Hdfs
							<li>Mapreduce
							<li>Sqoop
							<li>Flume
							<li>Hive
							<li>Hbase
						</ul>

						<li>Spark
						<ul>
							<li>Introduction
							<li>Spark vs hadoop
							<li>Spark ecosystem
						</ul>

						<li>Implementations and Use Cases
						<ul>
							<li>Big Data Project Development Basics
							<li>Big Data Project Deployment
							<li>Use cases from idea to Deployment
							<li>Banking Customer 360
							<li>Cyber security anomaly detection
						</ul>
					</ul>"
				)
			),
		);

	?>


<div id="body">
	<div class="container-fluid">

		<div class = "row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<h1 class='pageTitle'>Training</h1>
			</div>
		</div>




	<div class = "row box">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<p>
				We provide wide range of training, bootcamp and seminar on various emerging softwares and technologies.
			</p>
		</div>
		
		<?php 
			$counter = 0;
			foreach($training_programs as $program){
				$counter++;
				// var_dump($program);
				$targetCollapseId = "collapseExample".$counter;
				$targetCollapse = "#".$targetCollapseId;

		?>

		<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
  			<div>
  				<div class="trainingHeader">
  					<h2 class="trainingTitle">
  						<?php  echo $program["title"]; ?>
  					</h2>
  					<!-- <span 
  						class="btn btn-default viewDetails" 
  						type="button" 
  						data-toggle="collapse" 
  						data-target="<?php echo $targetCollapse; ?>" 
  						aria-expanded="false" 
  						aria-controls="collapseExample"
  					>
						View 
	  				</span> -->
  				</div>
  				<p>
  					<?php  echo $program["description"]; ?>
  				</p>
  				<p>
  					<span 
  						class="btn btn-primary viewDetails" 
  						type="button" 
  						data-toggle="collapse" 
  						data-target="<?php echo $targetCollapse; ?>" 
  						aria-expanded="false" 
  						aria-controls="collapseExample"
  					>
						View Course Details
						<span class="fa fa-caret-down"> 
	  				</span>
  				</p>
	  			
				<div class="collapse " id="<?php echo $targetCollapseId; ?>"  >
				  <!-- <div class="card card-body" aria-expanded="true"> -->
				  <!-- <div > -->
				  	<?php  
				  		foreach($program["content"] as $content){
				  			echo "<div>".$content."</div>";
				  		} 
				  	?>
				  	<span 
  						class="btn btn-primary viewDetails" 
  						type="button" 
  						data-toggle="collapse" 
  						data-target="<?php echo $targetCollapse; ?>" 
  						aria-expanded="false" 
  						aria-controls="collapseExample"
  					>
						Hide
						<span class="fa fa-caret-up"> 
	  				</span>
				  <!-- </div> -->
				 </div>
			</div>
		</div>



		<?php
			}
		?>


		
		</div>
	</div>
</div>


	<?php 

		require 'includes/footer.php';
	?>