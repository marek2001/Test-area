<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="styl6.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
</head>
<body>
    <header>
        <section>
            <h2>Odloty z lotniska</h2>
        </section>
        <section>
            <img src="zad6.png" alt="logotyp" srcset="">
        </section>
    </header>
    <main>
        <h4>tabela odltów</h4>
        <table>
            <tr><td>lp.</td><td>numer rejsu</td><td>czas</td><td>kierunek</td><td>status</td></tr>
            <?php
                $polacz = new mysqli("localhost", "root", "", "egzamin 06_20.01");
                $query = "SELECT id, nr_rejsu,czas,kierunek, status_lotu FROM odloty order by czas DESC";
                $wynik = $polacz->query($query);
                while($row = $wynik->fetch_array()){
                    echo "<tr><td>".$row['id']."</td><td>".$row['nr_rejsu']."</td><td>".$row['czas']."</td><td>".$row['kierunek']."</td><td>".$row['status_lotu']."</td></tr>";
                }
                mysqli_close($polacz);
            ?>
        </table>
    </main>
    <footer>
        <section>
            <a href="kw1.png">Pobierz obraz</a>
        </section>
        <section>
            <?php
                if(isset($_COOKIE['ciastko'])) {
                    echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
                } else {
                    setcookie("ciastko", "1", time()+3600*1);
                    echo "<p><i> Dzień dobry! Sprawdź regulamin naszej strony </i></p>";
                }
                
                
            ?>
        </section>
        <section>
            Autor:PESEL
        </section>
    </footer>
</body>
</html>