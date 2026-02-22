<?php
$count = 1;

while ($count <= 5) {
    echo "<p>Count is $count</p>";
    $count++;
}
?>

<?php
$names = ['John', 'Jane', 'Brad'];

foreach ($names as $name) {
    echo "<p>Hello $name</p>";
}
?>

<?php
for ($i = 1; $i <= 3; $i++) {
    echo "<p>Item $i</p>";
}
?>

<?php
$count = 1;

do {
    echo "<p>Count is $count</p>";
    $count++;
} while ($count <= 3);
?>
