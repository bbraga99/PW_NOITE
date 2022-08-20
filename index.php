<h1>
    <?php   

        /*$nota1 = 2;
        $nota2 = 8;
        $media = ($nota1+$nota2)/2;

        if ($media >= 6) {
            echo "Aprovado";
        } else {
            echo "Reprovado";
        }
        */

        //concatenação
        $nome = 'Bruno';
        echo $nome." "."BRAGA";

        //Loop em PHP 
        // DO WHILE
        $contadora = 0;
        do {
                //código a ser repetido
                $contadora ++;
        } while ($contadora < 10);

        //WHILE
        $cont = 0;
        while($cont < 10) {
            //executa os codigos
            $cont ++;
        }

        //FOR 

        for ($i = 0; $i < 10; $i++) {
            //executa o código

            if($i % 2 == 0) {
                echo "é par <br>";
            } else {
                echo "é impar <br>";
            }
        }

        



    ?>
</h1>