<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pearlc
 * Date: 13. 9. 2
 * Time: 오후 11:21
 * To change this template use File | Settings | File Templates.
 */

require_once("include/header.php");
?>

<!-- Docs page layout -->
<div class="bs-header" style="display:none; ">
    <div class="container">
        <h1>Getting started</h1>
        <p>An overview of Bootstrap, how to download and use, basic templates and examples, and more.</p>
        <div id="carbonads-container">
            <div class="carbonad">
                <!--                <div id="azcarbon">-->
                <!--                </div>-->
                <!--                <script type="text/javascript">var z = document.createElement("script"); z.type = "text/javascript"; z.async = true; z.src = "http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(z, s);</script>-->
            </div>
        </div>
    </div>
</div>

<!-- Callout for the old docs link -->
<div class="bs-old-docs" style="display: none; ">
    <div class="container">
        <strong>
            <a href="../2.3.2/">Looking for Bootstrap 2.3.2 docs?</a>
        </strong>
        We've moved it to a new home while we push forward with Bootstrap 3. <a href="http://blog.getbootstrap.com/">Read the blog</a> for details.
    </div>
</div>

<div class="container bs-docs-container">
    <div class="row">
        <div class="col-md-9" role="main">
            <div class="bs-docs-section">
                <div id="post-1" class="post">

                    <div class="publication-info">
                        <div class="by-line">
                            <a class="name" href="/author/natasha-lomas/"><span class="name">Natasha Lomas</span></a>
                        </div>
                        <div class="post-time">posted 2 hours ago</div>
                    </div>

