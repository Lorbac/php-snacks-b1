<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 
    $paragraph= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, et eveniet labore ullam consequatur voluptates possimus eaque, sint ipsam id nemo saepe explicabo amet, dolores ea blanditiis accusamus dolorem esse! Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quia at nihil maxime veritatis id enim culpa. Vel quod ipsa aliquam odit dignissimos quisquam, laborum nam porro id officia quibusdam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa reiciendis eligendi, dicta optio magnam sed repellendus itaque ab, voluptatum rem doloribus obcaecati asperiores ex neque sint, deleniti impedit aut dignissimos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, rerum! Ad cumque ipsam ut. Incidunt quidem eius saepe id odit labore dolor blanditiis vel, nesciunt placeat! Voluptates, praesentium ipsam. Consequatur?";
    $phrases= explode(".", $paragraph);
    // var_dump($arrayPhrases);
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack5</title>
    </head>
    <body>
        
        <?php 
            echo "<p>" . $paragraph . "</p>";
        ?>

        <ul>
            <?php
                foreach($phrases as $key => $phrase) {
                    echo "<li>" . $phrase . "</li>";
                }
            ?>
        </ul>


    </body>
</html>