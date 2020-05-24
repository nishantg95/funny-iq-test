<?php
if(!isset($_GET['q_type']) || empty($_GET['q_type'])){
   $error->error_response = 'no q_type set, q_type must be set to one of the following values {\'tf\'}';
   die(json_encode($error));
}
if($_GET['q_type'] != 'tf'){
    $error->error_response = 'invalid question type specified in q_type';
    die(json_encode($error));
}
$question_bank = [
    'The word, "mineral," can be spelled using only the letters found in the word, "parliament."',
    'This sequence of four words, "triangle, glove, clock, bicycle," corresponds to this sequence of numbers "3, 5, 12, 2."',
    '27 minutes before 7 o\'clock is 33 minutes past 5 o\'clock.',
    'The word "because" can be spelled by using the first letters of the words in the following sentence: Big Elephants Can Always Understand Small Elephants.',
    'If written backwards, the number, "one thousand, one hundred twenty-five," would be written "five thousand, two hundred eleven."',
    'Gary has only forty-eight dollars. If he borrows fifty-seven dollars from Jane and fifteen dollars from Jill, he can buy a bicycle that costs one hundred twenty dollars, (disregarding tax.)',
    'If a round analog clock featuring numbers 1-12 is hung on the wall upside down, the minute hand will point to the right of the viewer when the clock reads two forty-five.',
    'If the word, "quane," is understood to mean the same as the word, "den," then the following sentence is grammatically correct: "Looking out from my quane, I could see a wolf enter quane."',
    'If Richard looks into a mirror and touches his left ear with his right hand, Richard\'s image seems to touch its right ear with its left hand.',
    'If you leave the letters in the same order, but rearrange the spaces in the phrase, "Them eats on," it can be read as, "Theme at son."',
    'Each of the words, "auctioned, education, and cautioned," uses the same letters.',
    'John weighs 85 pounds. Jeff weighs 105 pounds. Jake weighs 115 pounds. Two of them standing together on the same scale could weigh 200 pounds.',
    'The seventh vowel appearing in this sentence is the letter "a."',
    'Nine chickens, two dogs, and three cats have a total of forty legs.',
    'Sixteen hours are to one day as twenty days are to June\'s length.',
    'In the English alphabet, there are exactly four letters between the letter "M" and the letter "G."',
    'If the word, "TAN," is written under the word, "SLY," and the word, "TOT," is written under "TAN," then the word, "SAT," is formed diagonally.',
    'By removing seven letters from the word, "motherhood," the word, "home," can be formed.',
    'If a thumb is a finger, then three gloves and three shoes normally hold thirty-five fingers and toes.',
    'The words, "every, how, hand, ever," can form common compound words using, respectively, "one, ever, finger, more."',
    'If Monday is the first day of the month, the very next Saturday is the fifth day of the month.',
    'Three of the following numbers add up to the number 31: 17, 3, 2, 19, 5.',
    'Fred will be four blocks from his starting place if he travels two blocks north, then three blocks east, and then two blocks south.',
    'The following words are the opposites of words that begin with the letter R: unreal, street, grasp, unwind, wrong.',
    'The following, disregarding punctuation, is spelled the same forwards as it is backwards: "Todd erases a red dot."',
    'The letters of the word, "sponged," appear in reverse alphabetical order.',
    'The numbers, 3-7-2-4-8-1-5, are read backwards as 5-1-8-4-2-7-3.',
    'The odd numbers in this group add up to an even number:  15, 32, 5, 13, 82, 7, 1.',
    'Without breaking or bending a toothpick, you can spell the word, "FIN," with exactly seven toothpicks, with no letter sharing a toothpick used by another letter.',
    'This sentence has thirty-five letters.'
];
$questions = array();
for($i = 1; $i <= 10; $i++){
    $question->question_id = $i;
    shuffle($question_bank);
    $question->question = array_pop($question_bank);
    $questions[] = clone $question;
    unset($question);
}
echo(json_encode($questions));
?>