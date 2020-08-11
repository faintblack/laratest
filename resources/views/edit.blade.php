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
                <h4>Product</h4>
            </div>
            <div class="panel-body">
                <form action="{{ url('update', $data->id_product) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="id_product">Id Product</label>
                        <input type="text" class="form-control" name="id_product" id="id_product" value="{{ $data->id_product }}">
                    </div>
                    <div class="form-group">
                        <label for="id_product">Product Name</label>
                        <input type="text" class="form-control" name="name_product" id="product_name" value="{{ $data->name }}">
                    </div>
                    <div class="form-group">
                        <label for="id_product">Product Stock</label>
                        <input type="number" class="form-control" name="product_stok" id="product_stock" value="{{ $data->stock }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" value="Save" class="btn btn-success">
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>