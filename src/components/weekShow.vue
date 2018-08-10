<template>
    <div class="content">               
        <div class="leftList">
            <div class="month" v-if="this.mon<this.maxMon">
                 <div class="m">{{this.preMon}}月</div>
                    <div class="s" id="s">
                         <a @click="changeMsg(preMon+'四')">{{this.preMon}}月第四季</a>
                         <a @click="changeMsg(preMon+'三')">{{this.preMon}}月第三季</a>
                         <a @click="changeMsg(preMon+'二')">{{this.preMon}}月第二季</a>
                         <a @click="changeMsg(preMon+'一')">{{this.preMon}}月第一季</a>
                   </div>
            </div>
            <div class="month"  v-for="(m,index) in monList" :key="index">
                <div class="m">{{m.mon}}月</div>
                    <div class="s" id="s">
                         <a :class="{active:mon==m.mon&&week=='四'}" @click="changeMsg(m.mon+'四')">{{m.mon}}月第四季</a>
                         <a :class="{active:mon==m.mon&&week=='三'}" @click="changeMsg(m.mon+'三')">{{m.mon}}月第三季</a>
                         <a :class="{active:mon==m.mon&&week=='二'}" @click="changeMsg(m.mon+'二')">{{m.mon}}月第二季</a>
                         <a :class="{active:mon==m.mon&&week=='一'}" @click="changeMsg(m.mon+'一')">{{m.mon}}月第一季</a>
                   </div>
            </div>
        </div>
        <div class="week-header" data-load="week">
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
        <div class="pic_show">
            <div v-for="(p,index) in imageList" :key="index">
                <img :src="require('../assets/'+p.i)">    
            </div>                 
        </div>
    </div>
</template>
<script>
    export default{
        mounted:function(){
            this.getWeek();
            this.getMonList();
        },
        data:function(){
            return {
                week:'',
                mon:0,
                imageList:[],
                monList:[],
                maxMon:0,
                preMon:0,
                str:''
            }
        },
        methods:{
            getWeek:function(){
               var search = document.location.href;
                var str = decodeURIComponent(search)
               this.week = str.charAt(str.length-1);
               this.mon = str.charAt(str.length-2);
               // console.log(this.week+'-------'+this.mon);
             //   this.mon = this.$route.params.data.slice(0,1);
              //  this.week = this.$route.params.data.slice(1);
              this.imageList=[];
                 this.$http.get('http://127.0.0.1/project-sarah-vue/data/05_week_show_getWeekDetails.php?week='+this.week+'&mon='+this.mon).then((result)=>{
                    this.imageList.push({i:result.data.weekShow1})
                    this.imageList.push({i:result.data.weekShow2})
                    this.imageList.push({i:result.data.weekShow3})
                   // console.log("++++",this.imageList);
                 })
            },
            getMonList:function(){
                this.$http.get('http://127.0.0.1/project-sarah-vue/data/04_week_show_getWeek.php?mon='+this.mon).then((result)=>{
                   // console.log(result.data);
                    this.monList=result.data.data;
                    //console.log(this.monList);
                    this.maxMon = result.data.maxMon;
                    //console.log(this.mon);
                    this.preMon = parseInt(this.mon)+1;
                })
            },
            changeMsg:function(data){
               // console.log(data);
                this.mon = data.charAt(0);
                this.week = data.charAt(1);
                this.$router.push('/weekshow/'+data);
             // console.log(this.week+'-------'+this.mon);
                this.getMonList();
               this.getWeek();
               //console.log(this.week+'-------'+this.mon);
            }
        }
    }
</script>
<style></style>