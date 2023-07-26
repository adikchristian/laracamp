<html>

<head>
    <title>Report Checkout Laracamp</title>
    <style>
        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <h3 style="text-align: center; margin:0px; padding:0px;">Report Checkout</h3>
    <h4 style="text-align: center; margin:10px 0; padding:0px;">{{ $startDate }} SD {{ $endDate }}</h4>
    <h4 style="text-align: center; margin:0 0 10px 0; padding:0px;">
        @if ($status=="")
            Semua Status Pembayaran
        @else
            Status {{ $status }}
        @endif
    </h4>
    <table class="table table-striped" align="left" width="100%" border="1px" style="border-collapse: collapse;">
        <thead align="left">
            <th>User</th>
            <th>Camp</th>
            <th>Price</th>
            <th>Register Data</th>
            <th>Paid Status</th>
        </thead>
        <tbody>
            @forelse ($checkouts as $checkout)
                <tr>
                    <td>{{ $checkout->User->name }}</td>
                    <td>{{ $checkout->Camp->title }}</td>
                    <td>Rp. {{ number_format($checkout->Camp->price * 1000) }}</td>
                    <td>{{ $checkout->created_at->format('d M Y') }}</td>
                    <td>{{ $checkout->payment_status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" align="center"><b>Data Kosong</b></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
