@extends('layouts.app')

@section('title')
    Media
@endsection

@section('content')

<div class="container">
    <div class="row px-2">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
            <h1>Privacy & Policy</h1>
        </div>
        <div class="col-md-12">
            <div class="card text-center">


                <div class="text-center bg-gradient-primary-to-secondary">



                </div>
                <div class="card-header">

                    <ul class="nav nav-pills card-header-pills">


                        <li class="nav-item">
                            <a class="nav-link active" style="background:#2e236b;" href="#privacy"
                                onclick="changeLanguage('BI')">English</a>
                        </li>
                        &nbsp;
                        <li class="nav-item">
                            <a class="nav-link active" style="background:#2e236b;" href="#privacy"
                                onclick="changeLanguage('BM')" tabindex="-1" aria-disabled="true">B.Melayu</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body" id="features">

                    <h2 class="display-4 lh-1 mb-4"> <img src="{{ asset('img/privacy.png') }}" alt="Pineapple"
                            style="width:120px;height:120px;margin-right:15px;">
                        Privacy Policy
                        <i class='fas fa-shield-alt' style='font-size:24px'></i>
                    </h2>
                    <p class="card-text" style="border-radius: 15px;
  background:  #2e236b;   color: white;
"> What information do we get?<br>

                    <dl>
                        <dt>● We may collect information from you as you access or login on any of our websites, web
                            applications, or mobile applications. (Berkat TV products are available for download on the
                            iOS App Store or the Google Play store.) Or any interaction with us, by any means of
                            interactions. Examples include:</dt>
                        <br>
                        <dd>1. Your personal data (such as name, phone number, email address, login information, etc.);
                        </dd>
                        <dd>2. Your location (to see unique travel locations and route options);</dd>
                        <dd>3. How you use our Applications, Websites, or Services (such as features used and content
                            viewed);</dd>
                        <dd>4. Device information (such as hardware model and serial number, IP address, file name and
                            version and advertising identifiers or any information that could provide an indication of
                            device or application modifications);</dd>
                        <dd>5. Information or messages you are currently using to communicate using our application;
                        </dd>
                        <dd>6. Personal data that may be collected through your interactions with us.</dd>

                    </dl>
                    </p>
                    <br>
                    <p class="card-text " style="border-radius: 15px;
  background: #2e236b;   color: white;
">How do we use your information?<br>



                    <dl>
                        <dt>● All information we receive from you may be used for these purposes in one of the following
                            manners:</dt><br>
                        <dd>1. Help maintain the reliability, protection and quality of our services and users;</dd>
                        <dd>2. For the purpose of providing mutual communication between users;</dd>
                        <dd>3. Conduct research and development activities;</dd>
                        <dd>4. Sharing promotional and non-promotional materials of marketing and non-marketing messages
                            to fellow users (more information);</dd>
                        <dd>5. In compliance with legal proceedings.</dd>

                    </dl>
                    </p><span id="dots">...</span>


                    <br>

                    <div>
                        <span id="more">
                            <p class="card-text" style="border-radius: 15px;
  background:  #2e236b;   color: white;
">Send promotional and non -promotional information to users.<br>


                            <dl>
                                <br>
                                <dd>● We may sometimes use the data we collect for the purpose of promoting our services
                                    to our users. This includes sending communications with users about services,
                                    features, promotions, polls, reviews, surveys, news, updates and events berkaitan
                                    Berkat TV. We may send such marketing promotional materials by mail, by phone call,
                                    short message service, online ordering service, push notification and email</dd>
                                <dd>● We are also able to share information by sending orders about the services
                                    provided by Berkat TV partners with our customers. While this information is being
                                    shared, we. send user notifications about Berkat TV partner services, we will not
                                    sell or exchange our users ’personal information to or with such partners or others
                                    for the purpose of their marketing or direct advertising promotions, except with the
                                    user’s consent.</dd>
                                <dd>● We may use the data we collect to personalize the marketing promotional orders
                                    (including advertising) we deliver, including based on a user's location, previous
                                    use of Berkat TV services, and user experience and settings</dd>
                                <dd>● We may also use your Personal Data to evaluate our customers’ promotional
                                    preferences and patterns, further and to obtain insights that can be used to tailor
                                    the types of products and offers we provide to you. This includes including the
                                    Personal Details we hold about your use of our services with the knowledge we have
                                    collected about your use of the web. We may also be able to combine the information
                                    we collect about you with the information we collect about our other customers to
                                    gain this insight and to identify market trends. We also use advertising services
                                    and products offered by third party service providers (such as marketing agencies
                                    and social media platforms) for marketing and promotional purposes that may include
                                    sharing the personal data we carry about you.</dd>
                                <dd>● You have the right to request that we not process your Personal Data for direct
                                    marketing purposes. By indicating that you when you choose Disagree to receive
                                    promotional materials.to direct marketing While your Personal Data is being
                                    collected, at the time we collect your Personal Data, you may exercise your right to
                                    prevent such processing.</dd>

                            </dl>

                            <br>
                            <p class="card-text" style="border-radius: 15px;
  background:  #2e236b;   color: white;
