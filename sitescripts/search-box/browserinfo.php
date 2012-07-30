<?php
function getBrowserInfo() {
    // Note: An excellent article on browser IDs can be found at
    // http://www.zytrax.com/tech/web/browser_ids.htm

    $SUPERCLASS_NAMES = "gecko,mozilla,mosaic,webkit";
    $SUPERCLASS_REGX  = "(?:".str_replace(",", ")|(?:", $SUPERCLASS_NAMES).")";

    $SUBCLASS_NAMES   = "opera,msie,firefox,chrome,safari";
    $SUBCLASS_REGX    = "(?:".str_replace(",", ")|(?:", $SUBCLASS_NAMES).")";

    $browser      = "unrecognized";
    $majorVersion = "0";
    $minorVersion = "0";
    $fullVersion  = "0.0";
    $platform     = 'unrecognized';

    $userAgent    = strtolower($_SERVER['HTTP_USER_AGENT']);

    $found = preg_match("/(?P<browser>".$SUBCLASS_REGX.")(?:\D*)(?P<majorVersion>\d*)(?P<minorVersion>(?:\.\d*)*)/i",$userAgent, $matches);
    if (!$found) {
        $found = preg_match("/(?P<browser>".$SUPERCLASS_REGX.")(?:\D*)(?P<majorVersion>\d*)(?P<minorVersion>(?:\.\d*)*)/i",$userAgent, $matches);
    }

    if ($found) {
        $browser      = $matches["browser"];
        $majorVersion = $matches["majorVersion"];
        $minorVersion = $matches["minorVersion"];
        $fullVersion  = $matches["majorVersion"].$matches["minorVersion"];
        if ($browser == "safari") {
            if (preg_match("/version\/(?P<majorVersion>\d*)(?P<minorVersion>(?:\.\d*)*)/i",$userAgent, $matches)){
                $majorVersion = $matches["majorVersion"];
                $minorVersion = $matches["minorVersion"];
                $fullVersion  = $majorVersion.".".$minorVersion;
            }
        }
    }

    if (strpos($userAgent, 'linux')) {
        $platform = 'linux';
    }
    else if (strpos($userAgent, 'macintosh') || strpos($userAgent, 'mac platform x')) {
        $platform = 'mac';
    }
    else if (strpos($userAgent, 'windows') || strpos($userAgent, 'win32')) {
        $platform = 'windows';
    }

    return array(
        "browser"      => $browser,
        "majorVersion" => $majorVersion,
        "minorVersion" => $minorVersion,
        "fullVersion"  => $fullVersion,
        "platform"     => $platform,
        "userAgent"    => $userAgent);
}
?>