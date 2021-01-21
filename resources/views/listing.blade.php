<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/listing.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>
    <div class="title text-center title">
        <p> List Submission </p>
    </div>
    <div class="flex justify-center w-full mt-8"> 
        <table class="border border-black w-96">
            <thead class="border-b border-gray-600"> <tr> <th>Item #</th> <th>Description</th> </tr></thead>
            <tbody>
            @foreach($items as $item)
                <tr class="w-full  py-2 border-gray-300 border-b px-8"> 
                    <td class="text-center"> {{ $item["item_number"] }} </td>
                    <td>{{ $item["description"] }}</td>
                </tr>
            @endforeach
            <tr class="border-t-2 border-gray-600">
               <td class="text-center"><b> # of items </b></td>
               <td class="text-center"><b> {{ count($items)  }}</b></td>
            </tr>   

        </tbody>
    </table>
    </div>    

</body>
</html>