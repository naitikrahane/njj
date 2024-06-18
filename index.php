<?
error_reporting(0);


$login_data="{"initDataRaw":"query_id=AAFGV1NYAgAAAEZXU1jIEAAn&user=%7B%22id%22%3A5776824134%2C%22first_name%22%3A%22Lucky%22%2C%22last_name%22%3A%22%7C%7C%20Dimax.one%22%2C%22username%22%3A%22Luckyrahane%22%2C%22language_code%22%3A%22en%22%2C%22allows_write_to_pm%22%3Atrue%7D&auth_date=1718647451&hash=1711e3cc3b8ea5c2b9ec98661451b0a429c4fcc8b6561a9025e77fe5314a92ef","fingerprint":{"version":"4.2.1","visitorId":"723c02a2be04ec7a13eb1225d839fc68","components":{"fonts":{"value":["sans-serif-thin"],"duration":162},"domBlockers":{"value":[],"duration":113},"fontPreferences":{"value":{"default":167,"apple":167,"serif":167,"sans":144,"mono":136,"min":15,"system":144},"duration":24},"audio":{"value":0.0000769702,"duration":56},"screenFrame":{"value":[0,0,0,0],"duration":4},"canvas":null,"osCpu":{"duration":0},"languages":{"value":[["en-GB"],["en-GB"]],"duration":1},"colorDepth":{"value":24,"duration":0},"deviceMemory":{"value":4,"duration":1},"screenResolution":{"value":[800,360],"duration":1},"hardwareConcurrency":{"value":8,"duration":0},"timezone":{"value":"Asia/Calcutta","duration":2},"sessionStorage":{"value":true,"duration":0},"localStorage":{"value":true,"duration":1},"indexedDB":{"value":true,"duration":0},"openDatabase":{"value":true,"duration":0},"cpuClass":{"duration":0},"platform":{"value":"Linux armv8l","duration":1},"plugins":{"value":[],"duration":1},"touchSupport":{"value":{"maxTouchPoints":5,"touchEvent":true,"touchStart":true},"duration":1},"vendor":{"value":"Google Inc.","duration":0},"vendorFlavors":{"value":["chrome"],"duration":0},"cookiesEnabled":{"value":true,"duration":3},"colorGamut":{"value":"srgb","duration":0},"invertedColors":{"duration":1},"forcedColors":{"duration":0},"monochrome":{"value":0,"duration":0},"contrast":{"duration":0},"reducedMotion":{"value":false,"duration":1},"reducedTransparency":{"duration":0},"hdr":{"duration":0},"math":{"value":{"acos":1.4473588658278522,"acosh":709.889355822726,"acoshPf":355.291251501643,"asin":0.12343746096704435,"asinh":0.881373587019543,"asinhPf":0.8813735870195429,"atanh":0.5493061443340548,"atanhPf":0.5493061443340548,"atan":0.4636476090008061,"sin":0.8178819121159085,"sinh":1.1752011936438014,"sinhPf":2.534342107873324,"cos":-0.8390715290095377,"cosh":1.5430806348152437,"coshPf":1.5430806348152437,"tan":-1.4214488238747245,"tanh":0.7615941559557649,"tanhPf":0.7615941559557649,"exp":2.718281828459045,"expm1":1.718281828459045,"expm1Pf":1.718281828459045,"log1p":2.3978952727983707,"log1pPf":2.3978952727983707,"powPI":1.9275814160560204e-50},"duration":2},"pdfViewerEnabled":{"duration":0},"architecture":{"value":127,"duration":0},"applePay":{"value":-1,"duration":0},"privateClickMeasurement":{"duration":1},"webGlBasics":{"value":{"version":"WebGL 1.0 (OpenGL ES 2.0 Chromium)","vendor":"WebKit","vendorUnmasked":"Imagination Technologies","renderer":"WebKit WebGL","rendererUnmasked":"PowerVR Rogue GE8320","shadingLanguageVersion":"WebGL GLSL ES 1.0 (OpenGL ES GLSL ES 1.0 Chromium)"},"duration":43},"webGlExtensions":null}}}";
$bot_token="7410749147:AAGqYQFDXGpabGStImoAFQZ_pN3jCbgF_cw";
$uid="1991593146";
$useragent="Mozilla/5.0 (Linux; Android 14; SM-E236B Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/124.0.6367.179 Mobile Safari/537.36 GoogleApp/15.21.29.28.arm64";



$url = 'https://api.hamsterkombat.io/auth/auth-by-telegram-webapp';

$data = $login_data;

$headers = array(
    'Host: api.hamsterkombat.io',
    'Connection: keep-alive',
    'Content-Length: ' . strlen($data),
    'Accept: application/json',
    'Authorization: authToken is empty, store token null',
    'User-Agent: '.$useragent.'',
    'Content-Type: application/json',
    'Origin: https://hamsterkombat.io',
    'Sec-Fetch-Site: same-site',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://hamsterkombat.io/clicker',
    'Accept-Language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7'
);


$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$one = curl_exec($ch);
$js=json_decode($one,1);
 $authToken = $js['authToken'];
 $msg1 = $js['status'];
 


$url = 'https://api.hamsterkombat.io/clicker/sync';
$authorization = "Bearer $authToken";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: ' . $authorization,
    'Content-Length: 0',
    'User-Agent: '.$useragent.'',
    'Accept: */*',
    'Origin: https://hamsterkombat.io',
    'Sec-Fetch-Site: same-site',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://hamsterkombat.io/clicker',
    'Accept-Language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7'
]);

$one = curl_exec($ch);
$js=json_decode($one,1);
 $availableTaps = $js['clickerUser']['availableTaps'];





$url = 'https://api.hamsterkombat.io/clicker/tap';
$data = array(
    'count' => $availableTaps,
    'availableTaps' => $availableTaps,
    'timestamp' => time()
);

$headers = array(
    'Content-Type: application/json',
    'Accept: application/json',
    'Authorization: ' . $authorization,
    'User-Agent: '.$useragent.'',
    'Origin: https://hamsterkombat.io',
    'Referer: https://hamsterkombat.io/clicker'
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$one = curl_exec($ch);
$js=json_decode($one,1);
 $balanceCoins = $js['clickerUser']['balanceCoins'];
 $availableTaps1 = $js['clickerUser']['availableTaps'];


$tex1='
*Account : Uttom

Tap : '.$availableTaps.'

balanceCoins : '.$balanceCoins.'

*';
$text1=urlencode("$tex1");


$url = 'https://api.telegram.org/bot'.$bot_token.'/sendMessage?chat_id='.$uid.'&text='.$text1.'&parse_mode=markdown';
$response = file_get_contents($url);

echo"done";
?>
