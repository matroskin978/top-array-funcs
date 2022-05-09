<?php

// https://www.php.net/manual/ru/ref.array.php

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

// count - https://www.php.net/manual/ru/function.count.php
$data = [1, 2, 3, 4, 5,];
$data = [1, 2, 3, 4, 5, [1, 2, 3, [1, 2, 3]],];
// echo count($data, 1);

// ====================================

// implode - https://www.php.net/manual/ru/function.implode.php

$data = range(1, 10);
//echo implode(', ', $data);

// ====================================

// explode - https://www.php.net/manual/ru/function.explode.php

$str = '1, 2, 3, 4, 5, 6, 7, 8, 9, 10';
//debug(explode(', ', $str, 3));

$file = 'dir1/dir2/dir3/file_name.ext';
//debug(explode('.', $file)[1]);

// ====================================

// array_chunk - https://www.php.net/manual/ru/function.array-chunk.php
$data = range(1, 10);

?>
<!--
<table width="300" border="1">
    <tr>
        <?php $i = 1; foreach ($data as $item): ?>
        <td><?= $item; ?></td>
        <?php if ($i % 3 == 0): ?>
    </tr>
    <tr>
        <?php endif; ?>
        <?php $i++; endforeach; ?>
    </tr>
</table>

<table width="300" border="1">
    <?php foreach (array_chunk($data, 3) as $tr): ?>
        <tr>
            <?php foreach ($tr as $td): ?>
                <td><?= $td; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
-->
<?php

// ====================================

// compact - https://www.php.net/manual/ru/function.compact.php

$title = 'Page title';
$keys = 'Page keywords';
$desc = 'Page description';
$products = [
    [
        'title' => 'Product 1',
        'price' => 100,
    ],
    [
        'title' => 'Product 2',
        'price' => 200,
    ],
];

/*$data = [
    'title' => $title,
    'keys' => $keys,
    'desc' => $desc,
    'products' => $products,
];*/

$data = compact('title', 'keys', 'desc', 'products');

debug($data);

