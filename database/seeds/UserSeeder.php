<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username' => "GiaHuy",
            'password' => Hash::make('password'),
            'Email' => 'GiaHuy@gmail.com',
            'firstName' => 'Gia',
            'lastName' => 'Huy',
            'birthDay' => '2001/11/10',
            'address'=>"HCM",
            'CMND'=>"251265369",
            'Numberphone'=>'0797842160'
        ]);
        
        DB::table('user')->insert([
            'username' => "ThanhDat",
            'password' => Hash::make('password'),
            'Email' => 'ThanhDat@gmail.com',
            'firstName' => 'Thanh',
            'lastName' => 'Dat',
            'birthDay' => '2001/1/20',
            'address'=>"HCM",
            'CMND'=>"251879369",
            'Numberphone'=>'0791232160'
        ]);

    
        DB::table('manufacture')->insert([
            'nameManufacture' => "Apple",         
        ]);
        DB::table('manufacture')->insert([
            'nameManufacture' => "SamSung",         
        ]);
        DB::table('manufacture')->insert([
            'nameManufacture' => "Realme",         
        ]);
        DB::table('manufacture')->insert([
            'nameManufacture' => "Xiaomi",         
        ]);
        DB::table('manufacture')->insert([
            'nameManufacture' => "Oppo",         
        ]);
        DB::table('manufacture')->insert([
            'nameManufacture' => "HTC",         
        ]);

        DB::table('protype')->insert([
            'nameProtype' => "Phone",
        ]);
        DB::table('protype')->insert([
            'nameProtype' => "Headphone",
        ]);
        DB::table('protype')->insert([
            'nameProtype' => "Battery backup",
        ]);
        DB::table('protype')->insert([
            'nameProtype' => "Battery Phone",
        ]);
        DB::table('protype')->insert([
            'nameProtype' => "Speaker",
        ]);    


        DB::table('products')->insert([
            'nameProduct' => "Iphone 6",
            'amount'=> 7,
            'idManufacture'=> 1,
            'idProtype'=>1,
            'price'=> 6999000,
            'description'=>'Hàng Việt Nam Chất Lượng Oke',
            'image'=>'product-5.jpg',
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "SamSung",
            'amount'=> 7,
            'idManufacture'=> 1,
            'idProtype'=>1,
            'price'=> 6999000,
            'description'=>'Hàng Việt Nam Chất Lượng Oke',
            'image'=>'product-4.jpg',
            'feature'=> 0,

        ]);
        DB::table('products')->insert([
            'nameProduct' => "VISMART",
            'amount'=> 7,
            'idManufacture'=> 1,
            'idProtype'=>1,
            'price'=> 6999000,
            'description'=>'Hàng Việt Nam Chất Lượng Oke',
            'image'=>'product-3.jpg',
            'feature'=> 0,

        ]);        
        DB::table('products')->insert([
            'nameProduct' => "KIWI",
            'amount'=> 7,
            'idManufacture'=> 1,
            'idProtype'=>1,
            'price'=> 6999000,
            'description'=>'Hàng Việt Nam Chất Lượng Oke',
            'image'=>'product-4.jpg',
            'feature'=> 0,

        ]);       
         DB::table('products')->insert([
            'nameProduct' => "HTC",
            'amount'=> 7,
            'idManufacture'=> 1,
            'idProtype'=>1,
            'price'=> 6999000,
            'description'=>'Hàng Việt Nam Chất Lượng Oke',
            'image'=>'product-1.jpg',
            'feature'=> 0,

        ]);
        DB::table('products')->insert([
            'nameProduct' => "iPhone 8 Plus",
            'amount'=> 200,
            'idManufacture'=> 1,
            'idProtype'=>1,
            'image'=>'iphone8-plus.png',
            'price'=> 6590000,
            'description'=>'Bộ đôi iPhone 8 và iPhone 8 Plus đều sở hữu thiết kế kim loại chắc chắn kết hợp với mặt kính cường lực sang trọng, có khả năng chống nước, bụi bẩn đạt IP67. Tổng thể trên iPhone 8 khá nhỏ gọn, với màn hình 4.7 inch, giúp bạn dễ dàng thao tác bằng 1 tay. Trong khi đó iPhone 8 Plus có phần lớn hơn hẳn khi sở hữu màn hình lên đến 5.5 inch, điều này mang đến trải nghiệm tốt hơn khi xem phim, chơi game hay giải trí.',
            'feature'=> 1,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "Xiaomi Mi 10T Pro",
            'amount'=> 350,
            'idManufacture'=> 1,
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
            'feature'=> 0,
        ]);
        DB::table('products')->insert([
            'nameProduct' => "IPHONE 12 PRO 256GB",
            'amount'=> 350,
            'idManufacture'=> 1,
            'idProtype'=>1,
            'image'=>'IPHONE 12 PRO 256GB.jpeg',
            'price'=> 26290000,
            'description'=>'iPhone 12 Pro Max có thể xem là "quái vật" khi nói tới khả năng chụp và xử lý ảnh. Ống kính tele trên thiết bị có tiêu cự 65mm. Máy sử dụng hệ thống chống rung quang học sensor-shift mới, có thể điều chỉnh 5.000 lần mỗi giây. Người dùng có thể chụp ảnh phơi sáng 2 giây mà chỉ cần cầm trên tay.',
            'feature'=> 0,
        ]);
    }
}