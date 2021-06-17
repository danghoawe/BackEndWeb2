<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nameProduct' => "iPhone 8 Plus",
            'amount'=> 200,
            'idManufacture'=> 1,
            'idProtype'=>1,
            'image'=>'iphone8-plus.jpg',
            'price'=> 6590000,
            'description'=>'Bộ đôi iPhone 8 và iPhone 8 Plus đều sở hữu thiết kế kim loại chắc chắn kết hợp với mặt kính cường lực sang trọng, có khả năng chống nước, bụi bẩn đạt IP67. Tổng thể trên iPhone 8 khá nhỏ gọn, với màn hình 4.7 inch, giúp bạn dễ dàng thao tác bằng 1 tay. Trong khi đó iPhone 8 Plus có phần lớn hơn hẳn khi sở hữu màn hình lên đến 5.5 inch, điều này mang đến trải nghiệm tốt hơn khi xem phim, chơi game hay giải trí.',
            'feature'=> 1,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Xiaomi Mi 10T Pro",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>1,
            'image'=>'xiaomi-mi-10t-pro_2__3.jpg',
            'price'=> 10000000,
            'description'=>'Điện thoại Xiaomi Mi 10T Pro đã kích hoạt được cung cấp sức mạnh bởi vi xử lý Snapdragon 865 đi kèm RAM 8GB cho hiệu năng mạnh mẽ. Smartphone được trang bị hệ thống 3 camera sau 108MP chụp ảnh cực ấn tượng cùng viên pin khủng 5000mAh hỗ trợ sạc nhanh 33W. Khác với điện thoại Xiaomi cũ, Mi 10T Pro đã kích hoạt được bảo hành 12 tháng và 1 đổi 1 30 ngày tại CellphoneS.',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "IPHONE 12 64GB",
            'amount'=> 350,
            'idManufacture'=> 1,
            'idProtype'=>1,
            'image'=>'IPHONE 12 64GB.jpg',
            'price'=> 19290000,
            'description'=>'iPhone 12 Pro Max là chiếc iPhone có màn hình lớn nhất từ trước tới nay, 6,7 inch. Độ phân giải của màn hình cũng chưa từng iPhone nào đạt được, hơn 3,5 triệu điểm ảnh. Màn hình Super Retina XDR với tấm nền OLED cũng hứa hẹn cho màu sắc rực rỡ, màu đen sâu. Thêm vào đó, màn hình của tất cả mẫu máy iPhone 12 đều được bảo vệ bởi Ceramic Shield, gấp 4 lần độ cứng cáp và hiệu suất đánh rơi so với bình thường.',
            'feature'=> 1,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Samsung Galaxy M51",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>1,
            'image'=>'samsung-galaxy-m51.jpg',
            'price'=> 8990000,
            'description'=>'Samsung lại tiếp tục cho ra mắt chiếc smartphone mới thuộc thế hệ Galaxy M với tên gọi là Samsung Galaxy M51. Thiết kế mới này tuy nằm trong phân khúc tầm trung nhưng được Samsung nâng cấp và cải tiến với camera góc siêu rộng, dung lượng pin siêu khủng cùng vẻ ngoài sang trọng và thời thượng.',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Samsung Galaxy S21 5G",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>1,
            'image'=>'samsung-galaxy-s21.jpg',
            'price'=> 20990000,
            'description'=>'Màn hình:	Dynamic AMOLED 2X, 6.2", Full HD+
            Hệ điều hành:	Android 11
            Camera sau:	Chính 12 MP & Phụ 64 MP, 12 MP
            Camera trước:	10 MP
            Chip:	Exynos 2100
            RAM:	8 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G
            Pin, Sạc:	4000 mAh, 25 W',
            'feature'=> 1,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Samsung Galaxy A32",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>1,
            'image'=>'samsung-galaxy-a32.jpg',
            'price'=> 6290000,
            'description'=>'Màn hình:	Super AMOLED, 6.4", Full HD+
            Hệ điều hành:	Android 11
            Camera sau:	Chính 64 MP & Phụ 8 MP, 5MP, 5MP
            Camera trước:	20 MP
            Chip:	MediaTek Helio G80
            RAM:	6 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	5000 mAh, 15 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Samsung Galaxy S21 Ultra 5G 256GB",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>1,
            'image'=>'samsung-galaxy-s21-ultra-256gb.jpg',
            'price'=> 33990000,
            'description'=>'Màn hình:	Dynamic AMOLED 2X, 6.8", Quad HD+ (2K+)
            Hệ điều hành:	Android 11
            Camera sau:	Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP
            Camera trước:	40 MP
            Chip:	Exynos 2100
            RAM:	12 GB
            Bộ nhớ trong:	256 GB
            SIM:	2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G
            Pin, Sạc:	5000 mAh',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Realme 7 Pro",
            'amount'=> 350,
            'idManufacture'=> 3,
            'idProtype'=>1,
            'image'=>'realme-7-pro-bac.jpg',
            'price'=> 8490000,
            'description'=>'Màn hình:	Super AMOLED, 6.4", Full HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP
            Camera trước:	32 MP
            Chip:	Snapdragon 720G
            RAM:	8 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	4500 mAh, 65 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Realme 7",
            'amount'=> 350,
            'idManufacture'=> 3,
            'idProtype'=>1,
            'image'=>'realme-7-blue.jpg',
            'price'=> 6690000,
            'description'=>'Màn hình:	IPS LCD, 6.5", Full HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP
            Camera trước:	16 MP
            Chip:	MediaTek Helio G95
            RAM:	8 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	5000 mAh, 30 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Realme 7i",
            'amount'=> 350,
            'idManufacture'=> 3,
            'idProtype'=>1,
            'image'=>'realme-7i-xanhduong-new.jpg',
            'price'=> 6290000,
            'description'=>'Màn hình:	IPS LCD, 6.5", HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP
            Camera trước:	16 MP
            Chip:	Snapdragon 662
            RAM:	8 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	5000 mAh, 18 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Realme 6i",
            'amount'=> 350,
            'idManufacture'=> 3,
            'idProtype'=>1,
            'image'=>'samsung-galaxy-s21-plus-256gb.jpg',
            'price'=> 4990000,
            'description'=>'Màn hình:	IPS LCD, 6.5", HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP
            Camera trước:	16 MP
            Chip:	MediaTek Helio G80
            RAM:	4 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	5000 mAh, 18 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Realme C25
            ",
            'amount'=> 350,
            'idManufacture'=> 3,
            'idProtype'=>1,
            'image'=>'realme-c25-blue.jpg',
            'price'=> 4690000,
            'description'=>'Màn hình:	IPS LCD, 6.5", HD+
            Hệ điều hành:	Android 11
            Camera sau:	Chính 48 MP & Phụ 2 MP, 2 MP
            Camera trước:	8 MP
            Chip:	MediaTek Helio G70
            RAM:	4 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	6000 mAh, 18 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Xiaomi Mi 11 Lite",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>1,
            'image'=>'xiaomi-mi-11-lite-4g-blue.jpg',
            'price'=> 7990000,
            'description'=>'Màn hình:	AMOLED, 6.55", Full HD+
            Hệ điều hành:	Android 11
            Camera sau:	Chính 64 MP & Phụ 8 MP, 5 MP
            Camera trước:	16 MP
            Chip:	Snapdragon 732G
            RAM:	8 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G
            Pin, Sạc:	4250 mAh, 33 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Xiaomi Mi 11 5G",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>1,
            'image'=>'xiaomi-mi-11-xanhduong.jpg',
            'price'=> 20990000,
            'description'=>'Màn hình:	AMOLED, 6.81", Quad HD+ (2K+)
            Hệ điều hành:	Android 11
            Camera sau:	Chính 108 MP & Phụ 13 MP, 5 MP
            Camera trước:	20 MP
            Chip:	Snapdragon 888
            RAM:	8 GB
            Bộ nhớ trong:	256 GB
            SIM:	2 Nano SIM, Hỗ trợ 5G
            Pin, Sạc:	4600 mAh, 55 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Xiaomi POCO X3 NFC",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>1,
            'image'=>'xiaomi-poco-x3-nfc.jpg',
            'price'=> 6290000,
            'description'=>'Màn hình:	IPS LCD, 6.67", Full HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 64 MP & Phụ 13 MP, 2 MP, 2 MP
            Camera trước:	20 MP
            Chip:	Snapdragon 732G
            RAM:	6 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM (SIM 1 chung khe thẻ nhớ), Hỗ trợ 4G
            Pin, Sạc:	5160 mAh, 33 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Xiaomi Redmi Note 9 Pro (6GB/128GB)",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>1,
            'image'=>'xiaomi-redmi-note-9-pro-white.jpg',
            'price'=> 6490000,
            'description'=>'Màn hình:	IPS LCD, 6.67", Full HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 64 MP & Phụ 8 MP, 5 MP, 2 MP
            Camera trước:	16 MP
            Chip:	Snapdragon 720G
            RAM:	6 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	5020 mAh, 30 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "OPPO A74",
            'amount'=> 350,
            'idManufacture'=> 5,
            'idProtype'=>1,
            'image'=>'oppo-a74-blue-9.jpg',
            'price'=> 6690000,
            'description'=>'Màn hình:	AMOLED, 6.43", Full HD+
            Hệ điều hành:	Android 11
            Camera sau:	Chính 48 MP & Phụ 2 MP, 2 MP
            Camera trước:	16 MP
            Chip:	Snapdragon 662
            RAM:	8 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	5000 mAh, 33 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "OPPO A54",
            'amount'=> 350,
            'idManufacture'=> 5,
            'idProtype'=>1,
            'image'=>'oppo-a54-4g-black.jpg',
            'price'=> 4690000,
            'description'=>'Màn hình:	IPS LCD, 6.5", HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 13 MP & Phụ 2 MP, 2 MP
            Camera trước:	16 MP
            Chip:	MediaTek Helio P35
            RAM:	4 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	5000 mAh, 18 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "OPPO A15s",
            'amount'=> 350,
            'idManufacture'=> 5,
            'idProtype'=>1,
            'image'=>'oppo-a15s-xanh.jpg',
            'price'=> 3990000,
            'description'=>'Màn hình:	LCD, 6.52", HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 13 MP & Phụ 2 MP, 2 MP
            Camera trước:	8 MP
            Chip:	MediaTek Helio P35
            RAM:	4 GB
            Bộ nhớ trong:	64 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	4230 mAh',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "OPPO Reno5 5G",
            'amount'=> 350,
            'idManufacture'=> 5,
            'idProtype'=>1,
            'image'=>'oppo-reno5-5g-thumb.jpg',
            'price'=> 11990000,
            'description'=>'Màn hình:	AMOLED, 6.43", Full HD+
            Hệ điều hành:	Android 11
            Camera sau:	Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP
            Camera trước:	32 MP
            Chip:	Snapdragon 765G
            RAM:	8 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM, Hỗ trợ 5G
            Pin, Sạc:	4300 mAh, 65 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "OPPO Reno4 Pro",
            'amount'=> 350,
            'idManufacture'=> 5,
            'idProtype'=>1,
            'image'=>'oppo-reno4-pro-trang.jpg',
            'price'=> 9300000,
            'description'=>'Màn hình:	AMOLED, 6.5", Full HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP
            Camera trước:	32 MP
            Chip:	Snapdragon 720G
            RAM:	8 GB
            Bộ nhớ trong:	256 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	4000 mAh, 65 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Vsmart Star 5 (4GB/64GB)",
            'amount'=> 350,
            'idManufacture'=> 6,
            'idProtype'=>1,
            'image'=>'vsmart-star-5-thumb-black.jpg',
            'price'=> 3290000,
            'description'=>'Màn hình:	IPS LCD, 6.52", HD+
            Hệ điều hành:	Android 11
            Camera sau:	Chính 13 MP & Phụ 2 MP, 2 MP
            Camera trước:	8 MP
            Chip:	MediaTek Helio G35
            RAM:	4 GB
            Bộ nhớ trong:	64 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	5000 mAh, 15 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Vsmart Star 5 (3GB/64GB)",
            'amount'=> 350,
            'idManufacture'=> 6,
            'idProtype'=>1,
            'image'=>'vsmart-star-5-thumb-green.jpg',
            'price'=> 2890000,
            'description'=>'Màn hình:	IPS LCD, 6.52", HD+
            Hệ điều hành:	Android 11
            Camera sau:	Chính 13 MP & Phụ 2 MP, 2 MP
            Camera trước:	8 MP
            Chip:	MediaTek Helio G35
            RAM:	3 GB
            Bộ nhớ trong:	64 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	5000 mAh, 15 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Vsmart Aris (8GB/128GB)",
            'amount'=> 350,
            'idManufacture'=> 6,
            'idProtype'=>1,
            'image'=>'vsmart-aris-xanhduong.jpg',
            'price'=> 5990000,
            'description'=>'Màn hình:	AMOLED, 6.39", Full HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 64 MP & Phụ 8 MP, 8 MP, 2 MP
            Camera trước:	20 MP
            Chip:	Snapdragon 730
            RAM:	8 GB
            Bộ nhớ trong:	128 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	4000 mAh, 18 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Vsmart Aris (6GB/64GB)",
            'amount'=> 350,
            'idManufacture'=> 6,
            'idProtype'=>1,
            'image'=>'vsmart-aris-xanh-la-new.jpg',
            'price'=> 5990000,
            'description'=>'Màn hình:	AMOLED, 6.39", Full HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 64 MP & Phụ 8 MP, 8 MP, 2 MP
            Camera trước:	20 MP
            Chip:	Snapdragon 730
            RAM:	6 GB
            Bộ nhớ trong:	64 GB
            SIM:	2 Nano SIM, Hỗ trợ 4G
            Pin, Sạc:	4000 mAh, 18 W',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Vsmart Star 4 (3GB/32GB)",
            'amount'=> 350,
            'idManufacture'=> 6,
            'idProtype'=>1,
            'image'=>'vsmart-start-3gb-den.jpg',
            'price'=> 2340000,
            'description'=>'Màn hình:	IPS LCD, 6.09", HD+
            Hệ điều hành:	Android 10
            Camera sau:	Chính 8 MP & Phụ 5 MP
            Camera trước:	8 MP
            Chip:	MediaTek Helio P35
            RAM:	3 GB
            Bộ nhớ trong:	32 GB
            SIM:	2 Nano SIM (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G
            Pin, Sạc:	3500 mAh, 10 W',
            'feature'=> 0,
        ]);  
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe Bluetooth True Wireless Samsung Galaxy Buds+ R175",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>2,
            'image'=>'bluetooth-tws-samsung-galaxy-bub-r175.jpg',
            'price'=> 1490000,
            'description'=>'Thiết kế thời thượng, đeo vừa vặn, phù hợp cho mọi đối tượng sử dụng. 
            Chuẩn âm thanh studio với loa 2 chiều AKG mạnh mẽ.
            Kết nối không dây Bluetooth 5.0 dễ dàng với các thiết bị.
            Thời gian sử dụng 11 giờ và 22 giờ cùng hộp sạc.
            Sạc nhanh 3 phút cung cấp đến 1 giờ sử dụng.
            Có thể sạc ngay với thiết bị sạc không dây chuẩn Qi bất kì.',
            'feature'=> 1,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe Bluetooth True Wireless Galaxy Buds Pro",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>2,
            'image'=>'tai-nghe-bluetooth-true-wireless-galaxy-buds-pro.jpg',
            'price'=> 4990000,
            'description'=>'Nâng tầm trải nghiệm âm và chất lượng cuộc gọi với chống ồn chủ động (ANC).
            Kết nối không dây Bluetooth 5.0 dễ dàng với các thiết bị ngoài, đường truyền ổn định.
            Chuẩn âm thanh studio với loa 2 chiều AKG mạnh mẽ.
            Tận hưởng âm thanh vòm lôi cuốn, chuẩn điện ảnh từ 360 Audio.
            Đàm thoại rõ ràng với hệ thống 3 mic và bộ phận thu nhận giọng nói (Voice Pickup Unit).
            Loa 2 chiều (loa trầm 11mm, loa bổng 6.5mm).
            Khả năng kháng nước hiệu quả cùng xếp hạng kháng nước IPX7.
            Thời gian sử dụng 5 giờ và 13 giờ cùng hộp sạc (bật chống ồn), sử dụng 8 giờ và 20 giờ cùng hộp sạc (tắt chống ồn).',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe Bluetooth 1 Bên Samsung MG900E",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>2,
            'image'=>'tai-nghe-bluetooth-samsung-mg900e.jpg',
            'price'=> 850000,
            'description'=>'Kiểu dáng nhỏ gọn, vỏ nhựa giả da sang trọng.
            Chuẩn Bluetooth V3.0 kết nối mượt mà tối đa đến 10 m.
            Phối ghép với 2 thiết bị cùng lúc.
            Âm thanh rõ ràng với công nghệ giảm tạp âm.
            Sử dụng kéo dài đến 9 tiếng, sạc trong 2 tiếng.',
            'feature'=> 1,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe Có Dây Samsung EG920B",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>2,
            'image'=>'tai-nghe-nhet-tai-samsung-eg920b.jpg',
            'price'=> 690000,
            'description'=>'Thiết kế gọn đẹp, có 3 màu sắc lựa chọn.
            Dây dài 1.2 m, đệm tai có móc giúp đeo chắc chắn.
            Âm thanh trong trẻo, trung thực.
            Có mic thoại, nút chỉnh nhận cuộc gọi, chuyển bài hát, dừng/chơi nhạc, tăng/giảm âm lượng.',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe Bluetooth Samsung Level U Pro BN920C",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>2,
            'image'=>'tai-nghe-bluetooth-samsung-level-u-pro-bn920c.jpg',
            'price'=> 1450000,
            'description'=>'Đệm tai được thiết kế mềm mại, linh hoạt.
            Cung cấp hơn 9 giờ nghe nhạc, 9 giờ đàm thoại và 300 giờ cho thời gian chờ.
            Chất lượng âm thanh tuyệt hảo nhờ công nghệ giảm tiếng ồn NR và EC.
            Kết nối nam châm giữa hai đầu tai nghe của Level U sẽ giữ tai nghe khi không sử dụng.
            Dung lượng pin 200 mAh (lõi pin Li-Ion). Thời gian sạc trung bình khoảng 3 giờ.
            Sản phẩm chính hãng Samsung.',
            'feature'=> 1,
        ]);

        //Realme
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe Bluetooth Realme Buds Q",
            'amount'=> 350,
            'idManufacture'=> 3,
            'idProtype'=>2,
            'image'=>'black_9_1.jpg',
            'price'=> 590000,
            'description'=>'Cổng sạc ra	Micro-USB
            Dung lượng Pin	20 giờ sử dụng
            Pin	Tai nghe:40mAh
            Case sạc:400mAh
            Chống nước	IPX4
            Tính năng khác	Điều khiển cảm ứng
            Bluetooth	5.0
            Hãng sản xuất	Realme
            Kích thước	19.8mm×17.55mm×22.5mm
            Trọng lượng	3.6 g',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe bluetooth Realme Buds Air Neo",
            'amount'=> 350,
            'idManufacture'=> 3,
            'idProtype'=>2,
            'image'=>'realme-buds-ai_1_.jpg',
            'price'=> 1290000,
            'description'=>'Nghe gọi	Tích hợp 2 micro để khử ồn
            Cổng giao tiếp	Micro USB
            Pin	Lên tới 17h
            Tính năng khác	Chống nước và bám bụi IPX2
            Bluetooth	Chuẩn kết nối Bluetooth 5.0
            Hãng sản xuất	Realme',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe Bluetooth Realme Buds Air Pro",
            'amount'=> 350,
            'idManufacture'=> 3,
            'idProtype'=>2,
            'image'=>'tai-nghe-bluetooth-realme-buds-air-pro-1.jpg',
            'price'=> 1890000,
            'description'=>'Dung lượng Pin	Hộp sạc:486 mAh
            Pin	Thời gian sử dụng:25 giờ khi không bật ANC
            Chống nước	IPX4
            Tính năng khác	Google Fast Pair
            Chế độ Bass Boost+
            Điều khiển cảm ứng
            Bluetooth	5.0
            Hãng sản xuất	Realme
            Trọng lượng	Tai nghe : 5gr
            Hộp sạc : 39.5 gram',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe không dây Realme Buds Air",
            'amount'=> 350,
            'idManufacture'=> 3,
            'idProtype'=>2,
            'image'=>'dc-cover-or4tdrkmj27qmp9k23cgfhjkd4-20191217183205.medi.jpeg',
            'price'=> 1990000,
            'description'=>'Cổng giao tiếp	USB Type C
            Pin	17 Giờ sử dụng
            Bluetooth	5.0
            Hãng sản xuất	Realme',
            'feature'=> 0,
        ]);

        //Xiaomi
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe Bluetooth True Wireless Xiaomi Earbuds Basic 2 BHR4272GL",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>2,
            'image'=>'bluetooth-tws-xiaomi-earbuds-basic-2-ava-1-600x600.jpg',
            'price'=> 790000,
            'description'=>'Thiết kế nhỏ gọn, phù hợp với nhiều kích cỡ tai.
            Màng loa có kích thước 7.2 mm cho âm bass các thêm dày và sâu.
            Bắt trọn âm thanh với công nghệ khử tiếng ồn DSP.
            Yên tâm sử dụng với khả năng chống nước IPX4.
            Nghe nhạc thả ga, sạc đầy pin nhanh chóng.
            Kết nối không dây nhanh chóng, tương thích với nhiều thiết bị nhờ công nghệ Bluetooth 5.0.
            Tự động kết nối, điều khiển tai nghe tiện lợi.',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe Bluetooth True Wireless Earphones 2 Basic Xiaomi BHR4089GL",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>2,
            'image'=>'226702-600x600.jpg',
            'price'=> 1272000,
            'description'=>'Thiết kế nhỏ gọn, tiện lợi mang theo.
            Chuẩn Bluetooth 5.0 kết nối mượt mà đến 10m.
            Khả năng chống nước chuẩn IPX5.
            Điều khiển bằng cảm ứng trên tai nghe.
            Trang bị công nghệ khử tiếng ồn môi trường.
            Âm thanh tuyệt vời với codec AAC và màng loa 14,2 mm.
            Thời gian sử dụng 5 giờ, kèm hộp sạc 20 giờ và sạc 1.5 giờ.',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe Bluetooth True Wireless Earphones 2 Xiaomi ZBW4493GL",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>2,
            'image'=>'226701-600x600.jpg',
            'price'=> 1990000,
            'description'=>'Kiểu dáng nhỏ gọn cùng thiết kế hiện đại, trẻ trung.
            Kết nối nhanh chóng và ổn định trong phạm vi 10 m nhờ Bluetooth 5.0.
            Dễ dàng điều khiển chỉ bằng cảm ứng thao tác chạm.
            Trò chuyện điện thoại thoải mái và rõ ràng hơn nhờ công nghệ khử tiếng ồn.
            Bảo vệ tai nghe khỏi tác hại của nước với chuẩn chống nước IPX5.
            Chất âm sống động, tận hưởng trọn vẹn các giai điệu.
            Thời gian sử dụng 4 giờ, kèm hộp sạc 18 giờ và sạc 1 giờ.',
            'feature'=> 0,
        ]);

        //Oppo
        DB::table('products')->insert([
            'nameProduct' => "Tai nghe Có Dây EP OPPO MH151",
            'amount'=> 350,
            'idManufacture'=> 5,
            'idProtype'=>2,
            'image'=>'co-day-ep-oppo-mh151-ava-600x600.jpg',
            'price'=> 590000,
            'description'=>'Thiết kế cá tính, có 2 màu bạc - đen, thích hợp dùng nghe nhạc, chơi game,...
            Âm thanh chân thực, rõ ràng với màng loa 11.2 mm.
            Dây có chiều dài 1.2 m, jack cắm 3.5 mm kết nối với nhiều thiết bị tiện lợi.
            Thu nhận giọng nói sắc nét với mic thoại. 
            Điều khiển dễ chỉnh phát/dừng chơi nhạc, tăng/giảm âm lượng, nhận cuộc gọi.',
            'feature'=> 0,
        ]);

        //Speaker
        DB::table('products')->insert([
            'nameProduct' => "Apple HomePod Mini (Space Gray)",
            'amount'=> 350,
            'idManufacture'=> 1,
            'idProtype'=>5,
            'image'=>'HomePod-Mini-SpaceGray.jpg',
            'price'=> 3200000,
            'description'=>'Full-range driver and dual passive radiators for deep bass and crisp high frequencies
            Custom acoustic waveguide for a 360º sound field
            Four-microphone design for far-field Siri
            Multiroom audio with AirPlay 2, Stereo pair capable',
            'feature'=> 1,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Apple HomePod Mini (White)",
            'amount'=> 350,
            'idManufacture'=> 1,
            'idProtype'=>5,
            'image'=>'HomePod-Mini-White.jpg',
            'price'=> 3200000,
            'description'=>'Full-range driver and dual passive radiators for deep bass and crisp high frequencies
            Custom acoustic waveguide for a 360º sound field
            Four-microphone design for far-field Siri
            Multiroom audio with AirPlay 2, Stereo pair capable',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Apple HomePod (Space Gray)",
            'amount'=> 350,
            'idManufacture'=> 1,
            'idProtype'=>5,
            'image'=>'HomePod-SpaceGray-A.jpg',
            'price'=> 5600000,
            'description'=>'A8 chip. The biggest brain ever in a speaker.
            Deep bass. Engineered to lower the boom.
            Seven tweeters. Amazing sound from every angle.',
            'feature'=> 1,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Loa HomePod (White)",
            'amount'=> 350,
            'idManufacture'=> 1,
            'idProtype'=>5,
            'image'=>'HomePod-White-A.jpg',
            'price'=> 5600000,
            'description'=>'A8 chip. The biggest brain ever in a speaker.
            Deep bass. Engineered to lower the boom.
            Seven tweeters. Amazing sound from every angle.',
            'feature'=> 1,
        ]);
        
        //Samsung
        DB::table('products')->insert([
            'nameProduct' => "Loa thanh Samsung HW-T420",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>5,
            'image'=>'samsung-hw-t420-170421-1024170.jpg',
            'price'=> 2160000,
            'description'=>'Loại loa:

            Loa thanh, loa soundbar
            Số lượng kênh:
            
            2.1 kênh
            Tổng công suất:
            
            150 W
            Kết nối không dây:
            
            Bluetooth 2.0
            Kết nối khác:
            
            Cổng kết nối với SubwooferOpticalUSB
            Tiện ích:
            
            Có cổng USBCó kèm remote
            Kích thước:
            
            Dài 86 cm - Rộng 5.4 cm - Cao 7.4 cm - Nặng 7.2 kg
            Loa chính:
            
            Dài 18.2 cm - Rộng 27.2 cm - Cao 34.3 cm
            Thương hiệu của:
            
            Hàn Quốc
            Dòng sản phẩm:
            
            2020
            Hãng
            Samsung. Xem thông tin hãng',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Loa Tháp Samsung MX-T70/XV",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>5,
            'image'=>'samsung-mx-t70-xv-1-1-org.jpg',
            'price'=> 7690000,
            'description'=>'A8 chip. The biggest brain ever in a speaker.
            Deep bass. Engineered to lower the boom.
            Seven tweeters. Amazing sound from every angle.',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Loa HomePod (White)",
            'amount'=> 350,
            'idManufacture'=> 1,
            'idProtype'=>5,
            'image'=>'HomePod-White-A.jpg',
            'price'=> 5600000,
            'description'=>'Loại loa:

            Loa kéo
            Tổng công suất:
            
            1500 W
            Kết nối không dây:
            
            Bluetooth 2.0
            Kết nối khác:
            
            Jack 6.5 MicroUSBAUX in
            Tiện ích:
            
            Kháng nướcCó thể hát KaraokeCó kèm remote
            Điều khiển bằng điện thoại:
            
            Có app điều khiển trên điện thoại Android
            Kích thước:
            
            Dài 46.3 cm - Rộng 88.4 cm - Cao 45.5cm - Nặng 26.5 kg
            Thương hiệu của:
            
            Hàn Quốc
            Dòng sản phẩm:
            
            2020
            Hãng
            
            Samsung. Xem thông tin hãng',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Loa thanh Samsung HW-T550",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>5,
            'image'=>'samsung-hw-t550-1-org.jpg',
            'price'=> 4190000,
            'description'=>'Loại loa:

            Loa thanh, loa soundbar
            Số lượng kênh:
            
            2.1 kênh
            Tổng công suất:
            
            320 W
            Công nghệ âm thanh:
            
            DTS Virtual:X
            Kết nối không dây:
            
            Bluetooth 2.0
            Kết nối khác:
            
            HDMIOpticalUSB
            Tiện ích:
            
            Có cổng USBCó kèm remote
            Kích thước:
            
            Dài 86 cm - Rộng 8.6 cm - Cao 5.5 cm - Nặng 9.5 kg
            Loa chính:
            
            Dài 20.5 cm - Rộng 29.2 cm - Cao 35 cm
            Thương hiệu của:
            
            Hàn Quốc
            Hãng
            
            Samsung. Xem thông tin hãng',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Loa Thanh Samsung HW-M450",
            'amount'=> 350,
            'idManufacture'=> 2,
            'idProtype'=>5,
            'image'=>'dan-loa-dvd-samsung-hw-m450-1-300x300.jpg',
            'price'=> 5290000,
            'description'=>'Loại loa:

            Loa thanh, loa soundbar
            Số lượng kênh:
            
            2.1 kênh
            Công nghệ âm thanh:
            
            Dolby DigitalSurround Sound Expansion
            Kết nối không dây:
            
            BluetoothLoa sub kết nối không dây với loa thanh
            Kết nối khác:
            
            HDMIHDMI ARC (cắm tivi)OpticalĐầu AUX INUSB
            Tiện ích:
            
            Có kèm remoteMàn hình hiển thị
            Điều khiển bằng điện thoại:
            
            Bằng ứng dụng Samsung Audio Remote
            Kích thước:
            
            Ngang 90.75 cm - Cao 5.5 cm - Sâu 7 cm - Nặng 2 kg
            Loa chính:
            
            Ngang 20 cm - Cao 39.5 cm - Sâu 37.5 cm - Nặng 7.2 kg
            Thương hiệu của:
            
            Hàn Quốc
            Hãng
            
            Samsung. Xem thông tin hãng',
            'feature'=> 0,
        ]);

        //Xiaomi
        DB::table('products')->insert([
            'nameProduct' => "Loa Bluetooth Outdoor Xiaomi Portable Speaker 16W (MDZ-36-DB)",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>5,
            'image'=>'loa-mi-bluetooth-16w-thum__3_.png',
            'price'=> 800000,
            'description'=>'Thương hiệu	XIAOMI
            Model	MDZ-36-DB
            Kích thước	213 x 74 x 74 mm
            Bluetooth	5.0
            Công suất	2 x 8W (16W)
            Dải tần	80Hz đến 20KHz
            Chống nước	IPx7
            Pin	Lithium-ion, 3.7V, 2600mAh
            Thời gian chơi nhạc	13 giờ
            Màu sắc	Đen / Xanh Blue',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Loa Bluetooth mini Xiaomi 2020",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>5,
            'image'=>'loa-bluetooth-mini-xiaomi-2020-1.jpg',
            'price'=> 220000,
            'description'=>'Thương hiệu	Xiaomi
            Model	XMYX07YM
            Kích thước	52 x 52.7 x 27mm
            Kết nối không dây	Bluetooth 5.0
            Khoảng cách kết nối	≤ 10m
            Thời gian phát nhạc	Khoảng 6 giờ
            Loại pin	Pin lithium tích hợp có thể sạc lại
            Dung lượng pin	480mAh
            Cổng sạc	Type-C
            Công suất định mức	2W
            Thông số đầu vào	5V – 300mA',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Loa Bluetooth Canon 2 Xiaomi 2019",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>5,
            'image'=>'loa-bluetooth-hinh-tru-canon-2-xiaomi-2019__7_.jpg',
            'price'=> 500000,
            'description'=>'Thương hiệu	 Xiaomi
            Model	 LYYX01ZM
            Kích thước	 60 x 60 x 93.3mm
            Phiên bản bluetooth	 v4.1
            Khoảng cách kết nối	 10m
            Thời gian phát nhạc liên tục	 khoảng 7 giờ
            Công suất đầu ra tối đa	 5W
            Trở kháng loa	 4Ω
            Dung lượng pin	 1200mAh 3.7V
            Đầu vào USB	 5V 1A
            Nhiệt độ làm việc	 -10ºC ~ +40ºC',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Loa bluetooth thông minh Redmi XiaoAI Speaker",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>5,
            'image'=>'loa-bluetooth-thong-minh-redmi-xiaoai-speaker__7_.jpg',
            'price'=> 400000,
            'description'=>'Thương hiệu	Redmi
            Kích thước	142 x 70 x 82mm
            Trọng lượng	464g
            Màu sắc	hồng, trắng, xanh lá, xanh biển
            Dải loa	1.75inch
            Kết nối WiFi	2.4GHz, hỗ trợ giao thức IEEE 802.11 b/g/n
            Kết nối bluetooth	4.2, hỗ trợ phát nhạc A2DP
            Phiên bản hỗ trợ	Android 4.4 và iOS 9.0 trở lên
            Nguồn điện	DC 12V/ 1A',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Bộ âm thanh gia đình Surround home theater Xiaomi",
            'amount'=> 350,
            'idManufacture'=> 4,
            'idProtype'=>5,
            'image'=>'loa-rap-hat-surroud-home-theater_.jpg',
            'price'=> 8500000,
            'description'=>'Note: Sản phẩm gồm 1 Sound Bar, 1 Loa Bass và 2 loa nhỏ,
            - Muốn kết nối được 2 loa nhỏ với Sound Bar thì mình cắm usb có sẵn vào cổng usb 2.0 trên SoundBar
            - Kết nối Loa Bass với Sound Bar bằng cộng dây cáp cắm từ Loa Bass qua SoundBar
            - Cách sử dụng:
            Cách 1: Cắm cổng Mi Port từ Sound Bar vào cổng HDMI của Tivi ( tất cả thiết bị khác muốn dùng được như đầu thu kĩ thuật số, Mibox, FPT box, cổng anten đều phải cắm thông qua Sound Bar )
            Cách 2: Kết nối Bluetooth với điện thoại của mình',
            'feature'=> 0,
        ]);

        //Oppo
        DB::table('products')->insert([
            'nameProduct' => "Loa Bluetooth Oppo OBMC3",
            'amount'=> 350,
            'idManufacture'=> 5,
            'idProtype'=>5,
            'image'=>'81dj_v9nhel.jpg',
            'price'=> 490000,
            'description'=>'Dung lượng Pin	Sử dụng trong 8 giờ
            Pin	750mAh
            Sạc đầy trong 3h
            Phạm vi hiệu quả	10m
            Bluetooth	5.0
            Hãng sản xuất	OPPO',
            'feature'=> 0,
        ]);
        
        //Laptop

        //Macbook
        DB::table('products')->insert([
            'nameProduct' => "Laptop Apple MacBook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)",
            'amount'=> 350,
            'idManufacture'=> 7,
            'idProtype'=>6,
            'image'=>'apple-macbook-air-mqd32sa-a-i5-5350u-bac-1-org.jpg',
            'price'=> 19990000,
            'description'=>'CPU:

            Intel Core i5 Broadwell1.80 GHz
            RAM:
            
            8 GBDDR3L (On board)1600 MHz
            Ổ cứng:
            
            SSD 128 GB
            Màn hình:
            
            13.3 inchWXGA+(1440 x 900)
            Card màn hình:
            
            Card đồ họa tích hợpIntel HD Graphics 6000
            Cổng kết nối:
            
            MagSafe 22 x USB 3.0Thunderbolt 2
            Đặc biệt:
            
            Có đèn bàn phím
            Hệ điều hành:
            
            Mac OS
            Thiết kế:
            
            Vỏ kim loại nguyên khốiPIN liền
            Kích thước:
            
            Dày 17 mm1.35 Kg',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Laptop Apple Macbook Pro M1 2020/16GB/1TB SSD (Z11C000CJ)",
            'amount'=> 350,
            'idManufacture'=> 7,
            'idProtype'=>6,
            'image'=>'laptopapplemacbookprom1-1-org.jpg',
            'price'=> 52490000,
            'description'=>'CPU:

            Apple M1
            RAM:
            
            16 GB
            Ổ cứng:
            
            SSD 1 TB
            Màn hình:
            
            13.3 inchRetina (2560 x 1600)
            Card màn hình:
            
            Card đồ họa tích hợp8 nhân GPU
            Cổng kết nối:
            
            2 x Thunderbolt 3 (USB-C)
            Đặc biệt:
            
            Có đèn bàn phím
            Hệ điều hành:
            
            Mac OS
            Thiết kế:
            
            Vỏ kim loại nguyên khốiPIN liền
            Kích thước:
            
            Dày 15.6 mm1.4 kg',
            'feature'=> 1,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Laptop Apple MacBook Pro M1 2020 16GB/512GB (Z11C)",
            'amount'=> 350,
            'idManufacture'=> 7,
            'idProtype'=>6,
            'image'=>'space-1-org.jpg',
            'price'=> 490000,
            'description'=>'CPU:

            Apple M1
            RAM:
            
            16 GB
            Ổ cứng:
            
            SSD: 512 GB
            Màn hình:
            
            13.3 inchRetina (2560 x 1600)
            Card màn hình:
            
            Card đồ họa tích hợp8 nhân GPU
            Cổng kết nối:
            
            2 x Thunderbolt 3 (USB-C)
            Đặc biệt:
            
            Có đèn bàn phím
            Hệ điều hành:
            
            Mac OS
            Thiết kế:
            
            Vỏ kim loại nguyên khốiPIN liền
            Kích thước:
            
            Dày 15.6 mm1.4 kg',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Laptop Apple MacBook Air 2019 i5 1.6GHz/8GB/256GB (MVFL2SA/A)",
            'amount'=> 350,
            'idManufacture'=> 7,
            'idProtype'=>6,
            'image'=>'apple-macbook-air-2019-i5-mvfl2sa-a-1-1-org.jpg',
            'price'=> 34990000,
            'description'=>'CPU:

            Intel Core i5 Coffee Lake1.60 GHz
            RAM:
            
            8 GBLPDDR32133 MHz
            Ổ cứng:
            
            SSD 256 GB
            Màn hình:
            
            13.3 inchRetina (2560 x 1600)
            Card màn hình:
            
            Card đồ họa tích hợpIntel UHD Graphics 617
            Cổng kết nối:
            
            2 x Thunderbolt 3 (USB-C)
            Đặc biệt:
            
            Có đèn bàn phím
            Hệ điều hành:
            
            Mac OS
            Thiết kế:
            
            Vỏ kim loại nguyên khốiPIN liền
            Kích thước:
            
            Dày 4.1 đến 15.6 mm1.25 kg',
            'feature'=> 1,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Laptop Apple MacBook Air M1 2020 8GB/512GB (MGN73SA/A)",
            'amount'=> 350,
            'idManufacture'=> 7,
            'idProtype'=>6,
            'image'=>'grey-1-org.jpg',
            'price'=> 34990000,
            'description'=>'CPU:

            Apple M1
            RAM:
            
            8 GB
            Ổ cứng:
            
            SSD: 512 GB
            Màn hình:
            
            13.3 inchRetina (2560 x 1600)
            Card màn hình:
            
            Card đồ họa tích hợp8 nhân GPU
            Cổng kết nối:
            
            2 x Thunderbolt 3 (USB-C)
            Đặc biệt:
            
            Có đèn bàn phím
            Hệ điều hành:
            
            Mac OS
            Thiết kế:
            
            Vỏ kim loại nguyên khốiPIN liền
            Kích thước:
            
            Dày 4.1 mm đến 16.1 mm1.29 kg',
            'feature'=> 0,
        ]);

        //MSI
        DB::table('products')->insert([
            'nameProduct' => "Laptop MSI Gaming Leopard 10SDK GL65 i7 10750H/16GB/512GB/144Hz/6GB GTX1660Ti/Win10 (242VN)",
            'amount'=> 350,
            'idManufacture'=> 8,
            'idProtype'=>6,
            'image'=>'msi-gaming-leopard-10sdr-gl65-i7-242vn-1-org.jpg',
            'price'=> 32990000,
            'description'=>'CPU:

            Intel Core i7 Comet Lake10750H2.60 GHz
            RAM:
            
            16 GBDDR4 (2 khe)2666 MHz
            Ổ cứng:
            
            SSD 512GB NVMe PCIeHỗ trợ khe cắm HDD SATA
            Màn hình:
            
            15.6"Full HD (1920 x 1080), 144Hz
            Card màn hình:
            
            Card đồ họa rờiNVIDIA GeForce GTX 1660Ti
            Cổng kết nối:
            
            3 x USB 3.2HDMILAN (RJ45)Mini DisplayPortUSB Type-C
            Đặc biệt:
            
            Có đèn bàn phím
            Hệ điều hành:
            
            Windows 10 Home SL
            Thiết kế:
            
            Vỏ nhựaPIN liền
            Kích thước:
            
            Dày 21.7 mm2.3 kg',
            'feature'=> 1,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Laptop MSI GF65 Thin 10UE i5 10500H/16GB/512GB/6GB RTX3060 Max-Q/144Hz/Balo/Chuột/Win10 (297VN)",
            'amount'=> 350,
            'idManufacture'=> 8,
            'idProtype'=>6,
            'image'=>'msi-gf65-thin-10ue-i5-10500h-16gb-512gb-6gb-rtx306-600x600.jpg',
            'price'=> 28990000,
            'description'=>'CPU:

            Intel Core i5 Comet Lake10500H2.50 GHz
            RAM:
            
            16 GBDDR4 2 khe (1 khe 8GB + 1 khe 8GB)3200 MHz
            Ổ cứng:
            
            SSD 512GB NVMe PCIeHỗ trợ khe cắm SSD M.2 PCIe
            Màn hình:
            
            15.6"Full HD (1920 x 1080), 144Hz
            Card màn hình:
            
            Card đồ họa rờiNVIDIA GeForce RTX 3060 Max-Q, 6 GB
            Cổng kết nối:
            
            2 x USB 3.2HDMILAN (RJ45)2 x USB Type-C
            Đặc biệt:
            
            Có đèn bàn phím
            Hệ điều hành:
            
            Windows 10 Home SL
            Thiết kế:
            
            Vỏ nhựaPIN liền
            Kích thước:
            
            Dày 21.7 mm1.86 kg',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Laptop MSI GL65 Leopard 10SCXK i7 10750H/8GB/512GB/4GB GTX1650/144Hz/Balo/Win10 (093VN)",
            'amount'=> 350,
            'idManufacture'=> 8,
            'idProtype'=>6,
            'image'=>'msi-gl65-leopard-10scxk-i7-093vn-1-1-org.jpg',
            'price'=> 24990000,
            'description'=>'CPU:

            Intel Core i7 Comet Lake10750H2.60 GHz
            RAM:
            
            8 GBDDR4 (2 khe)
            Ổ cứng:
            
            SSD 512GB NVMe PCIeHỗ trợ khe cắm HDD SATA
            Màn hình:
            
            15.6"Full HD (1920 x 1080), 144Hz
            Card màn hình:
            
            Card đồ họa rờiNVIDIA GeForce GTX 1650 4 GB
            Cổng kết nối:
            
            3 x USB 3.2HDMILAN (RJ45)Mini DisplayPortUSB Type-C
            Đặc biệt:
            
            Có đèn bàn phím
            Hệ điều hành:
            
            Windows 10 Home SL
            Thiết kế:
            
            Nắp lưng và chiếu nghỉ tay bằng kim loạiPIN liền
            Kích thước:
            
            Dày 21.7 mm2.3 kg',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Laptop MSI GF75 Thin 10SCXR i7 10750H/8GB/512GB/4GB GTX1650/144Hz/Balo/Chuột/Win10 (068VN) ",
            'amount'=> 350,
            'idManufacture'=> 8,
            'idProtype'=>6,
            'image'=>'msi-gf75-thin-10scxr-i7-10750h-8gb-512gb-4gb-gtx16-600x600.jpg',
            'price'=> 23490000,
            'description'=>'CPU:

            Intel Core i7 Comet Lake10750H2.60 GHz
            RAM:
            
            8 GBDDR4 (2 khe)3200 MHz
            Ổ cứng:
            
            SSD 512GB NVMe PCIeHỗ trợ khe cắm HDD SATA
            Màn hình:
            
            17.3 inchFull HD (1920 x 1080), 144Hz
            Card màn hình:
            
            Card đồ họa rờiNVIDIA GeForce GTX 1650 4 GB
            Cổng kết nối:
            
            3 x USB 3.2HDMILAN (RJ45)USB Type-C
            Đặc biệt:
            
            Có đèn bàn phím
            Hệ điều hành:
            
            Windows 10 Home SL
            Thiết kế:
            
            Vỏ nhựaPIN liền
            Kích thước:
            
            Dày 23.1 mm2.2 kg',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Laptop MSI GF63 10SC i5 10300H 8GB/512GB/4GB GTX1650/144Hz/Win10 (255VN)",
            'amount'=> 350,
            'idManufacture'=> 8,
            'idProtype'=>6,
            'image'=>'msi-gf63-10sc-i5-255vn--1-org.jpg',
            'price'=> 20990000,
            'description'=>'CPU:

            Intel Core i5 Comet Lake10300H2.50 GHz
            RAM:
            
            8 GB2666 MHz
            Ổ cứng:
            
            SSD 512GB NVMe PCIeHỗ trợ khe cắm HDD SATA
            Màn hình:
            
            15.6"Full HD (1920 x 1080), 144Hz
            Card màn hình:
            
            Card đồ họa rờiNVIDIA GeForce GTX 1650 4 GB
            Cổng kết nối:
            
            3 x USB 3.2HDMILAN (RJ45)USB Type-C
            Đặc biệt:
            
            Có đèn bàn phím
            Hệ điều hành:
            
            Windows 10 Home SL
            Thiết kế:
            
            Nắp lưng và chiếu nghỉ tay bằng kim loạiPIN liền
            Kích thước:
            
            Dày 21.7 mm1.86 kg',
            'feature'=> 0,
        ]);         
    }
}
