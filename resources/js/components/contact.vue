<template>
    <div class="contact">
        <div class="container">
                <div class="row">
                    <div class="col-xl-8 formMess">
                        <form action="" method="" style="height:100%">
                            <div class="row">
                                <div class="col-xl-6">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" :class='s'>
                                </div>
                                <div class="col-xl-6">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" :class='s'>
                                </div>
                            </div>
                            <label for="email">Email</label>
                            <input type="email" id="email" :class='s'>
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" :class='s'>
                            <label for="message">Message</label>
                            <textarea id="message" cols="30" rows="10" :class='s'></textarea>
                            <button type="submit">{{ send }}</button>
                        </form>
                    </div>
                    <div class="col-xl-4 infoSalon">
                        <div>
                            <h5>address:</h5>
                            <p v-for="item in address" :key="item.id">{{ item[0] }} - {{ item[1] }}</p>
                            <h5>phone:</h5>
                            <p v-for="item in phone" :key="item.id">{{item[0]}}: (+84){{ item[1] }}</p>
                            <h5>email address:</h5>
                            <p v-for="item in salon" :key="item.email">{{ item.email }}</p>
                            <h5>website:</h5>
                            <p v-for="item in salon" :key="item.website">{{ item.website }}</p>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <h3>{{wishes}}</h3>
                    <button type="submit">Visit Our Salon Now</button>
                </div>  
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                s: 'form-control',
                send: 'Send Message',
                name:'',
                address: '',
                phone:'',
                salon:'',
                wishes: 'We want your hair to look fabulous',
                };
            },
            created(){
                this.showContact();
            },
            methods: {
                showContact(){
                    axios.get('api/contact').then(response=>{
                        var contact=response.data.data.contact;
                        var address=[];
                        var phone=[];
                        var email=[];
                        var website=[];
                        for(var i=0;i<contact.length;i++){
                        address.push([contact[i].name,contact[i].address]);
                        phone.push([contact[i].name,contact[i].phone]);
                        }
                        this.address=address;
                        this.phone=phone;
                        this.salon=response.data.data.salon;
                   });
                }
            }
    }
</script>

<style lang="scss" scoped>

</style>