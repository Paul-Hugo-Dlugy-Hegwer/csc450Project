<!DOCTYPE html>
<html>
<body>
<h1>The Hub</h1>
<form method="get" action="hub.php">
	<input type="submit" name="takeSurvey" value="Take Survey"/>
	<input type="submit" name="viewOps" value="View Opps"/>
</form>
<p>
<?php
if(isset($_GET["takeSurvey"])){
	header("Location: surveyPage.php");
}
elseif(isset($_GET["viewOps"])){
	header("Location: viewOps.php");
}
	?>
</p>
</body>
</html>
