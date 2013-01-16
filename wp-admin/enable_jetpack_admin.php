<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>SDチーム - enable_jetpack_admin.php - NumberShot</title>
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
				
        <h2>enable_jetpack_admin.php</h2>

<div class="attachments">
<p>
   <span class="author">斉藤 弘信, 2012-11-28 18:36</span></p>
<p><a href="/attachments/download/12005/enable_jetpack_admin.php">ダウンロード</a>   <span class="size">(6.5 KB)</span></p>

</div>
&nbsp;
<div class="autoscroll">
<table class="filecontent syntaxhl">
<tbody>


<tr><th class="line-num" id="L1"><a href="#L1">1</a></th><td class="line-code"><pre><span class="idl">&lt;?php</span>
</pre></td></tr>


<tr><th class="line-num" id="L2"><a href="#L2">2</a></th><td class="line-code"><pre><span class="c">/**
</pre></td></tr>


<tr><th class="line-num" id="L3"><a href="#L3">3</a></th><td class="line-code"><pre> * WordPress Administration Bootstrap
</pre></td></tr>


<tr><th class="line-num" id="L4"><a href="#L4">4</a></th><td class="line-code"><pre> *
</pre></td></tr>


<tr><th class="line-num" id="L5"><a href="#L5">5</a></th><td class="line-code"><pre> * @package WordPress
</pre></td></tr>


<tr><th class="line-num" id="L6"><a href="#L6">6</a></th><td class="line-code"><pre> * @subpackage Administration
</pre></td></tr>


<tr><th class="line-num" id="L7"><a href="#L7">7</a></th><td class="line-code"><pre> * 
</pre></td></tr>


<tr><th class="line-num" id="L8"><a href="#L8">8</a></th><td class="line-code"><pre> */</span>
</pre></td></tr>


<tr><th class="line-num" id="L9"><a href="#L9">9</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L10"><a href="#L10">10</a></th><td class="line-code"><pre><span class="c">/*
</pre></td></tr>


<tr><th class="line-num" id="L11"><a href="#L11">11</a></th><td class="line-code"><pre> use only from enable_jetpack.php
</pre></td></tr>


<tr><th class="line-num" id="L12"><a href="#L12">12</a></th><td class="line-code"><pre> difference between from original: comment out lines 69 and 104 through 109
</pre></td></tr>


<tr><th class="line-num" id="L13"><a href="#L13">13</a></th><td class="line-code"><pre>*/</span>
</pre></td></tr>


<tr><th class="line-num" id="L14"><a href="#L14">14</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L15"><a href="#L15">15</a></th><td class="line-code"><pre><span class="c">/**
</pre></td></tr>


<tr><th class="line-num" id="L16"><a href="#L16">16</a></th><td class="line-code"><pre> * In WordPress Administration Screens
</pre></td></tr>


<tr><th class="line-num" id="L17"><a href="#L17">17</a></th><td class="line-code"><pre> *
</pre></td></tr>


<tr><th class="line-num" id="L18"><a href="#L18">18</a></th><td class="line-code"><pre> * @since 2.3.2
</pre></td></tr>


<tr><th class="line-num" id="L19"><a href="#L19">19</a></th><td class="line-code"><pre> */</span>
</pre></td></tr>


<tr><th class="line-num" id="L20"><a href="#L20">20</a></th><td class="line-code"><pre><span class="r">if</span> ( ! <span class="pd">defined</span>(<span class="s"><span class="dl">'</span><span class="k">WP_ADMIN</span><span class="dl">'</span></span>) )
</pre></td></tr>


<tr><th class="line-num" id="L21"><a href="#L21">21</a></th><td class="line-code"><pre>        <span class="pd">define</span>(<span class="s"><span class="dl">'</span><span class="k">WP_ADMIN</span><span class="dl">'</span></span>, <span class="pc">true</span>);
</pre></td></tr>


<tr><th class="line-num" id="L22"><a href="#L22">22</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L23"><a href="#L23">23</a></th><td class="line-code"><pre><span class="r">if</span> ( ! <span class="pd">defined</span>(<span class="s"><span class="dl">'</span><span class="k">WP_NETWORK_ADMIN</span><span class="dl">'</span></span>) )
</pre></td></tr>


<tr><th class="line-num" id="L24"><a href="#L24">24</a></th><td class="line-code"><pre>        <span class="pd">define</span>(<span class="s"><span class="dl">'</span><span class="k">WP_NETWORK_ADMIN</span><span class="dl">'</span></span>, <span class="pc">false</span>);
</pre></td></tr>


<tr><th class="line-num" id="L25"><a href="#L25">25</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L26"><a href="#L26">26</a></th><td class="line-code"><pre><span class="r">if</span> ( ! <span class="pd">defined</span>(<span class="s"><span class="dl">'</span><span class="k">WP_USER_ADMIN</span><span class="dl">'</span></span>) )
</pre></td></tr>


<tr><th class="line-num" id="L27"><a href="#L27">27</a></th><td class="line-code"><pre>        <span class="pd">define</span>(<span class="s"><span class="dl">'</span><span class="k">WP_USER_ADMIN</span><span class="dl">'</span></span>, <span class="pc">false</span>);
</pre></td></tr>


<tr><th class="line-num" id="L28"><a href="#L28">28</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L29"><a href="#L29">29</a></th><td class="line-code"><pre><span class="r">if</span> ( ! <span class="co">WP_NETWORK_ADMIN</span> &amp;&amp; ! <span class="co">WP_USER_ADMIN</span> ) {
</pre></td></tr>


<tr><th class="line-num" id="L30"><a href="#L30">30</a></th><td class="line-code"><pre>        <span class="pd">define</span>(<span class="s"><span class="dl">'</span><span class="k">WP_BLOG_ADMIN</span><span class="dl">'</span></span>, <span class="pc">true</span>);
</pre></td></tr>


<tr><th class="line-num" id="L31"><a href="#L31">31</a></th><td class="line-code"><pre>}
</pre></td></tr>


