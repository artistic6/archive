<?php
$endpoint = "https://info.cld.hkjc.com/graphql/base/";
$date = "2024-08-11";
$venueCode = "S2";
$raceNo = 1;
$queryJSON = 'query racing($date: String, $venueCode: String, $oddsTypes: [OddsType], $raceNo: Int) {\n  raceMeetings(date: $date, venueCode: $venueCode) {\n    pmPools(oddsTypes: $oddsTypes, raceNo: $raceNo) {\n      id\n      status\n      sellStatus\n      oddsType\n      lastUpdateTime\n      guarantee\n      minTicketCost\n      name_en\n      name_ch\n      leg {\n        number\n        races\n      }\n      cWinSelections {\n        composite\n        name_ch\n        name_en\n        starters\n      }\n      oddsNodes {\n        combString\n        oddsValue\n        hotFavourite\n        oddsDropValue\n        bankerOdds {\n          combString\n          oddsValue\n        }\n      }\n    }\n  }\n}';
$qry = '{"operationName":"racing", "variables":'{"date":$date,"venueCode":$venueCode,"raceNo":$raceNo,"oddsTypes":'["WIN","PLA"]'}"}';
$headers = array();
$headers[] = 'Content-Type: application/json';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $qry);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
var_dump($result);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

?>