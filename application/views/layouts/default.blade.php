<!DOCTYPE html>
	@include('partials.header',array('title'=>$title))
    <body>

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

	@include('partials.navbar')

	{{ $content }}


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
