<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    th{
        border: 2px solid black;

    }
    td{
        border: 2px solid black;
    }
</style>
<body>
    <h1> hello laravel, i am demo</h1>
    <table>
        <tr>
            <th>name</th>
            <th>id</th>
            <th>date</th>
            <th>time</th>
            <th>name using !</th>
        </tr>
        <tr>
            <td>{{$name}}</td>
            <td>{{$id ?? "user"}}</td>
            <td>{{date('d-m-y')}} </td>
            <td>{{time()}}</td>
            <td>{!! $name!!}</td>
        </tr>
    </table>
    {{-- <p> @if($id)  {{"admin exist"}}
        @elseif(!$id) {{"admnin doesn't exist"}}
        @endif
    </p> --}}
    {{-- <h2>
        @isset($id)   WELCOME, {!!$name!!}
        @endisset
    </h2> --}}
    <p>
        @php    $i=0    @endphp
        @while($i<10)  {!!$i!!}
        @php    $i++   @endphp
        @endwhile
    </p>
    <p>
        {{-- @php    $arr=["ram","shyam","char","dham"]    @endphp --}}
        @php    $arr=["ram","shyam","char","dham"];

            print_r($arr);
        @endphp


        <select >
            @foreach ($arr as $key=>$item)
                <option value={{$key}}>
                    {{ $item }}

                </option>
            @endforeach

        </select>
    </p>
</body>
</html>


