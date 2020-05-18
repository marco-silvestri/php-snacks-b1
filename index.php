<?php

// Snack 1

// Define array
$matches = [
    [
        'home' => 'Lakers',
        'away' => 'Golden State',
        'home_score' => rand(50, 150),
        'away_score' => rand(50, 150)
    ],
    [
        'home' => 'Chicago Bulls',
        'away' => 'Boston Celtic',
        'home_score' => rand(50, 150),
        'away_score' => rand(50, 150)
    ],
    [
        'home' => 'San Antonio Spurs',
        'away' => 'Paolo Duzioni',
        'home_score' => rand(50, 150),
        'away_score' => rand(50, 150)
    ],
    [
        'home' => 'Classe 12',
        'away' => 'Classe 11',
        'home_score' => rand(50, 150),
        'away_score' => rand(50, 150)
    ]
];
?>

<!-- HTML Print -->
<h1>Results DAY#1</h1>
<ul>
<?php
for ($i=0; $i < count($matches); $i++) : ?>
    <li>
        <?php echo $matches[$i]['home']; ?> - <?php echo $matches[$i]['away']; ?> | 
        <?php echo $matches[$i]['home_score']; ?> - <?php echo $matches[$i]['away_score']; ?>
    </li>
<?php endfor ?>
</ul>

<?php 
// Snack 2
$data = $_GET;

// Check empty
if ( empty($data['name']) || empty($data['mail']) || empty($data['age'])){
    echo 'Check parameters';
}

// Check name
elseif (strlen($data['name']) <= 3){
    echo 'Forbidden, name is too short';
}

// Check mail
elseif (strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false){
    echo 'Enter a valid email';
}

// Check age
elseif (!is_numeric($data['age'])){
    echo 'Age is not valid';
}

// Access
else {
    echo 'You are in!';
}
?>