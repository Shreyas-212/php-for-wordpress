<?php
$names = array('Brad', 'John', 'Jane');
$count = 0;

while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count].</li>";
    $count++;
}
?>


<?php
$animalSounds = array(
    'cat' => 'meow',
    'dog' => 'bark',
    'pig' => 'oink'
);

echo $animalSounds['dog'];
?>
