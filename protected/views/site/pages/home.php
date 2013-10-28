<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Home';
$this->breadcrumbs=array('Home page');

?>
<div class="page">
	<div class="page_title">
		<h1 id="home_page_title">Home Page</h1>
	</div>
	<div class="page_content">
		<div class="home_common_content">
			<h4>Welcome to our site!</h4>
			<p>
				This is the Hairdressing Cabinet website of master-universal 
				<strong>Svetlana Skripacheva</strong><br>
				and master of manicure <strong>Maya Skripacheva</strong>.
			</p>
			<p>
				Below are you can read a brief desctiption of the site sections.
			</p>
		</div>
		<div class="home_content">
			<table>
				<tr>
					<td style="width:50%;">
						<div class="home_sections_header">
							<img src="../../images/service.png">
							<h2>Services</h2>
						</div>
						<div class="home_sections_content">
							Full list of services, provided in our Hairdressing Cabinet.
						</div>
					</td>					
					<td>
						<div class="home_sections_header">
							<img src="../../images/calculator.png">
							<h2>Price</h2>
						</div>
						<div class="home_sections_content">
							Price list on the performed services.
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="home_sections_header">
							<img src="../../images/newspaperb.png">
							<h2>News</h2>
						</div>
						<div class="home_sections_content">
							Painting technologies news, hair care news, and not just.
						</div>
					</td>
					<td>
						<div class="home_sections_header">
							<img src="../../images/articles.png">
							<h2>Articles</h2>
						</div>
						<div class="home_sections_content">
							Articles about cutting, styling, laying and many usefull materials.
						</div>
					</td>
				</tr>
				<!--TODO: разкомментировать для добавления на главной странице информации о галерее и календаре-->
				<!--<tr>
					<td>
						<div class="home_sections_header">
							<img src="../../images/galery.png">
							<h2>Gallery</h2>
						</div>
						<div class="home_sections_content">
							Gallery of performed works examples by makers of Hairdressing Cabinet.
						</div>
					</td>
					<td>
						<div class="home_sections_header">
							<img src="../../images/calendar.png">
							<h2>Sign Up</h2>
						</div>
						<div class="home_sections_content">
							In this section, you can make an appointment with the master in time convenient to you.
						</div>
					</td>
				</tr>-->
				<tr>
					<td>
						<div class="home_sections_header">
							<img src="../../images/aboutcab.png">
							<h2>About Cabinet</h2>
						</div>
						<div class="home_sections_content">
							Address Hairdressing Cabinet, phone numbers, e-mail, the photo image of the facade of the building, location map.
						</div>
					</td>
					<td>
						<div class="home_sections_header">
							<img src="../../images/aboutus.png">
							<h2>About Us</h2>
						</div>
						<div class="home_sections_content">
							Briefly about the masters of Hairdressing Cabinet.
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="home_sections_header">
							<img src="../../images/mail.png">
							<h2>Contactes</h2>
						</div>
						<div class="home_sections_content">
							Feedback form for those who want to send us a message.
						</div>
					</td>
					<td>
						<div class="home_sections_header">
							<img src="../../images/entry.png">
							<h2>Login</h2>
						</div>
						<div class="home_sections_content">
							Section contains the forms to authorize registered users and register new users.
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>