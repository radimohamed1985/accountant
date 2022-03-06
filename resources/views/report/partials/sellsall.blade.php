<div class="row">
    <div class="col-lg-4">
        <table class="table table-dark table-hover table-responsive  bg-gray">
            <thead>
            <tr class="bg-green" style="text-align: center">
                <td colspan="2"> المبيعات </td>
            </tr>
            <tr class="bg-green">
                <th>البيان</th>
                <th>القيمة</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>إجمالي مبيعات الأصناف(+)</td>
                <td>{{$sell_details->total_before_tax}}</td>
            </tr>
            <tr>
                <td>إجمالي خصومات الفواتير(-)</td>
                <td>{{$sell_details->discount_amount}}</td>
            </tr>

            <tr>
                <td>إجمالي ضريبة الفواتير(+)</td>
                <td>{{$sell_details->tax_amount}}</td>
            </tr>

            <tr>
                <td>إجمالي تكلفة الشحن(+)</td>
                <td>{{$sell_details->shipping_charges}}</td>
            </tr>

            <tr>
                <td>إجمالي تكلفة التوصيل(+)</td>
                <td>{{$sell_details->packing_charge}}</td>
            </tr>

            <tr>
                <td>إجمالي التقريب(-)</td>
                <td>{{$sell_details->round_off_amount}}</td>
            </tr>
            <tr class="bg-green">
                <th>الإجمالي المبيعات</th>
                <th>{{$totall_sell }}</th>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="col-lg-4">
        <table class="table table-dark table-hover table-responsive  bg-gray">
            <thead>
            <tr class="bg-green" style="text-align: center">
                <td colspan="2"> المرتجعات  </td>
            </tr>
            <tr class="bg-green">
                <th>البيان</th>
                <th>القيمة</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>إجمالي مرتجعات الأصناف(+)</td>
                <td>{{$sell_return->total_before_tax}}</td>
            </tr>
            <tr>
                <td>إجمالي خصومات المرتجعات(-)</td>
                <td>{{$sell_return->discount_amount}}</td>
            </tr>

            <tr>
                <td>إجمالي ضريبة المرتجعات(+)</td>
                <td>{{$sell_return->tax_amount}}</td>
            </tr>

            <tr>
                <td>إجمالي تكلفة الشحن(+)</td>
                <td>{{$sell_return->shipping_charges}}</td>
            </tr>

            <tr>
                <td>إجمالي تكلفة التوصيل(+)</td>
                <td>{{$sell_return->packing_charge}}</td>
            </tr>

            <tr>
                <td>إجمالي التقريب(-)</td>
                <td>{{$sell_return->round_off_amount}}</td>
            </tr>
            <tr class="bg-green">
                <th>الإجمالي المرتجعات</th>
                <th>{{$totall_return }}</th>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="clearfix"></div>
    <div class="col-lg-8">
        <table class="table table-dark table-hover table-responsive  bg-gray">
            <thead>
            <tr class="bg-green">
                <th>إجمالي الدخل </th>
                <th>{{$totall_sell - $totall_return}}</th>
            </tr>
            </thead>
        </table>
    </div>
</div>