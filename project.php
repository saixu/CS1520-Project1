<!DOCTYPE html>
<html lang= "en">
	<head>
		<meta charset= "UTF-8">
		<link rel= "stylesheet" href= "css/css.css">
	</head>
	<body>
		<ul class= "head_line">
			<li class= "head_li" id= "resume">Resume</li>
			<li class= "head_li" id= "list">Company List</li>
		</ul>

		<div id= "first_border"></div>


		<div id= "resume_show">
		<div class= "topbox">
			<div id= "name">SAI XU</div>
			<div id= "email">sax2@pitt.edu</div>
		</div>
		<div class= "border"></div>
		<div class= "content">
			<div class= "education">
				<h3>Education:</h3>
				<div class= "college">
					<a href= "http://www.pitt.edu/" id= "college_name">University of Pittsburgh</a>
					<p>GPA: 3.56/4.00</p>
					<P>Pittsburgh, PA</P>
				</div>
				<div class= "major">
					<p>Major: Computer Science</p>
				</div>
			</div>
			<div class= "course">
				<h4>RELEVANT COURSEWORK: </h4>
				<div class= "courses">
					<p>Data Stucture, Algorithm, Web Application, Intermediate Java, Assembly Language</p>
				</div>
			</div>
			<div class= "experience">
				<h4>WORK EXPERIENCE: </h4>
				<div class= "sap">
					<h5>Network Visualization Intern</h5>
					<ul class= "exp">
						<li>Work with HANA Graph Engine in the backend</li>
						<li>Convert the existing SAPUI5/d3 user interface to a Fiori application</li>
					</ul>
				</div>
			</div>
			<div class= "skill">
				<h4 id= "skill_head">SKILLS:</h4>
				<ul id= "ul">
					<li class= "li">Programming Language
						<ul class= "ul1">
							<li>Java</li>
							<li>C</li>
							<li>HTML</li>
							<li>CSS</li>
						</ul>
					</li>
					<li class= "li">DataBase
						<ul class= "ul1">
							<li>SQL</li>
							<li>Oracl</li>
							<li>NYSQL</li>
						</ul>
					</li>
					<li class= "li">Proficient in Microsoft Office
						<ul class= "ul1">
							<li>Operating System</li>
							<li>Window</li>
							<li>Linux</li>
						</ul>
					</li>
					<li class= "li">Language
						<ul class= "ul1">
							<li>Chinese</li>
							<li>English</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

		</div>
	

		<div id= "list_show">
		<div class= "search">
 			
 			<div class= "jobform">
 				<div class="logo">
					<h4>Show the available job for your: </h4>
				</div>
	 			<form class="search-form" action= "result.php" method= "post" id= "search-form">
	 				<lable>Company Name:</lable><br>
	 				<input type="text" class="search-text" name="name" id= "search_input1"/>
	 			</form>
	 			<button class="search-button" id= "button">Search</button>
	 		</div>

	 		<div class= "form-return">
	 			<ul id= "result">
	 				
	 			</ul>
	 		</div>
		</div>






		<div class= "database"> 
			<h4>Please input the company you are intersted in, we can store it in our database</h4>
			<form action= "database.php" method= "post">
				<lable>Company Name:</lable><br>
	 			<input type="text" class="database-text" name="name" id= "database_input1"/>
	 			<br>
	 			<lable>Position:</lable><br>
	 			<input type="text" class="database-text" name="position" id= "database_input2"/>
	 			<br>
	 			<lable>Salary:</lable><br>
	 			<input type="text" class="database-text" name="salary" id= "database_input3"/>
	 			<br>
	 			<lable>Location:</lable><br>
	 			<input type="text" class="database-text" name="location" id= "database_input4"/>
	 			<br><br>
	 			<input type="submit" class="database-text" id= "database_submit" value= "submit"/>
			</form>
		</div>


		<div class= "companybox">
			<h4>Some companies you may interest in: </h4>
			<div class= "company">
				<p>IT Company</p>
			</div>
			<div class= "company">
				<p>Fiance Company</p>
			</div>
			<div class= "company">
				<p>Medical Company</p>
			</div>
		</div>

		<div id= "show">
		</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src= js/js.js></script>
	</body>
</html>