<tr><th class="line-num" id="L32"><a href="#L32">32</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L33"><a href="#L33">33</a></th><td class="line-code"><pre><span class="r">if</span> ( <span class="pd">isset</span>(<span class="pd">$_GET</span>[<span class="s"><span class="dl">'</span><span class="k">import</span><span class="dl">'</span></span>]) &amp;&amp; !<span class="pd">defined</span>(<span class="s"><span class="dl">'</span><span class="k">WP_LOAD_IMPORTERS</span><span class="dl">'</span></span>) )
</pre></td></tr>


<tr><th class="line-num" id="L34"><a href="#L34">34</a></th><td class="line-code"><pre>        <span class="pd">define</span>(<span class="s"><span class="dl">'</span><span class="k">WP_LOAD_IMPORTERS</span><span class="dl">'</span></span>, <span class="pc">true</span>);
</pre></td></tr>


<tr><th class="line-num" id="L35"><a href="#L35">35</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L36"><a href="#L36">36</a></th><td class="line-code"><pre><span class="pd">require_once</span>(<span class="pd">dirname</span>(<span class="pd">dirname</span>(<span class="pc">__FILE__</span>)) . <span class="s"><span class="dl">'</span><span class="k">/wp-load.php</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L37"><a href="#L37">37</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L38"><a href="#L38">38</a></th><td class="line-code"><pre><span class="r">if</span> ( get_option(<span class="s"><span class="dl">'</span><span class="k">db_upgraded</span><span class="dl">'</span></span>) ) {
</pre></td></tr>


<tr><th class="line-num" id="L39"><a href="#L39">39</a></th><td class="line-code"><pre>        flush_rewrite_rules();
</pre></td></tr>


<tr><th class="line-num" id="L40"><a href="#L40">40</a></th><td class="line-code"><pre>        update_option( <span class="s"><span class="dl">'</span><span class="k">db_upgraded</span><span class="dl">'</span></span>,  <span class="pc">false</span> );
</pre></td></tr>


<tr><th class="line-num" id="L41"><a href="#L41">41</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L42"><a href="#L42">42</a></th><td class="line-code"><pre>        <span class="c">/**
</pre></td></tr>


<tr><th class="line-num" id="L43"><a href="#L43">43</a></th><td class="line-code"><pre>         * Runs on the next page load after successful upgrade
</pre></td></tr>


<tr><th class="line-num" id="L44"><a href="#L44">44</a></th><td class="line-code"><pre>         *
</pre></td></tr>


<tr><th class="line-num" id="L45"><a href="#L45">45</a></th><td class="line-code"><pre>         * @since 2.8
</pre></td></tr>


<tr><th class="line-num" id="L46"><a href="#L46">46</a></th><td class="line-code"><pre>         */</span>
</pre></td></tr>


<tr><th class="line-num" id="L47"><a href="#L47">47</a></th><td class="line-code"><pre>        do_action(<span class="s"><span class="dl">'</span><span class="k">after_db_upgrade</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L48"><a href="#L48">48</a></th><td class="line-code"><pre>} <span class="r">elseif</span> ( get_option(<span class="s"><span class="dl">'</span><span class="k">db_version</span><span class="dl">'</span></span>) != <span class="lv">$wp_db_version</span> &amp;&amp; <span class="pd">empty</span>(<span class="pd">$_POST</span>) ) {
</pre></td></tr>


<tr><th class="line-num" id="L49"><a href="#L49">49</a></th><td class="line-code"><pre>        <span class="r">if</span> ( !is_multisite() ) {
</pre></td></tr>


<tr><th class="line-num" id="L50"><a href="#L50">50</a></th><td class="line-code"><pre>                wp_redirect(admin_url(<span class="s"><span class="dl">'</span><span class="k">upgrade.php?_wp_http_referer=</span><span class="dl">'</span></span> . <span class="pd">urlencode</span>(<span class="pd">stripslashes</span>(<span class="pd">$_SERVER</span>[<span class="s"><span class="dl">'</span><span class="k">REQUEST_URI</span><span class="dl">'</span></span>]))));
</pre></td></tr>


<tr><th class="line-num" id="L51"><a href="#L51">51</a></th><td class="line-code"><pre>                <span class="pd">exit</span>;
</pre></td></tr>


<tr><th class="line-num" id="L52"><a href="#L52">52</a></th><td class="line-code"><pre>        } <span class="r">elseif</span> ( apply_filters( <span class="s"><span class="dl">'</span><span class="k">do_mu_upgrade</span><span class="dl">'</span></span>, <span class="pc">true</span> ) ) {
</pre></td></tr>


<tr><th class="line-num" id="L53"><a href="#L53">53</a></th><td class="line-code"><pre>                <span class="c">/**
</pre></td></tr>


<tr><th class="line-num" id="L54"><a href="#L54">54</a></th><td class="line-code"><pre>                 * On really small MU installs run the upgrader every time,
</pre></td></tr>


<tr><th class="line-num" id="L55"><a href="#L55">55</a></th><td class="line-code"><pre>                 * else run it less often to reduce load.
</pre></td></tr>


<tr><th class="line-num" id="L56"><a href="#L56">56</a></th><td class="line-code"><pre>                 *
</pre></td></tr>


<tr><th class="line-num" id="L57"><a href="#L57">57</a></th><td class="line-code"><pre>                 * @since 2.8.4b
</pre></td></tr>


<tr><th class="line-num" id="L58"><a href="#L58">58</a></th><td class="line-code"><pre>                 */</span>
</pre></td></tr>


<tr><th class="line-num" id="L59"><a href="#L59">59</a></th><td class="line-code"><pre>                <span class="lv">$c</span> = get_blog_count();
</pre></td></tr>


<tr><th class="line-num" id="L60"><a href="#L60">60</a></th><td class="line-code"><pre>                <span class="r">if</span> ( <span class="lv">$c</span> &lt;= <span class="i">50</span> || ( <span class="lv">$c</span> &gt; <span class="i">50</span> &amp;&amp; mt_rand( <span class="i">0</span>, (<span class="pt">int</span>)( <span class="lv">$c</span> / <span class="i">50</span> ) ) == <span class="i">1</span> ) ) {
</pre></td></tr>


<tr><th class="line-num" id="L61"><a href="#L61">61</a></th><td class="line-code"><pre>                        <span class="pd">require_once</span>( <span class="co">ABSPATH</span> . <span class="co">WPINC</span> . <span class="s"><span class="dl">'</span><span class="k">/http.php</span><span class="dl">'</span></span> );
</pre></td></tr>


<tr><th class="line-num" id="L62"><a href="#L62">62</a></th><td class="line-code"><pre>                        <span class="lv">$response</span> = wp_remote_get( admin_url( <span class="s"><span class="dl">'</span><span class="k">upgrade.php?step=1</span><span class="dl">'</span></span> ), <span class="pd">array</span>( <span class="s"><span class="dl">'</span><span class="k">timeout</span><span class="dl">'</span></span> =&gt; <span class="i">120</span>, <span class="s"><span class="dl">'</span><span class="k">httpversion</span><span class="dl">'</span></span> =&gt; <span class="s"><span class="dl">'</span><span class="k">1.1</span><span class="dl">'</span></span> ) );
</pre></td></tr>


<tr><th class="line-num" id="L63"><a href="#L63">63</a></th><td class="line-code"><pre>                        do_action( <span class="s"><span class="dl">'</span><span class="k">after_mu_upgrade</span><span class="dl">'</span></span>, <span class="lv">$response</span> );
</pre></td></tr>


<tr><th class="line-num" id="L64"><a href="#L64">64</a></th><td class="line-code"><pre>                        <span class="pd">unset</span>(<span class="lv">$response</span>);
</pre></td></tr>


<tr><th class="line-num" id="L65"><a href="#L65">65</a></th><td class="line-code"><pre>                }
</pre></td></tr>


<tr><th class="line-num" id="L66"><a href="#L66">66</a></th><td class="line-code"><pre>                <span class="pd">unset</span>(<span class="lv">$c</span>);
</pre></td></tr>


<tr><th class="line-num" id="L67"><a href="#L67">67</a></th><td class="line-code"><pre>        }
</pre></td></tr>


<tr><th class="line-num" id="L68"><a href="#L68">68</a></th><td class="line-code"><pre>}
</pre></td></tr>


