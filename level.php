<?php
class Level{
    public $lvl;
    public $lvlHead;
    public $type;
    public $question;
    public $bgImg;
    public $color;
    public $key;
    public $questionImg;
    public $class = "prevent_sel";
}

$lvl1 = new Level();
$lvl1->lvlHead = "Level 1: The Journey Begins";
$lvl1->lvl = "1";
$lvl1->type = "basic";
$lvl1->question = "I got my first famous line after an angry blogger misquoted me in his ranty blog. Guess who got famous? ";
$lvl1->bgImg = "url('assets/img/wormhole_1.jpg')";
$lvl1->key = "biswa kalyan rath";
$lvl1->questionImg = null;
$lvl1->color = "white";

$lvl2 = new Level();
$lvl2->lvlHead = "Level 2: Maze of Riddles - 1st Floor";
$lvl2->lvl = "2";
$lvl2->type = "basic";
$lvl2->question = "There are 100 doors and 100 children in a school. All the doors are closed.
The first touches all the doors in multiples of 1. The second child touches all the doors in multiples of 2 and 
this continues till the 100th child touches doors in multiples of 100.
When the child touches a door, it either closes if it was opened and opens if it was closed.
At the end, after all the children have touched their respective doors, a few of them remain open.
What is the sum of all the doors that remain open? ";
$lvl2->bgImg = "url('assets/img/maze_2.jpg')";
$lvl2->key = "385";
$lvl2->questionImg = null;
$lvl2->color = "white";

$lvl3 = new Level();
$lvl3->lvlHead = "Level 3: Maze of Riddles - 2nd Floor";
$lvl3->lvl = "3";
$lvl3->type = "basic";
$lvl3->question = "The cast member in the series dated a person who wore a shirt with the numbers of his/her year of birth.
What is the number on the shirt? 
(Clue: This number is a perfect prime number)";
$lvl3->bgImg = "url('assets/img/alicesmaze_3.jpg')";
$lvl3->key = "73";
$lvl3->questionImg = null;
$lvl3->color = "white";

$lvl4 = new Level();
$lvl4->lvlHead = "Level 4: Maze of Riddles - 3rd Floor";
$lvl4->lvl = "4";
$lvl4->type = "basic";
$lvl4->question = "A 10 digit number where the 1st digit represents the number of 0’s in the number, 
2nd digit represents 1’s in the number and so on till 10th digit that represents the number of 9’s in the number. What is the number? ";
$lvl4->bgImg = "url('assets/img/pond_4.jpg')";
$lvl4->key = "6210001000";
$lvl4->questionImg = null;
$lvl4->color = "white";

$lvl5 = new Level();
$lvl5->lvlHead = "Level 5: Valley Of Dreams..";
$lvl5->lvl = "5";
$lvl5->type = "image";
$lvl5->question = "In My Opinion, as distinct and singular as we are, If we join hands, we are all equal.";
$lvl5->bgImg = "url('assets/img/gatekeeper_5.jpg')";
$lvl5->key = "72";
$lvl5->questionImg = array("question_5.JPG");
$lvl5->color = "white";

$lvl6 = new Level();
$lvl6->lvlHead = "Level 6: ";
$lvl6->lvl = "6";
$lvl6->type = "image";
$lvl6->question = "<b style='visibility:hidden'>I</b> got lost in the Summit of letters";
$lvl6->bgImg = "url('assets/img/bake_6.jpg')";
$lvl6->key = "4";
$lvl6->questionImg = array("question_6.JPG");
$lvl6->color = "black";
$lvl6->class = "";

$lvl7 = new Level();
$lvl7->lvl = "7";
$lvl7->type = "custom";
$lvl7->key = "pass";
$lvl7->filename = "levels/postion_lvl.php";


$lvl8 = new Level();
$lvl8->lvl = "8";
$lvl8->type = "custom";
$lvl8->key = "golden key";
$lvl8->filename = "levels/keys_lvl.php";

$lvl9 = new Level();
$lvl9->lvl = "9";
$lvl9->type = "custom";
$lvl9->key = "death";
$lvl9->filename = "levels/shadowHidden_lvl.php";

