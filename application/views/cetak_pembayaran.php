<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Daftar Produk');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html='<h3>Daftar Pembayaran</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="10%" align="center">No Kwh</th>
                            <th width="25%" align="center">Nama Pelanggan</th>
                            <th width="25%" align="center">Alamat</th>
                            <th width="25%" align="center">Tanggal Pembayaran</th>
                        </tr>';
            foreach ($cetak_pembayaran as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td>'.$row->nama_pelanggan.'</td>
                            <td>'.$row->nomor_kwh.'</td>
                            <td>'.$row->alamat.'</td>
                            <td>'.$row->tanggal_pembayaran.'</td>
                            <td align="right">'.number_format($row->total_bayar,0,",",",").'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('daftar_produk.pdf', 'I');
?>