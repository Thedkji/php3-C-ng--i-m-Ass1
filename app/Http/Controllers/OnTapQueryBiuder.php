<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OnTapQueryBiuder extends Controller
{
    public function index()
    {
        // Yêu cầu 1: Truy vấn tất cả các bản ghi từ bảng users.
        $dataYC1 = DB::table('users')->get();
        // dd($dataYC1);


        /* 
            Yêu cầu 2:
            Viết truy vấn để lấy các bản ghi từ bảng users mà cột age lớn hơn 25. 
        */
        $dataYC2 = DB::table('users')
            ->where("age", ">", 25)
            ->get();
        // dd($dataYC2);


        /*  
            Yêu cầu 3:
            Viết truy vấn để lấy các bản ghi từ bảng users mà cột age lớn hơn 25 và status bằng 'active' 
        */
        $dataYC3 = DB::table('users')
            ->where(
                [
                    ["age", ">", 25],
                    ["status", "=", 'active'],
                ]
            )
            ->get();
        // dd($dataYC3);

        /*  
            Yêu cầu 4: Sắp xếp kết quả
            Viết truy vấn để lấy các bản ghi từ bảng users, sắp xếp theo age giảm dần. 
        */
        $dataYC4 = DB::table('users')
            ->orderBy('age', 'desc')
            ->get();
        // dd($dataYC4);

        /* 
            Yêu cầu 5: Giới hạn số lượng kết quả
            Viết truy vấn để lấy 10 bản ghi đầu tiên từ bảng products.
        */
        $dataYC5 = DB::table('products')
            ->offset(0)
            ->limit(10)
            ->get();
        // dd($dataYC5);

        /*
            Yêu cầu 6: Truy vấn với điều kiện OR
            Viết truy vấn để lấy các bản ghi từ bảng orders mà status là 'completed' hoặc total lớn hơn 100.
        */
        $dataYC6 = DB::table('orders')
            ->where('status', '=', 'completed')
            ->orWhere('total', '>', '100')
            ->get();
        // dd($dataYC6);

        /*
            Yêu cầu 7: Truy vấn với LIKE
            Viết truy vấn để lấy các bản ghi từ bảng customers mà name chứa chuỗi 'John'.
        */
        $dataYC7 = DB::table('customers')
            ->where('name', 'like', '%John%')
            ->get();
        // dd($dataYC7);

        /*
            Yêu cầu 8: Truy vấn với BETWEEN
            Viết truy vấn để lấy các bản ghi từ bảng sales mà amount nằm trong khoảng từ 1000 đến 5000.
        */
        $dataYC8 = DB::table('sales')
            ->whereBetween('amount', [1000, 5000])
            ->get();
        // dd($dataYC8);

        /*
            Yêu cầu 9: Truy vấn với IN
            Viết truy vấn để lấy các bản ghi từ bảng employees mà department_id nằm trong danh sách [1, 2, 3].
        */
        $dataYC9 = DB::table('employees')
            ->whereIn('department_id', [1, 2, 3])
            ->get();
        // dd($dataYC9);

        /*
            Yêu cầu 10: Thực hiện JOIN
            Viết truy vấn để lấy thông tin từ bảng orders và bảng customers với điều kiện orders.customer_id = customers.id.
        */
        $dataYC10 = DB::table('orders as od')
            ->join("customers as cu", "cu.id", "=", "od.customer_id")
            ->get();
        // dd($dataYC10);

        /*
            Yêu cầu 11: Truy vấn với nhóm và tổng hợp
            Viết truy vấn để tính tổng số lượng quantity của mỗi sản phẩm từ bảng order_items, nhóm theo product_id.
        */
        $dataYC11 = DB::table('order_items')
            //Hàm DB::raw dùng để chèn trực tiếp câu lệnh sql vào hàm 
            // viết đầy đủ sẽ là :
            /* 
                SELECT product_id, SUM(quantity) AS total_quantity
                FROM order_items
                GROUP BY product_id;
            */
            ->select('product_id', DB::raw('SUM(quantity) as total_quantity'))
            ->groupBy('product_id')
            ->get();
        // dd($dataYC11);

        /*
            Yêu cầu 12: Cập nhật bản ghi
            Viết truy vấn để cập nhật status của tất cả các đơn hàng trong bảng orders thành 'shipped' nếu status hiện tại là 'processing'.
        */
        $listYC12 =  DB::table('orders')->get();
        $dataYC12 = DB::table('orders')
            ->where('status', '=', 'processing')
            ->update(
                [
                    "status" => "shipped"
                ]
            );
        // dd($listYC12);

        /*
            Yêu cầu 13: Xóa bản ghi
            Viết truy vấn để xóa tất cả các bản ghi từ bảng logs mà created_at trước ngày 1/1/2020.
        */
        $listYC13 =  DB::table('logs')->get();
        $dataYC13 = DB::table('logs')
            ->whereDate('created_at', '<', '2020-1-1')
            ->delete();
        // dd($listYC13);

        /*
            Yêu cầu 14: Thêm bản ghi mới
            Viết truy vấn để thêm một bản ghi mới vào bảng products với các thông tin về tên sản phẩm, giá và số lượng.
        */
        $listYC14 =  DB::table('products')->get();
        $dataYC14 = DB::table('products')
            ->insert(
                [
                    "name"      => "Sản phẩm thêm mới",
                    "price"     => 150,
                    "quantity"  => 30
                ]
            );
        // dd($listYC14);

        /*
            Yêu cầu 15:Sử dụng Raw Expressions
            Viết truy vấn để lấy các bản ghi từ bảng users mà tháng sinh (birth_date) là tháng 5.
        */
        $dataYC15 = DB::table('users')
            ->whereRaw('MONTH(birth_date) = 5')
            ->get();
        // dd($dataYC15);

        return view(
            'index',
            compact(
                'dataYC1',
                'dataYC2',
                'dataYC3',
                'dataYC4',
                'dataYC5',
                'dataYC6',
                'dataYC7',
                'dataYC8',
                'dataYC9',
                'dataYC10',
                'dataYC11',
                'listYC12',
                'dataYC12',
                'listYC13',
                'dataYC13',
                'listYC14',
                'dataYC14',
                'dataYC15'
            )
        );
    }
}
