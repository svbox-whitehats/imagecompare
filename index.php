<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12 sub-headers text-center">
							<br>
							<h3><b>IMAGE COMPARE</b></h3>
							<br>
						</div>
					</div>
					<div class="row">
						<form method="post" action="">
						<div class="col-md-5 text-center">
							<input type="text" class="form-control" name="link_1" placeholder="Insert first url" required/>
						</div>
						<div class="col-md-5 text-center">
							<input type="text" class="form-control" name="link_2" placeholder="Insert second url" required/>
						</div>
						<div class="col-md-2 text-center">
							<input type="submit" class="btn btn-success" name="action" value="Compare!"/>
						</div>
						</form>


					</div>

				</div>
			</div>
		</div>
<div class="row ">
<div class="col-md-12"><br><br></div>
</div>
	
<div class="row ">
<div class="col-md-12">
					<div class="row">
						<div class="col-md-5 jumbotron col-md-offset-4 ">	
							
							<h3>

<?php
if(isset($_POST['link_1'])&&isset($_POST['link_2'])) {

	$url_1 = $_POST['link_1']; //external link
	$url_2 = $_POST['link_2'];
						
					echo"  "."Image comparison scale :";		 
					echo compareImages($url_1,$url_2,100)."%";
     				
				
						
    	//$server_image_dir = "compare/image/"; //folder for storing images
	//$name_1 = "image1";
	//$name_2 = "image2";
        
	//file_put_contents($server_image_dir."image1.jpg", file_get_contents($url_1)); //write the file to server
	//file_put_contents($server_image_dir."image2.jpg", file_get_contents($url_2));

}

 
?>

					</div>
					</div>
		</b></h3>
<br>
<div class="col-md-12">
 					<div class="row">
						<div class="col-md-2 center "></div>
						<div class="col-md-3 center ">
			
</div>
</div>
</div>
<div class="col-md-12">
 					<div class="row">
						<div class="col-md-2 center "></div>
						<div class="col-md-3 center ">	
	<img src="<?php if(isset($url_1)) echo $url_1; ?>"width=300px height=300 px/></div>
						<div class="col-md-2 center "></div>
						
					<div class="col-md-3 center ">	
	<img src="<?php if(isset($url_2)) echo $url_2; ?>" width=300px height=300 px/></div>
				<div class="col-md-2 center "></div>
				<br>
				
					</div>

        
<?php
function compareImages($url_1,$url_2,$accuracy){

  //load base image
  $imagePathA=$url_1;
  $imagePathB= $url_2;

  $bim = imagecreatefromjpeg($imagePathA);
  $bim = imagescale($bim,600,600);
 
  //create comparison points
  $bimX = imagesx($bim);
  $bimY = imagesy($bim);
  $pointsX = $accuracy*5;
  $pointsY = $accuracy*5;
  $sizeX = round($bimX/$pointsX);
  $sizeY = round($bimY/$pointsY);
  
  //load image into an object
  $im = imagecreatefromjpeg($imagePathB);
  $im = imagescale($im,600,600);

  
  
  //loop through each point and compare the color of that point
  $y = 0;
  $matchcount = 0;
  $num = 0;
  for ($i=0; $i < $pointsY; $i++) { 
    $x = 0;
    for($n=0; $n < $pointsX; $n++){
  
      $rgba = imagecolorat($bim, $x, $y);
      $colorsa = imagecolorsforindex($bim, $rgba);
  
      $rgbb = imagecolorat($im, $x, $y);
      $colorsb = imagecolorsforindex($im, $rgbb);
  
      if(colorComp($colorsa['red'], $colorsb['red']) && colorComp($colorsa['green'], $colorsb['green']) && colorComp($colorsa['blue'], $colorsb['blue'])){
        //point matches
        $matchcount ++;
      }
      $x += $sizeX;
      $num++;
    }
    $y += $sizeY;
  }
  //take a rating of the similarity between the points, if over 90 percent they match.
  $rating = $matchcount*(100/$num);

  return $rating;

}
function colorComp($color, $c){
	//test to see if the point matches - within boundaries
  if($color >= $c-2 && $color <= $c+2){
    return true;
  }else{
    return false;
  }
}
?>
<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>
