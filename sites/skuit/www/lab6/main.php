<? 
$product1 = "Смартфон Apple iPhone 15";  
$product2 = "Ноутбук Lenovo ThinkPad";  
$product3 = "Умные часы Samsung Galaxy Watch";  
$product4 = "Наушники AirPods Pro";  
$product5 = "Фитнес-браслет Xiaomi Mi Band";  
$product6 = "Планшет iPad Air";  
$product7 = "Внешний жесткий диск Seagate";  
$product8 = "Геймпад Sony DualSense";  
$product9 = "Монитор LG UltraWide";  
$product10 = "Клавиатура Logitech G915";  
$product11 = "Мышь Razer DeathAdder";  
$product12 = "Наушники Sony WH-1000XM4";  
$product13 = "Роутер TP-Link Archer";  
$product14 = "Веб-камера Logitech C930e";  
$product15 = "Акустическая система JBL";  
 
$price1 = 79999;  
$price2 = 64999;  
$price3 = 24999;  
$price4 = 19999;  
$price5 = 2999;  
$price6 = 49999;  
$price7 = 7999;  
$price8 = 7499;  
$price9 = 29999;  
$price10 = 14999;  
$price11 = 6999;  
$price12 = 29999;  
$price13 = 4999;  
$price14 = 9999;  
$price15 = 14999;  
  
$products = [  
    $product1, $product2, $product3, $product4, $product5,  
    $product6, $product7, $product8, $product9, $product10,  
    $product11, $product12, $product13, $product14, $product15  
];  
  
$prices = [  
    $price1, $price2, $price3, $price4, $price5,  
    $price6, $price7, $price8, $price9, $price10,  
    $price11, $price12, $price13, $price14, $price15  
];  
?>


<div class="product-list">
    <h2>Товары и цены</h3>

    <?php for ($i = 0; $i < count ($products); $i++ ) { ?>
    <div class="product-card">
        <div class="product-name"><?=$products[$i]?></div>
        <div class="product-price"><?= $prices[$i]?> ₽</div>
    </div>
    <?php } ?>
</div>

<?php
$products2 = [
    "Смартфон Apple iPhone 15", "Ноутбук Lenovo ThinkPad", "Умные часы Samsung Galaxy Watch", "Наушники AirPods Pro", "Фитнес-браслет Xiaomi Mi Band", "Планшет iPad Air", "Внешний жесткий диск Seagate", "Геймпад Sony DualSense", "Монитор LG UltraWide", "Клавиатура Logitech G915"
];
$prices2 = [
    "79999", "64999", "24999", "19999", "2999", "49999", "7999", "7499", "29999", "14999"
]
?>

<div class="product-list">
    <h2>Товары и цены</h2>

    <?php for ($i = 0; $i < count($products2); $i++) { ?>
    <div class="product-card">
        <div class="product-name"><?= $products2[$i]?></div>
    <div class="product-price"><?= $prices2[$i]?> ₽</div>
    </div>
<?php } ?>
</div>

<?php
$items = [
    ["Игра Монополия", 999.99],
    ["Игра UNO", 449.50],
    ["Диск Одни из нас part.2", 5299.75],
    ["Беспроводные наушники Marshal", 8349.90],
    ["Sony PlayStation 4", 49999.99],
    ["Samsung S9", 7999.00],
    ["Наушники bayerdinamick dt 770 pro", 24999.50],
    ["Микрофон akg p420", 41999.99],
    ["Ноутбук Apple MacBook pro", 199999.99],
    ["Клавиатура Marvel", 999.99],
]
?>

<?php
$goods = [
['name' => 'Топор', 'price' => 2000],
['name' => 'нож', 'price' => 1000],
['name' => 'Бензопила', 'price' => 6000],
['name' => 'Пила', 'price' => 1000],
['name' => 'Мишки гамми', 'price' => 200],
['name' => 'Машинка Хот вилс', 'price' => 500],
['name' => 'Молоток', 'price' => 1200],
['name' => 'Чехол для молотка', 'price' => 1000],
['name' => 'Чехол для топора', 'price' => 1500],
['name' => 'Молот Тора', 'price' => 10000000],
]
?>

<div class="product-list">
    <h2>Товары и цены 4 </h3>

    <?php foreach ($goods as $item) { ?>
    <div class="product-card">
        <div class="product-name"><?= $item['name']?></div>
        <div class="product-price"><?= $item['price']?></div>
    </div>
<?php } ?>
</div>
<?php
$goodsRandom = [];
for ($i = 0; $i < 100; $i++) {
 $goodsRandom []= ['name' => $products[array_rand($products)], 'price' => $prices[array_rand($prices)]];
}

?>
<div class="product-list">
    <h2>Товары и цены 5 </h3>

    <?php foreach ($goodsRandom as $item) { ?>
    <div class="product-card">
        <div class="product-name"><?= $item['name']?></div>
        <div class="product-price"><?= $item['price']?></div>
    </div>
<?php } ?>
</div>
<?php
?>
<div class="product-list">
    <h2>Товары и цены 6</h3>

    <?php foreach ($goodsRandom as $item) { ?>
        <?php if (($item['price'] > 10000) and ($item['price'] < 15000)){?>
    <div class="product-card">
        <div class="product-name"><?= $item['name']?></div>
        <div class="product-price"><?= $item['price']?></div>
       </div>
    <?php } ?>
<?php } ?>
</div>