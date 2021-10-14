<template>
<div>
  <b-container class="d-flex justify-content-center">
    <p>{{interval.toFixed(2)}}</p> <!-- 小数2桁まで表示 -->

    <i class="fas fa-power-off fa-10x"
    style="color:#0DCAf0;"
    @click="startTimer()"
     v-show="!active"></i>

    <i class="fas fa-power-off  fa-10x"
    style="color:#00ff7f;"
    @click="stopTimer()"
     v-show="active"></i>

    <button @click="resetTimer()">Reset</button>
  </b-container>
</div>
</template>

<script>
export default {
    name: 'stopWatch',
    data(){
        return {
            active : false, // 実行状態
            start : 0, // startを押した時刻
            timer : 0, // setInterval()の格納用
            interval : 0, // 計測時間
            accum : 0, // 累積時間(stopしたとき用)
        }
    },
    methods:{
        startTimer(){
            this.active = true;
            this.start = Date.now();
            this.timer = setInterval(()=>{ this.interval = this.accum + (Date.now() - this.start) * 0.001;}, 10); // 10msごとに現在時刻とstartを押した時刻の差を足す
         },
        stopTimer(){
            this.active = false;
            this.accum = this.interval;
            clearInterval(this.timer);
        },
        resetTimer(){
            this.interval = 0;
            this.accum = 0;
            this.start = Date.now();
        }
    }
}
</script>
