<h1>Dommage!</h1>
<p>Ceci n'est pas la bonne la bonne réponse.</p>
<p>Que veux tu faire?</p>
<p><a href="index.php?q=<?php echo $question; ?>" class="btn btn-primary">Réessayer</a> <!-- <a href="index.php?r=<?php echo $question; ?>" class="btn">Connaître la réponse</a></p> -->
<form name="case" method="post" action="index.php?r=<?php echo $question; ?>">
	<?php if($question==1){ ?>
	<input type="hidden" name="case1" value="1">
	<input type="hidden" name="case3" value="3">
	<input type="hidden" name="case5" value="5">
	<?php }
	if($question==2){ ?>
	<input type="hidden" name="question2" value="science">
	<?php }
	if($question==3){ ?>
	<input type="hidden" name="reponse3" value="8">
	<?php }
	if($question==4){ ?>
	<input type="hidden" name="question4" value="2SIC">
	<?php }
	if($question==5){ ?>
	<input type="hidden" name="question5" value="60">
	<?php } ?>
	<button type="submit" class="btn btn-primary">Connaître la réponse</button>
</form>