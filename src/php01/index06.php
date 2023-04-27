<?php
function test($score1, $score2, $score3) {
    $allscore = $score1 + $score2 + $score3;
    if ($allscore > 210) {
        echo "合計点は" . $allscore . "なので合格です";
    } else {
    echo "合計点は" . $allscore . "なので不合格です";
    }
    return $allscore;
}

test(100, 100, 100);
echo "<br>";

function triangle($bottom, $height) {
    $area = $bottom * $height /2;
    return $area;
}
echo triangle(10, 10);
echo "<br>";

function square($bottom, $height) {
    $area = $bottom * $height;
    return $area;
}
echo square(10, 10);
echo "<br>";

function trapezoid($top, $bottom, $height) {
    $area = ($top + $bottom) * $height / 2;
    return $area;
}
echo trapezoid(10, 10, 10);