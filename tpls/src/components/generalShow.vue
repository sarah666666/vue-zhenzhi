<template>
    <div>
       <div class="banner">
            <!--  1.1 图片区域   -->
            <img src="../assets/imgs/index/banner-logo-1.png">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
           <!--  1.2 左右方向按钮-->
            <a href="javascript:;" class="ck-slide ck-left" data-dove="left">&lt;</a>
            <a href="javascript:;" class="ck-slide ck-right" data-dove="right">&gt;</a>
            <!--
             1.3 导航小圆点
            <ul class="indicators" data-load="bannerInds">
                &lt;!&ndash;<li></li>&ndash;&gt;
            </ul>-->
        </div>
        <!-- 3.每周客片  -->
        <div id="week-show" class="floor">
            <!--  3.1 每周客片 头部   -->
            <div class="week-header-index" data-load="week">
                 <img src="../assets/imgs/index/show-header.png">
                 <div>
                     <b>LOVE</b>
                     <span>&nbsp;&nbsp;SHOWCASE&nbsp;&nbsp;</span>
                     <i>每周客片</i>
                 </div>
                 <p>GOLDENMILAN CUSTOMER SERVICE CHANNELS WORKS ON DISPLAY ARE
                    FROM REAL CUSTOMERS</p>
                 <P>CUSTOM PHOTOS.AND | AGREE BY THE CUSTOMER'SOFFICIAL WEBSITE
                    WWW.ZZ.COM</P>
            </div>
            <!--  3.2 每周客片 展示区  -->
            <ul class="week-show">
                <!-- 数据库中加载图片-->
                <li v-for="(p,index) in weekList" :key="index" @click="toWeek(p.mon+p.week)">
                <a href="javascript:;" class="week-show-pic">
                <img :src="require('../assets/'+p.weekIndex)" :title="parseInt(p.mon)+'月第'+p.week+'季'">
                <div class="shade week-shade">
                <p>懂年轻的你</p>
                <span style="color:greenyellow">YOUNG|FASHION|SIMPLE|HAPPINESS</span>
                </div>
                </a>
                <a href="javascript:;" class="week-show-font">{{p.mon+'月第'+p.week+'季'}}</a>
                <p>CHINA/GLOBAL/TRAVEL/PHOTOGRAPHY</p>
                </li>
            </ul>
            <!--  3.3 每周客片 分页 -->
            <ul class="pagination">
                <li v-for="(page,index) in weekPageList" :key="index" :class="{active:weekPno==page}" @click="changeWeekPage(page)"><a href="javascript:;">{{page}}</a></li>
            </ul>
        </div>
        <!-- 4.六大场馆 -->
        <div class="venue floor" id="venue">
            <div class="venue-title">六· 大· 场· 馆</div>
            <div class="venue-photos">
                <div>
                    <img src="../assets/imgs/index/index-low.png">
                    <img src="../assets/imgs/index/venue-1.png" class="venue-detail">
                    <p>弥花馆</p>
                </div>
                <div>
                    <img src="../assets/imgs/index/index-low.png">
                    <img src="../assets/imgs/index/venue-2.png" class="venue-detail">
                    <p>英伦馆</p>
                </div>
                <div>
                    <img src="../assets/imgs/index/index-low.png">
                    <img src="../assets/imgs/index/venue-3.png" class="venue-detail">
                    <p>皇冠馆</p>
                </div>
                <div>
                    <img src="../assets/imgs/index/index-low.png">
                    <img src="../assets/imgs/index/venue-4.png" class="venue-detail">
                    <p>巴比伦馆</p>
                </div>
                <div>
                    <img src="../assets/imgs/index/index-low.png">
                    <img src="../assets/imgs/index/venue-5.png" class="venue-detail">
                    <p>韩风馆</p>
                </div>
                <div>
                    <img src="../assets/imgs/index/index-low.png">
                    <img src="../assets/imgs/index/venue-6.png" class="venue-detail">
                    <p>维纳馆</p>
                </div>
            </div>
        </div>
        <!-- 5.外景作品  -->
        <div id="outer-show" class="floor">
            <!-- 5.1 外景作品  头部 -->
            <div class="week-header-index" data-load="week">
                <img src="../assets/imgs/index/show-header.png">
                <div>
                    <b>LOVE</b>
                    <span>&nbsp;&nbsp;WEDDING&nbsp;&nbsp;</span>
                    <i>外景作品</i>
                </div>
                <p>GOLDENMILAN CUSTOMER SERVICE CHANNELS WORKS ON DISPLAY ARE
                    FROM REAL CUSTOMERS</p>
                <P>CUSTOM PHOTOS.AND | AGREE BY THE CUSTOMER'SOFFICIAL WEBSITE
                    WWW.ZZ.COM</P>
            </div>
            <!--  5.2 外景作品  展示区  -->
            <ul class="outer-show">
              <li v-for="(p,index) in outerList" :key="index"  @click="toOuter(p.oid)">
                <a href="javascript:;" class="outer-show-pic">
                  <img :src="require('../assets/'+p.outerIndex)" :title="p.title">
                </a>
                <div class="move-content">
                  <div class="move-title">{{p.title}}
                    <p>CHINA/GLOBAL/TRAVEL/PHOTOGRAPHY</p></div>
                  <div class="move-left"></div>
                  <div class=move-right></div>
                </div>
              </li>
            </ul>
            <!-- 5.3 外景作品分页  -->
            <ul class="pagination1">
              <li v-for="(page,index) in outerPageList" @click="changeOuterPage(page)" :class="{active:outerPno==page}" :key="index"><a href="javascrip:;">{{page}}</a></li>
            </ul>
        </div>
        <!-- 6.页面底部图片报价  -->
        <div id="bottom-quote">
            <!--  6.1 图片展示区下快速报价大图 -->
            <img src="../assets/imgs/index/footer-price.png">
            <!-- 6.2 纯文本 -->
            <div class="pure-text">懂年轻的你，轻奢 雅致 幸福</div>
        </div>
        <ul class="right-tab">
            <li class="active"><a href="#header">顶部</a></li>
            <li><a href="#week-show">每周客片</a></li>
            <li><a href="#venue">场馆介绍</a></li>
            <li><a href="#outer-show">外景作品</a></li>
        </ul>
    </div>
