<?php 

session_start();



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Bootstrap -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->

	<title>Back Room App</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
        <i class='bx bxs-door-open'></i>
			<span class="text">Back Room App</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="user_dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#test">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">TBR Store</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-note' ></i>
					<span class="text">Handbook</span>
				</a>
			</li>

            <li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Forms</span>
				</a>
			</li>
			
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="images/yhaps.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
                <li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php echo $_SESSION ["fullname"] ?></h3>
						<p><?php echo $_SESSION ["employee_id"] ?></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>Meeting with CEO</h3>
						<p>Reminder</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total BRD Points</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Transaction History</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
                                <th>Date</th>
								<th>Remarks</th>
								<th>Type</th>
                                <th>Amount</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
						
									<p>01-10-2020</p>
								</td>
								<td>Bankaroo to BRD</td>
								<td><span class="status completed">Credit</span></td>
                                <td>$200</td>
							</tr>
							<tr>
								<td>
						
									<p>01-10-2020</p>
								</td>
								<td>Bankaroo to BRD</td>
								<td><span class="status completed">Credit</span></td>
                                <td>$200</td>
							</tr>
							<tr>
								<td>
						
									<p>01-10-2020</p>
								</td>
								<td>Bankaroo to BRD</td>
								<td><span class="status completed">Credit</span></td>
                                <td>$200</td>
							</tr>
							<tr>
								<td>
						
									<p>01-10-2020</p>
								</td>
								<td>Bankaroo to BRD</td>
								<td><span class="status completed">Credit</span></td>
                                <td>$200</td>
							</tr>
							<tr>
								<td>
						
									<p>01-10-2020</p>
								</td>
								<td>Bankaroo to BRD</td>
								<td><span class="status completed">Credit</span></td>
                                <td>$200</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<section id="test">
		<h1>haha</h1>
	</section>
	

	<script src="js/script.js"></script>
</body>
</html>