<section class="menu section">
    <div class="container">
        <div class="section_header centered">
            <span class="section_header-subtitle" data-aos="fade-down">Our menu</span>
            <h2 class="section_header-title" data-aos="fade-up" data-aos-delay="50">Special Menu</h2>
            <p class="section_header-text" data-aos="fade-up" data-aos-delay="100">
                Sed massa ac est ornare pharetra imperdiet nibh. Nunc tellus ullamcorper porta scelerisque.
            </p>
        </div>
        <div class="menu_main">
            <ul class="menu_nav nav nav-tabs d-flex flex-wrap justify-content-center" role="tablist">
                @foreach ($loaiSP as $key => $value)
                <li class="nav-item h4" role="presentation">
                    <a
                        class="nav-link {{$key == 0 ? 'active' : ''}}"
                        id="starters-tab"
                        href="#starters_{{$key}}"
                        data-bs-toggle="tab"
                        data-bs-target="#starters"
                        role="tab"
                        aria-selected="false"
                    >
                    {{$value->ten_loai_san_pham}}
                </a>
                </li>
                @endforeach
            </ul>
            <div class="tab-content" id="menuTabs">
                @foreach ($loaiSP as $key => $value)
                <div class="menu_tab tab-pane fade active">
                    <span
                        class="menu_tab-trigger {{$key == 0 ? 'show active' : ''}}"
                        id="beverages_{{$key}}"
                        data-bs-toggle="collapse"
                        data-bs-target="#starters"
                        aria-expanded="true"
                        role="button"
                    >

                    </span>
                    <ul class="menu_tab-list collapse show" id="starters">
                        @foreach ($sanPham as $key_sp => $value_sp)
                        @if($value_sp->id_cha == $value->id)
                        <li class="menu_tab-list_item" data-type="vegan">
                            <div class="main h5">
                                <a class="main_name" href="#"><i class="icon-vegan"></i>{{$value_sp->ten_san_pham}}</a>
                                <span class="main_price">{{ number_format($value_sp->gia_ban, 0, ',', '.') }} đ</span>
                            </div>
                            <p class="description text--md">{{$value_sp->mo_ta_chi_tiet}}</p>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
