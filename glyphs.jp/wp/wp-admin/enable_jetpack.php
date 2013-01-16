<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>SDチーム - enable_jetpack.php - NumberShot</title>
<meta name="description" content="Redmine" />
<meta name="keywords" content="issue,bug,tracker" />
<link rel='shortcut icon' href='/favicon.ico?1305153539' />
<link href="/themes/watersky/stylesheets/application.css?1328786071" media="all" rel="stylesheet" type="text/css" />

<script src="/javascripts/prototype.js?1300252628" type="text/javascript"></script>
<script src="/javascripts/effects.js?1300252628" type="text/javascript"></script>
<script src="/javascripts/dragdrop.js?1300252628" type="text/javascript"></script>
<script src="/javascripts/controls.js?1300252628" type="text/javascript"></script>
<script src="/javascripts/application.js?1300252628" type="text/javascript"></script>

<!--[if IE]>
    <style type="text/css">
      * html body{ width: expression( document.documentElement.clientWidth < 900 ? '900px' : '100%' ); }
      body {behavior: url(/stylesheets/csshover.htc?1300252629);}
    </style>
<![endif]-->

<!-- page specific tags -->
    <link href="/stylesheets/scm.css?1300252629" media="screen" rel="stylesheet" type="text/css" /></head>
<body class="theme-Watersky controller-attachments action-show">
<div id="wrapper">
<div id="wrapper2">
<div id="top-menu">
    <div id="account">
        <ul><li><a href="/my/account" class="my-account">個人設定</a></li>
<li><a href="/logout" class="logout">ログアウト</a></li>
<li><a href="/work_time" class="work-time">工数</a></li></ul>    </div>
    <div id="loggedas">ログイン中： <a href="/users/62">hiroaki-yamada</a></div>
    <ul><li><a href="/" class="home">ホーム</a></li>
<li><a href="/my/page" class="my-page">マイページ</a></li>
<li><a href="/projects" class="projects">プロジェクト</a></li>
<li><a href="http://www.redmine.org/guide" class="help">ヘルプ</a></li></ul></div>
      
<div id="header">
    <div id="quick-search">
        <form action="/search/index/eng-zero" method="get">
        
        <a href="/search/index/eng-zero" accesskey="4">検索</a>:
        <input accesskey="f" class="small" id="q" name="q" size="20" type="text" />
        </form>
        <select onchange="if (this.value != '') { window.location = this.value; }"><option value=''>プロジェクトへ移動...</option><option value="" disabled="disabled">---</option><option value="/projects/base?jump=attachments">システム本部</option><option value="/projects/idcdep?jump=attachments">&nbsp;&nbsp;&#187; IDC運用部</option><option value="/projects/ope?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; IDC運用部 OPEチーム</option><option value="/projects/idc?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; IDC運用部 第一IDCチーム</option><option value="/projects/suna?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; IDC運用部 第二IDCチーム</option><option value="/projects/assistant?jump=attachments">&nbsp;&nbsp;&#187; アシスタント</option><option value="/projects/gss?jump=attachments">&nbsp;&nbsp;&#187; グループシステム支援室</option><option value="/projects/sdev?jump=attachments">&nbsp;&nbsp;&#187; サービス開発部</option><option selected="selected" value="/projects/eng-zero?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; SDチーム</option><option value="/projects/eng-si?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; SIチーム</option><option value="/projects/eng-db?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; SIチーム(DB)</option><option value="/projects/eng-legacy?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; SIチーム(Legacy)</option><option value="/projects/dev-access?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; アクセスチーム</option><option value="/projects/dev-internal?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; インターナルチーム</option><option value="/projects/app-sys?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; クラウドチーム</option><option value="/projects/deskwing?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; デスクウイング担当</option><option value="/projects/dev-domain?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; ドメインチーム</option><option value="/projects/network?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; ネットワークチーム</option><option value="/projects/dev-host?jump=attachments">&nbsp;&nbsp;&nbsp;&nbsp;&#187; ホスティングチーム</option><option value="/projects/int-sys?jump=attachments">&nbsp;&nbsp;&#187; 社内システム部</option></select>
    </div>
    
    <h1><a href="/projects/base?jump=attachments" class="root">システム本部</a> &#187; <a href="/projects/sdev?jump=attachments" class="ancestor">サービス開発部</a> &#187; SDチーム</h1>
    
    
    <div id="main-menu">
        <ul><li><a href="/projects/eng-zero" class="overview">概要</a></li>
