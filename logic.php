<? php

//link to other files
require('index.php');
require('word-list.txt');
require('special-characters.txt');
require('numbers.txt')

//Get info from form

echo $_REQUEST['word'];

//Set variables

$words = input from the box for number of words (this will equal 1 - 4)

$words = read('word-list.txt')

$schar = read('special-charcters.txt')

$numbers = read('numbers.txt')

// Pull word list from text file 

$wlist = file_get_contents('word-list.txt');
echo $wlist;

// Create an array of words

$words = Array();

// Use a foreach loop to loop through each word

foreach($_POST as $key => $value) {

if (isset($POST_['numberWords'])){
$randPhrase = randPassPhraseGen($numberWords);
}

// Use if / else to randomly generate which words/numbers/symbols will be chosen for the password
	if box is checked for numbers{
		if $varw=1{
			output = words[rand(0,count(words))].schar[rand(0,count(schar))].numbers[rand..]
		}
		if $varw=2{
			output = words[rand(0,count(words))].words[rand(0,count(words))].schar[rand(0,count(schar))].numbers[rand..]
		}
	}
	else{
		if $varw=1{
			output = words[rand(0,count(words))].schar[rand(0,count(schar))]
		}
		if $varw=2{
			output = words[rand(0,count(words))].words[rand(0,count(words))].schar[rand(0,count(schar))]
		}
	}
}

else{
	if box is checked for numbers{
		if $varw=1{
			output = words[rand(0,count(words))].numbers{rand..}
		}
		if $varw=2{
			output = words[rand(0,count(words))].words[rand(0,count(words))].numbers[rand..]
		}
	else{
		if $varw=1{
			output = words[rand(0,count(words))]
		}
		if $varw=2{
			output = words[rand(0,count(words))].words[rand(0,count(words))]
		}
	}
	}
}

// Output results back into the form
echo $_POST['word'];

?>



