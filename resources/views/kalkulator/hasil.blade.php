<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nur'Azizah</title>
    <style>
body {
    font-family : Courier, sans-serif;
    background-color : #DAA520;
    margin : 100px;
    padding-top : 50px;
    display : flex;
    justify-content : center;
    height : 100hv;
    align-items: center;
   
   
}

.calculator {
    background-color : #BDB76B;
    width : 500px;
    height : 430px;
    font-weight: bold;
    padding : 50px;
    border-radius : 50px;
    box-shadow : 5px 5px 10px; 
    text-align: left;
    font-size: 13px;
    
}

input[type="number"] {
    padding: 10px;
    margin-bottom: 10px;
    width: 400px;
    box-shadow: 5px 5px 10px; rgba(0, 0, 0, 0,1);
    border: 10px 
    lid #ccc;
    border-radius: 50px;
    outline: none;
}

input[type="submit"] {
    padding: 10px 20px;
    margin: 10px;
    border: 10;
    border-radius: 10px;
    background-color: #FFFFFF;
    color: dark;
    font-size: 20px;
    box-shadow: 5px 5px 10px;
    cursor: pointer;
    transition: background-color 0,3s;
   
}

input[type="reset"] {
    padding: 10px 20px;
    margin: 10px;
    border: 10;
    border-radius: 10px;
    background-color: #FFFFFF;
    color: dark;
    font-size: 20px;
    box-shadow: 5px 5px 10px;
    cursor: pointer;
    font-family : Courier, sans-serif;
   
}

</style>
</head>
<body>
    <div class="calculator">
        <h1><center>UKK 2024</center></h1>
        <h2><center>KALKULATOR SEDERHANA</center></h2>
        <form action="{{Route ('proses.store')}}" method="post">
            @csrf 
            <center>
                <label for="a">Masukan Angka Pertama</label><br>
                <input type="number" name="a" id=""><br><br>
                <label for="b"> Masukan Angka kedua</label><br>
                <input type="number" name="b" id=""><br><br>
                <input type="submit" value="+" name="op">
                <input type="submit" value="_" name="op">
                <input type="submit" value="x" name="op">
                <input type="submit" value=":" name="op">
                <input type="reset" value="clear"name="op">
            </center>

            <h1><center>Hasil : {{ $hasil }} </center> </h1>
            <br>
        <center>
        <tr>
            <td colspan=>
            NAMA : NUR'AZIZAH <br>
            KELAS: XII RPL 2
            </td>
        </tr>
        </center>

        </form>
    </div>
</body>
</html>