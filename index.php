<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>GEMERKA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>

  <link rel="stylesheet" href="src/leaflet-search.css" />
  <link rel="stylesheet" href="./style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet-src.js"></script>
  <script src="https://cdn.rawgit.com/aparshin/leaflet-boundary-canvas/f00b4d35/src/BoundaryCanvas.js"></script>
  <script src="dist/leaflet-search.src.js"></script>


  <!-- styles done for front-end -->
  <link rel="stylesheet" type="text/css" href="public/css/main.css" />
  <link rel="stylesheet" type="text/css" href="public/css/responsive.css" />

<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KK8PFMS');</script>
    <!-- End Google Tag Manager -->
</head>
<!--/head-->

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KK8PFMS"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</head>

<body>
  <!-- Markup for Nav section -->

  <nav class="navbar navbar-expand-lg sticky-top cus-bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="public/images/logo.png" alt="LOGO" height="40px" width="160px" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white"></span>
      </button>
      <div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item">
            <a class="nav-link active" href="https://gemerka.sk/?p=na-zdravie">produkty</a>
          </li>
          <li class="nav-item opacity-25 d-md-block d-none">/</li>
          <li class="nav-item">
            <a class="nav-link active" href="https://gemerka.sk/?p=vedecka-studia">vedecka studia</a>
          </li>
          <li class="nav-item opacity-25 d-md-block d-none">/</li>
          <li class="nav-item">
            <a class="nav-link active" href="https://gemerka.sk/?p=prirodne-dedicstvo">prirodne dedicstvo</a>
          </li>
          <li class="nav-item opacity-25 d-md-block d-none">/</li>
          <li class="nav-item">
            <a class="nav-link active" href="https://gemerka.sk/?p=denna-davka-zdravia">Denná dávka zdravia</a>
          </li>
          <li class="nav-item opacity-25 d-md-block d-none">/</li>
          <li class="nav-item">
            <a class="nav-link active" href="https://gemerka.sk/?p=sutaze">Súťaže</a>
          </li>
          <li class="nav-item opacity-25 d-md-block d-none">/</li>
          <li class="nav-item">
            <a class="nav-link active" href="https://gemerka.sk/?p=kontakt">kontakt</a>
          </li>
          <li class="nav-item opacity-25 d-md-block d-none">/</li>
          <li class="nav-item">
            <a class="nav-link active" href="https://blog.gemerka.sk/">blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Markup for Hero section -->

  <section class="cus-bg-primary">
    <div class="container py-5">
      <div class="text-white text-center py-5 heading-1 mb-5">
        <h1 class="pb-3">Mapa* priemerného obsahu vápnika a horčíka v pitnej vode na Slovensku</h1>

        <p class="text-1">
          Viete, aké množstvo životne dôležitých minerálov obsahuje voda z vodovodu vo vašej obci alebo meste? Zistite to
jednoducho na našej mape a získajte zároveň údaje o tom, koľko horčíka a vápnika potrebujete denne prijať. Stačí, ak
do políčka nižšie zadáte názov obce, v ktorej žijete.
        </p>

<p class="text-1" style="font-size:10px !important">*Zostavená na základe národnej geochemickej databázy podzemných/pitných vôd Slovenska v rámci projektu GEOHEALTH (viac než 20 000 chemických analýz jednotlivých zdrojov vôd). </p>
      </div>
    </div>
  </section>

  <!-- Markup for service section -->

  <section class="service-section">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="search-btn-cont">
            <form id="search_from" method="post">
            <div class="main-btn d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center gap-2 w-100">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path
                      d="M11.9999 17.3333H14.6666V13.6666H17.3333V17.3333H19.9999V11L15.9999 8.33329L11.9999 11V17.3333ZM15.9999 29.3333C12.4221 26.2888 9.75014 23.4613 7.98392 20.8506C6.2177 18.24 5.33414 15.8231 5.33325 13.6C5.33325 10.2666 6.4057 7.61107 8.55059 5.63329C10.6955 3.65551 13.1786 2.66663 15.9999 2.66663C18.8221 2.66663 21.3057 3.65551 23.4506 5.63329C25.5955 7.61107 26.6675 10.2666 26.6666 13.6C26.6666 15.8222 25.783 18.2391 24.0159 20.8506C22.2488 23.4622 19.5768 26.2897 15.9999 29.3333Z"
                      fill="#1ABBEE" />
                  </svg>
                </div>
                <div class="w-100">
                  <!-- <input type="text" id="map_location_input_search" class="cus-color-secondary cus-text-lg p-3 border-0" placeholder="Žiar nad Hronom"> -->
                  <input type="text" id="map_location_input_search" list="datalistOptions"
                    class="cus-color-secondary cus-text-lg p-0 border-0 w-100" placeholder="Vyhľadajte si svoju obec">
                  <datalist id="datalistOptions">
                  <!-- <option value="Abrahám" data-lat="48.247983" data-lon="17.619419" data-ca="118.9" data-mg="55" data-pomer="2:1" data-sucet="174" data-id="503673">Abrahám</option> -->
                    <?php $json_data = file_get_contents('updated_data.json');
