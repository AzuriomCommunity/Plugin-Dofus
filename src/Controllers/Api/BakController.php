<?php

namespace Azuriom\Plugin\Dofus\Controllers\Api;

use Illuminate\Http\Request;
use Azuriom\Plugin\Shop\Models\Package;
use Azuriom\Http\Controllers\Controller;

class BakController extends Controller
{
    public function getOgrineOffers()
    {
        return response()->json(
             
                [
                    'type' => 'KAMAS_FOR_OGRINES',
                    'offers' => [
                      0 => [
                        'ogrine' => 25,
                        'kama' => 16225,
                        'rate' => 649,
                        'rate_text' => '1 ogrine / 649 kama',
                      ],
                      1 => [
                        'ogrine' => 31,
                        'kama' => 20150,
                        'rate' => 650,
                        'rate_text' => '1 ogrine / 650 kama',
                      ],
                      2 => [
                        'ogrine' => 600,
                        'kama' => 408000,
                        'rate' => 680,
                        'rate_text' => '1 ogrine / 680 kama',
                      ],
                      3 => [
                        'ogrine' => 4100,
                        'kama' => 2804400,
                        'rate' => 684,
                        'rate_text' => '1 ogrine / 684 kama',
                      ],
                      4 => [
                        'ogrine' => 21100,
                        'kama' => 14453500,
                        'rate' => 685,
                        'rate_text' => '1 ogrine / 685 kama',
                      ],
                      5 => [
                        'ogrine' => 13100,
                        'kama' => 9104500,
                        'rate' => 695,
                        'rate_text' => '1 ogrine / 695 kama',
                      ],
                      6 => [
                        'ogrine' => 251,
                        'kama' => 174947,
                        'rate' => 697,
                        'rate_text' => '1 ogrine / 697 kama',
                      ],
                      7 => [
                        'ogrine' => 15222,
                        'kama' => 10624956,
                        'rate' => 698,
                        'rate_text' => '1 ogrine / 698 kama',
                      ],
                      8 => [
                        'ogrine' => 61386,
                        'kama' => 42908814,
                        'rate' => 699,
                        'rate_text' => '1 ogrine / 699 kama',
                      ],
                      9 => [
                        'ogrine' => 209781,
                        'kama' => 146846700,
                        'rate' => 700,
                        'rate_text' => '1 ogrine / 700 kama',
                      ],
                      10 => [
                        'ogrine' => 13000,
                        'kama' => 9165000,
                        'rate' => 705,
                        'rate_text' => '1 ogrine / 705 kama',
                      ],
                      11 => [
                        'ogrine' => 1541,
                        'kama' => 1106438,
                        'rate' => 718,
                        'rate_text' => '1 ogrine / 718 kama',
                      ],
                      12 => [
                        'ogrine' => 63000,
                        'kama' => 45360000,
                        'rate' => 720,
                        'rate_text' => '1 ogrine / 720 kama',
                      ],
                      13 => [
                        'ogrine' => 205000,
                        'kama' => 150675000,
                        'rate' => 735,
                        'rate_text' => '1 ogrine / 735 kama',
                      ],
                      14 => [
                        'ogrine' => 141000,
                        'kama' => 105750000,
                        'rate' => 750,
                        'rate_text' => '1 ogrine / 750 kama',
                      ],
                      15 => [
                        'ogrine' => 93000,
                        'kama' => 72540000,
                        'rate' => 780,
                        'rate_text' => '1 ogrine / 780 kama',
                      ],
                      16 => [
                        'ogrine' => 288250,
                        'kama' => 230600000,
                        'rate' => 800,
                        'rate_text' => '1 ogrine / 800 kama',
                      ],
                      17 => [
                        'ogrine' => 4000,
                        'kama' => 3220000,
                        'rate' => 805,
                        'rate_text' => '1 ogrine / 805 kama',
                      ],
                      18 => [
                        'ogrine' => 69298,
                        'kama' => 58903300,
                        'rate' => 850,
                        'rate_text' => '1 ogrine / 850 kama',
                      ],
                      19 => [
                        'ogrine' => 1111,
                        'kama' => 999900,
                        'rate' => 900,
                        'rate_text' => '1 ogrine / 900 kama',
                      ],
                      20 => [
                        'ogrine' => 28000,
                        'kama' => 26600000,
                        'rate' => 950,
                        'rate_text' => '1 ogrine / 950 kama',
                      ],
                      21 => [
                        'ogrine' => 3000,
                        'kama' => 2961000,
                        'rate' => 987,
                        'rate_text' => '1 ogrine / 987 kama',
                      ],
                      22 => [
                        'ogrine' => 2000,
                        'kama' => 1980000,
                        'rate' => 990,
                        'rate_text' => '1 ogrine / 990 kama',
                      ],
                      23 => [
                        'ogrine' => 5000,
                        'kama' => 4995000,
                        'rate' => 999,
                        'rate_text' => '1 ogrine / 999 kama',
                      ],
                      24 => [
                        'ogrine' => 100,
                        'kama' => 100000,
                        'rate' => 1000,
                        'rate_text' => '1 ogrine / 1000 kama',
                      ],
                      25 => [
                        'ogrine' => 37800,
                        'kama' => 37837800,
                        'rate' => 1001,
                        'rate_text' => '1 ogrine / 1001 kama',
                      ],
                      26 => [
                        'ogrine' => 18000,
                        'kama' => 18360000,
                        'rate' => 1020,
                        'rate_text' => '1 ogrine / 1020 kama',
                      ],
                      27 => [
                        'ogrine' => 1100,
                        'kama' => 1129700,
                        'rate' => 1027,
                        'rate_text' => '1 ogrine / 1027 kama',
                      ],
                      28 => [
                        'ogrine' => 28000,
                        'kama' => 28784000,
                        'rate' => 1028,
                        'rate_text' => '1 ogrine / 1028 kama',
                      ],
                    ],
                  ]
            
        );
    }