">How do we protect your information?<br>


                            <dl>
                                <br>
                                <dd>● We employ a number of security measures to protect and implement a number of
                                    security measures to keep your personal information secure when entering,
                                    transmitting or accessing your personal information.</dd>

                            </dl>


                            <br>
                            <p class="card-text" style="border-radius: 15px;
  background:  #2e236b;   color: white; ">Do we use "cookies"?<br>


                            <dl>
                                <br>
                                <dd>● We use Google Analytics to evaluate how visitors use different Berkat TV websites.
                                    Google Analytics is a web analytics tool provided by Google. Google may use the data
                                    collected to monitor and evaluate the actions of users of the Berkat TV website in
                                    order to collect feedback and communicate with other Google services. Google may use
                                    this collected data to tailor and tailor its internet advertising.</dd>
                                <dd>● Google Analytics data is also used for Berqat's "Show Ads" campaign. The use of
                                    such data is also protected by the Google Analytics user agreement and privacy
                                    policy</dd>
                                <dd>● Berkat TV applications use "cookies", such as Google Analytics "cookies", and
                                    other related technologies. The purpose of the use of these "cookies" is for us to
                                    understand and store user favorite settings and use models, to monitor
                                    advertisements and to obtain and edit usage and traffic data on the website</dd>
                                <dd>● You have the right to opt-out of cookies through your browser or system settings,
                                    but you should be aware that canceling these cookies may result in an incomplete
                                    Berkat TV service experience</dd>

                            </dl>
                            <br>
                            <p class="card-text" style="border-radius: 15px;
  background: #2e236b;  color: white;
">Will we disclose information to outsiders?<br>


                            <dl>
                                <br>
                                <dd>● We do not sell, exchange or pass on your personal information to third parties.
                                    This does not involve trusted third parties who assist us in running our website,
                                    conducting our business or serving you as long as those parties provide
                                    confidentiality with this information. We may also pass on your information if we
                                    find we feel that the release is necessary to comply with the law, enforce our
                                    website policies, or protect our rights, property, or safety. However, personally
                                    identifiable visitor information may be provided for marketing, advertising, or
                                    other use by other parties..</dd>

                            </dl>


                            <br>
                            <p class="card-text" style="border-radius: 15px;
  background: #2e236b;  color: white;
">Changes to our Privacy Policy


                                <br>
                                <dd>● From time to time, we will change this Privacy Policy, and a revised version will
                                    be posted on our website. For any updates or improvements to this Privacy Notice,
                                    please come back to check regularly. By continuing to use Berkat TV service without
                                    notifying us of the problem, you agree with our new Privacy Policy.
                                </dd>



                            </p>
                        </span>
                    </div>

                    <div>
                        <br>

                    </div>

                    <button onclick="myFunction('BI')" id="myBtn" style=" background-color: #2e236b;
  border: none;
  color: white;">Read more</button>

                </div>


                <div class="card-body" id="features2" style="display: none;">

                    <h2 class="display-4 lh-1 mb-4"> <img src="{{ asset('img/privacy.png') }}" alt="Pineapple"
                            style="width:120px;height:120px;margin-right:15px;">
                        Notis Privasi
                        <i class='fas fa-shield-alt' style='font-size:24px'></i>
                    </h2>
                    <p class="card-text" style="border-radius: 15px;
background:  #2e236b;   color: white;
"> Apakah maklumat yang kami perolehi? <br>

                    <dl>
                        <dt>● Kami mungkin akan mengumpulkan maklumat anda semasa mengakses atau mendaftar di mana-mana
                            laman web, aplikasi web, atau aplikasi mudah alih kami. (Mengenai produk Berqat, tersedia
                            untuk dimuat turun dari App Store iOS atau gedung Google Play.) Atau sebarang interaksi
                            dengan kami, dengan apa cara sekalipun. Contohnya merangkumi: </dt>
                        <br>
                        <dd>1. Data peribadi anda (seperti nama, nombor telefon, alamat e-mel, maklumat masuk, dll.);
                        </dd>
                        <dd>2. Lokasi anda (untuk melihat lokasi perjalanan dan pilihan laluan yang unik);</dd>
                        <dd>3. Cara anda menggunakan Aplikasi, Laman Web, atau Perkhidmatan kami
                            (seperti ciri yang diguna dan kandungan yang dilihat);
                        </dd>
                        <dd>4. Maklumat peranti (seperti model perkakasan dan nombor siri, alamat IP, nama dan versi
                            fail dan pengecam pengiklanan atau sebarang maklumat yang dapat memberikan petunjuk mengenai
                            pengubahsuaian peranti atau aplikasi); </dd>
                        <dd>5. Maklumat atau mesej semasa anda berkomunikasi dengan menggunakan aplikasi kami;
                        </dd>
                        <dd>6. Data peribadi yang mungkin diambil melalui interaksi anda dengan kami. </dd>

                    </dl>
                    </p>
                    <br>
                    <p class="card-text " style="border-radius: 15px;