$lvl10 = new Level();
$lvl10->lvl = "10";
$lvl10->type = "custom";
$lvl10->key = "s vyfo iye";
$lvl10->filename = "levels/title_lvl.php";

$lvl11 = new Level();
$lvl11->lvlHead = "Level 11: Valley of Images - 1st floor";
$lvl11->lvl = "11";
$lvl11->type = "image";
$lvl11->question = "Find the product of the number of squares on chess board and the number of triangles in the following figure ";
$lvl11->bgImg = "url('assets/img/whitebg.jpg')";
$lvl11->key = "3264";
$lvl11->questionImg = array("triangle_11.jpg");
$lvl11->color = "black";

$lvl11_1 = new Level();
$lvl11_1->lvlHead = "Level 12: Valley of Images - 2nd FLoor";
$lvl11_1->lvl = "12";
$lvl11_1->type = "basic";
$lvl11_1->question = " ";
$lvl11_1->bgImg = "url('assets/img/random.jpg')";
$lvl11_1->key = "trinity church cemetery";
$lvl11_1->questionImg = null;
$lvl11_1->color = "black";


$lvl11_2 = new Level();
$lvl11_2->lvlHead = "Level 13: Maze of Riddles - 2nd Floor";
$lvl11_2->lvl = "13";
$lvl11_2->type = "basic";
$lvl11_2->question = "The host of this famous talk show divorced her spouse and they have an age difference of 15 years.  Name the show.";
$lvl11_2->bgImg = "url('assets/img/alicesmaze_3.jpg')";
$lvl11_2->key = "the ellen degeneres show";
$lvl11_2->questionImg = null;
$lvl11_2->color = "white";
/*$lvl11_2 = new Level();
$lvl11_2->lvlHead = "Level 13: Valley of Images - 3rd FLoor";
$lvl11_2->lvl = "13";
$lvl11_2->type = "image";
$lvl11_2->question = "Connect the images and find the personality";
$lvl11_2->bgImg = "url('assets/img/whitebg.jpg')";
$lvl11_2->key = "larry page";
$lvl11_2->questionImg = array("kitty.jpg","102.jpg","103.jpg","aero.jpg");
$lvl11_2->color = "black";*/

$lvl11_3 = new Level();
$lvl11_3->lvlHead = "Level 14: Valley of Images - 4th FLoor";
$lvl11_3->lvl = "14";
$lvl11_3->type = "basic";
$lvl11_3->question = "I make what you see everyday, almost 93% of you to be precise. Just like my product delivers its pictures- precise.";
$lvl11_3->bgImg = "url('assets/img/whitebg.jpg')";
$lvl11_3->key = "samsung";
$lvl11_3->questionImg = null;
$lvl11_3->color = "black";

$lvl12 = new Level();
$lvl12->lvlHead = "Level 15: Valley of Images - <b>-1</b> Floor";
$lvl12->lvl = "15";
$lvl12->type = "image";
$lvl12->question = "Solve the sudoku and find the sum of numbers marked within the range";
$lvl12->bgImg = "url('assets/img/whitebg.jpg')";
$lvl12->key = "179";
$lvl12->questionImg = array("sudoku.jpg");
$lvl12->color = "black";

$lvl13 = new Level();
$lvl13->lvlHead = "Level 16: Valley of Inverted - 6th Floor";
$lvl13->lvl = "16";
$lvl13->type = "basic";
$lvl13->question = "Use 3 of the following numbers that will add up to 30.
a.	1,3,5,7,<b id='6'>9</b>,11,13,15 ";
$lvl13->bgImg = "url('assets/img/whitebg.jpg')";
$lvl13->key = "61113";
$lvl13->questionImg = null;
$lvl13->color = "black";

$lvl14 = new Level();
$lvl14->lvlHead = "Level 17: Valley of Images - 7th Floor";
$lvl14->lvl = "17";
$lvl14->type = "image";
$lvl14->question = "The girl's python did not mind a white rabbit or a brown rabbit";
$lvl14->bgImg = "url('assets/img/whiteBG.jpg')";
$lvl14->key = "vowpalwabbit";
$lvl14->questionImg = array("17/17_1.jpg","17/17_2.jpg","17/17_3.jpg");
$lvl14->color = "black";

