
<?php 
    $name = "Claudia";
    $isDev = true;
    $age = 29;
    $output = "Hola $name";
    $output .= " con una edad de $age";
    const TOKEN = "2ASQglKA7xAEsydHgZFCbsFaQiTvXXQTIcBQw3Q862RUaWNCm16kdZvdfly3";
    $bestLanguages =["PHP", "Javascript", "Java", "Python"];
?>

<?php 
    define("URLAPI", "https://whenisthenextmcufilm.com/api");
    $ch = curl_init(URLAPI);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $data = json_decode($result, true);
    curl_close($ch);

    var_dump($data);
?>

<h1>
    <?= $output?>
</h1>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>
<ul>
    <?php foreach ($bestLanguages as $key => $l): ?>
        <li><?= $key . " => ".$l ?></li>
    <?php endforeach; ?>
</ul>