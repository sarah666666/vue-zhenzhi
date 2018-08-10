<template>
    <div class="contact-box">
            <h4>联系我们</h4>
            <div class="contact-text">
                <div class=contact-detail>
                    <p>安徽真挚婚纱摄影有限公司</p>
                    <ul>
                        <li>地址：合肥市高新区科学大道6888号</li>
                        <li>邮编：230011</li>
                        <li>电话：0551-62228888</li>
                        <li>传真：0551-62228889</li>
                        <li>网址：</li>
                    </ul>
                </div>
                <div id="map"></div>
            </div>
        </div>
</template>
<script type="text/javascript">
    export default{
        mounted:function(){
           var map = new BMap.Map("map");
            var point = new BMap.Point(117.204681,31.817646);
            map.centerAndZoom(point,15);
            map.addControl(new BMap.NavigationControl());
            map.addControl(new BMap.ScaleControl());
            map.addControl(new BMap.OverviewMapControl());
            map.addControl(new BMap.MapTypeControl());
        }
    }
</script>