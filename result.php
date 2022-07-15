

<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form>
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="Х²">Х²</option> 
    </select>
    <input type="text" name="x2">
    <button>Кнопка<?php
if (empty($_GET)) {
    return 'Ничего не передано!';
}

if (empty($_GET['operation'])) {
    return 'Не передана операция';
}

if (empty($_GET['x1']) || empty($_GET['x2'])) {
    return 'Не переданы аргументы';
}

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        $result = $x1 / $x2;
        break;
    case 'Х²':
        $result = pow($x1,$x2);
        break;
    default:
        return 'Операция не поддерживается';
}
?>
</button>
    <h1><? print($result) ?></h1>
</form>
</body>
</html>

