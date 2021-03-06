<?php if (!$url) : ?>
<div class="callout callout-info">
    <h4>Peraturan Tryout!</h4>
    <p>Kerjakan Sebelum Waktu Habis</p>
</div>

<?php endif ; ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Konfirmasi Data</h3>
    </div>
    <div class="box-body">
        <span id="id_ujian" data-key="<?=$encrypted_id?>"></span>
        <div class="row">
            <div class="col-sm-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td><?=$mhs->nama?></td>
                    </tr>
                    <!-- <tr>
                        <th>Pembimbing</th>
                        <td><?=$ujian->nama_dosen?></td>
                    </tr>
                    <tr>
                        <th>Kelas/Paket</th>
                        <td><?=$mhs->nama_kelas?> / <?=$mhs->nama_jurusan?></td>
                    </tr> -->
                    <tr>
                        <th>Nama Tryout</th>
                        <td><?=$ujian->nama_ujian?></td>
                    </tr>
                    <tr>
                        <th>Jumlah Soal</th>
                        <td><?=$ujian->jumlah_soal?></td>
                    </tr>
                    <tr>
                        <th>Waktu</th>
                        <td><?=$ujian->waktu?> Menit</td>
                    </tr>
                    <!-- <tr>
                        <th>Terlambat</th>
                        <td>
                            <?=strftime('%d %B %Y', strtotime($ujian->terlambat))?> 
                            <?=date('H:i:s', strtotime($ujian->terlambat))?>
                        </td>
                    </tr> -->
                    <tr>
                        <th style="vertical-align:middle">Token</th>
                        <td>
                            <input autocomplete="off" id="token" placeholder="Token" type="text" disabled value="<?=$ujian->token?>" class="input-sm form-control">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <div class="box box-solid">
                    <?php if (!$url) : ?>
                        <!-- dengan timer <div class="box-body pb-0">
                            <div class="callout callout-info">
                                <p>
                                    Waktu boleh mengerjakan Tryout adalah saat tombol "MULAI" berwarna hijau.
                                </p>
                            </div>
                            <?php
                            $mulai = strtotime($ujian->tgl_mulai);
                            $terlambat = strtotime($ujian->terlambat);
                            $now = time();
                            if($mulai > $now) : 
                            ?>
                            <div class="callout callout-success">
                                <strong><i class="fa fa-clock-o"></i> Tryout akan dimulai pada</strong>
                                <br>
                                <span class="countdown" data-time="<?=date('Y-m-d H:i:s', strtotime($ujian->tgl_mulai))?>">00 Hari, 00 Jam, 00 Menit, 00 Detik</strong><br/>
                            </div>
                            <?php elseif( $terlambat > $now ) : ?>
                            <button id="btncek" data-id="<?=$ujian->id_ujian?>" class="btn btn-success btn-lg mb-4">
                                <i class="fa fa-pencil"></i> Mulai
                            </button>
                            <div class="callout callout-danger">
                                <i class="fa fa-clock-o"></i> <strong class="countdown" data-time="<?=date('Y-m-d H:i:s', strtotime($ujian->terlambat))?>">00 Hari, 00 Jam, 00 Menit, 00 Detik</strong><br/>
                                Batas waktu menekan tombol mulai.
                            </div>
                            <?php else : ?>
                            <div class="callout callout-danger">
                                Waktu untuk menekan tombol <strong>"MULAI"</strong> sudah habis.<br/>
                                Silahkan hubungi pembimbing anda untuk bisa mengikuti tryout pengganti.
                            </div>
                            <?php endif;?>
                        </div> aktifkan juga yang di jsnya -->

                       <!--  tanpa timer -->
                       <center>
                           <button id="btncek" data-id="<?=$ujian->id_ujian?>" class="btn btn-success btn-lg mb-4">
                               <i class="fa fa-pencil"></i> Mulai Tryout
                           </button>

                           <b><P class="text-danger">Setelah Klik Mulai Tryout Waktu Mengerjakan 90 Menit</P>
                           <P class="text-danger">Akan Tertutup Otomatis Jika Waktu Habis</P></b>
                       </center>
                        

                    <?php else : ?>
                        <center>
                             <button id="btncek" data-id="<?=$ujian->id_ujian?>" class="btn btn-info btn-lg mb-4">
                                <i class="fa fa-pencil"></i> Mulai Peninjauan
                            </button>
                        </center>
                    <?php endif ; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url()?>assets/dist/js/app/ujian/token.js"></script>