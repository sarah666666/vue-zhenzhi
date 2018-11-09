<template>
    <div>
        <div class="outer-ajust" data-load="week">
            <img src="../assets/imgs/index/show-header.png">
            <div>
                <b>LOVE</b>
                <span>&nbsp;&nbsp;SHOWCASE&nbsp;&nbsp;</span>
                <i>外景作品</i>
            </div>
            <p>GOLDENMILAN CUSTOMER SERVICE CHANNELS WORKS ON DISPLAY ARE
                FROM REAL CUSTOMERS</p>
            <P>CUSTOM PHOTOS.AND | AGREE BY THE CUSTOMER'SOFFICIAL WEBSITE
                WWW.ZZ.COM</P>
        </div>
        <div class="outer-pic">
          <div v-for="(p,index) in imageList" :key="index">
                <img :src="require('../assets/'+p.i)">    
            </div> 
        </div>
    </div>
</template>
<script>
    export default{
        mounted:function(){
           this.getOuter();
       },
        data:function(){
            return{
                oid:0,
                imageList:[]
            }
        },
       methods:{
           getOuter(){
               this.oid = this.$route.params.oid;
               //console.log(this.oid);
                this.$http.get('http://127.0.0.1/project-sarah-vue/data/08_outer_show_getOuterDetails.php?oid='+this.oid).then((result)=>{
                    //this.imageList = result.data;
                   //console.log(result.data);
                   this.imageList.push({i:result.data.outerShow1});
                   this.imageList.push({i:result.data.outerShow2});
                   this.imageList.push({i:result.data.outerShow2});
                })
           }
       }
    }
</script>
<style></style>