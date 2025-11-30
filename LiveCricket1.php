<?php
    // Set the Content-Type header to indicate JSON response
    header('Content-Type: application/json');

    // Prepare your data as a PHP object
    $channel = new stdClass();

    $channel->name = 'LIVE Cricket 1';
    $channel->logo = 'https://i.imgur.com/GTsLQ46.png';
    $channel->url = 'https://rumble.com/live-hls/70870y/playlist.m3u8';
    $channel->type = 'm3u8';
    $channel->key = '';
    $channel->uagent = '';
    $channel->referer = '';
    $channel->origin = '';
    $channel->cookie = '';
    $channel->source = '';
    $channel->visible = true;

    // Encode the object to JSON and output it
    echo json_encode($channel);
?>