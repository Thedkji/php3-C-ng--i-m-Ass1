<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h2>Bài tập cộng điểm ASM 1</h2>
    <hr>
    {{-- Yêu cầu 1: Truy vấn tất cả các bản ghi trong bảng users --}}
    <h3>Yêu cầu 1: Truy vấn tất cả các bản ghi trong bảng users</h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC1->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC1 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->age }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->birth_date }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{-- 
        Yêu cầu 2: Truy vấn với điều kiện
        Viết truy vấn để lấy các bản ghi từ bảng users mà cột age lớn hơn 25. 
    --}}
    <h3>
        Yêu cầu 2:
        Viết truy vấn để lấy các bản ghi từ bảng users mà cột age lớn hơn 25.
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC2->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC2 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->age }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->birth_date }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{-- 
        Yêu cầu 3: Truy vấn với nhiều điều kiện
        Viết truy vấn để lấy các bản ghi từ bảng users mà cột age lớn hơn 25 và status bằng 'active'. 
    --}}
    <h3>
        Yêu cầu 3:
        Viết truy vấn để lấy các bản ghi từ bảng users mà cột age lớn hơn 25 và status bằng 'active'
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC3->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC3 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->age }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->birth_date }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{-- 
        Yêu cầu 4: Sắp xếp kết quả
        Viết truy vấn để lấy các bản ghi từ bảng users, sắp xếp theo age giảm dần. 
    --}}
    <h3>
        Yêu cầu 4:
        Viết truy vấn để lấy các bản ghi từ bảng users, sắp xếp theo age giảm dần
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC4->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC4 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->age }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->birth_date }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{--  
        Yêu cầu 5: Giới hạn số lượng kết quả
        Viết truy vấn để lấy 10 bản ghi đầu tiên từ bảng products.
    --}}
    <h3>
        Yêu cầu 5: Giới hạn số lượng kết quả
        Viết truy vấn để lấy 10 bản ghi đầu tiên từ bảng products.
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC5->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC5 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->price }}</td>
                <td>{{ $data->quantity }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{--  
        Yêu cầu 6: Giới hạn số lượng kết quả
        Viết truy vấn để lấy 10 bản ghi đầu tiên từ bảng products.
    --}}
    <h3>
        Yêu cầu 6: Truy vấn với điều kiện OR
        Viết truy vấn để lấy các bản ghi từ bảng orders mà status là 'completed' hoặc total lớn hơn 100.
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC6->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC6 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->customer_id }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->total }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{--  
        Yêu cầu 7: Truy vấn với LIKE
        Viết truy vấn để lấy các bản ghi từ bảng customers mà name chứa chuỗi 'John'.
    --}}
    <h3>
        Yêu cầu 7: Truy vấn với LIKE
        Viết truy vấn để lấy các bản ghi từ bảng customers mà name chứa chuỗi 'John'.
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC7->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC7 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{--  
        Yêu cầu 8: Truy vấn với BETWEEN
        Viết truy vấn để lấy các bản ghi từ bảng sales mà amount nằm trong khoảng từ 1000 đến 5000.
    --}}
    <h3>
        Yêu cầu 8: Truy vấn với BETWEEN
        Viết truy vấn để lấy các bản ghi từ bảng sales mà amount nằm trong khoảng từ 1000 đến 5000.
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC8->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC8 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->amount }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{--  
        Yêu cầu 9: Truy vấn với IN
        Viết truy vấn để lấy các bản ghi từ bảng employees mà department_id nằm trong danh sách [1, 2, 3].
    --}}
    <h3>
        Yêu cầu 9: Truy vấn với IN
        Viết truy vấn để lấy các bản ghi từ bảng employees mà department_id nằm trong danh sách [1, 2, 3].
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC9->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC9 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->department_id }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{--  
        Yêu cầu 10: Thực hiện JOIN
        Viết truy vấn để lấy thông tin từ bảng orders và bảng customers với điều kiện orders.customer_id = customers.id.
    --}}
    <h3>
        Yêu cầu 10: Thực hiện JOIN
        Viết truy vấn để lấy thông tin từ bảng orders và bảng customers với điều kiện orders.customer_id = customers.id.
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC10->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC10 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->customer_id }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->total }}</td>
                <td>{{ $data->name }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{--  
        Yêu cầu 11: Truy vấn với nhóm và tổng hợp
        Viết truy vấn để tính tổng số lượng quantity của mỗi sản phẩm từ bảng order_items, nhóm theo product_id.
    --}}
    <h3>
        Yêu cầu 11: Truy vấn với nhóm và tổng hợp
        Viết truy vấn để tính tổng số lượng quantity của mỗi sản phẩm từ bảng order_items, nhóm theo product_id.
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC11->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC11 as $data)
            <tr>
                <td>{{ $data->product_id }}</td>
                <td>{{ $data->total_quantity }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{--  
        Yêu cầu 12: Cập nhật bản ghi
        Viết truy vấn để cập nhật status của tất cả các đơn hàng trong bảng orders thành 'shipped' nếu status hiện tại là 'processing'.
    --}}
    <h3>
        Yêu cầu 12: Cập nhật bản ghi
        Viết truy vấn để cập nhật status của tất cả các đơn hàng trong bảng orders thành 'shipped' nếu status hiện tại
        là 'processing'.
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($listYC12->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($listYC12 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->total }}</td>
                <td>{{ $data->customer_id }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{--  
        Yêu cầu 13: Xóa bản ghi
        Viết truy vấn để xóa tất cả các bản ghi từ bảng logs mà created_at trước ngày 1/1/2020.
    --}}
    <h3>
        Yêu cầu 13: Xóa bản ghi
        Viết truy vấn để xóa tất cả các bản ghi từ bảng logs mà created_at trước ngày 1/1/2020.
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($listYC13->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($listYC13 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->message }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{--  
        Yêu cầu 14: Thêm bản ghi mới
        Viết truy vấn để thêm một bản ghi mới vào bảng products với các thông tin về tên sản phẩm, giá và số lượng.
    --}}
    <h3>
        Yêu cầu 14: Thêm bản ghi mới
        Viết truy vấn để thêm một bản ghi mới vào bảng products với các thông tin về tên sản phẩm, giá và số lượng.
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($listYC14->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($listYC14 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->price }}</td>
                <td>{{ $data->quantity }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    {{--  
        Yêu cầu 15:Sử dụng Raw Expressions
        Viết truy vấn để lấy các bản ghi từ bảng users mà tháng sinh (birth_date) là tháng 5.
    --}}
    <h3>
        Yêu cầu 15:Sử dụng Raw Expressions
        Viết truy vấn để lấy các bản ghi từ bảng users mà tháng sinh (birth_date) là tháng 5.
    </h3>
    <table class="table table-striped">
        <tr>
            @foreach ($dataYC15->first() as $key => $data)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
        @foreach ($dataYC15 as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->age }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->birth_date }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