$lvl15 = new Level();
$lvl15->lvlHead = "Level 18: Valley of Images - 8th Floor";
$lvl15->lvl = "18";
$lvl15->type = "image";
$lvl15->question = "Not a snowflake’s chance one could solve this";
$lvl15->bgImg = "url('assets/img/whiteBG.jpg')";
$lvl15->key = "mandelbrot set";
$lvl15->questionImg = array("18/18_1.jpg","18/18_2.jpg","18/18_3.jpg");
$lvl15->color = "black";

$lvl16 = new Level();
$lvl16->lvl = "19";
$lvl16->type = "custom";
$lvl16->key = "voidimg15img14img13img12img11img10img9img8img7img6img5img4img3img2img1";
$lvl16->filename = "levels/puzzle_lvl.php";

$lvl17 = new Level();
$lvl17->lvlHead = "Level 20";
$lvl17->lvl = "20";
$lvl17->type = "basic";
$lvl17->question = "Play fair. Honesty is the key to perseverance";
$lvl17->bgImg = "url('assets/img/whitebg.jpg')";
$lvl17->key = "qnkzoxsqnwbs";
$lvl17->questionImg = null;
$lvl17->color = "black";

/*$lvl17 = new Level();
$lvl17->lvlHead = "Level 19: Valley of Images - 9th Floor";
$lvl17->lvl = "20";
$lvl17->type = "endFinal";
$lvl17->question = "Connect the images<br>Hint: Tangle";
$lvl17->bgImg = "url('assets/img/whiteBG.jpg')";
$lvl17->key = "";
$lvl17->questionImg = null;
$lvl17->color = "black";*/

$lvl18 = new Level();
$lvl18->lvlHead = "Level 21";
$lvl18->lvl = "21";
$lvl18->type = "basic";
$lvl18->question = "Imagine there are no rules, no restrictions and all you have to do is turn up with a demon on four wheel and race till you crash. 
That is me in a nutshell. Banned for life, I still am credited to be the birthplace for some iconic cars.";
$lvl18->bgImg = "url('assets/img/whitebg.jpg')";
$lvl18->key = "group b rally";
$lvl18->questionImg = null;
$lvl18->color = "black";

/*$lvl18 = new Level();
$lvl18->lvlHead = "Level 21: Valley of Images - 11th Floor";
$lvl18->lvl = "21";
$lvl18->type = "image";
$lvl18->question = "Connect the images";
$lvl18->bgImg = "url('assets/img/whiteBG.jpg')";
$lvl18->key = "oneplus5t";
$lvl18->questionImg = array("18_a.jpg","18_b.jpg","18_c.jpg");
$lvl18->color = "black";*/

$lvl19 = new Level();
$lvl19->lvlHead = "Level 22: Valley of Images - 12th FLoor";
$lvl19->lvl = "22";
$lvl19->type = "image";
$lvl19->question = "Shortcuts will not get you through";
$lvl19->bgImg = "url('assets/img/whitebg.jpg')";
$lvl19->key = "hassenfeld brothers";
$lvl19->questionImg = array("22/22_a.jpg","22/22_b.jpg");
$lvl19->color = "black";

$lvl20 = new Level();
$lvl20->lvl = "23";
$lvl20->type = "basic";
$lvl20->question ="Sum the number of zeroes in the Netflix prize and multiply that with no of actors who have played the role of harry potter in the harry potter movie franchise?";
$lvl20->key = "24";
$lvl20->bgImg = "url('assets/img/whitebg.jpg')";
$lvl20->questionImg = null;
$lvl20->color = "black";

$lvl21_1 = new Level();
$lvl21_1->lvlHead = "Level 24: Valley of Images - 13th FLoor";
$lvl21_1->lvl = "24";
$lvl21_1->type = "image";
$lvl21_1->question = "Identify this movie and thus enter the actor who was executed in the other movie by the same writer";
$lvl21_1->bgImg = "url('assets/img/whitebg.jpg')";
$lvl21_1->key = "graham greene";
$lvl21_1->questionImg = array("24/24_a.jpg","24/24_b.JPG");
$lvl21_1->color = "black";

