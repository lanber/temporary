<html>
<head>
    <style type="text/css">
        body {
            height: 100%;
            width: 100%;
            margin: 0px;
            background-color: rgb(82, 86, 89);
            overflow: scroll;
        }
        #panel {
            position: relative;
            margin-top:20px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            box-shadow: 2px 2px 2px #000000;
            border-radius: 3px;
        }
        #content {
            margin:10px;
            position:relative;
        }
        .font-big {
            font-size: 20px;
            font-weight: bold;
        }
        .font-middle {
            font-size: 18px;
        }
        .font-title {
            font-size: 30px;
        }
        .avatar {
            position: absolute;
            width:120px;
            height:150px;
            top:20px;
            right:20px;

        }
        .graph-rectangle {
            background-color: #74abe9;
            width:200px;
            height: 50px;
            color: white;
            text-align:center;
            line-height: 50px;
        }
        .graph-line {
            height:3px;
            background-color: #74abe9;
        }
        .graph-triangle {
            width:0;
            height:0;
            border:3px solid #74abe9;
            border-bottom-color:transparent;
            border-left-color:transparent;
        }
        .year {
            position: absolute;
            right:0px;
        }
        .introduction {
            position:relative;
        }
        .introduction-title {
            margin-left: 37px;
        }
        .introduction-content {
            margin-left: 37px;
        }
    </style>
</head>

<body>
    <div id="panel">
        <div id="content">
            <div>
                <span class="font-big">邵洪泉（天津）</span><br>
                <span class="font-middle"><b>三年深圳工作经历</b></span><br>
                <span class="font-middle"><b>联系电话：</b>13212284624</span><br>
                <span class="font-middle"><b>邮箱地址：</b>danielshaohq@gmail.com</span><br>
                <span class="font-middle"><b>应聘职位：</b>PHP开发工程师[北京]</span><br>
                <img class= "avatar" src="https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=3489460944,680904180&fm=26&gp=0.jpg">
            </div>
            <div id="separate1">
                <div class="graph-rectangle font-title">工作经历</div>
                <div class="graph-line"></div>
                <div class="graph-triangle"></div>
            </div>
            <div class="introduction">
                <span class="font-middle"><b>史蒂夫软件（深圳）有限公司 - php中级开发</b></span>
                <span class="font-middle year"><b>2018.05 - 2019.05</b></span><br>
                <span class="font-middle">棋牌领域创业公司，主要产品为红幺鸡麻将(<a href="http://hall-channel-langpage.stevengame.com:90/index.html?channel=19&productId=9999">体验地址</a>)。</span><br>
                <span class="font-middle introduction-title"><b>1. 账号系统的构建及开发</b></span><br>
                <div class="introduction-content">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018年8月至9月期间，本人主要负责账号系统的构建及接口开发工作。该系统以用户手机号为主体，同时接入了原生微信SDK以及quickSDK，并且集成了双通道第三方短信发送服务及手机归属地查询服务。业务逻辑主要使用CI框架构建，引入了service层，并在model层集成了Eloquent orm。接口协议使用了Json和RPC。数据层面上利用一致性哈希算法和snowflake算法对MySQL进行了水平分表，使用Redis实现了数据缓存、异步队列以及频率控制的功能。架构层面，在Nginx与账号系统之间，做了业务层面的分发服务，以降低模块间耦合度，同时使用了ELK监控服务状态。接口文档采用了yapi工具管理。目前此系统支持的游戏日活30w+，月活150w+。</span>
                </div>
                <span class="font-middle introduction-title"><b>2. 充值系统的构建及开发</b></span><br>
                <div class="introduction-content">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018年9月至10月期间，本人主要负责充值系统的构建及接口开发工作。目前该系统接入了原生支付宝SDK、微信SDK、第三方quickSDK以及PayPal等第三方服务。在业务上线初期，出现了偶现的充值到账有延迟的问题，在通过线上日志打点、客户端和服务端抓包等方式排查后，定位到了第三方偶现支付成功回调延迟的问题。于是将现有业务在仅监听支付回调的基础上，增加了主动访问支付结果的机制，即回调信息或支付结果查询任一状态为支付成功，则完成此次支付流程。目前该系统全支付平台可实现充值商品秒级到账。</span>
                </div>
                <span class="font-middle introduction-title"><b>3. 管理后台</b></span><br>
                <div class="introduction-content">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在供职期间，除重要模块的开发工作外，本人主要负责的工作为游戏管理后台的开发。管理后台主要由ThinkPhp3.2框架+jQuery+Bootstarp搭建，在LAMP环境下开发与测试，代码版本管理及部署使用Git+JenKins的方式。后台主要内容为游戏数据展示、游戏和运营相关参数的动态更改、游戏活动的相关管理以及游戏维护状态的管理。本人在供职期间积累了大量后台开发经验。</span>
                </div>
                <span class="font-middle"><b>亿达信息技术有限公司 - php开发助理（腾讯坐席外包）</b></span>
                <span class="font-middle year"><b>2016.12 - 2018.05</b></span><br>
                <div class="introduction-content">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本人主要负责腾讯问卷、腾讯投票小程序的接口开发工作。其中腾讯投票小程序在团队合作下获得了张小龙亲自点赞，并荣登知晓小程序商店使用工具类第一名，本人也因此项目获得多种奖励。</span>
                </div>
            </div>
            <div id="separate1">
                <div class="graph-rectangle font-title">教育经历</div>
                <div class="graph-line"></div>
                <div class="graph-triangle"></div>
            </div>
            <div class="introduction">
                <span class="font-middle"><b>天津理工大学（本科）</b></span>
                <span class="font-middle year"><b>2012.09 - 2016.07</b></span><br>
                <div class="introduction">
                    <ul>
                        <li>专业：计算机科学与技术</li>
                        <li>天津理工大学一等奖学金(2015)、三等奖学金(2012)；校学生网络工作室社长</li>
                    </ul>
                </div>
            </div>
            <div id="separate1">
                <div class="graph-rectangle font-title">自我评价</div>
                <div class="graph-line"></div>
                <div class="graph-triangle"></div>
            </div>
            <div class="introduction">
                <div class="introduction">
                    <ul>
                        <li>熟练掌握PHP+MySQL编程，有应对高并发的经验，有基于CodeIgniter和ThinkPHP的工作经验。</li>
                        <li>熟练掌握Redis，有集群经验。</li>
                        <li>熟练掌握Linux环境开发；有微信公众号开发经历。
                        <li>较熟练掌握Javascript、Ajax、CSS，并且能熟练使用jQuery和Bootstrap等框架。</li>
                        <li>拥有架构设计、团队协同、跨部门合作经验。</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