<tr><th class="line-num" id="L69"><a href="#L69">69</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L70"><a href="#L70">70</a></th><td class="line-code"><pre><span class="pd">require_once</span>(<span class="co">ABSPATH</span> . <span class="s"><span class="dl">'</span><span class="k">wp-admin/includes/admin.php</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L71"><a href="#L71">71</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L72"><a href="#L72">72</a></th><td class="line-code"><pre><span class="c">//auth_redirect();</span>
</pre></td></tr>


<tr><th class="line-num" id="L73"><a href="#L73">73</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L74"><a href="#L74">74</a></th><td class="line-code"><pre>nocache_headers();
</pre></td></tr>


<tr><th class="line-num" id="L75"><a href="#L75">75</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L76"><a href="#L76">76</a></th><td class="line-code"><pre><span class="c">// Schedule trash collection</span>
</pre></td></tr>


<tr><th class="line-num" id="L77"><a href="#L77">77</a></th><td class="line-code"><pre><span class="r">if</span> ( !wp_next_scheduled(<span class="s"><span class="dl">'</span><span class="k">wp_scheduled_delete</span><span class="dl">'</span></span>) &amp;&amp; !<span class="pd">defined</span>(<span class="s"><span class="dl">'</span><span class="k">WP_INSTALLING</span><span class="dl">'</span></span>) )
</pre></td></tr>


<tr><th class="line-num" id="L78"><a href="#L78">78</a></th><td class="line-code"><pre>        wp_schedule_event(<span class="pd">time</span>(), <span class="s"><span class="dl">'</span><span class="k">daily</span><span class="dl">'</span></span>, <span class="s"><span class="dl">'</span><span class="k">wp_scheduled_delete</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L79"><a href="#L79">79</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L80"><a href="#L80">80</a></th><td class="line-code"><pre>set_screen_options();
</pre></td></tr>


<tr><th class="line-num" id="L81"><a href="#L81">81</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L82"><a href="#L82">82</a></th><td class="line-code"><pre><span class="lv">$date_format</span> = get_option(<span class="s"><span class="dl">'</span><span class="k">date_format</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L83"><a href="#L83">83</a></th><td class="line-code"><pre><span class="lv">$time_format</span> = get_option(<span class="s"><span class="dl">'</span><span class="k">time_format</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L84"><a href="#L84">84</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L85"><a href="#L85">85</a></th><td class="line-code"><pre>wp_reset_vars(<span class="pd">array</span>(<span class="s"><span class="dl">'</span><span class="k">profile</span><span class="dl">'</span></span>, <span class="s"><span class="dl">'</span><span class="k">redirect</span><span class="dl">'</span></span>, <span class="s"><span class="dl">'</span><span class="k">redirect_url</span><span class="dl">'</span></span>, <span class="s"><span class="dl">'</span><span class="k">a</span><span class="dl">'</span></span>, <span class="s"><span class="dl">'</span><span class="k">text</span><span class="dl">'</span></span>, <span class="s"><span class="dl">'</span><span class="k">trackback</span><span class="dl">'</span></span>, <span class="s"><span class="dl">'</span><span class="k">pingback</span><span class="dl">'</span></span>));
</pre></td></tr>


<tr><th class="line-num" id="L86"><a href="#L86">86</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L87"><a href="#L87">87</a></th><td class="line-code"><pre>wp_enqueue_script( <span class="s"><span class="dl">'</span><span class="k">common</span><span class="dl">'</span></span> );
</pre></td></tr>


<tr><th class="line-num" id="L88"><a href="#L88">88</a></th><td class="line-code"><pre>wp_enqueue_script( <span class="s"><span class="dl">'</span><span class="k">jquery-color</span><span class="dl">'</span></span> );
</pre></td></tr>


<tr><th class="line-num" id="L89"><a href="#L89">89</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L90"><a href="#L90">90</a></th><td class="line-code"><pre><span class="lv">$editing</span> = <span class="pc">false</span>;
</pre></td></tr>


<tr><th class="line-num" id="L91"><a href="#L91">91</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L92"><a href="#L92">92</a></th><td class="line-code"><pre><span class="r">if</span> ( <span class="pd">isset</span>(<span class="pd">$_GET</span>[<span class="s"><span class="dl">'</span><span class="k">page</span><span class="dl">'</span></span>]) ) {
</pre></td></tr>


<tr><th class="line-num" id="L93"><a href="#L93">93</a></th><td class="line-code"><pre>        <span class="lv">$plugin_page</span> = <span class="pd">stripslashes</span>(<span class="pd">$_GET</span>[<span class="s"><span class="dl">'</span><span class="k">page</span><span class="dl">'</span></span>]);
</pre></td></tr>


<tr><th class="line-num" id="L94"><a href="#L94">94</a></th><td class="line-code"><pre>        <span class="lv">$plugin_page</span> = plugin_basename(<span class="lv">$plugin_page</span>);
</pre></td></tr>


<tr><th class="line-num" id="L95"><a href="#L95">95</a></th><td class="line-code"><pre>}
</pre></td></tr>


