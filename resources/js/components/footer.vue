<template>
    <!--Start Footer -->

    <footer>
        <div class="container">
            <div class="footer-and-contact">
                <div class="row contact-in-footer">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <h4>introduce</h4>
                        <div class="introduce-item">
                            <ul>
                            <li v-for="contact in contact" :key="contact.id" style="font-weight: 300;"><i class="fas fa-phone-alt"></i> Call <a :href="'tel:+84'+contact.phone">(+84) {{contact.phone}}</a></li>
                            </ul>
                        </div>
                        <div class="introduce-item">
                            <i class="fab fa-facebook-messenger"></i>
                            <a href="https://www.messenger.com/t/Emhairsalon1" target="_blank"> m.me/Emhairsalon1</a>
                        </div>
                        <div class="introduce-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:emhairsalon@reach.org.vn" target="_blank"> emhairsalon@reach.org.vn</a>
                        </div>
                        <div class="introduce-item">
                            <i class="fas fa-globe"></i>
                            <a href="http://www.reach.org.vn" target="_blank"> http://www.reach.org.vn</a>
                        </div>
                        <div class="introduce-item">
                            <h4>Contact us</h4>
                            <i>" Đăng nhập email hoặc facebook để nhận các thông tin mới nhất của Em Hair Salon ! "</i>
                            <div class="form-group input_email_footer" style="margin-top:20px;">
                                <label for="email"></label>
                                <input type="email" name="" id="email" placeholder="Nhập email">
                                <!-- <button type="submit">Submit</button> -->
                                <button type="submit" class=" btn-success" style="padding:1px 5px;">Xong</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 services-footer">
                        <h4>service</h4>
                        <ul>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Women Hair cut/ Hair Curl/ Color</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Man Hair cut/ Hair Curl/ Color</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Kid hair cut/shampoo</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Hair Bleaching</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Hair Straightening</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Style Hair</a>
                            </li>
                            <li>
                                <a href="http://" target="_blank" rel="noopener noreferrer">Skin Peeling</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <h4>address</h4>
                        <div v-for="contact in contact" :key="contact.id">
                            <span class="fas fa-map-marker-alt"></span>
                            <p>{{contact.address}}</p>
                        </div>
                        <div>
                            <h4>fanpage</h4>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEmhairsalon1%2F&tabs=EM%20HAIR%20SALON%201%20-%20Trang%20ch%E1%BB%A7&width=400&height=160&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="160" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 copyright_footer">
                        <!-- <p>Copyright ©2018 All rights reserved | This template is made with <span class="far fa-heart"></span> by
                            REACH Code
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- End footer -->

</template>

<script>
    export default {
        data() {
    return {
      contact: "",
      link: ""
    };
  },
  created() {
    this.showHeader();
  },
  methods: {
    showHeader() {
      axios.get("/api/index").then(response => {
        (this.contact = response.data.data.contact),
          (this.link = response.data.data.link);
      });
    }
  }
    }
</script>

<style lang="scss" scoped>

</style>