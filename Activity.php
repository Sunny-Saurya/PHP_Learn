<?php

$questions = [
    [
        'question' => 'What is the capital of Nigeria?',
        'options' => ['Lagos', 'Abuja', 'Kano', 'Ibadan'],
        'answer' => 1
    ],
    [
        'question' => 'What is the capital of Ghana?',
        'options' => ['Accra', 'Kumasi', 'Tamale', 'Cape Coast'],
        'answer' => 0
    ],
    [
        'question' => 'What is the capital of South Africa?',
        'options' => ['Johannesburg', 'Cape Town', 'Pretoria', 'Durban'],
        'answer' => 2
    ],
    [
        'question' => 'What is the capital of Kenya?',
        'options' => ['Nairobi', 'Mombasa', 'Kisumu', 'Nakuru'],
        'answer' => 0
    ],
    [
        'question' => 'What is the capital of Egypt?',
        'options' => ['Cairo', 'Alexandria', 'Giza', 'Luxor'],
        'answer' => 0
    ],
    [
        'question' => 'What is the capital of Morocco?',
        'options' => ['Rabat', 'Casablanca', 'Marrakech', 'Fez'],
        'answer' => 0
    ],
    [
        'question' => 'What is the capital of Algeria?',
        'options' => ['Algiers', 'Oran', 'Constantine', 'Annaba'],
        'answer' => 0
    ],
    [
        'question' => 'What is the capital of Tunisia?',
        'options' => ['Tunis', 'Sfax', 'Sousse', 'Kairouan'],
        'answer' => 0
    ],
    [
        'question' => 'What is the capital of Libya?',
        'options' => ['Tripoli', 'Benghazi', 'Misrata', 'Zawiya'],
        'answer' => 0
    ],
    [
        'question' => 'What is the capital of Sudan?',
        'options' => ['Khartoum', 'Omdurman', 'Port Sudan', 'Kassala'],
        'answer' => 0
    ],
    [
        'question' => 'What is the capital of China?',
        'options' => ['New delhi','Misrata', 'Beizing', 'Kassala' ],
        'answer' => 2
    ]
];


function displayQuiz($questions) {
    foreach ($questions as $index => $question) {
        echo "<p><strong>Question " . ($index + 1) . ":</strong> " . $question['question'] . "</p>";
        foreach ($question['options'] as $option) {
            echo "<input type='radio' name='q" . ($index + 1) . "' value='$option'> $option<br>";
        }
        echo "<br>";
    }
}


function evaluateQuiz($questions, $userAnswers) {
    $score = 0;
    foreach ($questions as $index => $question) {
        $userAnswer = $userAnswers['q' . ($index + 1)];
        if ($userAnswer === $question['answer']) {
            $score++;
        }
    }
    return $score;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userAnswers = $_POST;
    $score = evaluateQuiz($questions, $userAnswers);
    echo "<h2>Your Score: $score / " . count($questions) . "</h2>";
} else {
    
    echo "<form method='POST'>";
    displayQuiz($questions);
    echo "<input type='submit' value='Submit Quiz'>";
    echo "</form>";
}
?>