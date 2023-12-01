<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إذن إصلاح خارجي</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            border: 5px solid #000;
            height: 100%;
            /* Black border around the entire page */
        }

        #invoice {
            background-color: #fff;
            width: 100%;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 100%;

        }

        #sub_invoice {
            padding-top: 10px;
            padding-right: 45px;
            padding-left: 45px
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }

        .invoice-header img {
            max-width: 150px;
            height: auto;
        }

        .invoice-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 8px;
        }

        th,
        td {
            border: 2px solid #ddd;
            padding: 5px;
            text-align: right;
        }

        td.top-right {
            text-align: right;
            vertical-align: top;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            text-align: right;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div id="invoice">
        <div id="sub_invoice">
            <div class="invoice-details">
                <div class="invoice-header">
                    <img src="{{ asset('logo.png') }}" alt="شعار الشركة">
                </div>
                <div class="text_center" style="text-align: center; line-height:0.5">
                    <p>وزارة الداخلية</p>
                    <p>الادارة العامة لشرطة البيئة والمسطحات</p>
                    <p>قسم المركبات</p>
                    <p>
                    <h5>=================</h5>
                    </p>
                </div>

            </div>
            <div style="text-align: center">
                <p>
                <h3>"إذن إصلاح خارجي" </h3>
                </p>
            </div>
            <div class="invoice-details">
                <div style="padding-left: 25px">
                    <p> {{ date('Y') }} /............:<strong>إذن رقم</strong></p>
                </div>
                <div style="padding-right: 25px">
                    <p>....................................:<strong>التاريخ</strong></p>
                </div>
            </div>
            <table>
                <!-- Another table with one row -->
                <thead>
                    <tr>
                        <th style="text-align: center">نوع الوقود</th>
                        <th style="text-align: center">اسم المستخدم</th>
                        <th style="text-align: center">رقم الموتور</th>
                        <th style="text-align: center">شاسيه</th>
                        <th style="text-align: center">الموديل</th>
                        <th style="text-align: center">الماركة</th>
                        <th style="text-align: center">رقم الشرطة</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="padding:0px;height:40px;max-height: 40px; min-height:40px">
                        <td style="text-align: center">{{ $car->work_place ?? '' }}</td>
                        <td style="text-align: center">{{ $car->user_name ?? '' }}</td>
                        <td style="text-align: center">{{ $car->rank ?? '' }}</td>
                        <td style="text-align: center">{{ $car->meter ?? '' }}</td>
                        <td style="text-align: center">{{ $car->model ?? '' }}</td>
                        <td style="text-align: center">{{ $car->brand ?? '' }}</td>
                        <td style="text-align: center">{{ $car->police_number ?? '' }}</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <table style="margin-top: 2%; ">
                <thead>
                    <tr>
                        <th style="text-align: center"> المخازن</th>
                        {{-- <th style="text-align: center">رأي اللجنة الفنية</th> --}}
                        <th style="text-align: center">تاريخ سابق الصرف</th>
                        <th style="text-align: center"> الاصلاحات المطلوبة</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="padding:0px;height:350px;max-height: 350px; min-height:350px">
                        <td style="width: 200px"></td>
                        {{-- <td style="width: 200px"></td> --}}
                        <td style="width: 400px; text-align:right;" class="top-right">
                            @foreach ($historys as $h)
                                <div>{{ $h->details }} ({{ date('Y-m', strtotime($h->date)) }})</div>
                            @endforeach
                        </td>
                        <td style="width: 400px; text-align:right;" class="top-right">
                            {{ $errors_text }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="invoice-details" style="padding-right: 35px;margin-top:20px">
                <div style="text-align: center; margin-top:30px">
                    <p>..................................../ <strong>عميد</strong></p>
                    <p><strong>(رئيس قسم المركبات)</strong></p>
                </div>
                <div style="text-align: center">
                    <p>..................................../ <strong>نقيب</strong></p>
                    <p><strong>(ضابط مهندس فني)</strong></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Use window.onload to ensure the script runs after the page has loaded
        window.onload = function() {
            // Open the print dialog when the page loads
            window.print();
        };
    </script>
</body>

</html>
