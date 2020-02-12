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
				'acfun',
				[
					'host'	  => 'acfun.cn',
					'extract' => "!acfun\.cn/v/ac(?'acid'[-0-9]+)!", 
					'iframe' => [
						'src'  => 'https://www.acfun.cn/player/ac{@acid}'
					]
				]
			);
			 $config->MediaEmbed->add(
				'bilibili',
				[
					'host'	  => ['bilibili.com','b23.tv','acg.tv'],
					'extract' => [
						"!bilibili\.com/video/av(?'aid'[-0-9]+)(\?p=(?'pn'[-0-9]+))?!",
						"!acg\.tv/av(?'aid'[-0-9]+)(\?p=(?'pn'[-0-9]+))?!",
						"!b23\.tv/av(?'aid'[-0-9]+)(/p(?'pn'[-0-9]+))?!"
					],
					'iframe' => [	
						'src'  => '//player.bilibili.com/player.html?aid={@aid}&page={@pn}'
					]
				]			
			);
             $config->BBCodes->addCustom(
               '[oneindex src={URL?}][/oneindex]',
               '<video preload="" controls="" width="100%"><source src="{URL}" type="video/mp4"></video>'
            );
        })
];
