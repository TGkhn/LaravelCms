@extends('frontend.app')
@section('content')

<!--==========================
  Intro Section
============================-->
<section id="intro">

    <div class="intro-content">
        <h1>Veri Merkezi. Felaket Kurtarma Çözümleri. <br> Yönetilen Hizmetler. </h1>

        <h2>Yarı Yolda Bırakmayan <br><strong>İş Sürekliliği Çözümleri</strong></h2>
        <h1>BT ihtiyaçlarınız için özel olarak hazırlanan <strong>Networker Katma Değerli Servisler</strong>
            <br> ve <strong>Butik Çözümler</strong> ile iş yükünüz azalır.
        </h1>


    </div>

    <div id="intro-carousel" class="owl-carousel" >
        <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

</section><!-- #intro -->

<main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="/frontend/img/about-img.jpg" alt="">
                </div>

                <div class="col-lg-6 content">
                    <h1>Vizyonumuz</h1>
                    <p>
                        Networker Bilgi Teknolojileri, konusunda deneyimli, özenle oluşturulmuş uzman kadrosu ile birlikte sürekli gelişimi,
                        uluslar arası standartlarda çözüm ve hizmet kalitesini müşterilerine sunmayı hedefler.
                        İş ortaklığı içinde bulunduğu çevrelere karşı dürüstlük, güvenilirlik, iş etiği gibi ana değerleri
                        bünyesinde taşıyan öncü bir teknoloji ve iletişim firmasıdır.
                    </p>

                    <h1>Misyonumuz</h1>
                    <p>
                        Bilgi Teknolojileri alanındaki yeni nesil, trend çözümleri
                        dünya çapında kabul edilebilir ve mümkün olan en yüksek kalite
                        standartlarını butik hizmet anlayışı ile birleştirerek müşterilerine katma değerli hizmetler sunmaktır.
                    </p>

                </div>
            </div>

        </div>
    </section>
    <!-- #about -->

    <!--==========================
      Services Section
    ============================-->

    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2>Hizmetlerimiz</h2>
                <p> <strong>GÜÇ KATAN YENİLİKÇİ ÇÖZÜMLER</strong>  BT Altyapınıza Tam Uyumlu Kurumsal Çözümler</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-server"></i></div>
                        <h4 class="title"><a href="">Network Çözümleri</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-shield"></i></div>
                        <h4 class="title"><a href="">Güvenlik Çözümleri</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-handshake-o"></i></div>
                        <h4 class="title"><a href="">Tümleşik İletişim Çözümleri</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-wifi"></i></div>
                        <h4 class="title"><a href="">Kablosuz Ağ Çözümleri</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-cogs"></i></div>
                        <h4 class="title"><a href="">Ağ Altyapı Çözümleri</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-database"></i></div>
                        <h4 class="title"><a href="">Veri Merkezi Çözümleri</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- #services -->

    <!--==========================
      Clients Section
    ============================-->

    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Çözüm Ortaklarımız</h2>
            </div>

            <div class="owl-carousel clients-carousel">
                <img src="img/clients/client-1.png" alt="">
                <img src="img/clients/client-2.png" alt="">
                <img src="img/clients/client-3.png" alt="">
                <img src="img/clients/client-4.png" alt="">
                <img src="img/clients/client-5.png" alt="">
                <img src="img/clients/client-6.png" alt="">

            </div>

        </div>
    </section>

    <!-- #clients -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>İLETİŞİM</h2>
                <p>Desteğe ihtiyacınız varsa bizim ile iletişime geçebilirsiniz</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Adres</h3>
                        <address>Kavacık mahallesi Zafertepe Sokak Temel ve Ateş Plaza No:16 34810 Beykoz/İstanbul</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Telefon Numarası</h3>
                        <p><a href="tel:+0902164659494">(+0216) 465 94 94</a></p>
                        <p><a href="tel:+0902164659797">(+0216) 465 97 97</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@networker.com.tr">info@networker.com.tr</a></p>
                    </div>
                </div>

            </div>
        </div>



        <div class="container">
            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Adınız Soyadınız" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Mail Adresiniz" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mesajınız"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Mesaj Gönder</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->



</main>
     @endsection

@section('css')
    @endsection

@section('js')
    @endsection