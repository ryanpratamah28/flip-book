<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Flipbook</title>
		<link rel="stylesheet" href="{{ asset('/css/flipbook/flipbook.css')}}" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
			integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
	</head>
	<body>
		@yield('flipbookContent')

		<!-- controls -->
		<div id="controls">
			<div class="all">
				<div class="ui-slider" id="page-slider">
					<div class="bar">
						<div class="progress-width">
							<div class="progress">
								<div class="handler"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="ui-options" id="options">
					<a
						class="ui-icon show-hint"
						title="Full Screen"
						id="ui-icon-full-screen"
					>
						<i class="fa fa-expand"></i>
					</a>
				</div>
			</div>
		</div>
		<!-- / controls -->

		<!-- partial -->

		<script src="https://code.jquery.com/jquery-2.0.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js"></script>
		<script src="{{asset('/js/flipbook/flipbook.js')}}"></script>
	</body>
</html>
