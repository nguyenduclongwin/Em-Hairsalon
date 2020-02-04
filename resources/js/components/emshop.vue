<template>
    <div class="EM-shop">
    <div class="head-store">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow rollIn">
                    <h2 class="main-title-Em-shop">Welcome to EM shop</h2>
                    <p>Vao shop tich diem hang ngay de duoc giam gia</p>
                </div>
            </div>
        </div>
    </div>
    <div class="show_new_products">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12-col-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <img src="images/image_hair_em_shop1.jpg" alt="image_hair_em_shop1.jpg" width="95%">
                            <p>EM shop luon mang lai nhung san pham cho nguoi dung</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12-col-12">
                    <div v-for="item in news" :key="item.id" class="row section_products">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <img :src="item.photo" alt="shapoo1.jpg" width="100%">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                            <p class="new_products">New</p>
                            <p class="information-product">{{item.name}} chỉ <span class="real_price">{{item.price-(item.price*item.sale/100)}}$</span></p>
                            <p>{{item.description}}</p>
                            <button class="booking_now">Add cart</button>                        
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
    <div class="sale_products">
        <div class="container">
            <div class="row">
                <div class="col-xl-12" style="margin-top:25px;">
                    <h3>Nhung san pham dang duoc sale</h3>
                </div>
                <div v-for="item in sales" :key="item.id" class="col-xl-6"  style="margin-top: 10px;">
                    <div class="row section_products">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <img :src="item.photo" alt="clean face 1" width="100%">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                            <p style="display: inline-block;" class="information-product">{{item.name}}</p>
                            <div class="price_product"> <span>Sale off: </span> <i><del>{{item.price}}$</del></i> <p class="real_price">{{item.price-(item.price*item.sale/100)}}$</p></div>   
                            <button class="booking_now">Add cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_all_product">
        <!-- <div class="start_all_product"> -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 Emsalon_target">
                    <h3 class="title_Emsalon_target">Khách hàng luôn là mục tiêu hàng đầu của Em Hair Salon</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div v-for="item in products" :key="item.id" class="row">
                <div class="col-xl-12">
                    <h4 class="name_items">{{item.name_cat}}</h4>
                </div>
                <div v-for="pro in item.pro" :key="pro.id" class="col-xl-2 section_products">
                    <img :src="pro.photo" alt="acne mask" width="100%">
                    <p class="text_section_products">{{pro.name}}</p>
                    <p class="real_price">{{pro.price-(pro.price*pro.sale/100)}}$</p>
                    <button class="booking_now">Add cart</button>
                </div>
                <!-- <div class="col-xl-2 section_products">
                    <img src="images/images_EM_shop/acne_mask_1.jpg" alt="acne mask" width="100%">
                    <p class="text_section_products">Mặt nạ CC Menalo 20 miếng từ Nhật Bản  </p>
                    <p class="real_price">đ50.000</p>
                    <button class="booking_now">Add cart</button>
                </div>
                <div class="col-xl-2 section_products">
                    <img src="images/images_EM_shop/acne_mask_1.jpg" alt="acne mask" width="100%">
                    <p class="text_section_products">Mặt nạ CC Menalo 20 miếng từ Nhật Bản  </p>
                    <p class="real_price">đ50.000</p>
                    <button class="booking_now">Add cart</button>
                </div>
                <div class="col-xl-2 section_products">
                    <img src="images/images_EM_shop/acne_mask_1.jpg" alt="acne mask" width="100%">
                    <p class="text_section_products">Mặt nạ CC Menalo 20 miếng từ Nhật Bản  </p>
                    <p class="real_price">đ50.000</p>
                    <button class="booking_now">Add cart</button>
                </div>
                <div class="col-xl-2 section_products">
                    <img src="images/images_EM_shop/acne_mask_1.jpg" alt="acne mask" width="100%">
                    <p class="text_section_products">Mặt nạ CC Menalo 20 miếng từ Nhật Bản  </p>
                    <p class="real_price">đ50.000</p>
                    <button class="booking_now">Add cart</button>
                </div>
                <div class="col-xl-2 section_products">
                    <img src="images/images_EM_shop/acne_mask_1.jpg" alt="acne mask" width="100%">
                    <p class="text_section_products">Mặt nạ CC Menalo 20 miếng từ Nhật Bản  </p>
                    <p class="real_price">đ50.000</p>
                    <button class="booking_now">Add cart</button>
                </div> -->
            </div>
        </div>

        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return{
                news:"",
                sales:"",
                products:""
            };
        },
        created(){
            this.showStore();
        },
        methods:{
            showStore(){
                axios.get('api/emshop').then(response=>{
                    this.news=response.data.data.new,
                    this.sales=response.data.data.sale,
                    this.products=response.data.data.product
                })
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>