<tr><th class="line-num" id="L96"><a href="#L96">96</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L97"><a href="#L97">97</a></th><td class="line-code"><pre><span class="r">if</span> ( <span class="pd">isset</span>( <span class="pd">$_REQUEST</span>[<span class="s"><span class="dl">'</span><span class="k">post_type</span><span class="dl">'</span></span>] ) &amp;&amp; post_type_exists( <span class="pd">$_REQUEST</span>[<span class="s"><span class="dl">'</span><span class="k">post_type</span><span class="dl">'</span></span>] ) )
</pre></td></tr>


<tr><th class="line-num" id="L98"><a href="#L98">98</a></th><td class="line-code"><pre>        <span class="lv">$typenow</span> = <span class="pd">$_REQUEST</span>[<span class="s"><span class="dl">'</span><span class="k">post_type</span><span class="dl">'</span></span>];
</pre></td></tr>


<tr><th class="line-num" id="L99"><a href="#L99">99</a></th><td class="line-code"><pre><span class="r">else</span>
</pre></td></tr>


<tr><th class="line-num" id="L100"><a href="#L100">100</a></th><td class="line-code"><pre>        <span class="lv">$typenow</span> = <span class="s"><span class="dl">'</span><span class="dl">'</span></span>;
</pre></td></tr>


<tr><th class="line-num" id="L101"><a href="#L101">101</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L102"><a href="#L102">102</a></th><td class="line-code"><pre><span class="r">if</span> ( <span class="pd">isset</span>( <span class="pd">$_REQUEST</span>[<span class="s"><span class="dl">'</span><span class="k">taxonomy</span><span class="dl">'</span></span>] ) &amp;&amp; taxonomy_exists( <span class="pd">$_REQUEST</span>[<span class="s"><span class="dl">'</span><span class="k">taxonomy</span><span class="dl">'</span></span>] ) )
</pre></td></tr>


<tr><th class="line-num" id="L103"><a href="#L103">103</a></th><td class="line-code"><pre>        <span class="lv">$taxnow</span> = <span class="pd">$_REQUEST</span>[<span class="s"><span class="dl">'</span><span class="k">taxonomy</span><span class="dl">'</span></span>];
</pre></td></tr>


<tr><th class="line-num" id="L104"><a href="#L104">104</a></th><td class="line-code"><pre><span class="r">else</span>
</pre></td></tr>


<tr><th class="line-num" id="L105"><a href="#L105">105</a></th><td class="line-code"><pre>        <span class="lv">$taxnow</span> = <span class="s"><span class="dl">'</span><span class="dl">'</span></span>;
</pre></td></tr>


<tr><th class="line-num" id="L106"><a href="#L106">106</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L107"><a href="#L107">107</a></th><td class="line-code"><pre><span class="c">/* if ( WP_NETWORK_ADMIN ) */</span>
</pre></td></tr>


<tr><th class="line-num" id="L108"><a href="#L108">108</a></th><td class="line-code"><pre><span class="c">/*         require(ABSPATH . 'wp-admin/network/menu.php'); */</span>
</pre></td></tr>


<tr><th class="line-num" id="L109"><a href="#L109">109</a></th><td class="line-code"><pre><span class="c">/* elseif ( WP_USER_ADMIN ) */</span>
</pre></td></tr>


<tr><th class="line-num" id="L110"><a href="#L110">110</a></th><td class="line-code"><pre><span class="c">/*         require(ABSPATH . 'wp-admin/user/menu.php'); */</span>
</pre></td></tr>


<tr><th class="line-num" id="L111"><a href="#L111">111</a></th><td class="line-code"><pre><span class="c">/* else */</span>
</pre></td></tr>


<tr><th class="line-num" id="L112"><a href="#L112">112</a></th><td class="line-code"><pre><span class="c">/*         require(ABSPATH . 'wp-admin/menu.php'); */</span>
</pre></td></tr>


<tr><th class="line-num" id="L113"><a href="#L113">113</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L114"><a href="#L114">114</a></th><td class="line-code"><pre><span class="r">if</span> ( current_user_can( <span class="s"><span class="dl">'</span><span class="k">manage_options</span><span class="dl">'</span></span> ) )
</pre></td></tr>


<tr><th class="line-num" id="L115"><a href="#L115">115</a></th><td class="line-code"><pre>        <span class="ex">@</span>ini_set( <span class="s"><span class="dl">'</span><span class="k">memory_limit</span><span class="dl">'</span></span>, apply_filters( <span class="s"><span class="dl">'</span><span class="k">admin_memory_limit</span><span class="dl">'</span></span>, <span class="co">WP_MAX_MEMORY_LIMIT</span> ) );
</pre></td></tr>


<tr><th class="line-num" id="L116"><a href="#L116">116</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L117"><a href="#L117">117</a></th><td class="line-code"><pre>do_action(<span class="s"><span class="dl">'</span><span class="k">admin_init</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L118"><a href="#L118">118</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L119"><a href="#L119">119</a></th><td class="line-code"><pre><span class="r">if</span> ( <span class="pd">isset</span>(<span class="lv">$plugin_page</span>) ) {
</pre></td></tr>


<tr><th class="line-num" id="L120"><a href="#L120">120</a></th><td class="line-code"><pre>        <span class="r">if</span> ( !<span class="pd">empty</span>(<span class="lv">$typenow</span>) )
</pre></td></tr>


<tr><th class="line-num" id="L121"><a href="#L121">121</a></th><td class="line-code"><pre>                <span class="lv">$the_parent</span> = <span class="lv">$pagenow</span> . <span class="s"><span class="dl">'</span><span class="k">?post_type=</span><span class="dl">'</span></span> . <span class="lv">$typenow</span>;
</pre></td></tr>


