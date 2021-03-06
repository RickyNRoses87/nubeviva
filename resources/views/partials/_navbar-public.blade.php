<nav class="navbar navbar-transparent navbar-absolute">
	<div class="container">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
        		<span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
    		</button>
    		<a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
    	</div>

    	<div class="collapse navbar-collapse" id="navigation-example">
    		<ul class="nav navbar-nav navbar-right">
	            <li>
	                <a href="" target="_blank" class="btn btn-simple btn-white btn-just-icon">
						<i class="fa fa-twitter"></i>
					</a>
	            </li>
	            <li>
	                <a href="" target="_blank" class="btn btn-simple btn-white btn-just-icon">
						<i class="fa fa-facebook-square"></i>
					</a>
	            </li>
				<li>
	                <a href="" target="_blank" class="btn btn-simple btn-white btn-just-icon">
						<i class="fa fa-instagram"></i>
					</a>
	            </li>
    		</ul>
    	</div>
	</div>
</nav>