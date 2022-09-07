<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi</title>
</head>
<style>
    body {
    width: 100%;
    min-height: 100vh;
    background: #FEEDB5;
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
 
.container {
    width: 400px;
    min-height: 200px;
    background: #FFF;
    border-radius: 20px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}
input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

input[type=submit]{
    background-color: #45a049;
    width: 200px;
    }

input[type=button] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

input[type=button]{
    background-color: #45a049;
    width: 200px;
    }    
</style>
<body>
        <?php
            $input=$_POST["input"];

            $key = array(
                'A' => '$',
                'I' => '~',
                'U' => '-',
                'E' => '+',
                'O' => '?',

                'a' => '!',
                'i' => '#',
                'u' => '%',
                'e' => '&',
                'o' => '*',
            );

            $output = str_replace($key, array_keys($key), $input);
        ?>
        <div class="container">
        <center><div>
                <form action="dekripsi.php" method="POST">
                    <h1>DEKRIPSI</h1>
                    <textarea name="input" cols="50" rows="3" placeholder="Text"></textarea><br><br>
                    <input type="submit" value="Dekripsi"/>
                </form>
            </div>
            <div>
                <h3>HASIL DEKRIPSI</h3>
                <h4><?php echo $output; ?></h4>
            </div>
            <div>
                <input onclick="location.href='index.php'" type="button" value="Kembali">
            </div>
        </div></center>
</body>
</html>