<li><a href="/projects/eng-zero/activity" class="activity">活動</a></li>
<li><a href="/projects/eng-zero/issues" class="issues">チケット</a></li>
<li><a href="/projects/eng-zero/issues/new" accesskey="7" class="new-issue">新しいチケット</a></li>
<li><a href="/projects/eng-zero/documents" class="documents">文書</a></li>
<li><a href="/projects/eng-zero/files" class="files">ファイル</a></li></ul>
    </div>
    
</div>

<div class="nosidebar" id="main">
    <div id="sidebar">        
        
        
    </div>
    
    <div id="content">
				
        <h2>enable_jetpack.php</h2>

<div class="attachments">
<p>
   <span class="author">斉藤 弘信, 2012-11-28 18:36</span></p>
<p><a href="/attachments/download/12004/enable_jetpack.php">ダウンロード</a>   <span class="size">(321 Bytes)</span></p>

</div>
&nbsp;
<div class="autoscroll">
<table class="filecontent syntaxhl">
<tbody>


<tr><th class="line-num" id="L1"><a href="#L1">1</a></th><td class="line-code"><pre>#!/usr/bin/php
</pre></td></tr>


<tr><th class="line-num" id="L2"><a href="#L2">2</a></th><td class="line-code"><pre><span class="idl">&lt;?php</span>
</pre></td></tr>


<tr><th class="line-num" id="L3"><a href="#L3">3</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L4"><a href="#L4">4</a></th><td class="line-code"><pre><span class="c">/**
</pre></td></tr>


<tr><th class="line-num" id="L5"><a href="#L5">5</a></th><td class="line-code"><pre> * activate jetpack plugin.
</pre></td></tr>


<tr><th class="line-num" id="L6"><a href="#L6">6</a></th><td class="line-code"><pre> */</span>
</pre></td></tr>


<tr><th class="line-num" id="L7"><a href="#L7">7</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L8"><a href="#L8">8</a></th><td class="line-code"><pre><span class="lv">$basepath</span> = <span class="pd">dirname</span>(<span class="pc">__FILE__</span>);
</pre></td></tr>


<tr><th class="line-num" id="L9"><a href="#L9">9</a></th><td class="line-code"><pre><span class="pd">require_once</span> <span class="lv">$basepath</span> . <span class="s"><span class="dl">'</span><span class="k">/enable_jetpack_admin.php</span><span class="dl">'</span></span>;
</pre></td></tr>


<tr><th class="line-num" id="L10"><a href="#L10">10</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L11"><a href="#L11">11</a></th><td class="line-code"><pre><span class="lv">$plugin</span> = <span class="s"><span class="dl">'</span><span class="k">jetpack/jetpack.php</span><span class="dl">'</span></span>;
</pre></td></tr>


<tr><th class="line-num" id="L12"><a href="#L12">12</a></th><td class="line-code"><pre><span class="lv">$result</span> = activate_plugin(<span class="lv">$plugin</span>, <span class="s"><span class="dl">'</span><span class="dl">'</span></span>, <span class="pc">false</span>);
</pre></td></tr>


<tr><th class="line-num" id="L13"><a href="#L13">13</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L14"><a href="#L14">14</a></th><td class="line-code"><pre><span class="r">if</span>(<span class="lv">$result</span> != <span class="pc">null</span>) {
</pre></td></tr>


<tr><th class="line-num" id="L15"><a href="#L15">15</a></th><td class="line-code"><pre>  <span class="pd">trigger_error</span>(<span class="s"><span class="dl">'</span><span class="k">Unable to enable jetpack plugin.</span><span class="dl">'</span></span>, <span class="ex">E_USER_ERROR</span>);
</pre></td></tr>


<tr><th class="line-num" id="L16"><a href="#L16">16</a></th><td class="line-code"><pre>}
</pre></td></tr>


<tr><th class="line-num" id="L17"><a href="#L17">17</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L18"><a href="#L18">18</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L19"><a href="#L19">19</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L20"><a href="#L20">20</a></th><td class="line-code"><pre>
</pre></td></tr>


</tbody>
</table>
</div>





        
				<div style="clear:both;"></div>
    </div>
</div>

<div id="ajax-indicator" style="display:none;"><span>ロード中...</span></div>
	
<div id="footer">
  <div class="bgl"><div class="bgr">
    Powered by <a href="http://www.redmine.org/">Redmine</a> &copy; 2006-2010 Jean-Philippe Lang
  </div></div>
</div>
</div>
</div>

</body>
</html>
