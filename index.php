<?php
require_once("include/header.php");
?>

<div class="bs-header">
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


<div class="container bs-docs-container">
<div class="row">
    <div class="col-lg-3">
        <?php
        include ("include/sidebar.php");
        ?>
    </div>
    <div class="col-lg-9">
        <div class="bs-docs-section">
            <div class="page-header">
                <h1>무엇이든 물어보세요</h1>
            </div>
            <h3>Download compiled CSS and JS</h3>
            <p class="lead">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>
            <p><a class="btn btn-large btn-primary" href="assets/bootstrap.zip" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download compiled']);">Download Bootstrap</a></p>
            <hr>
            <h3 id="download-options">More download options</h3>
            <div class="bs-docs-dl-options">
                <h4>
                    <a href="https://github.com/twitter/bootstrap/zipball/master" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download source']);">Download latest source code</a>
                </h4>
                <p>Get the original files for all CSS and JavaScript by downloading the latest version directly from GitHub.</p>
                <h4>
                    <a href="https://github.com/twitter/bootstrap/" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'GitHub project']);">Clone or fork via GitHub</a>
                </h4>
                <p>Clone the entire project or fork your own version of Bootstrap to make it your own by visiting us on GitHub.</p>
                <h4>
                    Install with <a href="http://twitter.github.com/bower">Bower</a>
                </h4>
                <p>Install and manage the original files for all CSS and JavaScript, along with a local copy of the docs, using <a href="http://twitter.github.com/bower">Bower</a>.</p>
                <div class="highlight"><pre><code class="bash"><span class="nv">$ </span>bower install bootstrap</code></pre></div>
            </div>
            <div class="bs-callout bs-callout-warning" id="callout-less-compilation">
                <h4>LESS compilation</h4>
                <p>If you download the original files, you need to compile Bootstrap's LESS files into usable CSS. To do that, Bootstrap only officially supports <a href="http://twitter.github.io/recess/">Recess</a>, Twitter's CSS hinter built on top of <a href="http://lesscss.org">less.js</a>.</p>
            </div>

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
</div>
</div>
<?php
require_once("include/footer.php");
?>
