
// Choose quantity
new Vue ({
    el:'#choose-quantity',
    data:{
        counter:0,
    },
    methods:{
        countUp: function() {
            this.counter+=1;
            return this.counter
        },
        countDown: function() {
            if(this.counter < 1){
                this.counter==0;
            }
            else{
                this.counter-=1;
                return this.counter
            }
        }
    }
})