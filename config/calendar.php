<?php
// Keep account identifiers in the ignored local configuration file.
$calendarConfigPath = __DIR__ . '/calendar.local.php';
$calendarIds = is_file($calendarConfigPath) ? require $calendarConfigPath : [];
$calendarQuery = 'height=600&wkst=1&ctz=Asia%2FManila&showTitle=0';
foreach ($calendarIds as $calendarId) {
    $calendarQuery .= '&src=' . rawurlencode($calendarId);
}
$calendarEmbedUrl = $calendarIds
    ? 'https://calendar.google.com/calendar/embed?' . $calendarQuery
    : '';
