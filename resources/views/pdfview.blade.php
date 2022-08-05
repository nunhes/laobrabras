<style type="text/css">
    table td, table th{
        border:1px solid black;
    }
</style>
<div class="container">


    <br/>
    <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>


    <table>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach ($cidadans as $key => $cidadan)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $cidadan->nome }}</td>
                <td>{{ $cidadan->apel1 }}
                <td>{{ $cidadan->apel2 }}</td>
            </tr>
        @endforeach
    </table>
</div>