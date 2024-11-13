<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <style>
        /* General Styling */
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
            margin-top: 20px;
        }

        /* Container for the form */
        .container {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Error Messages */
        .error-messages {
            color: #dc3545;
            margin-bottom: 15px;
            list-style-type: none;
            padding: 0;
        }
        
        /* Form Styling */
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Submit Button */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create a Product</h1>

        <!-- Error Messages -->
        <div>
            @if($errors->any())
                <ul class="error-messages">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Form -->
        <form method="post" action="{{ route('product.store') }}">
            @csrf

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name">
            </div> 

            <div>
                <label for="qty">Quantity</label>       
                <input type="text" name="qty" placeholder="Qty">
            </div> 

            <div>
                <label for="price">Price</label>
                <input type="text" name="price" placeholder="Price">
            </div> 

            <div>
                <label for="description">Description</label>
                <input type="text" name="description" placeholder="Description">
            </div> 

            <div>
                <input type="submit" value="Save a New Product">
            </div>
        </form>
    </div>
</body>
</html>