<?
	$title = 'Emoji for PHP';
	$width = 800;
	include('../../head.txt');
?>

<h1>Emoji for PHP</h1>

<p>This library allows the handling and conversion of Emoji in PHP.</p>

<p>You can <a href="https://github.com/iamcal/php-emoji/zipball/r2">download the latest release</a> (r2) which contains a helpful readme file.</p>

<p>If you want the bleeding edge, it's also in my <a href="https://github.com/iamcal/php-emoji">public GitHub repo</a>.</p>


<h2>Example</h2>

<pre>
&lt;?php
	include('emoji.php');


	# browser sniffing tells us that a docomo phone
	# submitted this text

	$clean_text = emoji_docomo_to_unified($_POST[message]);


	...


	# now we want to show it in a desktop browser

	$html = emoji_unified_to_html($clean_text);
?&gt;
</pre>


<h2>WTF is this crap?</h2>

<p>Ahh, young grasshopper. You might want to <a href="http://www.iamcal.com/emoji-in-web-apps/">read this</a> first.</p>


<style>

table {
    -webkit-border-radius: 0.41em;
    -moz-border-radius: 0.41em;
    border: 1px solid #999;
    font-size: 12px;
    width: 100%;
}

table td {
    padding-left: 0.41em;
    padding-right: 0.41em;
}

table th {
    font-weight: bold;
    text-align: left;
    background: #BBB;
    color: #333;
    font-size: 14px;
    padding: 0.41em;
}

table tbody tr:nth-child(even) {
    background: #dedede;
}

table tbody td {
    padding: 0.41em;
}

.emoji { float:left; background: url("iphone_emoji.png") top left no-repeat; width: 20px; height: 20px }
.emoji2600 { background-position: 0px -260px; }
.emoji2601 { background-position: 0px -20px; }
.emoji2614 { background-position: 0px -40px; }
.emoji26c4 { background-position: 0px -60px; }
.emoji26a1 { background-position: 0px -80px; }
.emoji1f300 { background-position: 0px -100px; }
.emoji1f301 { background-position: 0px -9200px; } /* placeholder */
.emoji1f302 { background-position: 0px -120px; }
.emoji1f303 { background-position: 0px -920px; }
.emoji1f304 { background-position: 0px -160px; }
.emoji1f305 { background-position: 0px -180px; }
.emoji1f306 { background-position: 0px -200px; }
.emoji1f307 { background-position: 0px -220px; }
.emoji1f308 { background-position: 0px -240px; }
.emoji2744 { background-position: 0px -9200px; } /* placeholder */
.emoji1f309 { background-position: 0px -920px; }
.emoji1f30a { background-position: 0px -900px; }
.emoji1f30b { background-position: 0px -9200px; } /* placeholder */
.emoji1f30c { background-position: 0px -920px; }
.emoji1f30f { background-position: 0px -9200px; } /* placeholder */
.emoji1f311 { background-position: 0px -9200px; } /* placeholder */
.emoji1f314 { background-position: 0px -360px; }
.emoji1f313 { background-position: 0px -360px; }
.emoji1f319 { background-position: 0px -360px; }
.emoji1f315 { background-position: 0px -9200px; } /* placeholder */
.emoji1f31b { background-position: 0px -360px; }
.emoji1f31f { background-position: 0px -10740px; }
.emoji1f320 { background-position: 0px -9200px; } /* placeholder */
.emoji1f550 { background-position: 0px -380px; }
.emoji1f551 { background-position: 0px -400px; }
.emoji1f552 { background-position: 0px -420px; }
.emoji1f553 { background-position: 0px -440px; }
.emoji1f554 { background-position: 0px -460px; }
.emoji1f555 { background-position: 0px -480px; }
.emoji1f556 { background-position: 0px -500px; }
.emoji1f557 { background-position: 0px -520px; }
.emoji1f558 { background-position: 0px -540px; }
.emoji1f559 { background-position: 0px -620px; }
.emoji1f55a { background-position: 0px -580px; }
.emoji1f55b { background-position: 0px -600px; }
.emoji231a { background-position: 0px -9200px; } /* placeholder */
.emoji231b { background-position: 0px -9200px; } /* placeholder */
.emoji23f0 { background-position: 0px -620px; }
.emoji23f3 { background-position: 0px -9200px; } /* placeholder */
.emoji2648 { background-position: 0px -640px; }
.emoji2649 { background-position: 0px -660px; }
.emoji264a { background-position: 0px -680px; }
.emoji264b { background-position: 0px -700px; }
.emoji264c { background-position: 0px -720px; }
.emoji264d { background-position: 0px -740px; }
.emoji264e { background-position: 0px -760px; }
.emoji264f { background-position: 0px -780px; }
.emoji2650 { background-position: 0px -800px; }
.emoji2651 { background-position: 0px -820px; }
.emoji2652 { background-position: 0px -840px; }
.emoji2653 { background-position: 0px -860px; }
.emoji26ce { background-position: 0px -880px; }
.emoji1f340 { background-position: 0px -1220px; }
.emoji1f337 { background-position: 0px -960px; }
.emoji1f331 { background-position: 0px -1220px; }
.emoji1f341 { background-position: 0px -1000px; }
.emoji1f338 { background-position: 0px -1020px; }
.emoji1f339 { background-position: 0px -1040px; }
.emoji1f342 { background-position: 0px -1060px; }
.emoji1f343 { background-position: 0px -1080px; }
.emoji1f33a { background-position: 0px -1100px; }
.emoji1f33b { background-position: 0px -1200px; }
.emoji1f334 { background-position: 0px -1140px; }
.emoji1f335 { background-position: 0px -1160px; }
.emoji1f33e { background-position: 0px -1180px; }
.emoji1f33d { background-position: 0px -9200px; } /* placeholder */
.emoji1f344 { background-position: 0px -9200px; } /* placeholder */
.emoji1f330 { background-position: 0px -9200px; } /* placeholder */
.emoji1f33c { background-position: 0px -1200px; }
.emoji1f33f { background-position: 0px -1220px; }
.emoji1f352 { background-position: 0px -9200px; } /* placeholder */
.emoji1f34c { background-position: 0px -9200px; } /* placeholder */
.emoji1f34e { background-position: 0px -1360px; }
.emoji1f34a { background-position: 0px -1260px; }
.emoji1f353 { background-position: 0px -1280px; }
.emoji1f349 { background-position: 0px -1300px; }
.emoji1f345 { background-position: 0px -1320px; }
.emoji1f346 { background-position: 0px -1340px; }
.emoji1f348 { background-position: 0px -9200px; } /* placeholder */
.emoji1f34d { background-position: 0px -9200px; } /* placeholder */
.emoji1f347 { background-position: 0px -9200px; } /* placeholder */
.emoji1f351 { background-position: 0px -9200px; } /* placeholder */
.emoji1f34f { background-position: 0px -1360px; }
.emoji1f440 { background-position: 0px -1380px; }
.emoji1f442 { background-position: 0px -1400px; }
.emoji1f443 { background-position: 0px -1420px; }
.emoji1f444 { background-position: 0px -1440px; }
.emoji1f445 { background-position: 0px -3000px; }
.emoji1f484 { background-position: 0px -1480px; }
.emoji1f485 { background-position: 0px -1500px; }
.emoji1f486 { background-position: 0px -1520px; }
.emoji1f487 { background-position: 0px -1540px; }
.emoji1f488 { background-position: 0px -1560px; }
.emoji1f464 { background-position: 0px -9200px; } /* placeholder */
.emoji1f466 { background-position: 0px -1580px; }
.emoji1f467 { background-position: 0px -1600px; }
.emoji1f468 { background-position: 0px -1620px; }
.emoji1f469 { background-position: 0px -1640px; }
.emoji1f46a { background-position: 0px -9200px; } /* placeholder */
.emoji1f46b { background-position: 0px -1660px; }
.emoji1f46e { background-position: 0px -1680px; }
.emoji1f46f { background-position: 0px -1700px; }
.emoji1f470 { background-position: 0px -9200px; } /* placeholder */
.emoji1f471 { background-position: 0px -1720px; }
.emoji1f472 { background-position: 0px -1740px; }
.emoji1f473 { background-position: 0px -1760px; }
.emoji1f474 { background-position: 0px -1780px; }
.emoji1f475 { background-position: 0px -1800px; }
.emoji1f476 { background-position: 0px -1820px; }
.emoji1f477 { background-position: 0px -1840px; }
.emoji1f478 { background-position: 0px -1860px; }
.emoji1f479 { background-position: 0px -9200px; } /* placeholder */
.emoji1f47a { background-position: 0px -9200px; } /* placeholder */
.emoji1f47b { background-position: 0px -1880px; }
.emoji1f47c { background-position: 0px -1900px; }
.emoji1f47d { background-position: 0px -1920px; }
.emoji1f47e { background-position: 0px -1940px; }
.emoji1f47f { background-position: 0px -1960px; }
.emoji1f480 { background-position: 0px -1980px; }
.emoji1f481 { background-position: 0px -2000px; }
.emoji1f482 { background-position: 0px -2020px; }
.emoji1f483 { background-position: 0px -2040px; }
.emoji1f40c { background-position: 0px -9200px; } /* placeholder */
.emoji1f40d { background-position: 0px -2620px; }
.emoji1f40e { background-position: 0px -6680px; }
.emoji1f414 { background-position: 0px -2640px; }
.emoji1f417 { background-position: 0px -2660px; }
.emoji1f42b { background-position: 0px -2680px; }
.emoji1f418 { background-position: 0px -2480px; }
.emoji1f428 { background-position: 0px -2500px; }
.emoji1f412 { background-position: 0px -2520px; }
.emoji1f411 { background-position: 0px -2540px; }
.emoji1f419 { background-position: 0px -2340px; }
.emoji1f41a { background-position: 0px -2360px; }
.emoji1f41b { background-position: 0px -2460px; }
.emoji1f41c { background-position: 0px -9200px; } /* placeholder */
.emoji1f41d { background-position: 0px -9200px; } /* placeholder */
.emoji1f41e { background-position: 0px -9200px; } /* placeholder */
.emoji1f420 { background-position: 0px -2420px; }
.emoji1f421 { background-position: 0px -7360px; }
.emoji1f422 { background-position: 0px -9200px; } /* placeholder */
.emoji1f424 { background-position: 0px -2140px; }
.emoji1f425 { background-position: 0px -2140px; }
.emoji1f426 { background-position: 0px -2400px; }
.emoji1f423 { background-position: 0px -2140px; }
.emoji1f427 { background-position: 0px -2160px; }
.emoji1f429 { background-position: 0px -2720px; }
.emoji1f41f { background-position: 0px -7360px; }
.emoji1f42c { background-position: 0px -2380px; }
.emoji1f42d { background-position: 0px -2280px; }
.emoji1f42f { background-position: 0px -2240px; }
.emoji1f431 { background-position: 0px -2080px; }
.emoji1f433 { background-position: 0px -2300px; }
.emoji1f434 { background-position: 0px -2200px; }
.emoji1f435 { background-position: 0px -2320px; }
.emoji1f436 { background-position: 0px -2720px; }
.emoji1f437 { background-position: 0px -2780px; }
.emoji1f43b { background-position: 0px -2260px; }
.emoji1f439 { background-position: 0px -2440px; }
.emoji1f43a { background-position: 0px -2560px; }
.emoji1f42e { background-position: 0px -2580px; }
.emoji1f430 { background-position: 0px -2600px; }
.emoji1f438 { background-position: 0px -2700px; }
.emoji1f43e { background-position: 0px -6460px; }
.emoji1f432 { background-position: 0px -9200px; } /* placeholder */
.emoji1f43c { background-position: 0px -9200px; } /* placeholder */
.emoji1f43d { background-position: 0px -2780px; }
.emoji1f620 { background-position: 0px -2800px; }
.emoji1f629 { background-position: 0px -3860px; }
.emoji1f632 { background-position: 0px -2840px; }
.emoji1f61e { background-position: 0px -2860px; }
.emoji1f635 { background-position: 0px -3540px; }
.emoji1f630 { background-position: 0px -2900px; }
.emoji1f612 { background-position: 0px -2920px; }
.emoji1f60d { background-position: 0px -3660px; }
.emoji1f624 { background-position: 0px -3720px; }
.emoji1f61c { background-position: 0px -2980px; }
.emoji1f61d { background-position: 0px -3000px; }
.emoji1f60b { background-position: 0px -3220px; }
.emoji1f618 { background-position: 0px -3640px; }
.emoji1f61a { background-position: 0px -3060px; }
.emoji1f637 { background-position: 0px -3080px; }
.emoji1f633 { background-position: 0px -3100px; }
.emoji1f603 { background-position: 0px -3580px; }
.emoji1f606 { background-position: 0px -3380px; }
.emoji1f601 { background-position: 0px -3720px; }
.emoji1f602 { background-position: 0px -3620px; }
.emoji1f60a { background-position: 0px -3220px; }
.emoji263a { background-position: 0px -3240px; }
.emoji1f604 { background-position: 0px -3260px; }
.emoji1f622 { background-position: 0px -3680px; }
.emoji1f62d { background-position: 0px -3300px; }
.emoji1f628 { background-position: 0px -3320px; }
.emoji1f623 { background-position: 0px -3540px; }
.emoji1f621 { background-position: 0px -3880px; }
.emoji1f60c { background-position: 0px -3380px; }
.emoji1f616 { background-position: 0px -10520px; }
.emoji1f614 { background-position: 0px -3860px; }
.emoji1f631 { background-position: 0px -3440px; }
.emoji1f62a { background-position: 0px -3460px; }
.emoji1f60f { background-position: 0px -3480px; }
.emoji1f613 { background-position: 0px -3500px; }
.emoji1f625 { background-position: 0px -3520px; }
.emoji1f62b { background-position: 0px -3540px; }
.emoji1f609 { background-position: 0px -3560px; }
.emoji1f63a { background-position: 0px -3580px; }
.emoji1f638 { background-position: 0px -3720px; }
.emoji1f639 { background-position: 0px -3620px; }
.emoji1f63d { background-position: 0px -3640px; }
.emoji1f63b { background-position: 0px -3660px; }
.emoji1f63f { background-position: 0px -3680px; }
.emoji1f63e { background-position: 0px -3880px; }
.emoji1f63c { background-position: 0px -3720px; }
.emoji1f640 { background-position: 0px -3860px; }
.emoji1f645 { background-position: 0px -3760px; }
.emoji1f646 { background-position: 0px -3780px; }
.emoji1f647 { background-position: 0px -3800px; }
.emoji1f648 { background-position: 0px -9200px; } /* placeholder */
.emoji1f64a { background-position: 0px -9200px; } /* placeholder */
.emoji1f649 { background-position: 0px -9200px; } /* placeholder */
.emoji1f64b { background-position: 0px -11240px; }
.emoji1f64c { background-position: 0px -3840px; }
.emoji1f64d { background-position: 0px -3860px; }
.emoji1f64e { background-position: 0px -3880px; }
.emoji1f64f { background-position: 0px -3900px; }
.emoji1f3e0 { background-position: 0px -3940px; }
.emoji1f3e1 { background-position: 0px -3940px; }
.emoji1f3e2 { background-position: 0px -3960px; }
.emoji1f3e3 { background-position: 0px -3980px; }
.emoji1f3e5 { background-position: 0px -4000px; }
.emoji1f3e6 { background-position: 0px -4020px; }
.emoji1f3e7 { background-position: 0px -4040px; }
.emoji1f3e8 { background-position: 0px -4060px; }
.emoji1f3ea { background-position: 0px -4100px; }
.emoji1f3eb { background-position: 0px -4120px; }
.emoji26ea { background-position: 0px -4140px; }
.emoji26f2 { background-position: 0px -4160px; }
.emoji1f3ec { background-position: 0px -4180px; }
.emoji1f3ef { background-position: 0px -4200px; }
.emoji1f3f0 { background-position: 0px -4220px; }
.emoji1f3ed { background-position: 0px -4240px; }
.emoji2693 { background-position: 0px -6920px; }
.emoji1f3ee { background-position: 0px -8800px; }
.emoji1f5fb { background-position: 0px -4300px; }
.emoji1f5fc { background-position: 0px -4320px; }
.emoji1f5fd { background-position: 0px -4340px; }
.emoji1f5fe { background-position: 0px -9200px; } /* placeholder */
.emoji1f5ff { background-position: 0px -9200px; } /* placeholder */
.emoji1f45e { background-position: 0px -4400px; }
.emoji1f45f { background-position: 0px -4400px; }
.emoji1f460 { background-position: 0px -4420px; }
.emoji1f461 { background-position: 0px -4440px; }
.emoji1f462 { background-position: 0px -4460px; }
.emoji1f463 { background-position: 0px -6460px; }
.emoji1f453 { background-position: 0px -9200px; } /* placeholder */
.emoji1f455 { background-position: 0px -4620px; }
.emoji1f456 { background-position: 0px -9200px; } /* placeholder */
.emoji1f451 { background-position: 0px -4500px; }
.emoji1f454 { background-position: 0px -4520px; }
.emoji1f452 { background-position: 0px -4540px; }
.emoji1f457 { background-position: 0px -4560px; }
.emoji1f458 { background-position: 0px -4580px; }
.emoji1f459 { background-position: 0px -4600px; }
.emoji1f45a { background-position: 0px -4620px; }
.emoji1f45b { background-position: 0px -9200px; } /* placeholder */
.emoji1f45c { background-position: 0px -4960px; }
.emoji1f45d { background-position: 0px -9200px; } /* placeholder */
.emoji1f4b0 { background-position: 0px -4720px; }
.emoji1f4b1 { background-position: 0px -4660px; }
.emoji1f4b9 { background-position: 0px -6380px; }
.emoji1f4b2 { background-position: 0px -4720px; }
.emoji1f4b3 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4b4 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4b5 { background-position: 0px -4720px; }
.emoji1f4b8 { background-position: 0px -9200px; } /* placeholder */
.emoji1f1e81f1f3 { background-position: 0px -4740px; }
.emoji1f1e91f1ea { background-position: 0px -4760px; }
.emoji1f1ea1f1f8 { background-position: 0px -4780px; }
.emoji1f1eb1f1f7 { background-position: 0px -4800px; }
.emoji1f1ec1f1e7 { background-position: 0px -4820px; }
.emoji1f1ee1f1f9 { background-position: 0px -4840px; }
.emoji1f1ef1f1f5 { background-position: 0px -4860px; }
.emoji1f1f01f1f7 { background-position: 0px -4880px; }
.emoji1f1f71f1fa { background-position: 0px -4900px; }
.emoji1f1fa1f1f8 { background-position: 0px -4920px; }
.emoji1f525 { background-position: 0px -5040px; }
.emoji1f526 { background-position: 0px -9200px; } /* placeholder */
.emoji1f527 { background-position: 0px -9200px; } /* placeholder */
.emoji1f528 { background-position: 0px -4360px; }
.emoji1f529 { background-position: 0px -9200px; } /* placeholder */
.emoji1f52a { background-position: 0px -9200px; } /* placeholder */
.emoji1f52b { background-position: 0px -5020px; }
.emoji1f52e { background-position: 0px -5080px; }
.emoji1f52f { background-position: 0px -5080px; }
.emoji1f530 { background-position: 0px -9660px; }
.emoji1f531 { background-position: 0px -9680px; }
.emoji1f489 { background-position: 0px -5300px; }
.emoji1f48a { background-position: 0px -5320px; }
.emoji1f170 { background-position: 0px -5340px; }
.emoji1f171 { background-position: 0px -5360px; }
.emoji1f18e { background-position: 0px -5380px; }
.emoji1f17e { background-position: 0px -5400px; }
.emoji1f380 { background-position: 0px -5420px; }
.emoji1f381 { background-position: 0px -6080px; }
.emoji1f382 { background-position: 0px -5460px; }
.emoji1f384 { background-position: 0px -5480px; }
.emoji1f385 { background-position: 0px -5500px; }
.emoji1f38c { background-position: 0px -5520px; }
.emoji1f386 { background-position: 0px -5540px; }
.emoji1f388 { background-position: 0px -5560px; }
.emoji1f389 { background-position: 0px -5580px; }
.emoji1f38d { background-position: 0px -5600px; }
.emoji1f38e { background-position: 0px -5620px; }
.emoji1f393 { background-position: 0px -5640px; }
.emoji1f392 { background-position: 0px -5660px; }
.emoji1f38f { background-position: 0px -5680px; }
.emoji1f387 { background-position: 0px -5700px; }
.emoji1f390 { background-position: 0px -5720px; }
.emoji1f383 { background-position: 0px -5740px; }
.emoji1f38a { background-position: 0px -9200px; } /* placeholder */
.emoji1f38b { background-position: 0px -9200px; } /* placeholder */
.emoji1f391 { background-position: 0px -5760px; }
.emoji1f4df { background-position: 0px -9200px; } /* placeholder */
.emoji260e { background-position: 0px -5800px; }
.emoji1f4de { background-position: 0px -5800px; }
.emoji1f4f1 { background-position: 0px -5820px; }
.emoji1f4f2 { background-position: 0px -5840px; }
.emoji1f4dd { background-position: 0px -6440px; }
.emoji1f4e0 { background-position: 0px -5880px; }
.emoji2709 { background-position: 0px -11200px; }
.emoji1f4e8 { background-position: 0px -11200px; }
.emoji1f4e9 { background-position: 0px -11200px; }
.emoji1f4ea { background-position: 0px -5980px; }
.emoji1f4eb { background-position: 0px -5980px; }
.emoji1f4ee { background-position: 0px -6000px; }
.emoji1f4f0 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4e2 { background-position: 0px -6020px; }
.emoji1f4e3 { background-position: 0px -6040px; }
.emoji1f4e1 { background-position: 0px -6060px; }
.emoji1f4e4 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4e5 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4e6 { background-position: 0px -6080px; }
.emoji1f4e7 { background-position: 0px -11200px; }
.emoji1f520 { background-position: 0px -9200px; } /* placeholder */
.emoji1f521 { background-position: 0px -9200px; } /* placeholder */
.emoji1f522 { background-position: 0px -9200px; } /* placeholder */
.emoji1f523 { background-position: 0px -9200px; } /* placeholder */
.emoji1f524 { background-position: 0px -9200px; } /* placeholder */
.emoji2712 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4ba { background-position: 0px -6100px; }
.emoji1f4bb { background-position: 0px -6120px; }
.emoji270f { background-position: 0px -6440px; }
.emoji1f4ce { background-position: 0px -9200px; } /* placeholder */
.emoji1f4bc { background-position: 0px -6160px; }
.emoji1f4bd { background-position: 0px -6200px; }
.emoji1f4be { background-position: 0px -6200px; }
.emoji1f4bf { background-position: 0px -7800px; }
.emoji1f4c0 { background-position: 0px -7820px; }
.emoji2702 { background-position: 0px -6220px; }
.emoji1f4cd { background-position: 0px -9200px; } /* placeholder */
.emoji1f4c3 { background-position: 0px -6440px; }
.emoji1f4c4 { background-position: 0px -6440px; }
.emoji1f4c5 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4c1 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4c2 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4d3 { background-position: 0px -6420px; }
.emoji1f4d6 { background-position: 0px -6420px; }
.emoji1f4d4 { background-position: 0px -6420px; }
.emoji1f4d5 { background-position: 0px -6420px; }
.emoji1f4d7 { background-position: 0px -6420px; }
.emoji1f4d8 { background-position: 0px -6420px; }
.emoji1f4d9 { background-position: 0px -6420px; }
.emoji1f4da { background-position: 0px -6420px; }
.emoji1f4db { background-position: 0px -9200px; } /* placeholder */
.emoji1f4dc { background-position: 0px -9200px; } /* placeholder */
.emoji1f4cb { background-position: 0px -6440px; }
.emoji1f4c6 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4ca { background-position: 0px -6380px; }
.emoji1f4c8 { background-position: 0px -6380px; }
.emoji1f4c9 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4c7 { background-position: 0px -6420px; }
.emoji1f4cc { background-position: 0px -9200px; } /* placeholder */
.emoji1f4d2 { background-position: 0px -6420px; }
.emoji1f4cf { background-position: 0px -9200px; } /* placeholder */
.emoji1f4d0 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4d1 { background-position: 0px -6440px; }
.emoji1f3bd { background-position: 0px -9200px; } /* placeholder */
.emoji26be { background-position: 0px -6480px; }
.emoji26f3 { background-position: 0px -6500px; }
.emoji1f3be { background-position: 0px -6520px; }
.emoji26bd { background-position: 0px -6540px; }
.emoji1f3bf { background-position: 0px -6560px; }
.emoji1f3c0 { background-position: 0px -6580px; }
.emoji1f3c1 { background-position: 0px -6600px; }
.emoji1f3c2 { background-position: 0px -9200px; } /* placeholder */
.emoji1f3c3 { background-position: 0px -6620px; }
.emoji1f3c4 { background-position: 0px -6640px; }
.emoji1f3c6 { background-position: 0px -6660px; }
.emoji1f3c8 { background-position: 0px -6700px; }
.emoji1f3ca { background-position: 0px -6720px; }
.emoji1f683 { background-position: 0px -6740px; }
.emoji1f687 { background-position: 0px -6780px; }
.emoji24c2 { background-position: 0px -6780px; }
.emoji1f684 { background-position: 0px -6800px; }
.emoji1f685 { background-position: 0px -6820px; }
.emoji1f697 { background-position: 0px -6840px; }
.emoji1f699 { background-position: 0px -6860px; }
.emoji1f68c { background-position: 0px -6880px; }
.emoji1f68f { background-position: 0px -6900px; }
.emoji1f6a2 { background-position: 0px -6920px; }
.emoji2708 { background-position: 0px -6940px; }
.emoji26f5 { background-position: 0px -6960px; }
.emoji1f689 { background-position: 0px -7000px; }
.emoji1f680 { background-position: 0px -7020px; }
.emoji1f6a4 { background-position: 0px -7040px; }
.emoji1f695 { background-position: 0px -7060px; }
.emoji1f69a { background-position: 0px -7100px; }
.emoji1f692 { background-position: 0px -7120px; }
.emoji1f691 { background-position: 0px -7140px; }
.emoji1f693 { background-position: 0px -7260px; }
.emoji26fd { background-position: 0px -7180px; }
.emoji1f17f { background-position: 0px -7200px; }
.emoji1f6a5 { background-position: 0px -7220px; }
.emoji1f6a7 { background-position: 0px -9720px; }
.emoji1f6a8 { background-position: 0px -7260px; }
.emoji2668 { background-position: 0px -7280px; }
.emoji26fa { background-position: 0px -7300px; }
.emoji1f3a0 { background-position: 0px -9200px; } /* placeholder */
.emoji1f3a1 { background-position: 0px -7320px; }
.emoji1f3a2 { background-position: 0px -7340px; }
.emoji1f3a3 { background-position: 0px -7360px; }
.emoji1f3a4 { background-position: 0px -7380px; }
.emoji1f3a5 { background-position: 0px -7400px; }
.emoji1f3a6 { background-position: 0px -7420px; }
.emoji1f3a7 { background-position: 0px -7440px; }
.emoji1f3a8 { background-position: 0px -7460px; }
.emoji1f3a9 { background-position: 0px -7540px; }
.emoji1f3aa { background-position: 0px -9200px; } /* placeholder */
.emoji1f3ab { background-position: 0px -7500px; }
.emoji1f3ac { background-position: 0px -7520px; }
.emoji1f3ad { background-position: 0px -7540px; }
.emoji1f3ae { background-position: 0px -9200px; } /* placeholder */
.emoji1f004 { background-position: 0px -7560px; }
.emoji1f3af { background-position: 0px -7580px; }
.emoji1f3b0 { background-position: 0px -7600px; }
.emoji1f3b1 { background-position: 0px -7620px; }
.emoji1f3b2 { background-position: 0px -9200px; } /* placeholder */
.emoji1f3b3 { background-position: 0px -9200px; } /* placeholder */
.emoji1f3b4 { background-position: 0px -9200px; } /* placeholder */
.emoji1f0cf { background-position: 0px -9200px; } /* placeholder */
.emoji1f3b5 { background-position: 0px -7640px; }
.emoji1f3b6 { background-position: 0px -7740px; }
.emoji1f3b7 { background-position: 0px -7680px; }
.emoji1f3b8 { background-position: 0px -7700px; }
.emoji1f3b9 { background-position: 0px -9200px; } /* placeholder */
.emoji1f3ba { background-position: 0px -7720px; }
.emoji1f3bb { background-position: 0px -9200px; } /* placeholder */
.emoji1f3bc { background-position: 0px -7740px; }
.emoji303d { background-position: 0px -7760px; }
.emoji1f4f7 { background-position: 0px -4940px; }
.emoji1f4f9 { background-position: 0px -7400px; }
.emoji1f4fa { background-position: 0px -7780px; }
.emoji1f4fb { background-position: 0px -7840px; }
.emoji1f4fc { background-position: 0px -7860px; }
.emoji1f48b { background-position: 0px -7900px; }
.emoji1f48d { background-position: 0px -7940px; }
.emoji1f48e { background-position: 0px -7960px; }
.emoji1f48f { background-position: 0px -7980px; }
.emoji1f490 { background-position: 0px -8000px; }
.emoji1f491 { background-position: 0px -8020px; }
.emoji1f492 { background-position: 0px -8040px; }
.emoji1f51e { background-position: 0px -9860px; }
.emojia9 { background-position: 0px -9900px; }
.emojiae { background-position: 0px -9920px; }
.emoji2122 { background-position: 0px -9940px; }
.emoji2139 { background-position: 0px -9200px; } /* placeholder */
.emoji2320e3 { background-position: 0px -8060px; }
.emoji3120e3 { background-position: 0px -8080px; }
.emoji3220e3 { background-position: 0px -8100px; }
.emoji3320e3 { background-position: 0px -8120px; }
.emoji3420e3 { background-position: 0px -8140px; }
.emoji3520e3 { background-position: 0px -8160px; }
.emoji3620e3 { background-position: 0px -8180px; }
.emoji3720e3 { background-position: 0px -8200px; }
.emoji3820e3 { background-position: 0px -8220px; }
.emoji3920e3 { background-position: 0px -8240px; }
.emoji3020e3 { background-position: 0px -8260px; }
.emoji1f51f { background-position: 0px -9200px; } /* placeholder */
.emoji1f4f6 { background-position: 0px -8280px; }
.emoji1f4f3 { background-position: 0px -8300px; }
.emoji1f4f4 { background-position: 0px -8320px; }
.emoji1f354 { background-position: 0px -8340px; }
.emoji1f359 { background-position: 0px -8360px; }
.emoji1f370 { background-position: 0px -8380px; }
.emoji1f35c { background-position: 0px -8400px; }
.emoji1f35e { background-position: 0px -8420px; }
.emoji1f373 { background-position: 0px -8440px; }
.emoji1f366 { background-position: 0px -8460px; }
.emoji1f35f { background-position: 0px -8480px; }
.emoji1f361 { background-position: 0px -8500px; }
.emoji1f358 { background-position: 0px -8520px; }
.emoji1f35a { background-position: 0px -8540px; }
.emoji1f35d { background-position: 0px -8560px; }
.emoji1f35b { background-position: 0px -8580px; }
.emoji1f362 { background-position: 0px -8600px; }
.emoji1f363 { background-position: 0px -8620px; }
.emoji1f371 { background-position: 0px -8640px; }
.emoji1f372 { background-position: 0px -8660px; }
.emoji1f367 { background-position: 0px -8680px; }
.emoji1f356 { background-position: 0px -9200px; } /* placeholder */
.emoji1f365 { background-position: 0px -9200px; } /* placeholder */
.emoji1f360 { background-position: 0px -9200px; } /* placeholder */
.emoji1f355 { background-position: 0px -9200px; } /* placeholder */
.emoji1f357 { background-position: 0px -9200px; } /* placeholder */
.emoji1f368 { background-position: 0px -9200px; } /* placeholder */
.emoji1f369 { background-position: 0px -9200px; } /* placeholder */
.emoji1f36a { background-position: 0px -9200px; } /* placeholder */
.emoji1f36b { background-position: 0px -9200px; } /* placeholder */
.emoji1f36c { background-position: 0px -9200px; } /* placeholder */
.emoji1f36d { background-position: 0px -9200px; } /* placeholder */
.emoji1f36e { background-position: 0px -9200px; } /* placeholder */
.emoji1f36f { background-position: 0px -9200px; } /* placeholder */
.emoji1f364 { background-position: 0px -9200px; } /* placeholder */
.emoji1f374 { background-position: 0px -8700px; }
.emoji2615 { background-position: 0px -8720px; }
.emoji1f378 { background-position: 0px -8860px; }
.emoji1f37a { background-position: 0px -8760px; }
.emoji1f375 { background-position: 0px -8780px; }
.emoji1f376 { background-position: 0px -8800px; }
.emoji1f377 { background-position: 0px -8860px; }
.emoji1f37b { background-position: 0px -8840px; }
.emoji1f379 { background-position: 0px -8860px; }
.emoji2197 { background-position: 0px -8960px; }
.emoji2198 { background-position: 0px -8980px; }
.emoji2196 { background-position: 0px -8920px; }
.emoji2199 { background-position: 0px -8940px; }
.emoji2934 { background-position: 0px -8960px; }
.emoji2935 { background-position: 0px -8980px; }
.emoji2194 { background-position: 0px -9200px; } /* placeholder */
.emoji2195 { background-position: 0px -9200px; } /* placeholder */
.emoji2b06 { background-position: 0px -9000px; }
.emoji2b07 { background-position: 0px -9020px; }
.emoji27a1 { background-position: 0px -9040px; }
.emoji2b05 { background-position: 0px -11180px; }
.emoji25b6 { background-position: 0px -9080px; }
.emoji25c0 { background-position: 0px -9100px; }
.emoji23e9 { background-position: 0px -9120px; }
.emoji23ea { background-position: 0px -9140px; }
.emoji23eb { background-position: 0px -9200px; } /* placeholder */
.emoji23ec { background-position: 0px -9200px; } /* placeholder */
.emoji1f53a { background-position: 0px -9200px; } /* placeholder */
.emoji1f53b { background-position: 0px -9200px; } /* placeholder */
.emoji1f53c { background-position: 0px -9200px; } /* placeholder */
.emoji1f53d { background-position: 0px -9200px; } /* placeholder */
.emoji2b55 { background-position: 0px -9800px; }
.emoji274c { background-position: 0px -10340px; }
.emoji274e { background-position: 0px -10340px; }
.emoji2757 { background-position: 0px -9160px; }
.emoji2049 { background-position: 0px -9200px; } /* placeholder */
.emoji203c { background-position: 0px -9200px; } /* placeholder */
.emoji2753 { background-position: 0px -9180px; }
.emoji2754 { background-position: 0px -9200px; }
.emoji2755 { background-position: 0px -9220px; }
.emoji3030 { background-position: 0px -9200px; } /* placeholder */
.emoji27b0 { background-position: 0px -9200px; } /* placeholder */
.emoji27bf { background-position: 0px -9200px; } /* placeholder */
.emoji2764 { background-position: 0px -9240px; }
.emoji1f493 { background-position: 0px -9480px; }
.emoji1f494 { background-position: 0px -9280px; }
.emoji1f495 { background-position: 0px -9480px; }
.emoji1f496 { background-position: 0px -9480px; }
.emoji1f497 { background-position: 0px -9340px; }
.emoji1f498 { background-position: 0px -9360px; }
.emoji1f499 { background-position: 0px -9380px; }
.emoji1f49a { background-position: 0px -9400px; }
.emoji1f49b { background-position: 0px -9420px; }
.emoji1f49c { background-position: 0px -9440px; }
.emoji1f49d { background-position: 0px -9460px; }
.emoji1f49e { background-position: 0px -9480px; }
.emoji1f49f { background-position: 0px -9500px; }
.emoji2665 { background-position: 0px -9520px; }
.emoji2660 { background-position: 0px -9540px; }
.emoji2666 { background-position: 0px -9560px; }
.emoji2663 { background-position: 0px -9580px; }
.emoji1f6ac { background-position: 0px -9600px; }
.emoji1f6ad { background-position: 0px -9620px; }
.emoji267f { background-position: 0px -9640px; }
.emoji1f6a9 { background-position: 0px -9200px; } /* placeholder */
.emoji26a0 { background-position: 0px -9700px; }
.emoji26d4 { background-position: 0px -9720px; }
.emoji267b { background-position: 0px -9200px; } /* placeholder */
.emoji1f6b2 { background-position: 0px -6980px; }
.emoji1f6b6 { background-position: 0px -7080px; }
.emoji1f6b9 { background-position: 0px -9740px; }
.emoji1f6ba { background-position: 0px -9760px; }
.emoji1f6c0 { background-position: 0px -5220px; }
.emoji1f6bb { background-position: 0px -5240px; }
.emoji1f6bd { background-position: 0px -5260px; }
.emoji1f6be { background-position: 0px -5280px; }
.emoji1f6bc { background-position: 0px -9780px; }
.emoji1f6aa { background-position: 0px -9200px; } /* placeholder */
.emoji1f6ab { background-position: 0px -9200px; } /* placeholder */
.emoji2714 { background-position: 0px -9200px; } /* placeholder */
.emoji1f191 { background-position: 0px -9200px; } /* placeholder */
.emoji1f192 { background-position: 0px -10020px; }
.emoji1f193 { background-position: 0px -9200px; } /* placeholder */
.emoji1f194 { background-position: 0px -11020px; }
.emoji1f195 { background-position: 0px -9980px; }
.emoji1f196 { background-position: 0px -9200px; } /* placeholder */
.emoji1f197 { background-position: 0px -9880px; }
.emoji1f198 { background-position: 0px -9200px; } /* placeholder */
.emoji1f199 { background-position: 0px -10000px; }
.emoji1f19a { background-position: 0px -9960px; }
.emoji1f201 { background-position: 0px -10060px; }
.emoji1f202 { background-position: 0px -10080px; }
.emoji1f232 { background-position: 0px -9200px; } /* placeholder */
.emoji1f233 { background-position: 0px -10100px; }
.emoji1f234 { background-position: 0px -9200px; } /* placeholder */
.emoji1f235 { background-position: 0px -10120px; }
.emoji1f236 { background-position: 0px -10140px; }
.emoji1f21a { background-position: 0px -10160px; }
.emoji1f237 { background-position: 0px -10180px; }
.emoji1f238 { background-position: 0px -10200px; }
.emoji1f239 { background-position: 0px -10220px; }
.emoji1f22f { background-position: 0px -10240px; }
.emoji1f23a { background-position: 0px -10260px; }
.emoji3299 { background-position: 0px -10280px; }
.emoji3297 { background-position: 0px -10300px; }
.emoji1f250 { background-position: 0px -10320px; }
.emoji1f251 { background-position: 0px -9200px; } /* placeholder */
.emoji2795 { background-position: 0px -9200px; } /* placeholder */
.emoji2796 { background-position: 0px -9200px; } /* placeholder */
.emoji2716 { background-position: 0px -10340px; }
.emoji2797 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4a0 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4a1 { background-position: 0px -10360px; }
.emoji1f4a2 { background-position: 0px -10380px; }
.emoji1f4a3 { background-position: 0px -10400px; }
.emoji1f4a4 { background-position: 0px -10420px; }
.emoji1f4a5 { background-position: 0px -9200px; } /* placeholder */
.emoji1f4a6 { background-position: 0px -10460px; }
.emoji1f4a7 { background-position: 0px -10460px; }
.emoji1f4a8 { background-position: 0px -10480px; }
.emoji1f4a9 { background-position: 0px -5000px; }
.emoji1f4aa { background-position: 0px -10500px; }
.emoji1f4ab { background-position: 0px -10520px; }
.emoji1f4ac { background-position: 0px -9200px; } /* placeholder */
.emoji2728 { background-position: 0px -11000px; }
.emoji2734 { background-position: 0px -10560px; }
.emoji2733 { background-position: 0px -10580px; }
.emoji26aa { background-position: 0px -10640px; }
.emoji26ab { background-position: 0px -10640px; }
.emoji1f534 { background-position: 0px -10640px; }
.emoji1f535 { background-position: 0px -10900px; }
.emoji1f532 { background-position: 0px -10900px; }
.emoji1f533 { background-position: 0px -10980px; }
.emoji2b50 { background-position: 0px -10720px; }
.emoji2b1c { background-position: 0px -10980px; }
.emoji2b1b { background-position: 0px -10900px; }
.emoji25ab { background-position: 0px -10980px; }
.emoji25aa { background-position: 0px -10900px; }
.emoji25fd { background-position: 0px -10980px; }
.emoji25fe { background-position: 0px -10900px; }
.emoji25fb { background-position: 0px -10980px; }
.emoji25fc { background-position: 0px -10900px; }
.emoji1f536 { background-position: 0px -10980px; }
.emoji1f537 { background-position: 0px -10980px; }
.emoji1f538 { background-position: 0px -10980px; }
.emoji1f539 { background-position: 0px -10980px; }
.emoji2747 { background-position: 0px -11000px; }
.emoji1f4ae { background-position: 0px -9200px; } /* placeholder */
.emoji1f4af { background-position: 0px -9200px; } /* placeholder */
.emoji21a9 { background-position: 0px -9200px; } /* placeholder */
.emoji21aa { background-position: 0px -9200px; } /* placeholder */
.emoji1f503 { background-position: 0px -9200px; } /* placeholder */
.emoji1f50a { background-position: 0px -7880px; }
.emoji1f50b { background-position: 0px -9200px; } /* placeholder */
.emoji1f50c { background-position: 0px -9200px; } /* placeholder */
.emoji1f50d { background-position: 0px -11060px; }
.emoji1f50e { background-position: 0px -11060px; }
.emoji1f512 { background-position: 0px -11140px; }
.emoji1f513 { background-position: 0px -11100px; }
.emoji1f50f { background-position: 0px -11140px; }
.emoji1f510 { background-position: 0px -11140px; }
.emoji1f511 { background-position: 0px -11160px; }
.emoji1f514 { background-position: 0px -4980px; }
.emoji2611 { background-position: 0px -9200px; } /* placeholder */
.emoji1f518 { background-position: 0px -9200px; } /* placeholder */
.emoji1f516 { background-position: 0px -9200px; } /* placeholder */
.emoji1f517 { background-position: 0px -9200px; } /* placeholder */
.emoji1f519 { background-position: 0px -11180px; }
.emoji1f51a { background-position: 0px -9200px; } /* placeholder */
.emoji1f51b { background-position: 0px -9200px; } /* placeholder */
.emoji1f51c { background-position: 0px -9200px; } /* placeholder */
.emoji1f51d { background-position: 0px -10040px; }
.emoji2003 { background-position: 0px -9200px; } /* placeholder */
.emoji2002 { background-position: 0px -9200px; } /* placeholder */
.emoji2005 { background-position: 0px -9200px; } /* placeholder */
.emoji2705 { background-position: 0px -9200px; } /* placeholder */
.emoji270a { background-position: 0px -11220px; }
.emoji270b { background-position: 0px -11240px; }
.emoji270c { background-position: 0px -11260px; }
.emoji1f44a { background-position: 0px -11280px; }
.emoji1f44d { background-position: 0px -11300px; }
.emoji261d { background-position: 0px -11320px; }
.emoji1f446 { background-position: 0px -11340px; }
.emoji1f447 { background-position: 0px -11360px; }
.emoji1f448 { background-position: 0px -11380px; }
.emoji1f449 { background-position: 0px -11400px; }
.emoji1f44b { background-position: 0px -11420px; }
.emoji1f44f { background-position: 0px -11440px; }
.emoji1f44c { background-position: 0px -11460px; }
.emoji1f44e { background-position: 0px -11480px; }
.emoji1f450 { background-position: 0px -11500px; }


