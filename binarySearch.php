<?php

function BinarySearch($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = $left + intdiv($right - $left, 2);

        if ($nums[$mid] == $target) {
            return $mid;
        } elseif ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return -1;
}

$nums1 = [-1, 0, 3, 5, 9, 12];
$target1 = 2;
echo BinarySearch($nums1, $target1);
?>