<tr><th class="line-num" id="L122"><a href="#L122">122</a></th><td class="line-code"><pre>        <span class="r">else</span>
</pre></td></tr>


<tr><th class="line-num" id="L123"><a href="#L123">123</a></th><td class="line-code"><pre>                <span class="lv">$the_parent</span> = <span class="lv">$pagenow</span>;
</pre></td></tr>


<tr><th class="line-num" id="L124"><a href="#L124">124</a></th><td class="line-code"><pre>        <span class="r">if</span> ( ! <span class="lv">$page_hook</span> = get_plugin_page_hook(<span class="lv">$plugin_page</span>, <span class="lv">$the_parent</span>) ) {
</pre></td></tr>


<tr><th class="line-num" id="L125"><a href="#L125">125</a></th><td class="line-code"><pre>                <span class="lv">$page_hook</span> = get_plugin_page_hook(<span class="lv">$plugin_page</span>, <span class="lv">$plugin_page</span>);
</pre></td></tr>


<tr><th class="line-num" id="L126"><a href="#L126">126</a></th><td class="line-code"><pre>                <span class="c">// backwards compatibility for plugins using add_management_page</span>
</pre></td></tr>


<tr><th class="line-num" id="L127"><a href="#L127">127</a></th><td class="line-code"><pre>                <span class="r">if</span> ( <span class="pd">empty</span>( <span class="lv">$page_hook</span> ) &amp;&amp; <span class="s"><span class="dl">'</span><span class="k">edit.php</span><span class="dl">'</span></span> == <span class="lv">$pagenow</span> &amp;&amp; <span class="s"><span class="dl">'</span><span class="dl">'</span></span> != get_plugin_page_hook(<span class="lv">$plugin_page</span>, <span class="s"><span class="dl">'</span><span class="k">tools.php</span><span class="dl">'</span></span>) ) {
</pre></td></tr>


<tr><th class="line-num" id="L128"><a href="#L128">128</a></th><td class="line-code"><pre>                        <span class="c">// There could be plugin specific params on the URL, so we need the whole query string</span>
</pre></td></tr>


<tr><th class="line-num" id="L129"><a href="#L129">129</a></th><td class="line-code"><pre>                        <span class="r">if</span> ( !<span class="pd">empty</span>(<span class="pd">$_SERVER</span>[ <span class="s"><span class="dl">'</span><span class="k">QUERY_STRING</span><span class="dl">'</span></span> ]) )
</pre></td></tr>


<tr><th class="line-num" id="L130"><a href="#L130">130</a></th><td class="line-code"><pre>                                <span class="lv">$query_string</span> = <span class="pd">$_SERVER</span>[ <span class="s"><span class="dl">'</span><span class="k">QUERY_STRING</span><span class="dl">'</span></span> ];
</pre></td></tr>


<tr><th class="line-num" id="L131"><a href="#L131">131</a></th><td class="line-code"><pre>                        <span class="r">else</span>
</pre></td></tr>


<tr><th class="line-num" id="L132"><a href="#L132">132</a></th><td class="line-code"><pre>                                <span class="lv">$query_string</span> = <span class="s"><span class="dl">'</span><span class="k">page=</span><span class="dl">'</span></span> . <span class="lv">$plugin_page</span>;
</pre></td></tr>


<tr><th class="line-num" id="L133"><a href="#L133">133</a></th><td class="line-code"><pre>                        wp_redirect( admin_url(<span class="s"><span class="dl">'</span><span class="k">tools.php?</span><span class="dl">'</span></span> . <span class="lv">$query_string</span>) );
</pre></td></tr>


<tr><th class="line-num" id="L134"><a href="#L134">134</a></th><td class="line-code"><pre>                        <span class="pd">exit</span>;
</pre></td></tr>


<tr><th class="line-num" id="L135"><a href="#L135">135</a></th><td class="line-code"><pre>                }
</pre></td></tr>


<tr><th class="line-num" id="L136"><a href="#L136">136</a></th><td class="line-code"><pre>        }
</pre></td></tr>


<tr><th class="line-num" id="L137"><a href="#L137">137</a></th><td class="line-code"><pre>        <span class="pd">unset</span>(<span class="lv">$the_parent</span>);
</pre></td></tr>


<tr><th class="line-num" id="L138"><a href="#L138">138</a></th><td class="line-code"><pre>}
</pre></td></tr>


<tr><th class="line-num" id="L139"><a href="#L139">139</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L140"><a href="#L140">140</a></th><td class="line-code"><pre><span class="lv">$hook_suffix</span> = <span class="s"><span class="dl">'</span><span class="dl">'</span></span>;
</pre></td></tr>


<tr><th class="line-num" id="L141"><a href="#L141">141</a></th><td class="line-code"><pre><span class="r">if</span> ( <span class="pd">isset</span>(<span class="lv">$page_hook</span>) )
</pre></td></tr>


<tr><th class="line-num" id="L142"><a href="#L142">142</a></th><td class="line-code"><pre>        <span class="lv">$hook_suffix</span> = <span class="lv">$page_hook</span>;
</pre></td></tr>


<tr><th class="line-num" id="L143"><a href="#L143">143</a></th><td class="line-code"><pre><span class="r">else</span> <span class="r">if</span> ( <span class="pd">isset</span>(<span class="lv">$plugin_page</span>) )
</pre></td></tr>


<tr><th class="line-num" id="L144"><a href="#L144">144</a></th><td class="line-code"><pre>        <span class="lv">$hook_suffix</span> = <span class="lv">$plugin_page</span>;
</pre></td></tr>


<tr><th class="line-num" id="L145"><a href="#L145">145</a></th><td class="line-code"><pre><span class="r">else</span> <span class="r">if</span> ( <span class="pd">isset</span>(<span class="lv">$pagenow</span>) )
</pre></td></tr>


<tr><th class="line-num" id="L146"><a href="#L146">146</a></th><td class="line-code"><pre>        <span class="lv">$hook_suffix</span> = <span class="lv">$pagenow</span>;
</pre></td></tr>


<tr><th class="line-num" id="L147"><a href="#L147">147</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L148"><a href="#L148">148</a></th><td class="line-code"><pre>set_current_screen();
</pre></td></tr>


