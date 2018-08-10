<template>
    <div>
        <!-- header section -->
        <div>
            <!-- 1.页面头部  -->
            <div class="header floor" id=header>
                <div class="young">
                    <img src="../assets/imgs/index/header-logo.png">
                    <div>
                        <a href="javascript:;">
                            <img src="../assets/imgs/index/header-logo.png">
                        </a>
                    </div>
                </div>
                <ul class="rt">
                    <li @click="quoteClick">
                        <a href="javascript:;"><i class="icon iconfont icon-web-icon-"></i><p>自助报价</p></a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="icon iconfont icon-dengji-"></i><p>结婚登记</p></a>
                    </li>
                </ul>
                <div class="number">
                    <a href="javascript:;">
                        <p>0551-62228888</p>
                        免费服务咨询&nbsp;SERVICE TEL
                    </a>
                </div>
            </div>
            <!--  2.导航列   -->
            <div class="nav">
                <p>
                    真挚•婚纱摄影
                </p>
                <ul>
                    <li>
                        <a href="#/">首页</a>
                    </li>
                    <li>
                        <a href="#/weekshow/6四">每周客片</a>
                    </li>
                    <li class="takePhoto venueSum">
                        <a href="javascript:;">六大场馆</a>
                        <ul>
                            <li>
                                <a href="javascript:;">弥花馆</a>
                            </li>
                            <li>
                                <a href="javascript:;">英伦馆</a>
                            </li>
                            <li>
                                <a href="javascript:;">皇冠馆</a>
                            </li>
                            <li>
                                <a href="javascript:;">巴比伦馆</a>
                            </li>
                            <li>
                                <a href="javascript:;">韩风馆</a>
                            </li>
                            <li>
                                <a href="javascript:;">维纳馆</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/outershow/55">外景作品</a>
                    </li>
                    <li class="takePhoto">
                        <a href="javascript:;">摄影基地</a>
                        <ul>
                            <li>
                                <a href="javascript:;">爱情庄园</a>
                            </li>
                            <li>
                                <a href="javascript:;">滨湖汉城</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;">优惠活动</a>
                    </li>
                    <li>
                        <a href="javascript:;">品牌解读</a>
                    </li>

                </ul>
            </div>
            <!--  3.页面左侧悬浮框 -->
            <div class="left-banner">
                <span class="close">
                    <i class="icon iconfont icon-cha" style="font-size:8px"></i>
                </span>
                <img src="../assets/imgs/index/left.png">
                <ul>
                    <li @click="quoteClick">
                        <a href="javascript:;">
                            套餐报价
                            <p>在线获取</p>
                        </a>
                        <div class="black-block"></div>
                    </li>
                    <li>
                        <a href="javascript:;">
                            服务热线
                            <p class="other">0551-62668888</p>
                        </a>
                        <div class="black-block"></div>
                    </li>
                    <li>
                        <a href="#/contact">
                            联系我们
                            <p class="other">17755156666</p>
                        </a>
                        <div class="black-block"></div>
                    </li>
                </ul>
                <p></p>
                <a href="javascript:;" @click="quoteClick">
                    <img src="../assets/imgs/index/left-cash.png">
                </a>
            </div>
            <!--  4.页面右侧圆形悬浮框  -->
            <svg style="width:130px;height:130px;" id="svg" @click="quoteClick">
                <circle cx="65px" cy="65px" r="40px" fill="#DA0023" class="round"></circle>
                <circle cx="65px" cy="65px" r="40px" fill="#DA0023"></circle>
                <text fill="#FFE900" font-size="30px" x="50px" y="75px">奖</text>
            </svg>
        </div>
        <router-view></router-view>
        <!-- footer section -->
        <div>
             <!-- 页面底部 -->
            <div class="footer">
                <ul class="footer-list">
                    <li>
                        <a href="index#/">网站首页</a>
                        <b>|</b>
                    </li>
                    <li>
                        <a href="#/weekshow/6四">每周客片</a>
                        <b>|</b>
                    </li>
                    <li>
                        <a href="javascript:;">六大场馆</a>
                        <b>|</b>
                    </li>
                    <li>
                        <a href="#/outershow/55">外景作品</a>
                        <b>|</b>
                    </li>
                    <li>
                        <a href="javascript:;">摄影基地</a>
                        <b>|</b>
                    </li>
                    <li>
                        <a href="javascript:;">品牌解读</a>
                        <b>|</b>
                    </li>
                    <li>
                        <a href="#/contact">联系我们</a>
                    </li>
                </ul>
                <p>
                    <a href="javascript:;"><i class="icon iconfont icon-weibo"></i>&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="javascript:;"><i class="icon iconfont icon-weixin"></i></a>
                </p>
                <b>
                    TEL:0551-62228888
                </b>
                <ul class="footer-add">
                    <li>
                        <p>总店：合肥市高新区科学叨叨6888号</p>
                        <p>总经理投诉：0551-62668899</p>
                    </li>
                    <li>
                        <b>|</b>
                    </li>
                    <li>
                        <p>祁门路店：合肥市高新区祁门路(天鹅湖新地中心3楼)</p>
                        <p>咨询热线：0551-62668866</p>
                    </li>
                </ul>
            </div>
            <!-- 页脚 -->
            <div class="footer-last">
                皖ICP备11004538号 版权所有&copy;2014-2018 安徽真挚婚纱摄影有限公司
            </div>
        </div>
    </div>

</template>
<script>
    export default{
        data:function(){
            return{
                roundTimer:null
            }
        },
        mounted:function(){
            //给右侧悬浮圆框设置定时器
            var round=document.querySelector(".round");
            var r1=0;
            var opa=1;
            var task = function(){
                r1+=1;
                opa*=0.9;
                round.setAttribute("r",`${r1+40}px`);
                round.setAttribute("opacity",opa);
                if(r1>25){
                    r1=0;
                    opa=1;
                }
            }
            this.roundTimer = setInterval(task,1000/20);
        },
        destroyed:function(){
            this.roundTimer = null; 
        },
        methods:{
            quoteClick:function(){
                this.$router.push('/quote');
            }
        }
    }
</script>