<!--                    <div class="lazy-share-widget" id="sharing-870542" style="background-image: none; background-position: initial initial; background-repeat: initial initial;">-->
<!--                        <a href="http://techcrunch.com/2013/09/02/handshake/#comments"></a>-->
<!--                        <div class="platform comments" id="comments-newshare-870542"><a href="http://techcrunch.com/2013/09/02/handshake/#comments">-->
<!--                        </a>-->
<!--                            <div class="counter">-->
<!--                                <a href="http://techcrunch.com/2013/09/02/handshake/#comments"></a>-->
<!--                                <a href="http://techcrunch.com/2013/09/02/handshake/#comments"><span class="livefyre-commentcount" data-lf-site-id="311145" data-lf-article-id="870542">4</span></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="platform" id="fb-newshare-870542" style="width: auto;"><fb:like href="http://techcrunch.com/2013/09/02/handshake/" layout="button_count" send="false" show_faces="false" fb-xfbml-state="rendered" class="fb_edge_widget_with_comment fb_iframe_widget"><span style="height: 20px; width: 71px;"><iframe id="f1cd877584" name="f3e2f38f64" scrolling="no" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D26%23cb%3Df3913e6b5%26domain%3Dtechcrunch.com%26origin%3Dhttp%253A%252F%252Ftechcrunch.com%252Ff3b3139fe4%26relation%3Dparent.parent&amp;colorscheme=light&amp;extended_social_context=false&amp;href=http%3A%2F%2Ftechcrunch.com%2F2013%2F09%2F02%2Fhandshake%2F&amp;layout=button_count&amp;locale=en_US&amp;node_type=link&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=90" style="border: none; overflow: hidden; height: 20px; width: 71px;"></iframe></span></fb:like></div>-->
<!--                        <div class="platform" id="tweet-newshare-870542" style="width: 110px;"><span style="float:left;width:100px;margin-right:5px;"><iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=http://techcrunch.com/2013/09/02/handshake/&amp;text=Handshake%20Is%20A%20Personal%20Data%20Marketplace%20Where%20Users%20Get%20Paid%20To%20Sell%20Their%20Own%C2%A0Data&amp;via=techcrunch" style="width:130px; height:50px;"></iframe></span></div>-->
<!--                        <div class="platform" id="linkedin-newshare-870542" style="width: 110px;"><span class="IN-widget" style="line-height: 1; vertical-align: baseline; display: inline-block; text-align: center;"><span style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: baseline !important; font-size: 1px !important;"><span id="li_ui_li_gen_1378133902709_0"><a id="li_ui_li_gen_1378133902709_0-link" href="javascript:void(0);"><span id="li_ui_li_gen_1378133902709_0-logo">in</span><span id="li_ui_li_gen_1378133902709_0-title"><span id="li_ui_li_gen_1378133902709_0-mark"></span><span id="li_ui_li_gen_1378133902709_0-title-text">Share</span></span></a></span></span><span style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: baseline !important; font-size: 1px !important;"><span id="li_ui_li_gen_1378133902731_1-container" class="IN-right"><span id="li_ui_li_gen_1378133902731_1" class="IN-right"><span id="li_ui_li_gen_1378133902731_1-inner" class="IN-right"><span id="li_ui_li_gen_1378133902731_1-content" class="IN-right">28</span></span></span></span></span></span><script id="inshare-870542" type="in/share+init" data-url="http://techcrunch.com/2013/09/02/handshake/" data-counter="right"></script></div>-->
<!--                        <div class="platform"><span id="gplus-newshare-870542" style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background-position: initial initial; background-repeat: initial initial;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1378133902580" name="I0_1378133902580" src="https://apis.google.com/u/0/_/+1/fastbutton?bsv=o&amp;usegapi=1&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Ftechcrunch.com&amp;url=http%3A%2F%2Ftechcrunch.com%2F2013%2F09%2F02%2Fhandshake%2F&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.AxluCt7YQ4M.O%2Fm%3D__features__%2Fam%3DIQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTPAvTRhT12jGSf18it8Pe55sHP1Nw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1378133902580&amp;parent=http%3A%2F%2Ftechcrunch.com&amp;pfname=&amp;rpctoken=36585745" data-gapiattached="true" title="+1"></iframe></span></div>-->
<!--                    </div>-->

                    <h2 class="headline">
                        <a href="http://techcrunch.com/2013/09/02/handshake/" title="Handshake Is A Personal Data Marketplace Where Users Get Paid To Sell Their Own&nbsp;Data" id="headline-870542" onclick="s_objectID='river_headline';">
                            키보드 단축키를 연달아 입력할 때 command 키에서 손을 떼지 마세요?!
                        </a>
                    </h2>
                    <div class="media-container media-loading">
                        <a href="http://techcrunch.com/2013/09/02/handshake/" onclick="s_objectID='river_image';">
                            <img width="72" height="150" src="http://tctechcrunch2011.files.wordpress.com/2013/09/handshake-iii.jpg?w=72" data-src="http://tctechcrunch2011.files.wordpress.com/2013/09/handshake-iii.jpg?w=72" class="main-image wp-post-image" alt="Handshake III">
                        </a>
                    </div>

                    <div class="body-copy">
                        <p>요 며칠 블로그에 키보드 단축키와 관련된 팁을 많이 올렸는데, 불현듯 이런 것도 맥을 입문한지 얼마 안 된 분께 일종의 팁이 될 수 있겠다는 생각이 들었습니다. 아주 단순하고 기초적이지만, OS X 전반에 걸쳐 적용할 수 있는 유용한 팁입니다. <a href="http://techcrunch.com/2013/09/02/handshake/" class="more-link">→&nbsp;Read&nbsp;More</a></p>
                    </div>
                </div>


                <div id="post-2" class="post">

                    <div class="publication-info">
                        <div class="by-line">
                            <a class="name" href="/author/natasha-lomas/"><span class="name">Natasha Lomas</span></a>
                        </div>
                        <div class="post-time">posted 2 hours ago</div>
                    </div>

                    <!--                    <div class="lazy-share-widget" id="sharing-870542" style="background-image: none; background-position: initial initial; background-repeat: initial initial;">-->
                    <!--                        <a href="http://techcrunch.com/2013/09/02/handshake/#comments"></a>-->
                    <!--                        <div class="platform comments" id="comments-newshare-870542"><a href="http://techcrunch.com/2013/09/02/handshake/#comments">-->
                    <!--                        </a>-->
                    <!--                            <div class="counter">-->
                    <!--                                <a href="http://techcrunch.com/2013/09/02/handshake/#comments"></a>-->
                    <!--                                <a href="http://techcrunch.com/2013/09/02/handshake/#comments"><span class="livefyre-commentcount" data-lf-site-id="311145" data-lf-article-id="870542">4</span></a>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!---->
                    <!--                        <div class="platform" id="fb-newshare-870542" style="width: auto;"><fb:like href="http://techcrunch.com/2013/09/02/handshake/" layout="button_count" send="false" show_faces="false" fb-xfbml-state="rendered" class="fb_edge_widget_with_comment fb_iframe_widget"><span style="height: 20px; width: 71px;"><iframe id="f1cd877584" name="f3e2f38f64" scrolling="no" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D26%23cb%3Df3913e6b5%26domain%3Dtechcrunch.com%26origin%3Dhttp%253A%252F%252Ftechcrunch.com%252Ff3b3139fe4%26relation%3Dparent.parent&amp;colorscheme=light&amp;extended_social_context=false&amp;href=http%3A%2F%2Ftechcrunch.com%2F2013%2F09%2F02%2Fhandshake%2F&amp;layout=button_count&amp;locale=en_US&amp;node_type=link&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=90" style="border: none; overflow: hidden; height: 20px; width: 71px;"></iframe></span></fb:like></div>-->
                    <!--                        <div class="platform" id="tweet-newshare-870542" style="width: 110px;"><span style="float:left;width:100px;margin-right:5px;"><iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=http://techcrunch.com/2013/09/02/handshake/&amp;text=Handshake%20Is%20A%20Personal%20Data%20Marketplace%20Where%20Users%20Get%20Paid%20To%20Sell%20Their%20Own%C2%A0Data&amp;via=techcrunch" style="width:130px; height:50px;"></iframe></span></div>-->
                    <!--                        <div class="platform" id="linkedin-newshare-870542" style="width: 110px;"><span class="IN-widget" style="line-height: 1; vertical-align: baseline; display: inline-block; text-align: center;"><span style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: baseline !important; font-size: 1px !important;"><span id="li_ui_li_gen_1378133902709_0"><a id="li_ui_li_gen_1378133902709_0-link" href="javascript:void(0);"><span id="li_ui_li_gen_1378133902709_0-logo">in</span><span id="li_ui_li_gen_1378133902709_0-title"><span id="li_ui_li_gen_1378133902709_0-mark"></span><span id="li_ui_li_gen_1378133902709_0-title-text">Share</span></span></a></span></span><span style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: baseline !important; font-size: 1px !important;"><span id="li_ui_li_gen_1378133902731_1-container" class="IN-right"><span id="li_ui_li_gen_1378133902731_1" class="IN-right"><span id="li_ui_li_gen_1378133902731_1-inner" class="IN-right"><span id="li_ui_li_gen_1378133902731_1-content" class="IN-right">28</span></span></span></span></span></span><script id="inshare-870542" type="in/share+init" data-url="http://techcrunch.com/2013/09/02/handshake/" data-counter="right"></script></div>-->
                    <!--                        <div class="platform"><span id="gplus-newshare-870542" style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background-position: initial initial; background-repeat: initial initial;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1378133902580" name="I0_1378133902580" src="https://apis.google.com/u/0/_/+1/fastbutton?bsv=o&amp;usegapi=1&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Ftechcrunch.com&amp;url=http%3A%2F%2Ftechcrunch.com%2F2013%2F09%2F02%2Fhandshake%2F&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.AxluCt7YQ4M.O%2Fm%3D__features__%2Fam%3DIQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTPAvTRhT12jGSf18it8Pe55sHP1Nw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1378133902580&amp;parent=http%3A%2F%2Ftechcrunch.com&amp;pfname=&amp;rpctoken=36585745" data-gapiattached="true" title="+1"></iframe></span></div>-->
                    <!--                    </div>-->

                    <h2 class="headline">
                        <a href="http://techcrunch.com/2013/09/02/handshake/" title="Handshake Is A Personal Data Marketplace Where Users Get Paid To Sell Their Own&nbsp;Data" id="headline-870542" onclick="s_objectID='river_headline';">
                            Handshake Is A Personal Data Marketplace Where Users Get Paid To Sell Their Own&nbsp;Data
                        </a>
                    </h2>
                    <div class="media-container media-loading">
                        <a href="http://techcrunch.com/2013/09/02/handshake/" onclick="s_objectID='river_image';">
                            <img width="72" height="150" src="http://tctechcrunch2011.files.wordpress.com/2013/09/handshake-iii.jpg?w=72" data-src="http://tctechcrunch2011.files.wordpress.com/2013/09/handshake-iii.jpg?w=72" class="main-image wp-post-image" alt="Handshake III">
                        </a>
                    </div>

                    <div class="body-copy">
                        <p>Handshake is a personal data marketplace startup aiming to cut out the market research middle man by building a platform where users can sign up to be approached by companies, negotiate a price for their data, and decide who to sell it to (and who not to). <a href="http://techcrunch.com/2013/09/02/handshake/" class="more-link">→&nbsp;Read&nbsp;More</a></p>
                    </div>
                </div>

                <div class="page-header">
                    <h4>새소식</h4>
                </div>
                <table class="table table-hover table-condensed">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>분류</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>날짜</th>
                        <th>조회</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="mytr">
                        <td>473366</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%B0%BD%EC%9E%91%EC%86%8C%EA%B0%9C%5D'>[창작소개]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473366' >탈레반에게 잡힌 "미군 포로들"</a></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'ITSMYLIFE', '장발스님', 'd2Fsa29ubGl2ZUBoYW5tYWlsLm5ldA==', '');" title="[ITSMYLIFE]장발스님"><span class='member'>장발스님</span></a></td>
                        <td><span title="2013-09-02 23:27:45">23:27</a></td>
                        <td>52</td>
                    </tr>
                    <tr class="mytr">
                        <td>473333</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%A0%9C%ED%92%88%EC%86%8C%EA%B0%9C%5D'>[제품소개]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473333' >[비레고]크레오 스타트랙 엔터프라이즈 미니버전</a></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'cntower', '초원™', 'a3llb25naGFrQGdtYWlsLmNvbQ==', '');" title="[cntower]초원™"><span class='member'>초원™</span></a></td>
                        <td><span title="2013-09-02 23:13:05">23:13</a></td>
                        <td>72</td>
                    </tr>
                    <tr class="mytr">
                        <td>473332</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%9E%90%EC%9C%A0%5D'>[자유]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473332' >피난왔어요.</a> <span>[3]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'bebas', '스케이터', 'YmViYXNiZWJhc0BoYW5tYWlsLm5ldA==', '');" title="[bebas]스케이터"><img src='/cs2/data/member/be/bebas.gif?dt=20121011' align='absmiddle' border='0'></a></td>
                        <td><span title="2013-09-02 23:12:07">23:12</a></td>
                        <td>73</td>
                    </tr>
                    <tr class="mytr">
                        <td>473309</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%A0%9C%ED%92%88%EB%A6%AC%EB%B7%B0%5D'>[제품리뷰]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473309' >오늘의 레고사진 Vol.44 mini spaceshuttle</a> <span>[30]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'yes44', '사사', 'cGhvdG9pc3RAZ21pbC5jb20=', 'http://www.frei.pe.kr');" title="[yes44]사사"><img src='/cs2/data/member/ye/yes44.gif?dt=20130118152417' align='absmiddle' border='0'></a></td>
                        <td><span title="2013-09-02 22:59:10">22:59</a></td>
                        <td>105</td>
                    </tr>
                    <tr class="mytr">
                        <td>473301</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EB%B6%84%EC%96%91%2F%EA%B5%90%ED%99%98%5D'>[분양/교환]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473301' >테크닉(42000,42006), 미니모듈러, 부동산(31012,4954) 등</a> <span>[10]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'coolbus', '냉열먹물', 'Y29vbGJ1c0BwYXJhbi5jb20=', '');" title="[coolbus]냉열먹물"><span class='member'>냉열먹물</span></a></td>
                        <td><span title="2013-09-02 22:50:03">22:50</a></td>
                        <td>126</td>
                    </tr>
                    <tr class="mytr">
                        <td>473284</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%97%BC%EC%9E%A5%5D'>[염장]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473284' >(비레고)금요일에 이런걸!!!!!!...............</a> <span>[3]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'gummoo', '모생모사', 'Z3VtbW9vQGRyZWFtd2l6LmNvbQ==', '');" title="[gummoo]모생모사"><span class='member'>모생모사</span></a></td>
                        <td><span title="2013-09-02 22:32:51">22:32</a></td>
                        <td>114</td>
                    </tr>
                    <tr class="mytr">
                        <td>473174</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%9E%90%EC%9C%A0%5D'>[자유]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473174' >마인드스톰! 이마트 양재</a> <span>[14]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'ypsnice', '미남특공대', 'eXBzbmljZUBuYXZlci5jb20=', '');" title="[ypsnice]미남특공대"><span class='member'>미남특공대</span></a></td>
                        <td><span title="2013-09-02 20:14:03">20:14</a></td>
                        <td>290</td>
                    </tr>
                    <tr class="mytr">
                        <td>473171</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%A7%88%EB%AC%B8%5D'>[질문]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473171' >이거 (깡통) 개봉제품인데 팔리면 팔릴까요?? ㅎ 급전마련이긴한데 ㄷ ㄷ</a> <span>[22]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'im1200n', 'Joan', 'aW0xMjAwbkBuYXZlci5jb20=', '');" title="[im1200n]Joan"><img src='/cs2/data/member/im/im1200n.gif?dt=20130424115054' align='absmiddle' border='0'></a></td>
                        <td><span title="2013-09-02 20:09:58">20:09</a></td>
                        <td>300</td>
                    </tr>
                    <tr class="mytr">
                        <td>473169</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%9E%90%EC%9C%A0%5D'>[자유]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473169' >42009를 배송비 포함 23.5만원에 사실 분들 있으실까까요?</a> <span>[5]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'kyori', '몽고메리번즈', 'a2xraGlyQG5hdmVyLmNvbQ==', '');" title="[kyori]몽고메리번즈"><span class='member'>몽고메리번즈</span></a></td>
                        <td><span title="2013-09-02 20:01:37">20:01</a></td>
                        <td>212</td>
                    </tr>
                    <tr class="mytr">
                        <td>473158</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%A7%80%EB%A6%84%EC%8B%A0%EA%B3%A0%5D'>[지름신고]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473158' >아내가 어쩐 일로!</a> <span>[6]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'jink411', '옵바곰', 'amluazQxMUBnbWFpbC5jb20=', '');" title="[jink411]옵바곰"><span class='member'>옵바곰</span></a></td>
                        <td><span title="2013-09-02 19:44:49">19:44</a></td>
                        <td>197</td>
                    </tr>
                    <tr class="mytr">
                        <td>473144</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%9E%90%EC%9C%A0%5D'>[자유]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473144' >석양이 붉어요</a> <span>[2]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'lum35', '정신적지주', 'bHVtMzVAaG90bWFpbC5jb20=', '');" title="[lum35]정신적지주"><img src='/cs2/data/member/lu/lum35.gif?dt=20130219113020' align='absmiddle' border='0'></a></td>
                        <td><span title="2013-09-02 19:22:01">19:22</a></td>
                        <td>122</td>
                    </tr>
                    <tr class="mytr">
                        <td>473141</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%9E%90%EC%9C%A0%5D'>[자유]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473141' >스타워즈를 다시 정주행하고있습니다</a> <span>[21]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'silent_scream', '오호홍', 'aW50b3ZvcnRleEBnbWFpbC5jb20=', '');" title="[silent_scream]오호홍"><span class='member'>오호홍</span></a></td>
                        <td><span title="2013-09-02 19:18:14">19:18</a></td>
                        <td>174</td>
                    </tr>
                    <tr class="mytr">
                        <td>473133</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%9E%90%EC%9C%A0%5D'>[자유]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473133' >가을이고 하니!!!</a> <span>[3]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'eunrang', '은랑', 'ZXVucmFuZzFAbmF2ZXIuY29t', 'http://blog.naver.com/eunrang1');" title="[eunrang]은랑"><img src='/cs2/data/member/eu/eunrang.gif?dt=20121011' align='absmiddle' border='0'></a></td>
                        <td><span title="2013-09-02 19:08:07">19:08</a></td>
                        <td>140</td>
                    </tr>
                    <tr class="mytr">
                        <td>473117</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EB%A0%88%EA%B3%A0%EC%86%8C%EC%8B%9D%5D'>[레고소식]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473117' >코끼리 영상보고 가시죠( ev3마인드스톰)</a> <span>[6]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'cardmail', '모비몹', 'NDJ3b3JsZEBnbWFpbC5jb20=', '');" title="[cardmail]모비몹"><img src='/cs2/data/member/ca/cardmail.gif?dt=20130403174925' align='absmiddle' border='0'></a></td>
                        <td><span title="2013-09-02 18:34:06">18:34</a></td>
                        <td>274</td>
                    </tr>
                    <tr class="mytr">
                        <td>473077</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%9E%90%EC%9C%A0%5D'>[자유]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473077' >아들이 만든 총..</a> <span>[6]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'imsexy', '현수아비', 'aW1zZXh5QG5hdGUuY29t', '');" title="[imsexy]현수아비"><img src='/cs2/data/member/im/imsexy.gif?dt=20130221140601' align='absmiddle' border='0'></a></td>
                        <td><span title="2013-09-02 17:58:54">17:58</a></td>
                        <td>221</td>
                    </tr>
                    <tr class="mytr">
                        <td>473047</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%9E%90%EC%9C%A0%5D'>[자유]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473047' >샵@홈에서 뭘사죠...??</a> <span>[19]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'berdandi85', '아플땐이슬이', 'YmVyZGFuZGk4NUBuYXZlci5jb20=', '');" title="[berdandi85]아플땐이슬이"><span class='member'>아플땐이슬이</span></a></td>
                        <td><span title="2013-09-02 17:33:59">17:33</a></td>
                        <td>335</td>
                    </tr>
                    <tr class="mytr">
                        <td>473017</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%A0%9C%ED%92%88%EB%A6%AC%EB%B7%B0%5D'>[제품리뷰]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473017' >사사님 이벤트 당첨 인증</a> <span>[7]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'mulldog', '물독', 'bXVsbGRvZ0BnbWFpbC5jb20=', '');" title="[mulldog]물독"><span class='member'>물독</span></a></td>
                        <td><span title="2013-09-02 17:15:56">17:15</a></td>
                        <td>181</td>
                    </tr>
                    <tr class="mytr">
                        <td>473015</td>
                        <td class="post_category"><a href='../bbs/board.php?bo_table=cm_lego&sca=%5B%EC%98%A8%EB%9D%BC%EC%9D%B8+%EA%B5%AC%EB%A7%A4%EC%A0%95%EB%B3%B4%5D'>[온라인 구매정보]</a></td>		<td class="post_subject">&nbsp;&nbsp;<a href='../bbs/board.php?bo_table=cm_lego&wr_id=473015' >홈+에 10228 유령의집도 떳네요</a> <span>[6]</span></td>
                        <td class="post_name"><a href="javascript:;" onClick="showSideView(this, 'mesnova', '밥스타드', 'bWVzbm92YUBuYXRlLmNvbQ==', '');" title="[mesnova]밥스타드"><span class='member'>밥스타드</span></a></td>
                        <td><span title="2013-09-02 17:15:05">17:15</a></td>
                        <td>307</td>
                    </tr>
                    </tbody>
                </table>

            </div>

            <div class="bs-docs-section" id="browsers">
                <div class="page-header">
                    <h1>Browser compatibility</h1>
                </div>
                <p class="lead">Bootstrap is built to work best in the latest desktop and mobile browsers, meaning older and less advanced browsers might receive a less stylized, though fully functional, version of certain components.</p>

                <h4>Supported browsers</h4>
                <p>Specifically, we support the latest versions of the following:</p>
                <ul>
                    <li>Chrome (Mac, Windows, iOS, and Android)</li>
                    <li>Safari (Mac and iOS only, as Windows has more or less been discontinued)</li>
                    <li>Firefox (Mac, Windows)</li>
                    <li>Internet Explorer</li>
                    <li>Opera (Mac, Windows)</li>
                </ul>
                <p><strong>Internet Explorer 8 and 9</strong> are also supported. However, please be aware that many CSS3 properties—e.g., rounded corners and shadows—are not supported by IE8. Unofficially, Bootstrap should look and behave well enough in Chromium for Linux and Internet Explorer 7, though they are not officially supported.</p>

                <h4>IE Compatibility modes</h4>
                <p>Bootstrap is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including <code>&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;</code> in your pages. See <a href="http://stackoverflow.com/questions/6771258/whats-the-difference-if-meta-http-equiv-x-ua-compatible-content-ie-edge">this StackOverflow question</a> for more information.</p>
            </div>

            <div class="bs-docs-section">
                <div class="page-header">
                    <h4>인텔, 애플에 차세대 맥북프로용으로 특별히 제작된 초고성능 하스웰 프로세서 공급 예정</h4>
                </div>
                <p>
                    미 IT 매체 맥루머스(MacRumors)는 27일 인텔이 차세대 맥북프로용으로 4세대 코어 프로세서 하스웰의 초고성능(Ultra-high) 버전을 애플에 공급할 예정이라고 칩 전문사이트 '세미어큐레이트(Semiaccurate)' 인용해 보도했습니다. 그리고 그 칩은 인텔 내장 GPU 중 가장 성능이 뛰어나다고 알려진 'GT3e (아이리스 프로 5200)"보다 한 단계 성능이 더 빠른 스페셜 에디션을 탑재한다고 알려졌습니다.
                </p>
                <p>
                <span class="imageblock" style="display:inline-block;width:683px;;height:auto">
                    <span dir="http://cfile27.uf.tistory.com/original/25689E3951F355113245DC" rel="lightbox" target="_blank">
                        <img src="http://cfile27.uf.tistory.com/image/25689E3951F355113245DC" style="cursor: pointer;" height="512" width="683">
                    </span>
                </span>
                </p>
                <p>앞서 유출된 차세대 맥북프로 15인치 모델의 벤치마크에 따르면 해당 모델은 아이리스 프로 5200과 함께 2.4GHz로 구동되는 인텔 i7-4950HQ 프로세서가 장착해 HD 그래픽 4000을 탑재한 i7-3840QM 프로세서보다 2배에서 2.5배 가까운 더 빠른 성능을 제공해주는 것으로 나타났는데, 만약 애플이 인텔로부터 GTe 스페셜 버전을 공급받는다는 이번 보도가 사실이라면 차세대 레티나 맥북 프로는 이보다 한층 더 빠른 그래픽 성능을 보여줄 것으로 기대된다고 맥루머스는 전했습니다. </p>
            </div>
        </div>

        <div class="col-md-3">
            <?php
            include ("include/sidebar.php");
            ?>
        </div>
    </div>
</div>
<?php
require_once("include/footer.php");
?>
