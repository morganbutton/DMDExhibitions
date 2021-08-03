<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/mediaembed/mediaembed.yaml',
    'modified' => 1627964406,
    'data' => [
        'enabled' => true,
        'link' => false,
        'built_in_css' => true,
        'built_in_js' => true,
        'media' => [
            'width' => 640,
            'height' => 390,
            'adjust' => true,
            'preview' => true,
            'responsive' => false,
            'protocol' => 'http://'
        ],
        'services' => [
            'SoundCloud' => [
                'enabled' => true,
                'type' => 'rich',
                'example' => 'https://soundcloud.com/semiseria/verruckert-ausschnitt',
                'url' => 'w.soundcloud.com/player/?url=http://api.soundcloud.com/tracks/{:id}',
                'canonical' => 'http://soundcloud.com/{:id}',
                'endpoint' => 'http://soundcloud.com/oembed?url={:canonical}&format=json',
                'schemes' => [
                    0 => 'soundcloud.com/*',
                    1 => 'soundcloud.com/*/*',
                    2 => 'soundcloud.com/*/sets/*',
                    3 => 'soundcloud.com/groups/*',
                    4 => 'snd.sc/*'
                ],
                'params' => [
                    'auto_play' => false,
                    'buying' => true,
                    'download' => true,
                    'hide_related' => false,
                    'liking' => true,
                    'sharing' => true,
                    'show_artwork' => true,
                    'show_comments' => true,
                    'show_playcount' => true,
                    'show_user' => true,
                    'visual' => false
                ]
            ],
            'Spotify' => [
                'enabled' => true,
                'type' => 'rich',
                'canonical' => 'http://open.spotify.com/track/{:id}',
                'endpoint' => 'https://embed.spotify.com/oembed/?url={:canonical}&format=json',
                'schemes' => [
                    0 => 'open.spotify.com/track/*',
                    1 => 'spoti.fi/*'
                ]
            ],
            'Flickr' => [
                'enabled' => true,
                'type' => 'photo',
                'canonical' => 'http://www.flickr.com/photos/{:id}',
                'endpoint' => 'http://flickr.com/services/oembed?url={:canonical}&format=json',
                'schemes' => [
                    0 => 'flickr.com/photos/*',
                    1 => 'flic.kr/*'
                ]
            ],
            'Imgur' => [
                'enabled' => true,
                'type' => 'rich',
                'canonical' => 'http://imgur.com/gallery/{:id}',
                'endpoint' => 'http://api.imgur.com/oembed?url={:canonical}&format=json',
                'schemes' => [
                    0 => 'imgur.com/gallery/*',
                    1 => 'imgur.com/a/*',
                    2 => 'imgur.com/*'
                ]
            ],
            'Instagram' => [
                'enabled' => true,
                'type' => 'rich',
                'canonical' => 'http://instagram.com/p/{:id}',
                'endpoint' => 'http://api.instagram.com/oembed?url={:canonical}&format=json',
                'schemes' => [
                    0 => 'instagr.am/p/*',
                    1 => 'instagram.com/p/*'
                ]
            ],
            'Dailymotion' => [
                'enabled' => true,
                'type' => 'video',
                'url' => 'www.dailymotion.com/embed/video/{:id}',
                'canonical' => 'http://dailymotion.com/video/{:id}',
                'endpoint' => 'http://www.dailymotion.com/services/oembed?url={:canonical}&format=json',
                'schemes' => [
                    0 => 'dailymotion.com/video/*',
                    1 => 'dailymotion.com/*/video/*',
                    2 => 'dai\\.ly/*'
                ],
                'params' => [
                    'quality' => 1080
                ]
            ],
            'YouTube' => [
                'enabled' => true,
                'type' => 'video',
                'url' => 'www.youtube.com/embed/{:id}',
                'canonical' => 'http://www.youtube.com/watch?v={:id}',
                'endpoint' => 'http://www.youtube.com/oembed?url={:canonical}&format=json',
                'schemes' => [
                    0 => 'youtube.com/watch?*v=*',
                    1 => 'youtube.com/embed/*',
                    2 => 'youtube.com/v/*',
                    3 => 'youtube.com/?*v=*',
                    4 => 'youtu.be/*'
                ],
                'params' => [
                    'autoplay' => 0,
                    'modestbranding' => 1,
                    'theme' => 'light'
                ]
            ],
            'Vimeo' => [
                'enabled' => true,
                'type' => 'video',
                'url' => 'player.vimeo.com/video/{:id}',
                'canonical' => 'https://vimeo.com/{:id}',
                'endpoint' => 'http://vimeo.com/api/oembed.json?url={:canonical}',
                'schemes' => [
                    0 => 'vimeo.com/*',
                    1 => 'vimeo.com/channels/*/*',
                    2 => 'vimeo.com/groups/*/videos/*'
                ],
                'params' => [
                    'autoplay' => 0
                ]
            ],
            'Github' => [
                'enabled' => true,
                'type' => 'rich',
                'canonical' => 'https://gist.github.com/{:id}',
                'endpoint' => 'https://gist.github.com/{:id}.json',
                'schemes' => [
                    0 => 'gist.github.com/*',
                    1 => 'gist.github.com/*/*',
                    2 => 'gist.github.com/*?*'
                ]
            ],
            'Slides' => [
                'enabled' => true,
                'type' => 'rich',
                'canonical' => 'http://slides.com/{:id}',
                'endpoint' => 'http://slides.com/{:id}',
                'schemes' => [
                    0 => 'slides.com/*',
                    1 => 'slid.es/*'
                ],
                'params' => [
                    'style' => 'light',
                    'width' => 1920,
                    'height' => 1400
                ]
            ],
            'Twitter' => [
                'enabled' => true,
                'type' => 'rich',
                'canonical' => 'https://twitter.com/{:id}',
                'endpoint' => 'https://api.twitter.com/1/statuses/oembed.json?url={:canonical}',
                'schemes' => [
                    0 => 'twitter.com/*',
                    1 => 'twitter.com/*/*'
                ]
            ]
        ]
    ]
];
