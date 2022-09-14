# Pengembangan Beroritentasi Penggunaan Ulang
<h4> Kelompok : </h4>
<ul>
	<li>205150401111020 MUHAMMAD DAVALA SAFA</li>
    <li>205150401111025 MOHAMMAD KEVIN ABDILLAH</li>
    <li>205150400111051 DANIEL DEARY</li>
    <li>205150407111020 ILHAM NUANSA SHAYLENDRA PUTRA PAMUNGKAS</li>
</ul>

## Penjelasan UML Diagrams

### E-Commerce
**Class Ecommerce** memiliki **enam atribut** bersifat public diantaranya atribut bertipe data String yaitu asalPengiriman, tujuanPengiriman, namaPengirim, namaPenerima dan atribut bertipe data double yaitu jarakPengiriman, beratBarang. Class ini juga **memiliki method** bersifat public yaitu setRequestPengiriman(String asalPengiriman, String tujuanPengiriman, String namaPengirim, String namaPenerima) yang digunakan untuk menerima dan memberi nilai request pengiriman dari pengirim, dan method getTarif() yang digunakan untuk mengembalikan nilai tarif yang telah dihitung.

### DeliveryAPI
**Interface deliveryAPI** memiliki **dua atribut bersifat** public dengan tipe data double yaitu hargaPerKm dan hargaPerKg. Interface deliveryAPI memiliki **dua method** yaitu setTarif(Double jarakPengiriman, Double beratBarang) yang digunakan untuk memberikan nilai tarif yang telah dihitung, dan method getRequestPengiriman() digunakan untuk mengembalikan nilai request pengiriman.

### Sicepat
**Class Sicepat** memiliki **tiga atribut** bersifat public dengan tipe data double yaitu tarif, hargaPerKm, hargaPerKm. Class ini memiliki **dua method** yaitu setTarif(Double jarakPengiriman, Double beratBarang), dan method getRequestPengiriman().

### JNT
**Class JNT** memiliki **tiga atribut** bersifat public dengan tipe data double yaitu tarif, hargaPerKm, hargaPerKm. Class ini memiliki **dua method** yaitu setTarif(Double jarakPengiriman, Double beratBarang), dan method getRequestPengiriman().

### JNE
**Class JNE** memiliki **tiga atribut** bersifat public dengan tipe data double yaitu tarif, hargaPerKm, hargaPerKm. Class ini memiliki **dua method** yaitu setTarif(Double jarakPengiriman, Double beratBarang), dan method getRequestPengiriman().