    public function getRates()
    {
        return response()->json([
            
                'rates' => [
                  0 => [
                    'type' => 'KAMAS_FOR_OGRINES',
                    'rate' => 542,
                  ],
                  1 => [
                    'type' => 'OGRINES_FOR_KAMAS',
                    'rate' => 636,
                  ],
                ],
              
        ]);
    }

    public function getKamasOffers()
    {
        return response()->json(
            
                [
                    'type' => 'OGRINES_FOR_KAMAS',
                    'offers' => [
                      0 => [
                        'ogrine' => 19800,
                        'kama' => 5088600,
                        'rate' => 257,
                        'rate_text' => '257 kama / 1 ogrine',
                      ],
                      1 => [
                        'ogrine' => 37500,
                        'kama' => 9675000,
                        'rate' => 258,
                        'rate_text' => '258 kama / 1 ogrine',
                      ],
                      2 => [
                        'ogrine' => 37500,
                        'kama' => 9712500,
                        'rate' => 259,
                        'rate_text' => '259 kama / 1 ogrine',
                      ],
                      3 => [
                        'ogrine' => 37500,
                        'kama' => 9750000,
                        'rate' => 260,
                        'rate_text' => '260 kama / 1 ogrine',
                      ],
                      4 => [
                        'ogrine' => 449100,
                        'kama' => 123053400,
                        'rate' => 274,
                        'rate_text' => '274 kama / 1 ogrine',
                      ],
                      5 => [
                        'ogrine' => 76800,
                        'kama' => 21120000,
                        'rate' => 275,
                        'rate_text' => '275 kama / 1 ogrine',
                      ],
                      6 => [
                        'ogrine' => 27000,
                        'kama' => 7452000,
                        'rate' => 276,
                        'rate_text' => '276 kama / 1 ogrine',
                      ],
                      7 => [
                        'ogrine' => 4000,
                        'kama' => 1108000,
                        'rate' => 277,
                        'rate_text' => '277 kama / 1 ogrine',
                      ],
                      8 => [
                        'ogrine' => 11500,
                        'kama' => 3197000,
                        'rate' => 278,
                        'rate_text' => '278 kama / 1 ogrine',
                      ],
                      9 => [
                        'ogrine' => 3300,
                        'kama' => 924000,
                        'rate' => 280,
                        'rate_text' => '280 kama / 1 ogrine',
                      ],
                      10 => [
                        'ogrine' => 35543,
                        'kama' => 10662900,
                        'rate' => 300,
                        'rate_text' => '300 kama / 1 ogrine',
                      ],
                      11 => [
                        'ogrine' => 1103000,
                        'kama' => 332003000,
                        'rate' => 301,
                        'rate_text' => '301 kama / 1 ogrine',
                      ],
                      12 => [
                        'ogrine' => 1090000,
                        'kama' => 329180000,
                        'rate' => 302,
                        'rate_text' => '302 kama / 1 ogrine',
                      ],
                      13 => [
                        'ogrine' => 12600,
                        'kama' => 3817800,
                        'rate' => 303,
                        'rate_text' => '303 kama / 1 ogrine',
                      ],
                      14 => [
                        'ogrine' => 2000,
                        'kama' => 608000,
                        'rate' => 304,
                        'rate_text' => '304 kama / 1 ogrine',
                      ],
                      15 => [
                        'ogrine' => 1000,
                        'kama' => 318000,
                        'rate' => 318,
                        'rate_text' => '318 kama / 1 ogrine',
                      ],
                      16 => [
                        'ogrine' => 20000,
                        'kama' => 6420000,
                        'rate' => 321,
                        'rate_text' => '321 kama / 1 ogrine',
                      ],
                      17 => [
                        'ogrine' => 119100,
                        'kama' => 41685000,
                        'rate' => 350,
                        'rate_text' => '350 kama / 1 ogrine',
                      ],
                      18 => [
                        'ogrine' => 2000,
                        'kama' => 702000,
                        'rate' => 351,
                        'rate_text' => '351 kama / 1 ogrine',
                      ],
                      19 => [
                        'ogrine' => 1100,
                        'kama' => 407000,
                        'rate' => 370,
                        'rate_text' => '370 kama / 1 ogrine',
                      ],
                      20 => [
                        'ogrine' => 50000,
                        'kama' => 18750000,
                        'rate' => 375,
                        'rate_text' => '375 kama / 1 ogrine',
                      ],
                      21 => [
                        'ogrine' => 5500,
                        'kama' => 2068000,
                        'rate' => 376,
                        'rate_text' => '376 kama / 1 ogrine',
                      ],
                      22 => [
                        'ogrine' => 1000,
                        'kama' => 380000,
                        'rate' => 380,
                        'rate_text' => '380 kama / 1 ogrine',
                      ],
                      23 => [
                        'ogrine' => 1100,
                        'kama' => 434500,
                        'rate' => 395,
                        'rate_text' => '395 kama / 1 ogrine',
                      ],
                      24 => [
                        'ogrine' => 144130,
                        'kama' => 57652000,
                        'rate' => 400,
                        'rate_text' => '400 kama / 1 ogrine',
                      ],
                      25 => [
                        'ogrine' => 6600,
                        'kama' => 2666400,
                        'rate' => 404,
                        'rate_text' => '404 kama / 1 ogrine',
                      ],
                      26 => [
                        'ogrine' => 23086,
                        'kama' => 9396002,
                        'rate' => 407,
                        'rate_text' => '407 kama / 1 ogrine',
                      ],
                      27 => [
                        'ogrine' => 9000,
                        'kama' => 3672000,
                        'rate' => 408,
                        'rate_text' => '408 kama / 1 ogrine',
                      ],
                      28 => [
                        'ogrine' => 1100,
                        'kama' => 451000,
                        'rate' => 410,
                        'rate_text' => '410 kama / 1 ogrine',
                      ],
                      29 => [
                        'ogrine' => 25000,
                        'kama' => 10400000,
                        'rate' => 416,
                        'rate_text' => '416 kama / 1 ogrine',
                      ],
                      30 => [
                        'ogrine' => 1100,
                        'kama' => 458700,
                        'rate' => 417,
                        'rate_text' => '417 kama / 1 ogrine',
                      ],
                      31 => [
                        'ogrine' => 1100,
                        'kama' => 459800,
                        'rate' => 418,
                        'rate_text' => '418 kama / 1 ogrine',
                      ],
                      32 => [
                        'ogrine' => 1100,
                        'kama' => 460900,
                        'rate' => 419,
                        'rate_text' => '419 kama / 1 ogrine',
                      ],
                      33 => [
                        'ogrine' => 3580,
                        'kama' => 1503600,
                        'rate' => 420,
                        'rate_text' => '420 kama / 1 ogrine',
                      ],
                      34 => [
                        'ogrine' => 100000,
                        'kama' => 42100000,
                        'rate' => 421,
                        'rate_text' => '421 kama / 1 ogrine',
                      ],
                      35 => [
                        'ogrine' => 4000,
                        'kama' => 1712000,
                        'rate' => 428,
                        'rate_text' => '428 kama / 1 ogrine',
                      ],
                      36 => [
                        'ogrine' => 17100,
                        'kama' => 7353000,
                        'rate' => 430,
                        'rate_text' => '430 kama / 1 ogrine',
                      ],
                      37 => [
                        'ogrine' => 2000,
                        'kama' => 862000,
                        'rate' => 431,
                        'rate_text' => '431 kama / 1 ogrine',
                      ],
                      38 => [
                        'ogrine' => 1000,
                        'kama' => 435000,
                        'rate' => 435,
                        'rate_text' => '435 kama / 1 ogrine',
                      ],
                      39 => [
                        'ogrine' => 1000,
                        'kama' => 437000,
                        'rate' => 437,
                        'rate_text' => '437 kama / 1 ogrine',
                      ],
                      40 => [
                        'ogrine' => 45200,
                        'kama' => 19888000,
                        'rate' => 440,
                        'rate_text' => '440 kama / 1 ogrine',
                      ],
                      41 => [
                        'ogrine' => 42000,
                        'kama' => 18522000,
                        'rate' => 441,
                        'rate_text' => '441 kama / 1 ogrine',
                      ],
                      42 => [
                        'ogrine' => 2100,
                        'kama' => 932400,
                        'rate' => 444,
                        'rate_text' => '444 kama / 1 ogrine',
                      ],
                      43 => [
                        'ogrine' => 9000,
                        'kama' => 4005000,
                        'rate' => 445,
                        'rate_text' => '445 kama / 1 ogrine',
                      ],
                      44 => [
                        'ogrine' => 384511,
                        'kama' => 173029950,
                        'rate' => 450,
                        'rate_text' => '450 kama / 1 ogrine',
                      ],
                      45 => [
                        'ogrine' => 62500,
                        'kama' => 28187500,
                        'rate' => 451,
                        'rate_text' => '451 kama / 1 ogrine',
                      ],
                      46 => [
                        'ogrine' => 4750,
                        'kama' => 2147000,
                        'rate' => 452,
                        'rate_text' => '452 kama / 1 ogrine',
                      ],
                      47 => [
                        'ogrine' => 19998,
                        'kama' => 9079092,
                        'rate' => 454,
                        'rate_text' => '454 kama / 1 ogrine',
                      ],
                      48 => [
                        'ogrine' => 5079,
                        'kama' => 2310945,
                        'rate' => 455,
                        'rate_text' => '455 kama / 1 ogrine',
                      ],
                      49 => [
                        'ogrine' => 28500,
                        'kama' => 12996000,
                        'rate' => 456,
                        'rate_text' => '456 kama / 1 ogrine',
                      ],
                      50 => [
                        'ogrine' => 5000,
                        'kama' => 2295000,
                        'rate' => 459,
                        'rate_text' => '459 kama / 1 ogrine',
                      ],
                      51 => [
                        'ogrine' => 47766,
                        'kama' => 21972360,
                        'rate' => 460,
                        'rate_text' => '460 kama / 1 ogrine',
                      ],
                      52 => [
                        'ogrine' => 18781,
                        'kama' => 8658041,
                        'rate' => 461,
                        'rate_text' => '461 kama / 1 ogrine',
                      ],
                      53 => [
                        'ogrine' => 367800,
                        'kama' => 169923600,
                        'rate' => 462,
                        'rate_text' => '462 kama / 1 ogrine',
                      ],
                      54 => [
                        'ogrine' => 43448,
                        'kama' => 20116424,
                        'rate' => 463,
                        'rate_text' => '463 kama / 1 ogrine',
                      ],
                      55 => [
                        'ogrine' => 31500,
                        'kama' => 14616000,
                        'rate' => 464,
                        'rate_text' => '464 kama / 1 ogrine',
                      ],
                      56 => [
                        'ogrine' => 36580,
                        'kama' => 17009700,
                        'rate' => 465,
                        'rate_text' => '465 kama / 1 ogrine',
                      ],
                      57 => [
                        'ogrine' => 4800,
                        'kama' => 2236800,
                        'rate' => 466,
                        'rate_text' => '466 kama / 1 ogrine',
                      ],
                      58 => [
                        'ogrine' => 14000,
                        'kama' => 6538000,
                        'rate' => 467,
                        'rate_text' => '467 kama / 1 ogrine',
                      ],
                      59 => [
                        'ogrine' => 8000,
                        'kama' => 3768000,
                        'rate' => 471,
                        'rate_text' => '471 kama / 1 ogrine',
                      ],
                      60 => [
                        'ogrine' => 2000,
                        'kama' => 946000,
                        'rate' => 473,
                        'rate_text' => '473 kama / 1 ogrine',
                      ],
                      61 => [
                        'ogrine' => 1000,
                        'kama' => 474000,
                        'rate' => 474,
                        'rate_text' => '474 kama / 1 ogrine',
                      ],
                      62 => [
                        'ogrine' => 8000,
                        'kama' => 3800000,
                        'rate' => 475,
                        'rate_text' => '475 kama / 1 ogrine',
                      ],
                      63 => [
                        'ogrine' => 4000,
                        'kama' => 1904000,
                        'rate' => 476,
                        'rate_text' => '476 kama / 1 ogrine',
                      ],
                      64 => [
                        'ogrine' => 1500,
                        'kama' => 715500,
                        'rate' => 477,
                        'rate_text' => '477 kama / 1 ogrine',
                      ],
                      65 => [
                        'ogrine' => 2000,
                        'kama' => 956000,
                        'rate' => 478,
                        'rate_text' => '478 kama / 1 ogrine',
                      ],
                      66 => [
                        'ogrine' => 1100,
                        'kama' => 528000,
                        'rate' => 480,
                        'rate_text' => '480 kama / 1 ogrine',
                      ],
                      67 => [
                        'ogrine' => 3600,
                        'kama' => 1731600,
                        'rate' => 481,
                        'rate_text' => '481 kama / 1 ogrine',
                      ],
                      68 => [
                        'ogrine' => 9700,
                        'kama' => 4675400,
                        'rate' => 482,
                        'rate_text' => '482 kama / 1 ogrine',
                      ],
                      69 => [
                        'ogrine' => 2100,
                        'kama' => 1029000,
                        'rate' => 490,
                        'rate_text' => '490 kama / 1 ogrine',
                      ],
                      70 => [
                        'ogrine' => 3462,
                        'kama' => 1699842,
                        'rate' => 491,
                        'rate_text' => '491 kama / 1 ogrine',
                      ],
                      71 => [
                        'ogrine' => 13200,
                        'kama' => 6534000,
                        'rate' => 495,
                        'rate_text' => '495 kama / 1 ogrine',
                      ],
                      72 => [
                        'ogrine' => 4000,
                        'kama' => 1984000,
                        'rate' => 496,
                        'rate_text' => '496 kama / 1 ogrine',
                      ],
                      73 => [
                        'ogrine' => 1100,
                        'kama' => 546700,
                        'rate' => 497,
                        'rate_text' => '497 kama / 1 ogrine',
                      ],
                      74 => [
                        'ogrine' => 13000,
                        'kama' => 6487000,
                        'rate' => 499,
                        'rate_text' => '499 kama / 1 ogrine',
                      ],
                      75 => [
                        'ogrine' => 70150,
                        'kama' => 35075000,
                        'rate' => 500,
                        'rate_text' => '500 kama / 1 ogrine',
                      ],
                      76 => [
                        'ogrine' => 33566,
                        'kama' => 16816566,
                        'rate' => 501,
                        'rate_text' => '501 kama / 1 ogrine',
                      ],
                      77 => [
                        'ogrine' => 3000,
                        'kama' => 1506000,
                        'rate' => 502,
                        'rate_text' => '502 kama / 1 ogrine',
                      ],
                      78 => [
                        'ogrine' => 7000,
                        'kama' => 3521000,
                        'rate' => 503,
                        'rate_text' => '503 kama / 1 ogrine',
                      ],
                      79 => [
                        'ogrine' => 3500,
                        'kama' => 1764000,
                        'rate' => 504,
                        'rate_text' => '504 kama / 1 ogrine',
                      ],
                      80 => [
                        'ogrine' => 1000,
                        'kama' => 505000,
                        'rate' => 505,
                        'rate_text' => '505 kama / 1 ogrine',
                      ],
                      81 => [
                        'ogrine' => 4000,
                        'kama' => 2064000,
                        'rate' => 516,
                        'rate_text' => '516 kama / 1 ogrine',
                      ],
                      82 => [
                        'ogrine' => 13234,
                        'kama' => 6881680,
                        'rate' => 520,
                        'rate_text' => '520 kama / 1 ogrine',
                      ],
                      83 => [
                        'ogrine' => 1250,
                        'kama' => 652500,
                        'rate' => 522,
                        'rate_text' => '522 kama / 1 ogrine',
                      ],
                      84 => [
                        'ogrine' => 4338,
                        'kama' => 2277450,
                        'rate' => 525,
                        'rate_text' => '525 kama / 1 ogrine',
                      ],
                      85 => [
                        'ogrine' => 3000,
                        'kama' => 1590000,
                        'rate' => 530,
                        'rate_text' => '530 kama / 1 ogrine',
                      ],
                      86 => [
                        'ogrine' => 10600,
                        'kama' => 5671000,
                        'rate' => 535,
                        'rate_text' => '535 kama / 1 ogrine',
                      ],
                      87 => [
                        'ogrine' => 14213,
                        'kama' => 7703446,
                        'rate' => 542,
                        'rate_text' => '542 kama / 1 ogrine',
                      ],
                      88 => [
                        'ogrine' => 12518,
                        'kama' => 6797274,
                        'rate' => 543,
                        'rate_text' => '543 kama / 1 ogrine',
                      ],
                      89 => [
                        'ogrine' => 5600,
                        'kama' => 3046400,
                        'rate' => 544,
                        'rate_text' => '544 kama / 1 ogrine',
                      ],
                      90 => [
                        'ogrine' => 21100,
                        'kama' => 11499500,
                        'rate' => 545,
                        'rate_text' => '545 kama / 1 ogrine',
                      ],
                      91 => [
                        'ogrine' => 7700,
                        'kama' => 4204200,
                        'rate' => 546,
                        'rate_text' => '546 kama / 1 ogrine',
                      ],
                      92 => [
                        'ogrine' => 9100,
                        'kama' => 4977700,
                        'rate' => 547,
                        'rate_text' => '547 kama / 1 ogrine',
                      ],
                      93 => [
                        'ogrine' => 2000,
                        'kama' => 1096000,
                        'rate' => 548,
                        'rate_text' => '548 kama / 1 ogrine',
                      ],
                      94 => [
                        'ogrine' => 17800,
                        'kama' => 9772200,
                        'rate' => 549,
                        'rate_text' => '549 kama / 1 ogrine',
                      ],
                      95 => [
                        'ogrine' => 1100,
                        'kama' => 605000,
                        'rate' => 550,
                        'rate_text' => '550 kama / 1 ogrine',
                      ],
                      96 => [
                        'ogrine' => 4811,
                        'kama' => 2650861,
                        'rate' => 551,
                        'rate_text' => '551 kama / 1 ogrine',
                      ],
                      97 => [
                        'ogrine' => 1100,
                        'kama' => 607200,
                        'rate' => 552,
                        'rate_text' => '552 kama / 1 ogrine',
                      ],
                      98 => [
                        'ogrine' => 7250,
                        'kama' => 4031000,
                        'rate' => 556,
                        'rate_text' => '556 kama / 1 ogrine',
                      ],
                      99 => [
                        'ogrine' => 4000,
                        'kama' => 2228000,
                        'rate' => 557,
                        'rate_text' => '557 kama / 1 ogrine',
                      ],
                      100 => [
                        'ogrine' => 1000,
                        'kama' => 558000,
                        'rate' => 558,
                        'rate_text' => '558 kama / 1 ogrine',
                      ],
                      101 => [
                        'ogrine' => 1100,
                        'kama' => 616000,
                        'rate' => 560,
                        'rate_text' => '560 kama / 1 ogrine',
                      ],
                      102 => [
                        'ogrine' => 1000,
                        'kama' => 564000,
                        'rate' => 564,
                        'rate_text' => '564 kama / 1 ogrine',
                      ],
                      103 => [
                        'ogrine' => 4291,
                        'kama' => 2424415,
                        'rate' => 565,
                        'rate_text' => '565 kama / 1 ogrine',
                      ],
                      104 => [
                        'ogrine' => 2000,
                        'kama' => 1138000,
                        'rate' => 569,
                        'rate_text' => '569 kama / 1 ogrine',
                      ],
                      105 => [
                        'ogrine' => 1100,
                        'kama' => 627000,
                        'rate' => 570,
                        'rate_text' => '570 kama / 1 ogrine',
                      ],
                      106 => [
                        'ogrine' => 2200,
                        'kama' => 1256200,
                        'rate' => 571,
                        'rate_text' => '571 kama / 1 ogrine',
                      ],
                      107 => [
                        'ogrine' => 574,
                        'kama' => 329476,
                        'rate' => 574,
                        'rate_text' => '574 kama / 1 ogrine',
                      ],
                      108 => [
                        'ogrine' => 20700,
                        'kama' => 11902500,
                        'rate' => 575,
                        'rate_text' => '575 kama / 1 ogrine',
                      ],
                      109 => [
                        'ogrine' => 1100,
                        'kama' => 638000,
                        'rate' => 580,
                        'rate_text' => '580 kama / 1 ogrine',
                      ],
                    ],
                  ]
            
        );
    }

    public function getAccountOffers()
    {
        //[{"id":"348983042","date_creation":"2021-03-02 19:10:40","date_action_subscription":"2021-03-02 19:10:40","date_expiration":"2021-05-31 19:10:40","amount":"10","amount_left":"10","id_subscription":"40232930","forbidden_usages":"MA"}]
    }
}