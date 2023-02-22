<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RAB PDF</title>
<style type="text/css">
body
{
    line-height: 1.6em;
    
}


#tables-pdf
{
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 14px;
    margin: 45px auto;
    width: 700px;
    text-align: left;
    border-collapse: collapse;
}
#tables-pdf thead th.rounded-company
{
    background: #b9c9fe url('table-images/left.png') left -1px no-repeat;
}
#tables-pdf thead th.rounded-q4
{
    background: #b9c9fe url('table-images/right.png') right -1px no-repeat;
}
#tables-pdf th
{
    padding: 8px;
    font-weight: normal;
    font-size: 16px;
    color: #039;
    background: #b9c9fe;
    border-right: 1px solid #fff;
    border-left: 1px solid #fff;
    text-align: center;
}
#tables-pdf td
{
    padding: 8px;
    background: #e8edff;
    border-top: 1px solid #fff;
    color: #669;
    border-right: 1px solid #fff;
    border-left: 1px solid #fff;
}
#tables-pdf tfoot td.rounded-foot-left
{
    background: #e8edff url('table-images/botleft.png') left bottom no-repeat;
}
#tables-pdf tfoot td.rounded-foot-right
{
    background: #e8edff url('table-images/botright.png') right bottom no-repeat;
}
#tables-pdf tbody tr:hover td
{
    background: #d0dafd;
}
#tables-pdf .nomer{
    text-align: center;
}
</style>
</head>

<body>

<h3 class="mt-4 fw-bold" style="text-align: center;">Rancangan Anggaran Biaya Kegiatan</h3>

<table id="tables-pdf">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company">No</th>
            <th scope="col" class="rounded-q1">Kebutuhan</th>
            <th scope="col" class="rounded-q2">Kuantitas</th>
            <th scope="col" class="rounded-q3">Harga Satuan</th>
            <th scope="col" class="rounded-q4">Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1
        @endphp
        <?php $total_anggaran = 0 ?>
        @foreach($kebutuhan as $id => $kebutuhan)
        <?php $total_anggaran += $kebutuhan['harga_satuan'] * $kebutuhan['kuantitas']?>
    	<tr>
        	<td class="nomer">{{ $no++ }}</td>
            <td>{{ $kebutuhan['urn_kebutuhan'] }}</td>
            <td>{{ $kebutuhan['kuantitas'] }}</td>
            <td>{{ $kebutuhan['harga_satuan'] }}</td>
            <td>Rp. {{ $kebutuhan['harga_satuan'] * $kebutuhan['kuantitas'] }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
    	<tr>
        	<td colspan="4" class="rounded-foot-left" style="text-align: center;"><strong>Total Pengeluaran</strong></td>
        	<td class="rounded-foot-right"><strong>Rp. {{ $total_anggaran }}</strong></td>
        </tr>
    </tfoot>
</table>

</body>
</html>