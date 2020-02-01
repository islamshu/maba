<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">SubTitle</th>
            <th scope="col">Price</th>
            <th scope="col" style="width: 350px;">Description</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)


        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->title}}</td>
            <td>{{$product->subtitle}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
