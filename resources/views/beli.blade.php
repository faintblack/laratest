<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Beli Produk</h4>
            </div>
            <div class="panel-body">
                <form action="{{ url('beli_product') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Pilih Produk</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2" name="list_product[]">
                            @foreach($data as $key => $value)
                            <option value="{{ $value->id_product }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Pesan</button>
                </form>
                <br>
                <h4>Riwayat Transaksi</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id Transaksi</th>
                            <th>Waktu</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data2 as $key => $value)
                        <tr>
                            <td>{{ $value->id_transaction }}</td>
                            <td>{{ $value->waktu }}</td>
                            <td>
                                <a href="{{ url('detail_beli', array($value->id_transaction) ) }}">Read</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id Product</th>
                            <th>Product Name</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $value)
                        <tr>
                            <td>{{ $value->id_product }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->stock }}</td>
                            <td>
                                <a href="{{ url('read', array($value->id_product) ) }}">Read</a>
                                <a href="{{ url('edit', array($value->id_product) ) }}">Edit</a>
                                <a href="{{ url('delete', array($value->id_product) ) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</body>

</html>