$lvl22_2 = new Level();
$lvl22_2->lvlHead = "Level 25";
$lvl22_2->lvl = "25";
$lvl22_2->type = "basic";
$lvl22_2->question = 'X is a clan of people who are mercenaries that communicate using gestural language with no facial expression. They practice a special form of martial art and teaching this to others is forbidden. Identify X. (Hint: Silence can be of three kinds)';
$lvl22_2->bgImg = "url('assets/img/whitebg.jpg')";
$lvl22_2->key = "ademre";
$lvl22_2->questionImg = "";
$lvl22_2->color = "black";


$lvl21 = new Level();
$lvl21->lvlHead = "Level 26";
$lvl21->lvl = "26";
$lvl21->type = "image";
$lvl21->question = "Identify the link between these two images.";
$lvl21->bgImg = "url('assets/img/whitebg.jpg')";
$lvl21->key = "emma watson";
$lvl21->questionImg =  array("26/26_a.jpg","26/26_b.jpg");
$lvl21->color = "black";

$lvl22 = new Level();
$lvl22->lvlHead = "Level 27";
$lvl22->lvl = "27";
$lvl22->type = "image";
$lvl22->question = "Identify the author";
$lvl22->bgImg = "url('assets/img/whitebg.jpg')";
$lvl22->key = "neil gaiman";
$lvl22->questionImg =  array("27/1.jpg","27/2.jpg");
$lvl22->color = "black";

$lvl23 = new Level();
$lvl23->lvlHead = "Level 28";
$lvl23->lvl = "28";
$lvl23->type = "image";
$lvl23->question = "After looking at the given pictures, which brand comes to mind?";
$lvl23->bgImg = "url('assets/img/whitebg.jpg')";
$lvl23->key = "head & shoulders";
$lvl23->questionImg =  array("28/1.jpg","28/2.jpg");
$lvl23->color = "black";

// $lvl24 = new Level();
// $lvl24->lvlHead = "Level 29";
// $lvl24->lvl = "29";
// $lvl24->type = "image";
// $lvl24->question = "Identify the link between these two pictures?";
// $lvl24->bgImg = "url('assets/img/whitebg.jpg')";
// $lvl24->key = "april bowlby";
// $lvl24->questionImg = null;
// $lvl24->color = "black";

$lvl24 = new Level();
$lvl24->lvlHead = "Level 29";
$lvl24->lvl = "29";
$lvl24->type = "basic";
$lvl24->question = "What do a wrestling coach, paper company office manager and electronics salesman have in common?";
$lvl24->bgImg = "url('assets/img/whitebg.jpg')";
$lvl24->key = "steve carell";
$lvl24->questionImg = null;
$lvl24->color = "white";

/*$lvl24 = new Level();
$lvl24->lvlHead = "Level 29";
$lvl24->lvl = "29";
$lvl24->type = "image";
$lvl24->question = "Its not like the others";
$lvl24->bgImg = "url('assets/img/whitebg.jpg')";
$lvl24->key = "i luv encryption";
$lvl24->questionImg = array("29a.jpg","29c.png");
$lvl24->color = "black";*/

$lvl29 = new Level();
$lvl29->lvlHead = "Level 30";
$lvl29->lvl = "30";
$lvl29->type = "image";
$lvl29->question = "Identify the director";
$lvl29->bgImg = "url('assets/img/whitebg.jpg')";
$lvl29->key = "m. night shyamalan";
$lvl29->questionImg = array("33_1.jpg","33_2.jpg","33_3.jpg");
$lvl29->color = "black";

/*$lvl29 = new Level();
$lvl29->lvl = "30";
$lvl29->type = "custom";
$lvl29->key = "voidimg15img14img13img12img11img10img9img8img7img6img5img4img3img2img1";
$lvl29->filename = "levels/puzzle_lvl.php";*/

$lvl30 = new Level();
$lvl30->lvlHead = "Level 31";
$lvl30->lvl = "31";
$lvl30->type = "basic";
$lvl30->question = "Name the pop rock duo who sung the theme song of the show that became the no. 1 single on American pop charts 
(Clue: All the characters in this show are named after a soap opera that was aired by ABC)";
$lvl30->bgImg = "url('assets/img/whitebg.jpg')";
$lvl30->key = "the rembrandts";
$lvl30->questionImg = null;
$lvl30->color = "white";

