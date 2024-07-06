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
            if(isset($data['bets'])) $bets[$raceNumber] = array_merge($bets[$raceNumber], $data['bets']);
        }
    }
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