</style>

<h2>Full Emoji Catalog</h2>

<table cellspacing="0" cellpadding="0">
	<tr>
		<th colspan="2">Name</th>
		<th>Unified</th>
		<th>DoCoMo</th>
		<th>KDDI</th>
		<th>Softbank</th>
		<th>Google</th>
	</tr>
	<tbody>

	<tr>
		<td><span class="emoji emoji2600"></span></td>
		<td>black sun with rays</td>
		<td>U+2600</td>
		<td>U+E63E</td>
		<td>U+E488</td>
		<td>U+E04A</td>
		<td>U+FE000</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2601"></span></td>
		<td>cloud</td>
		<td>U+2601</td>
		<td>U+E63F</td>
		<td>U+E48D</td>
		<td>U+E049</td>
		<td>U+FE001</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2614"></span></td>
		<td>umbrella with rain drops</td>
		<td>U+2614</td>
		<td>U+E640</td>
		<td>U+E48C</td>
		<td>U+E04B</td>
		<td>U+FE002</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26c4"></span></td>
		<td>snowman without snow</td>
		<td>U+26C4</td>
		<td>U+E641</td>
		<td>U+E485</td>
		<td>U+E048</td>
		<td>U+FE003</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26a1"></span></td>
		<td>high voltage sign</td>
		<td>U+26A1</td>
		<td>U+E642</td>
		<td>U+E487</td>
		<td>U+E13D</td>
		<td>U+FE004</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f300"></span></td>
		<td>cyclone</td>
		<td>U+1F300</td>
		<td>U+E643</td>
		<td>U+E469</td>
		<td>U+E443</td>
		<td>U+FE005</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f301"></span></td>
		<td>foggy</td>
		<td>U+1F301</td>
		<td>U+E644</td>
		<td>U+E598</td>
		<td>-</td>
		<td>U+FE006</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f302"></span></td>
		<td>closed umbrella</td>
		<td>U+1F302</td>
		<td>U+E645</td>
		<td>U+EAE8</td>
		<td>U+E43C</td>
		<td>U+FE007</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f303"></span></td>
		<td>night with stars</td>
		<td>U+1F303</td>
		<td>U+E6B3</td>
		<td>U+EAF1</td>
		<td>U+E44B</td>
		<td>U+FE008</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f304"></span></td>
		<td>sunrise over mountains</td>
		<td>U+1F304</td>
		<td>U+E63E</td>
		<td>U+EAF4</td>
		<td>U+E04D</td>
		<td>U+FE009</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f305"></span></td>
		<td>sunrise</td>
		<td>U+1F305</td>
		<td>U+E63E</td>
		<td>U+EAF4</td>
		<td>U+E449</td>
		<td>U+FE00A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f306"></span></td>
		<td>cityscape at dusk</td>
		<td>U+1F306</td>
		<td>-</td>
		<td>U+E5DA</td>
		<td>U+E146</td>
		<td>U+FE00B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f307"></span></td>
		<td>sunset over buildings</td>
		<td>U+1F307</td>
		<td>U+E63E</td>
		<td>U+E5DA</td>
		<td>U+E44A</td>
		<td>U+FE00C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f308"></span></td>
		<td>rainbow</td>
		<td>U+1F308</td>
		<td>-</td>
		<td>U+EAF2</td>
		<td>U+E44C</td>
		<td>U+FE00D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2744"></span></td>
		<td>snowflake</td>
		<td>U+2744</td>
		<td>-</td>
		<td>U+E48A</td>
		<td>-</td>
		<td>U+FE00E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f309"></span></td>
		<td>bridge at night</td>
		<td>U+1F309</td>
		<td>U+E6B3</td>
		<td>U+E4BF</td>
		<td>U+E44B</td>
		<td>U+FE010</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f30a"></span></td>
		<td>water wave</td>
		<td>U+1F30A</td>
		<td>U+E73F</td>
		<td>U+EB7C</td>
		<td>U+E43E</td>
		<td>U+FE038</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f30b"></span></td>
		<td>volcano</td>
		<td>U+1F30B</td>
		<td>-</td>
		<td>U+EB53</td>
		<td>-</td>
		<td>U+FE03A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f30c"></span></td>
		<td>milky way</td>
		<td>U+1F30C</td>
		<td>U+E6B3</td>
		<td>U+EB5F</td>
		<td>U+E44B</td>
		<td>U+FE03B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f30f"></span></td>
		<td>earth globe asia-australia</td>
		<td>U+1F30F</td>
		<td>-</td>
		<td>U+E5B3</td>
		<td>-</td>
		<td>U+FE039</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f311"></span></td>
		<td>new moon symbol</td>
		<td>U+1F311</td>
		<td>U+E69C</td>
		<td>U+E5A8</td>
		<td>-</td>
		<td>U+FE011</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f314"></span></td>
		<td>waxing gibbous moon symbol</td>
		<td>U+1F314</td>
		<td>U+E69D</td>
		<td>U+E5A9</td>
		<td>U+E04C</td>
		<td>U+FE012</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f313"></span></td>
		<td>first quarter moon symbol</td>
		<td>U+1F313</td>
		<td>U+E69E</td>
		<td>U+E5AA</td>
		<td>U+E04C</td>
		<td>U+FE013</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f319"></span></td>
		<td>crescent moon</td>
		<td>U+1F319</td>
		<td>U+E69F</td>
		<td>U+E486</td>
		<td>U+E04C</td>
		<td>U+FE014</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f315"></span></td>
		<td>full moon symbol</td>
		<td>U+1F315</td>
		<td>U+E6A0</td>
		<td>-</td>
		<td>-</td>
		<td>U+FE015</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f31b"></span></td>
		<td>first quarter moon with face</td>
		<td>U+1F31B</td>
		<td>U+E69E</td>
		<td>U+E489</td>
		<td>U+E04C</td>
		<td>U+FE016</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f31f"></span></td>
		<td>glowing star</td>
		<td>U+1F31F</td>
		<td>-</td>
		<td>U+E48B</td>
		<td>U+E335</td>
		<td>U+FEB69</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f320"></span></td>
		<td>shooting star</td>
		<td>U+1F320</td>
		<td>-</td>
		<td>U+E468</td>
		<td>-</td>
		<td>U+FEB6A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f550"></span></td>
		<td>clock face one oclock</td>
		<td>U+1F550</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E024</td>
		<td>U+FE01E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f551"></span></td>
		<td>clock face two oclock</td>
		<td>U+1F551</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E025</td>
		<td>U+FE01F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f552"></span></td>
		<td>clock face three oclock</td>
		<td>U+1F552</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E026</td>
		<td>U+FE020</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f553"></span></td>
		<td>clock face four oclock</td>
		<td>U+1F553</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E027</td>
		<td>U+FE021</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f554"></span></td>
		<td>clock face five oclock</td>
		<td>U+1F554</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E028</td>
		<td>U+FE022</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f555"></span></td>
		<td>clock face six oclock</td>
		<td>U+1F555</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E029</td>
		<td>U+FE023</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f556"></span></td>
		<td>clock face seven oclock</td>
		<td>U+1F556</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E02A</td>
		<td>U+FE024</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f557"></span></td>
		<td>clock face eight oclock</td>
		<td>U+1F557</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E02B</td>
		<td>U+FE025</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f558"></span></td>
		<td>clock face nine oclock</td>
		<td>U+1F558</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E02C</td>
		<td>U+FE026</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f559"></span></td>
		<td>clock face ten oclock</td>
		<td>U+1F559</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E02D</td>
		<td>U+FE027</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f55a"></span></td>
		<td>clock face eleven oclock</td>
		<td>U+1F55A</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E02E</td>
		<td>U+FE028</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f55b"></span></td>
		<td>clock face twelve oclock</td>
		<td>U+1F55B</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E02F</td>
		<td>U+FE029</td>
	</tr>
	<tr>
		<td><span class="emoji emoji231a"></span></td>
		<td>watch</td>
		<td>U+231A</td>
		<td>U+E71F</td>
		<td>U+E57A</td>
		<td>-</td>
		<td>U+FE01D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji231b"></span></td>
		<td>hourglass</td>
		<td>U+231B</td>
		<td>U+E71C</td>
		<td>U+E57B</td>
		<td>-</td>
		<td>U+FE01C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji23f0"></span></td>
		<td>alarm clock</td>
		<td>U+23F0</td>
		<td>U+E6BA</td>
		<td>U+E594</td>
		<td>U+E02D</td>
		<td>U+FE02A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji23f3"></span></td>
		<td>hourglass with flowing sand</td>
		<td>U+23F3</td>
		<td>U+E71C</td>
		<td>U+E47C</td>
		<td>-</td>
		<td>U+FE01B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2648"></span></td>
		<td>aries</td>
		<td>U+2648</td>
		<td>U+E646</td>
		<td>U+E48F</td>
		<td>U+E23F</td>
		<td>U+FE02B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2649"></span></td>
		<td>taurus</td>
		<td>U+2649</td>
		<td>U+E647</td>
		<td>U+E490</td>
		<td>U+E240</td>
		<td>U+FE02C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji264a"></span></td>
		<td>gemini</td>
		<td>U+264A</td>
		<td>U+E648</td>
		<td>U+E491</td>
		<td>U+E241</td>
		<td>U+FE02D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji264b"></span></td>
		<td>cancer</td>
		<td>U+264B</td>
		<td>U+E649</td>
		<td>U+E492</td>
		<td>U+E242</td>
		<td>U+FE02E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji264c"></span></td>
		<td>leo</td>
		<td>U+264C</td>
		<td>U+E64A</td>
		<td>U+E493</td>
		<td>U+E243</td>
		<td>U+FE02F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji264d"></span></td>
		<td>virgo</td>
		<td>U+264D</td>
		<td>U+E64B</td>
		<td>U+E494</td>
		<td>U+E244</td>
		<td>U+FE030</td>
	</tr>
	<tr>
		<td><span class="emoji emoji264e"></span></td>
		<td>libra</td>
		<td>U+264E</td>
		<td>U+E64C</td>
		<td>U+E495</td>
		<td>U+E245</td>
		<td>U+FE031</td>
	</tr>
	<tr>
		<td><span class="emoji emoji264f"></span></td>
		<td>scorpius</td>
		<td>U+264F</td>
		<td>U+E64D</td>
		<td>U+E496</td>
		<td>U+E246</td>
		<td>U+FE032</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2650"></span></td>
		<td>sagittarius</td>
		<td>U+2650</td>
		<td>U+E64E</td>
		<td>U+E497</td>
		<td>U+E247</td>
		<td>U+FE033</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2651"></span></td>
		<td>capricorn</td>
		<td>U+2651</td>
		<td>U+E64F</td>
		<td>U+E498</td>
		<td>U+E248</td>
		<td>U+FE034</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2652"></span></td>
		<td>aquarius</td>
		<td>U+2652</td>
		<td>U+E650</td>
		<td>U+E499</td>
		<td>U+E249</td>
		<td>U+FE035</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2653"></span></td>
		<td>pisces</td>
		<td>U+2653</td>
		<td>U+E651</td>
		<td>U+E49A</td>
		<td>U+E24A</td>
		<td>U+FE036</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26ce"></span></td>
		<td>ophiuchus</td>
		<td>U+26CE</td>
		<td>-</td>
		<td>U+E49B</td>
		<td>U+E24B</td>
		<td>U+FE037</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f340"></span></td>
		<td>four leaf clover</td>
		<td>U+1F340</td>
		<td>U+E741</td>
		<td>U+E513</td>
		<td>U+E110</td>
		<td>U+FE03C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f337"></span></td>
		<td>tulip</td>
		<td>U+1F337</td>
		<td>U+E743</td>
		<td>U+E4E4</td>
		<td>U+E304</td>
		<td>U+FE03D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f331"></span></td>
		<td>seedling</td>
		<td>U+1F331</td>
		<td>U+E746</td>
		<td>U+EB7D</td>
		<td>U+E110</td>
		<td>U+FE03E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f341"></span></td>
		<td>maple leaf</td>
		<td>U+1F341</td>
		<td>U+E747</td>
		<td>U+E4CE</td>
		<td>U+E118</td>
		<td>U+FE03F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f338"></span></td>
		<td>cherry blossom</td>
		<td>U+1F338</td>
		<td>U+E748</td>
		<td>U+E4CA</td>
		<td>U+E030</td>
		<td>U+FE040</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f339"></span></td>
		<td>rose</td>
		<td>U+1F339</td>
		<td>-</td>
		<td>U+E5BA</td>
		<td>U+E032</td>
		<td>U+FE041</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f342"></span></td>
		<td>fallen leaf</td>
		<td>U+1F342</td>
		<td>U+E747</td>
		<td>U+E5CD</td>
		<td>U+E119</td>
		<td>U+FE042</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f343"></span></td>
		<td>leaf fluttering in wind</td>
		<td>U+1F343</td>
		<td>-</td>
		<td>U+E5CD</td>
		<td>U+E447</td>
		<td>U+FE043</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f33a"></span></td>
		<td>hibiscus</td>
		<td>U+1F33A</td>
		<td>-</td>
		<td>U+EA94</td>
		<td>U+E303</td>
		<td>U+FE045</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f33b"></span></td>
		<td>sunflower</td>
		<td>U+1F33B</td>
		<td>-</td>
		<td>U+E4E3</td>
		<td>U+E305</td>
		<td>U+FE046</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f334"></span></td>
		<td>palm tree</td>
		<td>U+1F334</td>
		<td>-</td>
		<td>U+E4E2</td>
		<td>U+E307</td>
		<td>U+FE047</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f335"></span></td>
		<td>cactus</td>
		<td>U+1F335</td>
		<td>-</td>
		<td>U+EA96</td>
		<td>U+E308</td>
		<td>U+FE048</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f33e"></span></td>
		<td>ear of rice</td>
		<td>U+1F33E</td>
		<td>-</td>
		<td>-</td>
		<td>U+E444</td>
		<td>U+FE049</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f33d"></span></td>
		<td>ear of maize</td>
		<td>U+1F33D</td>
		<td>-</td>
		<td>U+EB36</td>
		<td>-</td>
		<td>U+FE04A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f344"></span></td>
		<td>mushroom</td>
		<td>U+1F344</td>
		<td>-</td>
		<td>U+EB37</td>
		<td>-</td>
		<td>U+FE04B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f330"></span></td>
		<td>chestnut</td>
		<td>U+1F330</td>
		<td>-</td>
		<td>U+EB38</td>
		<td>-</td>
		<td>U+FE04C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f33c"></span></td>
		<td>blossom</td>
		<td>U+1F33C</td>
		<td>-</td>
		<td>U+EB49</td>
		<td>U+E305</td>
		<td>U+FE04D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f33f"></span></td>
		<td>herb</td>
		<td>U+1F33F</td>
		<td>U+E741</td>
		<td>U+EB82</td>
		<td>U+E110</td>
		<td>U+FE04E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f352"></span></td>
		<td>cherries</td>
		<td>U+1F352</td>
		<td>U+E742</td>
		<td>U+E4D2</td>
		<td>-</td>
		<td>U+FE04F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f34c"></span></td>
		<td>banana</td>
		<td>U+1F34C</td>
		<td>U+E744</td>
		<td>U+EB35</td>
		<td>-</td>
		<td>U+FE050</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f34e"></span></td>
		<td>red apple</td>
		<td>U+1F34E</td>
		<td>U+E745</td>
		<td>U+EAB9</td>
		<td>U+E345</td>
		<td>U+FE051</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f34a"></span></td>
		<td>tangerine</td>
		<td>U+1F34A</td>
		<td>-</td>
		<td>U+EABA</td>
		<td>U+E346</td>
		<td>U+FE052</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f353"></span></td>
		<td>strawberry</td>
		<td>U+1F353</td>
		<td>-</td>
		<td>U+E4D4</td>
		<td>U+E347</td>
		<td>U+FE053</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f349"></span></td>
		<td>watermelon</td>
		<td>U+1F349</td>
		<td>-</td>
		<td>U+E4CD</td>
		<td>U+E348</td>
		<td>U+FE054</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f345"></span></td>
		<td>tomato</td>
		<td>U+1F345</td>
		<td>-</td>
		<td>U+EABB</td>
		<td>U+E349</td>
		<td>U+FE055</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f346"></span></td>
		<td>aubergine</td>
		<td>U+1F346</td>
		<td>-</td>
		<td>U+EABC</td>
		<td>U+E34A</td>
		<td>U+FE056</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f348"></span></td>
		<td>melon</td>
		<td>U+1F348</td>
		<td>-</td>
		<td>U+EB32</td>
		<td>-</td>
		<td>U+FE057</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f34d"></span></td>
		<td>pineapple</td>
		<td>U+1F34D</td>
		<td>-</td>
		<td>U+EB33</td>
		<td>-</td>
		<td>U+FE058</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f347"></span></td>
		<td>grapes</td>
		<td>U+1F347</td>
		<td>-</td>
		<td>U+EB34</td>
		<td>-</td>
		<td>U+FE059</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f351"></span></td>
		<td>peach</td>
		<td>U+1F351</td>
		<td>-</td>
		<td>U+EB39</td>
		<td>-</td>
		<td>U+FE05A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f34f"></span></td>
		<td>green apple</td>
		<td>U+1F34F</td>
		<td>U+E745</td>
		<td>U+EB5A</td>
		<td>U+E345</td>
		<td>U+FE05B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f440"></span></td>
		<td>eyes</td>
		<td>U+1F440</td>
		<td>U+E691</td>
		<td>U+E5A4</td>
		<td>U+E419</td>
		<td>U+FE190</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f442"></span></td>
		<td>ear</td>
		<td>U+1F442</td>
		<td>U+E692</td>
		<td>U+E5A5</td>
		<td>U+E41B</td>
		<td>U+FE191</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f443"></span></td>
		<td>nose</td>
		<td>U+1F443</td>
		<td>-</td>
		<td>U+EAD0</td>
		<td>U+E41A</td>
		<td>U+FE192</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f444"></span></td>
		<td>mouth</td>
		<td>U+1F444</td>
		<td>U+E6F9</td>
		<td>U+EAD1</td>
		<td>U+E41C</td>
		<td>U+FE193</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f445"></span></td>
		<td>tongue</td>
		<td>U+1F445</td>
		<td>U+E728</td>
		<td>U+EB47</td>
		<td>U+E409</td>
		<td>U+FE194</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f484"></span></td>
		<td>lipstick</td>
		<td>U+1F484</td>
		<td>U+E710</td>
		<td>U+E509</td>
		<td>U+E31C</td>
		<td>U+FE195</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f485"></span></td>
		<td>nail polish</td>
		<td>U+1F485</td>
		<td>-</td>
		<td>U+EAA0</td>
		<td>U+E31D</td>
		<td>U+FE196</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f486"></span></td>
		<td>face massage</td>
		<td>U+1F486</td>
		<td>-</td>
		<td>U+E50B</td>
		<td>U+E31E</td>
		<td>U+FE197</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f487"></span></td>
		<td>haircut</td>
		<td>U+1F487</td>
		<td>U+E675</td>
		<td>U+EAA1</td>
		<td>U+E31F</td>
		<td>U+FE198</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f488"></span></td>
		<td>barber pole</td>
		<td>U+1F488</td>
		<td>-</td>
		<td>U+EAA2</td>
		<td>U+E320</td>
		<td>U+FE199</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f464"></span></td>
		<td>bust in silhouette</td>
		<td>U+1F464</td>
		<td>U+E6B1</td>
		<td>-</td>
		<td>-</td>
		<td>U+FE19A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f466"></span></td>
		<td>boy</td>
		<td>U+1F466</td>
		<td>U+E6F0</td>
		<td>U+E4FC</td>
		<td>U+E001</td>
		<td>U+FE19B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f467"></span></td>
		<td>girl</td>
		<td>U+1F467</td>
		<td>U+E6F0</td>
		<td>U+E4FA</td>
		<td>U+E002</td>
		<td>U+FE19C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f468"></span></td>
		<td>man</td>
		<td>U+1F468</td>
		<td>U+E6F0</td>
		<td>U+E4FC</td>
		<td>U+E004</td>
		<td>U+FE19D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f469"></span></td>
		<td>woman</td>
		<td>U+1F469</td>
		<td>U+E6F0</td>
		<td>U+E4FA</td>
		<td>U+E005</td>
		<td>U+FE19E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f46a"></span></td>
		<td>family</td>
		<td>U+1F46A</td>
		<td>-</td>
		<td>U+E501</td>
		<td>-</td>
		<td>U+FE19F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f46b"></span></td>
		<td>man and woman holding hands</td>
		<td>U+1F46B</td>
		<td>-</td>
		<td>-</td>
		<td>U+E428</td>
		<td>U+FE1A0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f46e"></span></td>
		<td>police officer</td>
		<td>U+1F46E</td>
		<td>-</td>
		<td>U+E5DD</td>
		<td>U+E152</td>
		<td>U+FE1A1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f46f"></span></td>
		<td>woman with bunny ears</td>
		<td>U+1F46F</td>
		<td>-</td>
		<td>U+EADB</td>
		<td>U+E429</td>
		<td>U+FE1A2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f470"></span></td>
		<td>bride with veil</td>
		<td>U+1F470</td>
		<td>-</td>
		<td>U+EAE9</td>
		<td>-</td>
		<td>U+FE1A3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f471"></span></td>
		<td>person with blond hair</td>
		<td>U+1F471</td>
		<td>-</td>
		<td>U+EB13</td>
		<td>U+E515</td>
		<td>U+FE1A4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f472"></span></td>
		<td>man with gua pi mao</td>
		<td>U+1F472</td>
		<td>-</td>
		<td>U+EB14</td>
		<td>U+E516</td>
		<td>U+FE1A5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f473"></span></td>
		<td>man with turban</td>
		<td>U+1F473</td>
		<td>-</td>
		<td>U+EB15</td>
		<td>U+E517</td>
		<td>U+FE1A6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f474"></span></td>
		<td>older man</td>
		<td>U+1F474</td>
		<td>-</td>
		<td>U+EB16</td>
		<td>U+E518</td>
		<td>U+FE1A7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f475"></span></td>
		<td>older woman</td>
		<td>U+1F475</td>
		<td>-</td>
		<td>U+EB17</td>
		<td>U+E519</td>
		<td>U+FE1A8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f476"></span></td>
		<td>baby</td>
		<td>U+1F476</td>
		<td>-</td>
		<td>U+EB18</td>
		<td>U+E51A</td>
		<td>U+FE1A9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f477"></span></td>
		<td>construction worker</td>
		<td>U+1F477</td>
		<td>-</td>
		<td>U+EB19</td>
		<td>U+E51B</td>
		<td>U+FE1AA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f478"></span></td>
		<td>princess</td>
		<td>U+1F478</td>
		<td>-</td>
		<td>U+EB1A</td>
		<td>U+E51C</td>
		<td>U+FE1AB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f479"></span></td>
		<td>japanese ogre</td>
		<td>U+1F479</td>
		<td>-</td>
		<td>U+EB44</td>
		<td>-</td>
		<td>U+FE1AC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f47a"></span></td>
		<td>japanese goblin</td>
		<td>U+1F47A</td>
		<td>-</td>
		<td>U+EB45</td>
		<td>-</td>
		<td>U+FE1AD</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f47b"></span></td>
		<td>ghost</td>
		<td>U+1F47B</td>
		<td>-</td>
		<td>U+E4CB</td>
		<td>U+E11B</td>
		<td>U+FE1AE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f47c"></span></td>
		<td>baby angel</td>
		<td>U+1F47C</td>
		<td>-</td>
		<td>U+E5BF</td>
		<td>U+E04E</td>
		<td>U+FE1AF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f47d"></span></td>
		<td>extraterrestrial alien</td>
		<td>U+1F47D</td>
		<td>-</td>
		<td>U+E50E</td>
		<td>U+E10C</td>
		<td>U+FE1B0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f47e"></span></td>
		<td>alien monster</td>
		<td>U+1F47E</td>
		<td>-</td>
		<td>U+E4EC</td>
		<td>U+E12B</td>
		<td>U+FE1B1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f47f"></span></td>
		<td>imp</td>
		<td>U+1F47F</td>
		<td>-</td>
		<td>U+E4EF</td>
		<td>U+E11A</td>
		<td>U+FE1B2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f480"></span></td>
		<td>skull</td>
		<td>U+1F480</td>
		<td>-</td>
		<td>U+E4F8</td>
		<td>U+E11C</td>
		<td>U+FE1B3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f481"></span></td>
		<td>information desk person</td>
		<td>U+1F481</td>
		<td>-</td>
		<td>-</td>
		<td>U+E253</td>
		<td>U+FE1B4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f482"></span></td>
		<td>guardsman</td>
		<td>U+1F482</td>
		<td>-</td>
		<td>-</td>
		<td>U+E51E</td>
		<td>U+FE1B5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f483"></span></td>
		<td>dancer</td>
		<td>U+1F483</td>
		<td>-</td>
		<td>U+EB1C</td>
		<td>U+E51F</td>
		<td>U+FE1B6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f40c"></span></td>
		<td>snail</td>
		<td>U+1F40C</td>
		<td>U+E74E</td>
		<td>U+EB7E</td>
		<td>-</td>
		<td>U+FE1B9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f40d"></span></td>
		<td>snake</td>
		<td>U+1F40D</td>
		<td>-</td>
		<td>U+EB22</td>
		<td>U+E52D</td>
		<td>U+FE1D3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f40e"></span></td>
		<td>horse</td>
		<td>U+1F40E</td>
		<td>U+E754</td>
		<td>U+E4D8</td>
		<td>U+E134</td>
		<td>U+FE7DC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f414"></span></td>
		<td>chicken</td>
		<td>U+1F414</td>
		<td>-</td>
		<td>U+EB23</td>
		<td>U+E52E</td>
		<td>U+FE1D4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f417"></span></td>
		<td>boar</td>
		<td>U+1F417</td>
		<td>-</td>
		<td>U+EB24</td>
		<td>U+E52F</td>
		<td>U+FE1D5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f42b"></span></td>
		<td>bactrian camel</td>
		<td>U+1F42B</td>
		<td>-</td>
		<td>U+EB25</td>
		<td>U+E530</td>
		<td>U+FE1D6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f418"></span></td>
		<td>elephant</td>
		<td>U+1F418</td>
		<td>-</td>
		<td>U+EB1F</td>
		<td>U+E526</td>
		<td>U+FE1CC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f428"></span></td>
		<td>koala</td>
		<td>U+1F428</td>
		<td>-</td>
		<td>U+EB20</td>
		<td>U+E527</td>
		<td>U+FE1CD</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f412"></span></td>
		<td>monkey</td>
		<td>U+1F412</td>
		<td>-</td>
		<td>U+E4D9</td>
		<td>U+E528</td>
		<td>U+FE1CE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f411"></span></td>
		<td>sheep</td>
		<td>U+1F411</td>
		<td>-</td>
		<td>U+E48F</td>
		<td>U+E529</td>
		<td>U+FE1CF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f419"></span></td>
		<td>octopus</td>
		<td>U+1F419</td>
		<td>-</td>
		<td>U+E5C7</td>
		<td>U+E10A</td>
		<td>U+FE1C5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f41a"></span></td>
		<td>spiral shell</td>
		<td>U+1F41A</td>
		<td>-</td>
		<td>U+EAEC</td>
		<td>U+E441</td>
		<td>U+FE1C6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f41b"></span></td>
		<td>bug</td>
		<td>U+1F41B</td>
		<td>-</td>
		<td>U+EB1E</td>
		<td>U+E525</td>
		<td>U+FE1CB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f41c"></span></td>
		<td>ant</td>
		<td>U+1F41C</td>
		<td>-</td>
		<td>U+E4DD</td>
		<td>-</td>
		<td>U+FE1DA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f41d"></span></td>
		<td>honeybee</td>
		<td>U+1F41D</td>
		<td>-</td>
		<td>U+EB57</td>
		<td>-</td>
		<td>U+FE1E1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f41e"></span></td>
		<td>lady beetle</td>
		<td>U+1F41E</td>
		<td>-</td>
		<td>U+EB58</td>
		<td>-</td>
		<td>U+FE1E2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f420"></span></td>
		<td>tropical fish</td>
		<td>U+1F420</td>
		<td>U+E751</td>
		<td>U+EB1D</td>
		<td>U+E522</td>
		<td>U+FE1C9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f421"></span></td>
		<td>blowfish</td>
		<td>U+1F421</td>
		<td>U+E751</td>
		<td>U+E4D3</td>
		<td>U+E019</td>
		<td>U+FE1D9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f422"></span></td>
		<td>turtle</td>
		<td>U+1F422</td>
		<td>-</td>
		<td>U+E5D4</td>
		<td>-</td>
		<td>U+FE1DC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f424"></span></td>
		<td>baby chick</td>
		<td>U+1F424</td>
		<td>U+E74F</td>
		<td>U+E4E0</td>
		<td>U+E523</td>
		<td>U+FE1BA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f425"></span></td>
		<td>front-facing baby chick</td>
		<td>U+1F425</td>
		<td>U+E74F</td>
		<td>U+EB76</td>
		<td>U+E523</td>
		<td>U+FE1BB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f426"></span></td>
		<td>bird</td>
		<td>U+1F426</td>
		<td>U+E74F</td>
		<td>U+E4E0</td>
		<td>U+E521</td>
		<td>U+FE1C8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f423"></span></td>
		<td>hatching chick</td>
		<td>U+1F423</td>
		<td>U+E74F</td>
		<td>U+E5DB</td>
		<td>U+E523</td>
		<td>U+FE1DD</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f427"></span></td>
		<td>penguin</td>
		<td>U+1F427</td>
		<td>U+E750</td>
		<td>U+E4DC</td>
		<td>U+E055</td>
		<td>U+FE1BC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f429"></span></td>
		<td>poodle</td>
		<td>U+1F429</td>
		<td>U+E6A1</td>
		<td>U+E4DF</td>
		<td>U+E052</td>
		<td>U+FE1D8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f41f"></span></td>
		<td>fish</td>
		<td>U+1F41F</td>
		<td>U+E751</td>
		<td>U+E49A</td>
		<td>U+E019</td>
		<td>U+FE1BD</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f42c"></span></td>
		<td>dolphin</td>
		<td>U+1F42C</td>
		<td>-</td>
		<td>U+EB1B</td>
		<td>U+E520</td>
		<td>U+FE1C7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f42d"></span></td>
		<td>mouse face</td>
		<td>U+1F42D</td>
		<td>-</td>
		<td>U+E5C2</td>
		<td>U+E053</td>
		<td>U+FE1C2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f42f"></span></td>
		<td>tiger face</td>
		<td>U+1F42F</td>
		<td>-</td>
		<td>U+E5C0</td>
		<td>U+E050</td>
		<td>U+FE1C0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f431"></span></td>
		<td>cat face</td>
		<td>U+1F431</td>
		<td>U+E6A2</td>
		<td>U+E4DB</td>
		<td>U+E04F</td>
		<td>U+FE1B8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f433"></span></td>
		<td>spouting whale</td>
		<td>U+1F433</td>
		<td>-</td>
		<td>U+E470</td>
		<td>U+E054</td>
		<td>U+FE1C3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f434"></span></td>
		<td>horse face</td>
		<td>U+1F434</td>
		<td>U+E754</td>
		<td>U+E4D8</td>
		<td>U+E01A</td>
		<td>U+FE1BE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f435"></span></td>
		<td>monkey face</td>
		<td>U+1F435</td>
		<td>-</td>
		<td>U+E4D9</td>
		<td>U+E109</td>
		<td>U+FE1C4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f436"></span></td>
		<td>dog face</td>
		<td>U+1F436</td>
		<td>U+E6A1</td>
		<td>U+E4E1</td>
		<td>U+E052</td>
		<td>U+FE1B7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f437"></span></td>
		<td>pig face</td>
		<td>U+1F437</td>
		<td>U+E755</td>
		<td>U+E4DE</td>
		<td>U+E10B</td>
		<td>U+FE1BF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f43b"></span></td>
		<td>bear face</td>
		<td>U+1F43B</td>
		<td>-</td>
		<td>U+E5C1</td>
		<td>U+E051</td>
		<td>U+FE1C1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f439"></span></td>
		<td>hamster face</td>
		<td>U+1F439</td>
		<td>-</td>
		<td>-</td>
		<td>U+E524</td>
		<td>U+FE1CA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f43a"></span></td>
		<td>wolf face</td>
		<td>U+1F43A</td>
		<td>U+E6A1</td>
		<td>U+E4E1</td>
		<td>U+E52A</td>
		<td>U+FE1D0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f42e"></span></td>
		<td>cow face</td>
		<td>U+1F42E</td>
		<td>-</td>
		<td>U+EB21</td>
		<td>U+E52B</td>
		<td>U+FE1D1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f430"></span></td>
		<td>rabbit face</td>
		<td>U+1F430</td>
		<td>-</td>
		<td>U+E4D7</td>
		<td>U+E52C</td>
		<td>U+FE1D2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f438"></span></td>
		<td>frog face</td>
		<td>U+1F438</td>
		<td>-</td>
		<td>U+E4DA</td>
		<td>U+E531</td>
		<td>U+FE1D7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f43e"></span></td>
		<td>paw prints</td>
		<td>U+1F43E</td>
		<td>U+E698</td>
		<td>U+E4EE</td>
		<td>U+E536</td>
		<td>U+FE1DB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f432"></span></td>
		<td>dragon face</td>
		<td>U+1F432</td>
		<td>-</td>
		<td>U+EB3F</td>
		<td>-</td>
		<td>U+FE1DE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f43c"></span></td>
		<td>panda face</td>
		<td>U+1F43C</td>
		<td>-</td>
		<td>U+EB46</td>
		<td>-</td>
		<td>U+FE1DF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f43d"></span></td>
		<td>pig nose</td>
		<td>U+1F43D</td>
		<td>U+E755</td>
		<td>U+EB48</td>
		<td>U+E10B</td>
		<td>U+FE1E0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f620"></span></td>
		<td>angry face</td>
		<td>U+1F620</td>
		<td>U+E6F1</td>
		<td>U+E472</td>
		<td>U+E059</td>
		<td>U+FE320</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f629"></span></td>
		<td>weary face</td>
		<td>U+1F629</td>
		<td>U+E6F3</td>
		<td>U+EB67</td>
		<td>U+E403</td>
		<td>U+FE321</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f632"></span></td>
		<td>astonished face</td>
		<td>U+1F632</td>
		<td>U+E6F4</td>
		<td>U+EACA</td>
		<td>U+E410</td>
		<td>U+FE322</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f61e"></span></td>
		<td>disappointed face</td>
		<td>U+1F61E</td>
		<td>U+E6F2</td>
		<td>U+EAC0</td>
		<td>U+E058</td>
		<td>U+FE323</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f635"></span></td>
		<td>dizzy face</td>
		<td>U+1F635</td>
		<td>U+E6F4</td>
		<td>U+E5AE</td>
		<td>U+E406</td>
		<td>U+FE324</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f630"></span></td>
		<td>face with open mouth and cold sweat</td>
		<td>U+1F630</td>
		<td>U+E723</td>
		<td>U+EACB</td>
		<td>U+E40F</td>
		<td>U+FE325</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f612"></span></td>
		<td>unamused face</td>
		<td>U+1F612</td>
		<td>U+E725</td>
		<td>U+EAC9</td>
		<td>U+E40E</td>
		<td>U+FE326</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f60d"></span></td>
		<td>smiling face with heart-shaped eyes</td>
		<td>U+1F60D</td>
		<td>U+E726</td>
		<td>U+E5C4</td>
		<td>U+E106</td>
		<td>U+FE327</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f624"></span></td>
		<td>face with look of triumph</td>
		<td>U+1F624</td>
		<td>U+E753</td>
		<td>U+EAC1</td>
		<td>U+E404</td>
		<td>U+FE328</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f61c"></span></td>
		<td>face with stuck-out tongue and winking eye</td>
		<td>U+1F61C</td>
		<td>U+E728</td>
		<td>U+E4E7</td>
		<td>U+E105</td>
		<td>U+FE329</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f61d"></span></td>
		<td>face with stuck-out tongue and tightly-closed eyes</td>
		<td>U+1F61D</td>
		<td>U+E728</td>
		<td>U+E4E7</td>
		<td>U+E409</td>
		<td>U+FE32A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f60b"></span></td>
		<td>face savouring delicious food</td>
		<td>U+1F60B</td>
		<td>U+E752</td>
		<td>U+EACD</td>
		<td>U+E056</td>
		<td>U+FE32B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f618"></span></td>
		<td>face throwing a kiss</td>
		<td>U+1F618</td>
		<td>U+E726</td>
		<td>U+EACF</td>
		<td>U+E418</td>
		<td>U+FE32C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f61a"></span></td>
		<td>kissing face with closed eyes</td>
		<td>U+1F61A</td>
		<td>U+E726</td>
		<td>U+EACE</td>
		<td>U+E417</td>
		<td>U+FE32D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f637"></span></td>
		<td>face with medical mask</td>
		<td>U+1F637</td>
		<td>-</td>
		<td>U+EAC7</td>
		<td>U+E40C</td>
		<td>U+FE32E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f633"></span></td>
		<td>flushed face</td>
		<td>U+1F633</td>
		<td>U+E72A</td>
		<td>U+EAC8</td>
		<td>U+E40D</td>
		<td>U+FE32F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f603"></span></td>
		<td>smiling face with open mouth</td>
		<td>U+1F603</td>
		<td>U+E6F0</td>
		<td>U+E471</td>
		<td>U+E057</td>
		<td>U+FE330</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f606"></span></td>
		<td>smiling face with open mouth and tightly-closed eyes</td>
		<td>U+1F606</td>
		<td>U+E72A</td>
		<td>U+EAC5</td>
		<td>U+E40A</td>
		<td>U+FE332</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f601"></span></td>
		<td>grinning face with smiling eyes</td>
		<td>U+1F601</td>
		<td>U+E753</td>
		<td>U+EB80</td>
		<td>U+E404</td>
		<td>U+FE333</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f602"></span></td>
		<td>face with tears of joy</td>
		<td>U+1F602</td>
		<td>U+E72A</td>
		<td>U+EB64</td>
		<td>U+E412</td>
		<td>U+FE334</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f60a"></span></td>
		<td>smiling face with smiling eyes</td>
		<td>U+1F60A</td>
		<td>U+E6F0</td>
		<td>U+EACD</td>
		<td>U+E056</td>
		<td>U+FE335</td>
	</tr>
	<tr>
		<td><span class="emoji emoji263a"></span></td>
		<td>white smiling face</td>
		<td>U+263A</td>
		<td>U+E6F0</td>
		<td>U+E4FB</td>
		<td>U+E414</td>
		<td>U+FE336</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f604"></span></td>
		<td>smiling face with open mouth and smiling eyes</td>
		<td>U+1F604</td>
		<td>U+E6F0</td>
		<td>U+E471</td>
		<td>U+E415</td>
		<td>U+FE338</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f622"></span></td>
		<td>crying face</td>
		<td>U+1F622</td>
		<td>U+E72E</td>
		<td>U+EB69</td>
		<td>U+E413</td>
		<td>U+FE339</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f62d"></span></td>
		<td>loudly crying face</td>
		<td>U+1F62D</td>
		<td>U+E72D</td>
		<td>U+E473</td>
		<td>U+E411</td>
		<td>U+FE33A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f628"></span></td>
		<td>fearful face</td>
		<td>U+1F628</td>
		<td>U+E757</td>
		<td>U+EAC6</td>
		<td>U+E40B</td>
		<td>U+FE33B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f623"></span></td>
		<td>persevering face</td>
		<td>U+1F623</td>
		<td>U+E72B</td>
		<td>U+EAC2</td>
		<td>U+E406</td>
		<td>U+FE33C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f621"></span></td>
		<td>pouting face</td>
		<td>U+1F621</td>
		<td>U+E724</td>
		<td>U+EB5D</td>
		<td>U+E416</td>
		<td>U+FE33D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f60c"></span></td>
		<td>relieved face</td>
		<td>U+1F60C</td>
		<td>U+E721</td>
		<td>U+EAC5</td>
		<td>U+E40A</td>
		<td>U+FE33E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f616"></span></td>
		<td>confounded face</td>
		<td>U+1F616</td>
		<td>U+E6F3</td>
		<td>U+EAC3</td>
		<td>U+E407</td>
		<td>U+FE33F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f614"></span></td>
		<td>pensive face</td>
		<td>U+1F614</td>
		<td>U+E720</td>
		<td>U+EAC0</td>
		<td>U+E403</td>
		<td>U+FE340</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f631"></span></td>
		<td>face screaming in fear</td>
		<td>U+1F631</td>
		<td>U+E757</td>
		<td>U+E5C5</td>
		<td>U+E107</td>
		<td>U+FE341</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f62a"></span></td>
		<td>sleepy face</td>
		<td>U+1F62A</td>
		<td>U+E701</td>
		<td>U+EAC4</td>
		<td>U+E408</td>
		<td>U+FE342</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f60f"></span></td>
		<td>smirking face</td>
		<td>U+1F60F</td>
		<td>U+E72C</td>
		<td>U+EABF</td>
		<td>U+E402</td>
		<td>U+FE343</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f613"></span></td>
		<td>face with cold sweat</td>
		<td>U+1F613</td>
		<td>U+E723</td>
		<td>U+E5C6</td>
		<td>U+E108</td>
		<td>U+FE344</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f625"></span></td>
		<td>disappointed but relieved face</td>
		<td>U+1F625</td>
		<td>U+E723</td>
		<td>U+E5C6</td>
		<td>U+E401</td>
		<td>U+FE345</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f62b"></span></td>
		<td>tired face</td>
		<td>U+1F62B</td>
		<td>U+E72B</td>
		<td>U+E474</td>
		<td>U+E406</td>
		<td>U+FE346</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f609"></span></td>
		<td>winking face</td>
		<td>U+1F609</td>
		<td>U+E729</td>
		<td>U+E5C3</td>
		<td>U+E405</td>
		<td>U+FE347</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f63a"></span></td>
		<td>smiling cat face with open mouth</td>
		<td>U+1F63A</td>
		<td>U+E6F0</td>
		<td>U+EB61</td>
		<td>U+E057</td>
		<td>U+FE348</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f638"></span></td>
		<td>grinning cat face with smiling eyes</td>
		<td>U+1F638</td>
		<td>U+E753</td>
		<td>U+EB7F</td>
		<td>U+E404</td>
		<td>U+FE349</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f639"></span></td>
		<td>cat face with tears of joy</td>
		<td>U+1F639</td>
		<td>U+E72A</td>
		<td>U+EB63</td>
		<td>U+E412</td>
		<td>U+FE34A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f63d"></span></td>
		<td>kissing cat face with closed eyes</td>
		<td>U+1F63D</td>
		<td>U+E726</td>
		<td>U+EB60</td>
		<td>U+E418</td>
		<td>U+FE34B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f63b"></span></td>
		<td>smiling cat face with heart-shaped eyes</td>
		<td>U+1F63B</td>
		<td>U+E726</td>
		<td>U+EB65</td>
		<td>U+E106</td>
		<td>U+FE34C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f63f"></span></td>
		<td>crying cat face</td>
		<td>U+1F63F</td>
		<td>U+E72E</td>
		<td>U+EB68</td>
		<td>U+E413</td>
		<td>U+FE34D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f63e"></span></td>
		<td>pouting cat face</td>
		<td>U+1F63E</td>
		<td>U+E724</td>
		<td>U+EB5E</td>
		<td>U+E416</td>
		<td>U+FE34E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f63c"></span></td>
		<td>cat face with wry smile</td>
		<td>U+1F63C</td>
		<td>U+E753</td>
		<td>U+EB6A</td>
		<td>U+E404</td>
		<td>U+FE34F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f640"></span></td>
		<td>weary cat face</td>
		<td>U+1F640</td>
		<td>U+E6F3</td>
		<td>U+EB66</td>
		<td>U+E403</td>
		<td>U+FE350</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f645"></span></td>
		<td>face with no good gesture</td>
		<td>U+1F645</td>
		<td>U+E72F</td>
		<td>U+EAD7</td>
		<td>U+E423</td>
		<td>U+FE351</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f646"></span></td>
		<td>face with ok gesture</td>
		<td>U+1F646</td>
		<td>U+E70B</td>
		<td>U+EAD8</td>
		<td>U+E424</td>
		<td>U+FE352</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f647"></span></td>
		<td>person bowing deeply</td>
		<td>U+1F647</td>
		<td>-</td>
		<td>U+EAD9</td>
		<td>U+E426</td>
		<td>U+FE353</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f648"></span></td>
		<td>see-no-evil monkey</td>
		<td>U+1F648</td>
		<td>-</td>
		<td>U+EB50</td>
		<td>-</td>
		<td>U+FE354</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f64a"></span></td>
		<td>speak-no-evil monkey</td>
		<td>U+1F64A</td>
		<td>-</td>
		<td>U+EB51</td>
		<td>-</td>
		<td>U+FE355</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f649"></span></td>
		<td>hear-no-evil monkey</td>
		<td>U+1F649</td>
		<td>-</td>
		<td>U+EB52</td>
		<td>-</td>
		<td>U+FE356</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f64b"></span></td>
		<td>happy person raising one hand</td>
		<td>U+1F64B</td>
		<td>-</td>
		<td>U+EB85</td>
		<td>U+E012</td>
		<td>U+FE357</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f64c"></span></td>
		<td>person raising both hands in celebration</td>
		<td>U+1F64C</td>
		<td>-</td>
		<td>U+EB86</td>
		<td>U+E427</td>
		<td>U+FE358</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f64d"></span></td>
		<td>person frowning</td>
		<td>U+1F64D</td>
		<td>U+E6F3</td>
		<td>U+EB87</td>
		<td>U+E403</td>
		<td>U+FE359</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f64e"></span></td>
		<td>person with pouting face</td>
		<td>U+1F64E</td>
		<td>U+E6F1</td>
		<td>U+EB88</td>
		<td>U+E416</td>
		<td>U+FE35A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f64f"></span></td>
		<td>person with folded hands</td>
		<td>U+1F64F</td>
		<td>-</td>
		<td>U+EAD2</td>
		<td>U+E41D</td>
		<td>U+FE35B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3e0"></span></td>
		<td>house building</td>
		<td>U+1F3E0</td>
		<td>U+E663</td>
		<td>U+E4AB</td>
		<td>U+E036</td>
		<td>U+FE4B0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3e1"></span></td>
		<td>house with garden</td>
		<td>U+1F3E1</td>
		<td>U+E663</td>
		<td>U+EB09</td>
		<td>U+E036</td>
		<td>U+FE4B1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3e2"></span></td>
		<td>office building</td>
		<td>U+1F3E2</td>
		<td>U+E664</td>
		<td>U+E4AD</td>
		<td>U+E038</td>
		<td>U+FE4B2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3e3"></span></td>
		<td>japanese post office</td>
		<td>U+1F3E3</td>
		<td>U+E665</td>
		<td>U+E5DE</td>
		<td>U+E153</td>
		<td>U+FE4B3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3e5"></span></td>
		<td>hospital</td>
		<td>U+1F3E5</td>
		<td>U+E666</td>
		<td>U+E5DF</td>
		<td>U+E155</td>
		<td>U+FE4B4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3e6"></span></td>
		<td>bank</td>
		<td>U+1F3E6</td>
		<td>U+E667</td>
		<td>U+E4AA</td>
		<td>U+E14D</td>
		<td>U+FE4B5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3e7"></span></td>
		<td>automated teller machine</td>
		<td>U+1F3E7</td>
		<td>U+E668</td>
		<td>U+E4A3</td>
		<td>U+E154</td>
		<td>U+FE4B6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3e8"></span></td>
		<td>hotel</td>
		<td>U+1F3E8</td>
		<td>U+E669</td>
		<td>U+EA81</td>
		<td>U+E158</td>
		<td>U+FE4B7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3ea"></span></td>
		<td>convenience store</td>
		<td>U+1F3EA</td>
		<td>U+E66A</td>
		<td>U+E4A4</td>
		<td>U+E156</td>
		<td>U+FE4B9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3eb"></span></td>
		<td>school</td>
		<td>U+1F3EB</td>
		<td>U+E73E</td>
		<td>U+EA80</td>
		<td>U+E157</td>
		<td>U+FE4BA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26ea"></span></td>
		<td>church</td>
		<td>U+26EA</td>
		<td>-</td>
		<td>U+E5BB</td>
		<td>U+E037</td>
		<td>U+FE4BB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26f2"></span></td>
		<td>fountain</td>
		<td>U+26F2</td>
		<td>-</td>
		<td>U+E5CF</td>
		<td>U+E121</td>
		<td>U+FE4BC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3ec"></span></td>
		<td>department store</td>
		<td>U+1F3EC</td>
		<td>-</td>
		<td>U+EAF6</td>
		<td>U+E504</td>
		<td>U+FE4BD</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3ef"></span></td>
		<td>japanese castle</td>
		<td>U+1F3EF</td>
		<td>-</td>
		<td>U+EAF7</td>
		<td>U+E505</td>
		<td>U+FE4BE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3f0"></span></td>
		<td>european castle</td>
		<td>U+1F3F0</td>
		<td>-</td>
		<td>U+EAF8</td>
		<td>U+E506</td>
		<td>U+FE4BF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3ed"></span></td>
		<td>factory</td>
		<td>U+1F3ED</td>
		<td>-</td>
		<td>U+EAF9</td>
		<td>U+E508</td>
		<td>U+FE4C0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2693"></span></td>
		<td>anchor</td>
		<td>U+2693</td>
		<td>U+E661</td>
		<td>U+E4A9</td>
		<td>U+E202</td>
		<td>U+FE4C1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3ee"></span></td>
		<td>izakaya lantern</td>
		<td>U+1F3EE</td>
		<td>U+E74B</td>
		<td>U+E4BD</td>
		<td>U+E30B</td>
		<td>U+FE4C2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f5fb"></span></td>
		<td>mount fuji</td>
		<td>U+1F5FB</td>
		<td>U+E740</td>
		<td>U+E5BD</td>
		<td>U+E03B</td>
		<td>U+FE4C3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f5fc"></span></td>
		<td>tokyo tower</td>
		<td>U+1F5FC</td>
		<td>-</td>
		<td>U+E4C0</td>
		<td>U+E509</td>
		<td>U+FE4C4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f5fd"></span></td>
		<td>statue of liberty</td>
		<td>U+1F5FD</td>
		<td>-</td>
		<td>-</td>
		<td>U+E51D</td>
		<td>U+FE4C6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f5fe"></span></td>
		<td>silhouette of japan</td>
		<td>U+1F5FE</td>
		<td>-</td>
		<td>U+E572</td>
		<td>-</td>
		<td>U+FE4C7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f5ff"></span></td>
		<td>moyai</td>
		<td>U+1F5FF</td>
		<td>-</td>
		<td>U+EB6C</td>
		<td>-</td>
		<td>U+FE4C8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f45e"></span></td>
		<td>mans shoe</td>
		<td>U+1F45E</td>
		<td>U+E699</td>
		<td>U+E5B7</td>
		<td>U+E007</td>
		<td>U+FE4CC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f45f"></span></td>
		<td>athletic shoe</td>
		<td>U+1F45F</td>
		<td>U+E699</td>
		<td>U+EB2B</td>
		<td>U+E007</td>
		<td>U+FE4CD</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f460"></span></td>
		<td>high-heeled shoe</td>
		<td>U+1F460</td>
		<td>U+E674</td>
		<td>U+E51A</td>
		<td>U+E13E</td>
		<td>U+FE4D6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f461"></span></td>
		<td>womans sandal</td>
		<td>U+1F461</td>
		<td>U+E674</td>
		<td>U+E51A</td>
		<td>U+E31A</td>
		<td>U+FE4D7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f462"></span></td>
		<td>womans boots</td>
		<td>U+1F462</td>
		<td>-</td>
		<td>U+EA9F</td>
		<td>U+E31B</td>
		<td>U+FE4D8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f463"></span></td>
		<td>footprints</td>
		<td>U+1F463</td>
		<td>U+E698</td>
		<td>U+EB2A</td>
		<td>U+E536</td>
		<td>U+FE553</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f453"></span></td>
		<td>eyeglasses</td>
		<td>U+1F453</td>
		<td>U+E69A</td>
		<td>U+E4FE</td>
		<td>-</td>
		<td>U+FE4CE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f455"></span></td>
		<td>t-shirt</td>
		<td>U+1F455</td>
		<td>U+E70E</td>
		<td>U+E5B6</td>
		<td>U+E006</td>
		<td>U+FE4CF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f456"></span></td>
		<td>jeans</td>
		<td>U+1F456</td>
		<td>U+E711</td>
		<td>U+EB77</td>
		<td>-</td>
		<td>U+FE4D0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f451"></span></td>
		<td>crown</td>
		<td>U+1F451</td>
		<td>U+E71A</td>
		<td>U+E5C9</td>
		<td>U+E10E</td>
		<td>U+FE4D1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f454"></span></td>
		<td>necktie</td>
		<td>U+1F454</td>
		<td>-</td>
		<td>U+EA93</td>
		<td>U+E302</td>
		<td>U+FE4D3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f452"></span></td>
		<td>womans hat</td>
		<td>U+1F452</td>
		<td>-</td>
		<td>U+EA9E</td>
		<td>U+E318</td>
		<td>U+FE4D4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f457"></span></td>
		<td>dress</td>
		<td>U+1F457</td>
		<td>-</td>
		<td>U+EB6B</td>
		<td>U+E319</td>
		<td>U+FE4D5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f458"></span></td>
		<td>kimono</td>
		<td>U+1F458</td>
		<td>-</td>
		<td>U+EAA3</td>
		<td>U+E321</td>
		<td>U+FE4D9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f459"></span></td>
		<td>bikini</td>
		<td>U+1F459</td>
		<td>-</td>
		<td>U+EAA4</td>
		<td>U+E322</td>
		<td>U+FE4DA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f45a"></span></td>
		<td>womans clothes</td>
		<td>U+1F45A</td>
		<td>U+E70E</td>
		<td>U+E50D</td>
		<td>U+E006</td>
		<td>U+FE4DB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f45b"></span></td>
		<td>purse</td>
		<td>U+1F45B</td>
		<td>U+E70F</td>
		<td>U+E504</td>
		<td>-</td>
		<td>U+FE4DC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f45c"></span></td>
		<td>handbag</td>
		<td>U+1F45C</td>
		<td>U+E682</td>
		<td>U+E49C</td>
		<td>U+E323</td>
		<td>U+FE4F0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f45d"></span></td>
		<td>pouch</td>
		<td>U+1F45D</td>
		<td>U+E6AD</td>
		<td>-</td>
		<td>-</td>
		<td>U+FE4F1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4b0"></span></td>
		<td>money bag</td>
		<td>U+1F4B0</td>
		<td>U+E715</td>
		<td>U+E4C7</td>
		<td>U+E12F</td>
		<td>U+FE4DD</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4b1"></span></td>
		<td>currency exchange</td>
		<td>U+1F4B1</td>
		<td>-</td>
		<td>-</td>
		<td>U+E149</td>
		<td>U+FE4DE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4b9"></span></td>
		<td>chart with upwards trend and yen sign</td>
		<td>U+1F4B9</td>
		<td>-</td>
		<td>U+E5DC</td>
		<td>U+E14A</td>
		<td>U+FE4DF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4b2"></span></td>
		<td>heavy dollar sign</td>
		<td>U+1F4B2</td>
		<td>U+E715</td>
		<td>U+E579</td>
		<td>U+E12F</td>
		<td>U+FE4E0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4b3"></span></td>
		<td>credit card</td>
		<td>U+1F4B3</td>
		<td>-</td>
		<td>U+E57C</td>
		<td>-</td>
		<td>U+FE4E1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4b4"></span></td>
		<td>banknote with yen sign</td>
		<td>U+1F4B4</td>
		<td>U+E6D6</td>
		<td>U+E57D</td>
		<td>-</td>
		<td>U+FE4E2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4b5"></span></td>
		<td>banknote with dollar sign</td>
		<td>U+1F4B5</td>
		<td>U+E715</td>
		<td>U+E585</td>
		<td>U+E12F</td>
		<td>U+FE4E3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4b8"></span></td>
		<td>money with wings</td>
		<td>U+1F4B8</td>
		<td>-</td>
		<td>U+EB5B</td>
		<td>-</td>
		<td>U+FE4E4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f1e81f1f3"></span></td>
		<td>regional indicator symbol letters cn</td>
		<td>U+1F1E8 U+1F1F3</td>
		<td>-</td>
		<td>U+EB11</td>
		<td>U+E513</td>
		<td>U+FE4ED</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f1e91f1ea"></span></td>
		<td>regional indicator symbol letters de</td>
		<td>U+1F1E9 U+1F1EA</td>
		<td>-</td>
		<td>U+EB0E</td>
		<td>U+E50E</td>
		<td>U+FE4E8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f1ea1f1f8"></span></td>
		<td>regional indicator symbol letters es</td>
		<td>U+1F1EA U+1F1F8</td>
		<td>-</td>
		<td>U+E5D5</td>
		<td>U+E511</td>
		<td>U+FE4EB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f1eb1f1f7"></span></td>
		<td>regional indicator symbol letters fr</td>
		<td>U+1F1EB U+1F1F7</td>
		<td>-</td>
		<td>U+EAFA</td>
		<td>U+E50D</td>
		<td>U+FE4E7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f1ec1f1e7"></span></td>
		<td>regional indicator symbol letters gb</td>
		<td>U+1F1EC U+1F1E7</td>
		<td>-</td>
		<td>U+EB10</td>
		<td>U+E510</td>
		<td>U+FE4EA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f1ee1f1f9"></span></td>
		<td>regional indicator symbol letters it</td>
		<td>U+1F1EE U+1F1F9</td>
		<td>-</td>
		<td>U+EB0F</td>
		<td>U+E50F</td>
		<td>U+FE4E9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f1ef1f1f5"></span></td>
		<td>regional indicator symbol letters jp</td>
		<td>U+1F1EF U+1F1F5</td>
		<td>-</td>
		<td>U+E4CC</td>
		<td>U+E50B</td>
		<td>U+FE4E5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f1f01f1f7"></span></td>
		<td>regional indicator symbol letters kr</td>
		<td>U+1F1F0 U+1F1F7</td>
		<td>-</td>
		<td>U+EB12</td>
		<td>U+E514</td>
		<td>U+FE4EE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f1f71f1fa"></span></td>
		<td>regional indicator symbol letters ru</td>
		<td>U+1F1F7 U+1F1FA</td>
		<td>-</td>
		<td>U+E5D6</td>
		<td>U+E512</td>
		<td>U+FE4EC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f1fa1f1f8"></span></td>
		<td>regional indicator symbol letters us</td>
		<td>U+1F1FA U+1F1F8</td>
		<td>-</td>
		<td>U+E573</td>
		<td>U+E50C</td>
		<td>U+FE4E6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f525"></span></td>
		<td>fire</td>
		<td>U+1F525</td>
		<td>-</td>
		<td>U+E47B</td>
		<td>U+E11D</td>
		<td>U+FE4F6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f526"></span></td>
		<td>electric torch</td>
		<td>U+1F526</td>
		<td>U+E6FB</td>
		<td>U+E583</td>
		<td>-</td>
		<td>U+FE4FB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f527"></span></td>
		<td>wrench</td>
		<td>U+1F527</td>
		<td>U+E718</td>
		<td>U+E587</td>
		<td>-</td>
		<td>U+FE4C9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f528"></span></td>
		<td>hammer</td>
		<td>U+1F528</td>
		<td>-</td>
		<td>U+E5CB</td>
		<td>U+E116</td>
		<td>U+FE4CA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f529"></span></td>
		<td>nut and bolt</td>
		<td>U+1F529</td>
		<td>-</td>
		<td>U+E581</td>
		<td>-</td>
		<td>U+FE4CB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f52a"></span></td>
		<td>hocho</td>
		<td>U+1F52A</td>
		<td>-</td>
		<td>U+E57F</td>
		<td>-</td>
		<td>U+FE4FA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f52b"></span></td>
		<td>pistol</td>
		<td>U+1F52B</td>
		<td>-</td>
		<td>U+E50A</td>
		<td>U+E113</td>
		<td>U+FE4F5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f52e"></span></td>
		<td>crystal ball</td>
		<td>U+1F52E</td>
		<td>-</td>
		<td>U+EA8F</td>
		<td>U+E23E</td>
		<td>U+FE4F7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f52f"></span></td>
		<td>six pointed star with middle dot</td>
		<td>U+1F52F</td>
		<td>-</td>
		<td>U+EA8F</td>
		<td>U+E23E</td>
		<td>U+FE4F8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f530"></span></td>
		<td>japanese symbol for beginner</td>
		<td>U+1F530</td>
		<td>-</td>
		<td>U+E480</td>
		<td>U+E209</td>
		<td>U+FE044</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f531"></span></td>
		<td>trident emblem</td>
		<td>U+1F531</td>
		<td>U+E71A</td>
		<td>U+E5C9</td>
		<td>U+E031</td>
		<td>U+FE4D2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f489"></span></td>
		<td>syringe</td>
		<td>U+1F489</td>
		<td>-</td>
		<td>U+E510</td>
		<td>U+E13B</td>
		<td>U+FE509</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f48a"></span></td>
		<td>pill</td>
		<td>U+1F48A</td>
		<td>-</td>
		<td>U+EA9A</td>
		<td>U+E30F</td>
		<td>U+FE50A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f170"></span></td>
		<td>negative squared latin capital letter a</td>
		<td>U+1F170</td>
		<td>-</td>
		<td>U+EB26</td>
		<td>U+E532</td>
		<td>U+FE50B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f171"></span></td>
		<td>negative squared latin capital letter b</td>
		<td>U+1F171</td>
		<td>-</td>
		<td>U+EB27</td>
		<td>U+E533</td>
		<td>U+FE50C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f18e"></span></td>
		<td>negative squared ab</td>
		<td>U+1F18E</td>
		<td>-</td>
		<td>U+EB29</td>
		<td>U+E534</td>
		<td>U+FE50D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f17e"></span></td>
		<td>negative squared latin capital letter o</td>
		<td>U+1F17E</td>
		<td>-</td>
		<td>U+EB28</td>
		<td>U+E535</td>
		<td>U+FE50E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f380"></span></td>
		<td>ribbon</td>
		<td>U+1F380</td>
		<td>U+E684</td>
		<td>U+E59F</td>
		<td>U+E314</td>
		<td>U+FE50F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f381"></span></td>
		<td>wrapped present</td>
		<td>U+1F381</td>
		<td>U+E685</td>
		<td>U+E4CF</td>
		<td>U+E112</td>
		<td>U+FE510</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f382"></span></td>
		<td>birthday cake</td>
		<td>U+1F382</td>
		<td>U+E686</td>
		<td>U+E5A0</td>
		<td>U+E34B</td>
		<td>U+FE511</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f384"></span></td>
		<td>christmas tree</td>
		<td>U+1F384</td>
		<td>U+E6A4</td>
		<td>U+E4C9</td>
		<td>U+E033</td>
		<td>U+FE512</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f385"></span></td>
		<td>father christmas</td>
		<td>U+1F385</td>
		<td>-</td>
		<td>U+EAF0</td>
		<td>U+E448</td>
		<td>U+FE513</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f38c"></span></td>
		<td>crossed flags</td>
		<td>U+1F38C</td>
		<td>-</td>
		<td>U+E5D9</td>
		<td>U+E143</td>
		<td>U+FE514</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f386"></span></td>
		<td>fireworks</td>
		<td>U+1F386</td>
		<td>-</td>
		<td>U+E5CC</td>
		<td>U+E117</td>
		<td>U+FE515</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f388"></span></td>
		<td>balloon</td>
		<td>U+1F388</td>
		<td>-</td>
		<td>U+EA9B</td>
		<td>U+E310</td>
		<td>U+FE516</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f389"></span></td>
		<td>party popper</td>
		<td>U+1F389</td>
		<td>-</td>
		<td>U+EA9C</td>
		<td>U+E312</td>
		<td>U+FE517</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f38d"></span></td>
		<td>pine decoration</td>
		<td>U+1F38D</td>
		<td>-</td>
		<td>U+EAE3</td>
		<td>U+E436</td>
		<td>U+FE518</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f38e"></span></td>
		<td>japanese dolls</td>
		<td>U+1F38E</td>
		<td>-</td>
		<td>U+EAE4</td>
		<td>U+E438</td>
		<td>U+FE519</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f393"></span></td>
		<td>graduation cap</td>
		<td>U+1F393</td>
		<td>-</td>
		<td>U+EAE5</td>
		<td>U+E439</td>
		<td>U+FE51A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f392"></span></td>
		<td>school satchel</td>
		<td>U+1F392</td>
		<td>-</td>
		<td>U+EAE6</td>
		<td>U+E43A</td>
		<td>U+FE51B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f38f"></span></td>
		<td>carp streamer</td>
		<td>U+1F38F</td>
		<td>-</td>
		<td>U+EAE7</td>
		<td>U+E43B</td>
		<td>U+FE51C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f387"></span></td>
		<td>firework sparkler</td>
		<td>U+1F387</td>
		<td>-</td>
		<td>U+EAEB</td>
		<td>U+E440</td>
		<td>U+FE51D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f390"></span></td>
		<td>wind chime</td>
		<td>U+1F390</td>
		<td>-</td>
		<td>U+EAED</td>
		<td>U+E442</td>
		<td>U+FE51E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f383"></span></td>
		<td>jack-o-lantern</td>
		<td>U+1F383</td>
		<td>-</td>
		<td>U+EAEE</td>
		<td>U+E445</td>
		<td>U+FE51F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f38a"></span></td>
		<td>confetti ball</td>
		<td>U+1F38A</td>
		<td>-</td>
		<td>U+E46F</td>
		<td>-</td>
		<td>U+FE520</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f38b"></span></td>
		<td>tanabata tree</td>
		<td>U+1F38B</td>
		<td>-</td>
		<td>U+EB3D</td>
		<td>-</td>
		<td>U+FE521</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f391"></span></td>
		<td>moon viewing ceremony</td>
		<td>U+1F391</td>
		<td>-</td>
		<td>U+EAEF</td>
		<td>U+E446</td>
		<td>U+FE017</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4df"></span></td>
		<td>pager</td>
		<td>U+1F4DF</td>
		<td>U+E65A</td>
		<td>U+E59B</td>
		<td>-</td>
		<td>U+FE522</td>
	</tr>
	<tr>
		<td><span class="emoji emoji260e"></span></td>
		<td>black telephone</td>
		<td>U+260E</td>
		<td>U+E687</td>
		<td>U+E596</td>
		<td>U+E009</td>
		<td>U+FE523</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4de"></span></td>
		<td>telephone receiver</td>
		<td>U+1F4DE</td>
		<td>U+E687</td>
		<td>U+E51E</td>
		<td>U+E009</td>
		<td>U+FE524</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4f1"></span></td>
		<td>mobile phone</td>
		<td>U+1F4F1</td>
		<td>U+E688</td>
		<td>U+E588</td>
		<td>U+E00A</td>
		<td>U+FE525</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4f2"></span></td>
		<td>mobile phone with rightwards arrow at left</td>
		<td>U+1F4F2</td>
		<td>U+E6CE</td>
		<td>U+EB08</td>
		<td>U+E104</td>
		<td>U+FE526</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4dd"></span></td>
		<td>memo</td>
		<td>U+1F4DD</td>
		<td>U+E689</td>
		<td>U+EA92</td>
		<td>U+E301</td>
		<td>U+FE527</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4e0"></span></td>
		<td>fax machine</td>
		<td>U+1F4E0</td>
		<td>U+E6D0</td>
		<td>U+E520</td>
		<td>U+E00B</td>
		<td>U+FE528</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2709"></span></td>
		<td>envelope</td>
		<td>U+2709</td>
		<td>U+E6D3</td>
		<td>U+E521</td>
		<td>U+E103</td>
		<td>U+FE529</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4e8"></span></td>
		<td>incoming envelope</td>
		<td>U+1F4E8</td>
		<td>U+E6CF</td>
		<td>U+E591</td>
		<td>U+E103</td>
		<td>U+FE52A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4e9"></span></td>
		<td>envelope with downwards arrow above</td>
		<td>U+1F4E9</td>
		<td>U+E6CF</td>
		<td>U+EB62</td>
		<td>U+E103</td>
		<td>U+FE52B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4ea"></span></td>
		<td>closed mailbox with lowered flag</td>
		<td>U+1F4EA</td>
		<td>U+E665</td>
		<td>U+E51B</td>
		<td>U+E101</td>
		<td>U+FE52C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4eb"></span></td>
		<td>closed mailbox with raised flag</td>
		<td>U+1F4EB</td>
		<td>U+E665</td>
		<td>U+EB0A</td>
		<td>U+E101</td>
		<td>U+FE52D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4ee"></span></td>
		<td>postbox</td>
		<td>U+1F4EE</td>
		<td>U+E665</td>
		<td>U+E51B</td>
		<td>U+E102</td>
		<td>U+FE52E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4f0"></span></td>
		<td>newspaper</td>
		<td>U+1F4F0</td>
		<td>-</td>
		<td>U+E58B</td>
		<td>-</td>
		<td>U+FE822</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4e2"></span></td>
		<td>public address loudspeaker</td>
		<td>U+1F4E2</td>
		<td>-</td>
		<td>U+E511</td>
		<td>U+E142</td>
		<td>U+FE52F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4e3"></span></td>
		<td>cheering megaphone</td>
		<td>U+1F4E3</td>
		<td>-</td>
		<td>U+E511</td>
		<td>U+E317</td>
		<td>U+FE530</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4e1"></span></td>
		<td>satellite antenna</td>
		<td>U+1F4E1</td>
		<td>-</td>
		<td>U+E4A8</td>
		<td>U+E14B</td>
		<td>U+FE531</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4e4"></span></td>
		<td>outbox tray</td>
		<td>U+1F4E4</td>
		<td>-</td>
		<td>U+E592</td>
		<td>-</td>
		<td>U+FE533</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4e5"></span></td>
		<td>inbox tray</td>
		<td>U+1F4E5</td>
		<td>-</td>
		<td>U+E593</td>
		<td>-</td>
		<td>U+FE534</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4e6"></span></td>
		<td>package</td>
		<td>U+1F4E6</td>
		<td>U+E685</td>
		<td>U+E51F</td>
		<td>U+E112</td>
		<td>U+FE535</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4e7"></span></td>
		<td>e-mail symbol</td>
		<td>U+1F4E7</td>
		<td>U+E6D3</td>
		<td>U+EB71</td>
		<td>U+E103</td>
		<td>U+FEB92</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f520"></span></td>
		<td>input symbol for latin capital letters</td>
		<td>U+1F520</td>
		<td>-</td>
		<td>U+EAFD</td>
		<td>-</td>
		<td>U+FEB7C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f521"></span></td>
		<td>input symbol for latin small letters</td>
		<td>U+1F521</td>
		<td>-</td>
		<td>U+EAFE</td>
		<td>-</td>
		<td>U+FEB7D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f522"></span></td>
		<td>input symbol for numbers</td>
		<td>U+1F522</td>
		<td>-</td>
		<td>U+EAFF</td>
		<td>-</td>
		<td>U+FEB7E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f523"></span></td>
		<td>input symbol for symbols</td>
		<td>U+1F523</td>
		<td>-</td>
		<td>U+EB00</td>
		<td>-</td>
		<td>U+FEB7F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f524"></span></td>
		<td>input symbol for latin letters</td>
		<td>U+1F524</td>
		<td>-</td>
		<td>U+EB55</td>
		<td>-</td>
		<td>U+FEB80</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2712"></span></td>
		<td>black nib</td>
		<td>U+2712</td>
		<td>U+E6AE</td>
		<td>U+EB03</td>
		<td>-</td>
		<td>U+FE536</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4ba"></span></td>
		<td>seat</td>
		<td>U+1F4BA</td>
		<td>U+E6B2</td>
		<td>-</td>
		<td>U+E11F</td>
		<td>U+FE537</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4bb"></span></td>
		<td>personal computer</td>
		<td>U+1F4BB</td>
		<td>U+E716</td>
		<td>U+E5B8</td>
		<td>U+E00C</td>
		<td>U+FE538</td>
	</tr>
	<tr>
		<td><span class="emoji emoji270f"></span></td>
		<td>pencil</td>
		<td>U+270F</td>
		<td>U+E719</td>
		<td>U+E4A1</td>
		<td>U+E301</td>
		<td>U+FE539</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4ce"></span></td>
		<td>paperclip</td>
		<td>U+1F4CE</td>
		<td>U+E730</td>
		<td>U+E4A0</td>
		<td>-</td>
		<td>U+FE53A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4bc"></span></td>
		<td>briefcase</td>
		<td>U+1F4BC</td>
		<td>U+E682</td>
		<td>U+E5CE</td>
		<td>U+E11E</td>
		<td>U+FE53B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4bd"></span></td>
		<td>minidisc</td>
		<td>U+1F4BD</td>
		<td>-</td>
		<td>U+E582</td>
		<td>U+E316</td>
		<td>U+FE53C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4be"></span></td>
		<td>floppy disk</td>
		<td>U+1F4BE</td>
		<td>-</td>
		<td>U+E562</td>
		<td>U+E316</td>
		<td>U+FE53D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4bf"></span></td>
		<td>optical disc</td>
		<td>U+1F4BF</td>
		<td>U+E68C</td>
		<td>U+E50C</td>
		<td>U+E126</td>
		<td>U+FE81D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4c0"></span></td>
		<td>dvd</td>
		<td>U+1F4C0</td>
		<td>U+E68C</td>
		<td>U+E50C</td>
		<td>U+E127</td>
		<td>U+FE81E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2702"></span></td>
		<td>black scissors</td>
		<td>U+2702</td>
		<td>U+E675</td>
		<td>U+E516</td>
		<td>U+E313</td>
		<td>U+FE53E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4cd"></span></td>
		<td>round pushpin</td>
		<td>U+1F4CD</td>
		<td>-</td>
		<td>U+E560</td>
		<td>-</td>
		<td>U+FE53F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4c3"></span></td>
		<td>page with curl</td>
		<td>U+1F4C3</td>
		<td>U+E689</td>
		<td>U+E561</td>
		<td>U+E301</td>
		<td>U+FE540</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4c4"></span></td>
		<td>page facing up</td>
		<td>U+1F4C4</td>
		<td>U+E689</td>
		<td>U+E569</td>
		<td>U+E301</td>
		<td>U+FE541</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4c5"></span></td>
		<td>calendar</td>
		<td>U+1F4C5</td>
		<td>-</td>
		<td>U+E563</td>
		<td>-</td>
		<td>U+FE542</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4c1"></span></td>
		<td>file folder</td>
		<td>U+1F4C1</td>
		<td>-</td>
		<td>U+E58F</td>
		<td>-</td>
		<td>U+FE543</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4c2"></span></td>
		<td>open file folder</td>
		<td>U+1F4C2</td>
		<td>-</td>
		<td>U+E590</td>
		<td>-</td>
		<td>U+FE544</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4d3"></span></td>
		<td>notebook</td>
		<td>U+1F4D3</td>
		<td>U+E683</td>
		<td>U+E56B</td>
		<td>U+E148</td>
		<td>U+FE545</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4d6"></span></td>
		<td>open book</td>
		<td>U+1F4D6</td>
		<td>U+E683</td>
		<td>U+E49F</td>
		<td>U+E148</td>
		<td>U+FE546</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4d4"></span></td>
		<td>notebook with decorative cover</td>
		<td>U+1F4D4</td>
		<td>U+E683</td>
		<td>U+E49D</td>
		<td>U+E148</td>
		<td>U+FE547</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4d5"></span></td>
		<td>closed book</td>
		<td>U+1F4D5</td>
		<td>U+E683</td>
		<td>U+E568</td>
		<td>U+E148</td>
		<td>U+FE502</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4d7"></span></td>
		<td>green book</td>
		<td>U+1F4D7</td>
		<td>U+E683</td>
		<td>U+E565</td>
		<td>U+E148</td>
		<td>U+FE4FF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4d8"></span></td>
		<td>blue book</td>
		<td>U+1F4D8</td>
		<td>U+E683</td>
		<td>U+E566</td>
		<td>U+E148</td>
		<td>U+FE500</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4d9"></span></td>
		<td>orange book</td>
		<td>U+1F4D9</td>
		<td>U+E683</td>
		<td>U+E567</td>
		<td>U+E148</td>
		<td>U+FE501</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4da"></span></td>
		<td>books</td>
		<td>U+1F4DA</td>
		<td>U+E683</td>
		<td>U+E56F</td>
		<td>U+E148</td>
		<td>U+FE503</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4db"></span></td>
		<td>name badge</td>
		<td>U+1F4DB</td>
		<td>-</td>
		<td>U+E51D</td>
		<td>-</td>
		<td>U+FE504</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4dc"></span></td>
		<td>scroll</td>
		<td>U+1F4DC</td>
		<td>U+E70A</td>
		<td>U+E55F</td>
		<td>-</td>
		<td>U+FE4FD</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4cb"></span></td>
		<td>clipboard</td>
		<td>U+1F4CB</td>
		<td>U+E689</td>
		<td>U+E564</td>
		<td>U+E301</td>
		<td>U+FE548</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4c6"></span></td>
		<td>tear-off calendar</td>
		<td>U+1F4C6</td>
		<td>-</td>
		<td>U+E56A</td>
		<td>-</td>
		<td>U+FE549</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4ca"></span></td>
		<td>bar chart</td>
		<td>U+1F4CA</td>
		<td>-</td>
		<td>U+E574</td>
		<td>U+E14A</td>
		<td>U+FE54A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4c8"></span></td>
		<td>chart with upwards trend</td>
		<td>U+1F4C8</td>
		<td>-</td>
		<td>U+E575</td>
		<td>U+E14A</td>
		<td>U+FE54B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4c9"></span></td>
		<td>chart with downwards trend</td>
		<td>U+1F4C9</td>
		<td>-</td>
		<td>U+E576</td>
		<td>-</td>
		<td>U+FE54C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4c7"></span></td>
		<td>card index</td>
		<td>U+1F4C7</td>
		<td>U+E683</td>
		<td>U+E56C</td>
		<td>U+E148</td>
		<td>U+FE54D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4cc"></span></td>
		<td>pushpin</td>
		<td>U+1F4CC</td>
		<td>-</td>
		<td>U+E56D</td>
		<td>-</td>
		<td>U+FE54E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4d2"></span></td>
		<td>ledger</td>
		<td>U+1F4D2</td>
		<td>U+E683</td>
		<td>U+E56E</td>
		<td>U+E148</td>
		<td>U+FE54F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4cf"></span></td>
		<td>straight ruler</td>
		<td>U+1F4CF</td>
		<td>-</td>
		<td>U+E570</td>
		<td>-</td>
		<td>U+FE550</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4d0"></span></td>
		<td>triangular ruler</td>
		<td>U+1F4D0</td>
		<td>-</td>
		<td>U+E4A2</td>
		<td>-</td>
		<td>U+FE551</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4d1"></span></td>
		<td>bookmark tabs</td>
		<td>U+1F4D1</td>
		<td>U+E689</td>
		<td>U+EB0B</td>
		<td>U+E301</td>
		<td>U+FE552</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3bd"></span></td>
		<td>running shirt with sash</td>
		<td>U+1F3BD</td>
		<td>U+E652</td>
		<td>-</td>
		<td>-</td>
		<td>U+FE7D0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26be"></span></td>
		<td>baseball</td>
		<td>U+26BE</td>
		<td>U+E653</td>
		<td>U+E4BA</td>
		<td>U+E016</td>
		<td>U+FE7D1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26f3"></span></td>
		<td>flag in hole</td>
		<td>U+26F3</td>
		<td>U+E654</td>
		<td>U+E599</td>
		<td>U+E014</td>
		<td>U+FE7D2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3be"></span></td>
		<td>tennis racquet and ball</td>
		<td>U+1F3BE</td>
		<td>U+E655</td>
		<td>U+E4B7</td>
		<td>U+E015</td>
		<td>U+FE7D3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26bd"></span></td>
		<td>soccer ball</td>
		<td>U+26BD</td>
		<td>U+E656</td>
		<td>U+E4B6</td>
		<td>U+E018</td>
		<td>U+FE7D4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3bf"></span></td>
		<td>ski and ski boot</td>
		<td>U+1F3BF</td>
		<td>U+E657</td>
		<td>U+EAAC</td>
		<td>U+E013</td>
		<td>U+FE7D5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3c0"></span></td>
		<td>basketball and hoop</td>
		<td>U+1F3C0</td>
		<td>U+E658</td>
		<td>U+E59A</td>
		<td>U+E42A</td>
		<td>U+FE7D6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3c1"></span></td>
		<td>chequered flag</td>
		<td>U+1F3C1</td>
		<td>U+E659</td>
		<td>U+E4B9</td>
		<td>U+E132</td>
		<td>U+FE7D7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3c2"></span></td>
		<td>snowboarder</td>
		<td>U+1F3C2</td>
		<td>U+E712</td>
		<td>U+E4B8</td>
		<td>-</td>
		<td>U+FE7D8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3c3"></span></td>
		<td>runner</td>
		<td>U+1F3C3</td>
		<td>U+E733</td>
		<td>U+E46B</td>
		<td>U+E115</td>
		<td>U+FE7D9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3c4"></span></td>
		<td>surfer</td>
		<td>U+1F3C4</td>
		<td>U+E712</td>
		<td>U+EB41</td>
		<td>U+E017</td>
		<td>U+FE7DA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3c6"></span></td>
		<td>trophy</td>
		<td>U+1F3C6</td>
		<td>-</td>
		<td>U+E5D3</td>
		<td>U+E131</td>
		<td>U+FE7DB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3c8"></span></td>
		<td>american football</td>
		<td>U+1F3C8</td>
		<td>-</td>
		<td>U+E4BB</td>
		<td>U+E42B</td>
		<td>U+FE7DD</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3ca"></span></td>
		<td>swimmer</td>
		<td>U+1F3CA</td>
		<td>-</td>
		<td>U+EADE</td>
		<td>U+E42D</td>
		<td>U+FE7DE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f683"></span></td>
		<td>railway car</td>
		<td>U+1F683</td>
		<td>U+E65B</td>
		<td>U+E4B5</td>
		<td>U+E01E</td>
		<td>U+FE7DF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f687"></span></td>
		<td>metro</td>
		<td>U+1F687</td>
		<td>U+E65C</td>
		<td>U+E5BC</td>
		<td>U+E434</td>
		<td>U+FE7E0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji24c2"></span></td>
		<td>circled latin capital letter m</td>
		<td>U+24C2</td>
		<td>U+E65C</td>
		<td>U+E5BC</td>
		<td>U+E434</td>
		<td>U+FE7E1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f684"></span></td>
		<td>high-speed train</td>
		<td>U+1F684</td>
		<td>U+E65D</td>
		<td>U+E4B0</td>
		<td>U+E435</td>
		<td>U+FE7E2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f685"></span></td>
		<td>high-speed train with bullet nose</td>
		<td>U+1F685</td>
		<td>U+E65D</td>
		<td>U+E4B0</td>
		<td>U+E01F</td>
		<td>U+FE7E3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f697"></span></td>
		<td>automobile</td>
		<td>U+1F697</td>
		<td>U+E65E</td>
		<td>U+E4B1</td>
		<td>U+E01B</td>
		<td>U+FE7E4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f699"></span></td>
		<td>recreational vehicle</td>
		<td>U+1F699</td>
		<td>U+E65F</td>
		<td>U+E4B1</td>
		<td>U+E42E</td>
		<td>U+FE7E5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f68c"></span></td>
		<td>bus</td>
		<td>U+1F68C</td>
		<td>U+E660</td>
		<td>U+E4AF</td>
		<td>U+E159</td>
		<td>U+FE7E6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f68f"></span></td>
		<td>bus stop</td>
		<td>U+1F68F</td>
		<td>-</td>
		<td>U+E4A7</td>
		<td>U+E150</td>
		<td>U+FE7E7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6a2"></span></td>
		<td>ship</td>
		<td>U+1F6A2</td>
		<td>U+E661</td>
		<td>U+EA82</td>
		<td>U+E202</td>
		<td>U+FE7E8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2708"></span></td>
		<td>airplane</td>
		<td>U+2708</td>
		<td>U+E662</td>
		<td>U+E4B3</td>
		<td>U+E01D</td>
		<td>U+FE7E9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26f5"></span></td>
		<td>sailboat</td>
		<td>U+26F5</td>
		<td>U+E6A3</td>
		<td>U+E4B4</td>
		<td>U+E01C</td>
		<td>U+FE7EA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f689"></span></td>
		<td>station</td>
		<td>U+1F689</td>
		<td>-</td>
		<td>U+EB6D</td>
		<td>U+E039</td>
		<td>U+FE7EC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f680"></span></td>
		<td>rocket</td>
		<td>U+1F680</td>
		<td>-</td>
		<td>U+E5C8</td>
		<td>U+E10D</td>
		<td>U+FE7ED</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6a4"></span></td>
		<td>speedboat</td>
		<td>U+1F6A4</td>
		<td>U+E6A3</td>
		<td>U+E4B4</td>
		<td>U+E135</td>
		<td>U+FE7EE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f695"></span></td>
		<td>taxi</td>
		<td>U+1F695</td>
		<td>U+E65E</td>
		<td>U+E4B1</td>
		<td>U+E15A</td>
		<td>U+FE7EF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f69a"></span></td>
		<td>delivery truck</td>
		<td>U+1F69A</td>
		<td>-</td>
		<td>U+E4B2</td>
		<td>U+E42F</td>
		<td>U+FE7F1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f692"></span></td>
		<td>fire engine</td>
		<td>U+1F692</td>
		<td>-</td>
		<td>U+EADF</td>
		<td>U+E430</td>
		<td>U+FE7F2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f691"></span></td>
		<td>ambulance</td>
		<td>U+1F691</td>
		<td>-</td>
		<td>U+EAE0</td>
		<td>U+E431</td>
		<td>U+FE7F3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f693"></span></td>
		<td>police car</td>
		<td>U+1F693</td>
		<td>-</td>
		<td>U+EAE1</td>
		<td>U+E432</td>
		<td>U+FE7F4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26fd"></span></td>
		<td>fuel pump</td>
		<td>U+26FD</td>
		<td>U+E66B</td>
		<td>U+E571</td>
		<td>U+E03A</td>
		<td>U+FE7F5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f17f"></span></td>
		<td>negative squared latin capital letter p</td>
		<td>U+1F17F</td>
		<td>U+E66C</td>
		<td>U+E4A6</td>
		<td>U+E14F</td>
		<td>U+FE7F6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6a5"></span></td>
		<td>horizontal traffic light</td>
		<td>U+1F6A5</td>
		<td>U+E66D</td>
		<td>U+E46A</td>
		<td>U+E14E</td>
		<td>U+FE7F7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6a7"></span></td>
		<td>construction sign</td>
		<td>U+1F6A7</td>
		<td>-</td>
		<td>U+E5D7</td>
		<td>U+E137</td>
		<td>U+FE7F8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6a8"></span></td>
		<td>police cars revolving light</td>
		<td>U+1F6A8</td>
		<td>-</td>
		<td>U+EB73</td>
		<td>U+E432</td>
		<td>U+FE7F9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2668"></span></td>
		<td>hot springs</td>
		<td>U+2668</td>
		<td>U+E6F7</td>
		<td>U+E4BC</td>
		<td>U+E123</td>
		<td>U+FE7FA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26fa"></span></td>
		<td>tent</td>
		<td>U+26FA</td>
		<td>-</td>
		<td>U+E5D0</td>
		<td>U+E122</td>
		<td>U+FE7FB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3a0"></span></td>
		<td>carousel horse</td>
		<td>U+1F3A0</td>
		<td>U+E679</td>
		<td>-</td>
		<td>-</td>
		<td>U+FE7FC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3a1"></span></td>
		<td>ferris wheel</td>
		<td>U+1F3A1</td>
		<td>-</td>
		<td>U+E46D</td>
		<td>U+E124</td>
		<td>U+FE7FD</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3a2"></span></td>
		<td>roller coaster</td>
		<td>U+1F3A2</td>
		<td>-</td>
		<td>U+EAE2</td>
		<td>U+E433</td>
		<td>U+FE7FE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3a3"></span></td>
		<td>fishing pole and fish</td>
		<td>U+1F3A3</td>
		<td>U+E751</td>
		<td>U+EB42</td>
		<td>U+E019</td>
		<td>U+FE7FF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3a4"></span></td>
		<td>microphone</td>
		<td>U+1F3A4</td>
		<td>U+E676</td>
		<td>U+E503</td>
		<td>U+E03C</td>
		<td>U+FE800</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3a5"></span></td>
		<td>movie camera</td>
		<td>U+1F3A5</td>
		<td>U+E677</td>
		<td>U+E517</td>
		<td>U+E03D</td>
		<td>U+FE801</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3a6"></span></td>
		<td>cinema</td>
		<td>U+1F3A6</td>
		<td>U+E677</td>
		<td>U+E517</td>
		<td>U+E507</td>
		<td>U+FE802</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3a7"></span></td>
		<td>headphone</td>
		<td>U+1F3A7</td>
		<td>U+E67A</td>
		<td>U+E508</td>
		<td>U+E30A</td>
		<td>U+FE803</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3a8"></span></td>
		<td>artist palette</td>
		<td>U+1F3A8</td>
		<td>U+E67B</td>
		<td>U+E59C</td>
		<td>U+E502</td>
		<td>U+FE804</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3a9"></span></td>
		<td>top hat</td>
		<td>U+1F3A9</td>
		<td>U+E67C</td>
		<td>U+EAF5</td>
		<td>U+E503</td>
		<td>U+FE805</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3aa"></span></td>
		<td>circus tent</td>
		<td>U+1F3AA</td>
		<td>U+E67D</td>
		<td>U+E59E</td>
		<td>-</td>
		<td>U+FE806</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3ab"></span></td>
		<td>ticket</td>
		<td>U+1F3AB</td>
		<td>U+E67E</td>
		<td>U+E49E</td>
		<td>U+E125</td>
		<td>U+FE807</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3ac"></span></td>
		<td>clapper board</td>
		<td>U+1F3AC</td>
		<td>U+E6AC</td>
		<td>U+E4BE</td>
		<td>U+E324</td>
		<td>U+FE808</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3ad"></span></td>
		<td>performing arts</td>
		<td>U+1F3AD</td>
		<td>-</td>
		<td>U+E59D</td>
		<td>U+E503</td>
		<td>U+FE809</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3ae"></span></td>
		<td>video game</td>
		<td>U+1F3AE</td>
		<td>U+E68B</td>
		<td>U+E4C6</td>
		<td>-</td>
		<td>U+FE80A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f004"></span></td>
		<td>mahjong tile red dragon</td>
		<td>U+1F004</td>
		<td>-</td>
		<td>U+E5D1</td>
		<td>U+E12D</td>
		<td>U+FE80B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3af"></span></td>
		<td>direct hit</td>
		<td>U+1F3AF</td>
		<td>-</td>
		<td>U+E4C5</td>
		<td>U+E130</td>
		<td>U+FE80C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3b0"></span></td>
		<td>slot machine</td>
		<td>U+1F3B0</td>
		<td>-</td>
		<td>U+E46E</td>
		<td>U+E133</td>
		<td>U+FE80D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3b1"></span></td>
		<td>billiards</td>
		<td>U+1F3B1</td>
		<td>-</td>
		<td>U+EADD</td>
		<td>U+E42C</td>
		<td>U+FE80E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3b2"></span></td>
		<td>game die</td>
		<td>U+1F3B2</td>
		<td>-</td>
		<td>U+E4C8</td>
		<td>-</td>
		<td>U+FE80F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3b3"></span></td>
		<td>bowling</td>
		<td>U+1F3B3</td>
		<td>-</td>
		<td>U+EB43</td>
		<td>-</td>
		<td>U+FE810</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3b4"></span></td>
		<td>flower playing cards</td>
		<td>U+1F3B4</td>
		<td>-</td>
		<td>U+EB6E</td>
		<td>-</td>
		<td>U+FE811</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f0cf"></span></td>
		<td>playing card black joker</td>
		<td>U+1F0CF</td>
		<td>-</td>
		<td>U+EB6F</td>
		<td>-</td>
		<td>U+FE812</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3b5"></span></td>
		<td>musical note</td>
		<td>U+1F3B5</td>
		<td>U+E6F6</td>
		<td>U+E5BE</td>
		<td>U+E03E</td>
		<td>U+FE813</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3b6"></span></td>
		<td>multiple musical notes</td>
		<td>U+1F3B6</td>
		<td>U+E6FF</td>
		<td>U+E505</td>
		<td>U+E326</td>
		<td>U+FE814</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3b7"></span></td>
		<td>saxophone</td>
		<td>U+1F3B7</td>
		<td>-</td>
		<td>-</td>
		<td>U+E040</td>
		<td>U+FE815</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3b8"></span></td>
		<td>guitar</td>
		<td>U+1F3B8</td>
		<td>-</td>
		<td>U+E506</td>
		<td>U+E041</td>
		<td>U+FE816</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3b9"></span></td>
		<td>musical keyboard</td>
		<td>U+1F3B9</td>
		<td>-</td>
		<td>U+EB40</td>
		<td>-</td>
		<td>U+FE817</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3ba"></span></td>
		<td>trumpet</td>
		<td>U+1F3BA</td>
		<td>-</td>
		<td>U+EADC</td>
		<td>U+E042</td>
		<td>U+FE818</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3bb"></span></td>
		<td>violin</td>
		<td>U+1F3BB</td>
		<td>-</td>
		<td>U+E507</td>
		<td>-</td>
		<td>U+FE819</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f3bc"></span></td>
		<td>musical score</td>
		<td>U+1F3BC</td>
		<td>U+E6FF</td>
		<td>U+EACC</td>
		<td>U+E326</td>
		<td>U+FE81A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji303d"></span></td>
		<td>part alternation mark</td>
		<td>U+303D</td>
		<td>-</td>
		<td>-</td>
		<td>U+E12C</td>
		<td>U+FE81B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4f7"></span></td>
		<td>camera</td>
		<td>U+1F4F7</td>
		<td>U+E681</td>
		<td>U+E515</td>
		<td>U+E008</td>
		<td>U+FE4EF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4f9"></span></td>
		<td>video camera</td>
		<td>U+1F4F9</td>
		<td>U+E677</td>
		<td>U+E57E</td>
		<td>U+E03D</td>
		<td>U+FE4F9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4fa"></span></td>
		<td>television</td>
		<td>U+1F4FA</td>
		<td>U+E68A</td>
		<td>U+E502</td>
		<td>U+E12A</td>
		<td>U+FE81C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4fb"></span></td>
		<td>radio</td>
		<td>U+1F4FB</td>
		<td>-</td>
		<td>U+E5B9</td>
		<td>U+E128</td>
		<td>U+FE81F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4fc"></span></td>
		<td>videocassette</td>
		<td>U+1F4FC</td>
		<td>-</td>
		<td>U+E580</td>
		<td>U+E129</td>
		<td>U+FE820</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f48b"></span></td>
		<td>kiss mark</td>
		<td>U+1F48B</td>
		<td>U+E6F9</td>
		<td>U+E4EB</td>
		<td>U+E003</td>
		<td>U+FE823</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f48d"></span></td>
		<td>ring</td>
		<td>U+1F48D</td>
		<td>U+E71B</td>
		<td>U+E514</td>
		<td>U+E034</td>
		<td>U+FE825</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f48e"></span></td>
		<td>gem stone</td>
		<td>U+1F48E</td>
		<td>U+E71B</td>
		<td>U+E514</td>
		<td>U+E035</td>
		<td>U+FE826</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f48f"></span></td>
		<td>kiss</td>
		<td>U+1F48F</td>
		<td>U+E6F9</td>
		<td>U+E5CA</td>
		<td>U+E111</td>
		<td>U+FE827</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f490"></span></td>
		<td>bouquet</td>
		<td>U+1F490</td>
		<td>-</td>
		<td>U+EA95</td>
		<td>U+E306</td>
		<td>U+FE828</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f491"></span></td>
		<td>couple with heart</td>
		<td>U+1F491</td>
		<td>U+E6ED</td>
		<td>U+EADA</td>
		<td>U+E425</td>
		<td>U+FE829</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f492"></span></td>
		<td>wedding</td>
		<td>U+1F492</td>
		<td>-</td>
		<td>U+E5BB</td>
		<td>U+E43D</td>
		<td>U+FE82A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f51e"></span></td>
		<td>no one under eighteen symbol</td>
		<td>U+1F51E</td>
		<td>-</td>
		<td>U+EA83</td>
		<td>U+E207</td>
		<td>U+FEB25</td>
	</tr>
	<tr>
		<td><span class="emoji emojia9"></span></td>
		<td>copyright sign</td>
		<td>U+00A9</td>
		<td>U+E731</td>
		<td>U+E558</td>
		<td>U+E24E</td>
		<td>U+FEB29</td>
	</tr>
	<tr>
		<td><span class="emoji emojiae"></span></td>
		<td>registered sign</td>
		<td>U+00AE</td>
		<td>U+E736</td>
		<td>U+E559</td>
		<td>U+E24F</td>
		<td>U+FEB2D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2122"></span></td>
		<td>trade mark sign</td>
		<td>U+2122</td>
		<td>U+E732</td>
		<td>U+E54E</td>
		<td>U+E537</td>
		<td>U+FEB2A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2139"></span></td>
		<td>information source</td>
		<td>U+2139</td>
		<td>-</td>
		<td>U+E533</td>
		<td>-</td>
		<td>U+FEB47</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2320e3"></span></td>
		<td>hash key</td>
		<td>U+0023 U+20E3</td>
		<td>U+E6E0</td>
		<td>U+EB84</td>
		<td>U+E210</td>
		<td>U+FE82C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3120e3"></span></td>
		<td>keycap 1</td>
		<td>U+0031 U+20E3</td>
		<td>U+E6E2</td>
		<td>U+E522</td>
		<td>U+E21C</td>
		<td>U+FE82E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3220e3"></span></td>
		<td>keycap 2</td>
		<td>U+0032 U+20E3</td>
		<td>U+E6E3</td>
		<td>U+E523</td>
		<td>U+E21D</td>
		<td>U+FE82F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3320e3"></span></td>
		<td>keycap 3</td>
		<td>U+0033 U+20E3</td>
		<td>U+E6E4</td>
		<td>U+E524</td>
		<td>U+E21E</td>
		<td>U+FE830</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3420e3"></span></td>
		<td>keycap 4</td>
		<td>U+0034 U+20E3</td>
		<td>U+E6E5</td>
		<td>U+E525</td>
		<td>U+E21F</td>
		<td>U+FE831</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3520e3"></span></td>
		<td>keycap 5</td>
		<td>U+0035 U+20E3</td>
		<td>U+E6E6</td>
		<td>U+E526</td>
		<td>U+E220</td>
		<td>U+FE832</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3620e3"></span></td>
		<td>keycap 6</td>
		<td>U+0036 U+20E3</td>
		<td>U+E6E7</td>
		<td>U+E527</td>
		<td>U+E221</td>
		<td>U+FE833</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3720e3"></span></td>
		<td>keycap 7</td>
		<td>U+0037 U+20E3</td>
		<td>U+E6E8</td>
		<td>U+E528</td>
		<td>U+E222</td>
		<td>U+FE834</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3820e3"></span></td>
		<td>keycap 8</td>
		<td>U+0038 U+20E3</td>
		<td>U+E6E9</td>
		<td>U+E529</td>
		<td>U+E223</td>
		<td>U+FE835</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3920e3"></span></td>
		<td>keycap 9</td>
		<td>U+0039 U+20E3</td>
		<td>U+E6EA</td>
		<td>U+E52A</td>
		<td>U+E224</td>
		<td>U+FE836</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3020e3"></span></td>
		<td>keycap 0</td>
		<td>U+0030 U+20E3</td>
		<td>U+E6EB</td>
		<td>U+E5AC</td>
		<td>U+E225</td>
		<td>U+FE837</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f51f"></span></td>
		<td>keycap ten</td>
		<td>U+1F51F</td>
		<td>-</td>
		<td>U+E52B</td>
		<td>-</td>
		<td>U+FE83B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4f6"></span></td>
		<td>antenna with bars</td>
		<td>U+1F4F6</td>
		<td>-</td>
		<td>U+EA84</td>
		<td>U+E20B</td>
		<td>U+FE838</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4f3"></span></td>
		<td>vibration mode</td>
		<td>U+1F4F3</td>
		<td>-</td>
		<td>U+EA90</td>
		<td>U+E250</td>
		<td>U+FE839</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4f4"></span></td>
		<td>mobile phone off</td>
		<td>U+1F4F4</td>
		<td>-</td>
		<td>U+EA91</td>
		<td>U+E251</td>
		<td>U+FE83A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f354"></span></td>
		<td>hamburger</td>
		<td>U+1F354</td>
		<td>U+E673</td>
		<td>U+E4D6</td>
		<td>U+E120</td>
		<td>U+FE960</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f359"></span></td>
		<td>rice ball</td>
		<td>U+1F359</td>
		<td>U+E749</td>
		<td>U+E4D5</td>
		<td>U+E342</td>
		<td>U+FE961</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f370"></span></td>
		<td>shortcake</td>
		<td>U+1F370</td>
		<td>U+E74A</td>
		<td>U+E4D0</td>
		<td>U+E046</td>
		<td>U+FE962</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f35c"></span></td>
		<td>steaming bowl</td>
		<td>U+1F35C</td>
		<td>U+E74C</td>
		<td>U+E5B4</td>
		<td>U+E340</td>
		<td>U+FE963</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f35e"></span></td>
		<td>bread</td>
		<td>U+1F35E</td>
		<td>U+E74D</td>
		<td>U+EAAF</td>
		<td>U+E339</td>
		<td>U+FE964</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f373"></span></td>
		<td>cooking</td>
		<td>U+1F373</td>
		<td>-</td>
		<td>U+E4D1</td>
		<td>U+E147</td>
		<td>U+FE965</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f366"></span></td>
		<td>soft ice cream</td>
		<td>U+1F366</td>
		<td>-</td>
		<td>U+EAB0</td>
		<td>U+E33A</td>
		<td>U+FE966</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f35f"></span></td>
		<td>french fries</td>
		<td>U+1F35F</td>
		<td>-</td>
		<td>U+EAB1</td>
		<td>U+E33B</td>
		<td>U+FE967</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f361"></span></td>
		<td>dango</td>
		<td>U+1F361</td>
		<td>-</td>
		<td>U+EAB2</td>
		<td>U+E33C</td>
		<td>U+FE968</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f358"></span></td>
		<td>rice cracker</td>
		<td>U+1F358</td>
		<td>-</td>
		<td>U+EAB3</td>
		<td>U+E33D</td>
		<td>U+FE969</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f35a"></span></td>
		<td>cooked rice</td>
		<td>U+1F35A</td>
		<td>U+E74C</td>
		<td>U+EAB4</td>
		<td>U+E33E</td>
		<td>U+FE96A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f35d"></span></td>
		<td>spaghetti</td>
		<td>U+1F35D</td>
		<td>-</td>
		<td>U+EAB5</td>
		<td>U+E33F</td>
		<td>U+FE96B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f35b"></span></td>
		<td>curry and rice</td>
		<td>U+1F35B</td>
		<td>-</td>
		<td>U+EAB6</td>
		<td>U+E341</td>
		<td>U+FE96C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f362"></span></td>
		<td>oden</td>
		<td>U+1F362</td>
		<td>-</td>
		<td>U+EAB7</td>
		<td>U+E343</td>
		<td>U+FE96D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f363"></span></td>
		<td>sushi</td>
		<td>U+1F363</td>
		<td>-</td>
		<td>U+EAB8</td>
		<td>U+E344</td>
		<td>U+FE96E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f371"></span></td>
		<td>bento box</td>
		<td>U+1F371</td>
		<td>-</td>
		<td>U+EABD</td>
		<td>U+E34C</td>
		<td>U+FE96F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f372"></span></td>
		<td>pot of food</td>
		<td>U+1F372</td>
		<td>-</td>
		<td>U+EABE</td>
		<td>U+E34D</td>
		<td>U+FE970</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f367"></span></td>
		<td>shaved ice</td>
		<td>U+1F367</td>
		<td>-</td>
		<td>U+EAEA</td>
		<td>U+E43F</td>
		<td>U+FE971</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f356"></span></td>
		<td>meat on bone</td>
		<td>U+1F356</td>
		<td>-</td>
		<td>U+E4C4</td>
		<td>-</td>
		<td>U+FE972</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f365"></span></td>
		<td>fish cake with swirl design</td>
		<td>U+1F365</td>
		<td>U+E643</td>
		<td>U+E4ED</td>
		<td>-</td>
		<td>U+FE973</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f360"></span></td>
		<td>roasted sweet potato</td>
		<td>U+1F360</td>
		<td>-</td>
		<td>U+EB3A</td>
		<td>-</td>
		<td>U+FE974</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f355"></span></td>
		<td>slice of pizza</td>
		<td>U+1F355</td>
		<td>-</td>
		<td>U+EB3B</td>
		<td>-</td>
		<td>U+FE975</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f357"></span></td>
		<td>poultry leg</td>
		<td>U+1F357</td>
		<td>-</td>
		<td>U+EB3C</td>
		<td>-</td>
		<td>U+FE976</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f368"></span></td>
		<td>ice cream</td>
		<td>U+1F368</td>
		<td>-</td>
		<td>U+EB4A</td>
		<td>-</td>
		<td>U+FE977</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f369"></span></td>
		<td>doughnut</td>
		<td>U+1F369</td>
		<td>-</td>
		<td>U+EB4B</td>
		<td>-</td>
		<td>U+FE978</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f36a"></span></td>
		<td>cookie</td>
		<td>U+1F36A</td>
		<td>-</td>
		<td>U+EB4C</td>
		<td>-</td>
		<td>U+FE979</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f36b"></span></td>
		<td>chocolate bar</td>
		<td>U+1F36B</td>
		<td>-</td>
		<td>U+EB4D</td>
		<td>-</td>
		<td>U+FE97A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f36c"></span></td>
		<td>candy</td>
		<td>U+1F36C</td>
		<td>-</td>
		<td>U+EB4E</td>
		<td>-</td>
		<td>U+FE97B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f36d"></span></td>
		<td>lollipop</td>
		<td>U+1F36D</td>
		<td>-</td>
		<td>U+EB4F</td>
		<td>-</td>
		<td>U+FE97C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f36e"></span></td>
		<td>custard</td>
		<td>U+1F36E</td>
		<td>-</td>
		<td>U+EB56</td>
		<td>-</td>
		<td>U+FE97D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f36f"></span></td>
		<td>honey pot</td>
		<td>U+1F36F</td>
		<td>-</td>
		<td>U+EB59</td>
		<td>-</td>
		<td>U+FE97E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f364"></span></td>
		<td>fried shrimp</td>
		<td>U+1F364</td>
		<td>-</td>
		<td>U+EB70</td>
		<td>-</td>
		<td>U+FE97F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f374"></span></td>
		<td>fork and knife</td>
		<td>U+1F374</td>
		<td>U+E66F</td>
		<td>U+E4AC</td>
		<td>U+E043</td>
		<td>U+FE980</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2615"></span></td>
		<td>hot beverage</td>
		<td>U+2615</td>
		<td>U+E670</td>
		<td>U+E597</td>
		<td>U+E045</td>
		<td>U+FE981</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f378"></span></td>
		<td>cocktail glass</td>
		<td>U+1F378</td>
		<td>U+E671</td>
		<td>U+E4C2</td>
		<td>U+E044</td>
		<td>U+FE982</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f37a"></span></td>
		<td>beer mug</td>
		<td>U+1F37A</td>
		<td>U+E672</td>
		<td>U+E4C3</td>
		<td>U+E047</td>
		<td>U+FE983</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f375"></span></td>
		<td>teacup without handle</td>
		<td>U+1F375</td>
		<td>U+E71E</td>
		<td>U+EAAE</td>
		<td>U+E338</td>
		<td>U+FE984</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f376"></span></td>
		<td>sake bottle and cup</td>
		<td>U+1F376</td>
		<td>U+E74B</td>
		<td>U+EA97</td>
		<td>U+E30B</td>
		<td>U+FE985</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f377"></span></td>
		<td>wine glass</td>
		<td>U+1F377</td>
		<td>U+E756</td>
		<td>U+E4C1</td>
		<td>U+E044</td>
		<td>U+FE986</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f37b"></span></td>
		<td>clinking beer mugs</td>
		<td>U+1F37B</td>
		<td>U+E672</td>
		<td>U+EA98</td>
		<td>U+E30C</td>
		<td>U+FE987</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f379"></span></td>
		<td>tropical drink</td>
		<td>U+1F379</td>
		<td>U+E671</td>
		<td>U+EB3E</td>
		<td>U+E044</td>
		<td>U+FE988</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2197"></span></td>
		<td>north east arrow</td>
		<td>U+2197</td>
		<td>U+E678</td>
		<td>U+E555</td>
		<td>U+E236</td>
		<td>U+FEAF0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2198"></span></td>
		<td>south east arrow</td>
		<td>U+2198</td>
		<td>U+E696</td>
		<td>U+E54D</td>
		<td>U+E238</td>
		<td>U+FEAF1</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2196"></span></td>
		<td>north west arrow</td>
		<td>U+2196</td>
		<td>U+E697</td>
		<td>U+E54C</td>
		<td>U+E237</td>
		<td>U+FEAF2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2199"></span></td>
		<td>south west arrow</td>
		<td>U+2199</td>
		<td>U+E6A5</td>
		<td>U+E556</td>
		<td>U+E239</td>
		<td>U+FEAF3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2934"></span></td>
		<td>arrow pointing rightwards then curving upwards</td>
		<td>U+2934</td>
		<td>U+E6F5</td>
		<td>U+EB2D</td>
		<td>U+E236</td>
		<td>U+FEAF4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2935"></span></td>
		<td>arrow pointing rightwards then curving downwards</td>
		<td>U+2935</td>
		<td>U+E700</td>
		<td>U+EB2E</td>
		<td>U+E238</td>
		<td>U+FEAF5</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2194"></span></td>
		<td>left right arrow</td>
		<td>U+2194</td>
		<td>U+E73C</td>
		<td>U+EB7A</td>
		<td>-</td>
		<td>U+FEAF6</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2195"></span></td>
		<td>up down arrow</td>
		<td>U+2195</td>
		<td>U+E73D</td>
		<td>U+EB7B</td>
		<td>-</td>
		<td>U+FEAF7</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2b06"></span></td>
		<td>upwards black arrow</td>
		<td>U+2B06</td>
		<td>-</td>
		<td>U+E53F</td>
		<td>U+E232</td>
		<td>U+FEAF8</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2b07"></span></td>
		<td>downwards black arrow</td>
		<td>U+2B07</td>
		<td>-</td>
		<td>U+E540</td>
		<td>U+E233</td>
		<td>U+FEAF9</td>
	</tr>
	<tr>
		<td><span class="emoji emoji27a1"></span></td>
		<td>black rightwards arrow</td>
		<td>U+27A1</td>
		<td>-</td>
		<td>U+E552</td>
		<td>U+E234</td>
		<td>U+FEAFA</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2b05"></span></td>
		<td>leftwards black arrow</td>
		<td>U+2B05</td>
		<td>-</td>
		<td>U+E553</td>
		<td>U+E235</td>
		<td>U+FEAFB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji25b6"></span></td>
		<td>black right-pointing triangle</td>
		<td>U+25B6</td>
		<td>-</td>
		<td>U+E52E</td>
		<td>U+E23A</td>
		<td>U+FEAFC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji25c0"></span></td>
		<td>black left-pointing triangle</td>
		<td>U+25C0</td>
		<td>-</td>
		<td>U+E52D</td>
		<td>U+E23B</td>
		<td>U+FEAFD</td>
	</tr>
	<tr>
		<td><span class="emoji emoji23e9"></span></td>
		<td>black right-pointing double triangle</td>
		<td>U+23E9</td>
		<td>-</td>
		<td>U+E530</td>
		<td>U+E23C</td>
		<td>U+FEAFE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji23ea"></span></td>
		<td>black left-pointing double triangle</td>
		<td>U+23EA</td>
		<td>-</td>
		<td>U+E52F</td>
		<td>U+E23D</td>
		<td>U+FEAFF</td>
	</tr>
	<tr>
		<td><span class="emoji emoji23eb"></span></td>
		<td>black up-pointing double triangle</td>
		<td>U+23EB</td>
		<td>-</td>
		<td>U+E545</td>
		<td>-</td>
		<td>U+FEB03</td>
	</tr>
	<tr>
		<td><span class="emoji emoji23ec"></span></td>
		<td>black down-pointing double triangle</td>
		<td>U+23EC</td>
		<td>-</td>
		<td>U+E544</td>
		<td>-</td>
		<td>U+FEB02</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f53a"></span></td>
		<td>up-pointing red triangle</td>
		<td>U+1F53A</td>
		<td>-</td>
		<td>U+E55A</td>
		<td>-</td>
		<td>U+FEB78</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f53b"></span></td>
		<td>down-pointing red triangle</td>
		<td>U+1F53B</td>
		<td>-</td>
		<td>U+E55B</td>
		<td>-</td>
		<td>U+FEB79</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f53c"></span></td>
		<td>up-pointing small red triangle</td>
		<td>U+1F53C</td>
		<td>-</td>
		<td>U+E543</td>
		<td>-</td>
		<td>U+FEB01</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f53d"></span></td>
		<td>down-pointing small red triangle</td>
		<td>U+1F53D</td>
		<td>-</td>
		<td>U+E542</td>
		<td>-</td>
		<td>U+FEB00</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2b55"></span></td>
		<td>heavy large circle</td>
		<td>U+2B55</td>
		<td>U+E6A0</td>
		<td>U+EAAD</td>
		<td>U+E332</td>
		<td>U+FEB44</td>
	</tr>
	<tr>
		<td><span class="emoji emoji274c"></span></td>
		<td>cross mark</td>
		<td>U+274C</td>
		<td>-</td>
		<td>U+E550</td>
		<td>U+E333</td>
		<td>U+FEB45</td>
	</tr>
	<tr>
		<td><span class="emoji emoji274e"></span></td>
		<td>negative squared cross mark</td>
		<td>U+274E</td>
		<td>-</td>
		<td>U+E551</td>
		<td>U+E333</td>
		<td>U+FEB46</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2757"></span></td>
		<td>heavy exclamation mark symbol</td>
		<td>U+2757</td>
		<td>U+E702</td>
		<td>U+E482</td>
		<td>U+E021</td>
		<td>U+FEB04</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2049"></span></td>
		<td>exclamation question mark</td>
		<td>U+2049</td>
		<td>U+E703</td>
		<td>U+EB2F</td>
		<td>-</td>
		<td>U+FEB05</td>
	</tr>
	<tr>
		<td><span class="emoji emoji203c"></span></td>
		<td>double exclamation mark</td>
		<td>U+203C</td>
		<td>U+E704</td>
		<td>U+EB30</td>
		<td>-</td>
		<td>U+FEB06</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2753"></span></td>
		<td>black question mark ornament</td>
		<td>U+2753</td>
		<td>-</td>
		<td>U+E483</td>
		<td>U+E020</td>
		<td>U+FEB09</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2754"></span></td>
		<td>white question mark ornament</td>
		<td>U+2754</td>
		<td>-</td>
		<td>U+E483</td>
		<td>U+E336</td>
		<td>U+FEB0A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2755"></span></td>
		<td>white exclamation mark ornament</td>
		<td>U+2755</td>
		<td>U+E702</td>
		<td>U+E482</td>
		<td>U+E337</td>
		<td>U+FEB0B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3030"></span></td>
		<td>wavy dash</td>
		<td>U+3030</td>
		<td>U+E709</td>
		<td>-</td>
		<td>-</td>
		<td>U+FEB07</td>
	</tr>
	<tr>
		<td><span class="emoji emoji27b0"></span></td>
		<td>curly loop</td>
		<td>U+27B0</td>
		<td>U+E70A</td>
		<td>U+EB31</td>
		<td>-</td>
		<td>U+FEB08</td>
	</tr>
	<tr>
		<td><span class="emoji emoji27bf"></span></td>
		<td>double curly loop</td>
		<td>U+27BF</td>
		<td>U+E6DF</td>
		<td>-</td>
		<td>U+E211</td>
		<td>U+FE82B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2764"></span></td>
		<td>heavy black heart</td>
		<td>U+2764</td>
		<td>U+E6EC</td>
		<td>U+E595</td>
		<td>U+E022</td>
		<td>U+FEB0C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f493"></span></td>
		<td>beating heart</td>
		<td>U+1F493</td>
		<td>U+E6ED</td>
		<td>U+EB75</td>
		<td>U+E327</td>
		<td>U+FEB0D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f494"></span></td>
		<td>broken heart</td>
		<td>U+1F494</td>
		<td>U+E6EE</td>
		<td>U+E477</td>
		<td>U+E023</td>
		<td>U+FEB0E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f495"></span></td>
		<td>two hearts</td>
		<td>U+1F495</td>
		<td>U+E6EF</td>
		<td>U+E478</td>
		<td>U+E327</td>
		<td>U+FEB0F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f496"></span></td>
		<td>sparkling heart</td>
		<td>U+1F496</td>
		<td>U+E6EC</td>
		<td>U+EAA6</td>
		<td>U+E327</td>
		<td>U+FEB10</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f497"></span></td>
		<td>growing heart</td>
		<td>U+1F497</td>
		<td>U+E6ED</td>
		<td>U+EB75</td>
		<td>U+E328</td>
		<td>U+FEB11</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f498"></span></td>
		<td>heart with arrow</td>
		<td>U+1F498</td>
		<td>U+E6EC</td>
		<td>U+E4EA</td>
		<td>U+E329</td>
		<td>U+FEB12</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f499"></span></td>
		<td>blue heart</td>
		<td>U+1F499</td>
		<td>U+E6EC</td>
		<td>U+EAA7</td>
		<td>U+E32A</td>
		<td>U+FEB13</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f49a"></span></td>
		<td>green heart</td>
		<td>U+1F49A</td>
		<td>U+E6EC</td>
		<td>U+EAA8</td>
		<td>U+E32B</td>
		<td>U+FEB14</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f49b"></span></td>
		<td>yellow heart</td>
		<td>U+1F49B</td>
		<td>U+E6EC</td>
		<td>U+EAA9</td>
		<td>U+E32C</td>
		<td>U+FEB15</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f49c"></span></td>
		<td>purple heart</td>
		<td>U+1F49C</td>
		<td>U+E6EC</td>
		<td>U+EAAA</td>
		<td>U+E32D</td>
		<td>U+FEB16</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f49d"></span></td>
		<td>heart with ribbon</td>
		<td>U+1F49D</td>
		<td>U+E6EC</td>
		<td>U+EB54</td>
		<td>U+E437</td>
		<td>U+FEB17</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f49e"></span></td>
		<td>revolving hearts</td>
		<td>U+1F49E</td>
		<td>U+E6ED</td>
		<td>U+E5AF</td>
		<td>U+E327</td>
		<td>U+FEB18</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f49f"></span></td>
		<td>heart decoration</td>
		<td>U+1F49F</td>
		<td>U+E6F8</td>
		<td>U+E595</td>
		<td>U+E204</td>
		<td>U+FEB19</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2665"></span></td>
		<td>black heart suit</td>
		<td>U+2665</td>
		<td>U+E68D</td>
		<td>U+EAA5</td>
		<td>U+E20C</td>
		<td>U+FEB1A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2660"></span></td>
		<td>black spade suit</td>
		<td>U+2660</td>
		<td>U+E68E</td>
		<td>U+E5A1</td>
		<td>U+E20E</td>
		<td>U+FEB1B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2666"></span></td>
		<td>black diamond suit</td>
		<td>U+2666</td>
		<td>U+E68F</td>
		<td>U+E5A2</td>
		<td>U+E20D</td>
		<td>U+FEB1C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2663"></span></td>
		<td>black club suit</td>
		<td>U+2663</td>
		<td>U+E690</td>
		<td>U+E5A3</td>
		<td>U+E20F</td>
		<td>U+FEB1D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6ac"></span></td>
		<td>smoking symbol</td>
		<td>U+1F6AC</td>
		<td>U+E67F</td>
		<td>U+E47D</td>
		<td>U+E30E</td>
		<td>U+FEB1E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6ad"></span></td>
		<td>no smoking symbol</td>
		<td>U+1F6AD</td>
		<td>U+E680</td>
		<td>U+E47E</td>
		<td>U+E208</td>
		<td>U+FEB1F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji267f"></span></td>
		<td>wheelchair symbol</td>
		<td>U+267F</td>
		<td>U+E69B</td>
		<td>U+E47F</td>
		<td>U+E20A</td>
		<td>U+FEB20</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6a9"></span></td>
		<td>triangular flag on post</td>
		<td>U+1F6A9</td>
		<td>U+E6DE</td>
		<td>U+EB2C</td>
		<td>-</td>
		<td>U+FEB22</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26a0"></span></td>
		<td>warning sign</td>
		<td>U+26A0</td>
		<td>U+E737</td>
		<td>U+E481</td>
		<td>U+E252</td>
		<td>U+FEB23</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26d4"></span></td>
		<td>no entry</td>
		<td>U+26D4</td>
		<td>U+E72F</td>
		<td>U+E484</td>
		<td>U+E137</td>
		<td>U+FEB26</td>
	</tr>
	<tr>
		<td><span class="emoji emoji267b"></span></td>
		<td>black universal recycling symbol</td>
		<td>U+267B</td>
		<td>U+E735</td>
		<td>U+EB79</td>
		<td>-</td>
		<td>U+FEB2C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6b2"></span></td>
		<td>bicycle</td>
		<td>U+1F6B2</td>
		<td>U+E71D</td>
		<td>U+E4AE</td>
		<td>U+E136</td>
		<td>U+FE7EB</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6b6"></span></td>
		<td>pedestrian</td>
		<td>U+1F6B6</td>
		<td>U+E733</td>
		<td>U+EB72</td>
		<td>U+E201</td>
		<td>U+FE7F0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6b9"></span></td>
		<td>mens symbol</td>
		<td>U+1F6B9</td>
		<td>-</td>
		<td>-</td>
		<td>U+E138</td>
		<td>U+FEB33</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6ba"></span></td>
		<td>womens symbol</td>
		<td>U+1F6BA</td>
		<td>-</td>
		<td>-</td>
		<td>U+E139</td>
		<td>U+FEB34</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6c0"></span></td>
		<td>bath</td>
		<td>U+1F6C0</td>
		<td>U+E6F7</td>
		<td>U+E5D8</td>
		<td>U+E13F</td>
		<td>U+FE505</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6bb"></span></td>
		<td>restroom</td>
		<td>U+1F6BB</td>
		<td>U+E66E</td>
		<td>U+E4A5</td>
		<td>U+E151</td>
		<td>U+FE506</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6bd"></span></td>
		<td>toilet</td>
		<td>U+1F6BD</td>
		<td>U+E66E</td>
		<td>U+E4A5</td>
		<td>U+E140</td>
		<td>U+FE507</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6be"></span></td>
		<td>water closet</td>
		<td>U+1F6BE</td>
		<td>U+E66E</td>
		<td>U+E4A5</td>
		<td>U+E309</td>
		<td>U+FE508</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6bc"></span></td>
		<td>baby symbol</td>
		<td>U+1F6BC</td>
		<td>-</td>
		<td>U+EB18</td>
		<td>U+E13A</td>
		<td>U+FEB35</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6aa"></span></td>
		<td>door</td>
		<td>U+1F6AA</td>
		<td>U+E714</td>
		<td>-</td>
		<td>-</td>
		<td>U+FE4F3</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f6ab"></span></td>
		<td>no entry sign</td>
		<td>U+1F6AB</td>
		<td>U+E738</td>
		<td>U+E541</td>
		<td>-</td>
		<td>U+FEB48</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2714"></span></td>
		<td>heavy check mark</td>
		<td>U+2714</td>
		<td>-</td>
		<td>U+E557</td>
		<td>-</td>
		<td>U+FEB49</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f191"></span></td>
		<td>squared cl</td>
		<td>U+1F191</td>
		<td>U+E6DB</td>
		<td>U+E5AB</td>
		<td>-</td>
		<td>U+FEB84</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f192"></span></td>
		<td>squared cool</td>
		<td>U+1F192</td>
		<td>-</td>
		<td>U+EA85</td>
		<td>U+E214</td>
		<td>U+FEB38</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f193"></span></td>
		<td>squared free</td>
		<td>U+1F193</td>
		<td>U+E6D7</td>
		<td>U+E578</td>
		<td>-</td>
		<td>U+FEB21</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f194"></span></td>
		<td>squared id</td>
		<td>U+1F194</td>
		<td>U+E6D8</td>
		<td>U+EA88</td>
		<td>U+E229</td>
		<td>U+FEB81</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f195"></span></td>
		<td>squared new</td>
		<td>U+1F195</td>
		<td>U+E6DD</td>
		<td>U+E5B5</td>
		<td>U+E212</td>
		<td>U+FEB36</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f196"></span></td>
		<td>squared ng</td>
		<td>U+1F196</td>
		<td>U+E72F</td>
		<td>-</td>
		<td>-</td>
		<td>U+FEB28</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f197"></span></td>
		<td>squared ok</td>
		<td>U+1F197</td>
		<td>U+E70B</td>
		<td>U+E5AD</td>
		<td>U+E24D</td>
		<td>U+FEB27</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f198"></span></td>
		<td>squared sos</td>
		<td>U+1F198</td>
		<td>-</td>
		<td>U+E4E8</td>
		<td>-</td>
		<td>U+FEB4F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f199"></span></td>
		<td>squared up with exclamation mark</td>
		<td>U+1F199</td>
		<td>-</td>
		<td>U+E50F</td>
		<td>U+E213</td>
		<td>U+FEB37</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f19a"></span></td>
		<td>squared vs</td>
		<td>U+1F19A</td>
		<td>-</td>
		<td>U+E5D2</td>
		<td>U+E12E</td>
		<td>U+FEB32</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f201"></span></td>
		<td>squared katakana koko</td>
		<td>U+1F201</td>
		<td>-</td>
		<td>-</td>
		<td>U+E203</td>
		<td>U+FEB24</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f202"></span></td>
		<td>squared katakana sa</td>
		<td>U+1F202</td>
		<td>-</td>
		<td>U+EA87</td>
		<td>U+E228</td>
		<td>U+FEB3F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f232"></span></td>
		<td>squared cjk unified ideograph-7981</td>
		<td>U+1F232</td>
		<td>U+E738</td>
		<td>-</td>
		<td>-</td>
		<td>U+FEB2E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f233"></span></td>
		<td>squared cjk unified ideograph-7a7a</td>
		<td>U+1F233</td>
		<td>U+E739</td>
		<td>U+EA8A</td>
		<td>U+E22B</td>
		<td>U+FEB2F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f234"></span></td>
		<td>squared cjk unified ideograph-5408</td>
		<td>U+1F234</td>
		<td>U+E73A</td>
		<td>-</td>
		<td>-</td>
		<td>U+FEB30</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f235"></span></td>
		<td>squared cjk unified ideograph-6e80</td>
		<td>U+1F235</td>
		<td>U+E73B</td>
		<td>U+EA89</td>
		<td>U+E22A</td>
		<td>U+FEB31</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f236"></span></td>
		<td>squared cjk unified ideograph-6709</td>
		<td>U+1F236</td>
		<td>-</td>
		<td>-</td>
		<td>U+E215</td>
		<td>U+FEB39</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f21a"></span></td>
		<td>squared cjk unified ideograph-7121</td>
		<td>U+1F21A</td>
		<td>-</td>
		<td>-</td>
		<td>U+E216</td>
		<td>U+FEB3A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f237"></span></td>
		<td>squared cjk unified ideograph-6708</td>
		<td>U+1F237</td>
		<td>-</td>
		<td>-</td>
		<td>U+E217</td>
		<td>U+FEB3B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f238"></span></td>
		<td>squared cjk unified ideograph-7533</td>
		<td>U+1F238</td>
		<td>-</td>
		<td>-</td>
		<td>U+E218</td>
		<td>U+FEB3C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f239"></span></td>
		<td>squared cjk unified ideograph-5272</td>
		<td>U+1F239</td>
		<td>-</td>
		<td>U+EA86</td>
		<td>U+E227</td>
		<td>U+FEB3E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f22f"></span></td>
		<td>squared cjk unified ideograph-6307</td>
		<td>U+1F22F</td>
		<td>-</td>
		<td>U+EA8B</td>
		<td>U+E22C</td>
		<td>U+FEB40</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f23a"></span></td>
		<td>squared cjk unified ideograph-55b6</td>
		<td>U+1F23A</td>
		<td>-</td>
		<td>U+EA8C</td>
		<td>U+E22D</td>
		<td>U+FEB41</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3299"></span></td>
		<td>circled ideograph secret</td>
		<td>U+3299</td>
		<td>U+E734</td>
		<td>U+E4F1</td>
		<td>U+E315</td>
		<td>U+FEB2B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji3297"></span></td>
		<td>circled ideograph congratulation</td>
		<td>U+3297</td>
		<td>-</td>
		<td>U+EA99</td>
		<td>U+E30D</td>
		<td>U+FEB43</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f250"></span></td>
		<td>circled ideograph advantage</td>
		<td>U+1F250</td>
		<td>-</td>
		<td>U+E4F7</td>
		<td>U+E226</td>
		<td>U+FEB3D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f251"></span></td>
		<td>circled ideograph accept</td>
		<td>U+1F251</td>
		<td>-</td>
		<td>U+EB01</td>
		<td>-</td>
		<td>U+FEB50</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2795"></span></td>
		<td>heavy plus sign</td>
		<td>U+2795</td>
		<td>-</td>
		<td>U+E53C</td>
		<td>-</td>
		<td>U+FEB51</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2796"></span></td>
		<td>heavy minus sign</td>
		<td>U+2796</td>
		<td>-</td>
		<td>U+E53D</td>
		<td>-</td>
		<td>U+FEB52</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2716"></span></td>
		<td>heavy multiplication x</td>
		<td>U+2716</td>
		<td>-</td>
		<td>U+E54F</td>
		<td>U+E333</td>
		<td>U+FEB53</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2797"></span></td>
		<td>heavy division sign</td>
		<td>U+2797</td>
		<td>-</td>
		<td>U+E554</td>
		<td>-</td>
		<td>U+FEB54</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4a0"></span></td>
		<td>diamond shape with a dot inside</td>
		<td>U+1F4A0</td>
		<td>U+E6F8</td>
		<td>-</td>
		<td>-</td>
		<td>U+FEB55</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4a1"></span></td>
		<td>electric light bulb</td>
		<td>U+1F4A1</td>
		<td>U+E6FB</td>
		<td>U+E476</td>
		<td>U+E10F</td>
		<td>U+FEB56</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4a2"></span></td>
		<td>anger symbol</td>
		<td>U+1F4A2</td>
		<td>U+E6FC</td>
		<td>U+E4E5</td>
		<td>U+E334</td>
		<td>U+FEB57</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4a3"></span></td>
		<td>bomb</td>
		<td>U+1F4A3</td>
		<td>U+E6FE</td>
		<td>U+E47A</td>
		<td>U+E311</td>
		<td>U+FEB58</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4a4"></span></td>
		<td>sleeping symbol</td>
		<td>U+1F4A4</td>
		<td>U+E701</td>
		<td>U+E475</td>
		<td>U+E13C</td>
		<td>U+FEB59</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4a5"></span></td>
		<td>collision symbol</td>
		<td>U+1F4A5</td>
		<td>U+E705</td>
		<td>U+E5B0</td>
		<td>-</td>
		<td>U+FEB5A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4a6"></span></td>
		<td>splashing sweat symbol</td>
		<td>U+1F4A6</td>
		<td>U+E706</td>
		<td>U+E5B1</td>
		<td>U+E331</td>
		<td>U+FEB5B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4a7"></span></td>
		<td>droplet</td>
		<td>U+1F4A7</td>
		<td>U+E707</td>
		<td>U+E4E6</td>
		<td>U+E331</td>
		<td>U+FEB5C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4a8"></span></td>
		<td>dash symbol</td>
		<td>U+1F4A8</td>
		<td>U+E708</td>
		<td>U+E4F4</td>
		<td>U+E330</td>
		<td>U+FEB5D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4a9"></span></td>
		<td>pile of poo</td>
		<td>U+1F4A9</td>
		<td>-</td>
		<td>U+E4F5</td>
		<td>U+E05A</td>
		<td>U+FE4F4</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4aa"></span></td>
		<td>flexed biceps</td>
		<td>U+1F4AA</td>
		<td>-</td>
		<td>U+E4E9</td>
		<td>U+E14C</td>
		<td>U+FEB5E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4ab"></span></td>
		<td>dizzy symbol</td>
		<td>U+1F4AB</td>
		<td>-</td>
		<td>U+EB5C</td>
		<td>U+E407</td>
		<td>U+FEB5F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4ac"></span></td>
		<td>speech balloon</td>
		<td>U+1F4AC</td>
		<td>-</td>
		<td>U+E4FD</td>
		<td>-</td>
		<td>U+FE532</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2728"></span></td>
		<td>sparkles</td>
		<td>U+2728</td>
		<td>U+E6FA</td>
		<td>U+EAAB</td>
		<td>U+E32E</td>
		<td>U+FEB60</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2734"></span></td>
		<td>eight pointed black star</td>
		<td>U+2734</td>
		<td>U+E6F8</td>
		<td>U+E479</td>
		<td>U+E205</td>
		<td>U+FEB61</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2733"></span></td>
		<td>eight spoked asterisk</td>
		<td>U+2733</td>
		<td>U+E6F8</td>
		<td>U+E53E</td>
		<td>U+E206</td>
		<td>U+FEB62</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26aa"></span></td>
		<td>medium white circle</td>
		<td>U+26AA</td>
		<td>U+E69C</td>
		<td>U+E53A</td>
		<td>U+E219</td>
		<td>U+FEB65</td>
	</tr>
	<tr>
		<td><span class="emoji emoji26ab"></span></td>
		<td>medium black circle</td>
		<td>U+26AB</td>
		<td>U+E69C</td>
		<td>U+E53B</td>
		<td>U+E219</td>
		<td>U+FEB66</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f534"></span></td>
		<td>large red circle</td>
		<td>U+1F534</td>
		<td>U+E69C</td>
		<td>U+E54A</td>
		<td>U+E219</td>
		<td>U+FEB63</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f535"></span></td>
		<td>large blue circle</td>
		<td>U+1F535</td>
		<td>U+E69C</td>
		<td>U+E54B</td>
		<td>U+E21A</td>
		<td>U+FEB64</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f532"></span></td>
		<td>black square button</td>
		<td>U+1F532</td>
		<td>U+E69C</td>
		<td>U+E54B</td>
		<td>U+E21A</td>
		<td>U+FEB64</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f533"></span></td>
		<td>white square button</td>
		<td>U+1F533</td>
		<td>U+E69C</td>
		<td>U+E54B</td>
		<td>U+E21B</td>
		<td>U+FEB67</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2b50"></span></td>
		<td>white medium star</td>
		<td>U+2B50</td>
		<td>-</td>
		<td>U+E48B</td>
		<td>U+E32F</td>
		<td>U+FEB68</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2b1c"></span></td>
		<td>white large square</td>
		<td>U+2B1C</td>
		<td>-</td>
		<td>U+E548</td>
		<td>U+E21B</td>
		<td>U+FEB6B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2b1b"></span></td>
		<td>black large square</td>
		<td>U+2B1B</td>
		<td>-</td>
		<td>U+E549</td>
		<td>U+E21A</td>
		<td>U+FEB6C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji25ab"></span></td>
		<td>white small square</td>
		<td>U+25AB</td>
		<td>-</td>
		<td>U+E531</td>
		<td>U+E21B</td>
		<td>U+FEB6D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji25aa"></span></td>
		<td>black small square</td>
		<td>U+25AA</td>
		<td>-</td>
		<td>U+E532</td>
		<td>U+E21A</td>
		<td>U+FEB6E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji25fd"></span></td>
		<td>white medium small square</td>
		<td>U+25FD</td>
		<td>-</td>
		<td>U+E534</td>
		<td>U+E21B</td>
		<td>U+FEB6F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji25fe"></span></td>
		<td>black medium small square</td>
		<td>U+25FE</td>
		<td>-</td>
		<td>U+E535</td>
		<td>U+E21A</td>
		<td>U+FEB70</td>
	</tr>
	<tr>
		<td><span class="emoji emoji25fb"></span></td>
		<td>white medium square</td>
		<td>U+25FB</td>
		<td>-</td>
		<td>U+E538</td>
		<td>U+E21B</td>
		<td>U+FEB71</td>
	</tr>
	<tr>
		<td><span class="emoji emoji25fc"></span></td>
		<td>black medium square</td>
		<td>U+25FC</td>
		<td>-</td>
		<td>U+E539</td>
		<td>U+E21A</td>
		<td>U+FEB72</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f536"></span></td>
		<td>large orange diamond</td>
		<td>U+1F536</td>
		<td>-</td>
		<td>U+E546</td>
		<td>U+E21B</td>
		<td>U+FEB73</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f537"></span></td>
		<td>large blue diamond</td>
		<td>U+1F537</td>
		<td>-</td>
		<td>U+E547</td>
		<td>U+E21B</td>
		<td>U+FEB74</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f538"></span></td>
		<td>small orange diamond</td>
		<td>U+1F538</td>
		<td>-</td>
		<td>U+E536</td>
		<td>U+E21B</td>
		<td>U+FEB75</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f539"></span></td>
		<td>small blue diamond</td>
		<td>U+1F539</td>
		<td>-</td>
		<td>U+E537</td>
		<td>U+E21B</td>
		<td>U+FEB76</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2747"></span></td>
		<td>sparkle</td>
		<td>U+2747</td>
		<td>U+E6FA</td>
		<td>U+E46C</td>
		<td>U+E32E</td>
		<td>U+FEB77</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4ae"></span></td>
		<td>white flower</td>
		<td>U+1F4AE</td>
		<td>-</td>
		<td>U+E4F0</td>
		<td>-</td>
		<td>U+FEB7A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f4af"></span></td>
		<td>hundred points symbol</td>
		<td>U+1F4AF</td>
		<td>-</td>
		<td>U+E4F2</td>
		<td>-</td>
		<td>U+FEB7B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji21a9"></span></td>
		<td>leftwards arrow with hook</td>
		<td>U+21A9</td>
		<td>U+E6DA</td>
		<td>U+E55D</td>
		<td>-</td>
		<td>U+FEB83</td>
	</tr>
	<tr>
		<td><span class="emoji emoji21aa"></span></td>
		<td>rightwards arrow with hook</td>
		<td>U+21AA</td>
		<td>-</td>
		<td>U+E55C</td>
		<td>-</td>
		<td>U+FEB88</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f503"></span></td>
		<td>clockwise downwards and upwards open circle arrows</td>
		<td>U+1F503</td>
		<td>U+E735</td>
		<td>U+EB0D</td>
		<td>-</td>
		<td>U+FEB91</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f50a"></span></td>
		<td>speaker with three sound waves</td>
		<td>U+1F50A</td>
		<td>-</td>
		<td>U+E511</td>
		<td>U+E141</td>
		<td>U+FE821</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f50b"></span></td>
		<td>battery</td>
		<td>U+1F50B</td>
		<td>-</td>
		<td>U+E584</td>
		<td>-</td>
		<td>U+FE4FC</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f50c"></span></td>
		<td>electric plug</td>
		<td>U+1F50C</td>
		<td>-</td>
		<td>U+E589</td>
		<td>-</td>
		<td>U+FE4FE</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f50d"></span></td>
		<td>left-pointing magnifying glass</td>
		<td>U+1F50D</td>
		<td>U+E6DC</td>
		<td>U+E518</td>
		<td>U+E114</td>
		<td>U+FEB85</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f50e"></span></td>
		<td>right-pointing magnifying glass</td>
		<td>U+1F50E</td>
		<td>U+E6DC</td>
		<td>U+EB05</td>
		<td>U+E114</td>
		<td>U+FEB8D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f512"></span></td>
		<td>lock</td>
		<td>U+1F512</td>
		<td>U+E6D9</td>
		<td>U+E51C</td>
		<td>U+E144</td>
		<td>U+FEB86</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f513"></span></td>
		<td>open lock</td>
		<td>U+1F513</td>
		<td>U+E6D9</td>
		<td>U+E51C</td>
		<td>U+E145</td>
		<td>U+FEB87</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f50f"></span></td>
		<td>lock with ink pen</td>
		<td>U+1F50F</td>
		<td>U+E6D9</td>
		<td>U+EB0C</td>
		<td>U+E144</td>
		<td>U+FEB90</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f510"></span></td>
		<td>closed lock with key</td>
		<td>U+1F510</td>
		<td>U+E6D9</td>
		<td>U+EAFC</td>
		<td>U+E144</td>
		<td>U+FEB8A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f511"></span></td>
		<td>key</td>
		<td>U+1F511</td>
		<td>U+E6D9</td>
		<td>U+E519</td>
		<td>U+E03F</td>
		<td>U+FEB82</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f514"></span></td>
		<td>bell</td>
		<td>U+1F514</td>
		<td>U+E713</td>
		<td>U+E512</td>
		<td>U+E325</td>
		<td>U+FE4F2</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2611"></span></td>
		<td>ballot box with check</td>
		<td>U+2611</td>
		<td>-</td>
		<td>U+EB02</td>
		<td>-</td>
		<td>U+FEB8B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f518"></span></td>
		<td>radio button</td>
		<td>U+1F518</td>
		<td>-</td>
		<td>U+EB04</td>
		<td>-</td>
		<td>U+FEB8C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f516"></span></td>
		<td>bookmark</td>
		<td>U+1F516</td>
		<td>-</td>
		<td>U+EB07</td>
		<td>-</td>
		<td>U+FEB8F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f517"></span></td>
		<td>link symbol</td>
		<td>U+1F517</td>
		<td>-</td>
		<td>U+E58A</td>
		<td>-</td>
		<td>U+FEB4B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f519"></span></td>
		<td>back with leftwards arrow above</td>
		<td>U+1F519</td>
		<td>-</td>
		<td>U+EB06</td>
		<td>U+E235</td>
		<td>U+FEB8E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f51a"></span></td>
		<td>end with leftwards arrow above</td>
		<td>U+1F51A</td>
		<td>U+E6B9</td>
		<td>-</td>
		<td>-</td>
		<td>U+FE01A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f51b"></span></td>
		<td>on with exclamation mark with left right arrow above</td>
		<td>U+1F51B</td>
		<td>U+E6B8</td>
		<td>-</td>
		<td>-</td>
		<td>U+FE019</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f51c"></span></td>
		<td>soon with rightwards arrow above</td>
		<td>U+1F51C</td>
		<td>U+E6B7</td>
		<td>-</td>
		<td>-</td>
		<td>U+FE018</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f51d"></span></td>
		<td>top with upwards arrow above</td>
		<td>U+1F51D</td>
		<td>-</td>
		<td>-</td>
		<td>U+E24C</td>
		<td>U+FEB42</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2003"></span></td>
		<td>em space</td>
		<td>U+2003</td>
		<td>-</td>
		<td>U+E58C</td>
		<td>-</td>
		<td>U+FEB4C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2002"></span></td>
		<td>en space</td>
		<td>U+2002</td>
		<td>-</td>
		<td>U+E58D</td>
		<td>-</td>
		<td>U+FEB4D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2005"></span></td>
		<td>four-per-em space</td>
		<td>U+2005</td>
		<td>-</td>
		<td>U+E58E</td>
		<td>-</td>
		<td>U+FEB4E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji2705"></span></td>
		<td>white heavy check mark</td>
		<td>U+2705</td>
		<td>-</td>
		<td>U+E55E</td>
		<td>-</td>
		<td>U+FEB4A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji270a"></span></td>
		<td>raised fist</td>
		<td>U+270A</td>
		<td>U+E693</td>
		<td>U+EB83</td>
		<td>U+E010</td>
		<td>U+FEB93</td>
	</tr>
	<tr>
		<td><span class="emoji emoji270b"></span></td>
		<td>raised hand</td>
		<td>U+270B</td>
		<td>U+E695</td>
		<td>U+E5A7</td>
		<td>U+E012</td>
		<td>U+FEB95</td>
	</tr>
	<tr>
		<td><span class="emoji emoji270c"></span></td>
		<td>victory hand</td>
		<td>U+270C</td>
		<td>U+E694</td>
		<td>U+E5A6</td>
		<td>U+E011</td>
		<td>U+FEB94</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f44a"></span></td>
		<td>fisted hand sign</td>
		<td>U+1F44A</td>
		<td>U+E6FD</td>
		<td>U+E4F3</td>
		<td>U+E00D</td>
		<td>U+FEB96</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f44d"></span></td>
		<td>thumbs up sign</td>
		<td>U+1F44D</td>
		<td>U+E727</td>
		<td>U+E4F9</td>
		<td>U+E00E</td>
		<td>U+FEB97</td>
	</tr>
	<tr>
		<td><span class="emoji emoji261d"></span></td>
		<td>white up pointing index</td>
		<td>U+261D</td>
		<td>-</td>
		<td>U+E4F6</td>
		<td>U+E00F</td>
		<td>U+FEB98</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f446"></span></td>
		<td>white up pointing backhand index</td>
		<td>U+1F446</td>
		<td>-</td>
		<td>U+EA8D</td>
		<td>U+E22E</td>
		<td>U+FEB99</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f447"></span></td>
		<td>white down pointing backhand index</td>
		<td>U+1F447</td>
		<td>-</td>
		<td>U+EA8E</td>
		<td>U+E22F</td>
		<td>U+FEB9A</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f448"></span></td>
		<td>white left pointing backhand index</td>
		<td>U+1F448</td>
		<td>-</td>
		<td>U+E4FF</td>
		<td>U+E230</td>
		<td>U+FEB9B</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f449"></span></td>
		<td>white right pointing backhand index</td>
		<td>U+1F449</td>
		<td>-</td>
		<td>U+E500</td>
		<td>U+E231</td>
		<td>U+FEB9C</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f44b"></span></td>
		<td>waving hand sign</td>
		<td>U+1F44B</td>
		<td>U+E695</td>
		<td>U+EAD6</td>
		<td>U+E41E</td>
		<td>U+FEB9D</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f44f"></span></td>
		<td>clapping hands sign</td>
		<td>U+1F44F</td>
		<td>-</td>
		<td>U+EAD3</td>
		<td>U+E41F</td>
		<td>U+FEB9E</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f44c"></span></td>
		<td>ok hand sign</td>
		<td>U+1F44C</td>
		<td>U+E70B</td>
		<td>U+EAD4</td>
		<td>U+E420</td>
		<td>U+FEB9F</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f44e"></span></td>
		<td>thumbs down sign</td>
		<td>U+1F44E</td>
		<td>U+E700</td>
		<td>U+EAD5</td>
		<td>U+E421</td>
		<td>U+FEBA0</td>
	</tr>
	<tr>
		<td><span class="emoji emoji1f450"></span></td>
		<td>open hands sign</td>
		<td>U+1F450</td>
		<td>U+E695</td>
		<td>U+EAD6</td>
		<td>U+E422</td>
		<td>U+FEBA1</td>
	</tr>
	</tbody>
</table>


<?
	include('../../foot.txt');
?>
