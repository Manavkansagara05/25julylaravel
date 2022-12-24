<html>

<head>
    <title>productdata</title>
</head>

<body>

    <div class="card-body">

<table class=" table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quntity</th>
 


        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{ $title }}</td>
            <td>{{ $description }}</td>
            <td>{{ $price }}</td>
            <td>{{ $quantity }}</td>
        </tr>

    </tbody>
</table>
</div>

</body>

</html>