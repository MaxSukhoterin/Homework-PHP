<?php
function book($name = '-', $name_author = "-", $surname_author = "-", $publisher = "-", $year = "-")
    {
    $card = <<<EOD
    <div class = "book-card" >
      <h3 class="book-title">Назва: $name</h3>
      <p class="book-author">Автор: $name_author $surname_author</p>
      <div class="book-meta">
        <span class="book-publisher">Видавництво: $publisher</span>
        <span class="book-year">Рік написання: $year р.</span>
      </div>
    </div>
    <br>
  EOD;
    return $card;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.book-card {
  width: 280px;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 12px;
  border: 1px solid #e2e8f0;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  font-family: sans-serif;
  transition: box-shadow 0.2s ease;
  border: solid 1px black;
  /* border-radius: 50%; */
}

.book-card:hover {
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
}

.book-title {
  margin: 0 0 6px 0;
  font-size: 18px;
  font-weight: 700;
  color: #1e293b;
}

.book-author {
  margin: 0 0 12px 0;
  font-size: 14px;
  color: #64748b;
  font-style: italic;
}
.book-meta {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 12px;
  padding: 6px 10px;
  background-color: #f8fafc;
  border-left: 3px solid #2563eb;
  border-radius: 0 6px 6px 0;
  font-size: 12px;
  color: #64748b;
}

.book-publisher {
  font-weight: 600;
  color: #334155;
}

.book-year {
  background-color: #e2e8f0;
  color: #475569;
  padding: 2px 6px;
  border-radius: 4px;
  font-weight: 500;
}
    </style>
</head>
<body>
  <?php
  echo book();
  echo book(1984, "Джордж", "Орвелл", "А-ба-ба-га-ла-ма-га", 1949);
  ?>
</body>
</html>
