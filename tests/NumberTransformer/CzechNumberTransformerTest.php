<?php

namespace Kwn\NumberToWords\NumberTransformer;

use NumberToWords\NumberTransformer\CzechNumberTransformer;
use NumberToWords\NumberTransformer\NumberTransformerTest;

class CzechNumberTransformerTest extends NumberTransformerTest
{
    public function setUp()
    {
        $this->numberTransformer = new CzechNumberTransformer();
    }

    public function providerItConvertsNumbersToWords()
    {
        return [
            [-100, 'mínus sto'],
            [0, 'nula'],
            [1, 'jedna'],
            [2, 'dva'],
            [3, 'tři'],
            [4, 'čtyři'],
            [5, 'pět'],
            [6, 'šest'],
            [7, 'sedm'],
            [8, 'osm'],
            [9, 'devět'],
            [10, 'deset'],
            [11, 'jedenáct'],
            [12, 'dvanáct'],
            [13, 'třináct'],
            [14, 'čtrnáct'],
            [15, 'patnáct'],
            [16, 'šestnáct'],
            [17, 'sedmnáct'],
            [18, 'osmnáct'],
            [19, 'devatenáct'],
            [20, 'dvacet'],
            [21, 'dvacet jedna'],
            [22, 'dvacet dva'],
            [23, 'dvacet tři'],
            [24, 'dvacet čtyři'],
            [25, 'dvacet pět'],
            [26, 'dvacet šest'],
            [27, 'dvacet sedm'],
            [28, 'dvacet osm'],
            [29, 'dvacet devět'],
            [30, 'třicet'],
            [31, 'třicet jedna'],
            [32, 'třicet dva'],
            [33, 'třicet tři'],
            [34, 'třicet čtyři'],
            [35, 'třicet pět'],
            [36, 'třicet šest'],
            [37, 'třicet sedm'],
            [38, 'třicet osm'],
            [39, 'třicet devět'],
            [40, 'čtyřicet'],
            [41, 'čtyřicet jedna'],
            [42, 'čtyřicet dva'],
            [43, 'čtyřicet tři'],
            [44, 'čtyřicet čtyři'],
            [45, 'čtyřicet pět'],
            [46, 'čtyřicet šest'],
            [47, 'čtyřicet sedm'],
            [48, 'čtyřicet osm'],
            [49, 'čtyřicet devět'],
            [50, 'padesát'],
            [51, 'padesát jedna'],
            [52, 'padesát dva'],
            [53, 'padesát tři'],
            [54, 'padesát čtyři'],
            [55, 'padesát pět'],
            [56, 'padesát šest'],
            [57, 'padesát sedm'],
            [58, 'padesát osm'],
            [59, 'padesát devět'],
            [60, 'šedesát'],
            [61, 'šedesát jedna'],
            [62, 'šedesát dva'],
            [63, 'šedesát tři'],
            [64, 'šedesát čtyři'],
            [65, 'šedesát pět'],
            [66, 'šedesát šest'],
            [67, 'šedesát sedm'],
            [68, 'šedesát osm'],
            [69, 'šedesát devět'],
            [70, 'sedmdesát'],
            [71, 'sedmdesát jedna'],
            [72, 'sedmdesát dva'],
            [73, 'sedmdesát tři'],
            [74, 'sedmdesát čtyři'],
            [75, 'sedmdesát pět'],
            [76, 'sedmdesát šest'],
            [77, 'sedmdesát sedm'],
            [78, 'sedmdesát osm'],
            [79, 'sedmdesát devět'],
            [80, 'osmdesát'],
            [81, 'osmdesát jedna'],
            [82, 'osmdesát dva'],
            [83, 'osmdesát tři'],
            [84, 'osmdesát čtyři'],
            [85, 'osmdesát pět'],
            [86, 'osmdesát šest'],
            [87, 'osmdesát sedm'],
            [88, 'osmdesát osm'],
            [89, 'osmdesát devět'],
            [90, 'devádesát'],
            [91, 'devádesát jedna'],
            [92, 'devádesát dva'],
            [93, 'devádesát tři'],
            [94, 'devádesát čtyři'],
            [95, 'devádesát pět'],
            [96, 'devádesát šest'],
            [97, 'devádesát sedm'],
            [98, 'devádesát osm'],
            [99, 'devádesát devět'],
            [100, 'sto'],
            [101, 'sto jedna'],
            [102, 'sto dva'],
            [110, 'sto deset'],
            [120, 'sto dvacet'],
            [200, 'dvě stě'],
            [201, 'dvě stě jedna'],
            [300, 'tři sta'],
            [400, 'čtyři sta'],
            [500, 'pět set'],
            [600, 'šest set'],
            [700, 'sedm set'],
            [800, 'osm set'],
            [900, 'devět set'],
            [1000, 'tisíc'],
            [1001, 'tisíc jedna'],
            [2000, 'dva tisíce'],
            [2007, 'dva tisíce sedm'],
            [2008, 'dva tisíce osm'],
            [3000, 'tři tisíce'],
            [4000, 'čtyři tisíce'],
            [5000, 'pět tisíc'],
            [6000, 'šest tisíc'],
            [7000, 'sedm tisíc'],
            [8000, 'osm tisíc'],
            [9000, 'devět tisíc'],
            [10000, 'deset tisíc'],
            [11000, 'jedenáct tisíc'],
            [25000, 'dvacet pět tisíc'],
            [50000, 'padesát tisíc'],
            [100000, 'sto tisíc'],
            [138000, 'sto třicet osm tisíc'],
            [1000000, 'milión'],
            [2000000, 'dva milióny'],
            [5000000, 'pět miliónů'],
            [6000000, 'šest miliónů'],
            [7000000, 'sedm miliónů'],
            [1000000000, 'miliarda'],
        ];
    }
}
