# v0.2
### Acgembed

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/lcinhk/flarum-ext-acgembed.svg)](https://packagist.org/packages/lcinhk/flarum-ext-acgembed)

A [Flarum](http://flarum.org) extension. Add acfun.cn/bilibili.com and netease cloud music in mediaembed
### ACFUN
```
以https://www.acfun.cn/v/ac12809987
来发acfun视频（不支持分p）
Post ACFUN videos as https://www.acfun.cn/v/ac12809987 (Multi pages are not supported)
```
### Bilibili
```
以https://b23.tv/av12450（如需发分p的第3p，请在av号后面加/p3）
Post as https://b23.tv/av12450 (For page3, add a /p3 after /av12450)
或https://www.bilibili.com/video/av12450（如需发分p的第3p，请在av号后面加?p=3）
Or as https://www.bilibili.com/video/av12450 (For page3, add a ?p=3 after /av12450)
或https://acg.tv/av12450 （如需发分p的第3p，请在av号后面加?p=3）
Or as  https://acg.tv/av12450 (For page3, add a ?p=3 after /av12450)
来发bilibili视频
to post bilibili videos
```
注：教程以ac12809987和av12450为例，请换成具体要发视频的ac/av号
PS: Remember to replace ac12809987 and av12450 into the ac/av id that you are posting
![IMGUR图片](https://imgur.com/SCYqKOT.gif)
## v0.2↓
### Netease cloud music (网易云音乐)
```
直接用分享出来的链接发即可
Just use the link.
https://music.163.com/#/song?id=1304754139
```
### Installation
```sh
composer require lcinhk/flarum-ext-acgembed
```
### Updating
```sh
composer update lcinhk/flarum-ext-acgembed
```
### Links
Inspired by [flarum-bbcode-bilibili](https://github.com/pluveto/flarum-bbcode-bilibili) and [flarum-ext-mediaembed-pro](https://github.com/FlarumChina/flarum-ext-mediaembed-pro)
- [Packagist](https://packagist.org/packages/lcinhk/flarum-ext-acgembed)
