<?php

$deg = floatval(readline('Введите положение стрелки в градусах: '));

function timeOnTheClock(float $degrees): array
{
    if ($degrees > 360) {
        $degrees %= 360;
    }

    $degreesPerHour = 30;
    $degreesPerMinute = 0.5;
    $degreesPerSecond = 0.008;

    $timeHour = round($degrees / $degreesPerHour, 0, PHP_ROUND_HALF_DOWN);
    $timeMinutes = round(($degrees / $degreesPerMinute) % 60, 0, PHP_ROUND_HALF_DOWN);
    $timeSeconds = round(($degrees / $degreesPerSecond) % 60, 0, PHP_ROUND_HALF_DOWN);

    return [$timeHour, $timeMinutes, $timeSeconds];
}

print_r(timeOnTheClock($deg));