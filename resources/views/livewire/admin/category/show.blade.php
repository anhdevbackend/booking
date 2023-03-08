<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Danh sách loại hàng</h4>
                <p class="card-title-desc">Danh sách loại hàng
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên loại</th>
                        <th>Trạng thái</th>
                        <th>Hàng động</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        @foreach ($category as $categories )
                        <td>{{ ++$i }}</td>
                        <td>{{ $categories->name }}</td>
                        @if ($categories->status=='1')
                        <td>Còn</td>
                        @else
                            <td>Hết</td>
                        @endif
                        <td></td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>