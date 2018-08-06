<!DOCTYPE html>
<!--STATUS OK-->
<html>
<?php
$keyword = $_POST["kw"];
$page = 1;
$pageSize = 20;
$data=file_get_contents('http://www.google.com/search?q='.$keyword.'+site%3Abihu.com&safe=off&ie=utf8&num='.$pageSize.'&start='.($page*$pageSize-$pageSize));
//echo $data;
preg_match_all('@<div\s*class="g">\s*<h3\s*class="r">\s*<a[^<>]*href="[^<>]*?q=(https://[a-zA-Z.]*bihu.com/[^<>]*)&amp;sa[^<>]*>(.*)</a>\s*</h3>[\s\S]*<span\s*class="st">([\s\S]*)</span>@isU', $data, $matches);
$itemsCount = count($matches[1]);
?>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>百度百家--8BIHU</title>
    <script src="images/tangram-1.5.2.2.js" type="text/javascript"></script>
    <script src="images/clickMonitor.js"></script>
    <script type="text/javascript" src="images/usermonitor.js"></script>
    <script src="images/baiduTemplate.js"></script>
    <script>
        var on = baidu.event.on; Fe = baidu;
        var PAGE_DATA = {
            page: 1,
            pagesize: 20,
            labelid: '11665',
            artical_list_num: 20
        }
    </script>
    <link href="images/common.css" type="text/css" rel="stylesheet" />
    <link href="images/zimeiti.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div id="header" alog-group="log-header">
        <div class="header-content">
            <div id="menu">
                <a href="http://www.thinkcss.com">8BIHU</a>
                <!-- <a href="#" >作家列表</a> -->
            </div>
            <!-- <div id="usrbar"><a href="#">百度新闻</a>|<a href="#">百度首页</a></div> -->
            <div class="top-main">
                <a href="#">
                    <img src="images/logo.png" />
                </a>
            </div>
        </div>
    </div>
    <p align="center">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- n728 -->
        <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-6057706211967641"
            data-ad-slot="8787106124"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </p>

    <div id="body" class="clearfix">
        <div class="l-main-col">
            <div id="page_title">
                <h1>余额宝</h1>
            </div>
            <div class="feeds" id="feeds">
            <?php
            for ($j = 0; $j < $itemsCount; $j++) {?>
                <div class="feeds-item">
                    <h3>
                        <a href="<?php echo $matches[1][$j]; ?>"><?php echo $matches[2][$j]; ?></a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-text"><?php echo $matches[3][$j]; ?>
                            <a href="<?php echo $matches[1][$j]; ?>" class="feeds-item-more" mon="col=13&pn=1">[详细]</a>
                        </p>
                    </div>
                </div>
            <?php }
            ?>
                <div class="feeds-item">
                    <h3>
                        <a href="#">李克强的“互联网金融”，意味深长</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <!-- <p class="feeds-item-pic">
                    <a href="#" class="feeds-item-more" mon="col=13&pn=1&a=12">
                        <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg"/>
                    </a>
                </p> -->
                        <p class="feeds-item-text">两会上，李克强总理在政府工作报告当中提到了互联网金融，可以从5个大的角度来解读这其中的意味。CEO们都看了。
                            <a href="#" class="feeds-item-more" mon="col=13&pn=1">[详细]</a>
                        </p>
                        <!-- <p class="feeds-item-info">
            <span>2014-03-05 15:12</span><span>阅读（1553）</span>
            <span><a href="javascript:void(0)" class="share-article">分享</a></span>
                                            <a href="#">李克强</a>|
                                                            <a href="#">两会</a>|
                                                            <a href="#">余额宝</a>
                                    </p> -->
                    </div>
                </div>
                <!-- <div class="feeds-item" id="item-6065">
                    <h3>
                        <a href="#">央行“不会取缔余额宝”是句笑谈</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=2&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">央行不会取缔余额宝就是一句笑谈，不必喜大普奔，这与一个法院院长对一个没有违法的公民说“法院不会判你有罪”类似。实际上，央行高官所的将会不会“加强监管”才另有深意。
                            <a href="#" class="feeds-item-more"
                                mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-03-05 11:40</span>
                            <span>阅读（2万）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">央行</a>|
                            <a href="#">取缔</a>|
                            <a href="#">余额宝</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5418">
                    <h3>
                        <a href="#">余额宝爆火天弘却亏损？听高管说</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=3&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">天弘基金副总经理周晓明解释其中可能的原因：1，天弘基金对IT系统投入巨大；2，余额宝不如想象中那么赚钱。
                            <a href="#" class="feeds-item-more" mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-27 18:12</span>
                            <span>阅读（24万）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>|
                            <a href="#">阿里</a>|
                            <a href="#">支付宝</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5343">
                    <h3>
                        <a href="#">从余额宝事件看监管的笨拙</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=4&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">作为投资品种的余额宝，在销售时淡化风险提示，却有一股默默的公关力量私底下推动一种口径，将其与存款等同起来，这本身就是违反金融法规的事情，与守在银行里的保险公司雇员，忽悠来存钱的大妈将本来要存的定期转
                            <a
                                href="#" class="feeds-item-more" mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-27 05:24</span>
                            <span>阅读（5849）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>|
                            <a href="#">阿里</a>|
                            <a href="#">监管</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5299">
                    <h3>
                        <a href="#">余额宝倒逼银行改革</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-text">总之，余额宝并未减少银行系统流动性，也没有减少银行的收益，只是将资金在银行系统间做了一次重新配置，加剧银行业的自由竞争，也倒逼银行进行金融产品创新及改革。这是中国金融业的进步。
                            <a href="#"
                                class="feeds-item-more" mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-26 16:53</span>
                            <span>阅读（8755）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5273">
                    <h3>
                        <a href="#">余额宝任何一个环节都充满危险</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=6&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">在这种情况下，这些互联网金融产品有可能如比特币进入中国一样，投资者都看好这种投资工具时，中国投资者涌入这个市场，其价格在短期内快速飚升。但风险一暴露出来时，价格就暴跌。
                            <a href="#" class="feeds-item-more"
                                mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-26 12:23</span>
                            <span>阅读（1万）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5198">
                    <h3>
                        <a href="#">余额宝的风险：收益下滑</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=7&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">&nbsp;原标题：谁养了这么多宝宝?
                            <a href="#" class="feeds-item-more" mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-25 20:58</span>
                            <span>阅读（34万）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>|
                            <a href="#">收益</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5194">
                    <h3>
                        <a href="#">股票是普毁，余额宝才是普惠</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=8&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">股票是普惠的。这个说法当然极端可笑，至少现在的中国股民肯定不这样认为，连续两天的暴跌的A股更是给出了答案；余额宝至少到现在是普惠的，一直在给分红，天天有，至少在惠，而不是在毁。
                            <a href="#"
                                class="feeds-item-more" mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-25 20:12</span>
                            <span>阅读（4973）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>|
                            <a href="#">股票</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5189">
                    <h3>
                        <a href="#">钮文新：普惠金融真正的方式是股票</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=9&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">钮文新认为，余额宝不是真正的普惠金融，应该被取缔，股票才是最普惠的方式。
                            <a href="#" class="feeds-item-more" mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-25 19:03</span>
                            <span>阅读（2295）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5161">
                    <h3>
                        <a href="#">回钮文新：互联网金融放活实体经济</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-text">余额宝们的背后是市场化的运作，而市场总是用创新来打破垄断，给普通百姓带去更多的好处。互联网金融是让人们过得更好、更自由的正能量。
                            <a href="#" class="feeds-item-more"
                                mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-25 17:20</span>
                            <span>阅读（2882）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>|
                            <a href="#">钮文新</a>|
                            <a href="#">银行</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5160">
                    <h3>
                        <a href="#">取缔余额宝！</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=11&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">我不是危言从听，更非号召谁退出余额宝，而只想告诉人们一个重要的经济事实：余额宝哪里只是冲击银行？它所冲击的是中国全社会的融资成本，冲击的是整个中国的经济安全。
                            <a href="#" class="feeds-item-more"
                                mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-25 16:58</span>
                            <span>阅读（2万）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5137">
                    <h3>
                        <a href="#">论战余额宝</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=12&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">论战余额宝
                            <a href="#" class="feeds-item-more" mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-25 12:10</span>
                            <span>阅读（11万）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>|
                            <a href="#">钮文新</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5115">
                    <h3>
                        <a href="#">余额宝正在合法挤兑银行存款</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=13&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">消费者唯一的权力是不消费。 不消费，就意味着要把钱存起来。 存到哪儿去呢？ 不管是存到银行，还是存到余额宝，最大的风险，都是对方倒闭，自己血本无亏。 在最坏结果相同的情况下，为什么不选择即时回报利息
                            <a href="#" class="feeds-item-more" mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-25 09:27</span>
                            <span>阅读（19万）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5045">
                    <h3>
                        <a href="#">余额宝不是吸血鬼，银行才是</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=14&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">央视钮文新针对余额宝们是吸血鬼的言论，其背后代表的是金融既得利益者的利益，是阻碍市场化的前进，是反对互联网金融的创新。让每一个对金融、对市场稍微有一些常识的人，都觉得可笑。
                            <a href="#"
                                class="feeds-item-more" mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-24 20:52</span>
                            <span>阅读（57万）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">互联金融</a>|
                            <a href="#">余额宝</a>|
                            <a href="#">吸血鬼</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5033">
                    <h3>
                        <a href="#">对余额宝的剿杀刚刚开始</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=15&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">央视评论员炮轰余额宝，或许没有背景，但它在一个恰当的时机，替银行业说了恰当的话。必然会被银行业及监管者充分利用——一场以金融安全为名义的的绞杀，由此正式启动。
                            <a href="#" class="feeds-item-more"
                                mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-24 18:14</span>
                            <span>阅读（2万）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>|
                            <a href="#">剿杀</a>|
                            <a href="#">央视</a>
                        </p>
                    </div>
                </div>
                <div class="feeds-item" id="item-5032">
                    <h3>
                        <a href="#">八问钮：余额宝让谁不勤劳致富？</a>
                    </h3>
                    <div class="feeds-item-detail clearfix ">
                        <p class="feeds-item-pic">
                            <a href="#" class="feeds-item-more" mon="col=13&pn=16&a=12">
                                <img src="images/1ad5ad6eddc451da47602959b4fd5266d11632e9.jpg" />
                            </a>
                        </p>
                        <p class="feeds-item-text">说到底，互联网金融让勤劳的人们有了对抗投机资本的武器，余额宝们是让勤劳致富的人们获益、让以往靠投机获利的资本受抑的好产品。
                            <a href="#" class="feeds-item-more"
                                mon="col=13&pn=1">[详细]</a>
                        </p>
                        <p class="feeds-item-info">
                            <span>2014-02-24 18:13</span>
                            <span>阅读（7442）</span>
                            <span>
                                <a href="javascript:void(0)" class="share-article">分享</a>
                            </span>
                            <a href="#">余额宝</a>|
                            <a href="#">阿里巴巴</a>
                        </p>
                    </div>
                </div> -->

            </div>
            <div class="feeds-more" id="feeds_more">
                <a href="javascript:void(0)">
                    <span>加载更多</span>
                </a>
            </div>

        </div>
        <div class="l-right-col">
            <div class="mod" id="tags">
                <div class="hd">
                    <h3>推荐标签
                        <span>TAG</span>
                    </h3>
                </div>
                <div class="bd">
                    <a href="#">火车站</a>
                    <a href="#">出租车</a>
                    <a href="#">AV</a>
                    <a href="#">阿里</a>
                    <a href="#">阿里巴巴</a>
                    <a href="#">移动互联</a>
                    <a href="#">柴静</a>
                    <a href="#">众症时代</a>
                    <a href="#">昆明</a>
                    <a href="#">孙中山</a>
                </div>
            </div>
            <div class="mod" id="author_list" alog-group="log-recommend">
                <div class="hd">
                    <h3>相关作家
                        <span>AUTHORS</span>
                    </h3>
                    <a href="#" class="more">更多>></a>
                </div>
                <div class="bd">
                    <div class="author-m clearfix">
                        <div class="author-pic">
                            <a href="#">
                                <img src="images/94cad1c8a786c9172e820f54cb3d70cf3ac757dd.jpg">
                            </a>
                        </div>
                        <div class="author-name">
                            <a href="#">中华浔</a>
                        </div>
                        <div class="author-text">专栏作者，21世纪经济报道资深记者</div>
                        <div class="author-artical">
                            <a href="#">李克强的“互联网金融”，意味深长</a>
                        </div>
                    </div>
                    <div class="author-m clearfix">
                        <div class="author-pic">
                            <a href="#">
                                <img src="images/94cad1c8a786c9172e820f54cb3d70cf3ac757dd.jpg">
                            </a>
                        </div>
                        <div class="author-name">
                            <a href="#">王海涛</a>
                        </div>
                        <div class="author-text">资深媒体人。</div>
                        <div class="author-artical">
                            <a href="#">央行“不会取缔余额宝”是句笑谈</a>
                        </div>
                    </div>
                    <div class="author-m clearfix">
                        <div class="author-pic">
                            <a href="#">
                                <img src="images/94cad1c8a786c9172e820f54cb3d70cf3ac757dd.jpg">
                            </a>
                        </div>
                        <div class="author-name">
                            <a href="#">雷建平</a>
                        </div>
                        <div class="author-text">互联网资深媒体人</div>
                        <div class="author-artical">
                            <a href="#">余额宝爆火天弘却亏损？听高管说</a>
                        </div>
                    </div>
                    <div class="author-m clearfix">
                        <div class="author-pic">
                            <a href="#">
                                <img src="images/94cad1c8a786c9172e820f54cb3d70cf3ac757dd.jpg">
                            </a>
                        </div>
                        <div class="author-name">
                            <a href="#">葛甲</a>
                        </div>
                        <div class="author-text">互联网观察家</div>
                        <div class="author-artical">
                            <a href="#">从余额宝事件看监管的笨拙</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mod" id="artical" alog-group="log-hotartical-num" style="height:auto">
                <div class="hd">
                    <h3>热门排行
                        <span>HOT</span>
                    </h3>
                </div>
                <div class="bd">
                    <ul class="artical-top artical-top-num">
                        <li class="top-1" style="height:auto">
                            <span>1</span>
                            <p>
                                <a href="#">余额宝的风险：收益下滑</a>
                            </p>
                            <p> &nbsp;原标题：谁养了这么多宝宝?</p>
                        </li>
                        <li>
                            <span class="top-2">2</span>
                            <a href="#">余额宝正在合法挤兑银行存款</a>
                        </li>
                        <li>
                            <span class="top-3">3</span>
                            <a href="#">余额宝不是吸血鬼，银行才是</a>
                        </li>
                        <li>
                            <span>4</span>
                            <a href="#">钮文新:余额宝摧毁实业精神</a>
                        </li>
                        <li>
                            <span>5</span>
                            <<a href="#">取缔余额宝！</a>
                        </li>
                        <li>
                            <span>6</span>
                            <a href="#">论战余额宝</a>
                        </li>
                        <li>
                            <span>7</span>
                            <a href="#">央行“不会取缔余额宝”是句笑谈</a>
                        </li>
                        <li>
                            <span>8</span>
                            <a href="#">余额宝任何一个环节都充满危险</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div id="footer" alog-group="log-footer">
        <p class="site-nav">
            <a href="#" class="bottom-logo">
                <img src="images/baijia_logo_color.png" />
            </a>
            <a href="#">互联网</a>
            <a href="#">文化</a>
            <a href="#">娱乐</a>
            <a href="#">体育</a>
            <a href="#">财经</a>
            <a href="#">热点</a>
        </p>
        <p class="top-nav">
            <a href="#">百家首页</a>|
            <<a href="#">百度新闻</a>|
                <a href="#">联系我们：Baijia@baidu.com</a>
                <strong> 百度新闻独家出品</strong>
        </p>
        <p class="site-info">
            <a href="#">互联网新闻信息服务许可</a>
            <span>&copy;2014 Baidu</span>
            <a href="#">使用百度前必读</a>
            <a href="#">
                <img src="images/net.gif">
            </a>
            <a href="#">
                <img alt="首都网络110报警服务" src="http://gimg.baidu.com/img/110.gif">
            </a>
            <a href="#">
                <img src="images/report_center.png">
            </a>
        </p>
    </div>
    <div class="log-wrapper" style="visibility:hidden;height:0;line-height:0;overflow:hidden">

    </div>



    <!-- Baidu Button BEGIN -->





</body>

</html>