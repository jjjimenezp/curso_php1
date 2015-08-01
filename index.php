<html>
<form>
  <head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>
<body>
<form name="input" action="index.php" method="POST">
 <div class="input-group">
   <span class="input-group-btn">
    <input type="submit" type="button">IR!</button>
    </span>
    <input type="text" name="word" class="form-control" placeholder="search for...">
   </div>
</form>
<?php
require  __DIR__.'/vendor/autoload.php';

$response = Unirest\Request::get("https://montanaflynn-dictionary.p.mashape.com/define?word=".$_GET["word"],
  array(
    "X-Mashape-Key" => "ZA8k3CJvxdmshT0XPS3S6WV6vnfwp1hj5F9jsnNujBw5cKjh2Y",
    "Accept" => "application/json"
  )
);
echo "<ul class=\"nav nav-pills\">";
foreach($response->body->definitions as $definition)
{
 echo "<li role=\"presentation\"><a href=\"#\">".$definition->text."</a></li>";
}
 echo "</ul>";
?>
 </div>
</div>
</body> 
</html>
