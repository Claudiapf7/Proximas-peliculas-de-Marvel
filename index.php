
<?php 
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
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Días para la próxima pelicula de Marvel</title>
        <!-- Fluid viewport --> 
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.fluid.classless.min.css"
        />
    </head>
    <style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }

    img{
        margin: 0 auto;
        border-radius: 20px;
    }

    section{
        display: flex;
        justify-content: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
    </style>
    <main>
        <h1>Próximos estrenos de Marvel para Javier</h1>
        <section>
            <img src="<?= $data["poster_url"]; ?>" width="300px" alt="Poster de <?= $data["title"]; ?>"
            />
        </section>

        <hgroup>
            <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]?> días</h3>
            <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
            <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
        </hgroup>
    </main>

</html>
