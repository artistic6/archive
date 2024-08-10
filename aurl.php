<?php
$endpoint = "https://info.cld.hkjc.com/graphql/base/";
$date = "2024-08-11";
$venueCode = "S2";
$raceNo = 1;
$qryParams = [];
$qryParams["operationName"] = "racing";
$qryParams["variables"] = [
    "date" => $date,
    "venueCode" => $venueCode,
    "raceNo" => $raceNo,
    "oddsTypes" => ["WIN", "PLA"]
];
$qryParams["query"] = 'query racing($date: String, $venueCode: String, $oddsTypes: [OddsType], $raceNo: Int) {
  raceMeetings(date: $date, venueCode: $venueCode) {
    pmPools(oddsTypes: $oddsTypes, raceNo: $raceNo) {
      id
      status
      sellStatus
      oddsType
      lastUpdateTime
      guarantee
      minTicketCost
      name_en
      name_ch
      leg {
        number
        races
      }
      cWinSelections {
        composite
        name_ch
        name_en
        starters
      }
      oddsNodes {
        combString
        oddsValue
        hotFavourite
        oddsDropValue
        bankerOdds {
          combString
          oddsValue
        }
      }
    }
  }
}';
$qry = json_encode($qryParams);
$headers = array();
$headers[] = 'Content-Type: application/json';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_ENCODING , '');
curl_setopt($ch, CURLOPT_POSTFIELDS, $qry);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$output = curl_exec($ch);
$result = json_decode($output, true);
var_dump($result);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

?>