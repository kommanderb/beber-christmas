<?php

$assignees = [
    "Jacques",
    "Denis",
    "André",
    "Daniel",
    "Christine",
];

$giftReceivers = $assignees;

foreach ($assignees as $assignee) {
    $giftReceiver = $giftReceivers[array_rand($giftReceivers)];
    echo "$assignee will offer a gift to $giftReceiver\n";
    unset($giftReceivers[array_search($giftReceiver, $giftReceivers)]);
}
