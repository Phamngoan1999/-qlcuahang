<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <title>Giấy bán</title>
    <link rel="icon" href="{{asset('Logo/lg.jpg')}}" type="image/x-icon">
    <meta http-equiv="Content-Language" content="en-us"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <META content="Root" name=Author>
    <style>
        .than{
            margin:0 auto;
            width: 210mm;
            height: auto;
            font-size:23px;
            line-height: 1.2em;

            -webkit-print-color-adjust:exact;
            font-family: initial;
        }
        #bold{
            font-weight:bold;
        }
    </style>

</head>
<body>
<!--Liên 1-->
<div class="than" >
    <div >
        <table>
            <div style="text-align:center;padding-right: 45px; font-size: 20px;">
                <strong>
                    CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM
                    <br/>
                    Độc lập - Tự do - Hạnh phúc</strong>
                <br/>
                ----- o 0 o -----
            </div>
        </table>
        <div  style="float:none;text-align:center; width: 100%; display: inline-block;">
            <br />
            <h3><span id="bold">GIẤY BÁN, CHO, TẶNG XE</span></h3>
            <br />
        </div>
        <div  style="float:none; text-align:justify; line-height:35px">
            Tên chủ xe: <b>{{$thongTinXe->khachhang->ho_ten}} </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Năm sinh:<b>{{$thongTinXe->khachhang->nam_sinh}}</b>
            <br />
            Số CMND:&nbsp;<b>{{$thongTinXe->khachhang->so_CMND}}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cấp ngày:&nbsp;<b>{{date("d/m/Y", strtotime($thongTinXe->khachhang->cap_ngay))}}</b> &nbsp;&nbsp;&nbsp; tại:&nbsp;<b>{{$thongTinXe->khachhang->noi_cap_CMND}}</b>
            <br />
            Nơi thường trú: <b>{{$thongTinXe->khachhang->noi_cu_tru}}</b>
            <br />
            Có chiếc xe: <b>{{$thongTinXe->dongxe->ten_dong_xe}}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Biển số:&nbsp;<b>{{$thongTinXe->bien_so}}</b>
            <br />
            Nhãn hiệu: <b>{{$thongTinXe->dongxe->hangxe[0]->ten_hang_xe}}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số loại:&nbsp;<b>{{$thongTinXe->so_loai}}</b>
            <br />
            Loại xe: <b>{{$thongTinXe->dongxe->loaixe[0]->ten_loai_xe}}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Màu sơn:&nbsp;<b>{{$thongTinXe->mau_son}}</b>
            <br />
            Số máy: <b>{{$thongTinXe->so_may}}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số khung:&nbsp;<b>{{$thongTinXe->so_khung}}</b>
            <br />
            Đăng ký tại: <b>{{$thongTinXe->dang_ky_tai}}</b>
            <br />
            Nay bán, cho, tặng chiếc xe máy cho:<b>Phạm Văn Hoan</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Năm sinh:&nbsp;<b>1989</b>
            <br />
            Nơi cư trú:<b>&nbsp;Xóm 1, thôn Thuần Túy, xã Đông La, Đông Hưng, Thái Bình</b>
            <br />
            Số CMND/Thẻ CCCD:<b>152275879</b>&nbsp;&nbsp;&nbsp;Cấp ngày:&nbsp<b>&nbsp;14/05/2014</b>&nbsp;&nbsp;tại:&nbsp<b>Thái Bình</b>
        </div>
        <div  style="float:none;">
            <p>Đã giao giấy tờ gồm: Giấy đăng ký</p>
        </div>
        <br />
        Đề nghị cơ quan Công an cho ông bà:<b></b>&nbsp;được làm thủ tục sang tên chiếc xe nói trên.
        <table>
            <div style="float:right;padding-right: 45px; font-size: 20px;">
                <strong>.............., Ngày .....Tháng......năm 20......</strong>
            </div>
        </table>
        <br>
        <table>
            <div style="clear: both;float:right;padding-right: 120px; font-size: 20px;">
                <strong>Người bán</strong>
            </div>
        </table>
        <br>
        <table>
            <div style="clear: both;float:right;padding-right: 90px; font-size: 20px;">
                (Ký nghi rõ họ tên)
            </div>
        </table>
        <br/>
        <br/>
        <br/>
    </div>
    <div>
        <br />
        <b>Lời chứng: </b>
        <br/>
        <b>Ngày...... Tháng...... Năm.......</b>
        <br/>
        Bằng chữ: .......................................................................................................................
        <br/>
        Tại:..................................................................................................................................
        <br/>
        Chứng thực:.....................................................................................................................
        <br>
        Ông/Bà:............................................................................................................................
        <br>
        Giấy chứng minh nhân dân, hộ chiếu số: .......................................................................
        <br>
        Ngày cấp: ........................................................................................................................
        <br/>
        Cam đoan đã hiểu, tự chịu trách nhiệm về nội dung của giấy tờ, văn bản đã ký vào giấy, văn bản này trước mặt tôi.
        <br/>
        Số chứng thực ......................quyển số...........................SCT/CK,CĐ
        <table>
            <div>
                <br/>
                <br/>
                <strong>Ngày ...... Tháng....... Năm .......</strong>
                <br>
            </div>
            <div>
                <strong style="float:left;">Người tiếp nhận hồ sơ</strong><strong style="float:right;padding-right: 45px;">Người thực hiện chứng thực</strong>
            </div>
        </table><br><br><br><br><br><br><br>
    </div>
</div>
</body>
</html>

