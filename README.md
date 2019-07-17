# ARSITEKTUR
Aplikasi ini dibuat menggunakan arsitektur MVC ( Model View Controller ).
Model : Digunakan untuk mendefinisikan skema database dan juga untuk berkomunikasi langsung dengan database.
Controller : Digunakan untuk mengontrol view (tampilan), menerima input dari view dan memanipulasi database.
View : Digunakan untuk membuat tampilan dan menerima input dari pengguna.

# INSTALL
1. Untuk mulai menggunakan aplikasi. Silahkan nyalakan server php dan mysql menggunakan XAMPP.
2. Buka interface mysql, atau bisa muka di localhost/phpmyadmin dan upload file SQL yang ada di folder './app/database/db.sql'
3. Copy folder project dan paste di xampp/htdocs (Extract file jika masih ada di dalam kompresi .zip)
4. Buka website melalui browser dengan url localhost/skripsiarmy

# PENJELASAN SINGKAT
Aplikasi ini hanyalah aplikasi sederhana dengan fitur login dan pengelola data master. Untuk mengelola data master
kita melakukan 4 perintah dasar yang disebut dengan CRUD (CREATE, READ, UPDATE, DELETE).
Untuk memungkinkan aplikasi melakukan perintah ini. Aplikasi ini menyederhanakannya dengan menggunakan :
1. MasterModel.php : Filenya ada di ./app/base/MasterModel.php . File ini berfungsi menjadi base class 
dari semua class Model. Gunanya adalah kita tidak perlu menuliskan secara berulang setiap perintah CRUD.
Cukup di class master saja. Kemudian di class yang mewarisi class MasterModel tinggal mengimplementasikan
beberapa hal yang unik seperti nama table, query untuk getAll, nama primaryKey dsb.

2. router.php : Filenya ada di ./app/router.php. File ini berguna untuk mengelola perpindahan halaman.
Jadi, kita dapat dengan mudah berpindah dari satu halaman ke halaman lain menggunakan paramenter GET['page']
yang terlihat '?page=nama_halaman' di browser.

3. controller : Filenya ada di dalam folder ./controller . File ini berfungsi sebagai controller yang
sudah dijelaskan di paragraf pertama. Terlihat ada 2 controller.
- Login Controller berguna untuk mengatasi kasus login.
- AdminMasterController berguna untuk mengelola DataMaster.

4. FormGenerator.php : Filenya ada di dalam folder ./app/FormGenerator.php. File ini berfungsi untuk 
membuat form. Jadi kita tidak perlu membuat formnya satu per satu. Form dibuat berdasarkan
variable schema yang ada di setiap class Model yang ada di dalam folder ./model.

5. library.php : FIle ini berfungsi untuk mengatasi segala macam keperluan. Mulai dari manipulasi data hingga melakukan redirect.

# TAMBAHAN
- Jika ingin melihat gambar, css dan javascript bisa di lihat di folder ./assets.
- Jika ingin mengubah tampilan, silahkan lihat di folder view.
