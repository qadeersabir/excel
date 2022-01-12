<body>
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Arial"; font-size:small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  }
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  }
		comment { display:none;  }
	</style>
<table cellspacing="0" border="0">
	<colgroup width="99"></colgroup>
	<colgroup width="74"></colgroup>
	<colgroup width="118"></colgroup>
	<colgroup width="74" span="4"></colgroup>
	<colgroup width="184"></colgroup>
	<colgroup width="75"></colgroup>
	<colgroup width="74"></colgroup>
	<tbody>
        <tr>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan="4" rowspan="5" valign="top"  align="left"><b><font face="Calibri" color="#000000">Denominazione: {{ $company }}<br>Sede Legale: {{ $office }}<br>P.IVA: {{ $vat }}</font></b></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font face="Calibri" color="#000000">Foglio riferito a</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><b><font face="Calibri" color="#000000">Anno:</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000">{{ $year }}</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><b><font face="Calibri" color="#000000">Mese:</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000">{{ $month }}</font></td>
	</tr>
	<tr>
		<td valign="bottom" height="21" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td rowspan="2" valign="bottom" height="42" align="right"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" valign="bottom" align="left"><b><font face="Calibri" color="#000000">Data</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" valign="bottom" align="left"><b><font face="Calibri" color="#000000">Totale corrispettivi giornaliero </font></b></td>
    @foreach($country as $key => $cu)
        {{-- <th colspan="{{ count((array)$cu) }}"> {{ $key }}</th> --}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; width: 22 !important;white-space: nowrap;" colspan="{{ count((array)$cu) }}" valign="bottom" align="center"><b><font face="Calibri" color="#000000">CORRISPETTIVI {{ $key }}</font></b></td>

    @endforeach
		{{-- <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; width: 25 !important;white-space: nowrap;" colspan="0" valign="bottom" align="center"><b><font face="Calibri" color="#000000">CORRISPETTIVI PAKISTAN</font></b></td> --}}
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="2" valign="bottom" align="center"><b><font face="Calibri" color="#000000">Altri corrispettivi esenti</font></b></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
        @foreach($country as $key => $cu)
        @foreach ($cu as $vat => $vl)
            {{-- <th>{{ $vat }}</th> --}}
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;" sdval="0.04" sdnum="1033;0;0%" valign="bottom" align="right"><b><font face="Calibri" color="#000000">{{ $vat }}</font></b></td>

        @endforeach
    @endforeach
		{{-- <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0.04" sdnum="1033;0;0%" valign="bottom" align="right"><b><font face="Calibri" color="#000000">4%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0.1" sdnum="1033;0;0%" valign="bottom" align="right"><b><font face="Calibri" color="#000000">10%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0.22" sdnum="1033;0;0%" valign="bottom" align="right"><b><font face="Calibri" color="#000000">22%</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0.22" sdnum="1033;0;0%" valign="bottom" align="right"><b><font face="Calibri" color="#000000">100%</font></b></td> --}}
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="right"><b><font face="Calibri" color="#000000">Importo</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="right"><b><font face="Calibri" color="#000000">Titolo e Norma</font></b></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	{{-- <tr>
		<td valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">R</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="right"><font face="Calibri" color="#000000">Riporto</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		{{-- <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td> --}}

        <td valign="bottom" align="left"><font face="Calibri" color="#000000">R</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr> --}}
    @foreach($dates as $key => $value)

	<tr>
		<td sdval="{{ $loop->index }}" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">{{ $loop->index }}</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44531" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">1-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
        {{-- @foreach($country as $key => $cu)
        @foreach ($cu as $vat => $vl)
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
        @endforeach
        @endforeach --}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="1" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">1</font></td>
		<td sdval="1" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">1</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
    @endforeach
	<tr>
		<td sdval="2" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">2</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44532" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">2-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="2" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">2</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="3" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">3</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44533" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">3-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="3" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">3</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="4" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">4</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44534" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">4-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="4" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">4</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="5" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">5</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44535" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">5-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="5" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">5</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="6" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">6</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44536" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">6-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="6" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">6</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="7" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">7</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44537" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">7-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="7" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">7</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="8" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">8</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44538" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">8-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="8" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">8</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="9" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">9</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44539" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">9-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="9" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">9</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="10" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">10</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44540" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">10-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="10" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">10</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="11" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">11</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44541" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">11-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="11" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">11</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="12" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">12</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44542" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">12-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="12" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">12</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="13" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">13</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44543" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">13-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="13" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">13</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="14" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">14</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44544" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">14-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="14" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">14</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="15" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">15</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44545" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">15-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="15" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">15</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="16" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">16</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44546" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">16-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="16" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">16</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="17" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">17</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44547" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">17-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="17" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">17</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="18" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">18</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44548" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">18-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="18" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">18</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="19" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">19</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44549" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">19-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="19" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">19</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="20" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">20</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44550" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">20-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="20" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">20</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="21" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">21</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44551" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">21-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="21" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">21</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="22" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">22</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44552" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">22-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="22" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">22</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="23" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">23</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44553" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">23-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="23" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">23</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="24" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">24</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44554" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">24-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="24" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">24</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="25" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">25</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44555" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">25-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="25" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">25</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="26" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">26</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44556" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">26-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="26" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">26</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="27" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">27</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44557" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">27-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="27" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">27</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="28" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">28</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44558" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">28-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="28" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">28</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="29" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">29</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44559" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">29-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="29" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">29</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td sdval="30" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">30</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44560" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">30-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td sdval="30" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">30</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-bottom: 2px double #000000" sdval="31" sdnum="1033;" valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">31</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="44561" sdnum="1033;0;D-MMM" valign="bottom" align="right"><font face="Calibri" color="#000000">31-Dec</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px double #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-bottom: 2px double #000000" sdval="31" sdnum="1033;" valign="bottom" align="left"><font face="Calibri" color="#000000">31</font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">Totale del Mese</font></b></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0" sdnum="1033;" valign="bottom" align="right"><font face="Calibri" color="#000000">0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0" sdnum="1033;" valign="bottom" align="right"><font face="Calibri" color="#000000">0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0" sdnum="1033;" valign="bottom" align="right"><font face="Calibri" color="#000000">0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0" sdnum="1033;" valign="bottom" align="right"><font face="Calibri" color="#000000">0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0" sdnum="1033;" valign="bottom" align="right"><font face="Calibri" color="#000000">0</font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="21" align="right"><b><font face="Calibri" color="#000000">AR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="right"><font face="Calibri" color="#000000">Riportare</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0" sdnum="1033;" valign="bottom" align="right"><font face="Calibri" color="#000000">0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0" sdnum="1033;" valign="bottom" align="right"><font face="Calibri" color="#000000">0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0" sdnum="1033;" valign="bottom" align="right"><font face="Calibri" color="#000000">0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0" sdnum="1033;" valign="bottom" align="right"><font face="Calibri" color="#000000">0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="0" sdnum="1033;" valign="bottom" align="right"><font face="Calibri" color="#000000">0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="bottom" align="left"><font face="Calibri" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font color="#000000"><br></font></td>
	</tr>
</tbody></table>
<!-- ************************************************************************** -->



</body>
