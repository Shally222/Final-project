
<div class="links">

        @extends ('layouts.app')

        @section('title','Browse products')

    @section('content')

            <h1 class="title">Product</h1>

            <ul>
                @foreach($product as $key => $value)
                    <tr>
                        <td>{!! $value->name !!}</td>
                        <td>{!! $value->price !!}</td>
                        <td>{!! $value->introduction !!}</td>
                        <img src="{{url('storage/photos/'.$value->filename) }}" alt="{{$value->name}}" width="400" height="400">
                    </tr>
                @endforeach
            </ul>

    @endsection


</div>
