<!DOCTYPE html> 
<html> 
	
<head> 
	<title> 
		How to call PHP function 
		on the click of a Button ? 
	</title> 
</head> 

<body style="text-align:center;"> 
	
	<h1 style="color:green;"> 
		GeeksforGeeks 
	</h1> 
	
	<h4> 
		How to call PHP function 
		on the click of a Button ? 
	</h4> 

	<?php
    use App\Models\Pdfku;
	
		if(isset($_POST['button1'])) { 
            Pdfku::MakePDF();
		} 
		if(isset($_POST['button2'])) { 
			echo "This is Button2 that is selected"; 
		} 
	?> 
	
	<form method="get"> 
		<input type="submit" name="button1"
				value="Button1"/> 
		
		<input type="submit" name="button2"
				value="Button2"/> 
	</form> 
    <button onclick="<?php Pdfku::MakePDF()?>">yo</button>
</body> 

</html> 
