<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('producto.editar',$product->id)}}">
        <h1>Actualizar datos</h1>
        <label for="name">name</label>
        <input type="text" placeholder="{{$product->name}}">

        <label for="price">precio</label>
        <input type="text" placeholder="{{$product->price}}">

        <label for="category">categoria</label>
        <input type="text" placeholder="{{$product->category}}">

        <label for="quantity">cantidad</label>
        <input type="text" placeholder="{{$product->quantity}}">

        <button type="submit">Actualizar</button>
        <a href="{{route('product.index')}}">Volver</a>
        
    </form>
    
</body>
</html>