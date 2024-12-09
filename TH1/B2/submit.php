<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kết quả bài thi</title>
</head>
<body>
    <h1>Kết quả bài thi</h1>
    <?php
    $filePath = 'Quiz.txt';

    if (file_exists($filePath)) {
        // Đọc file vào một mảng
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $correctAnswers = [];
        $currentQuestionIndex = 0;

        foreach ($lines as $line) {
            if (strpos($line, 'ANSWER:') === 0) {
                $correctAnswers[$currentQuestionIndex] = trim(substr($line, 7));
                $currentQuestionIndex++;
            }
        }

        $score = 0;
        $totalQuestions = count($correctAnswers);

        foreach ($correctAnswers as $index => $correctAnswer) {
            if (isset($_POST['question' . $index]) && $_POST['question' . $index] === $correctAnswer) {
                $score++;
            }
        }

        echo '<p>Số câu đúng: ' . $score . '/' . $totalQuestions . '</p>';
        echo '<p>Số điểm: ' . ($score / $totalQuestions * 10) . '/10</p>';
    } else {
        echo '<p>File câu hỏi không tồn tại.</p>';
    }
    ?>
    <a href="index.php">Làm lại bài thi</a>
</body>
</html>
