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
                    <div class="row section_products">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <img src="images/images_EM_shop/shampoo_kafen1.jfif" alt="shapoo1.jpg" width="100%">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                            <p class="new_products">New</p>
                            <p class="information-product">Combo 4 dau goi Kafen chi <span class="real_price">$46</span></p>
                            <!-- <div class="quantity-item" id="choose-quantity">
                                <p style="display: inline-block;">Quantity</p>
                                <button v-on:click="countDown">-</button>
                                <input type="text" v-model="counter" disabled style="width: 30px; text-align: center;">
                                <button v-on:click="countUp">+</button>
                            </div> -->
                            <button class="booking_now">Add cart</button>                        
                        </div>
                    </div>
                    <div class="row section_products" style="margin-top:20px">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <img src="images/images_EM_shop/shampoo_goldwell.jpg" alt="shampoo goldwell" width="100%">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                        <p class="new_products">New</p>
                            <p class="information-product">Combo 2 dau goi Goldwell chi <span class="real_price">$25</span></p>

                            <button class="booking_now">Add cart</button>
                        </div>
                    </div>
                    <div class="row section_products" style="margin-top:20px; padding-bottom:10px;">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <img src="images/images_EM_shop/shampoo_keratin.jfif" alt="shampoo keratin" width="100%">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                            <p class="new_products">New</p>
                            <p class="information-product">Combo 2 dau goi Keratin chi <span class="real_price">$100</span></p>

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
                <div class="col-xl-6"  style="margin-top: 10px;">
                    <div class="row section_products">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <img src="images/images_EM_shop/clean_face_1.jpg" alt="clean face 1" width="100%">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                            <p style="display: inline-block;" class="information-product">Sản phẩm kem trị mụn đén từ The face shop</p>
                            <div class="price_product"> <span>Sale off: </span> <i><del>100$</del></i> <p class="real_price">75$</p></div>   
                            <button class="booking_now">Add cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6"  style="margin-top: 10px;">
                    <div class="row section_products">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <img src="images/images_EM_shop/clean_face_2.jfif" alt="clean face 2" width="100%">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                            <p style="display: inline-block;" class="information-product">Sản phẩm sữa rửa mặt trị mụn Acerola chiết xuất từ quả cherry</p>

                            <div class="price_product"> <span>Sale off: </span> <i><del>100$</del></i> <p class="real_price">75$</p></div>
                            <button class="booking_now">Add cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6"  style="margin-top: 10px;">
                    <div class="row section_products">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <img src="images/images_EM_shop/clean_face_3.jfif" alt="clean face 3" width="100%">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                            <p style="display: inline-block;" class="information-product">Sản phẩm kem trị mụn Mong bear chiết xuất từ hạt đậu nành</p>

                            <div class="price_product"> <span>Sale off: </span> <i><del>100$</del></i> <p class="real_price">75$</p></div>
                            <button class="booking_now">Add cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6"  style="margin-top: 10px;">
                    <div class="row section_products">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <img src="images/images_EM_shop/shampoo_biotin1.jpg" alt="shapoo biotin" width="100%">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                            <p style="display: inline-block;" class="information-product">Sữa rửa mặt Biotin</p>

                            <div class="price_product"> <span>Sale off: </span> <i><del>100$</del></i> <p class="real_price">75$</p></div>
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
            <div class="row">
                <div class="col-xl-12">
                    <h4 class="name_items">Mat na tri mun</h4>
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
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <h4 class="name_items">Mat na tri mun</h4>
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
            </div>
        </div>

        </div>
    </div>

</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>