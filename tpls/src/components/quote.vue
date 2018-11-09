<template>
    <div class="container">
        <div class="form-header">
            <h2>真挚摄影官网报价系统</h2>
            <p>获取价目表，仅需<span>简单的四步</span></p>
            <p>参与用户可享受<span>婚照套系立减1000元</span></p>
        </div>
        <form>
            <div class="first-step">
                <p>第一步：选择你喜欢的摄影风格</p>
                <span>每种风格的拍摄流程都不一样，选择后就知道了</span>
                <ul>
                    <li>
                        <img src="../assets/imgs/quote/1-small.png">
                        <input type="checkbox" name="pic" value="1" v-model="pic">
                        <b>NO.1</b>
                    </li>
                    <li>
                        <img src="../assets/imgs/quote/2-small.png">
                        <input type="checkbox" name="pic" value="2" v-model="pic">
                        <b>NO.2</b>
                    </li>
                    <li>
                        <img src="../assets/imgs/quote/3-small.png">
                        <input type="checkbox" name="pic" value="3" v-model="pic">
                        <b>NO.3</b>
                    </li>
                    <li>
                        <img src="../assets/imgs/quote/4-small.png">
                        <input type="checkbox" name="pic" value="4" v-model="pic">
                        <b>NO.4</b>
                    </li>
                    <li>
                        <img src="../assets/imgs/quote/5-small.png">
                        <input type="checkbox" name="pic" value="5" v-model="pic">
                        <b>NO.5</b>
                    </li>
                    <li>
                        <img src="../assets/imgs/quote/6-small.png">
                        <input type="checkbox" name="pic" value="6" v-model="pic">
                        <b>NO.6</b>
                    </li>
                    <li>
                        <img src="../assets/imgs/quote/7-small.png">
                        <input type="checkbox" name="pic" value="7" v-model="pic">
                        <b>NO.7</b>
                    </li>
                    <li>
                        <img src="../assets/imgs/quote/8-small.png">
                        <input type="checkbox" name="pic" value="8" v-model="pic">
                        <b>NO.8</b>
                    </li>
                </ul>
            </div>
            <div class="second-step">
                <p>第二步：选择想拍摄几套服装</p>
                <div>
                    <input style="vertical-align:middle;" type="radio" name="suit" value="4套以内" v-model="suit">4套以内
                </div>
                <div>
                    <input style="vertical-align:middle;" type="radio"name="suit" value="4-5套" v-model="suit">4-5套
                </div>
                <div>
                    <input style="vertical-align:middle;" type="radio"name="suit" value="6套以上" checked v-model="suit">6套以上
                </div>
            </div>
            <div class="third-step">
                <p>第三步：联系方式</p>
                <span>凭手机号可享受1000元现金抵用券，报价与活动也会发送给您哦！</span>
                <input type="text" name="tel" class="tel" v-model="tel">
                <i class="icon iconfont icon-phone"></i>
                <div class="vali">
                    <i class="icon iconfont icon-error"></i>
                    <span>请填写第三步：联系方式</span>
                </div>
                <b>姓名</b>
                <input type="text" name="uname" class="uname" v-model="uname">
                <i class="icon iconfont icon-idcard2f" style="top:101px"></i>
            </div>
            <div class="how-many">
                在您附近共有
                <b>6666</b>
                人获取报价成功
            </div>
            <div class="get-quote">
                <a href="javascript:;" @click="submitData()">最后一步：获取报价</a>
            </div>
        </form>
        <div class="cover">
           <!-- <img src="imgs/quote/7-big.png">
            <div class="pic-details">
                <p>NO.1</p>
                <span>×</span>
            </div>-->
        </div>
    </div>
</template>
<script>
    export default{
        data:function(){
            return {
                tel:'',
                pic:[],
                suit:[],
                uname:'',
                html:''
            }
        },
        mounted:function(){
            $(()=>{
                $(".first-step").on("click","ul li img",(e)=>{
                    var $tar = $(e.target);
                    var i = parseInt($tar.next().val());
                    //console.log($tar);
                    var $cover = $(".cover");
                    var html = "";
                    html += `<img src=../static/imgs/quote/${i}-big.png>
                        <div class="pic-details">
                            <p>NO.${i}</p>
                            <span>×</span>
                        </div>`;
                    $cover.html(html).css("display","block");
                    var $objImg = $(".cover>img");
                    var src = $objImg.attr("src")
                    var img = new Image();
                    img.src = src;
                    img.onload = function(){
                      var  w = this.width;
                        $(".pic-details").css("width",w);
                    }
                        //点击X，关闭遮罩层
                    $(".pic-details span").click(()=> {
                        $(".cover").css("display", "none");
                    })
                })
            })
        },
        methods:{
           submitData(){
               var r = /^1[34578][0-9]{9}$/;
               if(this.tel==null || this.tel==""){
                    $("div.vali").addClass("alert");
                     $(".third-step i.icon-idcard2f").css("top","124px");
                      $("input.tel").focus();
               }else if(!r.test(this.tel)){
                    this.html += `<i class="icon iconfont icon-error"></i>
                    <span>手机号码格式不正确</span>`;
                    $("div.vali").html(html).addClass("alert");
                     $(".third-step i.icon-idcard2f").css("top","124px");
                      $("input.tel").focus();
               }
               let params = {
                   'pic':this.pic.toString(),
                   'suit':this.suit,
                   'tel':this.tel,
                   'uname':this.uname
               }
               console.log(params);
               this.$http.post('http://127.0.0.1/project-sarah-vue/data/06_quote.php',params,{emulateJSON:true}).then((result)=>{
                  // console.log(result.data);
                   if(result.data.code>0){
                       location= "#/quotesuccess";
                   }
               })
           }
        }
    }
</script>