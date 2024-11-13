<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
        }

        /* Container */
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9ecef;
        }

        /* Success Message */
        .success-message {
            padding: 10px;
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            color: white;
            background-color: #28a745;
            border-radius: 4px;
            transition: background-color 0.2s ease;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #218838;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }

        /* Link Styles */
        .create-link {
            display: inline-block;
            margin-bottom: 15px;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }
        .create-link:hover {
            text-decoration: underline;
        }

        /* Form */
        form {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Management</h1>
        
        <!-- Success Message -->
        <div>
            @if(session()->has('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <!-- Create Link -->
        <div>
            <a href="{{ route('product.create') }}" class="create-link">Create Product</a>
        </div>

        <!-- Product Table -->
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>RM {{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product'=> $product]) }}" class="btn">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('product.delete', ['product' => $product]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
