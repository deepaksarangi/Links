<?php
    // Set the Content-Type header to indicate JSON response
    header('Content-Type: application/json');

    // Prepare your data as a PHP object
    $channel = new stdClass();

    $channel->name = 'LIVE Cricket 2';
    $channel->logo = 'https://i.imgur.com/GhzosVC.png';
    $channel->url = 'https://otte.live.fly.ww.aiv-cdn.net/bom-nitro/live/dash/enc/satb56lhwm/out/v1/0a7cc27649444ebd8ece275fbeac2343/cenc.mpd';
    $channel->type = 'mpd';
    $channel->key = 'eae94c9c07e7622420b9128b41c1d037:736e311177c9395fa178df1032d4ebba';
    $channel->uagent = '';
    $channel->referer = '';
    $channel->origin = '';
    $channel->cookie = '';
    $channel->source = '';
    $channel->visible = true;

    // Encode the object to JSON and output it
    echo json_encode($channel);
?>