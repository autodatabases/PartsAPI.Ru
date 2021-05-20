<?
/*
Функция CarPartsList
Список запчастей на указанную модификацию автомобиля. KID: 2 - легковые, 16 - коммерческие и грузовые, 777 - мото, 14 - двигатель, 19 - ось. По умолчанию "Пробел". Можно ставить точку с запятой (;), запятую (,), вертикальную линию (|).

Адрес API: https://partsapi.ru/api?method=CarPartsList&typeid={typeid}&kid={kid}&del={del}&key={key}

ПАРАМЕТР	ТИП	ДЛИНА	ОПИСАНИЕ
typeid	string	3	Тип транспортного средства
kid	string	7	Идентификатор автомобиля в Текдок
del	string	1	Разделитель бренда и номера. По умолчанию "Пробел"
key	string	16	Ключ для авторизации
*/

class PARTSAPI
{
    public static function CarPartsList($typeid, $kid, $del, $key) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://partsapi.ru/api?method=CarPartsList&typeid=$typeid&kid=$kid&del=$del&key=$key",
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
$key="a01969553426731235789a98ef767925";
$result=PARTSAPI::CarPartsList($typeid, $kid, $del, $key);
print_r($result);
?>