$locations = json_decode($json_data, true);
foreach ($locations as $location) {
    echo '<option value="' . $location['názov_obce'] . '" data-lat="' . $location['latitude'] . '" data-lon="' . $location['longitude'] . '" data-ca="' . $location['Ca'] . '" data-mg="' . $location['Mg'] . '" data-pomer="' . $location['Pomer'] . '" data-sucet="' . $location['Súčet'] . '" data-id="' . $location['číslo_obce'] . '">' . $location['názov_obce'] . '</option>';
}
?>
                  </datalist>
                </div>
              </div>
              <div class="" id="search-btn">
                  <button type="submit" class="search-btn text-1 d-md-block d-none">
                    Hľadať
                  </button>

                <button type="button" class="search-btn search-btn-with-icon text-1 d-block d-md-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M19.6 21L13.3 14.7C12.8 15.1 12.225 15.4167 11.575 15.65C10.925 15.8833 10.2333 16 9.5 16C7.68333 16 6.146 15.3707 4.888 14.112C3.63 12.8533 3.00067 11.316 3 9.5C3 7.68333 3.62933 6.146 4.888 4.888C6.14667 3.63 7.684 3.00067 9.5 3C11.3167 3 12.854 3.62933 14.112 4.888C15.37 6.14667 15.9993 7.684 16 9.5C16 10.2333 15.8833 10.925 15.65 11.575C15.4167 12.225 15.1 12.8 14.7 13.3L21 19.6L19.6 21ZM9.5 14C10.75 14 11.8127 13.5623 12.688 12.687C13.5633 11.8117 14.0007 10.7493 14 9.5C14 8.25 13.5623 7.18733 12.687 6.312C11.8117 5.43667 10.7493 4.99933 9.5 5C8.25 5 7.18733 5.43767 6.312 6.313C5.43667 7.18833 4.99933 8.25067 5 9.5C5 10.75 5.43767 11.8127 6.313 12.688C7.18833 13.5633 8.25067 14.0007 9.5 14Z"
                      fill="white" />
                  </svg>
                </button>
              </div>
            </div>
          </form>
          </div>
          <h1 id="empty_database_message" style="display: none;" class="cus-text-primary"> Zvolené mesto sa nenachádza v našej databáze </h1>
        </div>
      </div>

      <div class="data-box">
        <div class="row gap-5 gap-lg-0 mx-auto justify-content-center">
          <div class="col-12 col-lg-4 col-md-6">
            <div class="service-card-1 p-5">
              <div class="d-flex" style="margin-top:-90px">
                <div class="service-card__logo__sm mx-auto">
                  <div class="d-flex flex-column justify-content-center align-items-center mx-auto p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                      <path
                        d="M31.6666 23.3333V26.6666H26.6666V23.8L31.6666 23.3333ZM31.6666 21.6666C31.6666 19.8333 29.9999 18.3333 27.9999 18.3333H16.6666V16.6666H8.33325V35H16.6666V23.1833L31.6666 21.6666ZM8.33325 15H16.6666V11.6666L25.5999 8.68331C25.7997 8.62229 25.985 8.52163 26.145 8.38733C26.3049 8.25304 26.4361 8.08787 26.5308 7.9017C26.6254 7.71554 26.6816 7.51219 26.6958 7.30384C26.7101 7.09548 26.6822 6.88639 26.6138 6.68906C26.5454 6.49173 26.4379 6.31022 26.2978 6.15538C26.1576 6.00054 25.9877 5.87555 25.7981 5.78788C25.6086 5.70022 25.4033 5.65168 25.1946 5.64516C24.9858 5.63865 24.7779 5.6743 24.5833 5.74998L8.33325 11.6666V15Z"
                        fill="#1ABBEE" />
                    </svg>
                  </div>
                </div>
              </div>

              <div class="service-card-cont">

                <div class="pt-1  text-white ">

                  <p class="text-center" id="recomendation_text" style="border-radius: 19px;font-size: 32px;font-weight: 700; ">
                    <b>Veľmi nízky obsah  </b>
                  </p>
                </div>
                <p class="text-2 pt-1 pb-5 text-white">
                  Obsah minerálov vo vodovode
                </p>
                <div class="d-flex justify-content-around gap-3">
                  <div class="service-card__logo__md">
                    <div>
                      <p class="text-3 cus-text-danger p-0 m-0">Horčík</p>

                      <p class="service-card-1__text__1 m-0 p-0 cus-text-danger">
                        Mg
                      </p>
                      <p id="Mg" class="service-card-1__text__2 p-0 m-0 cus-text-danger">
                        16,7
                      </p>
                      <p class="text-3 cus-text-danger">mg/l</p>
                    </div>
                  </div>
                  <div class="service-card__logo__md">
                    <div>
                      <p class="text-3 cus-color-secondary p-0 m-0">Vápnik</p>

                      <p class="service-card-1__text__1 m-0 p-0 cus-color-secondary">
                        Ca
                      </p>
                      <p id="Ca" class="service-card-1__text__2 p-0 m-0 cus-color-secondary">
                        16,7
                      </p>
                      <p class="text-3 cus-color-secondary">mg/l</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-6">
            <div class="service-card-1 p-5">
              <div class="d-flex" style="margin-top:-90px" >
                <div class="service-card__logo__sm mx-auto">
                  <div class="d-flex flex-column justify-content-center align-items-center mx-auto p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                      <path
                        d="M11.6667 30C9.83333 30 8.26389 29.3472 6.95833 28.0417C5.65278 26.7361 5 25.1667 5 23.3333C5 21.5 5.65278 19.9306 6.95833 18.625C8.26389 17.3194 9.83333 16.6667 11.6667 16.6667C13.5 16.6667 15.0694 17.3194 16.375 18.625C17.6806 19.9306 18.3333 21.5 18.3333 23.3333C18.3333 25.1667 17.6806 26.7361 16.375 28.0417C15.0694 29.3472 13.5 30 11.6667 30ZM27.5 23.3333C24.9444 23.3333 22.7778 22.4444 21 20.6667C19.2222 18.8889 18.3333 16.7222 18.3333 14.1667C18.3333 11.6111 19.2222 9.44444 21 7.66667C22.7778 5.88889 24.9444 5 27.5 5C30.0556 5 32.2222 5.88889 34 7.66667C35.7778 9.44444 36.6667 11.6111 36.6667 14.1667C36.6667 16.7222 35.7778 18.8889 34 20.6667C32.2222 22.4444 30.0556 23.3333 27.5 23.3333ZM24.1667 35C22.7778 35 21.5972 34.5139 20.625 33.5417C19.6528 32.5694 19.1667 31.3889 19.1667 30C19.1667 28.6111 19.6528 27.4306 20.625 26.4583C21.5972 25.4861 22.7778 25 24.1667 25C25.5556 25 26.7361 25.4861 27.7083 26.4583C28.6806 27.4306 29.1667 28.6111 29.1667 30C29.1667 31.3889 28.6806 32.5694 27.7083 33.5417C26.7361 34.5139 25.5556 35 24.1667 35Z"
                        fill="#1ABBEE" />
                    </svg>
                  </div>
                </div>
              </div>

              <div class="service-card-cont">
                <p class="text-2 text-white">Dávka minerálov pri vypití 2 litrov vody z vodovodu</p>
                <div class="d-flex justify-content-around align-items-center mt-4">
                  <div>
                    <p class="text-3 cus-text-danger">Horčík</p>

                    <p id="proportion-mg" class="service-card-1__text__2 cus-text-danger" style="font-size: 60px;">1</p>
                  </div>
                  <p class="service-card-1__text__2 text-white d-none" style=" margin-top: 20px; ">:</p>
                  <div>
                    <p class="text-3 cus-color-secondary">Vápnik</p>

                    <p id="proportion-ca" class="service-card-1__text__2 cus-color-secondary" style="font-size: 60px;">5</p>
                  </div>
                </div>
                <p class="text-2 text-white">Odporúčaná denná dávka vápnika z vody je 160 mg a odporúčaná denná dávka horčíka je 60 mg.</p>

              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-6">
            <div class="service-card-1 service-card-3 bg-white p-5">
              <div class="d-flex" style="margin-top:-90px">
                <div class="service-card__logo__sm mx-auto">
                  <div class="d-flex flex-column justify-content-center align-items-center mx-auto p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                      <path
                        d="M11.8335 15.1666C12.9353 14.5666 14.0752 14.1111 15.2531 13.8C16.431 13.4888 17.6353 13.3333 18.8659 13.3333C19.5141 13.3333 20.157 13.3777 20.7948 13.4666C21.4326 13.5555 22.0643 13.6888 22.69 13.8666C23.7702 14.1777 24.5968 14.3888 25.1698 14.5C25.7428 14.6111 26.3529 14.6666 27.0002 14.6666H28.1992L28.7502 9.33329H11.2178L11.8335 15.1666ZM13.5187 33.3333C12.8489 33.3333 12.2656 33.1111 11.7687 32.6666C11.2718 32.2222 10.9909 31.6555 10.9261 30.9666L8.3335 6.66663H31.6668L29.0742 30.9666C29.0094 31.6555 28.7286 32.2222 28.2316 32.6666C27.7347 33.1111 27.1514 33.3333 26.4816 33.3333H13.5187Z"
                        fill="#1ABBEE" />
                    </svg>
                  </div>
                </div>
              </div>

              <div class="service-card-cont">
                <div class="">
                  <div class="" style="margin-right: 30px;">

                    <!-- <p class="text-2 pt-1 pb-5 text-white">
                      Obsah minerálov vo vodovode
                    </p> -->
                    <p class=" cus-text-primary text-center mt-2 p-0 m-0" style="color:#0A5BAC;font-size: 24px; font-weight: 700;">
                      Odporúčame dopĺňať pitný režim o minerálnu vodu Gemerka.
                    </p>

                    <!-- <p class="text-2 cus-text-primary mt-2 p-0 m-0">
                      GEMERKY denne
                    </p> -->
                  </div>
                  <div>
                    <img src="public/images/bottle.png" alt="BOTTLE" />
                  </div>
                </div>
              </div>
            </div>

            <!-- <p class="text-2 cus-text-primary pt-3 position-relative">
              Odporúčaná denná dávka vápnika je 1 200 mg a odporúčaná denná dávka horčíka je 400 mg. Odporúčame prijímať pestrú a vyváženú stravu. Hodnoty aj odporúčania zodpovedajú všestranným fyziologickým potrebám výživy zdravých jedincov populácie Slovenska.
            </p> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Markup for Map section -->
  <section class="cus-bg-secondary-two map-section">

    <div class="">
      <div class="d-flex">
        <div id="map" class="m-auto" style="background-color: #e8f8fd;"></div>
      </div>
    </div>

    <div class="container text-center py-5">
      <p class="cus-text-primary text-3 pt-5">
        Zdroj: Fajčíková, Katarína - Cvečková, Veronika - Rapant, Stanislav -
        Dietzová, Zuzana - Sedláková, Darina - Stehlíková, Beáta: Vplyv
        geologickej <br />
        zložky životného prostredia na zdravotný stav obyvateľstva Slovenskej
        republiky. - [1. vyd.]. - Bratislava : Štátny geologický ústav Dionýza
        Štúra, <br />
        2016. - 191 s. + 296 s. ISBN 978-80-8174-018-3
      </p>
    </div>
  </section>

  <!--Markup for footer  -->

  <footer class="cus-bg-primary footer-section">
    <div class="container py-5">
      <div class="row">
        <div class="col-12 col-md-3">
          <h2 class="text-1 cus-color-secondary mb-4">Jedinečné zloženie</h2>

          <div>
            <ul class="navbar-nav lh-sm text-white">
              <li class="nav-item">
                <a class="nav-link" href="https://gemerka.sk/?p=denna-davka-zdravia#slide6">Unikátne spojenie magnézia a kalcia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://gemerka.sk/?p=denna-davka-zdravia#slide8">Harmónia tela a mysle</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://gemerka.sk/?p=denna-davka-zdravia#slide40">Vyvážená životospráva</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <h2 class="text-1 cus-color-secondary  mb-4">Pramen</h2>

          <div>
            <ul class="navbar-nav lh-sm text-white">
              <li class="nav-item">
                <a class="nav-link" href="https://gemerka.sk/?p=prirodne-dedicstvo#slide14">Výnimočná krajina</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://gemerka.sk/?p=prirodne-dedicstvo#slide15">Obsah minerálov</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <h2 class="text-1 cus-color-secondary mb-2">Produkty</h2>

          <div>
            <div class="d-flex gap-2">
              <img src="public/images/footer-produkt-1.png" alt="" />
              <img src="public/images/footer-produkt-2.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="d-flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none">
              <path
                d="M14 9.3v2.9h2.6c.2 0 .3.2.3.4l-.4 1.9c0 .1-.2.2-.3.2H14V22h-3v-7.2H9.3c-.2 0-.3-.1-.3-.3v-1.9c0-.2.1-.3.3-.3H11V9c0-1.7 1.3-3 3-3h2.7c.2 0 .3.1.3.3v2.4c0 .2-.1.3-.3.3h-2.4c-.2 0-.3.1-.3.3Z"
                stroke="#1abbee" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"></path>
              <path d="M15 22H9c-5 0-7-2-7-7V9c0-5 2-7 7-7h6c5 0 7 2 7 7v6c0 5-2 7-7 7Z" stroke="#1abbee"
                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none">
              <path d="M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7Z" stroke="#2ccce4"
                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z" stroke="#2ccce4" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M17.636 7h.012" stroke="#2ccce4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              </path>
            </svg>
          </div>

          <ul class="navbar-nav lh-sm text-white">
            <li class="nav-item">
              <a class="nav-link" href="https://gemerka.sk/?p=kontakt">Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <script src="./map.js"></script>
  <script src="./typeahead.js" defer></script>
</body>

</html>