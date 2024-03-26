    <?php
    fscanf(STDIN,'%d',$N);

    for($i=0; 2 ** $i<=$N;$i++){
        for($j=0;3**$j<=$N;$j++){
            $result = pow(2,$i) * pow(3,$j);
            if($result == $N){
                echo 'Yes'.PHP_EOL;
                exit();
            }
        }
    }

    echo 'No'.PHP_EOL;  