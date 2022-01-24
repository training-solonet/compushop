<script type="text/javascript">

    $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });



            $(document).ready(function() {
                $('#table_cart').DataTable({
                    ordering:false,
                    processing:true,
                    serverSide:true,
                    ajax:{
                        url: "{{ route('keranjang.index') }}",
                type: "GET",
            },
            columns: [
                {
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                },
                {data:"foto_barang", name:"foto_barang"},
                {data:"barang", name:"barang"},
                {data:"action", name:"action", orderable: false, searchable: false}
            ],
             columnDefs:
                [{
                    "targets": 1,
                    data: 'foto',
                    "render": function (data, type, row, meta) {
                        // return '<img src="' + data + '" alt="' + data + '"height="16" width="16"/>';
                        return "<img src=\"/pict/" + data + "\" height=\"50\"/>";
                    }
                }],
            order: [[0, 'asc']]
                    }
                });
            });
        </script>
