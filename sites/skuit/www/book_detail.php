<?php
$jsonContent = file_get_contents('books_storage.json');
$books = json_decode($jsonContent, true);

$bookId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$selectedBook = null;
foreach ($books as $book) {
    if ($book['id'] === $bookId) {
        $selectedBook = $book;
        break;
    }
}

if (!$selectedBook) {
    header('HTTP/1.0 404 Not Found');
    echo "Книга не найдена";
    exit;
}

$studentName = "Алексей Карабанов";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $selectedBook['name']; ?> — Детальная страница</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header, footer {
            background-color: #333;
            color: white;
            padding: 15px 20px;
            text-align: center;
            flex-shrink: 0;
        }
        main {
            flex: 1;
            padding: 20px;
            background-color: white;
            max-width: 800px;
            margin: 20px auto 0 auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            margin-top: 0;
        }
        .back-link {
            margin-top: 20px;
            text-align: center;
        }
        .back-link a {
            color: #333;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #333;
            border-radius: 3px;
        }
        .back-link a:hover {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h2>Книжный каталог</h2>
        <p>Студент: <?php echo $studentName; ?></p>
    </header>
    <main>
        <h1><?php echo $selectedBook['name']; ?></h1>
        <p><strong>Автор:</strong> <?php echo $selectedBook['author']; ?></p>
        <p><strong>Год издания:</strong> <?php echo $selectedBook['year']; ?></p>
        <p><strong>Описание:</strong> <?php echo $selectedBook['description']; ?></p>
        <div class="back-link">
            <a href="/books.php">← Вернуться к списку книг</a>
        </div>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Книжный каталог. Все права защищены.</p>
    </footer>
</body>
</html>