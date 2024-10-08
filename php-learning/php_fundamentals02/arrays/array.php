<?php
// Indexed Array
$firstName = ["Luigi", "Juan", "Maria", "Pepe"];

// Associative Array
$beer = [
    "name" => "Pale Ale",
    "brewery" => "Local Brewery",
    "type" => "Ale",
    "alcohol_content" => "5.5%"
];

// Multidimensional Array
$fruits = [
    "tropical" => [
        "mango" => ["color" => "yellow", "taste" => "sweet"],
        "pineapple" => ["color" => "brown", "taste" => "tart"],
    ],
    "berries" => [
        "strawberry" => ["color" => "red", "taste" => "sweet"],
        "blueberry" => ["color" => "blue", "taste" => "sweet"],
    ],
];

// Array Methods
$colors = ["Red", "Blue", "Green", "Yellow", "Purple"];
$colorCount = count($colors);
$colors[] = "Black";
array_push($colors, "Magenta");
$lastColor = array_pop($colors);

$moreColors = ["Orange", "Pink", "Cyan", "Magenta", "Teal"];
$mergedColors = array_merge($colors, $moreColors);

// Check if "Red" exists
$redExists = in_array("Red", $colors);

?>
<?php include "../includes/index.php"; ?>

<section>
    <article>
        <h2>Arrays</h2>

        <h3>Indexed Arrays in PHP</h3>
        <p><?php echo htmlspecialchars(json_encode($firstName)); ?></p>
        <p>The value at index 2 in the <strong>\$firstName</strong> array is: <strong><?php echo htmlspecialchars($firstName[2]); ?></strong>.</p>

        <p>All names in the array:</p>
        <?php foreach ($firstName as $name): ?>
            <p>- <?php echo htmlspecialchars($name); ?></p>
        <?php endforeach; ?>

        <br>

        <h3>Associative Arrays in PHP</h3>
        <p>The value of the key <strong>'name'</strong> in the <strong>\$beer</strong> array is: <strong><?php echo htmlspecialchars($beer['name']); ?></strong>.</p>

        <p>Details of the beer:</p>
        <?php foreach ($beer as $key => $value): ?>
            <p><strong><?php echo htmlspecialchars($key); ?></strong> => <?php echo htmlspecialchars($value); ?></p>
        <?php endforeach; ?>

        <br>

        <h3>Multidimensional Array</h3>
        <p>A multidimensional array contains one or more arrays as its elements...</p>

        <?php foreach ($fruits as $category => $fruitList): ?>
            <h4><?php echo strtoupper(htmlspecialchars($category)); ?>:</h4>
            <?php foreach ($fruitList as $name => $attributes): ?>
                <p>Fruit: <strong><?php echo htmlspecialchars($name); ?></strong> - Color: <strong><?php echo htmlspecialchars($attributes['color']); ?></strong>, Taste: <strong><?php echo htmlspecialchars($attributes['taste']); ?></strong></p>
            <?php endforeach; ?>
        <?php endforeach; ?>

        <br>

        <h3>Methods Array</h3>
        <?php for ($i = 0; $i < $colorCount; $i++): ?>
            <p><?php echo htmlspecialchars($colors[$i]); ?></p>
        <?php endfor; ?>

        <p>There are <?php echo $colorCount; ?> elements in the array.</p>
        <p>The structure of the array is:</p>
        <pre><?php echo htmlspecialchars(print_r($colors, true)); ?></pre>

        <p>Added a new element: <?php echo htmlspecialchars($colors[$colorCount]); ?></p>
        <p>Last color removed: <?php echo htmlspecialchars($lastColor); ?></p>

        <?php if ($redExists): ?>
            <p>'Red' exists in the array.</p>
        <?php endif; ?>

        <p>Merged Colors:</p>
        <?php foreach ($mergedColors as $color): ?>
            <p><?php echo htmlspecialchars($color); ?></p>
        <?php endforeach; ?>

    </article>
</section>

<?php include "../includes/footer.php"; ?>