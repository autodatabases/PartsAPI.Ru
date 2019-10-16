<?
class PARTSAPI
{
    public static function CarPartsList($typeid, $kid, $del, $key) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://partsapi.ru/api.php?act=CarPartsList&typeid=$typeid&kid=$kid&del=$del&key=$key",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => false,
        ));
        $response = curl_exec($curl);
        $response = json_decode($response, false);
        curl_close($curl);
        return $response;
    }
}
$typeid="100383";
$kid="2";
$del="" "";
$key="test";
$result=PARTSAPI::CarPartsList($typeid, $kid, $del, $key);
print_r($result);
?>
