<?php
if (!isset($page_title))
{
	$page_title = 'Administration';
}
?>

<!doctype html>

<html lang="en">
	<head>
		<title>Regency - <?php echo htmlsc($page_title); ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" media="all" href="<?php echo url_for('stylesheets/staff.css'); ?>" />
	</head>

	<body>
		<header>
			<h1>Administration Area</h1>
		</header>

		<navigation>
			<ul>
				<li>
					<a href="<?php echo url_for('/staff/index.php'); ?>">Staff Menu</a>
				</li>
			</ul>
		</navigation>


