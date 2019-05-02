<?php include 'header.php'; ?>
  	<div class="container">
  		<?php //echo strrchr("Hello world!","wor");?>
      <?php 
        $str = "<!-- wp:paragraph --><p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing![shortcode][shortcode][shortcode][shortcode][shortcode][shortcode][shortcode][shortcode][shortcode]</p>
<!-- /wp:paragraph -->";
$shortcode="[shortcode]";
       print_r (explode(" ",$str));


function extractWord($text, $position){
   $words = explode(' ', $text);
   $characters = -1; 
   foreach($words as $word){
      $characters += strlen($word);
      if($characters >= $position){
         return $word;
      }   
   }   
   return ''; 
} 

$text = 'This is an example of how to extract word from a string given a example position in php';
 $position = strpos($text, 'examp');
 $word = extractWord($text, $position); // return example
       ?>
  	</div>






    <?php  
$string = "<!-- wp:paragraph --><p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing! [shortcode] [shortcode] [shortcode] [shortcode] [shortcode] [shortcode] [shortcode] [shortcode] [shortcode] </p>
<!-- /wp:paragraph -->";  
$count;  
   
//Converts the string into lowercase  
$string = strtolower($string);  
   
//Split the string into words using built-in function  
$words = explode(" ", $string);  
   
print("Duplicate words in a given string : <br>");  
for($i = 0; $i < count($words); $i++) {  
    $count = 1;  
    for($j = $i+1; $j < count($words); $j++) {  
        if($words[$i] == $words[$j]) {  
            $count++;  
            //Set words[j] to 0 to avoid printing visited word  
            $words[$j] = "0";  
        }  
    }  
      
    //Displays the duplicate word if count is greater than 1  
    if($count > 1 && $words[$i] != "0"){  
        print($words[$i]);  
        print("&nbsp;");  
        print($count);
    }  
}  
?>  
<?php include 'footer.php'; ?>
