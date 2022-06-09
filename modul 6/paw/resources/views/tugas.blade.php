@extends('nav')

	@section('container')
	<h2 style="text-align: center; padding-top: 40px; font-family: verdana; font-weight: bolder;">Tugas Pendahuluan</h2>
	<p style="font-family: initial;">1.	Jelaskan apa yang dimaksud dengan framework!</p>
	<p style="text-align: justify; font-family: initial;">Jawab :<br>
	Framework adalah code php yang menyediakan library siap pakai didalamnya yang dapat dimanfaatkan untuk mengembangkan websiate atau aplikasi tertentu. Dengan adanya framework developer daoat mengurangi jumlah bug pada web atau aps yang dibuat. </p>
	<p style="font-family: initial;">2.	Apa perbedaan framework dengan library?</p>
	<p style="text-align: justify; font-family: initial;">Jawab : <br>
	-	Framework <br>
	a.	Framework merupakan code php yang menyediakan library siap pakai didalamnya yang dapat dimanfaatkan untuk mengembangkan websiate atau aplikasi tertentu.<br>
	b.	Framework tidak dapat dimasukkan dalam program yang sedang dalam tahap pengembangan, digunakan saat memulai projek.<br>
	c.	Contoh framework antara lain Laravel, Code Igniter, Angular JS, Django.<br>
	-	Library <br>
	a.	Library merupakan kumpulan code atau script yang berisi variable, konstanta,tipe data, objek, dan fungsi-fungsi yang ditulis oleh pembuat library.<br>
	b.	Library dapat digunakan dalam peroyek yang sedang dalam tahap pengembangan.<br>
	c.	Contohnya antara lain jQuery, NumPy, Library PHP.</p>
	<p style="font-family: initial;">3.	Jelaskan keunggulan menggunakan laravel framework!</p>
	<p style="text-align: justify;font-family: initial;">Jawab :<br>
	-	Template layout yang lebih ringan.<br>
	-	Dukungan framework MVC.<br>
	-	Memiliki banyak library object oriented yang tidak terdapat pada framework lain.<br>
	-	Modul dalam laravel bersifat indiviidu dan independen.<br>
	-	Tersedia tool artisan yang merupakan sebuah fitur command line interface yang dapat mengetikan sekumpulan perintah yang dapat membantu developer dalam membangun website atau aplikasi.<br>
	-	Website yang dibuat menjadi lebih mudah dikembangkan.<br>
	-	Terdapat namespace dan tampilan yang dapat membantu untuk mengorganisir dan mengatur sumber daya website.<br>
	-	Proses pengembangan menjadi lebih cepat karena laravel dapat dikombinasikan dengan beberapa komponen dari framework lain.</p>
	<p style="font-family: initial;">4.	Jelaskan konsep MVC pada laravel!</p>
	<p style="text-align: justify; font-family: initial;">Jawab :<br>
	MVC (Model,View, Controller) adalah arsitektur perancangan kode program yang tujuannya memcah kode program utama menjadi tiga komponen terpisah dengan tugas yang spesifik. Dimana komponen tersebut adalah model untuk pengaksesan database, view untuk tampilan design, dan controller untuk alur logika program. Alur kerja MVC dimulai ketika user membuka sebuah website maka akan masuk ke controller, jika perlu mengambil data dari database maka akan diarahkan ke model, jika tidak akan langsung ke view kemudian ditampilkan pada user. Jika megambil data dari database, dari model akan diproses lagi di controller baru akan di bawa ke view yang akan tampil pada web browser user. </p>
	<p style="font-family: initial;">5.	Jelaskan perbedaan laravel dengan CI (codeigniter)!</p>
	<p style="text-align: justify; font-family: initial;s">Jawab : <br>
	-	Laravel <br>
	a.	Menyediakan lebih banyak library dan modul yang dapat meningkatkan dan menyempurnakan aplikasi web. Modul yang ada di laravel terintegrasi dengan composer dependency manager yang dapat mempermudah proses update.<br>
	b.	Laravel menggunakan blade template engine yang mana merupakan template Bahasa yang digunakan untuk mendesain tata letak dan blok dengan berbagai jenis blok.<br>
	c.	Laravel menggunakan environments dan konfigurasi yang berbeda. Laravel memberikan pendekatan yang konsisten dan powerful untuk mengelola konfigurasi dengan cara yang efisien. <br>
	-	Code Igniter<br>
	a.	Code igniter hanya membituhkan beberapa library kecil karena library tambahan dimuat secara dinamis selama proses request tergantung kebutuhan proses. System utama code igniter sangat sederhana dan cukup cepat.<br>
	b.	Code igniter menggunkan class templare engine yang mana merupakan template parser yang sederhana bersifat opsional yang dapat user gunakan atau tidak.<br>
	c.	Code igniter memiliki library gambar yang digunakan untuk melakukan resizing, cropping, rotating, juga mendukung penggunaan GD, NetPBM, dan Image Magick.<br>
	d.	Code igniter juga menyediakan class email.
	</p>
	@endsection
