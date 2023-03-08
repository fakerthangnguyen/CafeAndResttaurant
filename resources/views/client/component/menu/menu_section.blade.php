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
                <div class="menu_tab tab-pane fade active">
                    <span
                        class="menu_tab-trigger"
                        data-bs-toggle="collapse"
                        data-bs-target="#starters"
                        aria-expanded="true"
                        role="button"
                    >
                        <span class="label h4">Starters</span>
                        <i class="icon"></i>
                    </span>
                    <ul class="menu_tab-list collapse show" id="starters">
                        <li class="menu_tab-list_item">
                            <div class="main h5">
                                <a class="main_name" href="#">Pate with Mushrooms</a>
                                <span class="main_price">$15</span>
                            </div>
                            <p class="description text--md">Mushrooms, Toast, Garlic Sauce</p>
                        </li>
                        <li class="menu_tab-list_item">
                            <div class="main h5">
                                <a class="main_name" href="#">Cheese Slices</a>
                                <span class="main_price">$25</span>
                            </div>
                            <p class="description text--md">Parmesan, Mascarpone, Mozzarella</p>
                        </li>
                        <li class="menu_tab-list_item" data-type="spicy">
                            <div class="main h5">
                                <a class="main_name" href="#"><i class="icon-spicy"></i> Chicken Wings</a>
                                <span class="main_price">$30</span>
                            </div>
                            <p class="description text--md">Chicken Wings, Sesame Seeds, Spicy Sauce</p>
                        </li>
                        <li class="menu_tab-list_item">
                            <div class="main h5">
                                <a class="main_name" href="#">Shrimps in Butter</a>
                                <span class="main_price">$18</span>
                            </div>
                            <p class="description text--md">Shrimps, Sauce, Herbs</p>
                        </li>
                        <li class="menu_tab-list_item">
                            <div class="main h5">
                                <a class="main_name" href="#">Сold Сuts</a>
                                <span class="main_price">$32</span>
                            </div>
                            <p class="description text--md">Balyk, Prosciutto, Boiled Pork</p>
                        </li>
                        <li class="menu_tab-list_item" data-type="vegan">
                            <div class="main h5">
                                <a class="main_name" href="#"><i class="icon-vegan"></i> Pita Bread with Vegetables</a>
                                <span class="main_price">$28</span>
                            </div>
                            <p class="description text--md">Lavash, Greens, Tomato, Cabbage, Cucumber, Sauce</p>
                        </li>
                        <li class="menu_tab-list_item" data-type="vegan">
                            <div class="main h5">
                                <a class="main_name" href="#"><i class="icon-vegan"></i> Assorted Vegetables</a>
                                <span class="main_price">$10</span>
                            </div>
                            <p class="description text--md">Сucumbers, Tomatoes, Peppers, Olives</p>
                        </li>
                        <li class="menu_tab-list_item">
                            <div class="main h5">
                                <a class="main_name" href="#">Toast with Salmon</a>
                                <span class="main_price">$15</span>
                            </div>
                            <p class="description text--md">Bread, Flax, Herbs, Sauce, Salmon</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