</template>
<script>
    export default{
        mounted:function(){
            this.timer = setInterval(this.task,4100);
            //加载每周客片
            this.loadWeekListByPno();
            //加载外景作品
            this.loadOuterListByPno();
            //六大会馆图片动画
            $(()=>{
              $(".venue-photos div").on("mouseenter",'img',function(){
                $('img.venue-detail').removeClass('push');
                $(this).next().addClass("push");
              });
               $(".venue-photos div").on("mouseleave",'img',function(){
                $(this).next().removeClass("push");
              })
            });
            //右侧固定导航滚动
           
            $(()=>{
                $(window).scroll(()=>{
                    if(this.scrollWatch){
                    var scrollTop = $(window).scrollTop();
                    var $floors = $(".floor");
                      //console.log(floors[0]);
                    for(var i=0;i<$floors.length;i++){
                     //console.log(floors[i]);
                           var $f = $($floors[i]);
                            if($f.offset().top<=scrollTop+innerHeight/2){
                               $(`ul.right-tab>li:eq(${i})`).addClass("active").siblings().removeClass("active");
                             }
                     }
                    //每周客片出场动画
                    if($($floors[1]).offset().top<=scrollTop+innerHeight/2){
                        $("ul.week-show>li").addClass("animated rotateIn");
                    }
                    //外景作品出场动画
                    if($($floors[3]).offset().top<=scrollTop+innerHeight/2){
                        $("ul.outer-show>li").addClass("animated zoomIn");
                    }
                  }
                });
            })
        },
        data:function(){
            return{
                i:1,
                timer:null,
                carouselTimer:null,
                weekPno:1,
                weekList:[],
                weekPageList:[],
                weekPageCount:1,
                outerPno:1,
                outerList:[],
                outerPageList:[],
                outerPageCount:1,
                timer1:null,
                scrollWatch:true
            }
        },
        methods:{
            task:function(){
                this.i++;
                if(this.i==4)this.i=1;
                var divs = document.querySelectorAll(".banner>div");
                var j=0,count=12;
                this.timer1 = setInterval(()=>{
                    var div = divs[j];
                    div.style.backgroundImage =`url("/static/imgs/index/banner-logo-${this.i}.png")`;
                    div.className="shake";
                    j++;
                    if(j==count) clearInterval(this.timer1);
                },50)
                setTimeout(()=>{
                    for(var div of divs)div.className="";
                    document.querySelector(".banner>img").src=`/static/imgs/index/banner-logo-${this.i}.png`;
                },50*12+500)
            },
            loadWeekListByPno:function(){
                this.$http.get('http://127.0.0.1/project-sarah-vue/data/03_index_getWeek.php?pno='+this.weekPno).then((result)=>{
                   // console.log(result.data);
                    this.weekList = result.data.data;
                   // console.log(this.weekList);
                    this.weekPageCount = result.data.pageCount;
                    //console.log(weekPageCount);
                    this.weekPageList=[];
                    for(var i=1;i<=this.weekPageCount;i++){
                        this.weekPageList.push(i);
                    }
                })
            },
            changeWeekPage:function(page){
                this.weekPno = page;
                this.loadWeekListByPno();
            },
          loadOuterListByPno:function(){
            this.$http.get('http://127.0.0.1/project-sarah-vue/data/07_index_getOuter.php?pno='+this.outerPno).then((result)=>{
              //console.log(result.data);
              this.outerList = result.data.data;
              //console.log(this.outerList);
              this.outerPageCount = result.data.pageCount;
              this.outerPageList=[];
              for(var i=1;i<=this.outerPageCount;i++){
                this.outerPageList.push(i);
              }
            })
          },
          changeOuterPage:function(page){
            this.outerPno = page;
            this.loadOuterListByPno();
          },
          //外景作品点击跳转到outerShow组
         toOuter:function(oid){
             this.$router.push('/outershow/'+oid)
         },
          //每周客片点击跳转到weekShow组
        toWeek:function(dataW){
           this.$router.push('/weekshow/'+dataW)
         },
        },
        handleScroll:function(){
            
                var scrollTop = $(window).scrollTop();
				var $floors = $(".floor");
				//console.log(floors[0]);
				for(var i=0;i<$floors.length;i++){
					//console.log(floors[i]);
					 var $f = $($floors[i]);
					if($f.offset().top<=scrollTop+innerHeight/2){
                         $(`ul.right-tab>li:eq(${i})`).addClass("active").siblings().removeClass("active");
					}
                }
            //每周客片出场动画
             var weekShowTop = $($floors[1]).offset().top;
             if(weekShowTop<=scrollTop+innerHeight/2){
                      $("ul.week-show>li").addClass("animated rotateIn");
             }
            //外景作品出场动画
             var outerShowTop = $($floors[3]).offset().top;
             if(outerShowTop<=scrollTop+innerHeight/2){
                      $("ul.outer-show>li").addClass("animated zoomIn");
             }
        
        },
        destroyed:function(){
            clearInterval(this.timer);
            clearInterval(this.timer1);
            this.scrollWatch = false;
        }
    }
</script>
<style></style>
