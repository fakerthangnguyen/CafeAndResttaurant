<section class="menu section--nopb">
    <div class="container">
        <div class="section_header centered">
            <span class="section_header-subtitle" data-aos="fade-down">our menu</span>
            <h2 class="section_header-title" data-aos="fade-up" data-aos-delay="50">Special Menu</h2>
            <p class="section_header-text" data-aos="fade-up" data-aos-delay="100">
                Sed massa ac est ornare pharetra imperdiet nibh. Nunc tellus ullamcorper porta scelerisque eu mauris faucibus
                sed aliquet.
            </p>
        </div>
        <div class="menu_wrapper">
            <ul class="menu_nav nav nav-tabs d-flex flex-wrap justify-content-center" role="tablist">
                @foreach ($loaiSP as $key => $value)
                <li class="nav-item h4" role="presentation">
                    <a
                        class="nav-link {{$key == 0 ? 'active' : ''}}"
                        id="beverages-tab"
                        data-bs-toggle="tab"
                        href="#beverages_{{$key}}"
                        data-bs-target="#beverages"
                        role="tab"
                        aria-selected="false"
                    >
                    {{$value->ten_loai_san_pham}}
                </a>
                </li>
                @endforeach


            </ul>
        </div>
            <div class="menu_tabs tab-content" id="menuTabs">
                @foreach ($loaiSP as $key => $value)
                <div
                class="tab-pane fade {{$key == 0 ? 'show active' : ''}}"
                id="beverages_{{$key}}"
                role="tabpanel"
                aria-labelledby="beverages-tab"
                data-bs-parent="#menuTabs"
            >
                <ul class="menu_tabs-list">
                    @foreach ($sanPham as $key_sp => $value_sp)
                    @if($value_sp->id_cha == $value->id)
                    <li class="menu_tabs-list_item">

                        <a class="link" href="/san-pham/{{$value_sp->slug_san_pham}}-post{{$value_sp->id}}">
                            <div class="media">
                                <picture>
                                    <source
                                        data-srcset="{{ $value_sp->hinh_anh }}"
                                        srcset=""
                                        type="image/webp"
                                    />
                                    <img
                                        class="lazy"
                                        data-src="{{ $value_sp->hinh_anh }}"
                                        src=""
                                        alt=""
                                    />
                                </picture>
                            </div>
                            <div class="main">
                                <span class="main_price">{{ number_format($value_sp->gia_ban, 0, ',', '.') }} đ</span>
                                <span class="main_title h5">{{$value_sp->ten_san_pham}}</span>
                                <p class="main_ingredients">meat, dough, herbs, flax, sauce</p>
                            </div>
                        </a>

                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
                @endforeach


        </div>

    </div>
</section>