/*$lvl30 = new Level();
$lvl30->lvl = "31";
$lvl30->type = "custom";
$lvl30->key = "";
$lvl30->filename = "levels/auth_lvl.php";*/

$lvlz = new Level();
$lvlz->lvlHead = "Level 32: Valley of Sounds";
$lvlz->lvl = "32";
$lvlz->type = "basic";
$lvlz->question = "<audio controls=''>
<source src='assets/img/20	a.wav' type='audio/mpeg'/>
</audio>";
$lvlz->bgImg = "url('assets/img/whiteBG.jpg')";
$lvlz->key = "holla";
$lvlz->questionImg = null;
$lvlz->color = "black";

// $lvlz = new Level();
// $lvlz->lvlHead = "Level 32 : Valley of Sounds";
// $lvlz->lvl = "32";
// $lvlz->type = "basic";
// $lvlz->question = "25.5788|91.8933";
// $lvlz->bgImg = "url('assets/img/whitebg.jpg')";
// $lvlz->key = "shillong";
// $lvlz->questionImg = null;
// $lvlz->color = "white";

$lvla = new Level();
$lvla->lvlHead = "Level 33";
$lvla->lvl = "33";
$lvla->type = "basic";
$lvla->question = "213471118294776";
$lvla->bgImg = "url('assets/img/whitebg.jpg')";
$lvla->key = "lucas numbers";
$lvla->questionImg = null;
$lvla->color = "black";


$lvlb = new Level();
$lvlb->lvlHead = "Level 34";
$lvlb->lvl = "34";
$lvlb->type = "image";
$lvlb->question = "Its not what you think";
$lvlb->bgImg = "url('assets/img/whitebg.jpg')";
$lvlb->key = "i luv encryption";
$lvlb->questionImg = array("29a.jpg","29c.png");
$lvlb->color = "black";

// $lvlb = new Level();
// $lvlb->lvlHead = "Level 34";
// $lvlb->lvl = "34";
// $lvlb->type = "basic";
// $lvlb->question = ".-- .... ---<br>Hint: Someone related to it";
// $lvlb->bgImg = "url('assets/img/whitebg.jpg')";
// $lvlb->key = "tedros adhanom";
// $lvlb->questionImg = null;
// $lvlb->color = "white";

$lvlc = new Level();
$lvlc->lvlHead = "Level 35";
$lvlc->lvl = "35";
$lvlc->type = "basic";
$lvlc->question = "The lead characters from these two series are addicted to narcotics, solve cases and love music.  One is based on the other, who would that be?";
$lvlc->bgImg = "url('assets/img/whitebg.jpg')";
$lvlc->key = "gregory house";
$lvlc->questionImg = null;
$lvlc->color = "black";

$lvld = new Level();
$lvld->lvlHead = "Level 36";
$lvld->lvl = "36";
$lvld->type = "basic";
$lvld->question = "This character played the role of a bisexual in a series and later acted in another series where he/she was referred using a number.  
Guess the actor’s name.";
$lvld->bgImg = "url('assets/img/whitebg.jpg')";
$lvld->key = "olivia wilde";
$lvld->questionImg = null;
$lvld->color = "black";


$lvle = new Level();
$lvle->lvlHead = "Level 37";
$lvle->lvl = "37";
$lvle->type = "basic";
$lvle->question = "If 4+5+6 = 203038, 5+6+7 = 304258, 6+7+8 = ? ";
$lvle->bgImg = "url('assets/img/whitebg.jpg')";
$lvle->key = "425682";
$lvle->questionImg = null;
$lvle->color = "black";


$lvlf = new Level();
$lvlf->lvlHead = "Level 38";
$lvlf->lvl = "38";
$lvlf->type = "basic";
$lvlf->question = "<audio controls=''>
<source src='assets/img/audio.mp3' type='audio/mpeg'/>
</audio> Identify the breed of dog that is featured in this show";
$lvlf->bgImg = "url('assets/img/whiteBG.jpg')";
$lvlf->key = "australian cobberdog";
$lvlf->questionImg = null;
$lvlf->color = "black";

