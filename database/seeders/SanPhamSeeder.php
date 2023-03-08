<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('san_phams')->delete();

        DB::table('san_phams')->truncate();

        DB::table('san_phams')->insert([
            [
                'ten_san_pham' => 'Cà phê sữa rang xay' ,
                'slug_san_pham' => 'ca-phe-sua-rang-xay' ,
                'so_luong' => 10,
                'gia_ban' => 20000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://cokhidongnam.vn/wp-content/uploads/2021/08/quy-trinh-san-xuat-ca-phe-hoa-tan.jpg',
                'mo_ta_ngan' => 'Cà phê rang xay (Coffee roasting) hay còn gọi là Cà phê mộc là loại cà phê hình thành thông qua phương pháp chế biến rang lên làm biến đổi các tính chất hóa lý của hạt cà phê thành các sản phẩm cà phê rang và thường là được xay ra để phục vụ.',
                'mo_ta_chi_tiet' => 'Cà phê rang xay (Coffee roasting) hay còn gọi là Cà phê mộc là loại cà phê hình thành thông qua phương pháp chế biến rang lên làm biến đổi các tính chất hóa lý của hạt cà phê thành các sản phẩm cà phê rang và thường là được xay ra để phục vụ.',
                'id_loai_san_pham' => 8,
                'is_open' => 1,
            ],

            [
                'ten_san_pham' => 'Cà phê đen rang xay' ,
                'slug_san_pham' => 'ca-phe-den-rang-xay' ,
                'so_luong' => 10,
                'gia_ban' => 20000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://rangcafe.vn/wp-content/uploads/2020/03/Tim-hieu-ve-ca-phe-rang-xay-1.jpg',
                'mo_ta_ngan' => 'Cà phê rang xay (Coffee roasting) hay còn gọi là Cà phê mộc là loại cà phê hình thành thông qua phương pháp chế biến rang lên làm biến đổi các tính chất hóa lý của hạt cà phê thành các sản phẩm cà phê rang và thường là được xay ra để phục vụ.',
                'mo_ta_chi_tiet' => 'Cà phê rang xay (Coffee roasting) hay còn gọi là Cà phê mộc là loại cà phê hình thành thông qua phương pháp chế biến rang lên làm biến đổi các tính chất hóa lý của hạt cà phê thành các sản phẩm cà phê rang và thường là được xay ra để phục vụ.',
                'id_loai_san_pham' => 8,
                'is_open' => 1,
            ],

            [
                'ten_san_pham' => 'Cà phê sữa phin' ,
                'slug_san_pham' => 'ca-phe-sua-phin' ,
                'so_luong' => 10,
                'gia_ban' => 20000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://tse3.mm.bing.net/th?id=OIP.0cTek1lyYwOXn7BtRjrCGAHaE8&pid=Api&P=0',
                'mo_ta_ngan' => 'Cà phê phin chính là một bản sắc của Việt Nam không chỉ bởi hương vị thơm ngon của hạt cà phê trồng trên đất Việt, mà còn bởi văn hóa pha chế cà phê truyền thống lưu giữ lại được toàn bộ hương vị đậm đà khó quên.',
                'mo_ta_chi_tiet' => 'Cà phê phin chính là một bản sắc của Việt Nam không chỉ bởi hương vị thơm ngon của hạt cà phê trồng trên đất Việt, mà còn bởi văn hóa pha chế cà phê truyền thống lưu giữ lại được toàn bộ hương vị đậm đà khó quên.',
                'id_loai_san_pham' => 9,
                'is_open' => 1,
            ],

            [
                'ten_san_pham' => 'Cà phê đen phin' ,
                'slug_san_pham' => 'ca-phe-den-phin' ,
                'so_luong' => 10,
                'gia_ban' => 20000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://bizweb.dktcdn.net/100/398/564/files/batch-ca-phe-phin-truyen-thong-earlymorning-coffee-specialty-afc64ea9-9853-4b5d-8dd9-bee7fff4c169.jpg?v=1601982731938',
                'mo_ta_ngan' => 'Cà phê phin chính là một bản sắc của Việt Nam không chỉ bởi hương vị thơm ngon của hạt cà phê trồng trên đất Việt, mà còn bởi văn hóa pha chế cà phê truyền thống lưu giữ lại được toàn bộ hương vị đậm đà khó quên.',
                'mo_ta_chi_tiet' => 'Cà phê phin chính là một bản sắc của Việt Nam không chỉ bởi hương vị thơm ngon của hạt cà phê trồng trên đất Việt, mà còn bởi văn hóa pha chế cà phê truyền thống lưu giữ lại được toàn bộ hương vị đậm đà khó quên.',
                'id_loai_san_pham' => 9,
                'is_open' => 1,
            ],

            [
                'ten_san_pham' => 'Phindi kem sữa' ,
                'slug_san_pham' => 'phindi-kem-sua' ,
                'so_luong' => 10,
                'gia_ban' => 45000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://www.highlandscoffee.com.vn/vnt_upload/product/11_2022/BR_Drink/thumbs/270_crop_HLC__PHINDI_KEM_SUA.jpg',
                'mo_ta_ngan' => 'PhinDi Kem Sữa - Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Kem Sữa béo ngậy mang đến hương vị mới lạ, không thể hấp dẫn hơn!',
                'mo_ta_chi_tiet' => 'PhinDi Kem Sữa - Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Kem Sữa béo ngậy mang đến hương vị mới lạ, không thể hấp dẫn hơn!',
                'id_loai_san_pham' => 10,
                'is_open' => 1,
            ],

            [
                'ten_san_pham' => 'Phindi choco' ,
                'slug_san_pham' => 'phindi-choco' ,
                'so_luong' => 10,
                'gia_ban' => 45000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://www.highlandscoffee.com.vn/vnt_upload/product/11_2022/BR_Drink/HLC__PHINDI_CHOCO.jpg',
                'mo_ta_ngan' => 'Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Choco ngọt tan mang đến hương vị mới lạ, không thể hấp dẫn hơn!',
                'mo_ta_chi_tiet' => 'Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Choco ngọt tan mang đến hương vị mới lạ, không thể hấp dẫn hơn!',
                'id_loai_san_pham' => 10,
                'is_open' => 1,
            ],

            [
                'ten_san_pham' => 'Phindi hạnh nhân' ,
                'slug_san_pham' => 'phindi-hanh-nhan' ,
                'so_luong' => 10,
                'gia_ban' => 45000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://www.highlandscoffee.com.vn/vnt_upload/product/11_2022/BR_Drink/HLC__PHINDI_HANH_NHAN.jpg',
                'mo_ta_ngan' => 'Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Hạnh nhân thơm bùi mang đến hương vị mới lạ, không thể hấp dẫn hơn!',
                'mo_ta_chi_tiet' => 'Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Hạnh nhân thơm bùi mang đến hương vị mới lạ, không thể hấp dẫn hơn!',
                'id_loai_san_pham' => 10,
                'is_open' => 1,
            ],

            [
                'ten_san_pham' => 'Phindi hồng trà' ,
                'slug_san_pham' => 'phindi-hong-tra' ,
                'so_luong' => 10,
                'gia_ban' => 45000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://www.highlandscoffee.com.vn/vnt_upload/product/12_2020/PHINDI_Hong_Tra.png',
                'mo_ta_ngan' => 'PhinDi Kem Sữa - Cà phê Phin thế hệ mới với chất Phin êm hơn, lần đầu tiên kết hợp cùng Hồng Trà mang đến hương vị quyện êm, phiên bản giới hạn chỉ trong mùa lễ hội 2020!',
                'mo_ta_chi_tiet' => 'PhinDi Kem Sữa - Cà phê Phin thế hệ mới với chất Phin êm hơn, lần đầu tiên kết hợp cùng Hồng Trà mang đến hương vị quyện êm, phiên bản giới hạn chỉ trong mùa lễ hội 2020!',
                'id_loai_san_pham' => 10,
                'is_open' => 1,
            ],

            [
                'ten_san_pham' => 'Tiramisu' ,
                'slug_san_pham' => 'tiramisu' ,
                'so_luong' => 10,
                'gia_ban' => 19000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://topbestviet.com/media/cook/B%C3%A1nh_Tiramisu_%C4%91%C6%A1n_gi%E1%BA%A3n.jpg',
                'mo_ta_ngan' => 'Tiramisu là một loại bánh ngọt tráng miệng vị cà phê của nước Ý[1], gồm các lớp bánh quy Savoiardi, [savoˈjardi] nhúng cà phê xen kẽ với hỗn hợp trứng, đường, phô mai mascarpone đánh bông, thêm một ít bột cacao. Công thức bánh này được biến tấu thành nhiều món bánh và món tráng miệng khác nhau.',
                'mo_ta_chi_tiet' => 'Tiramisu là một loại bánh ngọt tráng miệng vị cà phê của nước Ý[1], gồm các lớp bánh quy Savoiardi, [savoˈjardi] nhúng cà phê xen kẽ với hỗn hợp trứng, đường, phô mai mascarpone đánh bông, thêm một ít bột cacao. Công thức bánh này được biến tấu thành nhiều món bánh và món tráng miệng khác nhau',
                'id_loai_san_pham' => 11,
                'is_open' => 1,
            ],

            [
                'ten_san_pham' => 'Bánh chuối' ,
                'slug_san_pham' => 'banh-chuoi' ,
                'so_luong' => 10,
                'gia_ban' => 19000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://img-global.cpcdn.com/recipes/3129e01e8e16efe3/1200x630cq70/photo.jpg',
                'mo_ta_ngan' => 'Thơm nức mùi chuối tươi, dẻo dẻo dai dai giòn giòn, ngọt thanh nhẹ nhàng, ăn kèm với nước cốt dừa béo béo, ùi ăn mãi không ngán ấy',
                'mo_ta_chi_tiet' => 'Thơm nức mùi chuối tươi, dẻo dẻo dai dai giòn giòn, ngọt thanh nhẹ nhàng, ăn kèm với nước cốt dừa béo béo, ùi ăn mãi không ngán ấy',
                'id_loai_san_pham' => 11,
                'is_open' => 1,
            ],

            [
                'ten_san_pham' => 'Mousse đào' ,
                'slug_san_pham' => 'mousse-dao' ,
                'so_luong' => 10,
                'gia_ban' => 29000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://tadiha.com/pictures/picfullsizes/2020/04/22/bwp1587567771.jpg',
                'mo_ta_ngan' => 'Một sự kết hợp khéo léo giữa kem và lớp bánh mềm, được phủ lên trên vài lát đào ngon tuyệt.',
                'mo_ta_chi_tiet' => 'Một sự kết hợp khéo léo giữa kem và lớp bánh mềm, được phủ lên trên vài lát đào ngon tuyệt.',
                'id_loai_san_pham' => 11,
                'is_open' => 1,
            ],

            [
                'ten_san_pham' => 'Trà hoa quả nhiệt đới' ,
                'slug_san_pham' => 'tra-hoa-qua-nhiet-doi' ,
                'so_luong' => 10,
                'gia_ban' => 39000,
                'gia_khuyen_mai' => 0,
                'hinh_anh' => 'https://tse2.mm.bing.net/th?id=OIP.iA0QHeQHsMG9432DQshrRgHaGH&pid=Api&P=0',
                'mo_ta_ngan' => 'Đến tên món nước uống đã diễn tả ngay sự sảng khoái và mát mẻ của món đồ uống này rồi, đây cũng chính là lý do vì sao món trà này lại luôn nằm trong top các loại đồ uống được giới trẻ yêu thích.',
                'mo_ta_chi_tiet' => 'Đến tên món nước uống đã diễn tả ngay sự sảng khoái và mát mẻ của món đồ uống này rồi, đây cũng chính là lý do vì sao món trà này lại luôn nằm trong top các loại đồ uống được giới trẻ yêu thích.',
                'id_loai_san_pham' => 7,
                'is_open' => 1,
            ],
        ]);
    }
}
