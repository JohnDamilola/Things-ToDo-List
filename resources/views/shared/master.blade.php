<!DOCTYPE html>
<html>
 @include ('shared.head')
    <body>
      @include ('shared.navbar')
      <header id="head" style="margin-top:-50px;">
    		<section id="inner">
    		<div class="container">
    			<div class="row">
    					<h1 class="lead">Be more organized</h1>
              <h4 class="lead" style="font-size:1.2em;">Make your life more attractive</h4>
    			</div>
    		</div>
    		</section>
    	</header>
        <div class="container">
          <div class="row">
              <a class="btn btn-md" style="padding:10px; margin:5px; background-image: url('images/11.jpg'); color:#fff" href="create">
                <i class="fa fa-plus"></i> New Task</a>
                <a class="btn btn-md" style="padding:10px; margin:5px; background-image: url('images/11.jpg'); color:#fff" href="/">
                  <i class="fa fa-eye"></i> View All</a>
          </div>
          @yield('content')


        </div>
      </body>
      </html>