background: #2e236b;   color: white;
">Bagaimanakah kami menggunakan maklumat anda?<br>



                    <dl>
                        <dt>● Segala maklumat yang kami terima akan digunakan bagi tujuan-tujuan berikut: </dt><br>
                        <dd>1. Menjaga kebolehpercayaan, perlindungan dan kualiti perkhidmatan pengguna kami; </dd>
                        <dd>2. Bagi tujuan komunikasi bersama pengguna; </dd>
                        <dd>3. Menjalankan aktiviti penyelidikan dan pembangunan; </dd>
                        <dd>4. Berkongsi bahan-bahan promosi dan bukan promosi bersama pengguna; </dd>
                        <dd>5. Berhubung mengenai prosiding undang-undang. </dd>

                    </dl>
                    </p><span id="dots2">...</span>


                    <br>

                    <div>
                        <span id="more2" style="display: none;">
                            <p class="card-text" style="border-radius: 15px;
background:  #2e236b;   color: white;
">Menghantar maklumat promosi dan bukan promosi kepada pengguna. <br>


                            <dl>
                                <br>
                                <dd>● Kami mungkin menggunakan data yang kami kumpulkan bagi tujuan memasarkan
                                    perkhidmatan kami kepada para pengguna. Ini termasuk berkomunikasi dengan pengguna
                                    mengenai perkhidmatan, ciri, promosi, undian, kajian, tinjauan, berita, kemaskini
                                    dan acara. Kami mungkin mengirimkan bahan promosi melalui pos, panggilan telefon,
                                    khidmat pesanan ringkas, perkhidmatan pesanan dalam talian, notifikasi dan emel.
                                </dd>
                                <dd>● Kami juga dapat berkongsi maklumat mengenai perkhidmatan yang diberikan oleh rakan
                                    Berqat bersama pelanggan kami. Semasa maklumat ini dikongsikan, kami tidak akan
                                    menjual atau menukar maklumat peribadi pengguna kami dengan rakan kongsi tersebut
                                    atau yang lain untuk tujuan promosi atau iklan, kecuali dengan izin pengguna. </dd>
                                <dd>● Kami mungkin menggunakan data yang kami kumpulkan untuk mempersonalisasi pesanan
                                    promosi (termasuk iklan) yang kami sampaikan, termasuk lokasi pengguna, penggunaan
                                    layanan Berqat sebelumnya, dan pengaturan pengguna. </dd>
                                <dd>● Kami juga dapat menggunakan Data Peribadi anda untuk menilai pilihan dan pola
                                    promosi pelanggan kami, selanjutnya mendapatkan pandangan yang dapat digunakan untuk
                                    menyesuaikan jenis produk dan tawaran yang kami berikan kepada anda. Ini termasuk
                                    menyertakan Perincian Peribadi yang kami simpan mengenai penggunaan perkhidmatan
                                    kami dengan pengetahuan yang telah kami kumpulkan mengenai penggunaan web anda. Kami
                                    mungkin juga dapat menggabungkan maklumat yang kami kumpulkan mengenai anda dengan
                                    maklumat yang kami kumpulkan mengenai pelanggan yang lain untuk mendapatkan
                                    pandangan ini dan untuk mengenal pasti trend pasaran. Kami juga menggunakan
                                    perkhidmatan iklan dan produk yang ditawarkan oleh penyedia perkhidmatan pihak
                                    ketiga (seperti agensi pemasaran dan platform media sosial) untuk tujuan pemasaran
                                    dan promosi yang mungkin meliputi perkongsian data peribadi yang kami bawa mengenai
                                    anda. </dd>
                                <dd>● Anda berhak meminta agar kami tidak memproses Data Peribadi anda untuk tujuan
                                    pemasaran apabila anda memilih Tidak Setuju untuk menerima bahan promosi. Semasa
                                    Data Peribadi anda sedang dikumpulkan,, anda berhak mencegah pemprosesan tersebut.
                                </dd>

                            </dl>

                            <br>
                            <p class="card-text" style="border-radius: 15px;
