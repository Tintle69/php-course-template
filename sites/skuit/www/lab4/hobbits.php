<h1>🧙 Подготовка хоббитов к путешествию</h1>
<?php
$allHobbits = ["Фродо", "Сэм", "Гук", "Фил", "Хастел", "Виза", "Шори", "Зуер"];    
$partySize = rand(2,5);
shuffle($allHobbits);
$party = array_slice($allHobbits, 0, $partySize);
$names = implode(", ", $party);
$partyCount1 = count($party);

$transports = ["Телега", "Велосипед", "Лошадь", "Колёса", "нет транспорта"];
$transportCount = count($transports);
$randomIndex = rand(0, $transportCount - 1);
$transport = $transports[$randomIndex];

$allSupplies = ["Мясо", "Монетки", "Принглс", "Фисташки","Пиколини", "Бутерброд"];
$suppliesCount = rand(2, 6);
shuffle($allSupplies);
$supplies = array_slice($allSupplies, 0, $suppliesCount);

$partyEvents = [
    "{hobbit} решил поучаствовать в видео дюшеса",
    "{hobbit} взял с собой много монеток, все счастливы",
    "{hobbit} потерялся, все его ищут",
    "{hobbit} решил сделать себе маникюр, и это задержало всех",
    "{hobbit} Отстоял свои права, теперь хоббиты могут путешествовать быстрее",
];

$delayDays= count($supplies);
$partyCount= rand(1, 3);
shuffle($partyEvents);
$events = array_slice($partyEvents, 0, $partyCount);
$eventsCount = count($events);
$delayDays= $delayDays + $eventsCount;

$nazgulDays = 5;
$nazguldelay= $nazgulDays - $delayDays
?>
<div class ='block'>
    в поход отправятся <?= $partyCount1 ?> хоббитов: <?= $names ?><br>
</div>

<div class='block'>
    <?php if ($transport == 'нет транспорта') { ?>
        К сожалению, транспорта нет. Хоббитам придётся идти пешком!
    <?php } else { ?>
        Хоббиты нашли транспорт: <?= $transport ?>
    <?php } ?>
</div>

<div class='block'>
    Собрали припасы:<br>
    <?php foreach ($supplies as $supply) {
        echo("- $supply <br>");
    } ?>
</div>

<div class='block'>
    Случившиеся события:<br>
    <?php foreach ($events as $supply) {
        echo("- $supply <br>");
    } ?>
</div>

<div class='block'>
    <?if ($nazgulDays > $delayDays ) {?>
    ✨ Хоббиты успели выйти в путь раньше назгулов!
    <?} elseif($nazgulDays === $delayDays) {?>
    ✨ Хоббиты успели от назгулов в самый последний момент
    <?} else {?>
        ⚔️ Назгулы настигли хоббитов! Хоббиты слишком долго собирались и опаздали на опоздали на столько дней: <?=$nazguldelay?>
    <?}?>
</div>