// $lvlf = new Level();
// $lvlf->lvlHead = "Level 38";
// $lvlf->lvl = "38";
// $lvlf->type = "basic";
// $lvlf->question = ": ( ) {  : | :  &  } ; :     :'I ran here 1st'";
// $lvlf->bgImg = "url('assets/img/whitebg.jpg')";
// $lvlf->key = "ibm system 360";
// $lvlf->questionImg = null;
// $lvlf->color = "black";

$lvlg = new Level();
$lvlg->lvlHead = "Level 39";
$lvlg->lvl = "39";
$lvlg->type = "basic";
$lvlg->question = 'They accuse me of seeking money,  
I like windows plenty, I don’t work with the Trojans, yet I am feared by many';
$lvlg->bgImg = "url('assets/img/whitebg.jpg')";
$lvlg->key = "wannacry";
$lvlg->questionImg = null;
$lvlg->color = "black";


$lvlh = new Level();
$lvlh->lvlHead = "Level 40";
$lvlh->lvl = "40";
$lvlh->type = "basic";
$lvlh->question = "You have 999 cakes, one of which is rotten. 
You would like to find out which cake is rotten by making a few men eat the cake. 
A cake can be divided into as many as 999 slices and if a man eats a slice of rotten cake, he would die in 10 mins.
A man can eat more than 1 slice. What are the minimum number of men that are required through which you’ll be able to find out the rotten cake in 10 mins?";
$lvlh->bgImg = "url('assets/img/whitebg.jpg')";
$lvlh->key = "10";
$lvlh->questionImg =  null;
$lvlh->color = "black";

$lvlEnd = new Level();
$lvlEnd->lvlHead = "Level 41";
$lvlEnd->lvl = "41";
$lvlEnd->type = "basic";
$lvlEnd->question = "There are 5 robbers in a house. Robbers have hierarchy R1, R2, R3, R4 and R5. R1 designation is the highest and R5 is the lowest. These robbers have three characteristics : a. Every robber is so greedy that he can even take lives to make more money. b. Every robber desperately wants to stay alive. c. They are all very intelligent. There are total 100 diamonds in the house. The person with the highest designation is expected to make the distribution. If the majority on the group does not agree to the distribution proposed, the highest designation pirate will be killed. Only the person with the highest designation can be killed at any moment. What is the right distribution of diamonds proposed by the R1 so that he is not killed and does make maximum amount? (For eg. If you’re answer is 40,00,20,20,20 – write as 4000202020)";
$lvlEnd->bgImg = "url('assets/img/whitebg.jpg')";
$lvlEnd->key = "9800010001";
$lvlEnd->questionImg = null;
$lvlEnd->color = "black";

$lvli = new Level();
$lvli->lvlHead = "Level 42";
$lvli->lvl = "42";
$lvli->type = "basic";
$lvli->question = 'X and Y played the lead roles in a TV series after having played the role of pilots in a film.  Name the TV series. (Clue: This film was a parody of a feature film that was released in 1986)';
$lvli->bgImg = "url('assets/img/whitebg.jpg')";
$lvli->key = "two and a half men";
$lvli->questionImg = null;
$lvli->color = "black";

$lvlj = new Level();
$lvlj->lvlHead = "Level 43";
$lvlj->lvl = "43";
$lvlj->type = "image";
$lvlj->question = "This is an epic question";
$lvlj->bgImg = "url('assets/img/whitebg.jpg')";
$lvlj->key = "odyssey";
$lvlj->questionImg =  array("43_a.gif","43_b.gif");
$lvlj->color = "black";

$lvlk = new Level();
$lvlk->lvlHead = "Level 44";
$lvlk->lvl = "44";
$lvlk->type = "basic";
$lvlk->question = 'An insect mutation was named after one of the main characters of this show.  Name the TV show. (Clue: The character name was also part of the former name of a famous TV series)';
$lvlk->bgImg = "url('assets/img/whitebg.jpg')";
$lvlk->key = "south park";
$lvlk->questionImg = null;
$lvlk->color = "black";