<tr><th class="line-num" id="L149"><a href="#L149">149</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L150"><a href="#L150">150</a></th><td class="line-code"><pre><span class="c">// Handle plugin admin pages.</span>
</pre></td></tr>


<tr><th class="line-num" id="L151"><a href="#L151">151</a></th><td class="line-code"><pre><span class="r">if</span> ( <span class="pd">isset</span>(<span class="lv">$plugin_page</span>) ) {
</pre></td></tr>


<tr><th class="line-num" id="L152"><a href="#L152">152</a></th><td class="line-code"><pre>        <span class="r">if</span> ( <span class="lv">$page_hook</span> ) {
</pre></td></tr>


<tr><th class="line-num" id="L153"><a href="#L153">153</a></th><td class="line-code"><pre>                do_action(<span class="s"><span class="dl">'</span><span class="k">load-</span><span class="dl">'</span></span> . <span class="lv">$page_hook</span>);
</pre></td></tr>


<tr><th class="line-num" id="L154"><a href="#L154">154</a></th><td class="line-code"><pre>                <span class="r">if</span> (! <span class="pd">isset</span>(<span class="pd">$_GET</span>[<span class="s"><span class="dl">'</span><span class="k">noheader</span><span class="dl">'</span></span>]))
</pre></td></tr>


<tr><th class="line-num" id="L155"><a href="#L155">155</a></th><td class="line-code"><pre>                        <span class="pd">require_once</span>(<span class="co">ABSPATH</span> . <span class="s"><span class="dl">'</span><span class="k">wp-admin/admin-header.php</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L156"><a href="#L156">156</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L157"><a href="#L157">157</a></th><td class="line-code"><pre>                do_action(<span class="lv">$page_hook</span>);
</pre></td></tr>


<tr><th class="line-num" id="L158"><a href="#L158">158</a></th><td class="line-code"><pre>        } <span class="r">else</span> {
</pre></td></tr>


<tr><th class="line-num" id="L159"><a href="#L159">159</a></th><td class="line-code"><pre>                <span class="r">if</span> ( validate_file(<span class="lv">$plugin_page</span>) )
</pre></td></tr>


<tr><th class="line-num" id="L160"><a href="#L160">160</a></th><td class="line-code"><pre>                        wp_die(__(<span class="s"><span class="dl">'</span><span class="k">Invalid plugin page</span><span class="dl">'</span></span>));
</pre></td></tr>


<tr><th class="line-num" id="L161"><a href="#L161">161</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L162"><a href="#L162">162</a></th><td class="line-code"><pre>                <span class="r">if</span> ( !( <span class="pd">file_exists</span>(<span class="co">WP_PLUGIN_DIR</span> . <span class="s"><span class="dl">&quot;</span><span class="k">/</span><span class="lv">$plugin_page</span><span class="dl">&quot;</span></span>) &amp;&amp; <span class="pd">is_file</span>(<span class="co">WP_PLUGIN_DIR</span> . <span class="s"><span class="dl">&quot;</span><span class="k">/</span><span class="lv">$plugin_page</span><span class="dl">&quot;</span></span>) ) &amp;&amp; !( <span class="pd">file_exists</span>(<span class="co">WPMU_PLUGIN_DIR</span> . <span class="s"><span class="dl">&quot;</span><span class="k">/</span><span class="lv">$plugin_page</span><span class="dl">&quot;</span></span>) &amp;&amp; <span class="pd">is_file</span>(<span class="co">WPMU_PLUGIN_DIR</span> . <span class="s"><span class="dl">&quot;</span><span class="k">/</span><span class="lv">$plugin_page</span><span class="dl">&quot;</span></span>) ) )
</pre></td></tr>


<tr><th class="line-num" id="L163"><a href="#L163">163</a></th><td class="line-code"><pre>                        wp_die(<span class="pd">sprintf</span>(__(<span class="s"><span class="dl">'</span><span class="k">Cannot load %s.</span><span class="dl">'</span></span>), <span class="pd">htmlentities</span>(<span class="lv">$plugin_page</span>)));
</pre></td></tr>


<tr><th class="line-num" id="L164"><a href="#L164">164</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L165"><a href="#L165">165</a></th><td class="line-code"><pre>                do_action(<span class="s"><span class="dl">'</span><span class="k">load-</span><span class="dl">'</span></span> . <span class="lv">$plugin_page</span>);
</pre></td></tr>


<tr><th class="line-num" id="L166"><a href="#L166">166</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L167"><a href="#L167">167</a></th><td class="line-code"><pre>                <span class="r">if</span> ( !<span class="pd">isset</span>(<span class="pd">$_GET</span>[<span class="s"><span class="dl">'</span><span class="k">noheader</span><span class="dl">'</span></span>]))
</pre></td></tr>


<tr><th class="line-num" id="L168"><a href="#L168">168</a></th><td class="line-code"><pre>                        <span class="pd">require_once</span>(<span class="co">ABSPATH</span> . <span class="s"><span class="dl">'</span><span class="k">wp-admin/admin-header.php</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L169"><a href="#L169">169</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L170"><a href="#L170">170</a></th><td class="line-code"><pre>                <span class="r">if</span> ( <span class="pd">file_exists</span>(<span class="co">WPMU_PLUGIN_DIR</span> . <span class="s"><span class="dl">&quot;</span><span class="k">/</span><span class="lv">$plugin_page</span><span class="dl">&quot;</span></span>) )
</pre></td></tr>


<tr><th class="line-num" id="L171"><a href="#L171">171</a></th><td class="line-code"><pre>                        <span class="pd">include</span>(<span class="co">WPMU_PLUGIN_DIR</span> . <span class="s"><span class="dl">&quot;</span><span class="k">/</span><span class="lv">$plugin_page</span><span class="dl">&quot;</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L172"><a href="#L172">172</a></th><td class="line-code"><pre>                <span class="r">else</span>
</pre></td></tr>


<tr><th class="line-num" id="L173"><a href="#L173">173</a></th><td class="line-code"><pre>                        <span class="pd">include</span>(<span class="co">WP_PLUGIN_DIR</span> . <span class="s"><span class="dl">&quot;</span><span class="k">/</span><span class="lv">$plugin_page</span><span class="dl">&quot;</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L174"><a href="#L174">174</a></th><td class="line-code"><pre>        }
</pre></td></tr>


<tr><th class="line-num" id="L175"><a href="#L175">175</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L176"><a href="#L176">176</a></th><td class="line-code"><pre>        <span class="pd">include</span>(<span class="co">ABSPATH</span> . <span class="s"><span class="dl">'</span><span class="k">wp-admin/admin-footer.php</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L177"><a href="#L177">177</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L178"><a href="#L178">178</a></th><td class="line-code"><pre>        <span class="pd">exit</span>();
</pre></td></tr>


<tr><th class="line-num" id="L179"><a href="#L179">179</a></th><td class="line-code"><pre>} <span class="r">else</span> <span class="r">if</span> (<span class="pd">isset</span>(<span class="pd">$_GET</span>[<span class="s"><span class="dl">'</span><span class="k">import</span><span class="dl">'</span></span>])) {
</pre></td></tr>


<tr><th class="line-num" id="L180"><a href="#L180">180</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L181"><a href="#L181">181</a></th><td class="line-code"><pre>        <span class="lv">$importer</span> = <span class="pd">$_GET</span>[<span class="s"><span class="dl">'</span><span class="k">import</span><span class="dl">'</span></span>];
</pre></td></tr>


<tr><th class="line-num" id="L182"><a href="#L182">182</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L183"><a href="#L183">183</a></th><td class="line-code"><pre>        <span class="r">if</span> ( ! current_user_can(<span class="s"><span class="dl">'</span><span class="k">import</span><span class="dl">'</span></span>) )
</pre></td></tr>


<tr><th class="line-num" id="L184"><a href="#L184">184</a></th><td class="line-code"><pre>                wp_die(__(<span class="s"><span class="dl">'</span><span class="k">You are not allowed to import.</span><span class="dl">'</span></span>));
</pre></td></tr>


<tr><th class="line-num" id="L185"><a href="#L185">185</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L186"><a href="#L186">186</a></th><td class="line-code"><pre>        <span class="r">if</span> ( validate_file(<span class="lv">$importer</span>) ) {
</pre></td></tr>


<tr><th class="line-num" id="L187"><a href="#L187">187</a></th><td class="line-code"><pre>                wp_redirect( admin_url( <span class="s"><span class="dl">'</span><span class="k">import.php?invalid=</span><span class="dl">'</span></span> . <span class="lv">$importer</span> ) );
</pre></td></tr>


<tr><th class="line-num" id="L188"><a href="#L188">188</a></th><td class="line-code"><pre>                <span class="pd">exit</span>;
</pre></td></tr>


<tr><th class="line-num" id="L189"><a href="#L189">189</a></th><td class="line-code"><pre>        }
</pre></td></tr>


<tr><th class="line-num" id="L190"><a href="#L190">190</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L191"><a href="#L191">191</a></th><td class="line-code"><pre>        <span class="r">if</span> ( ! <span class="pd">isset</span>(<span class="lv">$wp_importers</span>[<span class="lv">$importer</span>]) || ! <span class="pd">is_callable</span>(<span class="lv">$wp_importers</span>[<span class="lv">$importer</span>][<span class="i">2</span>]) ) {
</pre></td></tr>


<tr><th class="line-num" id="L192"><a href="#L192">192</a></th><td class="line-code"><pre>                wp_redirect( admin_url( <span class="s"><span class="dl">'</span><span class="k">import.php?invalid=</span><span class="dl">'</span></span> . <span class="lv">$importer</span> ) );
</pre></td></tr>


<tr><th class="line-num" id="L193"><a href="#L193">193</a></th><td class="line-code"><pre>                <span class="pd">exit</span>;
</pre></td></tr>


<tr><th class="line-num" id="L194"><a href="#L194">194</a></th><td class="line-code"><pre>        }
</pre></td></tr>


<tr><th class="line-num" id="L195"><a href="#L195">195</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L196"><a href="#L196">196</a></th><td class="line-code"><pre>        <span class="lv">$parent_file</span> = <span class="s"><span class="dl">'</span><span class="k">tools.php</span><span class="dl">'</span></span>;
</pre></td></tr>


<tr><th class="line-num" id="L197"><a href="#L197">197</a></th><td class="line-code"><pre>        <span class="lv">$submenu_file</span> = <span class="s"><span class="dl">'</span><span class="k">import.php</span><span class="dl">'</span></span>;
</pre></td></tr>


<tr><th class="line-num" id="L198"><a href="#L198">198</a></th><td class="line-code"><pre>        <span class="lv">$title</span> = __(<span class="s"><span class="dl">'</span><span class="k">Import</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L199"><a href="#L199">199</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L200"><a href="#L200">200</a></th><td class="line-code"><pre>        <span class="r">if</span> (! <span class="pd">isset</span>(<span class="pd">$_GET</span>[<span class="s"><span class="dl">'</span><span class="k">noheader</span><span class="dl">'</span></span>]))
</pre></td></tr>


<tr><th class="line-num" id="L201"><a href="#L201">201</a></th><td class="line-code"><pre>                <span class="pd">require_once</span>(<span class="co">ABSPATH</span> . <span class="s"><span class="dl">'</span><span class="k">wp-admin/admin-header.php</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L202"><a href="#L202">202</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L203"><a href="#L203">203</a></th><td class="line-code"><pre>        <span class="pd">require_once</span>(<span class="co">ABSPATH</span> . <span class="s"><span class="dl">'</span><span class="k">wp-admin/includes/upgrade.php</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L204"><a href="#L204">204</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L205"><a href="#L205">205</a></th><td class="line-code"><pre>        <span class="pd">define</span>(<span class="s"><span class="dl">'</span><span class="k">WP_IMPORTING</span><span class="dl">'</span></span>, <span class="pc">true</span>);
</pre></td></tr>


<tr><th class="line-num" id="L206"><a href="#L206">206</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L207"><a href="#L207">207</a></th><td class="line-code"><pre>        <span class="r">if</span> ( apply_filters( <span class="s"><span class="dl">'</span><span class="k">force_filtered_html_on_import</span><span class="dl">'</span></span>, <span class="pc">false</span> ) )
</pre></td></tr>


<tr><th class="line-num" id="L208"><a href="#L208">208</a></th><td class="line-code"><pre>                kses_init_filters();  <span class="c">// Always filter imported data with kses on multisite.</span>
</pre></td></tr>


<tr><th class="line-num" id="L209"><a href="#L209">209</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L210"><a href="#L210">210</a></th><td class="line-code"><pre>        call_user_func(<span class="lv">$wp_importers</span>[<span class="lv">$importer</span>][<span class="i">2</span>]);
</pre></td></tr>


<tr><th class="line-num" id="L211"><a href="#L211">211</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L212"><a href="#L212">212</a></th><td class="line-code"><pre>        <span class="pd">include</span>(<span class="co">ABSPATH</span> . <span class="s"><span class="dl">'</span><span class="k">wp-admin/admin-footer.php</span><span class="dl">'</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L213"><a href="#L213">213</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L214"><a href="#L214">214</a></th><td class="line-code"><pre>        <span class="c">// Make sure rules are flushed</span>
</pre></td></tr>


<tr><th class="line-num" id="L215"><a href="#L215">215</a></th><td class="line-code"><pre>        flush_rewrite_rules(<span class="pc">false</span>);
</pre></td></tr>


<tr><th class="line-num" id="L216"><a href="#L216">216</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L217"><a href="#L217">217</a></th><td class="line-code"><pre>        <span class="pd">exit</span>();
</pre></td></tr>


<tr><th class="line-num" id="L218"><a href="#L218">218</a></th><td class="line-code"><pre>} <span class="r">else</span> {
</pre></td></tr>


<tr><th class="line-num" id="L219"><a href="#L219">219</a></th><td class="line-code"><pre>        do_action(<span class="s"><span class="dl">&quot;</span><span class="k">load-</span><span class="lv">$pagenow</span><span class="dl">&quot;</span></span>);
</pre></td></tr>


<tr><th class="line-num" id="L220"><a href="#L220">220</a></th><td class="line-code"><pre>        <span class="c">// Backwards compatibility with old load-page-new.php, load-page.php,</span>
</pre></td></tr>


<tr><th class="line-num" id="L221"><a href="#L221">221</a></th><td class="line-code"><pre>        <span class="c">// and load-categories.php actions.</span>
</pre></td></tr>


<tr><th class="line-num" id="L222"><a href="#L222">222</a></th><td class="line-code"><pre>        <span class="r">if</span> ( <span class="lv">$typenow</span> == <span class="s"><span class="dl">'</span><span class="k">page</span><span class="dl">'</span></span> ) {
</pre></td></tr>


<tr><th class="line-num" id="L223"><a href="#L223">223</a></th><td class="line-code"><pre>                <span class="r">if</span> ( <span class="lv">$pagenow</span> == <span class="s"><span class="dl">'</span><span class="k">post-new.php</span><span class="dl">'</span></span> )
</pre></td></tr>


<tr><th class="line-num" id="L224"><a href="#L224">224</a></th><td class="line-code"><pre>                        do_action( <span class="s"><span class="dl">'</span><span class="k">load-page-new.php</span><span class="dl">'</span></span> );
</pre></td></tr>


<tr><th class="line-num" id="L225"><a href="#L225">225</a></th><td class="line-code"><pre>                <span class="r">elseif</span> ( <span class="lv">$pagenow</span> == <span class="s"><span class="dl">'</span><span class="k">post.php</span><span class="dl">'</span></span> )
</pre></td></tr>


<tr><th class="line-num" id="L226"><a href="#L226">226</a></th><td class="line-code"><pre>                        do_action( <span class="s"><span class="dl">'</span><span class="k">load-page.php</span><span class="dl">'</span></span> );
</pre></td></tr>


<tr><th class="line-num" id="L227"><a href="#L227">227</a></th><td class="line-code"><pre>        }  <span class="r">elseif</span> ( <span class="lv">$pagenow</span> == <span class="s"><span class="dl">'</span><span class="k">edit-tags.php</span><span class="dl">'</span></span> ) {
</pre></td></tr>


<tr><th class="line-num" id="L228"><a href="#L228">228</a></th><td class="line-code"><pre>                <span class="r">if</span> ( <span class="lv">$taxnow</span> == <span class="s"><span class="dl">'</span><span class="k">category</span><span class="dl">'</span></span> )
</pre></td></tr>


<tr><th class="line-num" id="L229"><a href="#L229">229</a></th><td class="line-code"><pre>                        do_action( <span class="s"><span class="dl">'</span><span class="k">load-categories.php</span><span class="dl">'</span></span> );
</pre></td></tr>


<tr><th class="line-num" id="L230"><a href="#L230">230</a></th><td class="line-code"><pre>                <span class="r">elseif</span> ( <span class="lv">$taxnow</span> == <span class="s"><span class="dl">'</span><span class="k">link_category</span><span class="dl">'</span></span> )
</pre></td></tr>


<tr><th class="line-num" id="L231"><a href="#L231">231</a></th><td class="line-code"><pre>                        do_action( <span class="s"><span class="dl">'</span><span class="k">load-edit-link-categories.php</span><span class="dl">'</span></span> );
</pre></td></tr>


<tr><th class="line-num" id="L232"><a href="#L232">232</a></th><td class="line-code"><pre>        }
</pre></td></tr>


<tr><th class="line-num" id="L233"><a href="#L233">233</a></th><td class="line-code"><pre>}
</pre></td></tr>


<tr><th class="line-num" id="L234"><a href="#L234">234</a></th><td class="line-code"><pre>
</pre></td></tr>


<tr><th class="line-num" id="L235"><a href="#L235">235</a></th><td class="line-code"><pre><span class="r">if</span> ( !<span class="pd">empty</span>(<span class="pd">$_REQUEST</span>[<span class="s"><span class="dl">'</span><span class="k">action</span><span class="dl">'</span></span>]) )
</pre></td></tr>


<tr><th class="line-num" id="L236"><a href="#L236">236</a></th><td class="line-code"><pre>        do_action(<span class="s"><span class="dl">'</span><span class="k">admin_action_</span><span class="dl">'</span></span> . <span class="pd">$_REQUEST</span>[<span class="s"><span class="dl">'</span><span class="k">action</span><span class="dl">'</span></span>]);
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
