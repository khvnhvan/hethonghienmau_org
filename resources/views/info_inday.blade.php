@extends('organizer')
@section('orgmain')

    <div class="dashboard-container">
        <div class="dashboard-title">
            <h1 class="donator-info-title-1">THÔNG TIN NGƯỜI <br>HIẾN MÁU TRONG NGÀY</h1>
            <h1 style="text-align: right;">THE BDSM <br>PROJECT</h1>
        </div>
        <br><br>
        <h3>Ngày: 3/9/2023</h3>
        <br>
        <form action="" method="POST" style="font-size: x-large;">
            <label for="id_num">Tìm kiếm theo CCCD: </label>
            <input type="text" name="id_num_search" id="id_num"
                style="font-size: x-large; font-family: 'Josefin Sans', sans-serif; padding: 0.5%;">
            <input type="submit" value="Tìm kiếm" name="search"
                style="font-size: x-large; font-family: 'Josefin Sans', sans-serif; padding: 0.5%;">
        </form>
        <br><br>
        <table border="2" style="background-color: #F7E9E8;">
            <tr>
                <th>CCCD - CMT</th>
                <th>Tên</th>
                <th>Nhóm máu</th>
                <th>Giới tính</th>
                <th>Đơn bệnh</th>
                <th>Lượng máu hiến</th>
                <th>Chấp thuận <br>của bác sĩ</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
            <tr>
                <td>
                    073589734985
                </td>
                <td>
                    Khánh Vân
                </td>
                <td>
                    O
                </td>
                <td>
                    Nữ
                </td>
                <td>
                    <a href="#" style="color: #414A5D;">Click</a>
                </td>
                <td>
                    350
                </td>
                <td>
                    Được
                </td>
                <td>
                    Chưa hiến
                </td>

                <td style=" display: flexbox; justify-content: space-around ;">
                    <a href="#"><button class="delete-btn">Khám lâm sàng</button></a>
                    <a href="#"><button class="update-btn">Cập nhật</button></a><br><br>

                    <a href="#"><button class="view-btn-2">Kết luận của bác sĩ</button></a>
                </td>
            </tr>
            <tr>
                <td>
                    073589734985
                </td>
                <td>
                    Khánh Vân
                </td>
                <td>
                    O
                </td>
                <td>
                    Nữ
                </td>
                <td>
                    <a href="#" style="color: #414A5D;">Click</a>
                </td>
                <td>
                    350
                </td>
                <td>
                    Được
                </td>
                <td>
                    Chưa hiến
                </td>

                <td style=" display: flexbox; justify-content: space-around ;">
                    <a href="#"><button class="delete-btn">Khám lâm sàng</button></a>
                    <a href="#"><button class="update-btn">Cập nhật</button></a><br><br>

                    <a href="#"><button class="view-btn-2">Kết luận của bác sĩ</button></a>
                </td>
            </tr>
            <tr>
                <td>
                    073589734985
                </td>
                <td>
                    Khánh Vân
                </td>
                <td>
                    O
                </td>
                <td>
                    Nữ
                </td>
                <td>
                    <a href="#" style="color: #414A5D;">Click</a>
                </td>
                <td>
                    350
                </td>
                <td>
                    Được
                </td>
                <td>
                    Chưa hiến
                </td>

                <td style=" display: flexbox; justify-content: space-around ;">
                    <a href="#"><button class="delete-btn">Khám lâm sàng</button></a>
                    <a href="#"><button class="update-btn">Cập nhật</button></a><br><br>

                    <a href="#"><button class="view-btn-2">Kết luận của bác sĩ</button></a>
                </td>
            </tr>
            <tr>
                <td>
                    073589734985
                </td>
                <td>
                    Khánh Vân
                </td>
                <td>
                    O
                </td>
                <td>
                    Nữ
                </td>
                <td>
                    <a href="#" style="color: #414A5D;">Click</a>
                </td>
                <td>
                    350
                </td>
                <td>
                    Được
                </td>
                <td>
                    Chưa hiến
                </td>

                <td style=" display: flexbox; justify-content: space-around ;">
                    <a href="#"><button class="delete-btn">Khám lâm sàng</button></a>
                    <a href="#"><button class="update-btn">Cập nhật</button></a><br><br>

                    <a href="#"><button class="view-btn-2">Kết luận của bác sĩ</button></a>
                </td>
            </tr>
        </table>
    </div>

@stop()
