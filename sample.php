<?php
/*$values = [89.0630001591, 22.1154731814, 88.8631093698, 22.9682540478, 88.9828000976, 23.2061361486, 88.7271362921, 23.2470822487, 88.7863361656, 23.4928451825, 88.56596319, 23.6466641703, 88.7420822313, 24.2416731826, 88.1304002725, 24.506527242, 88.043872377, 24.6852002492, 88.1411002749, 24.9164180664, 88.3972183796, 24.939718081, 88.4542272236, 25.1884000964, 88.9330452879, 25.1644360675, 89.0086632981, 25.2902730773, 88.1105363354, 25.8355541019, 88.1828911031, 26.1505540707, 88.5230631007, 26.3673181341, 88.3355912745, 26.4829999653, 88.4130722465, 26.6261360498, 88.8571453104, 26.2401361641, 89.044009281, 26.2746090879, 88.9466911939, 26.442682005, 89.0707361528, 26.385327156, 89.3199093478, 26.0248270315, 89.5482183093, 26.0156272222, 89.6017181534, 26.22747312, 89.7339363062, 26.1563181379, 89.850536291, 25.288954101, 90.412491268, 25.148882105, 92.0388822371, 25.1874911628, 92.4088723524, 25.0255539665, 92.4916273856, 24.8775092718, 92.2483823755, 24.8945822028, 92.117200226, 24.3900001798, 91.8825721476, 24.1515541445, 91.3819822574, 24.1051361704, 91.1619272913, 23.6315271237, 91.3442913533, 23.0981911494, 91.4260911848, 23.2619450394, 91.6115091095, 22.9445822121, 91.8181721413, 23.0902731007, 91.9586002006, 23.7277731654, 92.2780452603, 23.7108271364, 92.6008182709, 21.9822181872, 92.6693451911, 21.2969820104, 92.2608181023, 21.4144361112, 92.2619362482, 21.0543089813, 92.3271092336, 20.7448181022, 92.0480453336, 21.1649911749, 92.0394272284, 21.6602729734, 91.6583272357, 22.5541640575, 91.4558273275, 22.7900001358, 91.2306721409, 22.5863822494, 90.8315181992, 22.6883271471, 90.6245631419, 23.0584000756, 90.6023363463, 23.4666641402, 90.7160273078, 23.5068000455, 90.5938273734, 23.5979639716, 90.4736003714, 23.5758271977, 90.5480452505, 23.384300039, 90.3088723366, 23.4144359985, 90.6131821937, 23.2183271239, 90.424400276, 22.770191184, 90.6124823048, 22.3027731786, 90.4359542267, 22.0730540457, 90.4013822287, 22.2605540351, 90.2699913699, 21.8469361136, 90.023318329, 21.8634642209, 90.238445239, 22.1828450753, 90.048145191, 21.9830272085, 90.0740912047, 22.1588820522, 89.9158184088, 22.0372182244, 90.0000002095, 22.483754059, 89.8413822469, 22.2609731303, 89.883736339, 21.8946452361, 89.5811001803, 21.7016641525, 89.6151183021, 22.3195822473, 89.5282541247, 21.9906911179, 89.4747091859, 22.2891639853, 89.4627631298, 21.7688912071, 89.3549824159, 21.9660360849, 89.244982174, 21.6428451526, 89.0630001591, 22.1154731814];
$data = array_chunk($values, 2);
$test = [];
foreach ($data as $d1) {
    $final =  " {lat: " . $d1[1] . ", lng: " . $d1[0] . "},";
    //echo chop($final, ',')."\n";
    echo $final. "\n";
}*/


require 'src/Text/Text.php';

$result =  \Previewtechs\Phpie\Text\Text::plural('programmer');


var_dump($result);

