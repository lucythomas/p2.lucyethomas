<? php

//link to other files
include('index.php');
// require('word-list.txt');
// require('special-characters.txt');
// require('numbers.txt')

//Get info from form
echo $_REQUEST['word'];

// $words = file_get_contents('word-list.txt');
// echo $wlist;

//Create array
$arrayOfWords = array['apple', 'orange', 'pear', 'banana', 'pineapple', 'grapefruit', 'cherry', 'grape', 'blueberry', 'raspberry' ];

//Use explode function to break up words in word-list.txt
// $arrayOfWords = explode("",$words);

//Pull number of words requested from form
$numberOfWordsRequested = $_GET['quantity'];

//Loop through word list to choose that number of words from list
for($i=0; $i<$numberOfWordsRequested; $i++);

//Random Number Generator - get a random number between 0 and 4
$randomNumber = rand(0,6);
$randomWord = $arrayOfWords[$randomNumber];

//Create variable that counts the array of words
$arrayOfWordsLength=count($arrayOfWords);

//Use random number to grab an item from $arrayOfWords
$randomNumber=rand(0, $arrayOfWordsLength);

//Store $randomWord 

//Push elements onto the end of the array
int array_push($arrayOfWords("$randomNumber");

// Output results back into the form
echo $_POST['word'];

?>

<!-- // // Use if / else to randomly generate which words/numbers/symbols will be chosen for the password
// 	if box is checked for numbers{
// 		if $varw=1{
// 			output = words[rand(0,count(words))].schar[rand(0,count(schar))].numbers[rand..]
// 		}
// 		if $varw=2{
// 			output = words[rand(0,count(words))].words[rand(0,count(words))].schar[rand(0,count(schar))].numbers[rand..]
// 		}
// 	}
// 	else{
// 		if $varw=1{
// 			output = words[rand(0,count(words))].schar[rand(0,count(schar))]
// 		}
// 		if $varw=2{
// 			output = words[rand(0,count(words))].words[rand(0,count(words))].schar[rand(0,count(schar))]
// 		}
// 	}
// }

// else{
// 	if box is checked for numbers{
// 		if $varw=1{
// 			output = words[rand(0,count(words))].numbers{rand..}
// 		}
// 		if $varw=2{
// 			output = words[rand(0,count(words))].words[rand(0,count(words))].numbers[rand..]
// 		}
// 	else{
// 		if $varw=1{
// 			output = words[rand(0,count(words))]
// 		}
// 		if $varw=2{
// 			output = words[rand(0,count(words))].words[rand(0,count(words))]
// 		}
// 	}
// 	}
// }
 -->
