<?php

if (starts_with($sysDescr, 'WatchGuard Fireware') || starts_with($sysObjectId, '.1.3.6.1.4.1.3097.1.5')) {
    $os = 'firebox';
}
