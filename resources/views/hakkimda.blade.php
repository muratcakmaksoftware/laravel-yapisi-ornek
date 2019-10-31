<!-- görünüm include ediliyor -->
@extends("masterpage")

<!-- Görünüm içerisindeki yeild ile işaretlenmiş yerler hakkımda sayfasına göre değişiklikler yapılıyor. -->

<!-- head içerisin yeild edilen title bölümün değiştirilmesi -->
@section("baslik", 'Hakkımda')

<!-- görünüm içerisindeki yield ile işaretlenmiş içerik bölümünün değiştirilmesi.-->
@section("icerik")
    <h2>Hakkımda</h2>
@endsection

