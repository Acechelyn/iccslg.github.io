<!-- start the header -->
		<nav class="uk-navbar">
			<ul class="uk-navbar-nav">
				<li class="<?php echo $page_id == 1 ? 'uk-active' : ''?>"><a href="/index.php">HOME</a></li>
				<li class="<?php echo $page_id == 2 ? 'uk-active' : ''?>" "uk-parent" data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
				<a href="/about.php">ABOUT US</a>
					<div class="uk-dropdown uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" aria-hidden="true" tabindex="" style="top: 20px; left: 0px; width: 200px">
                                            <ul class="uk-nav uk-nav-navbar">
                                                <li class="uk-active"><a style="width: 200px; padding: 0px; text-align: left;" href="/message to students.php">A Message to Students</a></li>
                                                <li><a style="width: 200px; padding: 0px; text-align: left;" href="/message to parents.php">A Message to Parents</a></li>
                                                <li><a style="width: 200px; padding: 0px; text-align: left;" href="/history of icc.php">History of ICC</a></li>
                                                <li><a style="width: 200px; padding: 0px; text-align: left;" href="/emblem and colors.php">Emblem & Colors</a></li>
                                            </ul>
                                        </div>
                </li>
                <li class="<?php echo $page_id == 3 ? 'uk-active' : ''?>" "uk-parent" data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
				<a href="/course.php">COURSES</a>
					<div class="uk-dropdown uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" aria-hidden="true" tabindex="" style="top: 20px; left: 0px; width: 480px;">
                                            <ul class="uk-nav uk-nav-navbar">
                                                <li><a style="width: 480px; padding: 0px; text-align: left;" href="/computer programming.php">2 Year Computer Programming / Applied Computer Science</a></li>
                                                <li><a style="width: 480px; padding: 0px; text-align: left;" href="/computer secretarial.php">2 Year Computer Secretarial / Office Management</a></li>
                                                <li><a style="width: 480px; padding: 0px; text-align: left;" href="/computer technician.php">2 Year Computer Technician / Applied Computer Engineering</a></li>
                                                <li><a style="width: 480px; padding: 0px; text-align: left;" href="/computer animation.php">2 Year Animation</a></li>
                                                <li><a style="width: 480px; padding: 0px; text-align: left;" href="/multimedia technology.php">2 Year Multimedia Technology</a></li>
                                            </ul>
                                        </div>
                </li>
				<li class="<?php echo $page_id == 4 ? 'uk-active' : ''?>"><a href="/branches.php">BRANCHES</a></li>
				<li class="<?php echo $page_id == 5 ? 'uk-active' : ''?>"><a href="/admission.php">ADMISSION</a></li>
				<li class="<?php echo $page_id == 6 ? 'uk-active' : ''?>"><a href="/news.php">NEWS</a></li>
			</ul>
		</nav>
