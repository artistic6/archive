<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");
$raceDate = trim($argv[1]);

$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;
$outFile = $currentDir . DIRECTORY_SEPARATOR . "agregate.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$bets = [];
for($raceNumber = 1; $raceNumber <= 11; $raceNumber ++) $bets[$raceNumber] = [];
$dir = new DirectoryIterator($currentDir); 
foreach ($dir as $fileinfo) {
    if(!$fileinfo->isDot()&& preg_match("/(bets)/", $fileinfo->getFilename())) {
        $fullFilePath = $currentDir . DIRECTORY_SEPARATOR . $fileinfo->getFilename();
        $fileContents = include($fullFilePath);
        foreach($fileContents as $raceNumber => $data){
            if(isset($data['bets'])) {
                foreach($data['bets'] as $key => $value){
                    if(!in_array($value, $bets[$raceNumber])) {
                        $bets[$raceNumber][$key] = $value;
                    }
                }
            }
        }
    }
}
foreach($bets as $raceNumber => $data){
    $firstSet = true;
    $unionWinValues = [];
    foreach($data as $key => $value){
        if(strpos($key, "win(allValues") === 0){
            if($firstSet){
                $interWinValues = explode(", ", $value);
                $firstSet = false;
            }
            else $interWinValues = array_intersect($interWinValues, explode(", ", $value));
            $unionWinValues = array_values(array_unique(array_merge($unionWinValues, explode(", ", $value))));
        }
    }
    sort($unionWinValues);
    if(isset($unionWinValues)) $bets[$raceNumber]['win(allValues, union)'] = implode(", ", $unionWinValues);
    if(isset($interWinValues)) $bets[$raceNumber]['win(allValues, intersection)'] = implode(", ", $interWinValues);
    unset($unionWinValues);
    unset($interWinValues);
}
foreach($bets as $raceNumber => $data){
    if(!empty($data)){
        $racetext = "\t'$raceNumber' => [\n";
        $racetext .= "\t\t/**\n";
        $racetext .= "\t\tRace $raceNumber\n";
        $racetext .= "\t\t*/\n";
        foreach($data as $betDescription => $betContent) $racetext .= "\t\t'$betDescription' => '$betContent',\n";
        $racetext .= "\t],\n";
        $outtext .= $racetext;
    }
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
?>