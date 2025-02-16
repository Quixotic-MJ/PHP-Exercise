<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Exercise 1 </title>
    <link rel="stylesheet" href="Exercise1.css">
</head>

<body>

    <div id="Background">
        <img src="BACK.jpg" alt="image">


        <div id="Quoute-container">
            <div id="quote">
                <?php
                $weather = [
                    "rain",
                    "sunshine",
                    "clouds",
                    "hail",
                    "sleet",
                    "snow",
                    "wind"
                ];

                echo "<h1> PHP Exercise 1 </h1>";

                echo "<h4>\"We've seen all kinds of weather this month. 
                At the beginning of the month, we had {$weather[5]} and {$weather[6]}. 
                Then came {$weather[1]} with a few {$weather[2]} and some {$weather[0]}. 
                At least we didn't get any {$weather[3]} or {$weather[4]}.\"</h4>"
                    ?>
            </div>

        </div>
    </div>

</body>

</html>