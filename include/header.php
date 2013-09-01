<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pearlc
 * Date: 13. 7. 27
 * Time: 오후 12:06
 * To change this template use File | Settings | File Templates.
 */

header("Content-type: text/html; charset=utf-8");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">

<head>
    <title>GTA forum KR</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="/static/bs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/docs.css" rel="stylesheet">
    <link href="/static/css/common.css" rel="stylesheet">
    <link href="/static/css/fonts.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <script src="/static/ckeditor/ckeditor.js"></script>

    <style>
        .bs-footer {
            padding-top: 40px;
            padding-bottom: 30px;
            margin-top: 100px;
            text-align: center;
            border-top: 1px solid #e5e5e5;
        }
    </style>
</head>
<body>

<!-- Docs master nav -->
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../" class="navbar-brand">GTA한국</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../getting-started">새소식</a></li>
                <li><a href="../css">게임정보</a></li>
                <li><a href="../components">자유게시판</a></li>
                <li><a href="../javascript">동영상</a></li>
                <li><a href="../customize">스크린샷</a></li>
                <li><a href="../customize">GTA온라인</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li><a href="http://getbootstrap.com/2.3.2/">관리자</a></li>
            </ul>
        </nav>
    </div>
</header>
