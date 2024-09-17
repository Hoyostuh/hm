<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $diff = (new DateTime($date1))->diff(new DateTime($date2));
    $days = $diff->days;
    $minutes = $days * 1440;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Расчет дней и минут</title>
</head>
<body>
    <form method="post">
        <input type="date" name="date1" value="<?= htmlspecialchars($date1 ?? '') ?>" required>
        <input type="date" name="date2" value="<?= htmlspecialchars($date2 ?? '') ?>" required>
        <button type="submit">Рассчитать</button>
    </form>

    <?php if (!empty($days)): ?>
        <p>Дней: <?= $days ?></p>
        <p>Минут: <?= $minutes ?></p>
    <?php endif; ?>
</body>
</html>
