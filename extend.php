<?php

/*
 * This file is part of lcinhk/flarum-ext-acgembed.
 *
 * Copyright (c) 2020 LCinHK.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace LCinHK\Acgembed;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;
return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->MediaEmbed->add(
                'music163',
                [
                    'host'    => 'music.163.com',
                    'extract' => '!music\\.163\\.com/(#/)?(?\'mode\'song|album|playlist)((\\?id=)|(\\/))(?\'id\'\\d+)!',
                    'choose'  => [
                        'when' => [
                            [
                                'test' => '@mode = \'album\'',
                                'iframe'  => [
                                    'width'  => 380,
                                    'height' => 450,
                                    'src'    => '//music.163.com/outchain/player?type=1&id={@id}&auto=0&height=450'
                                ]
                            ],
                            [
                                'test' => '@mode = \'song\'',
                                'iframe'  => [
                                    'width'  => 380,
                                    'height' => 86,
                                    'src'    => '//music.163.com/outchain/player?type=2&id={@id}&auto=0&height=66'
                                ]
                            ]
                        ],
                        'otherwise' => [
                            'iframe'  => [
                                'width'  => 380,
                                'height' => 450,
                                'src'    => '//music.163.com/outchain/player?type=0&id={@id}&auto=0&height=450'
                            ]
                        ]
                    ]
                ]
            );
			 $config->MediaEmbed->add(
				'acfun',
				[
					'host'	  => 'acfun.cn',
					'extract' => "!acfun\.cn/v/ac(?'acid'[-0-9]+)!",
					'iframe' => [
						'src'  => '//www.acfun.cn/player/ac{@acid}'
					]
				]
			);
			 $config->MediaEmbed->add(
				'bilibili',
				[
					'host'	  => ['bilibili.com','b23.tv',],
					'extract' => [
						"!bilibili\.com/video/av(?'aid'[-0-9]+)(\?p=(?'pn'[-0-9]+))?!",
						"!b23\.tv/(/av(?'aid'[-0-9]+))|(/sm(?'smid'[-0-9]+))(/p(?'pn'[-0-9]+))?!"
					],
					'iframe' => [
						'src'  => '//player.bilibili.com/player.html?aid={@aid}&page={@pn}'
					]
				]
			);
            $config->MediaEmbed->add(
                'niconico',
                [
                    'host'	  => ['nicovideo.jp','nico.ms'],
                    'extract' => [
                        "!nicovideo\.jp/watch/sm(?'smid'[-0-9]+)!",
                        "!nico\.ms/sm(?'smid'[-0-9]+)!",
                    ],
                    'iframe' => [
                        'src'  => '//embed.nicovideo.jp/watch/sm{@smid}'
                    ]
                ]
            );
            $config->MediaEmbed->add(
                'acgtv',
                [
                    'host'    => 'acg.tv',
                    'extract' => '!acg\\.tv/(?\'mode\'av|ac|sm)(?\'idhao\'\\d+)(\?p=(?\'pn\'[-0-9]+))?!',
                    'choose'  => [
                        'when' => [
                            [
                                'test' => '@mode = \'av\'',
                                'iframe'  => [
                                    'src'    => '//player.bilibili.com/player.html?aid={@idhao}'
                                ]
                            ],
                            [
                                'test' => '@mode = \'ac\'',
                                'iframe'  => [
                                    'src'    => '//www.acfun.cn/player/ac{@idhao}'
                                ]
                            ],
                            [
                                'test' => '@mode = \'sm\'',
                                'iframe'  => [
                                    'src'    => '//embed.nicovideo.jp/watch/sm{@idhao}'
                                ]
                            ],
                        ],
                        'otherwise' => [
                            'iframe'  => [
                                'src'    => '//acg.tv/{@idhao}'
                            ]
                        ]
                    ]
                ]
            );
             $config->BBCodes->addCustom(
               '[oneindex src={URL?}][/oneindex]',
               '<video preload="" controls="" width="100%"><source src="{URL}" type="video/mp4"></video>'
            );
        })
];
