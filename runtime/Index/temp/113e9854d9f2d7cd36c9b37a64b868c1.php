<?php /*a:2:{s:56:"C:\xampp\htdocs\git\blog\app\index\view\index\index.html";i:1677770347;s:59:"C:\xampp\htdocs\git\blog\app\index\view\layout\default.html";i:1677933634;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>张盼盼的博客</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        type="text/css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic"
        type="text/css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="/static/index/css/basic.css" />
    <link type="text/css" rel="stylesheet" href="/static/index/css/layout.css" />
    <link type="text/css" rel="stylesheet" href="/static/index/css/blogs.css" />
    <link type="text/css" rel="stylesheet" href="/static/index/css/line-awesome.css" />
    <link type="text/css" rel="stylesheet" href="/static/index/css/magnific-popup.css" />
    <link type="text/css" rel="stylesheet" href="/static/index/css/animate.css" />
    <link type="text/css" rel="stylesheet" href="/static/index/css/simplebar.css" />

    <!-- theme colors -->
    <!-- <link type="text/css" rel="stylesheet" href="/static/index/css/theme-colors/green.css" /> -->
    <!-- <link type="text/css" rel="stylesheet" href="/static/index/css/theme-colors/blue.css" /> -->
    <!--<link type="text/css" rel="stylesheet" href="/static/index/css/theme-colors/red.css" />-->
    <link type="text/css" rel="stylesheet" href="/static/index/css/theme-colors/orange.css" />
    <!--<link type="text/css" rel="stylesheet" href="/static/index/css/theme-colors/pink.css" />-->
    <!--<link type="text/css" rel="stylesheet" href="/static/index/css/theme-colors/purple.css" />-->

    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
    ﻿<div class="page">

	<!--
		Preloader
	-->
	<div class="preloader">
		<div class="centrize full-width">
			<div class="vertical-center">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div>
		</div>
	</div>

	<!--
		Header
	-->
	<header class="header">

		<!-- logo -->
		<div class="logo">
			<a href="#"><span>盼</span></a>
		</div>

		<!-- menu -->
		<div class="top-menu">
			<ul>
				<li class="active">
					<a href="#home-card">
						<span class="icon la la-home"></span>
						<span class="link">主页</span>
					</a>
				</li>
				<li>
					<a href="#about-card">
						<span class="icon la la-user"></span>
						<span class="link">关于</span>
					</a>
				</li>
				<?php if($showOther == '1'): ?>
				<li>
					<a href="#resume-card">
						<span class="icon la la-gear"></span>
						<span class="link">简历</span>
					</a>
				</li>
				<li>
					<a href="#works-card">
						<span class="icon la la-eye"></span>
						<span class="link">作品</span>
					</a>
				</li>
				<!-- <li>
					<a href="#blog-card">
						<span class="icon la la-newspaper-o"></span>
						<span class="link">项目</span>
					</a>
				</li> -->
				<li>
					<a href="#contacts-card">
						<span class="icon la la-envelope"></span>
						<span class="link">联系</span>
					</a>
				</li>
				<?php endif; ?>
			</ul>
		</div>

		<!-- Started socials -->
		<div class="social">
			<a target="_blank" href="#"><span class="icon la la-dribbble"></span></a>
			<a target="_blank" href="#"><span class="icon la la-facebook"></span></a>
			<a target="_blank" href="#"><span class="icon la la-github"></span></a>
			<a target="_blank" href="#"><span class="icon la la-stack-overflow"></span></a>
		</div>

		<!-- Mobile Menu -->
		<span class="menu-btn">
			<span class="m-line"></span>
		</span>

	</header>

	<!--
		Container
	-->
	<div class="container">

		<!--
			Card - Started
		-->
		<div class="card-inner card-started active" id="home-card">

			<!-- Started Background -->
			<div class="slide" style="background-image: url(/static/index/images/bg.jpg);"></div>

			<div class="centrize full-width">
				<div class="vertical-center">

					<!-- Started titles -->
					<div class="title"><span>Zhang</span> Panpan</div>
					<div class="subtitle">
						我 是
						<div class="typing-title">
							<p>一 个 <strong>后端 开发人员.</strong></p>
							<p>一 个 <strong>web 开发人员.</strong></p>
							<p>一 个 <strong>互联网民工.</strong></p>
							<p>一 个 <strong>摄影爱好者.</strong></p>
						</div>
						<span class="typed-title"></span>
					</div>

				</div>
			</div>

		</div>

		<!-- 
			Card - About
		-->
		<div class="card-inner" id="about-card">
			<div class="row card-container">

				<!--
					Card Wrap
				-->
				<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

					<!-- About Image -->
					<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6"
						style="background-image: url(/static/index/images/profile.jpg);"></div>

					<!--
						Inner Top
					-->
					<div class="content inner-top">
						<div class="row">
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
								<div class="title-bg">About Me</div>
								<div class="text">
									<p>
										<strong>你好，我是 盼盼</strong>，在上海的后端开发人员. <br />
										我有丰富的后端设计和开发经验 具备高并发处理能力，<br />
										熟悉缓存，能够独立完成服务器端开发，注重代码质量，<br />
										有着良好的业务逻辑知识和编码规范意识。我也擅长 <strong>php, python, golang, java,
											mysql, redis, html, css, jquery, bootstrap, vue.</strong>
									</p>
								</div>
								<div class="circle-bts">
									<a href="/static/cv/张盼盼的简历.pdf"><span><i class="icon la la-download"></i>下载简历</span></a>
									<a href="#"><i class="icon la la-github"></i></a>
									<a href="#"><i class="icon la la-stack-overflow"></i></a>
									<a href="#"><i class="icon la la-skype"></i></a>
								</div>
							</div>
						</div>
					</div>

					<!--
						Details - 个人情况
					-->
					<div class="content details">
						<div class="row">
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

								<!-- title -->
								<div class="title"><span>个人</span> 情况</div>

							</div>
						</div>

						<!-- Details items -->
						<div class="row details-items">
							<?php foreach($detailsItems as $vo): ?>
								<!-- Details item -->
								<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
									<div class="service-item card-box">
										<div class="icon"><?php echo htmlentities($vo['value']); ?></div>
										<!-- <div class="icon"><i class="la la-html5"></i></div> -->
										<div class="name"><?php echo htmlentities($vo['name']); ?></div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>

					</div>

					<?php if($showOther == '1'): ?>

					<!--
						Price Tables
					-->
					<div class="content pricing">
						<div class="row">
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

								<!-- title -->
								<div class="title"><span>Pricing</span> Tables</div>

							</div>
						</div>

						<!-- pricing items -->
						<div class="row pricing-items">

							<!-- pricing item -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
								<div class="pricing-item card-box">
									<div class="icon"><i class="la la-tachometer"></i></div>
									<div class="name">Basic</div>
									<div class="amount">
										<span class="dollar">$</span>
										<span class="number">22</span>
										<span class="period">hour</span>
									</div>
									<div class="feature-list">
										<ul>
											<li>Web Development</li>
											<li>Advetising</li>
											<li>Game Development</li>
											<li class="disable">Music Writing</li>
											<li class="disable">Photography <strong>new</strong></li>
										</ul>
									</div>
									<div class="lnks">
										<a href="#" class="lnk">Buy <span>Basic</span></a>
									</div>
								</div>
							</div>

							<!-- pricing item -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
								<div class="pricing-item card-box">
									<div class="icon"><i class="la la-rocket"></i></div>
									<div class="name">Pro</div>
									<div class="amount">
										<span class="dollar">$</span>
										<span class="number">48</span>
										<span class="period">hour</span>
									</div>
									<div class="feature-list">
										<ul>
											<li>Web Development</li>
											<li>Advetising</li>
											<li>Game Development</li>
											<li>Music Writing</li>
											<li>Photography <strong>new</strong></li>
										</ul>
									</div>
									<div class="lnks">
										<a href="#" class="lnk">Buy <span>Pro</span></a>
									</div>
								</div>
							</div>

						</div>

					</div>

					<!--
						Fun Fact
					-->
					<div class="content fuct">
						<div class="row">
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

								<!-- title -->
								<div class="title"><span>Fun</span> Facts</div>

							</div>
						</div>

						<!-- fuct items -->
						<div class="row fuct-items">

							<!-- fuct item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="fuct-item card-box">
									<div class="icon"><i class="la la-headphones"></i></div>
									<div class="name">47 Albumes Listened</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="fuct-item card-box">
									<div class="icon"><i class="la la-trophy"></i></div>
									<div class="name">15 Awards Won</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="fuct-item card-box">
									<div class="icon"><i class="la la-lightbulb-o"></i></div>
									<div class="name">54 Projects Completed</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="fuct-item card-box">
									<div class="icon"><i class="la la-flag-o"></i></div>
									<div class="name">10 Countries Visited</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="fuct-item card-box">
									<div class="icon"><i class="la la-book"></i></div>
									<div class="name">50+ Books Readed</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="fuct-item card-box">
									<div class="icon"><i class="la la-code"></i></div>
									<div class="name">100 000 Lines of Code</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="fuct-item card-box">
									<div class="icon"><i class="la la-smile-o"></i></div>
									<div class="name">49 Satisfied Customers</div>
								</div>
							</div>

							<!-- fuct item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="fuct-item card-box">
									<div class="icon"><i class="la la-bicycle"></i></div>
									<div class="name">1250 km Cycled</div>
								</div>
							</div>

						</div>

					</div>

					<!--
						Clients
					-->
					<div class="content clients">
						<div class="row">
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

								<!-- title -->
								<div class="title"><span>Our</span> Clients</div>

							</div>
						</div>

						<!-- client items -->
						<div class="row client-items">

							<!-- client item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="client-item card-box">
									<div class="image">
										<a target="_blank" href="#">
											<img src="/static/index/images/clients/client_1.png" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="client-item card-box">
									<div class="image">
										<a target="_blank" href="#">
											<img src="/static/index/images/clients/client_3.png" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="client-item card-box">
									<div class="image">
										<a target="_blank" href="#">
											<img src="/static/index/images/clients/client_4.png" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="client-item card-box">
									<div class="image">
										<a target="_blank" href="#">
											<img src="/static/index/images/clients/client_1.png" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="client-item card-box">
									<div class="image">
										<a target="_blank" href="#">
											<img src="/static/index/images/clients/client_3.png" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="client-item card-box">
									<div class="image">
										<a target="_blank" href="#">
											<img src="/static/index/images/clients/client_4.png" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="client-item card-box">
									<div class="image">
										<a target="_blank" href="#">
											<img src="/static/index/images/clients/client_1.png" alt="" />
										</a>
									</div>
								</div>
							</div>

							<!-- client item -->
							<div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
								<div class="client-item card-box">
									<div class="image">
										<a target="_blank" href="#">
											<img src="/static/index/images/clients/client_3.png" alt="" />
										</a>
									</div>
								</div>
							</div>

						</div>

					</div>

					<?php endif; ?>

				</div>

			</div>
		</div>

		<!-- 
			Card - Resume
		-->
		<div class="card-inner" id="resume-card">
			<div class="row card-container">

				<!--
					Card Wrap
				-->
				<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

					<!-- Resume Image -->
					<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6"
						style="background-image: url(/static/index/images/profile2.jpg);"></div>

					<!--
						Inner Top
					-->
					<div class="content inner-top">
						<div class="row">
							<div class=" col col-m-12 col-t-12 col-d-12 col-d-lg-12">
								<div class="title-bg">Resume</div>
							</div>
						</div>
					</div>

					<!--
						Resume
					-->
					<div class="content resume">
						<div class="row">
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

								<!-- title -->
								<div class="title"><span>My</span> Experience</div>

								<!-- resume items -->
								<div class="resume-items card-box">

									<!-- resume item -->
									<div class="resume-item">
										<div class="name">Web Development</div>
										<div class="date">2013-Present <span>|</span> Facebook Inc.</div>
										<p>
											Collaborate with creative and development teams on the execution of ideas.
										</p>
									</div>

									<!-- resume item -->
									<div class="resume-item">
										<div class="name">Front-end Developer</div>
										<div class="date">2011-2012 <span>|</span> Google Inc.</div>
										<p>
											Monitored technical aspects of the front-end delivery for several projects.
										</p>
									</div>

									<!-- resume item -->
									<div class="resume-item">
										<div class="name">Senior Developer</div>
										<div class="date">2009-2010 <span>|</span> Abc Inc.</div>
										<p>
											Optimize website performance using latest technology.
										</p>
									</div>

								</div>
							</div>
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

								<!-- title -->
								<div class="title"><span>My</span> Education</div>

								<!-- resume items -->
								<div class="resume-items card-box">

									<!-- resume item -->
									<div class="resume-item">
										<div class="name">Art University</div>
										<div class="date">2006-2008 <span>|</span> New York</div>
										<p>
											Bachelor's Degree in Computer Science ABC Technical Institute, Jefferson,
											Missouri
										</p>
									</div>

									<!-- resume item -->
									<div class="resume-item">
										<div class="name">Programming Course</div>
										<div class="date">2005-2006 <span>|</span> Paris</div>
										<p>
											Bachelor's Degree in Computer Science ABC Technical Institute, Jefferson,
											Missouri
										</p>
									</div>

									<!-- resume item -->
									<div class="resume-item">
										<div class="name">Web Design Course</div>
										<div class="date">2004-2005 <span>|</span> London</div>
										<p>
											Converted Photoshop layouts to web pages using HTML, CSS, and JavaScript
										</p>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!--
						Skills
					-->
					<div class="content skills">
						<div class="row">
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

								<!-- title -->
								<div class="title"><span>Personal</span> Skills</div>

								<!-- skills -->
								<div class="skills-list card-box">
									<ul>
										<li>
											<div class="name">Communication</div>
											<div class="progress">
												<div class="percentage" style="width:90%;"></div>
											</div>
										</li>
										<li>
											<div class="name">Team Work</div>
											<div class="progress">
												<div class="percentage" style="width:65%;"></div>
											</div>
										</li>
										<li>
											<div class="name">Leadership</div>
											<div class="progress">
												<div class="percentage" style="width:75%;"></div>
											</div>
										</li>
										<li>
											<div class="name">Language</div>
											<div class="progress">
												<div class="percentage" style="width:85%;"></div>
											</div>
										</li>
									</ul>
								</div>

							</div>
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">

								<!-- title -->
								<div class="title"><span>Professional</span> Skills</div>

								<!-- skills -->
								<div class="skills-list card-box">
									<ul>
										<li>
											<div class="name">WordPress</div>
											<div class="progress">
												<div class="percentage" style="width:90%;"></div>
											</div>
										</li>
										<li>
											<div class="name">PHP / MYSQL</div>
											<div class="progress">
												<div class="percentage" style="width:65%;"></div>
											</div>
										</li>
										<li>
											<div class="name">HTML / CSS / JS</div>
											<div class="progress">
												<div class="percentage" style="width:95%;"></div>
											</div>
										</li>
										<li>
											<div class="name">Photoshop</div>
											<div class="progress">
												<div class="percentage" style="width:85%;"></div>
											</div>
										</li>
									</ul>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!-- 
			Card - Works
		-->
		<div class="card-inner" id="works-card">
			<div class="row card-container">

				<!--
					Card Wrap
				-->
				<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

					<!-- Work Image -->
					<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6"
						style="background-image: url(/static/index/images/profile3.jpg);"></div>

					<!--
						Inner Top
					-->
					<div class="content inner-top">
						<div class="row">
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
								<div class="title-bg">Portfolio</div>
							</div>
						</div>
					</div>

					<!--
						Works
					-->
					<div class="content works">
						<div class="row">
							<div class="col col-m-12 col-t-5 col-d-5 col-d-lg-5">

								<!-- title -->
								<div class="title"><span>My</span> Portfolio</div>

							</div>
							<div class="col col-m-12 col-t-7 col-d-7 col-d-lg-7">

								<!-- filters -->
								<div class="filter-menu filter-button-group">
									<div class="f_btn active">
										<label><input type="radio" name="fl_radio" value="grid-item" />All</label>
									</div>
									<div class="f_btn">
										<label><input type="radio" name="fl_radio" value="photo" />Photo</label>
									</div>
									<div class="f_btn">
										<label><input type="radio" name="fl_radio" value="video" />Video</label>
									</div>
									<div class="f_btn">
										<label><input type="radio" name="fl_radio" value="music" />Music</label>
									</div>
									<div class="f_btn">
										<label><input type="radio" name="fl_radio" value="design" />Design</label>
									</div>
								</div>

							</div>
						</div>

						<!-- work items -->
						<div class="row grid-items">

							<!-- work item photo -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item photo">
								<div class="box-item card-box">
									<div class="image">
										<a href="/static/index/images/works/work1.jpg" class="has-popup-image">
											<img src="/static/index/images/works/work1.jpg" alt="" />
											<span class="info">
												<span class="icon la la-camera-retro"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="/static/index/images/works/work1.jpg"
											class="name has-popup-image">Motorcycle Helmet</a>
										<div class="category">Photo</div>
									</div>
								</div>
							</div>

							<!-- work item video -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item video">
								<div class="box-item card-box">
									<div class="image">
										<a href="" class="has-popup-video">
											<img src="/static/index/images/works/work2.jpg" alt="" />
											<span class="info">
												<span class="icon la la-video-camera"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="" class="name has-popup-video">Minimalism Shapes</a>
										<div class="category">Video</div>
									</div>
								</div>
							</div>

							<!-- work item music -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item music">
								<div class="box-item card-box">
									<div class="image">
										<a href="" class="has-popup-music">
											<img src="/static/index/images/works/work3.jpg" alt="" />
											<span class="info">
												<span class="icon la la-music"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#" class="name has-popup">Staircase</a>
										<div class="category">Music</div>
									</div>
								</div>
							</div>

							<!-- work item design -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item design">
								<div class="box-item card-box">
									<div class="image">
										<a href="#popup-1" class="has-popup-media">
											<img src="/static/index/images/works/work4.jpg" alt="" />
											<span class="info">
												<span class="icon la la-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#popup-1" class="name has-popup-media">Mobile Application</a>
										<div class="category">Design</div>
									</div>
									<div id="popup-1" class="popup-box mfp-fade mfp-hide">
										<div class="content">
											<div class="image">
												<img src="/static/index/images/works/work4.jpg" alt="">
											</div>
											<div class="desc">
												<div class="post-box">
													<h1>Mobile Application</h1>
													<div class="blog-detail">Design</div>
													<div class="blog-content">
														<p>
															So striking at of to welcomed resolved. Northward by
															described up household therefore
															attention. Excellence decisively nay man yet impression for
															contrasted remarkably.
														</p>
														<p>
															Forfeited you engrossed but gay sometimes explained. Another
															as studied it to evident.
															Merry sense given he be arise. Conduct at an replied removal
															an amongst. Remaining
															determine few her two cordially admitting old.
														</p>
														<blockquote>
															Vestibulum ante ipsum primis in faucibus orci luctus et
															ultrices posuere cubilia
															Curae; Pellentesque suscipit.
														</blockquote>
														<p>
															Tiled say decay spoil now walls meant house. My mr interest
															thoughts screened of outweigh
															removing. Evening society musical besides inhabit ye my.
															Lose hill well up will he over on.
															Increasing sufficient everything men him admiration
															unpleasing sex.
														</p>
														<ul class="list-style">
															<li>Greatest properly off ham exercise all.</li>
															<li>Unsatiable invitation its possession nor off.</li>
															<li>All difficulty estimating unreserved increasing the
																solicitude.</li>
														</ul>
														<p>
															Unpleasant astonished an diminution up partiality. Noisy an
															their of meant. Death means
															up civil do an offer wound of.
														</p>
													</div>
													<a href="#" class="button">
														<span class="text">View Project</span>
														<span class="arrow"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- work item photo -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item photo">
								<div class="box-item card-box">
									<div class="image">
										<a href="/static/index/images/works/work5.jpg" class="has-popup-image">
											<img src="/static/index/images/works/work5.jpg" alt="" />
											<span class="info">
												<span class="icon la la-camera-retro"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="/static/index/images/works/work5.jpg" class="name has-popup-image">Gereal
											Travels</a>
										<div class="category">Photo</div>
									</div>
								</div>
							</div>

							<!-- work item music -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item music">
								<div class="box-item card-box">
									<div class="image">
										<a href="" class="has-popup-music">
											<img src="/static/index/images/works/work8.jpg" alt="" />
											<span class="info">
												<span class="icon la la-music"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#" class="name has-popup">Daylight Entrance</a>
										<div class="category">Music</div>
									</div>
								</div>
							</div>

							<!-- work item video -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item video">
								<div class="box-item card-box">
									<div class="image">
										<a href="" class="has-popup-video">
											<img src="/static/index/images/works/work6.jpg" alt="" />
											<span class="info">
												<span class="icon la la-video-camera"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="" class="name has-popup-video">Architecture</a>
										<div class="category">Video</div>
									</div>
								</div>
							</div>

							<!-- work item design -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item design">
								<div class="box-item card-box">
									<div class="image">
										<a href="#popup-2" class="has-popup-media">
											<img src="/static/index/images/works/work7.jpg" alt="" />
											<span class="info">
												<span class="icon la la-image"></span>
											</span>
										</a>
									</div>
									<div class="desc">
										<a href="#popup-2" class="name has-popup-media">Social Website</a>
										<div class="category">Design</div>
									</div>
									<div id="popup-2" class="popup-box mfp-fade mfp-hide">
										<div class="content">
											<div class="image">
												<img src="/static/index/images/works/work7.jpg" alt="">
											</div>
											<div class="desc">
												<div class="post-box">
													<h1>Mobile Application</h1>
													<div class="blog-detail">Design</div>
													<div class="blog-content">
														<p>
															So striking at of to welcomed resolved. Northward by
															described up household therefore
															attention. Excellence decisively nay man yet impression for
															contrasted remarkably.
														</p>
														<p>
															Forfeited you engrossed but gay sometimes explained. Another
															as studied it to evident.
															Merry sense given he be arise. Conduct at an replied removal
															an amongst. Remaining
															determine few her two cordially admitting old.
														</p>
														<blockquote>
															Vestibulum ante ipsum primis in faucibus orci luctus et
															ultrices posuere cubilia
															Curae; Pellentesque suscipit.
														</blockquote>
														<p>
															Tiled say decay spoil now walls meant house. My mr interest
															thoughts screened of outweigh
															removing. Evening society musical besides inhabit ye my.
															Lose hill well up will he over on.
															Increasing sufficient everything men him admiration
															unpleasing sex.
														</p>
														<ul class="list-style">
															<li>Greatest properly off ham exercise all.</li>
															<li>Unsatiable invitation its possession nor off.</li>
															<li>All difficulty estimating unreserved increasing the
																solicitude.</li>
														</ul>
														<p>
															Unpleasant astonished an diminution up partiality. Noisy an
															their of meant. Death means
															up civil do an offer wound of.
														</p>
													</div>
													<a href="#" class="button">
														<span class="text">View Project</span>
														<span class="arrow"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 
			Card - Blog
		-->
		<div class="card-inner" id="blog-card">
			<div class="row card-container">

				<!--
					Card Wrap
				-->
				<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

					<!-- Blog Image -->
					<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6"
						style="background-image: url(/static/index/images/profile4.jpg);"></div>

					<!--
						Inner Top
					-->
					<div class="content inner-top">
						<div class="row">
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
								<div class="title-bg">My Blog</div>
							</div>
						</div>
					</div>

					<!--
						Blog
					-->
					<div class="content blog">
						<div class="row">
							<div class="col col-m-12 col-t-5 col-d-5 col-d-lg-5">

								<!-- title -->
								<div class="title"><span>My</span> Blog</div>

							</div>
							<div class="col col-m-12 col-t-7 col-d-7 col-d-lg-7">

								<!-- filters -->
								<div class="all-blog">
									<a href="blog.html">All Blog</a>
								</div>

							</div>
						</div>

						<!-- blog items -->
						<div class="row">

							<!-- blog item -->
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
								<div class="box-item card-box">
									<div class="image">
										<a href="blog-post.html">
											<img src="/static/index/images/blog/blog1.jpg" alt="" />
											<span class="info">
												<span class="icon la la-newspaper-o"></span>
											</span>
											<span class="date"><strong>20</strong>Jun</span>
										</a>
									</div>
									<div class="desc">
										<a href="blog-post.html" class="name">By spite about do of do allow blush</a>
										<div class="category">Design</div>
									</div>
								</div>
							</div>

							<!-- blog item -->
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
								<div class="box-item card-box">
									<div class="image">
										<a href="blog-post.html">
											<img src="/static/index/images/blog/blog2.jpg" alt="" />
											<span class="info">
												<span class="icon la la-newspaper-o"></span>
											</span>
											<span class="date"><strong>19</strong>Jun</span>
										</a>
									</div>
									<div class="desc">
										<a href="blog-post.html" class="name">Two Before Arrow Not Relied</a>
										<div class="category">Coding</div>
									</div>
								</div>
							</div>

							<!-- blog item -->
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
								<div class="box-item card-box">
									<div class="image">
										<a href="blog-post.html">
											<img src="/static/index/images/blog/blog3.jpg" alt="" />
											<span class="info">
												<span class="icon la la-newspaper-o"></span>
											</span>
											<span class="date"><strong>20</strong>Jun</span>
										</a>
									</div>
									<div class="desc">
										<a href="blog-post.html" class="name">By spite about do of do allow blush</a>
										<div class="category">Travel</div>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>
		</div>

		<!-- 
			Card - Contacts
		-->
		<div class="card-inner" id="contacts-card">
			<div class="row card-container">

				<!--
					Card Wrap
				-->
				<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

					<!-- Map -->
					<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6"
						style="background-image: url(/static/index/images/profile5.jpg);">
						<div class="map" id="map"></div>
					</div>

					<!--
						Inner Top
					-->
					<div class="content inner-top">
						<div class="row">
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
								<div class="title-bg">Contacts</div>
							</div>
						</div>
					</div>

					<!--
						Contacts Info
					-->
					<div class="content contacts-info">
						<div class="row">
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

								<!-- title -->
								<div class="title"><span>Get</span> in Touch</div>

							</div>
						</div>

						<!-- contacts items -->
						<div class="row contacts-items">

							<!-- contacts item -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
								<div class="contacts-item card-box">
									<div class="icon"><i class="la la-map-marker"></i></div>
									<div class="name">Address</div>
									<p>
										France, Paris.
									</p>
								</div>
							</div>

							<!-- contacts item -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
								<div class="contacts-item card-box">
									<div class="icon"><i class="la la-at"></i></div>
									<div class="name">Email</div>
									<p>
										adlard@example.com
									</p>
								</div>
							</div>

							<!-- contacts item -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
								<div class="contacts-item card-box">
									<div class="icon"><i class="la la-phone"></i></div>
									<div class="name">Phone</div>
									<p>
										+123 654 78900
									</p>
								</div>
							</div>

							<!-- contacts item -->
							<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
								<div class="contacts-item card-box">
									<div class="icon"><i class="la la-check-square"></i></div>
									<div class="name">Freelance</div>
									<p>
										Available
									</p>
								</div>
							</div>

						</div>

					</div>

					<!--
						Contacts Form
					-->
					<div class="content contacts-form">
						<div class="row">
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

								<!-- title -->
								<div class="title"><span>Contact</span> Form</div>

							</div>
						</div>
						<div class="row">
							<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

								<!-- form -->
								<div class="contact_form card-box">
									<form id="cform" method="post">
										<div class="row">
											<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
												<div class="group-val">
													<input type="text" name="name" placeholder="Full Name" />
												</div>
											</div>
											<div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
												<div class="group-val">
													<input type="text" name="email" placeholder="Email Address" />
												</div>
											</div>
											<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
												<div class="group-val">
													<textarea name="message" placeholder="Your Message"></textarea>
												</div>
											</div>
										</div>
										<div class="align-left">
											<a href="#" class="button" onclick="$('#cform').submit(); return false;">
												<span class="text">Send Message</span>
												<span class="icon"><i class="la la-arrow-right"></i></span>
											</a>
										</div>
									</form>
									<div class="alert-success">
										<p>Thanks, your message is sent successfully.</p>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!-- 
			Lines Grid
		-->
		<div class="lines-grid">
			<div class="row">
				<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
				<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
					<div class="lines">
						<div class="line-1"></div>
						<div class="line-2" style="animation-delay: 10s;"></div>
					</div>
				</div>
				<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
					<div class="lines">
						<div class="line-1"></div>
					</div>
				</div>
				<div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
					<div class="lines">
						<div class="line-1"></div>
						<div class="line-2" style="animation-delay: 0s;"></div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

    <script type="text/javascript" src="/static/index/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery.validate.js"></script>
    <script type="text/javascript" src="/static/index/js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="/static/index/js/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="/static/index/js/masonry.pkgd.js"></script>
    <script type="text/javascript" src="/static/index/js/masonry-filter.js"></script>
    <script type="text/javascript" src="/static/index/js/simplebar.js"></script>
    <script type="text/javascript" src="/static/index/js/typed.js"></script>

    <script type="text/javascript" src="/static/index/js/scripts.js"></script>
</body>

</html>