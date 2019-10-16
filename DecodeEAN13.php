<?
/*
Функция DecodeEAN13
Поиск запчастей по штрих-коду EAN13. В ответ на штрих-код, приходят следующие данные о запчасти: название бренда, артикул запчасти, характеристики запчасти, конструкционная группа, наименование на русском.

Адрес API: https://partsapi.ru/api.php?act=DecodeEAN13&code={number}&key={key}

ПАРАМЕТР	ТИП	ДЛИНА	ОПИСАНИЕ
code	string	13	Штрих-код
key	string	16	Ключ для авторизации
*/

class PARTSAPI
{
    public static function DecodeEAN13($code, $key) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://partsapi.ru/api.php?act=DecodeEAN13&code=$code&key=$key",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => false,
        ));
        $response = curl_exec($curl);
        $response = json_decode($response, false);
        curl_close($curl);
        return $response;
    }
}
$code="4019064341826";
$key="test";
$result=PARTSAPI::DecodeEAN13($code, $key);
print_r($result);
?>
