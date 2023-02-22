<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('katalogs')->insert([
    		[
    			'kategori_id'     => 1,
    			'nama_katalog'    => 'Proyektor',
    			'harga'           => 1360000,
    			'description'     => 'Jenis teknologi sumber cahaya: Sumber cahaya LED, Lensa: LCD 4,3 inci, Model produk: C9,
    			Bahan produk: ABS + komponen elektronik + bahan optik, Berat kotor produk: 1,817kg, Ukuran produk: 222 * 165 * 87mm, Mode catu daya: Catu daya inline / 70W, Teknologi pencitraan: layar LCD + lampu LED, Metode proyeksi; proyeksi depan proyeksi belakang, Dukungan bahasa: Cina, Inggris, Prancis, Jerman, Italia, Rusia, Spanyol, Jepang, Korea, Vietnam, dll. 23 bahasa, Resolusi fisik: 1280 * 720 720P, Putar video mendukung resolusi maksimum: 1080P, Warna: Merah dan Biru 3D (pakai kacamata 3D merah dan biru), Kontras: 2000: 1, Rasio proyeksi: 456CM / 150 ”, Ukuran Proyeksi Optimal / Inci: 65 "-150", Rasio gambar: 16: 9 4: 3, Port input: HD1 / HD2 / USB1 / USN2 / VGA / AV / ATV, Format video: MPEG1, MPEG2, H.263, H.264, AVS, VC1, MJPEG, RV30, RV40, HEVC, Format audio: MPEG1, MPEG2, LPCM, MP3, Format gambar: JEPG, PNG, BMP, MPO, Daftar kemasan: 1 * Proyektor, 1 * kabel AV, 1 * Kabel listrik, 1 * Remote control, 1 * Knob1 * manual bahasa Inggris',
    			'link_referensi'   => "https://shopee.co.id/Ekleva-Proyektor-HD-infokus-Portable-C9-dengan-6000-Lumens-Upgrade-Layar-1080P-200''-Smartphone-i.367752116.8615277734?sp_atk=7fb61b25-d1db-41df-b810-6852b2887f7a&xptdk=7fb61b25-d1db-41df-b810-6852b2887f7a",
    			'foto'            => 'proyektor.png'
    		],
    		[
    			'kategori_id'     => 1,
    			'nama_katalog'    => 'Pointer',
    			'harga'           => 60000,
    			'description'     => 'Spesifikasi : - tombol laser on dan off - tombol page up untuk kontrol slide up - tombol page down untuk kontrol slide down - switch on/off untuk ganti baterai - plug n play - tanpa perlu driver tambahan - jarak guna 7-15 meter - transmitter USB - wireless pointer - kompatibel untuk laptop/ pc dengan OS windows XP/Vista/Seven/8 - warna hitam - bonus tas mini ekslusif dan elegan lengkap dengan slot transmitter dan pointer Spesifikasi: Laser Button : Laser on/off control Page Up Button : Slide down control Page Down Button : Slide Up control Lock/Unlock Switch : To change battey LED Indikator Bliking : Connected and waiting for ID Off : ID received and waiting for Command Off-On-Off: Every time command received',
    			'link_referensi'   => 'https://shopee.co.id/Laser-Pointer-PP-1000-Wireless-Presenter-PP-1000-i.27207180.343166666?sp_atk=70cc93e4-665d-4660-853c-1bbc1256d323&xptdk=70cc93e4-665d-4660-853c-1bbc1256d323',
    			'foto'            => 'pointer.png'
    		],
    		[
    			'kategori_id'     => 1,
    			'nama_katalog'    => 'Kipas Angin',
    			'harga'           => 598500,
    			'description'     => 'Specification: 1. Material: Aluminum alloy ABS material. 2. Battery capacity: 7200mAh. 3. Product size: closed state is 197x197x92.5mm, unfolded state is 197x197x974mm. 4. Wind mode: 1st gear, soft wind. 2 files, refreshing wind. 3 files, strong wind. 4 files, natural wind 5. Charging voltage: 5V. 6. Life time: 4-10 hours. 7. Bare weight: 830g.',
    			'link_referensi'   => 'https://shopee.co.id/MIXIO-Kipas-angin-portable-stand-Fan-portbale-stand-7200mah-Cooling-Fan-P9-i.61050481.2619671841?sp_atk=0e95a877-7056-4767-a00d-543969c318cb&xptdk=0e95a877-7056-4767-a00d-543969c318cb',
    			'foto'            => 'kipasangin.png'
    		],
    		[
    			'kategori_id'     => 2,
    			'nama_katalog'    => 'Speaker',
    			'harga'           => 95000,
    			'description'     => 'SPEAKER BLUETOOTH ADVANCE S-50 +MIC Specifikasi Model : S-50 Output : 10W(THD)+/-10% Speaker : 4"Speaker Frekuensi : 80HZ-20KHZ Impedance : 40HM Rasio Sinyal : >80dB Daya Supply : 3.7V/1200MAH Power Input : DC5V',
    			'link_referensi'   => 'https://shopee.co.id/COD-Speaker-Bluetooth-Bass-6.5-Inci-3381-Free-Microphone-Speaker-Wireless-Aktif-Salon-Bluetooth-bt-Speaker-i.212408576.12719709201?sp_atk=87b77137-438f-4c6b-888a-2b2163836af0&xptdk=87b77137-438f-4c6b-888a-2b2163836af0',
    			'foto'            => 'speaker.png'
    		],
    		[	'kategori_id'     => 2,
    		'nama_katalog'    => 'Home Theater & Karaoke',
    		'harga'           => 199000,
    		'description'     => 'Frequency Response 20kh-20khz (33db) Impedance 4-16 Ohm Sound to Noise Ratio Rasio Sinyal terhadap Kebisingan: 80db (satu daya) Channel Output 600W Dimension 18.2 x 16 x 5.5 cm Others Sensitivitas Sinyal Input Sensitivitas: 200mv (3030mv) Sensitivitas Sensitivitas Input Mikrofon: 9mv (22mv)',
    		'link_referensi'   => 'https://shopee.co.id/Power-Amplifier-Ampli-Bluetooth-Karaoke-Home-Theater-Radio-FM-600W-i.165765663.7049975599?sp_atk=a911fa08-8c37-4196-a534-be1054ad474f&xptdk=a911fa08-8c37-4196-a534-be1054ad474f',
    		'foto'            => 'HomeTheater&Karaoke.png'
    	],
    	[
    		'kategori_id'     => 2,
    		'nama_katalog'    => 'Microphone',
    		'harga'           => 14500,
    		'description'     => 'Impedance: 500 Ohm 30 1KHz Sensitivity: 63dB3dB (0dB 1V 1KHz) Frequency Response: 100Hz 13KHz Temperature: 180 Current wave: 13dB 200Hz 2KHz Cable Diameter: 5mm include Cable',
    		'link_referensi'   => 'https://shopee.co.id/Microphone-Kabel-Karaoke-Colokan-Besar-i.151239727.7362158216?sp_atk=5b6908da-5c71-4886-90ed-104dad9623f2&xptdk=5b6908da-5c71-4886-90ed-104dad9623f2',
    		'foto'            => 'Microphone.png'
    	],
    	[
    		'kategori_id'     => 3,
    		'nama_katalog'    => 'Playstation',
    		'harga'           => 16499000,
    		'description'     => 'Spesifikasi:CPU: x86-64-AMD Ryzen Zen 8 Core / 16 Thread pada 3.5GHz (frekuensi variabel) GPU: Akselerasi Penelusuran Sinar Hingga 2,23 GHz (10,3 TFLOPS) Arsitektur GPU: Mesin grafis berbasis AMD Radeon RDNA 2 Memori / Antarmuka: 16GB GDDR6 / 256-bit Memory Bandwidth 448GB / s Penyimpanan Internal: Throughput IO SSD 825 GB Khusus 5,5 GB / dtk (Mentah), Umum 8-9 GB / dtk (Terkompresi) Penyimpanan yang Dapat Diperluas: Slot SSD NVMe Penyimpanan Eksternal: Dukungan HDD USB Drive Optik (opsional): Ultra HD Blu-ray (66G / 100G) ~ 10xCAV, BD-ROM (25G / 50G) ~ 8xCAV, BD-R / RE (25G / 50G) ~ 8x CAV, DVD ~ 3.2xCLV PS5 Game Disc: Ultra HD Blu-ray, hingga 100GB / disc Audio: &#34;Tempest&#34; 3D AudioTech Video Out: Port HDMI Out Mendukung TV 4K 120Hz, VRR (ditentukan oleh HDMI ver 2.1) Dimensi: 390mm x 104mm x 260mm (lebar x tinggi x kedalaman) Berat: 4.5kg Daya: 350W Input / Output: Port USB Tipe-A (USB Kecepatan Tinggi), Port USB Tipe-A (USB Kecepatan Super 10Gbps) x2, Port USB Tipe-C (USB Kecepatan Super 10Gbps)',
    		'link_referensi'   => 'https://shopee.co.id/Sony-Playstation-5-Console-Disc-Version-PS5-i.107010302.8848342341?sp_atk=0b3085ff-1080-4f11-b524-58d2cca882a5&xptdk=0b3085ff-1080-4f11-b524-58d2cca882a5',
    		'foto'            => 'Playstation.png'
    	],
    	[
    		'kategori_id'     => 3,
    		'nama_katalog'    => 'PSP',
    		'harga'           => 53951,
    		'description'     => 'Myroots Nano Ultra Shield Fitur : -100%FINGERPRINT TOUCH SUPER SENSITIF -MENGCOVER LAYAR HP ANDA 360 -PERFECT FIT & SANGAT PRESISI -BAHAN YANG DIGUNAKAN CAMPURAN PET & TPU FILM FLEKSIBEL -KUAT & MUDAH DIPASANG BERBEDA DENGAN TEMPERED GLASS UMUMNYA -BAHANNYA TIPIS & LENTUR -MEREDAM BENTURAN AGAR LAYAR LCD TIDAK MUDAH PECAH -BISA LEM LAYAR YANG MELENGKUNG PADA BAGIAN POJOK SAMPING SAMPAI PENUH -TIDAK GAMPANG COPOT KARENA BAHANNYA SEPRTI JELLY -LEMNYA YANG KUAT & Case Friendly',
    		'link_referensi'   => 'https://shopee.co.id/Myroots-Antigores-Nano-Ultra-Shield-PSP-Sony-3000-2000-1000-anti-gores-jelly-anti-shock-Hydrogel-screen-guard-protector-i.428262351.10089336992?sp_atk=f6ad6fc8-735c-40ca-ba54-109c45708336&xptdk=f6ad6fc8-735c-40ca-ba54-109c45708336',
    		'foto'            => 'PSP.png'
    	],
    	[
    		'kategori_id'     => 3,
    		'nama_katalog'    => 'Nintendo 3DS & DS',
    		'harga'           => 399000,
    		'description'     => 'HANDHELD GAME: This electronic LCD video game makes a great gift for Spider-Man fans, and for those who grew up playing 1-player handheld games. Designed for kids 8 and up, it’s also fun for teens and adults, Ages 8 and up, For 1 player, 2x 1.5V AA LR6 Batteries Required. (Not included.), WARNING: This toy produces flashes that may trigger epilepsy in sensitized individuals. Includes LCD video game and instructions.',
    		'link_referensi'   => 'https://shopee.co.id/Hasbro-Games-Tiger-Electronics-Marvel-Spider-Man-GSSF2839-i.230978434.11272689970?sp_atk=90cfebb0-ab42-4aa2-8ed8-e492b6598834&xptdk=90cfebb0-ab42-4aa2-8ed8-e492b6598834',
    		'foto'            => 'Nintendo3DS&DS.png'
    	],
    	[
    		'kategori_id'     => 4,
    		'nama_katalog'    => 'DSLR',
    		'harga'           => 5919000,
    		'description'     => '18.0 Megapixel APS-C CMOS sensor DIGIC 4+ Image Processor ISO 100 – 6400 (expandable to 12800) 3 fps continuous shooting 9 AF points (center cross type) Full HD video recording (1920x1080) 30p  2.7" TFT colour liquid-crystal monitor (230K pixels) Built-in flash (Manual pop up flash) EF and EF-S lens mount Built in Wifi SD/SDHC/SDXC card slot Creative Filter Image processing styles.',
    		'link_referensi'   => 'https://shopee.co.id/Canon-Digital-Camera-EOS-3000D-with-lens-18-55mm-DC-III-Black-i.19828394.1156806282?sp_atk=ccebe671-c7e4-418a-964a-53d6f78d1628&xptdk=ccebe671-c7e4-418a-964a-53d6f78d1628',
    		'foto'            => 'DSLR.png'
    	],
    	[
    		'kategori_id'     => 4,
    		'nama_katalog'    => 'Kamera Action',
    		'harga'           => 1299000,
    		'description'     => 'Specifications : Wi-Fi Live Streaming Photo Resolution 24MP 4K @30fps, 1080p @60fps Electronic Image Stabilization (EIS) Remote Control External mic included Up to 240fps True Color 2" TFT LCD with with 0.5" front LCD 150° angle lens 8 Layer Lenses Time-lapse 0.5/1/2/5/10/30/60s Photo Burst 16MP up to 10fps 12 accessories included GoPro compatible brackets 1000mAh Li-ion battery 40 Meter Waterproof',
    		'link_referensi'   => 'https://shopee.co.id/Brica-B-Pro-5-BPRO5-Alpha-Edition-4K-Mark-III-S-(AE3S)-EIS-Hitam-Action-Cam-Free-T-Shirt-i.687516294.17005296023?sp_atk=b484a268-fbfb-40e2-826b-8297e37b9f80&xptdk=b484a268-fbfb-40e2-826b-8297e37b9f80',
    		'foto'            => 'KameraAction.png'
    	],
    	[
    		'kategori_id'     => 4,
    		'nama_katalog'    => 'Drone',
    		'harga'           => 6150000,
    		'description'     => 'Ukuran Pesawat : - Dilipat :145*85*56mm - Tidak dilipat : 200*145*56mm Berat Dengan Battery : 258g (Standard); 245(Pro) Waktu Terbang : 30(Standard);31(Pro) Satelit sistem : GPS/GLONASS/BEIDOU Operating Frequency:5.725-5.825Ghz Gimbal Camera Max Video : 3840*2160 30fps Max Bitrate :100 Mbps Paket : Fimi X8 Mini*1 pcs Remote*1 Pcs Propeller*6Pcs Battery(Pro Version) *2Pcs Screwdriver*1Pcs Gimbal Cover*1Pcs Kabel*3Pcs Bag*1Pc',
    		'link_referensi'   => 'https://shopee.co.id/FIMI-X8-Mini-Drone-8km-4K-3axis-Camera-2021-Combo-Version-i.349450189.2977084265?sp_atk=81985b6d-83f9-47dc-bf5c-c44151f3a205&xptdk=81985b6d-83f9-47dc-bf5c-c44151f3a205',
    		'foto'            => 'Drone.png'
    	],
    	[
    		'kategori_id'     => 5,
    		'nama_katalog'    => 'Monitor',
    		'harga'           => 1660000,
    		'description'     => 'Fitur Utama: Eye Care Tech: Flicker free (menghilangkan flicker/kerlipan), Low blue light (mengurangi radiasi sinar biru yang berbahaya pada mata) dan Brightness Intelligence Tech (pengaturan otomatis monitor untuk mendeteksi dan mengubah brightness sesuai cahaya ruangan), Full HD1920x1080‎ Resolution, Refresh Rate 60Hz, Input connector: D-sub / HDMIx2‎, Speaker Built in 1Wx2, VA Panel, 178°/178° Wide-Viewin',
    		'link_referensi'   => '-3313717e7085&xptdk=878cc77d-eaeb-47cd-ab87-3313717e7085',
    		'foto'            => 'Monitor.png'
    	],
    	[
    		'kategori_id'     => 5,
    		'nama_katalog'    => 'Hard Disk',
    		'harga'           => 1500000,
    		'description'     => 'Spesifikasi : Hardisk 3.5 Inchi Hardisk 500gb Seagate Skyhawk Surveilance Sentinel 100% No Bad Sector Capacity : 500GB 2TB dan 4TB Performance 100% (0 days) Type Hardisk : SATA Merek : Seagate HDD 500GB 2TB dan 4TB Seagate Skyhawk Surveilance',
    		'link_referensi'   => 'https://shopee.co.id/GLENZ-CCTV-HDD-500GB-2TB-DAN-4TB-i.400612850.11183253675?sp_atk=70f7a5f4-5d54-4c79-9922-36ecab6fc028&xptdk=70f7a5f4-5d54-4c79-9922-36ecab6fc028',
    		'foto'            => 'HardDisk.png'
    	],
    	[	'kategori_id'     => 5,
    	'nama_katalog'    => 'Sound Card',
    	'harga'           => 98000,
    	'description'     => 'SPESIFIKASI: - Virtual 7.1 CH Surround Effect - Sampling Rate: 44.1K / 48K / 96K - Function: Knob Tuning / One key 7.1 CH /Mic Off - Cable Length: 7.5 cm - Wire Core: EMC - Compatible With: Single / Double Plug / Headset Plug - Port: USB & Jack 3.5 mm',
    	'link_referensi'   => 'https://shopee.co.id/Plextone-GS3-Sound-Card-USB-Adapter-7.1-Komputer-Laptop-Mac-Windows-i.226963722.4321800325?sp_atk=7a03d591-5af0-4560-9fb0-355920fa66ea&xptdk=7a03d591-5af0-4560-9fb0-355920fa66ea',
    	'foto'            => 'SoundCard.png'
    ],
    [
    	'kategori_id'     => 6,
    	'nama_katalog'    => 'Keyboard & Piano',
    	'harga'           => 1599000,
    	'description'     => '@GRATIS * Adaptor * Stand Book * Buku Manual * Stand Keyboard Our principal aim in designing the PSR-F52 was basic functionality that is both straightforward and user-friendly. As a result, we have developed a keyboard that anyone will find easy to operate and play. Using the intuitive panel, simply select a voice and rhythm to start playing. The PSR-F52s compact and lightweight design packs in a regular size keyboard together with 120 Voices and 114 Rhythms from all over the world. What’s more, this instrument is ideally suited to a wide range of different playing scenarios; not only is the PSR-F52 great for beginners and students, you can also power it with batteries for musical performance on the road.',
    	'link_referensi'   => 'https://shopee.co.id/Yamaha-Keyboard-PSR-F52-Gratis-Adaptor-Stand-Book-Stand-Keyboard-i.37016589.2739214691?sp_atk=e0267627-3748-4db7-923f-da5f89f4457d&xptdk=e0267627-3748-4db7-923f-da5f89f4457d',
    	'foto'            => 'Piano.png'
    ],
    [
    	'kategori_id'     => 6,
    	'nama_katalog'    => 'Ukulele',
    	'harga'           => 690000,
    	'description'     => 'SPECIFICATIONS: BODY : Nato with Arched Back NECK : Mahogany HEADSTOCK : Slotted FINGERBOARD : Teak BRIDGE : Teak FRETS : 16, Nickel MACHINE HEADS : Waverly Style, Gold Plated STRINGS : Aquila Super Nylgut SADDLE : Graph Tech NuBone XB NUT : ABS, White SCA',
    	'link_referensi'   => 'https://shopee.co.id/MAHALO-Ukulele-Concert-Trans.-Brown-MJ2-TBR-(817000114)-i.371890742.3578983161?sp_atk=71543b7c-fea3-42e1-9312-b91822be8e75&xptdk=71543b7c-fea3-42e1-9312-b91822be8e75',
    	'foto'            => 'Ukulele.png'
    ],
    [
    	'kategori_id'     => 7,
    	'nama_katalog'    => 'Air Mineral',
    	'harga'           => 4653,
    	'description'     => 'Minuman air mineral Le Minerale 3 varian Dari sumber air gunung yang telah diolah dan di proses Oleh tenaga ahli dan telah dijamin Di proses dan dibotolkan langsung disumbernya. Kami menyediakan 3 varian ;ukuran sebagai berikut: Ke 1 Air Mineral Le Minerale 330ml Kode :00620113 Ke 2 Air Mineral Le Minerale 600ml Kode : 00620112 Ke 3 Air Mineral Le Minerale 1,5Ltr Kode :00620111',
    	'link_referensi'   => 'https://shopee.co.id/MINUMAN-AIR-MINERAL-LE-MINERALE-3-VARIAN-UKURAN-i.233423253.5139217166?sp_atk=5c33070e-b6d8-4939-a9c1-96de1607795d&xptdk=5c33070e-b6d8-4939-a9c1-96de1607795d',
    	'foto'            => 'AirMineral.png'
    ],
    [
    	'kategori_id'     => 7,
    	'nama_katalog'    => 'Makanan Siap Saji',
    	'harga'           => 38500,
    	'description'     => 'STEAK TENDERLOIN IMPORT+SAUS BARBEQUE SAINGAN ABUBA STEAK - HOLYCOW - TANPA PENGAWET - MSG HALAL UMUR SIMPAN 3 BULAN DALAM FREEZER HARAP MASUKKAN FREEZER ATAU LANGSUNG DIOLAH SETELAH PRODUK TIBA KARENA TANPA PENGAWET',
    	'link_referensi'   => 'https://shopee.co.id/STEAK-TENDERLOIN-IMPORT-FROZEN-FOOD-SAUS-BARBEQUE-SAINGAN-ABUBA-STEAK-HOLYCOW-TANPA-PENGAWET-MSG-HALAL-i.109959517.8415486811?sp_atk=1b4668e1-31d1-42a7-8cd7-b17b5a6f1733&xptdk=1b4668e1-31d1-42a7-8cd7-b17b5a6f1733',
    	'foto'            => 'MakananSiapSaji.png'
    ],
    [
    	'kategori_id'     => 7,
    	'nama_katalog'    => 'Minuman Bersoda',
    	'harga'           => 8500,
    	'description'     => 'Komposisi: Air, Sirup Jagung Tinggi Fruktosa, Gula (Mengandung Pengawet Sulfit), Karbondioksida, Pengatur Keasaman Asam Sitrat, Perisa Sintetik Lemon Petunjuk Cara Penyimpanan: Simpan di tempat kering, sejuk dan terhindar dari sinar matahari langsung. Nikmat diminum saat dingin. BPOM RI ML 566509182104 Berat: 250ml Expired: 25-04-2024',
    	'link_referensi'   => 'https://shopee.co.id/Lotte-Chilsung-Cider-Minuman-Soda-Lime-Korea-Halal-250ml-i.224534553.17228635721?sp_atk=a5e55740-cbf3-4d9e-be4c-6fe3d19d9ca8&xptdk=a5e55740-cbf3-4d9e-be4c-6fe3d19d9ca8',
    	'foto'            => 'MinumanBersoda.png'
    ],
    [
    	'kategori_id'     => 8,
    	'nama_katalog'    => 'Palu',
    	'harga'           => 30000,
    	'description'     => 'PALU KAMBING GG.FIBER MERK MADICO UK 12OZ HARGA UNTUK 1PCS',
    	'link_referensi'   => 'https://shopee.co.id/PALU-KAMBING-GAGANG-FIBER-MADICO-8OZ-12OZ-16OZ-i.100425206.6178660377?sp_atk=becf6e78-3e78-4f08-84dc-9bbf8136e977&xptdk=becf6e78-3e78-4f08-84dc-9bbf8136e977',
    	'foto'            => 'Palu.png'
    ],
    [
    	'kategori_id'     => 8,
    	'nama_katalog'    => 'Kuci Set',
    	'harga'           => 453700,
    	'description'     => 'Profesional Repair Toolkit at your Home Satu set alat-alat perkakas yang satu ini tidak tangung-tanggung dalam membantu anda untuk melakukan reparasi maupun pekerjaan lainnya. Hadir dengan banyak jenis perkakas mulai bor listrik, obeng, palu, tang, gergaji, kunci pas, kunci L, meteran, tester listrik dan lainnya. Miliki set perkakas ini untuk keperluan reparasi Anda sehari-hari. Features All in One Tool Set Set alat perkakas ini terdiri dari bor listrik, obeng, palu, tang, gergaji, kunci pas, kunci L, meteran, tester listrik dan lainnya. High Quality Material Setiap alat-alat perkakas ini dibuat dari bahan besi berkekerasan tinggi sehingga tidak mudah patah saat digunakan bekerja. Sturdy Box Tray Box untuk produk ini memiliki tempat khusus untuk semua perkakasnya. Hal ini membuat semua peralatan di produk tersimpan secara rapi dan teratur sehingga anda bisa dengan mudah menggunakannya saat diperlukan. Penggunaan bahan plastik yang kuat membuat kotak perkakas set ini tidak mudah pecah saat terjatuh."',
    	'link_referensi'   => 'https://shopee.co.id/KVS-Habo-Alat-Set-Perkakas-Bor-Listrik-Palu-Tang-Obeng-Kunci-Pas-Gergaji-102-in-1-TZ168-Grab-Medan-i.65696211.5048910042?sp_atk=1c9060ec-de57-46f0-808b-fadf667e644d&xptdk=1c9060ec-de57-46f0-808b-fadf667e644d',
    	'foto'            => 'KuciSet.png'
    ],
    [
    	'kategori_id'     => 8,
    	'nama_katalog'    => 'Meteran',
    	'harga'           => 9999,
    	'description'     => 'merk : Wanly Panjang : 5 meter Dimensi 25 mm Diameter 8 cm Tebal 4 cm Harga yang tertera adalah harga per pcs. Untuk kenyamanan transaksi Anda.. baca deskripsi dibawah ini : - Tidak ada garansi untuk produk ini - Barang yang dikirim dalam keadaan bagus. - Kemasaan rusak / basah saat pengiriman bukan tanggung jawab kami. - TIDAK menerima komplain pecah, penyok, dll. - Produk sudah kami cek sebelum dikirim. - Packing standar dengan dus',
    	'link_referensi'   => 'https://shopee.co.id/0METERAN-PANJANG-5-METER-MEASURING-TAPE-5METER-IMPORT-MURAH-i.273153110.11670872586?sp_atk=0cb79dfd-9495-47f5-b064-e92d3fe78bc6&xptdk=0cb79dfd-9495-47f5-b064-e92d3fe78bc6',
    	'foto'            => 'Meteran.png'
    ],
    [
    	'kategori_id'     => 9,
    	'nama_katalog'    => 'Triplek Kayu Jati Belanda',
    	'harga'           => 300000,
    	'description'     => 'Bahan halus Motif sesuai gambar gambar sesuai aslinya 61x242 Tebal 16mm dan banyak ukuran lainnya MAKSIMALKAN Hobbynya untuk pengambilan banyak silahkan di chat ya untuk pengantaran silahkan chat ya pengiriman pake pengangkutan pihak kami, dan kita kordinasikan harga pengiriman sebelum chekout. untuk cara nya silahkan chat ke admin. pengiriman hanya bisa daerah Marelan sekitar dan Pulo Brayan',
    	'link_referensi'   => 'https://shopee.co.id/TRIPLEK-KAYU-JATI-BELANDA-i.32397960.6562821180?sp_atk=943b7c18-1443-49c5-b9bc-0befa4e21ea9&xptdk=943b7c18-1443-49c5-b9bc-0befa4e21ea9',
    	'foto'            => 'Triplek.png'
    ],
    [	'kategori_id'     => 9,
    'nama_katalog'    => 'Semen',
    'harga'           => 74500,
    'description'     => 'Prosedur pembelian: * Mohon untuk menghubungi kami via chat sebelum melakukan pemesanan * Harga yang ditampilkan adalah harga 1 Zak * Bila ada yang ingin beli 1DO (160 zak) bisa chat terlebih dahulu karena harganya lebih efisien * Waktu pengiriman disesuaikan dengan kesepakatan bersama. * Pembayaran dilakukan sesuai ketentuan di Online Shop Chat/Inbox admin untuk Cashback',
    'link_referensi'   => 'https://shopee.co.id/Semen-Tigaroda-50kg-i.277618743.13638255612?sp_atk=c743128b-2b59-4116-9005-a5b99515cf55&xptdk=c743128b-2b59-4116-9005-a5b99515cf55',
    'foto'            => 'Semen.png'
],
[
	'kategori_id'     => 9,
	'nama_katalog'    => 'Kawat Ram Besi',
	'harga'           => 220000,
	'description'     => 'Expanded Mesh C 1015 Ukuran: 1.20 x 2.40m Ketebalan: +- 1mm Harga yang tertera adalah Harga per Lembar Maximal order 8 Lembar per transaksi, pembelian lebih dari 8 lembar WAJIB transaksi terpisah',
	'link_referensi'   => 'https://shopee.co.id/Expanded-Metal-Mesh-C-1015-ukuran-1.20-x-2.40m-Kawat-Ram-Besi-Wiremesh-i.433297803.3696237501?sp_atk=5205857a-28b1-4a6e-afd8-2718b03bbdac&xptdk=5205857a-28b1-4a6e-afd8-2718b03bbdac',
	'foto'            => 'KawatRamBesi.png'
],
[
	'kategori_id'     => 10,
	'nama_katalog'    => 'Kemoceng',
	'harga'           => 59800,
	'description'     => 'Bahan: Microfiber + Aluminium Panjang: 55(sebelum), 84(sesudah) Note: -General: . Sebelum di kirim barang akan kami cek terlebih dahulu ( QC ). . Kami tidak akan mengirimkan barang yang rusak, bekas. . Tidak dapat mengganti pesanan / alamat kecuali melakukan orderan ulang. . Barang sudah kami packing dengan aman. Tetapi pembeli di perbolehkan untuk memesan extra packaging jika berkenan. -Komplain & Retur: . Mohon untuk melakukan video unboxing dan pengecekan barang sebelum klik terima pesanan di applikasi. . Komplain tanpa video unboxing dan foto bukti tidak akan di terima. . Jika pembeli ingin retur atau ganti barang setelah pesanan di selesaikan, maka ongkir akan sepenuhnya di tanggung oleh pembeli (dapat di chat lebih lanjut untuk detail nya). . Kritik, saran dan complain kami terima dengan senang hati melalui chat.',
	'link_referensi'   => 'https://shopee.co.id/Kemoceng-Microfiber-Tebal-Scalable-Pembersih-Debu-Rumah-Mobil-i.521800954.11145972484?sp_atk=766cda32-1541-4f30-9736-379bf867fc6e&xptdk=766cda32-1541-4f30-9736-379bf867fc6e',
	'foto'            => 'Kemoceng.png'
],
[
	'kategori_id'     => 10,
	'nama_katalog'    => 'Sikat Pembersih',
	'harga'           => 37999,
	'description'     => 'Deskripsi Produk : - Warna dikirim RANDOM (tidak bisa pilih/request). - Bahan stainless steel. - Digunakan membersihkan celah pinggir lantai dan sudut yang sulit dibersihkan. - Terdapat karet wiper . - Portable, mudah dilepas-pasang. - Bulu sikat awet & tidak mudah rontok. - Terdapat lubang cantolan di handle sikat. - Ukuran 24 x 110 cm. - Berat produk 500 gram. - 1 kg muat 2 pcs.',
	'link_referensi'   => 'https://shopee.co.id/Sikat-Lantai-Wiper-Pembersih-Lantai-Dinding-Kamar-Mandi-Gagang-Panjang-Portable-Sapu-Lancip-Model-V-i.42713734.16845403477?sp_atk=dd382650-7414-4cd7-8ca8-a776f888f573&xptdk=dd382650-7414-4cd7-8ca8-a776f888f573',
	'foto'            => 'SikatPembersih.png'
],
[
	'kategori_id'     => 10,
	'nama_katalog'    => 'Sapu',
	'harga'           => 78850,
	'description'     => 'Sapu multifungsi Bahan produk: PP + pipa baja tahan karat Keunggulan produk: 1. Apakah Anda masih khawatir dengan masalah ini? Rambut tersangkut di sapu, sulit untuk menyapu debu, bahannya tipis dan buruk. Sapu lipat dan set pengki ini membuat kegiatan menyapu anda lebih mudah! 2. Bulu yang ramping dan padat menyaring debu lapis demi lapis, membersihkan lantai bersih tanpa jejak! 3. Desain sudut kemiringan 45 ° dapat dengan mudah memecahkan masalah kotoran yang terdapat di sela sudut. 4. Desain kepala berputar 180 ° dapat dengan mudah menyapu bagian bawah furnitur, menyapu bagian bawah tempat tidur dengan mudah, dan menyapu celah dengan mudah. 5. Pembersihan dengan hanya dengan satu alat, mengatasi berbagai keadaan lingkungan. Misalnya, rambut, kulit kacang, debu, dll. 6. Lubang masuk debu sedikit melengkung, dekat dengan tanah, menyapu dengan mudah dan bersih. 7. Pengki yang berputar 90 ° dapat berdiri tegak, pembukaan dan penutupan mudah. 8. Dapat dilipat untuk penyimpanan, menghemat ruang penyimpanan. 9. Menggunakan bahan berkualitas tinggi, masa pakai lebih ',
	'link_referensi'   => 'https://shopee.co.id/Set-Sapu-Broom-Set-Dustpan-Sapu-Lipat-Kombinasi-Pengki-Sapu-i.474022307.12857466375?sp_atk=1da8ee29-eef0-4c46-851b-476f6dd18597&xptdk=1da8ee29-eef0-4c46-851b-476f6dd18597',
	'foto'            => 'Sapu.png'
],
[
	'kategori_id'     => 11,
	'nama_katalog'    => 'Rak Dapur',
	'harga'           => 429000,
	'description'     => 'Fitur Produk: -High Quality material, anti - karat, anti - korosi. -Bisa muat 8 piring, 10 mangkok. - Bisa untuk sayuran dan buah buahan. -Bagian bawah anti-slip, lekat dengan bagian permukaan, dan tidak akan menggores permukaan -Membuat dapur terlihat rapi. -terdapat 3 variasi produk: 65 cm (tanpa disertai keranjang sponge, tempat talenan dan sendok) ukuran : 65 cm x 31 cm x 51.5 cm 65 cm (full set)  ukuran : 65 cm x 31 cm x 51.5 cm 85cm (full set) ukuran : 85 cm x 33.5 cm x 51.5 cm',
	'link_referensi'   => 'https://shopee.co.id/ES-Rak-Dapur-Stainless-Hitam-Rak-Wastafel-Rak-Piring-Dan-Peralatan-Dapur-Kokoh-Kuat-2-UKURAN-i.228452214.7317775755?sp_atk=b228e27b-53f2-4fd0-971f-d011b239b4fd&xptdk=b228e27b-53f2-4fd0-971f-d011b239b4fd',
	'foto'            => 'RakDapur.png'
],
[
	'kategori_id'     => 11,
	'nama_katalog'    => 'Pisau & Gunting dapur ',
	'harga'           => 39900,
	'description'     => 'Set Pisau terdiri : 1. Pisau Pemotong Tulang 2 Pisau Pemotong Sayur & Pengiris Daging 3. Dua Pisau Pemotong Daging 4. Pisau Pemotong Semangka (Buah) 5. Pisau Pemotong Buah 6. Gunting Dapur 7. Pengasah Pisau',
	'link_referensi'   => 'https://shopee.co.id/GM-Bear-Pisau-Dapur-Set-isi-8-psc-1068-Kitchen-Knife-Set-i.149205613.7210202056?sp_atk=deb24721-34cd-4e50-93eb-229e9c6f32a2&xptdk=deb24721-34cd-4e50-93eb-229e9c6f32a2',
	'foto'            => 'Pisau.png'
],
[
	'kategori_id'     => 11,
	'nama_katalog'    => 'Penggorengan',
	'harga'           => 72000,
	'description'     => 'Panci ini terbuat dari bahan premium dan dilapisi Marble Coating sehingga sangat awet dan anti lengket. Dapat di gunakan untuk memanggang, bakar, goreng, rebus, dll. Keunggulan : - Ukuran 32 cm - Panas cepat merata dan tahan lama - Memasak dengan sedikit / tanpa minyak - Bahan Batu Medis Anti Lengket',
	'link_referensi'   => 'https://shopee.co.id/TKIS-Wajan-Penggorengan-Anti-Lengket-Batu-Medis-Ukuran-32-CM-TK-826-i.619204632.16919920708?sp_atk=3b082b40-57be-4fa1-8293-fbe4876bb38f&xptdk=3b082b40-57be-4fa1-8293-fbe4876bb38f',
	'foto'            => 'Penggorengan.png'
],
[
	'kategori_id'     => 12,
	'nama_katalog'    => 'Jas Hujan',
	'harga'           => 125000,
	'description'     => 'Spesifikasi: -All Size - Bahan Taslan Baloon waterproof dan windproof (Teruji anti air) - Setelan jaket dan celana - Bahan halus dan ringan - Model jahitan full seam seal (lapisan double seal hotpress) - Penutup kepala (hoodie) - Original Brand winland',
	'link_referensi'   => 'https://shopee.co.id/Winland-Jas-Hujan-set-baju-dan-celana-Kualitas-Terbaik-bahan-TEBAL-Size-M-L-XL-XXL-Navy-blue-Blue-Red-i.396834796.16055182183?sp_atk=aec9df24-74c5-413e-89a9-51841b731d76&xptdk=aec9df24-74c5-413e-89a9-51841b731d76',
	'foto'            => 'JasHujan.png'
],
[
	'kategori_id'     => 12,
	'nama_katalog'    => 'Aksesoris Tenda',
	'harga'           => 869250,
	'description'     => 'Merek : Naturehike Model no : NH18Z022-P Kategori : Tenda Warna : Biru dan Orange Material : *Flysheet : 210T Polyester Fabric *Bagian Dalam : 210T Polyester Fabric & B3 breathable mesh (jaring dalam) *Alas Tenda : 150D Oxford Cloth *Tiang (Frame) : 7001 Aluminium Alloy *Aksesoris : Plastik ABS (Pengait), Aluminium Alloy (Pasak), dan nylon (tali tenda) Ukuran : *200 x 130 x 100cm (Inner) *200 x 175 x 100cm (Dengan Flysheet) *44 x 14 x 14cm (Dikemas) Kapasitas : 2 orang Berat : 2200g Isi Paket : *1x Outer Flysheet *1x Inner Tent *2x Frame Tenda + Pouch *15x Pasak Hook + Pouch *6x Tali Tenda + Buckle *1x Tali Pengikat *1x Cover Keseluruhan',
	'link_referensi'   => 'https://shopee.co.id/Naturehike-NH18Z022-P-P-Series-Tenda-Camping-2-Orang-i.8321846.3877670227?sp_atk=d721bd1e-20ae-4c0b-a57f-08df2bb40ecd&xptdk=d721bd1e-20ae-4c0b-a57f-08df2bb40ecd',
	'foto'            => 'AksesorisTenda.png'
],
[	'kategori_id'     => 12,
'nama_katalog'    => 'Jaket Olahraga',
'harga'           => 129000,
'description'     => 'Baju sauna bekerja dengan menghasilkan panas tubuh yang efektif mempercepat pembakaran lemak kalori sehingga Anda akan mengeluarkan banyak keringat sebagai bentuk detoksifikasi racun dalam tubuh. Selain itu dapat pula melancarkan peredaran darah. Kalau peredaran lancar Anda tidak akan mudah stress badan terasa lebih segar. ** tekstur minyak pada produk adalah hal wajar karena tujuan minyak supaya produk tidak lengket dan rusak. Minyak bisa dibersihkan menggunakan sabun cair / liquid detergen dan di bilas dengan air bersih',
'link_referensi'   => 'https://shopee.co.id/KETTLER-Nanotrax-Exercise-Suit-Jaket-Baju-Sauna-i.3265440.5156655205?sp_atk=00f9ab52-f7a4-4b33-bca7-eaa067bb9778&xptdk=00f9ab52-f7a4-4b33-bca7-eaa067bb9778',
'foto'            => 'JaketOlahraga.png'
],
[
	'kategori_id'     => 13,
	'nama_katalog'    => 'Pulpen',
	'harga'           => 3500,
	'description'     => 'Deli Pulpen Gel - Ketebalan 0.5mm - Panjang pulpen: 145mm - Dilengkapi dengan klip, bisa dijepit di buku atau kertas sehingga mudah dibawa dan tidak mudah hilang - Desain simpel dan elegan, berwarna putih - Tinta tebal dan jelas - Untuk keperluan alat tulis sekolah, kantor, dan rumah.',
	'link_referensi'   => 'https://shopee.co.id/Deli-Gel-Pen-Pulpen-Gel-Tinta-Hitam-0.5mm-Desain-Unik-A118-i.65736753.7763807748?sp_atk=c93a88d5-f0a3-41b4-838a-82012723a9ee&xptdk=c93a88d5-f0a3-41b4-838a-82012723a9ee',
	'foto'            => 'Pulpen.png'
],
[
	'kategori_id'     => 13,
	'nama_katalog'    => 'Spidol',
	'harga'           => 3000,
	'description'     => 'Joyko Whiteboard Marker Spidol Papan Putih >Product Size ( Ukuran Produk ) : Panjang 13 cm x Diameter 1 cm >Tesedia 3 Pilihan Warna : -Black ( WM-28 ) -Blue ( WM-29 ) -Red ( WM-30 ) >Round Tip ( Ujung Bulat ) >Cocok Untuk Kantor, Sekolah dan Rumah >Harga 1 Pcs',
	'link_referensi'   => 'https://shopee.co.id/Joyko-Whiteboard-Marker-Spidol-Papan-Putih-i.64925304.1921152270?sp_atk=969a369f-172c-4c91-9988-5b0b72986488&xptdk=969a369f-172c-4c91-9988-5b0b72986488',
	'foto'            => 'Spidol.png'
],
[
	'kategori_id'     => 13,
	'nama_katalog'    => 'Buku Catatan',
	'harga'           => 8000,
	'description'     => 'Buku Tulis Catatan Notebook Joyko Soft Cover >Product Size ( Ukuran Produk ) : -NB-704 : Panjang 21 cm x Lebar 14.8 cm / A5 -NB-705 : Panjang 25.2 cm x Lebar 17.9 cm / B5 >Colors ( Warna ) : Blue ( Biru ), Green ( Hijau ), Orange ( Oranye ) dan Pink ( Merah Muda )* >Thickness ( Ketebalan ) : 70 gsm >40 Sheets ( Lembar ) >180° flat ( datar ) >Sheet does not loose ( Lembar tidak lepas ) >Harga 1 Pcs *Warna dikirim sesuai dengan persediaan yang ada',
	'link_referensi'   => 'https://shopee.co.id/Buku-Tulis-Catatan-Notebook-Joyko-Soft-Cover-i.64925304.11501494693?sp_atk=2986d564-72b7-44a7-b24e-91dc4548828a&xptdk=2986d564-72b7-44a7-b24e-91dc4548828a',
	'foto'            => 'BukuCatatan.png'
],
[
	'kategori_id'     => 14,
	'nama_katalog'    => 'Gantungan Kunci',
	'harga'           => 19000,
	'description'     => 'JB Keychain Keychain dengan bahan strapnya terbuat dari Cotton Webing ( with Full Woven label Premium ). Gantungan Kunci Berdesign Simpel Minimalis ini cocok untuk aksesoris tambahan perlengkapanmu. Selain kuat dan kokoh, bentuknya juga Elegant dan Classy. Color : Light Grey Material: - Cotton Webbing - Metal Hook - Metal Key Ring - Woven Label',
	'link_referensi'   => 'https://shopee.co.id/JB-Keychain-Light-Grey-i.10129058.14480851821?sp_atk=914188df-f2ca-4a7d-b016-a19c6844adaf&xptdk=914188df-f2ca-4a7d-b016-a19c6844adaf',
	'foto'            => 'GantunganKunci.png'
],
[
	'kategori_id'     => 14,
	'nama_katalog'    => 'Celengan',
	'harga'           => 9950,
	'description'     => 'Kelebihan Produk: 1. menggunakan celengan komposit bukan kaleng jadi tidak mudah penyok di perjalanan 2. menggunakan kertas stiker yang tebal sehingga tidak mudah sobek dan tahan air 3. menggunakan print dengan quality baik sehingga tidak luntur saat terkena tangan 4. model celengan permanen Detail Produk: Permanen Medium Ukuran 17cm X 8cm',
	'link_referensi'   => 'https://shopee.co.id/Celengan-Target-Permanen-Viral-Bahan-Kaleng-Ukuran-Medium-Berbagai-Varian-Target-i.254959171.17950866395?sp_atk=be679f9f-915e-4b75-952b-8c11f2ea6979&xptdk=be679f9f-915e-4b75-952b-8c11f2ea6979',
	'foto'            => 'Celengan.png'
],
[
	'kategori_id'     => 14,
	'nama_katalog'    => 'Kipas Tangan',
	'harga'           => 17820,
	'description'     => 'STROBERI FAN SHAPE SERIES -1; KIPAS – alat untuk mengibas-ngibas, agar mendapat angin sejuk; BAHAN – plastik solid dan peluit plastik; BENTUK– Bermacam Variasi Bentuk DIAMETER – 19 cm; PANJANG GAGANG – 17,5 cm; dan 12 VARIASI – yang bisa dipilih.',
	'link_referensi'   => 'https://shopee.co.id/Stroberi-Fan-Shape-Series-1-i.61360420.13875313730?sp_atk=40277ffe-1460-4e75-8dad-d806377320ab&xptdk=40277ffe-1460-4e75-8dad-d806377320ab',
	'foto'            => 'KipasTangan.png'
],
[
	'kategori_id'     => 15,
	'nama_katalog'    => 'Kamus',
	'harga'           => 80000,
	'description'     => 'KAMUS BESAR ARAB Penerbit : Pustaka Baru Press ISBN : 978-602-6237-23-1 Jumlah Hal : 822 Berat Buku : 935 gr Ukuran : 23 x 15  2. KAMUS BESAR INGGRIS Penerbit : Pustaka Baru Press ISBN : 978-602-6237-23-1 Jumlah Hal : 822 Berat Buku : 935 gr Ukuran : 23 x 15',
	'link_referensi'   => 'https://shopee.co.id/Kamus-Bahasa-Inggris-Kamus-Besar-Bahasa-Inggris-Kamus-Besar-Bahasa-Arab-Kamus-Besar-Bahasa-Jepang-Kamus-Besar-Bahasa-Jerman-Kamus-Besar-Bahasa-Mandarin-Index-Best-Seller-Kamus-Besar-Bahasa-Prancis-Jepang-Jerman-Korea-Prancis-Besar-Index-i.254959171.5739074062?sp_atk=6a1c450a-f511-4e91-8575-548f01324e29&xptdk=6a1c450a-f511-4e91-8575-548f01324e29',
	'foto'            => 'Kamus.png'
],
[
	'kategori_id'     => 15,
	'nama_katalog'    => 'Majalah Remaja',
	'harga'           => 95000,
	'description'     => 'Judul : The Haze Inside Penulis : Aiu Ahra Lulusan pesantren kerap dianggap akan menjadi ustadz ketika lulus kelak. Tapi, Rigel tidak mau menjadi seperti itu. Mimpinya justru berada di tempat lain, tapi masalahnya, ia bahkan belum tahu cita-citanya. Padahal ia sudah pernah janji pada Mei, kawan perempuannya di SMP, untuk bertemu di satu kota dan berjuang mewujudkan mimpi sama-sama. Tapi kini, ia sendiri malah bimbang.',
	'link_referensi'   => 'https://shopee.co.id/Novel-Remaja-The-Haze-Inside-Aiu-Ahra-Republika-Penerbit-Original-i.91051295.21501199497?sp_atk=c5d80564-b1e5-401b-8c67-48c2a58e9b9c&xptdk=c5d80564-b1e5-401b-8c67-48c2a58e9b9c',
	'foto'            => 'MajalahRemaja.png'
],
[
	'kategori_id'     => 15,
	'nama_katalog'    => 'Buku Resep & Masak',
	'harga'           => 124700,
	'description'     => 'Detail Produk: Ukuran 17x24 cm Kertas Artpaper Isi 162 Halaman Softcover Untuk produk-produk lainnya, silahkan cek etalase di toko kami Produk kami dijamin ASLI dan ORIGINAL Packing aman dan rapi Pastikan Anda follow toko kami untuk mendapatkan voucher dan promo menarik',
	'link_referensi'   => 'https://shopee.co.id/Buku-Resep-Masakan-70-Resep-Easy-Cook-Praktis-Halal-Non-MSG-Karya-Yunita-Anwar-i.254959171.14965825747?sp_atk=6c2aa2d0-0145-4a9a-9934-bc910b078a88&xptdk=6c2aa2d0-0145-4a9a-9934-bc910b078a88',
	'foto'            => 'BukuResep.png'
],
]);
    }
}
