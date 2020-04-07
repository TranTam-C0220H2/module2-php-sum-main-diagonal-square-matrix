<?php
$size = $_GET['size'];
$indexMainDiagonal = [];
$sumMainDiagonal = 0;
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <table border="1">
        <?php for ($i = 0; $i < $size; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < $size; $j++): ?>
                    <td><input type="number" name="<?php echo 'number' . $i . $j ?>"></td>
                    <?php if ($i == $j): ?>
                        <?php array_push($indexMainDiagonal, 'number' . $i . $j) ?>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <input type="submit" value="Tinh tong duong cheo chinh">
</form>
<?php
foreach ($indexMainDiagonal as $value) {
    $sumMainDiagonal += $_POST[$value];
}
echo $sumMainDiagonal;
?>
</body>
</html>
