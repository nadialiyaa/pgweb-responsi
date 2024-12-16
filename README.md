## RuteHijau - Analisis Aksesibilitas Hutan Kota Jakarta dengan WebGIS Interaktif Penggunaan Rute Bus Transjakarta
---
### RuteHijau Overview
RuteHijau merupakan media publikasi Web GIS yang menampilkan analisis keterjangkauan dari Halte Bus TransJakarta terhadap Hutan-Hutan Kota di Provinsi DKI Jakarta dengan menerapkan fungsi analisis dan pemodelan geospasial. Rute Hijau menyajikan data diagram dalam menginterpretasikan hasil analisis pemodelan. Rute Hijau juga memiliki section 'Kontribusi' sebagai wadah interaktif yang dapat diberikan pengguna sebagai masukan kepada pengembang untuk menambah hasil analisis.
### Latar Belakang
Jakarta, sebagai ibu kota negara, memiliki tantangan besar dalam menyediakan ruang hijau yang memadai di tengah hiruk pikuk perkotaan. Salah satu upaya yang dilakukan adalah pembangunan hutan kota. Hutan kota berfungsi sebagai paru-paru kota, pengendali iklim mikro, dan ruang rekreasi publik. Namun, aksesibilitas masyarakat terhadap hutan kota seringkali menjadi kendala. Lokasi yang sulit dijangkau oleh transportasi umum menjadi salah satu kendala utama yang manfaat hutan kota bagi warga Jakarta.

Transjakarta, sebagai sistem transportasi bus rapid transit (BRT) terbesar di Asia Tenggara berpotensi menjadi solusi dalam meningkatkan aksesibilitas menuju hutan kota. Dengan jaringan rute yang luas, Transjakarta dapat membantu masyarakat menjangkau berbagai lokasi strategis termasuk ruang terbuka hijau. Namun, informasi mengenai konektivitas antara rute Transjakarta dan hutan kota masih sangat minim dan belum terintegrasi dengan baik dalam sistem informasi geografis. Dengan memanfaatkan teknologi GIS berbasis web, “Rute Hijau” mengintegrasikan data transportasi dan analisis keterjangkauan ruang terbuka hijau untuk menciptakan sebuah solusi yang informatif, mudah digunakan, dan relevan dengan kebutuhan masyarakat perkotaan.

### Komponen dan Sumber Data
**Library**
- Leaflet.js
- Chart.js
- Bootstrap

**Database**
- MySQL
- GeoServer

**Sumber Data**
- LapakGIS
- InaGeoportal

### Fitur Unggulan Web RuteHijau
**Landing Page** : Halaman awal yang menyajikan kalimat sapaan dan ilustrasi bergerak dengan menggunakan CSS keyframe.
<img width="960" alt="image" src="https://github.com/user-attachments/assets/028346f4-7cd1-4b02-86a5-ecfe8d9c107f" />
**Peta** : Section yang menampilkan data titik-titik halte busway dan titik hutan kota dengan poligon keterjangkauan radius 500 meter dan 1000 meter.
<img width="960" alt="image" src="https://github.com/user-attachments/assets/54c74f6e-a829-4ccb-802d-1b70a0a36c0f" />
**Analysis** : Section yang memvisualisasikan data dengan diagram batang dan tabel, sehingga mempermudah interpretasi data.
<img width="960" alt="image" src="https://github.com/user-attachments/assets/e185d39c-ff63-427b-9592-bd0aae10a1af" />
**Kontribusi** : Section yang menyediakan wadah bagi pengguna memberikan rekomendasi dan suggestion bagi pengembang terkait titik-titik hutan kota yang perlu dianalisis keterjangkauannya.
<img width="960" alt="image" src="https://github.com/user-attachments/assets/291b27de-6a15-4dc0-a1f6-f43ed1edbef7" />