background:  #2e236b;   color: white;
">Bagaimanakah kami melindungi maklumat anda? <br>


                            <dl>
                                <br>
                                <dd>● Kami menggunapakai beberapa langkah keselamatan untuk melindungimaklumat peribadi
                                    anda semasa memasukkan, mengirim atau mengakses maklumat peribadi anda. </dd>

                            </dl>


                            <br>
                            <p class="card-text" style="border-radius: 15px;
background:  #2e236b;   color: white; ">Adakah kami menggunakan "cookies"? <br>


                            <dl>
                                <br>
                                <dd>● Kami menggunakan Google Analytics untuk menilai bagaimana pelawat menggunakan
                                    laman web Berqat yang berbeza. Google Analytics adalah alat analisis web yang
                                    disediakan oleh Google. Google dapat menggunakan data yang dikumpulkan untuk
                                    memantau dan menilai tindakan pengguna laman web Berqat untuk mengumpulkan maklum
                                    balas dan berhubung dengan perkhidmatan Google yang lain. Google dapat menggunakan
                                    data ini yang dikumpulkan untuk menyesuaikan dan menyesuaikan iklan internetnya.
                                </dd>
                                <dd>● Data Google Analytics juga digunakan untuk kempen "Show Ads" oleh Berqat.
                                    Penggunaan data tersebut juga dilindungi oleh perjanjian pengguna dan dasar privasi
                                    Google Analytics. </dd>
                                <dd>● Aplikasi Berqat menggunakan "cookies", seperti "cookies" Google Analytics, dan
                                    teknologi lain yang berkaitan. Tujuan penggunaan "cookies" ini adalah untuk kita
                                    memahami dan menyimpan tetapan pengguna kegemaran dan menggunakan model, untuk
                                    memantau iklan dan untuk memperoleh dan mengedit data penggunaan dan lalu lintas di
                                    laman web. </dd>
                                <dd>● Anda berhak untuk membatalkan "cookies" melalui tetapan penyemak imbas atau
                                    sistem, tetapi anda harus berhati-hati bahawa pembatalan "cookies" ini boleh
                                    menyebabkan pengalaman perkhidmatan Berqat tidak lengkap. </dd>

                            </dl>
                            <br>
                            <p class="card-text" style="border-radius: 15px;
background: #2e236b;  color: white;
">Adakah kami akan mendedahkan maklumat kepada pihak luar? <br>


                            <dl>
                                <br>
                                <dd>● Kami tidak menjual, menukar atau menyampaikan maklumat peribadi anda kepada pihak
                                    ketiga. Ini tidak melibatkan pihak ketiga yang dipercayai yang membantu kami dalam
                                    menjalankan laman web kami, menjalankan perniagaan kami atau melayani anda selagi
                                    pihak tersebut memberikan kerahsiaan dengan maklumat ini. Kami juga dapat
                                    menyampaikan maklumat anda jika kami mendapati pelepasan itu diperlukan untuk
                                    mematuhi undang-undang, menegakkan dasar laman web kami, atau melindungi hak, harta
                                    benda, atau keselamatan kami. Walau bagaimanapun, maklumat pelawat yang tidak dapat
                                    dikenali secara peribadi boleh diberikan untuk pemasaran, iklan, atau penggunaan
                                    lain oleh pihak lain.</dd>

                            </dl>


                            <br>
                            <p class="card-text" style="border-radius: 15px;
background: #2e236b;  color: white;
">Perubahan pada Dasar Privasi kami</p>


                            <br>
                            <dd>● Dari semasa ke semasa, kami akan mengubah Dasar Privasi ini, dan versi yang disemak
                                semula akan disiarkan di laman web kami. Untuk sebarang kemaskini atau penambahbaikan
                                pada Dasar Privasi ini, sila semakdengan kerap. Dengan terus menggunakan perkhidmatan
                                Berqat tanpa memberitahu kami tentang masalah ini bermaksud anda mematuhi Dasar Privasi
                                kami yang baharu.
                            </dd>



                            </p>
                        </span>
                    </div>

                    <div>
                        <br>

                    </div>

                    <button onclick="myFunction('BM')" id="myBtn2" style=" background-color: #2e236b;
border: none;
color: white;">Baca lagi</button>

                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

<script type="text/javascript">
    function myFunction(lang) {

      if(lang=="BI"){
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
      } else {
        var dots = document.getElementById("dots2");
        var moreText = document.getElementById("more2");
        var btnText = document.getElementById("myBtn2");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Baca lagi";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Kecilkan";
            moreText.style.display = "inline";
        }
      }
        
    }

    function changeLanguage(lang) {
        if (lang == "BM") {
            document.getElementById("features").style.display = "none";
            document.getElementById("features2").style.display = "block";
        } else {
            document.getElementById("features").style.display = "block";
            document.getElementById("features2").style.display = "none";
        }
    }
</script>
@endsection