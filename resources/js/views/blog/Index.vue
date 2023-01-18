<template>
    <div>
        <main>
            <!-- page__title-start -->
            <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/bg/page-title-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-inner text-center">
                                <h1>Блог</h1>
                                <div class="page__title-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Блог</li>
                                    </ol>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page__title-end -->
            <section class="blog-area mt-100 mb-50">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="blog__wrapper pr-50">
                                <div class="blog-wrap blog-item mb-50">
                                    <div class="blog-thumb">
                                       <img src="assets/img/blog/blog-big-1.jpg" alt="blog">
                                    </div>
                                    <div class="blog-details mt-35">
                                       <ul class="blog-meta">
                                          <li><a href="#"><i class="fal fa-clock"></i> 20 июня</a></li>
                                          <li><a href="#"><i class="fal fa-user-circle"></i>Иван</a></li>
                                       </ul>
                                       <h3 class="blog-title">
                                          <a href="blog-details.html">Mercedes-Benz уходит из России — кто будет обслуживать машины?</a>
                                       </h3>
                                       <p>Mercedes-Benz продал завод «Мерседес-Бенц Мануфэкчуринг Рус» в Подмосковье, здания с сервисными площадями и офисом, а также права дистрибьютора, пишет Коммерсант. Покупателем стал дилер марки — «АВТОDОМ». Информацию подтвердили в российском офисе компании.</p>
                                       <div class="blog-btn mt-25">
                                          <a href="blog-details.html" class="btn-tp">Подробнее</a>
                                       </div>
                                    </div>
                                </div>



                            </div>
                            <div class="row mb-50">
                                <div class="col-xxl-12">
                                   <div class="basic-pagination-3 wow fadeInUp mt-20" data-wow-delay=".2s">
                                      <ul class="d-flex align-items-center">
                                         <li class="prev">
                                            <a href="blog.html" class="link-btn link-prev">
                                            <i class="fal fa-long-arrow-left"></i>
                                               Назад
                                            </a>
                                         </li>
                                         <li>
                                            <a href="blog.html">
                                               <span>1</span>
                                            </a>
                                         </li>
                                         <li class="active">
                                            <a href="blog.html">
                                               <span>2</span>
                                            </a>
                                         </li>
                                         <li>
                                            <a href="blog.html">
                                               <span>3</span>
                                            </a>
                                         </li>
                                         <li class="next">
                                            <a href="blog.html" class="link-btn">
                                               Вперед
                                               <i class="fal fa-long-arrow-right"></i>
                                            </a>
                                         </li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="blog__sidebar">
                                <div class="sidebar__widget mb-50 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                   <div class="sidebar__widget-content">
                                         <div class="search">
                                            <form action="#">
                                               <input type="text" placeholder="Search...">
                                               <button type="submit"><i class="far fa-search"></i></button>
                                            </form>
                                         </div>
                                   </div>
                                </div>
                                <div class="sidebar__widget sidebar__widget-padding mb-75 wow fadeInUp grey-bg-2" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                   <div class="sidebar__widget-title mb-25">
                                         <h4>Новости</h4>
                                   </div>
                                   <div class="sidebar__widget-content">
                                      <div class="rc-post">
                                         <ul>
                                            <li class="d-flex align-items-center mb-20">
                                                  <div class="rc-thumb mr-15">
                                                     <a href="blog-details.html"><img src="assets/img/blog/rc/rc-1.jpg" alt="rc-post"></a>
                                                  </div>
                                                  <div class="rc-text">
                                                     <h6><a href="blog-details.html">Mercedes-Benz продал завод «Мерседес-Бенц ...</a></h6>
                                                     <span class="rc-meta"><i class="fal fa-clock"></i> 23 Июля</span>
                                                  </div>
                                            </li>
                                         </ul>
                                      </div>
                                   </div>

                                </div>
                                <div class="sidebar__widget sidebar__widget-padding mb-75 wow fadeInUp grey-bg-2" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                   <div class="sidebar__widget-title mb-25">
                                         <h4>Категории</h4>
                                   </div>
                                   <div class="sidebar__widget-content">
                                         <div class="cat-link">
                                            <ul>
                                               <li><a href="blog-details.html">Запасные части</a></li>
                                            </ul>
                                         </div>
                                   </div>
                                </div>
                                <div class="sidebar__widget sidebar__widget-padding mb-50 wow fadeInUp grey-bg-2" data-wow-delay="1s">
                                   <div class="sidebar__widget-title mb-15">
                                         <h4>Теги</h4>
                                   </div>
                                   <div class="sidebar__widget-content">
                                         <div class="tags">
                                            <a href="blog-details.html">Запчасти,</a>
                                            <a href="blog-details.html">Грузовики</a>

                                         </div>
                                   </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </section>



            <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                    <div class="modal-content">
                        <div class="product__modal-wrapper p-relative">
                            <div class="product__modal-close p-absolute">
                                <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                            </div>
                            <div class="product__modal-inner">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="product__modal-box">
                                            <div class="tab-content" id="modalTabContent">
                                                <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="src/assets/img/products/quick-view/quick-view-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="src/assets/img/products/quick-view/quick-view-2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="src/assets/img/products/quick-view/quick-view-3.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                                    <div class="product__modal-img w-img">
                                                        <img src="src/assets/img/products/quick-view/quick-view-4.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                        <img src="src/assets/img/products/quick-view/nav/quick-nav-1.jpg" alt="">
                                                </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                                    <img src="src/assets/img/products/quick-view/nav/quick-nav-2.jpg" alt="">
                                                </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                                    <img src="src/assets/img/products/quick-view/nav/quick-nav-3.jpg" alt="">
                                                </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                                    <img src="src/assets/img/products/quick-view/nav/quick-nav-4.jpg" alt="">
                                                </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4 class="product__modal-title"><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                        <div class="product__modal-des mb-40">
                                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt </p>
                                        </div>
                                        <div class="product__modal-stock">
                                            <span>Availability :</span>
                                            <span>In Stock</span>
                                        </div>
                                        <div class="product__modal-stock sku mb-30">
                                            <span>SKU:</span>
                                            <span>Samsung C49J89: £875, Debenhams Plus</span>
                                        </div>
                                        <div class="product__modal-review d-sm-flex">
                                            <div class="rating mb-15 mr-35">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            </div>
                                            <div class="product__modal-add-review mb-15">
                                            <span><a href="#">1 Review</a></span>
                                            <span><a href="#">Add Review</a></span>
                                            </div>
                                        </div>
                                        <div class="product__modal-price">
                                            <span>$560.00</span>
                                        </div>
                                        <div class="product__modal-form mb-30">
                                            <form action="#">
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                    <button class="add-to-cart-btn" type="submit">Add to cart</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="product__modal-links">
                                            <ul>
                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </main>
    </div>
</template>

<script>
import { onMounted } from 'vue';

export default{
    name: "Index",
    mounted() {
        $(document).trigger('change')
    }
}
</script>

<style scoped>

</style>
