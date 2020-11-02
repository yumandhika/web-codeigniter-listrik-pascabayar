<?php
    $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetTitle('Struk');
    $pdf->SetHeaderMargin(30);
    $pdf->SetTopMargin(20);
    $pdf->setFooterMargin(20);
    $pdf->SetAutoPageBreak(true);
    $pdf->SetAuthor('Author');
    $pdf->SetDisplayMode('real', 'default');
    $pdf->AddPage();
    $i=0;
    $html='<h3>Struk</h3>
            <table bgcolor="#ffffff" border="0px">
                <tr bgcolor="#ffffff">
                    <td colspan="4" align="center">Struk Pembayaran Tagihan Listrik</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr bgcolor="#ffffff">
                    <td bgcolor="#ffffff">Nomor kwh</td>
                    <td bgcolor="#ffffff">:'.$struk['nomor_kwh'].'</td>
                    <td bgcolor="#ffffff">BL/TH</td>
                    <td bgcolor="#ffffff">:'.date('M',strtotime($struk['tanggal'])).date('Y',strtotime($struk['tanggal'])).'</td>
                </tr>
                <tr bgcolor="#ffffff">
                    <td bgcolor="#ffffff">Nama</td>
                    <td bgcolor="#ffffff">:'.$struk['nama_pelanggan'].'</td>
                    <td bgcolor="#ffffff">Stand Meter</td>
                    <td bgcolor="#ffffff">:'.$struk['meter_awal'].'-'.$struk['meter_akhir'].'</td>
                </tr>
                <tr bgcolor="#ffffff">
                    <td bgcolor="#ffffff">Tarif/Daya</td>
                    <td bgcolor="#ffffff">:'.$struk['tarifperkwh'].'/'.$struk['daya'].' v</td>
                </tr>
                <tr>
                    <td colspan="4" align="center"></td>
                </tr>
                <tr>
                    <td colspan="4" align="center">Menyatakan Bahwa struk ini bukti pembayaran sahs</td>
                </tr>
                <tr>
                    <td colspan="4" align="center"></td>
                </tr>
                <tr bgcolor="#ffffff">
                    <td bgcolor="#ffffff">Biaya Admin</td>
                    <td bgcolor="#ffffff">: Rp.'.number_format($struk['biaya_admin'],0,',',',').'</td>
                </tr>
                <tr bgcolor="#ffffff">
                    <td bgcolor="#ffffff">Total Bayar</td>
                    <td bgcolor="#ffffff">: Rp.'.number_format($struk['total_bayar'],0,',',',').'</td>
                </tr>
                <tr>
                    <td colspan="4" align="center"></td>
                </tr>
                <tr>
                    <td colspan="4" align="center">Terimakasih</td>
                </tr>';
    $html.='</table>';
    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->Output('daftar_produk.pdf', 'I');
?>