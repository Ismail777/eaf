<!DOCTYPE html>
<html>
@section ('progress_bar')
<head>
	<style type="text/css">
		.container {
			width: 100%;
		}
		.progressbar {
			counter-reset: step;
		}
		.progressbar li {
			list-style-type: none;
			float: left;
			width: ;
			position: relative;
			text-align: center;
		}
		.progressbar li:before {
			content: '1';
			width: 30px;
			height: 30px;
			line-height: 30px;
			border: 1px solid #ddd;
			display: block;
			text-align: center;
			margin: 0 auto 10px auto;
			border-radius: 50%
			background-color: white;

		}
		progressbar li:after {
			content: '';
			position: absolute;
			width: 100%;
			height: 1px;
			background-color: #ddd;
			top: 15px;
			left: -50%;
			z-index: -1;
		}
		.progressnar li:first-child:after {
			content: none;
		}
		.progressbar li.active {
			color: green;

		}
		.progressbar li.active:before {
			border-color: green;
		}
		.progressbar li.active + li:after {
			background-color: green;
		}
	</style>
</head>
<body>
	<div class="container">
		<ul class="progressbar">
			<li class="active">Step 1</li>
			<li>Step 2</li>
			<li>Step 3</li>
		</ul>
	</div>
</body>

</html>