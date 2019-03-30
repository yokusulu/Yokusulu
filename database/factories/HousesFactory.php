<?php
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\House::class, function (Faker $faker) {
    $names = [
        "コーポグランデュオ",
        "モンシャトー加藤",
        "ホテルエリゼア",
        "カフェレストラン紅",
        "田中さんのオウチ",
        "ゲートパークロゼッタ",
        "コインスペース",
    ];
    $host_names = [
        "松岡修造",
        "安倍晋三",
        "織田信長",
        "石田三成",
        "高杉晋作",
        "田中みな実",
        "薬師丸ひろ子",
    ];
    $zips = [
        "1912342",
        "7382283",
        "5328832",
        "2123365",
        "3322143",
        "2213349",
    ];
    $prefectures = [
        "富山県",
        "東京都",
        "静岡県",
        "熊本県",
        "福島県",
        "京都府",
        "大阪府",
        "北海道",
        "山口県",
        "鹿児島県",
        "沖縄県",
    ];
    $citys = [
        "徳山市",
        "永田市",
        "下関市",
        "宇部市",
        "鳥取市",
        "桜丘市",
    ];
    $wards = [
        "武久町",
        "久我山",
        "日野本町",
        "曙町",
        "山代村",
        "永原町",
        "久山市",
        "栗田山",
        "豊田",
        "栄市",
        "町田西町",
    ];
    $addresses = [
        "3-2-13",
        "7-2-19",
        "5-4-3",
        "4-5-3",
        "9-33-4",
        "7-2-32",
        "5-44-2",
    ];
    $prices = [
        4000,
        6000,
        4500,
        7300,
        24000,
        5800,
        8200,
        11900,
        4400,
    ];
    $disables = [
			0,
			1,
	];
    $carbon = new Carbon();
    return [
        'name' => $faker->randomElement($names),
        'host_name' => $faker->randomElement($host_names),
        'zip' => $faker->randomElement($zips),
        'prefecture' => $faker->randomElement($prefectures),
        'city' => $faker->randomElement($citys),
        'ward' => $faker->randomElement($wards),
        'address' => $faker->randomElement($addresses),
        'price' => $faker->randomElement($prices),
        'del_flg' => $faker->randomElement($disables),
        'created_at' =>  $carbon->now(),
		'updated_at' =>  $carbon->now(),
    ];
});
