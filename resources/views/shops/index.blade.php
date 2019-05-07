<div class="links">
@auth
    @extends('layout')
    <style>
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            background-color: -moz-mac-accentdarkshadow;
        }

        .flex-container > div {
            background-color: #f1f1f1;
            width: 100px;
            margin: 10px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
        }
    </style>

    @section('title','Browse Shops')

    @section('content')

        <p>

        </p>
        <div class="flex-container">

            <div style="width: 100%">
                <h2>Shop in Huddersfield</h2>
                <a href="{{ url('/shops/Huddersfield') }}" class="btn btn-block btn-info">View in Map</a>
            </div>
            <p></p>
            <div style="width: 100%">
                <h2>Shop in London</h2>
                <a href="{{ url('/shops/London') }}" class="btn btn-block btn-info">View in Map</a>
            </div>
            <p></p>
            <div style="width: 100%">
                <h2>Shop in Shenzhen</h2>
                <a href="{{ url('/shops/Shenzhen') }}" class="btn btn-block btn-info">View in Map</a>
            </div>


        </div>




    @endsection

@endauth
</div>
