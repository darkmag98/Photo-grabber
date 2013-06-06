      <?php
      
      //THIS CODE WAS ORIGINGALLY MADE BY http://github.com/nickfost
    $Folder = "FOLDER NAME HERE";
    $includeTheseExtensions = array("png","jpg","gif" ,"jpeg");
    $imagesarray = scandir($Folder);
    foreach($imagesarray as $image){
      $extArray = explode(".", $image);
      $numInExtArray = count($extArray);
      $extension = strtolower($extArray[$numInExtArray - 1]);
      if(in_array( $extension ,$includeTheseExtensions)){
        echo "       <img src=".$Folder.$image." width='100' height='100'/>";
      }
    } 
    ?>