$lvln = new Level();
$lvln->lvlHead = "Level 45";
$lvln->lvl = "45";
$lvln->type = "basic";
$lvln->question = 'A XY pound weight broke into X pieces. However, it was found that it could weigh out any amount of flour, from 1 pound to XY pounds, using these X pieces using a balance. What were the weights of the X pieces? (Write them as a single number in ascending order of their weights)';
$lvln->bgImg = "url('assets/img/whitebg.jpg')";
$lvln->key = "13927";
$lvln->questionImg = null;
$lvln->color = "black";

$lvlaa = new Level();
$lvlaa->lvlHead = "Level 46";
$lvlaa->lvl = "46";
$lvlaa->type = "basic";
$lvlaa->question = 'This show was created by twin brothers and the music was composed by two members of an electronic band that was formed in Texas.  Name the band.';
$lvlaa->bgImg = "url('assets/img/whitebg.jpg')";
$lvlaa->key = "survive";
$lvlaa->questionImg = null;
$lvlaa->color = "black";



// $lvlaaa = new Level();
// $lvlaaa->lvlHead = "Level 47";
// $lvlaaa->lvl = "47";
// $lvlaaa->type = "image";
// $lvlaaa->question = "gimlwp pn mfdgsutxamf bxgzlgmwzc<br>cipher";
// $lvlaaa->bgImg = "url('assets/img/whitebg.jpg')";
// $lvlaaa->key = "claude elwood shannon";
// $lvlaaa->questionImg =  array("xxx.jpg");
// $lvlaaa->color = "black";

$lvl48 = new Level();
$lvl48->lvlHead = "Level 47";
$lvl48->lvl = "47";
$lvl48->type = "basic";
$lvl48->question = "<audio controls=''>
<source src='assets/img/48_audio.mp3' type='audio/mpeg'/>
</audio> <br> Identify the actor in the audio clip";
$lvl48->bgImg = "url('assets/img/whiteBG.jpg')";
$lvl48->key = "tim baltz";
$lvl48->questionImg = null;
$lvl48->color = "black";

$lvlaaa = new Level();
$lvlaaa->lvlHead = "Level 48";
$lvlaaa->lvl = "48";
$lvlaaa->type = "basic";
$lvlaaa->question = 'A hocrux is an object that contains a fragment of a wizard’s soul. Voldemort has fragmented his soul into 7 hocruxes and hidden them in different parts of the wizarding world. Harry Potter, Hermoine Granger and Ron Weasley are hunting the hocruxes to kill him and save the world from evil. The latitude co-ordinates of the hocrux location is the same as A, the country where the lead role of a comedy show is attempting to bring the character’s story to life.  Name the country.';
$lvlaaa->bgImg = "url('assets/img/47_bg.jpg')";
$lvlaaa->key = "ukraine";
$lvlaaa->questionImg = null;
$lvlaaa->color = "black";

$lvl_49 = new Level();
$lvl_49->lvlHead = "Level 49";
$lvl_49->lvl = "49";
$lvl_49->type = "image";
$lvl_49->question = 'I do see the beauty in the rules, the invisible code of chaos hiding behind the menacing face of order';
$lvl_49->bgImg = "url('assets/img/whitebg.jpg')";
$lvl_49->key = "winner winner chicken dinner";
$lvl_49->questionImg = array("rob.png");
$lvl_49->color = "black";

$endFinal = new Level();
$endFinal->lvl = "49";
$endFinal->type = "endFinal";
$endFinal->key = "qwe";






$levels = array("",$lvl1,$lvl2,$lvl3,$lvl4,$lvl5,$lvl6,$lvl7,$lvl8,$lvl9,$lvl10,$lvl11,$lvl11_1,$lvl11_2,$lvl11_3,
$lvl12,$lvl13,$lvl14,$lvl15,$lvl16,$lvl17,$lvl18,$lvl19,$lvl20,$lvl21_1,$lvl22_2,$lvl21,$lvl22,$lvl23,$lvl24,$lvl29,$lvl30,$lvlz,$lvla,$lvlb,$lvlc,$lvld,$lvle,$lvlf,
$lvlg,$lvlh,$lvlEnd,$lvli,$lvlj,$lvlk,$lvln,$lvlaa, $lvl48, $lvlaaa,$lvl_49, $endFinal);

?>
