<table class="table table-bordered">
    <thead>
        <tr>
            <th>Sl.No</th>
            <th>Collection Date</th>
            <th>Principal</th>
            <th>Interest</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>

        @foreach($collections as $key=>$collection)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$collection->collection_date}}</td>
            <td>{{$collection->principal}}</td>
            <td>{{$collection->interest}}</td>
            <td>{{$collection->total}}</td>

        </tr>
        @endforeach
    </tbody>
</table>