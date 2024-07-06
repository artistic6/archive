for i in `seq 5 44`; 
do 
    curl -o history$i.php https://raw.githubusercontent.com/artistic8/archive/main/history$i.php
    curl -o condition$i.php https://raw.githubusercontent.com/artistic8/archive/main/condition$i.php
done